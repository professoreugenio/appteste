<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
             <h1>Página Home </h1>
<hr>   
<a href="{{ route('home') }}" class="btn btn-warning">Home</a> 
<a href="{{ route('sobre') }}" class="btn btn-default">Sobre</a> 
<a href="{{ route('contato') }}" class="btn btn-default">Contato</a>
<hr>
<p>
   🏠 Página inicial da aplicação, onde os usuários encontram informações principais e acessos rápidos para navegar pelo site.
</p>
            </div>
        </div>
    </div>


    
    
</body>
</html>