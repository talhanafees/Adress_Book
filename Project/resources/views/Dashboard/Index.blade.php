@extends('Layouts.dashboard')

@section('dashboard')
    <div class="row">
        @php
            use App\Models\category;
            use App\Models\Product;
            use App\Models\User;

            $totalProducts = Product::count();
            $totalCategories = category::count();
            $totalUsers = User::count();
        @endphp
        <div class="offset-1 mt-5 col-md-6 grid-margin stretch-card">
            {{-- _____________ Statistics _____________ --}}

            <div class="col-lg-4 col-sm-5 ms-5">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2">
                        <div>
                            <h2>{{$totalProducts}}</h2>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Product</p>
                        </div>
                    </div>

                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0">Total Products</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-5 ms-5">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2">
                        <div>
                            <h2>{{$totalCategories}}</h2>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Category</p>
                        </div>
                    </div>

                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0">Total Categories</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-5 ms-5">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2">
                        <div>
                            <h2>{{$totalUsers}}</h2>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">User</p>
                        </div>
                    </div>

                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0">Total Users</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-5 ms-5">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2">
                        <div>
                            <h2>10</h2>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Order</p>
                        </div>
                    </div>

                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0">Total Orders</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
