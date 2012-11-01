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
 * Strings for component 'tool_bloglevelupgrade', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   tool_bloglevelupgrade
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bloglevelupgradedescription'] = '<p>Tento server byl nedávno aktualizován na verzi Moodle 2.0.</p>
<p>V této nové verzi byl zjednodušen mechanismus viditelnosti uživatelských blogů, ale váš server dosud používá původní nastavení.</p>
<p>Pro zpětně kompatibilní chování viditelnosti blogů v rámci kurzů a v rámci skupin je potřeba spustit následující aktualizační skript. Ten vytvoří speciální diskusní fórum typu "blog" v každém kurzu, v němž uživatelé publikovali své příspěvky a zkopíruje původní příspěvky z blogů do tohoto fóra.</p>
<p>Systém blogů bude poté na úrovni stránek vypnut. V průběhu aktualizace nebude žádný příspěvek odstraněn.</p>
<p>Aktualizační skript můžete <a href="">spustit na stránce pro upgrade blogů</a>.</p>';
$string['bloglevelupgradeinfo'] = 'Ve verzi Moodle 2.0 byl zjednodušen mechanismus viditelnosti uživatelských blogů, ale váš server dosud používá původní nastavení. Pro zpětně kompatibilní chování viditelnosti blogů v rámci kurzů a v rámci skupin je potřeba spustit aktualizační skript. Ten vytvoří speciální diskusní fórum typu "blog" v každém kurzu, v němž uživatelé publikovali své příspěvky a zkopíruje původní příspěvky z blogů do tohoto fóra. Systém blogů bude poté na úrovni stránek vypnut. V průběhu aktualizace nebude žádný příspěvek odstraněn.';
$string['bloglevelupgradeprogress'] = 'Postup konverze: {$a->userscount} uživatelů zkontrolováno, {$a->blogcount} příspěvků převedeno na nový systém';
$string['pluginname'] = 'Upgrade viditelnosti blogu';
