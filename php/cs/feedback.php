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
 * Strings for component 'feedback', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   feedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Přidat otázku';
$string['add_items'] = 'Přidávání nových otázek';
$string['add_pagebreak'] = 'Vložit zalomení stránky';
$string['adjustment'] = 'Rozmístění';
$string['after_submit'] = 'Zobrazit po odevzdání dotazníku';
$string['allowfullanonymous'] = 'Umožnit úplnou anonymitu';
$string['analysis'] = 'Analýza';
$string['anonymous'] = 'Anonymní';
$string['anonymous_edit'] = 'Záznamenat jména uživatelů';
$string['anonymous_entries'] = 'Anonymní záznamy';
$string['anonymous_user'] = 'Anonymní uživatel';
$string['append_new_items'] = 'Přidat nové položky';
$string['autonumbering'] = 'Automaticky číslovat každou otázku';
$string['autonumbering_help'] = 'Povolit nebo nepovolit automatické číslování úloh';
$string['average'] = 'Průměr';
$string['bold'] = 'Tučně';
$string['cancel_moving'] = 'Zrušit přesun';
$string['cannotmapfeedback'] = 'Chyba databáze, není možné propojit dotazník s kurzem';
$string['cannotsavetempl'] = 'ukládání šablon není povoleno';
$string['cannotunmap'] = 'Chyba databáze, není možné odebrat kurz z šetření';
$string['captcha'] = 'Captcha (text v obrázku)';
$string['captchanotset'] = 'Captcha nebyla nastavena.';
$string['check'] = 'Více možností - více odpovědí';
$string['checkbox'] = 'Více možností - více možných odpovědí (zaškrtávací políčko)';
$string['check_values'] = 'Možné odpovědi';
$string['choosefile'] = 'Vyberte soubor';
$string['chosen_feedback_response'] = 'zvolená odpověď';
$string['completed'] = 'hotovo';
$string['completed_feedbacks'] = 'Odevzdané odpovědi';
$string['complete_the_form'] = 'Klikněte zde a odpovězte na otázky...';
$string['completionsubmit'] = 'Zobrazit jako dokončené, je-li dotazník odeslán';
$string['configallowfullanonymous'] = 'Je-li zvolena tato volba, může být dotazník dokončen i bez přihlášení. Tato možnost platí pro dotazník na hlavní stránce.';
$string['confirmdeleteentry'] = 'Opravdu odstranit tento záznam?';
$string['confirmdeleteitem'] = 'Opravdu odstranit tuto položku?';
$string['confirmdeletetemplate'] = 'Opravdu odstranit tuto šablonu?';
$string['confirmusetemplate'] = 'Opravdu použít tuto šablonu?';
$string['continue_the_form'] = 'Pokračovat ve formuláři';
$string['count_of_nums'] = 'Počet čísel';
$string['courseid'] = 'ID kurzu (courseid)';
$string['creating_templates'] = 'Uložit tyto otázky jako novou šablonu';
$string['delete_entry'] = 'Odstranit záznam';
$string['delete_item'] = 'Odstranit otázku';
$string['delete_old_items'] = 'Odstranit staré položky';
$string['delete_template'] = 'Smazat šablonu';
$string['delete_templates'] = 'Smazat šablonu...';
$string['depending'] = 'Závislé položky';
$string['depending_help'] = 'Tato funkce umožňuje zobrazovat položky v závislosti na vyplněných hodnotách jiných položek dotazníku.

* Nejprve vytvořte položku, na jejíž hodnotě budou záviset jiné položky
* Za ní vložte oddělovač stránky
* Poté vložte závislé položky. Vyberte z nabídky pole, na jehož hodnotě položka závisí a zadejte hodnotu, která musí být vyplněna, aby závislé pole bylo dostupné.

Příklad použití:

* Otázka 1: máte auto? (ano / ne)
* Oddělovač stránky
* Otázka 2: jakou barvu má vaše auto? (položka závisí na otázce 1 a vyplněné odpovědi "ano")
* Otázka 3: proč nemáte auto? (položka závisí na otázce 1 a vyplněné odpovědi "ne")';
$string['dependitem'] = 'Záviset na položce';
$string['dependvalue'] = 'Záviset na hodnotě';
$string['description'] = 'Popis';
$string['do_not_analyse_empty_submits'] = 'Neanalyzovat prázdné odpovědi';
$string['dropdown'] = 'Více možností - jedna možná odpověď (rozbalovací nabídka)';
$string['dropdownlist'] = 'Více možností - jedna odpověď (rozbalovací nabídka)';
$string['dropdownrated'] = 'Rozbalovací nabídka (s číselným ohodnocením)';
$string['dropdown_values'] = 'Odpovědi';
$string['drop_feedback'] = 'Odebrat dotazník z tohoto kurzu';
$string['edit_item'] = 'Upravit otázku';
$string['edit_items'] = 'Upravit otázky';
$string['emailnotification'] = 'upozornění e-mailem';
$string['email_notification'] = 'Posílat emailová upozornění';
$string['emailnotification_help'] = 'Je-li povoleno, obdrží správci e-mailové upozornění o odevzdání dotazníku.';
$string['emailteachermail'] = '{$a->username} vyplnil(a) dotazník "{$a->feedback}"

Prohlédnout si ho můžete zde:

{$a->url}';
$string['emailteachermailhtml'] = '{$a->username} vyplnil(a) dotazník: <i>"{$a->feedback}"</i><br /><br />
Prohlédnout si ho můžete  <a href="{$a->url}">zde</a>.';
$string['entries_saved'] = 'Vaše odpovědi byly uloženy. Děkujeme.';
$string['export_questions'] = 'Exportovat otázky';
$string['export_to_excel'] = 'Export do Excelu';
$string['feedback:addinstance'] = 'Přidat nový dotazník';
$string['feedbackclose'] = 'Uzavřít dotazník';
$string['feedbackcloses'] = 'Uzávěrka dotazníku';
$string['feedback:complete'] = 'Vyplňovat dotazník';
$string['feedback:createprivatetemplate'] = 'Vytvářet privátní šablony';
$string['feedback:createpublictemplate'] = 'Vytvářet veřejné šablony';
$string['feedback:deletesubmissions'] = 'Odstraňovat odevzdané odpovědi';
$string['feedback:deletetemplate'] = 'Odstraňovat šablony';
$string['feedback:edititems'] = 'Upravovat položky dotazníku';
$string['feedback_is_not_for_anonymous'] = 'dotazník není pro anonymní uživatele';
$string['feedback_is_not_open'] = 'Dotazník není přístupný';
$string['feedback:mapcourse'] = 'Mapovat kurzy globálními dotazníky';
$string['feedbackopen'] = 'Otevřít dotazník dne';
$string['feedbackopens'] = 'Začátek';
$string['feedback_options'] = 'Možnosti dotazníku';
$string['feedback:receivemail'] = 'Dostávat upozornění e-mailem';
$string['feedback:view'] = 'Vidět dotazník';
$string['feedback:viewanalysepage'] = 'Po odeslání zobrazit analýzu';
$string['feedback:viewreports'] = 'Zobrazit sestavy';
$string['file'] = 'Soubor';
$string['filter_by_course'] = 'Filtrovat podle kurzů';
$string['handling_error'] = 'V modulu Dotazník vznikla chyba při obsluze akcí';
$string['hide_no_select_option'] = 'Skrýt možnost "Nevybráno"';
$string['horizontal'] = 'vodorovně';
$string['importfromthisfile'] = 'Importovat z tohoto souboru';
$string['import_questions'] = 'Importovat otázky';
$string['import_successfully'] = 'Úspěšně importováno';
$string['info'] = 'Informace';
$string['infotype'] = 'Informace';
$string['insufficient_responses'] = 'neúplné odpovědi';
$string['insufficient_responses_for_this_group'] = 'V této skupině je nedostatek odpovědí';
$string['insufficient_responses_help'] = 'Nedostatečný počet odpovědí v této skupině.

Má-li být dotazník anonymní, musejí být k dispozici nejméně dva vyplněné dotazníky.';
$string['item_label'] = 'Popisek';
$string['item_name'] = 'Otázka';
$string['items_are_required'] = 'Otázky označené hvězdičkou je nutno vyplnit';
$string['label'] = 'Popisek';
$string['line_values'] = 'Číselné ohodnocení';
$string['mapcourse'] = 'Mapovat kurzy';
$string['mapcourse_help'] = 'Ve výchozím nastavení jsou dotazníky vytvořené na titulní stránce dostupné na celém serveru a objeví se ve všech kurzech, které obsahují blok Dotazník. Lze zařídit, že se tento blok bude povinně objevovat ve všech kurzech. Pomocí funkce mapování pak můžete sbírat údaje jen ve vybraných kurzech.';
$string['mapcourseinfo'] = 'Toto je veřejný dotazník, dostupný ze všech kurzů pomocí postranního dotazníkového bloku. Můžete však omezit kurzy, v nichž bude tento dotazník dostupný, tím, že je k němu namapujete. Najděte kurz a namapujte ho na tento dotazník.';
$string['mapcoursenone'] = 'Nenamapovány žádné kurzy. Dotazník je přístupný ze všech kurzů.';
$string['mapcourses'] = 'Mapování kurzů';
$string['mapcourses_help'] = 'Poté co vyberete relevantní kurzy, přiřaďte je k danému dotazníku pomocí "Mapovat kurzy". Vícero položek lze označit za pomoci klávesy Ctrl (případně Apple). Kurz je možno z dotazníkového šetření kdykoliv odebrat.';
$string['mappedcourses'] = 'Mapované kurzy';
$string['max_args_exceeded'] = 'Nejvýše 6 znaků, příliš mnoho argumentů pro';
$string['maximal'] = 'maximum';
$string['messageprovider:message'] = 'Upozornění na vyplněný dotazník';
$string['messageprovider:submission'] = 'Oznámení o vyplnění dotazníku';
$string['mode'] = 'Režim';
$string['modulename'] = 'Dotazník';
$string['modulename_help'] = 'Modul Dotazník umožňuje realizovat dotazníkové šetření. Slouží pro získání zpětné vazby od účastníků kurzu. Při návrhu dotazníku lze použít řadu typů položek včetně výběru z daných hodnot nebo volné tvořené odpovědi.

Vyplněné dotazníky mohou být anonymní, je-li to žádoucí. Výsledky mohou být k dispozici i studentům nebo pouze vyučujícím. Dotazníky na titulní stránce serveru mohou vyplňovat též nepřihlášení uživatelé.

Dotazník lze využít např.

* pro evaluaci kurzu směřující ke zvýšení kvality jeho obsahu pro další účastníky
* pro přihlašování se účastníků k různým událostem
* k získání anonymní zpětné vazby od náhodných návštěvníků vašich stránek
* ke sběru anonymním reportů, např. hlášení školní šikany apod.';
$string['modulenameplural'] = 'Dotazníky';
$string['movedown_item'] = 'Přesunout tuto otázku dolů';
$string['move_here'] = 'Přesunout sem';
$string['move_item'] = 'Přesunout tuto otázku';
$string['moveup_item'] = 'Přesunout tuto otázku nahoru';
$string['multichoice'] = 'Výběr z možných odpovědí';
$string['multichoicerated'] = 'Výběr z možných odpovědí (s číselným ohodnocením)';
$string['multichoicetype'] = 'Výběr z možných odpovědí';
$string['multichoice_values'] = 'Nabízené odpovědi';
$string['multiplesubmit'] = 'Vícenásobná odevzdání';
$string['multiple_submit'] = 'Vícenásobná odevzdání';
$string['multiplesubmit_help'] = 'Jsou-li povoleny anonymní průzkumy, mohou uživatelé odevzdat dotazník neomezeněkrát.';
$string['name'] = 'Název';
$string['name_required'] = 'Název je vyžadován';
$string['next_page'] = 'Další stránka';
$string['no_handler'] = 'Neexistuje ovladač pro';
$string['no_itemlabel'] = 'Žádný popisek';
$string['no_itemname'] = 'Chybí název položky';
$string['no_items_available_yet'] = 'Ještě nebyly vloženy žádné otázky';
$string['non_anonymous'] = 'Jména respondentů budou zaznamenána a ukázána s odpověďmi';
$string['non_anonymous_entries'] = 'Neanonymní záznamy';
$string['non_respondents_students'] = 'uživatelé, kteří ještě neodpověděli';
$string['notavailable'] = 'tento dotazník není dostupný';
$string['not_completed_yet'] = 'Dosud nedokončeno';
$string['no_templates_available_yet'] = 'Nejsou dostupné žádné šablony';
$string['not_selected'] = 'Nevybráno';
$string['not_started'] = 'nebylo spuštěno';
$string['numeric'] = 'Číselná odpověď';
$string['numeric_range_from'] = 'Rozsah od';
$string['numeric_range_to'] = 'Rozsah do';
$string['of'] = 'z';
$string['oldvaluespreserved'] = 'Staré otázky a přiřazené odpovědi budou zachovány';
$string['oldvalueswillbedeleted'] = 'Stávající otázky a odpovědi všech uživatelů budou odstraněny';
$string['only_one_captcha_allowed'] = 'V dotazníku je povolena jen jedna captcha';
$string['overview'] = 'Přehled';
$string['page'] = 'Stránka';
$string['page_after_submit'] = 'Stránka po dokončení';
$string['pagebreak'] = 'Zalomení stránky';
$string['page-mod-feedback-x'] = 'Jakákoliv stránka dotazníku';
$string['parameters_missing'] = 'Chybí parametry u';
$string['picture'] = 'Obrázek';
$string['picture_file_list'] = 'Seznam obrázků';
$string['picture_values'] = 'Vyberte jeden nebo více<br />obrázků ze seznamu:';
$string['pluginadministration'] = 'Správa dotazníku';
$string['pluginname'] = 'Dotazník';
$string['position'] = 'Pozice';
$string['preview'] = 'Náhled';
$string['preview_help'] = 'V tomto zobrazení můžete změnit pořadí úloh.';
$string['previous_page'] = 'Předchozí stránka';
$string['public'] = 'Veřejná';
$string['question'] = 'Otázka';
$string['questions'] = 'Otázky';
$string['radio'] = 'Více možností - jedna odpověď';
$string['radiobutton'] = 'Více možností - jedna možná odpověď (přepínače)';
$string['radiobutton_rated'] = 'Přepínač (s číselným ohodnocením)';
$string['radiorated'] = 'Přepínač (s číselným ohodnocením)';
$string['radio_values'] = 'Možné odpovědi';
$string['ready_feedbacks'] = 'Připravené dotazníky';
$string['relateditemsdeleted'] = 'Odpovědi uživatelů na tuto otázku budou rovněž odstraněny';
$string['required'] = 'Vyžadováno';
$string['resetting_data'] = 'Resetovat možné odpovědi dotazníku';
$string['resetting_feedbacks'] = 'Reset dotazníku';
$string['response_nr'] = 'Číslo odpovědi';
$string['responses'] = 'Odpovědi';
$string['responsetime'] = 'Čas odpovědí';
$string['save_as_new_item'] = 'Uložit jako novou úlohu';
$string['save_as_new_template'] = 'Uložit jako novou šablonu';
$string['save_entries'] = 'Odevzdejte vaše odpovědi';
$string['save_item'] = 'Uložit otázku';
$string['saving_failed'] = 'Uložení se nezdařilo';
$string['saving_failed_because_missing_or_false_values'] = 'Uložení se nezdařilo z důvodu chybějících nebo neplatných hodnot';
$string['search_course'] = 'Prohledat kurz';
$string['searchcourses'] = 'Vyhledat kurzy';
$string['searchcourses_help'] = 'Vložte celý nebo krátký název kurzu, který chcete mapovat pomocí tohoto dotazníku.';
$string['selected_dump'] = 'Vybrané indexy proměnné $SESSION jsou vypsány níže';
$string['send'] = 'odeslat';
$string['send_message'] = 'odeslat zprávu';
$string['separator_decimal'] = ',';
$string['separator_thousand'] = '.';
$string['show_all'] = 'Ukázat vše';
$string['show_analysepage_after_submit'] = 'Po odeslání zobrazit stránku analýzy';
$string['show_entries'] = 'Ukázat odpovědi';
$string['show_entry'] = 'Ukázat odpověď';
$string['show_nonrespondents'] = 'Ukázat uživatele, kteří neodpověděli';
$string['site_after_submit'] = 'Adresa stránky po dokončení';
$string['sort_by_course'] = 'Seřadit podle kurzu';
$string['start'] = 'Začátek';
$string['started'] = 'spuštěn';
$string['stop'] = 'Konec';
$string['subject'] = 'Předmět';
$string['switch_group'] = 'Přepnout skupinu';
$string['switch_item_to_not_required'] = 'Přepnout na: odpověď volitelná';
$string['switch_item_to_required'] = 'Přepnout na: odpověď vyžadována';
$string['template'] = 'Šablona';
$string['templates'] = 'Šablony';
$string['template_saved'] = 'Šablony uložena';
$string['textarea'] = 'Delší textová odpověď';
$string['textarea_height'] = 'Počet řádek';
$string['textarea_width'] = 'Šířka';
$string['textfield'] = 'Krátká textová odpověď';
$string['textfield_maxlength'] = 'Maximum povolených znaků';
$string['textfield_size'] = 'Délka textového pole';
$string['there_are_no_settings_for_recaptcha'] = 'Není dostupné nastavení pro captcha';
$string['this_feedback_is_already_submitted'] = 'Tento dotazník jste již vyplnili.';
$string['timeclose'] = 'Čas zavření';
$string['timeclose_help'] = 'Můžete určit, kdy bude dotazník dostupný pro vyplňování. Není-li pole zaškrtnuto, bude dotazník dostupný bez omezení.';
$string['timeopen'] = 'Čas otevření dotazníku';
$string['timeopen_help'] = 'Můžete určit, kdy bude dotazník dostupný pro vyplňování. Není-li pole zaškrtnuto, bude dotazník dostupný bez omezení.';
$string['typemissing'] = 'chybějící hodnota "typ"';
$string['update_item'] = 'Uložit změny otázky';
$string['url_for_continue'] = 'URL odkaz pro tlačítko Pokračovat';
$string['url_for_continue_button'] = 'URL odkaz pro tlačítko Pokračovat';
$string['url_for_continue_help'] = 'Ve výchozím nastavení vede tlačítko Pokračovat po vyplnění kurzu na hlavní stránku kurzu. Přejete-li si přejít po vyplnění dotazníku na jinou stránku, vložte sem příslušnou adresu stránky.';
$string['use_one_line_for_each_value'] = '<br />Každou odpověď umístěte na jeden řádek!';
$string['use_this_template'] = 'Použít tuto šablonu';
$string['using_templates'] = 'Použít šablonu';
$string['vertical'] = 'svisle';
$string['viewcompleted'] = 'ukončené dotazníky';
$string['viewcompleted_help'] = 'Můžete si nechat zobrazit vyplněné dotazníkové formuláře a vyhledávat v nich podle kurzu a/nebo otázky. Vyplněné dotazníky lze též exportovat do Excelu.';
