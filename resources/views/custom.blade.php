<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom</title>
</head>
<body>
    <p>Custom</p>
    <?php echo $msj;?>
    <?= $msj; ?>
    <h1>{{ $msj }} </h1> <!-- BLADE nos permite usar comodines para imprimir variables -->
    <h2>edad {{ $edad }}</h2>
</body>
</html>