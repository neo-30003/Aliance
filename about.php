<?php
$page_title = 'О компании';
$header_style = 'page-header-bg-grey';
include_once('header-page.php');
include_once('./template-parts/breadcrumbs.php');?>
<section class="section description">
  <div class="container">
    <picture class="description-image">
      <source class="description-image" type="image/webp" srcset="img/factory.webp">
      <source class="description-image" type="image/jpeg" srcset="img/factory.jpeg">
      <img class="description-image" src="img/factory.jpeg" alt="factory-photo">
    </picture>
    <div class="description-content-wrapper">
      <div class="description-content">
        <div class="seporator"></div>
        <h2 class="section-title description-content-title">Мы - эксперты в области <br>производства химии</h2>
        <p class="description-text">
          Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
        </p>
      </div>
    </div>
    <?php include_once('./template-parts/swiper-block.php');?>
  </div>
</section>
<section class="section about-production">
  <div class="container">
    <div class="about-production-wrapper">
      <div class="about-production-content">
        <div class="about-production-title-content">
          <div class="seporator"></div>
          <h2 class="section-title about-production-title">
            Наше производство
          </h2>
        </div>
        <p class="about-production-text">
          Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.<br>
          <br>
          Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
        </p>
        <ul class="about-production-list">
          <li class="about-production-list-item">
            <svg width="30" height="30" class="about-production-list-icon">
              <use href="/img/sprite.svg#car"></use>
            </svg>
            Автомобильная химия
          </li>
          <li class="about-production-list-item">
            <svg width="30" height="30" class="about-production-list-icon">
              <use href="/img/sprite.svg#home"></use>
            </svg>
            Бытовая химия
          </li>
          <li class="about-production-list-item">
            <svg width="30" height="30" class="about-production-list-icon">
              <use href="/img/sprite.svg#dis"></use>
            </svg>
            Дезинфицирующие средства
          </li>
          <li class="about-production-list-item">
            <svg width="30" height="30" class="about-production-list-icon">
              <use href="/img/sprite.svg#aerozol"></use>
            </svg>
            Пищевые аэрозоли
          </li>
          <li class="about-production-list-item">
            <svg width="30" height="30" class="about-production-list-icon">
              <use href="/img/sprite.svg#cosmetic"></use>
            </svg>
            Косметическая продукция
          </li>
          <li class="about-production-list-item">
            <svg width="30" height="30" class="about-production-list-icon">
              <use href="/img/sprite.svg#brush"></use>
            </svg>
            Краски аэрозольные
          </li>
        </ul>
        <picture class="woman-photo">
          <source class="woman-photo" type="image/webp" srcset="img/woman.webp">
          <source class="woman-photo" type="image/jpeg" srcset="img/woman.jpeg">
          <img class="woman-photo" src="img/woman.jpeg" alt="woman">
        </picture>
      </div>
    </div>
  </div>
</section>
<?php include_once("./template-parts/founder-block.php");?>
<?php include_once("./template-parts/research-block.php");?>
<?php include_once("./template-parts/clients-block.php");?>
<?php include_once('footer.php');?>