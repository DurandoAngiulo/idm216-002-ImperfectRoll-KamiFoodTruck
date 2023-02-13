<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Log In | KAMI Food Truck';
include_once __DIR__ . '/../_components/header-kami.php';
?>
<body class="backgroundColor">
<style><?php 
include_once __DIR__ . '/../dist/styles/login.css';
?></style>

<div class="mt-4">
   <img class="kami-duck mx-auto d-block" src="<?php echo site_url(); ?>/dist/images/kami-duck.png">
   <h1 class="logoFont text-center mb-3">KAMI</h1>
</div>

   <div class="d-flex justify-content-center">
        <form>
            <p>
            <label for="name" class="mb-1">Name</label></br>
            
            <input type="text" id="name"  class="mb-2 p-2 input" name="name"></p>
            
            <p>
            <label for="email" class="mb-1">Email</label></br>
            <input type="text" id="email" name="email" class="mb-2 p-2 input"></p>

            <p>
            <label for="password" class="mb-1">Password</label></br>
            <input type="text" id="password" name="password" class="mb-2 p-2 input"></p>

            <p>
            <label for="password2" class="mb-1">Repeat Password</label></br>
            <input type="text" id="password2" name="password2" class=" p-2 input"></p>
        </form>
    </div>

    <button type="button" class="btn btn-link ms-2 pb-4" >Forgot Password?</button>

        <div class="d-grid gap-2 px-3">
            <button type="button" class="btn btn-primary p-2">Create Account</button>
            <button type="button" class="btn btn-outline-primary p-2 mb-4">Sign In</button>
        </div>

    <?php include_once __DIR__ . '/../_components/footer.php';?>
