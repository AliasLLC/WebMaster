<?php
class System {
	private $con;
	private $tbl_prefix;

	function __construct($host, $username, $password, $database, $tbl_prefix) {
		$this->con = new mysqli($host, $username, $password, $database);
		$this->tbl_prefix = $tbl_prefix;
	}

	function getPageViews($page) {
		$query = $this->con->query("SELECT * FROM `".$this->tbl_prefix."pageviews` WHERE `page_id` = '".$page."'") or die(mysqli_error());
		while ($result = $query->fetch_assoc()) {
			return number_format($result['views']);
		}
	}

	function pageViews($page, $ip) {
		$query = $this->con->query("SELECT * FROM `".$this->tbl_prefix."pageviews` WHERE `page_id` = '".$page."'") or die(mysqli_error());
		if ($query->num_rows > 0) {
			while ($result = $query->fetch_assoc()) {
				if ($result['lastip'] != $ip) {
					$this->con->query("UPDATE `".$this->tbl_prefix."pageviews` SET `lastip` = '".$ip."', `views` = views+1") or die(mysqli_error());
				}
			}
		} else {
			$this->con->query("INSERT INTO `".$this->tbl_prefix."pageviews` (`page_id`, `lastip`, `views`) VALUES ('".$page."', '".$ip."', 1)");
		}
	}
	
	function fetchLatestthread() {
		return $this->con->query("SELECT * FROM `ipb_topics` ORDER BY `start_date` DESC LIMIT 5");
	}
}
?>