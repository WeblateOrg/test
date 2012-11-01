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
 * Strings for component 'grading', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   grading
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = 'Pro hodnocení "{$a->area}" bude použita metoda \'{$a->method}\'';
$string['activemethodinfonone'] = 'Pro hodnocení "{$a->area}" nebyla vybrána žádná metoda pokročilého známkování. Bude použito jednoduché přímé známkování.';
$string['changeactivemethod'] = 'Změnit aktivní metodu známkování na';
$string['clicktoclose'] = 'klikněte pro zavření';
$string['exc_gradingformelement'] = 'Nelze inicializovat hodnotící element formuláře';
$string['formnotavailable'] = 'Má být použita pokročilá metoda známkování, ale příslušný hodnotící formulář ještě není k dispozici. Je potřeba nadefinovat hodnotící formulář.';
$string['gradingformunavailable'] = 'Poznámka: hodnotící formulář pro pokročilé známkování není zatím připraven pro použití. Prozatím bude použito jednoduché přímé známkování.';
$string['gradingmanagement'] = 'Pokročilé známkování';
$string['gradingmanagementtitle'] = 'Pokročilé známkování: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Metoda známkování';
$string['gradingmethod_help'] = 'Vyberte pokročilou metodu známkování, která má být použita pro výpočet známek.

Pokud nechcete systém pokročilého známkování používat, zvolte "Jednoduché přímé známkování".';
$string['gradingmethodnone'] = 'Jednoduché přímé známkování';
$string['gradingmethods'] = 'Metody známkování';
$string['manageactionclone'] = 'Vytvořit nový hodnotící formulář ze šablony';
$string['manageactiondelete'] = 'Odstranit stávající hodnotící formulář';
$string['manageactiondeleteconfirm'] = 'Chystáte se odstranit hodnotící formulář "{$a->formname}" a všechny s ním spojené informace z "{$a->component} ({$a->area})". Ujistěte se, že rozumíte uvedeným následkům.

* Tuto operaci nelze vzít zpět.
* Můžete změnit metodu známkování na jinou (včetně jednoduchého přímého známkování), aniž byste museli odstranit tento hodnotící formulář.
* Všechny informace o tom, jak byl tento formulář vyplněn při hodnocení jednotlivých prací, budou nenávratně ztraceny.
* Vypočítaný výsledek známkování uložený v klasifikaci kurzu nebude nijak ovlivněn. Nicméně nebude již nadále možné zobrazit vyplněný hodnotící formulář, z něhož byla známka vypočítána.
* Tato operace neovlivňuje případné kopie tohoto formuláře v jiných činnostech.';
$string['manageactiondeletedone'] = 'Formulář byl úspěšně odstraněn';
$string['manageactionedit'] = 'Upravit definici formuláře';
$string['manageactionnew'] = 'Nadefinovat nový hodnotící formulář';
$string['manageactionshare'] = 'Zveřejnit hodnotící formulář jako šablonu';
$string['manageactionshareconfirm'] = 'Chystáte se uložit kopii hodnotícího formuláře "{$a}" jako novou veřejnou šablonu. Ostatní uživatelé na vašem serveru ji budou moci použít pro vytvoření nových hodnotících formulářů v dalších činnostech.';
$string['manageactionsharedone'] = 'Formulář byl úspěšně uložen jako šablona';
$string['noitemid'] = 'Známkování není možné - hodnocená práce neexistuje.';
$string['nosharedformfound'] = 'Žádná šablona nebyla nalezena';
$string['searchownforms'] = 'zahrnout také mé vlastní formuláře';
$string['searchtemplate'] = 'Vyhledávání hodnotícího formuláře';
$string['searchtemplate_help'] = 'Zde můžete vyhledat již existující hodnotící formulář a použít jej jako vzor pro vytvoření nového formuláře. Zadejte slova, která by se měla objevit v názvu hodnotícího formuláře, v jeho popisu nebo ve ve formuláři samotném. Pro vyhledávání celé fráze zadejte hledanou frázi v dvojitých uvozovkách.

Standardně jsou prohledávány pouze formuláře, které byly uloženy jako sdílené šablony. Do výsledků můžete zahrnout i všechny vlastní formuláře. Tímto způsobem můžete opětovně používat vaše hodnotící formuláře bez toho, aniž byste je museli sdílet jako veřejné šablony. Hodnotící formulář musí být uložen jako připraven k použití, aby mohl být takto vyhledán.';
$string['statusdraft'] = 'Koncept';
$string['statusready'] = 'Připraven k použití';
$string['templatedelete'] = 'Odstranit';
$string['templatedeleteconfirm'] = 'Chystáte se odstranit sdílenou šablonu "{$a}". Odstranění šablony nemá vliv na stávající formuláře které byly vytvořeny na jejím základě.';
$string['templateedit'] = 'Upravit';
$string['templatepick'] = 'Použít tuto šablonu';
$string['templatepickconfirm'] = 'Chcete použít "{$a->formname}" jako vzor pro vytvoření nového hodnotícího formuláře v "{$a->component} ({$a->area})?"';
$string['templatepickownform'] = 'Použít tento formulář jako šablonu';
$string['templatesource'] = 'Umístění: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Vlastní formulář';
$string['templatetypeshared'] = 'Sdílená šablona';
