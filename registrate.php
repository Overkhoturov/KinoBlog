<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Регистрация</title>
</head>
<body>
    <div class="container mt-4">
    <h1>Форма регистрации</h1>
    <div class = "row">
        <div class = "col-3 ">
        <form action="assets/parts/check.php" method = "post">
        
        <input type="text" class="form-control" name="login" id="login" placeholder="input login"><br>
            <input type="text" class="form-control" name="name" id="name" placeholder="input name"><br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="input password"><br>
            <button class="btn btn-success" type ="submit">Зарегистрировать </button>
        </form>
        </div>  
    </div>
    </div>
</body>
</html>