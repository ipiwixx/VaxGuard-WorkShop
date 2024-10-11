# Vaxguard

## Description
Vaxguard est une application web permettant de gérer les carnets de vaccination et de santé des enfants. Le projet inclut une interface pour les pédiatres afin de suivre les informations médicales de leurs patients et d'envoyer des rappels automatisés aux parents.

Ce projet a été réalisé par **Amyne El Aichouni**, **Antoine Espinoza**, **Anthony Girard**, et **Yassine Laasal**, étudiants en première année de Master EISI à l'EPSI Montpellier.

## Prérequis
Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

### Composer :
Composer est un gestionnaire de dépendances PHP qui permet d’installer et de gérer les bibliothèques utilisées dans le projet.

#### Vérifier si Composer est installé :
```bash
composer -V
```
Si Composer est installé, la version sera affichée. Si ce n’est pas le cas, suivez les étapes ci-dessous pour l’installer :
- Allez sur la page de téléchargement du site web de Composer.
- Suivez les instructions pour installer Composer sur votre système (Windows, Mac, ou Linux).
- Vérifiez l'installation en exécutant la commande `composer -V` à nouveau.

### PHP 8.2 ou supérieur :
PHP est le langage de programmation utilisé pour ce projet.

#### Vérifier si PHP est installé :
```bash
php -v
```
Si PHP est installé, la version de PHP sera affichée. Si la version affichée est inférieure à 8.2, ou si PHP n’est pas installé, suivez les étapes suivantes :
- Allez sur [PHP.net](https://php.net)
- Téléchargez la version de PHP correspondant à votre système d'exploitation.
- Suivez les instructions d'installation.
- **Remarque :** Assurez-vous que le chemin vers le dossier `php` est ajouté à vos variables d'environnement (PATH) pour pouvoir utiliser PHP depuis n'importe quel répertoire.

Sur Windows, vous pouvez également installer PHP via des outils comme XAMPP, WAMP ou MAMP qui incluent PHP par défaut.

### MySQL
MySQL est un système de gestion de base de données relationnelle utilisé pour stocker les informations du projet.

#### Vérifier si MySQL est installé :
```bash
mysql --version
```
Si MySQL est installé, la version sera affichée. Si ce n’est pas le cas, suivez les instructions ci-dessous pour l’installer :
- Allez sur [MySQL.com](https://mysql.com) pour télécharger l’installateur.
- Suivez les étapes d’installation pour configurer MySQL sur votre machine.
- Une fois l’installation terminée, lancez le service MySQL et créez une base de données nommée `vaxguard_db`.

**Alternative :** Vous pouvez également utiliser l'outil phpMyAdmin inclus dans les serveurs locaux (XAMPP, WAMP, MAMP).

### Serveur Web Local (XAMPP/WAMP/MAMP)
Un serveur web local est nécessaire pour héberger l’application Laravel en local.

#### Vérifier si un serveur local est installé :
- Ouvrez votre navigateur et tapez l’URL suivante : `http://localhost/`.
- Si une page d’accueil de XAMPP, WAMP ou MAMP s’affiche, cela signifie qu’un serveur local est déjà installé et fonctionnel.

#### Installation d’un serveur Web local :
- Choisissez un des serveurs suivants en fonction de votre système d'exploitation :
  - XAMPP : Disponible sur Windows, Mac et Linux.
  - WAMP : Disponible uniquement sur Windows.
  - MAMP : Disponible sur Mac et Windows.
- Téléchargez et installez le serveur local de votre choix.
- Lancez le serveur et assurez-vous que les services Apache et MySQL sont en cours d'exécution.

### Node.js :
Node.js est nécessaire pour compiler le fichier app.css avec Tailwind CSS et app.js via Vite.

#### Vérifier si Node.js est installé :
```bash
node -v
```
Si Node.js est installé, la version sera affichée. Si ce n’est pas le cas, suivez les étapes suivantes pour l’installer :
- Allez sur le site [Node.js](https://nodejs.org/) et téléchargez la version recommandée pour votre système d'exploitation.
- Suivez les instructions d'installation.
- Vérifiez l'installation en exécutant `node -v` à nouveau pour vous assurer que Node.js est bien installé.

Avec ces prérequis installés et configurés, vous êtes prêt à installer et lancer le projet Vaxguard sur votre machine locale !

## Installation

1. **Télécharger et Extraire le Projet**  
   Téléchargez le `.zip` du projet depuis GitHub ou récupérez-le dans le dossier partagé, puis extrayez-le dans le répertoire souhaité sur votre machine.

2. **Configuration de l’Environnement**  
   Ouvrez un terminal et accédez au répertoire du projet extrait, puis suivez les étapes ci-dessous :

   **Installation des Dépendances :**  
   Exécutez la commande suivante pour installer toutes les dépendances Laravel :
   ```bash
   composer install
   ```

   **Copie du Fichier de Configuration :**  
   Créez une copie du fichier `.env.example` et renommez-la en `.env` :
   ```bash
   cp .env.example .env
   ```

   **Génération de la Clé d’Application :**  
   Générez la clé d’application Laravel nécessaire au fonctionnement du projet :
   ```bash
   php artisan key:generate
   ```

   **Configuration de la Base de Données :**  
   Ouvrez le fichier `.env` dans un éditeur de texte (ex: VS Code, Notepad++) et configurez les informations de connexion à votre base de données MySQL locale :
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=vaxguard_db
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```
   Remarque : Assurez-vous que la base de données `vaxguard_db` est bien créée dans MySQL. Si ce n’est pas le cas, créez-la manuellement ou via un outil comme phpMyAdmin.

3. **Migration de la Base de Données**  
   Une fois la configuration terminée, exécutez les migrations pour créer les tables nécessaires dans la base de données :
   ```bash
   php artisan migrate
   ```

4. **Seeding de la Base de Données**  
   Remplissez la base de données avec des données d’exemple (patients, familles, utilisateurs, etc.) en exécutant la commande suivante :
   ```bash
   php artisan db:seed
   ```

## Lancement de l’Application
Pour lancer le serveur de développement Laravel, utilisez la commande suivante :
```bash
php artisan serve
```

Dans un autre terminal, exécutez la commande suivante pour compiler les fichiers CSS et JavaScript :
```bash
npm run dev
```

Ces deux commandes doivent être lancées simultanément pour que l'application fonctionne correctement.
L'application démarrera et sera alors accessible sur l'url `http://127.0.0.1:8000/` de votre navigateur.

## Structure du Projet
- `app/` : Contient les modèles, contrôleurs et logiques métier de l’application.
- `resources/views/` : Contient les vues (templates Blade) de l’application.
- `routes/web.php` : Contient les routes pour la navigation de l’application.
- `database/migrations/` : Contient les scripts de migration pour la base de données.

## Dépannage

1. **Erreurs lors de la Migration**  
   Si vous rencontrez des erreurs lors de la migration, assurez-vous que votre configuration `.env` est correcte et que la base de données `vaxguard_db` est bien créée.

2. **Problèmes de Connexion à la Base de Données**  
   Vérifiez que le nom de la base de données, l’utilisateur et le mot de passe spécifiés dans le fichier `.env` correspondent à votre configuration locale.

3. **Problèmes de Serveur Web**  
   Si le serveur ne démarre pas, assurez-vous que le port 8000 est disponible et non utilisé par un autre service.

## Contribuer au Projet
Toute contribution est la bienvenue ! Pour contribuer :
- Forkez le projet.
- Créez une branche avec vos modifications :
  ```bash
  git checkout -b feature/modification
  ```
- Commitez vos changements :
  ```bash
  git commit -m 'Add some feature'
  ```
- Soumettez une pull request sur le dépôt principal.

## License
Vaxguard est sous licence MIT. Veuillez consulter le fichier LICENSE pour plus d'informations.
