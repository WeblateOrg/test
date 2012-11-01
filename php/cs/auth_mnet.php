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
 * Strings for component 'auth_mnet', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   auth_mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_mnet_auto_add_remote_users'] = 'Je-li povoleno, vytvoří se automaticky místní účet pro vzdálené uživatele při prvním přihlášení.';
$string['auth_mnetdescription'] = 'Uživatelé jsou ověřováni napříč různými Moodle servery zapojenými do tzv. sítě důvěry. Tato síť se definuje v nastavení Moodle Network.';
$string['auth_mnet_roamin'] = 'Uživatelé tohoto hostitele nemohou použít roamingu na vašich stránkách.';
$string['auth_mnet_roamout'] = 'Vaši uživatelé mohou použít roamingu na stránkách těchto hostitelů:';
$string['auth_mnet_rpc_negotiation_timeout'] = 'Časový limit v sekundách pro ověřování uživatelů pomocí XMLRPC přenosu.';
$string['auto_add_remote_users'] = 'Přidat vzdálené uživatele automaticky';
$string['pluginname'] = 'MNet';
$string['rpc_negotiation_timeout'] = 'RPC vyjednávání překročilo časový limit';
$string['sso_idp_description'] = 'Pokud budete <strong>poskytovat</strong> tuto službu, vaši uživatelé se budou moci přihlásit na vzdálený server {$a}, aniž by tam museli zadávat své jméno a heslo.<ul><li><em>Závislost</em>: Musíte zároveň nastavit, že chcete využívat server {$a} jako "SSO - zdroj služeb".</li></ul><br />Pokud budete <strong>využívat</strong>tuto službu, budou se moci vzdálení uživatelé ze serveru {$a} přihlásit na vašem serveru, aniž by museli zadávat jméno a heslo.<ul><li><em>Závislost</em>: Musíte zároveň nastavit, že chcete sebe poskytovat jako "SSO - zdroj služby"  pro server {$a}. </li></ul>';
$string['sso_idp_name'] = 'SSO - zdroj identit uživatelů';
$string['sso_mnet_login_refused'] = 'Uživatel {$a->user} nemá povoleno přihlašovat se z {$a->host}.';
$string['sso_sp_description'] = 'Pokud budete <strong>poskytovat</strong> tuto službu, budou se moci vzdálení uživatelé ze serveru {$a} přihlásit na vašem serveru, aniž by museli zadávat jméno a heslo.<ul><li><em>Závislost</em>: Musíte zároveň nastavit, že chcete využívat server {$a} jako "SSO - zdroj identit uživatelů".</li></ul><br />Pokud budete <strong>využívat</strong>tuto službu, budou se moci vaši uživatelé přihlásit na vzdálený server {$a}, aniž by museli zadávat jméno a heslo.<ul><li><em>Závislost</em>: Musíte zároveň nastavit, že chcete sebe poskytovat jako "SSO - zdroj identit uživatelů" pro server {$a}. </li></ul>';
$string['sso_sp_name'] = 'SSO - zdroj služby';
