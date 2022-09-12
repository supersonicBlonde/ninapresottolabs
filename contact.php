<?php 
$current = 'contact';
$title = 'Nina Presotto | Let\'s talk about your project';
require('header.php');

require_once 'vendor/autoload.php';

$form = new Formr\Formr();
$form->required = '*';

// check if the form has been submitted
if ($form->submitted())
{
    // get our form values and assign them to a variable
    $data = $form->validate('Name, Email, Comments');

    // show a success message if no errors
    if($form->ok()) {
        $form->success_message = "Thank you, {$data['name']}!";
        $headers = 'From: contact@ninapresotto.com' . "\r\n" .
        'Reply-To: '.$data["email"].'' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        mail(
          'contact@ninapresotto.com',
          'A new message from ninapresotto.com',
          'name'.$data['name']."\r\nmessage:".$data['comments']."\r\nemail: ".$data['email'],
          $headers
        );
    }
}
?>
<section class="panel py-md-5 py-3" id="contact-section">
  <div class="section-content">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
          <h2 class="headline uppercase">Say Hello</h2>
          <p>Do you have something in mind you want to talk about ?</p>
          <div class="inputs">
            <?php 
              $form->create_form('Name, Email, Comments|textarea');
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
<?php 
require('footer.php');
?>