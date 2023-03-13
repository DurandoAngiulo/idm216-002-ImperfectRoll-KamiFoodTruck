<?php
include_once __DIR__ . '/app.php';
$page_title = 'Checkout | KAMI Food Truck';
include_once __DIR__ . '/_components/header-kami.php';
($user['isGuest']==0) ? "success": redirect_to('/auth/login.php') ;
$cart_items = getCartItems($userOrder['id']);

?>
<body class="backgroundColor">

<div class="container">
<h2 class="logoFontSm text-center mt-5">KAMI</h2>
<div class="page mx-3">
   <h1 class="text-center mt-3 mb-3">Checkout</h1>

   <!-- <div class="abs-position">
        <img class="kami-duck mx-auto d-block" src="<?php echo site_url(); ?>/dist/images/kami-duck.png">
    </div> -->

   <div class="container-b mx-auto py-3 px-4 mb-4 d-flex flex-column" >
        <h3 class="mb-3">Pickup Time</h3>

        <div class="d-grid gap-2">
            <button type="button" class="btn btn-secondary p-2">12:30pm (ASAP)</button>
            <button type="button" class="btn btn-outline-secondary p-2">Select Another Time</button>
        </div>
    </div>

    <div class="container-b mx-auto py-3 px-4 mb-4 d-flex flex-column" >
        <h3 class="mb-3">Your Order</h3>
        <?php include __DIR__ . '/_components/checkoutItem.php';?>
    </div>

    <div class="container-b mx-auto py-3 px-4 mb-4 d-flex flex-column" >
        <h3 class="mb-3">Payment</h3>

        <div class="d-flex flex-row justify-content-between align-items-center mb-2">
            <p>Subtotal</p>
            <p><?php echo(number_format((float)$total_price, 2, '.', ''))?></p>
        </div>

        <div class="d-flex flex-row justify-content-between align-items-center">
            <p>Tip</p>
            <div class="justify-content-evenly">
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick= calculateTip(0.15,<?php echo($total_price)?>)>15%</button>
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick= calculateTip(0.18,<?php echo($total_price)?>)>18%</button>
                <button type="button" class="btn btn-outline-secondary btn-sm"onclick= calculateTip(0.20,<?php echo($total_price)?>)>20%</button>
                <button type="button" class="btn btn-outline-secondary btn-sm">Edit</button>
            </div>
            <p id="tipHook">$ <?php echo(number_format((float)"0.00", 2, '.', ''))?></p>
        </div>

        <hr>

        <div class="d-flex flex-row justify-content-between align-items-center">
            <p><strong>Total</strong></p>
            <p><strong id="priceHook1"><?php echo(number_format((float)$total_price, 2, '.', ''))?></strong></p>

        </div>

        <hr>

        <div class="d-flex flex-column">
            <p class="text-center mb-2">Payment Information</p>
            <div class="d-flex justify-content-between mb-4">
                <button type="button" class="btn btn-secondary btn-sm px-3">Card</button>
                
                <button onclick="window.location.href = '<?php echo site_url(); ?>/confirm-animation.php';"type="button" class="btn btn-secondary btn-sm px-3">Venmo</button>

                <button onclick="window.location.href = '<?php echo site_url(); ?>/confirm-animation.php';" type="button" class="btn btn-secondary btn-sm px-3">Apple</button>
            </div>


            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><p>Name on card</p></label>
                <p><input type="email" class="input form-control" id="exampleFormControlInput1" placeholder="Name"></p>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><p>Credit card number</p></label>
                <p><input type="number" class="input form-control" id="exampleFormControlInput1" placeholder="---- ---- ----- ----"></p>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><p>Expiration Date</p></label>
                <p><input type="number" class="input form-control" id="exampleFormControlInput1" placeholder="--/--"></p>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><p>CVV</p></label>
                <p><input type="number" class="input form-control" id="exampleFormControlInput1" placeholder="---"></p>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    <p> Save card to account </p>
                </label>
            </div>
        </div>

    </div>  
</div>

<div class="empty">
    <!-- this is so the fixed buttons at the bottom dont cover content -->
</div>

<div class="container sticky fixed-bottom px-2 pt-4 pb-5">
    <form class=" row mx-auto justify-content-center align-items-center" action="<?php echo site_url();?>/_includes/archiveOrder.php" method="POST">
    <button type="button" onclick="window.location.href='<?php echo site_url(); ?>/cart.php';"class="col btn btn-outline-primary p-2">Back</button>
    <input name="order_id" value="<?php echo $userOrder['id']; ?>" type="hidden"/>
    <input name="final_price" id="final_price"value="<?php echo $total_price ?>" type="hidden"/>
        <button class="btn btn-primary p-2 px-4 mx-1 col-8" type="submit">
                <div class="d-flex justify-content-between">
                    <p class="text-light"> Checkout</p>
                    <p  id="priceHook2" class="text-light">$ <?php echo(number_format((float)$total_price, 2, '.', ''))?> </p>
                </div>
    
        </button>
    </form>
</div>
<?php include_once __DIR__ . '/_components/footer.php';?>
</div>