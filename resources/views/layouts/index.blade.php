<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body class="bg-dark text-white">
    <ul class="nav justify-content-center bg-secondary ">
        <li class="nav-item">
            <a class="nav-link active" href="/">Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/projects/create">Projects</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tasks/create">Tasks</a>
        </li>
    </ul>

   

 @yield('content')


</body>
</html>