<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class Username
 * Permet de valider un pseudo
 * Le pseudo doit etre compris entre 3 et 25 caracteres et ne contenir que des letters, des chiffres ou _
 *
 * @package     App\Dbout\Validator\Constraints;
 * @Annotation
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2018 Dimitri BOUTEILLE
 */
class Username extends Constraint {

    /**
     * @var string Message d'erreur
     */
    public $message = 'Le pseudo n\'est pas valide';

    /**
     * @var int Taille minium du pseudo
     */
    public $min = 3;

    /**
     * @var int Taille maximum du pseudo
     */
    public $max = 25;

}