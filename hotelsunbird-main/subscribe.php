if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    
    if ($email === false) {

        <!--  Handle invalid email address -->

        echo "<script>window.alert('Invalid email address');</script>";
        echo "<script>window.open('index.html','_self');</script>";
    } else {

        <!-- Send email -->
        $to = "nabinadhikari222@gmail.com";
        $subject = "New Subscription";
        $message = "New subscription from: $email";
        mail($to, $subject, $message);

        echo "<script>window.alert('Thank you for subscribing!');</script>";
        echo "<script>window.open('index.html','_self');</script>";
    }
}
