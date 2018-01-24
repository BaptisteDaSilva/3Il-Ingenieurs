<?php
namespace Rodez_3IL_Ingenieurs\Controleurs;

use Rodez_3IL_Ingenieurs\Core\Controleur;

/**
 * Contrôleur de la page d'accueil du site.
 * 
 * @package Rodez_3IL_Ingenieurs\Controleurs
 */
class Contact extends Controleur
{
    /**
     * Créé un nouveau contrôleur de la page d'accueil.
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->setActivePage('Contact');
    }

    /**
     * Méthode lancée par défaut sur un contrôleur.
     */
    public function index()
    {
        $this->setTitre('Contact');
        
        require_once VUES . 'Contact/VueContact.php';
    }
}