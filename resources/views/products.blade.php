<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAA9PT0AEhISAHFxcQClpaUAenp6AK6urgCMjIwAwMDAAMnJyQCenp4Ac3NzAHx8fADb29sAhYWFACYmJgBaWloAY2NjAKCgoABBQUEAFhYWAN3d3QCysrIAU1NTALu7uwAxMTEAxMTEACEhIQC0tLQAiYmJAF5eXgCbm5sAz8/PAE5OTgBXV1cALi4uADc3NwBJSUkAqKioAB4eHgApKSkAZmZmAERERADX19cAGRkZAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKysrKysrKysrKysrKysrKyYrKyYmKyYrKyYmJismJismJiYmJiYmJiYmJiYmJiYmGhoaGhoaGhoaGhoaJhoaGg4ODg4OGBQLDiMMBA4ODg4OJycnDgEFEA4TBR0nJycnIiIiIiIiIBYWEiAWIiInIhgYGCIYKhEIERUVFw0YGBgjIyMjEhETBisgICkbIyMjAAAAGAQHCR8DFRseDAAAACkpKSIDAikRJAIKEggdKSkkJCQOHyUJJQMDAwkZHCQkICAXGRcnJyInIicaKSggIBYnGg4WFhYWFhYWICQWFhYhISEhISEhISEhIQ8hISEhDw8PDw8PDw8PDw8PDw8PDwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
        <title>Mini webshop - tesztfeladat</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    </head>
    <body class="bg-gray-100">
        <div class="container ">
            <br/>
            <h1 class="text-left">Mini webshop - tesztfeladat</h1>
            <br/>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block text-center">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary">Vezérlőpult</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Bejelentkezés</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-secondary">Regisztráció</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>


    </body>
</html>
