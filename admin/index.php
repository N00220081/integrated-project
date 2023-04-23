<?php
require_once '../etc/config.php';
try {
    $stories = Story::findAll();
}
catch (Exception $ex) {
    die($ex->getMessage());
}
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/styles.css" />
        <title>Stories - Admin</title>
    </head>
    <body class="container">
        <h1>Stories - Admin</h1>
        <p><a class="btn bg-primary" href="story_create.php">Create</a></p>
        <?php if (count($stories) === 0) { ?>
            <p>There are no stories.</p>
        <?php } else { ?>
            <table class="stories"> 
                <thead>
                    <tr>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($stories as $s) { ?>
                        <tr>
                            <td><a href="../story_show.php?id=<?= $s->id ?>"><?= $s->category_id ?></a></td>
                            <td><?= Story::findById($s->id)->headline ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
    </body>
</html>