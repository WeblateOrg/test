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
 * Strings for component 'mnet', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutyourhost'] = 'O vašem serveru';
$string['accesslevel'] = 'Úroveň přístupu';
$string['addhost'] = 'Přidat hostitele';
$string['addnewhost'] = 'Přidat nového hostitele';
$string['addtoacl'] = 'Přidat na seznam pro řízení přístupu';
$string['allhosts'] = 'Všichni hostitelé';
$string['allhosts_no_options'] = 'Při prohlížení vícero hostitelů nejsou volby k dispozici';
$string['allow'] = 'Povolit';
$string['applicationtype'] = 'Typ aplikace';
$string['authfail_nosessionexists'] = 'Přihlašování neuspělo: Session mnet neexistuje';
$string['authfail_sessiontimedout'] = 'Přihlašování neuspělo: Session mnet vypršela.';
$string['authfail_usermismatch'] = 'Přihlašování neuspělo: uživatel nenalezen.';
$string['authmnetdisabled'] = 'Autentizační modul MNet <strong>není povolen</strong>.';
$string['badcert'] = 'Toto není platný certifikát.';
$string['certdetails'] = 'Detaily certifikátu';
$string['configmnet'] = 'Technologie MNet umožňuje vašemu serveru komunikovat s jinými servery nebo službami.';
$string['couldnotgetcert'] = 'Na serveru <br />{$a}<br /> nebyl nalezen žádný certifikát. Server může mít chybu v konfiguraci nebo není možné se k němu připojit.';
$string['couldnotmatchcert'] = 'Tento certifikát neodpovídá aktuálnímu certifikátu zveřejněnému serverem.';
$string['courses'] = 'kurzy';
$string['courseson'] = 'kurzy na';
$string['currentkey'] = 'Stávající veřejný klíč';
$string['current_transport'] = 'Stávající transport';
$string['databaseerror'] = 'Nelze zapsat detaily do databáze';
$string['deleteaserver'] = 'Odstraňuji server';
$string['deletedhosts'] = 'Zrušení hostitelé: {$a}';
$string['deletehost'] = 'Odstranit hostitele';
$string['deletekeycheck'] = 'Určitě chcete odstranit tento klíč?';
$string['deleteoutoftime'] = 'Časový interval v délce 60 vteřin pro odstranění tohoto klíče vypršel. Začněte znovu.';
$string['deleteuserrecord'] = 'SSO ACL: odstranit záznam uživatele \'{$a->user}\' z {$a->host}.';
$string['deletewrongkeyvalue'] = 'Vyskytla se chyba. Pokud jste se právě nesnažili odstranit SSL klíč vašeho serveru, je možné, že jste se stali cílem zlomyslného útoku. Nebyla provedena žádná akce.';
$string['deny'] = 'Zakázat';
$string['description'] = 'Popis';
$string['duplicate_usernames'] = 'Nepodařilo se vytvořit index nad sloupci "mnethostid" a "username" ve vaší tabulce uživatelů.<br />K tomu může dojít, obsahuje-li tabulka <a href="{$a}" target="_blank">duplicitní uživatelská jména</a>.<br />Upgrade by měl i přesto proběhnout v pořádku. Po kliknutí na odkaz uvedený výše se otevře nové okno s instrukcemi pro odstranění tohoto problému. Můžete se mu věnovat po skončení této aktualizace.';
$string['enabled_for_all'] = '(Tato služba byla povolena pro všechny hostitele).';
$string['enterausername'] = 'Vložte jméno uživatele nebo seznam uživatelských jmen oddělených čárkami';
$string['error7020'] = 'Tato chyba se typicky vyskytuje v případech, kdy byl na vzdáleném serveru vytvořen záznam pro vaše stránky, který ale chybně definuje parametr "wwwroot" - např. "http://vaseskola.cz" namísto "http://www.vaseskola.cz". Měli byste kontaktovat správce vzdáleného serveru a sdělit mu hodnotu parametru wwwroot, jak je uvedena ve vašem konfiguračním souboru config.php.';
$string['error7022'] = 'Zpráva, kterou jste zaslali na vzdálený server, byla korektně zašifrována, ale nebyla podepsána. Toto je velmi neočekávané chování. Při výskytu byste měli nahlásit chybu a uvést maximum dostupných informací o použité verzi Moodlu apod.';
$string['error7023'] = 'Vzdálený server se pokusil dešifrovat vaši zprávu pomocí všech dostupných klíčů, které si pro vaše stránky eviduje. Všechny tyto pokusy selhaly. Tento problém by měla vyřešit ručně opakovaná výměna klíčů. K této chybě by nemělo docházet; výjimku tvoří případy, kdy spolu oba servery nemohly po dobu několika měsíců komunikovat.';
$string['error7024'] = 'Vzdálenému serveru zasíláte nešifrovanou zprávu, ale server nešifrovanou komunikaci s vaším serverem neakceptuje. Toto je velmi neočekávané chování. Při výskytu byste měli nahlásit chybu a uvést maximum dostupných informací o použité verzi Moodlu apod.';
$string['error7026'] = 'Klíč, kterým byla podepsána vaše zpráva, se liší od klíče, který si eviduje vzdálený server. Vzdálený server se pokusil získat váš aktuální klíč, ale tento pokus selhal. Proveďte ručně výměnu klíčů a pokuste se odeslat zprávu znovu.';
$string['error709'] = 'Vzdálenému serveru se nepodařilo získat váš SSL klíč.';
$string['expired'] = 'Tento klíč vypršel dne';
$string['expires'] = 'Platný do';
$string['expireyourkey'] = 'Odstranit tento klíč';
$string['expireyourkeyexplain'] = 'Moodle automaticky obměňuje vaše klíče každých 28 dnů (implicitně), ale můžete tento klíč odvolat <em>ručně</em> kdykoli. To se může hodit v případě, že máte dojem, že tento klíč byl zneužit. Okamžitě bude vygenerována náhrada.<br />Odstranění tohoto klíče znemožní ostatním serverům v síti MNet komunikovat s vaším serverem, dokud ručně nedodáte jejich správcům váš nový klíč.';
$string['exportfields'] = 'Pole pro export';
$string['failedaclwrite'] = 'Pokus o přidání záznamu do seznamu pro řízení přístupu přes MNet pro uživatele \'{$a}\' selhal.';
$string['findlogin'] = 'Najít uživatelské jméno';
$string['forbidden-function'] = 'Tato funkce nebyla zpřístupněna pro RPC.';
$string['forbidden-transport'] = 'Pokoušíte se použít nepovolenou transportní metodu.';
$string['forcesavechanges'] = 'Nucené uložení změn';
$string['helpnetworksettings'] = 'Konfigurovat vzájemnou komunikaci mezi servery v síti MNet';
$string['hidelocal'] = 'Skrýt místní uživatele';
$string['hideremote'] = 'Skrýt vzdálené uživatele';
$string['host'] = 'hostitel';
$string['hostcoursenotfound'] = 'Hostitel nebo kurz nenalezen';
$string['hostdeleted'] = 'OK - hostitel odstraněn';
$string['hostexists'] = 'Záznam pro tohoto hostitele již existuje (může se jednat o odstraněný server). <a href="{$a}">Klikněte sem</a> pro editaci tohoto záznamu.';
$string['hostlist'] = 'Seznam propojených serverů';
$string['hostname'] = 'URL hostitele';
$string['hostnamehelp'] = 'Plně kvalifikované doménové jméno (FQDN) vzdáleného hostitele, například www.jejichskola.cz';
$string['hostnotconfiguredforsso'] = 'Tento server není nastaven pro vzdálené přihlašování.';
$string['hostsettings'] = 'Nastavení hostitele';
$string['http_self_signed_help'] = 'Povolit spojení se vzdáleným hostitelem pomocí samopodepsaného certifikátu DIY SSL.';
$string['https_self_signed_help'] = 'Povolit spojení se vzdáleným hostitelem pomocí samopodepsaného certifikátu DIY SSL přes http';
$string['https_verified_help'] = 'Povolit spojení se vzdáleným hostitelem pomocí ověřeného certifikátu SSL.';
$string['http_verified_help'] = 'Povolit spojení se vzdáleným hostitelem pomocí ověřeného certifikátu SSL, ale přes http (ne https).';
$string['id'] = 'ID';
$string['idhelp'] = 'Tato hodnota je přiřazována automaticky a nelze ji měnit.';
$string['importfields'] = 'Importovat pole';
$string['inspect'] = 'Kontrolovat';
$string['invalidaccessparam'] = 'Neplatný parametr přístupu.';
$string['invalidactionparam'] = 'Neplatný parametr akce.';
$string['invalidhost'] = 'Musíte poskytnout platný identifikátor hostitele';
$string['invalidpubkey'] = 'Toto není platný klíč SSL. ({$a})';
$string['invalidurl'] = 'Neplatný parametr URL.';
$string['ipaddress'] = 'IP adresa';
$string['is_in_range'] = 'IP adresa <code>{$a}</code> odpovídá důvěryhodnému hostiteli.';
$string['ispublished'] = 'Tuto službu vám poskytuje server {$a}.';
$string['issubscribed'] = 'Server {$a} využívá této služby poskytované vaším serverem.';
$string['keydeleted'] = 'Váš klíč byl úspěšně smazán a nahrazen.';
$string['keymismatch'] = 'Veřejný klíč, který evidujete u tohoto hostitele, se liší od klíče, který on momentálně zveřejňuje:';
$string['last_connect_time'] = 'Naposledy připojen';
$string['last_connect_time_help'] = 'Kdy jste naposledy byli připojeni k tomuto hostiteli';
$string['last_transport_help'] = 'Transport, který jste použili pro poslední připojení k tomuto hostiteli.';
$string['leavedefault'] = 'Použít výchozí hodnoty';
$string['listservices'] = 'Seznam služeb';
$string['loginlinkmnetuser'] = '<br />Pokud jste registrováni na některém z partnerských serverů sítě MNet a můžete <a href="{$a}">zde potvrdit vaši emailovou adresu</a>, budete přesměrováni na přihlašovací formulář na vašem domovském serveru.<br />';
$string['logs'] = 'protokoly';
$string['managemnetpeers'] = 'Správa partnerských serverů';
$string['method'] = 'Metoda';
$string['methodhelp'] = 'Nápověda pro metodu {$a}';
$string['methodsavailableonhost'] = 'Dostupné metody na {$a}';
$string['methodsavailableonhostinservice'] = 'Dostupné metody služby {$a->service} na {$a->host}';
$string['methodsignature'] = 'Signatura metody {$a}';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = 'Sloučit až do 3 řetězců a vrátit výsledek';
$string['mnetdisabled'] = 'Síťové služby MNet <strong>nejsou povoleny</strong>.';
$string['mnetidprovider'] = 'Poskytovatel MNet identity';
$string['mnetidproviderdesc'] = 'Pomocí tohoto nástroje můžete získat odkaz, na němž se budete moci přihlásit a poté přejít na tyto stránky. Tuto funkci lze použít pouze tehdy, pokud jste se již někdy v minulosti pomocí sítě MNet na tyto stránky přihlásili.';
$string['mnetidprovidermsg'] = 'Přihlaste se na stránkách {$a} a poté přejděte na naše stránky pomocí MNet.';
$string['mnetidprovidernotfound'] = 'Bohužel, nenalezen žádný záznam.';
$string['mnetlog'] = 'Protokoly';
$string['mnetpeers'] = 'Partneři';
$string['mnetservices'] = 'Služby';
$string['mnet_session_prohibited'] = 'Uživatelé vašeho domovského serveru se momentálně nemohou připojit na {$a}.';
$string['mnetsettings'] = 'Nastavení sítě MNet';
$string['moodle_home_help'] = 'Cesta k domovské stránce MNet aplikace na vzdáleném hostiteli, např. /moodle/.';
$string['name'] = 'Název';
$string['net'] = 'Síťové služby';
$string['networksettings'] = 'Nastavení sítě';
$string['never'] = 'Nikdy';
$string['noaclentries'] = 'Seznamu pro řízení přístupu přes SSO neobsahuje žádné záznamy';
$string['nocurl'] = 'Knihovna PHP cURL není nainstalována';
$string['nolocaluser'] = 'Pro vzdáleného uživatele neexistuje lokální záznam. Tento server nevytváří uživatele automaticky. Prosím, kontaktujte svého správce.';
$string['nomodifyacl'] = 'Nemáte oprávnění měnit seznam pro řízení přístupu k MNet.';
$string['nonmatchingcert'] = 'Předmět certifikátu:<br /><em>{$a->subject}</em><br /> neodpovídá hostiteli, ze kterého pochází:<br /><em>{$a->host}</em>.';
$string['nopubkey'] = 'Vyskytl se problém se získáním veřejného klíče.<br />Je možné, že hostitel nemá povolenu síť MNet, nebo je klíč neplatný.';
$string['nosite'] = 'Nemohu najít titulní stránku';
$string['nosuchfile'] = 'Soubor nebo funkce {$a} neexistuje.';
$string['nosuchfunction'] = 'Nemohu najít funkci, nebo je tato funkce pro RPC zakázána.';
$string['nosuchmodule'] = 'Funkce nebyla správně adresována a nelze ji najít. Formát adresace je mod/jmeno_modulu/lib/jmeno_funkce';
$string['nosuchpublickey'] = 'Nelze získat veřejný klíč pro ověření podpisu.';
$string['nosuchservice'] = 'Služba RPC na tomto hostiteli neběží.';
$string['nosuchtransport'] = 'Neexistuje transport s tímto ID.';
$string['notBASE64'] = 'Tento řetězec není ve formátu Base64 Encoded. Nemůže to být platný klíč.';
$string['not_in_range'] = 'IP adresa <code>{$a}</code> neodpovídá žádnému důvěryhodnému hostiteli.';
$string['notPEM'] = 'Tento klíč není ve formátu PEM. Nebude fungovat.';
$string['notpermittedtojump'] = 'Nemáte oprávnění zahájit vzdálenou relaci z tohoto Moodle serveru.';
$string['notpermittedtoland'] = 'Nemáte povolení zahájit vzdálenou relaci.';
$string['off'] = 'Vypnuto';
$string['on'] = 'Zapnuto';
$string['options'] = 'Možnosti';
$string['permittedtransports'] = 'Povolené transporty';
$string['phperror'] = 'Vyskytla se interní chyba PHP, která znemožnila splnění Vašeho požadavku.';
$string['position'] = 'Pozice';
$string['postrequired'] = 'Odstraňování se může provést pouze na základě požadavku odeslaném metodou POST.';
$string['profileexportfields'] = 'Exportovaná pole';
$string['profilefields'] = 'Profil polí';
$string['profileimportfields'] = 'Importovaná pole';
$string['promiscuous'] = 'Smíšený';
$string['publickey'] = 'Veřejný klíč';
$string['publickey_help'] = 'Veřejný klíč je automaticky získán ze vzdáleného serveru.';
$string['publickeyrequired'] = 'Musíte zadat veřejný klíč.';
$string['publish'] = 'Poskytovat službu';
$string['reallydeleteserver'] = 'Určitě chcete odstranit server?';
$string['receivedwarnings'] = 'Byla přijata následující upozornění';
$string['recordnoexists'] = 'Záznam neexistuje';
$string['reenableserver'] = 'Ne - zvolte tuto možnost pro opětovné povolení tohoto serveru';
$string['registerallhosts'] = 'Automaticky registrovat všechny hostitele (promiskuitní režim)';
$string['registerallhostsexplain'] = 'Zde můžete nastavit, aby byli automaticky registrováni všichni hostitelé, kteří se k vám připojí. Pokud se k vám připojí nějaký server pomocí MNet a požádá o váš veřejný klíč, bude automaticky přidán do vašeho seznamu známých serverů.<br />Níže máte možnost konfigurovat výchozí služby pro "Všechny hostitele". Zde povolené služby budou k dispozici všem partnerským serverům v rámci vaší sítě MNet.';
$string['registerhostsoff'] = 'Promiskuitní režim je momentálně <b>vypnutý</b>';
$string['registerhostson'] = 'Promiskuitní režim je momentálně <b>zapnutý</b>';
$string['remotecourses'] = 'Vzdálené kurzy';
$string['remotehost'] = 'Vzdálený server';
$string['remotehosts'] = 'Vzdálení hostitelé';
$string['remoteuserinfo'] = 'Vzdálený uživatel systému {$a->remotetype} - profil získán z <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'Síťové služby vyžadují rozšíření OpenSSL';
$string['restore'] = 'Obnovit';
$string['returnvalue'] = 'Návratová hodnota';
$string['reviewhostdetails'] = 'Přezkoumat detaily hostitele';
$string['reviewhostservices'] = 'Přezkoumat služby hostitele';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP (nešifrované)';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (samopodepsané)';
$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (samopodepsané)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (podepsané)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (podepsané)';
$string['selectaccesslevel'] = 'Vyberte ze seznamu úroveň přístupu.';
$string['selectahost'] = 'Vyberte vzdáleného hostitele.';
$string['service'] = 'Název služby';
$string['serviceid'] = 'ID služby';
$string['servicesavailableonhost'] = 'Služby dostupné na {$a}';
$string['serviceswepublish'] = 'Služby, které poskytujeme serveru {$a}.';
$string['serviceswesubscribeto'] = 'Služby, které využíváme na serveru {$a}.';
$string['settings'] = 'Nastavení';
$string['showlocal'] = 'Ukázat lokální uživatele';
$string['showremote'] = 'Ukázat vzdálené uživatele';
$string['ssl_acl_allow'] = 'SSO ACL: Povolit uživatele {$a->user} z {$a->host}';
$string['ssl_acl_deny'] = 'SSO ACL: Odmítnout uživatele {$a->user} z {$a->host}';
$string['ssoaccesscontrol'] = 'Řízení přístupu přes SSO';
$string['ssoacldescr'] = 'Na této stránce můžete konkrétním uživatelům z partnerských serverů sítě MNet povolit nebo zakázat přístup na váš server. To funguje pouze tehdy, pokud nabízíte SSO služby vzdáleným uživatelům. Pro řízení přístupu vašich vlastních uživatelů na vzdálené servery použijte systém rolí a přidělte jim oprávnění <em>mnetlogintoremote</em>.';
$string['ssoaclneeds'] = 'Aby tato funkce pracovala, musíte mít zapnutou podporu síťě MNet a zároveň mít povolený autentizační modul sítě Moodle.';
$string['strict'] = 'Striktní';
$string['subscribe'] = 'Využívat službu';
$string['system'] = 'Systém';
$string['testclient'] = 'Testovací klient MNet';
$string['testtrustedhosts'] = 'Ověřit adresu';
$string['testtrustedhostsexplain'] = 'Vložte IP adresu pro zjištění, zda je důvěryhodným hostitelem';
$string['theypublish'] = 'Publikují';
$string['theysubscribe'] = 'Předplácí';
$string['transport_help'] = 'Tyto možnosti jsou reciproční, vzdálený hostitel bude používat podepsaný SSL certifikát pouze pokud jej používáte i vy.';
$string['trustedhosts'] = 'XML-RPC hostitelé';
$string['trustedhostsexplain'] = '<p>Mechanismus důvěryhodných hostitelů umožňuje konkrétním strojům provádět volání kterékoli části Moodle API přes XML-RPC. Externí skripty takto mohou řídit chování Moodle a povolení XML-RPC může být velmi nebezpečné. Máte-li jakékoli pochybnosti, nechte tyto funkce vypnuté.</p><p>Toto <strong>není</strong> nezbytné pro podporu síťových služeb MNet.</p><p>XML-RCP povolíte vložením seznamu důvěryhodných IP addres nebo sítí, jedna na každé řádce.
Příklady:</p>Váš lokální hostitel:<br />127.0.0.1<br />Váš lokální hostitel(se síťovým blokem):<br />127.0.0.1/32<br />Jen hostitel s IP adresou 192.168.0.7:<br />192.168.0.7/32<br />Všichni hostitelé s IP adresami mezi 192.168.0.1 a 192.168.0.255:<br />192.168.0.0/24<br />Všichni hostitelé v libovolnou IP:<br />192.168.0.0/0<br />Je zřejmé, že posledně zmíněný způsob <strong>není</strong> doporučen.';
$string['turnitoff'] = 'Vypnout';
$string['turniton'] = 'Zapnout';
$string['type'] = 'Typ';
$string['unknown'] = 'Neznámý';
$string['unknownerror'] = 'V průběhu vyjednávání se vyskytla neočekávaná chyba.';
$string['usercannotchangepassword'] = 'Protože jste vzdálený uživatel, nemůžete si změnit heslo zde.';
$string['userchangepasswordlink'] = '<br />Řiďte se pokyny na vašem domovském serveru <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a> .';
$string['usersareonline'] = 'Upozornění: je k vám právě připojeno {$a} uživatelů toho serveru.';
$string['validated_by'] = 'Ověřeno pomocí sítě: <code>{$a}</code>';
$string['verifysignature-error'] = 'Ověření podpisu selhalo. Vyskytla se chyba.';
$string['verifysignature-invalid'] = 'Ověření podpisu selhalo. Zdá se, že tato zpráva nebyla podepsána vámi.';
$string['version'] = 'Verze';
$string['warning'] = 'Upozornění';
$string['wrong-ip'] = 'Vaše IP adresa se neshoduje se zaznamenanou.';
$string['xmlrpc-missing'] = 'Ve vašem PHP musíte mít nainstalováno rozšíření XML-RPC, abyste mohli používat tuto funkci.';
$string['yourhost'] = 'Váš hostitel';
$string['yourpeers'] = 'Vaši partneři';
