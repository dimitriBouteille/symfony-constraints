<?php

namespace Dbout\SfConstraints\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Class PasswordValidator
 *
 * @package Dbout\SfConstraints\Validator\Constraints
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2020 Dimitri BOUTEILLE
 */
class PasswordValidator extends ConstraintValidator
{

    /**
     * @param mixed $value
     * @param Constraint $constraint
     */
    public function validate($value, Constraint $constraint): void
    {
        $length = strlen($value);
        $matchNumber = preg_match_all('#\\d#', $value);

        if(empty($value)) {
            return;
        }

        if(($constraint->minLength !== null && $length < $constraint->minLength) ||
            ($constraint->maxLength !== null && $length > $constraint->maxLength) ||
            ($constraint->minNumber !== null && $matchNumber < $constraint->minNumber) ||
            ($constraint->maxNumber !== null && $matchNumber > $constraint->maxNumber)
        ) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{minNumber}}', $constraint->minNumber)
                ->setParameter('{{maxNumber}}', $constraint->maxNumber)
                ->setParameter('{{minLength}}', $constraint->minLength)
                ->setParameter('{{maxLength}}', $constraint->maxLength)
                ->addViolation();
        }

    }

}