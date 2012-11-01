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
 * Strings for component 'assignment', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   assignment
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubmission'] = 'Přidat řešení úkolu';
$string['allowdeleting'] = 'Povolit odstraňování';
$string['allowdeleting_help'] = '<p>Je-li tato volba aktivována, mohou účastníci kurzu &ndash; do doby, než svůj
úkol odešlou k&nbsp;oznámkování &ndash; odstraňovat své odevzdané soubory.</p>';
$string['allowmaxfiles'] = 'Maximální počet nahraných souborů';
$string['allowmaxfiles_help'] = '<p>Maximální počet souborů, které může každý účastník kurzu v rámci daného úkolu
odevzdat. Zapište zde počet souborů skutečně požadovaných v popisu úkolu.<br />
Tento údaj se studentům nezobrazuje.</p>';
$string['allownotes'] = 'Povolit poznámky';
$string['allownotes_help'] = '<p>Je-li tato volba aktivována, mohou účastníci kurzu zapsat do textového pole
poznámky k úkolu. Jde o stejný postup jako u úkolu typu Online text.</p>

<p>Poznámky mohou sloužit pro komunikaci s hodnotitelem úkolu, pro popis průběhu
práce na úkolu či jakoukoliv jinou činnost zahrnující psaní textu.</p>';
$string['allowresubmit'] = 'Umožnit znovuodevzdání';
$string['allowresubmit_help'] = '<p>Ve výchozím nastavení není studentům umožněno znovu odevzdat vypracování úkolu,
jestliže je učitel již ohodnotil.</p>

<p>Pokud opakované odevzdání povolíte, studenti budou moci odevzdat nové
vypracování úkolu i po provedeném hodnocení, a vy je budete moci ohodnotit znovu.
Tímto způsobem můžete studenty postupně přivést ke zdokonalení jejich práce.</p>

<p>Tato možnost se pochopitelně netýká úkolů typu offline činnost.</p>';
$string['alreadygraded'] = 'Váš úkol již byl oznámkován a znovuodevzdání není povoleno.';
$string['assignment:addinstance'] = 'Přidat nový úkol';
$string['assignmentdetails'] = 'Podrobnosti';
$string['assignment:exportownsubmission'] = 'Exportovat vlastní řešení do portfolia';
$string['assignment:exportsubmission'] = 'Exportovat odevzdaný úkol';
$string['assignment:grade'] = 'Známkovat úkoly';
$string['assignmentmail'] = '{$a->teacher} ohodnotil(a) vase vypracovani ukolu \'{$a->assignment}\'.

Hodnoceni naleznete u sveho ukolu na adrese:
{$a->url}.';
$string['assignmentmailhtml'] = '{$a->teacher} ohodnotil(a) vaše vypracování úkolu \'<i>{$a->assignment}</i>\'. <br /><br />Hodnocení naleznete u <a href="{$a->url}">svého úkolu</a>.';
$string['assignmentmailsmall'] = '{$a->teacher} okomentoval vaše řešení úkolu "{$a->assignment}". Více informací najdete na stránce s vaším řešením.';
$string['assignmentname'] = 'Název úkolu';
$string['assignmentsubmission'] = 'Řešení úkolů';
$string['assignment:submit'] = 'Odevzdávat úkoly';
$string['assignmenttype'] = 'Typ úkolu';
$string['assignment:view'] = 'Prohlížet úkoly';
$string['availabledate'] = 'Datum zpřístupnění';
$string['cannotdeletefiles'] = 'Vyskytla se chyba, soubory nemohou být odstraněny';
$string['cannotviewassignment'] = 'Nemáte momentálně přístup k tomuto úkolu';
$string['comment'] = 'Komentář';
$string['commentinline'] = 'Komentovat v textu';
$string['commentinline_help'] = '<p>Pokud zaškrtnete toto políčko, bude odevzdaný text během hodnocení
zkopírován do pole pro komentář hodnocení &ndash; usnadní se tak zápis poznámek do
textu (např. s použitím jiné barvy písma) nebo přímá úprava původního
textu.</p>';
$string['configitemstocount'] = 'Jednotky, v nichž bude udáván rozsah odevzdaných prací u úkolu typu \'online text\'.';
$string['configmaxbytes'] = 'Výchozí maximální velikost odevzdávaného úkolu (může být upravena nastavením kurzu a dalšími lokálními proměnnými).';
$string['configshowrecentsubmissions'] = 'Všem zobrazovat upozornění o odevzdaných úkolech v přehledu nedávné činnosti.';
$string['confirmdeletefile'] = 'Jste si úplně jistí, že chcete odstranit tento soubor?<br /><strong>{$a}</strong>';
$string['coursemisconf'] = 'Chyba v konfiguraci kurzu';
$string['currentgrade'] = 'Momentální známka v klasifikaci kurzu';
$string['deleteallsubmissions'] = 'Odstranit všechna řešení úkolu';
$string['deletefilefailed'] = 'Odstraňování souboru selhalo.';
$string['description'] = 'Popis';
$string['downloadall'] = 'Stáhnout všechna odevzdaná řešení v ZIP souboru';
$string['draft'] = 'Pracovní verze';
$string['due'] = 'Odevzdání úkolu';
$string['duedate'] = 'Termín odevzdání';
$string['duedateno'] = 'Bez termínu odevzdání';
$string['early'] = '{$a} před termínem';
$string['editmysubmission'] = 'Upravit mé řešení úkolu';
$string['editthesefiles'] = 'Upravit tyto soubory';
$string['editthisfile'] = 'Aktualizovat tento soubor';
$string['emailstudents'] = 'Zaslat studentům upozornění';
$string['emailteachermail'] = '{$a->username} upravil(a) své vypracování úkolu "{$a->assignment}" (upraveno {$a->timeupdated}).

Aktualizované řešení je dostupné na:

{$a->url}.';
$string['emailteachermailhtml'] = '{$a->username} upravil(a) své vypracování úkolu <em>"{$a->assignment}"</em> (upraveno {$a->timeupdated}).<br /><br />Aktualizované řešení je <a href="{$a->url}">dostupné zde</a>.';
$string['emailteachers'] = 'Upozorňovat učitele e-mailem';
$string['emailteachers_help'] = 'Zda se budou učitelům odesílat krátká e-mailová
upozornění vždy, když studenti odevzdají nový úkol nebo když již odevzdaný úkol
aktualizují.

Upozornění se budou odesílat pouze těm učitelům, kteří mohou daný úkol hodnotit. Jestliže jsou například v kurzu vytvořeny oddělené skupiny, nebudou se učitelům, kteří mají přidělenu jednu konkrétní skupinu, odesílat upozornění o studentech
z jiných skupin.';
$string['emptysubmission'] = 'Zatím jste nic neodevzdali';
$string['enablenotification'] = 'Zasílat oznámení e-mailem';
$string['enablenotification_help'] = 'Zda bude studentům odeslán e-mail s oznámením o
jejich známce a komentáři k jejich práci poté, co je jejich odevzdané řešení oznámkováno.';
$string['errornosubmissions'] = 'Žádná odevzdaná řešení ke stažení.';
$string['existingfiledeleted'] = 'Stávající soubor byl smazán: {$a}';
$string['failedupdatefeedback'] = 'Selhala aktualizace hodnocení pro uživatele {$a}';
$string['feedback'] = 'Hodnocení';
$string['feedbackfromteacher'] = 'Hodnotil: {$a}';
$string['feedbackupdated'] = 'Aktualizována hodnocení pro {$a} uživatelů';
$string['finalize'] = 'Zabránit dalším úpravám řešení';
$string['finalizeerror'] = 'Vyskytla se chyba. Odevzdání nemůže být dokončeno';
$string['graded'] = 'Udělena známka';
$string['guestnosubmit'] = 'Hostům není povoleno odevzdávat úkoly. Pro odeslání úkolu se musíte přihlásit/registrovat.';
$string['guestnoupload'] = 'Bohužel, hostům není povoleno odevzdávat soubory.';
$string['helpoffline'] = '<p>Tento typ je užitečný, jestliže je pro splnění úkolu potřeba využít jiné prostředky, než nabízí Moodle &ndash; například práce na webu, osobní rozhovor apod.</p><p>Studenti vidí popis úkolu (zadání), ale nemohou odevzdat žádný soubor. Hodnocení lze ovšem používat obvyklým způsobem; také studenti jsou o vloženém hodnocení informováni jako obvykle.</p>';
$string['helponline'] = '<p>V tomto typu úkolu se od studentů očekává odevzdání libovolného textu s použitím editačních nástrojů Moodlu. Učitelé mohou odevzdaný text hodnotit online, a dokonce do něj přidávat komentáře či jej upravovat.</p>
<p>Znáte-li starší verze Moodlu, plní tento typ úkolu stejnou funkci jako modul Poznámkový blok (angl. Journal).</p>';
$string['helpupload'] = '<p>Tento typ úkolu umožňuje každému účastníkovi kurzu nahrát (angl. upload) jeden nebo několik souborů libovolného typu jako vypracování úkolu.</p><p>Soubory mohou být dokumenty Wordu, obrázky, ZIP archívy, zdrojové kódy programů, prostě cokoliv, co mají studenti za úkol odevzdat.</p>
<p>Tento typ úkolu rovněž umožňuje učitelům připojovat soubory k hodnocení odevzdaných řešení úkoly. Tyto soubory lze k úkolu přikládat ještě před odevzdáváním úkolu. Tím můžete např. každému účastníkovi kurzu poskytnout individuální soubor, se kterým má pracovat.</p>
<p>Řešitelé úkolu mohou k odevzdávaným souborům přikládat poznámky popisující např. obsah odevzdaných souborů, momentální stav řešení nebo jakoukoliv další textovou informaci.</p>
<p>V tomto typu úkolu musí každý řešitel ručně označit odevzdané řešení jako finální a předat je tak k ohodnocení. Přesto můžete kdykoliv kontrolovat postup řešení - nedokončené úkoly se označují jako "Pracovní verze". Ještě neoznámkované úkoly, které již student odeslal k ohodnocení, můžete vrátit do stavu "Pracovní verze".';
$string['helpuploadsingle'] = '<p>Tento typ úkolu umožňuje každému účastníkovi kurzu nahrát (angl. upload) jeden soubor libovolného typu jako vypracování úkolu.</p><p>Souborem může být dokument Wordu, obrázek, ZIP archív, zdrojový kód programu, prostě cokoliv, co mají studenti za úkol odevzdat.</p>';
$string['hideintro'] = 'Skrýt popis před datem zpřístupnění úkolu';
$string['hideintro_help'] = '<p>Je-li tato volba aktivována, nezobrazuje se před datem zpřístupnění úkolu
jeho popis.</p>';
$string['invalidassignment'] = 'Neplatný úkol';
$string['invalidfileandsubmissionid'] = 'Chybí soubor nebo identifikátor odevzdaného řešení';
$string['invalidid'] = 'Neplatný identifikátor úkolu';
$string['invalidsubmissionid'] = 'Neplatný identifikátor odevzdaného řešení';
$string['invalidtype'] = 'Nesprávný typ úkolu';
$string['invaliduserid'] = 'Neplatný identifikátor uživatele';
$string['itemstocount'] = 'Počet';
$string['lastgrade'] = 'Poslední známka';
$string['late'] = '{$a} po termínu';
$string['maximumgrade'] = 'Nejlepší známka';
$string['maximumsize'] = 'Maximální velikost';
$string['maxpublishstate'] = 'Nejvyšší možná úroveň viditelnosti příspěvku v blogu před dnem platnosti';
$string['messageprovider:assignment_updates'] = 'Upozornění na úkoly (2.2)';
$string['modulename'] = 'Úkol (2.2)';
$string['modulename_help'] = 'Modul Úkol umožňuje učitelům vložit zadání jistého úkolu a poté známkovat jeho splnění.';
$string['modulenameplural'] = 'Úkoly (2.2)';
$string['newsubmissions'] = 'Odevzdané úkoly';
$string['noassignments'] = 'Zatím nebyly odevzdány žádné úkoly';
$string['noattempts'] = 'Tento úkol se zatím nikdo nepokusil odevzdat';
$string['noblogs'] = 'Nemáte žádné příspěvky v blogu, které by bylo možno odevzdat';
$string['nofiles'] = 'Nebyly odeslány žádné vypracované úkoly';
$string['nofilesyet'] = 'Zatím nebyly odeslány žádné vypracované úkoly';
$string['nomoresubmissions'] = 'Další odevzdávání není povoleno';
$string['norequiregrading'] = 'Nebyly nalezeny žádné úkoly, které by vyžadovaly ohodnocení';
$string['nosubmisson'] = 'Nebyly odevzdány žádné úkoly';
$string['notavailableyet'] = 'Je mi líto, tento úkol zatím není dostupný.<br />Pokyny k vypracování se zde budou zobrazovat až od data zpřístupnění, které je uvedeno dále.';
$string['notes'] = 'Poznámky';
$string['notesempty'] = 'Bez poznámek';
$string['notesupdateerror'] = 'Chyba při aktualizaci poznámek';
$string['notgradedyet'] = 'Zatím neudělena známka';
$string['notsubmittedyet'] = 'Zatím neodevzdáno';
$string['onceassignmentsent'] = 'Jakmile je řešení úkolu zasláno k oznámkování, nelze z něj odstraňovat ani k němu připojovat soubory. Přejete si pokračovat?';
$string['operation'] = 'Operace';
$string['optionalsettings'] = 'Volitelná nastavení';
$string['overwritewarning'] = 'Upozornění: znovu odevzdaný úkol NAHRAZUJE dřívější verzi (předchozí verze bude odstraněna).';
$string['page-mod-assignment-submissions'] = 'Stránka s řešením úkolu';
$string['page-mod-assignment-view'] = 'Hlavní stránka úkolu';
$string['page-mod-assignment-x'] = 'Jakákoliv stránka úkolu';
$string['pagesize'] = 'Počet úkolů na stránku';
$string['pluginadministration'] = 'Správa úkolu';
$string['pluginname'] = 'Úkol (2.2)';
$string['popupinnewwindow'] = 'Otevřít v novém okně';
$string['preventlate'] = 'Zakázat odevzdávání po termínu';
$string['quickgrade'] = 'Použít rychlé hodnocení';
$string['quickgrade_help'] = '<p>Funkce rychlého hodnocení umožňuje rychle ohodnotit více odevzdaných úkolů na
jedné stránce.</p>

<p>Stačí pouze změnit známky a komentáře a klepnutím na tlačítko Uložit v dolní
části stránky uložit najednou všechny změny na dané stránce.</p>

<p>Pokud potřebujete více prostoru, můžete použít obvyklá tlačítka pro hodnocení,
která se nacházejí v pravé části stránky. Předvolba rychlého hodnocení se uloží
a použije se u všech úkolů ve všech kurzech.</p>';
$string['requiregrading'] = 'Vyžaduje oznámkování';
$string['responsefiles'] = 'Soubory přiložené k hodnocení';
$string['reviewed'] = 'Revidováno';
$string['saveallfeedback'] = 'Uložit všechna má hodnocení';
$string['selectblog'] = 'Vyberte, které příspěvky blogu chcete odevzdat';
$string['sendformarking'] = 'Odeslat k oznámkování';
$string['showrecentsubmissions'] = 'Zobrazovat nedávná odevzdání';
$string['submission'] = 'Odevzdané úkoly';
$string['submissiondraft'] = 'Pracovní verze řešení';
$string['submissionfeedback'] = 'Hodnocení odevzdaného úkolu';
$string['submissions'] = 'Odevzdané úkoly';
$string['submissionsaved'] = 'Vaše změny byly uloženy';
$string['submissionsnotgraded'] = 'Počet neznámkovaných úkolů: {$a}';
$string['submitassignment'] = 'Odevzdejte svůj úkol pomocí tohoto formuláře';
$string['submitedformarking'] = 'Řešení již bylo odesláno k oznámkování a nelze je dále upravovat';
$string['submitformarking'] = 'Odeslat řešení k oznámkování';
$string['submitted'] = 'Odevzdáno';
$string['submittedfiles'] = 'Odevzdané soubory';
$string['subplugintype_assignment'] = 'Typ úkolu';
$string['subplugintype_assignment_plural'] = 'Typy úkolů';
$string['trackdrafts'] = 'Povolit tlačítko "Odeslat k oznámkování"';
$string['trackdrafts_help'] = 'Studenti mohou pomocí tlačítka "Odeslat k oznámkování" oznámit
hodnotitelům, že svou práci na úkolu ukončili. Hodnotitelé mohou převést úkol
zpět do stavu pracovního návrhu (pokud např. vyžaduje další práci).';
$string['typeblog'] = 'Příspěvek v blogu';
$string['typeoffline'] = 'Offline činnost';
$string['typeonline'] = 'Online text';
$string['typeupload'] = 'Pokročilé nahrávání souborů';
$string['typeuploadsingle'] = 'Odevzdat soubor';
$string['unfinalize'] = 'Vrátit do stavu pracovní verze';
$string['unfinalizeerror'] = 'Vyskytla se chyba. Odevzdaná práce nemůže být vrácena do stavu "rozpracovaná"';
$string['unfinalize_help'] = 'Návrat k pracovní verzi umožňuje studentům další úpravy jejich odevzdaného řešení úkolu.';
$string['upgradenotification'] = 'Tato aktivita je starší typ úkolu';
$string['uploadafile'] = 'Nahrát soubor';
$string['uploadbadname'] = 'Název tohoto souboru obsahuje nepodporované znaky, soubor proto nemůže být odevzdán.';
$string['uploadedfiles'] = 'odevzdaných souborů';
$string['uploaderror'] = 'Vyskytla se chyba při ukládání souboru na server.';
$string['uploadfailnoupdate'] = 'Soubor jsem načetl, ale nemohu aktualizovat údaje o odevzdání vašeho úkolu!';
$string['uploadfiles'] = 'Nahrát soubory';
$string['uploadfiletoobig'] = 'Je mi líto, ale tento soubor je příliš velký (limit je {$a} bytů).';
$string['uploadnofilefound'] = 'Soubor nenalezen! Určitě jste vybrali soubor k odevzdání?';
$string['uploadnotregistered'] = '\'{$a}\' jsem načetl, ale odevzdání nebylo registrováno!';
$string['uploadsuccess'] = '\'{$a}\' úspěšně odevzdán';
$string['usermisconf'] = 'Chyba v konfiguraci uživatele';
$string['usernosubmit'] = 'Nemáte oprávnění odevzdávat vypracovaný úkol.';
$string['viewassignmentupgradetool'] = 'Zobrazit nástroje aktualizace úkolu';
$string['viewfeedback'] = 'Zobrazit hodnocení vypracovaného úkolu';
$string['viewmysubmission'] = 'Zobrazit mé řešení úkolu';
$string['viewsubmissions'] = 'Zobrazit {$a} odevzdaných úkolů';
$string['yoursubmission'] = 'Váš odevzdaný úkol';
