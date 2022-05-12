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
                            <h1 class="text-left h3">mini webshop</h1>
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
                                        <a href="{{ url('/dashboard') }}" class="btn btn-primary">Vezérlőpult</a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-primary">Bejelentkezés</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn btn-secondary">Regisztráció</a>
                                        @endif
                                    @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </header>  
        
        <section class="">
            <div class="container" style="margin-top: 20px;">
            
                <header class="section-heading" style="padding-bottom: 15px;">
                    <h3 class="section-title">{{$product['name']}} termék adatlapja</h3>
                </header>
                
                    
                <div class="row">
                    
                    <div class="col-md-4 mt-2 mb-2">
                        <img style="width: 100%;" src="{{$product['image']}}"> 
                    </div> 

                    <div class="col-md-4 mt-2 mb-2">
                        <h3>Termékleírás:</h3>
                        <p>{{$product['description']}}</p>
                        <br>
                        <h4>Ár:</h4>
                        <div class="price mt-1 mb-2"><em class="text-danger">{{number_format($product['price'], 0, '', '.')}} Ft</em> helyett, most: <strong class="h5">{{number_format($product['sale_price'], 0, '', '.')}} Ft</strong></div> 
                        <br>
                        <h5>Megrendelés:</h5>
                        <button type="button" class="btn btn-primary">Hozzáadás a kosárhoz</button>
                    </div>
                    
                    <div class="col-md-4 mt-2 mb-2 text-center">
                        <a href="/" class="btn btn-secondary"><< Visza a főoldalra</a>
                    </div>

                    
                </div> 
            
            </div>
        </section>
        

        <footer style="position: fixed; bottom: 0; width: 100%;" class="section-footer border-top bg-gray-100 ">
            <div class="container " style="margin-top: 20px;">
              <section class="footer-bottom row ">
                <div class="col-md-2">
                  <p class="text-muted">   2022 &copy; Gutási Gábor </p>
                </div>
                <div class="col-md-8 text-md-center">
                  <span  class="px-2">info@ggwebsite.com</span>
                  <span  class="px-2">+36 20 535-66-27</span>
                  <span  class="px-2">https://ggwebsite.com/</span>
                </div>
                <div class="col-md-2 text-md-end text-muted">
                  <a target="_blank" href="https://github.com/gutasig/store"><i class="fas fa-code"></i></a>
                </div>
              </section>
            </div>
          </footer>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script  src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>


    </body>
</html>
