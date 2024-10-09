<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Informations du profil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Mettre à jour les informations utilisateurs") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('nom', $user->nom)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>


        <div class="mt-4">
            <x-input-label for="prenom" :value="__('Prénom')" />
            <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom', $user->prenom)" required autocomplete="prenom" />
            <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label for="numero_secu" :value="__('Numéro de Sécurité Sociale')" />
            <x-text-input id="numero_secu" class="block mt-1 w-full" type="text" name="numero_secu" :value="old('numero_secu', $user->numero_secu)" required autocomplete="numero_secu" />
            <x-input-error :messages="$errors->get('numero_secu')" class="mt-2" />
        </div>


        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('L\'adresse email n\'est pas vérifiée') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Cliquez ici pour renvoyer le mail de vérification') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('Un nouveau lien de vérification a été envoyé à l\'adresse email indiquée.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <!-- Téléphone -->
        <div class="mt-4">
            <x-input-label for="telephone" :value="__('Téléphone')" />
            <x-text-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone',$user->telephone)" required autocomplete="telephone" />
            <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
        </div>

        <!-- Adresse -->
        <div class="mt-4">
            <x-input-label for="adresse" :value="__('Adresse')" />
            <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse',$user->adresse)" required autocomplete="adresse" />
            <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
        </div>

        <!-- Code Postal -->
        <div class="mt-4">
            <x-input-label for="code_postal" :value="__('Code Postal')" />
            <x-text-input id="code_postal" class="block mt-1 w-full" type="text" name="code_postal" :value="old('code_postal',$user->code_postal)" required autocomplete="code_postal" />
            <x-input-error :messages="$errors->get('code_postal')" class="mt-2" />
        </div>

        <!-- Ville -->
        <div class="mt-4">
            <x-input-label for="ville" :value="__('Ville')" />
            <x-text-input id="ville" class="block mt-1 w-full" type="text" name="ville" :value="old('ville',$user->ville)" required autocomplete="ville" />
            <x-input-error :messages="$errors->get('ville')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Sauvegarder') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Sauvegarder.') }}</p>
            @endif
        </div>
    </form>
</section>
