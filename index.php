<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style/main.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Catalog</title>
  </head>
  <body>
    <header class="header center">   
        <a href="registration.php" class="right__item">
            <svg class="right__item item" width="32" height="32" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.5 19.937C19 19.937 22.656 15.464 22.656 9.968C22.656 4.472 19 0 14.5 0C13.3631 0.0217413 12.2463 0.303398 11.2351 0.823397C10.2239 1.34339 9.34507 2.08794 8.66602 3C7.12663 4.99573 6.30819 7.45381 6.34399 9.974C6.34399 15.465 10 19.937 14.5 19.937ZM14.5 1.813C18 1.813 20.844 5.472 20.844 9.969C20.844 14.466 17.998 18.125 14.5 18.125C11.002 18.125 8.15603 14.465 8.15503 9.969C8.15403 5.473 11 1.813 14.5 1.813ZM20.844 18.125C20.6036 18.125 20.373 18.2205 20.203 18.3905C20.033 18.5605 19.9375 18.7911 19.9375 19.0315C19.9375 19.2719 20.033 19.5025 20.203 19.6725C20.373 19.8425 20.6036 19.938 20.844 19.938C22.526 19.9399 24.1386 20.6088 25.3279 21.7982C26.5172 22.9875 27.1861 24.6 27.188 26.282C27.1875 26.5221 27.0918 26.7523 26.922 26.9221C26.7522 27.0918 26.5221 27.1875 26.282 27.188H2.71997C2.47985 27.1875 2.24975 27.0918 2.07996 26.9221C1.91016 26.7523 1.81449 26.5221 1.81396 26.282C1.81608 24.6001 2.48517 22.9877 3.67444 21.7985C4.86371 20.6092 6.47608 19.9401 8.15796 19.938C8.39824 19.938 8.62868 19.8425 8.79858 19.6726C8.96849 19.5027 9.06396 19.2723 9.06396 19.032C9.06396 18.7917 8.96849 18.5613 8.79858 18.3914C8.62868 18.2215 8.39824 18.126 8.15796 18.126C5.99541 18.1279 3.92201 18.9875 2.39258 20.5164C0.863144 22.0453 0.00264777 24.1185 0 26.281C0.000794067 27.0019 0.287502 27.693 0.797241 28.2027C1.30698 28.7125 1.99811 28.9992 2.71899 29H26.282C27.0027 28.9989 27.6936 28.7121 28.2031 28.2024C28.7126 27.6927 28.9992 27.0017 29 26.281C28.9974 24.1187 28.1372 22.0457 26.6083 20.5168C25.0793 18.9878 23.0063 18.1276 20.844 18.125Z"
                    fill="#E8E8E8"
                />
            </svg>
        </a>
        <a href="cart.php" class="right__item">
          <svg class="right__item item" width="32" height="32" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M26.2009 29C25.5532 28.9738 24.9415 28.6948 24.4972 28.2227C24.0529 27.7506 23.8114 27.1232 23.8245 26.475C23.8376 25.8269 24.1043 25.2097 24.5673 24.7559C25.0303 24.3022 25.6527 24.048 26.301 24.048C26.9493 24.048 27.5717 24.3022 28.0347 24.7559C28.4977 25.2097 28.7644 25.8269 28.7775 26.475C28.7906 27.1232 28.549 27.7506 28.1047 28.2227C27.6604 28.6948 27.0488 28.9738 26.401 29H26.2009ZM6.75293 26.32C6.75293 25.79 6.91011 25.2718 7.20459 24.8311C7.49907 24.3904 7.91764 24.0469 8.40735 23.844C8.89705 23.6412 9.43594 23.5881 9.95581 23.6915C10.4757 23.7949 10.9532 24.0502 11.328 24.425C11.7028 24.7998 11.9581 25.2773 12.0615 25.7972C12.1649 26.317 12.1118 26.8559 11.9089 27.3456C11.7061 27.8353 11.3626 28.2539 10.9219 28.5483C10.4812 28.8428 9.96304 29 9.43298 29C9.08087 29.0003 8.73212 28.9311 8.40674 28.7966C8.08136 28.662 7.78569 28.4646 7.53662 28.2158C7.28755 27.9669 7.09001 27.6713 6.9552 27.3461C6.82039 27.0208 6.75098 26.6721 6.75098 26.32H6.75293ZM10.553 20.686C10.2935 20.6868 10.0409 20.6024 9.83411 20.4457C9.62727 20.2891 9.47758 20.0689 9.40796 19.819L4.57495 2.36401H1.18201C0.868521 2.36401 0.567859 2.23947 0.346191 2.01781C0.124523 1.79614 0 1.49549 0 1.18201C0 0.868519 0.124523 0.567873 0.346191 0.346205C0.567859 0.124537 0.868521 5.81268e-06 1.18201 5.81268e-06H5.46301C5.7225 -0.00080736 5.97504 0.0837201 6.18176 0.240568C6.38848 0.397416 6.53784 0.617884 6.60693 0.868006L11.4399 18.323H24.6179L29.001 8.27501H14.401C14.2428 8.27961 14.0854 8.25242 13.9379 8.19507C13.7904 8.13771 13.6559 8.05134 13.5424 7.94108C13.4288 7.83082 13.3386 7.69891 13.277 7.55315C13.2154 7.40739 13.1836 7.25075 13.1836 7.0925C13.1836 6.93426 13.2154 6.77762 13.277 6.63186C13.3386 6.4861 13.4288 6.35419 13.5424 6.24393C13.6559 6.13367 13.7904 6.0473 13.9379 5.98994C14.0854 5.93259 14.2428 5.90541 14.401 5.91001H30.814C31.0097 5.90996 31.2022 5.95866 31.3744 6.05172C31.5465 6.14478 31.6928 6.27926 31.7999 6.44301C31.9078 6.60729 31.9734 6.79569 31.9908 6.99145C32.0083 7.18721 31.9771 7.38424 31.9 7.565L26.495 19.977C26.4026 20.1876 26.251 20.3668 26.0585 20.4927C25.866 20.6186 25.641 20.6858 25.411 20.686H10.553Z"
                    fill="#E8E8E8"
                />
            </svg>
        </a>
    </header>
    <section class="fetured__items center">
      <br>
      <div class="future__item__cards">
        <?php
          include_once("./server/sqlconnect.php");
          $login = $_COOKIE['login'];
          $getUserIdSql = "SELECT id FROM users where email = '$login'";
          $q = mysqli_query($connect, $getUserIdSql);
          $tmp = mysqli_fetch_assoc($q);
          $user_id = $tmp['id'];

          $sql = "SELECT * FROM products";
          $table = mysqli_query($connect, $sql);
          while ($data = mysqli_fetch_assoc($table)) :
        ?>

        <div class="product_card">
          <a href="product.php?product_id=<?= $data['id'] ?>" class="product_card_img">
            <img src="img/catalog/<?= $data['src'] ?>" alt="" />
          </a>
          <div class="product_card_description">
            <a href="product.php?product_id=<?= $data['id'] ?>" class="product_name"><?= $data['product_description'] ?></a>
            <p class="product_description">
              Known for her sculptural takes on traditional tailoring,
              Australian arbiter of cool Kym Ellery teams up with Moda Operandi.
            </p>
            <span class="product_price">$<?= $data['price'] ?></span>
          </div>
          <button class="add_to_cart" onclick="addToCart(<?= $data['id'] ?>,1)">Add to cart</button>
        </div>

        <?php endwhile; ?>
      </div>
    </section>
    <footer class="footer center">
      <div class="footer__copyright"></div>
      <ul class="footer__social">
        <li class="footer__social__icon">
          <a href="#">
            <svg
              width="32"
              height="32"
              viewBox="0 0 32 32"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                class="fill_bg"
                d="M31.4506 0H0V32H31.4506V0Z"
                fill="white"
              />
              <path
                class="fill_icon"
                d="M19.0884 16.28L19.5069 13.616H16.8902V11.8873C16.8902 11.1585 17.2557 10.4481 18.4277 10.4481H19.6172V8.17997C19.6172 8.17997 18.5377 8 17.5056 8C15.3507 8 13.9422 9.27593 13.9422 11.5857V13.616H11.5469V16.28H13.9422V22.72H16.8902V16.28H19.0884Z"
                fill="black"
              />
            </svg>
          </a>
        </li>
        <li class="footer__social__icon">
          <a href="#"
            ><svg
              width="33"
              height="32"
              viewBox="0 0 33 32"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                class="fill_bg"
                d="M32.1889 0H0.738281V32H32.1889V0Z"
                fill="white"
              />
              <g clip-path="url(#clip0)">
                <path
                  class="fill_icon"
                  d="M16.139 12.6816C14.0238 12.6816 12.3177 14.3849 12.3177 16.4966C12.3177 18.6083 14.0238 20.3117 16.139 20.3117C18.2541 20.3117 19.9602 18.6083 19.9602 16.4966C19.9602 14.3849 18.2541 12.6816 16.139 12.6816ZM16.139 18.9769C14.7721 18.9769 13.6547 17.8646 13.6547 16.4966C13.6547 15.1287 14.7688 14.0164 16.139 14.0164C17.5092 14.0164 18.6233 15.1287 18.6233 16.4966C18.6233 17.8646 17.5058 18.9769 16.139 18.9769ZM21.0078 12.5255C21.0078 13.0203 20.6087 13.4154 20.1165 13.4154C19.621 13.4154 19.2252 13.0169 19.2252 12.5255C19.2252 12.0341 19.6243 11.6357 20.1165 11.6357C20.6087 11.6357 21.0078 12.0341 21.0078 12.5255ZM23.5386 13.4287C23.4821 12.2367 23.2094 11.1808 22.3347 10.3109C21.4634 9.44097 20.4058 9.1687 19.2119 9.10894C17.9814 9.03921 14.2932 9.03921 13.0627 9.10894C11.8721 9.16538 10.8145 9.43765 9.93987 10.3076C9.06522 11.1775 8.79584 12.2333 8.73597 13.4253C8.66613 14.6539 8.66613 18.3361 8.73597 19.5646C8.79251 20.7566 9.06522 21.8124 9.93987 22.6824C10.8145 23.5523 11.8688 23.8246 13.0627 23.8843C14.2932 23.9541 17.9814 23.9541 19.2119 23.8843C20.4058 23.8279 21.4634 23.5556 22.3347 22.6824C23.2061 21.8124 23.4788 20.7566 23.5386 19.5646C23.6085 18.3361 23.6085 14.6572 23.5386 13.4287ZM21.949 20.8828C21.6895 21.5335 21.1874 22.0349 20.5322 22.2972C19.5511 22.6857 17.2231 22.596 16.139 22.596C15.0548 22.596 12.7235 22.6824 11.7457 22.2972C11.0939 22.0382 10.5917 21.5369 10.329 20.8828C9.93987 19.9033 10.0297 17.5791 10.0297 16.4966C10.0297 15.4142 9.9432 13.0867 10.329 12.1105C10.5884 11.4597 11.0906 10.9583 11.7457 10.696C12.7268 10.3076 15.0548 10.3972 16.139 10.3972C17.2231 10.3972 19.5545 10.3109 20.5322 10.696C21.184 10.955 21.6862 11.4564 21.949 12.1105C22.3381 13.09 22.2483 15.4142 22.2483 16.4966C22.2483 17.5791 22.3381 19.9066 21.949 20.8828Z"
                  fill="black"
                />
              </g>
              <defs>
                <clipPath id="clip0">
                  <rect
                    width="14.8991"
                    height="17"
                    fill="white"
                    transform="translate(8.68555 8)"
                  />
                </clipPath>
              </defs>
            </svg>
          </a>
        </li>
        <li class="footer__social__icon">
          <a href="#"
            ><svg
              width="32"
              height="32"
              viewBox="0 0 32 32"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                class="fill_bg"
                d="M31.9252 0H0.474609V32H31.9252V0Z"
                fill="white"
              />
              <g clip-path="url(#clip0)">
                <path
                  class="fill_icon"
                  d="M16.7403 8.20312C13.5556 8.20312 10.4082 10.3406 10.4082 13.8C10.4082 16 11.6374 17.25 12.3823 17.25C12.6896 17.25 12.8666 16.3875 12.8666 16.1438C12.8666 15.8531 12.1309 15.2344 12.1309 14.025C12.1309 11.5125 14.0305 9.73125 16.4889 9.73125C18.6027 9.73125 20.1671 10.9406 20.1671 13.1625C20.1671 14.8219 19.506 17.9344 17.3642 17.9344C16.5913 17.9344 15.9302 17.3719 15.9302 16.5656C15.9302 15.3844 16.7496 14.2406 16.7496 13.0219C16.7496 10.9531 13.835 11.3281 13.835 13.8281C13.835 14.3531 13.9002 14.9344 14.133 15.4125C13.7046 17.2688 12.8293 20.0344 12.8293 21.9469C12.8293 22.5375 12.9131 23.1188 12.969 23.7094C13.0745 23.8281 13.0218 23.8156 13.1832 23.7563C14.7476 21.6 14.6917 21.1781 15.3994 18.3562C15.7812 19.0875 16.7683 19.4812 17.5505 19.4812C20.8469 19.4812 22.3275 16.2469 22.3275 13.3313C22.3275 10.2281 19.6643 8.20312 16.7403 8.20312Z"
                  fill="black"
                />
              </g>
              <defs>
                <clipPath id="clip0">
                  <rect
                    width="11.9193"
                    height="16"
                    fill="white"
                    transform="translate(10.4082 8)"
                  />
                </clipPath>
              </defs>
            </svg>
          </a>
        </li>
        <li class="footer__social__icon">
          <a href="#"
            ><svg
              width="32"
              height="32"
              viewBox="0 0 32 32"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                class="fill_bg"
                d="M31.6635 0H0.212891V32H31.6635V0Z"
                fill="white"
              />
              <g clip-path="url(#clip0)">
                <path
                  class="fill_icon"
                  d="M22.417 12.7405C22.427 12.8826 22.427 13.0248 22.427 13.1669C22.427 17.5019 19.1498 22.4969 13.1599 22.4969C11.3145 22.4969 9.60022 21.9588 8.1582 21.0248C8.4204 21.0552 8.67247 21.0654 8.94475 21.0654C10.4674 21.0654 11.8691 20.5476 12.9884 19.6644C11.5565 19.6339 10.3565 18.6898 9.94305 17.3903C10.1447 17.4207 10.3464 17.441 10.5582 17.441C10.8506 17.441 11.1431 17.4004 11.4153 17.3294C9.92291 17.0248 8.80355 15.705 8.80355 14.1111V14.0705C9.23715 14.3141 9.74139 14.4664 10.2758 14.4867C9.39849 13.8979 8.82373 12.8928 8.82373 11.7557C8.82373 11.1466 8.98504 10.5882 9.26741 10.1009C10.8708 12.0908 13.2809 13.3902 15.9833 13.5324C15.9329 13.2887 15.9027 13.035 15.9027 12.7811C15.9027 10.974 17.3548 9.50195 19.1598 9.50195C20.0976 9.50195 20.9446 9.89789 21.5396 10.5375C22.2757 10.3954 22.9816 10.1212 23.6068 9.74561C23.3648 10.507 22.8505 11.1466 22.1749 11.5527C22.8304 11.4817 23.4657 11.2989 24.0505 11.0451C23.6069 11.6948 23.0522 12.2735 22.417 12.7405Z"
                  fill="black"
                />
              </g>
              <defs>
                <clipPath id="clip0">
                  <rect
                    width="15.8924"
                    height="16"
                    fill="white"
                    transform="translate(8.1582 8)"
                  />
                </clipPath>
              </defs>
            </svg>
          </a>
        </li>
      </ul>
    </footer>
    <script>
      let addToCart = function(product_id, user_id) {
        let str = `productId=${product_id}&userID=${user_id}`
        $.ajax({
          type: "POST",
          url: "./server/add_to_cart.php",
          data: {productId: product_id, userId: user_id}
        });
      }
    </script>
  </body>
</html>
