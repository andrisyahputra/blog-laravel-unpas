<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Halaman Home</h1>
    <ul>
        <li>
            <img src="image/<?= $gambar ?>" alt="<?= $nama ?>.jpg" width="200">
        </li>
        <li><?= $nama ?></li>
        <li><?= $email ?></li>
    </ul>

    <script src="js/script.js"></script>
</body>
</html>
