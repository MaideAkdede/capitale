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
                'capital' =>'',
                'flag' => 'https://upload.wikimedia.org/wikipedia/commons/5/51/Flag_of_North_Korea.svg',
            ]
    ];
    $countrySelected = '';
    if(isset($_GET['country'])){
        $countrySelected = $_GET['country'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Pays </h1>

        <form action="">

            <label for="country">Choisissez un pays : </label>

            <select name="country" id="country">
                <?php foreach($countries as $country => $countryDatas): ?>
                    <option value="<?= $country; ?>" > <?= mb_strtoupper($country); ?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="Quelle est la capitale ?">
        </form>
    <?php if($countrySelected && $countries[$countrySelected]['capital'] != ''): ?>
            <p>La capitale de <?= ucwords($countrySelected) ;?> est <?= ucwords($countries[$countrySelected]['capital']) ;?> </p>
            <img src=" <?= $countries[$countrySelected]['flag'];?>" alt="" width="400px" height="auto">
    <?php else: ?>
        <p>La capital de <?= ucwords($countrySelected) ;?> n'est pas désignée.</p>
    <?php endif; ?>
</body>
</html>