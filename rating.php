<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Рейтинг фильмов</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="assets/css/style.css" rel="stylesheet">

  </head>
  <body>
    
  <?php
    include_once 'assets/parts/header.php';
  ?>


    <div class="wrapper">
      
      <div class="container">
        
        <div class="row">
          
        <div class="col-lg-9 col-lg-push-3"> <!-- Меняем блоки местами col-lg-push-3 -->

          <form role="search" class="visible-xs">
            <div class="form-group">
              <div class="input-group">
                <input type="search" class="form-control input-lg" placeholder="Ваш запрос">
                <div class="input-group-btn">
                  <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
              </div>
            </div>
          </form> 
          
          <h1>Рейтинг фильмов</h1>
          <hr>

          <table class="table table-striped">
            <thead>
              <tr>
                <th></th>
                <th>Фильм</th>
                <th class="text-center">Год</th>
                <th class="text-center">Рейтинг</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="col-lg-1 col-md-1 col-xs-2">
                  <img class="img-responsive img-thumbnail" src="assets/img/inter.png" alt="интерстеллар">
                </td>
                <td class="vert-align"><a href="show.php">Интерстеллар</a></td>
                <td class="text-center vert-align">2014</td>
                <td class="text-center vert-align"><span class="badge">8.1</span></td>
              </tr>

              <tr>
                <td class="col-lg-1 col-md-1 col-xs-2">
                  <img class="img-responsive img-thumbnail" src="assets/img/cloud.png" alt="Облачный атлас">
                </td>
                <td class="vert-align"><a href="#">Облачный атлас</a></td>
                <td class="text-center vert-align">2012</td>
                <td class="text-center vert-align"><span class="badge">8.0</span></td>
              </tr>

              <tr>
                <td class="col-lg-1 col-md-1 col-xs-2">
                  <img class="img-responsive img-thumbnail" src="assets/img/matrix.png" alt="Матрица">
                </td>
                <td class="vert-align"><a href="#">Матрица</a></td>
                <td class="text-center vert-align">1999</td>
                <td class="text-center vert-align"><span class="badge">7.9</span></td>
              </tr>

              <tr>
                <td class="col-lg-1 col-md-1 col-xs-2">
                  <img class="img-responsive img-thumbnail" src="assets/img/max.png" alt="Безумный макс">
                </td>
                <td class="vert-align"><a href="#">Безумный макс</a></td>
                <td class="text-center vert-align">2015</td>
                <td class="text-center vert-align"><span class="badge">7.8</span></td>
              </tr>
            </tbody>


          </table>



          <div class="margin-8 clear"></div>


        </div>


        <div class="col-lg-3 col-lg-pull-9"> <!-- Меняем блоки местами col-lg-pull-9 -->
          
          <div class="panel panel-info hidden-xs">
            <div class="panel-heading"><div class="sidebar-header">Поиск</div></div>
            <div class="panel-body">
              <form role="search">
                <div class="form-group">
                  <div class="input-group">
                    <input type="search" class="form-control input-lg" placeholder="Ваш запрос">
                    <div class="input-group-btn">
                      <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                  </div>
                </div>
              </form> 
            </div>
          </div>
    
          <div class="panel panel-info">
            <div class="panel-heading"><div class="sidebar-header">Вход</div></div>
            <div class="panel-body">

              <form role="form">
                <div class="form-group">
                  <input type="text"  class="form-control input-lg" placeholder="Логин">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control input-lg" placeholder="Пароль">
                </div>

                <button type="submit" class="btn btn-warning pull-right">вход</button>

              </form>

            </div>
          </div>  


          <div class="panel panel-info">
            <div class="panel-heading"><div class="sidebar-header">Новости</div></div>
            <div class="panel-body">
              
              <p>31.02.2017</p>
              <p>Мы запустили новый сервис</p>
              
            </div>
          </div>


          <div class="panel panel-info">
            <div class="panel-heading"><div class="sidebar-header">Рейтинг фильмов</div></div>
            <div class="panel-body">
                
                <ul class="list-group">
                  
                  <li class="list-group-item list-group-warning">
                    <span class="badge">8.9</span>
                    <a href="show.php">Интерстеллар</a>
                  </li>

                  <li class="list-group-item list-group-warning">
                    <span class="badge">8.7</span>
                    <a href="#">Безумный макс</a>
                  </li>                  

                  <li class="list-group-item list-group-warning">
                    <span class="badge">8.3</span>
                    <a href="#">Матрица</a>
                  </li>                  

                  <li class="list-group-item list-group-warning">
                    <span class="badge">8.1</span>
                    <a href="#">Облачный атлас</a>
                  </li>

                  <li class="list-group-item list-group-warning">
                    <span class="badge">8.9</span>
                    <a href="#">Интерстеллар</a>
                  </li>

                  <li class="list-group-item list-group-warning">
                    <span class="badge">8.7</span>
                    <a href="#">Безумный макс</a>
                  </li>                  

                  <li class="list-group-item list-group-warning">
                    <span class="badge">8.3</span>
                    <a href="#">Матрица</a>
                  </li>                  

                  <li class="list-group-item list-group-warning">
                    <span class="badge">8.1</span>
                    <a href="#">Облачный атлас</a>
                  </li>

                </ul>

            </div>
          </div>  
          


        </div>      


        </div>

      </div>

      <div class="clear"></div>

    </div>


    <footer>
      
      <div class="container">
        <p class="text-center"> <a href="http://ru.wh-db.com">WH-DB.COM</a> </p>
      </div>

    </footer>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>