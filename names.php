<?php
  require 'db.php';
  $id = $_GET['id'];
  $title = "Православные имена со значениями";
  require 'templates/main-header.php';
  $names = get_names();
  views_names();
?>

<header>
  <?php require 'templates/navigation-fixed.php'; ?>
  <div class="margin"></div>
</header>

<main class="main-container">
  <h1 class="visually-hidden">Во свете Библии</h1>
    <?php require 'templates/sidebar-left.php'; ?>

    <!-- Содержание -->
    <section class="content atantion">
      <!--Оглавление-->
      <h2 class="content-title">Православные имена со значениями</h2>
      <input type="text" id="elastic" value="Введите имя большими буквами" onfocus="if(this.value=='Введите имя большими буквами') this.value='';" onblur="if(this.value=='') this.value='Введите имя большими буквами';">
      <ul class="namelist elastic">
          <?php foreach ($names as $namelist) {
              echo $namelist['content'];
          } ?>
      </ul>
      <br>
      <span class="sans vision">
        <svg height="20px" viewBox="0 0 24 24" width="20px" fill="#cc9966">
        <path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/>
        </svg>
        <?php echo $namelist["views"]; ?>
      </span>
    </section>
    <!-- / Содержание -->
  <?php require 'templates/sidebar-right.php'; ?>
</main>
<script src="js/names-search.js"></script>
<?php require 'templates/main-footer.php'; ?>
