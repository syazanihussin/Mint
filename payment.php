<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mint | Food Delivery Platform</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="css/cart style.css">
	<link rel="stylesheet" href="css/payment style.css">
  <script src="js/jquery-2.2.3.min.js"></script>

  <script>
    $(document).ready(function(){

      <?php 
        $allquantity = 0;

        for($i = 1; $i <= $_GET['no_items']; $i++) {
  
          $name = 'item_name_' . $i;
          $quan = 'quantity_' . $i;
          $allquantity += $_GET[$quan];
      ?> 

          var menuName = '<?php echo $_GET[$name]; ?>';
          var subtotal = 0; 
          var total = 0;

          $.ajax({
            url:"ajax/select.php",
            dataType:"json",
            type: "POST",
            data: {table : 'menu', column : '*', where : 'menuName="'+menuName+'"', message : 'checkout'},
            success:function(data){
              $("#purchases").append('<li class="clearfix"><img src="'+ data[0]['menuImage'] +'" alt="item1" width="50" height="50" /><span class="item-name">'+ data[0]['menuName'] +'</span><span class="item-price">RM'+ data[0]['menuPrice'] +'</span><span class="item-quantity">Quantity: '+ <?php echo $_GET[$quan];?> + '</span></li>');
              
              subtotal += data[0]['menuPrice'] * <?php echo $_GET[$quan] ?>;
              $("#sub").text("RM"+parseFloat(Math.round(subtotal * 100) / 100).toFixed(2));

              total = subtotal + 5; 
              $("#tot").text("Total: RM"+ parseFloat(Math.round(total * 100) / 100).toFixed(2));
            }
          });

      <?php 
        }
      ?>

      
      $("#paylater").click(function(){
        var url = "" + window.location.href;
		    var res = url.split("?");
        var dest = "delivery.php?" + res[1];
        window.location.replace(dest);
      });
    });
  </script>
</head>

<body>
  <div class="modal" style="padding: 3em 0 0 0em;">
    <div class="modal__container" style="margin-top: 2em;">
      <div class="modal__featured">
        <button type="button" class="button--transparent button--close">
          <svg class="nc-icon glyph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
            <g><path fill="#ffffff" d="M1.293,15.293L11,5.586L12.414,7l-8,8H31v2H4.414l8,8L11,26.414l-9.707-9.707 C0.902,16.316,0.902,15.684,1.293,15.293z"></path> </g></svg>
          <span class="visuallyhidden">Return to Product Page</span>
        </button>
        <div class="modal__circle"></div>
        <img src="https://cloud.githubusercontent.com/assets/3484527/19622568/9c972d44-987a-11e6-9dcc-93d496ef408f.png" class="modal__product" />
      </div>
      <div class="modal__content">
        <h2 style="font-size: 1.5em; padding: 0 0 1em 0;">Your payment details</h2>

          <ul class="form-list">
            <li class="form-list__row">
              <label>Name</label>
              <input type="text" name="" required="" />
            </li>
            <li class="form-list__row">
              <label>Card Number</label>
              <div id="input--cc" class="creditcard-icon">
                <input type="text" name="cc_number" required="" />
              </div>
            </li>
            <li class="form-list__row form-list__row--inline">
              <div>
                <label>Expiration Date</label>
                <div class="form-list__input-inline">
                  <input type="text" name="cc_month" placeholder="MM"  pattern="\\d*" minlength="2" maxlength="2" required="" />
                  <input type="text" name="cc_year" placeholder="YY"  pattern="\\d*" minlength="2" maxlength="2" required="" />
                </div>
              </div>
              <div>
                <label>
                  CVC

                  <a href="#cvv-modal" class="button--transparent modal-open button--info">
                    <svg class="nc-icon glyph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"><g> <path fill="#35a4fb" d="M8,0C3.6,0,0,3.6,0,8s3.6,8,8,8s8-3.6,8-8S12.4,0,8,0z M8,13c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1s1,0.4,1,1 C9,12.6,8.6,13,8,13z M9.5,8.4C9,8.7,9,8.8,9,9v1H7V9c0-1.3,0.8-1.9,1.4-2.3C8.9,6.4,9,6.3,9,6c0-0.6-0.4-1-1-1 C7.6,5,7.3,5.2,7.1,5.5L6.6,6.4l-1.7-1l0.5-0.9C5.9,3.6,6.9,3,8,3c1.7,0,3,1.3,3,3C11,7.4,10.1,8,9.5,8.4z"></path> </g></svg>
                    <span class="visuallyhidden">What is CVV?</span>
                  </a>
                </label>
                <input type="text" name="cc_cvc" placeholder="123" pattern="\\d*" minlength="3" maxlength="4" required="" />
              </div>
            </li>
            <li>
              <button id="paynow" class="button">Pay Now</button><button id="paylater" style="margin-left: 4em;" class="button">Pay Later</button>
            </li>
          </ul>
      </div> <!-- END: .modal__content -->
    </div> <!-- END: .modal__container -->
	<div class="shopping-cart" style="box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.1); margin-left: 5em; margin-top: -7em;">
    <div class="shopping-cart-header">
      <i class="fa fa-shopping-cart cart-icon"></i><span class="badge"><?php echo $allquantity; ?></span>
      <div class="shopping-cart-total">
        <span id="tot" class="lighter-text"></span>
        <span class="main-color-text"></span>
      </div>
    </div> <!--end shopping-cart-header -->

    <ul id="purchases" class="shopping-cart-items"></ul>
    <ul class="shopping-cart-items">
      <li class="clearfix">
        <span class="item-name">Delivery to</span>
        <span class="item-price"><?php echo $_GET['deliveryTo']; ?></span>
      </li>
    </ul>
    <ul class="shopping-cart-items">
      <li class="clearfix">
      <span class="item-name">Amount to pay</span>
        <span class="item-price">Subtotal: </span>
        <span id="sub" class="item-quantity"></span></br>
        <span class="item-price">Delivery Charge: </span>
        <span class="item-quantity">RM5.00</span>
      </li>
    </ul>
  </div> <!--end shopping-cart -->
  </div> <!-- END: .modal -->
</body>

</html>
