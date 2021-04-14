<?php

/**
 * @package		chuoni Alumni Tables
 * @package		Table Auto configuration
 * @author		Haron Taiko
 * @copyright	Copyright (c) 2020, www.chuonialumni.co.ke, (https://www.chuonialumni.co.ke/)
 * @link		https://www.chuonialumni.co.ke
 */
/*
-----------------------------------------------------------
--
-- Database: `chuoni alumni`
--
-- Table prefix 'ca' [c]huoni [a]lumni
-----------------------------------------------------------
*/

/**
 * create all tables
 */
class Schema extends Database
{
  private $stmt;
  private $query;
  private $default;
  private $sql;
  private $tables;
  private $nw_table_names;
  private $table_num_query;
  private $table_num_result;
  private $table_num;

  //by default all prefixes are lowercase
  private $DB_PREFIX = "ca";

  /**
   * createAll
   *
   * @return void
   */
  public function __construct()
  {
    $this->conn = new Database();

    //check table number
    $this->table_num_query = "SHOW TABLES in ".DB_NAME."";
    $this->stmt = $this->conn->prepare($this->table_num_query);
    $this->stmt->execute();
    $this->table_num_result = $this->stmt->get_result();
    $this->table_num = $this->table_num_result->num_rows;

    if (!$this->table_num) {
      require_once "../app/helpers/schema.php";

      //CREATE TABLE STATEMENTS
      $this->tables = [
        $advice_table,
        $advice_owner_table,
      ];

      $this->nw_table_names = [
        "" . $this->DB_PREFIX . "_advice",
        "" . $this->DB_PREFIX . "_adviceowner",
      ];

      //default execution first
      foreach ($this->nw_table_names as $nw_table) {
        $this->default = "DROP TABLE IF EXISTS " . $nw_table . "";
        $this->stmt = $this->conn->prepare($this->default);
        $this->stmt->execute();
      }

      //for each sql statement
      foreach ($this->tables as $k => $this->sql) {
        //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->stmt = $this->conn->prepare($this->sql);
        $this->stmt->execute();
      }

    } else {
      //run null->optimizes loading
    }

  }
}