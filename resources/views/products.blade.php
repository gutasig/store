@include('header')
        
        <section class="">
            <div class="container" style="margin-top: 20px;">
            
                <header class="section-heading" style="padding-bottom: 15px;">
                    <h3 class="section-title">Legfrissebb termékeink</h3>
                </header>
                
                    
                <div class="row">
                    
                   @foreach ($products as $product)
                    <div class="col-md-3 mt-2 mb-2">
                        <div href="/product/{{$product['id']}}" class="card card-product-grid">
                            <a href="/product/{{$product['id']}}" class="img-wrap"> <img style="width: 100%;" src="{{$product['image']}}"> </a>
                            <figcaption class="info-wrap text-center">
                                <a href="/product/{{$product['id']}}" class="h4 text-primary text-decoration-none mt-1">{{$product['name']}}</a>
                                <div class="price mt-1 mb-2"><del class="text-danger"><em>{{number_format($product['price'], 0, '', '.')}} Ft</em></del><br><strong class="h5">{{number_format($product['sale_price'], 0, '', '.')}} Ft</strong></div> 
                            </figcaption>
                            @if (Route::has('login'))
                                @auth
                                    <a href="/add/{{$product['id']}}" onclick="return confirm('Biztosan hozzáadjuk a kosárhoz?')" type="button" class="btn btn-dark">Hozzáadás a kosárhoz</a>
                                @else
                                    <button type="button" class="btn btn-secondary" onclick="alert('Csak regisztrált tagok számára elérhető a funkció!')">Hozzáadás a kosárhoz</button>
                                @endauth
                            @endif
                        </div>
                    </div> 
                   @endforeach

                    
                </div> 

                <div class="row" style="margin: 20px auto; text-align: center;">
                    <a href="/products" class="btn btn-primary" style="width: 300px; display: block; margin: auto;">Összes termék megtekintése >></a>
                </div>
            </div>
        </section>
        

@include('footer')
