<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\{Constraint, ConstraintValidator};

/**
 * Class NotHtmlValidator
 *
 * @package Dbout\Validator\Constraints
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2020 Dimitri BOUTEILLE
 */
class NotHtmlValidator extends ConstraintValidator
{

    /**
     * @param mixed $string
     * @param Constraint $constraint
     */
    public function validate($string, Constraint $constraint)
    {
        if($string != strip_tags($string)) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }

}
