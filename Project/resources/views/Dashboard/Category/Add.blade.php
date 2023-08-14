@extends('Layouts.dashboard')

@section('dashboard')
    <div class="row">

        <div class="offset-3 mt-5 col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="mb-5">Create</h2>

                    <form class="forms-sample" method="post" action="{{url('/Dashhoard/Category/AddPost')}}" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="form-group">
                            <label for="exampleInputUsername1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputUsername1" placeholder="Name" value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" id="exampleInputEmail1" class="form-control h-100" id="" cols="30" rows="5">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" name="image" class="form-control h-100" id="exampleInputPassword1">
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary me-2">Add</button>
                    </form>
                    
                </div>
            </div>
        </div>

    </div>
@endsection
