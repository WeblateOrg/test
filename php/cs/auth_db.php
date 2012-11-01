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
 * Strings for component 'auth_db', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   auth_db
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcantconnect'] = 'Nelze se připojit ke specifikované ověřovací databázi.';
$string['auth_dbchangepasswordurl_key'] = 'Heslo - změna URL';
$string['auth_dbdebugauthdb'] = 'Ladit ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Ladit ADOdb spojení do externí databáze použít při obdržení prázdné stránky při přihlašování. Nepoužívat na produkčních systémech!';
$string['auth_dbdeleteuser'] = 'Odstraněný uživatel {$a->name} id {$a->id}';
$string['auth_dbdeleteusererror'] = 'Chyba při mazání uživatele {$a}';
$string['auth_dbdescription'] = 'Tato metoda používá k ověření platnosti zadaného uživatelského jména a hesla tabulku v externí databázi. Při vytváření nového účtu mohou být informace z dalších polí zkopírovány do databáze Moodu.';
$string['auth_dbextencoding'] = 'Kódování externí databáze';
$string['auth_dbextencodinghelp'] = 'Kódování externí databáze (Nápověda???)';
$string['auth_dbextrafields'] = 'Tato pole jsou volitelná. Údaje z <b>polí externí databáze</b>, která zde určíte, budou přeneseny do databáze uživatelů Moodlu.<p>Necháte-li tato pole prázdná, budou použity implicitní hodnoty.<p>Nezávisle na tomto nastavení mají po přihlášení uživatelé možnost upravit údaje ve všech zde uvedených polích.</p>';
$string['auth_dbfieldpass'] = 'Název pole, které obsahuje hesla';
$string['auth_dbfieldpass_key'] = 'Pole hesla';
$string['auth_dbfielduser'] = 'Název pole, které obsahuje uživatelské jména';
$string['auth_dbfielduser_key'] = 'Pole uživatel';
$string['auth_dbhost'] = 'Počítač hostující databázi';
$string['auth_dbhost_key'] = 'Hostitel';
$string['auth_dbinsertuser'] = 'Přidaný uživatel {$a->name} id {$a->id}';
$string['auth_dbinsertusererror'] = 'Chyba při vkládání uživatele {$a}';
$string['auth_dbname'] = 'Název databáze';
$string['auth_dbname_key'] = 'Název DB';
$string['auth_dbpass'] = 'Heslo k tomuto uživatelskému jménu';
$string['auth_dbpass_key'] = 'Heslo';
$string['auth_dbpasstype'] = '<p>Určete formát pole s heslem. Šifrování MD5 je vhodné při připojování k dalším webovým aplikacím, jako je například PostNuke.</p><p>Možnost \'Interní\' vyberte v případě, že chcete externí databázi svěřit správu uživatelských jmen a e-mailových adres, a Moodlu správu hesel. Použijete-li možnost \'Interní\', pole s e-mailovými adresami <i>musí</i> být v externí databázi vyplněno a je nutné pravidelně spouštět skript admin/cron.php. Moodle zašle novým uživatelům e-mail obsahující dočasné heslo.</p>';
$string['auth_dbpasstype_key'] = 'Formát hesla';
$string['auth_dbreviveduser'] = 'Obnovený uživatel {$a->name} id {$a->id}';
$string['auth_dbrevivedusererror'] = 'Chyba při obnově uživatele {$a}';
$string['auth_dbsetupsql'] = 'SQL příkaz pro nastavení';
$string['auth_dbsetupsqlhelp'] = 'SQL příkaz pro speciální nastavení databáze, často používaný pro nastavení kódování pro komunikaci. Příklad pro MySQL a PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Pozastavený uživatel {$a->name} id {$a->id}';
$string['auth_dbsuspendusererror'] = 'Chyba při pozastavování uživatele {$a}';
$string['auth_dbsybasequoting'] = 'Použít uvozovky sybase';
$string['auth_dbsybasequotinghelp'] = 'Přeskakování ve stylu Sybase jednou uvozovkou - potřebné pro Oracle, MS SQL a některé další databáze. Nepoužívat pro MySQL!';
$string['auth_dbtable'] = 'Název tabulky v databázi';
$string['auth_dbtable_key'] = 'Tabulka';
$string['auth_dbtype'] = 'Typ databáze (Viz <a href="../lib/adodb/readme.htm#drivers">dokumentaci k ADOdb</a>)';
$string['auth_dbtype_key'] = 'Databáze';
$string['auth_dbupdatinguser'] = 'Aktualizovaný uživatel {$a->name} id {$a->id}atele ';
$string['auth_dbuser'] = 'Uživatelské jméno s právy číst externí databázi';
$string['auth_dbuser_key'] = 'Uživatel DB';
$string['auth_dbusernotexist'] = 'Nelze aktualizovat neexistujícího uživatele: {$a}';
$string['auth_dbuserstoadd'] = 'Uživatelské položky k přidání: {$a}';
$string['auth_dbuserstoremove'] = 'Uživatelské položky ke smazání: {$a}';
$string['pluginname'] = 'Externí databáze';
