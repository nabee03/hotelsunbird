<?php
if(isset($_POST['submit'])) {
    $to = 'nabinadhikari222@gmail.com';
    $subject = 'Booking Information';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $adult = $_POST['adult'];
    $children = $_POST['children'];
    $room_type = $_POST['roomtype'];
    $special_request = $_POST['specialrequest'];

    // Compose the message
    $message = "Name: $name\n"."Email: $email\n"."Check-in: $checkin\n"."Check-out: $checkout\n"."Adults: $adult\n"."Children: $children\n"."Room Type: $room_type\n"."Special Request: $special_request\n";
    
    // Send the email
    if(mail($to, $subject, $message)) {
        echo "<script>window.alert('Booking Successful!');</script>";
        echo "<script>window.open('booking.html','_self');</script>";
    } else {
        echo "<script>window.alert('Error in booking process, please email us at tulsiraut342@gmail.com');</script>";
        echo "<script>window.open('booking.html','_self');</script>";
    }
}
?>