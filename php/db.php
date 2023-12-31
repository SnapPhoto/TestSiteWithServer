
<?php 
        // переменные
        $login = filter_var(trim(htmlspecialchars($_POST['login'])));
        $pass = filter_var(trim(htmlspecialchars($_POST['password'])));
        $email = filter_var(trim(htmlspecialchars($_POST['email'])));

       


        // подключение к базе данных
        $mysql = new mysqli('localhost','root','root','MyDataBase');

        // проверка переменных на корректность
        if (mb_strlen($login) < 5 || mb_strlen($login) > 25){
                echo "Ошибка! Некорректный логин (не менее 5 и не более 25 символов)";
                $mysql->close();
                exit();
        }
        if (mb_strlen($pass) < 8 || mb_strlen($pass) > 99){
                echo "Ошибка! Некорректный пароль (не менее 8 и не более 99 символов)";
                $mysql->close();
                exit();
        }
        if (mb_strlen($email) < 10 || mb_strlen($email) > 99){
                echo "Ошибка! Некорректный email (не менее 5 и не более 99 символов)";
                $mysql->close();
                exit();
        }

        // шифрование пароля
        $pass = md5($pass.'big!fRtSxvzX#NbnM!p');




        // вставка данных в базу данных
        $mysql->query("INSERT INTO `acc` (`login`,`pass`,`email`) VALUES ('$login','$pass','$email')");


        $mysql->close(); 
        header('Location: /price.php');
        exit();

 ?>