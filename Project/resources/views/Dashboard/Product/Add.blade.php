@extends('Layouts.dashboard')

@section('dashboard')
    <div class="row">

        <div class="offset-3 mt-5 col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="mb-5">Create</h2>


                    {{-- <form class="forms-sample" method="post" action="{{url('/Dashhoard/Product/AddPost')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputUsername1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" id="price" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" id="exampleInputEmail1" class="form-control h-100" id="" cols="30" rows="5"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" name="image" class="form-control h-100" id="exampleInputPassword1" placeholder="Image">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category</label>
                            <select class="form-control form-select" name="categoryId">
                                <option selected>---- Category ----</option>
                                @foreach ($categories as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Add</button>
                    </form> --}}

                    <form class="forms-sample" method="post" action="{{ url('/Dashhoard/Product/AddPost') }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputUsername1">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                id="exampleInputUsername1" placeholder="Name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                                id="price" placeholder="Price" value="{{ old('price') }}">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" id="exampleInputEmail1" class="form-control h-100 @error('description') is-invalid @enderror"
                                cols="30" rows="5">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" name="image" class="form-control h-100 @error('image') is-invalid @enderror"
                                id="exampleInputPassword1">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Category</label>
                            <select class="form-control form-select @error('categoryId') is-invalid @enderror"
                                name="categoryId">
                                <option selected>---- Category ----</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('categoryId') == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('categoryId')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Add</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection
