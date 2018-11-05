<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class Longitude
 * Permet de valider une longitude
 * @Annotation
 * @link https://stackoverflow.com/questions/15965166/what-is-the-maximum-length-of-latitude-and-longitude
 *
 * @package     Dbout\Validator\Constraints;
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2018 Dimitri BOUTEILLE
 */
class Longitude extends Constraint {

    /**
     * @var string Message d'erreur
     */
    public $message = 'La longitude doit être comprise entre {{min}} et {{max}} degré.';

    /**
     * @var int Longitude minimum
     */
    public $min = -180;

    /**
     * @var int Longitude maximum
     */
    public $max = 180;

}
