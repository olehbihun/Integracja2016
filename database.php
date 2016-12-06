<?php
class DB {
    private $host;
    private $user;
    private $pass;
    private $db;
    private $link;

    function __construct() {
        $this->host = 'localhost';
        $this->user = 'u464_integracja';
        $this->pass = '123456';
        $this->db = 'u464_integracja';
        $this->connect();

    }

    function connect(){

        $link = new mysqli($this->host, $this->user, $this->pass, $this->db);
        mysqli_set_charset($link,"utf8");
        return $link;
    }

    public function callProc($proc){
      $db = $this->connect();
      if (!$db->query("CALL ".$proc)) {
          return "Не удалось вызвать хранимую процедуру: (" .  $db->errno . ") " .  $db->error;
      }
    }

    public function query($query) {
        $db = $this->connect();
        $result = $db->query($query);
        $results = array();
        while ( $row = $result->fetch_assoc() ) {
                $results[] = $row;
        }
        return $results;
}

}
