@include('header')
        
        <section class="">
            <div class="container" style="margin-top: 20px; min-height: 785px;">
            
                <header class="section-heading" style="padding-bottom: 15px;">
                    <h3 class="section-title">Kosár</h3>
                </header>
                
                    
                <div class="row">
                    <div class="col-md-8 mt-2 mb-2">
                        
                        @if (count($products) > 0)
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col" width="100">Kép</th>
                                    <th scope="col" >Terméknév</th>
                                    <th scope="col" width="100">Ár</th>
                                    <th scope="col" width="150">Eltávolítás</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <th scope="row" class="align-middle">{{$product['id']}}</th>
                                            <td class="align-middle"><img style="width: 100%;" src="{{ url('/img') }}/{{$product['product_id']}}"></td>
                                            <td class="align-middle">{{$product['product_name']}}</td>
                                            <td class="align-middle">{{number_format($product['price'], 0, '', '.')}} Ft</td>
                                            <td class="align-middle">
                                                <a href="/del/{{$product['id']}}" onclick="return confirm('Biztosan hozzáadjuk a kosárhoz?')" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Törlés</a>
                                            </td>
                                        </tr>
                                    @endforeach    
                                </tbody>
                                <tr>
                                    <th></th>
                                    <td></td>
                                    <td>Összesen:</td>
                                    <td>{{number_format($subprice, 0, '', '.')}} Ft</td>
                                    <td>
                                        <a href="/order" onclick="return confirm('Biztosan megrendeljük a kosár tartalmát?')" type="button" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Megrendelés</a>
                                    </td>
                                </tr>
                            </table>
                        @else
                            <p>A kosarad jelenleg üres.</p>
                        @endif




                    </div>
                    <div class="col-md-4 mt-2 mb-2">
                        <a href="/orders" class="btn btn-info" style="width: 300px; display: block; margin: auto; color: #fff;">Korábbi rendeléseid</a> 
                        <a href="/products" class="btn btn-primary" style="width: 300px; display: block; margin: 15px auto;">Böngéssz a termékeink között</a>
                    </div>
                    
                </div> 

            </div>
        </section>
        

@include('footer')
