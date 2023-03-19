<?php
    session_start();
    include "./phpEngine/config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shion House</title>
    <!-- bootstrap 5 css1 js1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--  font awesome 5.15.4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="./asset/libs/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <!-- animartion css1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <!-- start header section -->
    <header>
        <!-- start nav bar section -->
        <nav id="navbar" class="navbar navbar-white justify-content-between navbar-expand-lg ">
            <div class="container-fluid">
                <div class=" d-lg-flex align-items-center nav_left_side ">
                    <a href="#" class="me-5">
                        <img src="./asset/img/logos/logo.png.webp" width="200px" alt="logo">
                    </a>
                    <div class="align-items-center nav_group">
                        <div class="d-flex justify-content-end align-items-center nav_group_btn">
                            <div class="d-flex justify-content-end align-items-center nav_group_btn-group">
                                <span class="d-lg-none text-white">Menu</span>
                                <button class="navbar-toggler nav_btn" data-bs-target="#mynav" data-bs-toggle="collapse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </button>
                            </div>

                        </div>

                        <div id="mynav" class="navbar-collapse collapse">
                            <ul class="navbar-nav fw-semibold text-uppercase">
                                <li class="nav-item"><a href="#" class="nav-link">home</a></li>
                                <li class="nav-item"><a href="#shop" class="nav-link">shop</a></li>
                                <li class="nav-item"><a href="#about_us" class="nav-link">about</a></li>
                                <li class="nav-item"><a href="#blog" class="nav-link">blog</a></li>
                                <li class="nav-item"><a href="#content_us" class="nav-link">content</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" nav_links_group">
                    <ul class="d-flex list-unstyled">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="javascript:void(0)" class="search-btn"><i class="fas fa-search"></i></a></li>
                        <?php
                            if(isset($_SESSION["id"])){
                                $userImg = "SELECT img FROM users WHERE id = {$_SESSION['id']}";
                                $resultImg = mysqli_query($conn , $userImg);
                                if(mysqli_num_rows($resultImg) > 0){
                                    while($userImgRow = mysqli_fetch_assoc($resultImg)){
                        ?>
                            <li><a href="javascript:void(0)" class="ovarflow-hidden"><img src="./asset/img/avators/<?php echo $userImgRow["img"]  ?>" class="rounded-circle " width="35px" height="35px" alt=""></a></li>
                        <?php
                                    }
                                }
                            }

                        ?>

                    </ul>
                </div>
            </div>


        </nav>
    <!-- end nav bar section -->
    <!-- start header banner section -->

        <div class="banner_section px-5">
            <div id="banner-carousel" class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <div class="banner_content_container b_1">
                                <div class="text-center banner_content">
                                    <h1 class="text-uppercase">fashion <br> changing <br>always</h1>
                                    <a href="#" class="fw-semibold slide_btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="banner_content_container b_2">
                                <div class="text-center banner_content">
                                    <h1 class="text-uppercase">fashion <br> changing <br>always</h1>
                                    <a href="#" class="fw-semibold slide_btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="banner_content_container b_3">
                                <div class="text-center banner_content">
                                    <h1 class="text-uppercase">fashion <br> changing <br>always</h1>
                                    <a href="#" class="fw-semibold slide_btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- end header banner section -->
    </header>

    <!-- End header section -->

    <!-- start product type section -->
    <section class="product_type py-5 px-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="product_types_item">
                    <div class="product_type_content p_1">
                        <div class="product_type_btn">
                            <a href="#" class="fw-semibold slide_btn">Shop Now</a>
                        </div>
                        <div class="product_img_container">
                            <img src="./asset/img/products/popular1.png.webp" width="100%" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="product_types_item">
                    <div class="product_type_content p_2">
                        <div class="product_type_btn">
                            <a href="#" class="fw-semibold slide_btn">Shop Now</a>
                        </div>
                        <div class="product_img_container">
                            <img src="./asset/img/products/popular2.png.webp" width="100%" alt="popular2">
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="product_types_item">
                    <div class="product_type_content p_3">
                        <div class="product_type_btn">
                            <a href="#" class="fw-semibold slide_btn">Shop Now</a>
                        </div>
                        <div class="product_img_container">
                            <img src="./asset/img/products/popular3.png.webp" width="100%" alt="popular3">
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="product_types_item">
                    <div class="product_type_content p_4">
                        <div class="product_type_btn">
                            <a href="#" class="fw-semibold slide_btn">Shop Now</a>
                        </div>
                        <div class="product_img_container">
                            <img src="./asset/img/products/popular4.png.webp" width="100%" alt="popular4">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End Product type section -->

    <!-- Start New Arrival Section -->
    <section id="shop" class="new_arrival px-5">
        <!-- start title  -->
        <div class=" text-center section_title_container">
            <h1 class="text-uppercase">New <br> Arrival</h1>
        </div>
        <!-- end title -->
        <div class="show_product_container">
            <div class="container show_product_item">
                <div class="row">
                    <?php
                        $sql = "SELECT * FROM products";
                        $result = mysqli_query( $conn , $sql );
                        if(mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)){
                               # echo $row["id"];
                    ?>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="product_item">
                            <?php
                            
                                if(isset($_SESSION["id"])){
                                    if($_SESSION["role"] === "1"){
                            ?>
                                        <div class="edit_btn">
                                            <a href="javascript:void(0)"><i class="fas fa-edit"></i></a>
                                        </div>
                            <?php
                                    }else {
                            ?>
                                        <div></div>
                            <?php
                                    }
                                }
                            ?>
                            
                            <div class="product_img">
                                <img src="./asset/img/products/<?php echo $row['img'] ;?>" width="100%" alt="arrival1">
                            </div>
                            <div class="text-center product_content_container">
                                <div class="product_content">
                                    <h5><?php echo $row["name"]; ?></h5>
                                    <span class="fw-semibold">$ &nbsp;<span><?php echo $row["price"]; ?></span></span>
                                </div>
                                <div class="product_edit_form">
                                    <form action="./phpEngine/edit.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <div class="form-group mb-2">
                                            <input type="text" name="product_name" id="product_name" class="form-control rounded-0 border text-center" value="<?php echo $row['name']; ?>" placeholder="<?php echo $row['name']; ?>">
                                        </div>
                                        <div class="form-group mb-2">
                                            <input type="text" name="product_price" id="product_price" class="form-control rounded-0 border text-center" value="<?php echo $row['price'] ;?>" placeholder="<?php echo $row['price'] ;?>">
                                        </div>
                                        <div class="form_btn_group">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 mb-2">
                                                    <div class="d-grid">
                                                        <button type="reset" class="btn btn-warning fw-semibold text-uppercase rounded-0 border-0">Reset</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 mb-2">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-success fw-semibold text-uppercase rounded-0 border-0">Submit</button>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="d-grid">
                                                        <a href="./phpEngine/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger fw-semibold text-uppercase rounded-0 border-0">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End New Arrival Section -->

    <!-- Start About Us Section -->
    <section id="about_us" class="px-5 about_us_section">
        <div class="about_us_content_container">
            <div class="text-center about_us_content">
                <h1>collection houses <br> our first-ever</h1>
                <div class="mt-5 about_us_btn">
                    <a href="#" class="fw-semibold slide_btn">About Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->

    <!-- Start Established Section -->
    <section class="p-5 established_section">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="p-4 d-flex justify-content-start align-items-end stablished_content_container e_1">
                    <div class="text-start established_content ">
                        <a href="#" class="established_letter">Established fact that by the readable content</a>
                        <div class="mt-2 about_us_btn">
                            <a href="#" class="fw-semibold slide_btn">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="p-4 d-flex justify-content-start align-items-end stablished_content_container e_2 ">
                    <div class="text-start established_content ">
                        <a href="#" class="established_letter">Established fact that by the readable content</a>
                        <div class="mt-2 about_us_btn">
                            <a href="#" class="fw-semibold slide_btn">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Established Section -->

    <!-- start Service section -->
    <section class="p-5 service_section ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="p-3 text-start  service_content_container">
                        <div class="mb-3 service_img">
                            <img src="./asset/img/icons/services1.svg" alt="services1">
                        </div>
                        <span class="d-block h5 fw-semibold">Fast & Free Delivery</span>
                        <span class="d-block text-muted fw-medium">Free delivery on all orders</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="p-3 text-start  service_content_container">
                        <div class="mb-3 service_img">
                            <img src="./asset/img/icons/services2.svg" alt="services2">
                        </div>
                        <span class="d-block h5 fw-semibold">Fast & Free Delivery</span>
                        <span class="d-block text-muted fw-medium">Free delivery on all orders</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="p-3 text-start  service_content_container">
                        <div class="mb-3 service_img">
                            <img src="./asset/img/icons/services3.svg" alt="services3">
                        </div>
                        <span class="d-block h5 fw-semibold">Fast & Free Delivery</span>
                        <span class="d-block text-muted fw-medium">Free delivery on all orders</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="p-3 text-start  service_content_container">
                        <div class="mb-3 service_img">
                            <img src="./asset/img/icons/services4.svg" alt="services4">
                        </div>
                        <span class="d-block h5 fw-semibold">Fast & Free Delivery</span>
                        <span class="d-block text-muted fw-medium">Free delivery on all orders</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end service section -->

    <!-- Start About Us Section -->
    <!-- End About Us Section -->
    <section id="blog" class="py-5 blog_section">
        <!-- start title  -->
        <div class=" text-center section_title_container">
            <h1 class="text-uppercase">Our Story</h1>
        </div>
        <!-- end title -->
        <div class="mb-5 container">
            <p class="blog_para">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
            <img src="./asset/img/backgrounds/about1.png.webp" width="100%" alt="about1">
        </div>
        <!-- start title  -->
        <div class=" text-center section_title_container">
            <h1 class="text-uppercase">Our Story</h1>
        </div>
        <!-- end title -->
        <div class="mb-5 container">
            <p class="blog_para">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
            <img src="./asset/img/backgrounds/about2.png.webp" width="100%" alt="about2">
        </div>
    </section>
    <!-- start content Section -->
    <section id="content_us" class="py-4 content_section">
        <div class="content_label">
            <div class="container">
                <div class="map_container">
                    <div class="google_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121900.71524771767!2d96.39063670813796!3d17.29636708830298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c17d9e2f53a2c3%3A0x2d4862a313558dcd!2sZalataw%20Glamping%20Resort!5e0!3m2!1smy!2smm!4v1679104638097!5m2!1smy!2smm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="mt-4 content_box_container">
                    <h3>Get In Touch</h3>
                    <div class="mt-5 content_box">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 mb-4">
                                <form action="./phpEngine/messageadd.php" method="post">
                                    <div class="row">
                                        <div class="col-12 mb-4 form-group">
                                            <textarea name="message" id="message" cols="30" rows="10" class="form-control rounded-0 border" placeholder="Enter Message"></textarea>
                                        </div>
                                        <div class="col-lg-6 col-mb-12 mb-4 form-group">
                                            <input type="text" name="name" id="name" class="form-control rounded-0 border" placeholder="Enter Your Name">
                                        </div>
                                        <div class="col-lg-6 col-mb-12 mb-4 form-group">
                                            <input type="email" name="email" id="email" class="form-control rounded-0 border" placeholder="Enter Your email">
                                        </div>
                                        <div class="col-lg-12 mb-4 form-group">
                                            <input type="text" name="subject" id="subject" class="form-control rounded-0 border" placeholder="Enter Subject">
                                        </div>
                                        <div class="col-lg-2 col-md-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn rounded-0 text-uppercase">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-12 mb-2">
                                <div class="contact_address_box">
                                    <div class="mb-4 d-flex justify-content-start align-items-center contact_address">
                                        <span class="d-block me-3 "><i class="fas fa-home "></i></span>
                                        <div>
                                            <h5>Buttonwood, California.</h5>
                                            <span class="">Rosemead, CA 91770</span>
                                        </div>
                                    </div>
                                    <div class="mb-4 d-flex justify-content-start align-items-center contact_address">
                                        <span class="d-block me-3 "><i class="fas fa-phone "></i></span>
                                        <div>
                                            <h5>+1 253 565 2365</h5>
                                            <span class="">Rosemead, CA 91770</span>
                                        </div>
                                    </div>
                                    <div class="mb-4 d-flex justify-content-start align-items-center contact_address">
                                        <span class="d-block me-3 "><i class="fas fa-envelope "></i></span>
                                        <div>
                                            <h5>support@colorlib.com</h5>
                                            <span class="">Rosemead, CA 91770</span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if(isset($_SESSION["id"])){
                                ?>
                                    <div class=" log_out_box">
                                         <div class="col-12">
                                             <div class="d-grid">
                                                 <a href="./phpEngine/logout.php" class="btn  rounded-0">Log Out</a>
                                             </div>
                                         </div>
                                    </div>
                                        
                                <?php
                                    }else{
                                ?>
                                <div class=" log_in_box">
                                    <h3 class="mb-4">Log In</h3>
                                    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
                                    <!-- <form action="./phpEngine/login.php" method="post"> -->
                                        <div class="row">
                                            <div class="col-lg-12 col-mb-12 mb-4 form-group">
                                                <input type="email" name="email" id="email" class="form-control rounded-0 border" placeholder="Enter Your Email">
                                            </div>
                                            <div class="col-lg-12 col-mb-12 mb-4 form-group">
                                                <input type="password" name="password" id="password" class="form-control rounded-0 border" placeholder="Enter Your password">
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn rounded-0 text-uppercase">submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php
                                        if(isset($_REQUEST["email"])){
                                            $email = $_REQUEST["email"];
                                            $password = $_REQUEST["password"];
                                            $valsql = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";
                                            $valresult = mysqli_query( $conn , $valsql);
                                            if(mysqli_num_rows($valresult) > 0){
                                                while ($valrow = mysqli_fetch_assoc($valresult)){
                                                    // print_r($valrow);
                                                    $_SESSION["id"] = $valrow["id"];
                                                    $_SESSION["name"] = $valrow["name"];
                                                    $_SESSION["password"]= $valrow["password"];
                                                    $_SESSION["role"] = $valrow["role"];
                                                    echo "<script>window.location.href='http://localhost/shion-house/'</script>";
                                                }
                                            }else{
                                        ?>
                                                <div class="alert alert-danger mt-4 alert_box ">Incorrect Password</div>
                                        <?php
                                            }
                                        }
                                    ?>
                                </div>
                                <?php
                                    }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End content section -->
    <!-- start footer section  -->
    <footer class="px-5 pt-5 footer_section">
        <div class="elfsight-app-82f81b05-b268-45da-8c0e-03fd4e186564"></div>
        <div class="footer_section_container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-2 px-4 py-5">
                    <div class="footer_section_content_container">
                        <div class="footer_content_heading">
                            <div class="footer_logo_img">
                                <img src="./asset/img/logos/logo2_footer.png.webp" width="170px" alt="logo">
                            </div>
                            
                        </div>
                        <div class="footer_content">
                            <p class="mt-3 mb-5 text-start">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis cumque esse a. Nihil, explicabo repudiandae. Cum quod unde sunt nam velit in nulla. Quisquam architecto, dolorum iusto quos suscipit libero?
                            </p>
                            <div class="d-flex footer_links ">
                                <a href="#" class=""><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class=""><i class="fab fa-twitter"></i></a>
                                <a href="#" class=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 p-5">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                            <div class="footer_section_content_container">
                                <div class="footer_content_heading">
                                    <h6>Quick links</h6>
                                </div>
                                <div class="footer_content">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Image Licensin</a></li>
                                        <li><a href="#">Style Guide</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                            <div class="footer_section_content_container">
                                <div class="footer_content_heading">
                                    <h6>Shop Category</h6>
                                </div>
                                <div class="footer_content">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Image Licensin</a></li>
                                        <li><a href="#">Style Guide</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                            <div class="footer_section_content_container">
                                <div class="footer_content_heading">
                                    <h6>Pertners</h6>
                                </div>
                                <div class="footer_content">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Image Licensin</a></li>
                                        <li><a href="#">Style Guide</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                            <div class="footer_section_content_container">
                                <div class="footer_content_heading">
                                    <h6>Get in touch</h6>
                                </div>
                                <div class="footer_content">
                                    <ul class="list-unstyled">
                                        <li><a href="#">(89) 982-278 356</a></li>
                                        <li><a href="#">demo@colorlib.com</a></li>
                                        <li><a href="#">67/A, Colorlib, Green road, NYC</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <!-- end footer section -->
    <!-- start modal area -->
    <div class="search_modal_container">
        <div class="search_box_container">
            <input type="text" name="search" id="search_box" class="search_box form-control" placeholder="Search" autocomplete="off"/>
            <a href="javascript:void(0)"><i class="fas fa-search"></i></a>
        </div>
    </div>
    <!-- end modal area -->


    <!-- bootstrap 5 css1 js1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- jQuery 3.6.1 -->
    <script src="./asset/libs/jquery3-6-3.js"></script>
    <!-- owl carousel -->
    <script src="./asset/libs/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <!-- elf site js 1 -->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <!-- custom js -->
    <script src="./js/home.js"></script>

</body>
</html>