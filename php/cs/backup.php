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
 * Strings for component 'backup', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoactivedescription'] = 'Zda se má povolit automatické zálohování. Je-li vybrána možnost "Ručně", mohou být automatické zálohy provedeny pouze příslušným CLI skriptem. Ten se dá spouštět buď ručně nebo pomocí naplánované úlohy (cron) na serveru.';
$string['autoactivedisabled'] = 'Zakázáno';
$string['autoactiveenabled'] = 'Povoleno';
$string['autoactivemanual'] = 'Ručně';
$string['automatedbackupschedule'] = 'Časový plán';
$string['automatedbackupschedulehelp'] = 'Zvolte, ve kterých dnech v týdnu se má provádět automatické zálohování';
$string['automatedbackupsinactive'] = 'Automatické zálohy nebyly správcem systému povoleny';
$string['automatedbackupstatus'] = 'Stav automatických záloh';
$string['automatedsettings'] = 'Nastavení automatických záloh';
$string['automatedsetup'] = 'Nastavení automatických záloh';
$string['automatedstorage'] = 'Úložiště automatických záloh';
$string['automatedstoragehelp'] = 'Zvolte umístění, kam chcete zálohy ukládat poté, co jsou automaticky vytvořeny.';
$string['backupactivity'] = 'Zálohování činnosti: {$a}';
$string['backupcourse'] = 'Zálohování kurzu: {$a}';
$string['backupcoursedetails'] = 'Podrobnosti kurzu';
$string['backupcoursesection'] = 'Sekce: {$a}';
$string['backupcoursesections'] = 'Sekce kurzu';
$string['backupdate'] = 'Datum pořízení';
$string['backupdetails'] = 'Podrobnosti zálohy';
$string['backupdetailsnonstandardinfo'] = 'Vybraný soubor nemá standardní 2.x formát MBZ. Proces obnovy se jej nejprve pokusí na stadardní formát převést a teprve poté obnovit.';
$string['backupformat'] = 'Formát';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Neznámý formát';
$string['backupmode'] = 'Režim';
$string['backupmode10'] = 'Obecné';
$string['backupmode20'] = 'Import';
$string['backupmode30'] = 'Hub';
$string['backupmode40'] = 'Ze stejného serveru';
$string['backupmode50'] = 'Automatizovaný';
$string['backupmode60'] = 'Konvertován';
$string['backupsection'] = 'Zálohování sekce kurzu: {$a}';
$string['backupsettings'] = 'Nastavení zálohování';
$string['backupsitedetails'] = 'Informace o stránkách';
$string['backupstage16action'] = 'Pokračovat';
$string['backupstage1action'] = 'Další';
$string['backupstage2action'] = 'Další';
$string['backupstage4action'] = 'Provést zálohu';
$string['backupstage8action'] = 'Pokračovat';
$string['backuptype'] = 'Typ';
$string['backuptypeactivity'] = 'Činnost';
$string['backuptypecourse'] = 'Kurz';
$string['backuptypesection'] = 'Sekce';
$string['backupversion'] = 'Verze zálohy';
$string['cannotfindassignablerole'] = 'Záloha obsahuje roli {$a}, kterou nelze namapovat na žádnou z rolí, kterou jste oprávnění přiřazovat.';
$string['choosefilefromactivitybackup'] = 'Oblast se zálohami činností';
$string['choosefilefromactivitybackup_help'] = 'Kam ukládat soubory se zálohami činností při použití výchozího nastavení';
$string['choosefilefromautomatedbackup'] = 'Automatické zálohování';
$string['choosefilefromautomatedbackup_help'] = 'Obsahuje automaticky generované zálohy.';
$string['choosefilefromcoursebackup'] = 'Oblast se zálohami kurzů';
$string['choosefilefromcoursebackup_help'] = 'Kam ukládat soubory se zálohami kurzů při použití výchozího nastavení';
$string['choosefilefromuserbackup'] = 'Oblast pro soukromé zálohy kurzů';
$string['choosefilefromuserbackup_help'] = 'Kam ukládat zálohy kurzů při použití funkce "Anonymizovat data uživatelů".';
$string['configgeneralactivities'] = 'Nastavení výchozí hodnoty pro zahrnování činností do záloh';
$string['configgeneralanonymize'] = 'Zda ve výchozím nastavení anonymizovat veškeré údaje týkající se uživatelů';
$string['configgeneralblocks'] = 'Nastavení výchozí hodnoty pro zahrnování postranních bloků do záloh';
$string['configgeneralcomments'] = 'Nastavení výchozí hodnoty pro zahrnování komentářů do záloh';
$string['configgeneralfilters'] = 'Nastavení výchozí hodnoty pro zahrnování filtrů do záloh';
$string['configgeneralhistories'] = 'Nastavení výchozí hodnoty pro zahrnování uživatelské historie do záloh';
$string['configgenerallogs'] = 'Zda do záloh zahrnovat protokoly';
$string['configgeneralroleassignments'] = 'Zda do záloh zahrnovat přiřazení rolí';
$string['configgeneralusers'] = 'Nastavení výchozí hodnoty pro zahrnování uživatelů do záloh';
$string['configgeneraluserscompletion'] = 'Zda do záloh zahrnovat informace o splnění činností v kurzu';
$string['confirmcancel'] = 'Zrušit zálohování';
$string['confirmcancelno'] = 'Zůstat';
$string['confirmcancelquestion'] = 'Určitě zrušit? Veškeré zadané informace budou ztraceny.';
$string['confirmcancelyes'] = 'Zrušit';
$string['confirmnewcoursecontinue'] = 'Upozornění na nový kurz';
$string['confirmnewcoursecontinuequestion'] = 'V průběhu obnovy bude vytvořen nový kurz a obsah zálohy do něj bude zkopírován. V případě, že proces obnovy selže nebo jej přerušíte (např. zavřením okna prohlížeče), může v databázi zůstat torzo tohoto nového kurzu.';
$string['coursecategory'] = 'Kategorie, do které bude kurz obnoven';
$string['courseid'] = 'Původní ID';
$string['coursesettings'] = 'Nastavení kurzu';
$string['coursetitle'] = 'Název';
$string['currentstage1'] = 'Počáteční nastavení';
$string['currentstage16'] = 'Dokončení';
$string['currentstage2'] = 'Nastavení schématu';
$string['currentstage4'] = 'Potvrzení a přehled';
$string['currentstage8'] = 'Provést zálohu';
$string['dependenciesenforced'] = 'Vaše nastavení muselo být upraveno vzhledem k nesplněným závislostem';
$string['enterasearch'] = 'Vložte vyhledávací dotaz';
$string['error_block_for_module_not_found'] = 'Nalezena osamocená instance bloku (id: {$a->bid}) modulu kurzu (id: {$a->mid}) . Tento blok nebude zálohován';
$string['error_course_module_not_found'] = 'Nalezen osamocený modul kurzu (id: {$a}) . Tento modul nebude zálohován.';
$string['errorfilenamemustbezip'] = 'Soubor, jehož název vkládáte, musí být ZIP soubor a musí mít příponu .mbz';
$string['errorfilenamerequired'] = 'Musíte zadat platný název souboru pro tuto zálohu';
$string['errorinvalidformat'] = 'Neznámý formát zálohy';
$string['errorinvalidformatinfo'] = 'Vybraný soubor nemá standardní 2.x formát MBZ a nemůže být obnoven.';
$string['errorminbackup20version'] = 'Tento záložní soubor byl vytvořen ve vývojové verzi zálohování Moodle ({$a->backup}). Minimální požadovaná verze je {$a->min}. Nemůže být obnoven.';
$string['errorrestorefrontpage'] = 'Obnovení kurzu do titulní stránky není dovoleno.';
$string['executionsuccess'] = 'Soubor zálohy byl úspěšně vytvořen.';
$string['filename'] = 'Název souboru';
$string['filereferencesincluded'] = 'Záloha obsahuje zástupce externích souborů. Na jiných serverech nemusí být někteří zástupci obnovitelní.';
$string['generalactivities'] = 'Zahrnout moduly činností';
$string['generalanonymize'] = 'Anonymizovat informace';
$string['generalbackdefaults'] = 'Obecné výchozí nastavení zálohování';
$string['generalblocks'] = 'Zahrnout bloky';
$string['generalcomments'] = 'Zahrnout komentáře';
$string['generalfilters'] = 'Zahrnout filtry';
$string['generalgradehistories'] = 'Zahrnout historii';
$string['generalhistories'] = 'Zahrnout historii';
$string['generallogs'] = 'Zahrnout protokoly';
$string['generalroleassignments'] = 'Zahrnout přidělení rolí';
$string['generalsettings'] = 'Obecná nastavení zálohování';
$string['generalusers'] = 'Zahrnout uživatele';
$string['generaluserscompletion'] = 'Zahrnout informaci o splnění činností v kurzu';
$string['importbackupstage16action'] = 'Pokračovat';
$string['importbackupstage1action'] = 'Další';
$string['importbackupstage2action'] = 'Další';
$string['importbackupstage4action'] = 'Provést import';
$string['importbackupstage8action'] = 'Pokračovat';
$string['importcurrentstage0'] = 'Výběr kurzu';
$string['importcurrentstage1'] = 'Počáteční nastavení';
$string['importcurrentstage16'] = 'Dokončit';
$string['importcurrentstage2'] = 'Nastavení schématu';
$string['importcurrentstage4'] = 'Potvrzení a přehled';
$string['importcurrentstage8'] = 'Provést import';
$string['importfile'] = 'Importovat soubor zálohy';
$string['importsuccess'] = 'Import je kompletní. Pro návrat do kurzu klikněte na pokračovat.';
$string['includeactivities'] = 'Zahrnout:';
$string['includeditems'] = 'Zahrnuté položky:';
$string['includefilereferences'] = 'Zástupci externích souborů';
$string['includesection'] = 'Sekce {$a}';
$string['includeuserinfo'] = 'Uživatelská data';
$string['locked'] = 'Zamčeno';
$string['lockedbyconfig'] = 'Toto nastavení bylo zamčeno výchozím nastavením zálohování';
$string['lockedbyhierarchy'] = 'Zamčeno kvůli závislostem';
$string['lockedbypermission'] = 'Nemáte dostatečná oprávnění pro změnu tohoto nastavení';
$string['loglifetime'] = 'Uchovat protokoly';
$string['managefiles'] = 'Správa záložních souborů';
$string['moodleversion'] = 'Verze Moodle';
$string['moreresults'] = 'Příliš mnoho výsledků, zadejte přesnější vyhledávání.';
$string['nomatchingcourses'] = 'Žádné kurzy k zobrazení';
$string['norestoreoptions'] = 'Žádné kategorie nebo stávající kurzy, do kterých by bylo možno obnovit.';
$string['originalwwwroot'] = 'URL zálohy';
$string['previousstage'] = 'Předchozí';
$string['qcategory2coursefallback'] = 'Kategorie testových úloh "{$a->name}", původně umístěna v systémovém kontextu nebo v kontextu kategorie kurzů, bude v průběhu obnovy vytvořena v kontextu kurzu.';
$string['qcategorycannotberestored'] = 'Kategorie testových úloh "{$a->name}" nemůže být v průběhu obnovy vytvořena';
$string['question2coursefallback'] = 'Kategorie testových úloh "{$a->name}", původně umístěna v systémovém kontextu nebo v kontextu kategorie kurzů, bude v průběhu obnovy vytvořena v kontextu kurzu.';
$string['questionegorycannotberestored'] = 'Úlohy "{$a->name}" nemohou být při obnově vytvořeny';
$string['restoreactivity'] = 'Obnova modulu činnosti';
$string['restorecourse'] = 'Obnova kurzu';
$string['restorecoursesettings'] = 'Nastavení kurzu';
$string['restoreexecutionsuccess'] = 'Kurz byl úspěšně obnoven. Klikněte na tlačítko Pokračovat k jeho zobrazení.';
$string['restorenewcoursefullname'] = 'Nové jméno kurzu';
$string['restorenewcourseshortname'] = 'Nové krátké jméno kurzu';
$string['restorenewcoursestartdate'] = 'Nové datum začátku kurzu';
$string['restorerolemappings'] = 'Obnova mapování rolí';
$string['restorerootsettings'] = 'Obnova nastavení';
$string['restoresection'] = 'Obnova sekcí';
$string['restorestage1'] = 'Potvrdit';
$string['restorestage16'] = 'Přehled';
$string['restorestage16action'] = 'Provést obnovu';
$string['restorestage1action'] = 'Další';
$string['restorestage2'] = 'Místo obnovy';
$string['restorestage2action'] = 'Další';
$string['restorestage32'] = 'Provést obnovu';
$string['restorestage32action'] = 'Pokračovat';
$string['restorestage4'] = 'Nastavení';
$string['restorestage4action'] = 'Další';
$string['restorestage64'] = 'Dokončení';
$string['restorestage64action'] = 'Pokračovat';
$string['restorestage8'] = 'Schéma';
$string['restorestage8action'] = 'Další';
$string['restoretarget'] = 'Cíl obnovy';
$string['restoretocourse'] = 'Obnovit do kurzu:';
$string['restoretocurrentcourse'] = 'Obnovit do tohoto kurzu';
$string['restoretocurrentcourseadding'] = 'Začlenit zálohovaný kurz do tohoto kurzu';
$string['restoretocurrentcoursedeleting'] = 'Odstranit obsah tohoto kurzu a poté obnovit';
$string['restoretoexistingcourse'] = 'Obnovit do stávajícího kurzu';
$string['restoretoexistingcourseadding'] = 'Začlenit zálohovaný kurz do stávajícího kurzu';
$string['restoretoexistingcoursedeleting'] = 'Odstranit obsah stávajícího kurzu a poté obnovit';
$string['restoretonewcourse'] = 'Obnovit jako nový kurz';
$string['restoringcourse'] = 'Probíhá obnova kurzu';
$string['restoringcourseshortname'] = 'obnovování';
$string['rootsettingactivities'] = 'Zahrnout moduly činností';
$string['rootsettinganonymize'] = 'Anonymizovat uživatelská data';
$string['rootsettingblocks'] = 'Zahrnout bloky';
$string['rootsettingcalendarevents'] = 'Zahrnout události kalendáře';
$string['rootsettingcomments'] = 'Zahrnout komentáře';
$string['rootsettingfilters'] = 'Zahrnout filtry';
$string['rootsettinggradehistories'] = 'Zahrnout historii známkování';
$string['rootsettingimscc1'] = 'Převést na IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'Převést na IMS Common Cartridge 1.1';
$string['rootsettinglogs'] = 'Zahrnout protokoly o činnosti v kurzu';
$string['rootsettingroleassignments'] = 'Zahrnout přidělení rolí';
$string['rootsettings'] = 'Nastavení zálohy';
$string['rootsettingusers'] = 'Zahrnout zapsané uživatele';
$string['rootsettinguserscompletion'] = 'Zahrnout podrobnosti o splnění činností v kurzu';
$string['sectionactivities'] = 'Činnosti';
$string['sectioninc'] = 'Zahrnuto v záloze bez dat uživatelů';
$string['sectionincanduser'] = 'Zahrnuto v záloze včetně dat uživatlů';
$string['selectacategory'] = 'Vyberte kategorii';
$string['selectacourse'] = 'Vyberte kurz';
$string['setting_course_fullname'] = 'Název kurzu';
$string['setting_course_shortname'] = 'Krátký název kurzu';
$string['setting_course_startdate'] = 'Začátek kurzu';
$string['setting_keep_groups_and_groupings'] = 'Zachovat aktuální skupiny a sestupení';
$string['setting_keep_roles_and_enrolments'] = 'Zachovat aktuální role a zápisy';
$string['setting_overwriteconf'] = 'Přepsat konfiguraci kurzu';
$string['storagecourseandexternal'] = 'Oblast se zálohami kurzů a určený adresář';
$string['storagecourseonly'] = 'Oblast se zálohami kurzů';
$string['storageexternalonly'] = 'Určený adresář pro automatické zálohování';
$string['totalcategorysearchresults'] = 'Celkem kategorií: {$a}';
$string['totalcoursesearchresults'] = 'Celkem kurzů: {$a}';
