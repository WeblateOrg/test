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
 * Strings for component 'auth_cas', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   auth_cas
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesCAS'] = 'uživatelé CAS';
$string['accesNOCAS'] = 'další uživatelé';
$string['auth_cas_auth_user_create'] = 'Vytvořit uživatele externě';
$string['auth_cas_baseuri'] = 'URI serveru (nevyplňujte, pokud se baseUri neuplatňuje)<br />Příklad: je-li server CAS dostupný na host.domena.cz/CAS/, nastavte<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Základní URI';
$string['auth_cas_broken_password'] = 'Nemůžete pokračovat dál bez změny hesla, ale stránka pro jeho změnu není k dispozici. Kontaktujte správce Vašeho eLearningu Moodle.';
$string['auth_cas_cantconnect'] = 'LDAP část  modulu CAS se nemůže připojit k serveru: {$a}';
$string['auth_cas_casversion'] = 'Verze protokolu CAS';
$string['auth_cas_certificate_check'] = 'Zda se má validovat certifikát serveru';
$string['auth_cas_certificate_check_key'] = 'Ověřování serveru';
$string['auth_cas_certificate_path'] = 'Cestu k souboru, který obsahuje řetěz CA (ve formátu PEM) k ověření certifikátu serveru';
$string['auth_cas_certificate_path_empty'] = 'Pokud zapnete Ověřování serveru, je třeba zadat certifikační cestu';
$string['auth_cas_certificate_path_key'] = 'Certifikační cesta';
$string['auth_cas_changepasswordurl'] = 'URL pro změnu hesla';
$string['auth_cas_create_user'] = 'Zapněte tuto volbu, chcete-li vkládat uživatele ověřené pomocí CAS do vaší databáze uživatelů Moodlu. V opačném případě se budou moci přihlásit pouze uživatelé, kteří již mají záznam v databázi Moodlu.';
$string['auth_cas_create_user_key'] = 'Vytvořit uživatele';
$string['auth_casdescription'] = 'Tato metoda používá pro ověření uživatelů server CAS (Central Authentication Service) v prostředí Single Sign On (SSO). Můžete rovněž použít jednoduché LDAP ověřování. Je-li zadané uživatelské jméno a heslo podle serveru CAS platné, Moodle si vytvoří nový záznam pro příslušného uživatele a případně načte další atributy ze serveru LDAP. Při dalším přihlášení se již kontroluje pouze jméno a heslo.';
$string['auth_cas_enabled'] = 'Zapněte tuto volbu, chcete-li používat ověření CAS.';
$string['auth_cas_hostname'] = 'Název hostitele (hostname) serveru CAS<br />např.: host.domena.cz';
$string['auth_cas_hostname_key'] = 'Název hostitele (hostname)';
$string['auth_cas_invalidcaslogin'] = 'Je mi líto, ale vaše přihlášení selhalo. Nebylo možno vás ověřit';
$string['auth_cas_language'] = 'Jazyk na přihlašovacích stránkách';
$string['auth_cas_language_key'] = 'Jazyk';
$string['auth_cas_logincas'] = 'Přístup prostřednictvím šifrovaného spojení';
$string['auth_cas_logoutcas'] = 'Zda se má uživatel odhlásit z CAS při odhlašování z Moodle';
$string['auth_cas_logoutcas_key'] = 'Odhlášení z CAS';
$string['auth_cas_multiauth'] = 'Zda chcete používat ověřování z více zdrojů (CAS + další zdroje)';
$string['auth_cas_multiauth_key'] = 'Vícezdrojové ověřování';
$string['auth_casnotinstalled'] = 'Nelze použít ověření CAS. PHP modul LDAP není instalován.';
$string['auth_cas_port'] = 'Port  serveru CAS';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_proxycas'] = 'Zda používáte CAS v proxy módu.';
$string['auth_cas_proxycas_key'] = 'Proxy mód';
$string['auth_cas_server_settings'] = 'Konfigurace serveru CAS';
$string['auth_cas_text'] = 'Šifrované spojení';
$string['auth_cas_use_cas'] = 'Použít CAS';
$string['auth_cas_version'] = 'Použitá verze protokolu CAS';
$string['CASform'] = 'Volba autentizace';
$string['noldapserver'] = 'Nebyl nakonfigurován žádný LDAP server pro CAS. Synchronizace byla zakázána.';
$string['pluginname'] = 'CAS (SSO)';
