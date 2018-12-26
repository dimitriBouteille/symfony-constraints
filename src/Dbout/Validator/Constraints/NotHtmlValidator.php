<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Class NotHtmlValidator
 * Permet de valider une chaine ne contenant pas de code html
 *
 * @package     Dbout\Validator\Constraints;
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2018 Dimitri BOUTEILLE
 */
class NotHtmlValidator extends ConstraintValidator {

    /**
     * Function validate
     *
     * @param mixed                                   $string
     * @param \Symfony\Component\Validator\Constraint $constraint
     */
    public function validate($string, Constraint $constraint) {

        if($string != strip_tags($string)) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }

}
