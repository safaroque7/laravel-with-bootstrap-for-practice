@extends('layouts.app')

@section('facebook-review-left-email')


    {{-- Email Address start --}}
    <div class="col-md-8 mt-md-3 mt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('all-clients') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Email Addresses
                </li>
            </ol>
        </nav>


        {{-- per ection email addressess start --}}
        <div class="mb-md-3 mb-2">
            <div class="d-flex align-items-center mb-md-2 md-1">
                <button class="btn btn-primary"> Click to send email </button>
                <span class="border rounded ms-md-2 ms-1 p-1"> {{ __($totalActiveClientEmail) }} </span>
                <span class="text-uppercase border ms-md-2 ms-1 p-1 fw-bold bg-success rounded text-white"> Active Users'
                    Email Addressess </span>
            </div>

            <div class="p-2 border border-secondary rounded">
                <code>
                    @if (isset($activeClientsEmailAddresess))
                        @foreach ($activeClientsEmailAddresess as $activeClientsEmailAddress)
                            {{ __($activeClientsEmailAddress->email) }}
                        @endforeach
                    @endif
                </code>
            </div>
        </div>
        {{-- per ection email addressess end --}}


        {{-- per ection email addressess start --}}
        <div class="mb-md-3 mb-2">
            <div class="d-flex align-items-center mb-md-2 md-1">
                <button class="btn btn-primary"> Click to send email </button>
                <span class="border rounded ms-md-2 ms-1 p-1"> {{ __($totalInactiveClientEmail) }} </span>
                <span class="text-uppercase border ms-md-2 ms-1 p-1 fw-bold bg-danger rounded text-white"> Inactive Users'
                    Email Addressess </span>
            </div>

            <div class="p-2 border border-secondary rounded">
                <code>
                    @if (isset($inActiveClientsEmailAddresess))
                        @foreach ($inActiveClientsEmailAddresess as $inActiveClientsEmailAddrese)
                            {{ __($inActiveClientsEmailAddrese->email) }}
                        @endforeach
                    @endif
                </code>
            </div>
        </div>
        {{-- per ection email addressess end --}}


        {{-- per section email addressess start --}}
        <div class="mb-md-3 mb-2">
            <div class="d-flex align-items-center mb-md-2 md-1">
                <button class="btn btn-primary"> Click to send email </button>
                <span class="border rounded ms-md-2 ms-1 p-1"> {{ __($totalFacebookReviewLeftCollection) }} </span>
                <span class="text-uppercase border ms-md-2 ms-1 p-1 fw-bold bg-success rounded text-white"> Facebook
                    Reviewed Email Addressess </span>
            </div>

            <div class="p-2 border border-secondary rounded">
                <code>
                    @if (isset($facebookReviewedCollection))
                        @foreach ($facebookReviewedCollection as $facebookReviewedItem)
                            {{ __($facebookReviewedItem->email) }}
                        @endforeach
                    @endif
                </code>
            </div>
        </div>
        {{-- per section email addressess end --}}

        {{-- per section email addressess start --}}
        <div class="mb-md-3 mb-2">
            <div class="d-flex align-items-center mb-md-2 md-1">
                <button class="btn btn-primary"> Click to send email </button>
                <span class="border rounded ms-md-2 ms-1 p-1"> {{ __($totalEmailOfLeftFacebookReview) }} </span>
                <span class="text-uppercase border ms-md-2 ms-1 p-1 fw-bold bg-danger rounded text-white"> Facebook Review
                    Left Email Addressess </span>
            </div>

            <div class="p-2 border border-secondary rounded">
                <code>
                    @if (isset($facebookReviewLeftCollection))
                        @foreach ($facebookReviewLeftCollection as $facebookReviewLeftItme)
                            {{ __($inActiveClientsEmailAddrese->email) }}
                        @endforeach
                    @endif
                </code>
            </div>
        </div>
        {{-- per section email addressess end --}}









    </div>
    {{-- Email Address end --}}
@endsection
