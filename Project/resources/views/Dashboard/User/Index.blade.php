@extends('Layouts.dashboard')

@section('dashboard')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="row flex-grow">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                        <h2 class="">Users</h2>
                                    </div>
                                    {{-- <div>
                                        <a href="{{ url('/Dashhoard/Product/Add') }}"
                                            class="btn btn-primary text-white mb-0 me-5" type="button">
                                            <i class="mdi mdi-account-plus"></i>Add new
                                        </a>
                                    </div> --}}
                                </div>
                                <div class="table-responsive  mt-1">
                                    <table class="table select-table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Id
                                                </th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>role</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $count = 0;
                                            @endphp
                                            @foreach ($users as $item)
                                                @php
                                                    $count++;
                                                @endphp
                                                <tr>
                                                    <td>
                                                        {{ $count }}
                                                    </td>
                                                    <td>
                                                        {{ $item->id }}
                                                    </td>
                                                    <td>
                                                        <div class="d-flex ">
                                                            <img src="{{ $item->image }}" alt="">
                                                            <div>
                                                                <h6>{{ $item->name }}</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{ $item->email }}
                                                    </td>
                                                    <td>
                                                        {{ $item->role==1 ?"Admin":"User" }}
                                                    </td>
                                                    <td>
                                                        {{ $item->created_at }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
