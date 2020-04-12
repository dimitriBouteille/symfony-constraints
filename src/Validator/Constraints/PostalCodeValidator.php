<?php

namespace Dbout\SfConstraints\Validator\Constraints;

use Symfony\Component\Validator\{Constraint, ConstraintValidator};

/**
 * Class PostalCodeValidator
 *
 * @package Dbout\SfConstraints\Validator\Constraints
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2020 Dimitri BOUTEILLE
 */
class PostalCodeValidator extends ConstraintValidator
{

    /**
     * @param mixed $postalCode
     * @param Constraint $constraint
     */
    public function validate($postalCode, Constraint $constraint)
    {
        // Match les codes postaux de la corse egalement
        $regex = '/^((0[1-9])|([1-8][0-9])|(9[0-8])|(2A)|(2B))[0-9]{3}$/';

        if(!empty($postalCode) && !preg_match($regex, $postalCode)) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }

}