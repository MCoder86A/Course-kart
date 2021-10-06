<?php
  $prodid = null;
  if(isset($_GET["pid"]))
  {
    $pid = $_GET["pid"];
  }
  $TAGp1 = '<img
          src="https://i.imgur.com/EHyR2nP.png"
          alt="The cover of Stubborn Attachments"
        />
        <div class="description">
          <h3>Ultimate English course</h3>
          <h5>₹500.00</h5>
        </div>';
  $TAGp2 = '<img
          src="https://i.imgur.com/EHyR2nP.png"
          alt="The cover of Stubborn Attachments"
        />
        <div class="description">
          <h3>Zero to hero English course</h3>
          <h5>₹800.00</h5>
        </div>';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Buy cool new product</title>
    <link rel="stylesheet" href="style.css?version=0.0001">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
  <body>
    <section>
      <div class="product">
        <?php
          switch ($pid) {
            case 'c1':
              echo $TAGp1;
              break;
            case 'c2':
              echo $TAGp2;
              break;
            
            default:
              echo "link error";
              break;
          }
        ?>
      </div>
      <form action=<?php echo "../create-checkout-session.php?cid=$pid"?> method="POST">
        <button type="submit" id="checkout-button">Checkout</button>
      </form>
    </section>
  </body>
</html>
<!-- $conn->prepare('INSERT INTO Students VALUES()');
          $conn->bind_param("ss", $checkout_session["payment_intent"], $StripeCusID);
          $conn->execute(); -->