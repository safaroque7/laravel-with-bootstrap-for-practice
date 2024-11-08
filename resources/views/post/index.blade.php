@extends('layouts.app')

@section('add-new-post')
    <div class="col-md-9 mt-md-5">
        @if (session('success'))
            <h2 class="text-success"> {{ session('success') }} </h2>
        @endif

        <form action="{{ route('store-post') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="title"> Title </label>
            <input type="text" name="title" id="title" class="form-control mb-md-3" value="{{ old('title') }}">

            @if ($errors->has('title'))
                <p class="text-danger"> {{ $errors->first('title') }} </p>
            @endif

            <label for="description"> Description </label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>

            <label for="image"></label>
            <input type="file" name="image" id="image" class="form-control mb-md-3">

            <input type="submit" value="Publish" class="btn btn-primary">

        </form>
    </div>
@endsection
