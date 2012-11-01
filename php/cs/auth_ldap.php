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
 * Strings for component 'auth_ldap', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   auth_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'Nelze vytvořit nový účet ve službě Active Directory. Ujistěte se, že jsou splněny všechny požadavky (LDAPS spojení, bind user má dostatečná práva apod.)';
$string['auth_ldap_attrcreators'] = 'Seznam skupin a kontextů, jejichž členové mají oprávnění vytvářet atributy. Více skupin oddělte \';\'. Obvykle něco jako \'cn=teachers,ou=staff,o=myorg\'.';
$string['auth_ldap_attrcreators_key'] = 'Tvůrce atributů';
$string['auth_ldap_auth_user_create_key'] = 'Vytvořit uživatele externě';
$string['auth_ldap_bind_dn'] = 'Chcete-li používat nějaký účet (bind-user) k vyhledání uživatelů, specifikujte jej zde. Příklad: \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Jednoznačné jméno (DN)';
$string['auth_ldap_bind_pw'] = 'Heslo pro bind-user';
$string['auth_ldap_bind_pw_key'] = 'Heslo';
$string['auth_ldap_bind_settings'] = 'Nastavení bind';
$string['auth_ldap_changepasswordurl_key'] = 'Heslo - změna URL';
$string['auth_ldap_contexts'] = 'Seznam kontextů, ve kterých se nacházejí uživatelé. Jednotlivé kontexty oddělujte středníkem. Příklad: \'ou=uzivatele,o=naseskola; ou=dalsi,o=naseskola\'';
$string['auth_ldap_contexts_key'] = 'Kontexty';
$string['auth_ldap_create_context'] = 'Povolíte-li registrování uživatelů na základě e-mailu, určete kontext, ve kterém budou noví uživatelé vytvářeni. Tento kontext by měl být z bezpečnostních důvodů odlišný od kontextu ostatních uživatelů. Není třeba přidávat tento kontext do proměnné auth_ldap_contexts, Moodle automaticky hledá uživatele i v tomto kontextu.<br /><b>Upozornění!</b>Má-li vytváření uživatelských účtů fungovat, musíte upravit funkci auth_user_create() v souboru auth/ldap/lib.php.';
$string['auth_ldap_create_context_key'] = 'Kontext pro nové uživatele';
$string['auth_ldap_create_error'] = 'Chyba při vytváření uživatele v LDAP';
$string['auth_ldap_creators'] = 'Seznam skupin, jejichž členové jsou oprávněni vytvářet nové kurzy. Jednotlivé skupiny oddělujte středníkem. Příklad: \'cn=ucitele,ou=zamestnanci,o=naseskola\'';
$string['auth_ldap_creators_key'] = 'Tvůrci';
$string['auth_ldapdescription'] = 'Tato metoda poskytuje ověření uživatele proti serveru LDAP. Je-li zadané jméno a heslo platné, Moodle si vytvoří nový záznam o uživateli ve své vlastní databázi. Tento modul umí načíst informace ze serveru LDAP a přednastavit požadované pole v Moodlu. Při dalším přihlašování se již pouze ověřuje uživatelské jméno a heslo.';
$string['auth_ldap_expiration_desc'] = 'Zvolte Ne, chcete-li zakázat ověřování vypršelých hesel nebo čtení \'passwordexpiration time\' přímo z LDAP';
$string['auth_ldap_expiration_key'] = 'Vypršení';
$string['auth_ldap_expiration_warning_desc'] = 'Kolik dní před vypršením hesla zobrazovat varování';
$string['auth_ldap_expiration_warning_key'] = 'Varování o vypršní';
$string['auth_ldap_expireattr_desc'] = 'Volitelné: přenastavuje hodnotu LDAP atributu, ve kterém je uložen čas vypršení hesla';
$string['auth_ldap_expireattr_key'] = 'Atribut vypršení';
$string['auth_ldapextrafields'] = 'Tato pole jsou volitelná. Můžete vybrat, která pole s informacemi ze <b>serveru LDAP</b> budou použita jako přednastavená v Moodlu. <p>Necháte-li pole prázdná, nepřevezmou se žádné údaje z LDAP a Moodle použije vlastní přednastavené hodnoty. </p><p>V každém případě si uživatel může tyto hodnoty měnit po přihlášení sám.</p>';
$string['auth_ldap_graceattr_desc'] = 'Volitelné: přenastavuje hodnotu atributu \'gracelogin\'';
$string['auth_ldap_gracelogin_key'] = 'Atribut \'gracelogin\'';
$string['auth_ldap_gracelogins_desc'] = 'Povolit podporu LDAP gracelogin (tzv. přihlášení z milosti). Uživatelé se mohou přihlásit i po vypršení hesla, dokud jim počítadlo přihlášení z milosti neklesne na 0. Uživatelé jsou v případě vypršení hesla upozorňováni.';
$string['auth_ldap_gracelogins_key'] = 'Přihlášení z milosti';
$string['auth_ldap_groupecreators'] = 'Seznam skupin a kontextů jejichž členové mají dovolenou vytvářet skupiny. Více skupin oddělte \';\'. Obvykle něco jako \'cn=teachers,ou=staff,o=myorg\'Další';
$string['auth_ldap_groupecreators_key'] = 'Tvůrci skupin';
$string['auth_ldap_host_url'] = 'Zadejte URL serveru LDAP. Například \'ldap://ldap.naseskola.cz/\' nebo \'ldaps://ldap.naseskola.cz/\'';
$string['auth_ldap_host_url_key'] = 'URL hostitele';
$string['auth_ldap_ldap_encoding'] = 'Specifikujte kódování, používané serverem LDAP. Nejpravděpodobněji utf-8, MS AD v2 implicitně používá takové platformy kódování, jako cp1252, cp1250 atd.';
$string['auth_ldap_ldap_encoding_key'] = 'Kódování LDAP';
$string['auth_ldap_login_settings'] = 'Nastavení přihlášení';
$string['auth_ldap_memberattribute'] = 'Volitelné: přenastavuje název atributu člena skupiny (user member attribute), pokud uživatel patří do skupiny. Většinou \'member\'';
$string['auth_ldap_memberattribute_isdn'] = 'Volitelné: přenastavuje manipulaci s hodnotami členství, 0 nebo 1';
$string['auth_ldap_memberattribute_isdn_key'] = 'Atribut členství (member) používá dn';
$string['auth_ldap_memberattribute_key'] = 'Atribut členství';
$string['auth_ldap_noconnect'] = 'Modul LDAP se nemůže připojit k serveru: {$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP modul se nemůže připojit k žádnému ze serverů: {$a}';
$string['auth_ldap_noextension'] = 'Tento autentizační modul vyžaduje nainstalované a povolené rozšíření PHP LDAP. Toto rozšíření nebylo nalezeno.';
$string['auth_ldap_no_mbstring'] = 'Pro vytváření uživatelů v Active Directory musíte povolit rozšíření mbstring.';
$string['auth_ldapnotinstalled'] = 'Nelze použít ověření LDAP. PHP LDAP modul není nainstalován.';
$string['auth_ldap_objectclass'] = 'Volitelné: přenastavuje parametr objectClass použitý při pojmenovávání/vyhledávání uživatelů. Většinou nemusíte měnit.';
$string['auth_ldap_objectclass_key'] = 'Třída objektu';
$string['auth_ldap_opt_deref'] = 'Určuje chování aliasů během vyhledávání. Vyberte jednu z následujících hodnot: "Ne" (LDAP_DEREF_NEVER) nebo "Ano" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Zrušit vazby s aliasy';
$string['auth_ldap_passtype'] = 'Specifikujte formát nového nebo změněného hesla na LDAP serveru.';
$string['auth_ldap_passtype_key'] = 'Formát hesla';
$string['auth_ldap_passwdexpire_settings'] = 'Nastavení vypršení hesla LDAP';
$string['auth_ldap_preventpassindb'] = 'Má se zabránit ukládání hesel v databázi Moodlu? Zvolíte-li "ano", nebudou hesla v databázi ukládána.';
$string['auth_ldap_preventpassindb_key'] = 'Skrýt hesla';
$string['auth_ldap_search_sub'] = 'Prohledávat uživatele v subkontextech.';
$string['auth_ldap_search_sub_key'] = 'Prohledávat subkontexty.';
$string['auth_ldap_server_settings'] = 'Nastavení serveru LDAP';
$string['auth_ldap_unsupportedusertype'] = 'Funkce ldap user_create() nepodporuje zvolený typ uživatele: {$a}';
$string['auth_ldap_update_userinfo'] = 'Aktualizovat informace o uživateli (příjmení, křestní jméno, adresa...) ze serveru LDAP do Moodlu. Dle potřeby definujte \'Mapování dat\'.';
$string['auth_ldap_user_attribute'] = 'Volitelné: přenastavuje atribut použitý pro pojmenování a vyhledávání uživatelů. Většinou \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Atribut uživatele';
$string['auth_ldap_user_exists'] = 'Toto uživatelské jméno již v LDAP existuje';
$string['auth_ldap_user_settings'] = 'Nastavení prohledávání uživatelů';
$string['auth_ldap_user_type'] = 'Vyberte, jak jsou uživatelé ukládáni v LDAP. Toto nastavení zároveň určuje, jak se bude chovat vypršení hesla (login expiration), přihlášení z milosti (grace logins) a tvorba uživatelů.';
$string['auth_ldap_user_type_key'] = 'Typ uživatele';
$string['auth_ldap_usertypeundefined'] = 'config.user_type není definován nebo funkce  ldap_expirationtime2unix zvloený typ nepodporuje!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type není definován nebo funkce  ldap_expirationtime2unix zvloený typ nepodporuje!';
$string['auth_ldap_version'] = 'Verze protokolu LDAP, kterou používá váš server.';
$string['auth_ldap_version_key'] = 'Verze';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Zda se má povolit SSO přihlašování pomocí účtu v doméně NTLM. <strong>Pozor:</strong> tato metoda vyžaduje další konfiguraci na straně webového serveru. Podrobnosti jsou uvedeny v <a href="http://docs.moodle.org/en/NTLM_authentication">dokumentaci</a>.';
$string['auth_ntlmsso_enabled_key'] = 'Povolit';
$string['auth_ntlmsso_ie_fastpath'] = 'Pokud vaši uživatelé používají pouze MS Internet Explorer, můžete zde nastavit "ano" a urychlit tak průběh ověřování.';
$string['auth_ntlmsso_ie_fastpath_key'] = 'Pouze MS IE';
$string['auth_ntlmsso_subnet'] = 'Je-li nastaveno, dojde k ověření pomocí NTLM SSO pouze u klientů v dané podsíti. Více podsítí oddělujte čárkou. Formát: xxx.xxx.xxx.xxx/bitmask';
$string['auth_ntlmsso_subnet_key'] = 'Podsíť';
$string['auth_ntlmsso_type'] = 'Autentizační metoda nastavená na webovém serveru k ověřování uživatelů. Pokud nevíte, zvolte NTLM.';
$string['auth_ntlmsso_type_key'] = 'Typ autentizace';
$string['connectingldap'] = 'Připojování k LDAP serveru ...';
$string['creatingtemptable'] = 'Vytvářím dočasnou tabulku {$a}';
$string['didntfindexpiretime'] = 'funkce password_expire() nenašla čas expirace';
$string['didntgetusersfromldap'] = 'Server LDAP nevrátil žádné uživatele. Možná se jedná o chybu.';
$string['gotcountrecordsfromldap'] = 'Server LDAP vrátil {$a} záznamů';
$string['morethanoneuser'] = 'Pozor! Je to divné, ale v adresáři LDAP bylo nalezeno více uživatelských záznamů. Používá se pouze první z nich.';
$string['needbcmath'] = 'Pro podporu funkce přihlášení z milosti (grace login) na Active Directory je potřeba rozšíření BCMath.';
$string['needmbstring'] = 'Pro změnu hesel v Active Directory je potřeba rozšíření mbstring.';
$string['nodnforusername'] = 'Chyba ve funkci user_update_password().  Pro uživatele {$a->username} neexistuje DN';
$string['noemail'] = 'Nebylo možno Vám poslat e-mail.';
$string['notcalledfromserver'] = 'Tento skript by neměl být volán z web serveru!';
$string['noupdatestobedone'] = 'Nejsou potřeba aktualizace';
$string['nouserentriestoremove'] = 'Žádné uživatelské položky ke smazání';
$string['nouserentriestorevive'] = 'Žádné uživatelské položky k obnově';
$string['nouserstobeadded'] = 'Žádný uživatel k přidání';
$string['ntlmsso_attempting'] = 'Pokouším se o automatické přihlášení přes NTLM ...';
$string['ntlmsso_failed'] = 'Automatické přihlášení selhalo, zkuste normální přihlašovací stránku...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO je vypnuto';
$string['ntlmsso_unknowntype'] = 'Neznámý typ ntlmsso!';
$string['pluginname'] = 'LDAP';
$string['pluginnotenabled'] = 'Modul není povolen!';
$string['renamingnotallowed'] = 'V LDAP není povoleno přejmenovat uživatele';
$string['rootdseerror'] = 'Chyba dotazu rootDSE pro Active Directory';
$string['updatepasserror'] = 'Chyba ve funkci user_update_password(). Chybový kód: {$a->errno}; Chybové hlášení: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Chyba ve funkci user_update_password() při čtení hodnoty pro čas vypršení platnosti hesla. Chybový kód: {$a->errno}; Chybové hlášení: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Chyba ve funkci user_update_password() při modifikaci času vypršení platnosti a/nebo dodatečného přihlášení z milosti. Chybový kód: {$a->errno}; Chybové hlášení: {$a->errstring}';
$string['updateremfail'] = 'Chyba při aktualizaci LDAP záznamu. Chybový kód: {$a->errno}; Chybové hlášení: {$a->errstring}<br />Klíč ({$a->key}) - stávající hodnota: \'{$a->ouvalue}\' nová hodnota: \'{$a->nuvalue}\'';
$string['updateremfailamb'] = 'Nepodařilo se aktualizovat LDAP z důvodu dvojznačného pole {$a->key}; Stávající hodnota: \'{$a->ouvalue}\' nová hodnota: \'{$a->nuvalue}\'';
$string['updateusernotfound'] = 'Nelze najít uživatele při externě volané aktualizaci. Podrobnosti hledání: kořen hledání: \'{$a->userdn}\'; filtr záznamů: \'(objectClass=*)\'; atributy hledání: {$a->attribs}';
$string['useracctctrlerror'] = 'Chyba při získávání userAccountControl - {$a}';
$string['user_activatenotsupportusertype'] = 'auth: funkce LDAP user_activate() nepodporuje vybraný typ uživatele: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: funkce LDAP user_disable() nepodporuje vybraný typ uživatele: {$a}';
$string['userentriestoadd'] = 'Uživatelské položky k přidání: {$a}';
$string['userentriestoremove'] = 'Uživatelské položky ke smazání: {$a}';
$string['userentriestorevive'] = 'Uživatelské položky k obnově: {$a}';
$string['userentriestoupdate'] = 'Uživatelské položky k aktualizaci: {$a}';
$string['usernotfound'] = 'Uživatel nebyl nalezen v LDAP';
