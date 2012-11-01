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
 * Strings for component 'qtype_randomsamatch', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   qtype_randomsamatch
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['nosaincategory'] = 'Ve Vámi vybrané kategorii \'{$a->catname}\' nejsou otázky určené pro krátkou tvořenou odpověď. Vyberte jinou kategorii nebo vytvořte nějaké otázky v této kategorii.';
$string['notenoughsaincategory'] = 'Ve Vámi vybrané kategorii \'{$a->catname}\' je jenom {$a->nosaquestions} otázky určených pro krátkou tvořenou odpověď. Vyberte jinou kategorii nebo vytvořte nějaké otázky v této kategorii nebo zmenšete počet vybraných otázek.';
$string['pluginname'] = 'Přiřazování z krátkých odpovědí';
$string['pluginnameadding'] = 'Přidat přiřazování generované z náhodně vybraných úloh s krátkou tvořenou odpovědí';
$string['pluginnameediting'] = 'Úprava přiřazování generovaného z náhodně vybraných úloh s krátkou tvořenou odpovědí';
$string['pluginname_help'] = 'Z pohledu studenta vypadá úloha stejně jako přiřazování. Rozdíl je v tom, že odpovídající si texty pro přiřazování jsou vybrány náhodně z úloh s krátkou tvořenou odpovědí v aktuální kategorii.

V kategorii by měl být dostatečný počet úloh, jinak se zobrazí chybová hláška.';
$string['pluginnamesummary'] = 'Jako přiřazovací úloha, ale je vytvořena náhodně z úloh s krátkou tvořenou odpovědí v dané kategorii.';
