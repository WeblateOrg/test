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
 * Strings for component 'enrol_mnet', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_multiplehost'] = 'Pro tento server již existuje instance modulu pro zápis přes MNet. Pro každý server a pro speciální záznam "Všechny servery" je povolena pouze jedna instance modulu.';
$string['instancename'] = 'Název metody zápisu';
$string['instancename_help'] = 'Zde můžete volitelně přejmenovat tuto instanci modulu pro zápis přes MNet. Ponecháte-li pole prázdné, bude použit výchozí název sestávající z názvu partnerského serveru a přiřazené role pro jejich uživatele.';
$string['mnet_enrol_description'] = 'Pokud budete <strong>poskytovat</strong> tuto službu, budou moci správci na serveru {$a} zapisovat jejich studenty do kurzů na vašem serveru. <br/>
<ul><li><em>Závislost</em>: Musíte zároveň nastavit, že chcete sebe poskytovat jako "SSO - zdroj služby" pro server {$a}.</li><li><em>Závislost</em>: Musíte zároveň nastavit, že chcete využívat server {$a} jako "SSO - zdroj identit uživatelů".</li></ul><br />
Pokud budete <strong>využívat</strong> tuto službu, budete moci vaše vlastní uživatele zapisovat do kurzů na serveru {$a}.<br/><ul><li><em>Závislost</em>: Musíte zároveň nastavit, že chcete využívat server {$a} jako "SSO - zdroj služeb".</li><li><em>Závislost</em>: Musíte zároveň nastavit, že chcete sebe poskytovat jako "SSO - zdroj identit uživatelů" pro server {$a}.</li></ul>
<br/>';
$string['mnet_enrol_name'] = 'MNet';
$string['pluginname'] = 'Zápis přes MNet';
$string['pluginname_desc'] = 'Povoluje partnerským serverům v rámci sítě MNet zapisovat jejich uživatele do vašich kurzů.';
$string['remotesubscriber'] = 'Vzdálený server';
$string['remotesubscriber_help'] = 'Vyberte "Všechny servery" pro zpřístupnění tohoto kurzu všem partnerským serverům v rámci MNet, jimž nabízíme službu vzdáleného zápisu. Nebo vyberte konkrétní server - pak bude tento kurz dostupný pouze jejich uživatelům.';
$string['remotesubscribersall'] = 'Všechny servery';
$string['roleforremoteusers'] = 'Role pro jejich uživatele';
$string['roleforremoteusers_help'] = 'Jaká role bude přiřazena vzdáleným uživatelům z daného serveru.';
