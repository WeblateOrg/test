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
 * Strings for component 'glossary', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   glossary
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Přidat komentář';
$string['addentry'] = 'Přidat novou položku';
$string['addingcomment'] = 'Přidat komentář';
$string['alias'] = 'Klíčové slovo';
$string['aliases'] = 'Klíčová slova';
$string['aliases_help'] = '<p>Ke každému heslu ve slovníku lze připojit seznam klíčových slov
(aliasů).</p>

<p><b>Každé klíčové slovo napište na nový řádek</b> (neoddělujte je
čárkou).</p>

<p>Slova a fráze nastavené jako klíčová slova lze použít jako alternativní
způsob odkazování na heslo. Pokud například používáte filtr pro automatické
propojování, bude při určování slov, která mají být propojena s tímto heslem,
použito nejen hlavní heslové slovo (pojem), ale také všecha klíčová slova.</p>';
$string['allcategories'] = 'Všechny kategorie';
$string['allentries'] = 'VŠE';
$string['allowcomments'] = 'Povolit komentáře k položkám';
$string['allowcomments_help'] = '<p>Účastníkům kurzu lze povolit, aby k heslům ve slovníku přidávali
komentáře.</p>

<p>Můžete zvolit, zda bude tato funkce povolena nebo zakázána.</p>

<p>Učitelé mohou komentáře k heslům přidávat vždy.</p>';
$string['allowduplicatedentries'] = 'Povolit duplicitní položky';
$string['allowduplicatedentries_help'] = '<p>Pokud tuto volbu zapnete, ve slovníku bude možno vytvořit více hesel se
stejným pojmem (heslovým slovem).</p>';
$string['allowprintview'] = 'Povolit zobrazení pro tisk';
$string['allowprintview_help'] = '<p>Studentům lze povolit zobrazení slovníku ve formátu vhodném pro tisk.</p>

<p>Můžete zvolit, zda bude tato funkce povolena nebo zakázána.</p>

<p>Učitelé mohou vždy používat zobrazení pro tisk.</p>';
$string['andmorenewentries'] = 'a {$a} další nové položky.';
$string['answer'] = 'Odpověď';
$string['approvaldisplayformat'] = 'Povolit formát zobrazení';
$string['approvaldisplayformat_help'] = 'Při schvalování položek slovníku můžete použít jiný formát zobrazení';
$string['approve'] = 'Schválit';
$string['areaattachment'] = 'Přílohy';
$string['areaentry'] = 'Definice';
$string['areyousuredelete'] = 'Skutečně chcete odstranit tuto položku?';
$string['areyousuredeletecomment'] = 'Skutečně chcete odstranit tento komentář?';
$string['areyousureexport'] = 'Skutečně chcete exportovat tuto položku do';
$string['ascending'] = '(vzestupně)';
$string['attachment'] = 'Příloha';
$string['attachment_help'] = '<p>Ke každému heslu slovníku můžete přiložit JEDEN soubor ze svého počítače.
Tento soubor je nahrán na server a uložen u vašeho hesla.</p>

<p>Můžete tak sdílet například obrázek nebo dokument ve Wordu.</p>

<p>Přikládat lze soubory libovolného formátu, doporučuje se však pojmenovat je
za použití standardních třípísmenných přípon, jako je .doc pro dokument ve
Wordu, .jpg nebo .png pro obrázek atd. Usnadní to stahování a prohlížení vaší
přílohy v internetových prohlížečích.</p>

<p>Pokud heslo po prvotním vložení znovu upravujete a přiložíte k němu nový
soubor, dříve přiložený soubor budou touto novou přílohou nahrazen.</p>

<p>Pokud upravujete heslo s přílohou, ale nový soubor k němu nepřiložíte,
zůstane původní příloha zachována.</p>';
$string['author'] = 'autor';
$string['authorview'] = 'Procházet podle autora';
$string['back'] = 'Zpět';
$string['cantinsertcat'] = 'Nelze vložit kategorii';
$string['cantinsertrec'] = 'Nelze vložit záznam';
$string['cantinsertrel'] = 'Nelze vložit propojení kategorie-položka';
$string['casesensitive'] = 'Tato položka rozlišuje VELKÁ/malá';
$string['casesensitive_help'] = '<p>Toto nastavení určuje, zda budou při vytváření automatických odkazů na dané
heslo rozlišována velká a malá písmena.</p>

<p>Je-li tato volba aktivována, pak např. ze slova "html" v příspěvku do fóra
NEBUDE vytvořen odkaz k slovníkovému heslu "HTML".</p>';
$string['cat'] = 'kat';
$string['categories'] = 'Kategorie';
$string['category'] = 'Kategorie';
$string['categorydeleted'] = 'Kategorie odstraněna';
$string['categoryview'] = 'Procházet podle kategorie';
$string['changeto'] = 'změnit na {$a}';
$string['cnfallowcomments'] = 'Povolit přidávání komentářů k položkám';
$string['cnfallowdupentries'] = 'Povolit duplicitní položky';
$string['cnfapprovalstatus'] = 'Položky vložené studenty považovat automaticky za schválené';
$string['cnfcasesensitive'] = 'U propojovaných položek záleží na VELKÝCH/malých písmenech';
$string['cnfdefaulthook'] = 'Filtr pro první zobrazení slovníku';
$string['cnfdefaultmode'] = 'Způsob procházení při prvním zobrazení slovníku';
$string['cnffullmatch'] = 'U automatického propojování musí cílovému textu odpovídat celá položka';
$string['cnflinkentry'] = 'Automaticky propojovat položky';
$string['cnflinkglossaries'] = 'Automaticky propojovat slovníky';
$string['cnfrelatedview'] = 'Způsob zobrazování automaticky propojených položek';
$string['cnfshowgroup'] = 'Zobrazit oddělovače skupin';
$string['cnfsortkey'] = 'Výchozí klíč pro třídění';
$string['cnfsortorder'] = 'Výchozí řazení položek';
$string['cnfstudentcanpost'] = 'Studenti mohou vkládat položky do slovníku';
$string['comment'] = 'Komentář';
$string['commentdeleted'] = 'Komentář byl odstraněn.';
$string['comments'] = 'Komentáře';
$string['commentson'] = 'Komentáře k';
$string['commentupdated'] = 'Komentář byl aktualizován.';
$string['completionentries'] = 'Student musí vytvořit položky:';
$string['completionentriesgroup'] = 'Požadovat položky';
$string['concept'] = 'Pojem';
$string['concepts'] = 'Pojmy';
$string['configenablerssfeeds'] = 'Povolit funkci RSS kanálů pro všechny slovníky. Budete ještě muset zapnout RSS kanály v nastavení jednotlivých slovníků.';
$string['current'] = 'Momentální třídění: {$a}';
$string['currentglossary'] = 'Stávající slovník';
$string['date'] = 'datum';
$string['dateview'] = 'Procházet podle data';
$string['defaultapproval'] = 'Automaticky schvalovat položky';
$string['defaultapproval_help'] = '<p>Toto nastavení umožňuje učiteli určit, co se stane s novými hesly, která do
slovníku přidají studenti. Hesla mohou být buď automaticky zpřístupněna všem
účastníkům kurzu, nebo musí učitel každé z nich nejprve schválit.</p>';
$string['defaulthook'] = 'Výchozí zobrazení';
$string['defaultmode'] = 'Výchozí režim';
$string['defaultsortkey'] = 'Výchozí řazení';
$string['defaultsortorder'] = 'Výchozí směr řazení';
$string['definition'] = 'Definice';
$string['definitions'] = 'Definice';
$string['deleteentry'] = 'Odstranit položku';
$string['deletenotenrolled'] = 'Odstranit záznamy uživatelů, kteří zde nejsou zapsáni';
$string['deletingcomment'] = 'Odstranění komentáře';
$string['deletingnoneemptycategory'] = 'Odstraněním této kategorie neodstraníte položky, které obsahuje -- budou označeny jako nezařazené.';
$string['descending'] = '(sestupně)';
$string['destination'] = 'Cílové umístění importovaných záznamů';
$string['destination_help'] = '<p>Můžete upřesnit, kam chcete hesla importovat:</p>

<ul>
  <li><strong>Stávající slovník:</strong> importovaná hesla se doplní do
  aktuálního slovníku.</li>

  <li><strong>Nový slovník:</strong> na základě informací z vybraného
  importovaného souboru se vytvoří nový slovník a nová hesla se vloží do
  něj.</li>
</ul>';
$string['displayformat'] = 'Způsob zobrazení';
$string['displayformatcontinuous'] = 'Souvislý bez autora';
$string['displayformatdefault'] = 'Stejný výchozí způsob nastavení';
$string['displayformatdictionary'] = 'Prostý slovníkový styl';
$string['displayformatencyclopedia'] = 'Encyklopedie';
$string['displayformatentrylist'] = 'Seznam položek';
$string['displayformatfaq'] = 'ČKD';
$string['displayformatfullwithauthor'] = 'Úplný včetně autora';
$string['displayformatfullwithoutauthor'] = 'Úplný bez autora';
$string['displayformat_help'] = 'Toto nastavení upřesňuje, jak se hesla slovníku budou zobrazovat:

* Prostý slovníkový styl - nezobrazují
  se autoři hesel a přílohy jsou uvedeny ve formě odkazů
* Souvislý bez autora - hesla jsou zobrazena souvisle jedno za druhým, oddělena jsou pouze editačními ikonami.
* Úplný včetně autora - zobrazení je podobné jako ve fóru, zobrazuje se údaj o autorovi hesla a přílohy jsou uvedeny ve formě odkazů
* Úplný bez autora - zobrazení je podobné jako ve fóru, informace o autorovi se nezobrazují a přílohy jsou uvedeny ve formě odkazů
* Encyklopedie - stejný způsob zobrazení jako při "Úplný včetně autora", ale pokud tvoří přílohu obrázek, zobrazí se přímo v textu hesla.
* Seznam položek - pouze seznam pojmů jako odkazy
* ČKD (FAQ) - formát vhodný pro zobrazení často kladených dotazů';
$string['displayformats'] = 'Způsoby zobrazení';
$string['displayformatssetup'] = 'Nastavení způsobů zobrazení';
$string['duplicatecategory'] = 'Duplicitní kategorie';
$string['duplicateentry'] = 'Duplicitní položka';
$string['editalways'] = 'Upravit vždy';
$string['editalways_help'] = '<p>Tato volba určuje, zda mohou studenti upravovat své vložené položky bez
časového omezení.</p>

<p>Na výběr jsou dvě možnosti:</p>

<ul>
  <li><b>Ano</b>: studenti mohou položky upravovat vždy.</li>

  <li><b>Ne</b>: studenti mohou položky upravovat v nastaveném čase pro
  úpravy.</li>
</ul>';
$string['editcategories'] = 'Upravit kategorie';
$string['editentry'] = 'Upravit položku';
$string['editingcomment'] = 'Úprava komentáře';
$string['entbypage'] = 'Počet položek na stránce';
$string['entries'] = 'Položky';
$string['entrieswithoutcategory'] = 'Položky bez kategorie';
$string['entry'] = 'Položka';
$string['entryalreadyexist'] = 'Položka již existuje.';
$string['entryapproved'] = 'Položka byla schválena.';
$string['entrydeleted'] = 'Položka odstraněna';
$string['entryexported'] = 'Položka úspěšně exportována';
$string['entryishidden'] = '(tato položka je momentálně skrytá)';
$string['entryleveldefaultsettings'] = 'Výchozí nastavení pro položky';
$string['entrysaved'] = 'Položka byla uložena.';
$string['entryupdated'] = 'Položka byla aktualizována.';
$string['entryusedynalink'] = 'Tato položka by měla být automaticky propojována';
$string['entryusedynalink_help'] = '<p>Zapnutím této volby umožníte automatické vytváření odkazů na slovníková
hesla vždy, když se heslové slovo nebo fráze objeví v některé části kurzu &ndash; v
příspěvcích do fóra, ve studijních materiálech, v týdenních shrnutích, v
poznámkách atd.</p>

<p>Pokud v některém textu (například v příspěvku do fóra) automatické odkazy
vytvářet nechcete, označte jej párovými značkami &lt;nolink&gt; a
&lt;/nolink&gt;.</p>

<p>Tuto funkci bude možné zapnout, pouze pokud je možnost automatického
vytváření odkazů povolena na úrovni slovníku.</p>';
$string['errcannoteditothers'] = 'Nemůžete upravovat položky jiných uživatelů';
$string['errconceptalreadyexists'] = 'Tento pojem již ve slovníku existuje. Duplicitní položky jsou zde zakázány.';
$string['errdeltimeexpired'] = 'Nelze odstranit. Čas vypršel!';
$string['erredittimeexpired'] = 'Čas pro úpravu této položky již vypršel.';
$string['errorparsingxml'] = 'Vyskytla se chyby při analýze souboru. Ujistěte se, že má platnou XML syntaxi.';
$string['explainaddentry'] = 'Zde můžete přidat novou položku do slovníku.<br />Pojem a definice jsou povinná pole.';
$string['explainall'] = 'Zobrazit VŠECHNY položky na jedné stránce';
$string['explainalphabet'] = 'Procházet slovníkem pomocí tohoto rejstříku';
$string['explainexport'] = 'Export zahájíte stisknutím tlačítka zobrazeného níže.<br />Exportní soubor můžete kdykoliv importovat do tohoto nebo jiného kurzu.<p>Upozornění: přílohy (např. obrázky) a údaje o autorech hesel se neexportují.</p>';
$string['explainimport'] = 'Vyberte importovaný soubor a kritéria importu.<p>Odešlete váš požadavek a zkontrolujte výsledky importu.';
$string['explainspecial'] = 'Zobrazuje položky, které nezačínají písmenem.';
$string['exportedentry'] = 'Exportované položky';
$string['exportentries'] = 'Exportovat položky';
$string['exportentriestoxml'] = 'Exportovat položky do XML souboru';
$string['exportfile'] = 'Exportovat položky do souboru';
$string['exportglossary'] = 'Exportovat slovník';
$string['exporttomainglossary'] = 'Exportovat do hlavního slovníku';
$string['filetoimport'] = 'Importovat ze souboru';
$string['filetoimport_help'] = '<p>Vyberte na svém počítači soubor XML, který obsahuje hesla k importování.</p>';
$string['fillfields'] = 'Pojem a definice jsou povinná pole.';
$string['filtername'] = 'Automatické propojování slovníku';
$string['fullmatch'] = 'Srovnávat pouze celá slova<br /><small>(při automatickém propojování)</small>';
$string['fullmatch_help'] = '<p>Pokud je aktivováno automatické vytváření odkazů, pak tímto nastavením
povolíte vytváření odkazů pouze u celých slov.</p>

<p>Například slovníkové heslo "konstrukt" nevytvoří odkaz ve slově
"konstruktivismus".</p>';
$string['glossary:addinstance'] = 'Přidat nový slovník';
$string['glossary:approve'] = 'Schvalovat neschválené položky';
$string['glossary:comment'] = 'Vytvářet komentáře';
$string['glossary:export'] = 'Exportovat položky';
$string['glossary:exportentry'] = 'Exportovat jednu položku';
$string['glossary:exportownentry'] = 'Exportovat jednu vaši položku';
$string['glossary:import'] = 'Importovat položky';
$string['glossaryleveldefaultsettings'] = 'Výchozí nastavení pro slovník';
$string['glossary:managecategories'] = 'Spravovat kategorie';
$string['glossary:managecomments'] = 'Spravovat komentáře';
$string['glossary:manageentries'] = 'Spravovat položky';
$string['glossary:rate'] = 'Hodnotit položky';
$string['glossarytype'] = 'Typ slovníku';
$string['glossarytype_help'] = '<p>Modul Slovník vám umožňuje přenášet hesla z kteréhokoliv vedlejšího slovníku
do hlavního slovníku kurzu.</p>

<p>K tomu je nutné určit, který slovník je hlavní.</p>

<p>Poznámka: V každém kurzu může být jako hlavní označen pouze jeden slovník;
aktualizovat jej mohou pouze učitelé.</p>';
$string['glossary:view'] = 'Zobrazovat položky';
$string['glossary:viewallratings'] = 'Zobrazit podrobné informace o hodnocení jednotlivými uživateli';
$string['glossary:viewanyrating'] = 'Zobrazit celkový výsledek hodnocení libovolného uživatele';
$string['glossary:viewrating'] = 'Zobrazit celková získaná hodnocení';
$string['glossary:write'] = 'Vytvářet nové položky';
$string['guestnoedit'] = 'Hosté nesmějí upravovat slovníky';
$string['importcategories'] = 'Importovat kategorie';
$string['importedcategories'] = 'Importované kategorie';
$string['importedentries'] = 'Importované položky';
$string['importentries'] = 'Importovat položky';
$string['importentriesfromxml'] = 'Import položek z XML souboru';
$string['includegroupbreaks'] = 'Zahrnout oddělovače skupin';
$string['isglobal'] = 'Je tento slovník globální?';
$string['isglobal_help'] = '<p>Správci a uživatelé s přidělenou pravomocí site:doanything mohou slovník
označit jako globální.</p>

<p>Tento slovník může být součástí kteréhokoliv kurzu (zejména titulní stránky
instalace Moodlu).</p>

<p>Rozdíl oproti běžnému lokálnímu slovníku spočívá v&nbsp;tom, že automatické
odkazy na hesla globálního slovníku se vytvářejí ve&nbsp;všech kurzech (a
nikoliv pouze v&nbsp;tom, v&nbsp;němž je slovník vytvořen).</p>';
$string['letter'] = 'písmeno';
$string['linkcategory'] = 'Automaticky propojovat tuto kategorii';
$string['linkcategory_help'] = '<p>Můžete upřesnit, zda chcete, aby se automaticky vytvářely odkazy také pro
názvy kategorií.</p>

<p>Poznámka: Odkazy na kategorie jsou vytvářeny na základě srovnávání celých
slov s ohledem na rozlišení velkých a malých písmen.</p>';
$string['linking'] = 'Automatické propojování';
$string['mainglossary'] = 'Hlavní slovník';
$string['maxtimehaspassed'] = 'Je mi líto, ale vypršela lhůta ({$a}) k úpravě tohoto komentáře!';
$string['modulename'] = 'Slovník';
$string['modulename_help'] = 'Modul Slovník umožňuje vytvářet a udržovat seznam termínů a jejich definic.

K položkám slovníku je možno přikládat soubory. Položky je možno prohledávat a řadit abecedně i podle kategorie, data vložení či autora. Slovník lze nastavit tak, že položky vyžadující schválení vyučujícím před tím, než jsou zobrazeny ostatním studentům.

Vložená hesla je možno automaticky propojovat s dalším obsahem v kurzu tak, že kdekoliv se použije termín uvedený ve slovníku, bude automaticky vytvořen odkaz na jeho vysvětlení.

Položky ve slovníku je možno komentovat a hodnotit, a to i ostatními studenty (vzájemné hodnocení). Hodnocení se přepočítává na výslednou známku, která může být součástí klasifikace v kurzu.

Slovník je možno použít např.

* jako společně vytvářenou banku klíčových termínů a konceptů k danému tématu
* pro prezentaci svých "vizitek" v rámci kurzu, kde studenti pod svým jménem uvedou požadované údaje
* jako sbírku často kladených dotazů či praktických doporučení k danému tématu
* pro sdílení užitečných videí, obrázků či zvukových souborů
* referenční výčet pojmů k zapamatování a opakování';
$string['modulenameplural'] = 'Slovníky';
$string['newentries'] = 'Nové položky slovníku';
$string['newglossary'] = 'Nový slovník';
$string['newglossarycreated'] = 'Nový slovník vytvořen.';
$string['newglossaryentries'] = 'Nové položky slovníku:';
$string['nocomment'] = 'Bez komentáře';
$string['nocomments'] = '(Nebyl nalezen žádný komentář k této položce.)';
$string['noconceptfound'] = 'Nebyl nalezen žádný pojem ani definice.';
$string['noentries'] = 'Nebyla nalezena žádná položka.';
$string['noentry'] = 'Bez položek.';
$string['nopermissiontodelcomment'] = 'Nemůžete mazat komentáře jiných lidí!';
$string['nopermissiontodelinglossary'] = 'Nemůžete psát komentáře v tomto slovníku!';
$string['nopermissiontoviewresult'] = 'Můžete se podívat na výsledky svých položek';
$string['notapproved'] = 'Položka slovníku dosud nebyla schválena.';
$string['notcategorised'] = 'Nezařazeno';
$string['numberofentries'] = 'Počet položek';
$string['onebyline'] = '(jedna na řádku)';
$string['page-mod-glossary-edit'] = 'Stránka pro přidání či úpravu položky ve slovníku';
$string['page-mod-glossary-view'] = 'Stránka se zobrazením slovníku';
$string['page-mod-glossary-x'] = 'Jakákoliv stránka slovníku';
$string['pluginadministration'] = 'Správa slovníku';
$string['pluginname'] = 'Slovník';
$string['popupformat'] = 'Formát vyskakovacího okna';
$string['printerfriendly'] = 'Verze pro tisk';
$string['printviewnotallowed'] = 'Zobrazení pro tisk není povoleno';
$string['question'] = 'Otázka';
$string['rejectedentries'] = 'Zamítnuté položky';
$string['rejectionrpt'] = 'Zpráva o zamítnutí';
$string['resetglossaries'] = 'Odstranit záznamy od';
$string['resetglossariesall'] = 'Odstranit záznamy ze všech slovníků';
$string['rssarticles'] = 'Počet posledních RSS článků';
$string['rssarticles_help'] = '<p>Tato volba umožňuje nastavit počet článků, které mají být zahrnuty v RSS
kanálu.</p>

<p>Pro většinu slovníků je vhodný počet mezi 5 a 20 články. Pokud je slovník
často aktualizován, můžete počet článků zvýšit.</p>';
$string['rsssubscriberss'] = 'Zobrazit RSS kanál pro pojmy slovníku \'{$a}\'';
$string['rsstype'] = 'RSS kanál pro tuto aktivitu';
$string['rsstype_help'] = '<p>Tato volba umožňuje aktivovat RSS kanál pro aktuální slovník.</p>

<p>Můžete zvolit jeden ze dvou typů RSS kanálu:</p>

<ul>
  <li><b>Včetně autora</b>: všechny články vytvářené pro tento kanál budou
  obsahovat jméno autora.</li>

  <li><b>Bez autora</b>: články vytvářené pro tento kanál nebudou obsahovat
  jméno autora.</li>
</ul>';
$string['searchindefinition'] = 'Vyhledat text';
$string['secondaryglossary'] = 'Vedlejší slovník';
$string['showall'] = 'Zobrazit odkaz \'VŠE\'';
$string['showall_help'] = '<p align="center"><b>Nastavení možností pro abecední procházení
slovníku</b></p>

<p>Uživatelé mohou slovník procházet a vyhledávat v něm. Nastavení těchto
činností můžete upřesnit následujícími volbami:</p>

<p><b>Zobrazit odkaz "Speciální"</b>: umožní procházení slovníku podle
zvláštních znaků, jako jsou @, # atd.</p>

<p><b>Zobrazit abecedu</b>: umožní procházení slovníku podle jednotlivých
písmen abecedy.</p>

<p><b>Zobrazit odkaz "Vše"</b>: umožní procházení všech hesel najednou.</p>';
$string['showalphabet'] = 'Zobrazit abecedu';
$string['showalphabet_help'] = '<p align="center"><b>Nastavení možností pro abecední procházení
slovníku</b></p>

<p>Uživatelé mohou slovník procházet a vyhledávat v něm. Nastavení těchto
činností můžete upřesnit následujícími volbami:</p>

<p><b>Zobrazit odkaz "Speciální"</b>: umožní procházení slovníku podle
zvláštních znaků, jako jsou @, # atd.</p>

<p><b>Zobrazit abecedu</b>: umožní procházení slovníku podle jednotlivých
písmen abecedy.</p>

<p><b>Zobrazit odkaz "Vše"</b>: umožní procházení všech hesel najednou.</p>';
$string['showspecial'] = 'Zobrazit odkaz \'Speciální\'';
$string['showspecial_help'] = '<p align="center"><b>Nastavení možností pro abecední procházení
slovníku</b></p>

<p>Uživatelé mohou slovník procházet a vyhledávat v něm. Nastavení těchto
činností můžete upřesnit následujícími volbami:</p>

<p><b>Zobrazit odkaz "Speciální"</b>: umožní procházení slovníku podle
zvláštních znaků, jako jsou @, # atd.</p>

<p><b>Zobrazit abecedu</b>: umožní procházení slovníku podle jednotlivých
písmen abecedy.</p>

<p><b>Zobrazit odkaz "Vše"</b>: umožní procházení všech hesel najednou.</p>';
$string['sortby'] = 'Třídit podle';
$string['sortbycreation'] = 'Podle data vytvoření';
$string['sortbylastupdate'] = 'Podle poslední aktualizace';
$string['sortchronogically'] = 'Třídit chronologicky';
$string['special'] = 'Speciální';
$string['standardview'] = 'Procházet podle abecedy';
$string['studentcanpost'] = 'Studenti mohou přidávat položky';
$string['totalentries'] = 'Položek celkem';
$string['usedynalink'] = 'Automaticky propojovat položky slovníku';
$string['usedynalink_help'] = '<p>Zapnutím této volby umožníte automatické vytváření odkazů na slovníková
hesla vždy, když se heslové slovo nebo fráze objeví v některé části kurzu &ndash; v
příspěvcích do fóra, ve studijních materiálech, v týdenních shrnutích, v
poznámkách atd.</p>

<p>Poznámky: Aktivace této volby v nastavení slovníku neaktivuje automatické
vytváření odkazů pro každé heslo &ndash; příslušnou volbu je nutné aktivovat u
každého hesla individuálně.</p>

<p>Pokud v některém textu (například v příspěvku do fóra) automatické odkazy
vytvářet nechcete, označte jej párovými značkami &lt;nolink&gt; a
&lt;/nolink&gt;.</p>

<p>Odkazy se vytvářejí také pro názvy kategorií.</p>';
$string['waitingapproval'] = 'Čeká na schválení';
$string['warningstudentcapost'] = '(Platí pouze, pokud nejde o hlavní slovník.)';
$string['withauthor'] = 'Pojmy včetně autora';
$string['withoutauthor'] = 'Pojmy bez autora';
$string['writtenby'] = 'od';
$string['youarenottheauthor'] = 'Nejste autorem tohoto komentáře, nemůžete jej upravovat.';
