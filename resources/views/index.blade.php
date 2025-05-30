<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>HTML Academy: Device</title>
  <link href="css/styles.css" rel="stylesheet">
</head>
<body>

<header class="page-header">
  <div class="header-container">
  <h1 class="visually-hidden">Device</h1>
  <a href="#" class="device-logo-link active-text-element">
    <img alt="Логотип" src="img/logo.svg">
  </a>
    <div class="header-menu">
      <form class="page-search-container" action="https://echo.htmlacademy.ru/" method="get">
        <img src="img/buttons/search.svg" width="16px" height="16px">
        <label for="page-search" class="visually-hidden">Поиск по сайту</label>
        <input name="search-text" id="page-search" class="page-search-input" placeholder="Поиск по сайту" type="text">
        <button class="page-search-button" href="#">Найти</button>
      </form>

      <div class="login-container is-auth">
        <button class="login-button-container header-nav-button active-text-element">
          <img src="img/buttons/login.svg" width="15" height="13" alt="Иконка вход">
          <span class="login-button" href="#">Войти</span>
        </button>
        <button class="login-user-container" tabindex="-1">
          <img src="img/buttons/login.svg" width="15" height="13" alt="Иконка вход">
          <span class="login-button" href="#">Коля петухов</span>
        </button>
        <button class="logout-button">Выйти</button>
      </div>

      <button href="#" class="header-nav-button active-text-element">
        <img src="img/buttons/change.svg">
        <span>Сравнить</span>
      </button>

      <div class="basket-section">
      <button href="#" class="header-nav-button active-text-element with-counter">
        <div class="basket-counter"><p>2</p></div>
        <img src="img/buttons/basket.svg">
        <span>Корзина</span>
      </button>
      <div class="basket-list-container">
        <div class="basket-list-cursor"></div>
        <ul class="basket-list">
          <li class="basket-list-item">
            <div tabindex="0">
              <img src="/img/catalog-items/product-1-small%205.png" alt="">
              <span>Любительская селфи-палка</span>
            </div>
            <button class="basket-drop-button active-text-element"></button>
          </li>
          <li class="basket-list-item">
            <div tabindex="0">
            <img src="/img/catalog-items/product-2-small.png">
            <span>Профессиональная селфи-палка</span>
            </div>
            <button class="basket-drop-button active-text-element"></button>
          </li>
        </ul>
        <div class="basket-final-price">
          <span>Товаров: 2</span>
          <span>Сумма: 2000 ₽</span>
        </div>
        <div class="open-basket">
          <button class="active-text-element">Открыть корзину</button>
        </div>
      </div>
      </div>


    </div>

    <section class="header-links">
      <div class="catalog-menu-link catalog-menu-link-close" tabindex="0">
        <span>Каталог товаров</span>
        <div class="catalog-popup-button">
          <span class="catalog-popup-image"></span>
        </div>
        <div class="catalog-popup-menu">
          <ul class="catalog-popup-menu-list">
            <li class="catalog-popup-menu-item"><a href="#" class="active-text-element">Виртуальная реальность</a></li>
            <li class="catalog-popup-menu-item"><a href="#" class="active-text-element">Моноподы для селфи</a></li>
            <li class="catalog-popup-menu-item"><a href="#" class="active-text-element">Экшн-камеры</a></li>
            <li class="catalog-popup-menu-item"><a href="#" class="active-text-element">Фитнес-браслеты</a></li>
            <li class="catalog-popup-menu-item"><a href="#" class="active-text-element">Умные часы</a></li>
            <li class="catalog-popup-menu-item"><a href="#" class="active-text-element">Квадрокоптеры</a></li>
          </ul>
        </div>
      </div>

      <nav class="page-navigation">
        <ul class="page-navigation-list">
          <li class="page-navigation-item">
            <a class="active-text-element" tabindex="0">Доставка</a>
          </li>
          <li class="page-navigation-item active-text-element">
            <a class="active-text-element" tabindex="0">Гарантия</a>
          </li>
          <li class="page-navigation-item active-text-element">
            <a class="active-text-element" tabindex="0">Контакты</a>
          </li>
        </ul>
      </nav>
    </section>
  </div>
</header>

<main class="main-page">

  <div class="slider-container">

    <div class="slider-background"></div>

    <div class="slider">
      <div class="slider-image-container">
        <img alt="Квадрокоптер" src="img/slider/slider-1.png" width="560" height="560">
        <div class="slider-controls">
          <button class="slider-button slider-prev" type="button">
            <span class="visually-hidden">Предыдущее фото</span>
          </button>
          <button class="slider-button slider-next" type="button">
            <span class="visually-hidden">Следующее фото</span>
          </button>
        </div>

      </div>

      <img class="slider-number-image" src="img/slider/01.png" alt="текст 01" width="192" height="130">

    </div>

    <div class="slider-description-container">
      <h2 class="slider-container-header">Порхает как бабочка, жалит как пчела!</h2>
      <p>Этот обычный, на первый взгляд, квадрокоптер оснащен мощным лазером, замаскированным под стандартную
        камеру.</p>

      <div class="slider-navigation">
        <a class="navigation-button-with-background" tabindex="0">Подробнее</a>
        <ol class="slider-navigation-list">
          <li>
            <button class="slider-navigation-item slider-navigation-item-active">
              <span class="visually-hidden">Слайд 1</span>
            </button>
          </li>
          <li>
            <button class="slider-navigation-item">
              <span class="visually-hidden">Слайд 2</span>
            </button>
          </li>
          <li>
            <button class="slider-navigation-item">
              <span class="visually-hidden">Слайд 3</span>
            </button>
          </li>
        </ol>
      </div>

      <div class="slider-description">
        <ul class="slider-description-list">
          <li class="slider-description-item">
            <h3>800 м</h3>
            <p>Дальность полета</p>
          </li>
          <li class="slider-description-item">
            <h3>50 м</h3>
            <p>Радиус поражения</p>
          </li>
        </ul>
      </div>

    </div>
  </div>

  <section class="categories-container">
    <ul class="categories-navigation-list">
      <li class="categories-navigation-item">
        <a href="#">
          <div class="categories-navigation-item-img-container">
          <img src="img/catalog/vr.svg" alt="Виртуальная реальность">
          </div>
          <p>Виртуальная реальность</p>
        </a>
      </li>
      <li class="categories-navigation-item">
        <a href="#">
          <div class="categories-navigation-item-img-container">
          <img src="img/catalog/monopods.svg" alt="Моноподы для селфи">
          </div>
          <p>Моноподы для селфи</p>
        </a>
      </li>
      <li class="categories-navigation-item">
        <a href="#">
          <div class="categories-navigation-item-img-container">
          <img src="img/catalog/camera.svg" alt="экшн-камеры">
          </div>
          <p>Экшн-камеры</p>
        </a>
      </li>
      <li class="categories-navigation-item">
        <a href="#">
          <div class="categories-navigation-item-img-container">
            <img src="img/catalog/fitness-band.svg" alt="фитнес-браслеты">
          </div>
          <p>Фитнес-браслеты</p>
        </a>
      </li>
      <li class="categories-navigation-item">
        <a href="#">
          <div class="categories-navigation-item-img-container">
          <img src="img/catalog/smart-watch.svg" alt="умные часы">
          </div>
          <p>Умные часы</p>
        </a>
      </li>
      <li class="categories-navigation-item">
        <a href="#">
          <div class="categories-navigation-item-img-container">
          <img src="img/catalog/quadcopters.svg" alt="квадрокоптеры">
          </div>
          <p>Квадрокоптеры</p>
        </a>
      </li>
    </ul>
  </section>

  <section class="advantages-container">
    <ul class="advantages-navigation-list">
      <li class="advantages-navigation-item advantages-navigation-item-active">
        <div class="advantages-navigation-button-container">
          <button class="advantages-navigation-button">Доставка</button>
        </div>
      </li>
      <li class="advantages-navigation-item">
        <div class="advantages-navigation-button-container">
          <button class="advantages-navigation-button">Гарантия</button>
        </div>
      </li>
      <li class="advantages-navigation-item">
        <div class="advantages-navigation-button-container">
          <button class="advantages-navigation-button">Кредит</button>
        </div>
      </li>
    </ul>

    <div class="advantages-description-container">
      <div class="advantages-text">
      <h2 class="container-header">Доставка</h2>
      <p class="advantages-description">Мы с удовольствием доставим ваш товар прямо
        к вашему подъезду совершенно бесплатно! Ведь
        мы неплохо заработаем, поднимая его на ваш этаж.</p>
      </div>
      <img src="img/delivery.svg">
    </div>
  </section>

  <div class="advantages-container-background">
    <div></div>
  </div>

  <section class="delivery-container">
    <a class="delivery-link">
      <img class="delivery-img" src="img/delivery-small.svg" alt="доставка">
    </a>
    <p class="delivery-title"><span>Доставим редкий товар под заказ</span></p>
    <div class="delivery-about-container">
      <button class="delivery-about">i</button>
    </div>
  </section>

  <section class="about-container">
    <div class="about">
      <h2 class="container-header">О нас</h2>
      <p class="about-description">Огромный выбор гаджетов не оставит равнодушным гика, который есть в каждом из
        нас.</p>
      <p class="about-description">Мы можем доставить ваш товар в самые отдалённые уголки России транспортными
        компаниями:</p>
      <ul class="about-description-list">
        <li>Меловые линии</li>
        <li>СДИК</li>
        <li>ТоксБерри</li>
      </ul>
      <a class="about-description-link">Подробнее о нас</a>
    </div>
    <div class="about">
      <h2 class="container-header">Контакты</h2>
      <p class="about-description">Вы можете забрать товар сами, заехав в наш офис.
        Заодно сможете проверить работоспособность покупки.</p>
      <h3>Интернет-магазин «Девайс»</h3>
      <p class="about-description">Санкт-Петербург, набережная реки Карповки, 5, литера П.</p>
      <a class="about-description" href="#">+7 (812) 812-12-12</a>
      <h3>Время работы</h3>
      <p class="about-description">пн—пт: с 10:00 до 22:00</p>
      <p class="about-description">сб—вс: с 10:00 до 19:00</p>
      <a class="about-description-link">Напишите нам</a>
    </div>
  </section>

  <section class="newsletter-container">
    <div class="newsletter-info">
      <h2 class="container-header">Подпишитесь на рассылку</h2>
      <p class="newsletters-description">Еженедельный дайджест с обзорами новинок, длительными тест-драйвами, распаковками, а также акции,
        спецпредложения и вот это вот всё.</p>
    </div>
    <div class="newsletter-email-container">
      <div class="newsletter-email-input">
      <input type="email" placeholder="Ваш e-mail">
      <button>Подписаться</button>
      </div>
      <div class="its-free">
        <img src="img/icons/cheked-green.svg">
        <p>Это бесплатно</p>
      </div>
    </div>
  </section>

  <div class="newsletter-container-background">
    <div></div>
  </div>

</main>

<footer class="page-footer">

  <img class="footer-device-logo" alt="Логотип Device" src="img/logo-footer.svg" width="145" height="36">

  <div class="footer-line-container">
    <span class="footer-device-address">Санкт-Петербург, набережная реки Карповки, 5, литера П.</span>
    <ul class="footer-delivery-list">
      <li><a>Доставка</a></li>
      <li><a>Гарантия</a></li>
      <li><a>Контакты</a></li>
    </ul>
    <a class="footer-phone" href="tel:+78128121212">Тел.: +7 (812) 812-12-12</a>
  </div>

  <div class="footer-line-container">
    <div class="footer-device-decoration"></div>
    <ul class="social-list">
      <li>
        <a href="#">
        <img src="img/social-icons/facebook.svg" alt="facebook">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="img/social-icons/instagram.svg" alt="instagram">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="img/social-icons/twitter.svg" alt="twitter">
        </a>
      </li>
    </ul>
    <img alt="Логотип HTML-академии" src="img/html-academy-logo.svg">
  </div>

</footer>

<div class="footer-background">
  <div></div>
</div>

<script src="js/main.js"></script>

</body>
</html>
