<?php 
        // переменные
        $dblogin = filter_var(trim(htmlspecialchars($_POST['login'])));
        $dbpass = filter_var(trim(htmlspecialchars($_POST['password'])));
        $dbemail = filter_var(trim(htmlspecialchars($_POST['email'])));

        // шифрование пароля
        $dbpass = md5($dbpass.'big!fRtSxvzX#NbnM!p');


        // подключение к базе данных
        $mysql = new mysqli('localhost','root','root','MyDataBase');

        // вставка данных в базу данных
        $result = $mysql->query("SELECT * FROM `acc` WHERE `login` = '$dblogin' AND `pass` = '$dbpass' AND `email` = '$dbemail'");

        $user = mysqli_fetch_assoc($result);

        if ($user) {
                
                echo "пользователь найден!";
                header("Location:/price.php");
        }
        else{
                echo "ошибка!";
                exit();
        }
        setcookie('user', $user['login'], time() + 3600, "/");



        $mysql->close(); 
        header('Location: /price.php');
        exit();

 ?>