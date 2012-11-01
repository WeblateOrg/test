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
 * Strings for component 'rating', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   rating
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Průměr hodnocení';
$string['aggregatecount'] = 'Počet hodnocení';
$string['aggregatemax'] = 'Nejvyšší hodnocení';
$string['aggregatemin'] = 'Nejnižší hodnocení';
$string['aggregatenone'] = 'Bez hodnocení';
$string['aggregatesum'] = 'Součet hodnocení';
$string['aggregatetype'] = 'Typ souhrnného hodnocení';
$string['aggregatetype_help'] = 'Typ souhrnného hodnocení určuje, jak bude ze získaných hodnocení vypočtena výsledná hodnota, která se poté ukládá do známkování kurzu.

* Průměr hodnocení - aritmetický průměr
* Počet hodnocení - výsledná známka odpovídá počtu ohodnocených položek s tím, že nepřekročí nejvyšší možnou známku za danou činnost
* Nejvyšší hodnocení - výslednou známku bude tvořit nejvyšší získané hodnocení
* Nejnižší hodnocení - výslednou známku bude tvořit nejnižší získané hodnocení
* Součet hodnocení - všechna ohodnocení se sečtou s tím, že výsledná známka nepřekročí nejvyšší možnou známku za danou činnost';
$string['allowratings'] = 'Povolit hodnocení úloh?';
$string['allratingsforitem'] = 'Všechna zaslaná hodnocení';
$string['capabilitychecknotavailable'] = 'Kontrola oprávnění není dostupná, dokud není činnost uložena';
$string['couldnotdeleteratings'] = 'Již ohodnocená položka nelze odstranit';
$string['norate'] = 'Hodnocení nené povolené!';
$string['noratings'] = 'Bez hodnocení';
$string['noviewanyrate'] = 'Máte oprávnění vidět hodnocení pouze svých vlastních položek';
$string['noviewrate'] = 'Nemáte oprávnění vidět hodnocení';
$string['rate'] = 'Hodnotit';
$string['ratepermissiondenied'] = 'Nemáte oprávnění hodnotit tuto položku';
$string['rating'] = 'Hodnocení';
$string['ratinginvalid'] = 'Chybné hodnocení';
$string['ratings'] = 'Hodnocení';
$string['ratingtime'] = 'Omezit hodnocení na položky s daty v tomto rozsahu:';
$string['rolewarning'] = 'Role s oprávněním hodnotit';
$string['rolewarning_help'] = 'Aby mohli hodnotit, musí být uživatelům přiděleno oprávnění "Hodnotit položky" (moodle/rating:rate) a případně další oprávnění vyžadovaná daným modulem. Uživatelé s uvedenými rolemi by měli být schopni hodnotit. Seznam rolí lze upravit pomocí nástroje Oprávnění v nastavení modulu.';
