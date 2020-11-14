<html>
    <head>
        <header>
            <?php
                echo view ('header',['pagename'=>"home"]);
            ?>
        </header>
    </head>
    <body>
        <div>
            <form action="" method="POST">
                <label>
                    username:
                </label>
                <input type="text" name="username">
                <br>
                <label>
                    password:
                </label>
                <input type="password" name="password">
                <br>
                <button type="submit">submit</button>
            </form>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            echo 'post';
//            header('http://localhost:8000/logining');
//                     http://localhost:8000/login?username=amirhosein&password=1234

            session_start();
            {
                $UserId = DB::table ('users')->select ('id')->where ([['users.username','=',$_POST['username']],['users.password','=',$_POST['password']]])->post()->toArray ();
                $_SESSION['user_id']=$UserId;
                echo 'session created';
            }
        }
        ?>
    </body>
    <footer>
        <?php
            echo view ('footer');
        ?>
    </footer>
</html>
