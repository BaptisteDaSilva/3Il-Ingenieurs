<?php
use Rodez_3IL_Ingenieurs\Core\Application;

// Les fichiers à charger pour toutes les pages
require_once '../app/core/Application.php';
require_once '../app/core/Controleur.php';
require_once '../app/libs/BaseDeDonnees.php';
require_once '../app/modeles/Modele.php';
require_once '../app/modeles/Utilisateur.php';

// Définitions des constantes pour l'ensemble des pages.
define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER . '/');

// Les différents modules du site.
define('CONTROLEURS', '../app/controleurs/');
define('VUES', '../app/vues/');
define('TEMPLATES', '../app/vues/_templates/');
define('MODELES', '../app/modeles/');

// Le fichier de configuration.
define('CONFIG', '../app/configs/config.ini');

define('RESSOURCES', URL . 'ressources/');
define('IMAGES', RESSOURCES . 'img/');
define('PHOTOS', IMAGES . 'photos/');

// Les ressources.
define('CSS', URL . 'css/');
define('JS', URL . 'js/');

define('DB_NAME', getenv('OPENSHIFT_APP_NAME'));
define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASSWORD', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST') . ':' . getenv('OPENSHIFT_MYSQL_DB_PORT'));

// Lance le routage
$app = new Application();