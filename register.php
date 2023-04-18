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
                        Register
                        <form method="post">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Confirm Password</label>
                                <input type="password" name="confirmPassword" class="form-control">
                            </div>
                            <button type="submit" class="btn bg-dark text-white float-end" name="register">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    session_start();

    // Check strong password
    function checkStrongPassword($password) {
       $upperStatus = false;
       $lowerStatus = false;
       $numberStatus = false;
       $specialStatus = false;
        
       if(preg_match('/[A-Z]/', $password)) {
            $upperStatus = true;
       }

       if(preg_match('/[a-z]/', $password)) {
        $lowerStatus = true;
        }

        if(preg_match('/[0-9]/', $password)) {
            $numberStatus = true;
        }

        if(preg_match('/[!@#$%*^]/', $password)) {
            $specialStatus = true;
       }

       if($upperStatus == true && $lowerStatus && $numberStatus && $specialStatus) {
            // echo "Strong password";
            return true;
       }else {
            // echo "weak password";
            return false;
       }
    }

    // checkStrongPassword("Apass@233");

        if (isset($_POST['register'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];

           if($name != "" && $email != "" && $password != "" && $confirmPassword != "") {
                if (strlen($password) >= 6 && strlen($confirmPassword) >= 6) {
                    if ($password == $confirmPassword) {
                        $status = checkStrongPassword($password);
                        // var_dump($status);

                        if($status) {
                            $_SESSION['email'] = $email;
                            $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);
                            
                            echo "Register Success!";
                        }else{
                            echo "Your password is not Strong Password! Eg - contain A-Z a-z 0-9 @!#$%^&";
                        }
                        
                        
                    }else {
                        echo "Password not same. Type Again!";
                    }
                }else {
                    echo "Password must be greater than 6";
                }
           }else {
                echo "Need to fill...";
           }

        }
    ?>
</body>
</html>