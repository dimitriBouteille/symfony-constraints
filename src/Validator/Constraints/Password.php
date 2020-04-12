<?php

namespace Dbout\SfConstraints\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class Password
 *
 * @Annotation
 * @package Dbout\SfConstraints\Validator\Constraints
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2020 Dimitri BOUTEILLE
 */
class Password extends Constraint
{

    /**
     * @var null|int Min password size
     */
    public $minLength = 8;

    /**
     * @var null|int Max password size
     */
    public $maxLength = null;

    /**
     * @var null|int Min number of digits the password must contain to be valid
     */
    public $minNumber = 2;

    /**
     * @var null|int Max number of digits the password must contain to be valid
     */
    public $maxNumber = null;

    /**
     * @var string
     */
    public $message = 'Le mot de passe ne respect pas le bon format.';

}