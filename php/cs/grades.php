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
 * Strings for component 'grades', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   grades
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities'] = 'Činnosti';
$string['addcategory'] = 'Přidat kategorii';
$string['addcategoryerror'] = 'Nepodařilo se přidat kategorii';
$string['addexceptionerror'] = 'Vyskytla se chyba při přidávání výjimky pro userid:gradeitem';
$string['addfeedback'] = 'Přidat komentář';
$string['addgradeletter'] = 'Přidat slovní známku';
$string['addidnumbers'] = 'Přidat identifikátory';
$string['additem'] = 'Přidat položku hodnocení';
$string['addoutcome'] = 'Přidat očekávaný výstup';
$string['addoutcomeitem'] = 'Přidat hodnocený výstup';
$string['addscale'] = 'Přidat škálu';
$string['aggregateextracreditmean'] = 'Průměr známek (včetně extra bodového zisku)';
$string['aggregatemax'] = 'Nejvyšší známka';
$string['aggregatemean'] = 'Průměr známek';
$string['aggregatemedian'] = 'Medián známek';
$string['aggregatemin'] = 'Nejnižší známka';
$string['aggregatemode'] = 'Modus známek';
$string['aggregateonlygraded'] = 'Do souhrnné známky zahrnout pouze neprázdné známky';
$string['aggregateonlygraded_help'] = '<p>Neexistující známky je možno považovat za minimální nebo je nezahrnout do výpočtu souhrnné známky.</p>';
$string['aggregateoutcomes'] = 'Zahrnout očekávané výstupy v souhrnné známce';
$string['aggregateoutcomes_help'] = '<p>Zahrnutí očekávaných výstupů do souhrnné známky nemusí vést k požadovanému výsledku. Proto máte možnost je zahrnout nebo ne.</p>';
$string['aggregatesonly'] = 'Pouze souhrnné známky';
$string['aggregatesubcats'] = 'Souhrnná známka zahrnuje podkategorie';
$string['aggregatesubcats_help'] = '<p>Výpočet souhrnné známky obvykle probíhá jen v přímých potomcích. Je rovněž možno ji vypočítat na základě všech známek ve všech podkategoriích s výjimkou jiných souhrnných známek.</p>';
$string['aggregatesum'] = 'Součet známek';
$string['aggregateweightedmean'] = 'Vážený průměr známek';
$string['aggregateweightedmean2'] = 'Jednoduchý vážený průměr známek';
$string['aggregation'] = 'Souhrnná známka';
$string['aggregationcoef'] = 'Koeficient souhrnné známky';
$string['aggregationcoefextra'] = 'Extra bodový zisk';
$string['aggregationcoefextra_help'] = 'Při použití typu souhrnné známky "Součet známek" nebo "Jednoduchý vážený průměr" mohou vybrané položky hodnocení fungovat jako bonusové. To znamená, že nejvyšší možná známka za tuto položku nebude přičtena k celkové nejvyšší možné známce za celou kategorii, ale samotná známka ano.

Pokud používáte souhrnnou známku "Průměr známek (včetně extra bodového zisku)" a zadáte zde hodnotu větší než nula, budou známky za tuto položku hodnocení při výpočtu souhrnné známky považovány za známku navíc. Nastavená hodnota slouží jako součinitel, kterým se násobí skutečná hodnota známky předtím, než se přičte k součtu všech známek za danou kategorii. Současně není položka započítána do počtu položek, kterým se součet všech známek za kategorii dělí.';
$string['aggregationcoefextrasum'] = 'Extra bodový zisk';
$string['aggregationcoefextrasum_help'] = 'Při použití typu souhrnné známky "Součet známek" mohou vybrané položky hodnocení fungovat jako bonusové. To znamená, že nejvyšší možná známka za tuto položku nebude přičtena k celkové nejvyšší možné známce za celou kategorii, ale samotná známka ano.';
$string['aggregationcoefextraweight'] = 'Váha pro extra body';
$string['aggregationcoefextraweight_help'] = 'Zadáte-li zde hodnotu větší než nula, budou známky za tuto položku hodnocení při výpočtu souhrnné známky považovány za známku navíc. Nastavená hodnota slouží jako součinitel, kterým se násobí skutečná hodnota známky, předtím než se přičte k součtu všech známek za danou kategorii. Současně není položka započítána do počtu položek, kterým se součet všech známek za kategorii dělí.';
$string['aggregationcoefweight'] = 'Váha položky';
$string['aggregationcoefweight_help'] = '<p>Váha aplikovaná na všechny známky v této položce hodnocení, která se použije při výpočtu souhrnné známky.</p>';
$string['aggregation_help'] = '<p>Všechny známky v dané kategorii (a případně i v jejích podkategoriích) mohou být shrnuty do jediné známky za danou kategorii. Souhrnná známka za danou kategorii může být vypočítávána různými způsoby. Následující text objasňuje jednotlivé způsoby výpočtu souhrnné známky.</p>

<p>Nejprve jsou známky převedeny na procentuální hodnotu z intervalu <0; 1>, tomuto procesu se říká normalizace. Poté je vypočítána souhrnná známka pomocí jedné z funkcí uvedené dále. Nakonec je takto vypočtená známka převedena na odpovídající hodnotu z rozsahu nastaveného pro danou kategorii (tj. do intervalu mezi nejnižší a nejvyšší známkou definovanou v nastavení kategorie).</p>

<p><strong>Důležité:</strong> Prázdná známka je prostě chybějící záznam v modulu klasifikace a může mít více významů.  Může jít o studenta, který dosud neodevzdal zadaný úkol, nebo o případ, kdy učitel ještě neoznámkoval zaslané řešení, případně byla známka ručně odstraněna správcem klasifikace. Pečlivě si rozmyslete, jaký význam mají prázdná pole známek a podle toho i nastavte výpočet souhrnné známky.</p>

<p>Ve všech následujících příkladech jsou uvažovány tři bodované položky hodnocení označené jako A1, A2 a A3. Za A1 šlo získat maximálně 100 bodů, student získal 70. Za A2 bylo možno získat 80 bodů, daný student získal jen 20. V položce A3 student získal 10 bodů z 10 možných. Všechny jsou položy A1, A2 a A3 jsou zařazeny do stejné kategorie, která má nastavenu nejvyšší možnou známku 100.</p>

<dl id="grade-aggregation-help">
    <dt>Průměr známek</dt>
    <dd>Součet známek dělený jejich počtem.</dd>
    <dd class="example">A1 70/100, A2 20/80, A3 10/10, nejvyšší možná za danou kategorii 100:<br />
                     <code>(0.7 + 0.25 + 1.0)/3 = 0.65 --> 65/100</code></dd>

    <dt>Vážený průměr</dt>
        <dd>Každé položce může být přiřazena váha, která se poté promítá do výpočtu aritmetického průměru. Čím větší váhu položka má, tím více souhrnnou známku ovlivňuje.</dd>
        <dd class="example">A1 70/100 s vahou 10, A2 20/80 s vahou 5,
                            A3 10/10 s vahou 3, nejvyšší možná známka za danou kategorii 100:
        <br /><code>(0.7*10 + 0.25*5 + 1.0*3)/18 = 0.625 --> 62.5/100</code></dd>

    <dt>Jednoduchý vážený průměr</dt>
        <dd>Od <em>Váženého průměru</em> se liší tím, že váha je u každé položky určena automaticky jako <em>Nejvyšší známka</em> - <em>Nejnižší známka</em>. Úkol, za který je možno získat až 100 bodů, má pak váhu 100, úkol s maximem 10 bodů má váhu 10.</dd>
    <dd class="example">A1 70/100, A2 20/80, A3 10/10, nejvyšší možná za danou kategorii 100:<br />
                         <code>(0.7*100 + 0.25*80 + 1.0*10)/190 = 0.526 --> 52.6/100</code></dd>

    <dt>Průměr známek (včetně známek navíc)</dt>
        <dd>Drobně modifikovaný aritmetický průměr. Starší, nyní již nepodporovaný způsob výpočtu souhrnné známky, který je zde zařazen jen pro účely zpětné kompatibility se staršími aktivitami.</dd>

    <dt>Medián známek</dt>
        <dd>Prostřední známka (příp. průměr dvou prostředních známek) v řadě známek seřazených podle velikosti. Výhodou oproti průměru je, že medián není tolik ovlivněn výjimečnými hodnotami známek (tj. známkami hodně vzdálenými od průměru).</dd>
    <dd class="example">A1 70/100, A2 20/80, A3 10/10, nejvyšší možná za danou kategorii 100:<br />
                         <code>median(0.7 ; 0.25 ; 1.0) --> 0.7 --> 70/100</code></dd>

    <dt>Nejnižší známka</dt>
        <dd>Výsledkem je nejnižší známka po normalizaci. Často se používá v kombinaci s nastavením <em>Do souhrnné známky zahrnout pouze neprázdné známky</em>.</dd>
    <dd class="example">A1 70/100, A2 20/80, A3 10/10, nejvyšší možná za danou kategorii 100:<br />
                         <code>min(0.7 ; 0.25 ; 1.0) = 0.25 --> 25/100</code></dd>

    <dt>Nejvyšší známka</dt>
        <dd>Výsledkem je nejvyšší známka po normalizaci.</dd>
    <dd class="example">A1 70/100, A2 20/80, A3 10/10, nejvyšší možná za danou kategorii 100:<br />
                         <code>max(0.7 ; 0.25 ; 1.0) = 1.0 --> 100/100</code></dd>

    <dt>Modus známek</dt>
        <dd>Modus je známka, která se vyskytuje nejčastěji. Často se používá pro nenumerické typy známek. Výhodou oproti průměru je, že modus není tolik ovlivněn výjimečnými hodnotami známek (tj. známkami hodně vzdálenými od průměru). Modus ztrácí význam, pokud stejné maximální četnosti dosahuje vícero hodnot (pouze jedna z nich je zaznamenána) nebo pokud se všechny známky od sebe liší (každá z nich má četnost 1).</dd>
        <dd class="example">A1 70/100, A2 35/50, A3 20/80, A4 10/10, A5 7/10 nejvyšší možná za danou kategorii 100:<br />
                         <code>mode(0.7; 0.7; 0.25; 1.0; 0.7) = 0.7 --> 70/100</code></dd>

    <dt>Součet známek</dt>
        <dd>Součet nenormalizovaných hodnot všech zahrnutých známek. Škály jsou ignorovány. Toto je jediný typ výpočtu shouhrnné známky, při kterém nejsou známky normalizovány. <em>Nejvyšší možná známka</em> za danou kategorii je vypočtena automaticky jakou součet nejvyšších možných známek dílčích položek.</dd>
        <dd class="example">A1 70/100, A2 20/80, A3 10/10:<br />
                         <code>70 + 20 + 10 = 100/190</code></dd>
</dl>';
$string['aggregationposition'] = 'Umístění souhrnné známky';
$string['aggregationposition_help'] = '<p>Definuje umístění sloupce se souhrnnou známkou vzhledem ke známkám, z nichž je souhrnná známka počítána.</p>';
$string['aggregationsvisible'] = 'Dostupné typy souhrnných známek';
$string['aggregationsvisiblehelp'] = 'Označte všechny typy výpočtu souhrnných známek, které mají být dostupné. Držte klávesu Ctrl k označení více položek.';
$string['allgrades'] = 'Všechny známky podle kategorie';
$string['allstudents'] = 'Všichni studenti';
$string['allusers'] = 'Všichni uživatelé';
$string['autosort'] = 'Automatické řazení';
$string['availableidnumbers'] = 'Dostupné identifikátory';
$string['average'] = 'Průměr';
$string['averagesdecimalpoints'] = 'Počet desetinných míst v průměrech';
$string['averagesdecimalpoints_help'] = '<p>Určuje počet desetinných míst, která budou zobrazena v průměru pro každý sloupec. Je-li zvoleno "Dědit", je použit stejný typ zobrazení, jaký je nastaven u hodnot v daném sloupci.</p>';
$string['averagesdisplaytype'] = 'Typ zobrazení průměrů';
$string['averagesdisplaytype_help'] = '<p>Určuje, jak bude zobrazován průměr u každého sloupce. Je-li zvoleno "Dědit", je použit stejný typ zobrazení, jaký je nastaven u hodnot v daném sloupci.</p>';
$string['backupwithoutgradebook'] = 'Záloha neobsahuje konfiguraci klasifikace';
$string['badgrade'] = 'Poskytnutá známka není platná';
$string['badlyformattedscale'] = 'Vložte čárkami oddělený seznam hodnot. Vyžadovány jsou alespoň dvě položky.';
$string['baduser'] = 'Poskytnutý uživatel není platný';
$string['bonuspoints'] = 'Bonusové body';
$string['bulkcheckboxes'] = 'Hromadná zaškrtávátka';
$string['calculatedgrade'] = 'Vypočítávaná známka';
$string['calculation'] = 'Výpočet';
$string['calculationadd'] = 'Přidat výpočet';
$string['calculationedit'] = 'Upravit výpočet';
$string['calculation_help'] = 'Pro výpočet známky je možno použít vzorec. Vzorec je předpis začínající znakem rovnítka, který může používat běžné algebraické operace a další funkce, jako např. min, max nebo sum. Do výpočtu lze zahrnout i hodnotu dalších známek tak, že se jejich ID uvede v dvojitých hranatých závorkách.';
$string['calculationsaved'] = 'Výpočet uložen';
$string['calculationview'] = 'Zobrazit výpočet';
$string['cannotaccessgroup'] = 'Bohužel, nemáte přístup ke známkám ve vybrané skupině.';
$string['categories'] = 'Kategorie';
$string['categoriesanditems'] = 'Kategorie a položky';
$string['categoriesedit'] = 'Upravit kategorie a položky';
$string['category'] = 'Kategorie';
$string['categoryedit'] = 'Upravit kategorii';
$string['categoryname'] = 'Název kategorie';
$string['categorytotal'] = 'Celkem v kategorii';
$string['categorytotalfull'] = '{$a->category} - celkem';
$string['categorytotalname'] = 'Název pro celkovou známku v kategorii';
$string['changedefaults'] = 'Změnit výchozí hodnoty';
$string['changereportdefaults'] = 'Změnit výchozí nastavení přehledu';
$string['chooseaction'] = 'Vyberte akci ...';
$string['choosecategory'] = 'Vyberte kategorii';
$string['combo'] = 'Záložky a rozbalovací menu';
$string['compact'] = 'Kompaktní';
$string['contract'] = 'Sbalit kategorii';
$string['controls'] = 'Řízení';
$string['courseavg'] = 'Průměr kurzu';
$string['coursegradecategory'] = 'Kategorie známek kurzu';
$string['coursegradedisplaytype'] = 'Typ zobrazování známek v kurzu';
$string['coursegradedisplayupdated'] = 'Typ zobrazování známek v kurzu byl aktualizován';
$string['coursegradesettings'] = 'Nastavení hodnocení v kurzu';
$string['coursename'] = 'Název kurzu';
$string['coursescales'] = 'Škály kurzu';
$string['coursesettings'] = 'Nastavení hodnocení v kurzu';
$string['coursesettingsexplanation'] = 'Nastavení hodnocení určuje, jak se budou známky zobrazovat všem účastníkům kurzu.';
$string['coursetotal'] = 'Celkem za kurz';
$string['createcategory'] = 'Vytvořit kategorii';
$string['createcategoryerror'] = 'Nelze vytvořit novou kategorii';
$string['creatinggradebooksettings'] = 'Vytvářím nastavení klasifikace';
$string['csv'] = 'CSV';
$string['currentparentaggregation'] = 'Typ souhrnné známky v nadřazené kategorii';
$string['curveto'] = 'Přepočítat na';
$string['decimalpoints'] = 'Počet desetinných míst';
$string['decimalpoints_help'] = '<p>Určuje, na kolik desetinných míst se budou zobrazovat známky v klasifikaci. Toto nastavení neovlivňuje přesnost výpočtů známek, které jsou prováděny s přesností na pět desetinných míst.</p>';
$string['default'] = 'Výchozí';
$string['defaultprev'] = 'Výchozí ({$a})';
$string['deletecategory'] = 'Odstranit kategorii';
$string['disablegradehistory'] = 'Zakázat historii známek';
$string['disablegradehistory_help'] = 'Vypíná sledování historie změn v tabulkách hodnocení. Zpracování pak může probíhat trochu rychleji a šetří se místo v databázi.';
$string['displaylettergrade'] = 'Zobrazit slovní známky';
$string['displaypercent'] = 'Zobrazit známky v procentech';
$string['displaypoints'] = 'Zobrazit body';
$string['displayweighted'] = 'Zobrazit vážené známky';
$string['dropdown'] = 'Rozbalovací nabídka';
$string['droplow'] = 'Ignorovat X nejnižších';
$string['droplow_help'] = '<p>Je-li zde nastavena nějaká hodnota X, pak bude ignorováno X nejnižších (nejhorších) známek.</p>';
$string['dropped'] = 'Ignorováno';
$string['dropxlowest'] = 'Ignorovat X nejhorších';
$string['dropxlowestwarning'] = 'Pozn.: Pokud používáte funkci \'Ignorovat X nejhorších\', předpokládá se, že všechny položky v dané kategorii mají stejnou hodnotu počtu bodů. Pokud se tyto hodnoty liší, výsledky jsou nepředvídatelné.';
$string['duplicatescale'] = 'Duplikovat škálu';
$string['edit'] = 'Upravit';
$string['editcalculation'] = 'Upravit výpočet';
$string['editcalculationverbose'] = 'Upravit výpočet pro {$a->category} {$a->itemmodule} {$a->itemname}';
$string['editfeedback'] = 'Upravit komentář';
$string['editgrade'] = 'Upravit známku';
$string['editgradeletters'] = 'Upravit slovní známky';
$string['editoutcome'] = 'Upravit očekávaný výstup';
$string['editoutcomes'] = 'Upravit očekávané výstupy';
$string['editscale'] = 'Upravit škálu';
$string['edittree'] = 'Kategorie a položky';
$string['editverbose'] = 'Upravit {$a->category} {$a->itemmodule} {$a->itemname}';
$string['enableajax'] = 'Povolit AJAX';
$string['enableajax_help'] = 'Přidává funkce založené na technologii AJAX do celkového přehledu hodnocení, které zjednodušují a urychlují běžné operace. Prohlížeč musí mít zapnutu podporu JavaScriptu.';
$string['enableoutcomes'] = 'Povolit očekávané výstupy';
$string['enableoutcomes_help'] = 'Podpora očekávaných výstupů vzdělávání (známých též jako kompetence, cíle, standardy nebo kritéria) znamená, že při hodnocení činností studentů lze používat jednu nebo více škál, které jsou svázány s verbalizovaným očekávaným výstupem. Tímto povolujete použití tohoto zvláštního typu hodnocení na vašem serveru.';
$string['encoding'] = 'Kódování';
$string['errorcalculationnoequal'] = 'Vzorec musí začínat rovnítkem (např. =1+2)';
$string['errorcalculationunknown'] = 'Neplatný vzorec';
$string['errorgradevaluenonnumeric'] = 'Nenumerická hodnota známky:';
$string['errornocalculationallowed'] = 'Tato položka neumožňuje provádět výpočty';
$string['errornocategorisedid'] = 'Nelze získat id nekategorizovaných';
$string['errornocourse'] = 'Nepodařilo se získat informace o kurzu';
$string['errorreprintheadersnonnumeric'] = 'Nenumerická hodnota v opakujícím se záhlaví';
$string['errorsavegrade'] = 'Nepodařilo se uložit známku';
$string['errorupdatinggradecategoryaggregateonlygraded'] = 'Chyba aktualizace  "Souhrn neprázdných hodnocení" nastavení hodnocení kategorie ID {$a->id}';
$string['errorupdatinggradecategoryaggregateoutcomes'] = 'Chyba aktualizace  "Do souhrnu zahrnout výstupy"  nastavení hodnocení kategorie ID {$a->id}';
$string['errorupdatinggradecategoryaggregatesubcats'] = 'Chyba aktualizace  "Souhrn zahrnující podkategorie"  nastavení hodnocení kategorie ID {$a->id}';
$string['errorupdatinggradecategoryaggregation'] = 'Chyba aktualizace typu hodnocení kategorie ID {$a->id}';
$string['errorupdatinggradeitemaggregationcoef'] = 'Chyba aktualizace koeficientu hodnocení (váha nebo přičtení ke známce) u položky ID {$a->id}';
$string['excluded'] = 'Vyřazeno';
$string['excluded_help'] = '<p>Je-li zapnuta volba Vyřazeno, bude tato známka vyloučena ze všech výpočtů souhrnné známky na úrovni nadřazené položky hodnocení nebo kategorie. Tudíž souhrnnou známku neovlivní.</p>';
$string['expand'] = 'Rozbalit kategorii';
$string['export'] = 'Export';
$string['exportalloutcomes'] = 'Exportovat všechny očekávané výstupy';
$string['exportfeedback'] = 'Zahrnout komentář v exportu';
$string['exportonlyactive'] = 'Vyžadovat platný zápis do kurzu';
$string['exportplugins'] = 'Moduly pro export';
$string['exportsettings'] = 'Nastavení exportu';
$string['exportto'] = 'Exportovat do';
$string['extracreditwarning'] = 'Poznámka: Pokud nastavíte všechny položky v kategorii jako \'Extra bodový zisk\', vyloučíte je z dalších výpočtů známek. Kategorie totiž nebude obsahovat žádný celkový počet bodů.';
$string['feedback'] = 'Komentář';
$string['feedbackadd'] = 'Přidat komentář';
$string['feedbackedit'] = 'Upravit komentář';
$string['feedback_help'] = '<p>Poznámky přidávané učitelem ke známkám. Může se jednat o rozsáhlé osobní sdělení stejně jako o nějaký jednoduchý kód odkazující se na vaše zaběhnuté způsoby a systémy.</p>';
$string['feedbacksaved'] = 'Komentář uložen';
$string['feedbackview'] = 'Zobrazit komentář';
$string['finalgrade'] = 'Výsledná známka';
$string['finalgrade_help'] = '<p>Uložená výsledná známka po provedení všech výpočtů.</p>';
$string['fixedstudents'] = 'Ukotvit seznam studentů';
$string['fixedstudents_help'] = 'V případě potřeby se objeví vodorovný posuvník pod sloupci se známkami.
Sloupec se jmény studentů bude viditelný vždy.';
$string['forceoff'] = 'Vnutit: Vypnuto';
$string['forceon'] = 'Vnutit: Zapnuto';
$string['forelementtypes'] = 'pro vybrané: {$a}';
$string['forstudents'] = 'Pro studenty';
$string['full'] = 'Úplný';
$string['fullmode'] = 'Úplný režim';
$string['fullview'] = 'Úplný režim';
$string['generalsettings'] = 'Obecné nastavení';
$string['grade'] = 'Známka';
$string['gradeadministration'] = 'Správa známek';
$string['gradeanalysis'] = 'Analýza hodnocení';
$string['gradebook'] = 'Klasifikace';
$string['gradebookhiddenerror'] = 'Klasifikace je momentálně studentům skrytá.';
$string['gradebookhistories'] = 'Historie známek';
$string['gradeboundary'] = 'Meze slovní známky';
$string['gradeboundary_help'] = '<p>Procentuální hranice, nad kterou bude přiřazována slovní známka (pokud je použit způsob zobrazení Slovní známka).</p>';
$string['gradecategories'] = 'Kategorie známek';
$string['gradecategory'] = 'Kategorie známek';
$string['gradecategoryonmodform'] = 'Kategorie známek';
$string['gradecategoryonmodform_help'] = 'Toto nastavení určuje kategorii, do níž budou známky z této aktivity zařazeny.';
$string['gradecategorysettings'] = 'Nastavení kategorizace známek';
$string['gradedisplay'] = 'Zobrazení známek';
$string['gradedisplaytype'] = 'Typ zobrazení známek';
$string['gradedisplaytype_help'] = '<p>Určuje, jak budou zobrazeny známky v celkovém přehledu hodnocení a v přehledu hodnocení jednoho uživatele. Známky mohou být zobrazeny jako skutečně udělené známky (body), jako procenta (ve vztahu k nejnižší a nejvyšší možné hodnotě) nebo jako slovní známka.</p>';
$string['gradedon'] = 'Známkování: {$a}';
$string['gradeexport'] = 'Export hodnocení';
$string['gradeexportdecimalpoints'] = 'Desetinná místa v exportovaných známkách';
$string['gradeexportdecimalpoints_desc'] = 'Počet desetinných míst, která budou zobrazena při exportu. Toto nastavení můžete v průběhu exportu měnit.';
$string['gradeexportdisplaytype'] = 'Typ zobrazení exportovaných známek';
$string['gradeexportdisplaytype_desc'] = 'Během exportu mohou být známky zobrazeny jako skutečně získané známky (skutečná hodnota), jako procenta (relativně vůči nejnižší a nejvyšší možné) nebo jako slovní známky (např. písmena či slova). Toto nastavení lze pro každý export ještě měnit.';
$string['gradeforstudent'] = '{$a->student}<br />{$a->item} {$a->feedback}';
$string['gradehelp'] = 'Nápověda ke známkám';
$string['gradehistorylifetime'] = 'Životnost historie známek';
$string['gradehistorylifetime_help'] = 'Po jak dlouhou dobu uchovávat historii změn v tabulkách hodnocení. Doporučuje se nastavit co nejdelší. Pokud pozorujete problémy s výkonem nebo máte limitované databázové zdroje, můžete zkusit nastavit menší hodnotu.';
$string['gradeimport'] = 'Import hodnocení';
$string['gradeitem'] = 'Položka hodnocení';
$string['gradeitemaddusers'] = 'Vyřadit z hodnocení';
$string['gradeitemadvanced'] = 'Pokročilé volby položky hodnocení';
$string['gradeitemadvanced_help'] = 'Vyberte všechny prvky, které by měly být při editaci položek hodnocení zobrazeny jako pokročilé.';
$string['gradeitemislocked'] = 'Tato činnost je v klasifikaci zamknutá. Žádné změny v jejích známkách se do klasifikace nezkopírují, dokud nebude činnost odemknuta.';
$string['gradeitemlocked'] = 'Známkování uzamknuto';
$string['gradeitemmembersselected'] = 'Vyřazeni z hodnocení';
$string['gradeitemnonmembers'] = 'Zahrnuti do hodnocení';
$string['gradeitemremovemembers'] = 'Zahrnout do hodnocení';
$string['gradeitems'] = 'Položky hodnocení';
$string['gradeitemsettings'] = 'Nastavení položky hodnocení';
$string['gradeitemsinc'] = 'Zahrnuté položky hodnocení';
$string['gradeletter'] = 'Slovní známka';
$string['gradeletter_help'] = '<p>Písmeno nebo jiný symbol reprezentující definovaný interval známek.</p>';
$string['gradeletternote'] = 'Chcete-li odstranit slovní známku, odstraňte obsah kteréhokoli ze<br />tří textových polí pro tuto známku a stiskněte \'Uložit změny\'.';
$string['gradeletters'] = 'Slovní známky';
$string['gradelocked'] = 'Známka je uzamknuta';
$string['gradelong'] = '{$a->grade} / {$a->max}';
$string['grademax'] = 'Nejvyšší známka';
$string['grademax_help'] = '<p>Při použití typu známky "hodnota" může být nastavena nejvyšší možná známka. U známkovaných modulů činností se nejvyšší možná známka definuje ve formuláři pro nastavení příslušného modulu.</p>';
$string['grademin'] = 'Nejnižší možná známka';
$string['grademin_help'] = '<p>Při použití typu známky "hodnota" může být nastavena nejnižší možná známka.</p>';
$string['gradeoutcomeitem'] = 'Položka hodnocení - očekávaný výstup';
$string['gradeoutcomes'] = 'Očekávaný výstup';
$string['gradeoutcomescourses'] = 'Očekávané výstupy v kurzu';
$string['gradepass'] = 'Potřebná známka';
$string['gradepass_help'] = '<p>Zde lze nastavit hraniční známku, kterou uživatelé musejí získat, aby tuto položku hodnocení zdárně absolvovali.</p>';
$string['gradepreferences'] = 'Předvolby známky';
$string['gradepreferenceshelp'] = 'Nápověda k předvolbám hodnocení';
$string['gradepublishing'] = 'Povolit zveřejnění';
$string['gradepublishing_help'] = 'Povolit zveřejňování exportů a importování zveřejněných známek. Exportované známky mohou být dostupné pomocí URL bez nutnosti přihlášení se do Moodlu. Známky mohou být importovány otevřením takové URL (do Moodlu tak můžete tímto způsobem importovat známky zveřejněné na jiném serveru). Ve výchozím nastavení mohou tuto funkci používat pouze správci. Poučte vaše uživatele předtím, než jim přidělíte potřebná oprávnění pro použití této funkce, o souvisejících rizicích (nebezpečí sdílených bookmarků, vliv akcelerátorů stahování, omezení IP adres apod.).';
$string['gradereport'] = 'Celkový přehled hodnocení';
$string['graderreport'] = 'Celkový přehled hodnocení';
$string['grades'] = 'Známky';
$string['gradesforuser'] = 'Známky uživatele {$a->user}';
$string['gradesonly'] = 'Pouze známky';
$string['gradessettings'] = 'Nastavení známky';
$string['gradetype'] = 'Typ známky';
$string['gradetype_help'] = '<p>Určuje použitý typ známky: "žádná" (hodnocení není možné), "hodnota" (umožňuje nastavit nejvyšší a nejnižší možnou známku), "škála" (umožňuje nastavení škály) nebo "text" (umožňuje pouze komentáře). Pouze známky typu "hodnota" nebo "škála" mouhou být započítávány do souhrnných známek. U známkovaných modulů činností se typ známky definuje ve formuláři pro nastavení příslušného modulu.</p>';
$string['gradeview'] = 'Zobrazit známku';
$string['gradeweighthelp'] = 'Nápověda k vahám známek';
$string['groupavg'] = 'Skupinový průměr';
$string['hidden'] = 'Skryto';
$string['hiddenasdate'] = 'Zobrazit datum u skrytých známek';
$string['hiddenasdate_help'] = 'Pokud uživatel nemůže vidět udělenou známku, zobraz namísto \'-\' datum odevzdání.';
$string['hidden_help'] = 'Zda se mají známky skrýt před studenty. Je možno rovněž nastavit skrytí známek až do jistého data.';
$string['hiddenuntil'] = 'Skryto do';
$string['hiddenuntildate'] = 'Skryto do: {$a}';
$string['hideadvanced'] = 'Skrýt pokročilé možnosti';
$string['hideaverages'] = 'Skrýt průměry';
$string['hidecalculations'] = 'Skrýt výpočty';
$string['hidecategory'] = 'Skryto';
$string['hideeyecons'] = 'Skrýt ikonu "ukázat/skrýt"';
$string['hidefeedback'] = 'Skrýt komentáře';
$string['hideforcedsettings'] = 'Skrýt vnucené nastavení';
$string['hideforcedsettings_help'] = 'Nezobrazovat vynucená nastavení v uživatelském rozhraní známkování.';
$string['hidegroups'] = 'Skrýt skupiny';
$string['hidelocks'] = 'Skrýt zámky';
$string['hidenooutcomes'] = 'Zobrazit očekávané výstupy';
$string['hidequickfeedback'] = 'Skrýt Rychlý komentář';
$string['hideranges'] = 'Skrýt rozsahy';
$string['hidetotalifhiddenitems'] = 'Skrýt výsledky zahrnující skryté položky';
$string['hidetotalifhiddenitems_help'] = 'Toto nastavení určuje, zda se mají studentům zobrazit výsledné známky, pokud jsou v nich zahrnuty nějaké skryté položky. Nemají-li být zobrazeny, bude namísto nich uvedena pouze pomlčka. Pokud se mají zobrazit, lze dále nastavit, zda se to výsledné známky započítávají i skryté dílčí položky či nikoliv.

Pokud nejsou skryté položky zahrnuty do výsledné známky, uvidí učitelé a studenti rozdílné hodnoty výsledných známek, neboť učitelé vždy vidí všechny známky (včetně skrytých). Pokud jsou skryté položky zahrnuty do výpočtu souhrnné známky, mohou být studenti schopni dopočítat si jejich hodnotu.';
$string['hidetotalshowexhiddenitems'] = 'Zobrazovat výslednou známku bez započítání skrytých známek';
$string['hidetotalshowinchiddenitems'] = 'Zobrazovat výslednou známku vypočítanou i ze skrytých známek';
$string['hideverbose'] = 'Skrýt {$a->category} {$a->itemmodule} {$a->itemname}';
$string['highgradeascending'] = 'Třídit podle známky vzestupně';
$string['highgradedescending'] = 'Třídit podle známky sestupně';
$string['highgradeletter'] = 'Do';
$string['identifier'] = 'Identifikovat uživatele podle';
$string['idnumbers'] = 'Identifikátory ID';
$string['import'] = 'Import';
$string['importcsv'] = 'Importovat CSV';
$string['importcustom'] = 'Importovat jako výstupy vlastní pouze pro tento kurz';
$string['importerror'] = 'Objevila se chyba. Skript nebyl volán se správnými parametry.';
$string['importfailed'] = 'Import selhal';
$string['importfeedback'] = 'Importovat komentáře';
$string['importfile'] = 'Importovat soubor';
$string['importfilemissing'] = 'Nebyl obdržen žádný soubor. Jděte zpět do formuláře a ujistěte se že nahráváte platný soubor.';
$string['importfrom'] = 'Importovat z';
$string['importoutcomenofile'] = 'Nahraný soubor je prázdný nebo poškozený. Prosím ověřte, že používáte platný soubor. Problém se objevil na řádku {$a}. Taková chyba se může objevit, pokud daný řádek nemá tolik tolik sloupců, kolik má první řádek se záhlavním nebo pokud v souboru chybí záhlaví. Prohlédněte si formát exportovaného souboru pro ilustraci platného záhlaví.';
$string['importoutcomes'] = 'Importovat očekávané výstupy';
$string['importoutcomes_help'] = 'Výsledky mohou být importovány pomocí CSV souboru ve stejném formátu  export výsledků v CSV souboru.';
$string['importoutcomesuccess'] = 'Importován výstup "{$a->name}" s identifikátorem #{$a->id}';
$string['importplugins'] = 'Moduly pro import';
$string['importpreview'] = 'Náhled importu';
$string['importsettings'] = 'Nastavení importu';
$string['importskippednomanagescale'] = 'Nemáte oprávnění vytvářet nové škály. Očekávaný výstup "{$a}" byl přeskočen, protože vyžaduje vytvoření nové škály.';
$string['importskippedoutcome'] = 'Očekávaný výstup s krátkým názvem "{$a}" již v tomto kontextu existuje. Stejně pojmenovaný očekávaný výstup v souboru byl přeskočen.';
$string['importstandard'] = 'Importovat jako standardní výstupy pro celý server';
$string['importsuccess'] = 'Import proběhl úspěšně';
$string['importxml'] = 'Importovat XML';
$string['includescalesinaggregation'] = 'Zahrnout škály v souhrnných známkách';
$string['includescalesinaggregation_help'] = 'Zda se mají škály započítat jako čísla do všech souhrnných známek ve všech klasifikacích všech kurzů. UPOZORNĚNÍ: změna tohoto nastavení si vynutí přepočítání všech souhrnných známek.';
$string['incorrectcourseid'] = 'Nesprávné ID kurzu';
$string['incorrectcustomscale'] = '(Neplatná vlastní škála - zvolte jinou)';
$string['incorrectminmax'] = 'Nejnižší musí být nižší než nejvyšší';
$string['inherit'] = 'Dědit';
$string['intersectioninfo'] = 'Student/Známka';
$string['item'] = 'Položka';
$string['iteminfo'] = 'Informace k položce';
$string['iteminfo_help'] = '<p>Prostor pro doplňující informace o položce hodnocení. Vložený text se nikde nezobrazuje.</p>';
$string['itemname'] = 'Název položky';
$string['itemnamehelp'] = 'Název položky. U známkovaných činností se přebírá z modulu.';
$string['items'] = 'Položky';
$string['itemsedit'] = 'Upravit položku hodnocení';
$string['keephigh'] = 'Uvažovat pouze X nejvyšších';
$string['keephigh_help'] = 'Je-li zde nastavena nějaká hodnota X, pak bude uvažováno pouze X nejvyšších (nejlepších) známek.';
$string['keymanager'] = 'Správa klíčů';
$string['lessthanmin'] = 'Známka z položky hodnocení "{$a->itemname}" u uživatele {$a->username} je menší než nejnižší povolená.';
$string['letter'] = 'Slovní známka';
$string['lettergrade'] = 'Slovní známka';
$string['lettergradenonnumber'] = 'Nenumerická hodnota v Od a/nebo Do';
$string['letterpercentage'] = 'Slovní známka (procenta)';
$string['letterreal'] = 'Slovní známka (skutečná hodnota)';
$string['letters'] = 'Slovní známky';
$string['linkedactivity'] = 'Propojená činnost';
$string['linkedactivity_help'] = '<p>Volitelné nastavení. Propojuje tuto položku hodnocení s některým z modulů činností. Tímto způsobem můžete měřit výkon studenta podle kritérií neuvažovaných ve známce za danou činnost.</p>';
$string['linktoactivity'] = 'Odkaz na činnost {$a->name}';
$string['lock'] = 'Zamknout';
$string['locked'] = 'Zamknuto';
$string['locked_help'] = 'Je-li zaškrtnuto, nebude hodnota zanesené známky aktualizována příslušným modulem činnosti.';
$string['locktime'] = 'Zamknout po';
$string['locktimedate'] = 'Zamknuto po: {$a}';
$string['lockverbose'] = 'Zamknout {$a->category} {$a->itemmodule} {$a->itemname}';
$string['lowest'] = 'Nejhorší';
$string['lowgradeletter'] = 'Od';
$string['manualitem'] = 'Ruční položka';
$string['mapfrom'] = 'Mapovat z';
$string['mappings'] = 'Mapování položek hodnocení';
$string['mapto'] = 'Mapovat na';
$string['max'] = 'Nejlepší';
$string['maxgrade'] = 'Nejlepší možná známka';
$string['meanall'] = 'Všechny zmámky';
$string['meangraded'] = 'Neprázdné známky';
$string['meanselection'] = 'Známky vybrané pro průměry ve sloupci';
$string['meanselection_help'] = 'Zda mají být buňky, které neobsahují žádnou známku, zahrnuty při výpočtu průměru v každém sloupci.';
$string['median'] = 'Medián';
$string['min'] = 'Nejhorší';
$string['missingscale'] = 'Musí být zvolená škála';
$string['mode'] = 'Modus';
$string['morethanmax'] = 'Známka z položky hodnocení "{$a->itemname}" z uživatele  {$a->username} je větší než nejvyšší možná.';
$string['moveselectedto'] = 'Přesunout označené položky do';
$string['movingelement'] = 'Přesun {$a}';
$string['multfactor'] = 'Vynásobit známky';
$string['multfactor_help'] = '<p>Činitel, kterým budou vynásobeny všechny známky této položky hodnocení.</p>';
$string['mypreferences'] = 'Mé předvolby';
$string['myreportpreferences'] = 'Mé předvolby přehledu';
$string['navmethod'] = 'Metoda navigace';
$string['neverdeletehistory'] = 'Nikdy neodstraňovat historii';
$string['newcategory'] = 'Nová kategorie';
$string['newitem'] = 'Nová položka hodnocení';
$string['newoutcomeitem'] = 'Nový očekávaný výstup';
$string['no'] = 'Ne';
$string['nocategories'] = 'V tomto kurzu nebylo možno přidat nebo nalézt kategorie známek';
$string['nocategoryname'] = 'Nebylo dáno jméno kategorie';
$string['nocategoryview'] = 'Žádná kategorie k zobrazení pro';
$string['nocourses'] = 'Nenalezeny žádné kurzy';
$string['noforce'] = 'Nevnucovat';
$string['nogradeletters'] = 'Nebyly nastaveny slovní známky';
$string['nogradesreturned'] = 'Nebyly nalezeny žádné známky';
$string['noidnumber'] = 'Žádné identifikátory';
$string['nolettergrade'] = 'Žádné slovní známky pro';
$string['nomode'] = 'NA';
$string['nonnumericweight'] = 'Vložena nenumerická hodnota pro';
$string['nonunlockableverbose'] = 'Tato známka nemůže být odemknuta, dokud nebude odemknuta celá položka "{$a->itemname}"';
$string['nonweightedpct'] = 'nevážená %';
$string['nooutcome'] = 'Bez očekávaných výstupů';
$string['nooutcomes'] = 'Hodnocené výstupy musí být provázány s očekávanými výstupy kurzu, ale v tomto kurzu nebyly ještě žádné očekávané výstupy nadefinovány. Přejete si je nyní přidat?';
$string['nopublish'] = 'Nezveřejňovat';
$string['norolesdefined'] = 'Nejsou definované žádné role v nabídce Správa stránek > Hodnocení > Obecné nastavení > Role pro hodnocení';
$string['noscales'] = 'Očekávané výstupy lze hodnotit pomocí některé z vlastních nebo standardních (globálních) škál. V tomto kurzu není žádná škála k dispozici. Přejete si nyní škálu přidat?';
$string['noselectedcategories'] = 'nebyly vybrány žádné kategorie';
$string['noselecteditems'] = 'nebyly vybrány žádné položky';
$string['notteachererror'] = 'Přístup k těmto údajům mají pouze učitelé.';
$string['nousersloaded'] = 'Nebyli nahráni žádní uživatelé';
$string['numberofgrades'] = 'Počet známek';
$string['onascaleof'] = 'na škále od {$a->grademin} do {$a->grademax}';
$string['operations'] = 'Úkony';
$string['options'] = 'Možnosti';
$string['outcome'] = 'Očekávaný výstup';
$string['outcomeassigntocourse'] = 'Přidat další očekávaný výstup kurzu';
$string['outcomecategory'] = 'Vytvořit očekávané výstupy v kategorii';
$string['outcomecategorynew'] = 'Nová kategorie';
$string['outcomeconfirmdelete'] = 'Jste si jistí, že chcete odstranit očekávaný výstup "{$a}"?';
$string['outcomecreate'] = 'Přidat nový očekávaný výstup';
$string['outcomedelete'] = 'Odstranit očekávaný výstup';
$string['outcomefullname'] = 'Celý název';
$string['outcome_help'] = 'Určuje očekávaný výstup, který bude tato položka reprezentovat v klasifikaci. Jsou uvedeny pouze očekávané výstupy zahrnuté v tomto kurzu.';
$string['outcomeitem'] = 'Hodnocený očekávaný výstup';
$string['outcomeitemsedit'] = 'Upravit hodnocený výstup';
$string['outcomereport'] = 'Přehled očekávaných výstupů';
$string['outcomes'] = 'Očekávané výstupy';
$string['outcomescourse'] = 'Očekávané výstupy použité v kurzu';
$string['outcomescoursecustom'] = 'Vlastní použitý (neodstrňovat)';
$string['outcomescoursenotused'] = 'Standardní nepoužitý';
$string['outcomescourseused'] = 'Standardní použitý (neodstraňovat)';
$string['outcomescustom'] = 'Vlastní očekávané výstupy';
$string['outcomeshortname'] = 'Krátký název';
$string['outcomesstandard'] = 'Standardní očekávané výstupy';
$string['outcomesstandardavailable'] = 'Dostupné standardní očekávané výstupy';
$string['outcomestandard'] = 'Standardní očekávané výstupy';
$string['outcomestandard_help'] = '<p>Standardní očekávaný výstup je dostupný na celém serveru ve všech kurzech.</p>';
$string['overallaverage'] = 'Celkový průměr';
$string['overridden'] = 'Přenastaveno';
$string['overridden_help'] = '<p>Tento příznak znemožňuje další pokusy o automatickou úpravu hodnoty známky. Většinou je nastaven interně samotným Moodlem, ale může být ručně zapnut nebo vypnut pomocí tohoto formulářového prvku.</p>';
$string['overriddennotice'] = 'Vaše výsledná známka za tuto činnost byla ručně upravena.';
$string['overridesitedefaultgradedisplaytype'] = 'Přenastavit výchozí hodnoty serveru';
$string['overridesitedefaultgradedisplaytype_help'] = '<p>Zda se má povolit přenastavování výchozích hodnot týkajících se zobrazování známek na tomto serveru. Aktivují se formulářové prvky pro nastavení vlastních slovních známek a jejich hraničních hodnot dle vašeho výběru.</p>';
$string['parentcategory'] = 'Nadřazená kategorie';
$string['pctoftotalgrade'] = '% celkové známky';
$string['percent'] = 'Procenta';
$string['percentage'] = 'Procentuální hodnota';
$string['percentageletter'] = 'Procenta (slovní známka)';
$string['percentagereal'] = 'Procenta (skutečná hodnota)';
$string['percentascending'] = 'Třídit podle procent vzestupně';
$string['percentdescending'] = 'Třídit podle procent sestupně';
$string['percentshort'] = '%';
$string['plusfactor'] = 'Přičíst ke známkám';
$string['plusfactor_help'] = '<p>Číslo, které bude přičteno ke každé známce v této položce. Známky se nejprve násobí hodnotou činitelem uvedeným v poli "Násobit známky", teprve poté se k nim přičítá hodnota pole "Přičíst ke známkám".</p>';
$string['points'] = 'bodů';
$string['pointsascending'] = 'Třídit podle bodů vzestupně';
$string['pointsdescending'] = 'Třídit podle bodů sestupně';
$string['positionfirst'] = 'První';
$string['positionlast'] = 'Poslední';
$string['preferences'] = 'Předvolby';
$string['prefgeneral'] = 'Obecné';
$string['prefletters'] = 'Slovní známky a jejich hraniční hodnoty';
$string['prefrows'] = 'Zvláštní řádky';
$string['prefshow'] = 'Ukázat/skrýt';
$string['previewrows'] = 'Náhled řádků';
$string['profilereport'] = 'Přehled známek uživatele';
$string['profilereport_help'] = 'Přehled hodnocení použitý na stránce s uživatelským profilem';
$string['publishing'] = 'Zveřejnění';
$string['quickfeedback'] = 'Rychlý komentář';
$string['quickgrading'] = 'Rychlé hodnocení';
$string['quickgrading_help'] = '<p>Rychlé hodnocení vkládá malé textové pole do všech buněk tabulky v celkovém přehledu hodnocení. Můžete tak najednou vyplnit větší množství známek a všechny je uložit najednou pomocí tlačítka Aktualizovat.</p>';
$string['range'] = 'Rozsah';
$string['rangedecimals'] = 'Desetinná místa';
$string['rangedecimals_help'] = 'Počet desetinných míst pro zobrazení rozsahu známky.';
$string['rangesdecimalpoints'] = 'Počet desetinných míst v rozsahu';
$string['rangesdecimalpoints_help'] = '<p>Určuje zobrazovaný počet desetinných míst v rozsahu hodnot každého sloupce. Toto nastavení může být pro jednotlivé položky hodnocení změněno.</p>';
$string['rangesdisplaytype'] = 'Typ zobrazení rozsahu';
$string['rangesdisplaytype_help'] = '<p>Jak zobrazovat rozsahy hodnot. Je-li zvoleno "Dědit", je použit stejný typ zobrazení, jaký je nastaven u hodnot v daném sloupci.</p>';
$string['rank'] = 'Umístění';
$string['rawpct'] = 'Hrubých %';
$string['real'] = 'Skutečná hodnota';
$string['realletter'] = 'Skutečná hodnota (slovní známka)';
$string['realpercentage'] = 'Skutečná hodnota (procenta)';
$string['recovergradesdefault'] = 'Obnovit výchozí hodnocení';
$string['recovergradesdefault_help'] = 'Při obnoveném zápisu studenta do kurzu se obnoví staré hodnocení.';
$string['regradeanyway'] = 'Přesto přeznámkovat';
$string['removeallcoursegrades'] = 'Odstranit všechny známky';
$string['removeallcourseitems'] = 'Odstranit všechny položky a kategorie';
$string['report'] = 'Přehled';
$string['reportdefault'] = 'Výchozí pro přehled ({$a})';
$string['reportplugins'] = 'Typy přehledů';
$string['reportsettings'] = 'Nastavení přehledu';
$string['reprintheaders'] = 'Opakovat záhlaví';
$string['respectingcurrentdata'] = 'ponechat stávající konfiguraci nezměněnou';
$string['rowpreviewnum'] = 'Náhled řádků';
$string['savechanges'] = 'Uložit změny';
$string['savepreferences'] = 'Uložit předvolby';
$string['scaleconfirmdelete'] = 'Skutečně chcete odstranit škálu "{$a}"?';
$string['scaledpct'] = 'Škálovaná %';
$string['seeallcoursegrades'] = 'Zobrazit všechny známky v kurzu';
$string['selectalloroneuser'] = 'Vyberte všechny nebo jednoho uživatele';
$string['selectauser'] = 'Vyberte uživatele';
$string['selectdestination'] = 'Vyberte cíl pro {$a}';
$string['separator'] = 'Oddělovač';
$string['sepcomma'] = 'Čárka';
$string['septab'] = 'Tabulátor';
$string['setcategories'] = 'Nastavit kategorie';
$string['setcategorieserror'] = 'Před nastavením jejich vah musíte nejdřive ve vašem kurzu definovat kategorie známek.';
$string['setgradeletters'] = 'Nastavit slovní známky';
$string['setpreferences'] = 'Nastavit předvolby';
$string['setting'] = 'Nastavení';
$string['settings'] = 'Nastavení';
$string['setweights'] = 'Nastavit váhy';
$string['showactivityicons'] = 'Ukázat ikony činností';
$string['showactivityicons_help'] = '<p>Zda zobrazovat ikony činností vedle jejich názvů.</p>';
$string['showallhidden'] = 'Zobrazit skryté';
$string['showallstudents'] = 'Ukázat všechny studenty';
$string['showanalysisicon'] = 'Zobrazit ikonu analýzy hodnocení';
$string['showanalysisicon_desc'] = 'Zda se má zobrazit ikona analýzy hodnocení. Pokud daná činnost podporuje hodnocení, ikona odkazuje na stránku s detailním vysvětlením, jak bylo hodnocení získáno.';
$string['showaverage'] = 'Zobrazit průměr';
$string['showaverage_help'] = 'Zda se má zobrazovat sloupec s průměrnou hodnotou. Studenti mohou být schopni odhadnout známky ostatních studentů, je-li průměr počítán z malého množství známek. Z důvodů výkonnosti je průměr pouze přibližný, pokud závisí na nějaké skryté položce.';
$string['showaverages'] = 'Ukázat průměry sloupců';
$string['showaverages_help'] = 'Zda zobrazovat průměrnou hodnotu každého sloupce.';
$string['showcalculations'] = 'Ukázat výpočty';
$string['showcalculations_help'] = 'Zda zobrazovat ikony kalkulátoru u každé položky hodnocení a kategorie, nápovědu při najetí myši na vypočítanou položku a vizuální indikátor, že daný sloupec je vypočítaný.';
$string['showeyecons'] = 'Ukázat ikony "ukázat/skrýt"';
$string['showeyecons_help'] = 'Zda zobrazovat ikonu "ukázat/skrýt" u každé známky (ovlivňuje viditelnost dané známky pro uživatele).';
$string['showfeedback'] = 'Ukázat komentáře';
$string['showfeedback_help'] = 'Zda se má zobrazit sloupec obsahující doplňující komentáře ke známkám.';
$string['showgrade'] = 'Zobrazit známky';
$string['showgrade_help'] = 'Zda se má zobrazit sloupec se známkami.';
$string['showgroups'] = 'Ukázat skupiny';
$string['showhiddenitems'] = 'Ukázat skryté položky';
$string['showhiddenitems_help'] = 'Určuje, jak se mají zobrazovat skryté položky hodnocení a jejich názvy.

* Zobrazit skryté - studenti vidí názvy skrytých položek, ale nikoliv známku samotnou
* Pouze skryté do - položky s nastaveným datem "skrýt do" jsou zcela skryty až do nastaveného data. Poté je celá položka zobrazena normálně.
* Nezobrazovat - skryté položky se nezobrazují vůbec (ani název, ani známky)';
$string['showhiddenuntilonly'] = 'Pouze skryté do';
$string['showlettergrade'] = 'Ukázat slovní hodnocení';
$string['showlettergrade_help'] = 'Ukázat sloupec slovního hodnocení?';
$string['showlocks'] = 'Ukázat zámky';
$string['showlocks_help'] = 'Zda zobrazovat ikonu zamknout/odemknout u každé známky.';
$string['shownohidden'] = 'Nezobrazovat';
$string['shownooutcomes'] = 'Skrýt výstupy';
$string['shownumberofgrades'] = 'Zobrazovat počet známek v průměrech';
$string['shownumberofgrades_help'] = 'Zda zobrazit počet známek, z nichž byl vypočítán průměr v závorkách za tímto průměrem, např. 45 (34).';
$string['showpercentage'] = 'Ukázat procenta';
$string['showpercentage_help'] = 'Zda zobrazovat procentuální hodnotu u každé položky hodnocení.';
$string['showquickfeedback'] = 'Ukázat Rychlý komentář';
$string['showquickfeedback_help'] = 'Rychlý komentář vkládá malé textové pole do všech buněk tabulky v celkovém přehledu hodnocení. Můžete tak najednou vyplnit větší množství komentářů a všechny je uložit najednou pomocí tlačítka Aktualizovat.';
$string['showrange'] = 'Ukázat rozsahy';
$string['showrange_help'] = 'Ukázat sloupec rozsahu?';
$string['showranges'] = 'Ukázat rozsahy';
$string['showranges_help'] = 'Zda přidat řádek pro zobrazení rozsahu známek v každém sloupci.';
$string['showrank'] = 'Ukázat umístění';
$string['showrank_help'] = 'Zda zobrazovat pro každou položku hodnocení umístění daného uživatele oproti zbytku třídy.';
$string['showuserimage'] = 'Zobrazovat fotografie uživatelů';
$string['showuserimage_help'] = 'Zda v celkovém přehledu hodnocení zobrazovat fotografie uživatelů vedle jejich jména.';
$string['showverbose'] = 'Zobrazit {$a->category} {$a->itemmodule} {$a->itemname}';
$string['showweight'] = 'Ukázat váhy';
$string['showweight_help'] = 'Zda se má zobrazit sloupec s váhami známek.';
$string['simpleview'] = 'Zjednodušený režim';
$string['sitewide'] = 'Pro celý server';
$string['sort'] = 'řadit';
$string['sortasc'] = 'Řadit vzestupně';
$string['sortbyfirstname'] = 'Řadit podle jména';
$string['sortbylastname'] = 'Řadit podle příjmení';
$string['sortdesc'] = 'Řadit sestupně';
$string['standarddeviation'] = 'Standardní odchylka';
$string['stats'] = 'Statistika';
$string['statslink'] = 'Stat';
$string['student'] = 'Student';
$string['studentsperpage'] = 'Studentů na stránku';
$string['studentsperpage_help'] = 'Počet studentů na stránce v celkovém přehledu hodnocení.';
$string['studentsperpagereduced'] = 'Snižte maximální počet studentů na stránce z {$a->originalstudentsperpage} na {$a->studentsperpage}. Zvažte nastavení PHP max_input_vars from {$a->maxinputvars}.';
$string['subcategory'] = 'Normální kategorie';
$string['submissions'] = 'Odevzdané úkoly';
$string['submittedon'] = 'Odevzdáno: {$a}';
$string['switchtofullview'] = 'Přepnout do úplného režimu';
$string['switchtosimpleview'] = 'Přepnout do zjednodušeného režimu';
$string['tabs'] = 'Záložky';
$string['topcategory'] = 'Nadkategorie';
$string['total'] = 'Celkem';
$string['totalweight100'] = 'Celková váha je rovna 100';
$string['totalweightnot100'] = 'Celková váha není rovna 100';
$string['turnfeedbackoff'] = 'Vypnout komentáře';
$string['turnfeedbackon'] = 'Zapnout komentáře';
$string['typenone'] = 'Žádná';
$string['typescale'] = 'Škála';
$string['typescale_help'] = '<p>Pro typ "škála" je potřeba zvolit typ použité škály. U známkovaných modulů činností se použitá škála definuje ve formuláři pro nastavení příslušného modulu.</p>';
$string['typetext'] = 'Text';
$string['typevalue'] = 'Hodnota';
$string['uncategorised'] = 'Nezařazeno';
$string['unchangedgrade'] = 'Známka nezměněná';
$string['unenrolledusersinimport'] = 'Import obsahoval následující známky uživatelů, kteří momentálně nejsou zapsáni v tomto kurzu: {$a}';
$string['unlimitedgrades'] = 'Neomezené známky';
$string['unlimitedgrades_help'] = 'Při výchozím chování jsou hodnoty známek omezeny maximální a minimální možnou hodnotou pro danou položku hodnocení. Tímto nastavením lze tyto limity odstranit a umožnit tak např. vkládat známky nad 100%. Doporučuje se toto nastavení měnit mimo provozní špičku. Dojde k přepočítání všech známek na serveru, což může představovat zvýšené zatížení serveru.';
$string['unlock'] = 'Odemknout';
$string['unlockverbose'] = 'Odemknout {$a->category} {$a->itemmodule} {$a->itemname}';
$string['unused'] = 'Nepoužito';
$string['updatedgradesonly'] = 'Exportovat pouze nové nebo aktualizované známky';
$string['uploadgrades'] = 'Nahrát známky';
$string['useadvanced'] = 'Zobrazit pokročilé možnosti';
$string['usedcourses'] = 'Použité kurzy';
$string['usedgradeitem'] = 'Použité položky hodnocení';
$string['usenooutcome'] = 'Nepoužívej žádné očekávané výstupy';
$string['usenoscale'] = 'Nepoužívej žádné škály';
$string['usepercent'] = 'Použij procenta';
$string['user'] = 'Uživatel';
$string['userenrolmentsuspended'] = 'Zápis uživatele pozastaven';
$string['usergrade'] = 'Uživatel {$a->fullname} ({$a->useridnumber}), položka {$a->gradeidnumber}';
$string['userpreferences'] = 'Uživatelské předvolby';
$string['useweighted'] = 'Použij váhy';
$string['verbosescales'] = 'Doslovné škály';
$string['viewbygroup'] = 'Skupina';
$string['viewgrades'] = 'Zobrazit známky';
$string['warningexcludedsum'] = 'Upozornění: vyřazování známek nelze kombinovat se způsobem výpočtu výsledné známky jako součtu dílčích známek';
$string['weight'] = 'váha';
$string['weightcourse'] = 'Použij vážené známky pro kurz';
$string['weightedascending'] = 'Třídit podle vážených procent vzestupně';
$string['weighteddescending'] = 'Třídit podle vážených procent sestupně';
$string['weightedpct'] = 'vážená %';
$string['weightedpctcontribution'] = 'vážená';
$string['weightorextracredit'] = 'Váha nebo extra zisk';
$string['weights'] = 'Váhy';
$string['weightsedit'] = 'Upravit váhy a extra zisky';
$string['weightuc'] = 'Váha';
$string['writinggradebookinfo'] = 'Zapisuji nastavení klasifikace';
$string['xml'] = 'XML';
$string['yes'] = 'Ano';
$string['yourgrade'] = 'Vaše známka';
