@extends('layouts.guest')

@section('contact-form')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                    <h2 class="text-success"> {{ __(session('success')) }} </h2>
                @endif
                <h1 class="mb-md-3 mb-1"> Contact us </h1>

                <form action="{{ route('contact-store') }}" method="POST">
                    @csrf
                    <div class="mb-md-3 mb-2">
                        <label for="name"> Name </label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="mb-md-3 mb-2">
                        <label for="phone"> Phone </label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
                        @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>

                    <div class="mb-md-3 mb-2">
                        <label for="email"> Email </label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="mb-md-3 mb-2">
                        <label for="comment"> Comment </label>
                        <textarea name="comment" id="comment" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    {{-- <div class="mb-md-3 mb-2">
                        <label for="photo"> Upload Photo </label>
                        <input type="file" name="photo" id="photo" class="form-control">
                    </div> --}}

                    <div class="mb-md-3 mb-2">
                        <input type="submit" value="Send" class="btn btn-secondary">
                        <input type="reset" value="reset" class="btn btn-danger">
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
