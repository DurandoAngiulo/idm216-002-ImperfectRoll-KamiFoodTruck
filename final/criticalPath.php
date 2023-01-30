<?php
include_once __DIR__ . '/app.php';
$page_title = 'Critical Path';
include_once __DIR__ . '/_components/header.php';
?>
<body class="sitebg">
    <!-- wrapper -->
    <div class="px-2 px-md-2 py-5">
        <div class="d-flex mb-3 align-items-center">
            <img class="die me-2" src="dist/images/dice.png">
            <h4 class="mb-0"> Imperfect Roll</h4>
        </div>
      <div class="d-flex justify-content-center mb-2">
        <img class="logoImage" src="dist/images/kami-logo.png" />
      </div>
      <h1 class="text-center fw-bold mb-5">Kami Food Truck</h1>
      <div class="d-flex justify-content-center">
      <div class="content">
      <h3>Moodboard</h3>
      <div class="d-flex justify-content-center mb-2">
        <img class="moodboard mb-4" src="dist/images/Kami-Moodboard.png" />
      </div>
      <h3> User Personas </h3>
      <div class="d-flex flex-wrap justify-content-center mb-2">
      <picture>
        <source
          media="(min-width: 768px)"
          srcset="dist/images/User-Persona1-PC.png"
        />
        <source
          media="(min-width: 0px)"
          srcset="dist/images/User-Persona1-mobile.png"
        />
        <img
          class="persona mb-2"
          src="dist/images/User-Persona1-PC.png"
          alt="Durando bg"
        />
      </picture>
      <picture>
        <source
          media="(min-width: 768px)"
          srcset="dist/images/User-Persona1-PC.png"
        />
        <source
          media="(min-width: 0px)"
          srcset="dist/images/User-Persona1-mobile.png"
        />
        <img
          class="persona mb-2"
          src="dist/images/User-Persona1-PC.png"
          alt="Durando bg"
        />
      </picture>
      <picture>
        <source
          media="(min-width: 768px)"
          srcset="dist/images/User-Persona1-PC.png"
        />
        <source
          media="(min-width: 0px)"
          srcset="dist/images/User-Persona1-mobile.png"
        />
        <img
          class="persona mb-4"
          src="dist/images/User-Persona1-PC.png"
          alt="Durando bg"
        />
      </picture>
      </div>
      <h3> Styles </h3>
      <h6>Colors</h6>
      <div class="d-flex flex-wrap justify-content-between mb-2">
      <img class="colors mx-1" src="dist/images/colors/Color-Primary.png" />
      <img class="colors mx-1" src="dist/images/colors/Color-Background.png" />
      <img class="colors mx-1" src="dist/images/colors/Color-Red.png" />
      <img class="colors mx-1" src="dist/images/colors/Color-Yellow.png" />
      <img class="colors mx-1" src="dist/images/colors/Color-Green.png" />
      <img class="colors mx-1" src="dist/images/colors/Color-Inactive.png" />
      </div>
      <h6>Text</h6>
      <div class="mb-2">
      <h1>Logo | Money Game 32px</h1>
      <h1> Heading 1 | Poppins Bold 24px</h1>
      <h2>Heading 2 | Poppins Bold 18px</h2>
      <h3>Heading 3 | Poppins Semibold 16px</h3>
      <p>Body 1 | Poppins Regular 14px</p>
      <p>Body 2 | Poppins Light 12px;</p> 
      </div>
      <h6>Icons</h6>
      <div class="d-flex justify-content-between mb-2">
      <img class="icon" src="dist/images/icons/Stars.png" />
      <img class="icon" src="dist/images/icons/Cart.png" />
      <img class="icon" src="dist/images/icons/visibility-off.png" />
      <img class="icon" src="dist/images/icons/Delete.png" />
      <img class="icon" src="dist/images/icons/Edit.png" />
      <img class="icon" src="dist/images/icons/Orders.png" />
      <img class="icon" src="dist/images/icons/Home.png" />
      <img class="icon" src="dist/images/icons/Settings.png" />
      <img class="icon" src="dist/images/icons/Rewards.png" />
      </div>
      <h6>Buttons</h6>
      <div class="button mb-1">
        <p class="text-center mb-0">button</p>
      </div>
      <div class="button mb-2">
        <p class="text-center mb-0">button</p>
      </div>
      <h3 class="mb-5"> Critical Pathway </h3>
      <div class="figmaContainerMobile">
      <iframe class ="responsive-iframeMobile"style="border: 1px solid rgba(0, 0, 0, 0.1);" 
      width="300" height="600" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FszdkkiGFyHA5rFjUwOPCa4%2FTeam-Project-Site%3Fpage-id%3D0%253A1%26node-id%3D10%253A1174%26viewport%3D2249%252C376%252C0.37%26scaling%3Dscale-down%26starting-point-node-id%3D10%253A1174" 
      allowfullscreen></iframe>
      </div>
      </div>
    </div>
    </div>

    <?php include_once __DIR__ . '/_components/footer.php';
?>
