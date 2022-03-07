<?php

namespace DB;

use PDO;

// Singleton to connect db.
class DB
{
  // Hold the class instance.
  private static $instance = null;
  private $conn;

  private $host;
  private $user;
  private $pass;
  private $name;
  private $dbtype;

  // The db connection is established in the private constructor.
  private function __construct($spajanje)
  {
    $this->host = $spajanje['host'];
    $this->user = $spajanje['user'];
    $this->pass = $spajanje['pass'];
    $this->name = $spajanje['dbname'];
    $this->dbtype = $spajanje['dbtype'];

    $this->conn = new PDO(
      "{$this->dbtype}:host={$this->host}; dbname={$this->name}",
      $this->user,
      $this->pass,
      array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
    );
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public static function getInstance($podatak)
  {
    if (!self::$instance) {
      self::$instance = new DB($podatak);
    }

    return self::$instance;
  }

  public function getConnection()
  {
    return $this->conn;
  }

  public function prijava($prijava)
  {
    try {
      $stmt = $this->conn->prepare("INSERT INTO Users (username) VALUES (:username)");
      $stmt->bindParam(':username', $prijava);
      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }

  public function chathistory()
  {
    try {
      $stmt = $this->conn->prepare("SELECT * FROM chvenk");
      $stmt->execute();
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
      while ($result = $stmt->fetch()){

        echo $result['time']."<br>";
        echo $result['msg']."<br>";
            }
      
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
      die();
    }
  }



  public function posalji($posaljiporuke)
  {
    try {
      $stmt = $this->conn->prepare("INSERT INTO chvenk (msg) VALUES (:msg)");
      $stmt->bindParam(':msg', $posaljiporuke);
      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
}
