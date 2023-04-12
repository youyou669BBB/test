<?php

namespace UPJV\INSSET;

/**
 * Fichier contenant la classe Validateur
 *
 * @package    NomDuPackage
 * @subpackage NomDuSousPackage
 */

/**
 * Classe Validateur
 *
 * Cette classe contient une méthode de validation.
 *
 * @package    NomDuPackage
 * @subpackage NomDuSousPackage
 */
class Validateur
{
    /**
     * Vérifie si une chaîne a une longueur supérieure à 2 caractères.
     *
     * @param string $input La e à valider
     *
     * @return bool True si la chaîne a une longueur supérieure à  false sinon.
     */
    public function check($input)
    {
        if (strlen($input) < 2) {
            return false;
        } else {
            return true;
        }
    }
}
