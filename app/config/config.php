<?php
session_start();
//db params
DEFINE('DB_HOST', 'eu-cdbr-west-01.cleardb.com');
DEFINE('DB_USER', 'bfa6c0d1b7f80f');
DEFINE('DB_PASS', 'da35d551');
DEFINE('DB_NAME', 'heroku_53aaf4eed7f59ce');

//mail params
define('MAIL_HOST', '');
define('MAIL_USERNAME', '');
define('MAIL_PASS', '');
define('MAIL_SMTP', '');
define('MAIL_PORT', '');

//app route
define('APPROOT', dirname(dirname(__FILE__)));
//url root https://8c761d381b02.ngrok.io/principals-archive
define('URLROOT', 'https://chuoni-alumni.herokuapp.com');
//site name
define('SITENAME', 'Chuoni Alumni');

define('SITE_DESCRIPTION', 'Chuoni Alumni is a catalogue of advice from alumni from universities all over Kenya');

define('DEFAULT_TITLE', 'if i knew then');

define('OG_URL', 'https://www.chuonialumni.co.ke');

define('SITE_AUTHOR', 'chuoni alumni');

define('SITE_TYPE', 'website');

define('THEME_COLOR', '#047aed');

define('PRINCIPAL_MAIL', 'info@chuonialumni.co.ke');

define('ABOUT_US', 'Advice from alumni from universities all over Kenya.');