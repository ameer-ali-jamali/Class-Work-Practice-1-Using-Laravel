<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <form action="{{ URL::TO('submit') }}" method="post">
            @csrf
            Name : <input type="text" name="name" id="">&nbsp;
            <br>
            Email : <input type="text" name="email" id="">
            Password : <input type="text" name="pass" id="">
            <br>
            <hr>
            <input type="submit" name="submit" id="" value="Submit">
        </form>
    </center>
</body>

</html>
