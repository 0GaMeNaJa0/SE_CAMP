<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>My Folder and My Page</h1>
    <h1>
        <form method="post" action = "/my-route">
            @csrf
            <input type="text" name ="myinput">
            <button type = "submit">Submit</button>
        </form>
    </h1>
</body>
</html>
