<?php

require_once("../../functions/db_connection.php");


$customer_id = $_GET['customer_id'];
$create_by = $_SESSION['user_id'];

$cutomer_type = 0;
$salutation = 0;
$customer_first_name = null;
$customer_last_name = null;
$company_name = null;
$resident_country = null;
$country_code = 0;
$country_number = 0;
$whatsapp_code = 0;
$whatsapp_number = 0;
$currency = null;
$language = null;
$payment_terms = null;
$facebook = null;
$instagram = null;
$billing_attention = null;
$billing_country = null;
$billing_address1 = null;
$billing_address2 = null;
$billing_city = null;
$billing_state = null;
$billing_zip_code = null;
$billing_phone = null;
$billing_fax = null;
$shipping_attention = null;
$shipping_country = null;
$shipping_address1 = null;
$shipping_address2 = null;
$shipping_city = null;
$shipping_state = null;
$shipping_zip_code = null;
$shipping_phone = null;
$shipping_fax = null;
$contact_salutation = null;
$contact_fist_name = null;
$contact_last_name = null;
$contact_email = null;
$contact_work_phone_number = null;
$contact_mobile_number = null;
$remarks = null;

$query = "SELECT * FROM sales_customer_infomations WHERE customer_id = '$customer_id' AND created_by = '$create_by' LIMIT 1";
$result = mysqli_query($connection, $query);

while ($xd = mysqli_fetch_array($result)) {
    $cutomer_type = $xd['cutomer_type'];
    $salutation = $xd['salutation'];
    $customer_first_name = $xd['customer_fname'];
    $customer_last_name = $xd['customer_lname'];
    $company_name = $xd['company_name'];
    $resident_country = $xd['resident_country'];
    $country_code = $xd['country_code'];
    $country_number = $xd['country_number'];
    $whatsapp_code = $xd['whatsapp_code'];
    $whatsapp_number = $xd['whatsapp_number'];
    $currency = $xd['currency'];
    $language = $xd['language'];
    $payment_terms = $xd['payment_terms'];
    $facebook = $xd['facebook'];
    $instagram = $xd['instagram'];
    $billing_attention = $xd['billing_attention'];
    $billing_country = $xd['billing_country'];
    $billing_address1 = $xd['billing_address1'];
    $billing_address2 = $xd['billing_address2'];
    $billing_city = $xd['billing_city'];
    $billing_state = $xd['billing_state'];
    $billing_zip_code = $xd['billing_zip_code'];
    $billing_phone = $xd['billing_phone'];
    $billing_fax = $xd['billing_fax'];
    $shipping_attention = $xd['shipping_attention'];
    $shipping_country = $xd['shipping_country'];
    $shipping_address1 = $xd['shipping_address1'];
    $shipping_address2 = $xd['shipping_address2'];
    $shipping_city = $xd['shipping_city'];
    $shipping_state = $xd['shipping_state'];
    $shipping_zip_code = $xd['shipping_zip_code'];
    $shipping_phone = $xd['shipping_phone'];
    $shipping_fax = $xd['shipping_fax'];
    $contact_salutation = $xd['contact_salutation'];
    $contact_fist_name = $xd['contact_fist_name'];
    $contact_last_name = $xd['contact_last_name'];
    $contact_email = $xd['contact_email'];
    $contact_work_phone_number = $xd['contact_work_phone_number'];
    $contact_mobile_number = $xd['contact_mobile_number'];
    $remarks = $xd['remarks'];
}