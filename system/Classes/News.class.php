<?php
class News {
	private $con;
	private $tbl_prefix;

	function __construct($host, $username, $password, $database, $tbl_prefix) {
		$this->con = new mysqli($host, $username, $password, $database);
		$this->tbl_prefix = $tbl_prefix;
	}

	function fetchNews() {
		return $this->con->query("SELECT * FROM `".$this->tbl_prefix."news` LIMIT 4");
	}

	function getCategorynamebyid($id) {
		$query = $this->con->query("SELECT * FROM `".$this->tbl_prefix."news_categories` WHERE `id` = ".$id."");
		while ($result = $query->fetch_assoc()) {
			return $result['name'];
		}
	}
}
?>