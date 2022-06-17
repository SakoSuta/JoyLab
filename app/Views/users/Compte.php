<main>
    <section>
        <div class="GestionDeCompte">
            <div class="TitreCompte">
                <p class="CHAKRASemiBold font48">Mon Compte</p>
            </div>
            <div class="TousCompte">
                <div class="ContenuCompte">
                    <div class="CategorieCompte">
                        <a href="" class="CHAKRARegular font32 over">Mes Informations</a>
                        <a href="" class="CHAKRARegular font32 over">Mes Commandes</a>
                        <a href="" class="CHAKRARegular font32 over">Supprimer le compte</a>
                    </div>
                    <div class="InfoPerso scroll">
                        <div class="TextInfo">
                            <p class="CHAKRAMedium font32">Informations personnelles</p>
                        </div>
                        <div class="TousInfo">
                            <div class="PreNom">
                                <div class="Contenu">
                                    <div class="Info">
                                        <p class="CHAKRARegular font24">Prénom :</p>
                                    </div>
                                    <div class="InputInfo">
                                        <?= $form->input('firstname', 'Prénom'); ?>
                                    </div>
                                </div>
                                <div class="Contenu">
                                    <div class="Info">
                                        <p class="CHAKRARegular font24">Nom :</p>
                                    </div>
                                    <div class="InputInfo">
                                        <?= $form->input('lastname', 'Nom'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="TelMail">
                                <div class="Contenu">
                                    <div class="Info">
                                        <p class="CHAKRARegular font24">Téléphone :</p>
                                    </div>
                                    <div class="InputInfo">
                                        <img src="../public/img/Icon/White/phone.svg" alt="Phone">
                                        <?= $form->input('tel', 'Téléphone', ['type' => 'tel', 'maxlength' => '10']); ?>
                                    </div>
                                </div>
                                <div class="Contenu">
                                    <div class="Info">
                                        <p class="CHAKRARegular font24">Email :</p>
                                    </div>
                                    <div class="InputInfo">
                                        <img src="../public/img/Icon/White/mail.svg" alt="Mail">
                                        <?= $form->input('email', 'Email', ['type' => 'email']); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="Adresse">
                                <div class="Contenu">
                                    <div class="Info">
                                        <p class="CHAKRARegular font24">Adresse :</p>
                                    </div>
                                    <div class="InputInfo">
                                        <?= $form->input('adresse', 'Adresse', ['type' => 'textarea']); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="BoutonSauve">
                                <a href="" class="CHAKRARegular font20">Sauver les modifications</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>