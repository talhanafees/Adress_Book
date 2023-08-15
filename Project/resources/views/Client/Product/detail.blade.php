@extends('Layouts.frontend')

@section('front')
    <!-- shop section -->

    <section class="contact_section layout_padding">
        <div class="container px-0">
            <div class="heading_container ">
                <h2 class="text-center">
                    Product Details
                </h2>
            </div>
        </div>
        <div class="container container-bg">
            <div class="row">
                <div class="col-lg-7 col-md-6 px-0">
                    <div class="map_container">
                        <div class="map-responsive">
                            <img src="{{$product->image}}" class="img-fluid rounded-top" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 px-0">
                    <form action="#" class="text-center">
                        <div>
                            <h2 class="pb-5">{{$product->name}}</h2>
                        </div>
                        <div>
                            <p><b>Price</b> <br>Rs {{$product->price}}</p>
                        </div>
                        <div>
                            <p><b>Description</b> <br> {{$product->description}}</p>
                        </div>
                        <div>
                            <p><b>Categirt</b> <br>{{$category->name}}</p>
                        </div>
                        
                            <button>
                                Add to Cart
                            </button>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->

    <!-- end shop section -->
@endsection
