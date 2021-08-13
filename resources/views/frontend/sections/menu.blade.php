<div id="menu">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Hot Pizza Meals</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters d-flex">
                @foreach($data['pizze'] as $pizza)
                    @if($loop->index === 0 || $loop->index === 1 || $loop->index === 2)
                        <div class="col-lg-4 d-flex ftco-animate">
                            <div class="services-wrap d-flex">
                                <a href="#" class="img" style="background-image: url({{$pizza->featured_image}});"></a>
                                <div class="text p-4">
                                    <h3>{{$pizza->name}}</h3>
                                    <p>{{$pizza->ingrediants}}</p>
                                    <p class="price"><span>{{$pizza->price}} €</span>
                                        <a href="#"
                                           class="ml-2 btn btn-white btn-outline-white">Order</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @elseIf($loop->index === 3 || $loop->index === 4 || $loop->index === 5)
                        <div class="col-lg-4 d-flex ftco-animate">
                            <div class="services-wrap d-flex">
                                <div class="text p-4">
                                    <h3>{{$pizza->name}}</h3>
                                    <p>{{$pizza->ingrediants}}</p>
                                    <p class="price"><span>{{$pizza->price}} €</span>
                                        <a href="#"
                                           class="ml-2 btn btn-white btn-outline-white">Order</a>
                                    </p>
                                </div>
                                <a href="#" class="img" style="background-image: url({{$pizza->featured_image}});"></a>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our Menu Pricing</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                    <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url({{url('img/bg/pizza-1.jpg')}})"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Italian Pizza</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url({{url('img/bg/pizza-2.jpg')}})"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Hawaiian Pizza</span></h3>
                                <span class="price">$29.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url({{url('img/bg/pizza-3.jpg')}})"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Greek Pizza</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url({{url('img/bg/pizza-4.jpg')}})"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Bacon Crispy Thins</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url({{url('img/bg/pizza-5.jpg')}})"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Hawaiian Special</span></h3>
                                <span class="price">$49.91</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url({{url('img/bg/pizza-6.jpg')}})"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Ultimate Overload</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: {{asset('img/bg/pizza-7.jpg')}}"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Bacon Pizza</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url({{url('img/bg/pizza-8.jpg')}})"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Ham &amp; Pineapple</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
