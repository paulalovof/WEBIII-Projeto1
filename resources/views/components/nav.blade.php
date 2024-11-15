<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="{{asset('img/IF.png')}}" alt="" style="width: 50px;">
            <a class="navbar-brand" href="#">@yield('principal-nav')</a>
            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <!-- <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link> -->
                            <!-- <a href="logout">Logout</a> -->
                            <button type="submit" class="btn btn-secondary">Logout</button>
                </form>
        </div>

    </nav>
    </div>

    <div class = " bg-success text-white d-flex flex-column" style="height: 85vh;">
        @yield('conteudo')
    </div>

    <div class="footer bg-white text-black">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Facere quae dolorum quidem qui aliquid beatae vel, tempora officia molestias voluptates doloribus, 
            perspiciatis culpa dolor eligendi impedit vitae nisi? In, quaerat.</p>
    </div>
</body>
</html>