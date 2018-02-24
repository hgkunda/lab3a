<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Aliens Abducted Me - Report an Abduction</title>
    <meta charset = "utf-8">

</head>
<body>

<h2>Aliens Abducted Me - Report an Abduction</h2>

<?php #Script 1.1 - report.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if (isset($_POST['first_name'],  $_POST['last_name'], $_POST['email'], $_POST['seen_fluffy'])) {

      $first_name = filter_input(INPUT_POST, 'first_name');
      $last_name = filter_input(INPUT_POST, 'last_name');
      $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
      $when_happen = $_POST['when_happen'];
      $how_many = $_POST['how_many'];
      $how_long = $_POST['how_long'];
      $describe = $_POST['describe'];
      $what_do = $_POST['what_do'];
      $seen_fluffy = filter_input(INPUT_POST, 'seen_fluffy');
      $comments = $_POST['comments'];


  if (!$first_name == NULL) {
         $error_fname = "ERROR! You must enter a vaild first name";
}
    if (!$last_name == NULL) {
        $error_lname = "ERROR! You must enter a valid last name";
}
    if (!$email == NULL) {
        $error_email = "ERROR! You must enter a valid email address";
}
    if (!$seen_fluffy == NULL) {
        $error_fluffy = "ERROR! Please let us know if you have seen our dear little Fluffy (we really miss him)!";
        }

//I found the typos with the errors all having {error_fname} instead of the matching error name. Also caught the missing parentheses.

   if (!isset($error_fname)) { $error_fname = ''; }
   if (!isset($error_lname)) { $error_lname = ''; }
   if (!isset($error_email)) { $error_email = ''; }
   if (!isset($error_fluffy)) { $error_fluffy = ''; }
   if (!isset($first_name)) { $first_name = ''; }
   if (!isset($last_name)) { $last_name = ''; }
   if (!isset($email)) { $email = ''; }
   if (!isset($when_happen)) { $when_happen = ''; }
   if (!isset($how_long)) { $how_long = ''; }
   if (!isset($how_many)) { $how_many = ''; }
   if (!isset($describe)) { $describe = ''; }
   if (!isset($what_do)) { $what_do = ''; }
   if (!isset($seen_fluffy)) { $seen_fluffy = ''; }
   if (!isset($comments)) { $comments = ''; }

 }

?>
<form>

  <label for="first_name">*First Name:</label>
  <input type="text" name="first_name" id="first_name" size="20"  placeholder="first name" value="<?php print $first_name; ?>">
  <?php print $error_fname; ?>


  <label for="last_name">*Last Name:</label>
  <input type="text" name="last_name" id="last_name" placeholder="last name" size="20" value="<?php print $last_name; ?>">
  <?php print $error_lname ?>


  <label for="email">*What is your email address?</label>
  <input type="text" name="email" id="email" size="20" placeholder="email address" value="<?php print $email; ?>">
  <?php print $error_email ?>


  <label for="when_happen">When did it happen?</label>
  <input type="date" name="when_happen" id="when_happen" size="20" value="<?php print $when_happen; ?>">


  <label for="how_long">How long were you gone?</label>
  <input type="text" name="how_long" id="how_long" placeholder="hours, days, years?" size="20" value="<?php print $how_long; ?>">


  <label for="how_many">How many did you see?</label>
  <input type="number" name="how_many" id="how_many" placeholder="Enter a number" size="20" value="<?php print $how_many; ?>">


  <label for="describe">Describe them:</label>
  <input type="text" name="describe" id="describe" placeholder="what did they look like?" size="30" value="<?php print $describe; ?>">


  <label for="what_do">What did they do to you?</label>
  <input type="text" name="what_do" id="what_do" placeholder="describe what they did" size="30" value="<?php print $what_do; ?>">
  <br>

  <div>

      <label for="seen_fluffy" id="seen_fluffy">*Have you seen my dog Fluffy?</label>
      <input type="radio" name="seen_fluffy" value="<?php if($seen_fluffy == "yes") echo "checked"; ?>">Yes
      <input type="radio" name="seen_fluffy" value="<?php if($seen_fluffy == "no") echo "checked"; ?>">No
      <?php print $error_fluffy ?>

  </div>

  <br>
  <br>

  <img src="fluffy.jpg" alt="fluffy">

  <br>

  <p class="bottom_align"><label for="comments" class="label_align">Anything else you want to add?</label>
      <textarea name="comments" id="comments" placeholder="Your comments..." rows="5" cols="20"><?php print $comments; ?></textarea></p>

  <br>
  <p>*Required Fields</p>
  <br>

  <input type="submit" id="submit" value="Report Abduction ">
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

if (isset($_POST['first_name'],  $_POST['last_name'], $_POST['email'], $_POST['seen_fluffy'])) {

    $first_name = filter_input(INPUT_POST, 'first_name');
    $last_name = filter_input(INPUT_POST, 'last_name');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $when_happen = $_POST['when_happen'];
    $how_many = $_POST['how_many'];
    $how_long = $_POST['how_long'];
    $describe = $_POST['describe'];
    $what_do = $_POST['what_do'];
    $seen_fluffy = filter_input(INPUT_POST, 'seen_fluffy');
    $comments = $_POST['comments'];

}

    if (!$first_name == NULL) {
        $error_fname = "ERROR! You must enter a vaild first name";
    }
    if (!$last_name == NULL) {
        $error_lname = "ERROR! You must enter a valid last name";
    }
    if (!$email == NULL) {
        $error_email = "ERROR! You must enter a valid email address";
    }
    if (!$seen_fluffy == NULL) {
        $error_fluffy = "ERROR! Please let us know if you have seen our dear little Fluffy (we really miss him)!";
    } else {

        echo "<p>Thanks for submitting the form <strong> $first_name $error_fname</strong>  <strong>$last_name $error_lname </strong>.</p><p>You were abducted on <strong> $when_happen </strong> and gone for <strong> $how_long </strong>.</p><p>You said there were <strong> $how_many </strong> of them.</p><p>And they <strong>$what_do</strong>.</p><p>You described them as <strong> $describe </strong>.</p><p>Did you see Fluffy? You answered: <strong> $seen_fluffy $error_fluffy </strong></p><p>Your other comments were: <strong> $comments </strong></p><p>We will contact you at <strong> $email $error_email </strong> if we have any relevant news.</p>";
    }
}

?>


</body>
</html>