@extends('layouts.app')

@section('show-post')
    <div class="col-md-6 mt-md-5 ">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ '/dashboard' }}"> Home </a></li>
                <li class="breadcrumb-item"><a href="{{ route('show-all-post') }}"> All Posts </a></li>
                <li class="breadcrumb-item ms-auto"><a href="{{ route('edit-single-post', $singlePost->id) }}"
                        class="text-decoration-none bg-info text-black p-2 rounded-2"> Edit </a></li>
            </ol>
        </nav>

        <div class="d-flex justify-content-center">
            <img src="/images/{{ __($singlePost->image) }}" alt="{{ __($singlePost->title) }}"
                class="img-fluid mb-md-2 mb-1" onerror="this.onerror=null; this.src='https://picsum.photos/950/450';" />
        </div>
        @if (isset($singlePost->caption))
            <p class="text-secondary mb-md-5 mb-2 text-center"> {{ __($singlePost->caption) }} </p>
        @endif

        <h1 class="mb-md-3 md-2"> {{ __($singlePost->title) }} </h1>
        <p> {{ date('d F, Y  |  h:i', strtotime($singlePost->created_at)) }} </p>
        <p>{{ __($singlePost->description) }}</p>
    </div>

    <div class="col-md-3 mt-md-5">
        <h2> আরও খবর </h2>
        <div class="">
            @foreach ($allPostExceptCurrentPost as $allPostExceptCurrentPostItem)
                <div class="position-relative mb-md-3 mb-2">
                    <img src="/images/{{ __($allPostExceptCurrentPostItem->image) }}"
                        alt="{{ __($allPostExceptCurrentPostItem->title) }}" class="img-fluid mb-md-2"
                        onerror="this.onerror=null; this.src='https://picsum.photos/950/450';" />

                    <div class="p-2">
                        {{-- <p class="text-white"> {{ __($allPostExceptCurrentPostItem->id) }} </p> --}}
                        <h2> <a href="{{ route('single-post', $allPostExceptCurrentPostItem->id) }}"
                                class="stretched-link text-decoration-none text-dark lh-base">
                                {{ __($allPostExceptCurrentPostItem->title) }} </a> </h2>
                        <p class="text-dark mb-0">
                            {{ date('d F, Y  |  h:i', strtotime($allPostExceptCurrentPostItem->created_at)) }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
