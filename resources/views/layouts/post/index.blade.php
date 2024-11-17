@extends('layouts.app')

@section('add-new-post')
    <div class="col-md-9 mt-md-5">
        <div class="row justify-content-between">
            <div class="col-md-10 pe-md-4">

                @if (session('success'))
                    <h2 class="text-success"> {{ session('success') }} </h2>
                @endif

                <form action="{{ route('store-post') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label for="title"> Title </label>
                    <input type="text" name="title" id="title" class="form-control mb-md-3"
                        value="{{ old('title') }}">

                    @if ($errors->has('title'))
                        <p class="text-danger"> {{ $errors->first('title') }} </p>
                    @endif

                    <label for="sub-title"> Sub Title </label>
                    <input type="text" name="sub_title" id="sub-title" class="form-control mb-md-3"
                        value="{{ old('sub_title') }}">

                    @if ($errors->has('sub_title'))
                        <p class="text-danger"> {{ $errors->first('sub_title') }} </p>
                    @endif

                    <label for="description"> Description </label>
                    <textarea name="content" id="content" cols="30" rows="15" class="ckeditor form-control"></textarea>
            </div>

            <div class="col-md-2 px-0">
                {{-- Categories --}}
                <div class="mb-md-3 mb-2">
                    <h6 class="bg-secondary mx-0 p-2 text-white mb-0 rounded-top"> Categories </h6>
                    <ul
                        class="list-unstyled px-3 overflow-auto category-items-box border border-1 border-secondary pt-md-3 pt-2 rounded-bottom">

                        @foreach ($allCategoryCollection as $allCategoryItem)
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="categories[]" value="{{ __($allCategoryItem->id) }}"
                                        id="category{{ __($allCategoryItem->id) }}">
                                    <label class="form-check-label" for="category{{ __($allCategoryItem->id) }}">
                                        {{ __($allCategoryItem->name) }} </label>
                                </div>
                            </li>
                        @endforeach


                    </ul>
                </div>
                {{-- image --}}
                <div class="mb-md-3 mb-2">
                    
                    <label for="image" class="bg-secondary mx-0 p-2 text-white mb-0 rounded-top w-100"> Upload photo</label>

                    <input type="file" name="image" id="image" class="form-control mb-md-3">

                    @if ($errors->has('image'))
                        {{ $errors->first('image') }}
                    @endif
                </div>

                {{-- Caption --}}
                <div class="mb-md-3 mb-2">
                    <h6 class="bg-secondary mx-0 p-2 text-white mb-0 rounded-top"> Caption </h6>
                    <input type="text" name="caption" id="caption" class="form-control">
                </div>

                {{-- Summary --}}
                <div class="mb-md-3 mb-2">
                    <h6 class="bg-secondary mx-0 p-2 text-white mb-0 rounded-top"> Summary </h6>
                    <select name="summary" id="summary" class="form-control">
                        <option value="1"> Published </option>
                        <option value="0"> Unpublished </option>
                        <option value="2"> Draft </option>
                    </select>
                </div>

                {{-- Excerpt --}}
                <div class="mb-md-3 mb-2">
                    <h6 class="bg-secondary mx-0 p-2 text-white mb-0 rounded-top"> Excerpt </h6>
                    <textarea name="excerpt" id="excerpt" cols="5" rows="2" class="form-control"></textarea>
                </div>

                {{-- Allow Comments --}}
                <div class="mb-md-3 mb-2">
                    <h6 class="bg-secondary mx-0 p-2 text-white mb-0 rounded-top"> Allow Comments </h6>
                    <select name="comments" id="comments" class="form-control">
                        <option value="1"> Yes </option>
                        <option value="0"> No </option>
                    </select>
                </div>

                <input type="submit" value="Publish" class="btn btn-secondary w-100 rounded-top">
            </div>
        </div>
        </form>
    </div>

    <script src="ckeditor/ckeditor.js"></script>
@endsection
