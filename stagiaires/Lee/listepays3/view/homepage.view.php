<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listepays</title>
</head>
<body>
    <h1>Liste de Pays</h1>
    <h2>Liste de tous les pays du monde</h2>
    <h3>Nombre de pays : <?=$countCountries?> </h3>
    <?php 
    if(!empty($_GET['pg']) && ctype_digit($_GET['pg'])){
        $pageActu =(int)$_GET['pg'];
    }else{
        $pageActu = 1;
    }
    
        require_once "../model/paginationModel.php";

        $i=1;
    do{
      ?>
    <a href ="?pg=<?=$i?>"><?=$i?></a>
    <?php
        $i++;
    }while($i <= $page);
    echo "</br>";

$begin =($pageActu-1)*$nbByPage;
$end = $begin + $nbByPage;
while($begin < $end){
foreach($allCountries as $pays):
        ?>

<p><?=$pays['id']."  ".$pays['nom']?></p> 
<?php
$begin++;
if ($begin == $end){
    break;
}

endforeach;    
}
$i=1;
do{
  ?>
<a href ="?pg=<?=$i?>"><?=$i?></a>
<?php
    $i++;
}while($i <= $page);
echo "</br>";

    ?>
</body>
</html>