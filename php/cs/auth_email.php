<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_email', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   auth_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = 'Registrace na základě e-mailu je výchozí autentizační metoda. Při registraci si uživatel vybere vlastní uživatelské jméno a heslo. Poté je na jeho adresu odeslán e-mail obsahující zabezpečený odkaz na stránku, kde potvrdí zadané údaje. Při dalším přihlášení se již ověřuje pouze zadané uživatelské jméno a heslo proti údajům uloženým v databázi Moodlu.';
$string['auth_emailnoemail'] = 'Nebylo možno Vám poslat e-mail.';
$string['auth_emailrecaptcha'] = 'Přidává ověřovací audiovizuální prvek na stránku pro registraci uživatelů přes e-mail. Ochráníte tak své stránky proti spammerům a navíc pomůžete dobré věci. Více podrobností najdete na http://www.google.com/recaptcha/learnmore
<br /><em>Vyžaduje rozšíření PHP cURL.</em>';
$string['auth_emailrecaptcha_key'] = 'Aktivovat reCAPTCHA';
$string['auth_emailsettings'] = 'Nastavení';
$string['pluginname'] = 'Registrace na základě e-mailu';
