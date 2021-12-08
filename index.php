<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css" />
    <title>slider</title>
  </head>
  <body>
    <div class="slider">
    <?php
        include_once("sqlconnect.php");

        $sql = "SELECT * FROM gallery";
        $table = mysqli_query($connect, $sql);
        while ($data = mysqli_fetch_assoc($table)) :
    ?>
      <div class="slider__item" style="background-image: url(images/<?= $data['name'] ?>)">
          <a href='image.php?id=<?= $data['id'] ?>' class="city_name"><?= $data['content'] ?></a>
      </div>
      
      <?php endwhile; ?>
    </div>

    <script src="main.js"></script>
  </body>
</html>
