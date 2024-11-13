@extends('layouts.app')

@section('add-new-post')
    <div class="col-md-9 mt-md-5">
        <div class="row justify-content-between">
            <div class="col-md-10 pe-md-4">

                @if (session('success'))
                    <h2 class="text-success"> {{ session('success') }} </h2>
                @endif

                <h5 class="animate__animated animate__fadeOut animate__infinite text-primary"> Edit </h5>
                <h2> {{ __($editSinglePost->title) }} </h2>

                <div class="d-flex justify-content-start">
                    Link : <a href="{{ route('single-post', $editSinglePost->id) }}" class="mb-md-3 mb-1 d-block"> {{ __($editSinglePost->title) }}</a>
                </div>

                <form action="{{ route('update-single-post', $editSinglePost->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <label for="title"> Title </label>
                    <input type="text" name="title" id="title" class="form-control mb-md-3"
                        value="{{ __($editSinglePost->title) }}">

                    @if ($errors->has('title'))
                        <p class="text-danger"> {{ $errors->first('title') }} </p>
                    @endif

                    <label for="sub-title"> Sub Title </label>
                    <input type="text" name="sub_title" id="sub-title" class="form-control mb-md-3"
                        value="{{ __($editSinglePost->sub_title) }}">

                    @if ($errors->has('sub_title'))
                        <p class="text-danger"> {{ $errors->first('sub_title') }} </p>
                    @endif

                    <label for="description"> Description </label>
                    <textarea name="description" id="description" cols="30" rows="15" class="form-control">
{{ __($editSinglePost->description) }}
                    </textarea>
            </div>

            <div class="col-md-2 px-0">
                {{-- Categories --}}
                <div class="mb-md-3 mb-2">
                    <h6 class="bg-secondary mx-0 p-2 text-white mb-0"> Categories </h6>
                    <ul
                        class="list-unstyled px-3 overflow-auto category-items-box border border-1 border-secondary rounded-2">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1"> Category 1 </label>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- image --}}
                <div class="mb-md-3 mb-2">
                    
                    <label for="image"></label>
                    <input type="file" name="image" id="image" class="form-control mb-md-3">
                    <img src="/images/{{ __($editSinglePost->image) }}" alt="{{ __($editSinglePost->title) }}"
                        class="img-fluid d-block mb-md-3 mb-2">
                        @if ($errors->has('image'))
                        <span class="text-danger"> {{ $errors->first('image') }} </span>
                    @endif

                </div>

                {{-- Caption --}}
                <div class="mb-md-3 mb-2">
                    <h6 class="bg-secondary mx-0 p-2 text-white mb-0"> Caption </h6>
                    <input type="text" name="caption" id="caption" class="form-control" value="{{ __($editSinglePost->caption) }}">
                </div>

                {{-- Summary --}}
                <div class="mb-md-3 mb-2">
                    <h6 class="bg-secondary mx-0 p-2 text-white mb-0"> Summary </h6>
                    <select name="summary" id="summary" class="form-control">
                        <option value="1"> Published </option>
                        <option value="0"> Unpublished </option>
                        <option value="2"> Draft </option>
                    </select>
                </div>

                {{-- Excerpt --}}
                <div class="mb-md-3 mb-2">
                    <h6 class="bg-secondary mx-0 p-2 text-white mb-0"> Excerpt </h6>
                    <textarea name="excerpt" id="excerpt" cols="5" rows="2" class="form-control">
{{ __($editSinglePost->excerpt) }}
                    </textarea>
                </div>

                {{-- Allow Comments --}}
                <div class="mb-md-3 mb-2">
                    <h6 class="bg-secondary mx-0 p-2 text-white mb-0"> Allow Comments </h6>
                    <select name="comments" id="comments" class="form-control">
                        <option value="1"> Yes </option>
                        <option value="0"> No </option>
                    </select>
                </div>

                <input type="submit" value="update" class="btn btn-secondary">
            </div>
        </div>
        </form>
    </div>
@endsection
