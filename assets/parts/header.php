<div class="container-fluid">
      <div class="row">
       
       <nav role="navigation" class="navbar navbar-inverse">
          <div class="container">

          <div class="navbar-header header">

            <div class="container">
              
              <div class="row">
                
                <div class="col-lg-12">
                  <h1><a href="index.php">КиноКинг</a></h1> 
                  <p>Кино - наша страсть!</p>
                </div>

              </div>

            </div>
          
          </div>
            
            <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
              
              <ul class="nav nav-pills">
                <li class="active"> <a href="index.php">Главная</a> </li>
                <li> <a href="films.php">Фильмы</a> </li>
                <li> <a href="rating.php">Рейтинг фильмов</a> </li>
                <li> <a href="contact.php">Контакты</a> </li>
                <?php
                if($_COOKIE['user'] == ''):
                ?>
                <li> <a href="Registrate.php">Регистрация</a> </li>
                <li> <a href="login.php">Вход</a> </li>
                <?php else:?>
                  <li style = "color: white;" >Здравствуй <?=$_COOKIE['user']?>.</li>
                  <li> <a href="assets/parts/exit.php">Выход</a> </li>
                <?php endif;?>
              </ul>
            </div>
          </div>
       </nav> 
      </div>
    </div>