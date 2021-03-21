<?php
header('Content-Type: application/json');
include 'db_config.php';
//ToDo:
// send confirmation email to sender
// send email to admin
// save to database
// return json

//echo rand(1,100)%2==0 ? json_encode(['success' =>  true])  : json_encode(['success' =>  false, 'error' => 'Ups, coś poszło nie tak, spróbuj ponownie!']);

$errors = [];
$data = [];
$date_now = date("Y-m-d H:i:s");

if (empty($_POST['firstname'])) {
    $errors['firstname'] = 'Wpisz imię.';
}

if (empty($_POST['lastname'])) {
    $errors['lastname'] = 'Wpisz nazwisko.';
}

if (empty($_POST['phone'])) {
    $errors['phone'] = 'Wpisz numer telefonu.';
}

if (empty($_POST['message'])) {
    $errors['message'] = 'Wpisz wiadomość.';
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Dziękujemy za wiadomość! Postaramy się wkrótce skontaktować!';

    $insert = $pdo -> prepare("INSERT INTO emails (`firstname`, `lastname`, `phone`, `message`, `send_date`) VALUES (?,?,?,?,?)") -> execute( array($_POST['firstname'], $_POST['lastname'], $_POST['phone'], $_POST['message'], $date_now ) );

    $to = 'hr-test@hypercrew.pl';
    $subject = 'Wiadomość ze strony XYZ';

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $message = '<html>
    <body>
    Imię i nazwisko: <b>'. $_POST['firstname'] .' '. $_POST['lastname'] .'</b><br>
    Telefon: <b>'. $_POST['phone'] .'</b><br><br>
    Wiadomość: <br>'. 
    $_POST['message'] .'
    </body>
    </html>';
    
    mail($to, $subject, $message, $headers);
}

echo json_encode($data);