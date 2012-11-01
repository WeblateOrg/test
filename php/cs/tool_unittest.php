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
 * Strings for component 'tool_unittest', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   tool_unittest
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['all'] = 'VŠE';
$string['coveredlines'] = 'Pokryté řádky kódu';
$string['dbtest'] = 'Testy funkčnosti databáze';
$string['deletingnoninsertedrecord'] = 'Pokus odstranit záznam, který nebyl vložen těmito testy (id {$a->id} v tabulce {$a->table}).';
$string['deletingnoninsertedrecords'] = 'Pokus odstranit záznamy, které nebyly vloženy těmito testy (z tabulky {$a->table}).';
$string['droptesttables'] = 'Odstranit testovací tabulky';
$string['exception'] = 'Výjimka';
$string['executablelines'] = 'Spustitelné řádky ';
$string['fail'] = 'Selhání';
$string['ignorefile'] = 'Ignorovat testy v souboru';
$string['ignorethisfile'] = 'Znovu spustit testy a ignorovat tento soubor.';
$string['installtesttables'] = 'Instalování tabulek testu';
$string['moodleunittests'] = 'Moodle unit testů: {$a}';
$string['notice'] = 'Poznámka';
$string['onlytest'] = 'Spustit pouze testy v';
$string['pass'] = 'Prošlo';
$string['pathdoesnotexist'] = 'Cesta "{$a}" neexistuje';
$string['pluginname'] = 'Unit testy';
$string['reinstalltesttables'] = 'Reinstalování tabulek testu';
$string['retest'] = 'Znovu spustit testy';
$string['retestonlythisfile'] = 'Znovu spustit testy pouze v tomto souboru.';
$string['runall'] = 'Spustit testy ze všech souborů.';
$string['runat'] = 'Spustit v {$a}.';
$string['runonlyfile'] = 'Spustit testy pouze v tomto souboru';
$string['runonlyfolder'] = 'Spustit testy pouze v této složce';
$string['runtests'] = 'Spustit testy';
$string['rununittests'] = 'Spustit unit testy';
$string['showpasses'] = 'Ukázat úspěšné testy i ty, které selhaly.';
$string['showsearch'] = 'Ukázat hledání testových souborů.';
$string['skip'] = 'Přeskočit';
$string['stacktrace'] = 'Průchod zásobníkem:';
$string['summary'] = '{$a->run}/{$a->total} testovaných případů hotovo: <strong>{$a->passes}</strong> prošlo, <strong>{$a->fails}</strong> selhalo a <strong>{$a->exceptions}</strong> vyvolalo výjimku.';
$string['testtablescsvfileunwritable'] = 'CSV soubor pro testovací tabulky není zapisovatelný ({$a->filename})';
$string['thorough'] = 'Spustit kompletní test (může trvat dlouho).';
$string['timetakes'] = 'Čas zpracování: {$a}.';
$string['totallines'] = 'Celkem řádků';
$string['uncaughtexception'] = 'Neodchycená výjimka [{$a->getMessage()}] v [{$a->getFile()}:{$a->getLine()}] TESTOVÁNÍ PŘERUŠENO.';
$string['uncoveredlines'] = 'Nezahrnuté řádky';
$string['unittest:execute'] = 'Spouštět unit testy';
$string['unittests'] = 'Unit testy';
$string['version'] = 'Používáme <a href="http://sourceforge.net/projects/simpletest/">SimpleTest</a> verze {$a}.';
