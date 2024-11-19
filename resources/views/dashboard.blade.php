@extends('layouts.app')


@section('content')
    <div class="col-md-10 mt-md-3 pe-5">
        <div class="row">
            <div class="col-md-3 col-6 mb-md-4 mb-2 text-center">
                <div class="bg-light rounded-3 border border-secondary">
                    <h4 class="text-white bg-secondary py-2 rounded-top">
                        Total Clients
                    </h4>
                    <h1 class="total-items">
                        <a href="{{ route('all-clients') }}" class="text-decoration-none text-dark"> {{ __($totalClient) }}
                        </a>
                    </h1>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-md-4 mb-2 text-center">
                <div class="bg-light rounded-3 border border-success">
                    <h4 class="text-white bg-success py-2 rounded-top">
                        Active Clients
                    </h4>
                    <h1 class="total-items">
                        <a href="#" class="text-decoration-none text-dark"> {{ __($activeClients) }} </a>
                    </h1>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-md-4 mb-2 text-center">
                <div class="bg-light rounded-3 border border-danger">
                    <h4 class="text-white bg-danger py-2 rounded-top">
                        Inactive Clients
                    </h4>
                    <h1 class="total-items">
                        <a href="#" class="text-decoration-none text-dark"> {{ __($inactiveClients) }} </a>
                    </h1>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-md-4 mb-2 text-center">
                <div class="bg-light rounded-3 border border-secondary rounded-top">
                    <h4 class="text-white bg-secondary py-2">
                        Linkon Domains
                    </h4>
                    <h1 class="total-items">
                        <a href="#" class="text-decoration-none text-dark">00</a>
                    </h1>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-md-4 mb-2 text-center">
                <div class="bg-light rounded-3 border border-secondary rounded-top">
                    <h4 class="text-white bg-secondary py-2">
                        Linkon Hosting
                    </h4>
                    <h1 class="total-items">
                        <a href="#" class="text-decoration-none text-dark"> 00 GB </a>
                    </h1>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-md-4 mb-2 text-center">
                <div class="bg-light rounded-3 border border-secondary rounded-top">
                    <h4 class="text-white bg-secondary py-2">
                        Linkon Hosting BDiX
                    </h4>
                    <h1 class="total-items">
                        <a href="#" class="text-decoration-none text-dark"> 00GB </a>
                    </h1>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-md-4 mb-2 text-center">
                <div class="bg-light rounded-3 border border-secondary rounded-top">
                    <h4 class="text-white bg-secondary py-2">
                        Adil Domains
                    </h4>
                    <h1 class="total-items">
                        <a href="#" class="text-decoration-none text-dark"> 00 </a>
                    </h1>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-md-4 mb-2 text-center">
                <div class="bg-light rounded-3 border border-secondary rounded-top">
                    <h4 class="text-white bg-secondary py-2">
                        Adil Hostings
                    </h4>
                    <h1 class="total-items">
                        <a href="#" class="text-decoration-none text-dark"> 00GB </a>
                    </h1>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-md-4 mb-2 text-center">
                <div class="bg-light rounded-3 border border-secondary rounded-top">
                    <h4 class="text-white bg-secondary py-2">
                        All Emails
                    </h4>
                    <h1 class="total-items">
                        <a href="#" class="text-decoration-none text-dark">
                            00
                        </a>
                    </h1>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-md-4 mb-2 text-center">
                <div class="bg-light rounded-3 border border-secondary rounded-top">
                    <h4 class="text-white bg-secondary py-2">
                        All Phone Numbers
                    </h4>
                    <h1 class="total-items">
                        <a href="#" class="text-decoration-none text-dark"> 00 </a>
                    </h1>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-md-4 mb-2 text-center">
                <div class="bg-light border border-secondary rounded-top">
                    <h4 class="text-white bg-secondary py-2">
                        Total Hosting Size
                    </h4>
                    <h1 class="total-items">
                        <a href="#" class="text-decoration-none text-dark">00GB </a>
                    </h1>
                </div>
            </div>


            <div class="col-md-3 col-6 mb-md-4 mb-2 text-center">
                <div class="bg-light border border-secondary rounded-top">
                    <h4 class="text-white bg-secondary py-2">
                        Good Clients
                    </h4>
                    <h1 class="total-items">
                        <a href="#" class="text-decoration-none text-dark">50 </a>
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="bxslider">
                    @foreach ($allPostCollectionForSlider as $allPostCollectionForSliderItem)
                        <div class="position-relative">
                            <img src="/images/{{ $allPostCollectionForSliderItem->image }}" class="w-100" alt="image">
                            <h2 class="position-absolute bottom-0 p-2 text-white bg-transparent-50-parcent-black w-100 d-block lh-base">
                                <a href="{{ route('single-post', $allPostCollectionForSliderItem->id) }}" class="text-decoration-none text-white text-center d-block"> {{ __($allPostCollectionForSliderItem->title) }} </a>
                            </h2>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row postion-absolute top-0">
            <div>
                <ul class="bg-info bxslider-ticker" style="list-stye:square">
                    @foreach ($allPostCollectionForSlider as $allPostCollectionForSliderItem)
                        <li> 
                            <a href="{{ route('single-post', $allPostCollectionForSliderItem->id) }}" class="text-decoration-none text-dark">
                                {{ __($allPostCollectionForSliderItem->title) }} 
                            </a> 
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
@endsection
