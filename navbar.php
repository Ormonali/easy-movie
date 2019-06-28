<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Назад</a></li>
  <li class="divider"></li>
  <li><a href="logout.php">Выйти</a></li>
  <li class="divider"></li>
  <li><a href="#!">Личный кабинет</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Easy-Movie</a>
    <ul class="right hide-on-med-and-down">
      <li><a class="btn btn-small" href="sass.html">Фильмы</a></li>
      <li><a class="btn btn-small" href="badges.html">сериалы</a></li>
      <!-- Dropdown Trigger -->
      <li>
      <?php if(empty($_SESSION)):?>
            <a class="btn btn-small" href="index.php">Регистрация</a>
      <?php else:?>
        <a class="dropdown-trigger btn btn-small" href="#!" data-target="dropdown1"><?php echo $_SESSION['user']?><i class="material-icons right">arrow_drop_down</i></a>
      <?php endif;?>
      </li>
    </ul>
  </div>
</nav>
