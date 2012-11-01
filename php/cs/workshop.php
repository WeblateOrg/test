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
 * Strings for component 'workshop', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   workshop
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesscontrol'] = 'Řízení přístupu';
$string['aggregategrades'] = 'Přepočítat známky';
$string['aggregation'] = 'Výpočet souhrnných známek';
$string['allocate'] = 'Přidělit práce k hodnocení';
$string['allocatedetails'] = 'očekáváno: {$a->expected}<br />odevzdáno: {$a->submitted}<br />zbývá přidělit: {$a->allocate}';
$string['allocation'] = 'Přidělování odevzdaných prací k hodnocení';
$string['allocationconfigured'] = 'Přidělení prací nastaveno';
$string['allocationdone'] = 'Přidělování ukončeno';
$string['allocationerror'] = 'Chyba při přidělování prací';
$string['allsubmissions'] = 'Všechny odevzdané práce ({$a})';
$string['alreadygraded'] = 'Ohodnoceno';
$string['areainstructauthors'] = 'Pokyny k vypracování odevzdávaných prací';
$string['areainstructreviewers'] = 'Pokyny k hodnocení';
$string['areasubmissionattachment'] = 'Přílohy odevzdaných prací';
$string['areasubmissioncontent'] = 'Texty odevzdaných prací';
$string['assess'] = 'Hodnotit';
$string['assessedexample'] = 'Ohodnocená ukázka práce';
$string['assessedsubmission'] = 'Ohodnocená odevzdaná práce';
$string['assessingexample'] = 'Hodnocení ukázek prací';
$string['assessingsubmission'] = 'Hodnocení odevzdané práce';
$string['assessment'] = 'Hodnocení';
$string['assessmentby'] = '- <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'Hodnocení od {$a}';
$string['assessmentbyyourself'] = 'Vaše hodnocení';
$string['assessmentdeleted'] = 'Zrušeno přidělení práce k hodnocení';
$string['assessmentend'] = 'Konec hodnocení';
$string['assessmentenddatetime'] = 'Lhůta pro hodnocení: {$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a} (konec hodnocení)';
$string['assessmentform'] = 'Hodnotící formulář';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Hodnocení</a> práce <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'Referenční hodnocení';
$string['assessmentreferenceconflict'] = 'Nemůžete hodnotit ukázku práce, pro niž jste poskytli referenční hodnocení.';
$string['assessmentreferenceneeded'] = 'Nyní musíte tuto ukázku práce objektivně ohodnotit a poskytnout tak tzv. referenční hodnocení. Stisknutím tlačítka "Pokračovat" můžete práci ihned ohodnotit.';
$string['assessmentsettings'] = 'Podrobnosti hodnocení';
$string['assessmentstart'] = 'Začátek hodnocení';
$string['assessmentstartdatetime'] = 'Hodnocení možné od: {$a->daydatetime} ({$a->distanceday})';
$string['assessmentstartevent'] = '{$a} (začátek hodnocení)';
$string['assessmentweight'] = 'Váha hodnocení';
$string['assignedassessments'] = 'Přidělené práce k hodnocení';
$string['assignedassessmentsnone'] = 'Nebyly vám přiděleny žádné práce k hodnocení';
$string['backtoeditform'] = 'Zpět k úpravě formuláře';
$string['byfullname'] = '- <a href="{$a->url}">{$a->name}</a>';
$string['calculategradinggrades'] = 'Vypočítat známky za hodnocení';
$string['calculategradinggradesdetails'] = 'očekáváno: {$a->expected}<br />vypočítáno: {$a->calculated}';
$string['calculatesubmissiongrades'] = 'Vypočítat známky za odevzdané práce';
$string['calculatesubmissiongradesdetails'] = 'očekáváno: {$a->expected}<br />vypočítáno: {$a->calculated}';
$string['chooseuser'] = 'Vyberte uživatele...';
$string['clearaggregatedgrades'] = 'Vymazat všechny vypočítané souhrnné známky';
$string['clearaggregatedgradesconfirm'] = 'Jste si jisti, že chcete vymazat všechny vypočítané souhrnné známky za odevzdané práce a za hodnocení?';
$string['clearaggregatedgrades_help'] = 'Hodnoty vypočítávaných souhrnných známek za odevzdané práce a za hodnocení budou nastaveny na prázdnou hodnotu. Tyto známky lze nechat znovu vypočítat ve fázi Evaluace hodnocení.';
$string['clearassessments'] = 'Odstranit hodnocení';
$string['clearassessmentsconfirm'] = 'Jste si opravdu jistí, že chcete odstranit všechny udělené známky za odevzdané práce? Sami nebudete moci tuto informaci obnovit - hodnotitelé budou muset znovu hodnotit jim přidělené práce.';
$string['clearassessments_help'] = 'Vypočítané známky za odevzdané práce a známky za hodnocení budou nastaveny na prázdnou hodnotu. Informace o tom, jak jsou vyplněna jednotlivá pole hodnotících formulářů není odstraněna, ale všichni hodnotitelé musejí otevřít hodnotící formuláře všech jim přidělených prací a znovu je uložit. Teprve pak budou jimi navrhované známky znovu vypočítány.';
$string['configexamplesmode'] = 'Výchozí režim používání ukázek prací ve workshopech';
$string['configgrade'] = 'Výchozí hodnota nejvyšší možné známky za odevzdanou práci ve workshopech';
$string['configgradedecimals'] = 'Výchozí počet desetinných míst při zobrazování známek';
$string['configgradinggrade'] = 'Výchozí hodnota nejvyšší možné známky za hodnocení ve workshopech';
$string['configmaxbytes'] = 'Výchozí největší povolená velikost souborů ve workshopech (může být ještě ovlivněna nastavením limitů v kurzu a dalšími parametry)';
$string['configstrategy'] = 'Výchozí strategie hodnocení ve workshopech';
$string['createsubmission'] = 'Odevzdat';
$string['daysago'] = 'před {$a} dny';
$string['daysleft'] = 'zbývá {$a} dnů';
$string['daystoday'] = 'dnes';
$string['daystomorrow'] = 'zítra';
$string['daysyesterday'] = 'včera';
$string['deadlinesignored'] = 'Časová omezení se na vás nevztahují';
$string['editassessmentform'] = 'Upravit hodnotící formulář';
$string['editassessmentformstrategy'] = 'Upravit hodnotící formulář ({$a})';
$string['editingassessmentform'] = 'Úprava hodnotícího formuláře';
$string['editingsubmission'] = 'Úprava odevzdané práce';
$string['editsubmission'] = 'Upravit odevzdanou práci';
$string['err_multiplesubmissions'] = 'Zatímco byl upravován tento formulář, byla odevzdána jiná verze této práce. Každý uživatel může ve workshopu odevzdat jen jednu práci.';
$string['err_removegrademappings'] = 'Chyba při odstraňování nepoužitého mapování známek';
$string['evaluategradeswait'] = 'Prosím vyčkejte na evaluaci všech hodnocení a přepočítání známek';
$string['evaluation'] = 'Evaluace hodnocení';
$string['evaluationmethod'] = 'Metoda evaluace hodnocení';
$string['evaluationmethod_help'] = 'Metoda evaluace hodnocení určuje, jak se vypočítávají známky za hodnocení všech hodnotitelů. Momentálně je k dispozici pouze jedna metoda - srovnání s nejlepším hodnocením.';
$string['example'] = 'Ukázka práce';
$string['exampleadd'] = 'Přidat ukázku práce';
$string['exampleassess'] = 'Hodnotit ukázku práce';
$string['exampleassessments'] = 'Ukázky prací k ohodnocení';
$string['exampleassesstask'] = 'Ohodnotit ukázky prací';
$string['exampleassesstaskdetails'] = 'očekáváno: {$a->expected}<br />ohodnoceno: {$a->assessed}';
$string['examplecomparing'] = 'Porovnání hodnocení této ukázkové práce';
$string['exampledelete'] = 'Odstranit ukázku práce';
$string['exampledeleteconfirm'] = 'Jste si opravdu jistí, že chcete odstranit následující ukázkovou práci? Stisknutím tlačítka \'Pokračovat\' bude ukázka odstraněna.';
$string['exampleedit'] = 'Upravit ukázku práce';
$string['exampleediting'] = 'Úprava ukázky práce';
$string['exampleneedassessed'] = 'Nejprve musíte ohodnotit všechny ukázky prací';
$string['exampleneedsubmission'] = 'Nejprve musíte odevzdat vlastní práci a poté ohodnotit všechny ukázky prací';
$string['examplesbeforeassessment'] = 'Ukázky jsou dostupné až po odevzdání vlastní práce a musejí být ohodnoceny před hodnocením přidělených prací';
$string['examplesbeforesubmission'] = 'Ukázky musejí být ohodnoceny před odevzdáním vlastní práce';
$string['examplesmode'] = 'Režim hodnocení ukázek prací';
$string['examplesubmissions'] = 'Ukázky prací';
$string['examplesvoluntary'] = 'Hodnocení ukázek prací je dobrovolné';
$string['feedbackauthor'] = 'Zpětná vazba pro autora práce';
$string['feedbackby'] = 'Komentář od  {$a}';
$string['feedbackreviewer'] = 'Zpětná vazba pro hodnotitele';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'Udělené známky';
$string['gradecalculated'] = 'Vypočítaná známka za odevzdanou práci';
$string['gradedecimals'] = 'Počet desetinných míst ve známkách';
$string['gradegivento'] = '&gt;';
$string['gradeinfo'] = 'Známka: {$a->received} z {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (hodnocení)';
$string['gradeitemsubmission'] = '{$a->workshopname} (práce)';
$string['gradeover'] = 'Přepsat vypočítanou známku za odevzdanou práci';
$string['gradereceivedfrom'] = '&lt;';
$string['gradesreport'] = 'Přehled známek';
$string['gradinggrade'] = 'Známka za hodnocení';
$string['gradinggradecalculated'] = 'Vypočítaná známka za hodnocení';
$string['gradinggrade_help'] = 'Určuje nejvyšší možnou známku, kterou bude moci hodnotitel získat za provedená hodnocení přidělených prací.';
$string['gradinggradeof'] = 'Známka za hodnocení (z {$a})';
$string['gradinggradeover'] = 'Přepsat známku za hodnocení';
$string['gradingsettings'] = 'Nastavení známkování';
$string['groupnoallowed'] = 'V tomto workshopu nemáme povolen přístup do žádné skupiny';
$string['iamsure'] = 'Ano, jsem si jistý / jistá';
$string['info'] = 'Info';
$string['instructauthors'] = 'Pokyny pro vypracování odevzdávaných prací';
$string['instructreviewers'] = 'Pokyny pro hodnocení přidělených prací';
$string['introduction'] = 'Úvod';
$string['latesubmissions'] = 'Pozdní odevzdání';
$string['latesubmissionsallowed'] = 'Pozdní odevzdání je povoleno';
$string['latesubmissions_desc'] = 'Povolit odevzdávání prací po termínu';
$string['latesubmissions_help'] = 'Je-li povoleno, autoři mohou odevzdávat své práce až po termínu odevzdávání nebo dokonce až ve fázi vzájemného hodnocení. Takto pozdě odevzdané práce však již nebude možno upravovat.';
$string['maxbytes'] = 'Nejvyšší velikost souboru';
$string['modulename'] = 'Workshop';
$string['modulename_help'] = 'Modul Workshop umožňuje sběr a vzájemné hodnocení prácí studentů.

Studenti mohou odevzdat libovolný digitální obsah, např. textové dokumenty, obrázky nebo soubory tabulkového procesoru. Také mohou odevzdávat text psaný přímo v textového editoru na stránce.

Odevzdaná řešení jsou hodnocena pomocí formuláře pro vícekriteriální hodnocení. Podobu těchto hodnotících formulářů nastavuje učitel. Proces vzájemného hodnocení a pochopení hodnotícího formuláře může být procvičován předem na příkladech, které poskytl učitel spolu s referenčním hodnocení. Studenti mají možnost hodnotit jednu nebo více přidělených prací. Odevzdaná řešení i jejich hodnocení mohou být v případě potřeby anonymní.

Studenti získají v modulu Workshop dvě známky - jednu za své vlastní řešení, druhou za hodnocení přidělených prací. Obě známky jsou zapsány v klasifikaci.';
$string['modulenameplural'] = 'Workshopy';
$string['mysubmission'] = 'Moje práce';
$string['nattachments'] = 'Nejvyšší povolený počet přiložených souborů';
$string['noexamples'] = 'Tento workshop zatím neobsahuje žádné ukázky prací';
$string['noexamplesformready'] = 'Před vložením ukázek prací musíte nedefinovat hodnotící formulář';
$string['nogradeyet'] = 'Zatím bez známky';
$string['nosubmissionfound'] = 'Tento uživatel zatím neodevzdal svou práci';
$string['nosubmissions'] = 'Tento workshop zatím neobsahuje žádné odevzdané práce';
$string['notassessed'] = 'Zatím nehodnoceno';
$string['nothingtoreview'] = 'Nic k prohlédnutí';
$string['notoverridden'] = 'Nepřepisovat';
$string['noworkshops'] = 'Tento kurz neobsahuje žádné workshopy';
$string['noyoursubmission'] = 'Zatím jste neodevzdali svou práci';
$string['nullgrade'] = '-';
$string['page-mod-workshop-x'] = 'Jakákoliv stránka workshopu';
$string['participant'] = 'Účastník';
$string['participantrevierof'] = 'Účastník bude hodnotit';
$string['participantreviewedby'] = 'Účastník bude hodnocen';
$string['phaseassessment'] = 'Hodnocení';
$string['phaseclosed'] = 'Uzavřeno';
$string['phaseevaluation'] = 'Evaluace';
$string['phasesetup'] = 'Nastavení';
$string['phasesoverlap'] = 'Fáze odevzdávání a fáze hodnocení se nesmí překrývat';
$string['phasesubmission'] = 'Odevzdávání';
$string['pluginadministration'] = 'Správa workshopu';
$string['pluginname'] = 'Workshop';
$string['prepareexamples'] = 'Připravit ukázky prací';
$string['previewassessmentform'] = 'Náhled';
$string['publishedsubmissions'] = 'Zveřejněné práce';
$string['publishsubmission'] = 'Zveřejnit práci';
$string['publishsubmission_help'] = 'Zveřejněné práce jsou dostupné ostatním účastníkům poté, co je workshop uzavřen.';
$string['reassess'] = 'Přehodnotit';
$string['receivedgrades'] = 'Obdržené známky';
$string['recentassessments'] = 'Hodnocení ve workshopech:';
$string['recentsubmissions'] = 'Odevzdané práce ve workshopech:';
$string['saveandclose'] = 'Uložit a zavřít';
$string['saveandcontinue'] = 'Uložit a pokračovat v úpravách';
$string['saveandpreview'] = 'Uložit a ukázat náhled';
$string['selfassessmentdisabled'] = 'Sebehodnocení není povoleno';
$string['showingperpage'] = 'Zobrazuje se {$a} položek na stránce';
$string['showingperpagechange'] = 'Změnit ...';
$string['someuserswosubmission'] = 'Nejméně jeden uživatel dosud neodevzdal svou práci';
$string['sortasc'] = 'Vzestupně';
$string['sortdesc'] = 'Sestupně';
$string['strategy'] = 'Strategie hodnocení';
$string['strategyhaschanged'] = 'V průběhu úprav tohoto formuláře byla strategie hodnocení v tomto workshopu změněna';
$string['strategy_help'] = 'Strategie hodnocení ovlivňuje podobu hodnotícího formuláře a způsob vypočítávání známky za odevzdanou práci. Dostupné jsou následující možnosti:

* Akumulační hodnocení - hodnotitel vkládá dílčí známky a komentáře k jednotlivým aspektům práce, celková známka je váženým průměrem dílčích
* Komentáře - hodnotitel pouze vkládá dílčí komentáře, známku nelze ovlivnit
* Počet chyb - hodnotitel rozhoduje o pravdivosti dílčích výroků, známka se určuje podle převodní tabulky na základě váženého počtu negativních odpovědí
* Rubrika - hodnotící rubrika s libovolným počtem úrovní u jednotlivých kritérií';
$string['submission'] = 'Odevzdaná práce';
$string['submissionattachment'] = 'Příloha';
$string['submissionby'] = 'Odevzdaná práce od {$a}';
$string['submissioncontent'] = 'Obsah práce';
$string['submissionend'] = 'Konec odevzdávání';
$string['submissionendbeforestart'] = 'Konec odevzdávání nelze nastavit před datem začátku odevzdávání';
$string['submissionenddatetime'] = 'Konec odevzdávání: {$a->daydatetime} ({$a->distanceday})';
$string['submissionendevent'] = '{$a} (konec odevzdávání)';
$string['submissionendswitch'] = 'Přepnout do další fáze po termínu odevzdávání';
$string['submissiongrade'] = 'Známka za odevzdanou práci';
$string['submissiongrade_help'] = 'Určuje nejvyšší možnou známku, kterou je možno získat za odevzdanou práci';
$string['submissiongradeof'] = 'Známka za odevzdanou práci (z {$a})';
$string['submissionsettings'] = 'Nastavení odevzdávání';
$string['submissionstart'] = 'Začátek odevzdávání';
$string['submissionstartdatetime'] = 'Začátek odevzdávání: {$a->daydatetime} ({$a->distanceday})';
$string['submissionstartevent'] = '{$a} (začátek odevzdávání)';
$string['submissiontitle'] = 'Název';
$string['subplugintype_workshopallocation'] = 'Metoda přiřazování prací k hodnocení';
$string['subplugintype_workshopallocation_plural'] = 'Metody přiřazování prací k hodnocení';
$string['subplugintype_workshopeval'] = 'Metoda evaluace hodnocení';
$string['subplugintype_workshopeval_plural'] = 'Metody evaluace hodnocení';
$string['subplugintype_workshopform'] = 'Strategie hodnocení';
$string['subplugintype_workshopform_plural'] = 'Strategie hodnocení';
$string['switchingphase'] = 'Přepínání fáze workshopu';
$string['switchphase'] = 'Přepnout fázi workshopu';
$string['switchphase10info'] = 'Chystáte se přepnout workshop do fáze <strong>Nastavení</strong>. Během této fáze nemohou studenti upravovat ani své práce ani přidělená hodnocení. Učitelé mohou používat tuto fázi ke změnám nastavení workshopu, úpravám hodnotící strategie nebo úpravám hodnotících formulářů.';
$string['switchphase20info'] = 'Chystáte se přepnout workshop do fáze <strong>Odevzdávání</strong>. Studenti budou odevzdat své práce (v rámci případných termínů, jsou-li nastaveny). Učitelé mohou přidělovat práce ke vzájemnému hodnocení.';
$string['switchphase30auto'] = 'Workshop se přepne automaticky do fáze hodnocení po  {$a->daydatetime} ({$a->distanceday})';
$string['switchphase30info'] = 'Chystáte se přepnout workshop do fáze <strong>Hodnocení</strong>. V této fázi budou hodnotitelé hodnotit jim přidělené práce (v rámci případných termínů, jsou-li nastaveny).';
$string['switchphase40info'] = 'Chystáte se přepnout workshop do fáze <strong>Evaluace</strong>. Studenti již nebudou moci upravovat ani své odevzdané práce, ani vzájemná hodnocení. Učitelé mohou revidovat hodnocení prací, použít nástroje pro výpočet celkových známek a poskytnout studentům zpětnou vazbu.';
$string['switchphase50info'] = 'Chystáte se uzavřít workshop. Při uzavření budou celkové známky zapsány do klasifikace v kurzu. Studenti budou mít k dispozici své práce a jejich hodnocení.';
$string['taskassesspeers'] = 'Ohodnotit přidělené práce';
$string['taskassesspeersdetails'] = 'celkem: {$a->total}<br />zbývá: {$a->todo}';
$string['taskassessself'] = 'Ohodnotit sebe sama';
$string['taskinstructauthors'] = 'Poskytnout pokyny k vypracování';
$string['taskinstructreviewers'] = 'Poskytnout pokyny k hodnocení';
$string['taskintro'] = 'Nastavit úvod do workshopu';
$string['tasksubmit'] = 'Odevzdat vlastní práci';
$string['toolbox'] = 'Nástroje workshopu';
$string['undersetup'] = 'Tento workshop je momentálně ve fázi nastavení. Prosím, vyčkejte, dokud nebude přepnut do další fáze.';
$string['useexamples'] = 'Používat ukázky';
$string['useexamples_desc'] = 'Ukázky prací je možno využít k nácviku hodnocení nanečisto';
$string['useexamples_help'] = 'Je-li povoleno, studentům budou předloženy připravené ukázky různých prací, které si budou moci zkusmo ohodnotit a porovnat své hodnocení s tzv. referenčním hodnocením. Hodnocení ukázek nijak neovlivňuje výsledné známky za hodnocení.';
$string['usepeerassessment'] = 'Používat vzájemné hodnocení';
$string['usepeerassessment_desc'] = 'Studenti budou moci hodnotit práce ostatních studentů';
$string['usepeerassessment_help'] = 'Je-li povoleno, studentům bude možno přidělit práce ostatních ke vzájemnému hodnocení. Vedle známky za jejich vlastní odevzdanou práci získají ve workshopu i známku za kvalitu hodnocení prací ostatních.';
$string['userdatecreated'] = 'odevzdáno <span>{$a}</span>';
$string['userdatemodified'] = 'upraveno <span>{$a}</span>';
$string['userplan'] = 'Plán workshopu';
$string['userplan_help'] = 'Plán workshopu zobrazuje všechny fáze této aktivity a seznam úkolů daného uživatele v každé fázi. Momentálně aktuální fáze je zvýrazněna a stav splnění úkolů je indikován příslušným symbolem.';
$string['useselfassessment'] = 'Používat sebehodnocení';
$string['useselfassessment_desc'] = 'Studenti mohou hodnotit vlastní práci';
$string['useselfassessment_help'] = 'Je-li povoleno, studentům bude moci být přidělena i jejich vlastní práce k ohodnocení, úplně stejně jako by se jednalo o práci jiného studenta.';
$string['weightinfo'] = 'Váha: {$a}';
$string['withoutsubmission'] = 'Hodnotitel bez vlastní odevzdané práce';
$string['workshop:addinstance'] = 'Přidat nový workshop';
$string['workshop:allocate'] = 'Přidělovat odevzdané práce k ohodnocení';
$string['workshop:editdimensions'] = 'Upravovat hodnotící formuláře';
$string['workshopfeatures'] = 'Vlastnosti workshopu';
$string['workshop:ignoredeadlines'] = 'Ignorovat časová omezení';
$string['workshop:manageexamples'] = 'Spravovat ukázky prací';
$string['workshopname'] = 'Název workshopu';
$string['workshop:overridegrades'] = 'Přepisovat vypočítané známky';
$string['workshop:peerassess'] = 'Hodnotit přidělené práce';
$string['workshop:publishsubmissions'] = 'Zveřejňovat odevzdané práce';
$string['workshop:submit'] = 'Odevzdávat vlastní práci';
$string['workshop:switchphase'] = 'Přepínat fázi workshopu';
$string['workshop:view'] = 'Vidět workshop';
$string['workshop:viewallassessments'] = 'Vidět všechna hodnocení';
$string['workshop:viewallsubmissions'] = 'Vidět všechny odevzdané práce';
$string['workshop:viewauthornames'] = 'Vidět jména autorů odevzdaných prací';
$string['workshop:viewauthorpublished'] = 'Vidět autory zveřejněných prací';
$string['workshop:viewpublishedsubmissions'] = 'Vidět zveřejněné práce';
$string['workshop:viewreviewernames'] = 'Vidět jména hodnotitelů';
$string['yourassessment'] = 'Vaše hodnocení';
$string['yoursubmission'] = 'Vaše práce';
