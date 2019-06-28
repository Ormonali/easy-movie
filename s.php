<nav class="navbar navbar-expand-sm navbar-dark">
        <a class="navbar-brand" href="index.php">Easy-Movie</a>
        <button class="navbar-toggler" type="button" >
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class=" navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#" active>Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
            <?php if(empty($_SESSION)):?>
            <a class="nav-link btn btn-primary" href="registr.php">Регистрация</a>
            <?php else:?>
            <ul class="navbar-nav mr-left">
              <li class="nav-item dropdown">
              <a class="nav-link btn btn-primary dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="registr.php" active>
                <?php echo $_SESSION['user']?>
              </a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <a class="dropdown-item" href="signout.php">Log out</a>
                  <a class="dropdown-item" href="#">Another action</a>
                </div>
              </li>
            </ul>
            
            </ul>
        </div>
</nav>