<div class="background-image" style="background-image: url(images/h2.jpg);"></div>
   <div class="header">
   <img class="logo" src="images/favicon.png" alt="logo" width="120" height="75">
   <div class="header-right">
   <a class="active" href="index.php">HOME</a>
   <a href="contact.php">CONTACT</a>
   <a href="about.php">ABOUT US</a>
   <a href="register.php">REGISTER</a>
  </div>
</div>

<link rel="stylesheet" href="css/register.css" type="text/css" >



<div class="container">
  <form id="contact" action="" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
	      </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
	<div class="email" align="center">
  </form>
  <form method="GET" action="mailto:priyaprem08@gmail.com" >
<input type="hidden" name="subject" value="test">
<input type="hidden" name="body" value="test">
<input type="submit" value="Send Email">
</form>
</div>
</div>
