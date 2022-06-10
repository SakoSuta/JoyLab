<div class="Compte">
  <div class="Titre">
    <p class="MonCompte font48 policeCHAKRA CHAKRASemiBold">Mon Compte</p>
  </div>

  <?php if ($errors) : ?>
    <div class="Erreur font20 policeIBM">
      <?= $messageError ?>
    </div>
  <?php endif; ?>

  <?php if ($errors) : ?>
    <div class="Erreur font16 policeIBM">
      Identifiants incorrects
    </div>
  <?php endif; ?>

  <div class="TousCompte">

    <div class="signUp">
      <p class="TitreSignUp-In font40 CHAKRABold">S'inscrire</p>
      <div class="FormSignUp">
        <form method="post">
          <div class="FNameLName">
            <div class="InfoInput">
              <?= $form->input('firstname', 'Prénom'); ?>
            </div>
            <div class="InfoInput">
              <?= $form->input('lastname', 'Nom'); ?>
            </div>
          </div>
          <div class="AutreInfo">
            <div class="InfoInput">
              <img src="../public/img/Icon/Black/mail.svg" alt="Mail">
              <?= $form->input('email', 'Email', ['type' => 'email']); ?>
            </div>
            <div class="InfoInput">
              <img src="../public/img/Icon/Black/lock.svg" alt="Lock">
              <?= $form->input('password', 'Mot de passe',['type' => 'password']); ?>
            </div>
            <div class="InfoInput">
              <img src="../public/img/Icon/Black/lock.svg" alt="Lock">
              <?= $form->input('passwordVerif', 'Confirmez Mot de passe', ['type' => 'password']); ?>
            </div>
          </div>
            <button class="sinscrire font20 policeCHAKRA">S'inscrire</button>
        </form>
      </div>
    </div>

    <div class="signIn">
      <p class="TitreSignUp-In font40 CHAKRABold">Se Connecter</p>
      <div class="FormSignIn">
        <form method="post">
          <div class="InfoInput">
            <img src="../public/img/Icon/White/mail.svg" alt="Mail">
            <?= $form->input('email', 'Adresse Email', ['type' => 'email']); ?>
          </div>
          <div class="InfoInput">
            <img src="../public/img/Icon/White/lock.svg" alt="Lock">
            <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
          </div>
          <button class="Connected font20 policeCHAKRA">Se Connecter</button>
        </form>
      </div>
    </div>

  </div>

</div>