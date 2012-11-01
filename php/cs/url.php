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
 * Strings for component 'url', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   url
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Vyberte proměnnou ...';
$string['clicktoopen'] = 'K otevření dané adresy klikněte na odkaz {$a}';
$string['configdisplayoptions'] = 'Označte všechny možnosti, které by měly být dostupné. Neovlivňuje stávající nastavení. Použijte klávesu Ctrl pro označení více položek.';
$string['configframesize'] = 'Tato hodnota určuje výšku (v pixelech) rámce obsahujícího horní navigační pruh, jsou-li vložený soubor nebo webová stránka zobrazovány včetně horní navigace.';
$string['configrolesinparams'] = 'Povolte, pokud chcete zahrnout přeložené názvy rolí v seznamu dostupných hodnot parametrů.';
$string['configsecretphrase'] = 'Odkazované stránce je možno zaslat šifrovaný parametr vypočítaný jako MD5 hash z IP adresy uživatele a tajného řetězce nastaveného zde, tedy code = md5(IP.secretphrase). Nicméně na tento způsob ochrany před neoprávněným přístupem není radno příliš spoléhat, neboť IP adresa uživatele se může měnit a je často navenek sdílena několika počítači.';
$string['contentheader'] = 'Obsah';
$string['createurl'] = 'Vytvořit studijní materiál typu URL';
$string['displayoptions'] = 'Dostupné možnosti zobrazení';
$string['displayselect'] = 'Zobrazení';
$string['displayselectexplain'] = 'Vyberte typ zobrazení. Ne všechny typy jsou vhodné pro všechny URL.';
$string['displayselect_help'] = 'Toto nastavení v kombinaci s typem odkazovaného zdroje a možnostmi prohlížeče určuje, jak bude daný studijní materiál zobrazen. Nabízené možnosti mohou zahrnovat:

* Automaticky - Nejvhodnější režim je zvolen automaticky.
* Vsadit do stránky - Odkazovaný materiál je zobrazen jako součást Moodle stránky spolu s navigací a postranními bloky.
* Vynutit stažení - Uživateli se nabídne možnost stáhnout si odkazovaný materiál do svého počítače.
* Otevřít - URL se otevře se stávajícím okně prohlížeče (namísto Moodle).
* Pop-up okno - URL se otevře v novém okně, které nebude obsahovat běžné nabídky ani adresní řádek.
* V rámci - URL se otevře uvnitř rámce pod navigačním pruhem a popisem odkazovaného zdroje.
* Nové okno - URL se otevře v běžném novém okně (včetně nabídek a adresního řádku).';
$string['externalurl'] = 'Externí URL';
$string['framesize'] = 'Výška rámu okna';
$string['invalidstoredurl'] = 'Neplatná adresa URL, nelze zobrazit tento materiál.';
$string['invalidurl'] = 'Vložené URL je chybné';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'Modul URL umožňuje učitel webový odkaz jako zdrojový materiál kurzu. Vše co je volně k dispozici on-line, jako jsou dokumenty nebo obrázky může být použito v odkazu; URL nemusí být vlastní stránka na internetových stránkách.

Konkrétní URL webové stránky mohou být kopírovány a vloženy nebo učitel může použít výběr souborů a vybere odkaz z úložiště, jako je Flickr, YouTube nebo Wikimedia (v závislosti na úložiště, které jsou správcem povoleny).

Existuje celá řada možností zobrazení URL, například vložené nebo otevírání v novém okně a rozšířené možnosti pro předávání informací, jako jméno studenta, pokud to URL vyžaduje.

Všimněte si, že odkaz URL může být přidán do jakéhokoli jiného zdroje nebo činnosti prostřednictvím textového editoru.';
$string['modulenameplural'] = 'URL odkazy';
$string['neverseen'] = 'Dosud neprohlíženo';
$string['optionsheader'] = 'Možnosti';
$string['page-mod-url-x'] = 'Jakákoliv stránka modulu URL';
$string['parameterinfo'] = '&amp;parametr=proměnná';
$string['parametersheader'] = 'Parametry';
$string['parametersheader_help'] = 'Některé interní proměnné Moodle mohou být automaticky přidány k odkazovanému URL. Zadejte potřebný název parametru a k němu vyberte odpovídající hodnotu.';
$string['pluginadministration'] = 'Správa URL';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Výška okna (v pixelech)';
$string['popupheightexplain'] = 'Určuje výchozí výšku vyskakovacích oken.';
$string['popupwidth'] = 'Šířka okna (v pixelech)';
$string['popupwidthexplain'] = 'Určuje výchozí šířku vyskakovacích oken.';
$string['printheading'] = 'Zobrazení jména URL';
$string['printheadingexplain'] = 'Zobrazit jméno URL nad obsahem? Některé typy zobrazení nemusí zobrazit název adresy URL, i pokud je povolena.';
$string['printintro'] = 'Zobrazení popisu URL';
$string['printintroexplain'] = 'Zobrazit popis URL pod obsahem? Některé typy zobrazení nemusí zobrazit popis, i pokud je povolen.';
$string['rolesinparams'] = 'Zahrnout názvy rolí do parametrů';
$string['serverurl'] = 'URL server';
$string['url:addinstance'] = 'Přidat nové URL';
$string['url:view'] = 'Zobrazit URL';
