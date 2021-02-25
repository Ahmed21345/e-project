
<?php
include_once 'layout/header.php';
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    if (isset($_POST['day']) && isset($_POST['detail'])) {
        $lawyer_id = $_POST['lawyer_id'];
        $user_id = $_SESSION['user']['id'];
        $day = $_POST['day'];
        $detail = $_POST['detail'];

        $database = new Database();
  
        $query = "INSERT INTO `appoinments` (`user_id`, `lawyer_id`, `description`, `date`) VALUES ( $user_id, $lawyer_id, '$detail', '$day')";
        $result = $database->insert($query);

        $database->close();

        header("Location: index.php");
    }
}
else{
    header("Location: signin.php?err=Please%20login%20and%20continue%20again");
}