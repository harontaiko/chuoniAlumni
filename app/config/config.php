<?php
//db params
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_USER', 'chuonialumni');
DEFINE('DB_PASS', 'Gazaslim5?');
DEFINE('DB_NAME', 'chuoni_alumni');

//mail params
define('MAIL_HOST', '');
define('MAIL_USERNAME', '');
define('MAIL_PASS', '');
define('MAIL_SMTP', '');
define('MAIL_PORT', '');

//app route
define('APPROOT', dirname(dirname(__FILE__)));
//url root https://8c761d381b02.ngrok.io/principals-archive
define('URLROOT', 'http://localhost/chuoniAlumni/');
//site name
define('SITENAME', 'Chuoni Alumni');

define('SITE_DESCRIPTION', 'Pricipals Archive is a catalogue of advice from alumni from universities all over Kenya', true);

define('DEFAULT_TITLE', 'if i knew then', true);

define('OG_URL', 'https://www.chuonialumni.co.ke', true);

define('SITE_AUTHOR', 'chuoni alumni', true);

define('SITE_TYPE', 'website', true);

define('THEME_COLOR', '#047aed', true);

define('PRINCIPAL_MAIL', 'info@chuonialumni.co.ke', true);

define('ABOUT_US', 'Advice from alumni from universities all over Kenya.', true);
