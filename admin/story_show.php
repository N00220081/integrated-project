<?php
require "../etc/config.php";
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
<html>
    <head>
        <title>Admin - Wine details</title>
        <link rel="stylesheet" href="../css/styles.css" />
    </head>
    <body class="container">
        <h1>Admin - Wine details</h1>
        <form method="POST">
            <input type="hidden" name="id" value="<?= $stories->id ?>" />
            <div class="row">
                <div class="column-2"> 
                    <label for="name">Name</label>
                    <input type="text" value="<?= $wine->name ?>" readonly />

                    <label for="year">Year</label>
                    <input type="text" value="<?= $wine->year ?>" readonly />

                    <label for="price">Price</label>
                    <input type="text" value="<?= $wine->price ?>" readonly />

                    <label for="description">Description</label>
                    <textarea readonly><?= $wine->description ?></textarea>

                    <label for="winery_id">Winery</label>
                    <input type="text" value="<?= Winery::findById($wine->winery_id)->name ?>" readonly />

                    <label for="grape_varieties">Grape varieties</label>
                    <input type="text" value="<?php foreach ($wine->getGrapeVarieties() as $gv) {echo $gv->variety . ", "; } ?>" readonly />
                </div>
                <div class="column-2"> 
                    <img scr="<?= APP_URL . '/uploads/' . $wine->image ?>" width="460px" />
                </div>
            </div>
            <p><a class="btn bg-warning" href="wine_edit.php?id=<?= $wine->id ?>">Edit</a><p>
            <button type="submit" 
                    class="btn bg-danger" 
                    formaction="wine_delete.php">Delete</button>
        </form>
    </body>
</html>