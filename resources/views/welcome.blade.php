<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tazua - Creator Platform for Kenya</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .welcome-container {
            max-width: 600px;
            padding: 2rem;
        }

        .logo {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .subtitle {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            margin: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .btn:hover {
            background: rgba(255, 255, 255, 0.3);
            text-decoration: none;
            color: white;
        }

        .redirect-message {
            margin-top: 2rem;
            font-size: 0.9rem;
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <div class="welcome-container">
        <div class="logo">Tazua</div>
        <div class="subtitle">Creator Platform for Kenya</div>
        <p>Welcome to Tazua! This is a temporary welcome page.</p>

        <div>
            <a href="{{ url('/') }}" class="btn">Go to Homepage</a>
            <a href="{{ route('blogs.index') }}" class="btn">Visit Blog</a>
            <a href="{{ route('admin.blogs.index') }}" class="btn">Admin Panel</a>
        </div>

        <div class="redirect-message">
            <p>If you're seeing this page, you can navigate to the main site using the buttons above.</p>
        </div>
    </div>

    <script>
        // Auto redirect to home page after 3 seconds
        setTimeout(function() {
            window.location.href = '{{ url('/') }}';
        }, 3000);
    </script>
</body>

</html>
