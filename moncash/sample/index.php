<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Mon Cash PHP SDK SAMPLE</title>

    <!-- Bootstrap core CSS -->
    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
  </head>

  <?php
    // Leave only for debuging purposes
    ini_set('display_errors', 1);

    require_once '../vendor/autoload.php';
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
    $configArray = Configuration::getSandboxConfigs();

    $test = new Credentials($client, $secret, $configArray);
    if(!isset($_GET['paymentDetails'])){

    // Call to the payment request

    $amount = 10;
    $orderId = 98765432103;

    $theOrder = new Order( $orderId, $amount );

    $paymentObj = PaymentMaker::makePaymentRequest( $theOrder, $test, $configArray );
    }
    

  ?>

  <body>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Enjoy the Mon-Cash-PHP-SDK</h1>
      <p class="lead">This sample is created in order to show a hands on process to interact with the MonCash PHP SDK integration into php projects.</p>
      <hr />
      <br />

      <?php
          if(!isset($_GET['paymentDetails'])){
      ?>
      <p>
        The MonCash Button is generated with the following information: <br />
        <ul>
          <li><strong>OrderId</strong>: 98765432103</li>
          <li><strong>Amount</strong>: 10</li>
        </ul>
      </p>
      <p><a href='<?php echo $paymentObj->getRedirect();?>' target='_blank'><img src='https://moncashbutton.digicelgroup.com/Moncash-middleware/resources/assets/images/MC_button.png' ></a></p>
      <p><a class="btn btn-primary btn-lg" style="width:100%;" href='./?paymentDetails=1' >Go to payment details</a></p>
          <?php }?>

          <?php 
              if(isset($_GET["paymentDetails"])){     
                $amount = 10;
                $orderId = 98765432103;

                $theOrder = new Order( $orderId, $amount );     

                $transactionDetails = TransactionCaller::getTransactionDetailsByOrderIdRequest( $theOrder, $test, $configArray );
          ?>
            <h3>Here the details for the issued payment</h3>
            <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <td>Reference</td>
                    <td>Transaction ID</td>
                    <td>Cost</td>
                    <td>Message</td>
                    <td>Payer</td>
                    <td>Date</td>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <td><?php echo $transactionDetails->getPayment()->getReference();?></td>
                      <td><?php echo $transactionDetails->getPayment()->getTransactionId();?></td>
                      <td><?php echo $transactionDetails->getPayment()->getCost();?></td>
                      <td><?php echo $transactionDetails->getPayment()->getMessage();?></td>
                      <td><?php echo $transactionDetails->getPayment()->getPayer();?></td>
                      <td><?php echo date('D M d Y', $transactionDetails->getTimestamp()/1000);?></td>
                    </tr>
                </tbody>
            </table>
            <p><a class="btn btn-primary btn-lg" style="width:100%;" href='./' >Go back </a></p>
          <?php 
              }
          ?>

        
    </main> 
  </body>
</html>
