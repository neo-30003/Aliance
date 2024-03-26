<?php
$page_title = 'Автохимия AG-Tech';
$header_style = "page-header-bg-grey";
include_once('header-page.php');?>
<section class="section avtohim-AG-TECH">
  <div class="container">
    <div class="avtohim-AG-TECH-wrapper ">
      <picture class="gloves-photo">
        <source class="gloves-photo" type="image/webp" srcset="img/gloves.webp">
        <source class="gloves-photo" type="image/jpeg" srcset="img/gloves.jpeg">
        <img class="gloves-photo" src="img/gloves.jpeg" alt="gloves">
      </picture>
      <div class="avtohim-AG-TECH-content">
        <div class="seporator"></div>
        <h2 class="section-title avtohim-AG-TECH-title">Собственное производство автохимия AG-Tech</h2>
        <p class="avtohim-AG-TECH-text">
          Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует необходимость приоритизации разума над эмоциями. Кстати, представители современных социальных резервов неоднозначны и будут описаны максимально подробно.<br>
          <br>
          Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! Безусловно, постоянный количественный рост и сфера нашей активности предоставляет широкие возможности для системы обучения кадров, соответствующей насущным потребностям. В целом, конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены в исключительно положительном свете. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт предпосылки для глубокомысленных рассуждений. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.
        </p>
      </div>
    </div>
    <?php include_once('./template-parts/swiper-block.php');?>
  </div>
</section>
<section class="section distribution">
  <div class="container">
    <div class="distribution-wrapper ">
      <div class="distribution-content">
        <div class="seporator"></div>
        <h2 class="section-title distribution-title">Генеральный дистрибьютор премиальнойавтохимии</h2>
        <p class="distribution-text">
          Внезапно, активно развивающиеся страны третьего мира могут быть объявлены нарушающими общечеловеческие нормы этики и морали.
        </p>
        <ul class="distribution-list">
          <li class="distribution-list-item">
            <svg width="30" height="30" class="distribution-list-icon">
              <use href="/img/sprite.svg#him"></use>
            </svg>
            Полное описание товаров
          </li>
          <li class="distribution-list-item">
            <svg width="30" height="30" class="distribution-list-icon">
              <use href="/img/sprite.svg#car"></use>
            </svg>
            Актуальные цены
          </li>
          <li class="distribution-list-item">
            <svg width="30" height="30" class="distribution-list-icon">
              <use href="/img/sprite.svg#brush"></use>
            </svg>
            Лаки и краски
          </li>
          <li class="distribution-list-item">
            <svg width="30" height="30" class="distribution-list-icon">
              <use href="/img/sprite.svg#him"></use>
            </svg>
            Химические производства
          </li>
        </ul>
        <button class="distribution-button button">
          <svg class="distribution-button-icon" width="24" height="24">
            <use href="img/sprite.svg#download"></use>
          </svg>
          <span class="button-text">
            Скачать каталог
          </span>
        </button>
      </div>
    </div>
  </div>
  <picture class="book-photo">
    <source class="book-photo" type="image/webp" srcset="img/book.webp">
    <source class="book-photo" type="image/jpeg" srcset="img/book.jpeg">
    <img class="book-photo" src="img/book.jpeg" alt="book">
  </picture>
</section>
<?php include_once("./template-parts/research-block.php");?>
<?php include_once("./template-parts/steps-block.php");?>
<?php include_once("./template-parts/clients-block.php");?>
<?php include_once('footer.php');?>