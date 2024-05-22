<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"> </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <link rel="stylesheet" href="./Assets/CSS_LandingPage.css?ver=<?php echo time(); ?>">
  <link rel="stylesheet" href="./Assets/CSS_Public.css?ver=<?php echo time(); ?>">

  <title> Caparal - Appliances & Furniture </title>
</head>

<body>
  <div class="main-parent">
    <?php include './Components/LandingPage_Header.php' ?>
    <div class="main-container">

      <div class="main-home-div">
        <div class="banner-parent">
          <div class="banner-background">
            <h1> Every great design begins with an even better story. </h1>
          </div>
        </div>
        <div class="section-1-parent">
          <div class="section-1-left">
            <img src="./Assets/Images/section-1-bg.png" alt="">
          </div>
          <div class="section-1-right">
            <h2> Premier destination for top-quality appliances and furniture </h2>
            <h1> we pride ourselves on offering a diverse selection of stylish and functional products to enhance every aspect of your home </h1>
          </div>
        </div>
        <div class="section-2-parent">
          <div class="section-2-left">
            <h2> Uncover the ultimate hub for home transformations </h2>
            <h1> Our store is dedicated to assembling a unique array of appliances and furniture that redefine functionality and style. </h1>
          </div>
          <div class="section-2-right">
            <img src="./Assets/Images/section-2-bg.png" alt="">
          </div>
        </div>
        <div class="products-parent">
          <div class="products-title">
            <h1> Products we have</h1>
            <button class="shop-now-btn"> Shop Now </button>
          </div>
          <div class="products-grid-main-container">
            <div class="grid-product">
              <img src="./Assets/Images/sofa_1.png" alt="">
              <div class="grid-product-content">
                <h1> Sofa </h1>
              </div>
            </div>
            <div class="grid-product">
              <img src="./Assets/Images/pillow.png" alt="">
              <div class="grid-product-content">
                <h1> Cushion </h1>
              </div>
            </div>
            <div class="grid-product">
              <img src="./Assets/Images/brown_sofa.png" alt="">
              <div class="grid-product-content">
                <h1> Chair </h1>
              </div>
            </div>
            <div class="grid-product">
              <img src="./Assets/Images/bluecurtain_1.png" alt="">
              <div class="grid-product-content">
                <h1> Curtain </h1>
              </div>
            </div>
            <div class="grid-product">
              <img src="./Assets/Images/cabinet_1.png" alt="">
              <div class="grid-product-content">
                <h1> Cabinet </h1>
              </div>
            </div>
            <div class="grid-product">
              <img src="./Assets/Images/table_1.png" alt="">
              <div class="grid-product-content .grid-content-h1-adjust">
                <h1> and Many More... </h1>
              </div>
            </div>
          </div>
        </div>
        <div class="new-release-parent">
          <div class="new-release-title">
            <h1> New Release </h1>
            <p> Our newest and freshest bespoke furniture curated just for you </p>
          </div>
          <div class="new-release-slider-container">
            <div class="new-release-slider-cards">
              <div class="new-release-text">
                <h1> Tranquil Touch </h1>
              </div>
              <img src="./Assets/Images/tranquil_touch.png" alt="">
            </div>
            <div class="new-release-slider-cards">
              <div class="new-release-text">
                <h1> Sung Sofa </h1>
              </div>
              <img src="./Assets/Images/sung_sofa.png" alt="">
            </div>
            <div class="new-release-slider-cards">
              <img src="./Assets/Images/tranquil_touch.png" alt="">
            </div>
            <div class="new-release-slider-cards">
              <img src="./Assets/Images/tranquil_touch.png" alt="">
            </div>
            <div class="new-release-slider-cards">
              <img src="./Assets/Images/tranquil_touch.png" alt="">
            </div>
            <div class="new-release-slider-cards">
              <img src="" alt="">
            </div>
          </div>
          <div class="new-release-buttons">
            <button class="prev">
              <i class="fa-solid fa-caret-left"> </i>
            </button>
            <p class="buttons-text"> Previous </p>
            <p class="buttons-text"> Next </p>
            <button class="next">
              <i class="fa-solid fa-caret-right"> </i>
            </button>
          </div>
        </div>
        <div class="best-seller-parent">
          <div class="best-seller-title">
            <h1> Best Seller </h1>
            <p> Discover our handpicked selection of best-selling furniture favorites, tailored just for you. </p>
          </div>
          <div class="best-seller-grid-container">
            <div class="best-seller-grid-card">
              <div class="best-seller-image-container">
                <div class="best-seller-image">
                  <img src="./Assets/Images/fujidenzo.png" alt="">
                </div>
                <div class="best-seller-info">
                  <div class="best-seller-price">
                    <h4> Fujidenzo 10.5kg Fully Auto Washing Machine </h4>
                    <p> P9,499 </p>
                  </div>
                  <div class="best-seller-icon">
                    <i class="fa-solid fa-bag-shopping"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="best-seller-grid-card">
              <div class="best-seller-image-container">
                <div class="best-seller-image">
                  <img src="./Assets/Images/vission.png" alt="">
                </div>
                <div class="best-seller-info">
                  <div class="best-seller-price">
                    <h4> VISSION SMT-05 ECO | Window Type </h4>
                    <p> P11,299 </p>
                  </div>
                  <div class="best-seller-icon">
                    <i class="fa-solid fa-bag-shopping"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="best-seller-grid-card">
              <div class="best-seller-image-container">
                <div class="best-seller-image">
                  <img src="./Assets/Images/jonas_sofa.png" alt="">
                </div>
                <div class="best-seller-info">
                  <div class="best-seller-price">
                    <h4> Jonas Sofa </h4>
                    <p> P31,760 </p>
                  </div>
                  <div class="best-seller-icon">
                    <i class="fa-solid fa-bag-shopping"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="new-release-parent">
          <div class="new-release-title">
            <h1 class="sale-color"> Sale </h1>
            <p> High quality furniture pieces up for grabs </p>
          </div>
          <div class="new-release-slider-container">
            <div class="new-release-slider-cards">
              <div class="new-release-text">
                <h1> Luxe Lounge </h1>
              </div>
              <img src="./Assets/Images/luxe_lounge.png" alt="">
            </div>
            <div class="new-release-slider-cards">
              <div class="new-release-text">
                <h1> Comfort Cove </h1>
              </div>
              <img src="./Assets/Images/comfort_cove.png" alt="">
            </div>
            <div class="new-release-slider-cards">
              <img src="./Assets/Images/tranquil_touch.png" alt="">
            </div>
            <div class="new-release-slider-cards">
              <img src="./Assets/Images/tranquil_touch.png" alt="">
            </div>
            <div class="new-release-slider-cards">
              <img src="./Assets/Images/tranquil_touch.png" alt="">
            </div>
            <div class="new-release-slider-cards">
              <img src="" alt="">
            </div>
          </div>
          <div class="new-release-buttons">
            <button class="prev">
              <i class="fa-solid fa-caret-left"> </i>
            </button>
            <p class="buttons-text"> Previous </p>
            <p class="buttons-text"> Next </p>
            <button class="next">
              <i class="fa-solid fa-caret-right"> </i>
            </button>
          </div>
        </div>
      </div>

      <div class="main-shop-div">
        hello
      </div>

      <div class="main-services-div">
        hello
      </div>

      <div class="main-about-us-div">
        hello
      </div>

      <div class="main-contacts-div">
        hello
      </div>

      <?php include './Components/LandingPage_Footer.php' ?>

    </div>
  </div>
  <script src="./Assets/JS_Landing.js?ver=<?php echo time(); ?>"></script>
</body>

</html>