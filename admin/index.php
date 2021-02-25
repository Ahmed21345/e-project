<!DOCTYPE html>
<?php $page = 'index' ?>
<html class="loading" lang="en" data-textdirection="ltr">

<?php include 'vendor/head.php' ?>

<?php
$database = new Database();
$query = "SELECT * FROM `users` WHERE `role` = 'CUSTOMER'";
$users = $database->query($query);
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
                    <h2>Users</h>
                </center>
                <div class="mb-5">
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <th scope="row"> <?php echo $user['id'] ?> </th>
                                <td><?php echo $user['name'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td><?php echo $user['password'] ?></td>
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