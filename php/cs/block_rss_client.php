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
 * Strings for component 'block_rss_client', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   block_rss_client
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfeed'] = 'Přidat nové zdrojové URL:';
$string['addheadlineblock'] = 'Přidat RSS blok';
$string['addnew'] = 'Přidat nový';
$string['addnewfeed'] = 'Přidat nový zdroj';
$string['cannotmakemodification'] = 'V tomto okamžiku nejste oprávnění provádět úpravy vlákna RSS.';
$string['choosefeedlabel'] = 'Vyberte zdroje, které byste rádi zpřístupnili v tomto bloku';
$string['clientchannellink'] = 'Zdrojové stránky...';
$string['clientnumentries'] = 'Výchozí počet zobrazovaných položek z jednoho zdroje.';
$string['clientshowchannellinklabel'] = 'Měl by být zobrazován odkaz na původní stránky (odkaz na kanál)? (Pokud není odkaz ve zdroji k dispozici, nebude se zobrazovat)';
$string['clientshowimagelabel'] = 'Zobrazit obrázek kanálu, je-li k dispozici';
$string['configblock'] = 'Nastavit tento blok';
$string['couldnotfindfeed'] = 'Nelze najít zdroj s id';
$string['customtitlelabel'] = 'Vlastní titulek (necháte-li prázdné, použije se titulek dodaný zdrojem):';
$string['deletefeedconfirm'] = 'Jste si jistí, že chcete odstranit tento zdroj?';
$string['disabledrssfeeds'] = 'RSS zdroje jsou vypnuté';
$string['displaydescriptionlabel'] = 'Zobrazovat popis každého odkazu?';
$string['editafeed'] = 'Upravit zdroje';
$string['editfeeds'] = 'Upravit, odebírat nebo neodebírat RSS/Atom zprávy';
$string['editnewsfeeds'] = 'Upravit zdroj zpráv';
$string['editrssblock'] = 'Upravit RSS blok';
$string['enableautodiscovery'] = 'Povolit automatické vyhledávání zdrojů?';
$string['enableautodiscovery_help'] = 'Zda se mají na dané stránce automaticky detekovat možné RSS zdroje. Poté stačí zadat běžnou URL adresu stránky jako např. http://docs.moodle.org a bude na ní nalezen zdroj http://docs.moodle.org/en/index.php?title=Special:RecentChanges&feed=rss';
$string['errorloadingfeed'] = 'Chyba při načítání tohoto RSS zdroje ({$a})';
$string['feed'] = 'Zdroj zpráv';
$string['feedadded'] = 'Přidán zdroj zpráv';
$string['feeddeleted'] = 'Zdroj zpráv byl odstraněn';
$string['feeds'] = 'Zdroje zpráv';
$string['feedsaddedit'] = 'Přidat/upravit zdroje';
$string['feedsconfigurenewinstance'] = 'Tento blok zatím nemůže zobrazovat žádný RSS zdroj. Nejprve jej musíte nastavit kliknutím zde.';
$string['feedsconfigurenewinstance2'] = 'Klikněte na ikonu "Upravit" v záhlaví a nastavte tento blok tak, aby zobrazoval obsah vybraného RSS zdroje.';
$string['feedupdated'] = 'Zdroj zpráv byl upraven';
$string['feedurl'] = 'URL zdroje';
$string['findmorefeeds'] = 'Najít další RSS zdroje';
$string['managefeeds'] = 'Správa všech mých zdrojů';
$string['nofeeds'] = 'Tyto stránky nemají nadefinován žádný RSS zdroj';
$string['numentries'] = 'Počet zpráv v jednom zdroji';
$string['pickfeed'] = 'Vyberte zdroj zpráv';
$string['pluginname'] = 'Čtečka RSS';
$string['remotenewsfeed'] = 'Vzdálený RSS zdroj';
$string['rss_client:createprivatefeeds'] = 'Vytvářet soukromé RSS zdroje';
$string['rss_client:createsharedfeeds'] = 'Vytvářet sdílené RSS zdroje';
$string['rss_client:manageanyfeeds'] = 'Spravovat všechny RSS zdroje';
$string['rss_client:manageownfeeds'] = 'Spravovat vlastní RSS zdroje';
$string['seeallfeeds'] = 'Zobrazit všechny zdroje';
$string['sharedfeed'] = 'Sdílený zdroj';
$string['shownumentrieslabel'] = 'Maximální počet položek v bloku';
$string['submitters'] = 'Kdo bude oprávněn definovat nové RSS zdroje? Definované zdroje jsou dostupné na jakékoliv stránce ve vašem Moodlu';
$string['submitters2'] = 'Kdo definuje RSS zdroje';
$string['timeout'] = 'Doba platnosti záznamu ve vyrovnávací paměti vzdáleného RSS zdroje. Vzdálený zdroj zpráv bude aktualizován v nejbližším dalším běhu cronu poté, co vyprší platnost vyrovnávací paměti.';
$string['timeout2'] = 'Časový limit';
$string['timeoutdesc'] = 'Počet minut, po který je RSS zdroj uchováván v mezipaměti (cache)';
$string['updatefeed'] = 'Upravit URL zdroje zpráv';
$string['viewfeed'] = 'Zobrazit zdroj';
