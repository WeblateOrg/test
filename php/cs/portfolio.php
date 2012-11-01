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
 * Strings for component 'portfolio', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   portfolio
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeexport'] = 'Zobrazit aktivní export';
$string['activeportfolios'] = 'Dostupná portfolia';
$string['addalltoportfolio'] = 'Exportovat vše do portfolia';
$string['addnewportfolio'] = 'Přidat nové portfolio';
$string['addtoportfolio'] = 'Exportovat do portfolia';
$string['alreadyalt'] = 'Již se exportuje - klikněte zde pro zobrazení přenosu';
$string['availableformats'] = 'Dostupné formáty';
$string['callbackclassinvalid'] = 'Daná callback třída není platná nebo není součástí hierarchie portfolio_caller';
$string['callercouldnotpackage'] = 'Nepodařilo se připravit data pro export: původní chyba byla {$a}';
$string['cannotsetvisible'] = 'Nelze nastavit na viditelné - modul byl zcela zakázán nebo není správně nastaven';
$string['commonportfoliosettings'] = 'Společná nastavení portfolií';
$string['commonsettingsdesc'] = '<p>Předpokládaná velikost exportovaných dat ovlivňuje, zda bude export probíhat synchronně (okamžitě s čekáním na dokončení) či asynchronně (na pozadí).</p><p>Export o předpokládané velikosti menší, než je hodnota uvedená u středně náročných exportů, proběhne okamžitě bez dotazování uživatele. Při exportu o velikosti mezi hodnotami nastavenými pro středně a velmi náročné exporty bude uživatel dotázán na metodu exportu.</p><p>Některá portfolia mohou toto nastavení zcela ignorovat a vždy používat jen jeden z uvedených způsobů.</p>';
$string['configexport'] = 'Konfigurace exportovaných dat';
$string['configplugin'] = 'Nastavení portfolia';
$string['configure'] = 'Konfigurovat';
$string['confirmcancel'] = 'Přejete se přerušit tento export?';
$string['confirmexport'] = 'Prosím, potvrďte tento export';
$string['confirmsummary'] = 'Souhrnná informace o exportu';
$string['continuetoportfolio'] = 'Přejít do portfolia';
$string['deleteportfolio'] = 'Odstranit instanci modulu portfolia';
$string['destination'] = 'Cíl';
$string['disabled'] = 'Bohužel, funkce exportu do portfolií není na těchto stránkách povolena';
$string['disabledinstance'] = 'Zakázáno';
$string['displayarea'] = 'Exportovaná oblast';
$string['displayexpiry'] = 'Vypršení přenosu';
$string['displayinfo'] = 'Informace o exportu';
$string['dontwait'] = 'Nečekat';
$string['enabled'] = 'Povolená portfolia';
$string['enableddesc'] = 'Zde správci nastavují externí úložiště, do kterých mohou uživatelé exportovat obsah z Moodle';
$string['err_uniquename'] = 'Název portfolia musí být v rámci modulu unikátní';
$string['exportalreadyfinished'] = 'Export do portfolia byl úspěšně ukončen!';
$string['exportalreadyfinisheddesc'] = 'Export portfolia ukončen!';
$string['exportcomplete'] = 'Export do portfolia byl úspěšně ukončen!';
$string['exportedpreviously'] = 'Předchozí exporty';
$string['exportexpired'] = 'Limit pro export portfolia vypršel';
$string['exportexpireddesc'] = 'Pravděpodobně jste se pokusili o opakování exportu nějakých informací, nebo exportujete prázdný obsah. Korektní postup je vrátit se zpět do původního místa, v němž je obsah uložen a začít znovu. Toto se může stát, pokud použijte tlačítko "Zpět" ve vašem prohlížeče poté, co je export dokončen, nebo pokud máte v záložkách vašeho prohlížeče uloženu neplatnou adresu URL.';
$string['exporting'] = 'Exportování do portfolia';
$string['exportingcontentfrom'] = 'Export obsahu z {$a}';
$string['exportingcontentto'] = 'Export obsahu do {$a}';
$string['exportqueued'] = 'Požadavek na export do portfolia byl úspěšně zařazen do fronty přenosů';
$string['exportqueuedforced'] = 'Požadavek na export do portfolia byl úspěšně zařazen do fronty přenosů (vzdálený systém vynutil tento způsob exportu)';
$string['failedtopackage'] = 'Nemohu najít soubory pro vytvoření balíčku';
$string['failedtosendpackage'] = 'Zasílání dat do zvoleného portfolia selhalo s následující chybou: {$a}';
$string['filedenied'] = 'Přístup k tomuto souboru byl odepřen';
$string['filenotfound'] = 'Soubor nebyl nalezen';
$string['fileoutputnotsupported'] = 'Přepisování výstupního souboru není pro tento formát podporováno';
$string['format_document'] = 'Dokument';
$string['format_file'] = 'Soubor';
$string['format_image'] = 'Obrázek';
$string['format_leap2a'] = 'Leap2A';
$string['format_mbkp'] = 'Záloha Moodle kurzu';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'HTML';
$string['format_presentation'] = 'Prezentace';
$string['format_richhtml'] = 'HTML s přílohami';
$string['format_spreadsheet'] = 'Sešit';
$string['format_text'] = 'Prostý text';
$string['format_video'] = 'Video';
$string['hidden'] = 'Skryto';
$string['highdbsizethreshold'] = 'Hranice počtu záznamů pro velmi náročný přenos';
$string['highdbsizethresholddesc'] = 'Počet tabulkových záznamů v databázi, při němž začne být export do portfolia považován za velmi náročný';
$string['highfilesizethreshold'] = 'Hranice velikosti souborů pro velmi náročný přenos';
$string['highfilesizethresholddesc'] = 'Velikost souboru, při níž začne být export do portfolia považován za velmi náročný';
$string['insanebody'] = 'Zdravím! Tato zpráva vám byla zaslána jako správci stránek {$a->sitename}.

Některé instance portfoliových modulů byly z důvodu chybné konfigurace zakázány. To znamená, že uživatelé nemohou momentálně exportovat obsah do těchto portfolií.

Seznam instancí, které byly z tohoto důvodu zakázány:

{$a->textlist}

Prosím, napravte tuto situaci co nejdříve na adrese {$a->fixurl}';
$string['insanebodyhtml'] = '<p>Zdravím! Tato zpráva vám byla zaslána jako správci stránek {$a->sitename}.</p>
<p>Některé instance portfoliových modulů byly z důvodu chybné konfigurace zakázány. To znamená, že uživatelé nemohou momentálně exportovat obsah do těchto portfolií.</p>
<p>Seznam instancí, které byly z tohoto důvodu zakázány:</p>
{$a->htmllist}
<p>Prosím, napravte tuto situaci co nejdříve na <a href="{$a->fixurl}">stránce pro konfiguraci portfolií</a>.</p>';
$string['insanebodysmall'] = 'Zdravím! Tato zpráva vám byla zaslána jako správci stránek {$a->sitename}. Některé instance portfoliových modulů byly z důvodu chybné konfigurace zakázány. To znamená, že uživatelé nemohou momentálně exportovat obsah do těchto portfolií. Prosím, napravte tuto situaci co nejdříve na adrese {$a->fixurl}';
$string['insanesubject'] = 'Některá portfolia byla automaticky zakázána';
$string['instancedeleted'] = 'Portfolio úspěšně odstraněno';
$string['instanceismisconfigured'] = 'Instance modulu portfolia je chybně nakonfigurována. Chyba: {$a}';
$string['instancenotdelete'] = 'Nepodařilo se odstranit portfolio';
$string['instancenotsaved'] = 'Nastavení portfolia nemohlo být uloženo';
$string['instancesaved'] = 'Nastavení portfolia úspěšně uloženo';
$string['invalidaddformat'] = 'Funkce portfolio_add_button() obdržela jako parametr neplatný formát "{$a}". Hodnota musí být jedna z konstant PORTFOLIO_ADD_XXX';
$string['invalidbuttonproperty'] = 'Nelze najít vlastnost "{$a}" objektu portfolio_button';
$string['invalidconfigproperty'] = 'Nelze najít konfigurační vlastnost {$a->property} třídy {$a->class}';
$string['invalidexportproperty'] = 'Nelze najít exportní konfigurační vlastnost {$a->property} třídy {$a->class}';
$string['invalidfileareaargs'] = 'Funkce set_file_and_format_data() obdržela neplatné parametry týkající se souborové oblasti. Je třeba definovat parametry contextid, component, filearea a itemid';
$string['invalidformat'] = 'Pokus o export do neplatného formátu {$a}';
$string['invalidinstance'] = 'Nelze najít tuto instanci portfolia';
$string['invalidpreparepackagefile'] = 'Neplatné volání funkce prepare_package_file(). Je třeba nastavit soubor(y)';
$string['invalidproperty'] = 'Nelze najít vlastnost {$a->property} třídy {$a->class}';
$string['invalidsha1file'] = 'Neplatné volání funkce get_sha1_file(). Je třeba nastavit soubor(y)';
$string['invalidtempid'] = 'Neplatný identifikátor exportu. Možná, že termín exportu již vypršel.';
$string['invaliduserproperty'] = 'Nelze najít uživatelskou konfigurační vlastnost {$a->property} třídy {$a->class}';
$string['leap2a_emptyselection'] = 'Vyžadovaná hodnota nebyla vybrána';
$string['leap2a_entryalreadyexists'] = 'Byl učiněn pokus o přidání Leap2A položky s identifikátorem {$a}, který již ale ve zdroji existuje';
$string['leap2a_feedtitle'] = 'Leap2A export z Moodle do {$a}';
$string['leap2a_filecontent'] = 'Byl učiněn pokus o nastavení obsahu Leap2A položky na soubor namísto použití souborové podtřídy';
$string['leap2a_invalidentryfield'] = 'Byl učiněn pokus o nastavení pole {$a}, které buď neexistuje nebo nelze nastavovat jeho hodnotu';
$string['leap2a_invalidentryid'] = 'Přístup k položce přes neexistující identifikátor {$a}';
$string['leap2a_missingfield'] = 'Chybí vyžadované Leap2A pole {$a}';
$string['leap2a_nonexistantlink'] = 'Leap2A položka {$a->from} odkazuje na neexistující položku {$a->to} pomocí relace {$a->rel}';
$string['leap2a_overwritingselection'] = 'Funkce make_selection() přepisuje původní typ záznamu "{$a}" na "selection"';
$string['leap2a_selflink'] = 'Leap2A položka {$a->from} odkazuje na sebe sama pomocí relace {$a->rel}';
$string['logs'] = 'Protokol přenosů';
$string['logsummary'] = 'Předchozí úspěšné transfery';
$string['manageportfolios'] = 'Správa portfolií';
$string['manageyourportfolios'] = 'Správa vašich portfolií';
$string['mimecheckfail'] = 'Portfolio {$a->plugin} nepodporuje typ souboru {$a->mimetype}';
$string['missingcallbackarg'] = 'Chybějící argument zpětného volání {$a->arg} pro třídu {$a->class}';
$string['moderatedbsizethreshold'] = 'Hranice počtu záznamů pro středně náročný přenos';
$string['moderatedbsizethresholddesc'] = 'Počet tabulkových záznamů v databázi, při němž začne být export do portfolia považován za středně náročný';
$string['moderatefilesizethreshold'] = 'Hranice velikosti souborů pro středně náročný přenos';
$string['moderatefilesizethresholddesc'] = 'Velikost souboru, při níž začne být export do portfolia považován za středně náročný';
$string['multipleinstancesdisallowed'] = 'Pokus o vytvoření další instance modulu, který nedovoluje vytváření více instancí ({$a})';
$string['mustsetcallbackoptions'] = 'Volby zpětného volání musejí být nastaveny buď v konstruktoru třídy portfolio_add_button nebo pomocí metody set_callback_options()';
$string['noavailableplugins'] = 'Bohužel, nejsou pro vás k dispozici žádná portfolia, do nichž by šlo exportovat';
$string['nocallbackclass'] = 'Nelze najít třídu zpětného volání ({$a})';
$string['nocallbackfile'] = 'Chyba v modulu, z něhož se pokoušíte exportovat obsah - nelze najít požadovaný soubor {$a}';
$string['noclassbeforeformats'] = 'Před zavoláním metody set_formats() ve třídě portfolio_button je potřeba nastavit třídu zpětného volání';
$string['nocommonformats'] = 'Nebyly nalezeny žádné formáty, která by podporovalo jak vybrané portfolio, tak zdrojové umístění {$a->location}. Zdrojové umístění podporuje pouze {$a->formats}.';
$string['noinstanceyet'] = 'Dosud nevybráno';
$string['nologs'] = 'Nenalezeny žádné záznamy k zobrazení!';
$string['nomultipleexports'] = 'Je nám líto, ale cílové portfolio {$a->plugin} nepodporuje více souběžných exportů. Nejprve, prosím, <a href="{$a->link}">dokončete stávající export</a> a zkuste to znovu.';
$string['nonprimative'] = 'Funkce portfolio_add_button() byla zavolána s neplatnou hodnotou parametru pro zpětné volání. Klíč: {$a->key}, hodnota: {$a->value}';
$string['nopermissions'] = 'Je nám líto, ale nemáte oprávnění potřebná pro export souborů z této oblasti';
$string['notexportable'] = 'Je nám líto, ale tento typ obsahu nelze exportovat';
$string['notimplemented'] = 'Je nám líto, pokoušíte se exportovat obsah do formátu, který ještě není naimplementován ({$a})';
$string['notyetselected'] = 'Dosud nevybráno';
$string['notyours'] = 'Pokoušíte se obnovit export jiného uživatele!';
$string['nouploaddirectory'] = 'Nelze vytvořit dočasný adresář pro vytvoření balíčku';
$string['off'] = 'Povoleno, ale skryté';
$string['on'] = 'Povoleno a viditelné';
$string['plugin'] = 'Modul portfolia';
$string['plugincouldnotpackage'] = 'Příprava dat pro export selhala s následující chybou: {$a}';
$string['pluginismisconfigured'] = 'Modul portfolia je chybně nastaveno - přeskakuji. Chyba: {$a}';
$string['portfolio'] = 'Portfolio';
$string['portfolios'] = 'Portfolia';
$string['queuesummary'] = 'Fronta požadavků na přenos';
$string['returntowhereyouwere'] = 'Vrátit se na místo, odkud započal export';
$string['save'] = 'Uložit';
$string['selectedformat'] = 'Zvolený formát exportu';
$string['selectedwait'] = 'Čekat?';
$string['selectplugin'] = 'Zvolte cílové umístění';
$string['singleinstancenomultiallowed'] = 'Je dostupná pouze jedna instance tohoto modulu portfolia. Ta neumožňuje vícero exportů v rámci jedné session a nějaký export tohoto modulu již v této session probíhá!';
$string['somepluginsdisabled'] = 'Některé moduly portfolií byly zcela zakázány, protože jsou buď chybně nastaveny nebo nebyly splněny jiné předpoklady:';
$string['sure'] = 'Opravdu odstranit "{$a}"? Nelze vzít zpět.';
$string['thirdpartyexception'] = 'V průběhu exportu do portfolia byla vyvolána jiná výjimka "{$a}". Ta byla zachycena a opětovně vyvolána, ale chtělo by to opravit.';
$string['transfertime'] = 'Čas přenosu';
$string['unknownplugin'] = 'Neznámý (mohl být odstraněn správcem)';
$string['wait'] = 'Čekat';
$string['wanttowait_moderate'] = 'Chcete čekat na dokončení tohoto přenosu? Může trvat několik minut.';
