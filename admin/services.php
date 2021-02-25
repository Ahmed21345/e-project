<!DOCTYPE html>
<?php $page = 'service' ?>
<html class="loading" lang="en" data-textdirection="ltr">

<?php include 'vendor/head.php' ?>

<?php
$database = new Database();
$query = "SELECT * FROM  `services`";
$services = $database->query($query);
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
                    <h2>Services</h>
                </center>
                <div class="mb-5">
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($services as $service) : ?>
                            <tr>
                                <th scope="row"> <?php echo $service['id'] ?> </th>
                                <td><?php echo $service['name'] ?></td>
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