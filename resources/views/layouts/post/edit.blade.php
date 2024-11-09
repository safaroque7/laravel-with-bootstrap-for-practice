@extends('layouts.app')

@section('add-new-post')
    <div class="col-md-9 my-md-5">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ '/dashboard' }}"> Home </a></li>
                <li class="breadcrumb-item"><a href="{{ route('show-all-post') }}"> All Posts </a></li>

                <li class="breadcrumb-item ms-auto"><a href="{{ route('single-post', $editSinglePost->id ) }}" class="text-decoration-none bg-info text-black p-2 rounded-2"> view </a></li>

            </ol>
        </nav>

        @if (session('success'))
            <h2 class="text-success"> {{ session('success') }} </h2>
        @endif

        <form action="{{ route('update-single-post', $editSinglePost->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="title"> Title </label>
            <input type="text" name="title" id="title" class="form-control mb-md-3"
                value="{{ __($editSinglePost->title) }}">

            @if ($errors->has('title'))
                <p class="text-danger"> {{ $errors->first('title') }} </p>
            @endif

            <label for="description"> Description </label>
<textarea name="description" id="description" cols="30" rows="20" class="form-control">
{{ __($editSinglePost->description) }}
</textarea>

            <label for="image"></label>
            <input type="file" name="image" id="image" class="form-control mb-md-3">
            <img src="/images/{{ __($editSinglePost->image) }}" alt="" class="img-fluid d-block mb-md-3 mb-2 w-25">

            <input type="submit" value="Update" class="btn btn-primary">

        </form>
    </div>
@endsection
