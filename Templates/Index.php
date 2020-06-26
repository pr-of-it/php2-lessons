<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <h1>Товары</h1>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Наименование</th>
            <th>Цена</th>
        </tr>
        <?php foreach ($this->products as $product) : ?>
        <tr>
            <td><?php echo $product->id; ?></td>
            <td>
                <a href="/index.php?ctrl=Product&id=<?php echo $product->id; ?>">
                    <?php echo $product->title; ?>
                </a>
            </td>
            <td><?php echo sprintf('%0.2f', $product->price); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h1>Услуги</h1>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Наименование</th>
            <th>Цена</th>
        </tr>
        <?php foreach ($this->services as $service) : ?>
            <tr>
                <td><?php echo $service->id; ?></td>
                <td>
                    <a href="/index.php?ctrl=Service&id=<?php echo $service->id; ?>">
                        <?php echo $service->title; ?>
                    </a>
                </td>
                <td><?php echo sprintf('%0.2f', $service->price); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
