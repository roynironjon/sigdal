<?php 
    include 'header/main_header.php';
?>
    <!-- banner content section start -->
    <div class="brak-content">
        <div class="container">
            <div class="heading-content">
                <h1>Glemt passord</h1>
            </div>
        </div>
    </div>
    <!-- banner content section end -->
    <section class="login-section glemt-password">
        <div class="main-content">
            <div class="heading">
                <p>Fyll inn epostadressen du har registrert hos oss så sender vi et nytt passord til deg.</p>
            </div>
            <div class="form">
                <form action="#">
                    <div class="email">
                        <label for="">Email :</label>
                        <input type="email" placeholder="Enter email">
                    </div>
                    <div class="button">
                        <input type="submit" value="Tilbakestille passord">
                    </div>
                    <a href="glemt_password_page2.php">Tilbake til innlogging</a>
                </form>
            </div>
        </div>
    </section>
    <!-- contact-section start -->
<?php 
    include 'footer/main_footer.php';
?>