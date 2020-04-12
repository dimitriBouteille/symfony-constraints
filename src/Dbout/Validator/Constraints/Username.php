<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class Username
 * The pseudo must be between 3 and 25 characters and contain only letters, numbers or _
 *
 * @Annotation
 * @package Dbout\Validator\Constraints
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2020 Dimitri BOUTEILLE
 */
class Username extends Constraint
{

    /**
     * @var string Error message
     */
    public $message = 'Le pseudo n\'est pas valide';

    /**
     * @var int Min length
     */
    public $min = 3;

    /**
     * @var int Max length
     */
    public $max = 25;

}