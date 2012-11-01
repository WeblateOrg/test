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
 * Strings for component 'enrol_flatfile', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_flatfile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filelockedmail'] = 'Procesu cron se nepodarilo odstranit textovy soubor, ktery pouzivate pro zapisy ({$a}). Vetsinou je to zpusobeno spatne nastavenymi pravy. Prosim, opravte prava tak, aby mohl Moodle tento soubor odstranit. Jinak muze dochazet k jeho opakovanemu zpracovani.';
$string['filelockedmailsubject'] = 'Zavazna chyba: Soubor se zapisy';
$string['location'] = 'Cesta k souboru';
$string['mailadmin'] = 'Upozornit správce e-mailem';
$string['mailstudents'] = 'Oznámení studentům e-mailem';
$string['mailteachers'] = 'Oznámení učitelům e-mailem';
$string['mapping'] = 'Mapování textovým souborem';
$string['pluginname'] = 'Textový soubor (CSV)';
$string['pluginname_desc'] = 'Tato metoda bude opakovaně kontrolovat a zpracovávat speciálně formátovaný textový soubor, jehož umístění zde určíte. Řádky v souboru obsahují čtyři až šest polí oddělených čárkou v následujícím formátu:
<pre class="informationbox">
* operation, role, idnumber(user), idnumber(course) [, starttime, endtime]

kde:

* operation = add | del
* role = student | teacher | teacheredit
* idnumber(user) = idnumber v tabulce uživatelů, NIKOLIV id
* idnumber(course) = idnumber v tabulce kurzů, NIKOLIV id
* starttime = čas zpřístupnění kurzu (unixové časové razítko) - volitelné
* endtime = čas vyškrtnutí z kurzu (unixové časové razítko) - volitelné
</pre>
Příklad souboru:
<pre class="informationbox">
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
