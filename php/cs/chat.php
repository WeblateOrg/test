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
 * Strings for component 'chat', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   chat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ajax'] = 'Verze používající AJAX';
$string['autoscroll'] = 'Automaticky rolovat';
$string['beep'] = 'prozvonit';
$string['cantlogin'] = 'Nelze se přihlásit do chatovací místnosti!';
$string['chat:addinstance'] = 'Přidat nové chatování';
$string['chat:chat'] = 'Přispívat do chatování';
$string['chat:deletelog'] = 'Odstraňovat historii chatování';
$string['chat:exportparticipatedsession'] = 'Exportovat chatování, kterého byl účasten';
$string['chat:exportsession'] = 'Exportovat jakékoliv chatování';
$string['chatintro'] = 'Úvodní text';
$string['chatname'] = 'Název této místnosti';
$string['chat:readlog'] = 'Číst historii chatování';
$string['chatreport'] = 'Chatování';
$string['chat:talk'] = 'Zapojit se do chatování';
$string['chattime'] = 'Příští chat';
$string['configmethod'] = 'Metoda používající AJAX nabízí moderní dynamické rozhraní s pravidelnou aktualizací dat ze serveru. Při normální metodě se webové prohlížeče chatujících pravidelně připojují k serveru a aktualizují doposud načtený obsah. Normální metoda nevyžaduje žádnou další konfiguraci a funguje vždy a všude, při větším množství chatujících však může značně zatížit server. Použití démona na serveru vyžaduje přístup k unixovému shellu, ale umožňuje vytvořit rychlé a škálovatelné chatovací prostředí.';
$string['confignormalupdatemode'] = 'Aktualizace chatovacích místností je obvykle dostatečně efektivně zajišťována metodou <em>Keep-Alive</em> protokolu HTTP 1.1, i tak je ovšem zatížení serveru poměrně vysoké. Pokročilejší metodu pro přenos dat k uživatelům představuje <em>streamování</em>. Použití <em>streamování</em> lze mnohem lépe škálovat (podobně jako u metody chatovacího démona), není však zaručeno, že je váš server podporuje.';
$string['configoldping'] = 'Jaká je maximální doba nečinnosti, po níž se má rozpoznat, že se uživatel od chatu odpojil? Zadává se pouze horní limit, protože odpojení jsou obvykle detekována velmi rychle. Nižší hodnoty povedou k vyššímu zatížení serveru. Používáte-li normální metodu, <strong>nikdy</strong> nenastavujte tuto hodnotu nižší, než je dvojnásobek hodnoty chat_refresh_room.';
$string['configrefreshroom'] = 'Po kolika sekundách se má chatovací místnost aktualizovat (refresh). Nastavením malé hodnoty se sice chatování může zrychlit, ovšem na úkor zvýšené zátěže vašeho webového serveru, obzvláště při velkém počtu chatujících. Používáte-li obnovování metodou <em>streamování</em>, můžete nastavit vyšší frekvenci obnovování -- zkuste začít hodnotou 2.';
$string['configrefreshuserlist'] = 'Po kolika sekundách se má aktualizovat seznam uživatelů?';
$string['configserverhost'] = 'Název počítače (hostname), na kterém běží démon';
$string['configserverip'] = 'IP adresa odpovídající výše uvedenému názvu počítače';
$string['configservermax'] = 'Nejvyšší možný počet klientů';
$string['configserverport'] = 'Port použitý démonem na serveru';
$string['currentchats'] = 'Probíhající chatování';
$string['currentusers'] = 'Stávající uživatelé';
$string['deletesession'] = 'Odstranit toto chatování';
$string['deletesessionsure'] = 'Jste si jisti, že chcete odstranit toto chatování?';
$string['donotusechattime'] = 'Nezveřejňovat čas chatování';
$string['enterchat'] = 'Klikněte zde pro vstup do chatu';
$string['entermessage'] = 'Vložte svou zprávu';
$string['errornousers'] = 'Nemohu najít žádné uživatele!';
$string['explaingeneralconfig'] = 'Tato nastavení se uplatní <strong>vždy</strong>.';
$string['explainmethoddaemon'] = 'Tato nastavení se uplatní, <strong>pouze</strong> pokud je jako chat_method vybrán \'Chatovací démon na serveru\'.';
$string['explainmethodnormal'] = 'Tato nastavení se uplatní, <strong>pouze</strong> pokud je jako chat_method vybrána \'Normální metoda\'.';
$string['generalconfig'] = 'Obecná konfigurace';
$string['idle'] = 'Nečinný';
$string['inputarea'] = 'Vstupní oblast';
$string['invalidid'] = 'Nelze najít tuto chatovací místnost!';
$string['list_all_sessions'] = 'Seznam všech chatování';
$string['list_complete_sessions'] = 'Seznam všech ukončených chatování';
$string['listing_all_sessions'] = 'Zobrazení seznamu chatování';
$string['messagebeepseveryone'] = '{$a} někoho prozvání!';
$string['messagebeepsyou'] = '{$a} vás prozvání!';
$string['messageenter'] = '{$a} právě vstoupil(a) do tohoto chatu';
$string['messageexit'] = '{$a} opustil(a) tento chat';
$string['messages'] = 'Zprávy';
$string['messageyoubeep'] = 'Prozvonili jste uživatele {$a}';
$string['method'] = 'Metoda chatování';
$string['methodajax'] = 'AJAX metoda';
$string['methoddaemon'] = 'Chatovací démon na serveru';
$string['methodnormal'] = 'Normální metoda';
$string['modulename'] = 'Chat';
$string['modulename_help'] = 'Modul Chat umožňuje účastníkům kurzu diskutovat na webu synchronně v reálném čase.

Chatování může být jednorázovou aktivitou, nebo je lze opakovat pravidelně každý den, týden apod. Záznamy z chatu jsou uloženy a mohou být zpřístupněny všem účastníkům kurzu nebo jen vybraným uživatelům na základě nastaveného oprávnění.

Chat je obzvláště užitečný v případech, kdy se účastníci kurzu nemohou setkávat tváří v tvář, např. pro

* pravidelná setkání účastníků studujících dálkově z různých měst či zemí
* studenty, kteří se z různých důvodů nemohou dostavit k individuální konzultaci s vyučujícím
* setkávání studentů vykonávajících praxi mimo školu ke sdílení jejich dosavadních zkušeností
* řízené a monitorované uvedení dětí mladšího věku do světa sociálních sítí
* debatu s pozvaným odborníkem ze zahraničí či jiného města';
$string['modulenameplural'] = 'Chatování';
$string['neverdeletemessages'] = 'Nikdy neodstraňovat zprávy';
$string['nextsession'] = 'Příští naplánované chatování';
$string['nochat'] = 'Žádné chatování nenalezeno';
$string['no_complete_sessions_found'] = 'Nenalezeno žádné ukončené chatování';
$string['noguests'] = 'Tento chat není otevřen pro hosty';
$string['nomessages'] = 'Zatím žádné zprávy';
$string['nopermissiontoseethechatlog'] = 'Nemáte oprávnění vidět záznam tohoto chatování.';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Streamování';
$string['noscheduledsession'] = 'Není plánováno žádné chatování';
$string['notallowenter'] = 'Nemáte oprávnění vstoupit do této chatovací místnosti';
$string['notlogged'] = 'Nejste přihlášeni!';
$string['oldping'] = 'Časový limit spojení';
$string['page-mod-chat-x'] = 'Jakákoliv stránka chatu';
$string['pastchats'] = 'Proběhnuté chatování';
$string['pluginadministration'] = 'Správa chatu';
$string['pluginname'] = 'Chat';
$string['refreshroom'] = 'Obnovit místnost';
$string['refreshuserlist'] = 'Obnovit seznam uživatelů';
$string['removemessages'] = 'Odstranit všechny zprávy';
$string['repeatdaily'] = 'Ve stejný čas každý den';
$string['repeatnone'] = 'Bez opakování - zveřejnit pouze určený čas';
$string['repeattimes'] = 'Opakovat chatování';
$string['repeatweekly'] = 'Ve stejný čas každý týden';
$string['saidto'] = 'řekl(-a) uživateli';
$string['savemessages'] = 'Uložit proběhnuté chatování';
$string['seesession'] = 'Ukázat toto chatování';
$string['send'] = 'Odeslat';
$string['sending'] = 'Odesílání';
$string['serverhost'] = 'Název serveru';
$string['serverip'] = 'IP adresa serveru';
$string['servermax'] = 'Maximum uživatelů';
$string['serverport'] = 'Číslo portu';
$string['sessions'] = 'Chatování';
$string['sessionstart'] = 'Chatování začne v {$a}';
$string['strftimemessage'] = '%H.%M';
$string['studentseereports'] = 'Kdokoliv může vidět proběhnuté chatování';
$string['studentseereports_help'] = 'Pokud je nastaveno na "Ne", budou moci pouze uživatelé s oprávněním "Číst historii chatování" prohlížet záznam tohoto chatu';
$string['talk'] = 'Diskuse';
$string['updatemethod'] = 'Aktualizovat metodu chatování';
$string['updaterate'] = 'Rychlost aktualizace:';
$string['userlist'] = 'Seznam uživatelů';
$string['usingchat'] = 'Použití chatu';
$string['usingchat_help'] = 'Modul Chat obsahuje některé nástroje, které chatování zpříjemňují.

* Smajlíky - Stejně jako jinde v Moodlu můžete také zde používat smajlíky (emotikony), např. :-)
* Odkazy - Internetové adresy budou automaticky převedeny na odkazy.
* Scénické poznámky - Chcete-li popsat svou činnost nebo stav jakoby zvenčí, můžete svůj vzkaz začít "/me" nebo ":". Jestliže se jmenujete např. Martin a napíšete ":se směje" nebo "/me se směje", všem se zobrazí zpráva "Martin se směje".
* Prozvánění - Kliknutím na odkaz "prozvonit" vedle jména osoby můžete libovolnému uživateli poslat zvukový signál. Pokud chcete prozvonit všechny účastníky chatu najednou, vložte text "beep all".
* HTML - Pokud ovládáte jazyk HTML, můžete jej použít a vložit tak do svého vzkazu obrázek, přehrát v něm zvukový soubor nebo vytvořit text různých barev a různé velikosti.';
$string['viewreport'] = 'Ukázat proběhnuté chatování';
