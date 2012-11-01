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
 * Strings for component 'enrol_database', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:unenrol'] = 'Vyškrtnout pozastavené uživatele';
$string['dbencoding'] = 'Kódování databáze';
$string['dbhost'] = 'Název nebo IP adresa serveru';
$string['dbhost_desc'] = 'Napište IP adresu nebo jméno serveru';
$string['dbname'] = 'Název databáze';
$string['dbpass'] = 'Přístupové heslo';
$string['dbsetupsql'] = 'Příkaz nastavení databáze';
$string['dbsetupsql_desc'] = 'SQL příkaz pro nastavení parametrů spojení. Například v případě MySQL a PostgreSQL můžete chtít zadat <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Používat sybase uvozovky';
$string['dbsybasequoting_desc'] = 'Pro escape sekvence používat jednoduché uvozovky ve stylu sybase. Potřebné pro Oracle, MS SQL a některé další databáze. Nepoužívejte pro MySQL!';
$string['dbtype'] = 'Databázový ovladač';
$string['dbtype_desc'] = 'ADOdb název ovladače databáze, typ externího databázového engine.';
$string['dbuser'] = 'Uživatelské jméno pro přístup';
$string['debugdb'] = 'Režim ladění ADOdb';
$string['debugdb_desc'] = 'Ladit ADOdb spojení do externí databáze použít při obdržení prázdné stránky při přihlašování. Nepoužívat na produkčních systémech!';
$string['defaultcategory'] = 'Výchozí kategorie nového kurzu';
$string['defaultcategory_desc'] = 'Výchozí kategorie pro automaticky vytvořené kurzy. Použije se v případě, že není určen identifikátor kategorie nového kurzu nebo určená kategorie není nalezena.
';
$string['defaultrole'] = 'Výchozí role';
$string['defaultrole_desc'] = 'Role, která bude přiřazena jako výchozí, pokud v externí tabulce není žádná role uvedena.';
$string['ignorehiddencourses'] = 'Ignorovat skryté kurzy';
$string['ignorehiddencourses_desc'] = 'Je-li povolené, uživatelé nebudou zapsaní do kurzů, které jsou studentům nedostupné.';
$string['localcategoryfield'] = 'Pole lokální kategorie';
$string['localcoursefield'] = 'Název pole v tabulce kurzů (course), které bude použito k provázání s externí databází (např. idnumber).';
$string['localrolefield'] = 'Název pole v tabulce rolí (roles), které bude použito k provázání s externí databází (např. shortname).';
$string['localuserfield'] = 'Lokální pole pro identifikaci uživatele';
$string['newcoursecategory'] = 'Pole definující kategorii nového kurzu';
$string['newcoursefullname'] = 'Pole obsahující celý název nového kurzu';
$string['newcourseidnumber'] = 'Pole obsahující identifikátor ID nového kurzu';
$string['newcourseshortname'] = 'Pole obsahující krátký název nového kurzu';
$string['newcoursetable'] = 'Tabulka v externí databázi s definicí nových kurzů';
$string['newcoursetable_desc'] = 'Vložte jméno tabulky obsahující seznam kurzů, které mají být automaticky vytvořeny. Prázdná hodnota znamená, že kurzy nebudou vytvořeny.';
$string['pluginname'] = 'Externí databáze';
$string['pluginname_desc'] = 'Pro řízení zápisů do kurzů můžete použít externí databázi (téměř jakéhokoliv druhu). Předpokládá se, že externí databáze obsahuje pole s ID kurzu a pole s ID uživatele. Tato jsou porovnána s poli, která si vyberete v lokálních tabulkách kurzů a uživatelů.';
$string['remotecoursefield'] = 'Externí pole pro identifikaci kurzu';
$string['remotecoursefield_desc'] = 'Název pole v externí databázi, které bude použito k provázání s tabulkou kurzů (course).';
$string['remoteenroltable'] = 'Tabulka pro externí zápis uživatelů';
$string['remoteenroltable_desc'] = 'Určete jméno tabulky, která obsahuje seznam uživatelů zapisovaných do kurzů. Prázdné pole znamená, že zápis do kurzů nebude synchronizován. ';
$string['remoterolefield'] = 'Externí pole pro identifikaci role';
$string['remoterolefield_desc'] = 'Název pole v externí databázi, které bude použito k provázání s tabulkou rolí (roles).';
$string['remoteuserfield'] = 'Externí pole pro identifikaci uživatele';
$string['remoteuserfield_desc'] = 'Název pole v externí databázi, které bude použito k provázání s tabulkou uživatelů (user).';
$string['settingsheaderdb'] = 'Nastavení externího databázového serveru';
$string['settingsheaderlocal'] = 'Mapování lokálních polí';
$string['settingsheadernewcourses'] = 'Vytvoření nového kurzů';
$string['settingsheaderremote'] = 'Zápis z externího zdroje';
$string['templatecourse'] = 'Šablona nového kurzu';
$string['templatecourse_desc'] = 'Volitelné: automaticky vytvořené kurzy mohou kopírovat své nastavení ze šablony. Napište krátké jméno kurzu šablony.';
