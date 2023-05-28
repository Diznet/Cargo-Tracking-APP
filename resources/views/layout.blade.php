<!DOCTYPE html>
<html>
<head>
    <title>Cargo Tracking App</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<header>
    <h1>Cargo Tracking App</h1>
{{--    <nav>--}}
{{--        <ul>--}}
{{--            <li><a href="/track">Track Shipment</a></li>--}}
{{--            <li><a href="/invoices">Manage Shipments</a></li>--}}
{{--            @if(\Illuminate\Support\Facades\Auth::check())--}}
{{--                <li><a href="/logout">Log out</a></li>--}}
{{--            @else--}}
{{--                <li><a href="/login">Log in</a></li>--}}
{{--            @endif--}}
{{--        </ul>--}}
{{--    </nav>--}}
{{--    <section class="et-hero-tabs">--}}
        <div class="et-hero-tabs-container">
            <a class="et-hero-tab" href="/track">Track Shipment</a>
            <a class="et-hero-tab" href="/invoices">Manage Shipments</a>
            @if(\Illuminate\Support\Facades\Auth::check())
                <a class="et-hero-tab" href="/logout">Log out</a>
            @else
                <a class="et-hero-tab" href="/login">Log in</a>
            @endif
            <span class="et-hero-tab-slider"></span>
        </div>
</header>

<main>
    @yield('main')
    <script src="script.js"></script>

</main>

<footer>
    <p>&copy; 2023 Cargo Tracking App. All rights reserved.</p>
</footer>
</body>
</html>
