# Symfony Constraints

[![Php version](https://img.shields.io/badge/Symfony-4-red.svg)](https://symfony.com/4)

symfony-constraints contient un ensemble de contraintes de validation pour Symfony 4.

La librairie est compatible uniquement avec `Symfony 4`.

### Contraintes

- `Latitude` Permet de valider une latitude. La latitude doit être comprise en -90deg et 90deg.

        use Dbout\Validator\Constraints as DboAssert;
        
        /**
         * @DboAssert\Latitude()
         */
        private $latitude;

- `Longitude` Permet de valider une longitude. La longitude doit être comprise en -180deg et 180deg.

        use Dbout\Validator\Constraints as DboAssert;
        
        /**
         * @DboAssert\Longitude()
         */
        private $longitude;

- `NoHtml` Permet de valider une chaine ne contenant pas de code html.

        use Dbout\Validator\Constraints as DboAssert;
        
        /**
         * @DboAssert\NoHtml()
         */
        private $description;
        

- `Username` Permet de valider un pseudo qui doit être compris entre 3 et 25 caractères et ne contenir que des letters, des chiffres ou _.

        use Dbout\Validator\Constraints as DboAssert;
        
        /**
         * @DboAssert\Username(message="Le pseudo doit être compris entre 3 et 25 caractères et non doit contenir aucun caractères spécial")
         */
        private $username;

- `UniqueEntity` Permet de valider l'unicité d'une entitée selon une propriéte. Cette contrainte est similaire à la contraite `UniqueEntity` de Doctrine, à la seule différence que cette contrainte peut-être vérifier à l'extérieur d'un formulaire par le service `ValidatorInterface`.
 
         use Dbout\Validator\Constraints as DboAssert;
         
         /**
          * @DboAssert\UniqueEntity(message="Un compte existe déjà avec cette adresse email.")
          */
         private $email;
 
    L'utilisation de cette contrainte nécessite l'injection du service `@doctrine.orm.entity_manager`.

       services :
            
            ....
        
            Dbout\Validator\Constraints\UniqueEntityValidator:
               arguments: ['@doctrine.orm.entity_manager']
               tags:
               - { name: validator.constraint_validator }
