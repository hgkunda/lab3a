<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Aliens Abducted Me - Report an Abduction</title>
    <meta charset = "utf-8">
</head>
<body>

<h2>Aliens Abducted Me - Report an Abduction</h2>

<?php #Script 1.0 - report.php

    $first_name = filter_input(INPUT_POST, 'first_name');
    $last_name = filter_input(INPUT_POST, 'last_name');
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    $when_happen = $_POST['when_happen'];
    $how_many = $_POST['how_many'];
    $how_long = $_POST['how_long'];
    $describe = $_POST['describe'];
    $what_do = $_POST['what_do'];
    $seen_fluffy = filter_input(INPUT_POST, 'seen_fluffy'];
    $comments = $_POST['comments'];

  echo "<p>Thanks for submitting the form <strong>$first_name <?nbsp> $last_name</strong>.</p><p>You were abducted on <strong>$when_happen</strong> and gone for <strong>$how_long</strong>.</p><p>You said there were <strong>$how_many</strong> of them.</p><p>And they <strong>$what_do</strong>.</p><p>You described them as <strong>$describe</strong>.</p><p>Did you see Fluffy? You answered: <strong>$seen_fluffy</strong></p><p>Your other comments were: <strong>$comments</strong></p><p>We will contact you at <strong>$email</strong> if we have any relevant news.</p>";

  // $to = 'hkunda@mail.dccc.edu';
  // $subject = 'Alien Abduction Report Submission';
  // $body = "The following is an alien abduction form submission from $first_name $last_name: \n\n First name: $first_name \n Last name: $last_name \n Email: $email. \n Abducted on: $when_happen. \n Time gone for: $how_long. \n Number of aliens: $how_many. \n What the aliens did: $what_do. \n Description of aliens: $describe. \n Did they see Fluffy? $seen_fluffy. \n Other comments: $comments.";
  //
  //   mail($to, $subject, $body);



?>


</body>
</html>
