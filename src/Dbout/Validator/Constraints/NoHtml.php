<?php

namespace Dbout\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class NoHtml
 * Permet de valider une chaine ne contenant pas de code html
 * @Annotation
 *
 * @package     Dbout\Validator\Constraints;
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2018 Dimitri BOUTEILLE
 */
class NoHtml extends Constraint {

    /**
     * @var string Message d'erreur
     */
    public $message = 'Le code html n\'est pas autorisé.';

}
