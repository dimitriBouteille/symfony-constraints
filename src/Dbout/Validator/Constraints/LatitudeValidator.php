<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\{Constraint, ConstraintValidator};

/**
 * Class LatitudeValidator
 * Permet de valider une latitude
 *
 * @package     Dbout\Validator\Constraints;
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2018 Dimitri BOUTEILLE
 */
class LatitudeValidator extends ConstraintValidator {

    /**
     * Function validate
     *
     * @param mixed                                   $latitude
     * @param \Symfony\Component\Validator\Constraint $constraint
     */
    public function validate($latitude, Constraint $constraint) {

        if($latitude < $constraint->min || $latitude > $constraint->max) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{min}}', $constraint->min)
                ->setParameter('{{max}}', $constraint->max)
                ->addViolation();
        }
    }

}
