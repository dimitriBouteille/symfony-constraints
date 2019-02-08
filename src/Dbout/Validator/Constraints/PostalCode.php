<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class PostalCode
 * Permet de valider un code postal au format francais
 * @Annotation
 *
 * @package     Dbout\Validator\Constraints;
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2018 Dimitri BOUTEILLE
 */
class PostalCode extends Constraint {

    /**
     * @var string Message d'erreur
     */
    public $message = 'Le code postal n\'est pas valide.';

}
