<?php

namespace Dbout\SfConstraints\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class Longitude
 *
 * @Annotation
 * @package Dbout\SfConstraints\Validator\Constraints
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2020 Dimitri BOUTEILLE
 */
class Longitude extends Constraint
{

    /**
     * @var string Error message
     */
    public $message = 'La longitude doit être comprise entre {{min}} et {{max}} degré.';

    /**
     * @var int Min longitude
     */
    public $min = -180;

    /**
     * @var int Max longitude
     */
    public $max = 180;

}
