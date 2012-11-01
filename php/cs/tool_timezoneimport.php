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
 * Strings for component 'tool_timezoneimport', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   tool_timezoneimport
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configintrotimezones'] = 'Tato stránka vyhledá nové informace o časových pásmech (včetně informací o letním a zimním čase) a aktualizuje vaši lokální databázi s těmito informacemi. Prověřovány budou následující lokace (v uvedeném pořadí): {$a}. Tato procedura je obecně velmi bezpečná a nemůže ohrozit běžné instalace. Přejete si nyní aktualizovat časové zóny?';
$string['importtimezones'] = 'Aktualizovat kompletní seznam časových pásem';
$string['importtimezonescount'] = 'Počet položek importových ze zdroje {$a->source}: {$a->count}';
$string['importtimezonesfailed'] = 'Nenalezeny žádné zdroje! (to je špatná zpráva)';
$string['pluginname'] = 'Aktualizace časových pásem';
$string['updatetimezones'] = 'Aktualizovat časová pásma';
