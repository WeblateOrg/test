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
 * Strings for component 'condition', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   condition
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'Přidat {no} další podmínky na základě dokončení jiné činnosti';
$string['addgrades'] = 'Přidat {no} další podmínky na základě získání určité známky';
$string['availabilityconditions'] = 'Omezit přístup';
$string['availablefrom'] = 'Povolit přístup od';
$string['availablefrom_help'] = 'Nastavení termínů přístupu umožňuje určit časový interval, kdy se odkaz na danou činnost objeví studentům na stránce kurzu.

U některých modulů činností lze též nastavit termíny dostupnosti. Rozdíl mezi dostupností a povoleným přístupem je zde ten, že v případě nedostupné činnosti se zobrazuje její popis, zatímco nepřístupná činnost nelze vůbec otevřít.';
$string['availableuntil'] = 'Povolit přístup do';
$string['badavailabledates'] = 'Datum v poli "Povolit přístup od" musí předcházet datu v poli "Povolit přístup do"';
$string['badgradelimits'] = 'Pokud nastavíte horní a dolní hranici hodnocení, horní hranice musí být větší než dolní hranice.';
$string['completion_complete'] = 'musí být označena jako dokončená';
$string['completioncondition'] = 'Podmínit stavem dokončení jiné činnosti';
$string['completioncondition_help'] = 'Zde můžete nastavit podmínky na základě dokončení jiné činnosti v kurzu. Tyto podmínky musejí být splněny, má-li být dovolen přístup k dané činnosti. Přirozeně musíte nejprve nastavit kritéria dokončování činností v kurzu.

Je-li uvedeno více podmínek, musejí být pro zpřístupnění této činnosti splněny všechny.';
$string['completionconditionsection'] = 'Podmínit stavem dokončení jiné činnosti';
$string['completionconditionsection_help'] = 'Zde můžete nastavit podmínky na základě dokončení jiné činnosti v kurzu. Tyto podmínky musejí být splněny, má-li být dovolen přístup k dané sekci. Přirozeně musíte nejprve nastavit kritéria dokončování činností v kurzu.

Je-li uvedeno více podmínek, musejí být pro zpřístupnění této činnosti splněny všechny.';
$string['completion_fail'] = 'musí být dokončena s nedostatečnou známkou';
$string['completion_incomplete'] = 'nesmí být označena jako dokončená';
$string['completion_pass'] = 'musí být dokončena s dostatečnou známkou';
$string['configenableavailability'] = 'Zda lze v kurzech kontrolovat přístup k činnostem na základě různých kritérií - datum, známka či dokončení jiné činnosti.';
$string['enableavailability'] = 'Povolit podmíněný přístup';
$string['grade_atleast'] = 'musí být alespoň';
$string['gradecondition'] = 'Podmínit známkou ';
$string['gradecondition_help'] = 'Zde můžete nastavit podmínky na základě získané známky. Tyto podmínky musejí být splněny, má-li být dovolen přístup k dané činnosti.

Je-li uvedeno více podmínek, musejí být pro zpřístupnění této činnosti splněny všechny.';
$string['gradeconditionsection'] = 'Podmínky hodnocení';
$string['gradeconditionsection_help'] = 'Zde můžete nastavit podmínky na základě získané známky. Tyto podmínky musejí být splněny, má-li být dovolen přístup k dané sekci.

Je-li uvedeno více podmínek, musejí být pro zpřístupnění této činnosti splněny všechny.';
$string['gradeitembutnolimits'] = 'Musíte zadat horní nebo dolní mez, nebo obojí.';
$string['gradelimitsbutnoitem'] = 'Musíte zvolit položku hodnocení.';
$string['gradesmustbenumeric'] = 'Nejmenší a nejvyšší známka musí obsahovat číselnou hodnotu (nebo být prázdná).';
$string['grade_upto'] = 'a zároveň menší než';
$string['groupingnoaccess'] = 'V současnosti nepatříte do skupiny, která má do tématu přístup.';
$string['none'] = '(bez podmínky)';
$string['notavailableyet'] = 'Zatím není k dispozici';
$string['requires_completion_0'] = 'Není k dispozici, neboť jste již dokončili <strong>{$a}</strong>';
$string['requires_completion_1'] = 'Nebude k dispozici, dokud nedokončíte <strong>{$a}</strong>';
$string['requires_completion_2'] = 'Nebude k dispozici, dokud nedokončíte <strong>{$a}</strong> s dostatečnou známkou';
$string['requires_completion_3'] = 'Nebude k dispozici, ledaže dokončíte <strong>{$a}</strong> s nedostatečnou známkou';
$string['requires_date'] = 'K dispozici od {$a}.';
$string['requires_date_before'] = 'K dispozici do {$a}.';
$string['requires_date_both'] = 'K dispozici od {$a->from} do {$a->until}.';
$string['requires_date_both_single_day'] = 'Dostupné od {$a}.';
$string['requires_grade_any'] = 'Nebude k dispozici, dokud nezískáte známku z <strong>{$a}</strong>.';
$string['requires_grade_max'] = 'Nebude k dispozici, ledaže byste dostali odpovídající známku z <strong>{$a}</strong>.';
$string['requires_grade_min'] = 'Nebude k dispozici, dokud nezískáte potřebnou známku z <strong>{$a}</strong>.';
$string['requires_grade_range'] = 'Nebude k dispozici, dokud nezískáte jistou známku z <strong>{$a}</strong>.';
$string['showavailability'] = 'Pokud nebude mít uživatel k činnosti přístup';
$string['showavailability_hide'] = 'Ať se mu vůbec nezobrazuje';
$string['showavailabilitysection'] = 'Pokud nebude mít uživatel k sekci přístup';
$string['showavailabilitysection_hide'] = 'Skrýt sekci úplně';
$string['showavailabilitysection_show'] = 'Zobrazit sekci jako skrytou spolu s informací o omezení přístupu';
$string['showavailability_show'] = 'Ať se zobrazí název činnosti spolu s informací o dispozici';
$string['userrestriction_hidden'] = 'Omezený přístup (zcela skryto bez doplňujících informací): "{$a}"';
$string['userrestriction_visible'] = 'Omezený přístup: "{$a}"';
