<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Log In | KAMI Food Truck';
include_once __DIR__ . '/../_components/header-kami.php';
$errorMessage = isset($_GET['error']) ? $_GET['error'] : false;
if ($errorMessage){
    echo $errorMessage;}
?>
<div class="container">
    <body class="backgroundColor">
        <div class="mt-4">
        <img class="kami-duck-large mx-auto d-block" src="<?php echo site_url(); ?>/dist/images/kami-duck.png">
        <h1 class="logoFont text-center mb-3">KAMI</h1>
        </div>

    <div class="input-container  justify-content-center">
            <form  class="d-flex flex-column justify-content-center flex-wrap" action="<?php echo site_url();?>/_includes/process-login.php" method="POST">
                <!-- <p>
                <label for="name" class="mb-1">Name</label></br>
                
                <input type="text" id="name"  class="mb-2 p-2 input-login" name="name"></p>
                -->
                <p>
                <label for="email" class="mb-1">Email</label></br>
                <input type="text" id="email" name="email" class="mb-2 p-2 input-login"></p>

                <p>
                <label for="password" class="mb-1">Password</label></br>
                <input type="password" id="password" name="password" class="mb-2 p-2 input-login form-control"></p>
                <button type="button" class="btn btn-link ms-2 pb-4" >Forgot Password?</button>

            <div class="d-grid gap-2 px-3">
                <button onclick="window.location.href = '<?php echo site_url(); ?>/auth/signup.php';" type="button" class="btn btn-primary p-2">Create Account</button>
                <button type="submit" class="input-login btn btn-outline-primary p-2 mb-4">Sign In</button>
            </div>
            </form>
        </div>
</div>

    
