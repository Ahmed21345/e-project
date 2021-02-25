<!DOCTYPE html>
<?php $page = 'lawyer' ?>
<html class="loading" lang="en" data-textdirection="ltr">

<?php include 'vendor/head.php' ?>

<?php
$database = new Database();
$query = "SELECT L.id AS id, U.`name` AS `name`, U.email AS email, S.`name` AS service ,U.`password` AS `password`, L.detail AS detail, R.`name` AS region
FROM  `lawyers` L
JOIN `users` U ON L.user_id = U.id
JOIN `region` R ON L.region_id = R.id
JOIN `services` S ON S.id = L.service_id
WHERE `role` = 'LAWYER'";
$lawyers = $database->query($query);
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
                    <h2>Lawyers</h>
                </center>
                <div class="mb-5">
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Service</th>
                            <th scope="col">Region</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Detail</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lawyers as $lawyer) : ?>
                            <tr>
                                <th scope="row"> <?php echo $lawyer['id'] ?> </th>
                                <td><?php echo $lawyer['name'] ?></td>
                                <td><?php echo $lawyer['service'] ?></td>
                                <td><?php echo $lawyer['region'] ?></td>
                                <td><?php echo $lawyer['email'] ?></td>
                                <td><?php echo $lawyer['password'] ?></td>
                                <td>
                                    <div class="user_describe">
                                        <?php echo $lawyer['detail'] ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <?php include 'vendor/footer.php' ?>

</body>

</html>