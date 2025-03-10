<?php
session_start();
//db params
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_USER', 'root');
DEFINE('DB_PASS', '');
DEFINE('DB_NAME', 'alumnike');

//mail params
define('MAIL_HOST', '');
define('MAIL_USERNAME', '');
define('MAIL_PASS', '');
define('MAIL_SMTP', '');
define('MAIL_PORT', '');

define('APPROOT', dirname(dirname(__FILE__)));

define('URLROOT', 'http://alumnike');

define('SITENAME', 'Chuoni Alumni');

define('SITE_DESCRIPTION', 'Chuoni Alumni is a catalogue of advice from alumni from universities all over Kenya');

define('DEFAULT_TITLE', 'if i knew then');

define('OG_URL', 'https://www.chuonialumni.ke');

define('SITE_AUTHOR', 'chuoni alumni');

define('SITE_TYPE', 'website');

define('THEME_COLOR', '#047aed');

define('PRINCIPAL_MAIL', 'info@chuonialumni.ke');

define('ABOUT_US', 'Advice from alumni from universities all over Kenya.');