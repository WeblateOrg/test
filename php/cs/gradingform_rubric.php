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
 * Strings for component 'gradingform_rubric', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   gradingform_rubric
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Přidat kritérium';
$string['alwaysshowdefinition'] = 'Povolit uživatelům náhled na rubriku použitou v modulu (jinak bude zobrazena po hodnocení)';
$string['backtoediting'] = 'Zpět k úpravám';
$string['confirmdeletecriterion'] = 'Opravdu chcete odstranit toto kritérium?';
$string['confirmdeletelevel'] = 'Opravdu chcete odebrat tuto úroveň?';
$string['criterionaddlevel'] = 'Přidat úroveň';
$string['criteriondelete'] = 'Odstranit kritérium';
$string['criterionempty'] = 'Klikněte pro úpravy';
$string['criterionmovedown'] = 'Přesunout dolů';
$string['criterionmoveup'] = 'Přesunout nahoru';
$string['definerubric'] = 'Definovat rubriku';
$string['description'] = 'Popis';
$string['enableremarks'] = 'Povolit hodnotitelům přidávat textové poznámky k jednotlivým kritériím';
$string['err_mintwolevels'] = 'Každé kritérium musí mít nejméně dvě úrovně';
$string['err_nocriteria'] = 'Rubrika musí obsahovat nejméně jedno kritérium';
$string['err_nodefinition'] = 'Definice úrovně nesmí zůstat prázdná';
$string['err_nodescription'] = 'Popis kritéria nesmí být prázdný';
$string['err_scoreformat'] = 'Číselné ohodnocení jednotlivých úrovní musí být platné nezáporné číslo';
$string['err_totalscore'] = 'Nejvyšší možné skóre dosažitelné pomocí této rubriky musí být větší než nula';
$string['gradingof'] = '{$a} hodnocení';
$string['leveldelete'] = 'Odstranit úroveň';
$string['levelempty'] = 'Klikněte pro úpravy';
$string['name'] = 'Název';
$string['needregrademessage'] = 'Definice rubriky byla změněna poté, co s ní byl tento uživatel ohodnocen. Uživatel nebude mít přístup k této rubrice, dokud nezkontrolujete platnost vypočítané známky.';
$string['pluginname'] = 'Rubrika';
$string['previewrubric'] = 'Náhled rubriky';
$string['regrademessage1'] = 'Chystáte se uložit změny rubriky, která již byla použita pro hodnocení. Na základě závažnosti provedených změn nyní rozhodněte, zda by měly být již ohodnocené práce ohodnoceny znovu pomocí této rubriky. Pokud ano, nebude stávající hodnocení rubrikou uživatelům dostupné až do okamžiku, kdy jejich práce ohodnotíte znovu.';
$string['regrademessage5'] = 'Chystáte se uložit závažné změny rubriky, která již byla použita pro hodnocení. Známky uložené v klasifikaci kurzu nebudou změněny, ale rubrika nebude uživatelům dostupná, dokud jejich práci neohodnotíte znovu pomocí této rubriky.';
$string['regradeoption0'] = 'Opětovné hodnocení NENÍ potřeba';
$string['regradeoption1'] = 'Opětovné hodnocení JE potřeba';
$string['restoredfromdraft'] = 'Poznámka: Při posledním pokusu o uložení známky tohoto uživatele došlo k problémům. Byla obnovena pracovní verze známek. Chcete-li zahodit takto obnovené známky, použijte tlačítko "Storno" níže.';
$string['rubric'] = 'Rubrika';
$string['rubricmapping'] = 'Pravidla pro mapování skóre na známku';
$string['rubricmappingexplained'] = '<p>Nejmenší možné skóre v rubrice je <b>{$a->minscore} bodů </b>. Ty budou převedeny na nejnižší možnou známku za danou činnost (což je většinou nula, pokud není použito hodnocení pomocí škál). Nejvyšší možné skóre je <b>{$a->maxscore} bodů</b>. Ty budou převedeny na nejlepší možnou známku.</p>
<p>Všechna další skóre budou převedena na odpovídající známku s tím, že se zaokrouhluje na nejbližší možnou hodnotu. Je-li použita škála, bude skóre převedeno na položky stupnice.</p>';
$string['rubricnotcompleted'] = 'Každé kritérium musí obsahovat nějakou úroveň';
$string['rubricoptions'] = 'Možnosti rubriky';
$string['rubricstatus'] = 'Momentální stav rubriky';
$string['save'] = 'Uložit';
$string['saverubric'] = 'Uložit rubriku a připravit ji k použití';
$string['saverubricdraft'] = 'Uložit jako koncept';
$string['scorepostfix'] = '{$a} bodů';
$string['showdescriptionstudent'] = 'Zobrazovat popis rubriky hodnoceným uživatelům';
$string['showdescriptionteacher'] = 'Zobrazovat popis rubriky během hodnocení';
$string['showremarksstudent'] = 'Ukazovat postranní poznámky hodnoceným uživatelům';
$string['showscorestudent'] = 'Zobrazovat body za jednotlivé úrovně hodnoceným uživatelům';
$string['showscoreteacher'] = 'Zobrazovat body za jednotlivé úrovně během hodnocení';
$string['sortlevelsasc'] = 'Pořadí úrovní';
$string['sortlevelsasc0'] = 'Sestupně podle bodů';
$string['sortlevelsasc1'] = 'Vzestupně podle bodů';
