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
 * Strings for component 'enrol_authorize', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_authorize
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminacceptccs'] = 'Typy přijímaných kreditních karet';
$string['adminaccepts'] = 'Zvolte povolené platební metody a jejich typy';
$string['adminauthorizeccapture'] = 'Kontrola a automatické zpracování transakcí';
$string['adminauthorizeemail'] = 'E-mailové upozorňování';
$string['adminauthorizesettings'] = 'Nastavení Authorize.Net';
$string['adminauthorizewide'] = 'Globální nastavení';
$string['adminconfighttps'] = 'Abyste mohli používat tento plugin, prosím "<a href="{$a->url}">zapněte loginhttps </a>" <br />v Správa >> Proměnné >> Bezpečnost >> bezpečnost HTTP .';
$string['adminconfighttpsgo'] = 'Tento zásuvný modul zkonfigurujete na  <a href="{$a->url}">zabezpečené stránce</a>.';
$string['admincronsetup'] = 'Skript cron.php, který má na starosti běžnou údržbu serveru, nebyl během posledních 24 hodin spuštěn.<br />Chcete-li používat automatické zpracování transakcí, musí být cron v provozu.<br /><b>Povolte</b> zápis prostřednictvím \'Authorize.net Credit Card Gateway\' a <b>zprovozněte cron</b>, nebo <b>zrušte</b> volbu <b>an_review</b>.<br />Pokud deaktivujete automatické zpracování transakcí, budou transakce zrušeny, nezpracujete-li je do 30 dnů.<br />Zatrhněte volbu <b>an_review</b> a zapište <b>\'0\' (nulu)</b> do pole <b>an_capture_day</b>,<br />chcete-li transakce potvrdit/zamítnout <b>ručně</b> během 30 dnů od podání.';
$string['adminemailexpiredsort'] = 'Čím se řídí upozorňování na transakce s blížícím se koncem lhůty pro vyžízení?';
$string['adminemailexpiredsortcount'] = 'Počet transakcí';
$string['adminemailexpiredsortsum'] = 'Celkový úhrn částek';
$string['adminemailexpsetting'] = '(0=neposílat e-mail, výchozí nastavení=2, maximum=5)<br />Nastavení pro e-mailové upozorňování při ručním zpracování plateb (cron=v provozu, an_review=zatrženo, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Den automatického zpracování transakcí';
$string['adminhelpreviewtitle'] = 'Kontrola objednávky';
$string['adminneworder'] = 'Zpráva pro správce

Obdržel(a) jste novou objednávku k vyřízení:

ID objednávky: {$a->orderid}
ID transakce: {$a->transid}
Uživatel: {$a->user}
Kurz: {$a->course}
Částka: {$a->amount}

STAV SLUŽBY AUTOMATICKÉHO ZPRACOVÁNÍ TRANSAKCÍ: {$a->acstatus}.

Je-li aktivováno automatické zpracování transakcí, bude úhrada kreditní kartou provedena {$a->captureon}, a student bude následně zapsán do kurzu; není-li tomu tak, potom lhůta pro uskutečnění transakce vyprší {$a->expireon} a po tomto datu nebude možné platbu provést.

Platbu a zápis studenta do kurzu můžete rovněž potvrdit/zamítnout ihned na této adrese: {$a->url}.';
$string['adminnewordersubject'] = '{$a->course}: nová objednávka k vyřízení ({$a->orderid})';
$string['adminpendingorders'] = 'Deaktivovali jste automatické zpracování transakcí.<br />Celkem {$a->count} transakcí s příznakem \'autorizováno/vyřizuje se rezervace prostředků\' bude zrušeno, pokud je nezkontrolujete.<br />Přijetí/Zamítnutí plateb můžete provést na stránce <a href=\'{$a->url}\'>Správa plateb</a>.';
$string['adminteachermanagepay'] = 'Učitelé smějí spravovat platby za kurz.';
$string['allpendingorders'] = 'Všechny čekající objednávky';
$string['amount'] = 'Částka';
$string['anauthcode'] = 'Získat autorizační kód';
$string['anemailexpired'] = 'Upozornění na vypršení platnosti';
$string['anemailexpiredteacher'] = 'Upozornění na vypršení platnosti - Učitel';
$string['anlogin'] = 'Authorize.net: Přihlašovací jméno';
$string['anpassword'] = 'Authorize.net: Heslo (není požadováno)';
$string['anreferer'] = 'Máte-li u vašeho účtu na authorize.net nastaven URL referer, vložte jej sem. Do hlavičky HTTP požadavku bude vkládán řádek \'Referer: URL\'.';
$string['anreview'] = 'Přehled';
$string['anreviewdesc'] = 'Zobrazení objednávky před zpracováním kreditní karty.';
$string['antestmode'] = 'Provádět transakce pouze v testovacím režimu (neuskuteční se žádné přesuny finančních prostředků)';
$string['antestmodedesc'] = 'Provádět transakce pouze v testovacím režimu (neuskuteční se žádné přesuny finančních prostředků)';
$string['antrankey'] = 'Authorize.net: Klíč transakce';
$string['approvedreview'] = 'Přehled schválených';
$string['authcaptured'] = 'Autorizováno/rezervace prostředků provedena';
$string['authcode'] = 'Kód autorizace';
$string['authorize:config'] = 'Konfigurovat instance modulu Authorize.Net';
$string['authorizedpendingcapture'] = 'Autorizováno/vyřizuje se rezervace prostředků';
$string['authorizeerror'] = 'Authorize.Net chyba: {$a}';
$string['authorize:manage'] = 'Spravovat zapsané uživatele';
$string['authorize:managepayments'] = 'Správa plateb';
$string['authorize:unenrol'] = 'Odhlásit uživatele z kurzu';
$string['authorize:unenrolself'] = 'Vyškrtnout se z kurzu';
$string['authorize:uploadcsv'] = 'Nahrát CSV soubor';
$string['avsa'] = 'Adresa (ulice) souhlasí, PSČ nikoliv';
$string['avsb'] = 'Nebyly zadány údaje o adrese';
$string['avse'] = 'Chyba kontrolního systému AVS';
$string['avsg'] = 'Banka vydavatele nesídlí v USA';
$string['avsn'] = 'Adresa (ulice) ani PSČ nesouhlasí';
$string['avsp'] = 'Kontrolu pomocí AVS nelze použít';
$string['avsr'] = 'Opakujte požadavek -- systém je nedostupný, nebo vypršel časový limit žádosti';
$string['avsresult'] = 'Výsledek kontroly AVS: {$a}';
$string['avss'] = 'Služba není vydavatelem karty podporována';
$string['avsu'] = 'Není k dispozici údaj o adrese';
$string['avsw'] = '9místné PSČ souhlasí, adresa (ulice) nikoliv';
$string['avsx'] = 'Adresa (ulice) a 9místné PSČ souhlasí';
$string['avsy'] = 'Adresa (ulice) a 5místné PSČ souhlasí';
$string['avsz'] = '5místné PSČ souhlasí, adresa (ulice) nikoliv';
$string['canbecredit'] = 'Lze refundovat až {$a->upto}';
$string['cancelled'] = 'Zrušeno';
$string['capture'] = 'Rezervovat prostředky';
$string['capturedpendingsettle'] = 'Rezervace prostředků provedena/vyřizuje se úhrada';
$string['capturedsettled'] = 'Rezervace prostředků provedena/uhrazeno';
$string['captureyes'] = 'Vyžádá se rezervace prostředků na kartě a student bude zapsán do kurzu. Pokračovat?';
$string['cccity'] = 'Město';
$string['ccexpire'] = 'Datum expirace';
$string['ccexpired'] = 'Platnost této kreditní karty vypršela';
$string['ccinvalid'] = 'Neplatné číslo karty';
$string['cclastfour'] = 'Poslední čtyři číslice CC';
$string['ccno'] = 'Číslo kreditní karty';
$string['ccstate'] = 'Stát';
$string['cctype'] = 'Typ kreditní karty';
$string['ccvv'] = 'Ověření karty';
$string['ccvvhelp'] = 'Podívejte se na zadní stranu karty (poslední 3 číslice)';
$string['choosemethod'] = 'Znáte-li klíč k zápisu do tohoto kurzu, zadejte jej. V opačném případě budete muset za přístup do tohoto kurzu zaplatit.';
$string['chooseone'] = 'Vyplňte jedno nebo obě následující pole. Heslo se nezobrazuje.';
$string['cost'] = 'Cena';
$string['costdefaultdesc'] = 'Pro použití této výchozí ceny <strong>zadejte v nastavení kurzu v poli pro cenu hodnotu -1</strong>.';
$string['currency'] = 'Měna';
$string['cutofftime'] = 'Čas zpracování transakcí';
$string['dataentered'] = 'Data vložena';
$string['delete'] = 'Zrušit';
$string['description'] = 'Modul Authorize.Net umožňuje nastavit placení za kurzy pomocí kreditní karty. Můžete nastavit výchozí cenu pro všechny kurzy na vašich stránkách - tu lze potom upravit v nastavení jednotlivých kurzů. Cena uvedená v nastavení kurzu má přednost před cenou uvedenou v nastavení stránek.';
$string['echeckabacode'] = 'Bankovní číslo ABA';
$string['echeckaccnum'] = 'Číslo bankovního účtu';
$string['echeckacctype'] = 'Typ bankovního účtu';
$string['echeckbankname'] = 'Název banky';
$string['echeckbusinesschecking'] = 'Podnikatelský běžný účet';
$string['echeckchecking'] = 'Běžný účet';
$string['echeckfirslasttname'] = 'Vlastník účtu';
$string['echecksavings'] = 'Spoření';
$string['enrolenddate'] = 'Konec zápisu';
$string['enrolenddaterror'] = 'Datum konce zápisu do kurzu nemůže předcházet datu začátku zápisu';
$string['enrolname'] = 'Platba přes Authorize.Net';
$string['enrolperiod'] = 'Délka trvání platnosti zápisu';
$string['enrolstartdate'] = 'Začátek zápisu';
$string['expired'] = 'Vypršela lhůta';
$string['expiremonth'] = 'Měsíc vypršení platnosti';
$string['expireyear'] = 'Rok vypršení platnosti';
$string['firstnameoncard'] = 'Jméno na kartě';
$string['haveauthcode'] = 'Již mám autorizační kód';
$string['howmuch'] = 'Kolik?';
$string['httpsrequired'] = 'Bohužel vám musíme sdělit, že váš požadavek nyní nemůže být zpracován. Nepodařilo se provést potřebná nastavení tohoto serveru.
<br /><br />
Nezadávejte prosím číslo své kreditní karty, pokud v dolní liště prohlížeče nevidíte žlutý zámek. Jestliže tento symbol vidíte, znamená to, že komunikace mezi klientem a serverem je šifrována, takže číslo vaší kreditní karty nebude moci během přenosu po síti Internet odposlechnout žádná třetí osoba.';
$string['invalidaba'] = 'Neplatné číslo ABA';
$string['invalidaccnum'] = 'Neplatné číslo účtu';
$string['invalidacctype'] = 'Neplatný typ účtu';
$string['isbusinesschecking'] = 'Jedná se o "business checking" účet?';
$string['lastnameoncard'] = 'Příjmení na kartě';
$string['logindesc'] = 'Tato volba musí být ZAPNUTA (ON).<br /><br />
Nastavte proměnnou <a href="{$a->url}">loginhttps</a> v sekci Správa->Proměnné->Zabezpečení.<br /><br />
Po jejím zapnutí bude Moodle používat šifrované spojení HTTPS pouze pro přihlašování a pro provedení plateb.';
$string['logininfo'] = 'Přihlašovací jméno, heslo a klíč transakce nejsou zobrazovány z bezpečnostních důvodů. Není potřeba je zadávat znovu, pokud jste je již vyplnili. Pokud již tato pole byla vyplněna, uvidíte vlevo od rámečků text zobrazený zeleně. Pokud tato pole vkládáte poprvé, přihlašovací jméno (*) je povinné a musíte vložit <strong>buď</strong> klíč transakce (#1) <strong>nebo</strong> heslo (#2) do příslušného rámečku. Z bezpečnostních důvodů Vám doporučujeme vkládat klíč transakce. Pokud chcete stávající heslo vymazat, zaškrtněte checkbox.';
$string['methodcc'] = 'Kreditní karta';
$string['methodecheck'] = 'e-Šek (ACH)';
$string['missingaba'] = 'Chybí číslo ABA';
$string['missingaddress'] = 'Nezadána adresa';
$string['missingbankname'] = 'Chybí název banky';
$string['missingcc'] = 'Nezadáno číslo karty';
$string['missingccauthcode'] = 'Chybí autorizační kód';
$string['missingccexpiremonth'] = 'Chybí měsíc data vypršení platnosti';
$string['missingccexpireyear'] = 'Chybí rok data vypršení platnosti';
$string['missingcctype'] = 'Nezadán typ karty';
$string['missingcvv'] = 'Nezadán ověřovací kód';
$string['missingzip'] = 'Chybí PSČ';
$string['mypaymentsonly'] = 'Ukázat jen moje platby';
$string['nameoncard'] = 'Jméno na kartě';
$string['new'] = 'Nová';
$string['nocost'] = 'Pro zápis do tohoto kurzu pomocí Authorize.Net nebyl nastavena žádná cena!';
$string['noreturns'] = 'Žádné vrácené platby!';
$string['notsettled'] = 'Neuhrazeno';
$string['orderdetails'] = 'Podrobnosti objednávky';
$string['orderid'] = 'ID objednávky';
$string['paymentmanagement'] = 'Správa plateb';
$string['paymentmethod'] = 'Platební metoda';
$string['paymentpending'] = 'Vaše platba za tento kurz, pod číslem objednávky {$a->orderid}, se zpracovává. Viz <a href=\'{$a->url}\'>Podrobnosti o objednávce</a>.';
$string['pendingecheckemail'] = 'Vážený manažere,

právě čeká na potvrzení {$a->count} e-šeků a Vy musíte nahrát csv soubor, aby uživatelé byli platně zapsáni.

Klikněte na následující odkaz a přečtěte si nápovědu k této stránce:
{$a->url}';
$string['pendingechecksubject'] = '{$a->course}: Čekající e-Šeky({$a->count})';
$string['pendingordersemail'] = 'Zpráva pro správce

Jestliže do {$a->days} dnů nepotvrdíte platby u {$a->pending} zpracovávaných transakcí pro kurz "{$a->course}", vyprší u těchto transakcí doba platnosti.

Tato zpráva vás upozorňuje, že jste neaktivovali systém automatického zpracování transakcí, takže musíte každou platbu potvrdit či zamítnout ručně.

Potvrzení/Zamítnutí plateb provedete na adrese: {$a->url}.

Chcete-li zapnout automatické zpracování transakcí (nebudete potom dostávat upozorňovací e-maily), můžete to provést na této stránce: {$a->enrolurl}.';
$string['pendingordersemailteacher'] = 'Zpráva pro učitele

Jestliže do {$a->days} dnů nepřijmete platby u {$a->pending} zpracovávaných transakcí pro kurz "{$a->course}" (o celkové výši {$a->currency} {$a->sumcost}), vyprší u těchto transakcí doba platnosti.

Správce Moodlu neaktivoval systém automatického zpracování transakcí, proto musíte každou platbu potvrdit či zamítnout ručně.

Potvrzení/Zamítnutí plateb provedete na adrese: {$a->url}.';
$string['pendingorderssubject'] = 'UPOZORNĚNÍ: {$a->course}, {$a->pending} transakcí vyprší během {$a->days} dnů.';
$string['pluginname'] = 'Authorize.Net';
$string['reason11'] = 'Byla podána duplicitní transkace.';
$string['reason13'] = 'Přihlašovací ID obchodníka je neplatné nebo je účet neaktivní.';
$string['reason16'] = 'Transakce nebyla nalezena';
$string['reason17'] = 'Tento typ kreditní karty obchodník nepřijímá.';
$string['reason245'] = 'Tento typ e-šeku není povolen při použití platebního kanálu hostovaného způsobu platby';
$string['reason246'] = 'Tento typ e-šeku není povolen';
$string['reason27'] = 'Výsledek kontroly AVS pro tuto transakci: neshodné adresní údaje. Zadaná adresa se neshoduje s adresou držitele karty.';
$string['reason28'] = 'Tento typ kreditní karty obchodník nepřijímá.';
$string['reason30'] = 'Neplatné nastavení systému zpracovávajícího transakce. Obraťte se na společnost zajišťující pro daného obchodníka zpracování transakcí.';
$string['reason39'] = 'Zadaný kód měny je buď neplatný, nebo není podporován či povolen pro tohoto obchodníka, nebo mu není přiřazen směnný kurs.';
$string['reason43'] = 'Systém zpracovávající transakce obsahuje nesprávné údaje o obchodníkovi. Obraťte se na společnost zajišťující pro daného obchodníka zpracování transakcí.';
$string['reason44'] = 'Transakce byla zamítnuta. Chyba filtru bezpečnostního kódu karty!';
$string['reason45'] = 'Transakce byla zamítnuta. Chyba filtru bezpečnostního kódu karty/AVS!';
$string['reason47'] = 'Částka požadovaná k úhradě nesmí být vyšší než původně autorizovaná částka.';
$string['reason5'] = 'Požadována je platná částka.';
$string['reason50'] = 'Vyřizuje se úhrada této transakce, proto ji nyní nelze refundovat.';
$string['reason51'] = 'Úhrn refundovaných prostředků (kreditu) je vyšší než původní částka transakce.';
$string['reason54'] = 'Odkazovaná transakce nesplňuje kritéria pro uvolnění kreditu.';
$string['reason55'] = 'Úhrn refundovaných prostředků (kreditu) by překročil původní částku debetu dané transakce.';
$string['reason56'] = 'Tento obchodník přijímá jen transakce e-šeků, transakce kreditních karet nejsou povoleny.';
$string['refund'] = 'Refundovat';
$string['refunded'] = 'Refundováno';
$string['returns'] = 'Vrácené platby';
$string['reviewfailed'] = 'Kontrola neprošla';
$string['reviewnotify'] = 'Vaše platba bude zkontrolována. Během několika dnů byste měli obdržet e-mail od vyučujícího kurzu.';
$string['sendpaymentbutton'] = 'Odeslat platbu';
$string['settled'] = 'Uhrazeno';
$string['settlementdate'] = 'Datum úhrady';
$string['shopper'] = 'Zákazník';
$string['status'] = 'Povolit zápisy do kurzu metodou Authorize.Net';
$string['subvoidyes'] = 'Refundovaná transakce {$a->transid} bude zrušena a na váš účet bude připsána částka {$a->amount}. Pokračovat?';
$string['tested'] = 'Otestováno';
$string['testmode'] = '[TESTOVACÍ REŽIM]';
$string['testwarning'] = 'Rezervace prostředků/Rušení transakcí/Refundace transakcí proběhly v testovacím režimu bez problémů; v databázi nebyl žádný záznam aktualizován ani do ní vložen.';
$string['transid'] = 'ID transakce';
$string['underreview'] = 'Právě se kontroluje';
$string['unenrolselfconfirm'] = 'Skutečně se chcete vyškrtnout z kurzu "{$a}"?';
$string['unenrolstudent'] = 'Vyškrtnout studenta?';
$string['uploadcsv'] = 'Nahrát CSV soubor';
$string['usingccmethod'] = 'Zapsat s použitím <a href="{$a->url}"><strong>Kreditní karty</strong></a>';
$string['usingecheckmethod'] = 'Zapsat s použitím <a href="{$a->url}"><strong>e-Šeku</strong></a>';
$string['verifyaccount'] = 'Ověřit účet Authorize.Net';
$string['verifyaccountresult'] = '<b>Výsledek ověření:</b> {$a}';
$string['void'] = 'Zrušit';
$string['voidyes'] = 'Transakce bude zrušena. Pokračovat?';
$string['welcometocoursesemail'] = 'Zpráva pro studující(ho)

Děkujeme za vaše platby. Jste zapsán(a) do těchto kurzů:

{$a->courses}

Svůj uživatelský profil můžete upravit zde:
{$a->profileurl}

Podrobné údaje o svých platbách najdete zde:
{$a->paymenturl}';
$string['youcantdo'] = 'Nemáte oprávnění provést akci \'{$a->action}\'';
$string['zipcode'] = 'PSČ';
