@extends('layouts.app')

@section('show-post')
    <div class="col-md-10">
        @include('layouts.category.navbar')

        <div class="row">
            <div class="col-md-9 mt-md-5 ">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ '/dashboard' }}"> Home </a></li>
                        <li class="breadcrumb-item"><a href="{{ route('show-all-post') }}"> All Posts </a></li>
                        <li class="breadcrumb-item ms-auto"><a href="{{ route('edit-single-post', $singleCateogry->id) }}"
                                class="text-decoration-none bg-info text-black p-2 rounded-2"> Edit </a></li>
                    </ol>
                </nav>

                <div class="d-flex justify-content-center">
                    <img src="/images/{{ __($singleCateogry->image) }}" alt="{{ __($singleCateogry->title) }}"
                        class="img-fluid {{ $singleCateogry->caption == '' ? 'mb-md-5' : 'mb-2' }}"
                        onerror="this.onerror=null; this.src='https://picsum.photos/950/450';" />
                </div>


                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-4">
                            <img src="https://picsum.photos/id/600/400" alt="title" class="img-fluid">
                            <h2> <a href="#"> {{ __($post->title) }} </a> </h2>
                        </div>
                    @endforeach



                </div>


            </div>










        </div>
    </div>
@endsection
