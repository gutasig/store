@include('header')
        <section class="">
            <div class="container" style="margin-top: 20px; min-height: 785px;">
            
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

@include('footer')