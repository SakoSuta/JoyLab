<div class="Contact">
    <div class="NumAndMail">
        <div class="Numero">
            <img src="../public/img/Icon/Green/phone.svg" alt="Phone">
            <p>Numéro de Téléphone</p>
            <p>+33 2 22 22 22 22</p>
        </div>
        <div class="Mail">
            <img src="../public/img/Icon/Green/mail.svg" alt="Mail">
            <p>Adresse Email</p>
            <p>CeciEstUn@Email.com</p>
        </div>
    </div>
    <div class="NousContacter">
        <p>Nous Contacter</p>
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
                        <?= $form->input('firstname', 'Téléphone'); ?>
                    </div>
                    <div class="InfoInputC">
                        <?= $form->input('email', 'Email', ['type' => 'email']); ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>