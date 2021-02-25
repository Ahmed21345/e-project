<!DOCTYPE html>
<?php $page = 'appoinment' ?>
<html class="loading" lang="en" data-textdirection="ltr">

<?php include 'vendor/head.php' ?>

<?php
$database = new Database();
$query = "SELECT  A.id AS id, U.name AS `name`, US.name AS lawyer_name , A.`date` AS `date`, A.description AS detail
FROM appoinments A
JOIN users U ON U.id = A.user_id
JOIN lawyers L ON A.lawyer_id = L.user_id 
JOIN `users` US ON A.lawyer_id = US.id";
$appoinments = $database->query($query);

$database->close();
?>


<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <?php include 'vendor/nav.php' ?>



    <div class="app-content content">
        <div class="content-wrapper">
            <!-- <div class="content-wrapper-before"></div> -->
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <!-- <h3 class="content-header-title">Buttons</h3> -->
                </div>

            </div>

            <!-- tbl User -->
            <div class="content-body">
                <br>
                <center>
                    <h2>Appoinments</h>
                </center>
                <div class="mb-5">
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Client Name</th>
                            <th scope="col">Lawyer Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($appoinments as $appoinment) : ?>
                            <tr>
                                <th scope="row"> <?php echo $appoinment['id'] ?> </th>

                                <td><?php echo $appoinment['name'] ?></td>
                                <td><?php echo $appoinment['lawyer_name'] ?></td>
                                <td><?php echo $appoinment['date'] ?></td>
                                <td>
                                    <div class="user_describe">
                                        <?php echo $appoinment['detail'] ?>
                                    </div>
                                </td>
                            <?php endforeach ?>
                            </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <?php include 'vendor/footer.php' ?>

</body>

</html>