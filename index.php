<!DOCTYPE html>
<html lang="en">

<head>
    <?php $page = 'index'; ?>
    <title>Lawyer-Home</title>
    <?php include "layout/header.php";
    $database  = new Database();
    $query = "SELECT * FROM services";
    $services = $database->query($query);

    $query = "SELECT U.id AS `id`, U.`name` AS `name`, L.image AS  `image`, S.`name` AS `service_name` 
                FROM users U
                JOIN lawyers L ON U.id = L.user_id
                JOIN services S 
                ON L.service_id = S.id LIMIT 4";
    $lawyers = $database->query($query);
    $database->close();
    ?>
</head>

<body>
    <div class="wrapper">


        <?php include "layout/nav.php" ?>


        <!-- Carousel Start -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/carousel-1.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">A passion for justice. The experience for win</h1>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/carousel-2.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">Experienced lawyers. Tailored approach</h1>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/carousel-3.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">Special needs require special lawyers</h1>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header">
                            <h2>We Are Kanun</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Kanun is a oline lawyers company who provides you with the best quality and highly experienced lawyers for your problems and cases.
                                We as Kanun company will solve your any problem within no time and that's how experienced we are.
                            </p>
                            <p>
                                We have a wide range of lawyers and day by day our company is growing as more and more highly experienced lawyers are joining us. we already have huge customer base and this is the right time for you to join if you are lawyer or if not then get yourself helped with our highly experienced lawyers and consultants.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header">
                    <h2>Lawyer Services</h2>
                </div>
                <div class="row">
                    <?php foreach ($services as $service) : ?>
                        <div class="col-lg-4 col-md-6">
                        <a href="lawyer.php?service=<?php echo $service['id']; ?>">
                            <div class="service-item">
                                <div class="service-icon">
                                    <h3><?php echo $service['name'] ?></h3>
                                </div>
                                <p class="mt-5"><?php echo $service['detail'] ?></p>
                            </div>
                        </a>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Feature Start -->
        <div class="feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="section-header">
                            <h2>Why Choose Us</h2>
                        </div>
                        <div class="row align-items-center feature-item">
                            <div class="col-5">
                                <div class="feature-icon">
                                    <i class="fa fa-gavel"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <h3>Best law practices</h3>
                                <p>
                                    We have the most highly experienced lawyer with international work experiences as well.
                                </p>
                            </div>
                        </div>
                        <div class="row align-items-center feature-item">
                            <div class="col-5">
                                <div class="feature-icon">
                                    <i class="fa fa-balance-scale"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <h3>Efficiency & Trust</h3>
                                <p>
                                    We know how to deal with every problem related to any issues so you can trust on us.
                                </p>
                            </div>
                        </div>
                        <div class="row align-items-center feature-item">
                            <div class="col-5">
                                <div class="feature-icon">
                                    <i class="far fa-smile"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <h3>Results you deserve</h3>
                                <p>
                                    You will surely get the desired results since this is the only aim of our company.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="feature-img">
                            <img src="img/feature.jpg" alt="Feature">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


         <!-- Lawyers -->
         <div class="team">
                    <div class="container">
                        <div class="row">
                            <?php foreach ($lawyers as $lawyer) : ?>
                                <a href="lawyer_profile.php?lawyer_id=<?php echo $lawyer['id'] ?>">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="team-item">
                                            <div class="team-img">
                                                <img src="img/<?php echo $lawyer['image'] ?>" alt="Team Image">
                                            </div>
                                            <div class="team-text">
                                                <h2> <?php echo $lawyer['name'] ?> </h2>
                                                <p> <?php echo $lawyer['service_name'] ?> </p>
                                                <div class="team-social">
                                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <!-- /Lawyers -->

        <?php include "layout/footer.php" ?>



    </div>
</body>

</html>