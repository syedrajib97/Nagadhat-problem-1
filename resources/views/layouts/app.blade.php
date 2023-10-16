<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Search Engine</title>

   <!-- Include Bootstrap CSS via CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Include Custom CSS -->
<link href="/css/custom.css" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Include your CSS and JavaScript files here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <!-- Your site's header content --> 
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Your site's footer content -->
    </footer>
    
    <!-- Include your JavaScript files here -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
