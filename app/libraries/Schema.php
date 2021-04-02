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
-- Table prefix 'ps' [c]huoni [a]lumni
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
  private $DB_PREFIX = "ps";

  /**
   * createAll
   *
   * @return void
   */
  public function __construct()
  {
    $this->conn = new Database();

    //check table number
    $this->table_num_query = "SHOW TABLES in principals_archive";
    $this->stmt = $this->conn->prepare($this->table_num_query);
    $this->stmt->execute();
    $this->table_num_result = $this->stmt->get_result();
    $this->table_num = $this->table_num_result->num_rows;

    if (!$this->table_num) {
      require_once "../app/helpers/schema.php";

      //CREATE TABLE STATEMENTS
      $this->tables = [
        $scholars_table,
        $scholars_info_table,
        $question_table,
        $questionReview,
        $answerReview,
        $tags_table,
        $questionVote_table,
        $answerVote_table,
        $commentVote_table,
        $voterstable,
        $answer_table,
        $comments_table,
        $contact_table,
        $login_table,
      ];

      $this->nw_table_names = [
        "" . $this->DB_PREFIX . "_scholars",
        "" . $this->DB_PREFIX . "_scholarsinfo",
        "" . $this->DB_PREFIX . "_question",
        "" . $this->DB_PREFIX . "_questionreview",
        "" . $this->DB_PREFIX . "_answerreview",
        "" . $this->DB_PREFIX . "_tags",
        "" . $this->DB_PREFIX . "_questionvote",
        "" . $this->DB_PREFIX . "_answervote",
        "" . $this->DB_PREFIX . "_commentvote",
        "" . $this->DB_PREFIX . "_voters",
        "" . $this->DB_PREFIX . "_answer",
        "" . $this->DB_PREFIX . "_comments",
        "" . $this->DB_PREFIX . "_contact",
        "" . $this->DB_PREFIX . "_login",
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

      LoadTestData(
        "ps_scholars",
        "ps_question",
        "ps_scholarsinfo",
        $this->conn
      );
    } else {
      //run null->optimizes loading
    }

    //delete all non-verified users after 24 hours
    DeleteNonVerified("ps_scholars", $this->conn, 0);
  }
}
