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
 * Strings for component 'lesson', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   lesson
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesscontrol'] = 'Řízení přístupu';
$string['actionaftercorrectanswer'] = 'Akce po správné odpovědi';
$string['actionaftercorrectanswer_help'] = '<p>Nejobvyklejší akcí je přechod na další stránku specifikovanou v nastavení
otázky. Ve většině případů tedy na další stránku přednášky. Student tak
přednáškou prochází v logickém sledu od začátku do konce.</p>

<p>Modul Přednáška lze však použít i jako zadání typu <i>Flash Card</i>.
Studentovi se zobrazí úvodní informace (není povinné) a poté náhodně vybraná
stránka. Neexistuje zde pevně stanovený začátek ani konec. Pouze sada
<i>karet</i> zobrazovaných v náhodném pořadí.</p>

<p>K dispozici jsou dvě velmi podobné varianty takovéhoto chování. Volba
"Ukázat neprohlédnutou stránku" nezobrazí nikdy tutéž stránku dvakrát (ani v
případě, že student otázku, která je na ní uvedena, <b>nezodpověděl</b>
správně). Druhá možnost, "Ukázat nezodpovězenou stránku", umožňuje opakované
zobrazení stránky, kterou student již viděl, avšak pouze v případě, že na její
závěrečnou otázku odpověděl nesprávně.</p>

<p>V obou těchto režimech může učitel rozhodnout, zda se použijí všechny
stránky přednášky, nebo jen jejich (náhodná) podmnožina. Toto nastavení se
provádí pomocí parametru "Počet stránek (karet) k zobrazení".</p>';
$string['actions'] = 'Akce';
$string['activitylink'] = 'Odkaz na činnost v kurzu';
$string['activitylink_help'] = '<p>Rozbalovací nabídka obsahuje všechny činnosti v tomto kurzu. Jestliže
některou z nich vyberete, zobrazí se na konci přednášky odkaz na tuto vybranou
činnost.</p>';
$string['activitylinkname'] = 'Přejít na: {$a}';
$string['addabranchtable'] = 'Přidat rozcestník';
$string['addanendofbranch'] = 'Přidat konec větve';
$string['addanewpage'] = 'Přidat novou stránku';
$string['addaquestionpage'] = 'Přidat stránku s otázkou';
$string['addaquestionpagehere'] = 'Zde vložit stránku s otázkou';
$string['addbranchtable'] = 'Přidat stránku s obsahem';
$string['addcluster'] = 'Přidat svazek stránek';
$string['addedabranchtable'] = 'Přidán rozcestník';
$string['addedanendofbranch'] = 'Přidán konec větve';
$string['addedaquestionpage'] = 'Přidána stránka s otázkou';
$string['addedcluster'] = 'Přidán svazek stránek';
$string['addedendofcluster'] = 'Přidán konec svazku';
$string['addendofcluster'] = 'Přidat konec svazku stránek';
$string['addpage'] = 'Přidat stránku';
$string['anchortitle'] = 'Začátek obsahu stránky';
$string['and'] = 'A';
$string['answer'] = 'Odpověď';
$string['answeredcorrectly'] = 'zodpovězeno správně.';
$string['answersfornumerical'] = 'Odpovědi na numerickou otázku by měly být tvořeny dvojicemi čísel udávajících dolní a horní hranici požadovaného intervalu';
$string['arrangebuttonshorizontally'] = 'V režimu prezentace rozložit tlačítka rozcestníku vodorovně';
$string['attempt'] = 'Pokus: {$a}';
$string['attempts'] = 'Pokusy';
$string['attemptsdeleted'] = 'Pokusy odstraněny';
$string['attemptsremaining'] = 'Zbývající počet pokusů: {$a}';
$string['available'] = 'Datum a čas zpřístupnění';
$string['averagescore'] = 'Průměrná známka';
$string['averagetime'] = 'Průměrný čas';
$string['branch'] = 'Obsah';
$string['branchtable'] = 'Rozcestník';
$string['cancel'] = 'Přerušit';
$string['cannotfindanswer'] = 'Chyba: nelze najít odpověď';
$string['cannotfindattempt'] = 'Chyba: nelze najít pokus';
$string['cannotfindessay'] = 'Chyba: nemohu najít tvořenou odpověď';
$string['cannotfindfirstgrade'] = 'Chyba: nelze najít hodnocení';
$string['cannotfindfirstpage'] = 'Nelze najít první stránku';
$string['cannotfindgrade'] = 'Chyba: nelze najít hodnocení';
$string['cannotfindnewestgrade'] = 'Chyba: nelze najít nejnovější hodnocení';
$string['cannotfindnextpage'] = 'Zálohování přednášky: Další stránka nebyla nalezena!';
$string['cannotfindpagerecord'] = 'Přidání na konci větve: stránka nebyla nalezena';
$string['cannotfindpages'] = 'Nepodařilo se najít stránku přednášky';
$string['cannotfindpagetitle'] = 'Potvrzení odstranění: nadpis stránky nenalezen';
$string['cannotfindpreattempt'] = 'Předchozí pokus nebyl nalezen!';
$string['cannotfindrecords'] = 'Chyba: nelze najít záznamy přednášky';
$string['cannotfindtimer'] = 'Chyba: nelze najít časové záznamy přednášky';
$string['cannotfinduser'] = 'Chyba: nelze najít uživatele';
$string['canretake'] = '{$a} může projít přednášku znovu';
$string['casesensitive'] = 'Používat regulární výrazy';
$string['casesensitive_help'] = '<p>Některé typy otázek využívají volby, která se aktivuje zatržením políčka v
záhlaví otázky. Význam této volby u jednotlivých typů otázek je uveden
níže.</p>

<ol>
  <li>
    <p><b>Otázka s výběrem odpovědí</b><br>
    Podtypem otázky s výběrem odpovědí je <b>"Otázka s výběrem více správných
    odpovědí"</b>. U tohoto typu otázky musí student vybrat všechny správné
    odpovědi. Součástí textu otázky může (ale nemusí) být informace o
    <i>celkovém počtu</i> správných odpovědí. Například otázka "Která z
    následujících osobností byla prezidentem USA?" tuto informaci neobsahuje,
    kdežto otázka "Vyberte ze seznamu dva prezidenty USA" ano. Počet správných
    odpovědí může sahat od <b>1</b> až do celkového počtu variant odpovědí. I
    při jedné správné odpovědi se však "otázka s výběrem více správných
    odpovědí" liší od "otázky s výběrem odpovědí", protože studentovi dovoluje
    vybrat více než jednu odpověď (a dopustit se tak chyby).</p>
  </li>

  <li>
    <p><b>Krátká tvořená odpověď</b><br>
    Pro tento typ otázky existují dva porovnávací systémy: jednoduchý systém,
    používaný jako výchozí, a systém "regulárních výrazů", který se aktivuje
    volbou "Používat regulární výrazy". Více informací najdete v souboru
    nápovědy "Typ otázky".</p>
  </li>
</ol>

<p>U ostatních typů otázek se volba "Nastavení otázky" nepoužívá.</p>';
$string['checkbranchtable'] = 'Zkontrolovat rozcestník';
$string['checkedthisone'] = 'odpovědělo takto';
$string['checknavigation'] = 'Zkontrolovat navigaci';
$string['checkquestion'] = 'Zkontrolovat otázku';
$string['classstats'] = 'Statistika kurzu';
$string['clicktodownload'] = 'Klikněte sem, chcete-li stáhnout soubor.';
$string['clicktopost'] = 'Klikněte sem, chcete-li odeslat svou známku do žebříčku nejlepších známek';
$string['cluster'] = 'Svazek stránek';
$string['clusterjump'] = 'Neprohlédnutá otázka v rámci svazku';
$string['clustertitle'] = 'Svazek';
$string['collapsed'] = 'Seznam stránek';
$string['comments'] = 'Váš komentář';
$string['completed'] = 'Dokončeno';
$string['completederror'] = 'Projít přednášku';
$string['completethefollowingconditions'] = 'Chcete-li pokračovat, musíte nejprve splnit následující podmínku/-y u přednášky <b>{$a}</b>:';
$string['conditionsfordependency'] = 'Kritéria splnění předpokladu';
$string['configactionaftercorrectanswer'] = 'Výchozí akce po správné odpovědi';
$string['configmaxanswers'] = 'Výchozí maximální počet odpovědi na stránku';
$string['configmaxhighscores'] = 'Počet zobrazených nejlepších známek';
$string['configmediaclose'] = 'Zobrazuje tlačítko Zavřít jako část vyskakovacího okna vytvořeného pro odkazovaný mediální soubor';
$string['configmediaheight'] = 'Nastavuje výšku vyskakovacího okna pro odkazovaný mediální soubor';
$string['configmediawidth'] = 'Nastavuje šířku vyskakovacího okna pro odkazovaný mediální soubor';
$string['configslideshowbgcolor'] = 'Barva pozadí plochy prezentace, pokud je povolena.';
$string['configslideshowheight'] = 'Nastavení výšky plochy prezentace, pokud je povolena';
$string['configslideshowwidth'] = 'Nastavení šířky plochy prezentace, pokud je povolena';
$string['confirmdelete'] = 'Odstranit stránku';
$string['confirmdeletionofthispage'] = 'Potvrďte odstranění této stránky';
$string['congratulations'] = 'Gratulujeme – dosáhli jste konce přednášky';
$string['continue'] = 'Pokračovat';
$string['continuetoanswer'] = 'Pokračovat – změnit odpovědi';
$string['continuetonextpage'] = 'Pokračovat na následující stránku';
$string['correctanswerjump'] = 'Skok při správné odpovědi';
$string['correctanswerscore'] = 'Bodový zisk za správnou odpověď';
$string['correctresponse'] = 'Reakce při správné odpovědi';
$string['credit'] = 'Kredit';
$string['customscoring'] = 'Uživatelské bodování';
$string['customscoring_help'] = '<p>Toto nastavení vám umožní přiřadit ke každé odpovědi určitý počet bodů. Body
přiřazené k odpovědím mohou mít zápornou nebo kladnou hodnotu. Importovaným
otázkám se automaticky přiřazuje 1 bod za správnou odpověď a 0 bodů za
nesprávnou odpověď. Toto nastavení je ale možno po importu změnit.</p>';
$string['deadline'] = 'Termín uzavření';
$string['defaultessayresponse'] = 'Vaše tvořená odpověď bude ohodnocena vaším vyučujícím v kurzu.';
$string['deleteallattempts'] = 'Odstranit všechny pokusy o absolvování přednášky';
$string['deletedefaults'] = 'Odstraněna výchozí nastavení přednášky (počet odstraněných nastavení: {$a})';
$string['deletedpage'] = 'Stránka odstraněna';
$string['deleting'] = 'Odstraňování';
$string['deletingpage'] = 'Odstranění stránky: {$a}';
$string['dependencyon'] = 'Předpoklad pro zpřístupnění';
$string['dependencyon_help'] = '<p>Toto nastavení umožňuje, aby tato přednáška byla přístupná studentům podle
toho, jakých výsledků dosáhli v jiné přednášce, která je součástí téhož kurzu.
Pokud student nesplní předpoklad pro zpřístupnění, nebude mu umožněn přístup k
této přednášce.</p>

<p>Kritéria splnění předpokladu:</p>

<ul>
  <li><b>Strávený čas:</b> student musí strávit studiem přednášky určenou
  dobu.</li>

  <li><b>Dokončeno:</b> student musí požadovanou přednášku dokončit.</li>

  <li><b>Známka lepší než:</b> student musí dosáhnout ve stanovené přednášce
  známky, která je lepší nežli známka uvedená zde.</li>
</ul>Tato kritéria je možno libovolně kombinovat.
<p>';
$string['description'] = 'Popis';
$string['detailedstats'] = 'Podrobné statistiky';
$string['didnotanswerquestion'] = 'Tuto otázku student(ka) nezodpověděl(a)';
$string['didnotreceivecredit'] = 'Odpověď nezapočtena jako správná';
$string['displaydefaultfeedback'] = 'Zobrazit implicitní reakci';
$string['displayhighscores'] = 'Zobrazit nejlepší známky';
$string['displayinleftmenu'] = 'Zobrazit v levé nabídce?';
$string['displayleftif'] = 'Pokud ano, pak pouze tehdy, dosáhl-li {$a} lepší známky než:';
$string['displayleftif_help'] = 'Toto nastavení určuje, že student musí pro zobrazení levého menu získat určité hodnocení. To nutí studenta projít celou přednášku na první pokus, a pak se po získání požadovaného hodnocení zobrazí levé menu.';
$string['displayleftmenu'] = 'Zobrazit levou nabídku';
$string['displayleftmenu_help'] = '<p>Toto nastavení zobrazí seznam stránek (rozcestníky) v přednášce.</p>

<p>Uživatel, který studuje přednášku, má ovšem možnost vidět levou nabídku
pouze v případě, že dosáhl v přednášce stejné či vyšší známky, nežli je ta,
kterou jste vybrali z nabídky. Toto nastavení umožňuje pedagogům, kteří
vytvářejí přednášku, přinutit uživatele projít při prvním pokusu celou
přenášku. Jestliže uživatel potom znovu prochází přednášku, poté co dosáhl
požadované známky, ukáže se mu levá nabídka, která mu usnadní revizi.</p>';
$string['displayofgrade'] = 'Zobrazení známky (pouze pro studenty)';
$string['displayreview'] = 'Zobrazit tlačítko pro opakovanou odpověď';
$string['displayreview_help'] = '<p>Toto nastavení zobrazí tlačítko, které má studentům umožnit zkusit znovu
odpovědět na špatně zodpovězenou otázku. Nefunguje pro otázky typu tvořená
odpověď &ndash; pokud používáte tyto otázky, vyberte možnost "Ne".</p>';
$string['displayscorewithessays'] = 'Váš bodový zisk za automaticky hodnocené odpovědi je {$a->score} z {$a->tempmaxgrade}.<br />Vaše tvořené odpovědi (v počtu {$a->essayquestions}) budou ohodnoceny a zahrnuty<br />do vašeho konečného počtu bodů později.<br /><br />Váš současný bodový zisk bez tvořených odpovědí je {$a->score} z {$a->grade}.';
$string['displayscorewithoutessays'] = 'Váš bodový zisk je {$a->score} (z {$a->grade}).';
$string['edit'] = 'Upravit';
$string['editingquestionpage'] = 'Úprava stránky s úlohou {$a}';
$string['editlessonsettings'] = 'Upravit nastavení této přednášky';
$string['editpage'] = 'Upravit obsah této stránky';
$string['editpagecontent'] = 'Upravit obsah této stránky';
$string['email'] = 'Poslat e-mailem';
$string['emailallgradedessays'] = 'Poslat VŠECHNY<br />oznámkované tvořené odpovědi';
$string['emailgradedessays'] = 'Poslat oznámkované tvořené odpovědi';
$string['emailsuccess'] = 'Úspěšné odesláno';
$string['emptypassword'] = 'Heslo nemůže být prázdné';
$string['endofbranch'] = 'Konec větve';
$string['endofcluster'] = 'Konec svazku';
$string['endofclustertitle'] = 'Konec svazku';
$string['endoflesson'] = 'Konec přednášky';
$string['enteredthis'] = 'odpovědělo takto';
$string['entername'] = 'Zvolte si přezdívku pro žebříček nejlepších známek';
$string['enterpassword'] = 'Zadejte prosím heslo:';
$string['eolstudentoutoftime'] = 'Upozornění: překročili jste čas určený pro tuto přednášku. Vaše poslední odpověď nebude započítána, pokud byla odeslána až po vypršení časového limitu.';
$string['eolstudentoutoftimenoanswers'] = 'Nezodpověděli jste žádnou otázku. Za tuto přednášku nezískáváte žádný bod.';
$string['essay'] = 'Dlouhá tvořená odpověď';
$string['essayemailmessage'] = '<p>Výzva tvořené odpovědi:<blockquote>{$a->question}</blockquote></p><p>Vaše odpověď:<blockquote><em>{$a->response}</em></blockquote></p><p>Připomínky učitele {$a->teacher} :<blockquote><em>{$a->comment}</em></blockquote></p><p>Máte {$a->earned} z {$a->outof} možných bodů za tuto tvořenou odpověď.</p><p>Vaše známka za tuto přednášku se změnila na  {$a->newgrade}%.</p>';
$string['essayemailmessage2'] = '<p>Výzva pro tvořenou odpověď:<blockquote>{$a->question}</blockquote></p><p>Vaše odpověď:<blockquote><em>{$a->response}</em></blockquote></p><p>Připomínky učitele:<blockquote><em>{$a->comment}</em></blockquote></p><p>obdrželi jste {$a->earned} z {$a->outof} bodů za tuto odpověď.</p><p>Vaše hodnocení se změnilo no {$a->newgrade}%.</p>';
$string['essayemailsubject'] = 'Známka za otázku {$a}';
$string['essays'] = 'Tvořené odpovědi';
$string['essayscore'] = 'Bodový zisk za tvořené odpovědi';
$string['fileformat'] = 'Formát souboru';
$string['finish'] = 'Skončit';
$string['firstanswershould'] = 'První odpověď by měla skočit na "správnou" stránku';
$string['firstwrong'] = 'Bohužel, vaše odpověď nebyla správná, takže nezískáváte žádné body. Chcete se ještě pokusit odhadnout správnou odpověď aspoň sami pro sebe (bez bodového zisku)?';
$string['flowcontrol'] = 'Řízení průchodu';
$string['full'] = 'Obsah stránek';
$string['general'] = 'Obecně';
$string['gotoendoflesson'] = 'Přejít na konec přednášky';
$string['grade'] = 'Známka';
$string['gradebetterthan'] = 'Známka lepší než (%)';
$string['gradebetterthanerror'] = 'Dosáhnout více než {$a} % celkové známky';
$string['gradeessay'] = 'Hodnotit tvořené odpovědi (zatím nehodnoceno {$a->notgradedcount} a neodesláno {$a->notsentcount})';
$string['gradeis'] = 'Známka: {$a}';
$string['gradeoptions'] = 'Nastavení známkování';
$string['handlingofretakes'] = 'Zpracování opakovaného průchodu';
$string['handlingofretakes_help'] = '<p>Jestliže je studentům povoleno procházet přednášku opakovaně, umožňuje tato
volba určit, zda bude výslednou známkou za přednášku <b>průměr</b> získaných
známek, nebo <b>nejlepší</b> získaná známka.</p>

<p>Tuto volbu lze kdykoliv změnit.</p>';
$string['havenotgradedyet'] = 'Ještě neznámkováno';
$string['here'] = 'zde';
$string['highscore'] = 'Nejlepší známka';
$string['highscores'] = 'Nejlepší známky';
$string['hightime'] = 'Nejdelší čas';
$string['importcount'] = 'Importuji {$a} otázek';
$string['importppt'] = 'Importovat PowerPoint';
$string['importppt_help'] = '<p>JAK POSTUPOVAT</p>

<p>Snímky prezentace v PowerPointu jsou do přednásky importovány jako
rozcestníky s navigačními tlačítky Předchozí a Další.</p>

<p>&nbsp;</p>

<ol>
  <li>Otevřete prezentaci v PowerPointu.</li>

  <li>Uložte ji jako webovou stránku (žádné zvláštní volby)</li>

  <li>Výsledkem předchozího kroku by měl být soubor htm a složka obsahující
  všechny snímky prezentace převedené na webové stránky.<br>
  POUZE TUTO SLOŽKU zkomprimujte ZIPem.</li>

  <li>V Moodlu založte novou přednášku.</li>

  <li>Až uložíte nastavení přednášky, měly by se vám zobrazit čtyři možnosti
  "Co chcete udělat nejdříve?" Zvolte "Importovat PowerPoint".</li>

  <li>Pomocí tlačítka "Procházet..." najděte soubor ZIP z kroku 3. Potom zvolte
  "Vložit tento soubor".</li>

  <li>Pokud všechno funguje, na další obrazovce se zobrazí tlačítko
  Pokračovat.</li>
</ol>
<p>

<p>Pokud vaše prezentace v PowerPointu obsahovala obrázky, měly by být uloženy
jako soubory kurzu v adresáři moddata/XY, kde X je název vaší přednášky a Y je
číslo (obvykle 0). (Během importu dochází také k vytvoření souborů v datovém
adresáři Moodlu v podsložce temp/lesson. Tyto soubory zatím nejsou importním
skriptem importppt.php po dokončení importu odstaňovány.)</p>

<p align="center">&nbsp;</p>';
$string['importquestions'] = 'Importovat otázky';
$string['importquestions_help'] = '<p>Tato funkce umožňuje importování úloh z externích textových souborů.</p>

<p>Moodle podporuje několik formátů:</p>

<p><b>Formát GIFT</b></p>

<div style="margin-left: 2em">
  <p>GIFT je nejkomplexnější dostupný formát pro importování testových otázek z
  textového souboru do Moodlu. Byl navržen pro snadný textový zápis testových
  otázek. Podporuje různé typy úloh: úlohy s výběrem odpovědí, s krátkou
  odpovědí, s odpovědí pravda/nepravda, numerické úlohy, přiřazování, a také
  vložení _______ pro formát "vynechané slovo". V jednom textovém souboru lze
  použít více typů úloh. Formát GIFT dále umožňuje zadávat jméno otázky,
  komentář k odpovědím a jejich hodnocení v procentech; pro interní potřebu lze
  text také opatřovat poznámkami, které se v otázkách nezobrazí. Zde je několik
  příkladů:</p>
  <pre>
Kdo je pohřben v památníku na Vítkově?{~T.G.M. ~Klement Gottwald =nikdo}

V památníku na Vítkově byl {~otráven =pohřben ~oddán} Klement Gottwald.

V památníku na Vítkově je pohřben Klement Gottwald.{FALSE}

Kdo je pohřben v památníku na Vítkově?{=nyní již nikdo =nikdo}

Kdy se narodil Klement Gottwald?{#1896}
</pre>

  <p align="right"><a href="help.php?file=formatgift.html&module=quiz">Více o
  formátu "GIFT"</a></p>
</div>

<p><b>Formát Aiken</b></p>

<div style="margin-left: 2em">
  <p>Formát Aiken umožňuje snadnou tvorbu úloh s výběrem odpovědí. Používá
  jednoduchou syntaxi srozumitelnou i pro člověka. Např:</p>
  <pre>
Co je cílem první pomoci?
A. Zachránit život, zabránit dalšímu zranění, chránit zdraví B. Poskytnout lékařské ošetření zraněnému C. Zabránit dalšímu zranění D. Pomoci obětem v nouzi ODPOVĚĎ: A
</pre>

  <p align="right"><a href="help.php?file=formataiken.html&module=quiz">Více o
  formátu "AIKEN"</a></p>
</div>

<p><b>Vynechané slovo</b></p>

<div style="margin-left: 2em">
  <p>Tento formát podporuje pouze úlohy s výběrem odpovědí. Chybné varianty
  odpovědi se uvozují vlnovkou (~), správná odpověď rovnítkem (=). Např.:</p>

  <blockquote>
    Již v raném věku, kdy začínáme zkoumat své tělo, se z nás stávají studenti
    {=anatomie a fyziologie ~mechaniky ~teologie ~botaniky}, a studenty v
    jistém smyslu zůstáváme až do konce života.
  </blockquote>

  <p align="right"><a href=
  "help.php?file=formatmissingword.html&module=quiz">Více o formátu "Vynechané
  slovo"</a></p>
</div>

<p><b>AON</b></p>

<div style="margin-left: 2em">
  <p>Tento formát se od předchozího liší pouze tím, že po provedení importu se
  všechny úlohy s krátkou odpovědí po čtveřicích převedou na přiřazovací
  úlohy.</p>

  <p>Kromě toho se u úloh s výběrem odpovědí během vkládání náhodně změní
  pořadí odpovědí.</p>

  <p>Formát je pojmenován podle organizace, která sponzorovala vývoj
  testovacích nástrojů.</p>
</div>

<p><b>Blackboard</b></p>

<div style="margin-left: 2em">
  <p>Importovat lze i úlohy z exportního formátu systému Blackboard. Tento
  formát využívá funkcí PHP určených pro práci s jazykem XML.</p>

  <p align="right"><a href=
  "help.php?file=formatblackboard.html&module=quiz">Více o formátu
  "Blackboard"</a></p>
</div>

<p><b>Course Test Manager</b></p>

<div style="margin-left: 2em">
  <p>Do Moodlu lze importovat úlohy z databáze testovacích otázek systému
  Course Test Manager (CTM). Pro přístup k testovacím otázkám (uloženým v
  databázi Microsoft Access) se používají různé postupy v závislosti na tom,
  zda je Moodle provozován v operačním systému Windows nebo Linux.</p>

  <p>Ve Windows můžete importovat databázi formátu Microsoft Access běžným
  způsobem.</p>

  <p>V případě Linuxu potřebujete počítač s Windows umístěný na stejné síti. Na
  něj zkopírujte databázi CTM a spusťte ODBC Socket Server, který pro převod
  dat do Moodlu na serveru Linux použije jazyka XML.</p>

  <p>Před použitím tohoto importního filtru si prosím přečtěte podrobnější
  nápovědu.</p>

  <p align="right"><a href="help.php?file=formatctm.html&module=quiz">Více o
  formátu "CTM"</a></p>
</div>

<p><b>Uživatelský formát</b></p>

<div style="margin-left: 2em">
  <p>Pokud máte vlastní formát, který potřebujete importovat, upravte podle
  potřeby soubor mod/quiz/format/custom.php.</p>

  <p>Rozsah nutných změn v kódu je opravdu malý &ndash; nový kód je potřeba pouze pro
  rozpoznání jedné úlohy ve výchozím textu.</p>

  <p align="right"><a href="help.php?file=formatcustom.html&module=quiz">Více o
  uživatelském formátu</a></p>
</div>

<p>Postupně budou přibývat další formáty, např. WebCT, IMS QTI a jakékoliv
jiné, kterými přispějí uživatelé Moodlu.</p>';
$string['insertedpage'] = 'Stránka přidána';
$string['invalidfile'] = 'Chybný soubor';
$string['invalidid'] = 'Skript neobdržel identifikátor modulu nebo identifikátor přednášky.';
$string['invalidlessonid'] = 'Neplatný identifikátor přednášky';
$string['invalidpageid'] = 'Neplatný identifikátor stránky';
$string['jump'] = 'Skočit na';
$string['jumps'] = 'Skok';
$string['jumps_help'] = '<p>Ke každé odpovědi (u otázek) nebo popisu (u rozcestníků) je přiřazen jeden
skok. Vybere-li student odpověď, zobrazí se příslušná reakce. Poté se pokračuje
skokem na nastavenou stránku. Skok může být relativní nebo absolutní.
Relativními skoky jsou <b>Tato stránka</b> a <b>Další stránka</b>. <b>Tato
stránka</b> vede studenta zpět na aktuální stránku, <b>Další stránka</b> jej
vede na následující stránku v lineární posloupnosti přednášky. Absolutní skok
se určuje výběrem <b>názvu</b> konkrétní stránky.</p>

<p>Upozornění: relativní skok <b>Další stránka</b> může po změně pořadí stránek
vést k jiné cílové stránce, zatímco absolutní skok, označený názvem cílové
stránky, vede vždy k téže cílové stránce.</p>

<p><b>Zvláštní skoky</b></p>

<p><b>Neprohlédnutá stránka v rámci větve</b><br>
Toto je odkaz na náhodně vybranou stránku, kterou student dosud v tomto pokusu
neviděl a která se nachází mezi aktuálním rozcestníkem a koncem přednášky nebo
nejbližším koncem větve.</p>

<p><b>Náhodná stránka v rámci větve</b><br>
Toto je odkaz na náhodně vybranou stránku mezi aktuálním rozcestníkem a koncem
přednášky nebo nejbližším koncem větve. Pokud student už stránku viděl a počet
pokusů je nastaven na hodnotu vyšší než 1, dostane další příležitost získat
bod(y) za odpověď na připojenou otázku. Pokud je počet pokusů nastaven na 1,
stránka se přeskočí a ukáže se jiná náhodná stránka.</p>

<p><b>Náhodný rozcestník</b><br>
Toto je skok na náhodně vybraný rozcestník mezi aktuálním rozcestníkem a koncem
přednášky nebo nejbližším koncem větve.</p>';
$string['jumpsto'] = 'Skok na <em>{$a}</em>';
$string['leftduringtimed'] = 'Opustili jste přednášku s časovým limitem.<br />Chcete-li přednášku začít znovu, stiskněte Pokračovat.';
$string['leftduringtimednoretake'] = 'Opustili jste přednášku s časovým limitem a není<br />vám povoleno začít znovu nebo pokračovat.';
$string['lesson:addinstance'] = 'Přidat novou přednášku';
$string['lessonattempted'] = 'Pokus o absolvování: Ano';
$string['lessonclosed'] = 'Tato přednáška byla uzavřena k datu {$a}.';
$string['lessoncloses'] = 'Přednáška není přístupná';
$string['lessoncloseson'] = 'Přednáška se uzavírá: {$a}';
$string['lesson:edit'] = 'Upravit přednášku';
$string['lessonformating'] = 'Uspořádání přednášky';
$string['lesson:manage'] = 'Správa činnosti přednáška';
$string['lessonmenu'] = 'Nabídka přednášky';
$string['lessonnotready'] = 'Tato přednáška ještě není hotová. Obraťte se na svého učitele.';
$string['lessonnotready2'] = 'Tato přednáška ještě není hotová.';
$string['lessonopen'] = 'Tato přednáška bude přístupná od {$a}.';
$string['lessonopens'] = 'Přednáška je přístupná';
$string['lessonpagelinkingbroken'] = 'Nenalezena první stránka přednášky. Vnitří odkazy mezi stránkami jsou zřejmě porušeny. Obraťte se na správce Moodlu.';
$string['lessonstats'] = 'Statistiky přednášky';
$string['linkedmedia'] = 'Odkaz na média';
$string['loginfail'] = 'Nesprávné heslo. Zkuste to prosím znovu.';
$string['lowscore'] = 'Nejhorší známka';
$string['lowtime'] = 'Nejkratší čas';
$string['manualgrading'] = 'Hodnotit tvořené odpovědi';
$string['matchesanswer'] = 'Odpovídá odpovědi';
$string['matching'] = 'Přiřazování';
$string['matchingpair'] = 'Přiřazování odpovídající dvojice {$a}';
$string['maxgrade'] = 'Nejvyšší možné hodnocení';
$string['maxgrade_help'] = '<p>Tato hodnota udává maximální počet bodů, které lze udělit za absolvování
přednášky. Rozsah je 0 až 100. Tuto hodnotu lze později kdykoliv změnit. Každá
změna se ihned projeví v přehledu známek kurzu a také v různých seznamech
výsledků zobrazovaných studentům. Jestliže je známka stanovena na 0, přednáška
se v přehledu známek neobjeví.</p>';
$string['maxhighscores'] = 'Počet zobrazovaných nejlepších známek';
$string['maximumnumberofanswersbranches'] = 'Největší možný počet odpovědí/větví';
$string['maximumnumberofanswersbranches_help'] = '<p>Tato hodnota udává největší možný počet odpovědí, které lze zadat ke
kterékoli otázce přednášky. Výchozí hodnota je 4. Pokud v přednášce používáte
výhradně otázky typu Pravda/Nepravda, je vhodné nastavit tuto hodnotu na 2.</p>

<p>Tento parametr také určuje největší možný počet větví, které je možné použít
v rozcestníku.</p>

<p>Hodnotu tohoto parametru lze bezpečně měnit i v přednášce s již vloženými
materiály. Pokud budete chtít přidat otázku s výběrem z mnoha odpovědí nebo
dlouhý rozcestník, budete muset tento parametr změnit. Po přidání
(nestandardní) otázky nebo rozcestníku je možné tento parametr opět snížit na
"standardní" úroveň.</p>';
$string['maximumnumberofattempts'] = 'Největší možný počet pokusů';
$string['maximumnumberofattempts_help'] = '<p>Tato hodnota určuje nejvyšší možný počet pokusů, které má každý student
k&nbsp;dispozici pro zodpovězení <b>každé otázky</b> v přednášce. V případě
otázek, u nichž se studentovi nenabízejí varianty odpovědi (otázky s krátkou
odpovědí, numerické otázky apod.), představuje tato hodnota nezbytný "záchranný
prostředek" zajišťující přechod na další stránku přednášky.</p>

<p>Výchozí hodnota je 5. Nižší hodnota by mohla studenty odradit od dalšího
promýšlení otázek. Vyšší by mohla vést k přílišné frustraci.</p>

<p>Nastavíte-li největší možný počet pokusů na 1, bude student na každou otázku
odpovídat pouze jednou. Vzniká tak podobný režim jako u modulu Test, s tím
rozdílem, že každá otázka je studentům nabízena na zvláštní stránce.</p>

<p>Upozornění: Jedná se o globální parametr, takže se nastavená hodnota uplatní
u všech otázek přednášky bez ohledu na jejich typ.</p>

<p>Tato hodnota se <b>nevztahuje</b> na učitele, který provádí kontrolu otázek
nebo navigace v přednášce: ověřování počtu absolvovaných pokusů je založeno na
údajích uložených v databázi, v ní se však pokusy učitelů nezaznamenávají.
Učitel by měl přece odpovědi znát!</p>';
$string['maximumnumberofattemptsreached'] = 'Vyčerpali jste maximální počet pokusů – následuje další stránka přednášky';
$string['maxtime'] = 'Časový limit (v minutách)';
$string['maxtimewarning'] = 'Na dokončení přednášky máte {$a} min.';
$string['mediaclose'] = 'Zobrazit tlačítko \'Zavřít okno\':';
$string['mediafile'] = 'Odkaz na soubor nebo web ve vyskakovacím okně';
$string['mediafile_help'] = '<p>Toto nastavení vytvoří vyskakovací okno na začátku přednášky s odkazem na
soubor (například: soubor mp3) nebo na webovou stránku. Na každé stránce
přednášky bude zobrazen odkaz, kterým bude možno v případě potřeby vyskakovací
okno otevřít.</p>

<p>Je také možno nastavit umístění tlačítka "Zavřít okno" do spodní části
vyskakovacího okna a stanovit výšku a šířku okna.</p>';
$string['mediafilepopup'] = 'Klikněte sem pro zobrazení souboru připojeného k přednášce';
$string['mediaheight'] = 'výška okna:';
$string['mediawidth'] = 'šířka okna:';
$string['messageprovider:graded_essay'] = 'Oznámení o hodnocení tvořené odpovědi';
$string['minimumnumberofquestions'] = 'Minimální počet otázek';
$string['minimumnumberofquestions_help'] = '<p>Tento parametr by měl učitel nastavit, jestliže přednáška obsahuje jeden
nebo více bodů větvení (rozcestníků). Jeho hodnota udává minimální počet otázek
pro výpočet hodnocení. Přitom však studenty <b>nenutí</b> takový počet otázek
skutečně zodpovědět.</p>

<p>Například: Jestliže tento parametr nastavíte na hodnotu 20, bude se při
výpočtu hodnocení předpokládat, že student prošel <b>nejméně</b> dvacet stránek
přednášky. Uvažujme případ studenta, který absolvuje pouze jednu pětistránkovou
větev přednášky a všechny otázky zodpoví správně. Poté se rozhodne přednášku
opustit (za předpokladu, že to nastavení přednášky umožňuje, tedy některý z
větvících bodů, kterými student prochází, nabízí možnost "Skočit na konec
přednášky"). Pokud by parametr Minimální počet otázek nebyl nastaven, hodnocení
by bylo "pět správných odpovědí z pěti", tedy 100&nbsp;%. Je-li však parametr
nastaven na hodnotu 20, celkové hodnocení bude sníženo na "pět správných
odpovědí z dvaceti", tedy 25&nbsp;%. Jiný student, který prošel všechny větve
přednášky, zhlédl řekněme 25 stránek a zodpověděl správně všechny otázky až na
dvě, získá hodnocení "23 z 25" , tedy 92&nbsp;%.</p>

<p>V případě, že parametr Minimální počet otázek použijete, měla by úvodní
stránka přednášky obsahovat zhruba takovouto informaci:</p>

<p>&nbsp;</p>

<blockquote>
  V této přednášce byste se měli pokusit zodpovědět alespoň <i>n</i> otázek.
  Chcete-li, můžete jich zodpovědět více. Pokud jich však zodpovíte méně, bude
  se při výpočtu hodnocení přesto předpokládat, že jste jich zodpověděli
  <i>n</i>.
</blockquote>
<p>

<p>Za "n" samozřejmě dosadíme skutečně nastavenou hodnotu.</p>

<p>Jestliže je parametr nastaven, studentům se zobrazuje informace o tom, na
kolik otázek již odpovídali a na kolik ještě odpovědět mají.</p>';
$string['missingname'] = 'Prosím vložte přezdívku';
$string['modattempts'] = 'Povolit studentům pozdější revizi';
$string['modattempts_help'] = '<p>Toto nastavení umožní studentům procházet přenášku znovu a měnit
odpovědi.</p>';
$string['modattemptsnoteacher'] = 'Revize funguje pouze studentům';
$string['modulename'] = 'Přednáška';
$string['modulename_help'] = 'Modul Přednáška umožňuje vytvářet adaptivní a interaktivní výkladový materiál. Učitel může využít Přednášku pro vytvoření posloupnosti stránek nebo vzdělávacích aktivit, které nabízejí studentovi celou řadu cest a možností procházení.

Jednotlivé stránky lze doplnit o kontrolní otázky (např. výběr z možností, párování a krátké odpovědi). V závislosti na odpovědi a nastavení Přednášky mohou studenti postupit na další stránku, jít zpět na předchozí nebo pokračovat zcela jinou cestou.

Přednáška může být hodnocena, výsledná známka je součástí klasifikace v kurzu.

Modul Přednáška může být použit:

* pro samostudium nových témat
* pro rozvoj schopnosti rozhodovat se v simulovaných podmínkách
* pro adaptivní testování se sadami úloh v závislosti na odpovědi na úvodní úlohu';
$string['modulenameplural'] = 'Přednášky';
$string['move'] = 'Přesunout stránku';
$string['movedpage'] = 'Stránka přesunuta';
$string['movepagehere'] = 'Přesunout stránku sem';
$string['moving'] = 'Přesun stránky: {$a}';
$string['multianswer'] = 'Více správných odpovědí';
$string['multianswer_help'] = '<p>Některé typy otázek využívají volby, která se aktivuje zatržením políčka v
záhlaví otázky. Význam této volby u jednotlivých typů otázek je uveden
níže.</p>

<ol>
  <li>
    <p><b>Otázka s výběrem odpovědí</b><br>
    Podtypem otázky s výběrem odpovědí je <b>"Otázka s výběrem více správných
    odpovědí"</b>. U tohoto typu otázky musí student vybrat všechny správné
    odpovědi. Součástí textu otázky může (ale nemusí) být informace o
    <i>celkovém počtu</i> správných odpovědí. Například otázka "Která z
    následujících osobností byla prezidentem USA?" tuto informaci neobsahuje,
    kdežto otázka "Vyberte ze seznamu dva prezidenty USA" ano. Počet správných
    odpovědí může sahat od <b>1</b> až do celkového počtu variant odpovědí. I
    při jedné správné odpovědi se však "otázka s výběrem více správných
    odpovědí" liší od "otázky s výběrem odpovědí", protože studentovi dovoluje
    vybrat více než jednu odpověď (a dopustit se tak chyby).</p>
  </li>

  <li>
    <p><b>Krátká tvořená odpověď</b><br>
    Pro tento typ otázky existují dva porovnávací systémy: jednoduchý systém,
    používaný jako výchozí, a systém "regulárních výrazů", který se aktivuje
    volbou "Používat regulární výrazy". Více informací najdete v souboru
    nápovědy "Typ otázky".</p>
  </li>
</ol>

<p>U ostatních typů otázek se volba "Nastavení otázky" nepoužívá.</p>';
$string['multichoice'] = 'Více možností';
$string['multipleanswer'] = 'Složená odpověď';
$string['nameapproved'] = 'Přezdívka schválena';
$string['namereject'] = 'Přezdívka byla zamítnuta filtrem.<br />Zkuste prosím jinou.';
$string['new'] = 'nový';
$string['nextpage'] = 'Další stránka';
$string['noanswer'] = 'Nebyla zadána žádná odpověď. Prosím, vraťte se zpět a zadejte odpověď.';
$string['noattemptrecordsfound'] = 'Nenalezeny žádné záznamy o pokusech: neznámkováno';
$string['nobranchtablefound'] = 'Nebyla nalezena tabulka větvení';
$string['nocommentyet'] = 'Zatím bez komentářů.';
$string['nocoursemods'] = 'Nenalezeny žádné činnosti';
$string['nocredit'] = 'Není kredit';
$string['nodeadline'] = 'Bez termínu';
$string['noessayquestionsfound'] = 'Nebyly nalezeny žádné otázky typu tvořená odpověď';
$string['nohighscores'] = 'Nebyly nalezeny žádné položky seznamu nejlepších známek';
$string['nolessonattempts'] = 'O zodpovězení otázek v této přednášce se ještě nikdo nepokusil.';
$string['nooneansweredcorrectly'] = 'Nikdo neodpověděl správně.';
$string['nooneansweredthisquestion'] = 'Nikdo nezodpověděl tuto otázku.';
$string['noonecheckedthis'] = 'Tuto možnost nikdo nevybral.';
$string['nooneenteredthis'] = 'Takto nikdo neodpověděl.';
$string['noonehasanswered'] = 'Nikdo ještě nevložil tvořenou odpověď.';
$string['noretake'] = 'Není vám povoleno opakovat tuto přednášku.';
$string['normal'] = 'Normální - následuj plán přednášky';
$string['notcompleted'] = 'Nedokončeno';
$string['notdefined'] = 'Není definováno';
$string['nothighscore'] = 'Nedostali jste se do žebříčku {$a} nejlepších známek';
$string['notitle'] = 'Bez názvu';
$string['numberofcorrectanswers'] = 'Počet správných odpovědí: {$a}';
$string['numberofcorrectmatches'] = 'Počet správných přiřazení: {$a}';
$string['numberofpagestoshow'] = 'Počet stránek (karet) k zobrazení';
$string['numberofpagestoshow_help'] = '<p>Tento parametr se využívá pouze u přednášek typu "Flash Card". Výchozí
hodnota je 0 &ndash; v tom případě budou použity všechny stránky přednášky. Nenulová
hodnota parametru znamená, že při procházení přednášky bude pro každého
studenta náhodně vybrán nastavený počet stránek. Po jejich prostudování
přednáška pro studenta skončí a bude mu zobrazena známka.</p>

<p>Pokud je hodnota parametru vyšší než celkový počet stránek přednášky,
dosáhne student konce přednášky po prostudování všech stránek.</p>';
$string['numberofpagesviewed'] = 'Počet prohlédnutých stránek: {$a}';
$string['numberofpagesviewednotice'] = 'Máte {$a->nquestions} zodpovězených otázek; (Máte jich zodpovědět alespoň: {$a->minquestions})';
$string['numerical'] = 'Numerická';
$string['ongoing'] = 'Zobrazovat průběžný bodový zisk';
$string['ongoingcustom'] = 'Váš dosavadní bodový zisk: {$a->score} z {$a->currenthigh}.';
$string['ongoing_help'] = '<p>Jestliže aktivujete tuto možnost, bude se studentům na každé stránce
přednášky zobrazovat aktuální počet bodů, které dosud získali z celkového
počtu. Příklad: Student zodpověděl čtyři 5bodové otázky, a z nich jednu
nezodpověděl správně. Průběžný bodový zisk tohoto studenta je 15/20.</p>';
$string['ongoingnormal'] = 'Zatím jste správně zodpověděli {$a->correct} z {$a->viewed} otázek.';
$string['onpostperpage'] = 'Pro jednotlivé hodnocení je povolen jen jeden pokus';
$string['options'] = 'Možnosti';
$string['or'] = 'NEBO';
$string['ordered'] = 'Seřazeno';
$string['other'] = 'Další';
$string['outof'] = 'z {$a}';
$string['overview'] = 'Přehled';
$string['overview_help'] = '<ol>
  <li>Přednáška sestává z určitého počtu <b>stránek</b> a případně také z
  <b>rozcestníků</b>.</li>

  <li>Stánky podávají vlastní <b>obsah</b> přednášky a jsou obvykle zakončeny
  <b>otázkou</b>. Odtud termín <b>Stránka s otázkou</b>, označující běžnou
  stránku přednášky.</li>

  <li>Otázkám typu tvořená odpověď nejsou přiřazeny odpovědi, pouze počet bodů,
  komentář a skok na stránku.</li>

  <li>Ke každé odpovědi je přiřazen krátký text, který se zobrazí, jestliže
  student danou odpověď zvolí. Tento krátký text se nazývá <b>reakce</b>.</li>

  <li>K odpovědi je také přiřazen <b>skok</b>. Skok může být relativní (tato
  stránka, následující stránka), nebo absolutní (konkrétní stránka nebo konec
  přednášky).</li>

  <li>Ve výchozím nastavení je s první odpovědí spojen skok na <b>následující
  stránku</b> přednášky. Ostatní odpovědi vedou zpět na aktuální stránku. Pokud
  student zvolí jinou odpověď než tu, která je v nastavení uvedena na prvním
  místě (tj. pokud odpoví nesprávně), je mu zobrazena tatáž stránka. Pokud jste
  již vytvořili seskupení s koncem seskupení, a otázka je jeho součástí, můžete
  také zvolit skok na neprohlédnutou otázku v rámci seskupení. Tato možnost se
  vám nenabídne, pokud se nenacházíte uvnitř seskupení. Z vybrané sady otázek
  můžete kdykoli vytvořit seskupení tak, že před ni vložíte začátek seskupení a
  za ni konec seskupení.</li>

  <li>"Následující stránka" je určena <b>lineární posloupností</b> stránek
  přednášky. To je pořadí, ve kterém jednotlivé stránky vidí učitel. Lze je
  kdykoliv změnit přesunutím stránek v rámci přednášky.</li>

  <li>Přednáška má dále <b>navigační posloupnost</b>. To je pořadí, ve kterém
  jednotlivé stránky vidí student. Je definováno skoky nastavenými u
  jednotlivých odpovědí a od lineární posloupnosti se může značně lišit. (Pokud
  jste výchozí nastavení skoků neměnili, jsou si ovšem obě posloupnosti velmi
  podobné.) Učitel má možnost navigační posloupnost kontrolovat a
  upravovat.</li>

  <li>Při zobrazování studentům jsou varianty odpovědi obvykle zamíchány.
  Odpověď, kterou učitel vidí jako první, není tedy nutně uvedena jako první
  odpověď nabízená studentovi. (Navíc se odpovědi při každém pokusu velmi
  pravděpodobně zobrazí v jiném pořadí.) Výjimku tvoří sada odpovědí u
  přiřazovacích otázek, zde se odpovědi zobrazují v pořadí, které zadá
  učitel.</li>

  <li>Počet odpovědí může být na každé stránce přednášky jiný. Některé otázky
  tak mohou například končit otázkou typu Pravda/Nepravda, a jiné zase např.
  obsahovat jednu správnou odpověď a tři distraktory.</li>

  <li>Do přednášky lze zařadit také stránku bez otázky. Studentům se místo
  variant odpovědí zobrazí jen odkaz <b>Pokračovat</b>.</li>

  <li>Pokud je uživatelské bodování <i>vypnuto</i>, pak se pro účely hodnocení
  považují za <b>správné</b> ty odpovědi, z nichž vede skok na stránku
  umístěnou <i>níže</i> v lineární posloupnosti stránek. <b>Chybné</b> jsou
  naopak odpovědi, z nichž vede skok na tutéž stránku nebo stránku umístěnou v
  lineární posloupnosti výše. Pokud jste neměnili výchozí nastavení, první
  odpověď bude chápána jako správná a ostatní jako chybné.<br>
  Pokud je uživatelské bodování <i>zapnuto</i>, je bodový zisk za odpověď určen
  bodovou hodnotou odpovědi; celkový počet získaných bodů je uváděn jako
  procentní podíl z nejvyšší možné známky, kterou lze za přednášku získat,
  maximální hodnotou je 100&nbsp;%.</li>

  <li>Otázky mohou mít více než jednu správnou odpověď. Vedou-li například dvě
  z odpovědí na stránku umístěnou v lineární posloupnosti níže, považují se za
  správné obě dvě. (Je však možné pro každou ze správných odpovědí nastavit
  různé reakce, i když obě vedou na stejnou stránku.)</li>

  <li>V pohledu učitele jsou popisky u správných odpovědí podtrženy (např.:
  <u>Odpověď 1</u>).</li>

  <li><b>Rozcestníky</b> jsou stránky, které obasahují odkazy na jiné stránky v
  přednášce. Přednáška může typicky začínat rozcestníkem, který slouží jako
  obsah.</li>

  <li>Všechny odkazy v rozcestníku mají dvě části &ndash; popis a název stránky, na
  kterou odkazují.</li>

  <li>Rozcestník ve skutečnosti rozděluje přednášku na několik <b>větví</b>
  (nebo sekcí). Každá větev může obsahovat libovolný počet stránek
  (vztahujících se obvykle k témuž tématu). Konec větve je obvykle označen
  stránkou <b>konec větve</b>. Jde o zvláštní stránku, která studenta
  automaticky vrací na předcházející rozcestník. ("Zpětný" skok na stránce
  konce větve je možno změnit v nastavení stránky, pokud je to třeba.)</li>

  <li>Přednáška může obsahovat více než jeden rozcestník. Je například možné
  strukturovat přednášku tak, že podrobné informace jsou umístěny v podřazených
  větvích několika hlavních tematických větví.</li>

  <li>Je důležité poskytnout studentům možnost ukončení přednášky. Odkaz na
  "Konec přednášky" je možno uvést v hlavním rozcestníku. Je to skok na
  (imaginární) stránku <b>Konec přednášky</b>. Jinou možností je, aby poslední
  větev v přednášce ("poslední" se zde chápe jako poslední v lineární
  posloupnosti) prostě pokračovala na konec přednášky, tj. aby <i>nebyla</i>
  ukončena stránkou konce větve.</li>

  <li>Jestliže je uživatelské bodování <i>vypnuto</i>, je vhodné, v případě, že
  přednáška obsahuje jeden nebo více rozcestníků, nastavit "Minimální počet
  otázek" na nějakou rozumnou hodnotu. Tímto nastavením zadáme dolní limit
  počtu prohlédnutých stránek pro výpočet známky. Bez tohoto parametru by
  student mohl navštívit jen jednu větev přednášky, odpovědět správně na
  všechny otázky a opustit přednášku s plným počtem bodů.<br>
  Jestliže je uživatelské bodování <i>zapnuto</i>, je známka studenta založena
  na poměru počtu získaných bodů vůči celkovému počtu bodů, které lze v
  přednášce získat.</li>

  <li>Kromě toho má student při vypnutém uživatelském bodování možnost, je-li k
  dispozici rozcestník, znovu navštívit tutéž větev víckrát než jednou. Známka
  se ovšem počítá podle počtu zodpovězených <i>jedinečných</i> otázek.
  Opakované odpovědi na tutéž skupinu otázek tak výslednou známku
  <i>nezlepší</i>. (Ve skutečnosti je tomu právě naopak &ndash; tento postup známku
  snižuje, neboť jako jmenovatel se při výpočtu známky používá počet
  prohlédnutých stránek, a ten opakovaná prohlížení zahrnuje.) Aby měli
  studenti představu o tom, jak postupují ve studiu přednášky, zobrazují se jim
  na každé stránce rozcestníku podrobnosti o tom, kolik otázek odpověděli
  správně, kolik stránek prohlédli a jakou mají v daném okamžiku známku.<br>
  Je-li uživatelské bodování zapnuto, může student znovu odpovídat na otázku,
  pokud mu to umožní navigační cesta, a znovu za tuto otázku získat bod(y),
  jestliže je počet pokusů nastaven na hodnotu vyšší než 1. Abyste tomu
  zabránili, stanovte počet pokusů na 1.</li>

  <li>Na <b>konec přednášky</b> student dojde buď explicitně (přímým skokem),
  nebo implicitně, tj. skokem na následující stránku z poslední stránky v
  lineární posloupnosti přednášky. Je-li uživatelské bodování <i>vypnuto</i>,
  zobrazí se studentovi po dosažení konce přednášky blahopřání a známka, které
  dosáhl. Tato známka vznikne vyhodnocením výrazu (počet správných odpovědí /
  počet navštívených stránek) * nejlepší možná známka za přednášku. Je-li
  uživatelské bodování <i>zapnuto</i>, známka se stanoví jako procentní poměr
  nejlepší možné známky (např. 3 body získané za 3bodovou přednášku = 100 % ze
  3 bodů).</li>

  <li>Pokud student nedospěl na konec přednášky, dostane při příští návštěvě
  přednášky na výběr, zda chce začít od začátku, nebo zda chce do přednášky
  vstoupit v místě poslední správně zodpovězené otázky.</li>

  <li>Je-li u přednášky povoleno její opakované prohlížení, má učitel možnost
  volby, zda použije nejlepší známku nebo průměr známek jako "konečnou" známku
  za přednášku. Tato známka se pak zobrazí mj. na stránce Známky.</li>

  <li><b>Seskupení</b>: Seskupení představuje sadu otázek, z nichž lze
  studentům náhodně vybírat a nabízet jednu nebo více stránek. Seskupení by
  měla být ideálně ukončena stránkou "konec seskupení" (pokud tomu tak není, je
  za konec seskupení považován konec přednášky). Otázky v rámci seskupení jsou
  náhodně vybírány, jestliže jako skok vybereme možnost "Neprohlédnutá otázka v
  rámci seskupení". Otázky v rámci seskupení mohou buď odkazovat na konec
  seskupení (a tak seskupení opustit), nebo na neprohlédnutou otázku v rámci
  seskupení, nebo na jakoukoli jinou stránku v přednášce. Toto nastavení také
  umožňuje použít modulu Přednáška k vytvoření různých studijních scénářů
  obsahujících náhodný prvek.</li>
</ol>';
$string['page'] = 'Stránka: {$a}';
$string['pagecontents'] = 'Obsah stránky';
$string['page-mod-lesson-edit'] = 'Stránka pro úpravu přednášky';
$string['page-mod-lesson-view'] = 'Stránka pr prohlížení či náhled přednášky';
$string['page-mod-lesson-x'] = 'Jakákoliv stránka přednášky';
$string['pages'] = 'Stránky';
$string['pagetitle'] = 'Název stránky';
$string['password'] = 'Heslo';
$string['passwordprotectedlesson'] = 'Přednáška {$a} je chráněna heslem.';
$string['pleasecheckoneanswer'] = 'Zvolte prosím jednu odpověď';
$string['pleasecheckoneormoreanswers'] = 'Zvolte prosím jednu nebo více odpovědí';
$string['pleaseenteryouranswerinthebox'] = 'Vložte prosím svou odpověď';
$string['pleasematchtheabovepairs'] = 'Přiřaďte prosím odpovídající páry';
$string['pluginadministration'] = 'Správa přednášky';
$string['pluginname'] = 'Přednáška';
$string['pointsearned'] = 'Počet získaných bodů';
$string['postprocesserror'] = 'Došlo k chybě po zpracování!';
$string['postsuccess'] = 'Údaje byly úspěšně odeslány';
$string['pptsuccessfullimport'] = 'Úspěšný import stránek z nahrané PowerPoint prezentace ';
$string['practice'] = 'Cvičná přednáška';
$string['practice_help'] = '<p>Cvičná přednáška nebude započítána do známek kurzu (neobjeví se na stránce
Známky).</p>';
$string['preprocesserror'] = 'Došlo k chybě při předzpracování!';
$string['preview'] = 'Náhled';
$string['previewlesson'] = 'Náhled: {$a}';
$string['previouspage'] = 'Předchozí stránka';
$string['processerror'] = 'Došlo k chybě při zpracování!';
$string['progressbar'] = 'Zobrazit ukazatel průchodu';
$string['progressbar_help'] = '<p>Zobrazí ukazatel průchodu v dolní části stránek přednášky. V současné době
poskytuje ukazatel průchodu přesnou informaci především u lineárních
přednášek.</p>

<p>Mezi dokončené části přednášky se započítávají rozcestníky a stránky s
otázkou, na kterou student odpověděl správně. Do celkového počtu stránek v
přednášce se započítávají seskupení a stránky v rámci seskupení pouze jako
jedna stránka, stránky "konec seskupení" a "konec větve" se nezapočítávají
vůbec. Všechny ostatní stránky jsou do celkového počtu stránek přednášky
započítány.</p>

<p>Poznámka: Výchozí vzhled ukazatele průchodu není příliš zdařilý. ;) Vzhled
všech prvků ukazatele průchodu (jako barvy, obrázky pozadí atd.) lze upravovat
v souboru: mod/lesson/styles.php.</p>';
$string['progressbarteacherwarning'] = 'Ukazatel průchodu přednáškou se vyučujícím nezobrazuje';
$string['progressbarteacherwarning2'] = 'Neuvidíte ukazatel průchodu, protože můžete upravovat tuto přednášku';
$string['progresscompleted'] = 'Dokončili jste {$a}% přednášky';
$string['qtype'] = 'Typ stránky';
$string['question'] = 'Otázka';
$string['questionoption'] = 'Rozšířené nastavení otázky';
$string['questiontype'] = 'Typ otázky';
$string['randombranch'] = 'Stránka z náhodné větve';
$string['randompageinbranch'] = 'Náhodná otázka v rámci větve';
$string['rank'] = 'Pořadí';
$string['rawgrade'] = 'Hrubá známka';
$string['receivedcredit'] = 'Odpověď započtena jako správná';
$string['redisplaypage'] = 'Obnovit stránku';
$string['report'] = 'Zpráva';
$string['reports'] = 'Výsledky';
$string['response'] = 'Reakce';
$string['retakesallowed'] = 'Je povolen opakovaný pokus';
$string['retakesallowed_help'] = '<p>Toto nastavení určuje, zda student může projít přednášku víckrát než jednou.
Učitel může usoudit, že přednáška obsahuje materiály, které by měli studenti
prostudovat obzvláště pečlivě. V tom případě povolí opakované procházení
přednášky. Pokud má přednáška naopak spíše povahu zkoušky, opětovné procházení
by nemělo být povoleno.</p>

<p>Jestliže mohou studenti procházet přednášku opakovaně, zobrazí se jim na
stránce Známky buď <b>průměrná</b> známka ze všech průchodů přednáškou, nebo
známka za jejich <b>nejlepší</b> průchod přednáškou. Následující parametr
určuje, která z těchto dvou metod známkování se má použít.</p>

<p>Analýza otázek a odpovědí však zahrnuje pouze odpovědi z prvního průchodu
studentů přednáškou, další pokusy se nezohledňují.</p>

<p>Ve výchozím nastavení má tento parametr hodnotu "Ano", což znamená, že
studenti mohou procházet přednášku opakovaně. Nastavení <b>Ne</b> se
předpokládá jen ve výjimečných případech.</p>';
$string['returnto'] = 'Návrat na {$a}';
$string['returntocourse'] = 'Zpět do kurzu';
$string['review'] = 'Revize';
$string['reviewlesson'] = 'Revize přednášky';
$string['reviewquestionback'] = 'Ano, chci to zkusit ještě jednou';
$string['reviewquestioncontinue'] = 'Ne, chci pokračovat dál';
$string['sanitycheckfailed'] = 'Selhala kontrola: Tento pokus byl odstraněn';
$string['savechanges'] = 'Uložit změny';
$string['savechangesandeol'] = 'Ulož všechny změny a jdi na konec přednášky.';
$string['savepage'] = 'Uložit stránku';
$string['score'] = 'Bodový zisk';
$string['scores'] = 'Známky';
$string['secondpluswrong'] = 'Ne tak docela. Chcete to zkusit ještě jednou?';
$string['selectaqtype'] = 'Vyberte typ otázky';
$string['shortanswer'] = 'Krátká tvořená odpověď';
$string['showanunansweredpage'] = 'Ukázat nezodpovězenou stránku';
$string['showanunseenpage'] = 'Ukázat neprohlédnutou stránku';
$string['singleanswer'] = 'Jediná odpověď';
$string['skip'] = 'Přeskočit navigaci';
$string['slideshow'] = 'Prezentace';
$string['slideshowbgcolor'] = 'Barva plátna';
$string['slideshowheight'] = 'Výška plátna';
$string['slideshow_help'] = '<p>Toto nastavení umožňuje zobrazit přednášku jako prezentaci se stanovenou
šířkou, výškou a volitelnou barvou plátna. Jestliže obsah stránky překročí
stanovenou šířku nebo výšku plátna, zobrazí se na okraji plátna posuvník, jehož
vzhled je definován pomocí kaskádových stylů CSS. Otázky z prezentace
\'vybočují\', ve výchozím nastavení se na plátně zobrazují pouze stránky a
rozcestníky. Na plátně se vpravo a vlevo zobrazí tlačítka označená "Další" a
"Předcházející", pokud si tuto možnost zvolíte. Další tlačítka se zobrazují
uprostřed pod plátnem.</p>';
$string['slideshowwidth'] = 'Šířka plátna';
$string['startlesson'] = 'Začít přednášku';
$string['studentattemptlesson'] = '{$a->firstname} {$a->lastname} – pokus číslo {$a->attempt}';
$string['studentname'] = '{$a} – jméno';
$string['studentoneminwarning'] = 'Varování: Máte méně než jednu minutu na dokončení přednášky.';
$string['studentresponse'] = 'Odpověď studenta {$a}';
$string['submit'] = 'Odeslat';
$string['submitname'] = 'Odeslat přezdívku';
$string['teacherjumpwarning'] = 'Tato přednáška obsahuje skok typu "{$a->cluster}" nebo "{$a->unseen}". Namísto něj bude použit skok na další stránku. Přihlaste se jako student a zkontrolujte tyto skoky.';
$string['teacherongoingwarning'] = 'Průběžný bodový zisk se zobrazuje pouze studentům. Chcete-li si jej ověřit, přihlaste se jako student.';
$string['teachertimerwarning'] = 'Stopky fungují pouze studentům. Chcete-li si je vyzkoušet, přihlaste se jako student.';
$string['thatsthecorrectanswer'] = 'Tato odpověď je správná.';
$string['thatsthewronganswer'] = 'Tato odpověď není správná.';
$string['thefollowingpagesjumptothispage'] = 'Následující stránky směřují na tuto stránku';
$string['thispage'] = 'Tato stránka';
$string['timeremaining'] = 'Zbývající čas';
$string['timespenterror'] = 'Strávit procházením přednášky více než {$a} minut';
$string['timespentminutes'] = 'Strávený čas (v min.)';
$string['timetaken'] = 'Doba průchodu';
$string['topscorestitle'] = 'Žebříček {$a} nejlepších známek';
$string['truefalse'] = 'Pravda / nepravda';
$string['unabledtosavefile'] = 'Nahraný soubor nelze uložit';
$string['unknownqtypesnotimported'] = '{$a} úloh nepodporovaného typu nebylo naimportováno';
$string['unseenpageinbranch'] = 'Nezobrazená otázka v rámci větve';
$string['unsupportedqtype'] = 'Nepodporovaný typ otázky ({$a})!';
$string['updatedpage'] = 'Stránka aktualizována';
$string['updatefailed'] = 'Aktualizace selhala';
$string['usemaximum'] = 'Nejlepší pokus';
$string['usemean'] = 'Průměr ze všech pokusů';
$string['usepassword'] = 'Přednáška chráněná heslem';
$string['usepassword_help'] = '<p>Toto nastavení umožní studentům přístup k přednášce pouze v případě, že
zadají heslo.</p>';
$string['viewgrades'] = 'Zobrazit známky';
$string['viewhighscores'] = 'Zobrazit žebříček nejlepších známek';
$string['viewreports'] = 'Prohlédnout {$a->attempts} dokončených pokusů';
$string['viewreports2'] = 'Zobrazit {$a} dokončených pokusů';
$string['welldone'] = 'Výborně!';
$string['whatdofirst'] = 'Co chcete udělat nejdříve?';
$string['wronganswerjump'] = 'Skok při nesprávné odpovědi';
$string['wronganswerscore'] = 'Bodový zisk za nesprávnou odpověď';
$string['wrongresponse'] = 'Reakce při nesprávné odpovědi';
$string['xattempts'] = 'Počet pokusů: {$a}';
$string['youhaveseen'] = 'Některé ze stránek této přednášky jste již viděli.<br />Chcete začít na poslední stránce, kterou jste navštívili?';
$string['youmadehighscore'] = 'Dostali jste se do žebříčku {$a} nejlepších známek.';
$string['youranswer'] = 'Vaše odpověď';
$string['yourcurrentgradeis'] = 'Stávající známka: {$a}';
$string['yourcurrentgradeisoutof'] = 'Vaše známka nyní je {$a->grade} z možných {$a->total}';
$string['youshouldview'] = 'Měli byste zodpovědět nejméně {$a} otázek.';
