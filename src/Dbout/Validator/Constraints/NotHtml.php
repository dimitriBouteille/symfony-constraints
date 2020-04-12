<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class NotHtml
 *
 * @Annotation
 * @package Dbout\Validator\Constraints
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2020 Dimitri BOUTEILLE
 */
class NotHtml extends Constraint
{

    /**
     * @var string Error message
     */
    public $message = 'Le code html n\'est pas autorisé.';

}
