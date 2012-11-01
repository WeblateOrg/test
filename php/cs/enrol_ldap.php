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
 * Strings for component 'enrol_ldap', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Přiřazení role \'{$a->role_shortname}\' uživateli \'{$a->user_username}\' do kurzu \'{$a->course_shortname}\' (id {$a->course_id})';
$string['assignrolefailed'] = 'Nepodařilo se přiřadit roli \'{$a->role_shortname}\' uživateli \'{$a->user_username}\' do kurzu \'{$a->course_shortname}\' (id {$a->course_id})';
$string['autocreate'] = 'Kurzy mohou být vytvářeny automaticky, pokud se objeví zápis do kurzu, který v Moodlu ještě neexistuje.';
$string['autocreate_key'] = 'Automaticky vytvářet';
$string['autocreation_settings'] = 'Nastavení automatického vytváření kurzů';
$string['bind_dn'] = 'Chcete-li v vyhledání uživatelů použít bind-user, uveďte zde plný název. Něco jako  \'cn=ldapuser,ou=public,o=org\'';
$string['bind_dn_key'] = 'DN uživatele pro navázání spojení (bind)';
$string['bind_pw'] = 'Heslo pro bind-user.';
$string['bind_pw_key'] = 'Heslo';
$string['bind_settings'] = 'Nastavení spojení (bind)';
$string['cannotcreatecourse'] = 'Nelze vytvořit kurz: chybí potřebná data v LDAP záznamu';
$string['category'] = 'Kategorie automaticky vytvářených kurzů.';
$string['category_key'] = 'Kategorie';
$string['contexts'] = 'Kontexty LDAP';
$string['couldnotfinduser'] = 'Nenalezen uživatel \'{$a}\', přeskakuji';
$string['course_fullname'] = 'Volitelné: LDAP pole, odkud se převezme celý název.';
$string['course_fullname_key'] = 'Celý název';
$string['course_idnumber'] = 'Na který unikátní identifikátor v LDAP mapovat id kurzu. Většinou <em>cn</em> nebo <em>uid</em>. Doporučuje se tuto hodnotu uzamknout, pokud používáte automatické vytváření kurzů.';
$string['course_idnumber_key'] = 'Identifikátor kurzu';
$string['coursenotexistskip'] = 'Kurz \'{$a}\' neexistuje a automatické vytváření není povoleno, přeskakuji';
$string['course_search_sub'] = 'Prohledávat skupinová členství v subkontextech.';
$string['course_search_sub_key'] = 'Prohledávat subkontexty.';
$string['course_settings'] = 'Nastavení zápisů do kurzů';
$string['course_shortname'] = 'Volitelné: LDAP pole, odkud se převezme krátký název.';
$string['course_shortname_key'] = 'Krátký název';
$string['course_summary'] = 'Volitelné: LDAP pole, odkud se převezme souhrn kurzu.';
$string['course_summary_key'] = 'Souhrn';
$string['createcourseextid'] = 'VYTVOŘENO Uživatel zapsán do neexistujícího kurzu  \'{$a->courseextid}\'';
$string['createnotcourseextid'] = 'Uživatel zapsán do neexistujícího kurzu  \'{$a->courseextid}\'';
$string['creatingcourse'] = 'Vytváří se kurz \'{$a}\' ...';
$string['editlock'] = 'Uzamknout hodnotu';
$string['emptyenrolment'] = 'Bez zápisu pro roli \'{$a->role_shortname}\' v kurzu \'{$a->course_shortname}\'';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = 'Zapsat uživatele \'{$a->user_username}\' do kurzu \'{$a->course_shortname}\' (id {$a->course_id})';
$string['enroluserenable'] = 'Povolený zápis uživatele \'{$a->user_username}\' do kurzu \'{$a->course_shortname}\' (id {$a->course_id})';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group () nepodporuje vybraný typ uživatele: {$a}';
$string['extcourseidinvalid'] = 'Externí ID kurzu je neplatné!';
$string['extremovedsuspend'] = 'Zápis uživatele \'{$a->user_username}\' do kurzu \'{$a->course_shortname}\' (id {$a->course_id}) není povolen';
$string['extremovedsuspendnoroles'] = 'Nepovolený zápis a odstraněná role uživatele \'{$a->user_username}\' v kurzu \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedunenrol'] = 'Vyškrtnout uživatele \'{$a->user_username}\' z kurzu \'{$a->course_shortname}\' (id {$a->course_id})';
$string['failed'] = 'Operace selhala!';
$string['general_options'] = 'Obecná nastavení';
$string['group_memberofattribute'] = 'Název atributu, který obsahuje skupiny, do nichž daný uživatel patří (např. memberOf, groupMembership apod.)';
$string['group_memberofattribute_key'] = 'Atribut členství ve skupině';
$string['host_url'] = 'Hostitel LDAP ve formě URL - např. ldap://ldap.naseskola.cz/\' nebo ldaps://ldap.naseskola.cz/\'';
$string['host_url_key'] = 'URL serveru';
$string['idnumber_attribute'] = 'Pokud nastavený atribut pro členství ve skupině obsahuje rozlišitelné názvy kurzů, použijte zde stejný atribut, který jste použili v nastavení autentizace oproti LDAP.';
$string['idnumber_attribute_key'] = 'Atribut s identifikátorem kurzu';
$string['ldap_encoding'] = 'Kódování použité na LDAP serveru. Ve většině případů "utf-8". MS Active Directory v2 používá platformní kódování jako např. "cp1252" nebo "cp1250".';
$string['ldap_encoding_key'] = 'Kódování LDAP';
$string['ldap:manage'] = 'Spravovat zápis přes LDAP';
$string['memberattribute'] = 'Atribut členství (member) v LDAP';
$string['memberattribute_isdn'] = 'Pokud nastavený atribut pro členství ve skupině obsahuje rozlišitelné názvy kurzů, použijte jej i zde. Pak musíte nastavit i zbývající údaje v této sekci.';
$string['memberattribute_isdn_key'] = 'Atribut členství ve skupině používá DN';
$string['nested_groups'] = 'Chcete pro zápis použít vnořené skupiny (skupiny skupin)?';
$string['nested_groups_key'] = 'Vnořené skupiny';
$string['nested_groups_settings'] = 'Nastavení vnořených skupin';
$string['nosuchrole'] = 'Taková role není: \'{$a}\'';
$string['objectclass'] = 'Hodnota filtru "objectClass" použitá při vyhledávání kurzů. Většinou "posixGroup".';
$string['objectclass_key'] = 'Třída objektů';
$string['ok'] = 'Povedlo se!';
$string['opt_deref'] = 'Pokud nastavený atribut pro členství ve skupině obsahuje rozlišitelné názvy kurzů, určete způsob zacházení s aliasy během vyhledávání. Vyberte jednu z následujících hodnot: "Ne" (LDAP_DEREF_NEVER) nebo "Ano" (LDAP_DEREF_ALWAYS)';
$string['opt_deref_key'] = 'Dereferencovat aliasy';
$string['phpldap_noextension'] = 'Chybí PHP rozšíření LDAP. Ujistěte se, že je správně nainstalované a povolené na vašem serveru.';
$string['pluginname'] = 'Zápisy z LDAP';
$string['pluginname_desc'] = 'K řízení zápisů do kurzů můžete použít rovněž váš server LDAP. Předpokládá se, že váš strom (tree) LDAP obsahuje skupiny (groups) odpovídající vašim kurzům a že každá z těchto skupin má položky členství odpovídající studentům.

Každý kurz by tedy měl mít nadefinován jako LDAP skupina a každá z těchto skupin bude mít několik polí členství (<em>member</em> nebo <em>memberUid</em>), která obsahují unikátní identifikaci uživatele.

Chcete-li tento režim zápisů do kurzů použít, <strong>musí</strong> mít vaši uživatelé ve svých profilech vyplněno platné pole idnumber. Skupiny LDAP, které odpovídají kurzům, uvedou toto idnumber v polích svých členů. Tento způsob by měl bez problémů fungovat, pokud už používáte ověřování uživatelů pomocí LDAP.

Zápisy v kurzech budou aktualizovány pokaždé, když se uživatel přihlásí. Pro  synchronizaci můžete rovněž spouštět skript <em>enrol/ldap/cli/sync.php</em> (další informace ve zdrojovém kódu uvedeného skriptu).

Tento modul může být rovněž použit pro automatické vytváření nových kurzů, jakmile se odpovídající skupiny objeví ve vašem serveru LDAP.';
$string['pluginnotenabled'] = 'Modul není povolen!';
$string['role_mapping'] = 'Pro každou roli, kterou chcete přiřadit z LDAP, potřebujete nadefinovat seznam LDAP kontextů, v nichž jsou uloženy skupiny dané role. Kontexty oddělte středníkem.

Musíte rovněž nadefinovat atribut, ve kterém váš LDAP server udržuje informace o členech dané skupiny (např. "member" nebo "memberUid").';
$string['role_mapping_key'] = 'Mapování rolí z LDAP';
$string['roles'] = 'Mapování rolí';
$string['server_settings'] = 'Nastavení serveru LDAP';
$string['synccourserole'] = '=== Synchronizace kurzu "{$a->idnumber}" - role "{$a->role_shortname}"';
$string['template'] = 'Volitelné: automaticky vytvářené kurzy mohou převzít nastavení z nějaké šablony (vzorového kurzu).';
$string['template_key'] = 'Šablona kurzu';
$string['unassignrole'] = 'Odebrání role \'{$a->role_shortname}\' uživateli \'{$a->user_username}\' v kurzu \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignrolefailed'] = 'Nepodařilo se odebrání role \'{$a->role_shortname}\' uživateli \'{$a->user_username}\' v kurzu \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignroleid'] = 'Odebrání role id \'{$a->role_id}\' uživateli id \'{$a->user_id}\'';
$string['updatelocal'] = 'Aktualizovat lokální data';
$string['user_attribute'] = 'Pokud nastavený atribut pro členství ve skupině obsahuje rozlišitelné názvy, určete atribut použitý pro vyhledávání uživatelů. Pokud používáte autentizaci oproti stejnému LDAP serveru, hodnota by měla odpovídat atributu určenému pro mapování identifikátoru uživatelů v LDAP autentizaci.';
$string['user_attribute_key'] = 'Atribut obsahující ID';
$string['user_contexts'] = 'Pokud nastavený atribut pro členství ve skupině obsahuje rozlišitelné názvy, zadejte seznam LDAP kontextů, v nichž jsou umístěni uživatelé. Jednotlivé kontexty oddělte středníkem. Např. "ou=users,o=org; ou=others,o=org"';
$string['user_contexts_key'] = 'Kontexty';
$string['user_search_sub'] = 'Pokud nastavený atribut pro členství ve skupině obsahuje rozlišitelné názvy, určete, zda se mají uživatelé vyhledávat též v subkontextech.';
$string['user_search_sub_key'] = 'Prohledávat subkontexty.';
$string['user_settings'] = 'Nastavení vyhledávání uživatele';
$string['user_type'] = 'Pokud nastavený atribut pro členství ve skupině obsahuje rozlišitelné názvy, určete, jak jsou uživatelé uloženi na vašem LDAP serveru';
$string['user_type_key'] = 'Typ uživatele';
$string['version'] = 'Verze protokolu LDAP, který používá váš server';
$string['version_key'] = 'Verze';
