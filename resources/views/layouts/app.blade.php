<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Help Center')</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f7f8fa;
            color: #1f2937;
        }
        header {
            background: #1f2937;
            color: white;
            padding: 24px 0;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            padding: 0 20px;
        }
        header a { color: white; text-decoration: none; }
        main { padding: 40px 0; }
        .hero {
            background: white;
            padding: 32px;
            border-radius: 12px;
            margin-bottom: 30px;
            box-shadow: 0 2px 8px rgba(0,0,0,.06);
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
        }
        .card {
            background: white;
            padding: 22px;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
        }
        .card h3 { margin-top: 0; }
        a { color: #2563eb; }
        .article-content {
            background: white;
            padding: 28px;
            border-radius: 10px;
            line-height: 1.7;
        }
        .back { margin-bottom: 20px; display: inline-block; }
    </style>
</head>
<body>
<header>
    <div class="container">
        <a href="{{ route('home') }}"><strong>Help Center</strong></a>
    </div>
</header>

<main>
    <div class="container">
        @yield('content')
    </div>
</main>
</body>
</html>
