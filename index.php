<?php
    $countries = [
            'belgique' => [
                    'capital' => 'bruxelles',
                    'flag' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Belgium.svg/220px-Flag_of_Belgium.svg.png'
            ],
            'france' => [
                    'capital' => 'paris',
                    'flag' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/220px-Flag_of_France.svg.png',
            ],
            'espagne' => [
                'capital' => 'madrid',
                'flag' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/220px-Flag_of_Spain.svg.png',
            ],
            'corée du nord' => [
                'capital' => 'Pyongyang',
                'flag' => 'https://upload.wikimedia.org/wikipedia/commons/5/51/Flag_of_North_Korea.svg',
            ],
            'chine' => [
                'capital' =>'pékin',
                'flag' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Flag_of_the_People%27s_Republic_of_China.svg',
            ],
            'allemagne' => [
                'capital' => 'berlin',
                'flag' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/1280px-Flag_of_Germany.svg.png'
            ],
            'algérie' => [
                'capital' => 'alger',
                'flag' => 'https://upload.wikimedia.org/wikipedia/commons/7/77/Flag_of_Algeria.svg'
            ],
            'états-unis' => [
                'capital' => 'berlin',
                'flag' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/1280px-Flag_of_Germany.svg.png'
            ],
            'turquie' => [
                'capital' => 'ankara',
                'flag' => 'https://upload.wikimedia.org/wikipedia/commons/b/b4/Flag_of_Turkey.svg'
            ],
            'viêt nam' => [
                'capital' => 'hanoï',
                'flag' => 'https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Vietnam.svg'
            ],

    ];
    ksort($countries);

    $countrySelected = '';
    if(array_key_exists($countrySelected, $countries)){

    } else {
        $errorMsg = "Le pays demandé n'est pas disponible ";
    }
    if(isset($_GET['country'])){
        $countrySelected = $_GET['country'];
    } else {
        $errorMsg;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <meta name="description" content="">
    <meta name="keywords" content="pays, capitale, php, array">
    <meta name="author" content="AKDEDE Maide">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>PAYS & CAPITALES</title>

</head>
<body>
    <h1>PAYS & CAPITALES</h1>
<div id="choose">
        <form action="">

            <label for="country">Choisissez un pays : </label>

            <select name="country" id="country">
                <?php foreach($countries as $country => $countryDatas): ?>
                    <option value="<?= $country; ?>" <?= $country === $countrySelected ? 'selected' : '' ;?> > <?= mb_strtoupper($country); ?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="Quelle est la capitale ?">
        </form>
</div>
    <?php if($countrySelected && $countries[$countrySelected] != '' ): ?>
        <p id="sentence">La capitale de <span><?= ucwords($countrySelected) ;?></span> est <span><?= ucwords($countries[$countrySelected]['capital']) ;?></span> </p>
            <img src=" <?= $countries[$countrySelected]['flag'];?>" alt="" width="400px" >
    <?php else: ?>
        <p id="error"><?= $errorMsg ; ?></p>
    <?php endif; ?>
</body>
</html>