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
 * Strings for component 'auth_shibboleth', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   auth_shibboleth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_method'] = 'Název autentizační metody';
$string['auth_shib_auth_method_description'] = 'Vložte název autentizační metody, která bude pochopitelná pro vaše uživatele. Typicky se bude jednat o název vámi používané federace identit, např. <tt>eduID</tt>.';
$string['auth_shibboleth_contact_administrator'] = 'V případě, že nejste vázáni na žádnou z uvedených organizací a potřebujete přístup ke kurzům na tomto serveru, kontaktujte správce:';
$string['auth_shibbolethdescription'] = 'Tato metoda umožňuje vytvářet a ověřovat uživatele pomocí systému <a href="http://shibboleth.internet2.edu/" target="_blank">Shibboleth</a>.<br>Přečtěte si soubor <a href="../auth/shibboleth/README.txt" target="_blank">README</a> obsahující informace o tom, jak nastavit váš Moodle pro podporu systému Shibboleth.';
$string['auth_shibboleth_errormsg'] = 'Prosím, zvolte organizaci, k níž náležíte';
$string['auth_shibboleth_login'] = 'Přihlášení přes Shibboleth';
$string['auth_shibboleth_login_long'] = 'Přihlásit se do Moodlu přes Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Ruční přihlášení';
$string['auth_shibboleth_select_member'] = 'Jsem člen ...';
$string['auth_shibboleth_select_organization'] = 'Pro autentizaci přes Shibboleth vyberte vaší organizaci ze seznamu.';
$string['auth_shib_changepasswordurl'] = 'Heslo - změna URL';
$string['auth_shib_convert_data'] = 'API pro úpravu dat';
$string['auth_shib_convert_data_description'] = 'Toto API (aplikační rozhraní) vám umožňuje dále upravovat data, která máte k dispozici ze systému Shibboleth. Více infomací <a href="../auth/shibboleth/README.txt" target="_blank">zde</a>.';
$string['auth_shib_convert_data_warning'] = 'Soubor buď neexistuje, nebo k němu nemá proces webového serveru přístup ke čtení!';
$string['auth_shib_idp_list'] = 'Poskytovatelé identit';
$string['auth_shib_idp_list_description'] = 'Vložte seznam poskytovatelů identit (IdP), ze kterých si budou moci vaši uživatelé vybírat na stránce pro přihlášení.<br />Na každém řádku uveďte jejich entityID (viz váš metadata soubor) a název, pod kterým mají být nabídnuty uživatelům. Obě hodnoty oddělte čárkou.<br>Jako volitelný třetí parametr přidejte umístění iniciátora Shibboleth session v případě, že je váš Moodle součástí multi-federativního uspořádání.';
$string['auth_shib_instructions'] = 'Použijte <a href="{$a}">přihlášení přes Shibboleth</a>, jestliže vaše instituce tento systém podporuje.<br />V opačném případě použijte normální formulář pro přihlášení.';
$string['auth_shib_instructions_help'] = 'Zde můžete zadat vlastní pokyny uživatelům pro použití systému Shibboleth. Budou se zobrazovat na přihlašovací stránce. Vložené informace by měly obsahovat odkaz na zdroj chráněný systémem Shibboleth, který přesměruje uživatele na \'<b>{$a}</b>\', takže se uživatelé systému Shibboleth budou moci přihlásit do Moodlu. Necháte-li toto pole prázdné, budou se na přihlašovací stránce zobrazovat obecné pokyny.';
$string['auth_shib_integrated_wayf'] = 'Vlastní služba WAYF';
$string['auth_shib_integrated_wayf_description'] = 'Při zaškrtnutí bude Moodle používat vlastní službu WAYF namísto té nastavené pro Shibboleth. Moodle zobrazuje na přihlašovací stránce rozbalovací seznam, ze kterého si uživatel vybírá svého poskytovatele identity.';
$string['auth_shib_logout_return_url'] = 'Přesměrovat na URL po odhlášení';
$string['auth_shib_logout_return_url_description'] = 'Vložte URL, na které budou uživatelé služby Shibboleth přesměrováni poté, co se odhlásí.<br />Ponecháte-li prázdné, budou uživatelé přesměrováni na stránku, kam je běžně přesměrovává Moodle.';
$string['auth_shib_logout_url'] = 'URL pro odhlášení';
$string['auth_shib_logout_url_description'] = 'Vložte URL pro odhlášení od poskytovatele služeb Shibboleth. Typicky se jedná o <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Pokud si přejete používat integrovanou službu WAYF, uveďte čárkami oddělený seznam poskytovatelů identit (Identity Provider entityID), jejich názvů a případně iniciátora sezení (session initiator).';
$string['auth_shib_only'] = 'Pouze Shibboleth';
$string['auth_shib_only_description'] = 'Zaškrtněte tuto volbu, chcete-li si vynutit přihlášení pomocí systému Shibboleth';
$string['auth_shib_username_description'] = 'Název proměnné prostředí Shibboleth, která má být použita jako moodlovské uživatelské jméno';
$string['pluginname'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'Vaše ověření prostřednictvím systému Shibboleth proběhlo zřejmě úspěšně, Moodle však neobdržel žádné údaje o uživateli. Ověřte prosím, zda váš poskytovatel identity (Identity Provider) předává potřebné údaje ({$a}) poskytovateli služeb (Service Provider), od něhož je přebírá Moodle, nebo informujte administrátora těchto stránek.';
$string['shib_not_all_attributes_error'] = 'Moodle potřebuje znát některé údaje systému Shibboleth, které ovšem nejsou ve vašem případě k dispozici. Jedná se o následující údaje: {$a}<br />Obraťte se na administrátora těchto stránek nebo na vašeho poskytovatele identity.';
$string['shib_not_set_up_error'] = 'Ověření prostřednictvím systému Shibboleth je zřejmě nesprávně nastaveno, protože pro tuto stránku nejsou k dispozici žádné programové proměnné systému Shibboleth. Nahlédněte prosím do souboru <a href="README.txt">README</a> pro další pokyny k nastavení systému Shibboleth, nebo se obraťte na administrátora těchto stránek.';
