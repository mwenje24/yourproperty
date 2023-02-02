
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YourProperty</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    {{-- <x-flash-message /> --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand fs-2 fw-bolder" href="/"><span class="text-secondary">L</span>G</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 text-dark  justify-content-end">
                    {{-- @auth --}}
                    {{-- <li class="nav-item"><span class="text-dark bold nav-link"><i class="fa fa-user"></i> {{auth()->user()->name}}</span></li>                     --}}
                    <li class="nav-item"><a class="nav-link" href="/property/categorized/{property->category}"><i class="fa fa-home"></i> Residential</a></li>
                    <li class="nav-item"><a class="nav-link" href="/property/categorized/{property->category}"><i class="fa fa-building"></i> Commercial</a></li>
                    <li class="nav-item"><a class="nav-link" href="/property/categorized/{property->category}"><i class="fa fa-industry"></i> Industrial</a></li>
                    <li class="nav-item"><a class="nav-link" href="/property/categorized/{property->category}"><i class="fa fa-map-marker"></i> Land</a></li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <input class="nav-link btn" type="submit" value="Logout"/>
                        </form>
                    </li>
                    {{-- @else --}}
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/register">Register</a></li>                    
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                    {{-- @endauth --}}
                    <li class="nav-item btn btn-sm btn-outline-secondary mx-5"><a class="nav-link" aria-current="page" href="/listings/create">Post Job</a></li>
                </ul>
            </div>
            
        </div>
    </nav>
    {{-- VIEW OUTPUT --}}
    
    {{$slot}}

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; mwenje24 2023</p></div>
    </footer>
</body>
</html>