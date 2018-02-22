<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Aliens Abducted Me - Report an Abduction</title>
    <meta charset = "utf-8">
</head>
<body>

<h2>Aliens Abducted Me - Report an Abduction</h2>

<?php #Script 1.1 - report.php

    $first_name = filter_input(INPUT_POST, 'first_name');
    $last_name = filter_input(INPUT_POST, 'last_name');
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    $when_happen = $_POST['when_happen'];
    $how_many = $_POST['how_many'];
    $how_long = $_POST['how_long'];
    $describe = $_POST['describe'];
    $what_do = $_POST['what_do'];
    $seen_fluffy = filter_input(INPUT_POST, 'seen_fluffy');
    $comments = $_POST['comments'];


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!$first_name == ' ') {
        echo "<p>ERROR! You must enter a vaild first name</p>";
}
    if (!$last_name) {
        $error_lname = "ERROR! You must enter a valid last name";
}
    if (!$email) {
        $error_email = "ERROR! You must enter a valid email address";
}
    if (!$seen_fluffy) {
        $error_fluffy = "ERROR! Please let us know if you have seen our dear little Fluffy (we really miss him)!";
        }
}

else {

         echo "<p>Thanks for submitting the form <strong> $first_name $error_fname</strong>  <strong>$last_name $error_lname </strong>.</p><p>You were abducted on <strong> $when_happen </strong> and gone for <strong> $how_long </strong>.</p><p>You said there were <strong> $how_many </strong> of them.</p><p>And they <strong>$what_do</strong>.</p><p>You described them as <strong> $describe </strong>.</p><p>Did you see Fluffy? You answered: <strong> $seen_fluffy $error_fluffy </strong></p><p>Your other comments were: <strong> $comments </strong></p><p>We will contact you at <strong> $email $error_email </strong> if we have any relevant news.</p>";

}
?>

</body>
</html>
