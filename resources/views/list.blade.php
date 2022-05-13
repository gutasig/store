@include('header')
        <section class="">
            <div class="container" style="margin-top: 20px;">
            
                <header class="section-heading" style="padding-bottom: 15px;">
                    <h3 class="section-title">Termékek listázása</h3>
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
                        </div>
                    </div> 
                   @endforeach

                    
                </div> 

                <div class="row" style="margin: 20px auto;">
                 {{ $products->links() }}
                </div>  
            
            </div>
            
        </section>

@include('footer')