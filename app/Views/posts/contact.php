<div class="Contact">
    <div class="ContenuContact">
        <div class="NumAndMail">
            <div class="ContenuNumMail">
                <div class="NumMailInfo">
                    <img src="../public/img/Icon/Green/phone.svg" alt="Phone">
                    <p class="CHAKRAMedium font24">Numéro de Téléphone</p>
                    <p class="policeCHAKRA font24">+33 2 22 22 22 22</p>
                </div>
                <div class="NumMailInfo">
                    <img src="../public/img/Icon/Green/mail.svg" alt="Mail">
                    <p class="CHAKRAMedium font24">Adresse Email</p>
                    <p class="policeCHAKRA font24">CeciEstUn@Email.com</p>
                </div>
            </div>
        </div>
        <div class="NousContacter">
            <p class="CHAKRABold font40">Nous Contacter</p>
            <div class="FormContact">
                <form method="post">
                    <div class="CFirstLastName">
                        <div class="InfoInputC">
                            <?= $form->input('firstname', 'Prénom'); ?>
                        </div>
                        <div class="InfoInputC">
                            <?= $form->input('Lastname', 'Nom'); ?>
                        </div>
                    </div>
                    <div class="CNumMail">
                        <div class="InfoInputC">
                            <img src="../public/img/Icon/White/Phone.svg" alt="Mail">
                            <?= $form->input('Tel', 'Téléphone', ['type' => 'tel', 'maxlength' => '10']); ?>
                        </div>
                        <div class="InfoInputC">
                            <img src="../public/img/Icon/White/mail.svg" alt="Mail">
                            <?= $form->input('email', 'Email', ['type' => 'email']); ?>
                        </div>
                    </div>
                    <div class="Message">
                        <div class="InfoInputC">
                            <?= $form->input('firstname', 'Message', ['type' => 'textarea']); ?>
                        </div>
                    </div>
                    <div class="CEnvoyer">
                        <button class="Envoyer policeCHAKRA font20 ">Envoyer le message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>