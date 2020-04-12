<?php

namespace Dbout\SfConstraints\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class Phone
 *
 * @Annotation
 * @package Dbout\SfConstraints\Validator\Constraints
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2020 Dimitri BOUTEILLE
 */
class Phone extends Constraint
{

    /**
     * @var string Error message
     */
    public $message = 'Le numéro n\'est pas valide.';

    /**
     * @var string Possible separation characters
     * @example
     * 00.00.00.00.00
     * 00 00 00 00 00
     * 00-00-00-00-00
     */
    public $separators = ' .-';

}
