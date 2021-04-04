<?php

//advice table
$advice_table =
  '
CREATE TABLE ' .
  $this->DB_PREFIX .
  '_advice( 
 advice_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
 advice_text LONGTEXT NULL,
 date_created varchar(64) NOT NULL,
 owner_name varchar(256) NULL,
 advice_accept varchar(256) DEFAULT "0"
)ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci
';

$advice_owner_table =
  '
CREATE TABLE ' .
  $this->DB_PREFIX .
  '_adviceowner( 
owner_id int(11) PRIMARY KEY NOT NULL,
owner_advice_count int(11) NULL,
owner_name varchar(256) NULL
)ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci
';