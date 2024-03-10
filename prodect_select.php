<?php 
    include 'header/main_header.php';
?>
    <section class="post-top-content">
        <div class="container">
            <div class="main-content">
                <ul>
                    <li><a href="">Alle oppskrifter <i class="fa-solid fa-chevron-right"></i></a></li>
                    <li><a href="">Melprodukter <i class="fa-solid fa-chevron-right"></i></a></li>
                    <li><a href="#"></a>Økologisk spelt siktet</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- prodect header section end -->
    <!-- prodect-select section start -->
    <div class="product-select-section">
        <div class="container">
            <div class="main-product">
                <div class="product-image">
                    <div class="slide">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="#"><img src="image/selectproduct.png"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="image/selectproduct.png"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="image/selectproduct.png"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="image/selectproduct.png"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="image/selectproduct.png"></a>
                            </div>
                        </div>
                    </div>
                    <div class="slide-iteam">
                        <div class="main">
                            <div class="iteam-1">
                                <img src="image/slideproduct.png">
                            </div>
                            <div class="iteam-2">
                                <img src="image/slideproduct.png">
                            </div>
                        </div>
                    </div> 
                </div>                 
                <div class="product-content">
                    <div class="product-tittle">
                        <h4>Økologisk</h4>
                        <h2>SpeltMel</h2>
                        <p>Siktet</p>
                    </div>
                    <div class="product-weight">
                        <h2>Velg størrelse</h2>
                        <form action="#">
                            <input type="radio" name="kg" value="">
                            <label for="1 kg">1 kg</label>
                            <input type="radio" name="kg" value="">
                            <label for="2 kg">2 kg</label>
                            <input type="radio"  name="kg" value="">
                            <label for="5 kg">5 kg</label>
                        </form>
                    </div>
                    <div class="money">
                        <h1>KR 55</h1>
                    </div>
                    <div class="button">
                        <a href="checkout.html">Legg i handlekurven</a>
                    </div>
                    <div class="product-details">
                        <ul>
                            <li onclick="Myfunction()"><a href="#">Beskrivelse</a></li>
                            <li class="content-2" onclick="content()"><a href="#">Næringsinnhold</a></li>
                        </ul>
                        <div class="content" id="demo">
                            <p class="sub-content-1">
                                Spelten er malt til siktet mel på steinkvern og siktet gjennom plansikt med 160 μ maskevidde. Dette gir et mel med høye næringsverdier og revne fiber. Melet har en svakt gyllenbrun fargetone.
                            </p>
                            <p  class="sub-content-2">
                                Melet er 100% fritt for tilsetningsstoffer. 
                                Vi tar inn parti for parti av korn og blander ikke disse. På denne måten kan vi merke hver «batch» med partinummer, som er sporbart tilbake til kornleverandøren
                            </p>
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="header">
                           <div class="main">
                                <div class="left-content">
                                    <h2>Ingredienser</h2>
                                </div>
                                <div class="right-content">
                                    <h2>Siktet rent Spelt mel</h2>
                                </div>
                           </div>
                        </div>
                        <div class="image">
                            <a class="image-1" href="#"><img src="image/Layer 2.svg"></a>
                            <a href="#"><img src="image/stamp1.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prodect-select section end -->
    <!-- button start -->
    <button class="scroll-button" onclick="scrollToTop()"><i class="fa-solid fa-angle-up"></i></button>
    <!-- button start -->
    <!-- blog section start -->
    <section class="blog-section">
        <div class="container">
            <div class="blog-header">
                <div class="main-header">
                    <div class="left-content">
                        <h2>Lignende oppskrifter</h2>
                    </div>
                    <div class="right-content">
                        <input type="text" placeholder="Se alle oppskrifter">
                    </div>
                </div>
            </div>
            <div class="blog-prodect">
                <div class="prodect">
                    <a href="#"><img src="image/image1.png"></a>
                    <div class="blog-content">
                        <h2><a href="#">Oppskrift tittel</a></h2>
                        <p>1. MAI 2021</p>
                    </div>
                </div>
                <div class="prodect">
                    <a href="#"><img src="image/image2.png"></a>
                    <div class="blog-content">
                        <h2><a href="#">Litt lenger oppskrift tittel</a></h2>
                        <p>1. MAI 2021</p>
                    </div>
                </div>
                <div class="prodect">
                    <a href="#"><img src="image/image1.png"></a>
                    <div class="blog-content">
                        <h2><a href="#">Oppskrift tittel</a></h2>
                        <p>1. MAI 2021</p>
                    </div>
                </div>
            </div>
            <div class="blog-header blog-bottom">
                <div class="main-header">
                    <div class="left-content">
                        <h2>God mat med godt mel</h2>
                    </div>
                    <div class="right-content">
                        <input type="text" placeholder="Se alle oppskrifter">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->
<?php 
    include 'footer/main_footer.php';
?>