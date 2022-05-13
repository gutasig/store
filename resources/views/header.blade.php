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
    <body class="">

        <header class="section-header" >
            <section class="header-main border-bottom bg-gray-100" style="height: 70px; padding-top: 13px;">
                <div class="container px-mt-5">

                    <div class="row align-items-center">

                        <div class="col-lg-2 col-sm-12">
                            <h1 class="text-left h3"><a href="/" style="color: #000; text-decoration: none; cursor: pointer;"><span class="text-primary">M</span>ini <span class="text-primary">W</span>ebshop</a></h1>
                        </div>
                        <div class="col-lg-7 col-sm-12">
                            <form action="/" class="search">
                                <div class="input-group w-100">
                                    <input name="q" type="text" class="form-control" placeholder="Termék kereső...">
                                    <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    </div>
                                </div>
                            </form> 
                        </div>

                        <div class="col-lg-3 col-sm-12 text-right">
                            @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Kosár</a>
                                        <a href="{{ url('/logout') }}" class="btn btn-secondary"><i class="fas fa-sign-out-alt"></i> Kijelentkezés</a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Bejelentkezés</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn btn-secondary"><i class="fa fa-user"></i> Regisztráció</a>
                                        @endif
                                    @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </header>  