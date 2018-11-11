<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManager;

/**
 * Class UniqueEntityValidator
 * Permet de valider l'unicité d'une entitee selon une propriete
 * /!\ Le service EntityManager doit etre injecte
 *
 * @package     Dbout\Validator\Constraints;
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2018 Dimitri BOUTEILLE
 */
class UniqueEntityValidator extends ConstraintValidator {

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;


    ///
    /// CONSTRUCTOR
    ///

    /**
     * UniqueEntityValidator constructor.
     *
     * @param \Doctrine\ORM\EntityManager $manager
     */
    public function __construct(EntityManager $manager) {

        $this->em = $manager;
    }


    ///
    /// VALIDATION
    ///

    /**
     * Function validate
     *
     * @param mixed                                   $value
     * @param \Symfony\Component\Validator\Constraint $constraint
     */
    public function validate($value, Constraint $constraint) {

        $repository = $this->em->getRepository($this->context->getClassName());

        $search = $repository->findOneBy([
            $this->context->getPropertyName() => $value
        ]);

        $currentObjectId = $this->context->getObject()->getId();
        if(!is_null($search) && (is_null($currentObjectId) || $currentObjectId != $search->getId())) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }

}
