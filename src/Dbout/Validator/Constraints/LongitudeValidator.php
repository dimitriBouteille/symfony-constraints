<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\{Constraint, ConstraintValidator};

/**
 * Class LongitudeValidator
 *
 * @package Dbout\Validator\Constraints
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2020 Dimitri BOUTEILLE
 */
class LongitudeValidator extends ConstraintValidator
{

    /**
     * @param mixed $longitude
     * @param Constraint $constraint
     */
    public function validate($longitude, Constraint $constraint)
    {
        if($longitude < $constraint->min || $longitude > $constraint->max) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{min}}', $constraint->min)
                ->setParameter('{{max}}', $constraint->max)
                ->addViolation();
        }
    }

}
