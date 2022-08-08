<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 *  Website Name
 *
 *  Write the name of your website this will appear by default.
 *
 */
$config['website_name'] = '';

/**
 *
 *  Timezone
 *
 *  http://php.net/manual/en/timezones.php
 *
 */
$config['timezone'] = 'GMT';

/**
 *
 *  Maintenance Mode
 *
 *  1 = Enable | 0 = Disable
 *
 */
$config['maintenance_mode'] = '0';

/**
 *
 * Redis Status
 *
 * 1 = Enable | 0 = Disable
 *
 * 0 is a must for Windows based servers while 1 is recommended for Linux based servers.
 * If you are running CMS under Linux and getting RedisException error, it means that you have a problem
 * with your Redis installation or extension.
 * It is also recommended to set password for redis through application/config/redis.php
 *
 * Currently its only being used in Armory and API
 *
 * TODO: Redis will be implemented to more parts of code later
 *
 */
$config['redis_in_cms'] = true;

/**
 *
 *  Invitation Discord
 *
 *  Write the invitation of your discord channel.
 *
 */
$config['discord_invitation'] = 'W7F4nRW';

/**
 *
 *  Realmlist
 *
 *  Write the realmlist used on your server to publish it on the website.
 *
 */
$config['realmlist'] = '';

/**
 *  Bnet enabled?
 *
 *  true for Emulators BattleNet.
 *  false for not bnetserver
 */
$config['bnet_enabled'] = false;

/**
 *  Emulator
 *
 *
 *  srp6 = For Emulators (SRP6 Compatibility)
 *  old-trinity =  Trinity Core not SRP6  (Sha_pass_hash Compatibility)
 *  hex = For emulators Mangos  (HEX6 Compatibility)
 *
 */
$config['emulator'] = 'hex';

/**
 *
 *  Expansion Supported
 *
 *  Select the expansion that your website will use among these options:
 *
 *  1 = Vanilla
 *  2 = The Burning Crusade
 *  3 = Wrath of the Lich King
 *  4 = Cataclysm
 *  5 = Mist of Pandaria
 *  6 = Warlords of Draenor
 *  7 = Legion
 *  8 = Battle for Azeroth
 *  9 = Shadowlands
 *
 */
$config['expansion'] = '1';

/**
 *
 *  Theme Name
 *
 *  Write the name of your theme
 *  The name is the same as the main folder
 *  The css must also have the same name
 *  Default: default
 *
 */
$config['theme_name'] = '%THEME%';

/**
 *
 *  Social Links
 *
 *  Write the links for redirect to your social networks.
 *
 */
$config['social_facebook'] = '';
$config['social_twitter']  = '';
$config['social_youtube']  = '';

/**
 *
 *  Recaptcha (V2)
 *
 *  Write the necessary keys to enable recaptcha in the register
 *  Use the following page to create the necessary keys.
 *  https://www.google.com/recaptcha/admin#list
 *
 */
$config['recaptcha_sitekey'] = '';
$config['recaptcha_secret']  = '';

/**
 *
 *  SMTP
 *
 *  Write the necessary information for use SMTP to use in recovery password
 *  and account activation.
 *
 */
$config['smtp_host']   = '';
$config['smtp_user']   = '';
$config['smtp_pass']   = '';
$config['smtp_port']   = '465';
$config['smtp_crypto'] = 'ssl';

/**
 *
 *  Email Settings
 *
 *  Write the necessary information to use in sending emails.
 *
 */
$config['email_settings_sender']      = '';
$config['email_settings_sender_name'] = '';

$config['template_verification'] = 'application/views/mails/verify_account.html';
$config['template_recover_p1']   = 'application/views/mails/recover_password_p1.html';
$config['template_recover_p2']   = 'application/views/mails/recover_password_p2.html';

/**
 *
 *  Account Activation
 *
 *  Enable or Disable the option to activate accounts by email.
 *
 *  true  = Enable
 *  false = Disable
 *
 */
$config['account_activation_required'] = false;

/**
 *
 *  Administrator Access Level
 *
 *  Minimum gmlevel to access to admin sections.
 *
 */
$config['admin_access_level'] = '3';

/**
 *
 *  Moderator Access Level
 *
 *  Minimum gmlevel to access to mod sections.
 *
 */
$config['mod_access_level'] = '2';

/**
 *
 *  Migrate Status
 *
 *  Warning: Don't change this configuration.
 *
 */
$config['migrate_status'] = '1';

/**
 *
 *  Check Realm Local
 *
 *  Set the way in which it checks the server status.
 *  If false, the public IP from the `realmlist` table of the `auth` database is used.
 *  Otherwise, if it is true, it performs the check by means of the private IP.
 *
 */
$config['check_realm_local'] = false;
