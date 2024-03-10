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
                    <h2>Adresse</h2>
                    <a href="#"></a>
                    <div class="form">
                        <form action="#">
                            <div class="email">
                                <div class="email-address">
                                    <label for="">Adresse :</label>
                                </div>
                                <input type="text" placeholder="Adresse">
                                <input type="text" placeholder="Legg til C/O">
                            </div>
                            <div class="post-sted">
                                <div class="postnumber">
                                    <label for="">Postnummer :</label>
                                    <input type="number" placeholder="Postnummer">
                                </div>
                                <div class="sted">
                                    <label for="">Sted :</label>
                                    <input type="number" placeholder="Sted">
                                </div>
                            </div>
                            <div class="land">
                                <label for="">Land:</label>
                                <select>
                                    <option value="Norway">Norway</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Norway">Norway</option>
                                </select>
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