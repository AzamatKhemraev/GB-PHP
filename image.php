<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css" />
    <title>slider</title>
</head>
<body>

    <div class="container">

        <header>
            <a href="index.php">Вернуться в галерею</a>
        </header>

        <main>
            <div class="image">
                <?php
                include_once("sqlconnect.php");

                $idImage = $_GET['id'];
                $sqlImg = "SELECT * FROM gallery WHERE id='$idImage'";
               
                if (mysqli_query($connect, $sqlImg)) {
                    $image = mysqli_fetch_assoc(mysqli_query($connect, $sqlImg));
                }
                ?>

                <img src="images/<?= $image['name'] ?>">
            </div>
        </main>
    </div>
</body>
</html>