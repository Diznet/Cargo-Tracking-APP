<!DOCTYPE html>
<html>
<head>
    <title>Cargo Tracking App</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<header>
    <h1>Cargo Tracking App</h1>
    <nav>
        <ul>
            <li><a href="/track">Track Shipment</a></li>
            <li><a href="/home">Manage Shipments</a></li>
            @if(\Illuminate\Support\Facades\Auth::check())
                <li><a href="/logout">Log out</a></li>
            @else
                <li><a href="/login">Log in</a></li>
            @endif
        </ul>
    </nav>
</header>

<main>
    <div class="container">
        <div class="container-inner">
            @yield('main')
        <script src="script.js"></script>
        </div>
    </div>


</main>

<footer>
    <p>&copy; 2023 Cargo Tracking App. All rights reserved.</p>
</footer>
</body>
</html>
