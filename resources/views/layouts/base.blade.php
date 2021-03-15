<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="HOMECSS.css">
    <title>@yield('books')</title>
</head>
<body>
    <header> <ul id="nav">
        <li> <a href="../">menu</a></li>
        <li><a href="liste">liste des livres</a></li>
        </ul> </header>
        <img src="public/img/biblio">
    <main>
        @yield('content')
        
    </main>
    <footer>le footer est là!!!!</footer>
</body>
</html>