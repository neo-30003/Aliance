<?php
$page_title = 'Контакты';
$header_style = 'page-header-bg-grey';
include_once('header-page.php');?>
<section class="section contacts">
  <div class="container">
    <div class="footer-top contacts-footer-top">
      <a href="tel:+74996861014" class="footer-phone">
        +7 (499) 686-10-14
      </a>
      <div class="footer-info">
        <svg class="footer-mark-icon" width="24" height="24">
          <use href="img/sprite.svg#Mark"></use>
        </svg>
        <address class="footer-info-address">
          г. Москва, Холодильный пер. 4к1с8
        </address>
      </div>
      <!-- /.footer-info -->
      <div class="footer-info">
        <svg class="footer-mail-icon" width="24" height="24">
          <use href="img/sprite.svg#Mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
          a.dragunov@tdaliance.ru
        </a>
      </div>
      <!-- /.footer-info -->
      <div class="footer-social">
        <a href="#" class="footer-social-link">
          <svg class="footer-social-icon" width="24" height="24">
            <use href="img/sprite.svg#Vk"></use>
          </svg>
        </a>
        <a href="#" class="footer-social-link">
          <svg class="footer-social-icon" width="24" height="24">
            <use href="img/sprite.svg#Inst"></use>
          </svg>
        </a>
      </div>
      <!-- /.footer-social -->
    </div>
    <!-- /.footer-top -->
    <picture class="map-photo">
      <source class="map-photo" type="image/webp" srcset="img/map.webp">
      <source class="map-photo" type="image/jpeg" srcset="img/map.jpeg">
      <img class="map-photo" src="img/map.jpeg" alt="map">
    </picture>
  </div>
</section>
<?php include_once('footer.php');?>