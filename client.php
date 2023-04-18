<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Requset | Response</h1>
    <h1>Client Site</h1>

    GET | Post
    GET => <a href=""></a>
    Post => <form action="" method="post"></form>

    <hr> 

    <a href="./server.php?name=Alex&job=developer&address=yangon">Server</a>

    <!-- <form action="server.php" method="get">
        First Name<input type="text" name="firstName" id=""> <br/>
        Second Name <input type="text" name="secName" id=""> <br/>
        <button type="submit">Click to Send</button>
    </form> -->

    <form action="server.php" method="post" enctype="multipart/form-data">
        First Name<input type="text" name="fName" id=""> <br/>
        Second Name <input type="text" name="sName" id=""> <br/>

        <select name="gender" id="">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select><br>

        <input type="file" name="myImg" id=""><br>

        <input type="submit" value="Click to Send">
    </form>
</body>
</html>