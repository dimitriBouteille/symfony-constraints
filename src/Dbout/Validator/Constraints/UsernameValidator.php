<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\{Constraint, ConstraintValidator};

/**
 * Class UsernameValidator
 *
 * @package Dbout\Validator\Constraints
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2020 Dimitri BOUTEILLE
 */
class UsernameValidator extends ConstraintValidator
{

    /**
     * @param mixed $value
     * @param Constraint $constraint
     */
    public function validate($value, Constraint $constraint)
    {
        $regex = sprintf('#^[a-zA-Z0-9_]{%s,%s}$#', $constraint->min, $constraint->max);
        if(!preg_match($regex, $value)) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }

}
