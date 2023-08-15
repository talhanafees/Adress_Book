@extends('Layouts.frontend')

@section('front')
    <!-- shop section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Products
                </h2>
            </div>
            <div class="row">
                @foreach ($products as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="{{url('/Product/Detail')}}/{{$item->id}}">
                                <div class="img-box">
                                    <img src="{{$item->image}}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{$item->name}}
                                    </h6>
                                    <h6>
                                        Price
                                        <span>
                                            Rs {{$item->price}}
                                        </span>
                                    </h6>
                                </div>
                                <div class="new">
                                    <span>
                                        New
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- end shop section -->
@endsection
