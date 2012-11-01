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
 * Strings for component 'assign', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   assign
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubmission'] = 'Přidat řešení úkolu';
$string['allowsubmissions'] = 'Povolit uživateli pokračování v hodnocení odevzdaného úkolu.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Detaily úkolu a formulář pro odevzdání bude dostupný od <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Povolit odevzdání úkolů od';
$string['allowsubmissionsfromdatesummary'] = 'Odevzdat úkol bude možné od <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'Povolit změny odevzdaného úkolu';
$string['alwaysshowdescription'] = 'Povolit zobrazení popisu';
$string['assign:addinstance'] = 'Přidat nový úkol';
$string['assign:exportownsubmission'] = 'Exportovat vlastní řešení do portfolia';
$string['assignfeedback'] = 'Rozšíření typu dotazník';
$string['assignfeedbackpluginname'] = 'Rozšíření typu dotazník';
$string['assign:grade'] = 'Známkovat úkoly';
$string['assignmentisdue'] = 'Úkol je zpožděn';
$string['assignmentmail'] = '{$a->grader} okomentoval  vaše řešení úkolu  \'{$a->assignment}\'.

Hodnocení naleznete u sveho úkolu na adrese:
{$a->url}.';
$string['assignmentmailhtml'] = '{$a->grader} okomentoval  vaše řešení úkolu  \'<i>{$a->assignment}</i>\'. <br /><br />Hodnocení naleznete u <a href="{$a->url}">svého úkolu</a>.';
$string['assignmentmailsmall'] = '{$a->grader} okomentoval vaše řešení úkolu "{$a->assignment}". Více informací najdete na stránce s vaším řešením.';
$string['assignmentname'] = 'Název úkolu';
$string['assignmentplugins'] = 'Rozšíření typu úkol';
$string['assignmentsperpage'] = 'Úkolů na stránku';
$string['assignsubmission'] = 'Rozšíření typu odevzdaný úkol';
$string['assignsubmissionpluginname'] = 'Rozšíření typu odevzdaný úkol';
$string['assign:submit'] = 'Odevzdávat úkoly';
$string['assign:view'] = 'Prohlížet úkoly';
$string['availability'] = 'Dostupnost';
$string['backtoassignment'] = 'Zpět k úkolu';
$string['batchoperationconfirmlock'] = 'Zamknout všechny vybrané odevzdané úkoly?';
$string['batchoperationconfirmreverttodraft'] = 'Vrátit vybrané odevzdané úkoly do stavu návrh?';
$string['batchoperationconfirmunlock'] = 'Odemknout všechny vybrané odevzdané úkoly?';
$string['batchoperationlock'] = 'zamknout odevzdané úkoly';
$string['batchoperationreverttodraft'] = 'vrátit odevzdaný úkol do stavu návrh';
$string['batchoperationsdescription'] = 'Provést akci na vybrané řádky';
$string['batchoperationunlock'] = 'odemknout odevzdané úkoly';
$string['comment'] = 'Komentář';
$string['configshowrecentsubmissions'] = 'Všem zobrazovat upozornění o odevzdaných úkolech v přehledu nedávné činnosti.';
$string['confirmbatchgradingoperation'] = 'Jste si jist, že chcete {$a->operation} pro {$a->count} studenty?';
$string['confirmsubmission'] = 'Jste si jisti, že chcete odeslat svou práci k hodnocení? Nebudete moci provádět žádné další změny';
$string['conversionexception'] = 'Nelze konvertovat úkol. Výjimka je: {$a}.';
$string['couldnotconvertgrade'] = 'Nelze konvertovat hodnocení úkolu uživatele {$a}.';
$string['couldnotconvertsubmission'] = 'Nelze konvertovat odevzdaný úkol uživatele {$a}.';
$string['couldnotcreatecoursemodule'] = 'Nelze vytvořit modul kurzu.';
$string['couldnotcreatenewassignmentinstance'] = 'Nelze vytvořit novou instanci úkolu.';
$string['couldnotfindassignmenttoupgrade'] = 'Nelze nalézt staré instance úkolů k aktualizaci.';
$string['currentgrade'] = 'Momentální známka v klasifikaci kurzu';
$string['defaultplugins'] = 'Výchozí nastavení úkolu';
$string['defaultplugins_help'] = 'Tato nastavení definují výchozí hodnoty pro nové úkoly.';
$string['deletepluginareyousure'] = 'Modul úkolu bude zrušen {$a}: jste si jisti?';
$string['deletepluginareyousuremessage'] = 'Chystáte se zcela odstranit doplňek {$a}. Tím se odstraní vše, co je v databázi spojené s tímto doplňkem modulu Úkol. Jste si jisti, že chcete pokračovat?';
$string['deletingplugin'] = 'Odstranit rozšíření {$a}.';
$string['description'] = 'Popis';
$string['downloadall'] = 'Uložit odevzdané úkoly';
$string['duedate'] = 'Termín odevzdání';
$string['duedateno'] = 'Bez termínu odevzdání';
$string['duedatereached'] = 'Termín pro odevzdání tohoto úkolu jižuplynul';
$string['duedatevalidation'] = 'Datum ukončení musí být po datu povolující odevzdání úkolu';
$string['editaction'] = 'Akce ...';
$string['editsubmission'] = 'Upravit mé řešení úkolu';
$string['enabled'] = 'Povoleno';
$string['errornosubmissions'] = 'Žádná odevzdaná řešení ke stažení.';
$string['errorquickgradingvsadvancedgrading'] = 'Hodnocení nebylo uloženo, neboť tento úkol v současné době využívá pokročilé hodnocení';
$string['errorrecordmodified'] = 'Hodnocení nebylo uloženo, protože někdo změnil jeden nebo více záznamů poté, co jste načetli tuto stránku.';
$string['feedback'] = 'Hodnocení';
$string['feedbackavailablehtml'] = '{$a->username} odeslal komentář k vašemu
odevzdanému úkolu "<i>{$a->assignment}</i>"<br /><br />
Můžete si jej zobrazit u svého <a href="{$a->url}"> odevzdaného úkolu</a>.';
$string['feedbackavailablesmall'] = '{$a->username} okomentoval úkol {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username} odeslal komentář k vašemu
odevzdanému úkolu "{$a->assignment}"

Můžete si jej zobrazit u svého odevzdaného úkolu:

    {$a->url}';
$string['feedbackplugin'] = 'Modul pro komentář';
$string['feedbackpluginforgradebook'] = 'Modul zpětné vazby bude zapisovat komentáře k hodnocení';
$string['feedbackplugins'] = 'Moduly komentáře';
$string['feedbacksettings'] = 'Nastavení komentáře';
$string['filesubmissions'] = 'Soubor odevzdaných úkolů';
$string['filter'] = 'Filtr';
$string['filternone'] = 'Bez filtru';
$string['filterrequiregrading'] = 'Požadováno hodnocení';
$string['filtersubmitted'] = 'Odevzdáno';
$string['gradeabovemaximum'] = 'Hodnocení musí být menší nebo rovno {$a}.';
$string['gradebelowzero'] = 'Hodnocení musí být větší nebo rovno nule.';
$string['graded'] = 'Udělena známka';
$string['gradedby'] = 'Hodnoceno';
$string['gradedon'] = 'Hodnoceno na';
$string['gradeoutof'] = 'Hodnoceno z {$a}';
$string['gradeoutofhelp'] = 'Hodnocení';
$string['gradeoutofhelp_help'] = 'Zde zadejte známku za úkol studenta. Může obsahovat desetetinná místa.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} upravil(a) své vypracování úkolu <em>"{$a->assignment}"</em> (upraveno {$a->timeupdated}).<br /><br />Aktualizované řešení je <a href="{$a->url}">dostupné zde</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} aktualizoval svůj odevzdaný úkol {$a->assignment}.';
$string['gradersubmissionupdatedtext'] = '{$a->username} upravil(a) své vypracování úkolu "{$a->assignment}" (upraveno {$a->timeupdated}).

Aktualizované řešení je dostupné na:

{$a->url}.';
$string['gradestudent'] = 'Hodnocení studenta: (id={$a->id}, fullname={$a->fullname}).';
$string['grading'] = 'Hodnocení';
$string['gradingoptions'] = 'Seznam možností hodnocení';
$string['gradingstatus'] = 'Stav hodnocení';
$string['gradingstudentprogress'] = 'Hodnocený student  {$a->index} of {$a->count}';
$string['gradingsummary'] = 'Celkem hodnocení';
$string['hideshow'] = 'Skrýt/zobrazit';
$string['instructionfiles'] = 'Soubory s návody';
$string['invalidfloatforgrade'] = 'Neplatné hodnocení: {$a}';
$string['invalidgradeforscale'] = 'Pro aktuální škálu není poskytnuté hodnocení správné.';
$string['lastmodifiedgrade'] = 'Poslední změna (hodnocení)';
$string['lastmodifiedsubmission'] = 'Poslední změna (odevzdaný úkol)';
$string['locksubmissionforstudent'] = 'Zamezit odevzdání úkolu studenta: (id={$a->id}, celé jméno={$a->fullname}).';
$string['locksubmissions'] = 'Zamknout odevzdání úkolů';
$string['manageassignfeedbackplugins'] = 'Správa modulů pro komentování úkolů';
$string['manageassignsubmissionplugins'] = 'Správa modulů pro odevzdání úkolů';
$string['messageprovider:assign_notification'] = 'Oznámení úkolu';
$string['modulename'] = 'Úkol';
$string['modulename_help'] = 'Úkoly umožňují učiteli zadat úkoly, hodnotit odevzdané práce a komentovat je.

Studenti mohou odevzdat libovolný soubor, jako  dokumenty textových aplikací, tabulky, obrázky nebo audio a video. Alternativně nebo současně může úkol požadovat, aby studenti napsali text přímo do textového pole. Úkol může být použit také pro připomenutí jiných povinností studentů, které neprobíhají přímo v Moodle - např. odevzdání výkresu.

Učitel může zobrazit odevzdané úkoly, připojit zpětnou vazbu a soubor, komentáře nebo nahrát audio odpověď.

Úkoly mohou být hodnoceny jednoduchým přímým hodnocením, případně pokročilou metodou. Výsledná známka je zapsána do klasifikace.';
$string['modulenameplural'] = 'Úkoly';
$string['mysubmission'] = 'Můj odevzdaný úkol:';
$string['newsubmissions'] = 'Odevzdané úkoly';
$string['nofiles'] = 'Žádný soubor.';
$string['nograde'] = 'Žádné hodnocení.';
$string['noonlinesubmissions'] = 'Tento úkol nevyžaduje odpověď online';
$string['nosavebutnext'] = 'Další';
$string['nosubmission'] = 'K tomuto úkolu nebylo nic odevzdáno';
$string['notgraded'] = 'Nehodnoceno';
$string['notgradedyet'] = 'Zatím neudělena známka';
$string['notifications'] = 'Oznámení';
$string['notsubmittedyet'] = 'Zatím neodevzdáno';
$string['nousersselected'] = 'Nevybrán uživatel';
$string['numberofdraftsubmissions'] = 'Návrhy';
$string['numberofparticipants'] = 'Účastníci';
$string['numberofsubmissionsneedgrading'] = 'Nutno ohodnotit';
$string['numberofsubmittedassignments'] = 'Odevzdáno';
$string['offline'] = 'Nejsou požadovány odpovědi online';
$string['outlinegrade'] = 'Hodnocení: {$a}';
$string['overdue'] = '<font color="red">Úkol má zpoždění: {$a}</font>';
$string['page-mod-assign-view'] = 'Hlavní stránka úkolu';
$string['page-mod-assign-x'] = 'Jakákoliv stránka úkolu';
$string['pluginadministration'] = 'Správa úkolu';
$string['pluginname'] = 'Úkol';
$string['preventlatesubmissions'] = 'Zakázat odevzdávání po termínu';
$string['preventsubmissions'] = 'Zabránit uživateli provést další odevzdání k tomuto úkolu.';
$string['preventsubmissionsshort'] = 'Zabránit změnám v odevzdaných úkolech';
$string['previous'] = 'Předchozí';
$string['quickgrading'] = 'Rychlé hodnocení';
$string['quickgradingchangessaved'] = 'Změny hodnocení uloženy';
$string['quickgradingresult'] = 'Rychlé hodnocení';
$string['reverttodraft'] = 'Vrátit úkol do stavu návrh.';
$string['reverttodraftforstudent'] = 'Vrátit úkol do stavu návrh pro studenta: (id={$a->id}, fullname={$a->fullname}).';
$string['reverttodraftshort'] = 'Vrátit úkol do stavu návrh';
$string['reviewed'] = 'Revidováno';
$string['saveallquickgradingchanges'] = 'Uložit všechny změny hodnocení';
$string['savechanges'] = 'Uložit změny';
$string['savenext'] = 'Uložit a zobrazit další';
$string['selectlink'] = 'Vybrat ...';
$string['sendlatenotifications'] = 'Zaslat oznámení hodnotitelům o pozdním odevzdání úkolu';
$string['sendnotifications'] = 'Zaslat oznámení hodnotitelům';
$string['sendsubmissionreceipts'] = 'Zaslat potvrzení o odevzdání úkolu studentům';
$string['settings'] = 'Nastavení úkolu';
$string['showrecentsubmissions'] = 'Zobrazovat nedávná odevzdání';
$string['submission'] = 'Odevzdané úkoly';
$string['submissiondrafts'] = 'Požadovat, aby studenti klikli na tlačítko Odeslat';
$string['submissionnotready'] = 'Tento úkol není připraven k odevzdání:';
$string['submissionplugins'] = 'Rozšířený typu odevzdání úkolu';
$string['submissionreceipthtml'] = 'Odeslali jste řešení úkolu "<i>{$a->assignment}</i>"<br /><br />
Stav vašeho odevzdaného úkolu <a href="{$a->url}">si můžete zobrazit</a>.';
$string['submissionreceipts'] = 'Odeslat potvrzení o odevzdání';
$string['submissionreceiptsmall'] = 'Odeslali jste řešení úkolu {$a->assignment}';
$string['submissionreceipttext'] = 'Odeslali jste
řešení úkolu "{$a->assignment}"

Stav vašeho odevzdaného úkolu můžete zobrazit na:

    {$a->url}';
$string['submissions'] = 'Odevzdané úkoly';
$string['submissionsclosed'] = 'Odevzdávání uzavřeno';
$string['submissionsettings'] = 'Nastavení odevzdávání úkolů';
$string['submissionslocked'] = 'V tomto úkolu nelze odevzdat práci';
$string['submissionslockedshort'] = 'Změny odevzdaných úkolů nejsou povoleny';
$string['submissionsnotgraded'] = 'Nehodnocené odpovědi: {$a}';
$string['submissionstatus'] = 'Stav odevzdání úkolu';
$string['submissionstatus_'] = 'Neodesláno';
$string['submissionstatus_draft'] = 'Návrh (neodesláno)';
$string['submissionstatusheading'] = 'Stav odevzdání úkolu';
$string['submissionstatus_marked'] = 'Udělena známka';
$string['submissionstatus_new'] = 'Nová odevzdání úkolu';
$string['submissionstatus_submitted'] = 'Odesláno k hodnocení';
$string['submitaction'] = 'Odeslat';
$string['submitassignment'] = 'Odevzdat úkol';
$string['submitted'] = 'Odevzdáno';
$string['submittedearly'] = 'Úkoly byly odevzdány {$a} včas';
$string['submittedlate'] = 'Úkoly byly odevzdány {$a} po termínu';
$string['submittedlateshort'] = '{$a} po termínu';
$string['textinstructions'] = 'Návod k úkolu';
$string['timemodified'] = 'Naposledy změněno';
$string['timeremaining'] = 'Zbývá';
$string['unlocksubmissionforstudent'] = 'Povolit odevzdání studentům: (id={$a->id}, fullname={$a->fullname}).';
$string['unlocksubmissions'] = 'Odemknout odevzdané úkoly';
$string['updategrade'] = 'Aktualizovat hodnocení';
$string['updatetable'] = 'Uložit a aktualizovat tabulku';
$string['upgradenotimplemented'] = 'Aktualizace není implementována pro modul ({$a->type} {$a->subtype})';
$string['viewfeedback'] = 'Zobrazit komentář';
$string['viewfeedbackforuser'] = 'Zobrazit komentář pro uživatele: {$a}';
$string['viewfullgradingpage'] = 'Otevře stránky s hodnocením pro získání zpětné vazby';
$string['viewgradebook'] = 'Zobrazit známky';
$string['viewgrading'] = 'Zobrazit/hodnotit všechny odevzdané úkoly';
$string['viewgradingformforstudent'] = 'Zobrazit známky studenta: (id={$a->id}, fullname={$a->fullname}).';
$string['viewownsubmissionform'] = 'Zobrazit stránku s vlastním odevzdaným úkolem.';
$string['viewownsubmissionstatus'] = 'Zobrazit stránku se stavem vlastního odevzdaného úkolu.';
$string['viewsubmission'] = 'Zobrazit odevzdané úkoly';
$string['viewsubmissionforuser'] = 'Zobrazit odevzdané úkoly uživatele: {$a}';
$string['viewsubmissiongradingtable'] = 'Zobrazit tabulku hodnocení odevzdaných úkolů.';
