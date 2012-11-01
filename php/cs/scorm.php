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
 * Strings for component 'scorm', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Aktivace';
$string['activityloading'] = 'Budete automaticky přesměrováni -';
$string['activitypleasewait'] = 'Činnost se načítá, čekejte ...';
$string['adminsettings'] = 'Nastavení správce';
$string['advanced'] = 'Parametry';
$string['allowtypeexternal'] = 'Povolit externí balíček';
$string['allowtypeimsrepository'] = 'Povolit typ IMS';
$string['allowtypelocalsync'] = 'Povolit stáhnutelný balíček';
$string['areacontent'] = 'Soubor obsahu';
$string['areapackage'] = 'Soubor balíčku';
$string['asset'] = 'Komponenta';
$string['assetlaunched'] = 'Komponenta - prohlédnuto';
$string['attempt'] = 'Pokus';
$string['attempt1'] = 'Pokus: 1';
$string['attempts'] = 'Pokusy';
$string['attemptsx'] = 'Pokusů: {$a}';
$string['attr_error'] = 'Špatná hodnota atributu ({$a->attr}) ve značce {$a->tag}.';
$string['autocontinue'] = 'Automatické pokračování';
$string['autocontinuedesc'] = 'Jaká má být výchozí hodnota nastavení "Automatické pokračování"';
$string['autocontinue_help'] = '<p>Je-li tato volba nastavena na "Ano", spustí se automaticky další dostupný
učební objekt, jakmile aktuální učební objekt vyvolá metodu "ukončit
komunikaci".</p>

<p>Je-li Automatické pokračování nastaveno na "Ne", musí uživatel pro
pokračování použít tlačítko "Pokračovat".</p>';
$string['averageattempt'] = 'Průměr ze všech pokusů';
$string['badmanifest'] = 'Chyby v manifestu: více v protokolu o chybách';
$string['badpackage'] = 'Daný balíček/manifest není platný.';
$string['browse'] = 'Náhled';
$string['browsed'] = 'Prohlédnuto';
$string['browsemode'] = 'Režim náhledu';
$string['browserepository'] = 'Procházet repositář';
$string['cannotfindsco'] = 'Nepodařilo se najít SCO';
$string['chooseapacket'] = 'Vybrat nebo aktualizovat balíček SCORM/AICC';
$string['completed'] = 'Dokončeno';
$string['completionscorerequired'] = 'Požadované minimální skóre';
$string['completionstatus_completed'] = 'Dokončeno';
$string['completionstatus_passed'] = 'Splněno';
$string['completionstatusrequired'] = 'Požadovaný stav';
$string['confirmloosetracks'] = 'UPOZORNĚNÍ: byla zjištěna změna v balíčku. Pokud se změnila i jeho struktura, může při aktualizaci dojít ke ztrátě informací o průchodu některých uživatelů obsahem balíčku.';
$string['contents'] = 'Obsah';
$string['coursepacket'] = 'Balík kurzu';
$string['coursestruct'] = 'Struktura kurzu';
$string['currentwindow'] = 'Stávající okno';
$string['datadir'] = 'Chyba souborového systému: Nelze vytvořit adresář s daty kurzu.';
$string['defaultdisplaysettings'] = 'Výchozí nastavení zobrazení';
$string['defaultgradesettings'] = 'Výchozí nastavení hodnocení';
$string['defaultothersettings'] = 'Další výchozí nastavení';
$string['deleteallattempts'] = 'Odstranit všechny pokusy o průchod SCORMem';
$string['deleteattemptcheck'] = 'Jste si jistí, že chcete úplně vymazat tyto pokusy?';
$string['deleteuserattemptcheck'] = 'Jste si jisti, že chcete zcela vymazat všechny své pokusy?';
$string['details'] = 'Podrobnosti o průchodu';
$string['directories'] = 'Ukazovat lištu s odkazy';
$string['disabled'] = 'Zakázáno';
$string['display'] = 'Zobrazit balíček';
$string['displayattemptstatus'] = 'Zobraz stav pokusu';
$string['displayattemptstatusdesc'] = 'Jaké má být výchozí zobrazení stavu pokusu';
$string['displayattemptstatus_help'] = 'Pokud je povoleno, jsou  známky a hodnocení pokusů zobrazeny na stránce osnovy SCORM.';
$string['displaycoursestructure'] = 'Zobrazit strukturu kurzu na vstupní stránce';
$string['displaycoursestructuredesc'] = 'Jaké má být výchozí zobrazení struktury kurzu';
$string['displaycoursestructure_help'] = 'Pokud je povoleno, je tabulka obsahu zobrazena na stránce osnovy SCORM.';
$string['displaydesc'] = 'Jaká má být výchozí hodnota nastavení "Zobrazit balíček"';
$string['displaysettings'] = 'Nastavení zobrazení';
$string['domxml'] = 'Externí knihovna DOMXML';
$string['duedate'] = 'Datum platnosti';
$string['element'] = 'Prvek';
$string['enter'] = 'Vstoupit';
$string['entercourse'] = 'Vstoupit do kurzu';
$string['errorlogs'] = 'Protokol o chybách';
$string['everyday'] = 'Každý den';
$string['everytime'] = 'Pokaždé, kdy je použito';
$string['exceededmaxattempts'] = 'Dosáhli jste nejvyššího možného počtu pokusů.';
$string['exit'] = 'Opustit kurz';
$string['exitactivity'] = 'Opustit činnost';
$string['expired'] = 'Promiňte, ale tato činnost byla {$a} uzavřena a již není k dispozici';
$string['external'] = 'Aktualizovat časování externích balíčků';
$string['failed'] = 'Nedokončeno úspěšně';
$string['finishscorm'] = 'Pokud jste skončili s prací s tímto materiálem, {$a}';
$string['finishscormlinkname'] = 'klikněte sem pro návrat na stránku kurzu';
$string['firstaccess'] = 'První přístup';
$string['firstattempt'] = 'První pokus';
$string['forcecompleted'] = 'Vynuceně ukončeno';
$string['forcecompleteddesc'] = 'Jaké má být výchozí nastavení vynuceného dokončení';
$string['forcenewattempt'] = 'Vynutit nový pokus';
$string['forcenewattemptdesc'] = 'Jaké má být výchozí nastavení vynuceného nového pokusu';
$string['forcenewattempt_help'] = 'Pokud je povoleno, bude každý přístup ke SCORM balíčku počítán jako nový pokus.';
$string['found'] = 'Manifest nalezen';
$string['frameheight'] = 'Tato předvolba nastavuje výchozí výšku rámce nebo okna';
$string['framewidth'] = 'Tato předvolba nastavuje výchozí šířku rámce nebo okna';
$string['fullscreen'] = '‌Zobrazit na celou obrazovku';
$string['general'] = 'Obecná data';
$string['gradeaverage'] = 'Průměrný bodový zisk';
$string['gradeforattempt'] = 'Hodnocení pokusu';
$string['gradehighest'] = 'Nejvyšší bodový zisk';
$string['grademethod'] = 'Metoda známkování';
$string['grademethoddesc'] = 'Jaká má být výchozí hodnota nastavení "Metoda známkování"';
$string['grademethod_help'] = '<p>Výsledky činnosti v rámci balíku SCORM/AICC, zahrnuté do známek kurzu, je
možno klasifikovat v několika režimech:</p>

<ul>
  <li><b>Učební objekty</b><br>
  Tento režim udává počet dokončených/úspěšně ukončených učebních objektů.
  Maximální hodnota je dána počtem učebních objektů v balíku.</li>

  <li><b>Nejvyšší bodový zisk</b><br>
  Pro výpočet známky se za každý úspěšně dokončený učební objekt použije
  nejvyšší dosažený bodový zisk.</li>

  <li><b>Průměrný bodový zisk</b><br>
  Jestliže vyberete tento režim, Moodle vypočítá ze všech získaných bodů
  průměrný bodový zisk.</li>

  <li><b>Souhrnný bodový zisk</b><br>
  V tomto režimu se všechny body sčítají.</li>
</ul>';
$string['gradereported'] = 'Zobrazené hodnocení';
$string['gradescoes'] = 'Učební objekty';
$string['gradesettings'] = 'Nastavení hodnocení';
$string['gradesum'] = 'Souhrnný bodový zisk';
$string['height'] = 'Výška';
$string['hidden'] = 'Skrýt';
$string['hidebrowse'] = 'Zakázat režim náhledu';
$string['hidebrowsedesc'] = 'Jaká má být výchozí hodnota nastavení "Zakázat režim náhledu"';
$string['hidebrowse_help'] = 'Režim náhledu umožňuje studentům procházet činnost před normálním pokusem. Pokud je režim náhledu vypnut, nebude se tlačítko pro spuštění náhledu zobrazovat.';
$string['hideexit'] = 'Skrýt odkaz k opuštění';
$string['hidenav'] = 'Skrýt navigační tlačítka';
$string['hidenavdesc'] = 'Jaká má být výchozí hodnota nastavení "Skrýt navigační tlačítka"';
$string['hidereview'] = 'Skrýt tlačítko k prohlédnutí';
$string['hidetoc'] = 'Zobrazit navigační strukturu kurzu';
$string['hidetocdesc'] = 'Jaká má být výchozí hodnota nastavení "Zobrazit navigační strukturu kurzu"';
$string['hidetoc_help'] = 'Toto nastavení určuje, jakým způsobem je obsah balíčku zobrazen v prohlížeči.';
$string['highestattempt'] = 'Nejlepší pokus';
$string['identifier'] = 'Identifikátor otázky';
$string['incomplete'] = 'Nedokončeno';
$string['info'] = 'Informace';
$string['interactions'] = 'Interakce';
$string['interactionscorrectcount'] = 'Počet správných výsledků na otázku';
$string['interactionsid'] = 'Id prvku';
$string['interactionslearnerresponse'] = 'Studentské odpovědi';
$string['interactionspattern'] = 'Vzore správné odpovědi';
$string['interactionsresponse'] = 'Studentské odpovědi';
$string['interactionstime'] = 'Čas, kdy byl zahájen pokus';
$string['interactionstype'] = 'Typ úlohy';
$string['invalidactivity'] = 'Neplatná činnost SCORM';
$string['invalidurl'] = 'Chybná specifikace URL';
$string['last'] = 'Poslední přístup';
$string['lastaccess'] = 'Poslední přístup';
$string['lastattempt'] = 'Poslední pokus';
$string['lastattemptlock'] = 'Uzamčít po posledním pokusu';
$string['lastattemptlockdesc'] = 'Jaká má být výchozí hodnota zámku po posledním pokusu';
$string['lastattemptlock_help'] = 'Pokud je povoleno, není studentovi umožněno spuštění SCORM přehrávače po vyčerpání všech jeho pokusů.';
$string['location'] = 'Ukazovat adresní řádek';
$string['max'] = 'Nejvyšší bodový zisk';
$string['maximumattempts'] = 'Nejvyšší počet pokusů';
$string['maximumattemptsdesc'] = 'Jaká má být výchozí hodnota nastavení "Nejvyšší počet pokusů"';
$string['maximumgradedesc'] = 'Jaká má být výchozí hodnota nastavení "Nejvyšší známka"';
$string['menubar'] = 'Ukazovat lištu s hlavní nabídkou';
$string['min'] = 'Min. bod. zisk';
$string['missing_attribute'] = 'Chybějící atribut {$a->attr} ve značce {$a->tag}';
$string['missingparam'] = 'Požadované pole chybí nebo není platné';
$string['missing_tag'] = 'Chybějící značka {$a->tag}';
$string['mode'] = 'Režim';
$string['modulename'] = 'Balíček SCORM';
$string['modulename_help'] = 'Balíček SCORM umožňuje do kurzu vložit obsah ve formátu dle specifikací SCORM a AICC. Jedná se o soubory, které jsou zabaleny podle standardu pro výukové objekty.

Obsah je většinou zobrazen na několika stránkách spolu s prvkem pro navigaci mezi stránkami. Pro zobrazení obsahu existují různé možnosti - ve vyskakovacím okně, s obsahem, s navigačními tlačítky apod. Činnosti SCORM obecně zahrnují úlohy, jejichž hodnocení se zapisuje do klasifikace v kurzu.

SCORM činnosti mohou být použity

* pro prezentaci multimediálního obsahu a animací
* jako nástroj hodnocení';
$string['modulenameplural'] = 'SCORM balíčky';
$string['navigation'] = 'Navigace';
$string['newattempt'] = 'Začít nový pokus';
$string['next'] = 'Pokračovat';
$string['noactivity'] = 'Nic k zobrazení';
$string['noattemptsallowed'] = 'Počet povolených pokusů';
$string['noattemptsmade'] = 'Počet pokusů, které jste vyčerpali';
$string['no_attributes'] = 'Značka {$a->tag} musí mít atributy';
$string['no_children'] = 'Značka {$a->tag} musí mít potomky';
$string['nolimit'] = 'Neomezený počet pokusů';
$string['nomanifest'] = 'Manifest nenalezen';
$string['noprerequisites'] = 'Bohužel, nesplňujete požadované předpoklady pro přístup k tomuto učebnímu objektu.';
$string['noreports'] = 'Žádný protokol k zobrazení';
$string['normal'] = 'Normální';
$string['noscriptnoscorm'] = 'Váš prohlížeč nepodporuje javascript, nebo byla podpora javascriptu ve vašem prohlížeči zakázána. Nelze proto zaznamenat údaje o průchodu objektem SCORM/AICC.';
$string['notattempted'] = 'Bez pokusů';
$string['not_corr_type'] = 'Nesoulad typů ve značce {$a->tag}';
$string['notopenyet'] = 'Promiňte, ale tato činnost nebude dostupná až do {$a}';
$string['objectives'] = 'Cíle';
$string['optallstudents'] = 'všichni uživatelé';
$string['optattemptsonly'] = 'pouze uživatelé s pokusy';
$string['options'] = 'Volby';
$string['optionsadv'] = 'Volby (Pokročilé)';
$string['optionsadv_desc'] = 'Zda mají být možnosti nastavení okna považovány za pokročilé nastavení';
$string['optnoattemptsonly'] = 'pouze uživatelé bez pokusů';
$string['organization'] = 'Organizace';
$string['organizations'] = 'Organizace';
$string['othersettings'] = 'Další nastavení';
$string['othertracks'] = 'Další záznamy';
$string['package'] = 'Soubor s balíčkem';
$string['packagedir'] = 'Chyba souborového systému: Nelze vytvořit adresář pro balíček SCORM/AICC.';
$string['packagefile'] = 'Nebyl určen soubor s balíčkem SCORM/AICC.';
$string['package_help'] = '<p>Balík SCORM/AICC je soubor s příponou <b>zip</b> (nebo pif), který obsahuje
platné soubory AICC nebo SCORM.</p>

<p>Balík <b>SCORM</b> musí v kořenové složce souboru zip obsahovat soubor s
názvem <b>imsmanifest.xml</b>, který definuje strukturu kurzu SCORM, umístění
studijních materiálů a mnoho dalších vlastností.</p>

<p>Balík <b>AICC</b> je definován více soubory (čtyřmi až sedmi) s určenými
příponami. Význam jednotlivých přípon:</p>

<ul>
  <li>CRS &ndash; Course Description file (Soubor popisu kurzu &ndash; povinný)</li>

  <li>AU &ndash; Assignable Unit file (Soubor s popisem jednotek kurzu &ndash;
  povinný)</li>

  <li>DES &ndash; Descriptor file (Soubor s popisem bloků kurzu &ndash; povinný)</li>

  <li>CST &ndash; Course Structure file (Soubor se strukturovanými daty kurzu &ndash;
  povinný)</li>

  <li>ORE &ndash; Objective Relationship file (Soubor s popisem cílů jednotek a bloků
  &ndash; volitelný)</li>

  <li>PRE &ndash; Prerequisites file (Soubor s popisem předpokladů &ndash; volitelný)</li>

  <li>CMP &ndash; Completition Requirements file (Soubor podmínek ukončení kurzu &ndash;
  volitelný)</li>
</ul>';
$string['packageurl'] = 'URL';
$string['page-mod-scorm-x'] = 'Jakákoliv stránka modulu SCORM';
$string['pagesize'] = 'Velikost stránky';
$string['passed'] = 'Splněno';
$string['php5'] = 'PHP 5 (DOMXML nativní knihovna)';
$string['pluginadministration'] = 'Správa SCORM/AICC';
$string['pluginname'] = 'SCORM balíček';
$string['popup'] = 'Nové okno';
$string['popupmenu'] = 'Rozbalovací nabídka';
$string['popupopen'] = 'Otevřít balíček v novém okně';
$string['popupsblocked'] = 'Vyskakovací okna jsou blokována, zastaveno přehrávání SCORM modulu. Před opakováním zkontrolujte nastavení vašeho prohlížeče.';
$string['position_error'] = 'Značka {$a->tag} nemůže být potomkem značky {$a->parent}.';
$string['preferencespage'] = 'Předvolby pouze pro tuto stránku';
$string['preferencesuser'] = 'Předvolby pro tento přehled';
$string['prev'] = 'Předchozí';
$string['raw'] = 'Hrubý skór';
$string['regular'] = 'Regulární manifest';
$string['report'] = 'Protokol';
$string['reportcountallattempts'] = '{$a->nbattempts} pokusů od {$a->nbusers} uživatelů, celkem z {$a->nbresults} výsledků';
$string['reportcountattempts'] = '{$a->nbresults} - výsledky ({$a->nbusers} uživatelů)';
$string['reports'] = 'Sestavy';
$string['resizable'] = 'Povolit změnu velikosti okna';
$string['result'] = 'Výsledek';
$string['results'] = 'Výsledky';
$string['review'] = 'Opakovaný náhled';
$string['reviewmode'] = 'Režim opakovaného náhledu';
$string['scoes'] = 'Učební objekty';
$string['score'] = 'Bodový zisk';
$string['scorm:addinstance'] = 'Přidat nový SCORM balíček';
$string['scormclose'] = 'Do';
$string['scormcourse'] = 'Kurz SCORM';
$string['scorm:deleteownresponses'] = 'Odstranit vlastní pokusy';
$string['scorm:deleteresponses'] = 'Odstraňovat SCORM pokusy';
$string['scormloggingoff'] = 'API logování VYPNUTO';
$string['scormloggingon'] = 'API logování ZAPNUTO';
$string['scormopen'] = 'Otevřeno';
$string['scormresponsedeleted'] = 'Pokusy odstraněných uživatelů';
$string['scorm:savetrack'] = 'Ukládat záznamy o průchodu';
$string['scorm:skipview'] = 'Přeskočit přehled';
$string['scormtype'] = 'Typ';
$string['scorm:viewreport'] = 'Zobrazit přehledy';
$string['scorm:viewscores'] = 'Zobrazit hodnocení';
$string['scrollbars'] = 'Povolit svislý posuvník';
$string['selectall'] = 'Vybrat vše';
$string['selectnone'] = 'Zrušit výběr';
$string['show'] = 'Zobrazit';
$string['sided'] = 'Na levé straně';
$string['skipview'] = 'Student přeskakuje stránku se strukturou obsahu';
$string['skipviewdesc'] = 'Jaká má být výchozí hodnota nastavení "Student přeskakuje stránku se strukturou obsahu"';
$string['slashargs'] = 'UPOZORNĚNÍ: argumenty zadávané lomítkem byly na tomto serveru zakázány. Mohou se vyskytnout problémy s funkčností.';
$string['stagesize'] = 'Velikost okna/rámce';
$string['started'] = 'Započetí';
$string['status'] = 'Stav';
$string['statusbar'] = 'Ukazovat stavový řádek';
$string['student_response'] = 'Odpověď';
$string['subplugintype_scormreport'] = 'Přehled';
$string['subplugintype_scormreport_plural'] = 'Přehledy';
$string['suspended'] = 'Pozastaveno';
$string['syntax'] = 'Chybná syntaxe';
$string['tag_error'] = 'Neznámá značka ({$a->tag}) s tímto obsahem: {$a->value}';
$string['time'] = 'Čas';
$string['timerestrict'] = 'Omezit odpovědi na tento časový interval';
$string['title'] = 'Název';
$string['toc'] = 'Obsah';
$string['toolbar'] = 'Ukazovat lištu s ovládacími tlačítky';
$string['too_many_attributes'] = 'Značka {$a->tag} má příliš mnoho atributů';
$string['too_many_children'] = 'Značka {$a->tag} má příliš mnoho potomků';
$string['totaltime'] = 'Čas';
$string['trackingloose'] = 'UPOZORNĚNÍ: Údaje o průchodu tímto balíčkem SCORM/AICC budou ztraceny!';
$string['type'] = 'Typ';
$string['typeexternal'] = 'Externí SCORM manifest';
$string['typeimsrepository'] = 'Lokální repozitář IMS';
$string['typelocal'] = 'Nahraný balíček';
$string['typelocalsync'] = 'Stažený balíček';
$string['unziperror'] = 'Vyskytla se chyba při rozbalování balíčku';
$string['updatefreq'] = 'Frekvence automatické aktualizace';
$string['updatefreqdesc'] = 'Jaká má být výchozí hodnota nastavení "Frekvence automatické aktualizace"';
$string['validateascorm'] = 'Ověřit balíček SCORM/AICC';
$string['validation'] = 'Výsledek ověření';
$string['validationtype'] = 'Tato volba nastavuje knihovnu DOMXML, která bude použita při ověřování manifestu SCORM. Nevíte-li, co zvolit, ponechte vybrané nastavení.';
$string['value'] = 'Hodnota';
$string['versionwarning'] = 'Verze manifestu je starší než 1.3, upozornění u značky {$a->tag}.';
$string['viewallreports'] = 'Zobrazit protokoly pro {$a} pokusů';
$string['viewalluserreports'] = 'Zobrazit protokoly pro {$a} uživatelů';
$string['whatgrade'] = 'Známkování pokusů';
$string['whatgradedesc'] = 'Jaká má být výchozí hodnota nastavení "Známkování pokusů"';
$string['width'] = 'Šířka';
$string['window'] = 'Okno';
