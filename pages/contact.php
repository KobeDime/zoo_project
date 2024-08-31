<?php
if (isset($_POST['submit'])) {
    unset($_POST['submit']);
    $feedbackTable = new Table('feedback');
    $_POST['visitor_id'] = $_SESSION['visitor_id'];
    $feedbackTable->insertInDatabase($_POST);
    header('Location:contact?msg=Feedback sent successfully');
}
$title = "Kobe Safari - Contact Us";
$content = loadTemplate('../templates/contact_template.php', []);
