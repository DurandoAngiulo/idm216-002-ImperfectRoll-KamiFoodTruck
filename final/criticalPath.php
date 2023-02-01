<?php
include_once __DIR__ . '/app.php';
$page_title = 'Critical Path';
include_once __DIR__ . '/_components/header.php';
?>
<body class="sitebg">
    <!-- wrapper -->
    <div class="px-2 px-md-2 py-5">
        <div class="d-flex mb-3 align-items-center teamLogo">
            <img class="die me-2" src="dist/images/dice.png" alt="Perfect Roll logo">
            <h4 class="mb-0 blackPixelFont"> Imperfect Roll</h4>
        </div>
      <div class="d-flex justify-content-center mb-2">
        <img class="kamiLogoImage" src="dist/images/kami-logo.png" alt="Kami Logo" />
      </div>
      <h1 class="text-center fw-bold mb-5 moneyText">Kami Food Truck</h1>
      <div class="d-flex justify-content-center">
      <div class="content">
      <h3 class="poppinsSemi">Moodboard</h3>
      <div class="d-flex justify-content-center mb-2">
        <img class="moodboard mb-4" src="dist/images/Kami-Moodboard.png" alt="Kami Mood board" />
      </div>
      <h3 class="poppinsSemi"> User Personas </h3>
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
          alt="User Persona 1"
        />
      </picture>
      <picture>
        <source
          media="(min-width: 768px)"
          srcset="dist/images/User-Persona2-PC.png"
        />
        <source
          media="(min-width: 0px)"
          srcset="dist/images/User-Persona2-mobile.png"
        />
        <img
          class="persona mb-2"
          src="dist/images/User-Persona2-PC.png"
          alt="User Persona 2"
        />
      </picture>
      <picture>
        <source
          media="(min-width: 768px)"
          srcset="dist/images/User-Persona3-PC.png"
        />
        <source
          media="(min-width: 0px)"
          srcset="dist/images/User-Persona3-mobile.png"
        />
        <img
          class="persona mb-4"
          src="dist/images/User-Persona3-PC.png"
          alt="User Persona 3"
        />
      </picture>
      </div>
      <h3 class="poppinsSemi"> Styles </h3>
      <hr>

      <h4 class="poppinsReg">Colors</h4>
      <div class="d-flex flex-wrap justify-content-between mb-2">
      <img class="colors mx-1" src="dist/images/colors/Color-Primary.png" alt="Primary color"/>
      <img class="colors mx-1" src="dist/images/colors/Color-Background.png" alt="Background color"/>
      <img class="colors mx-1" src="dist/images/colors/Color-Red.png" alt="Kami red color"/>
      <img class="colors mx-1" src="dist/images/colors/Color-Yellow.png" alt="Accent yellow color"/>
      <img class="colors mx-1" src="dist/images/colors/Color-Green.png" alt="Accent green color"/>
      <img class="colors mx-1" src="dist/images/colors/Color-Inactive.png" alt="Inactive color"/>
      </div>
      <hr>

      <h4 class="poppinsReg">Text</h4>
      <div class="mb-2">
      <h1 class="moneyText">Logo | Money Game 32px</h1>
      <h1 class="poppinsBold"> Heading 1 | Poppins Bold 24px</h1>
      <h2 class="poppinsBold">Heading 2 | Poppins Bold 18px</h2>
      <h3 class="poppinsSemi">Heading 3 | Poppins Semibold 16px</h3>
      <p class="poppinsReg">Body 1 | Poppins Regular 14px</p>
      <p class="poppinsLight">Body 2 | Poppins Light 12px;</p> 
      </div>
      <hr>

      <h4 class="poppinsReg">Icons</h4>
      <div class="d-flex justify-content-between mb-2">
      <img class="icon" src="dist/images/icons/Stars.png" alt="App icon"/>
      <img class="icon" src="dist/images/icons/Cart.png" alt="App icon"/>
      <img class="icon" src="dist/images/icons/visibility-off.png" alt="App icon"/>
      <img class="icon" src="dist/images/icons/Delete.png" alt="App icon"/>
      <img class="icon" src="dist/images/icons/Edit.png" alt="App icon"/>
      <img class="icon" src="dist/images/icons/Orders.png" alt="App icon"/>
      <img class="icon" src="dist/images/icons/Home.png" alt="App icon"/>
      <img class="icon" src="dist/images/icons/Settings.png" alt="App icon"/>
      <img class="icon" src="dist/images/icons/Rewards.png" alt="App icon"/>
      </div>

      <hr>
      <h4 class="poppinsReg">Buttons</h4>
      <div class="buttonGroup">
      <div class="button bPrimary mb-1">
        <p class="text-center mb-0 poppinsReg">Button Primary</p>
      </div>
      <div class="button bInactive mb-2">
        <p class="text-center mb-0 poppinsReg">Button Inactive</p>
      </div>
      <div class="button bPrice mb-2">
        <p class="text-center mb-0 poppinsReg">Button Price</p>
        <p class="text-center mb-0 poppinsReg">$xx</p>
      </div>
      <div class="button bIcon mb-2">
        <p class="text-center mb-0 poppinsReg">Button Icon</p>
        <img class="buttonIcon" src="dist/images/icons/whiteEdit.png" alt="App icon"/>
      </div>
      <div class="button bSecondary mb-2">
        <p class="text-center mb-0 poppinsReg">Button Secondary</p>
      </div>
      <p class="mb-0 poppinsReg">Button</p>
      <p class="mb-0 poppinsLight">Button Link</p>
      </div>
      <hr>

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