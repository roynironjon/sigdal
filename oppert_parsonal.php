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
                        <p><a href="oppert_parsonal.html">Personlig informasjon</a></p>
                        <ul>
                            <li><a href="oppert_address.php">Adresse</a></li>
                            <li><a href="oppert_Ordrehistorikk.php">Ordrehistorikk</a></li>
                            <li><a href="oppert_enter.html">Endre passord</a></li>
                            <li><a href="logout.html">Logg ut</a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex-content">
                    <h2>Personlig informasjon</h2>
                    <div class="form">
                        <form action="#">
                            <div class="email">
                                <label for="">Email :</label>
                                <input type="email" placeholder="Oppgi din e-post">
                            </div>
                            <div class="password">
                                <label for="">Password :</label>
                                <input type="password" placeholder="Oppgi passord">
                            </div>
                            <div class="password">
                                <label for="">Gjenta passord:</label>
                                <input type="password" placeholder="Oppgi passord">
                            </div>
                            <div class="button">
                                <input type="submit" value="Lagre endringer">
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