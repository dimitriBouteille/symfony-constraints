<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class Latitude
 * Permet de valider une latitude
 * @Annotation
 * @link https://stackoverflow.com/questions/15965166/what-is-the-maximum-length-of-latitude-and-longitude
 *
 * @package     Dbout\Validator\Constraints;
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2018 Dimitri BOUTEILLE
 */
class Latitude extends Constraint {

    /**
     * @var string Message d'erreur
     */
    public $message = 'La latitude doit être comprise entre {{min}} et {{max}} degré.';

    /**
     * @var int Latitude minimum
     */
    public $min = -90;

    /**
     * @var int Latitude maximum
     */
    public $max = 90;

}
