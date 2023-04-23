<?php
require "./etc/config.php";

try{

    if ($_SERVER["REQUEST_METHOD"] !== "GET") {
        throw new Exception("Invalid request method");
    }
    if (!array_key_exists('id', $_GET)) {
        throw new Exception("Invalid request--missing id");
    }
    $id = $_GET['id'];
    $story = Story::findById($id);
    if ($story === null) {
        throw new Exception("Invalid request--unknown id");
    }
}
catch (Exception $ex) {
    die($ex->getMessage());
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/bdd01f4019.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/story.css">

</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="width-1">
                <div class="panel">
                    <a href="#"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></a>

                </div>
            </div>

            <div class="width-1">
                <div class="heading">
                    <h1>NEWS</h1>
                </div>
            </div>

            <div class="width-10">
                <div class="categories">
                    <a href="#">
                        <h3>CRIME</h3>
                    </a>
                    <a href="#">
                        <h3>FINANCIAL</h3>
                    </a>
                    <a href="#">
                        <h3>WORLD</h3>
                    </a>
                    <a href="#">
                        <h3>POLITICS</h3>
                    </a>
                    <a href="#">
                        <h3>BUSINESS</h3>
                    </a>
                    <a href="#">
                        <h3>IRELAND</h3>
                    </a>
                    <a href="#">
                        <h3>ENTERTAINMENT</h3>
                    </a>
                    <a href="#">
                        <h3>TECHNOLOGY</h3>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="title">
        <div class="container">
            <div class="width-12">
                <?php $category = Category::findbyId($story->category_id); ?>
                    <div class="heading">
                            <h1><?= Story::findById($story->id)->headline; ?></h1>
                            <h2><?= Story::findById($story->id)->sub_heading;?></h2>
                    </div>
            </div>
        </div>
    </div>

    <div class="imageSection">
        <div class="container">
            <div class="width-12">
                <div class="bigImage">
                    <img src="<?= $story->image;?>" />
                </div>
                <div class="authorTime">
                    <div class="author">
                    <h4>By <?= $story->author; ?></h4></div>
                    <div class="time">
                    <h4 style="margin-right: 7px;"><?=$story->published_date?></h4>
                    <h4><?=$story->published_time?></h4>
                </div>
                <div class="articleText">
                    <p><?=$story->article?></p>
                </div>
                </div>
            </div>
        </div>
    </div>

        <!-- FOOTER -->
        <div class="footer">
        <div class="container">
            <div class="width-12">
                <div class="headingSocials">
                <div class="footerHeading">
                    <h1>NEWS</h1>
                </div>

                <div class="socials">
                    <a href="#"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a>
                    <a href="#"><i class="fa-brands fa-tiktok" style="color: #ffffff;"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a>
                </div>
            </div>

            <div class="width-12">
                <div class="footerInfo">
                    <div class="infos">
                        <a href="#"><p>NEWSLETTER</p></a>
                        <a href="#"><p>CONTACT US</p></a>
                        <a href="#"><p>CUSTOMER SERVICE</p></a>
                        <a href="#"><p>CAREERS</p></a>
                        <a href="#"><p>SITEMAP</p></a>
                        <a href="#"><p>ABOUT US</p></a>
                        <a href="#"><p>MORE</p></a>
                    </div>
                </div>
            </div>

            <div class="width-12">
                <div class="copyrights">
                    <div class="detail">
                        <i class="fa-regular fa-copyright" style="color: #ffffff;"></i>
                        <p style="color: #ffffff;">NEWS MEDIA COMPANY</p>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>

</body>

</html>