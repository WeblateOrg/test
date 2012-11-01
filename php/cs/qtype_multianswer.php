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
 * Strings for component 'qtype_multianswer', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   qtype_multianswer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmquestionsaveasedited'] = 'Potvrzuji, že chci uložit úlohu tak, jak byla upravena';
$string['confirmsave'] = 'Potvrdit a uložit {$a}';
$string['correctanswer'] = 'Správná odpověď';
$string['correctanswerandfeedback'] = 'Správná odpověď a komentář';
$string['decodeverifyquestiontext'] = 'Dekódovat a ověřit správnost formátu úlohy';
$string['layout'] = 'Rozložení';
$string['layouthorizontal'] = 'Vodorovná řádka přepínačů (radio)';
$string['layoutselectinline'] = 'Rozbalovací nabídka v řádku textu (select)';
$string['layoutundefined'] = 'Nedefinované rozložení';
$string['layoutvertical'] = 'Svislý sloupec přepínačů (radio)';
$string['nooptionsforsubquestion'] = 'Nelze získat možné odpovědi k části č. # {$a->sub} (question->id={$a->id})';
$string['noquestions'] = 'Doplňovací (cloze) úloha "<strong>{$a}</strong>" neobsahuje žádné dílčí úlohy';
$string['pluginname'] = 'Doplňovací úloha (cloze)';
$string['pluginnameadding'] = 'Přidání doplňovací úlohy (cloze)';
$string['pluginnameediting'] = 'Úprava doplňovací úlohy (cloze)';
$string['pluginname_help'] = 'Formát doplňovací úloha (cloze) umožňuje import textu s otázkami, jako výběr z možných odpovědí a krátké odpovědi.';
$string['pluginnamesummary'] = 'Úloha toto typu je velmi flexibilní, ale může být vytvořena pouze zadáním zdrojového textu ve speciálním formátu. Tento text obsahuje kódy, které vytvářejí komplexní úlohu s vloženými dílčími úlohami s více odpověďmi, krátkou odpovědí či numerickou úlohou.';
$string['qtypenotrecognized'] = 'neznámý typ úlohy: {$a}';
$string['questiondefinition'] = 'Definice úlohy';
$string['questiondeleted'] = 'Úloha odstraněna';
$string['questioninquiz'] = '<ul>
  <li>přidat nabo zrušit úlohy, </li>
  <li>změnit pořadí úloh v textu,</li>
  <li>změnit typ úloh (numerická, krátká odpověď, výběr z možných odpovědí). </li></ul>';
$string['questionnotfound'] = 'Není možno nalézt znění úlohy v části č. {$a}';
$string['questionsadded'] = 'Úloha přidána';
$string['questionsaveasedited'] = 'Úloha bude uložena tak, jak byla upravena';
$string['questionsmissing'] = 'Žádné platné úlohy, vytvořte alespoň jednu úlohu';
$string['questiontypechanged'] = 'Typ úlohy byl změněn';
$string['questiontypechangedcomment'] = 'Alespoň jedna úloha byla změněna. <br> Přidal jste, zrušil nebo přesunul úlohu? <br> Podívejte.';
$string['questionusedinquiz'] = 'Tato úloha je použita v {$a->nb_of_quiz} testech, počet pokusů : {$a->nb_of_attempts}';
$string['storedqtype'] = 'Uloženy úlohy typu \'{$a}\'.';
$string['subqresponse'] = 'část {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'Neznámý typ úlohy: {$a->type} v části č. {$a->sub}';
$string['warningquestionmodified'] = '<b> POZOR </ b>';
$string['youshouldnot'] = '<b> NEMĚLI BYSTE </ b>';
