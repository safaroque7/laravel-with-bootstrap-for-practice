@extends('layouts.app')

@section('all-clients')
    <div class="col-md-10 mt-md-3">

        @if (session('success'))
            <h2 class="text-danger"> {{ session('success') }} </h2>
        @endif


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ ('/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Posts</li>
            </ol>
        </nav>

        <table id="table_id" class="display" style="width: 100%">
            <thead>
                <tr class="d-flex flex-wrap border-bottom border-dark bottom-1">
                    <th>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </th>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th class="ms-auto">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($allPostCollection as $allPostItem)
                    <!-- client item start -->
                    <tr class="d-flex flex-wrap border">
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="post-{{ __($allPostItem->id) }}">

                            </div>
                        </td>
                        <td> {{ __($allPostItem->id) }} </td>
                        <td class="post-image-size">
                            <a class="text-dark text-decoration-none" href="{{ route('single-post', $allPostItem->id) }}">
                                <img src="/images/{{ $allPostItem->image }}" alt="Client-photo"
                                    class="me-md-2 me-1 img-fluid"
                                    onerror="this.onerror=null;this.src='https://picsum.photos/75/40';" />
                            </a>
                        </td>
                        <td> <a class="text-dark text-decoration-none" href="{{ route('single-post', $allPostItem->id) }}">
                                {{ __($allPostItem->title) }} </a> </td>

                        <td class="ms-auto">
                            <div class="dropdown">
                                <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('single-post', $allPostItem->id) }}">View</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('edit-single-post', $allPostItem->id) }}">Edit</a>
                                    </li>
                                    <li><a onclick="return confirm('Are you sure you want to delete this item?')"
                                            class="dropdown-item"
                                            href="{{ route('delete-single-post', $allPostItem->id) }}">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <!-- client item start -->
                @endforeach

            </tbody>

            <tfoot>
                <tr class="d-flex flex-wrap border-top border-dark top-1">
                    <th>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </th>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th class="ms-auto">Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
