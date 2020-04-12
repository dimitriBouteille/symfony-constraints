<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class Latitude
 *
 * @Annotation
 * @package Dbout\Validator\Constraints
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2020 Dimitri BOUTEILLE
 */
class Latitude extends Constraint
{

    /**
     * @var string Error message
     */
    public $message = 'La latitude doit être comprise entre {{min}} et {{max}} degré.';

    /**
     * @var int Min latitude
     */
    public $min = -90;

    /**
     * @var int Max latitude
     */
    public $max = 90;

}
