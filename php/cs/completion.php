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
 * Strings for component 'completion', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Dosažení známky';
$string['activities'] = 'Činnosti';
$string['activitiescompleted'] = 'Splněné činnosti';
$string['activitycompletion'] = 'Plnění činností';
$string['addcourseprerequisite'] = 'Přidat prerekvizitu kurzu';
$string['afterspecifieddate'] = 'Po zadaném datu';
$string['aggregationmethod'] = 'Způsob vyhodnocení podmínek';
$string['all'] = 'Všechny splněny';
$string['any'] = 'Alespoň jedna splněna';
$string['approval'] = 'Schválení';
$string['badautocompletion'] = 'Když zvolíte automatické splnění, musíte také povolit alespoň jednu z podmínek níže.';
$string['completed'] = 'Splněno';
$string['completedunlocked'] = 'Možnosti splnění odemčeny';
$string['completedunlockedtext'] = 'Po uložení změn dojde ke smazání stavu splnění činností pro všechny studenty. Nechcete-li toto provést, neukládejte formulář.';
$string['completedwarning'] = 'Možnosti splnění uzamčeny';
$string['completedwarningtext'] = 'Jeden nebo více studentů ({$a}) již označil tuto činnost jako splněnou. Změna možností splnění smaže jejich stav a může způsobit zmatek. Proto byly tyto možnosti uzamčeny a neměly by být odemčeny, pokud to není nezbytně nutné.';
$string['completion'] = 'Sledování plnění';
$string['completion-alt-auto-enabled'] = 'Systém označí splnění této položky v souladu s nastavenými podmínkami';
$string['completion-alt-auto-fail'] = 'Splněno; ale nedosáhlo se potřebné známky';
$string['completion-alt-auto-n'] = 'Nesplněno';
$string['completion-alt-auto-pass'] = 'Splněno; dosáhlo se potřebné známky';
$string['completion-alt-auto-y'] = 'Splněno';
$string['completion-alt-manual-enabled'] = 'Studenti mohou sami označit položku jako splněnou';
$string['completion-alt-manual-n'] = 'Nesplněno; výběrem označíte jako splněné';
$string['completion-alt-manual-y'] = 'Splněno; výběrem označíte jako nesplněné';
$string['completion_automatic'] = 'Zobraz činnost jako splněnou, pokud jsou splněny podmínky';
$string['completiondisabled'] = 'Zakázáno, nezobrazovat v nastavení činností';
$string['completionenabled'] = 'Povoleno, vizte další nastavení v editovacím formuláři činností';
$string['completionexpected'] = 'Očekávat splnění do';
$string['completionexpected_help'] = 'Toto nastavení určuje orientační datum očekávaného splnění činnosti. Datum se nezobrazuje studentům a je zobrazováno pouze v sestavě o plnění činností.';
$string['completion-fail'] = 'Splněno (nedosaženo požadované hodnocení)';
$string['completion_help'] = 'Zda se má sledovat plnění činností v kurzu. Činnosti lze označovat jako splněné buď ručně nebo automaticky v závislosti na nastavených podmínkách. Podle potřeby může být podmínek více. Je-li tomu tak, je činnosti označena jako splněná při splnění všech podmínek současně.

Stav plnění každé činnosti je indikován ikonou vedle názvu dané činnosti.';
$string['completionicons'] = 'Pole pro označení splnění';
$string['completionicons_help'] = 'Zaškrtávací políčko vedle názvu činnosti ukazuje, zda je daná činnost splněná.

Pokud je pole orámováno tečkami, můžete na něj kliknout k ručnímu označení činnosti jako splněné (opětovné kliknutí pak vrací stav zpět). Používání takového ukazatele je zcela na vás. Můžete jej používat pro udržování si vlastního přehledu o postupu plnění kurzu.

Pokud je zobrazeno prázdné políčko, bude zaškrtnuto automaticky poté, co splníte všechny podmínky pro splnění, které nadefinoval váš vyučující.';
$string['completion_manual'] = 'Studenti mohou ručně označit činnost jako splněnou';
$string['completionmenuitem'] = 'Absolvování';
$string['completion-n'] = 'Nesplněno';
$string['completion_none'] = 'Nezobrazuj splnění činnosti';
$string['completionnotenabled'] = 'Sledování plnění není povoleno';
$string['completionnotenabledforcourse'] = 'Sledování plnění není v tomto kurzu povoleno';
$string['completionnotenabledforsite'] = 'Sledování plnění není na těchto stránkách povoleno';
$string['completiononunenrolment'] = 'Absolvováno při vyškrtnutí z kurzu';
$string['completion-pass'] = 'Splněno (dosaženo požadované hodnocení)';
$string['completionsettingslocked'] = 'Možnosti splnění uzamčeny';
$string['completionstartonenrol'] = 'Sledování plnění začíná při zápisu do kurzu';
$string['completionstartonenrolhelp'] = 'Zahájit sledování pokroku studenta při zápisu do kurzu';
$string['completion-title-manual-n'] = 'Označit jako splněné';
$string['completion-title-manual-y'] = 'Označit jako nesplněné';
$string['completionusegrade'] = 'Požadovat známku';
$string['completionusegrade_desc'] = 'Student musí obdržet nějakou známku pro splnění této činnosti';
$string['completionusegrade_help'] = 'Zda má být činnost považována za splněnou poté, co student obdrží známku. Ikona úspěšného či neúspěšného splnění je zobrazena, pokud je nastavena potřebná známka.';
$string['completionview'] = 'Požadovat zobrazení';
$string['completionview_desc'] = 'Student si musí zobrazit tuto činnost pro její splnění';
$string['completion-y'] = 'Splněno';
$string['configenablecompletion'] = 'Pokud je povolena, tato volba vám umožňuje zapnout funkce sledování plnění na úrovni kurzu.';
$string['confirmselfcompletion'] = 'Potvrdit absolvování kurzu';
$string['coursealreadycompleted'] = 'Tento kurz jste již absolvovali';
$string['coursecomplete'] = 'Absolvování kurzu';
$string['coursecompleted'] = 'Absolvovaný kurz';
$string['coursegrade'] = 'Známka kurzu';
$string['courseprerequisites'] = 'Prerekvizity kurzu';
$string['coursesavailable'] = 'Dostupné kurzy';
$string['coursesavailableexplaination'] = 'Aby se kurz objevil v tomto seznamu, musí v něm být nadefinovány podmínky jeho absolvování';
$string['criteria'] = 'Podmínky';
$string['criteriagroup'] = 'Skupina podmínek';
$string['criteriarequiredall'] = 'Všechny podmínky jsou požadovány';
$string['criteriarequiredany'] = 'Libovolná podmínka je požadována';
$string['csvdownload'] = 'Stáhnout v CSV formátu (UTF-8)';
$string['datepassed'] = 'Datum splnění';
$string['days'] = 'Dnů';
$string['daysafterenrolment'] = 'Dnů po zápisu';
$string['deletecompletiondata'] = 'Odstranit data o plnění činností';
$string['deletecoursecompletiondata'] = 'Smazat data týkající se absolvování kurzu';
$string['durationafterenrolment'] = 'Setrvání v kurzu po danou dobu po zápisu';
$string['editcoursecompletionsettings'] = 'Nastavení podmínek absolvování kurzu';
$string['enablecompletion'] = 'Povolit sledování plnění';
$string['enrolmentduration'] = 'Zbývající dny';
$string['err_noactivities'] = 'Sledování informací o plnění není povoleno pro žádnou činnost, takže nelze nic zobrazit. Můžete upravit nastavení nějaké činnosti v kurzu a zapnout sledování plnění.';
$string['err_nocourses'] = 'Sledování informací o absolvování kurzu není povoleno pro žádné jiné kurzy, takže nelze nic zobrazit. Můžete upravit nastavení nějakého kurzu a zapnout možnost jeho absolvování.';
$string['err_nograde'] = 'Tento kurz nemá nastavenu potřebnou známku. Pro použití tohoto typu kriteria musíte nejprve nadefinovat potřebnou známku pro jeho absolvování.';
$string['err_noroles'] = 'V tomto kurzu nebyly nalezeny žádné uživatelské role s pravomocí "moodle/course:markcomplete". Tato podmínka může být povolena, pokud některé z rolí v kurzu přidáte toto oprávnění.';
$string['err_nousers'] = 'V tomto kurzu nejsou žádní uživatelé, jimž by bylo možno zobrazit informace o plnění činností a absolvování kurzu. Ve výchozím nastavení jsou tyto informace dostupné pouze studentům. Takže pravděpodobně nemáte v kurzu žádné studenty. Váš správce může nicméně toto nastavení změnit v konfiguraci serveru.';
$string['err_settingslocked'] = 'Jeden nebo více studentů má již splněny dané podmínky, takže jejich nastavení bylo uzamčeno. Odemknutí tohoto nastavení odstraní všechna stávající data a může uživatele zmást.';
$string['err_system'] = 'Došlo k interní chybě v systému sledování plnění činností a absolvování kurzu. Správci systému mohou zapnout zobrazování ladících informací pro získání detailního popisu chyby.';
$string['excelcsvdownload'] = 'Stáhnout ve formátu CSV (kompatibilní s Excelem)';
$string['fraction'] = 'Zlomek';
$string['graderequired'] = 'Požadované hodnocení';
$string['gradexrequired'] = 'Požadováno {$a}';
$string['inprogress'] = 'Probíhá';
$string['manualcompletionby'] = 'Ručně nastavené absolvování kurzu jiným uživatelem';
$string['manualselfcompletion'] = 'Ručně nastavené absolvování kurzu samotným studentem';
$string['markcomplete'] = 'Označit jako splněné';
$string['markedcompleteby'] = '{$a} označil jako splněné';
$string['markingyourselfcomplete'] = 'Prohlásit za splněné';
$string['moredetails'] = 'Více podrobností';
$string['nocriteriaset'] = 'Nebyly nastaveny podmínky pro absolvování tohoto kurzu';
$string['notcompleted'] = 'Nesplněno';
$string['notenroled'] = 'Nejste zapsaní v tomto kurzu';
$string['notyetstarted'] = 'Zatím nezačalo';
$string['overallcriteriaaggregation'] = 'Obecný způsob vyhodnocování kritérií';
$string['pending'] = 'Čeká';
$string['periodpostenrolment'] = 'Období po zápisu';
$string['prerequisites'] = 'Prerekvizity ';
$string['prerequisitescompleted'] = 'Prerekvizity splněny';
$string['progress'] = 'Pokrok studenta';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Pokrok: {$a->complete} z {$a->total}';
$string['recognitionofpriorlearning'] = 'Uznání předchozího studia';
$string['remainingenroledfortime'] = 'Zůstávají zapsaní v určitém časovém intervalu';
$string['remainingenroleduntildate'] = 'Zůstávají zapsaní do určitého data';
$string['reportpage'] = 'Uživatelé {$a->from} až {$a->to} z {$a->total} celkem.';
$string['requiredcriteria'] = 'Požadovaná kriteria';
$string['restoringcompletiondata'] = 'Zapisují se údaje o plnění';
$string['saved'] = 'Uloženo';
$string['seedetails'] = 'Podrobnosti';
$string['self'] = 'Sám uživatel';
$string['selfcompletion'] = 'Absolvování kurzu';
$string['showinguser'] = 'Zobrazený uživatel';
$string['unenrolingfromcourse'] = 'Vyškrtnutí z kurzu';
$string['unenrolment'] = 'Vyškrtnutí z kurzu';
$string['unit'] = 'Jednotka';
$string['unlockcompletion'] = 'Odemknout možnosti plnění';
$string['unlockcompletiondelete'] = 'Odemknou možnosti absolvování a odstranit data uživatelů o plnění činností';
$string['usealternateselector'] = 'Použít alternativní výběr kurzu';
$string['usernotenroled'] = 'Uživatel není zapsán v tomto kurzu';
$string['viewcoursereport'] = 'Zobrazit přehled kurzu';
$string['viewingactivity'] = 'Zobrazení {$a}';
$string['writingcompletiondata'] = 'Zapisují se údaje o plnění';
$string['xdays'] = '{$a} dní';
$string['yourprogress'] = 'Váš pokrok';
