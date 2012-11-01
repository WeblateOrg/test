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
 * Strings for component 'local_amos', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   local_amos
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>AMOS je zkratka pro Automated Manipulation Of Strings. Jedná se o centrální repozitář textových řetězců Moodle a jejich historie. Systém sleduje přidávání nových anglických řetězců do kódu Moodle, shromažďuje překlady, obsluhuje běžné operace s přeloženými řetězci a generuje jazykové balíčky používané na serverech s Moodle.</p>
<p>Pro více informací se podívejte na <a href="http://docs.moodle.org/en/AMOS">dokumentaci AMOS</a>.</p>';
$string['amos'] = 'AMOS - nástroj pro překlad Moodle';
$string['amos:commit'] = 'Odeslat přeložené řetězce do hlavního repositáře';
$string['amos:execute'] = 'Spouštět vložený AMOScript';
$string['amos:importfile'] = 'Importovat řetězce z nahraného souboru';
$string['amos:manage'] = 'Spravovat portál AMOS';
$string['amos:stage'] = 'Použít překladatelský nástroj AMOS a dočasně uložit řetězce v překladišti';
$string['amos:stash'] = 'Uložit přeložené řetězce do odkladiště';
$string['amos:usegoogle'] = 'Používat služby Google Translate';
$string['commitbutton'] = 'Zapsat a odebrat vše';
$string['commitbutton2'] = 'Zapsat a ponechat na překladišti';
$string['commitmessage'] = 'Průvodní zpráva';
$string['commitstage'] = 'Trvale zapsat přeložené řetězce';
$string['commitstage_help'] = 'Trvale uloží všechny aktuálně přeložené řetězce do repositáře AMOS. Aktuální stav překladiště je před svým odesláním automaticky pročištěn. Jsou uloženy pouze zeleně zvýrazněné řetězce. Obsah překladiště je po zapsání přeložených řetězců odstraněn.';
$string['committableall'] = 'všechny jazyky';
$string['committablenone'] = 'nejsou povoleny žádné jazyky - prosím kontaktujte správce AMOS';
$string['componentsall'] = 'Všechny';
$string['componentsnone'] = 'Žádný';
$string['componentsstandard'] = 'Standardní';
$string['confirmaction'] = 'Akci není možné vrátit zpět. Jste si jistí?';
$string['contribaccept'] = 'Přijmout';
$string['contribactions'] = 'Operace se zaslanými překlady';
$string['contribactions_help'] = 'V závislosti na vašich právech a momentálnímu stavu zaslaného překladu můžete mít k dispozici některé z následujících akcí:

* Použít - zkopíruje zaslané řetězce do vašeho překladiště, aniž by byly provedeny jakékoliv změny stavu zaslaného překladu
* Přiřadit mně - nastaví vás jako recenzenta zaslaného překladu. Recenzent je zodpovědný za kontrolu překladů a jejich integraci
* Rezignovat - odebere vám přiřazení recenzenta zaslaného překladu
* Začít recenzi - přiřadí vám zaslaný překlad k recenzi, nastaví jeho stav na "Recenzován" a zkopíruje zaslané řetězce do vašeho překladiště
* Přijmout - označí zaslaný překlad jako přijatý
* Odmítnout - označí překlad jako odmítnutý, v komentáři prosím zadejte důvod odmítnutí překladu

Přispěvatelé jsou informováni e-mailem o změnách stavu jimi zaslaných překladů.';
$string['contribapply'] = 'Použít';
$string['contribassignee'] = 'Recenzent';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Přiřadit mně';
$string['contribauthor'] = 'Autor';
$string['contribclosedno'] = 'Skrýt vyřešené příspěvky';
$string['contribclosedyes'] = 'Zobrazit i vyřešené příspěvky';
$string['contribcomponents'] = 'Komponenty';
$string['contribid'] = 'ID';
$string['contribincomingnone'] = 'Žádné čekající příspěvky';
$string['contribincomingsome'] = 'Čekající příspěvky ({$a})';
$string['contriblanguage'] = 'Jazyk';
$string['contribreject'] = 'Odmítnout';
$string['contribresign'] = 'Rezignovat';
$string['contribstaged'] = 'Příspěvek <a href="contrib.php?id={$a->id}">#{$a->id}</a> od {$a->author}';
$string['contribstagedinfo'] = 'Příspěvek k překladu';
$string['contribstagedinfo_help'] = 'Vaše překladiště obsahuje řetězce, které byly zaslány uvedeným přispěvatelem. Od správců jazykového balíčku se očekává, že provedou recenzi zaslaného překladu a poté jej buď přijmou nebo odmítnou.';
$string['contribstartreview'] = 'Začít recenzi';
$string['contribstatus'] = 'Stav';
$string['contribstatus0'] = 'Nový';
$string['contribstatus10'] = 'Recenzován';
$string['contribstatus20'] = 'Odmítnut';
$string['contribstatus30'] = 'Přijat';
$string['contribstatus_help'] = 'Každý zaslaný překlad se nachází v jednom z následujících stavů:

* Nový - přispěvatel zaslal svůj překlad, ale ten nebyl dosud recenzován
* Recenzován - zaslaný překlad byl přiřazen jednomu ze správců jazykového balíčku k recenzi a přeložené řetězce byly zkopírovány do překladiště daného správce
* Odmítnut - zaslaný překlad byl správcem jazykového balíčku odmítnut (pravděpodobně s vysvětlujícím komentářem)
* Přijat - zaslaný překlad by správcem jazykového balíčku schválen a (s případnými drobnými korekturami) uložen do repozitáře';
$string['contribstrings'] = 'Řetězců';
$string['contribstringseq'] = '{$a->orig} nových';
$string['contribstringsnone'] = '{$a->orig} (všechny jsou již přeloženy)';
$string['contribstringssome'] = '{$a->orig} (pro {$a->same} z nich již existuje novější překlad)';
$string['contribsubject'] = 'Předmět';
$string['contribsubmittednone'] = 'Žádné příspěvky';
$string['contribsubmittedsome'] = 'Vámi odeslané příspěvky';
$string['contribtimemodified'] = 'Upraveno';
$string['contributions'] = 'Příspěvky';
$string['diff'] = 'Porovnat';
$string['diffaction'] = 'Pokud je zjištěn rozdíl';
$string['diffaction1'] = 'Ulož aktuální řetězce z obou verzí do překladiště';
$string['diffaction2'] = 'Použij novější z obou řetězců pro obě verze v překladišti';
$string['diffmode'] = 'Zkopíruj řetězce do překladiště, pokud';
$string['diffmode1'] = 'se anglické řetězce změnily, ale jejich překlad nikoliv';
$string['diffmode2'] = 'se anglické řetězce nezměnily, ale jejich překlad ano';
$string['diffmode3'] = 'se změnily buď anglické řetězce, anebo jejich překlad (ale ne obojí)';
$string['diffmode4'] = 'se změnily anglické řetězce i jejich překlad';
$string['diffprogress'] = 'Porovnávám zvolené větve';
$string['diffprogressdone'] = 'Celkem nalezeno {$a} rozdílů';
$string['diffstaged'] = 'srov';
$string['diffstrings'] = 'Porovnání řetězců na dvou větvích';
$string['diffstrings_help'] = 'Tento nástroj porovná řetězce na svou zvolených větvích jazykového balíčku. Je-li zjištěn rozdíl, jsou řetězce umístěny do překladiště pro další zpracování.';
$string['diffversions'] = 'Verze';
$string['emailacceptbody'] = 'Správce jazykového balíčku {$a->assignee} přijal vámi zaslaný překlad #{$a->id} {$a->subject}.

Více informací najdete na {$a->url}';
$string['emailacceptsubject'] = '[AMOS příspěvek] Přijat';
$string['emailcontributionbody'] = 'Uživatel {$a->author} zaslal k recenzi nový překlad #{$a->id} {$a->subject}.

Více informací najdete na {$a->url}';
$string['emailcontributionsubject'] = '[AMOS příspěvek] Nový překlad';
$string['emailrejectbody'] = 'Správce jazykového balíčku {$a->assignee} odmítnul vámi zaslaný překlad #{$a->id} {$a->subject}.

Více informací najdete na {$a->url}';
$string['emailrejectsubject'] = '[AMOS příspěvek] Odmítnut';
$string['emailreviewbody'] = 'Správce jazykového balíčku {$a->assignee} začal s recenzí vámi zaslaného překladu #{$a->id} {$a->subject}.

Více informací najdete na {$a->url}';
$string['emailreviewsubject'] = '[AMOS příspěvek] Recenzován';
$string['err_exception'] = 'Chyba: {$a}';
$string['err_invalidlangcode'] = 'Neplatný kód jazyka';
$string['err_parser'] = 'Chyba parsování: {$a}';
$string['filtercmp'] = 'Komponenty';
$string['filtercmp_desc'] = 'Zobrazit řetězce z těchto komponent';
$string['filterlng'] = 'Jazyky';
$string['filterlng_desc'] = 'Zobrazit překlad do těchto jazyků';
$string['filtermis'] = 'Různé';
$string['filtermis_desc'] = 'Doplňující podmínky pro zobrazení řetězců';
$string['filtermisfglo'] = 'pouze řetězce ze šedého seznamu';
$string['filtermisfhlp'] = 'pouze řetězce s nápovědou';
$string['filtermisfmis'] = 'pouze chybějící a zastaralé překlady';
$string['filtermisfstg'] = 'pouze řetězce z překladiště';
$string['filtermisfwog'] = 'bez řetězců z šedého seznamu';
$string['filtersid'] = 'Identifikátor řetězce';
$string['filtersid_desc'] = 'Systémový klíč jednoznačně určující řetězce v rámci dané komponenty';
$string['filtersidpartial'] = 'částečná shoda';
$string['filtertxt'] = 'Podřetězec';
$string['filtertxtcasesensitive'] = 'včetně shody velikosti písmen';
$string['filtertxt_desc'] = 'Řetězec musí obsahovat daný text';
$string['filtertxtregex'] = 'regex';
$string['filterver'] = 'Verze';
$string['filterver_desc'] = 'Zobrazit řetězce z těchto verzí Moodle';
$string['found'] = 'Nalezeno: {$a->found} &nbsp;&nbsp;&nbsp; Chybí: {$a->missing} ({$a->missingonpage})';
$string['foundinfo'] = 'Počet nalezených řetězců';
$string['foundinfo_help'] = 'Zobrazuje celkový počet řádků v tabulce pro překlad, počet chybějících překladů a v závorce počet chybějících překladů na aktuální stránce.';
$string['gotofirst'] = 'jdi na první stránku';
$string['gotoprevious'] = 'jdi na předchozí stránku';
$string['greylisted'] = 'Šedý seznam';
$string['greylisted_help'] = 'Z historických důvodů obsahuje jazykový balíček Moodle řadu řetězců, které již nejsou používány, ale dosud nebyly odstraněny. Takové řetězce jsou umístěny na tzv. "šedý seznam" (greylist). Jakmile bude potvrzeno, že daný řetězec není nadále používán, je natrvalo odstraněn z jazykového balíčku.

Pokud zjistíte, že některý z řetězců na šedém seznamu je stále používán, prosím informujte správce AMOS pomocí diskusního fóra "Translating Moodle" na těchto stránkách. Překlad řetězců ze šedého seznamu můžete odložit na později či zcela ignorovat,';
$string['greylistedwarning'] = 'řetězec je na šedém seznamu';
$string['importfile'] = 'Nahrát přeložené řetězce ze souboru';
$string['importfile_help'] = 'Řetězce můžete do překladiště nahrát ze souboru pomocí tohoto formuláře.

* Soubor musí být platný PHP kód definující pole řetězců tak, jako je tomu v adresáři "/lang/en" vaší instalace Moodle.
* Název souboru musí odpovídat tomu, v němž jsou definovány anglické originály řetězců - např. moodle.php, assignment.php nebo enrol_manual.php apod.

Všechny v souboru nalezené řetězce budou uloženy do vašeho překladiště.';
$string['language'] = 'Jazyk';
$string['languages'] = 'Jazyky';
$string['languagesall'] = 'Všechny';
$string['languagesnone'] = 'Žádný';
$string['log'] = 'Protokol';
$string['logfilterbranch'] = 'Verze';
$string['logfiltercommithash'] = 'git hash';
$string['logfiltercommitmsg'] = 'Průvodní zpráva (commit message) obsahuje';
$string['logfiltercommits'] = 'Filtr na základě zápisu do repozitáře';
$string['logfiltercommittedafter'] = 'Zapsáno do repozitáře po';
$string['logfiltercommittedbefore'] = 'Zapsáno do repozitáře před';
$string['logfiltercomponent'] = 'Komponenty';
$string['logfilterlang'] = 'Jazyky';
$string['logfiltershow'] = 'Zobrazit filtrované zápisy a řetězce';
$string['logfiltersource'] = 'Zdroj';
$string['logfiltersourceamos'] = 'amos (webové rozhraní pro překlad)';
$string['logfiltersourcebot'] = 'bot (hromadné operace prováděné skriptem)';
$string['logfiltersourcecommitscript'] = 'commitscript (AMOScript v těle průvodní zprávy)';
$string['logfiltersourcefixdrift'] = 'fixdrift (oprava rozdílu mezi AMOS a Git)';
$string['logfiltersourcegit'] = 'git (zdrojové kódy Moodle a balíčky verze 1.x)';
$string['logfiltersourcerevclean'] = 'revclean (reverzní čištění balíčku)';
$string['logfilterstringid'] = 'Identifikátor řetězce';
$string['logfilterstrings'] = 'Filtr řetězců';
$string['logfilterusergrp'] = 'Autor zápisu do repozitáře';
$string['logfilterusergrpor'] = 'nebo';
$string['maintainers'] = 'Správci balíčků';
$string['markuptodate'] = 'Označuji překlad jako aktuální';
$string['markuptodate_help'] = 'AMOS zjistil, že tento řetězec může být zastaralý, neboť anglický originál byl upraven poté, co byl přeložen. Zkontrolujte aktuálnost překladu a buď jej upravte, nebo označte jako aktuální.';
$string['merge'] = 'Připojit';
$string['mergestrings'] = 'Připojit překlad z jiné větve';
$string['mergestrings_help'] = 'Tento nástroj prohledá zdrojovou větev a všechny řetězce, které zatím chybí na cílové větvi, uloží do překladiště. Ve výsledku se tedy kopírují překlady z jedné větve na druhou. Tento nástroj je dostupný pouze správcům jazykových balíčků.';
$string['newlanguage'] = 'Nový jazyk';
$string['nodiffs'] = 'Nenalezeny žádné rozdíly';
$string['nofiletoimport'] = 'Určete soubor k importu';
$string['nologsfound'] = 'Nenalezeny žádné řetězce, upravte nastavení filtru';
$string['nostringsfound'] = 'Nenalezeny žádné řetězce';
$string['nostringsfoundonpage'] = 'Nenalezeny žádné řetězce na stránce {$a}';
$string['nostringtoimport'] = 'V souboru nebyl nalezen žádný platný řetězec. Ujistěte se, že soubor má správný název a formát dat.';
$string['nothingtomerge'] = 'Zdrojová větev neobsahuje žádné nové řetězce, které by chyběly na cílové větvi. Nelze připojit žádné řetězce.';
$string['nothingtostage'] = 'Operace nevrátila žádný řetězec, který by bylo možné uložit do překladiště.';
$string['numofcommitsabovelimit'] = 'Nalezeno {$a->found} zápisů do repozitáře, které odpovídají filtru, používám posledních {$a->limit}';
$string['numofcommitsunderlimit'] = 'Nalezeno {$a->found} zápisů do repozitáře';
$string['numofmatchingstrings'] = 'Z toho {$a->strings} změn řetězců v {$a->commits} zápisech do repozitáře odpovídá filtru řetězců.';
$string['outdatednotcommitted'] = 'Zastaralý řetězec';
$string['outdatednotcommitted_help'] = 'AMOS zjistil, že řetězec může být zastaralý, neboť anglický originál byl upraven poté, co byl přeložen. Prosím, zkontrolujte aktuálnost překladu.';
$string['outdatednotcommittedwarning'] = 'zastaralý';
$string['ownstashactions'] = 'Operace s odloženými řetězci';
$string['ownstashes'] = 'Vaše odkladiště';
$string['ownstashes_help'] = 'Toto je seznam vašich odložených překladů';
$string['ownstashesnone'] = 'Žádné řetězce na vašem odkladišti';
$string['permalink'] = 'trvalý odkaz';
$string['placeholder'] = 'Zástupné znaky';
$string['placeholderwarning'] = 'řetězec obsahuje zástupné znaky';
$string['pluginclasscore'] = 'Jaderné subsystémy';
$string['pluginclassnonstandard'] = 'Nestandardní rozšíření';
$string['pluginclassstandard'] = 'Standardní moduly';
$string['pluginname'] = 'AMOS';
$string['presetcommitmessage'] = 'Contributed translation #{$a->id} by {$a->author}';
$string['presetcommitmessage2'] = 'Merged missing strings from {$a->source} to {$a->target} branch';
$string['presetcommitmessage3'] = 'Fixing differences between {$a->versiona} and {$a->versionb}';
$string['privileges'] = 'Vaše oprávnění';
$string['privilegesnone'] = 'Máte pouze oprávnění číst veřejné dostupné informace';
$string['propagate'] = 'Rozšířit';
$string['propagatednone'] = 'Žádný řetězec nebyl rozšířen na jiné větve';
$string['propagatedsome'] = '{$a} řetězce na překladišti rozšířeno na vybrané větve';
$string['propagaterun'] = 'Rozšířit';
$string['requestactions'] = 'Akce';
$string['savefilter'] = 'Uložit nastavení filtru';
$string['script'] = 'AMOScript';
$string['scriptexecute'] = 'Spustit skript a uložit výsledky do překladiště';
$string['sourceversion'] = 'Zdrojová verze';
$string['stage'] = 'Překladiště';
$string['stageactions'] = 'Operace s řetězci na překladišti';
$string['stageedit'] = 'Upravit řetězce na překladišti';
$string['stagelang'] = 'Jazyk';
$string['stageoriginal'] = 'Originál';
$string['stageprune'] = 'Odebrat nezapsatelné';
$string['stagerebase'] = 'Přeskládání';
$string['stagestring'] = 'Řetězec';
$string['stagestringsnocommit'] = 'Překladiště obsahuje {$a->staged} řetězců';
$string['stagestringsnone'] = 'Překladiště neobsahuje žádné řetězce';
$string['stagestringssome'] = 'Překladiště obsahuje {$a->staged} řetězců, {$a->committable} z nich může být trvale zapsáno do repozitáře';
$string['stagesubmit'] = 'Odeslat správcům balíčku';
$string['stagetranslation'] = 'Překlad';
$string['stageunstageall'] = 'Odebrat vše';
$string['stashactions'] = 'Operace s odloženými řetězci';
$string['stashapply'] = 'Použít';
$string['stashautosave'] = 'Automaticky uložený snímek překladiště';
$string['stashes'] = 'Odložené  překlady';
$string['stashpush'] = 'Odložit řetězce v překladišti';
$string['stashsubmitmessage'] = 'Zpráva pro správce jazykového balíčku';
$string['stashsubmitsubject'] = 'Předmět';
$string['stashtitle'] = 'Název odloženého překladu';
$string['stashtitledefault'] = 'PRACOVNÍ VERZE - {$a->time}';
$string['translatorlang'] = 'Jazyk';
$string['translatororiginal'] = 'Originál';
$string['translatorstring'] = 'Řetězec';
$string['translatortool'] = 'Editor řetězců';
$string['translatortranslation'] = 'Překlad';
$string['typecontrib'] = 'Nestandardní rozšíření';
$string['typecore'] = 'Jaderné subsystémy';
$string['typestandard'] = 'Standardní moduly';
$string['unstage'] = 'Odebrat';
$string['unstageconfirm'] = 'Opravdu?';
$string['unstaging'] = 'Odebírám';
$string['version'] = 'Verze';
