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
 * Strings for component 'debug', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   debug
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'Autentizační modul {$a} nenalezen.';
$string['blocknotexist'] = 'Blok {$a} neexistuje';
$string['cannotbenull'] = '{$a} nemůže být prázdný (null)!';
$string['cannotdowngrade'] = 'Nelze snížit verzi modulu {$a->plugin} z {$a->oldversion} na {$a->newversion}.';
$string['cannotfindadmin'] = 'Nebyl nalezen žádný uživatel s právy správce!';
$string['cannotinitpage'] = 'Není možné inicializovat stránku: neplatné {$a->name} identifikátor {$a->id}';
$string['cannotsetuptable'] = 'Tabulky {$a} NEBYLY úspěšně nastaveny!';
$string['codingerror'] = 'Chyba v programu - prosím, informujte vývojáře: {$a}';
$string['configmoodle'] = 'Moodle nebyl ještě konfigurován. Nejdříve musíte upravit soubor config.php.';
$string['erroroccur'] = 'V průběhu této činnosti se vyskytla chyba';
$string['invalidarraysize'] = 'Nesprávná velikost polí v parametrech {$a}';
$string['invalideventdata'] = 'Vloženy nesprávné údaje: {$a}';
$string['invalidparameter'] = 'Byla zjištěna nesprávná hodnota parametru, provádění programu nemůže pokračovat.';
$string['invalidresponse'] = 'Byla zjištěna nesprávná hodnota parametru, provádění programu nemůže pokračovat.';
$string['missingconfigversion'] = 'Konfigurační tabulka neobsahuje verzi, není možné pokračovat.';
$string['modulenotexist'] = 'Modul {$a} neexistuje';
$string['morethanonerecordinfetch'] = 'Ve funkci fetch() byl nalezen víc než jeden záznam!';
$string['mustbeoveride'] = 'Abstraktní metoda {$a} musí být přepsána.';
$string['noactivityname'] = 'Odvozený objekt stránky je odvozen z page_generic_activity, ale nedefinuje $this->activityname';
$string['noadminrole'] = 'Nebyla nalezena role správce';
$string['noblocks'] = 'Nebyly nainstalovány žádné bloky!';
$string['nocate'] = 'Nejsou žádné kategorie!';
$string['nomodules'] = 'Nebyly nalezeny žádné moduly!';
$string['nopageclass'] = '{$a} byly importovány, ale nebyly nalezeny žádné třídy stránek.';
$string['noreports'] = 'Žádné přístupné přehledy';
$string['notables'] = 'Žádné tabulky!';
$string['phpvaroff'] = 'Proměnná serveru PHP "{$a->name}" by měla být vypnuta - {$a->link}';
$string['phpvaron'] = 'Proměnná serveru PHP "{$a->name}" není zapnuta - {$a->link}';
$string['sessionmissing'] = 'Objekt {$a} chybí v session';
$string['sqlrelyonobsoletetable'] = 'Tento SQL příkaz závisí na zastaralých tabulkách: {$a}!  Tento kód musí být opraven vývojářem.';
$string['withoutversion'] = 'Hlavní soubor version.php chybí, není čitelný nebo je poškozen.';
$string['xmlizeunavailable'] = 'Funkce xmlize nejsou dostupné.';
