<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class UniqueEntity
 * Permet de valider l'unicité d'une entitee selon une propriete
 * @Annotation
 *
 * @package     Dbout\Validator\Constraints;
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2018 Dimitri BOUTEILLE
 */
class UniqueEntity extends Constraint{

    /**
     * @var string Message d'erreur
     */
    public $message = '';

}