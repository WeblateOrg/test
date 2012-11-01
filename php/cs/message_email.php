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
 * Strings for component 'message_email', language 'cs', branch 'MOODLE_23_STABLE'
 *
 * @package   message_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowusermailcharset'] = 'Povolit uživatelům výběr znakové sady';
$string['configallowusermailcharset'] = 'Povolit všem uživatelům nastavení vlastní znakové sady pro e-maily.';
$string['configmailnewline'] = 'Označení nového řádku v e-mailech. Podle RFC 822bis je předepsané označení konce řádku CRLF. Některé e-mailové servery automaticky převádějí znaky LF na CRLF, jiné zase chybně opravují CRLF na CRCRLF, nebo dokonce, jak například qmail, odmítají zprávy s prostým koncem řádku LF. Zkuste změnit toto nastavení, pokud máte problém s nedoručenou poštou, nebo s dvojitými mezerami mezi řádky.';
$string['confignoreplyaddress'] = 'Z Moodlu jsou v některých případech odesílány jménem uživatele e-maily (např. příspěvky ve fórech). Jestliže si uživatel nepřeje zveřejnit svou adresu, bude použita tato náhradní adresa.';
$string['configsitemailcharset'] = 'Výchozí znaková sada pro e-maily generované vašimi stránkami. Povolíte-li následující možnost, každý uživatel si může tuto znakovou sadu změnit.';
$string['configsmtphosts'] = 'Zadejte adresu jednoho nebo více serverů SMTP, které bude Moodle používat k odesílání pošty (např. "smtp.naseskola.cz" nebo "192.168.0.100;mail2.naseskola.cz"). Pokud SMTP server používá jiný než standardní port 25, uveďte jej za dvojtečkou (např. "mail.naseskola.cz:587"). Pro šifrovaná spojení přes SSL se většinou používá port 465, přes TLS většinou port 587. Pokud ponecháte toto pole prázdné, bude Moodle používat standardní PHP způsob pro odesílání pošty.';
$string['configsmtpmaxbulk'] = 'Maximální počet e-mailů odeslaných během jedné relace se SMTP serverem. Seskupování e-mailů může odesílání zrychlit. Hodnoty nižší jak 2 vynutí vytvoření jedné relace pro každý odeslaný e-mail.';
$string['configsmtpuser'] = 'Jestliže server SMTP vyžaduje ověření, zadejte uživatelské jméno a heslo.';
$string['email'] = 'Odeslat oznámení e-mailem ';
$string['ifemailleftempty'] = 'Ponechte prázdné pro zaslání upozornění  {$a}';
$string['mailnewline'] = 'Formát nového řádku v emailech';
$string['noreplyaddress'] = 'Adresa odesílatele automaticky generovaných zpráv';
$string['pluginname'] = 'E-mail';
$string['sitemailcharset'] = 'Znaková sada';
$string['smtphosts'] = 'SMTP hostitelé';
$string['smtpmaxbulk'] = 'Limit SMTP relace';
$string['smtppass'] = 'SMTP heslo';
$string['smtpsecure'] = 'SMTP bezpečnost';
$string['smtpuser'] = 'SMTP uživatelské jméno';
