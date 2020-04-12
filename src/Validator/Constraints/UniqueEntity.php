<?php

namespace Dbout\SfConstraints\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class UniqueEntity
 *
 * @Annotation
 * @package Dbout\SfConstraints\Validator\Constraints
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2020 Dimitri BOUTEILLE
 */
class UniqueEntity extends Constraint
{

    /**
     * @var string Error message
     */
    public $message = '';

}