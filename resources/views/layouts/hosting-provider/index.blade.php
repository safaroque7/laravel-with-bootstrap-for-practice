@extends('layouts.app')

@section('add-new-service')
    <div class="col-md-10 mt-md-3 mt-2 mb-md-4 mb-3">

        <!-- breadcrumbs start -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Add New Hosting Provider's Name
                </li>
            </ol>
        </nav>
        <!-- breadcrumbs end -->



        @if (session('success'))
            <h2 class="text-success"> {{ session('success') }} </h2>
        @endif

        <div class="row mb-md-3 mb-2">
            <div class="col-md-4">

                <form action="{{ route('store-new-hosting-provider') }}" method='POST'>
                    @csrf

                    <label for="category-name" class="form-label"> Hosting provider's Name </label>
                    <input autofocus type="text" name="name" class="form-control mb-md-3 border-@if($errors->has('name')){{ __('danger') }} @endif" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                            <p class="text-danger"> {{ $errors->first('name') }} </p>
                        @endif

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>

            <div class="col-md-8">
                <table id="table_id" class="display" style="width: 100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Hosting Provider's Name</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($hostingProvderCollection as $hostingProvderItem)
                            <!-- category item start -->
                            <tr>
                                <td> {{ __($hostingProvderItem->id) }} </td>
                                <td> {{ __($hostingProvderItem->name) }} </td>
                                <td>
                                    <button class="btn btn-info text-white"> 
                                        <a href="{{ route('edit-hosting-provider',  $hostingProvderItem->id) }}" class="text-decoration-none text-white"> Edit </a> 
                                    </button>
                                    <button class="btn btn-danger text-white"> 
                                        <a onclick="return confirm('Are you sure you want to delete this item?')" href="{{ route('delete-hosting-provider', $hostingProvderItem->id) }}" class="text-decoration-none text-white"> Delete </a>   
                                    </button>
                                </td>
                            </tr>
                            <!-- category item end-->
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th> Service Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>



    </div>
@endsection
