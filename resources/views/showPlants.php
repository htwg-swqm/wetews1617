<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Plants</title>
</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: meiglspe
 * Date: 19/09/16
 * Time: 10:31
 */
$plant1 = new \App\Plant();
$plant1->setDescription("Blaue Blume");
$plant1->setPlantLocation("Balkon");
?>

<h1><?php echo $plant1->getDescription()?></h1>
<p><?php echo $plant1->getPlantLocation()?></p>


</body>
</html>
