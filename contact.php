<!DOCTYPE html>
<html lang="en">

<head>
    <?php $page = 'contact' ?>
    <title>Lawyer-ContactUs</title>
    <?php include "layout/header.php" ?>

<body>
    <div class="wrapper">
        <?php include "layout/nav.php" ?>
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header">
                    <h2>Contact Us</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="contact-text">
                                    <h2>Location</h2>
                                    <p>54-Dar-ul-aman Cooperative Housing Society, Baloch Colony Flyour,Shahrah-e-Faisal, Umer Colony, Karachi City, Sindh.</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fa fa-phone-alt"></i>
                                <div class="contact-text">
                                    <h2>Phone</h2>
                                    <p>+92 21659078</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fa fa-envelope"></i>
                                <div class="contact-text">
                                    <h2>Email</h2>
                                    <p>kanun@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" required="required" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" style="height: 240px;" placeholder="Message" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn" type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <?php include "layout/footer.php" ?>

    </div>
</body>

</html>