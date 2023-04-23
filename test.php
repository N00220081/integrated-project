<?php
require_once './etc/config.php';

try {
    $id = 52;
    $wine = Wine::findById($id);
    echo "<pre>";
    print_r($wine);
    echo "</pre>";
    $wine->delete();
    $w = Wine::findById($id);
    if ($w === null) {
        echo "The wine has been deleted";
    }
}

catch (Exception $e) {
    echo $e->getMessage();
}


?>