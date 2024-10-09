<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'numero_secu' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:10'],
            'ville' => ['required', 'string', 'max:255'],
            'code_postal' => ['required', 'string', 'digits:5'],
            'adresse' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'numero_secu'=>$request->numero_secu,
            'telephone'=>$request->telephone,
            'ville'=>$request->ville,
            'code_postal'=>$request->code_postal,
            'adresse'=>$request->adresse,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);


        if ($user->role === 'Pediatre') {
            return redirect()->route('dashboarddoctor');
        }

        return redirect(route('dashboarddoctor', absolute: false));
    }
}
