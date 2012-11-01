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
 * Strings for component 'enrol_imsenterprise', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_imsenterprise
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'Po uložení nastavení můžete';
$string['allowunenrol'] = 'Povolit souboru IMS <strong>vyškrtávat</strong> studenty/učitele z kurzů';
$string['allowunenrol_desc'] = '<p>Pomocí dat ve formátu IMS Enterprise je možné řídit zápisy do kurzů &ndash; pro
studenty i pro učitele. Pokud je toto nastavení zapnuto, provede Moodle
vyškrtnutí z kurzů uvedená v souboru IMS.</p>

<p>V rámci souboru IMS existují tři způsoby vyškrtávání studentů:</p>

<ul>
  <li>Pomocí položky &lt;member&gt; &ndash; ta identifikuje daného studenta a kurz, a
  pomocí atributu "recstatus" nastaveného u položky &lt;role&gt; na hodnotu 3
  ("odstranit"). TENTO ZPŮSOB JEŠTĚ NENÍ V ZÁPISOVÉM MODULU MOODLU K
  DISPOZICI.</li>

  <li>Pomocí položky &lt;member&gt; &ndash; ta identifikuje daného studenta a kurz, a
  pomocí položky &lt;status&gt; nastavené na hodnotu 0 ("neaktivní").</li>
</ul>

<p>Třetí způsob je poněkud odlišný. Nevyžaduje, aby bylo povoleno vyškrtávání z
kurzů, a může být definován v dostatečném předstihu před datem vyškrtnutí z
kurzu.</p>

<ul>
  <li>Pokud je u položky &lt;member&gt; uveden také údaj o časové platnosti
  zápisu &ndash; &lt;timeframe&gt;, lze jeho pomocí určovat datum začátku a/nebo
  konce zápisu do kurzu pro konkrétního studenta. Jestliže jsou tato data v
  souboru IMS uvedena, uloží se v Moodlu do tabulky obsahující údaje o zápisu;
  po datu konce zápisu pak nebude mít student do příslušného kurzu povolen
  přístup.</li>
</ul>';
$string['basicsettings'] = 'Základní nastavení';
$string['coursesettings'] = 'Nastavení dat kurzu';
$string['createnewcategories'] = 'Vytvořit nové (skryté) kategorie kurzů, pokud nejsou v Moodlu nalezeny';
$string['createnewcategories_desc'] = '<p align="center">Automatické vytváření kategorií kurzů</p>

<p>Pokud se v příchozích datech o kurzu vyskytuje položka &lt;org&gt;&lt;
orgunit&gt;, použije se její obsah pro určení kategorie u těch kurzů, které
mají být vytvořeny zcela od začátku.</p>

<p>Modul NEZMĚNÍ zařazení do kategorií u stávajících kurzů.</p>

<p>Pokud neexistuje kategorie požadovaného jména, bude vytvořena SKRYTÁ
kategorie.</p>';
$string['createnewcourses'] = 'Vytvořit nové (skryté) kurzy, pokud nejsou v Moodlu založeny';
$string['createnewcourses_desc'] = '<p>Pokud je toto nastavení aktivní, může zápisový modul IMS Enterprise vytvořit
takové nové kurzy, které se vyskytují v souboru IMS, ale které nejsou v
databázi Moodlu.</p>

<p>Nejprve je vznesen dotaz na "idnumber" kurzu. Jedná se o alfanumerické pole,
které je uvedeno v tabulce kurzů v Moodlu a které může např. upřesňovat kód
použitý pro identifikaci kurzu ve studijním informačním systému. Pokud není
nalezeno idnumber, vyhledává se v tabulce kurzů " krátký popis", který v Moodlu
slouží jako krátký identifikátor kurzu, a zobrazuje se např. v horní řádkové
navigaci. (V některých systémech mohou být obě tato pole identická.) Teprve
když ani toto hledání není uspěšné, může modul volitelně vytvořit nové
kurzy.</p>

<p>Všechny nově vzniklé kurzy jsou vytvářeny jako SKRYTÉ. Předchází se tak
tomu, aby se studenti dostali do zcela prázdných kurzů, o jejichž existenci
učitel ani neví.</p>';
$string['createnewusers'] = 'Vytvořit nové účty pro uživatele doposud neregistrované v Moodlu';
$string['createnewusers_desc'] = '<p>Data k zápisu ve formátu IMS Enterprise zpravidla popisují jistou skupinu
uživatelů. Pokud je toto nastavení zapnuto, budou v Moodlu založeny účty pro ty
uživatele, kteří v databázi Moodlu dosud nejsou registrováni.</p>

<p>Uživatelé se vyhledávají nejprve podle jejich idnumber a následně podle
jejich uživatelského jména v Moodlu.</p>


<p>Hesla nejsou modulem IMS Enterprise importována. Pro ověření uživatelů
doporučujeme užívat autentizační zásuvné moduly Moodlu.</p>';
$string['cronfrequency'] = 'Periodicita zpracování souboru';
$string['deleteusers'] = 'Odstranit uživatelské účty označené ke smazání v souboru IMS';
$string['deleteusers_desc'] = '<p>Pokud je toto nastavení zapnuto, mohou data k zápisu ve formátu IMS
Enterprise řídit odstraňování uživatelských účtů (jestliže je příznak
"recstatus" nastaven na hodnotu 3, která indikuje odstranění účtu).</p>

<p>Jak je v Moodlu běžné, záznam o uživateli není fyzicky odstraněn z databáze
Moodlu, nastaví se pouze odpovídající příznak, který účet označuje jako
odstraněný.</p>';
$string['doitnow'] = 'okamžitě provést import ze souboru IMS Enterprise';
$string['filelockedmail'] = 'Procesu cron se nepodarilo odstranit textovy soubor formatu IMS Enterprise, ktery pouzivate pro zapisy ({$a}). Vetsinou je to zpusobeno spatne nastavenymi pravy. Prosim, opravte prava tak, aby mohl Moodle tento soubor odstranit. Jinak muze dochazet k jeho opakovanemu zpracovani.';
$string['filelockedmailsubject'] = 'Zavazna chyba: Soubor se zapisy';
$string['fixcasepersonalnames'] = 'Převést počáteční písmena jmen uživatelů na Velká Písmena';
$string['fixcaseusernames'] = 'Převést zápis uživatelských jmen na malá písmena';
$string['ignore'] = 'Ignorovat';
$string['importimsfile'] = 'Importovat soubor IMS Enterprise';
$string['imsrolesdescription'] = 'IMS specifikace má 8 různých typů rolí. Prosím vyberte, jak je chcete přidělit v Moodle, včetně případného ignorování některé z nich.';
$string['location'] = 'Cesta k souboru';
$string['logtolocation'] = 'Cesta k log souboru (nevyplňujte, nechcete-li vytvářet log)';
$string['mailadmins'] = 'Informuj správce e-mailem';
$string['mailusers'] = 'Informuj uživatele e-mailem';
$string['miscsettings'] = 'Různé';
$string['pluginname'] = 'Soubor IMS Enterprise';
$string['pluginname_desc'] = 'Tato metoda bude opakovaně kontrolovat a zpracovávat speciálně formátovaný textový soubor, jehož umístění zde určíte. Soubor musí odpovídat specifikaci IMS Enterprise a obsahovat XML prvky popisující osobu a její příslušnost ke kurzu a ke skupině.';
$string['processphoto'] = 'Přidat do uživatelského profilu fotografii';
$string['processphotowarning'] = 'Upozornění: zpracování obrazových souborů může výrazně zatížit server. Doporučujeme nepoužívat tuto volbu, pokud hodláte zpracovávat velký počet uživatelů.';
$string['restricttarget'] = 'Zpracovat soubor pouze v případě, že je v něm uveden následující \'target\'';
$string['restricttarget_desc'] = '<p>Jeden datový soubor IMS Enterprise může být určen pro několik různých
cílových systémů &ndash; různé systémy pro řízení výuky (LMS &ndash; Learning Management
System) nebo různé systémy v rámci školy/univerzity. V souboru IMS je možné
výslovně uvést, zda jsou data určena pro jeden nebo více cílových systémů. Tyto
cílové systémy se zapisují do tagu &lt;target&gt;, který je obsažen v tagu &lt;
properties&gt;.</p>

<p>Ve většině případů se o toto nastavení nemusíte starat. Ponechte příslušné
pole prázdné, a datový soubor bude Moodlem zpracován vždy, ať v něm je či není
"target" určen. V ostatních případech vyplňte přesné jméno, které bude v
datovém souboru uvedeno v tagu &lt;target&gt;.</p>';
$string['roles'] = 'Role';
$string['sourcedidfallback'] = 'Není-li k dispozici pole \'userid\', použít jako id uživatele pole \'sourcedid\'';
$string['sourcedidfallback_desc'] = 'Pole <sourcedid> v IMS souboru reprezentuje trvalý identifikátor uživatele v externím systému. Pole <userid> naproti tomu obsahuje identifikátor, který uživatelé používají při přihlašování. Ve většině případů jsou hodnoty obou identifikátorů totožné - ale nemusí tomu tak být.

Některé studijní informační systémy neposkytují pole <userid>. Je-li toto váš případ, můžete povolit toto nastavení a povolit tak používání pole <sourceid> pro identifikaci uživatelů v Moodle. V ostatních případech ponechte vypnuté.';
$string['truncatecoursecodes'] = 'Zkrátit kódy kurzů na následující počet znaků';
$string['truncatecoursecodes_desc'] = '<p>V některých případech možná budete chtít kódy kurzů před zpracováním zkrátit
na určitý počet znaků. Pro zkrácení vložte do tohoto pole požadovaný počet
znaků. Pokud si kódy kurzů nepřejete zkracovat, ponechte pole
<b>prázdné</b>.</p>';
$string['usecapitafix'] = 'Zaškrtněte pro soubory vytvořené systémem společnosti \'Capita\' (jejich formát XML obsahuje chyby)';
$string['usecapitafix_desc'] = '<p>XML výstup informačního systému společnosti Capita obsahuje jednu drobnou
chybu. Pokud používáte systém Capita, měli byste toto nastavení aktivovat.
Jinak ponechte pole nezaškrtnuté.</p>';
$string['usersettings'] = 'Nastavení dat uživatelů';
$string['zeroisnotruncation'] = '0 (nula) vyřazuje zkracování';
