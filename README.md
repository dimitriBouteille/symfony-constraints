# Symfony Constraints

Contient un ensemble de contraintes de validation pour Symfony 4.

### Installation

```bash
composer require dbout/symfony-constraints
```

### Contraintes

- `Latitude` Permet de valider une latitude. La latitude doit être comprise en -90deg et 90deg.
        
        /**
         * @Dbout\Validator\Constraints\Latitude()
         */
        private $latitude;

- `Longitude` Permet de valider une longitude. La longitude doit être comprise en -180deg et 180deg.
        
        /**
         * @Dbout\Validator\Constraints\Longitude()
         */
        private $longitude;

- `NotHtml` Permet de valider une chaine ne contenant pas de code html.
        
        /**
         * @Dbout\Validator\Constraints\NotHtml()
         */
        private $description;
        
- `Password` Permet de valider un mot de passe.
        
        /**
         * @Dbout\Validator\Constraints\Password()
         */
        private $plainPassword;

- `Phone` Permet de valider un numéro de téléphone au format français.
        
        /**
         * @Dbout\Validator\Constraints\Phone()
         */
        private $phone;        

- `Username` Permet de valider un pseudo qui doit être compris entre 3 et 25 caractères et ne contenir que des letters, des chiffres ou _.
        
        /**
         * @Dbout\Validator\Constraints\Username(message="Le pseudo doit être compris entre 3 et 25 caractères et non doit contenir aucun caractères spécial")
         */
        private $username;
        
- `PostalCode` Permet de valider un code postal au format français
        
        /**
         * @Dbout\Validator\Constraints\PostalCode()
         */
        private $postalCode;

- `UniqueEntity` Permet de valider l'unicité d'une entitée selon une propriéte. Cette contrainte est similaire à la contraite `UniqueEntity` de Doctrine, à la seule différence que cette contrainte peut-être vérifier à l'extérieur d'un formulaire par le service `ValidatorInterface`.
          
         /**
          * @Dbout\Validator\Constraints\UniqueEntity(message="Un compte existe déjà avec cette adresse email.")
          */
         private $email;
 
    L'utilisation de cette contrainte nécessite l'injection du service `@doctrine.orm.entity_manager`.

       services :
            
            ....
        
            Dbout\Validator\Constraints\UniqueEntityValidator:
               arguments: ['@doctrine.orm.entity_manager']
               tags:
               - { name: validator.constraint_validator }
