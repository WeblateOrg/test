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
 * Strings for component 'blog', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   blog
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'Vložit nový příspěvek';
$string['addnewexternalblog'] = 'Registrovat externí blog';
$string['assocdescription'] = 'Pokud píšete o kurzu a/nebo aktivitách, vyberte je zde.';
$string['associated'] = 'Související {$a}';
$string['associatewithcourse'] = 'Blog o kurzu {$a->coursename}';
$string['associatewithmodule'] = 'Blog o činnosti {$a->modtype}: {$a->modname}';
$string['association'] = 'Souvislost';
$string['associations'] = 'Souvislosti';
$string['associationunviewable'] = 'Ostatní nemohou tento záznam prohlížet, dokud není nastaven související kurz nebo není změněna hodnota pole "Zveřejnit"';
$string['autotags'] = 'Přidat tyto štítky';
$string['autotags_help'] = 'Chcete-li, zadejte jeden nebo více štítků oddělených čárkami. Ty se pak budou automaticky přidávat ke každému příspěvku, který bude zkopírován z externího blogu.';
$string['backupblogshelp'] = 'Zda zahrnout blogy v automatických zálohách stránek';
$string['blockexternalstitle'] = 'Externí blogy';
$string['blocktitle'] = 'Nadpis pro blok se štítky blogovacího systému';
$string['blog'] = 'Blog';
$string['blogaboutthis'] = 'Blog o této činnosti ({$a->type})';
$string['blogaboutthiscourse'] = 'Vložit záznam týkající se tohoto kurzu';
$string['blogaboutthismodule'] = 'Vložit záznam týkající se této činnosti ({$a})';
$string['blogadministration'] = 'Správa blogu';
$string['blogdeleteconfirm'] = 'Opravdu odstranit tuto položku blogu?';
$string['blogdisable'] = 'Blogování zde není povoleno!';
$string['blogentries'] = 'Příspěvky v blogu';
$string['blogentriesabout'] = 'Příspěvky v blogu týkající se "{$a}"';
$string['blogentriesbygroupaboutcourse'] = 'Příspěvky v blogu týkající se kurzu "{$a->course}" od členů skupiny {$a->group}';
$string['blogentriesbygroupaboutmodule'] = 'Příspěvky v blogu týkající se činnosti "{$a->mod}" od členů skupiny {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'Příspěvky v blogu týkající se kurzu "{$a->course}" od uživatele {$a->user}';
$string['blogentriesbyuseraboutmodule'] = 'Příspěvky v blogu týkající se činnosti "{$a->mod}" od uživatele {$a->user}';
$string['blogentrybyuser'] = 'Příspěvky v blogu od uživatele {$a}';
$string['blogpreferences'] = 'Nastavení blogu';
$string['blogs'] = 'Blogy';
$string['blogscourse'] = 'Blogy kurzu';
$string['blogssite'] = 'Blogy stránek';
$string['blogtags'] = 'Štítky blogu';
$string['cannotviewcourseblog'] = 'Nemáte oprávnění prohlížet blogy v tomto kurzu';
$string['cannotviewcourseorgroupblog'] = 'Nemáte oprávnění prohlížet blogy v tomto kurzu nebo skupině';
$string['cannotviewsiteblog'] = 'Nemáte potřebná oprávnění k zobrazení všech blogů na těchto stránkách';
$string['cannotviewuserblog'] = 'Nemáte potřebná oprávnění pro čtení blogů';
$string['configexternalblogcrontime'] = 'Jak často se mají kontrolovat nové příspěvky v externích blozích';
$string['configmaxexternalblogsperuser'] = 'Počet externích blogů, které si může každý uživatel propojit se svým blogem na těchto stránkách.';
$string['configuseblogassociations'] = 'Povolit přiřazování příspěvků v blogu k souvisejícím kurzům nebo modulům činností';
$string['configuseexternalblogs'] = 'Zda se má uživatelům povolit propojit svůj blog na těchto stránkách s externím zdrojem. Moodle pravidelně kontroluje externí blogy a kopíruje nové příspěvky do lokálního blogu daného uživatele.';
$string['courseblog'] = 'Blog kurzu: {$a}';
$string['courseblogdisable'] = 'Blogy kurzu nejsou dostupné';
$string['courseblogs'] = 'Uživatelé smějí číst pouze blogy účastníků stejného kurzu';
$string['deleteblogassociations'] = 'Odstranit všechny souvislosti';
$string['deleteblogassociations_help'] = 'Při zaškrtnutí budou odstraněny všechny souvislosti s kurzy, činnostmi nebo studijními materiály. Samotné příspěvky nebudou odstraněny.';
$string['deleteexternalblog'] = 'Odregistrovat tento externí blog';
$string['deleteotagswarn'] = 'Jste si jistí, že chcete odebrat následující štítky ze všech příspěvků blogu a odstranit je ze systému?';
$string['description'] = 'Popis';
$string['description_help'] = 'Vložte větu či dvě popisující obsah vašeho externího blogu. Ponecháte-li toto pole prázdné, bude použit popis zaznamenaný přímo v externím blogu.';
$string['disableblogs'] = 'Zcela deaktivovat blogovací systém';
$string['donothaveblog'] = 'Bohužel, nemáte svůj vlastní blog.';
$string['editentry'] = 'Upravit příspěvek v blogu';
$string['editexternalblog'] = 'Upravit tento externí blog';
$string['emptybody'] = 'Text příspěvku nemůže být prázdný';
$string['emptyrssfeed'] = 'Tato adresa URL neodkazuje na platný RSS kanál';
$string['emptytitle'] = 'Titulek příspěvku nemůže být prázdný';
$string['emptyurl'] = 'Musíte zadat URL platného RSS kanálu';
$string['entrybody'] = 'Text příspěvku';
$string['entrybodyonlydesc'] = 'Popis příspěvku';
$string['entryerrornotyours'] = 'Tento příspěvek není váš';
$string['entrysaved'] = 'Váš příspěvek byl uložen';
$string['entrytitle'] = 'Titulek příspěvku';
$string['entryupdated'] = 'Příspěvek byl aktualizován';
$string['externalblogcrontime'] = 'Časový plán kontroly externích blogů';
$string['externalblogdeleteconfirm'] = 'Odebrat tento externí blog?';
$string['externalblogdeleted'] = 'Externí blog odregistrován';
$string['externalblogs'] = 'Externí blogy';
$string['feedisinvalid'] = 'Neplatný zdroj';
$string['feedisvalid'] = 'Tento zdroj je platný';
$string['filterblogsby'] = 'Filtrovat příspěvky podle ...';
$string['filtertags'] = 'Filtr na základě štítků';
$string['filtertags_help'] = 'Tuto funkci můžete použít, pokud chcete do lokálního blogu kopírovat jen některé příspěvky. Zadejte seznam štítků oddělených čárkami. Pouze příspěvky označené těmito štítky budou zkopírovány z externího blogu.';
$string['groupblog'] = 'Blog skupiny: {$a}';
$string['groupblogdisable'] = 'Skupinový blog není povolen';
$string['groupblogentries'] = 'Příspěvky blogu týkajíící se kurzu {$a->coursename} od skupiny {$a->groupname}';
$string['groupblogs'] = 'Uživatelé smějí číst pouze blogy uživatelů ze stejné skupiny';
$string['incorrectblogfilter'] = 'Chybný typ filtru blogu';
$string['intro'] = 'Tento RSS zdroj byl automaticky vygenerován z jednoho či více blogů.';
$string['invalidgroupid'] = 'Neplatný identifikátor skupiny';
$string['invalidurl'] = 'Nelze načíst tuto adresu URL';
$string['linktooriginalentry'] = 'Odkaz na původní příspěvek';
$string['maxexternalblogsperuser'] = 'Nejvyšší možný počet externích blogů na jednoho uživatele';
$string['mustassociatecourse'] = 'Pokud chcete zveřejnit svůj příspěvek ostatním účastníkům v kurzu nebo členům vaší skupiny, musíte nastavit kurzu, jehož se příspěvek týká.';
$string['name'] = 'Název';
$string['name_help'] = 'Název externího blogu. Ponecháte-li prázdné, bude použit původní název externího blogu';
$string['noentriesyet'] = 'Nejsou k dispozici žádné viditelné příspěvky';
$string['noguestpost'] = 'Hosté nemohou psát do blogu!';
$string['nopermissionstodeleteentry'] = 'Chybí vám oprávnění potřebná k odstranění tohoto příspěvku v blogu';
$string['norighttodeletetag'] = 'Nemáte oprávnění k odstranění štítku {$a}';
$string['nosuchentry'] = 'Žádný takový příspěvek v blogu nebyl nalezen';
$string['notallowedtoedit'] = 'Nemáte oprávnění upravovat tento příspěvek';
$string['numberofentries'] = 'Příspěvky: {$a}';
$string['numberoftags'] = 'Počet zobrazovaných štítků';
$string['page-blog-edit'] = 'Stránky pro úpravy blogu';
$string['page-blog-index'] = 'Seznam blogů';
$string['page-blog-x'] = 'Všechny blogy';
$string['pagesize'] = 'Počet příspěvků na stránku';
$string['permalink'] = 'Trvalý odkaz';
$string['personalblogs'] = 'Uživatelé smějí číst pouze svůj vlastní blog';
$string['preferences'] = 'Předvolby';
$string['publishto'] = 'Zveřejnit';
$string['publishtocourse'] = 'Uživatelé sdílející kurz s vámi';
$string['publishtocourseassoc'] = 'Členové z asociovaného kurzu';
$string['publishtocourseassocparam'] = 'Členové z {$a}';
$string['publishtogroup'] = 'Uživatelé sdílející kurz s vámi';
$string['publishtogroupassoc'] = 'Členové vaší skupiny v asociovaném kurzu';
$string['publishtogroupassocparam'] = 'Členové vaší skupiny v {$a}';
$string['publishto_help'] = '<p>Zde můžete vybrat ze tří možných nastavení:</p>

<p><b>Pouze vám (pracovní verze)</b> &ndash; tento příspěvek si budete moci
prohlédnout pouze vy a správci systému.</p>

<p><b>Všem uživatelům Moodlu</b> &ndash; tento příspěvek si může prohlédnout
pouze registrovaný uživatel.</p>

<p><b>Komukoliv v Internetu</b> &ndash; tento příspěvek si může prohlédnout
kterýkoliv uživatel včetně hostů.</p>';
$string['publishtonoone'] = 'Pouze vám (pracovní verze)';
$string['publishtosite'] = 'Všem uživatelům těchto stránek';
$string['publishtoworld'] = 'Komukoliv v Internetu';
$string['readfirst'] = 'Nejdříve čtěte';
$string['relatedblogentries'] = 'Související příspěvky v blogu';
$string['retrievedfrom'] = 'Citováno z';
$string['rssfeed'] = 'RSS zdroj blogu';
$string['searchterm'] = 'Hledat: {$a}';
$string['settingsupdatederror'] = 'Došlo k chybě, nastavení blogu nebylo možné aktualizovat.';
$string['siteblog'] = 'Blog stránek: {$a}';
$string['siteblogdisable'] = 'Blog stránek není povolen';
$string['siteblogs'] = 'Všichni registrovaní uživatelé smějí číst všechny blogy';
$string['tagdatelastused'] = 'Datum, kdy byl štítek naposledy použit';
$string['tagparam'] = 'Štítek: {$a}';
$string['tags'] = 'Štítky';
$string['tagsort'] = 'Řadit  štítky podle';
$string['tagtext'] = 'Název štítku';
$string['timefetched'] = 'Čas poslední synchronizace';
$string['timewithin'] = 'Zobrazit štítky použité v poslední době (počet dnů)';
$string['updateentrywithid'] = 'Aktualizuji příspěvek';
$string['url'] = 'URL zdroje';
$string['url_help'] = 'Zadejte URL adresu RSS kanálu externího blogu';
$string['useblogassociations'] = 'Povolit souvislosti blogů';
$string['useexternalblogs'] = 'Povolit externí blogy';
$string['userblog'] = 'Uživatelský blog: {$a}';
$string['userblogentries'] = 'Příspěvky blogu od {$a}';
$string['valid'] = 'Platný';
$string['viewallblogentries'] = 'Všechny příspěvky o {$a}';
$string['viewallmodentries'] = 'Zobrazit všechny příspěvky o této činnosti ({$a->type})';
$string['viewallmyentries'] = 'Zobrazit všechny mé příspěvky';
$string['viewblogentries'] = 'Příspěvky o této činnosti ({$a->type})';
$string['viewblogsfor'] = 'Zobrazit všechny příspěvky od ...';
$string['viewcourseblogs'] = 'Zobrazit všechny příspěvky související s tímto kurzem';
$string['viewentriesbyuseraboutcourse'] = 'Zobrazit příspěvky uživatele {$a} související s tímto kurzem';
$string['viewgroupblogs'] = 'Zobrazit příspěvky skupiny ...';
$string['viewgroupentries'] = 'Příspěvky skupiny';
$string['viewmodblogs'] = 'Zobrazit příspěvky moduly ...';
$string['viewmodentries'] = 'Příspěvky modulu';
$string['viewmyentries'] = 'Mé příspěvky';
$string['viewmyentriesaboutcourse'] = 'Zobrazit mé příspěvky související s tímto kurzem';
$string['viewmyentriesaboutmodule'] = 'Zobrazit mé příspěvky o této činnosti ({$a->type})';
$string['viewsiteentries'] = 'Zobrazit všechny příspěvky';
$string['viewuserentries'] = 'Zobrazit všechny příspěvky uživatele {$a}';
$string['worldblogs'] = 'Návštěvníci stránek smějí číst záznamy zveřejněné "Komukoliv v Internetu"';
$string['wrongpostid'] = 'Chybný identifikátor příspěvku blogu';
