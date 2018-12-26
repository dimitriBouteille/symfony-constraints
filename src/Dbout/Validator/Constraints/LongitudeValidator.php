<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\{Constraint, ConstraintValidator};

/**
 * Class LongitudeValidator
 * Permet de valider une longitude
 *
 * @package     Dbout\Validator\Constraints;
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2018 Dimitri BOUTEILLE
 */
class LongitudeValidator extends ConstraintValidator {

    /**
     * Function validate
     *
     * @param mixed                                   $longitude
     * @param \Symfony\Component\Validator\Constraint $constraint
     */
    public function validate($longitude, Constraint $constraint) {

        if($longitude < $constraint->min || $longitude > $constraint->max) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{min}}', $constraint->min)
                ->setParameter('{{max}}', $constraint->max)
                ->addViolation();
        }
    }

}
