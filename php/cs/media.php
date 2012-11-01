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
 * Strings for component 'media', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   media
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['flashanimation'] = 'Flash animace';
$string['flashanimation_desc'] = 'Soubory s příponou *.swf. Z bezpečnostních důvodů se tento filtr používá pouze u bezpečných textů.';
$string['flashvideo'] = 'Flash video';
$string['flashvideo_desc'] = 'Soubory s příponou *.flv a *f4v. Videa jsou přehrávána pomocí Flowplayer, vyžaduje instalovaný Flash a javascript. Pokud je zadáno více zdrojů, používá HTML 5.';
$string['html5audio'] = 'Zvuk HTML 5';
$string['html5audio_desc'] = 'Zvukové soubory s rozšířením *.ogg, *.aac a dalšími. Je kompatibilní pouze s nejnovějšími verzemi prohlížečů, bohužel neexistuje formát, který je podporován všemi prohlížeči.
Řešením pro starší prohlížeče je zadat položky odděleně pomocí # (např. http://example.org/audio.aac#http://example.org/audio.aac#http://example.org/audio.mp3#), pro přehrání ve starších prohlížečích bude použit přehrávač QuickTime, podporován je libovolný zvukový soubor.';
$string['html5video'] = 'Video HTML 5';
$string['html5video_desc'] = 'Video soubory s rozšířením *.webm, *.m4v, *ogv a dalšími. Je kompatibilní pouze s nejnovějšími verzemi prohlížečů, bohužel neexistuje formát, který je podporován všemi prohlížeči.
Řešením pro starší prohlížeče je zadat položky odděleně pomocí # (např. http://example.org/video.m4v#http://example.org/video.aac#http://example.org/video.ogv#d=640x480), pro přehrání ve starších prohlížečích bude použit přehrávač QuickTime.';
$string['legacyheading'] = 'Starší multimediální přehrávače';
$string['legacyheading_desc'] = 'Následující formáty se obecně příliš nedoporučují a obvykle se používají v rámci intranetu na centrálně spravovaných počítačích.';
$string['legacyquicktime'] = 'Přehrávač QuickTime';
$string['legacyquicktime_desc'] = 'Soubory s příponami *.mov, *.mp4, *.m4a, *.mp4 a *.mpg. Vyžaduje přehrávač QuickTime nebo kodeky.';
$string['legacyreal'] = 'Přehrávač RealPlayer';
$string['legacyreal_desc'] = 'Soubory s příponami *.rm, *.ra, *.ram, *.rp, *.rv. Vyžaduje RealPlayer.';
$string['legacywmp'] = 'Přehrávač médií Windows';
$string['legacywmp_desc'] = 'Soubory s příponami *.avi a *.wmv. Plně kompatibilní s Internet Explorerem ve Windows, v jiných systémech a prohlížečích to nemusí fungovat.';
$string['mediaformats'] = 'Dostupné přehrávače';
$string['mediasettings'] = 'Vkládání medií';
$string['mp3audio'] = 'MP3 audio';
$string['mp3audio_desc'] = 'Soubory s příponou *.mp3. Jsou přehrávány pomocí Flowplayer, vyžaduje podporu Flash na klientském počítači.';
$string['sitevimeo'] = 'Vimeo';
$string['sitevimeo_desc'] = 'Stránka sdílející video Vimeo.';
$string['siteyoutube'] = 'YouTube';
$string['siteyoutube_desc'] = 'Podporuje stránku YouTube, video a seznam videí YouTube.';
