<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Log In | KAMI Food Truck';
include_once __DIR__ . '/../_components/header-kami.php';
?>
<body class="backgroundColor">

<div class="mt-4">
   <img class="kami-duck-large mx-auto d-block" src="<?php echo site_url(); ?>/dist/images/kami-duck.png">
   <h1 class="logoFont text-center mb-3">KAMI</h1>
</div>

   <div class="d-flex justify-content-center">
        <form  class="d-flex justify-content-center flex-wrap">
            <p>
            <label for="name" class="mb-1">First Name</label></br>
            <input type="text" id="name"  class="mb-2 p-2 input-login" name="first_name"></p>
            <p>
            <label for="name" class="mb-1">Last Name</label></br>
            <input type="text" id="name"  class="mb-2 p-2 input-login" name="last_name"></p>
            <p>
            <label for="email" class="mb-1">Email</label></br>
            <input type="email" id="email" name="email" class="mb-2 p-2 input-login form-control"></p>

            <p>
            <label for="password" class="mb-1">Password</label></br>
            <input type="password" id="password" name="password" class="mb-2 p-2 input-login"></p>
            <p>
            <label for="password" class="mb-1">Confirm Password</label></br>
            <input type="password" id="password2" name="password2" class="mb-2 p-2 input-login"></p>
            <button type="button" class="btn btn-link ms-2 pb-4" >Forgot Password?</button>
            <div class="w-100 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary px-5" onclick="window.location.href='<?php echo site_url(); ?>/pages/checkout.php'">Create Account</button>
            <!-- <button onclick="window.location.href = '<?php echo site_url(); ?>/auth/login.php';" type="button" class="input-login btn btn-outline-primary p-2 mb-4">Sign In</button> -->
            </div>
        </form>
    </div>

    
