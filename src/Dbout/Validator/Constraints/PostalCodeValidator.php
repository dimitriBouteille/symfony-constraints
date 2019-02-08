<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\{Constraint, ConstraintValidator};

/**
 * Class PostalCodeValidator
 * Permet de valider un code postal au format francais
 *
 * @package     Dbout\Validator\Constraints;
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2018 Dimitri BOUTEILLE
 */
class PostalCodeValidator extends ConstraintValidator {

    /**
     * Function validate
     *
     * @param mixed                                   $postalCode
     * @param \Symfony\Component\Validator\Constraint $constraint
     */
    public function validate($postalCode, Constraint $constraint) {

        // Match les codes postaux de la corse egalement
        $regex = '/^((0[1-9])|([1-8][0-9])|(9[0-8])|(2A)|(2B))[0-9]{3}$/';

        if(!empty($postalCode) && !preg_match($regex, $postalCode)) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }

}