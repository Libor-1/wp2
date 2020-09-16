<?php
$year = filter_input(INPUT_POST, 'year');
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
Typ: <?= $auto ?><br>
SPZ: <?= $spz ?><br>
Rok: <?= $year ?>
<?php
if ($year >= 2010) { ?>
Moderní
<?php
} elseif ($year >= 1991) { ?>
Ojeté
<?php
} else { ?>
Veterán 
<?php
}

} else { ?>

<form action="wp2-2.php" method="post">
Typ vozidla: <select name="auta" id="auta">
<?php foreach ($types as $type) { ?>
<option value="<?= $type ?>"><?= $type ?></option>
<?php
} ?>

</select>
<br>
SPZ:        <input type="text" name="spz"><br>
Rok výroby: <input type="numbe" name="year" id="year" max="2020" min="1886"><br>
            <input type="submit" name="sumbit" value="Odeslat">
            
</form>

<?php
} ?>


</body>
</html>