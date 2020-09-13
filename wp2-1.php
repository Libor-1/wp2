<?php
$auto = filter_input(INPUT_POST, 'auta');
$spz = filter_input(INPUT_POST, 'spz');
$submit = filter_input(INPUT_POST, 'submit');
$types = array('osobní', 'nákladní', 'autobus', 'karavan', 'trolejbus');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (isset($submit)) { ?>
typ: <?=$auto ?><br>
SPZ: <?=$spz ?>
<?php

} else { ?>

<form action="wp2-1.php" method="post">
    Typ vozidla: <select name="auta" id="auta">
<?php foreach ($types as $type) { ?>
    <option value="<?= $type ?>"><?= $type ?></option>
   
   <?php
} ?>

</select>
<br>

SPZ: <input type="text" name="spz"><br>
     <input type="submit" name="submit" value="odeslat">

</form>

<?php
} ?>



</body>
</html>
