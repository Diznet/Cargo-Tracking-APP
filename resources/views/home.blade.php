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
            <li><a href="Track.html">Track Shipment</a></li>
            <li><a href="Manage.html">Manage Shipments</a></li>
            <li><a href="Contact.html">Log in</a></li>
        </ul>
    </nav>
</header>

<main>
<div class="container">
        <div class="container-inner">
  <section>
        <h2>Welcome to our Cargo Tracking App</h2>
        <p>Track and manage your shipments with ease.</p>
        <a href="#" class="button">Get Started</a>
    </section>

    <section>
        <h2>Track Shipment</h2>
        <form>
            <label for="trackingNumber">Enter Tracking Number:</label>
            <input type="text" id="trackingNumber" name="trackingNumber">
            <button type="submit">Track</button>
        </form>
    </section>
            <script src="script.js"></script>
        </div>
    </div>


</main>

<footer>
    <p>&copy; 2023 Cargo Tracking App. All rights reserved.</p>
</footer>
</body>
</html>
