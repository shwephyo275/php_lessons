<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
    rel="stylesheet"
    />
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-3">
                <div class="text-center">
                    <a href="./login.php">
                        <button class="btn bg-primary text-white mb-3" style="width: 200px;">login</button>
                    </a>
                </div>

                <div class="text-center">
                    <a href="register.php">
                        <button class="btn bg-success text-white mb-3" style="width: 200px;">Register</button>
                    </a>
                </div>

                <div class="text-center">
                    <a href="logout.php">
                        <button class="btn bg-danger text-white mb-3" style="width: 200px;">logout</button>
                    </a>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button type="submit" class="btn bg-dark text-white float-end" name="login">login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        session_start();

        if (isset($_POST['login'])) {
            $userEmail = $_POST['email'];
            $userPassword = $_POST['password'];

           if($userEmail != "" || $userPassword != ""){
                if($userEmail == $_SESSION['email'] && password_verify($userPassword, $_SESSION['password'])) {
                    echo "login success!";
                }else {
                    echo "login Fail! Try Again..";
                }
           }else {
            echo "Need to fill..";
           }

        }
    ?>
</body>
</html>