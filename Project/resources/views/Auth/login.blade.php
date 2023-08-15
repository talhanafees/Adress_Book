@extends('Layouts.frontend')

@section('front')
    <section class="contact_section layout_padding">
        <div class="container px-0">
            <div class="heading_container ">
                <h2 class="text-center mr-5 pr-5">
                    Login
                </h2>
            </div>
        </div>
        <div class="container container-bg">
            <div class="row">
                <div class="offset-3 col-md-6 col-lg-5 px-0">
                    <form action="{{url('/LoginPost')}}" method="POST">
                        @csrf
                        <div>
                            <input type="email" placeholder="Email" name="email"/>
                        </div>
                        <div>
                            <input type="Password" placeholder="Password" name="password" />
                        </div>
                        <div class="d-flex ">
                            <button>
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
