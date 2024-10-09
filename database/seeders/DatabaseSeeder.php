<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\User;
use App\Models\TypeProfil;
use App\Models\Vaccin;
use App\Models\Age;
use App\Models\RendezVous;
use App\Models\Appartenir;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        TypeProfil::insert([
            [
                'label' => 'Piediatre',
            ],
            [
                'label' => 'Parent',
            ]
        ]);

        User::insert([
            [
                'nom' => 'IMALO',
                'prenom' => 'Bertrand',
                'email' => 'b.imalo@gmail.com',
                'telephone' => '0768486589',
                'numero_secu' => '123456789123456',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '147569875412',
                'adresse' => '150 Rue du Pérou',
                'ville' => 'Montpellier',
                'code_postal' => '34000',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'DUPONT',
                'prenom' => 'Jean',
                'email' => 'j.dupont@gmail.com',
                'telephone' => '0761234567',
                'numero_secu' => '987654321987654',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '123456789123',
                'adresse' => '10 Avenue de la République',
                'ville' => 'Paris',
                'code_postal' => '75001',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'MARTIN',
                'prenom' => 'Sophie',
                'email' => 's.martin@gmail.com',
                'telephone' => '0762345678',
                'numero_secu' => '135792468135792',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '20 Rue de Lyon',
                'ville' => 'Lyon',
                'code_postal' => '69001',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'LECLERC',
                'prenom' => 'Luc',
                'email' => 'l.leclerc@gmail.com',
                'telephone' => '0763456789',
                'numero_secu' => '246813579246813',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '147258369123',
                'adresse' => '30 Boulevard de Strasbourg',
                'ville' => 'Strasbourg',
                'code_postal' => '67000',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'GARCIA',
                'prenom' => 'Carlos',
                'email' => 'c.garcia@gmail.com',
                'telephone' => '0764567890',
                'numero_secu' => '135135135135135',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '40 Rue de Nice',
                'ville' => 'Nice',
                'code_postal' => '06000',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'BENOIT',
                'prenom' => 'Clara',
                'email' => 'c.benoit@gmail.com',
                'telephone' => '0765678901',
                'numero_secu' => '246864248642684',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '369258147456',
                'adresse' => '50 Rue de Marseille',
                'ville' => 'Marseille',
                'code_postal' => '13001',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'FERRAND',
                'prenom' => 'Alice',
                'email' => 'a.ferrand@gmail.com',
                'telephone' => '0766789012',
                'numero_secu' => '753951852753951',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '60 Rue de Bordeaux',
                'ville' => 'Bordeaux',
                'code_postal' => '33000',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'DURAND',
                'prenom' => 'Julien',
                'email' => 'j.durand@gmail.com',
                'telephone' => '0767890123',
                'numero_secu' => '852963741852963',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '321654987654',
                'adresse' => '70 Rue de Lille',
                'ville' => 'Lille',
                'code_postal' => '59000',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'FOURNIER',
                'prenom' => 'Emilie',
                'email' => 'e.fournier@gmail.com',
                'telephone' => '0768901234',
                'numero_secu' => '159753258159753',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '80 Rue de Toulouse',
                'ville' => 'Toulouse',
                'code_postal' => '31000',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'MERCIER',
                'prenom' => 'Philippe',
                'email' => 'p.mercier@gmail.com',
                'telephone' => '0769012345',
                'numero_secu' => '753159486357159',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '654789321321',
                'adresse' => '90 Rue de Nantes',
                'ville' => 'Nantes',
                'code_postal' => '44000',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'LEROY',
                'prenom' => 'Sonia',
                'email' => 's.leroy@gmail.com',
                'telephone' => '0770123456',
                'numero_secu' => '951753159753951',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '100 Rue de Marseille',
                'ville' => 'Marseille',
                'code_postal' => '13002',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'LAVOIE',
                'prenom' => 'Nicolas',
                'email' => 'n.lavoie@gmail.com',
                'telephone' => '0771234567',
                'numero_secu' => '258456789654123',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '321789654147',
                'adresse' => '110 Rue de Reims',
                'ville' => 'Reims',
                'code_postal' => '51100',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'ROBIN',
                'prenom' => 'Céline',
                'email' => 'c.robin@gmail.com',
                'telephone' => '0772345678',
                'numero_secu' => '369159753951753',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '120 Rue de Strasbourg',
                'ville' => 'Strasbourg',
                'code_postal' => '67001',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'CARRIERE',
                'prenom' => 'Marc',
                'email' => 'm.carriere@gmail.com',
                'telephone' => '0773456789',
                'numero_secu' => '456123789456123',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '123456789456',
                'adresse' => '130 Rue de Dijon',
                'ville' => 'Dijon',
                'code_postal' => '21000',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'GIRARD',
                'prenom' => 'Anne',
                'email' => 'a.girard@gmail.com',
                'telephone' => '0774567890',
                'numero_secu' => '159357258456753',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '140 Rue de Clermont',
                'ville' => 'Clermont-Ferrand',
                'code_postal' => '63000',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'BRUNET',
                'prenom' => 'Victor',
                'email' => 'v.brunet@gmail.com',
                'telephone' => '0775678901',
                'numero_secu' => '753159852369147',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '654123789456',
                'adresse' => '150 Rue de Metz',
                'ville' => 'Metz',
                'code_postal' => '57000',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'DUPUIS',
                'prenom' => 'Isabelle',
                'email' => 'i.dupuis@gmail.com',
                'telephone' => '0776789012',
                'numero_secu' => '159753486123753',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '160 Rue de Caen',
                'ville' => 'Caen',
                'code_postal' => '14000',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'NICOLE',
                'prenom' => 'Marc',
                'email' => 'm.nicole@gmail.com',
                'telephone' => '0777890123',
                'numero_secu' => '369258147951357',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '963852741258',
                'adresse' => '170 Rue de Nancy',
                'ville' => 'Nancy',
                'code_postal' => '54000',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'CARON',
                'prenom' => 'Amandine',
                'email' => 'a.caron@gmail.com',
                'telephone' => '0778901234',
                'numero_secu' => '741852963147258',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '180 Rue de Lille',
                'ville' => 'Lille',
                'code_postal' => '59001',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'MARCHAND',
                'prenom' => 'Bernard',
                'email' => 'b.marchand@gmail.com',
                'telephone' => '0729012345',
                'numero_secu' => '852147369159753',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '159753468256',
                'adresse' => '190 Rue de Bordeaux',
                'ville' => 'Bordeaux',
                'code_postal' => '33001',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'HENRY',
                'prenom' => 'Elodie',
                'email' => 'e.henry@gmail.com',
                'telephone' => '0780123956',
                'numero_secu' => '357951753369258',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '200 Rue de Rouen',
                'ville' => 'Rouen',
                'code_postal' => '76000',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'ROUX',
                'prenom' => 'Yann',
                'email' => 'y.roux@gmail.com',
                'telephone' => '0781234567',
                'numero_secu' => '753456789123456',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '258963147852',
                'adresse' => '210 Rue de Tours',
                'ville' => 'Tours',
                'code_postal' => '37000',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'VERNIER',
                'prenom' => 'Nathalie',
                'email' => 'n.vernier@gmail.com',
                'telephone' => '0712341678',
                'numero_secu' => '147258369753951',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '220 Rue de Saint-Etienne',
                'ville' => 'Saint-Etienne',
                'code_postal' => '42000',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'LAPORTE',
                'prenom' => 'Gilles',
                'email' => 'g.laporte@gmail.com',
                'telephone' => '0783456789',
                'numero_secu' => '789456123369258',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '654123987123',
                'adresse' => '230 Rue de Ajaccio',
                'ville' => 'Ajaccio',
                'code_postal' => '20000',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'MARTINEZ',
                'prenom' => 'Alain',
                'email' => 'a.martinez@gmail.com',
                'telephone' => '0782567890',
                'numero_secu' => '951258753147258',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '240 Rue de La Rochelle',
                'ville' => 'La Rochelle',
                'code_postal' => '17000',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'KASMI',
                'prenom' => 'Samira',
                'email' => 's.kasmi@gmail.com',
                'telephone' => '0782678901',
                'numero_secu' => '258951456789123',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '321654987159',
                'adresse' => '250 Rue de Vannes',
                'ville' => 'Vannes',
                'code_postal' => '56000',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'COLLET',
                'prenom' => 'Yasmine',
                'email' => 'y.collet@gmail.com',
                'telephone' => '0786789012',
                'numero_secu' => '789654123852963',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '260 Rue de Poitiers',
                'ville' => 'Poitiers',
                'code_postal' => '86000',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'BELLOUARD',
                'prenom' => 'Jean-Pierre',
                'email' => 'jp.bellouard@gmail.com',
                'telephone' => '0687896123',
                'numero_secu' => '951753258456789',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '123789456321',
                'adresse' => '270 Rue de Nevers',
                'ville' => 'Nevers',
                'code_postal' => '58000',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'SALIMI',
                'prenom' => 'Fatima',
                'email' => 'f.salim@gmail.com',
                'telephone' => '0788901234',
                'numero_secu' => '456789123456789',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '280 Rue de Chambéry',
                'ville' => 'Chambéry',
                'code_postal' => '73000',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'BAUER',
                'prenom' => 'Christophe',
                'email' => 'c.bauer@gmail.com',
                'telephone' => '0789019345',
                'numero_secu' => '789456123456789',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '321659987654',
                'adresse' => '290 Rue de La Rochelle',
                'ville' => 'La Rochelle',
                'code_postal' => '17001',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'BENSOUSSAN',
                'prenom' => 'Khaled',
                'email' => 'k.bensoussan@gmail.com',
                'telephone' => '0780123456',
                'numero_secu' => '951753864258741',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '300 Rue de Saint-Denis',
                'ville' => 'Saint-Denis',
                'code_postal' => '93200',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'TCHAKOUNTE',
                'prenom' => 'Didier',
                'email' => 'd.tchakounte@gmail.com',
                'telephone' => '0781237867',
                'numero_secu' => '753159456951456',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '654123789789',
                'adresse' => '310 Rue de Clermont',
                'ville' => 'Clermont-Ferrand',
                'code_postal' => '63001',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'MADANI',
                'prenom' => 'Amine',
                'email' => 'a.madani@gmail.com',
                'telephone' => '0782345678',
                'numero_secu' => '159753456123789',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '320 Rue de Amiens',
                'ville' => 'Amiens',
                'code_postal' => '80000',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'KABLA',
                'prenom' => 'Sara',
                'email' => 's.kabla@gmail.com',
                'telephone' => '0753456781',
                'numero_secu' => '456123789951753',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '159753147258',
                'adresse' => '330 Rue de Saint-Laurent',
                'ville' => 'Saint-Laurent',
                'code_postal' => '59002',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'NAGUET',
                'prenom' => 'Jean-Claude',
                'email' => 'jc.naguet@gmail.com',
                'telephone' => '0784567890',
                'numero_secu' => '321654987456123',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '340 Rue de La Rochelle',
                'ville' => 'La Rochelle',
                'code_postal' => '17002',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'DIOP',
                'prenom' => 'Moussa',
                'email' => 'm.diop@gmail.com',
                'telephone' => '0786789025',
                'numero_secu' => '654789123654789',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '963852741963',
                'adresse' => '350 Rue de Calais',
                'ville' => 'Calais',
                'code_postal' => '62100',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'TCHOUA',
                'prenom' => 'Nina',
                'email' => 'n.tchoua@gmail.com',
                'telephone' => '0787890123',
                'numero_secu' => '456123789654123',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '360 Rue de Mulhouse',
                'ville' => 'Mulhouse',
                'code_postal' => '68100',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'MALIK',
                'prenom' => 'Zara',
                'email' => 'z.malik@gmail.com',
                'telephone' => '0788001234',
                'numero_secu' => '963147258369258',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '147852369654',
                'adresse' => '370 Rue de Clermont',
                'ville' => 'Clermont-Ferrand',
                'code_postal' => '63002',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'LYS',
                'prenom' => 'Fatou',
                'email' => 'f.lys@gmail.com',
                'telephone' => '0789012345',
                'numero_secu' => '258741369852159',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '380 Rue de La Rochelle',
                'ville' => 'La Rochelle',
                'code_postal' => '17003',
                'type_profil_id' => 2,
            ],
            [
                'nom' => 'SELEJIN',
                'prenom' => 'Irina',
                'email' => 'i.selejin@gmail.com',
                'telephone' => '0785678901',
                'numero_secu' => '159357486258741',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => '789654123789',
                'adresse' => '390 Rue de Saint-Laurent',
                'ville' => 'Saint-Laurent',
                'code_postal' => '59003',
                'type_profil_id' => 1,
            ],
            [
                'nom' => 'NANA',
                'prenom' => 'Marouane',
                'email' => 'm.nana@gmail.com',
                'telephone' => '0786789073',
                'numero_secu' => '456123789123456',
                'password' => Hash::make('vaxGuard13*'),
                'numero_rpps' => null, // type_profil_id = 2
                'adresse' => '400 Rue de Paris',
                'ville' => 'Paris',
                'code_postal' => '75002',
                'type_profil_id' => 2,
            ],
        ]);

        Patient::insert([
            [
                'nom' => 'ESTEVE',
                'prenom' => 'Maxime',
                'numero_secu' => '654321657897452',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'DUPONT',
                'prenom' => 'Alice',
                'numero_secu' => '123456789012345',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'MARTIN',
                'prenom' => 'Lucas',
                'numero_secu' => '987654321098765',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'LEROY',
                'prenom' => 'Chloé',
                'numero_secu' => '123123123123123',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'GARNIER',
                'prenom' => 'Julien',
                'numero_secu' => '321321321321321',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'LEGRAND',
                'prenom' => 'Sophie',
                'numero_secu' => '654654654654654',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'CLOUET',
                'prenom' => 'Gabriel',
                'numero_secu' => '789789789789789',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'BARRE',
                'prenom' => 'Camille',
                'numero_secu' => '159159159159159',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'BRUN',
                'prenom' => 'Matthieu',
                'numero_secu' => '753753753753753',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'REMY',
                'prenom' => 'Pauline',
                'numero_secu' => '852852852852852',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'COLLET',
                'prenom' => 'Léa',
                'numero_secu' => '456456456456456',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'BOSCH',
                'prenom' => 'Mélanie',
                'numero_secu' => '321654987123654',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'DUPUIS',
                'prenom' => 'Romain',
                'numero_secu' => '147258369258147',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'ROUSSEAU',
                'prenom' => 'Émilie',
                'numero_secu' => '963258741789456',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'MICHEL',
                'prenom' => 'Simon',
                'numero_secu' => '258369147258369',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'NOEL',
                'prenom' => 'Alice',
                'numero_secu' => '321321654987321',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'FERNANDES',
                'prenom' => 'Hugo',
                'numero_secu' => '654987123321654',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'BRION',
                'prenom' => 'Inès',
                'numero_secu' => '987456123654789',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'BESSON',
                'prenom' => 'Quentin',
                'numero_secu' => '654321456987123',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'POIRIER',
                'prenom' => 'Sacha',
                'numero_secu' => '987654321123654',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'PERROT',
                'prenom' => 'Océane',
                'numero_secu' => '123456789654321',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'WILSON',
                'prenom' => 'Gabin',
                'numero_secu' => '456987123321789',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'DURAND',
                'prenom' => 'Anouk',
                'numero_secu' => '258159456987456',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'LAMBERT',
                'prenom' => 'Valentin',
                'numero_secu' => '123789456321456',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'GERARD',
                'prenom' => 'Héloïse',
                'numero_secu' => '789321654654123',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'MANGIN',
                'prenom' => 'Marin',
                'numero_secu' => '456789123258456',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'PEREZ',
                'prenom' => 'Clara',
                'numero_secu' => '789654321147852',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'DOUSSET',
                'prenom' => 'Alice',
                'numero_secu' => '321321321456789',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'GOULET',
                'prenom' => 'Louis',
                'numero_secu' => '963159753258951',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'JACQUOT',
                'prenom' => 'Juliette',
                'numero_secu' => '456987123123654',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'PAUL',
                'prenom' => 'Tom',
                'numero_secu' => '654987123654123',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'LOUIS',
                'prenom' => 'Elsa',
                'numero_secu' => '321654987456123',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'COLOMB',
                'prenom' => 'Bastien',
                'numero_secu' => '951753159852456',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'SCHMITT',
                'prenom' => 'Chloé',
                'numero_secu' => '654321789123456',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'SAINT-MARTIN',
                'prenom' => 'Nicolas',
                'numero_secu' => '789456123321654',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
            [
                'nom' => 'DOUCET',
                'prenom' => 'Zoé',
                'numero_secu' => '963147258258369',
                'date_naissance' => Carbon::now()->subMonths(rand(2, 18))->toDateString(),
            ],
        ]);

        Vaccin::insert([
            [
                'label' => 'Diphtérie',
            ],
            [
                'label' => 'Tétanos',
            ],
            [
                'label' => 'Coqueluche',
            ],
            [
                'label' => 'Poliomyélite',
            ],
            [
                'label' => 'Rougeole',
            ],
            [
                'label' => 'Oreillons',
            ],
            [
                'label' => 'Rubéole',
            ],
            [
                'label' => 'Hépatite B',
            ],
            [
                'label' => 'Méningocoque C',
            ],
            [
                'label' => 'Pneumocoque',
            ],
            [
                'label' => 'Haemophilus',
            ],
        ]);

        Age::insert([
            [
                'mois' => 2,
                'vaccin_id' => 1
            ],
            [
                'mois' => 4,
                'vaccin_id' => 1
            ],
            [
                'mois' => 11,
                'vaccin_id' => 1
            ],
            [
                'mois' => 2,
                'vaccin_id' => 2
            ],
            [
                'mois' => 4,
                'vaccin_id' => 2
            ],
            [
                'mois' => 11,
                'vaccin_id' => 2
            ],
            [
                'mois' => 2,
                'vaccin_id' => 3
            ],
            [
                'mois' => 4,
                'vaccin_id' => 3
            ],
            [
                'mois' => 11,
                'vaccin_id' => 3
            ],
            [
                'mois' => 2,
                'vaccin_id' => 4
            ],
            [
                'mois' => 4,
                'vaccin_id' => 4
            ],
            [
                'mois' => 11,
                'vaccin_id' => 4
            ],
            [
                'mois' => 12,
                'vaccin_id' => 5
            ],
            [
                'mois' => 16,
                'vaccin_id' => 5
            ],
            [
                'mois' => 18,
                'vaccin_id' => 5
            ],
            [
                'mois' => 12,
                'vaccin_id' => 6
            ],
            [
                'mois' => 16,
                'vaccin_id' => 6
            ],
            [
                'mois' => 18,
                'vaccin_id' => 6
            ],
            [
                'mois' => 12,
                'vaccin_id' => 7
            ],
            [
                'mois' => 16,
                'vaccin_id' => 7
            ],
            [
                'mois' => 18,
                'vaccin_id' => 7
            ],
            [
                'mois' => 2,
                'vaccin_id' => 8
            ],
            [
                'mois' => 4,
                'vaccin_id' => 8
            ],
            [
                'mois' => 11,
                'vaccin_id' => 8
            ],
            [
                'mois' => 5,
                'vaccin_id' => 9
            ],
            [
                'mois' => 12,
                'vaccin_id' => 9
            ],
            [
                'mois' => 2,
                'vaccin_id' => 10
            ],
            [
                'mois' => 4,
                'vaccin_id' => 10
            ],
            [
                'mois' => 11,
                'vaccin_id' => 10
            ],
            [
                'mois' => 2,
                'vaccin_id' => 11
            ],
            [
                'mois' => 4,
                'vaccin_id' => 11
            ],
            [
                'mois' => 11,
                'vaccin_id' => 11
            ],
        ]);

        RendezVous::insert([
            [
                'date_rdv' => Carbon::create(2024, 10, 11, 14, 30, 0),  // Date RDV au 12 octobre 2024, 14h30
                'user_id' => 1,
                'patient_id' => 1,
                'vaccin_id' => 1
            ],
            [
                'date_rdv' => Carbon::create(2024, 10, 11, 14, 30, 0),  // Date RDV au 12 octobre 2024, 14h30
                'user_id' => 1,
                'patient_id' => 2,
                'vaccin_id' => 7
            ],
            [
                'date_rdv' => Carbon::create(2024, 10, 11, 14, 30, 0),  // Date RDV au 12 octobre 2024, 14h30
                'user_id' => 1,
                'patient_id' => 6,
                'vaccin_id' => 2
            ],
            [
                'date_rdv' => Carbon::create(2024, 10, 11, 14, 30, 0),  // Date RDV au 12 octobre 2024, 14h30
                'user_id' => 1,
                'patient_id' => 5,
                'vaccin_id' => 1
            ],
            [
                'date_rdv' => Carbon::create(2024, 10, 11, 14, 30, 0),  // Date RDV au 12 octobre 2024, 14h30
                'user_id' => 1,
                'patient_id' => 14,
                'vaccin_id' => 4
            ],
        ]);

        Appartenir::insert([
            [
                'user_id' => 1,
                'patient_id' => 1
            ],
            [
                'user_id' => 2,
                'patient_id' => 1
            ],
            [
                'user_id' => 1,
                'patient_id' => 2
            ],
            [
                'user_id' => 4,
                'patient_id' => 2
            ],
            [
                'user_id' => 1,
                'patient_id' => 3
            ],
            [
                'user_id' => 6,
                'patient_id' => 3
            ],
            [
                'user_id' => 1,
                'patient_id' => 4
            ],
            [
                'user_id' => 8,
                'patient_id' => 4
            ],
            [
                'user_id' => 1,
                'patient_id' => 5
            ],
            [
                'user_id' => 10,
                'patient_id' => 5
            ],
            [
                'user_id' => 1,
                'patient_id' => 6
            ],
            [
                'user_id' => 12,
                'patient_id' => 6
            ],
            [
                'user_id' => 1,
                'patient_id' => 14
            ],
            [
                'user_id' => 14,
                'patient_id' => 14
            ],
        ]);
    }
}
