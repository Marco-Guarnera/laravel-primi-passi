<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marco Guarnera">
    <meta name="description" content="Intro Laravel">
    <!-- Title -->
    <title>Intro Laravel</title>
</head>

<body>
    <!-- Main Header -->
    <header id="main-header">
        <h1>Intro Laravel</h1>
    </header>
    <!-- Main -->
    <main>
        <!-- Laravel: Hello World! -->
        <h2>{{$text}}</h2>
        <!-- List -->
        <ul>
            @foreach ($list as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </main>
</body>

</html>
