# PRÉREQUIS POUR L'EXAMEN
## Création d'un projet Symfony 7 test

```bash 
symfony new evaluation-finale-symfony --version=-7.4 -webapp

php bin/console --version
```

## Push du projet symfony test sur repo GitHub

```bash 
cd evaluation-finale-symfony

git add .

git commit -m "Initialisation projet Symfony 7"

git remote add origin https://github.com/Clouddy23/Evaluation_Finale_Symfony.git

git push -u origin main
```
# INSTRUCTIONS EXAMEN
## Repository 
Forkage du repository donné.
Clonage du dépôt sur l'IDE VS Code.

## Dossier projet ``cd evaluation-finale-symfony-mathilde-chauvet``
Installation des dépendances ``composer install``
Configuration de la BDD dans le fichier .env.local 
Création de la BDD ``php bin/console doctrine:database:create``

