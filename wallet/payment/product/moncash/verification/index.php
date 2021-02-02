<?php session_start(); 
  if(!isset($_SESSION['order_id']) || !isset($_GET['payment_client'])){
    header("Location:https://kwenpam.com/error");
  }
   // Leave only for debuging purposes
   ini_set('display_errors', 1);

   require_once '../../../deposit/moncash/vendor/autoload.php';
   use DGCGroup\MonCashPHPSDK\Credentials;
   use DGCGroup\MonCashPHPSDK\Configuration;
   use DGCGroup\MonCashPHPSDK\PaymentMaker;
   use DGCGroup\MonCashPHPSDK\Order;
   use DGCGroup\MonCashPHPSDK\TransactionCaller;
   use DGCGroup\MonCashPHPSDK\TransactionDetails;
   use DGCGroup\MonCashPHPSDK\TransactionPayment;

   // Instanciation of the payment class
   $client = "420a0c3df56ea66743a72d1b820c7fe3";
   $secret = "yBvHejbLSxrTz7NthHOh5pKkmwXwm0fKCkaxm_dxNVhOgoo9IL7vgGV4sZrNWFXr";
   $configArray = Configuration::getSandboxConfigs();  //////////////
    $amount = $_SESSION['amount_pay_client'];
    $orderId =$_SESSION['order_id']; 
    $test = new Credentials($client, $secret, $configArray);
    // Call to the payment request
    $theOrder = new Order( $orderId, $amount );

    $paymentObj = PaymentMaker::makePaymentRequest( $theOrder, $test, $configArray );
    $url=$paymentObj->getRedirect();
    header("Location: $url");  
?>