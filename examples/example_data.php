<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$merchantId = "167885";
$password = "56789";
$brandId = "";
$country = "PL";
$currency = "PLN";
$credit_card_token = "8399296648645454";
$customer_it_token = "ETsAsTWs69NbNovf0JOw";

/*
$merchantId = "5000";
$password = "5678";
$brandId = "";
$country = "GB";
$currency = "EUR";
$credit_card_token = "3849345322385454";
$customer_it_token = "8Gii57iYNVSd27xnFZzR";
*/

$credit_card_number = "5454545454545454";
$credit_card_expiry_month = "12";
$credit_card_expiry_year = "2021";
$credit_card_cvv = "111";
$credit_card_name = "John Doe";
$paymentSolutionId = "500";
$amount = "20";
$merchantTxId = 'EXAMPLE_'.time();

function getSiteDomain() {
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $domainName = $_SERVER['HTTP_HOST'];
  return $protocol.$domainName;
}