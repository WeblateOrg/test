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
 * Strings for component 'tool_assignmentupgrade', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   tool_assignmentupgrade
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['areyousure'] = 'Jste si jisti?';
$string['areyousuremessage'] = 'Jste si jisti, že chcete aktualizovat úkol "{$a->name}"?';
$string['assignmentid'] = 'Úkol ID';
$string['assignmentnotfound'] = 'Úkol nenalezen  (id={$a})';
$string['assignmentsperpage'] = 'Úkolů na stránku';
$string['assignmenttype'] = 'Typ úkolu';
$string['backtoindex'] = 'Zpět na index';
$string['batchoperations'] = 'Dávkové operace';
$string['batchupgrade'] = 'Aktualizovat více úkolů';
$string['confirmbatchupgrade'] = 'Potvrďte dávkovou aktualizaci úkolů';
$string['conversioncomplete'] = 'Úkol konvertován';
$string['conversionfailed'] = 'Konverze úkolu nebyla úspěšná. Aktualizační log byl:  <br />{$a}';
$string['listnotupgraded'] = 'Seznam úkolů, které nebyly konvertovány';
$string['listnotupgraded_desc'] = 'Zde můžete aktualizovat jednotlivé úkoly';
$string['noassignmentstoupgrade'] = 'Nejsou žádné úkoly, které vyžadují aktualizaci';
$string['notupgradedintro'] = 'Tato stránka obsahuje úkoly vytvořené ve starší verzi Moodle, které nebyly aktualizovány na novou verzi úkolu v Moodle 2.3. Ne všechny úkoly lze aktualizovat - v případě, že byly vytvořeny s rozšiřujícím typem úkolu, pak tento typ bude třeba aktualizovat na nový formát a pak dokončit aktualizaci.';
$string['notupgradedtitle'] = 'Úkoly neaktualizovány';
$string['pluginname'] = 'Nástroj pro aktualizaci úkolů';
$string['select'] = 'Vybrat';
$string['submissions'] = 'Odevzdané úkoly';
$string['supported'] = 'Aktualizovat';
$string['unknown'] = 'Neznámý';
$string['updatetable'] = 'Aktualizovat tabulku';
$string['upgradable'] = 'Aktualizovatelný';
$string['upgradeall'] = 'Aktualizace všech úkolů';
$string['upgradeallconfirm'] = 'Aktualizovat všechny úkoly?';
$string['upgradeassignmentfailed'] = 'Výsledek: Aktualizace havarovala. Aktualizační log byl:  <br/><div class="tool_assignmentupgrade_upgradelog">{$a->log}</div>';
$string['upgradeassignmentsuccess'] = 'Výsledek: Aktualizace proběhla úspěšně';
$string['upgradeassignmentsummary'] = 'Aktualizace úkolut: {$a->name} (Course: {$a->shortname})';
$string['upgradeprogress'] = 'Aktualizace úkolu {$a->current} z {$a->total}';
$string['upgradeselected'] = 'Aktualizovat vybrané úkoly';
$string['upgradeselectedcount'] = 'Aktualizovat  {$a}  vybrané úkoly?';
$string['upgradesingle'] = 'Aktualizace úkolu';
$string['viewcourse'] = 'Zobrazit kurzy s konvertovanými úkoly';
