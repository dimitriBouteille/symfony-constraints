<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class Phone
 * Permet de valider un numero de telephone
 *
 * @package     Dbout\Validator\Constraints;
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2018 Dimitri BOUTEILLE
 */
class Phone extends Constraint {

    /**
     * @var string Message d'erreur, peut avoir la clef {{phone}}.
     */
    public $message = 'Le numéro n\'est pas valide.';

    /**
     * @var string Caracteres de seperation possible
     * @example
     * 00.00.00.00.00
     * 00 00 00 00 00
     * 00-00-00-00-00
     */
    public $separators = ' .-';

}
