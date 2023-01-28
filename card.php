<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Card</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/card.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class = "container">
        <div class = "row">
   <div class = "col"> 
    <div class = "icon">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQZ8WFfaYrkYl15lTCZ_PfMkaHqMFnc51Q-Q&usqp=CAU"/>
    </div>
    </div>
    <div class = "col"> 
    <div class = "item">
       <span>Nombre: <?php echo $_POST["add_nombre"]; ?></span>
    </div>
    <div class = "item">
       <span>Apellidos: <?php echo $_POST["add_last_name"]; ?></span>
    </div>
    <div class = "item">
       <span>Edad: <?php echo $_POST["add_age"]; ?></span>
    </div>
    <div class = "item">
       <span>Email: <?php echo $_POST["add_email"]; ?></span>
    </div>
    <div class = "item">
       <span>Password: <?php echo $_POST["add_password"]; ?></span>
    </div>
    </div>
    </div>
    </div>
</body>
</html>