<?php

require('system/classes/donation.class.php');
require('system/config.php');

$donate = new donate($INFO['sql_host'], $INFO['sql_user'], $INFO['sql_pass'], $INFO['sql_database'], $INFO['sql_tbl_prefix']);

$donationAmount = $_POST['submit'];

addDonationToDatabase($userID, $donationAmount);

echo '<strong>You Are Being Redirected To Paypal To Donate ' & $donationAmount & '</strong>';


header('Location: http://www.paypal.com');




?>