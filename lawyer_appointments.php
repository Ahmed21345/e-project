<!DOCTYPE html>
<html lang="en">

<head>
    <?php $page = 'appointment' ?>
    <title>Lawyer-Appointments</title>
    <?php include "layout/header.php";
    if (empty($_SESSION['user']) && !isset($_SESSION['user'])) {
        header('Location:signin.php');
    }

    $database  = new Database();

    $id = $_GET['lawyer_id'];
    $lawyerName = $_SESSION['user']['name'];
    $query = "SELECT A.id AS id, U.name AS `name`, A.date AS `date`, A.description AS `description` FROM `appoinments` A
                    JOIN `users` U ON U.id = A.user_id         
                    WHERE A.lawyer_id = $id";

    $appoinments = $database->query($query);
    $database->close();
    ?>


<body>
    <div class="wrapper">
        <?php include "layout/nav.php" ?>
        <br><br>
        <div class="container">
            <div class="section-header">
                <h2>Appointments</h2>
            </div>

            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col"> Id </th>
                        <th scope="col"> Client Name </th>
                        <th scope="col"> Lawyer Name </th>
                        <th scope="col"> Date </th>
                        <th scope="col"> Description </th>
                    </tr>
                </thead>
                <tbody>


                    <?php foreach ($appoinments as $appoinment) : ?>
                        <tr>
                            <td> <?php echo $appoinment['id'] ?> </td>
                            <td> <?php echo $appoinment['name'] ?> </td>
                            <td> <?php echo $lawyerName ?> </td>
                            <td> <?php echo $appoinment['date'] ?> </td>

                            <td>
                                <center>
                                    <div class="user_describe">
                                        <center>
                                            <?php echo $appoinment['description'] ?>
                                        </center>
                                    </div>
                                </center>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>

        <br><br><br><br><br>
        <?php include "layout/footer.php" ?>

    </div>
</body>

</html>