<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Samastipur-Bazaar</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a href="" class="navbar-brand">Samastipur-Bazaar</a>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{route("home")}}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Signup</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Cart</a></li>
                </ul>
        </div>
    </nav>
    @section('content')
        
    @show
</body>
</html>