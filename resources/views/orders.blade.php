@include('header')
        
        <section class="">
            <div class="container" style="margin-top: 20px;min-height: 785px;">
            
                <header class="section-heading" style="padding-bottom: 15px;">
                    <h3 class="section-title">Korábbi rendeléseid</h3>
                </header>


                <div class="row">
                    <div class="col-md-8 mt-2 mb-2">
                        
                        @if (count($orders) > 0)
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col" >Rendelés ideje</th>
                                    <th scope="col" >Rendelés összege</th>
                                    <th scope="col" width="100">Státusz</th>
                                    <th scope="col" width="150">Lemondás</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <th scope="row" class="align-middle">{{$order['id']}}</th>
                                            <td class="align-middle">{{$order['created_at']}}</td>
                                            <td class="align-middle">{{number_format($order['price'], 0, '', '.')}} Ft</td>
                                            <td class="align-middle">@if ($order["status"] == 0) Megrendelve @else Postázva @endif</td>
                                            <td class="align-middle">
                                                <a href="/delorder/{{$order['id']}}" onclick="return confirm('Biztosan töröljük ezt a rendelést?')" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Törlés</a>
                                            </td>
                                        </tr>
                                    @endforeach    
                                </tbody>
                            </table>
                        @else
                            <p>Nincsenek még rendeléseid.</p>
                        @endif

                    
                    


                    </div>
                    <div class="col-md-4 mt-2 mb-2">
                        <a href="/dashboard" class="btn btn-info" style="width: 300px; display: block; margin: auto; color: #fff;">Aktuális kosár</a> 
                        <a href="/products" class="btn btn-primary" style="width: 300px; display: block; margin: 15px auto;">Böngéssz a termékeink között</a>
                    </div>
                    
                    <div class="row" style="margin: 20px auto; text-align: center;">
                        {{ $orders->links() }}
                    </div>
                </div> 
                
                
            </div>
        </section>
        

@include('footer')
