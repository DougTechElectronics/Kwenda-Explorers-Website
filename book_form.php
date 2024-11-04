<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    // Insert data into database
    $request = "INSERT INTO book_form(name, email, phone, address, location, guests, arrivals, leaving) VALUES('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";
    mysqli_query($connection, $request);

    // Email notification
    $to = 'info@kwendaexplorers.servetechmw.com';
    $subject = 'New Booking Notification';
    $message = "A new booking has been made:\n\nName: $name\nEmail: $email\nPhone: $phone\nAddress: $address\nLocation: $location\nGuests: $guests\nArrival Date: $arrivals\nLeaving Date: $leaving";
    $headers = 'From: your_email@example.com'; // Replace with a valid email address

    // Sending email
    if (mail($to, $subject, $message, $headers)) {
        session_start();
        $_SESSION['success_message'] = "Your Booking has been submitted successfully. We will contact you through your email and phone number.";
        header('Location: book.php');
        exit;
    } else {
        echo 'Failed to send email. Please contact support.';
    }

} else {
    echo 'Something went wrong. Please try again!';
}

?>
