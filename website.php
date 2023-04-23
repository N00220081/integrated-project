<!DOCTYPE html>
<html lang="en">
<?php
require_once "./etc/config.php";
$bottomStory = Story::findAllLimit(2, 9);
$rightStory = Story::findAllLimit(2, 7);
$crimeStories = Story::findAllLimit(6,0);
$politicNIStories = Story::findAllLimit(2,13);
$politicStories = Story::findAllLimit(1,12);
$lastestStory = Story::findAllLimit(1,6);
$politicLargeStory = Story::findAllLimit(1,11);
$newsStories = Story::findAllLimit(4,16);

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
    <link rel="stylesheet" href="css/topPage.css">
    <link rel="stylesheet" href="css/section3.css">
    <link rel="stylesheet" href="css/section2.css">
    <link rel="stylesheet" href="css/section4.css">
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

    <!-- TOP SECTION -->
    <div class="topPage">
        <div class="container">
            <div class="width-12">
                <div class="newsHeading">
                    <h1>Lastest Stories</h1>
                </div>
            </div>
            <!-- MIDDLE BLOCK -->
            <div class="width-9">

                <?php
            foreach($lastestStory as $story) { ?>
                <?php $category = Category::findbyId($story->category_id); ?>
                <div class="mainStory">
                    <div class="largeStory">
                        <div class="image">
                        <a href="story_show.php?id=<?= $story->id ?>"><img src="<?= $story->image;?>" /></a>
                        </div>
                        <div class="content">
                            <h6><?= $category->name; ?></h6>
                            <a href="story_show.php?id=<?= $story->id ?>"><h2><?= $story->headline; ?></h2></a>
                            <a href="story_show.php?id=<?= $story->id ?>"><h4><?= $story->sub_heading; ?></h4></a>
                            <a href="#"><h5>By <?= $story->author; ?></h5></a>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
            <!-- RIGHT BLOCK -->
            <div class="width-3">
                <?php
            foreach($rightStory as $story) { ?>
                <?php $category = Category::findbyId($story->category_id); ?>
                <div class="rightStory">
                    <div class="mediumStory">
                        <div class="image">
                        <a href="story_show.php?id=<?= $story->id ?>"><img src="<?= $story->image;?>" /></a>
                        </div>
                        <div class="content">
                            <h6><?= $category->name; ?></h6>
                            <a href="story_show.php?id=<?= $story->id ?>"><h3><?= $story->headline; ?></h3></a>
                            <a href="story_show.php?id=<?= $story->id ?>"><h5>By <?= $story->author; ?></h5></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- BOTTOM BLOCK -->
            <?php
            foreach ($bottomStory as $story) { ?>
            <?php $category = Category::findbyId($story->category_id); ?>
            <div class="width-6">
                <div class="bottomStory">
                    <div class="noImgStory">
                        <h6><?= $category->name; ?></h6>
                        <a href="story_show.php?id=<?= $story->id ?>"><h4><?= $story->headline; ?></h4></a>
                        <a href="story_show.php?id=<?= $story->id ?>"><h5>By <?= $story->author; ?></h5></a>
                    </div>
                </div>
            </div>
            <?php } ?>





        </div>
    </div>

    <!-- SECTION 2 -->
    <div class="section2">
        <div class="container">
            <div class="width-12">
                <div class="newsHeading">
                    <h1>Crime</h1>
                </div>
            </div>
            <!-- CRIME STORIES -->
            <?php
            foreach ($crimeStories as $story) { ?>
            <?php $category = Category::findbyId($story->category_id); ?>
            <div class="width-4">
                <div class="crimeStories">
                    <div class="mediumStory">
                        <div class="image">
                        <a href="story_show.php?id=<?= $story->id ?>"><img src="<?= $story->image;?>" /></a>
                        </div>
                        <div class="content">
                        <a href="story_show.php?id=<?= $story->id ?>"><h3><?= $story->headline; ?></h3></a>
                        <a href="story_show.php?id=<?= $story->id ?>"><h4><?= $story->sub_heading; ?></h4></a>
                        <a href="story_show.php?id=<?= $story->id ?>"><h5>By <?= $story->author; ?></h5></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- SECTION 3 -->
    <div class="section3">
        <div class="container">
            <div class="width-12">
                <div class="newsHeading">
                    <h1>Politics</h1>
                </div>
            </div>

            <div class="width-8">

                <?php
            foreach($politicLargeStory as $story) { ?>
                <?php $category = Category::findbyId($story->category_id); ?>
                <div class="mainStory">
                    <div class="largeStory">
                        <div class="image">
                        <a href="story_show.php?id=<?= $story->id ?>"><img src="<?= $story->image;?>" /></a>
                        </div>
                        <div class="content">
                            <h6><?= $category->name; ?></h6>
                            <a href="story_show.php?id=<?= $story->id ?>"><h2><?= $story->headline; ?></h2></a>
                            <a href="story_show.php?id=<?= $story->id ?>"><h4><?= $story->sub_heading; ?></h4></a>
                            <a href="story_show.php?id=<?= $story->id ?>"><h5>By <?= $story->author; ?></h5></a>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>

            <div class="width-4">
                <div class="rightStories">

                    <?php
                    foreach($politicStories as $story) { ?>
                    <?php $category = Category::findbyId($story->category_id); ?>
                    <div class="mediumStory">
                        <div class="image">
                        <a href="story_show.php?id=<?= $story->id ?>"><img src="<?= $story->image;?>" /></a>
                        </div>
                        <div class="content">
                        <a href="story_show.php?id=<?= $story->id ?>"><h3><?= $story->headline; ?></h3></a>
                        <a href="story_show.php?id=<?= $story->id ?>"><h5>By <?= $story->author; ?></h5></a>
                        </div>
                        <?php } ?>

                        <?php
                    foreach ($politicNIStories as $story) { ?>
                        <?php $category = Category::findbyId($story->category_id); ?>
                        <div class="noImageStory">
                            <div class="content">
                            <a href="story_show.php?id=<?= $story->id ?>"><h3><?= $story->headline; ?></h3></a>
                            <a href="story_show.php?id=<?= $story->id ?>"><h5>By <?= $story->author; ?></h5></a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>


            </div>
        </div>

        <!-- SECTION 4 -->
        <div class="section4">
            <div class="container">
                <div class="width-12">
                    <div class="newsHeading">
                        <h1>News</h1>
                    </div>
                </div>
                <?php
            foreach ($newsStories as $story) { ?>
                <?php $category = Category::findbyId($story->category_id); ?>
                <div class="width-3">
                    <div class="newsStories">
                        <div class="smallStory">
                            <div class="image">
                            <a href="story_show.php?id=<?= $story->id ?>"><img src="<?= $story->image;?>" /></a>
                            </div>
                            <div class="content">
                                <h6><?= $category->name; ?></h6>
                                <a href="story_show.php?id=<?= $story->id ?>"><h2><?= $story->headline; ?></h2></a>
                                <a href="story_show.php?id=<?= $story->id ?>"><h4><?= $story->sub_heading; ?></h4></a>
                                <a href="story_show.php?id=<?= $story->id ?>"><h5>By <?= $story->author; ?></h5></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
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
                        <p>NEWSLETTER</p>
                        <p>CONTACT US</p>
                        <p>CUSTOMER SERVICE</p>
                        <p>CAREERS</p>
                        <p>SITEMAP</p>
                        <p>ABOUT US</p>
                        <p>MORE</p>
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