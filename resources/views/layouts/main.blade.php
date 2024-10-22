<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <div class="row">


        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{route('main.index')}}" class="nav-link active">
                                Main
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('post.index')}}" class="nav-link">
                                Posts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about.index') }}" class="nav-link">
                                about
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contacts.index') }}" class="nav-link">
                                Contacts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
</div>

</body>
</html>
