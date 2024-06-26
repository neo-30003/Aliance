<?php
$page_title = 'Автомобильная химия';
$header_style = "page-header-bg-grey";
include_once('header-page.php');?>
<header class="page-header <?= $header_style;?>">
  <picture class="page-header-bg-thumb">
    <source class="page-header-bg-thumb" type="image/webp" srcset="img/thumb.webp">
    <source class="page-header-bg-thumb" type="image/jpeg" srcset="img/thumb.png">
    <img class="page-header-bg-thumb" src="img/thumb.png" alt="">
  </picture>
  <div class="container">
    <div class="seporator"></div>
    <h1 class="page-header-title"><?= $page_title ?></h1>
    <ul class="breadcrumbs">
      <li class="breadcrumbs-item">
        <a href="./index.php" class="breadcrumbs-link">Главная</a>
      </li>
      <li class="breadcrumbs-item">
        <a href="./contracts.php" class="breadcrumbs-link">Контрактное производство</a>
      </li>
      <li class="breadcrumbs-item active">
        <a href="#" class="breadcrumbs-link"><?= $page_title ?></a>
      </li>
    </ul>
    <!-- /.breadcrumbs -->
  </div>
  <!-- /.container -->
</header>
<section class="section avtohim">
  <div class="container">
    <div class="avtohim-wrapper ">
      <picture class="man-photo">
        <source class="man-photo" type="image/webp" srcset="img/man.webp">
        <source class="man-photo" type="image/jpeg" srcset="img/man.jpeg">
        <img class="man-photo" src="img/man.jpeg" alt="man">
      </picture>
      <div class="avtohim-content">
        <div class="seporator"></div>
        <h2 class="section-title avtohim-title">Контрактное производство автомобильной химии</h2>
        <p class="avtohim-text">
          Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует необходимость приоритизации разума над эмоциями. Кстати, представители современных социальных резервов неоднозначны и будут описаны максимально подробно.<br>
          <br>
          Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! Безусловно, постоянный количественный рост и сфера нашей активности предоставляет широкие возможности для системы обучения кадров, соответствующей насущным потребностям. В целом, конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены в исключительно положительном свете. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт предпосылки для глубокомысленных рассуждений. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.
        </p>
      </div>
    </div>
    <?php include_once('./template-parts/swiper-block.php');?>
  </div>
</section>
<section class="section manufacturing">
  <div class="container">
    <div class="manufacturing-wrapper ">
      <div class="manufacturing-content">
        <div class="seporator"></div>
        <h2 class="section-title manufacturing-title">Изготовление автохимии</h2>
        <p class="manufacturing-text">
          Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.
        </p>
        <ul class="manufacturing-list">
          <li class="manufacturing-list-item">
            <svg width="30" height="30" class="manufacturing-list-icon">
              <use href="/img/sprite.svg#him"></use>
            </svg>
            Полное описание товаров
          </li>
          <li class="manufacturing-list-item">
            <svg width="30" height="30" class="manufacturing-list-icon">
              <use href="/img/sprite.svg#car"></use>
            </svg>
            Актуальные цены
          </li>
          <li class="manufacturing-list-item">
            <svg width="30" height="30" class="manufacturing-list-icon">
              <use href="/img/sprite.svg#him"></use>
            </svg>
            Полное описание товаров
          </li>
          <li class="manufacturing-list-item">
            <svg width="30" height="30" class="manufacturing-list-icon">
              <use href="/img/sprite.svg#car"></use>
            </svg>
            Актуальные цены
          </li>
          <li class="manufacturing-list-item">
            <svg width="30" height="30" class="manufacturing-list-icon">
              <use href="/img/sprite.svg#brush"></use>
            </svg>
            Лаки и краски
          </li>
          <li class="manufacturing-list-item">
            <svg width="30" height="30" class="manufacturing-list-icon">
              <use href="/img/sprite.svg#him"></use>
            </svg>
            Химические производства
          </li>
          <li class="manufacturing-list-item">
            <svg width="30" height="30" class="manufacturing-list-icon">
              <use href="/img/sprite.svg#brush"></use>
            </svg>
            Лаки и краски
          </li>
          <li class="manufacturing-list-item">
            <svg width="30" height="30" class="manufacturing-list-icon">
              <use href="/img/sprite.svg#him"></use>
            </svg>
            Химические производства
          </li>
        </ul>
      </div>
    </div>
  </div>
  <picture class="microscope-photo">
    <source class="microscope-photo" type="image/webp" srcset="img/microscope.webp">
    <source class="microscope-photo" type="image/jpeg" srcset="img/microscope.jpeg">
    <img class="microscope-photo" src="img/microscope.jpeg" alt="microscope">
  </picture>
</section>
<section class="section avtohim-roster">
  <div class="container">
    <div class="avtohim-roster-wrapper ">
      <div class="avtohim-roster-content">
        <div class="seporator"></div>
        <h2 class="section-title avtohim-roster-title">Виды автохимии</h2>
        <p class="avtohim-roster-text">
          Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям.
        </p>
      </div>
    </div>
    <ul class="avtohim-roster-list">
      <li class="avtohim-roster-list-item">Антискотч</li>
      <li class="avtohim-roster-list-item">Многоцелевая смазка</li>
      <li class="avtohim-roster-list-item">Жидкий ключ</li>
      <li class="avtohim-roster-list-item">Высокотемпературная смазка</li>
      <li class="avtohim-roster-list-item">Универсальный очиститель деталей</li>
      <li class="avtohim-roster-list-item">Силиконовая смазка</li>
      <li class="avtohim-roster-list-item">Цепная смазка</li>
      <li class="avtohim-roster-list-item">Медная смазка</li>
      <li class="avtohim-roster-list-item">Графитовая смазка</li>
      <li class="avtohim-roster-list-item">Очиститель кондиционера пенный</li>
      <li class="avtohim-roster-list-item">Очиститель тормозных дисков</li>
      <li class="avtohim-roster-list-item">Очиститель битумных пятен</li>
      <li class="avtohim-roster-list-item">Очиститель кондционера</li>
      <li class="avtohim-roster-list-item">Очиститель дросельной заслонки</li>
      <li class="avtohim-roster-list-item">Очиститель обивки</li>
      <li class="avtohim-roster-list-item">Тефлоновая смазка</li>
      <li class="avtohim-roster-list-item">Очиститель двигателя</li>
      <li class="avtohim-roster-list-item">Универсальный очиститель</li>
      <li class="avtohim-roster-list-item">Чернитель шин</li>
      <li class="avtohim-roster-list-item">Чернитель шин + очистка</li>
    </ul>
  </div>
</section>
<?php include_once('./template-parts/research-block.php');
include_once('./template-parts/steps-block.php');
include_once('./template-parts/clients-block.php');
include_once('footer.php');?>