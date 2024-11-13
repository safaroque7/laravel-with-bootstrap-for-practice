@extends('layouts.app')

@section('add-new-service')
    <div class="col-md-10 mt-md-3 mt-2 mb-md-4 mb-3">

        <!-- breadcrumbs start -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Edit Category
                </li>
            </ol>
        </nav>
        <!-- breadcrumbs end -->

        <div class="display-5 ps-5 animate__pulse animate__animated animate__infinite infinite"> Edit </div>

        @if (session('success'))
            <h2 class="text-success"> {{ session('success') }} </h2>
        @endif

        <div class="row mb-md-3 mb-2">
            <div class="col-md-4">

                <form action="{{ route('category-update', $editedCategory->id) }}" method='POST'>
                    @csrf

                    <label for="category-name" class="form-label"> Category Name </label>
                    <input autofocus type="text" name="name"
                        class="form-control mb-md-3 border-@if ($errors->has('name')) {{ __('danger') }} @endif"
                        value="{{ __($editedCategory->name) }}">

                    @if ($errors->has('name'))
                        <p class="text-danger"> {{ $errors->first('name') }} </p>
                    @endif

                    <label for="description"> Description </label>
<textarea name="description" id="description" cols="30" rows="5" class="form-control mb-md-3 mb-2">
{{ __($editedCategory->description) }}
</textarea>
                    <button type="submit" class="btn btn-primary">Update</button>

                </form>

            </div>

            <div class="col-md-8">
                <table id="table_id" class="display" style="width: 100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($allCategoryCollection as $allCategoryItem)
                            <!-- category item start -->
                            <tr>
                                <td> {{ __($allCategoryItem->id) }} </td>
                                <td> {{ __($allCategoryItem->name) }} </td>
                                <td class="text-secondary"> {{ __($allCategoryItem->description) }} </td>
                                <td>
                                    <button class="btn btn-info text-white">
                                        <a href="{{ route('category-edit', $allCategoryItem->id) }}"
                                            class="text-decoration-none text-white"> Edit </a>
                                    </button>
                                    <button class="btn btn-danger text-white">
                                        <a onclick="return confirm('Are you sure you want to delete this item?')"
                                            href="{{ route('category-delete', $allCategoryItem->id) }}"
                                            class="text-decoration-none text-white"> Delete </a>
                                    </button>
                                </td>
                            </tr>
                            <!-- category item end-->
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th> Category Name</th>
                            <th> Description </th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>



    </div>
@endsection
