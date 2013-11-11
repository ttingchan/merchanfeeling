<?php

// define constants
define('PROJECT_DIR', realpath('./'));
define('LOCALE_DIR', 'international/locale');
define('DEFAULT_LOCALE', 'en_US');

require_once('gettext.inc');

$supported_locales = array('en_US', 'de_CH', 'sr_CS', 'fr_FR', 'zh_CN');
$encoding = 'UTF-8';

//avant : $locale = (isset($_GET['lang']))? $_GET['lang'] : DEFAULT_LOCALE;

//maintenant, si besoin d'un retour en arrière
$locale = (isset($_SESSION['lang']))? $_SESSION['lang'] : DEFAULT_LOCALE;
if(isset($_SESSION['lang'])) {$locale = $_SESSION['lang'];};

//possibilité de rajouter cette ligne si l'on veut avoir une variable de session pour la langue, et l'écraser TEMPORAIREMENT => le temps d'une page
//en cliquant sur les langues. Mais ça restera pas je pense car pour les session yaura des drapeaux du même style donc...
if(isset($_GET['lang'])) {$locale = $_GET['lang'];};


// gettext setup
T_setlocale(LC_MESSAGES, $locale);
// Set the text domain as 'messages'
$domain = 'messages';
bindtextdomain($domain, LOCALE_DIR);
// bind_textdomain_codeset is supported only in PHP 4.2.0+
if (function_exists('bind_textdomain_codeset')) 
  bind_textdomain_codeset($domain, $encoding);
textdomain($domain);

header("Content-type: text/html; charset=$encoding");
?>