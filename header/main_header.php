<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigdal-molle</title>
    <!-- fontwesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- goole font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- slick nav min css cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css" integrity="sha512-heyoieAHmpAL3BdaQMsbIOhVvGb4+pl4aGCZqWzX/f1BChRArrBy/XUZDHW9WVi5p6pf92pX4yjkfmdaIYa2QQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owalcursor css link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- main css lin -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="top-header">
        <div class="container">
            <div class="main-header">
                <div class="logo">
                    <a href="index.php"><img src="image/logo.svg"></a>
                </div>
                <div class="menubar">
                    <nav>
                        <ul id="menu">
                            <form action="#">
                                <div class="search">
                                    <label class="icon" for="#"></label>
                                    <input type="text" placeholder="Søk">
                                </div>
                            </form>
                            <li><a href="netrbukk.php">Nettbutikk</a></li>
                            <li><a href="Oppskrifter.php">Oppskrifter</a></li>
                            <li><a href="siste_nytt.php">Siste nytt</a></li>
                            <li><a href="kornerter.php">Kornarter</a></li>
                            <li class="last"><a href="om_as.php">Om oss</a></li>
                            <li><a href="#" onclick="toggleForm()"><i class="fa-regular fa-user"></i>Min side</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="right-content">
                    <form action="#">
                        <div class="search">
                            <label class="icon" for="#"></label>
                            <input type="text" placeholder="Søk">
                        </div>
                    </form>
                    <div class="user-login">
                        <a href="#" onclick="toggleForm()"><i class="fa-solid fa-user"></i></a>
                    </div>
                    <div class="user-card">
                        <a href="#" id="openBtn"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header section end -->
    <!-- popup login page design start -->
    <section id="popuploginForm" class="login-section overlay-form">
        <div class="form-popup">
        <span class="close-btn" onclick="toggleForm()">&times;</span>
            <div class="hedear">
                <h2>Log in</h2>
            </div>
            <div class="main-content">
                <div class="form">
                    <form action="#">
                        <div class="email">
                            <label for="">Email :</label>
                            <input type="email" placeholder="Enter email">
                        </div>
                        <div class="password">
                            <label for="">Password :</label>
                            <input type="password" placeholder="Enter password">
                        </div>
                        <div class="button">
                            <input type="submit" value="Login">
                        </div>
                        <a href="glemt_password.php">Glemt passord?</a>
                        <a href="oppert_konto.php">oppert konto?</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- popup login form end -->
    <!-- popup card section start -->
    <header id="productList" class="card-header popup">
        <div class="popup-content">
        <div class="heding-content">
            <h2>Handlekurv</h2>
            <span class="close" id="closeBtn">&times;</span>
        </div>
        <div class="main">
            <div class="product-item">
                <div class="product">
                    <div class="product-image">
                        <a href="#"><img src="image/C65A9987.png"></a>
                    </div>
                    <div class="product-content">
                        <h2><b>Speltmel</b> - Siktet</h2>
                        <p>Størrelse: 1 kg</p>
                        <span><i class="fa-solid fa-minus"></i> <b>1</b> <i class="fa-solid fa-plus"></i></span>
                    </div>
                </div>
                <div class="product">
                    <div class="product-image">
                        <a href="#"><img src="image/C65A9987.png"></a>
                    </div>
                    <div class="product-content">
                        <h2><b>Speltmel </b>- Siktet</h2>
                        <p>Størrelse: 1 kg</p>
                        <span><i class="fa-solid fa-minus"></i> <b>1</b> <i class="fa-solid fa-plus"></i></span>
                    </div>
                </div>
            </div>
            <div class="product-submit">
                <div class="right-content">
                    <ul>
                        <li>Rabatt</li>
                        <li>Levering</li>
                        <li><b>Totalsum</b> (MVA inkludert)</li>
                    </ul>
                </div>
                <div class="left-content">
                    <ol>
                        <li>kr 21</li>
                        <li>kr 39</li>
                        <li><b>kr 129</b></li>
                    </ol>
                </div>
            </div>
            <a class="btn" href="netrbukk.php">Fortsett å handle</a>
            <a class="btn-2" href="product_registration.php">Til kassen</a>
        </div>
        </div>
    </header>
    <!-- popup card section end -->