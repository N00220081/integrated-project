<?php
require "../etc/config.php";

try {
    $stories = Story::findAll();
    $categories = Category::findAll();
}
catch (Exception $e) {
    die($e->getMessage());
}
?>
<html>
    <head>
        <title>Admin - Create new story</title>
        <link rel="stylesheet" href="../css/main.css" />
    </head>
    <body class="container">
        <h1>Admin - Create new story</h1>
        <form method="POST" action="story_store.php" enctype="multipart/form-data">
        <label for="headline">Headline</label>
            <textarea id="headline" 
                      name="headline" 
                      placeholder="Headline..."></textarea>
            <div class="error"></div>

            <label for="sub_heading">Sub Heading</label>
            <textarea id="sub_heading" 
                      name="sub_heading" 
                      placeholder="Sub Heading..."></textarea>
            <div class="error"></div>

            

            <label for="article">Article</label>
            <textarea id="article" 
                      name="article" 
                      placeholder="Article..."></textarea>
            <div class="error"></div>

            <label for="author">Author</label>
            <input type="text" 
                   id="author" 
                   name="author" 
                   placeholder="Author..." 
                   value="" 
                   />
            <div class="error"></div>
            <label for="id">Category</label>

            <select id="category_id" name="category_id">
                <?php foreach ($categories as $c) { ?>
                    <option value="<?= $c->id ?>">
                        <?= $c->name ?>
                    </option>
                <?php } ?>
            </select>
            <div class="error"></div>

            <label for="published_date">Date published</label>

            <input type="date" id="published_date" name="published_date"
            value="2023-07-22"
            min="2023-01-01" max="2023-12-31">
            <div class="error"></div>

            <label for="published_time">Time published</label>
            <input type="time" id="published_time" name="published_time"
            min="00:00" max="23:59" required>
            <div class="error"></div>

            <label for="image">Image</label>
            <input type="file" id="image" name="image" class="btn" />
            <div class="error"></div>

            <input type="submit" class="btn bg-success" value="Store">
        </form>
    </body>
</html>