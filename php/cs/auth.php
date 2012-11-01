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
 * Strings for component 'auth', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Aktivace autentizačních metod';
$string['alternatelogin'] = 'Pokud sem vložíte URL, použije se jako přihlašovací stránka k této instalaci Moodlu. Tato vaše stránka by měla obsahovat formulář, který bude mít atribut \'action\' nastaven na <strong>\'{$a}\'</strong> a který vrací pole <strong>username</strong> a <strong>password</strong>.<br />Dbejte na to, abyste vložili platné URL! V opačném případě byste mohli všem včetně sebe zamezit v přístupu ke stránkám.<br />Chcete-li používat standardní přihlašovací stránku, nechejte toto pole prázdné.';
$string['alternateloginurl'] = 'URL vlastního přihlášení';
$string['auth_changepasswordhelp'] = 'Pokyny ke změně hesla';
$string['auth_changepasswordhelp_expl'] = 'Zobrazit pokyny ke změně {$a} hesla. Tento text se buď a) zobrazí současně s <strong>URL pro změnu hesla</strong> či s interní stránkou Moodlu pro změnu hesla, nebo se b) zobrazí namísto <strong>URL pro změnu hesla</strong> či interní stránky Moodlu pro změnu hesla.';
$string['auth_changepasswordurl'] = 'URL pro změnu hesla';
$string['auth_changepasswordurl_expl'] = 'Zadejte URL, kam mají být přesměrováni uživatelé požadující změnu svého {$a} hesla. U volby <strong>Použij standardní stránku \'Změna hesla\'</strong> výše vyberte <strong>Ne</strong>.';
$string['auth_changingemailaddress'] = 'Požádali jste o změnu e-mailové adresy z "{$a->oldemail}" na "{$a->newemail}". Z bezpečnostních důvodů zasíláme na novou adresu zprávu, jejímž prostřednictvím potvrdíte, že nová adresa patří skutečně vám. Vaše e-mailová adresa bude změněna hned poté, co ji potvrdíte pomocí odkazu v zaslané zprávě.';
$string['auth_common_settings'] = 'Společná nastavení';
$string['auth_data_mapping'] = 'Mapování dat';
$string['authenticationoptions'] = 'Možnosti ověření';
$string['auth_fieldlock'] = 'Uzamknout hodnotu';
$string['auth_fieldlock_expl'] = '<p><b>Uzamknout hodnotu:</b> Je-li vybrána tato možnost, zabrání se uživatelům i správcům měnit hodnotu pole přímo. Použijte tuto volbu, pokud udržujete tyto údaje v externím systému.</p>';
$string['auth_fieldlocks'] = 'Uzamknout pole uživatelů';
$string['auth_fieldlocks_help'] = '<p>Máte možnost uzamknout pole s údaji o uživatelích. To je užitečné, pokud jako správce udržujete tyto údaje ručně a/nebo nahráváním údajů pomocí funkce \'Načíst uživatele\'. Pokud zamknete pole, která Moodle vyžaduje, ujistěte se, že poskytujete potřebná data při vytváření nových účtů - jinak budou účty nepoužitelné.</p><p>Chcete-li předejít tomuto problému, zvažte možnost režimu \'Odemknuto, je-li pole prázdné\'.</p>';
$string['authinstructions'] = 'Zde můžete zadat instrukce pro uživatele s vysvětlením, které uživatelské jméno a heslo mají použít. Tento text se objeví na přihlašovací stránce. Necháte-li toto pole prázdné, nebudou zobrazeny žádné instrukce.';
$string['auth_invalidnewemailkey'] = 'Chyba! Pokud se pokoušíte potvrdit změnu vaší e-mailové adresy, pravděpodobně jste nezkopírovali celou adresu (URL) stránky pro potvrzení této změny. Prosíme, zkopírujte zaslanou URL adresu a pokuste se potvrdit změnu znovu.';
$string['auth_multiplehosts'] = 'Můžete vložit i více hostitelů NEBO jejich adres (např. \'server1.cz;server2.cz;server3.com\' nebo \'xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx\')';
$string['auth_outofnewemailupdateattempts'] = 'Vyčerpali jste všechny možné pokusy o změnu vaší e-mailové adresy. Vaše žádost o změnu byla zrušena.';
$string['auth_passwordisexpired'] = 'Vaše heslo vypršelo. Chcete si je teď změnit?';
$string['auth_passwordwillexpire'] = 'Počet dnů do vypršení hesla: {$a}. Chcete si své heslo změnit?';
$string['auth_remove_delete'] = 'Zcela smazat interní';
$string['auth_remove_keep'] = 'Uchovat interní';
$string['auth_remove_suspend'] = 'Suspendovat interní';
$string['auth_remove_user'] = 'Specifikujte, co dělat s interním uživatelem v průběhu hromadné synchronizace, pokud byl uživatel odstraněn z externí databáze. Obnoveni automaticky jsou pouze suspendovaní uživatelé, kteří se znovu objeví v externím zdroji.';
$string['auth_remove_user_key'] = 'Odstraněný externí uživatel';
$string['auth_sync_script'] = 'Synchronizační skript Cron.';
$string['auth_updatelocal'] = 'Aktualizovat lokální data';
$string['auth_updatelocal_expl'] = '<p><b>Aktualizovat lokální data:</b> Je-li povoleno, budou pole aktualizována (z externího autentizačního zdroje) po každém přihlášení nebo při synchronizaci uživatelů. Pole určená k místní aktualizaci by měla být uzamknuta.</p>';
$string['auth_updateremote'] = 'Aktualizovat externí data';
$string['auth_updateremote_expl'] = '<p><b>Aktualizovat externí data:</b> Je-li povoleno, provede se aktualizace externího autentizačního zdroje po každém uložení profilu uživatele. Pole by měla být odemknuta, aby je bylo možné upravovat.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Pozn.:</b> Aktualizace externího zdroje LDAP vyžaduje, aby měl uživatel \'binddn\' (s heslem \'bindpw\') oprávnění editovat všechny záznamy o uživatelích. Tento systém momentálně nepodporuje atributy s více hodnotami (multi-values) - extra hodnoty budou proto při aktualizaci odstraněny.</p>';
$string['auth_user_create'] = 'Povolit vytváření uživatelů';
$string['auth_user_creation'] = 'Noví (anonymní) uživatelé si mohou založit uživatelský účet v externím zdroji a potvrdit jej prostřednictvím e-mailu. Pokud tuto možnost povolíte, nezapomeňte provést nastavení pro daný externí zdroj týkající se vytváření nových uživatelů.';
$string['auth_usernameexists'] = 'Zvolené uživatelské jméno již existuje. Prosím, vyberte si jiné.';
$string['auto_add_remote_users'] = 'Přidat vzdálené uživatele automaticky';
$string['changepassword'] = 'URL ke změně hesla';
$string['changepasswordhelp'] = 'Zde můžete určit URL, na kterém si uživatelé mohou obnovit či změnit své uživatelské jméno/heslo, pokud je zapomněli. URL bude uživatelům poskytnuto jako tlačitko na přihlašovací a osobní stránce. Necháte-li toto pole prázdné, nebude se tlačítko zobrazovat.';
$string['chooseauthmethod'] = 'Zvolte autentizační metodu';
$string['chooseauthmethod_help'] = '<p>Tato nabídka umožňuje změnit metodu ověřování u konkrétního uživatele.</p>

<p>Uvědomte si však, že to do značné míry závisí na metodách ověřování, které
jste pro tyto stránky nastavili, a na nastavení, které tyto stránky
používají.</p>

<p>Nesprávná změna může danému uživateli znemožnit přihlášení nebo zcela
odstranit jeho účet. Metodu ověřování proto měňte pouze tehdy, jste-li s
postupem dobře obeznámeni.</p>';
$string['createpasswordifneeded'] = 'Vytvořit heslo, je-li to potřeba';
$string['emailchangecancel'] = 'Zrušit změnu e-mailu';
$string['emailchangepending'] = 'Změna čeká na potvrzení. Otevřete odkaz, který vám byl zaslán na adresu {$a->preference_newemail}.';
$string['emailnowexists'] = 'Nová e-mailová adresa, kterou jste zadali do svého profilu, je nyní používána jiným uživatelem. Vaše žádost o změnu e-mailové adresy byla z tohoto důvodu zrušena. Pokud na změně trváte, musíte opět požádat o změnu e-mailové adresy a uvést jinou novou adresu.';
$string['emailupdate'] = 'Změna e-mailové adresy';
$string['emailupdatemessage'] = 'Zdravím, vy budete asi {$a->fullname}, že?

Požádali jste o změnu e-mailové adresy u svého účtu na stránkách {$a->site}. Potvrďte prosím tuto změnu na stránce uvedené níže:

{$a->url}';
$string['emailupdatesuccess'] = 'E-mailová adresa uživatele <em>{$a->fullname}</em> byla úspěšně změněna na <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Potvrzení změny e-mailu na {$a->site}';
$string['enterthenumbersyouhear'] = 'Vložte číslo, které slyšíte';
$string['enterthewordsabove'] = 'Vložte výše uvedená slova';
$string['errormaxconsecutiveidentchars'] = 'Heslo může mít nejvýše {$a} stejných po sobě jdoucích znaků';
$string['errorminpassworddigits'] = 'Minimální počet číslic v heslech: {$a}';
$string['errorminpasswordlength'] = 'Minimální počet znaků v heslech: {$a}';
$string['errorminpasswordlower'] = 'Minimální počet malých písmen v heslech: {$a}';
$string['errorminpasswordnonalphanum'] = 'Minimální počet nealfanumerických znaků v heslech: {$a}';
$string['errorminpasswordupper'] = 'Minimální počet VELKÝCH písmen v heslech: {$a}';
$string['errorpasswordupdate'] = 'Chyba při změně hesla, heslo nebylo změněno.';
$string['forcechangepassword'] = 'Vynutit změnu hesla';
$string['forcechangepasswordfirst_help'] = 'Vynutit změnu hesla při prvním přihlášení do Moodlu.';
$string['forcechangepassword_help'] = 'Vynutit změnu hesla při příštím přihlášení do Moodlu.';
$string['forgottenpassword'] = 'Sem vložte URL stránky, která bude použita pro získávání zapomenutých hesel. Toto je zamýšleno používat v případech, kdy Moodle používá k autentizaci uživatelů jakoukoliv externí databázi. Pokud používáte standardní zasílání zapomenutých hesel, nechte okénko prázdné.';
$string['forgottenpasswordurl'] = 'URL na získání hesla';
$string['getanaudiocaptcha'] = 'Získat audio CAPTCHA';
$string['getanimagecaptcha'] = 'Získat obrázkové CAPTCHA';
$string['getanothercaptcha'] = 'Získat jiné CAPTCHA';
$string['guestloginbutton'] = 'Tlačítko pro hosta';
$string['incorrectpleasetryagain'] = 'Špatně, zkuste to prosím znovu.';
$string['infilefield'] = 'Pole je v souboru povinné';
$string['informminpassworddigits'] = 'minimální počet číslic: {$a}';
$string['informminpasswordlength'] = 'minimální počet znaků: {$a}';
$string['informminpasswordlower'] = 'minimální počet malých písmen: {$a}';
$string['informminpasswordnonalphanum'] = 'minimální počet znaků jiných než číslice nebo písmeno: {$a}';
$string['informminpasswordupper'] = 'minimální počet velkých písmen: {$a}';
$string['informpasswordpolicy'] = 'V hesle musí být {$a}';
$string['instructions'] = 'Pokyny';
$string['internal'] = 'Interní';
$string['locked'] = 'Uzamknuto';
$string['md5'] = 'MD5 hash';
$string['nopasswordchange'] = 'Heslo nelze změnit';
$string['nopasswordchangeforced'] = 'Nemůžete pokračovat dál bez změny hesla, ale stránka pro jeho změnu není k dispozici. Kontaktujte správce Vašeho eLearningu Moodle.';
$string['noprofileedit'] = 'Profil nemůže být upravován';
$string['ntlmsso_attempting'] = 'Pokouším se o automatické přihlášení přes NTLM ...';
$string['ntlmsso_failed'] = 'Automatické přihlášení selhalo, zkuste normální přihlašovací stránku...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO je vypnuto';
$string['passwordhandling'] = 'Ukládat pole s heslem jako';
$string['plaintext'] = 'Čistý text';
$string['pluginnotenabled'] = 'Autentizační metoda \'{$a}\' není povolena.';
$string['pluginnotinstalled'] = 'Autentizační metoda \'{$a}\' není nainstalována.';
$string['potentialidps'] = 'Přihlásit se pomocí účtu na:';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'Tento obrázek, známý jako CAPTCHA, je bezpečnostní mechanismus proti hromadnému vyplňování formuláře pomocí automatických programů.

Přepište slova z obrázku do vstupního pole v uvedeném pořadí, oddělujte je mezerou. Pokud nemůžete slova přečíst, vyžádejte si jiný. Popřípadě si můžete nechat přehrát audio CAPTCHA.';
$string['selfregistration'] = 'Uživatelé se sami registrují pomocí';
$string['selfregistration_help'] = 'Pokud zde vyberete nejakou autentizační metodu (typicky registraci na základě e-mailu), umožníte návštěvníkům vašich stránek založit si na vašem serveru svůj účet. Toto může vést k útoku spammerů formou hromadnému zakládání fiktivních účtů, které jsou poté využívány k publikování nevhodného obsahu (reklama, porno) ve fórech, blogu, uživatelských profilech apod. Pokud můžete, zkuste se této možnosti vyhnout, případně alespoň použijte nastavení povolených e-mailových domén.';
$string['sha1'] = 'SHA-1 hash';
$string['showguestlogin'] = 'Na přihlašovací stránce můžete skrýt nebo ukázat tlačítko pro přihlášení se jako host.';
$string['stdchangepassword'] = 'Použij standardní stránku pro změnu hesla';
$string['stdchangepassword_expl'] = 'Pokud váš externí autentizační systém umožňuje změnu hesla přes Moodle, přepněte na \'Ano\'. Tímto potlačíte hodnotu \'URL ke změně hesla\'.';
$string['stdchangepassword_explldap'] = 'Pozn.: Pokud používáte vzdálený server LDAP, doporučujeme vám použít šifrované spojení SSL (ldaps://).';
$string['suspended'] = 'Pozastavený účet';
$string['unlocked'] = 'Odemknuto';
$string['unlockedifempty'] = 'Odemknuto, je-li pole prázdné';
$string['update_never'] = 'Nikdy';
$string['update_oncreate'] = 'Při vytváření';
$string['update_onlogin'] = 'Při každém přihlášení';
$string['update_onupdate'] = 'Při aktualizaci';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() nepodporuje vybraný typ uživatele: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_activate() v tuto chvíli nepodporuje vybraný typ uživatele';
