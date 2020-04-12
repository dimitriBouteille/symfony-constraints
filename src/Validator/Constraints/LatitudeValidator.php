<?php

namespace Dbout\SfConstraints\Validator\Constraints;

use Symfony\Component\Validator\{Constraint, ConstraintValidator};

/**
 * Class LatitudeValidator
 *
 * @package Dbout\SfConstraints\Validator\Constraints
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2020 Dimitri BOUTEILLE
 */
class LatitudeValidator extends ConstraintValidator
{

    /**
     * @param mixed $latitude
     * @param Constraint $constraint
     */
    public function validate($latitude, Constraint $constraint)
    {
        if($latitude < $constraint->min || $latitude > $constraint->max) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{min}}', $constraint->min)
                ->setParameter('{{max}}', $constraint->max)
                ->addViolation();
        }
    }

}
