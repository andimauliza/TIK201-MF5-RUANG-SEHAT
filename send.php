<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $noWa = $_POST['noWa']
    header("location:https://api.whatsapp.com/send?phone=$noWa&text=Nama:%20$name%20%0DEmail:$email%20%0DSubject:$subject%20%0DPesan:$message")
} else {
    echo "
        <script>
            window.location=history.go(-1);
        </script>
    ";
}

?>