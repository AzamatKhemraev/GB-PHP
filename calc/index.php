<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;900&family=Syncopate:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <title>less6</title>
  </head>
  <body>
    <div class="container">
      <form action="server.php" method="POST" id="calc">
        <div class="wrapper">
          <div class="group">
            <input type="text" name="num1" required />
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Число 1</label>
          </div>
          <div class="select">
            <select name="operation">
              <option value="sum">+</option>
              <option value="diff">-</option>
              <option value="mult">*</option>
              <option value="div">/</option>
            </select>
          </div>
          <div class="group">
            <input type="text" name="num2" required />
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Число 2</label>
          </div>
          <input type="submit" value="Отправить" />
        </div>
      </form>
      <form action="#" method="POST" id="calc2">
        <div class="wrapper">
          <div class="group">
            <input type="text" name="num1" required />
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Число 1</label>
          </div>
          <div class="group">
            <input type="text" name="num2" required />
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Число 2</label>
          </div>

          <div class="radio">
            <input
              type="submit"
              name="math"
              value="+"
              style="clear: both; float: left; padding: 2px; margin: 2px"
            />
            <input
              type="submit"
              name="math"
              value="-"
              style="float: left; padding: 2px; margin: 2px"
            />
            <input
              type="submit"
              name="math"
              value="*"
              style="clear: both; float: left; padding: 2px; margin: 2px"
            />
            <input
              type="submit"
              name="math"
              value="/"
              style="float: left; padding: 2px; margin: 2px"
            />
          </div>
        </div>
      </form>
      <?
        $a = (int)($_POST['num1']);
        $b = (int)($_POST['num2']);
        $oper = $_POST['math'];
        if(isset($_POST['math'])) {
          if($a==="" || $b==="") {
            $result = "Введите корректные переменные";
          }
          else {
            switch ($oper) {
              case '+':
                $result = $a + $b;
                break;
              case '-':
                $result = $a - $b;
                break;
              case '*':
                $result = $a * $b;
                break;
              case '/':
                if ($b == 0) {
                  $result = "На ноль делить нельзя!";
                }
                else {
                  $result = $a / $b;
                }	
                break;
            }
          }
        }
    
      ?>
      <div style="clear: both; font-weight: bold; font-size: 16px">
            Результат:
            <?=$result ?>
          </div>
    </div>
  </body>
</html>
