<?php
$price = $_GET['price'];
$return_url = $_GET['url'];
// $user = "Tracksuccess@gmail.com";
// $password = "DMAdma";
// $code = "23510021924";
$user = "testapi@myfatoorah.com";
$password = "E55D0";
$code = "999999";
$post_string = '<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema"
xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <PaymentRequest xmlns="http://tempuri.org/">
      <req>
        <CustomerDC>
          <Name>Customer Name</Name>
          <Email>payments@myfatoorah.com</Email>
          <Mobile>4444</Mobile>
          <Gender></Gender>
          <DOB></DOB>
          <civil_id></civil_id>
          <Area></Area>
          <Block></Block>
          <Street></Street>
          <Avenue></Avenue>
          <Building></Building>
          <Floor></Floor>
          <Apartment></Apartment>
        </CustomerDC>
        <MerchantDC>
          <merchant_code>'.$code.'</merchant_code>
          <merchant_username>'.$user.'</merchant_username>
          <merchant_password>'.$password.'</merchant_password>
          <merchant_ReferenceID>1244dasd8asd8asd4a84d8</merchant_ReferenceID>
          <ReturnURL>'.$return_url.'</ReturnURL>
          <merchant_error_url>https://google.com?q=wrong</merchant_error_url>
          <udf1></udf1>
          <udf2></udf2>
          <udf3></udf3>
          <udf4></udf4>
          <udf5></udf5>
        </MerchantDC>
        <lstProductDC>
          <ProductDC>
            <product_name>Order #110</product_name>
            <unitPrice>'.$price.'</unitPrice>
            <qty>1</qty>
          </ProductDC>
        </lstProductDC>
        <totalDC>
          <subtotal>'.$price.'</subtotal>
        </totalDC>
        <paymentModeDC>
          <paymentMode>both</paymentMode>
        </paymentModeDC>
        <paymentCurrencyDC>
          <paymentCurrrency>KWD</paymentCurrrency>
        </paymentCurrencyDC>
      </req>
    </PaymentRequest>
  </soap:Body>
</soap:Envelope>';

$url = "https://www.test.myfatoorah.com/pg/PayGatewayServiceV2.asmx";
$soap_do = curl_init();
curl_setopt($soap_do, CURLOPT_URL,$url );
curl_setopt($soap_do, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($soap_do, CURLOPT_TIMEOUT, 10);
curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true );
curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($soap_do, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($soap_do, CURLOPT_POST, true );
curl_setopt($soap_do, CURLOPT_POSTFIELDS, $post_string);
curl_setopt($soap_do, CURLOPT_HTTPHEADER, array('Content-Type: text/xml; charset=utf-8', 'Content-Length:
'.strlen($post_string) ));
curl_setopt($soap_do, CURLOPT_USERPWD, $user . ":" . $password);
curl_setopt($soap_do, CURLOPT_HTTPHEADER, array(
'Content-type: text/xml'
));
$result = curl_exec($soap_do);
$err = curl_error($soap_do);
curl_close($soap_do);


$res = substr($result,483,-147);
$data = [
  "id"=> $res
];
header('Content-Type: application/json');
echo json_encode($data);
?>
