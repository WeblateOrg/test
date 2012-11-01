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
 * Strings for component 'workshopallocation_random', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   workshopallocation_random
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = 'Zajistit sebehodnocení';
$string['allocationaddeddetail'] = 'Nové přiřazení práce k hodnocení: <strong>{$a->reviewername}</strong> bude hodnotit práci, kterou odevzdal(-a) <strong>{$a->authorname}</strong>';
$string['allocationdeallocategraded'] = 'Nelze odebrat přiřazení již hodnocené práce: hodnotitel <strong>{$a->reviewername}</strong>, autor: <strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'Přiřazení opětovně použito: <strong>{$a->reviewername}</strong> ponechán jako hodnotitel uživatele <strong>{$a->authorname}</strong>';
$string['allocationsettings'] = 'Nastavení přiřazování';
$string['assessmentdeleteddetail'] = 'Přiřazení odebráno: <strong>{$a->reviewername}</strong> již nebude hodnotit práci, kterou odevzdal(-a) <strong>{$a->authorname}</strong>';
$string['assesswosubmission'] = 'Účastníci mohou hodnotit, i když sami neodevzdali svou práci';
$string['confignumofreviews'] = 'Výchozí hodnota počtu prací, které budou přiřazeny jednomu hodnotiteli';
$string['excludesamegroup'] = 'Nepřiřazovat práci hodnotitelům ze stejné skupiny';
$string['noallocationtoadd'] = 'Není možné přiřadit žádnou novou práci k ohodnocení';
$string['nogroupusers'] = '<p>Upozornění: Když je workshop v režimu viditelných skupin, musejí být uživatelé členy alespoň jedné skupiny, aby jim tento nástroj přiřadil nějakou práci k hodnocení. Nicméně i uživatelům, kteří nejsou členy žádné skupiny, může tento nástroj přiřadit vlastní práci k sebehodnocení, případně jim odebrat již přiřazené práce.</p>
<p>Následující uživatelé nejsou členy ani jedné skupiny: {$a}</p>';
$string['numofdeallocatedassessment'] = 'Odebírám {$a} přiřazení';
$string['numofrandomlyallocatedsubmissions'] = 'Náhodně přiděluji {$a} prací k ohodnocení';
$string['numofreviews'] = 'Počet hodnocení';
$string['numofselfallocatedsubmissions'] = 'Přiděluji {$a} prací k sebehodnocení';
$string['numperauthor'] = 'na jednu odevzdanou práci';
$string['numperreviewer'] = 'na jednoho hodnotitele';
$string['pluginname'] = 'Náhodné přiřazování';
$string['randomallocationdone'] = 'Náhodné přiřazování ukončeno';
$string['removecurrentallocations'] = 'Odebrat stávající přiřazení';
$string['resultnomorepeers'] = 'Žádní další uživatelé nejsou k dispozici';
$string['resultnomorepeersingroup'] = 'Pro tuto oddělenou skupinu nejsou k dispozici žádní další uživatelé';
$string['resultnotenoughpeers'] = 'Není k dispozici dost uživatelů';
$string['resultnumperauthor'] = 'Pokus o přiřazení {$a} hodnocení na autora';
$string['resultnumperreviewer'] = 'Pokus o přidělení {$a} hodnocení na recenzenta';
$string['stats'] = 'Přehled stávajícího přidělení prací k hodnocení';
