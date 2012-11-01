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
 * Strings for component 'enrol_self', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['customwelcomemessage'] = 'Vlastní uvítací zpráva';
$string['defaultrole'] = 'Výchozí přiřazení role';
$string['defaultrole_desc'] = 'Vyberte roli, která má být přidělena uživatelům poté, co se sami zapíší do kurzu';
$string['editenrolment'] = 'Upravit zápis';
$string['enrolenddate'] = 'Konec zápisu';
$string['enrolenddate_help'] = 'Je-li povoleno, uživatelé se budou moci zapisovat pouze do tohoto data.';
$string['enrolenddaterror'] = 'Datum konce zápisu do kurzu nemůže předcházet datu začátku zápisu';
$string['enrolme'] = 'Zapsat se do kurzu';
$string['enrolperiod'] = 'Délka trvání platnosti zápisu';
$string['enrolperiod_desc'] = 'Výchozí délka trvání platnosti zápisu v sekundách. Je-li nastaveno na nulu, bude výchozí délka neomezená.';
$string['enrolperiod_help'] = 'Doba platnosti zápisu počínaje okamžikem zápisu uživatelem samotným. Je-li vypnuto, bude tato doba neomezená.';
$string['enrolstartdate'] = 'Začátek zápisu';
$string['enrolstartdate_help'] = 'Je-li zapnuto, budou se moci uživatelé zapisovat pouze počínaje tímto datem.';
$string['groupkey'] = 'Použít skupinové klíče k zápisu';
$string['groupkey_desc'] = 'Ve výchozím nastavení použít skupinové klíče k zápisu';
$string['groupkey_help'] = 'Kromě omezení přístupu do kurzu pouze těm, kteří znají klíč, můžete uživatele při zápisu automaticky přiřadit do konkrétní skupiny podle toho, jaký klíč použijí.

Chcete-li použít tuto funkci, musíte nejprve nastavit klíč k zápisu do kurzu v nastavení této instance a poté nadefinovat jednotlivé skupinové klíče v nastavení příslušných skupin.';
$string['longtimenosee'] = 'Odstranit neaktivní uživatele po';
$string['longtimenosee_help'] = 'Pokud uživatelé nevstoupí do kurzu po jistou dobu, mohou být automaticky vyškrtnuti. Toto nastavení určuje, po jak dlouhé době se tak stane.';
$string['maxenrolled'] = 'Maximum zapsaných uživatelů';
$string['maxenrolled_help'] = 'Určuje nejvyšší počet počet uživatelů, kteří se mohou zapsat sami. Nula znamená, že počet není omezen.';
$string['maxenrolledreached'] = 'Bylo dosaženo nejvyššího povoleného počtu uživatelů, kteří se mohou zapsat do kurzu.';
$string['nopassword'] = 'Klíč k zápisu není požadován';
$string['password'] = 'Klíč k zápisu';
$string['password_help'] = 'Pomocí klíče k zápisu můžete povolit přístup do kurzu pouze těm uživatelům, kteří tento klíč budou při zápisu znát.

Ponecháte-li pole prázdné, může se do kurzu zapsat kdokoliv.

Pokud je klíč k zápisu nadefinován, bude uživatel při zápisu vyzván k zadání tohoto klíče. Uživatelé musí zadat klíč pouze při prvním vstupu do kurzu - jakmile jsou jednou zapsáni, klíč už nemusejí zadávat.';
$string['passwordinvalid'] = 'Chybný klíč k zápisu, zkuste znovu';
$string['passwordinvalidhint'] = 'Zadaný klíč k zápisu nebyl správný, zkuste to ještě jednou.<br />(Napovím vám - klíč začíná na \'{$a}\'.)';
$string['pluginname'] = 'Zápis sebe sama do kurzu';
$string['pluginname_desc'] = 'Tento modul umožňuje, aby se uživatelé do kurzů zapisovali sami. Zápis do kurzu lze podmínit zadáním vstupního hesla - tzv. klíče k zápisu. Interně je zápis proveden pomocí metody ručního zápisu, která proto musí být v kurzu rovněž povolena.';
$string['requirepassword'] = 'Vyžadovat klíč k zápisu';
$string['requirepassword_desc'] = 'Vyžadovat klíč k zápisu do nových kurzů a zabránit odstranění klíče k zápisu ze stávajících kurzů.';
$string['role'] = 'Přiřazení role';
$string['self:config'] = 'Konfigurovat možnosti zápisu sebe sama';
$string['self:manage'] = 'Spravovat zapsané uživatele';
$string['self:unenrol'] = 'Vyškrtnout uživatele z kurzu';
$string['self:unenrolself'] = 'Vyškrtnout se z kurzu';
$string['sendcoursewelcomemessage'] = 'Posílat uvítací dopis';
$string['sendcoursewelcomemessage_help'] = 'Zda bude uživatelům zaslán uvítací email poté, co se sami zapíší do kurzu.';
$string['showhint'] = 'Napovídat';
$string['showhint_desc'] = 'Zobrazovat první písmeno přístupového klíče.';
$string['status'] = 'Povolit zápis sebe sama do kurzu';
$string['status_desc'] = 'Zda implicitně povolovat uživatelům, aby se mohli sami zapisovat do kurzů.';
$string['status_help'] = 'Toto nastavení určuje, zda se mohou uživatelé sami zapsat (a případně sami vyškrtnout, mají-li potřebné oprávnění) do kurzu.';
$string['unenrol'] = 'Vyškrtnout';
$string['unenrolselfconfirm'] = 'Opravdu se chcete vyškrtnout z kurzu "{$a}"?';
$string['unenroluser'] = 'Opravdu chcete vyškrtnout uživatele "{$a->user}" z kurzu "{$a->course}"?';
$string['usepasswordpolicy'] = 'Použít zásady bezpečného hesla';
$string['usepasswordpolicy_desc'] = 'Použít zásady bezpečného hesla také na klíče k zápisu';
$string['welcometocourse'] = 'Vítejte v kurzu {$a}';
$string['welcometocoursetext'] = 'Vitejte v kurzu {$a->coursename}!

Pokud jste tak jeste neucinili, vyplnte si svuj profil na nasledujici strance:
{$a->profileurl}';
