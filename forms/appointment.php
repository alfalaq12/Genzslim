<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set email tujuan
    $to = "bintangal.falag@gmail.com";
    $subject = "Online Appointment Form";

    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['date']);
    $department = htmlspecialchars($_POST['department']);
    $doctor = htmlspecialchars($_POST['doctor']);
    $message = htmlspecialchars($_POST['message']);

    // Buat isi pesan
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Appointment Date: $date\n";
    $email_content .= "Department: $department\n";
    $email_content .= "Doctor: $doctor\n";
    $email_content .= "Message:\n$message\n";

    // Header untuk dari dan balasan
    $headers = "From: $email";

    // Kirim email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request method.";
}
?>