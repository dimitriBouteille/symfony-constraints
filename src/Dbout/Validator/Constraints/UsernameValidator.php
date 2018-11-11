<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Class UsernameValidator
 * Le pseudo doit etre compris entre 3 et 25 caracteres et ne contenir que des letters, des chiffres ou _
 *
 * @package     App\Dbout\Validator\Constraints;
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2018 Dimitri BOUTEILLE
 */
class UsernameValidator extends ConstraintValidator {

    /**
     * Function validate
     *
     * @param mixed                                   $value
     * @param \Symfony\Component\Validator\Constraint $constraint
     */
    public function validate($value, Constraint $constraint) {

        $regex = sprintf('#^[a-zA-Z0-9_]{%s,%s}$#', $constraint->min, $constraint->max);

        if(!preg_match($regex, $value)) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }

}
