<?php 
$title = 'Nina Presotto | Parlon de votre projet';
$current = 'contact';
require('header.php'); 
$form = new Formr\Formr();
$form->required = '*';

// check if the form has been submitted
if ($form->submitted())
{
    // get our form values and assign them to a variable
    $data = $form->validate('Nom, Email, Message');

    // show a success message if no errors
    if($form->ok()) {
        $form->success_message = "Thank you, {$data['name']}!";
        $headers = 'From: contact@ninapresotto.com' . "\r\n" .
        'Reply-To: '.$data["email"].'' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        mail(
          'contact@ninapresotto.com',
          'A new message from ninapresotto.com',
          'name'.$data['name']."\r\nmessage:".$data['message']."\r\nemail: ".$data['email'],
          $headers
        );
    }
}
?>
  <section class="panel" id="contact-section" data-section-name="contact">
      <div class="section-content">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-12 offset-md-3">
              <h2 class="headline uppercase">Contact</h2>
              <p>Vous avez un projet en tête ? Parlons-en.</p>
              <div class="inputs">
                <?php 
                 $form->create_form('Nom, Email, Message|textarea');
                 $form->messages(); 
                 ?> 
                <!-- <form method="post" action="inc/contactform.php">
                  <div>
                  <input type="text" placeholder="your name" required/>
                  </div>
                  <div>
                  <input type="email" id="input-email" required placeholder="example@test.com"/>
                  </div>
                  <div>
                    <textarea placeholder="your message" rows="8" required></textarea>
                  </div>
                  <div>
                    <button class="w-50" style="background-color:#5e565a;" type="submit">LOGIN</button>
                  </div>
                </form> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>