<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!--<ul>
        <li><a href="/">Hello</li>
        <li><a href="/bonjour">Hello</li>
        <li><a href="/au-revoir">Good bye</li>
        <li><a href="/a-propos">Good bye</li>
        <li><a href="/exercice/categories">categories</a></li>
        <li><a href="/exercice/films">Films (Exo)</a></li>
        <li><a href="/categories/creer">Ajouter une catégorie</a></li>
        
        
    </ul>-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
        <div class="container">
            <a class="navbar-brand" href="#">Webflix</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                    <a class="nav-link" href="/categories">catégories</a>
                    <a class="nav-link" href="/a-propos">A propos</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container pt-5 mt-5">



        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @yield('content')

    </div>

    <footer>
        <div class="container">
            <p class="text-center">Copyright &copy; {{ date('Y') }} - Webflix</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
