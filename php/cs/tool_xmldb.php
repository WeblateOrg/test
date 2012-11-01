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
 * Strings for component 'tool_xmldb', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   tool_xmldb
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Aktuální';
$string['aftertable'] = 'Za tabulkou:';
$string['back'] = 'Zpět';
$string['backtomainview'] = 'Zpět na hlavní stránku';
$string['cannotuseidfield'] = 'Nelze vložit pole "id", jeho hodnota se přiřazuje automaticky';
$string['change'] = 'Změnit';
$string['charincorrectlength'] = 'Nesprávná délka znakového pole';
$string['checkbigints'] = 'Kontrola BIGINT';
$string['check_bigints'] = 'Vyhledat v DB nesprávný typ celočíselných polí';
$string['checkdefaults'] = 'Kontrola výchozích hodnot';
$string['check_defaults'] = 'Vyhledat nekonzistentní výchozí hodnoty';
$string['checkforeignkeys'] = 'Kontrola cizích klíčů';
$string['check_foreign_keys'] = 'Vyhledat narušené cizí klíče';
$string['checkindexes'] = 'Kontrola indexů';
$string['check_indexes'] = 'Vyhledat v DB chybějící indexy';
$string['checkoraclesemantics'] = 'Kontrola sémantiky';
$string['check_oracle_semantics'] = 'Vyhledat chybné délky sémantik';
$string['completelogbelow'] = '(viz dále výslednou zprávu o hledání)';
$string['confirmcheckbigints'] = 'Tato funkce vyhledá <a href="http://tracker.moodle.org/browse/MDL-11038">celočíselná pole s nesprávně nastaveným typem</a> ve vaší Moodle databázi a vygeneruje (ale nespustí!) SQL příkazy pro jejich opravu.<br /><br />
Tato funkce žádným způsobem nemění obsah databáze, pouze z ní čte definice tabulek. Vygenerovaný SQL kód musíte spustit ručně ve vašem oblíbeném SQL klientovi (nezapomeňte předtím vaši databázi zazálohovat).<br /><br />
Výrazně se doporučuje spustit tuto funkci až po upgrade na poslední stabilní verzi (označované jako "+" verze) vámi používané řady (1.8, 1.9, 2.x, ...).';
$string['confirmcheckdefaults'] = 'Tato funkce vyhledá nekonzistentní výchozí hodnoty ve vaší Moodle databázi a vygeneruje (ale nespustí!) SQL příkazy pro jejich korektní nastavení.<br /><br />
Tato funkce žádným způsobem nemění obsah databáze, pouze z ní čte data. Vygenerovaný SQL kód musíte spustit ručně ve vašem oblíbeném SQL klientovi (nezapomeňte předtím vaši databázi zazálohovat).<br /><br />
Výrazně se doporučuje spustit tuto funkci až po upgrade na poslední stabilní verzi (označované jako "+" verze) vámi používané řady (1.8, 1.9, 2.x, ...).';
$string['confirmcheckindexes'] = 'Tato funkce vyhledá chybějící indexy (angl. indices nebo indexes) ve vaší Moodle databázi a vygeneruje (ale nespustí!) SQL příkazy pro jejich vytvoření.<br /><br />
Tato funkce žádným způsobem nemění obsah databáze, pouze z ní čte data. Vygenerovaný SQL kód musíte spustit ručně ve vašem oblíbeném SQL klientovi (nezapomeňte předtím vaši databázi zazálohovat).<br /><br />
Výrazně se doporučuje spustit tuto funkci až po upgrade na poslední stabilní verzi (označované jako "+" verze) vámi používané řady (1.8, 1.9, 2.x, ...).';
$string['confirmdeletefield'] = 'Jste si úplně jisti, že chcete odstranit pole:';
$string['confirmdeleteindex'] = 'Jste si úplně jisti, že chcete odstranit index:';
$string['confirmdeletekey'] = 'Jste si úplně jisti, že chcete odstranit klíč:';
$string['confirmdeletetable'] = 'Jste si úplně jisti, že chcete odstranit tabulku:';
$string['confirmdeletexmlfile'] = 'Jste si úplně jisti, že chcete odstranit soubor:';
$string['confirmrevertchanges'] = 'Jste si úplně jisti, že chcete vrátit provedené změny:';
$string['create'] = 'Vytvořit';
$string['createtable'] = 'Vytvořit tabulku:';
$string['defaultincorrect'] = 'Nesprávná výchozí hodnota:';
$string['delete'] = 'Odstranit';
$string['delete_field'] = 'Odstranit pole';
$string['delete_index'] = 'Odstranit index';
$string['delete_key'] = 'Odstranit klíč';
$string['delete_table'] = 'Odstranit tabulku';
$string['delete_xml_file'] = 'Odstranit XML soubor';
$string['doc'] = 'Dokumentace';
$string['docindex'] = 'Index dokumentace:';
$string['down'] = 'Dolů';
$string['duplicate'] = 'Duplikovat';
$string['duplicatefieldname'] = 'Již existuje pole s tímto názvem';
$string['duplicatekeyname'] = 'Již existuje klíč s tímto názvem';
$string['duplicatetablename'] = 'Již existuje tabulka s tímto názvem';
$string['edit'] = 'Upravit';
$string['edit_field'] = 'Upravit pole';
$string['edit_field_save'] = 'Uložit pole';
$string['edit_index'] = 'Upravit index';
$string['edit_index_save'] = 'Uložit index';
$string['edit_key'] = 'Upravit klíč';
$string['edit_key_save'] = 'Uložit klíč';
$string['edit_table'] = 'Upravit tabulku';
$string['edit_table_save'] = 'Uložit tabulku';
$string['edit_xml_file'] = 'Upravit XML soubor';
$string['enumvaluesincorrect'] = 'Nesprávné hodnoty pro výčtové pole';
$string['expected'] = 'Očekáváno';
$string['extensionrequired'] = 'Promiňte - na tuto činnost je nutné rozšíření PHP {$a}. Jestliže tuto vlastnost potřebujete, rozšíření nainstalujte. ';
$string['field'] = 'Pole';
$string['fieldnameempty'] = 'Prázdný název pole';
$string['fields'] = 'Pole';
$string['fieldsnotintable'] = 'Pole v tabulce neexistuje';
$string['fieldsusedinindex'] = 'Toto pole je použito jako index';
$string['fieldsusedinkey'] = 'Toto pole je použité jako klíč.';
$string['filenotwriteable'] = 'Do pole nelze zapisovat';
$string['fkviolationdetails'] = 'Cizí klíč{$a->keyname} v tabulce {$a->tablename} je porušený v počtu {$a->numviolations} z celkového počtu řádků: {$a->numrows} ';
$string['floatincorrectdecimals'] = 'Nesprávný počet desetinných čísel v poli s plovoucí čárkou';
$string['floatincorrectlength'] = 'Nesprávná délka pole s plovoucí desetinnou čárkou';
$string['generate_all_documentation'] = 'Celá dokumentace';
$string['generate_documentation'] = 'Dokumentace';
$string['gotolastused'] = 'Jdi k posledně použitému souboru';
$string['incorrectfieldname'] = 'Nesprávný název';
$string['incorrectkeyname'] = 'Nesprávné jméno klíče';
$string['incorrecttablename'] = 'Nesprávný název tabulky';
$string['index'] = 'Index';
$string['indexes'] = 'Indexy';
$string['integerincorrectlength'] = 'Nesprávná délka celočíselného pole';
$string['key'] = 'Klíč';
$string['keynameempty'] = 'Jméno klíče nesní být prázdné';
$string['keys'] = 'Klíče';
$string['listreservedwords'] = 'Seznam rezerovaných slov<br />(používá se k aktualizaci stránky <a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB_reserved_words</a>)';
$string['load'] = 'Nahrát';
$string['main_view'] = 'Hlavní pohled';
$string['masterprimaryuniqueordernomatch'] = 'Pole ve vašem cizím klíči musí být uvedeno ve stejném pořadí, v jakém jsou v UNIQUE KEY v uvedené tabulce.';
$string['missing'] = 'Chybí';
$string['missingindexes'] = 'Nalezeny chybějící indexy';
$string['mustselectonefield'] = 'Musíte vybrat jedno pole, abyste viděli související akce.';
$string['mustselectoneindex'] = 'Musíte vybrat jeden index, abyste viděli související akce.';
$string['mustselectonekey'] = 'Musíte vybrat klíč, abyste viděli související akce.';
$string['newfield'] = 'Nové pole';
$string['newindex'] = 'Nový index';
$string['newkey'] = 'Nový klíč';
$string['newtable'] = 'Nová tabulka';
$string['newtablefrommysql'] = 'Nová tabulka z MySQL';
$string['new_table_from_mysql'] = 'Nová tabulka z MySQL';
$string['nofieldsspecified'] = 'Nebyla určena pole';
$string['nomissingindexesfound'] = 'Nebyly nalezeny chybějící indexy. Není potřeba dalších oprav databáze.';
$string['noviolatedforeignkeysfound'] = 'Nebyly nalezeny žádné porušené cizí klíče';
$string['nowrongdefaultsfound'] = 'Nebyly nalezeny žádné nekonzistentní definice výchozích hodnot. Není potřeba dalších oprav databáze.';
$string['nowrongintsfound'] = 'Nebyly nalezeny problémy v definici celočíselných polí. Není potřeba dalších oprav databáze.';
$string['numberincorrectdecimals'] = 'Nesprávný počet desetinných čísel v číselném poli';
$string['numberincorrectlength'] = 'Nesprávná délka číselného pole';
$string['pluginname'] = 'editor XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'Primární klíč nemůže být nulový (null)';
$string['reserved'] = 'Rezervováno';
$string['reservedwords'] = 'Rezervováná slova';
$string['revert'] = 'Vrátit';
$string['revert_changes'] = 'Vrátit změny';
$string['save'] = 'Uložit';
$string['searchresults'] = 'Výsledky hledání';
$string['selectaction'] = 'Výběr akce:';
$string['selectdb'] = 'Výběr databáze:';
$string['selectfieldkeyindex'] = 'Výběr pole/klíče/indexu:';
$string['selectonecommand'] = 'Vyberte jednu z akcí ze seznamu k zobrazení kódu PHP';
$string['selectonefieldkeyindex'] = 'Vyberte jedno z polí/klíčů/indexů ze seznamu k zobrazení kódu PHP';
$string['selecttable'] = 'Výběr tabulky:';
$string['table'] = 'Tabulka';
$string['tablenameempty'] = 'Název tabulky nemůže být prázdný';
$string['tables'] = 'Tabulky';
$string['unload'] = 'Zavřít';
$string['up'] = 'Nahoru';
$string['view'] = 'Zobrazit';
$string['viewedited'] = 'Zobrazit upravenou';
$string['vieworiginal'] = 'Zobrazit originální';
$string['viewphpcode'] = 'Zobrazit kód PHP';
$string['view_reserved_words'] = 'Zobrazit rezervovaná slova';
$string['viewsqlcode'] = 'Zobrazit kód SQL';
$string['view_structure_php'] = 'Zobrazit strukturu PHP';
$string['view_structure_sql'] = 'Zobrazit strukturu SQL';
$string['view_table_php'] = 'Zobrazit tabulku PHP';
$string['view_table_sql'] = 'Zobrazit tabulku SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Porušené cizí klíče';
$string['violatedforeignkeysfound'] = 'Byly nalezeny porušené cizí klíče';
$string['violations'] = 'Porušené integritní omezení';
$string['wrong'] = 'Chyby';
$string['wrongdefaults'] = 'Nalezeny chybné výchozí hodnoty';
$string['wrongints'] = 'Nalezeny problémy v definici celočíselných polí';
$string['wronglengthforenum'] = 'Nesprávná délka výčtového pole';
$string['wrongreservedwords'] = 'Stávající rezervovaná slova<br />(názvy tabulek nehrajou roli, pokud používáte $CFG->prefix)';
$string['yesmissingindexesfound'] = 'Ve vaší databázi byly nalezeny chybějící indexy. Následují bližší informace a potřebné SQL příkazy k jejich vytvoření. Před spuštěním těchto příkazů ve vašem oblíbeném SQL klientovi si nezapomeňte vytvořit zálohu celé databáze.<br /><br />Pro jistotu doporučujeme, abyste po provedení uvedených SQL příkazů spustili tuto kontrolu znovu.';
$string['yeswrongdefaultsfound'] = 'Ve vaší databázi byly nalezeny nekonzistentní výchozí hodnoty u některých atributů. Následují bližší informace a potřebné SQL příkazy k jejich korekci. Před spuštěním těchto příkazů ve vašem oblíbeném SQL klientovi si nezapomeňte vytvořit zálohu celé databáze.<br /><br />Pro jistotu doporučujeme, abyste po provedení uvedených SQL příkazů spustili tuto kontrolu znovu.';
$string['yeswrongintsfound'] = 'Ve vaší databázi byly nalezeny nesprávné typy některých celočíselných atributů. Následují bližší informace a potřebné SQL příkazy ke korektní definici vašich tabulek. Před spuštěním těchto příkazů ve vašem oblíbeném SQL klientovi si nezapomeňte vytvořit zálohu celé databáze.<br /><br />Pro jistotu doporučujeme, abyste po provedení uvedených SQL příkazů spustili tuto kontrolu znovu.';
