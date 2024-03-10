<?php 
    include 'header/main_header.php';
?>
    <!-- banner content section start -->
    <section class="oppert_password-section">
        <div class="container">
            <div class="main-password">
                <div class="flex-content">
                    <h2>Konto</h2>
                    <div class="inforation">
                        <p><a href="oppert_parsonal.php">Personlig informasjon</a></p>
                        <ul>
                            <li><a href="oppert_address.php">Adresse</a></li>
                            <li><a href="oppert_Ordrehistorikk.php">Ordrehistorikk</a></li>
                            <li><a href="oppert_enter.php">Endre passord</a></li>
                            <li><a href="logout.php">Logg ut</a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex-content">
                    <h2>Endre passord</h2>
                    <div class="form">
                        <form action="#">
                            <div class="password">
                                <label for="">Nåværende passord :</label>
                                <input type="password" placeholder="Oppgi passord">
                            </div>
                            <div class="password">
                                <label for="">Nytt passord:</label>
                                <input type="password" placeholder="Oppgi passord">
                            </div>
                            <div class="password">
                                <label for="">Bekreft nytt passord :</label>
                                <input type="password" placeholder="Bekreft nytt passord">
                            </div>
                            <div class="button">
                                <input type="submit" value="Endre passord">
                            </div>
                           <div class="enter">
                            <a href="oppert_enter_tilbakes_passord_page1.php">Tilbakestill passord</a>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section start -->
<?php 
    include 'footer/main_footer.php';
?>