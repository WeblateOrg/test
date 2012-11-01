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
 * Strings for component 'question', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Akce';
$string['addanotherhint'] = 'Přidat další nápovědu';
$string['addcategory'] = 'Přidat kategorii';
$string['adminreport'] = 'Přehled možných problémů s vaší databází úloh.';
$string['answer'] = 'Odpověď';
$string['answersaved'] = 'Odpověď uložena';
$string['attemptfinished'] = 'Pokus ukončen';
$string['availableq'] = 'Dostupná?';
$string['badbase'] = 'Neplatný základ mocniny: {$a}**';
$string['behaviour'] = 'Chování';
$string['behaviourbeingused'] = 'Je použito chování: {$a}';
$string['broken'] = 'Toto je neplatný odkaz - ukazuje na neexistující soubor';
$string['byandon'] = '<em>{$a->user}</em> - <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Nelze kopírovat soubor zálohy';
$string['cannotcreate'] = 'Není možné vytvořit nový záznam v tabulce pokusů';
$string['cannotcreatepath'] = 'Nelze vytvořit cestu: {$a}';
$string['cannotdeletecate'] = 'Nelze odstranit výchozí kategorii v daném kontextu';
$string['cannotdeletemissingqtype'] = 'Nelze odstranit chybějící typ úlohy. Je vyžadován systémem.';
$string['cannotdeleteqtypeinuse'] = 'Nelze odstranit typ úlohy \'{$a}\'. V bance otázek existují úlohy tohoto typu.';
$string['cannotdeleteqtypeneeded'] = 'Nelze odstranit typ úlohy \'{$a}\'. Existují další typy úloh, které jsou na něm závislé.';
$string['cannotenable'] = 'Typ testové úlohy {$a} nemůže být vytvořen přímo.';
$string['cannotfindcate'] = 'Nelze najít záznam kategorie';
$string['cannotfindquestionfile'] = 'Nelze najít data úlohy v ZIP souboru';
$string['cannotgetdsfordependent'] = 'Nelze načíst určenou datovou sadu pro tuto úlohu! (úloha {$a->id}, položka datové sady: {$a->item})';
$string['cannotgetdsforquestion'] = 'Nelze načíst určenou datovou sadu pro vypočítávanou úlohu! (úloha: {$a})';
$string['cannothidequestion'] = 'Úlohu nebylo možné skrýt';
$string['cannotimportformat'] = 'Bohužel, import z tohoto formátu není dosud implementován';
$string['cannotinsertquestion'] = 'Není možné vložit novou úlohu!';
$string['cannotinsertquestioncatecontext'] = 'Nelze vytvořit novou kategorii testových úloh {$a->cat} z důvodu neplatného contextid {$a->ctx}';
$string['cannotloadquestion'] = 'Nelze načíst testovou úlohu';
$string['cannotmovequestion'] = 'Nemůžete použít tento skript k přesunout testových úloh, s nimiž jsou asociovány soubory z různých oblastí.';
$string['cannotopenforwriting'] = 'Nelze otevřít pro zápis: {$a}';
$string['cannotpreview'] = 'Nelze zobrazit náhled těchto testových úloh!';
$string['cannotread'] = 'Nelze načíst soubor pro import (nebo je soubor prázdný)';
$string['cannotretrieveqcat'] = 'Nelze načíst kategorie testové úlohy';
$string['cannotunhidequestion'] = 'Nepodařilo se odkrýt úlohu.';
$string['cannotunzip'] = 'Nepodařilo se dekomprimovat soubor.';
$string['cannotwriteto'] = 'Nelze zapsat vyexportované úlohy do {$a}';
$string['category'] = 'Kategorie';
$string['categorycurrent'] = 'Stávající kategorie';
$string['categorycurrentuse'] = 'Použij tuto kategorii';
$string['categorydoesnotexist'] = 'Tato kategorie neexistuje';
$string['categoryinfo'] = 'Informace o kategorii';
$string['categorymove'] = 'Kategorie \'{$a->name}\' obsahuje {$a->count} úloh (některé z nich mohou být staré, skryté úlohy nadále používané v některém ze stávajících testů). <br />Vyberte prosím jinou kategorii, do níž chcete úlohy přesunout.';
$string['categorymoveto'] = 'Uložit do kategorie';
$string['categorynamecantbeblank'] = 'Název kategorie nemůže být prázdný.';
$string['changeoptions'] = 'Změna nastavení';
$string['changepublishstatuscat'] = 'Stav sdílení <a href="{$a->caturl}">kategorie "{$a->name}"</a> v kurzu "{$a->coursename}" bude změněn z <strong>{$a->changefrom} na {$a->changeto}</strong>.';
$string['check'] = 'Zkontrolovat';
$string['chooseqtypetoadd'] = 'Zvolte typ testové úlohy';
$string['clearwrongparts'] = 'Odebrat nesprávné odpovědi';
$string['clickflag'] = 'Úloha s vlaječkou';
$string['clicktoflag'] = 'Klikněte pro označení testové úlohy vlaječkou';
$string['clicktounflag'] = 'Klikněte pro odebrání vlaječky';
$string['clickunflag'] = 'Klikněte pro odebrání vlaječky';
$string['closepreview'] = 'Uzavřít náhled';
$string['combinedfeedback'] = 'Kombinovaná zpětná vazba';
$string['comment'] = 'Komentář';
$string['commented'] = 'Komentoval: {$a}';
$string['commentormark'] = 'Okomentovat nebo přepsat známku';
$string['comments'] = 'Komentáře';
$string['commentx'] = 'Komentář: {$a}';
$string['complete'] = 'Hotovo';
$string['contexterror'] = 'Sem byste se neměli dostat, pokud nepřesouváte kategorii do jiného kontextu';
$string['copy'] = 'Zkopíruj z {$a} a změň odkazy.';
$string['correct'] = 'Správně';
$string['correctfeedback'] = 'Za jakoukoliv správnou odpověď';
$string['created'] = 'Vytvořeno';
$string['createdby'] = 'Vytvořeno uživatelem';
$string['createdmodifiedheader'] = 'Vytvořeno / naposledy upraveno';
$string['createnewquestion'] = 'Vytvořit novou testovou úlohu ...';
$string['cwrqpfs'] = 'Náhodné úlohy vybírající úlohy z podkategorií';
$string['cwrqpfsinfo'] = '<p>V průběhu upgrade na Moodle 1.9 dojde k rozdělení kategorií úloh do různých kontextů. U některých kategorií a úloh dojde ke změně stavu jejich sdílení. Tato změna se děje zřídka, ale je nezbytná v případě, kdy je jedna nebo více náhodně vybíraných úloh v testu nastaveno tak, že náhodně vybírají úlohy jak ze sdílených, tak z nesdílených kategorií (jako je tomu v případě tohoto serveru). K této situaci dochází, když náhodně vybíraná úloha vybírá úlohy i z podkategorií a jedna nebo více těchto podkategorií má jiný stav sdílení než má nadřazená kategorie, ve které je náhodně vybíraná úloha vytvořena.</p>
<p>U následujících kategorií, z nichž jsou vybírány úlohy náhodně pomocí úlohy umístěné v nadřazené kategorii, bude změněn stav sdílení na stejnou hodnotu, jakou má kategorie, v níž je "Náhodně vybíraná úloha" uložena. Tato změna proběhne v průběhu upgrade na Moodle 1.9 a bude se týkat následujících kategorií. Úlohy, jichž se změna dotýká, budou i nadále fungovat ve všech testech, do nichž byly vloženy dokud je z těchto testů neodeberete.</p>';
$string['cwrqpfsnoprob'] = 'Žádná kategorie úloh nebude ovlivněna problémem s náhodně vybíranými úlohami z podkategorií.';
$string['decimalplacesingrades'] = 'Počet desetinných míst ve známkách';
$string['defaultfor'] = 'Výchozí v {$a}';
$string['defaultinfofor'] = 'Výchozí kategorie pro úlohy sdílené v kontextu "{$a}".';
$string['defaultmark'] = 'Výchozí známka';
$string['deletebehaviourareyousure'] = 'Odstranit chování {$a}: jste si jistí?';
$string['deletecoursecategorywithquestions'] = 'V bance úloh jsou úlohy asociovány s touto kategorií kurzů. Budete-li pokračovat, budou tyto úlohy odstraněny. Možná si přejete je nejprve někam přesunout pomocí rozhraní banky úloh.';
$string['deleteqtypeareyousure'] = 'Opravdu chcete odstranit typ testové úlohy "{$a}"?';
$string['deleteqtypeareyousuremessage'] = 'Chystáte se úplně odstranit typ testové úlohy "{$a}". Opravdu jej chcete odinstalovat?';
$string['deletequestioncheck'] = 'Jste si absolutně jisti, že chcete zrušit "{$a}"?';
$string['deletequestionscheck'] = 'Jste si naprosto jisti, že chcete odstranit tyto úlohy?<br /><br />{$a}';
$string['deletingbehaviour'] = 'Odstranit chování úloh "{$a}"';
$string['deletingqtype'] = 'Odstraňování typu testové úlohy "{$a}"';
$string['didnotmatchanyanswer'] = '[Nebyly nalezeny žádné odpovědi]';
$string['disabled'] = 'Zakázáno';
$string['disterror'] = 'Distribuce {$} způsobila problémy';
$string['donothing'] = 'Nekopírovat a nepřesouvat soubory, ani neměnit odkazy.';
$string['editcategories'] = 'Upravit kategorie';
$string['editcategories_help'] = 'Při větším množství je lepší roztřídit testové úlohy do kategorií a podkategorií.

Každá kategorie má svůj kontext, který určuje, kde mohou být úlohy z dané kategorie použity:

* Kontext činnosti - úlohy jsou dostupné pouze v daném modulu činnosti
* Kontext kurzu - úlohy jsou dostupné v celém kurzu
* Kontext kategorie kurzů - úlohy jsou dostupné ve všech kurzech v dané kategorii kurzů
* Systémový kontext - úlohy jsou dostupné ve všech kurzech na serveru

Kategorie úlohy se rovněž používají při práci s náhodně vybíranými úlohami. Ty se vybírají vždy z jedné vybrané kategorie úloh.';
$string['editcategory'] = 'Upravit kategorii';
$string['editingcategory'] = 'Úprava kategorie';
$string['editingquestion'] = 'Úprava testové úlohy';
$string['editquestion'] = 'Upravit úlohu';
$string['editquestions'] = 'Upravit úlohy';
$string['editthiscategory'] = 'Upravit tuto kategorii';
$string['emptyxml'] = 'Neznámý chyba - prázdný soubor imsmanifest.xml';
$string['enabled'] = 'Povoleno';
$string['erroraccessingcontext'] = 'Kontext není dostupný';
$string['errordeletingquestionsfromcategory'] = 'Chyba při odstraňování úloh z kategorie {$a}';
$string['errorduringpost'] = 'Došlo k chybě po zpracování!';
$string['errorduringpre'] = 'Došlo k chybě při předzpracování!';
$string['errorduringproc'] = 'Došlo k chybě při zpracování!';
$string['errorduringregrade'] = 'Nelze přeznámkovat úlohu {$a->qid}, přepnuto do stavu {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Chyba - nelze kopírovat soubor {$a}';
$string['errorfilecannotbemoved'] = 'Chyba - nelze přesunout soubor {$a}';
$string['errorfileschanged'] = 'Chyba - soubory odkazované z této úlohy byly změněny od doby posledního zobrazení formuláře pro úpravy';
$string['errormanualgradeoutofrange'] = 'Bodová známka {$a->grade} neleží mezi 0 a {$a->maxgrade} u úlohy "{$a->name}". Získaný skór ani komentář nebyl uložen.';
$string['errormovingquestions'] = 'Chyba při přesunu úloh s identifikátory {$a}';
$string['errorpostprocess'] = 'Došlo k chybě při následném zpracování!';
$string['errorpreprocess'] = 'Došlo k chybě při předzpracování!';
$string['errorprocess'] = 'Došlo k chybě při zpracování!';
$string['errorprocessingresponses'] = 'Vyskytla se chyba při zpracování vašich odpovědí.';
$string['errorsavingcomment'] = 'Chyba při ukládání komentáře u otázky {$a->name} do databázi.';
$string['errorupdatingattempt'] = 'Chyba při aktualizaci pokusu id {$a->id} v databázi.';
$string['exportcategory'] = 'Exportovat kategorii';
$string['exportcategory_help'] = 'Toto nastavení určuje kategorii, ze které budou úlohy exportovány.

Některé formáty, jako například GIFT nebo Moodle XML, umožňují uložit i informaci o původní kategorii a kontextu úloh. Ty pak mohou být opět vytvořeny při importu z daného souboru. Je-li tato funkce požadována, zaškrtněte odpovídající volby.';
$string['exporterror'] = 'došlo k chybě v průběhu exportu!';
$string['exportfilename'] = 'test';
$string['exportnameformat'] = '%Y-%m-%d-%H-%M';
$string['exportquestions'] = 'Exportovat úlohy do souboru';
$string['exportquestions_help'] = 'Tato funkce vám umožní exportovat celou kategorii úloh (včetně podkategorií) do textového souboru. Mějte na paměti, že v závislosti na použitém formátu nemusejí být některá data o úloze či dokonce celé úlohy exportovány.';
$string['feedback'] = 'Reakce';
$string['filecantmovefrom'] = 'Soubory pro tyto testové úlohy nemohou být přesunuty, protože nemáte oprávnění odstraňovat soubory v místě, odkud úlohy přesouváte.';
$string['filecantmoveto'] = 'Soubory pro tyto testové úlohy nemohou být přesunuty ani zkopírovány, protože nemáte oprávnění přidávat soubory do místa, kam úlohy přesouváte.';
$string['fileformat'] = 'Formát souboru';
$string['filesareacourse'] = 'prostoru pro soubory v tomto kurzu';
$string['filesareasite'] = 'prostoru pro soubory na titulní stránce';
$string['filestomove'] = 'Přesunout / zkopírovat do {$a}?';
$string['fillincorrect'] = 'Vyplňte správné odpovědi';
$string['flagged'] = 'Označeno vlaječkou';
$string['flagthisquestion'] = 'Označit tuto úlohu vlaječkou';
$string['formquestionnotinids'] = 'Formulář obsahuje úlohu, jejíž identifikátor není uveden ve questionids';
$string['fractionsnomax'] = 'Jedna nebo více odpovědí má mít bodování 100%, aby bylo možno docílit plného bodování za tuto úlohu!';
$string['generalfeedback'] = 'Obecná reakce';
$string['getcategoryfromfile'] = 'Získat kategorii ze souboru';
$string['getcontextfromfile'] = 'Získat kontext ze souboru';
$string['hidden'] = 'Skrytý';
$string['hintn'] = 'Nápověda {no}';
$string['hinttext'] = 'Text nápovědy';
$string['howquestionsbehave'] = 'Jak se úlohy chovají';
$string['ignorebroken'] = 'Ignorovat neplatné odkazy';
$string['importcategory'] = 'Importovat kategorii';
$string['importcategory_help'] = 'Toto nastavení určuje, do které kategorie budou úlohy naimportovány.

Některé formáty, jako např. GIFT nebo Moodle XML, mohou obsahovat informace o původní kategorii a kontextu, odkud byly úlohy vyexportovány. Pokud si přejete použít tyto údaje namísto výběru kategorie, zaškrtněte příslušné volby. Pokud nebudou kategorie uvedené v souboru existovat, budou automaticky vytvořeny.';
$string['importerror'] = 'Došlo k chybě při zpracování importu';
$string['importerrorquestion'] = 'Chyba při importu úlohy';
$string['importfromcoursefiles'] = '... nebo si vyberte kurz, který chcete importovat.';
$string['importfromupload'] = 'Vyberte soubor, který chcete nahrát ...';
$string['importingquestions'] = 'Import {$a} otázek ze souboru';
$string['importquestions'] = 'Importovat úlohy ze souboru';
$string['importquestions_help'] = 'Tato funkce umožňuje importovat úlohy ze souborů v různých formátech. Soubory musí používat kódování UTF-8.';
$string['impossiblechar'] = 'Byl zjištěn nepodporovaný znak {$a} použitý jako závorka.';
$string['includesubcategories'] = 'Zobrazit také úlohy z podkategorií
';
$string['incorrect'] = 'Nesprávně';
$string['incorrectfeedback'] = 'Za jakoukoliv nesprávnou odpověď';
$string['information'] = 'Informace';
$string['invalidanswer'] = 'Neúplná odpověď';
$string['invalidarg'] = 'Nebyly poskytnuty platné argumenty nebo je nesprávná konfigurace serveru';
$string['invalidcategoryidforparent'] = 'Neplatný identifikátor nadřazené kategorie!';
$string['invalidcategoryidtomove'] = 'Neplatný identifikátor cílové kategorie!';
$string['invalidconfirm'] = 'Potvrzovací řetězec byl nesprávný';
$string['invalidcontextinhasanyquestions'] = 'Funkci question_context_has_any_questions() byl předán neplatný parametr context';
$string['invalidpenalty'] = 'Neplatná penalizace';
$string['invalidwizardpage'] = 'Určena nesprávná stránka průvodce!';
$string['lastmodifiedby'] = 'Naposledy změněno uživatelem';
$string['linkedfiledoesntexist'] = 'Odkazovaný soubor {$a} neexistuje';
$string['makechildof'] = 'Vytvořit potomka "{$a}"';
$string['makecopy'] = 'Vytvořit kopii';
$string['maketoplevelitem'] = 'Přesunout úplně nahoru';
$string['manuallygraded'] = 'Ručně oznámkováno {$a->mark} s poznámkou: {$a->comment}';
$string['mark'] = 'Počet bodů';
$string['markedoutof'] = 'Počet bodů z';
$string['markedoutofmax'] = 'Počet bodů z {$a}';
$string['markoutofmax'] = 'Bodů {$a->mark} / {$a->max}';
$string['marks'] = 'Body';
$string['matchgrades'] = 'Mapování známek';
$string['matchgrades_help'] = 'Bodové ohodnocení importovaných úloh musí odpovídat některé z hodnot 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0 (případně jejich záporným protějškům).

Tato volba určuje, jakým způsobem bude při importu naloženo s hodnotami, které neodpovídají žádné z hodnot v uvedeném seznamu:

* Nahlásit chybu - zobrazí se chybové hlášení a úloha nebude importována
* Použít nejbližší hodnotu - pokud známka neodpovídá žádné hodnotě na seznamu, bude změněna na nejbližší odpovídající hodnotu

Některé formáty mohou zapisovat známky přímo do
databáze a mohou tak obejít toto kontrolní nastavení.';
$string['missingcourseorcmid'] = 'Funkce print_question() vyžaduje parametry courseid nebo cmid ';
$string['missingcourseorcmidtolink'] = 'Funkce get_question_edit_link() vyžaduje parametry courseid nebo cmid ';
$string['missingimportantcode'] = 'Tento typ úlohy postrádá důležitý kód: {$a}.';
$string['missingoption'] = 'V doplňovací úloze {$a} chybí její možnosti';
$string['modified'] = 'Naposledy uloženy';
$string['move'] = 'Přesunout z {$a} a změnit odkazy';
$string['movecategory'] = 'Přesunout kategorii';
$string['movedquestionsandcategories'] = 'Úlohy a kategorie přesunuty z {$a->oldplace} do {$a->newplace}.';
$string['movelinksonly'] = 'Změnit jenom odkazy, nepřesouvat ani nekopírovat.';
$string['moveq'] = 'Přesunout úlohu/-y';
$string['moveqtoanothercontext'] = 'Přesunout úlohu do jiného kontextu';
$string['moveto'] = 'Přesunout do >>';
$string['movingcategory'] = 'Přesun kategorie';
$string['movingcategoryandfiles'] = 'Jste si jisti, že chcete přesunout kategorii "{$a->name}" a všechny její podkategorie do kontextu "{$a->contextto}"?<br />Bylo zjištěno {$a->urlcount} odkazů na soubory uložené v {$a->fromareaname}. Přejete si tyto soubory přesunout nebo zkopírovat do {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Jste si jisti, že chcete přesunout kategorii "{$a->name}" a všechny její podkategorie do kontextu "{$a->contextto}"?';
$string['movingquestions'] = 'Přesouvání úloh jakýchkoliv souborů';
$string['movingquestionsandfiles'] = 'Jste si jisti, že chcete přesunout úlohu/-y {$a->questions} do kontextu <strong>"{$a->tocontext}"</strong>? <br />Bylo zjištěno <strong>{$a->urlcount} odkazů</strong> na soubory uložené v {$a->fromareaname}. Přejete si tyto soubory přesunout nebo zkopírovat do {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Jste si jisti, že chcete přesunout úlohu/-y {$a->questions} do kontextu <strong>"{$a->tocontext}"</strong>? <br />Nebyly zjištěny žádné odkazy na soubory umístěné v {$a->fromareaname}.';
$string['needtochoosecat'] = 'Musíte zvolit kategorii, kam se má úloha přesunout, nebo stisknout "Zrušit".';
$string['nocate'] = 'Není žádná taková kategorie {$a}!';
$string['nopermissionadd'] = 'Nemáte oprávnění přidávat zde úlohy.';
$string['nopermissionmove'] = 'Nemáte oprávnění přesouvat úlohy z tohoto umístění. Musíte úlohu uložit buď do této kategorie, nebo ji uložit jako novou úlohu.';
$string['noprobs'] = 'Nebyly nalezeny žádné problémy ve vaší databázi úloh.';
$string['noquestionsinfile'] = 'Importovaný soubor neobsahuje žádné úlohy.';
$string['noresponse'] = '[Žádná odpověď]';
$string['notanswered'] = 'Nezodpovězeno';
$string['notenoughanswers'] = 'Tento typ úlohy vyžaduje nejméně {$a} odpovědí';
$string['notenoughdatatoeditaquestion'] = 'Nebyl specifikován ani identifikátor úlohy, ani identifikátor kategorie ani typ úlohy.';
$string['notenoughdatatomovequestions'] = 'Musíte poskytnout identifikátory úloh, které chcete přesunout.';
$string['notflagged'] = 'Neoznačené vlaječkou';
$string['notgraded'] = 'Není hodnoceno';
$string['notshown'] = 'Nezobrazeno';
$string['notyetanswered'] = 'Dosud nezodpovězeno';
$string['novirtualquestiontype'] = 'Pro úlohu typu {$a} neexistuje virtuální kategorie';
$string['numqas'] = 'Počet pokusů';
$string['numquestions'] = 'Počet úloh';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} skrytých)';
$string['options'] = 'Možnosti';
$string['page-question-category'] = 'Stránka kategorie testové úlohy';
$string['page-question-edit'] = 'Stránka pro úpravu testové úlohy';
$string['page-question-export'] = 'Stránka pro export testové úlohy';
$string['page-question-import'] = 'Stránka pro import testové úlohy';
$string['page-question-x'] = 'Jakákoliv stránka testové úlohy';
$string['parent'] = 'Rodič';
$string['parentcategory'] = 'Nadřazená kategorie';
$string['parentcategory_help'] = 'Nadřazená kategorie je ta, pod kterou bude tato kategorie umístěna. "Nahoru" znamená, že tato kategorie nemá žádnou nadřazenou kategorii. Kontext kategorie je zvýrazněn tučně. V každém kontextu musí být alespoň jedna kategorie.';
$string['parenthesisinproperclose'] = 'Závorka v {$a}** není korektně uzavřena';
$string['parenthesisinproperstart'] = 'Závorka v {$a}** není korektně otevřena';
$string['partiallycorrect'] = 'Částečně správně';
$string['partiallycorrectfeedback'] = 'Za jakoukoliv částečně správnou odpověď';
$string['penaltyfactor'] = 'Penalizační faktor';
$string['penaltyfactor_help'] = 'Určuje, jak velká část dosaženého skóre má být odečtena za každou nesprávnou odpověď. Tato možnost je relevantní, pouze pokud test běží v adaptivním režimu.

Penalizační faktor by měl být číslo v intervalu 0 až 1. Hodnota 1 znamená, že student musí odpovědět
správně při prvním pokusu, aby za úlohu vůbec dostal nějaké body. Hodnota 0 znamená, že student může na danou úlohu odpovídat kolikrát chce a přesto dostane plný počet bodů.';
$string['penaltyforeachincorrecttry'] = 'Penalizace pro každý chybný pokus';
$string['permissionedit'] = 'Upravit tuto úlohu';
$string['permissionmove'] = 'Přesunout tuto úlohu';
$string['permissionsaveasnew'] = 'Uložit jako novou úlohu';
$string['permissionto'] = 'Máte oprávnění:';
$string['previewquestion'] = 'Náhled úlohy: {$a}';
$string['published'] = 'sdílená';
$string['qtypedeletefiles'] = 'Všechna data náležící typu testové úlohy "{$a->qtype}" byla odstraněna z databáze. Nyní byste měli odstranit adresář "{$a->directory}" na vašem serveru a zabránit tak reinstalace tohoto typu testové úlohy.';
$string['qtypeveryshort'] = 'T';
$string['questionaffected'] = '<a href="{$a->qurl}">Úloha "{$a->name}" ({$a->qtype})</a> je v této kategorii úloh, ale je též zařazena do <a href="{$a->qurl}">testu "{$a->quizname}"</a> v kurzu "{$a->coursename}".';
$string['questionbank'] = 'Banka úloh';
$string['questionbehaviouradminsetting'] = 'Nastavení chování úlohy';
$string['questionbehavioursdisabled'] = 'Deaktivováno chování úlohy';
$string['questionbehavioursorder'] = 'Pořadí chování úloh';
$string['questioncategory'] = 'Kategorie úloh';
$string['questioncatsfor'] = 'Kategorie úloh v kontextu \'{$a}\'';
$string['questiondoesnotexist'] = 'Tato testová úloha neexistuje';
$string['questionidmismatch'] = 'Nesouhlasí identifikátory úloh';
$string['questionname'] = 'Název úlohy';
$string['questionno'] = 'Úloha {$a}';
$string['questions'] = 'Úlohy';
$string['questionsaveerror'] = 'Při ukládání úlohy ({$a}) nastala chyba';
$string['questionsmovedto'] = 'Úlohy, které jsou stále používány, byly přesunuty do "{$a}" v nadřazené kategorii kurzů.';
$string['questionsrescuedfrom'] = 'Úlohy uložené z kontextu {$a}.';
$string['questionsrescuedfrominfo'] = 'Tyto úlohy (z nichž některé mohou být skryté) byly uloženy při odstraňování kontextu {$a}, protože jsou stále používány v některých testech či jiných modulech činností.';
$string['questiontext'] = 'Text úlohy';
$string['questiontype'] = 'Typ úlohy';
$string['questionuse'] = 'Použij úlohu v této činnosti';
$string['questionvariant'] = 'Varianta úlohy';
$string['questionx'] = 'Úloha {$a}';
$string['requiresgrading'] = 'Vyžaduje hodnocení';
$string['responsehistory'] = 'Historie odpovědí';
$string['restart'] = 'Začít znovu';
$string['restartwiththeseoptions'] = 'Začít znovu s tímto nastavením';
$string['reviewresponse'] = 'Náhled odpovědi';
$string['rightanswer'] = 'Správná odpověď';
$string['save'] = 'Uložit';
$string['saved'] = 'Uloženo: {$a}';
$string['saveflags'] = 'Uložit stav vlaječek';
$string['selectacategory'] = 'Vyberte kategorii:';
$string['selectaqtypefordescription'] = 'Zvolte typ úlohy k zobrazení jejího popisu';
$string['selectcategoryabove'] = 'Vyberte výše kategorii';
$string['selectquestionsforbulk'] = 'Označte úlohy pro hromadné zpracování';
$string['settingsformultipletries'] = 'Nastavení pro vícero pokusů';
$string['shareincontext'] = 'Sdílet v kontextu {$a}';
$string['showhidden'] = 'Zobrazovat také staré úlohy';
$string['showmarkandmax'] = 'Zobrazit získané a nejvyšší možné body';
$string['showmaxmarkonly'] = 'Zobrazit jen nejvyšší možné body';
$string['shown'] = 'Zobrazit';
$string['shownumpartscorrect'] = 'Zobrazit počet správných odpovědí';
$string['shownumpartscorrectwhenfinished'] = 'Zobrazit počet správných odpovědí';
$string['showquestiontext'] = 'Zobrazit text úlohy v seznamu úloh';
$string['specificfeedback'] = 'Konkrétní reakce';
$string['started'] = 'Zahájeno';
$string['state'] = 'Stav';
$string['step'] = 'Krok';
$string['stoponerror'] = 'Zastavit při chybě';
$string['stoponerror_help'] = 'Určuje, zda se má při výskytu chyby proces importování zastavit a žádná úloha se nemá naimportovat. Nebo zda se mají chybné úlohy přeskočit a všechny platné se mají naimportovat normálně.';
$string['submit'] = 'Odeslat';
$string['submitandfinish'] = 'Odeslat vše a ukončit  pokus';
$string['submitted'] = 'Odevzdáno: {$a}';
$string['technicalinfoquestionsummary'] = 'Shrnutí úlohy: {$a}';
$string['technicalinforightsummary'] = 'Shrnutí správné odpovědi: {$a}';
$string['technicalinfostate'] = 'Stav úlohy: {$a}';
$string['tofilecategory'] = 'Zapsat kategorii do souboru';
$string['tofilecontext'] = 'Zapsat kontext do souboru';
$string['uninstallbehaviour'] = 'Odinstalovat toto chování úloh.';
$string['uninstallqtype'] = 'Odinstalovat tento typ testové úlohy';
$string['unknown'] = 'Neznámý';
$string['unknownbehaviour'] = 'Neznámé chování: {$a}.';
$string['unknownquestion'] = 'Neznámá úloha: {$a}.';
$string['unknownquestioncatregory'] = 'Neznámá kategorie úlohy: {$a}.';
$string['unknownquestiontype'] = 'Neznámý typ úlohy: {$a}.';
$string['unknowntolerance'] = 'Neznámý typ tolerance {$a}';
$string['unpublished'] = 'nesdílená';
$string['upgradeproblemcategoryloop'] = 'Byl zjištěn problém při upgrade kategorií úloh. Strom kategorií obsahuje smyčku. Identifikátory postižených kategorií jsou {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Není možno aktualizovat kategorii {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'Byl zjištěn problém při upgrade kategorií úloh. Kategorie {$a->id} má spadat pod kategorii {$a->parent}, ale ta neexistuje. Reference na nadřazenou kategorii byla opravena.';
$string['whethercorrect'] = 'Při správné odpovědi';
$string['withselected'] = 'S označenými';
$string['wrongprefix'] = 'Nesprávně formátovaný prefix názvu {$a}';
$string['xoutofmax'] = '{$a->mark} / {$a->max}';
$string['yougotnright'] = 'Vybrali jste správně {$a->num}.';
$string['youmustselectaqtype'] = 'Musíte zvolit typ úlohy.';
$string['yourfileshoulddownload'] = 'Vyexportovaný soubor by se měl začít okamžitě stahovat. Pokud se tak nestane, <a href="{$a}">klikněte sem</a>.';
