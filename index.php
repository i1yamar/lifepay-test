<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Мобильный эквайринг с комиссией от 1,2%</title>
    <link type="Image/x-icon" href="/favicon.ico" rel="icon">
    <link
      rel="stylesheet"
      type="text/css"
      href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <section class="intro">
      <div class="container">
        <div class="intro__wrap">
          <div class="intro__content">
            <h1 class="intro__title">
              Мобильный эквайринг с комиссией от
              <span class="accent">1,2%</span>
            </h1>
            <p class="intro__suptitle">
              Принимайте оплату на выезде — любым удобным способом
            </p>
            <a class="intro__btn btn open-modal" href="#!">Подключить</a>
          </div>
          <div class="intro__img">
            <img src="img/intro-img.png" alt="Life pay - Мобильный терминал" />
          </div>
        </div>
        <a class="intro__btn-mobile btn mobile open-modal" href="#!">Подключить</a>
      </div>
    </section>

    <section class="adv">
      <div class="container">
        <h2 class="adv__title">
          Платежи <span class="accent">в любой точке продаж</span>
        </h2>
        <div class="adv__wrap">
          <div class="adv__item">
            <img class="adv__item-img" src="img/star.svg" alt="Звезда" />
            <div class="adv__item-wrap">
              <h3 class="adv__item-title">Разные способы оплаты</h3>
              <p class="adv__item-suptitle">
                Оплата картой, наличными, по QR-коду или касанием мобильного
                телефона
              </p>
            </div>
          </div>
          <div class="adv__item">
            <img class="adv__item-img" src="img/thumbs-up.svg" alt="Лайк" />
            <div class="adv__item-wrap">
              <h3 class="adv__item-title">Соотвествие закону</h3>
              <p class="adv__item-suptitle">
                Налоговая получит отчетность по 54-ФЗ, а клиент — чек
              </p>
            </div>
          </div>
          <div class="adv__item">
            <img class="adv__item-img" src="img/shield.svg" alt="Щит" />
            <div class="adv__item-wrap">
              <h3 class="adv__item-title">Безопасные платежи</h3>
              <p class="adv__item-suptitle">
                Отсутвие махинаций с купюрами и краж благодаря безналичной
                оплате
              </p>
            </div>
          </div>
          <div class="adv__item">
            <img class="adv__item-img" src="img/edit.svg" alt="Редактор" />
            <div class="adv__item-wrap">
              <h3 class="adv__item-title">Дополнительные возможности</h3>
              <p class="adv__item-suptitle">
                Можно удалить позицию из заказа или отменить его перед оплатой
              </p>
            </div>
          </div>
        </div>
        <p class="adv__text-bottom mobile">
          Вы платите меньше, если используете кассу не постоянно
        </p>
        <a class="adv__btn btn" href="#!">То, что надо!</a>
      </div>
    </section>

    <?php echo file_get_contents('components/choice.html'); ?>

    <?php echo file_get_contents('components/features.html'); ?>

    <section class="offer">
      <div class="container">
        <div class="offer__wrap">
          <div class="offer__text">
            <h2 class="offer__title">
              <span class="accent">Стоимость</span> мобильного эквайринга
            </h2>
            <p class="offer__suptitle">
              Прозрачная комисся на все виды эквайринга. Процент зависит только
              от вашей выручки и вида деятельности
            </p>
            <a class="offer__btn btn open-modal" href="#!">Подключить</a>
          </div>
          <div class="offer__card">
            <h3 class="offer__card-title">
              Комиссия за использование эквайринга LIFE PAY —
              <span class="accent">от 1,2% до 1,9%</span>
            </h3>
            <div class="offer__table-header">
              <h4 class="offer__table-title">Вид деятельности</h4>
              <h4 class="offer__table-title">Комиссия за эквайринг</h4>
            </div>
            <div class="offer__table-body">
              <p class="offer__table-row">
                Фастфуд <span class="offer__table-row_blue">1,2%</span>
              </p>
              <p class="offer__table-row">
                Продуктовые супермаркеты
                <span class="offer__table-row_blue">1,5%</span>
              </p>
              <p class="offer__table-row">
                Прочее <span class="offer__table-row_blue">1,9%</span>
              </p>
            </div>
          </div>
          <a class="offer__btn-mobile btn mobile open-modal" href="#!">Подключить</a>
        </div>
      </div>
    </section>

    <div class="filter">
      <div class="modal">
        <div class="modal__wpap">
          <h2 class="modal__title">
            <span class="accent">Стоимость</span> мобильного эквайринга
          </h2>
          <p class="modal__suptitle">
            Прозрачная комисся на все виды эквайринга. Процент зависит только от
            вашей выручки и вида деятельности
          </p>
          <a class="modal__btn btn modal-close" href="#!">Закрыть</a>
        </div>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.2.min.js"
      integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA="
      crossorigin="anonymous"
    ></script>
    <script
      type="text/javascript"
      src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="scripts.js"></script>
  </body>
</html>
