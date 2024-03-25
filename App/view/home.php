<?php
require_once './App/model/currency.php';
require_once'./js/traitement.php';
$currencies = new Currency();
$currenciesData = $currencies->getAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header class="p-5 bg-success text-white text-center">
        <h1>Suit le cours de la crypto</h1>
    </header>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Crypto</th>
                        <th>Valeur</th>
                        <?php foreach($currenciesData as $c): ?>
                            <tr>
                              <td> <?php echo $c['name'] ?> </td>
                              <td> <?php echo $c['valueEUR'] ?> € </td>
                            </tr>
                        <?php endforeach; ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>