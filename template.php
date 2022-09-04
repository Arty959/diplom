<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="/img/logo.png">
    <link rel="stylesheet" href="/css/style.css"/>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/91bebaec5f.js"
      crossorigin="anonymous"
    ></script>
    <title>Приют "В добрые руки"</title>
  </head>
  <body>
    <!--================ Start Header Area =================-->
    <header>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div>
              <img src="img/logo.png" alt="logo" id="animals" />
            </div>
          </div>
          <div class="col-sm-8 d-flex d-flex justify-content-end text-success">
            <h1>Приют для бездомных животных<br />"В добрые руки" в Москве</h1>
          </div>
        </div>
      </div>
      <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark bg-success">
          <a class="navbar-brand" href="/">Главная</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Переключатель навигации"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/about">О нас</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/help">Как помочь</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="/contact">Контакты</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Area =================-->

    <?php echo $content ?>

    <!--================ Start footer Area  =================-->
        <footer>
      <div class="container bg-white mt-5 border-top border-success">
        <div class="row">
          <div class="col-sm-4"><img src="/img/logo.png" alt="logo" /></div>
          <div class="col-sm-4 d-flex align-items-center">
            <p>
              <i class="fa-brands fa-instagram fa-2xl"></i>
            </p>
            <p class="ml-5">
              <i class="fa-brands fa-vk fa-2xl"></i>
            </p>
            <p class="ml-5">
              <i class="fa-brands fa-telegram fa-2xl"></i>
            </p>
          </div>
          <div class="col-sm-4 d-flex align-items-center">
            <h5>
              Наш E-mail <i class="fa-solid fa-envelope-open fa-xs"></i
              ><br />vdobryeruki@yandex.ru
            </h5>
          </div>
        </div>
      </div>
    </footer>
    <!--================ End footer Area  =================-->
    <script>
      animals.onclick = function () {
        let start = Date.now();

        let timer = setInterval(function () {
          let timePassed = Date.now() - start;
          animals.style.left = timePassed / 5 + "px";
          if (timePassed > 1500) clearInterval(timer);
        }, 20);
      };
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>