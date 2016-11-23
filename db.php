<?php

class DB {
	private $dbh;

	private function connect() {
        	try {
        		$this->dbh = new PDO('mysql:host=localhost;dbname=site', "root", "");
			$this->dbh->query("SET NAMES 'utf8';");
        	} catch (PDOException $e) {
         	 	print "Error!: " . $e->getMessage() . "<br/>";
            		die();
        	}
	}

	public function getHandler() {
		if ($this->dbh == null) {
			$this->connect();
		}
		return $this->dbh;
	}
}
?>