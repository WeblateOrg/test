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
 * Strings for component 'install', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   install
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'Adresář pro správu (admin) není zadán správně.';
$string['admindirname'] = 'Adresář se soubory pro správu serveru';
$string['admindirsetting'] = 'Na některých serverech je URL adresa /admin vyhrazena pro speciální účely (např. pro ovládací panel). Na takových serverech může dojít ke kolizi se standardním umístěním stránek pro správu Moodlu. Máte-li tento problém, přejmenujte adresář \'admin\' ve vaší instalaci Moodlu a do tohoto pole zadejte jeho nový název. Příklad: <br /> <br /><b>moodleadmin</b><br /> <br />
Všechny generované odkazy na stránky správy Moodlu budou používat tento nový název.';
$string['admindirsettinghead'] = 'Nastavování adresáře \'admin\'...';
$string['admindirsettingsub'] = 'Na některých serverech je URL adresa /admin vyhrazena pro speciální účely (např. pro ovládací panel). Na takových serverech může dojít ke kolizi se standardním umístěním stránek pro správu Moodlu. Máte-li tento problém, přejmenujte adresář \'admin\' ve vaší instalaci Moodlu a do tohoto pole zadejte jeho nový název. Příklad: <br /> <br /><b>moodleadmin</b><br /> <br />
Všechny generované odkazy na stránky správy Moodlu budou používat tento nový název.';
$string['availablelangs'] = 'Dostupné jazykové balíčky';
$string['caution'] = 'Varování';
$string['chooselanguage'] = 'Vyberte jazyk';
$string['chooselanguagehead'] = 'Vyberte jazyk';
$string['chooselanguagesub'] = 'Zvolte si jazyk tohoto průvodce instalací. Vybraný jazyk bude též nastaven jako výchozí jazyk stránek, ale to půjde případně později změnit.';
$string['cliadminpassword'] = 'Heslo hlavního správce';
$string['cliadminusername'] = 'Uživatelské jméno hlavního správce';
$string['clialreadyconfigured'] = 'Soubor config.php již existuje. Spusťte admin/cli/install_database.php, pokud chcete provést instalaci databáze.';
$string['clialreadyinstalled'] = 'Soubor config.php již existuje. Spusťte admin/cli/upgrade.php, pokud chcete provést upgrade vašich stránek.';
$string['cliinstallfinished'] = 'Instalace byla úspěšně dokončena.';
$string['cliinstallheader'] = 'Moodle {$a} - průvodce instalací z příkazové řádky';
$string['climustagreelicense'] = 'V neinteraktivním režimu musíte souhlasit s licencí explicitním uvedením parametru --agree-license';
$string['clitablesexist'] = 'Databázové tabulky již existují, instalace nemůže pokračovat.';
$string['compatibilitysettings'] = 'Kontrola nastavení PHP...';
$string['compatibilitysettingshead'] = 'Kontrola nastavení PHP...';
$string['compatibilitysettingssub'] = 'Pro správný běh Moodlu by váš server měl vyhovět ve všech následujících testech.';
$string['configfilenotwritten'] = 'Instalačnímu skriptu se nepodařilo automaticky vytvořit soubor config.php s vaší konfigurací -- proces webového serveru zřejmě nemá právo zapisovat do adresáře s instalací Moodlu. Můžete ručně zkopírovat následující kód do souboru s názvem config.php a uložit jej do kořenového adresáře vaší instalace Moodlu.';
$string['configfilewritten'] = 'Soubor config.php byl úspěšně vytvořen.';
$string['configurationcomplete'] = 'Konfigurace dokončena';
$string['configurationcompletehead'] = 'Konfigurace dokončena';
$string['configurationcompletesub'] = 'Moodle se pokusil uložit soubor s konfigurací do kořenového adresáře instalace Moodlu.';
$string['database'] = 'Databáze';
$string['databasecreationsettings'] = 'Nyní musíte nastavit připojení k databázi, kam si bude Moodle ukládat většinu svých dat. Tato databáze může být vytvořena instalátorem automaticky podle následujícího nastavení.<br/>
<br /> <br />
<b>Typ:</b> instalátor nastaví na "mysql"<br />
<b>Hostitel:</b> instalátor nastaví na "localhost"<br />
<b>Název:</b> název databáze, např. moodle<br />
<b>Uživatel:</b> instalátor nastaví na "root"<br />
<b>Heslo:</b> heslo k tomuto účtu<br />
<b>Předpona tabulek:</b> volitelná předpona, která se vloží před názvy všech tabulek (umožňuje používat jednu databázi pro více instalací Moodlu)';
$string['databasecreationsettingshead'] = 'Nyní musíte nastavit připojení k databázi, kam si bude Moodle ukládat většinu svých dat. Tato databáze může být vytvořena instalátorem automaticky podle následujícího nastavení.';
$string['databasecreationsettingssub'] = '<b>Typ:</b> instalátor nastaví na "mysql"<br />
<b>Hostitel:</b> instalátor nastaví na "localhost"<br />
<b>Název:</b> název databáze, např. moodle<br />
<b>Uživatel:</b> instalátor nastaví na "root"<br />
<b>Heslo:</b> heslo k tomuto účtu<br />
<b>Předpona tabulek:</b> volitelná předpona, která se vloží před názvy všech tabulek (umožňuje používat jednu databázi pro více instalací Moodlu)';
$string['databasecreationsettingssub2'] = '<b>Typ:</b> instalátor nastaví na "mysql"<br />
<b>Hostitel:</b> instalátor nastaví na "localhost"<br />
<b>Název:</b> název databáze, např. moodle<br />
<b>Uživatel:</b> instalátor nastaví na "root"<br />
<b>Heslo:</b> heslo k tomuto účtu<br />
<b>Předpona tabulek:</b> volitelná předpona, která se vloží před názvy všech tabulek';
$string['databasehead'] = 'Nastavení databáze';
$string['databasehost'] = 'Databázový server';
$string['databasename'] = 'Název databáze';
$string['databasepass'] = 'Heslo k databázi';
$string['databasesettings'] = 'Nyní musíte nastavit připojení k databázi, kam si bude Moodle ukládat většinu svých dat. Tato databáze již musí být vytvořena, stejně jako musí být nastaveno uživatelské jméno a heslo pro přístup k ní.<br/>
<br /> <br />
<b>Typ:</b> mysql nebo postgres7<br />
<b>Hostitel:</b> např. localhost nebo db.naseskola.cz<br />
<b>Název:</b> název databáze, např. moodle<br />
<b>Uživatel:</b> uživatelské jméno účtu pro přístup k databázi<br />
<b>Heslo:</b> heslo k tomuto účtu<br />
<b>Předpona tabulek:</b> volitelná předpona, která se vloží před názvy všech tabulek (umožňuje používat jednu databázi pro více instalací Moodlu)';
$string['databasesettingshead'] = 'Nyní musíte nastavit připojení k databázi, kam si bude Moodle ukládat většinu svých dat. Tato databáze již musí být vytvořena, stejně jako musí být nastaveno uživatelské jméno a heslo pro přístup k ní.';
$string['databasesettingssub'] = '<b>Typ:</b> mysql nebo postgres7<br />
<b>Hostitel:</b> např. localhost nebo db.naseskola.cz<br />
<b>Název:</b> název databáze, např. moodle<br />
<b>Uživatel:</b> uživatelské jméno účtu pro přístup k databázi<br />
<b>Heslo:</b> heslo k tomuto účtu<br />
<b>Předpona tabulek:</b> volitelná předpona, která se vloží před názvy všech tabulek (umožňuje používat jednu databázi pro více instalací Moodlu)';
$string['databasesettingssub_mssql'] = '<b>Typ:</b> SQL*Server (bez UTF-8)  <strong class="errormsg">Jen pro experimentování! (není určeno pro produkční servery)</strong><br />
<b>Hostitel (Host):</b> např. localhost nebo db.naseskola.cz<br />
<b>Název (Name):</b> název databáze, např. moodle<br />
<b>Uživatel (User):</b> uživatel oprávněný pro práci s databází<br />
<b>Heslo (Password):</b> heslo pro uživatele<br />
<b>Předpona (Tables Prefix):</b> jednotná předpona názvů všech tabulek, např. mdl_ (povinné)';
$string['databasesettingssub_mssql_n'] = '<b>Typ:</b> SQL*Server (s UTF-8) <br />
<b>Hostitel (Host):</b> např. localhost nebo db.naseskola.cz<br />
<b>Název (Name):</b> název databáze, např. moodle<br />
<b>Uživatel (User):</b> uživatel oprávněný pro práci s databází<br />
<b>Heslo (Password):</b> heslo pro uživatele<br />
<b>Předpona (Tables Prefix):</b> jednotná předpona názvů všech tabulek, např. mdl_ (povinné)';
$string['databasesettingssub_mysql'] = '<b>Typ:</b> MySQL<br />
<b>Hostitel (Host):</b> např. localhost nebo db.naseskola.cz<br />
<b>Název (Name):</b> název databáze, např. moodle<br />
<b>Uživatel (User):</b> uživatel oprávněný pro práci s databází<br />
<b>Heslo (Password):</b> heslo pro uživatele<br />
<b>Předpona (Tables Prefix):</b> jednotná předpona názvů všech tabulek, např. mdl_ (volitelné)';
$string['databasesettingssub_mysqli'] = '<b>Typ:</b> vylepšené MySQL<br />
<b>Hostitel:</b> např. localhost nebo db.naseskola.cz<br />
<b>Název:</b> název databáze, např. moodle<br />
<b>Uživatel:</b> uživatel dané databáze<br />
<b>Heslo:</b> heslo uživatele k databázi<br />
<b>Předpona:</b> jednotná předpona názvů všech tabulek (volitelné)';
$string['databasesettingssub_oci8po'] = '<b>Typ:</b> Oracle<br />
<b>Hostitel (Host):</b> nepoužito, musí být prázdné<br />
<b>Název (Name):</b> daný název připojení tnsnames.ora<br />
<b>Uživatel (User):</b> uživatel oprávněný pro práci s databází<br />
<b>Heslo (Password):</b> heslo pro uživatele<br />
<b>Předpona (Tables Prefix):</b> jednotná předpona názvů všech tabulek (povinné, max 2 znaky)';
$string['databasesettingssub_odbc_mssql'] = '<b>Typ:</b> SQL*Server (přes ODBC) <b><font color="red">Jen pro experimentování! (není určeno pro produkční servery)</font></b><br />
<b>Hostitel (Host):</b> název DSN podle řídicího panelu ODBC<br />
<b>Název (Name):</b>název databáze, např. moodle <br />
<b>Uživatel (User):</b> uživatel oprávněný pro práci s databází<br />
<b>Heslo (Password):</b> heslo pro uživatele<br />
<b>Předpona (Tables Prefix):</b> jednotná předpona názvů všech tabulek (povinné)';
$string['databasesettingssub_postgres7'] = '<b>Typ:</b> PostgreSQL<br />
<b>Hostitel (Host):</b> např. localhost nebo db.naseskola.cz<br />
<b>Název (Name):</b> název databáze, např. moodle<br />
<b>Uživatel (User):</b> uživatel oprávněný pro práci s databází<br />
<b>Heslo (Password):</b> heslo pro uživatele<br />
<b>Předpona (Tables Prefix):</b> jednotná předpona názvů všech tabulek, např. mdl_ (povinné)';
$string['databasesettingswillbecreated'] = '<b>Poznámka:</b> instalátor se pokusí vytvořit databázi automaticky, pokud ještě neexistuje';
$string['databasesocket'] = 'Unix socket';
$string['databasetypehead'] = 'Vyberte databázový ovladač';
$string['databasetypesub'] = 'Moodle podporuje několik typů databázových serverů. Prosím, kontaktujte správce serveru, pokud nevíte, který typ použít.';
$string['databaseuser'] = 'Uživatel pro připojení k databázi';
$string['dataroot'] = 'Datový adresář';
$string['datarooterror'] = 'Zadaný datový adresář se nepodařilo nalézt nebo vytvořit. Buď opravte zadanou cestu, nebo vytvořte adresář ručně.';
$string['datarootpermission'] = 'Přístupová práva k datovému adresáři';
$string['datarootpublicerror'] = 'Zadaný datový adresář (dataroot) je přímo dostupný přes WWW. Zvolte jiné umístění.';
$string['dbconnectionerror'] = 'Nepodařilo se připojit k databázi, kterou jste zadali. Zkontrolujte prosím nastavení databáze.';
$string['dbcreationerror'] = 'Chyba při vytváření databáze. Nelze vytvořit databázi zadaného jména a nastavení.';
$string['dbhost'] = 'Hostitelský server';
$string['dbpass'] = 'Heslo';
$string['dbport'] = 'Port';
$string['dbprefix'] = 'Předpona tabulek';
$string['dbtype'] = 'Typ';
$string['dbwrongencoding'] = 'Vybraná databáze používá nedoporučené kódování {$a}. Vhodnější by bylo používat databázi s kódováním Unicode (UTF-8). Tuto kontrolu můžete přeskočit zaškrtnutím pole "Přeskočit test kódování DB", můžete však v budoucnu narazit na problémy.';
$string['dbwronghostserver'] = 'Chyba v názvu hostitele.';
$string['dbwrongnlslang'] = 'Proměnná prostředí Vašeho serveru NLS_LANG musí používat znakovou sadu AL32UTF8. Viz dokumentaci PHP o konfiguraci vlastnosti OCI8.';
$string['dbwrongprefix'] = 'Chyba v předponě názvů tabulek.';
$string['directorysettings'] = '<p>Potvrďte prosím základní adresy této instalace Moodlu.</p>

<p><b>Webová adresa</b>
Zadejte úplnou webovou adresu, na níž bude Moodle dostupný. Jsou-li vaše stránky dostupné na více URL, vyberte z nich tu, kterou budou vaši studenti používat nejčastěji. Na konci adresy neuvádějte lomítko.</p>

<p><b>Adresář Moodlu</b>
Zadejte úplnou cestu k adresáři s touto instalací. Ujistěte se, že jsou v ní správně uvedena malá/VELKÁ písmena.</p>

<p><b>Datový adresář</b>
Potřebujete diskový prostor, kam bude Moodle ukládat nahrané (uploadované) soubory. K tomuto adresáři musí mít proces webového serveru právo ke čtení I ZÁPISU (webový server bývá spouštěn pod uživatelem \'nobody\' nebo \'apache\' nebo podobně). Tento adresář by ale zároveň neměl být dostupný přímo přes webové rozhraní (může obsahovat neveřejná data).</p>';
$string['directorysettingshead'] = 'Potvrďte prosím adresy této instalace Moodlu.';
$string['directorysettingssub'] = '<b>Webová adresa</b>:
zadejte úplnou webovou adresu, na níž bude Moodle dostupný. Jsou-li vaše stránky dostupné na více URL, vyberte z nich tu, kterou budou vaši studenti používat nejčastěji. Na konci adresy neuvádějte lomítko.
<br />
<br />
<b>Adresář Moodlu</b>:
zadejte úplnou cestu k adresáři s touto instalací. Ujistěte se, že jsou v ní správně uvedena malá/VELKÁ písmena.
<br />
<br />
<b>Datový adresář</b>:
potřebujete diskový prostor, kam bude Moodle ukládat nahrané (uploadované) soubory. K tomuto adresáři musí mít proces webového serveru právo ke čtení I ZÁPISU (webový server bývá spouštěn pod uživatelem \'nobody\' nebo \'apache\' nebo podobně). Tento adresář by ale zároveň neměl být dostupný přímo přes webové rozhraní (může obsahovat neveřejná data).';
$string['dirroot'] = 'Adresář Moodlu';
$string['dirrooterror'] = 'Parametr \'Adresář Moodlu\' je zřejmě nastaven nesprávně -- v zadaném umístění se nepodařilo najít instalaci Moodlu. Ve formuláři níže byla automaticky nastavena výchozí hodnota.';
$string['download'] = 'Stáhnout';
$string['downloadlanguagebutton'] = 'Stáhnout jazykový balíček "{$a}"';
$string['downloadlanguagehead'] = 'Stáhnout jazykový balíček';
$string['downloadlanguagenotneeded'] = 'V instalaci lze nyní pokračovat v jazyce "{$a}".';
$string['downloadlanguagesub'] = 'Nyní máte možnost stáhnout si některý z jazykových balíčků Moodlu a pokračovat v tomto jazyce.<br /><br />Pokud si momentálně nemůžete nebo nechcete stáhnout jazykový balíček, bude instalační proces pokračovat v angličtině. Jazykové balíčky si budete moci stáhnout i později po ukončení instalace.';
$string['doyouagree'] = 'Souhlasíte s tím? (ano / ne):';
$string['environmenthead'] = 'Kontrola programového prostředí...';
$string['environmentsub'] = 'Nyní se prověřuje, zda vybrané komponenty vašeho systému splňují požadavky instalace.';
$string['environmentsub2'] = 'Každé vydání Moodle vyžaduje určitou minimální verzi PHP a několik povinných rozšíření PHP. Plná kontrola prostředí se provádí před každým instalací a upgrade. Prosím, kontaktujte správce serveru, pokud nevíte, jak nainstalovat novou verzi, nebo povolit rozšíření PHP.';
$string['errorsinenvironment'] = 'Kontrola serverového prostředí selhala!';
$string['fail'] = 'Selhalo';
$string['fileuploads'] = 'Nahrávání souborů';
$string['fileuploadserror'] = 'Mělo by být zapnuto';
$string['fileuploadshelp'] = '<p>Na vašem serveru zřejmě není možné nahrávat soubory.</p>

<p>Moodle může být i přesto nainstalován, bez této funkce ale nebudete moci nahrávat žádné soubory (např. studijní materiály, fotografie uživatelů atd.).</p>

<p>Chcete-li povolit nahrávání souborů, budete muset vy (nebo správce serveru) upravit hlavní soubor php.ini na serveru a změnit nastavení
<b>file_uploads</b> na \'1\'.</p>';
$string['gdversion'] = 'Verze GD';
$string['gdversionerror'] = 'Knihovna GD se používá pro zpracovávání a tvorbu obrázků (např. fotografií, grafů apod.).';
$string['gdversionhelp'] = '<p>Na vašem serveru zřejmě není nainstalována knihovna GD.</p>

<p>GD je knihovna, kterou vyžaduje PHP k tomu, aby mohl Moodle zpracovávat obrázky (např. ikony uživatelů) a vytvářet nové obrázky (např. grafy přístupů na vaše stránky). Moodle bude fungovat i bez GD, ale tyto funkce nebudou dostupné.</p>

<p>V Unixu můžete přidat GD do PHP tak, že zkompilujte PHP s parametrem --with-gd.</p>

<p>Ve Windows stačí většinou upravit php.ini a odkomentovat řádek odkazující na php_gd2.dll.</p>';
$string['globalsquotes'] = 'Nezabezpečené zacházení s globálními proměnnými';
$string['globalsquoteserror'] = 'Upravte nastavení PHP: zakažte register_globals a/nebo povolte magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Vaše nastavení PHP nepovoluje Magic Quotes GPC a zároveň povoluje Register Globals. Tato kombinace není doporučována.</p>

<p>Doporučujeme nastavit ve vašem souboru php.ini <b>magic_quotes_gpc = On</b> a <b>register_globals = Off</b></p>

Nemáte-li přístup k souboru php.ini, nebo pokud nemůžete/nechcete měnit toto nastavení pro celý server, umístěte do kořenového adresáře instalace Moodlu soubor nazvaný .htaccess s následujícím obsahem:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['inputdatadirectory'] = 'Datový adresář:';
$string['inputwebadress'] = 'Webová adresa:';
$string['inputwebdirectory'] = 'Adresář s instalací Moodle:';
$string['installation'] = 'Instalace';
$string['langdownloaderror'] = 'Bohužel, jazyk "{$a}" se nepodařilo nainstalovat. Instalace bude pokračovat v angličtine.';
$string['langdownloadok'] = 'Podařilo se úspěšně nainstalovat jazykový balíček "{$a}". Instalace bude pokračovat v tomto jazyce.';
$string['magicquotesruntime'] = 'Magic quotes run time';
$string['magicquotesruntimeerror'] = 'Mělo by být vypnuto';
$string['magicquotesruntimehelp'] = '<p>Pro správné fungování Moodlu by nastavení \'Magic quotes runtime\' mělo být vypnuto.</p>

<p>Obvykle bývá tato funkce ve výchozím nastavení vypnutá ... zkontrolujte nastavení <b>magic_quotes_runtime</b> ve vašem php.ini.</p>

<p>Pokud nemáte přístup k souboru php.ini, zkuste umístit následující řádek do souboru .htaccess v kořenovém adresáři vaší instalace Moodlu:
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = 'Limit paměti';
$string['memorylimiterror'] = 'Limit paměti pro PHP skripty je nastaven relativně nízko ... v budoucnu byste mohli narazit na problémy.';
$string['memorylimithelp'] = '<p>Limit paměti pro PHP skripty je na vašem serveru momentálně nastaven na hodnotu {$a}.</p>

<p>To může později způsobovat Moodlu problémy, zvláště při větším množství modulů a/nebo uživatelů.</p>

<p>Je-li to možné, doporučujeme vám nastavit v PHP vyšší limit, např. 40M. Můžete to provést několika způsoby:
<ol>
<li>Můžete-li, překompilujte PHP s volbou <i>--enable-memory-limit</i>.
Moodle si tak bude sám moci nastavit potřebný limit.</li>
<li>Máte-li přístup k souboru php.ini, změňte nastavení <b>memory_limit</b>
na hodnotu blízkou 40M. Nemáte-li taková práva, požádejte správce vašeho webového serveru, aby toto nastavení provedl on.</li>
<li>Na některých serverech můžete v kořenovém adresáři Moodlu vytvořit soubor .htaccess s následujícím řádkem:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Bohužel, v některých případech tím vyřadíte z provozu <b>všechny</b> PHP stránky (při jejich prohlížení uvidíte chybová hlášení), takže budete muset soubor .htaccess zase odstranit.</li>
</ol>';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssqlextensionisnotpresentinphp'] = 'PHP nebylo korektně nakonfigurováno pro komunikaci s SQL*Server přes rozšíření MSSQL. Zkontrolujte váš php.ini nebo překompilujte PHP.';
$string['mssql_n'] = 'SQL*Server s podporou UTF-8 (mssql_n)';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'PHP nebylo korektně nakonfigurováno pro komunikaci s MySQL. Zkontrolujte váš php.ini nebo překompilujte PHP.';
$string['mysqli'] = 'Vylepšené MySQL (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'PHP není korektně nakonfigurováno, aby mohlo s MySQL serverem komunikovat s podporou rozšíření MySQLi. Zkontrolujte nastavení v souboru php.ini nebo překompilujte PHP. Rozšíření MySQLi není k dispozici ve verzi PHP 4.';
$string['nativemssql'] = 'SQL*Server FreeTDS (native/mssql)';
$string['nativemssqlhelp'] = 'Nyní je potřeba nakonfigurovat databázi, kde bude uložena většina dat Moodlu.
Databáze již musí být vytvořena a uživatel s daným uživatelským jménem a heslem k ní musí mít přístup. Předpona názvů tabulek je povinná.';
$string['nativemysqli'] = 'MySQL Improved (native/mysqli)';
$string['nativemysqlihelp'] = 'Nyní je potřeba nakonfigurovat databázi, kde bude uložena většina dat Moodlu.
Databáze bude vytvořena, pokud má uživatel s daným uživatelským jménem a heslem potřebná oprávnění. Předpona názvů tabulek je volitelná.';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativeocihelp'] = 'Nyní je potřeba nakonfigurovat databázi, kde bude uložena většina dat Moodlu.
Tato databáze již musí být vytvořena a uživatel s daným uživatelským jménem a heslem k ní musí mít přístup. Předpona názvů tabulek je povinná.';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = 'Nyní je potřeba nakonfigurovat databázi, kde bude uložena většina dat Moodlu.
Tato databáze již musí být vytvořena a uživatel s daným uživatelským jménem a heslem k ní musí mít přístup. Předpona názvů tabulek je povinná.';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (native/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Nyní je potřeba nakonfigurovat databázi, kde bude uložena většina dat Moodlu.
Tato databáze již musí být vytvořena a uživatel s daným uživatelským jménem a heslem k ní musí mít přístup. Předpona názvů tabulek je povinná.';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHP nebylo korektně nakonfigurováno pro komunikaci s Oracle přes rozšíření OCI8. Zkontrolujte váš php.ini nebo překompilujte PHP.';
$string['odbcextensionisnotpresentinphp'] = 'PHP nebylo korektně nakonfigurováno pro komunikaci s SQL*Server přes rozšíření ODBC. Zkontrolujte váš php.ini nebo překompilujte PHP.';
$string['odbc_mssql'] = 'SQL*Server přes ODBC (odbc_mssql)';
$string['pass'] = 'V pořádku';
$string['paths'] = 'Cesty';
$string['pathserrcreatedataroot'] = 'Datový adresář ({$a->dataroot}) nemůže být tímto průvodcem instalací vytvořen.';
$string['pathshead'] = 'Potvrdit cesty';
$string['pathsrodataroot'] = 'Do datového adresáře nelze zapisovat.';
$string['pathsroparentdataroot'] = 'Do nadřazeného adresáře ({$a->parent}) nelze zapisovat. Datový adresář ({$a->dataroot}) nemůže být tímto průvodcem instalací vytvořen.';
$string['pathssubadmindir'] = 'Na některých serverech je URL adresa /admin vyhrazena pro speciální účely (např. pro ovládací panel). Na takových serverech může dojít ke kolizi se standardním umístěním stránek pro správu Moodle. Máte-li tento problém, přejmenujte adresář <eM>admin</em> ve vaší instalaci Moodle a sem zadejte jeho nový název - například <em>moodleadmin</em>. Všechny generované odkazy na stránky správy Moodle budou používat tento nový název.';
$string['pathssubdataroot'] = 'Moodle potřebuje prostor, kam si bude ukládat nahrané soubory a další údaje. K tomuto adresáři musí mít proces webového serveru právo ke čtení i k zápisu (webový server bývá většinou spouštěn pod uživatelem "www-data" nebo "apache"). Tento adresář ale zároveň nesmí být dostupný přímo přes webové rozhraní. Instalační skript se pokusí tento adresář vytvořit, pokud nebude existovat.';
$string['pathssubdirroot'] = 'Absolutní cesta k adresáři s instalací Moodle';
$string['pathssubwwwroot'] = 'Zadejte úplnou webovou adresu, na níž bude Moodle dostupný. Moodle potřebuje jedinečnou adresu, není možné jej provozovat na několika URL současně. Používáte-li několik veřejných domén, musíte si sami nastavit permanentní přesměrování na jednu z nich a tu pak použít. Pokud je váš server dostupný z vnější a z vnitřní sítě pod různými IP adresami, použijte jeho veřejnou adresu a nastavte si váš DNS server tak, že ji mohou používat i uživatelé z vnitřní sítě.';
$string['pathsunsecuredataroot'] = 'Umístění datového adresáře není bezpečné';
$string['pathswrongadmindir'] = 'Adresář pro správu serveru (admin) neexistuje';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP nebylo korektně nakonfigurováno pro komunikaci s PostgreSQL přes rozšíření PGSQL. Zkontrolujte váš php.ini nebo překompilujte PHP.';
$string['phpextension'] = '{$a} PHP rozšíření';
$string['phpversion'] = 'Verze PHP';
$string['phpversionhelp'] = '<p>Moodle vyžaduje PHP alespoň verze 4.3.0 nebo 5.1.0 (PHP 5.0.x obsahuje množství chyb).</p>
<p>Nyní používáte PHP verze {$a}.</p>
<p>Musíte PHP upgradovat, nebo přejít k hostiteli s vyšší verzí!<br />
(U PHP 5.0.x můžete také přejít na nižší verzi 4.4.x či 4.3.x.)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['releasenoteslink'] = 'Informace o této verzi Moodle naleznete v poznámkách k vydání na {$a}';
$string['safemode'] = 'Bezpečný režim (Safe Mode)';
$string['safemodeerror'] = 'Se zapnutým bezpečným režimem (Safe Mode) může mít Moodle problémy.';
$string['safemodehelp'] = '<p>Při zapnutém bezpečném režimu PHP (tzv. Safe Mode) může Moodle narazit na řadu problémů. Jedním z nich je, že pravděpodobně nebude moci vytvářet nové soubory.</p>

<p>Bezpečný režim používají obvykle pouze paranoidní veřejní poskytovatelé webového prostoru, takže možná bude stačit najít si pro váš Moodle jiného poskytovatele.</p>

<p>Můžete zkusit pokračovat v instalaci, ale připravte se na problémy.</p>';
$string['sessionautostart'] = 'Session Auto Start';
$string['sessionautostarterror'] = 'Mělo by být vypnuto';
$string['sessionautostarthelp'] = '<p>Moodle vyžaduje podporu session a nebude bez ní fungovat.</p>

<p>Podporu session můžete povolit v souboru php.ini  ... hledejte parametr session.auto_start.</p>';
$string['skipdbencodingtest'] = 'Přeskočit test kódování DB';
$string['sqliteextensionisnotpresentinphp'] = 'PHP není správně nakonfigurováno s rozšířením SQLite. Zkontrolujte prosím soubor php.ini, nebo překompilujte PHP.';
$string['upgradingqtypeplugin'] = 'Aktualizace modulu typu otázky';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Podařilo se vám úspěšně nainstalovat a spustit balíček <strong>{$a->packname} {$a->packversion}</strong>. Gratulujeme!';
$string['welcomep30'] = '<strong>{$a->installername}</strong> obsahuje aplikace k vytvoření prostředí, ve kterém bude provozován váš <strong>Moodle</strong>. Jmenovitě se jedná o:';
$string['welcomep40'] = 'Balíček rovněž obsahuje <strong>Moodle ve verzi {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Použití všech aplikací v tomto balíčku je vázáno jejich příslušnými licencemi. Kompletní balíček <strong>{$a->installername}</strong> je software s <a href="http://www.opensource.org/docs/definition_plain.html"> otevřeným kódem (open source)</a> a je šířen pod licencí <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Následující stránky vás v několik jednoduchých krocích nastavením <strong>Moodlu</strong> na vašem počítači. Můžete přijmout výchozí nastavení, nebo si je upravit podle svých potřeb.';
$string['welcomep70'] = 'Stisknutím níže uvedeného tlačítka "Další" pokračujte v nastavení vaší instalace Moodlu.';
$string['wwwroot'] = 'Webová adresa';
$string['wwwrooterror'] = 'Parametr \'Webová adresa\' je zřejmě nastaven nesprávně -- v zadaném umístění se nepodařilo najít instalaci Moodlu. Ve formuláři níže byla automaticky nastavena výchozí hodnota.';
