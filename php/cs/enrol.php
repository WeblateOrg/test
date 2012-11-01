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
 * Strings for component 'enrol', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Dostupné metody zápisu do kurzu';
$string['addinstance'] = 'Přidat metodu';
$string['ajaxnext25'] = 'Dalších 25...';
$string['ajaxoneuserfound'] = 'Jeden nalezený uživatel';
$string['ajaxxusersfound'] = '{$a} nalezených uživatelů';
$string['assignnotpermitted'] = 'Nemáte oprávnění nebo nelze přiřadit role v tomto kurzu';
$string['bulkuseroperation'] = 'Hromadná operace s uživatelskými účty';
$string['configenrolplugins'] = 'Vyberte, jak se budou studenti zapisovat do tohoto kurzu a seřaďte povolené metody v požadovaném pořadí.';
$string['custominstancename'] = 'Vlastní název instance metody';
$string['defaultenrol'] = 'Vkládat instanci do nových kurzů';
$string['defaultenrol_desc'] = 'Je možné automaticky vytvářet instanci této metody ve všech nově vytvořených kurzech.';
$string['deleteinstanceconfirm'] = 'Opravdu chcete odstranit instanci metody "{$a->name}"? Pomocí této instance je zapsáno {$a->users} uživatelů.';
$string['durationdays'] = '{$a} dnů';
$string['enrol'] = 'Zapsat';
$string['enrolcandidates'] = 'Nezapsaní uživatelé';
$string['enrolcandidatesmatching'] = 'Nezapsaní uživatelé odpovídající hledání';
$string['enrolcohort'] = 'Zapsat globální skupinu';
$string['enrolcohortusers'] = 'Zapsat uživatele';
$string['enrollednewusers'] = 'Úspěšně zapsáno {$a} nových uživatelů';
$string['enrolledusers'] = 'Zapsaní uživatelé';
$string['enrolledusersmatching'] = 'Zapsaní uživatelé odpovídající hledání';
$string['enrolme'] = 'Zapsat se do tohoto kurzu';
$string['enrolmentinstances'] = 'Metody zápisu';
$string['enrolmentnew'] = 'Nový zápis v {$a}';
$string['enrolmentnewuser'] = '{$a->user} je zapsán do kurzu "{$a->course}"';
$string['enrolmentoptions'] = 'Volby zápisu';
$string['enrolments'] = 'Zápisy';
$string['enrolnotpermitted'] = 'Nemáte oprávnění zapsat uživatele do tohoto kurzu';
$string['enrolperiod'] = 'Platnost přidělení role';
$string['enroltimeend'] = 'Zápis končí';
$string['enroltimestart'] = 'Zápis začíná';
$string['enrolusage'] = 'Instance / zápisy';
$string['enrolusers'] = 'Zapsat uživatele';
$string['errajaxfailedenrol'] = 'Zápis uživatele selhal';
$string['errajaxsearch'] = 'Chyba při vyhledávání uživatelů';
$string['erroreditenrolment'] = 'Při úpravě zápisu uživatelů došlo k chybě';
$string['errorenrolcohort'] = 'Chyba při vytváření instance pro synchronizaci s globální skupinou';
$string['errorenrolcohortusers'] = 'Chyba při zapisování členů globální skupiny do tohoto kurzu.';
$string['errorwithbulkoperation'] = 'Při zpracovávání hromadné operace došlo k chybě';
$string['extremovedaction'] = 'Akce při vyškrtnutí externím systémem';
$string['extremovedaction_help'] = 'Jak se má postupovat, když uživatel zmizí ze seznamu zapsaných uživatelů v externím zdroji. Pozor, při vyškrtnutí uživatele z kurzu mohou být údaje týkající se jeho zápisu odstraněny a nemusejí být k dispozici po opětovaném zápisu do kurzu.';
$string['extremovedkeep'] = 'Ponechat uživatele zapsaného';
$string['extremovedsuspend'] = 'Pozastavit platnost zápisu';
$string['extremovedsuspendnoroles'] = 'Pozastavit platnost zápisu a odebrat přidělené role';
$string['extremovedunenrol'] = 'Vyškrtnout uživatele z kurzu';
$string['finishenrollingusers'] = 'Ukončit zápis uživatelů';
$string['invalidenrolinstance'] = 'Neplatná instance metody zápisu';
$string['invalidrole'] = 'Neplatná role';
$string['manageenrols'] = 'Správa modulů pro zápis do kurzu';
$string['manageinstance'] = 'Správa';
$string['nochange'] = 'Beze změny';
$string['noexistingparticipants'] = 'Žádní stávající účastníci';
$string['noguestaccess'] = 'Anonymní hosté nemohou vstupovat do tohoto kurzu, je třeba se přihlásit.';
$string['none'] = 'Žádný';
$string['notenrollable'] = 'Do tohoto kurzu se nemůžete sami zapsat.';
$string['notenrolledusers'] = 'Další uživatelé';
$string['otheruserdesc'] = 'Následující uživatelé nejsou do kurzu zapsáni, ale mají v něm nějakou roli - buď přidělenou lokálně nebo zděděnou z jiného kontextu.';
$string['participationactive'] = 'Aktivní';
$string['participationstatus'] = 'Stav';
$string['participationsuspended'] = 'Pozastavená platnost';
$string['periodend'] = 'do {$a}';
$string['periodstart'] = 'od {$a}';
$string['periodstartend'] = 'do {$a} od {$a}';
$string['recovergrades'] = 'Obnovit staré známky uživatelů, bude-li to možné';
$string['rolefromcategory'] = '{$a->role} (zděděná z kategorie kurzu)';
$string['rolefrommetacourse'] = '{$a->role} (zděděná z asociovaného kurzu)';
$string['rolefromsystem'] = '{$a->role} (přidělená globálně)';
$string['rolefromthiscourse'] = '{$a->role} (přidělená lokálně v tomto kurzu)';
$string['startdatetoday'] = 'Dnes';
$string['synced'] = 'Synchronizováno';
$string['totalenrolledusers'] = '{$a} zapsaných uživatelů';
$string['totalotherusers'] = '{$a} ostatních uživatelů';
$string['unassignnotpermitted'] = 'Nemáte oprávnění k odebrání rolí v tomto kurzu';
$string['unenrol'] = 'Vyškrtnout';
$string['unenrolconfirm'] = 'Opravdu chcete vyškrtnout uživatele "{$a->user}" z kurzu "{$a->course}"?';
$string['unenrolme'] = 'Vyškrtnout z {$a}';
$string['unenrolnotpermitted'] = 'Nemáte oprávnění nebo nelze vyškrtnout uživatele z tohoto kurzu.';
$string['unenrolroleusers'] = 'Vyškrtnout uživatele';
$string['uninstallconfirm'] = 'Chystáte se zcela odstranit modul pro zápis do kurzů "{$a}". Tím z databáze odstraníte všechny informace udržované tímto modulem. Jste si OPRAVDU jisti, že chcete pokračovat?';
$string['uninstalldeletefiles'] = 'Všechny informace související s modulem pro zápis do kurzů "{$a}" byly odstraněny z databáze. Chcete-li zabránit opětovné reinstalaci modulu, měli byste odstranit následující adresář z vašeho serveru: {$a->directory}';
$string['unknowajaxaction'] = 'Požadavek na neznámou akci';
$string['unlimitedduration'] = 'Bez omezení';
$string['usersearch'] = 'Hledat';
$string['withselectedusers'] = 'S označenými uživateli';
