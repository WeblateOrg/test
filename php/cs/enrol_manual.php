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
 * Strings for component 'enrol_manual', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_manual
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alterstatus'] = 'Změnit stav';
$string['altertimeend'] = 'Změnit čas konce';
$string['altertimestart'] = 'Změnit čas začátku';
$string['assignrole'] = 'Přidělená role';
$string['confirmbulkdeleteenrolment'] = 'Opravdu odstranit ruční zápisy těchto uživatelů?';
$string['defaultperiod'] = 'Výchozí délka trvání platnosti zápisu';
$string['defaultperiod_desc'] = 'Výchozí délka trvání platnosti zápisu v sekundách. Je-li nastaveno na nulu, bude výchozí délka neomezená.';
$string['defaultperiod_help'] = 'Výchozí délka trvání platnosti zápisu, počínaje okamžikem zápisu do kurzu. Není-li povoleno, bude výchozí délka neomezená.';
$string['deleteselectedusers'] = 'Odstranit ruční zápis vybraných uživatelů';
$string['editenrolment'] = 'Upravit zápis';
$string['editselectedusers'] = 'Upravit zápis vybraných uživatelů';
$string['enrolledincourserole'] = 'Proběhl zapis do "{$a->course}" jako "{$a->role}"';
$string['enrolusers'] = 'Zapsat uživatele';
$string['manual:config'] = 'Konfigurovat ruční zápis';
$string['manual:enrol'] = 'Zapsat uživatele';
$string['manual:manage'] = 'Spravovat zápis uživatelů';
$string['manual:unenrol'] = 'Vyškrtnout uživatele z kurzu';
$string['manual:unenrolself'] = 'Vyškrtnout se z kurzu';
$string['pluginname'] = 'Ruční zápis do kurzu';
$string['pluginname_desc'] = 'Modul ručního zapisování do kurzů umožňuje uživateli s patřičným oprávněním (typicky učitel v daném kurzu) zapisovat studenty do kurzu ručně pomocí nástroje ve správě kurzu.

Tento modul by měl být většinou povolen, některé další moduly (jako například modul pro zápis sebe sama) jej vyžadují.';
$string['status'] = 'Povolit ruční zápis do kurzu';
$string['status_desc'] = 'Zda se má ručně zapsaným studentům povolit vstup do kurzu. Ve většině případů by toto mělo být povoleno.';
$string['statusdisabled'] = 'Zakázáno';
$string['statusenabled'] = 'Povoleno';
$string['status_help'] = 'Zda může uživatel s potřebným oprávněním (typicky učitel v daném kurzu) zapisovat studenty ručně pomocí nástroje ve správě kurzu.';
$string['unenrol'] = 'Vyškrtnout uživatele';
$string['unenrolselectedusers'] = 'Vyškrtnout označené uživatele';
$string['unenrolselfconfirm'] = 'Opravdu se chcete vyškrtnout z kurzu "{$a}"?';
$string['unenroluser'] = 'Skutečně si přejete vyškrtnout "{$a->user}" z kurzu "{$a->course}"?';
$string['unenrolusers'] = 'Vyškrtnout uživatele';
$string['wscannotenrol'] = 'Instance modulu nemůže ručně zapsat uživatele do kurzu {$a->courseid}';
$string['wsnoinstance'] = 'Instance modulu ručního zápisu neexistuje nebo je zakázaná v kurzu {$a->courseid}';
$string['wsusercannotassign'] = 'Nemáte oprávnění přiřadit roli {$a->roleid} uživateli {$a->userid} v kurzu {$a->courseid}';
