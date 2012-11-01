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
 * Strings for component 'portfolio_boxnet', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   portfolio_boxnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'API key';
$string['err_noapikey'] = 'Žádný platný API klíč';
$string['err_noapikey_help'] = 'Pro tento module je třeba nastavit váš vlastní API klíč. Ten můžete získat na adrese http://enabled.box.net';
$string['existingfolder'] = 'Stávající složka pro uložení souborů';
$string['folderclash'] = 'Požadovaná složka již existuje!';
$string['foldercreatefailed'] = 'Nelze vytvořit cílovou složku na serveru box.net';
$string['folderlistfailed'] = 'Nelze získat výpis složky ze serveru box.net';
$string['newfolder'] = 'Nová složka pro uložení souborů';
$string['noauthtoken'] = 'Nepodařilo se získat autentizační token pro použití v této session';
$string['noticket'] = 'Nepodařilo se načíst lístek z box.net pro inicializaci session';
$string['password'] = 'Vaše heslo k serveru box.net (nebude uloženo)';
$string['pluginname'] = 'Box.net';
$string['sendfailed'] = 'Nepodařilo se poslat obsah na box.net: {$a}';
$string['setupinfo'] = 'Pokyny k nastavení';
$string['setupinfodetails'] = 'Pro získaní API key se přihlašte na Box.net a navštivte jejich stránku <a href="{$a->servicesurl}">OpenBox development</a>. V nabídce "Developer Tools" klikněte na "Create new application" a zaregistrujte vás Moodle jako novou aplikaci. API key se zobrazí v sekci "Backend parameters" formuláře pro úpravu aplikace. Ve stejném formuláři vyplňte pole "Redirect URL" na hodnotu:<br /><code>{$a->callbackurl}</code><br />Chcete-li, poskytněte další informace o vašem serveru. Tyto hodnoty lze později upravit na stránce "View my applications".';
$string['sharedfolder'] = 'Sdílená složka';
$string['sharefile'] = 'Sdílet tento soubor?';
$string['sharefolder'] = 'Sdílet tuto novou složku?';
$string['targetfolder'] = 'Cílová složka';
$string['tobecreated'] = 'Bude vytvořena';
$string['username'] = 'Vaše uživatelské jméno na serveru box.net (nebude uloženo)';
