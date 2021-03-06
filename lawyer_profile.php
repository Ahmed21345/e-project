<!DOCTYPE html>
<html lang="en">

<head>
    <?php $page = 'lawyer'; ?>
    <title>Lawyer-Profile</title>
    <?php include "layout/header.php";
    $database  = new Database();

    $id = $_GET['lawyer_id'];

    $query = "SELECT S.id AS service_id, U.id AS `id`, L.user_id AS lawyer_id, U.`name` AS `name`, L.image AS  `image`, S.`name` AS `service_name`, R.`name` AS region_name, L.detail AS detail 
              FROM users U
              JOIN lawyers L ON U.id = L.user_id
              JOIN services S 
              ON L.service_id = S.id
              JOIN region R 
              ON R.id = L.region_id WHERE U.id = $id";

    $lawyers = $database->query($query);
    $database->close();
    ?>

<body>
    <div class="wrapper">
        <?php include "layout/nav.php" ?>
        <br><br>
        <?php foreach ($lawyers as $lawyer) { ?>
            <div class="container">
                <center>
                    <div class="section-header">
                        <h2> <?php echo $lawyer['name'] ?> </h2>
                    </div>
                </center>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card" style="width:250px;">
                            <img src="img/<?php echo $lawyer['image'] ?>" alt="Card image" style="width:100% ; height: 300px;">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div style="width:500px">
                            <p class="lawyer_profile">Service :<a href="lawyer.php?service=<?php echo $lawyer['service_id'] ?>"><Span> <?php echo $lawyer['service_name'] ?> </Span></a></p>
                            <p class="lawyer_profile">Location :<Span> <?php echo $lawyer['region_name'] ?> </Span></p>
                            <p class="lawyer_profile">Laywer Detail :</p>
                            <p class="detail">
                                <?php echo $lawyer['detail'] ?>
                            </p>
                        </div>
                    </div>
                    <?php if (empty($_SESSION['user']) || $_SESSION['user']['role'] == 'CUSTOMER') : ?>
                        <div class="col-sm-3 mb-5">
                            <form action="appoinment-post.php" method="POST">
                                <input class="celender form-control" type="date" name="day">
                                <input value="<?php echo $lawyer['lawyer_id'] ?>" type="hidden" name="lawyer_id">
                                <textarea class="form-control MassegeBox" name="detail" rows="5" placeholder="Describe." required></textarea>
                                <button class="button">Appointment</button>
                            </form>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        <?php }  ?>
        <?php include "layout/footer.php" ?>
    </div>
</body>

</html>