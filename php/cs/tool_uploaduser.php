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
 * Strings for component 'tool_uploaduser', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   tool_uploaduser
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Povolit odstraňování';
$string['allowrenames'] = 'Povolit přejmenování';
$string['allowsuspends'] = 'Povolit suspendování a opětovnou aktivaci účtů';
$string['csvdelimiter'] = 'CSV oddělovač';
$string['defaultvalues'] = 'Výchozí hodnoty';
$string['deleteerrors'] = 'Odstranit chyby';
$string['encoding'] = 'Kódování';
$string['errors'] = 'Chyby';
$string['nochanges'] = 'Žádné změny';
$string['pluginname'] = 'Import uživatelů';
$string['renameerrors'] = 'Chyby při přejmenování';
$string['requiredtemplate'] = 'Povinné. Můžete zde použít syntaxi šablon (%l = příjmení, %f = křestní jméno, %u = uživatelské jméno). Další informace a příklady najedete v nápovědě.';
$string['rowpreviewnum'] = 'Počet řádek v náhledu';
$string['uploadpicture_baduserfield'] = 'Zadaný atribut uživatele je neplatný. Zkuste to prosím znovu.';
$string['uploadpicture_cannotmovezip'] = 'Nemůžu přesunout soubor zip do dočasného adresáře.';
$string['uploadpicture_cannotprocessdir'] = 'Nemůžu rozbalit zip archiv.';
$string['uploadpicture_cannotsave'] = 'Nemůžu uložit obrázek pro uživatele <b>{$a}</b>. Zkontrolujte původní soubor s obrázkem.';
$string['uploadpicture_cannotunzip'] = 'Nemůžu rozzipovat soubor s obrázky.';
$string['uploadpicture_invalidfilename'] = 'Soubor <b>{$a}</b> s obrázkem má v názvu neplatné znaky. Přeskakuji ho.';
$string['uploadpicture_overwrite'] = 'Přepsat již existující uživatelské obrázky?';
$string['uploadpictures'] = 'Nahrát fotografie uživatelů';
$string['uploadpictures_help'] = 'Profilové obrázky uživatelů mohou být nahrány v jednom ZIP souboru. Obrázky musejí být pojmenovány podle hodnoty zvoleného atributu, např. u20103660.jpg pro uživatele s uživatelským jménem u20103660.';
$string['uploadpicture_userfield'] = 'Atribut uživatele, pomocí kterého identifikovat obrázky.';
$string['uploadpicture_usernotfound'] = 'Uživatel s hodnotou \'<b>{$a->uservalue}</b>\' v poli \'<b>{$a->uservalue}</b>\' neexistuje. Přeskakuji ho.';
$string['uploadpicture_userskipped'] = 'Přeskakuji uživatele <b>{$a}</b>, protože už má fotografii.';
$string['uploadpicture_userupdated'] = 'Fotografie uživatele <b>{$a}</b> byla aktualizována.';
$string['uploadusers'] = 'Načíst uživatele';
$string['uploadusers_help'] = 'Uživatelé mohou být vytvořeni (a volitelně zároveň zapsáni do kurzů) importem z textového souboru. Formát souboru je následující:

* Každý řádek souboru obsahuje právě jeden záznam.
* Každý záznam je tvořen řadou údajů oddělených čárkami, případně jiným podporovaným oddělovačem.
* První záznam souboru má zvláštní funkci – obsahuje názvy polí z uživatelského profilu. Tento seznam definuje formát zbytku souboru.
* Povinná pole jsou username, password, firstname, lastname, email';
$string['uploaduserspreview'] = 'Náhled nahraných uživatelů';
$string['uploadusersresult'] = 'Výsledky nahrání uživatelů';
$string['useraccountupdated'] = 'Aktualizovaný uživatelský účet';
$string['useraccountuptodate'] = 'Uživatelský účet je aktuální';
$string['userdeleted'] = 'Uživatelský účet byl odstraněn';
$string['userrenamed'] = 'Přejmenovaný uživatelský účet';
$string['userscreated'] = 'Nově vytvořené uživatelské účty';
$string['usersdeleted'] = 'Odstraněné uživatelské účty';
$string['usersrenamed'] = 'Přejmenované uživatelské účty';
$string['usersskipped'] = 'Uživatel přeskočen';
$string['usersupdated'] = 'Aktualizované uživatelské účty';
$string['usersweakpassword'] = 'Uživatelé se slabým heslem';
$string['uubulk'] = 'Vybrat pro hromadné operace';
$string['uubulkall'] = 'Všichni uživatelé';
$string['uubulknew'] = 'Noví uživatelé';
$string['uubulkupdated'] = 'Aktualizovaní uživatelé';
$string['uucsvline'] = 'řádka z CSV';
$string['uulegacy1role'] = '(původně Student) typeN=1';
$string['uulegacy2role'] = '(původně Učitel) typeN=2';
$string['uulegacy3role'] = '(původně Učitel bez práva úprav) typeN=3';
$string['uunoemailduplicates'] = 'Zabránit nahrání dupicitních emailů';
$string['uuoptype'] = 'Způsob nahrání uživatelů';
$string['uuoptype_addinc'] = 'Přidat všechny a připojit číslo k uživatelským jménům, bude-li třeba';
$string['uuoptype_addnew'] = 'Přidat jen nové a přeskočit již existující';
$string['uuoptype_addupdate'] = 'Přidat nové a aktualizovat existující';
$string['uuoptype_update'] = 'Aktualizovat pouze existující uživatele';
$string['uupasswordcron'] = 'Vygenerováno v cronu';
$string['uupasswordnew'] = 'Heslo nového uživatele';
$string['uupasswordold'] = 'Hesla již existujících uživatelů';
$string['uustandardusernames'] = 'Standardizovat uživatelská jména';
$string['uuupdateall'] = 'Přepsat hodnotami ze souboru a výchozími hodnotami';
$string['uuupdatefromfile'] = 'Přepsat hodnotami ze souboru';
$string['uuupdatemissing'] = 'Vyplnit chybějící položky hodnotami ze souboru nebo výchozími';
$string['uuupdatetype'] = 'Podrobnosti již existujících uživatelů';
$string['uuusernametemplate'] = 'Šablona uživatelského jména';
