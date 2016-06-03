<html>
<head>
    <title>PHP API v1.0 | 3pay</title>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
</head>
<body>
<?php
require __DIR__ . "/../../Model/Sale/SaleWithConfirm.php";
$payment_type = (int) $_POST['payment_type'];
$gsm = $_POST['gsm'];
try {
    $product = new \MicroPayment\Model\Sale\MSaleProduct();
    $product->setProductCategory(1);
    $product->setProductDescription('This is a demo product');
    $product->setPrice(0.01);

    $input = new \MicroPayment\Model\Shared\Input();
    $input->setMPay('123456')
        ->setGsm($gsm)
        ->setContent('This is content')
        ->setSendOrderResult(true)
        //Setting payment type id with post elemtn payment_type
        ->setPaymentTypeId($payment_type)
        ->setReceivedSmsObjectId($input->generateGuid())
        ->setSendNotificationSms(true)
        ->setOnSuccessfulSms('Your payment action completed successfully')
        ->setOnErrorSms('Your payment action is not completed. Please try again later.')
        ->setRequestGsmOperator(0)
        ->setRequestGsmType(0)
        ->setUrl('http://saitimamoglu.com/3pay/')
        ->setCustomerIpAddress($_SERVER['REMOTE_ADDR'])
        ->setTurkcellServiceId('0')
        ->setProductList($product);
    $token = new \MicroPayment\Model\Shared\Token();
    $token->setPin('12345678901')->setUserCode('1');
    $swc = new SaleWithConfirm();
    $swc->setInput($input)->setToken($token);
    $response = $swc->executeCall('SaleWithConfirm',$input);
    if (isset($response['SaleWithConfirmResult']['OrderObjectId'])) {
        $id = $response['SaleWithConfirmResult']['OrderObjectId'];
        header("Location: http://saitimamoglu.com/3pay/examples/api_plus/timer.php?id=$id");
    }
} catch (Exception $e) {
    echo "An error occurred during your transaction. <br /> Error: " . $e->getMessage();
}
?>
</body>
</html>