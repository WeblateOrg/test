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
 * Strings for component 'dbtransfer', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   dbtransfer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkingsourcetables'] = 'Kontrola zdrojové struktury tabulky';
$string['copyingtable'] = 'Kopírování tabulky {$a}';
$string['copyingtables'] = 'Kopíruje se obsah tabulky';
$string['creatingtargettables'] = 'Vytvoření tabulek v cílové databázi';
$string['dbexport'] = 'Export databáze';
$string['dbtransfer'] = 'Převod databáze';
$string['differenttableexception'] = 'Struktura tabulky {$a} neodpovídá.';
$string['done'] = 'Hotovo';
$string['exportschemaexception'] = 'Aktuální struktura databáze se neshoduje s některými soubory install.xml<br />{$a}';
$string['importschemaexception'] = 'Aktuální struktura databáze se neshoduje s některými soubory install.xml<br />{$a}';
$string['importversionmismatchexception'] = 'Aktuální verze {$a->currentver} neodpovídá exportované verzi {$a->schemaver}.';
$string['malformedxmlexception'] = 'Nelze pokračovat, nalezeno poškozené XML.';
$string['unknowntableexception'] = 'V exportním souboru nalezena neznámá tabulka {$a}.';
