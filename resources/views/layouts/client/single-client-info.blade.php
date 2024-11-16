@extends('layouts.app')

@section('single-client-info')
    <div class="col-md-10 mt-md-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('all-clients') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Client's Profile</li>
            </ol>
        </nav>
        <div class="row">

            <!-- left arrow start -->
            <div class="col-md-1 d-flex align-items-center">
                <h1> <a href="{{ URL::to('single-client-info/' . $previouseClientInfo) }}"> <i
                            class="bi bi-chevron-compact-left"></i> </a> </h1>
            </div>
            <!-- left arrow end -->

            <div class="col-md-1">
                <img src="/images/{{ $singleClientInfo->client_photo }}" alt="Client-photo" class="me-md-2 me-1 img-fluid"
                    onerror="this.onerror=null;this.src='https://picsum.photos/id/5/354/415';" alt="Client Photo"
                    class="img-fluid">
            </div>
            <div class="col-md-3">

                <div class="d-flex flex-column">

                    <p class="pb-2 border-bottom border-grey"> ID : <span class="fw-bold"> {{ __($singleClientInfo->id) }}
                        </span> </p>

                    <p class="pb-2 border-bottom border-grey"> Name : <span class="fw-bold text-uppercase">
                            {{ __($singleClientInfo->name) }}
                        </span> </p>
                    <p class="pb-2 border-bottom border-grey"> Phone : <span> <a
                                href="tel:{{ __($singleClientInfo->phone) }}"> {{ __($singleClientInfo->phone) }} </a>
                        </span> </p>
                    <p class="pb-2 border-bottom border-grey"> Email : <span> <a
                                href="mailto:{{ __($singleClientInfo->email) }}">
                                {{ __($singleClientInfo->email) }} </a> </span> </p>
                    <p class="pb-2 border-bottom border-grey"> Gender : <span>
                            @if ($singleClientInfo->gender == 1)
                                {{ __('Male') }}
                            @else
                                {{ __('Female') }}
                            @endif </a>
                        </span> </p>
                    <p class="pb-2 border-bottom border-grey"> Address : <span> {{ __($singleClientInfo->address) }}
                        </span>
                    </p>
                    <p class="pb-2 border-bottom border-grey"> Facebook Review : <span>
                            @if ($singleClientInfo->facebook_review == 1)
                                {{ __('Yes') }}
                            @else
                                {{ __('No') }}
                            @endif
                        </span> </p>
                    <p class="pb-2 border-bottom border-grey"> Google Review : <span>

                            @if ($singleClientInfo->google_review == 1)
                                {{ __('Yes') }}
                            @else
                                {{ __('No') }}
                            @endif


                        </span> </p>

                    <p class="pb-2 border-bottom border-grey"> Page Number : <span>
                            {{ __($singleClientInfo->page_number) }} </span> </p>


                    <p class="pb-2 border-bottom border-grey"> Status : <span>
                            {{ __($singleClientInfo->status == 1) ? 'Active' : 'Inactive' }} </span> </p>

                    <p class="pb-2 border-bottom border-grey"> Services :
                        
                        @foreach ($singleClientServiceInformation->services as $serviceItem)
                            <span> {{ __($serviceItem->name) . ',' }} </span>
                        @endforeach

                    <div class="border-bottom border-grey">
                        <div class="dropdown">
                            Action :
                            <button class="btn" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">

                                <li><a class="dropdown-item"
                                        href="{{ route('edit-client', $singleClientInfo->id) }}">Edit</a>
                                </li>
                                <li><a onclick="return confirm('Are you sure you want to delete this item?')"
                                        class="dropdown-item"
                                        href="{{ route('delete-client', $singleClientInfo->id) }}">Delete</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <form action="#" method="POST">
                    <div class="row border border-dark-subtle mb-md-3 d-flex py-2">

                        {{-- Domain Name Start --}}
                        <div class="col">
                            <label for="domain-name" class="fw-bold"> Domain Name </label>
                            <input type="text" name="domain_name" id="domain-name" class="form-control">
                        </div>
                        {{-- Service Name End --}}

                        {{-- Service Name Start --}}
                        <div class="col">
                            <label for="service-name" class="fw-bold"> Service Name </label>
                            @foreach ($allService as $service)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="service-{{ $service->id }}">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __($service->name) }}
                                    </label>
                                </div>
                            @endforeach

                        </div>
                        {{-- Service Name End --}}

                        <div class="col">
                            <label for="domain-provider" class="fw-bold"> Domain Provider </label>
                            <select name="domain_provider" id="service-name" class="form-control">
                                <option> --select one-- </option>

                                @foreach ($domainProviderCollection as $domainProviderItem)
                                    <option value="{{ __($domainProviderItem->id) }}"> {{ __($domainProviderItem->name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Hosting Provider Start --}}
                        <div class="col">
                            <label for="hosting-provider" class="fw-bold"> Hosting Provider </label>
                            <select name="hosting_provider" id="hosting-provider" class="form-control">
                                <option> --select one-- </option>

                                @foreach ($allHostingProvider as $allHostingItem)
                                    <option value="{{ __($allHostingItem->id) }}"> {{ __($allHostingItem->name) }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                        {{-- Hosting Provider End --}}


                        {{-- Hosting Name Start --}}
                        <div class="col">
                            <label for="hosting-size" class="fw-bold"> Hosting Size </label>
                            <input type="number" name="hosting_size" id="hosting-size" class="form-control">
                        </div>
                        {{-- Hosting Name End --}}

                        {{-- Registration Date Start --}}
                        <div class="col">
                            <label for="registration-date" class="fw-bold"> Registration Date </label>
                            <input type="date" name="registration_date" id="registration-date" class="form-control">
                        </div>
                        {{-- Registration Date End --}}

                        <div class="col">
                            <button class="btn btn-primary" type="submit"> Submit </button>
                        </div>
                    </div>
                </form>


                <table id="table_id" class="display" style="width: 100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Service Name</th>
                            <th>Domain Provider</th>
                            <th>Hosting Provider</th>
                            <th>Hosting Name</th>
                            <th>Hosting Size</th>
                            <th>Registration Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- client item start -->
                        <tr>
                            <td> 01 </td>
                            <td> qaominews.com </td>
                            <td> Linkon </td>
                            <td> Linkon </td>
                            <td> International </td>
                            <td> 5GB </td>
                            <td> 01/01/2024 </td>

                            <td>


                                <div class="border-bottom border-grey">
                                    <div class="dropdown">
                                        <button class="btn" type="button" id="dropdownMenuButton3"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">

                                            <li><a class="dropdown-item" href="#">Edit</a>
                                            </li>
                                            <li><a onclick="return confirm('Are you sure you want to delete this item?')"
                                                    class="dropdown-item" href="#">Delete</a></li>

                                        </ul>
                                    </div>
                                </div>

                            </td>

                        </tr>
                        <!-- client item start -->


                        <!-- client item start -->
                        <tr>
                            <td> 02 </td>
                            <td> weeklybanglagazette.com </td>
                            <td> Linkon </td>
                            <td> Linkon </td>
                            <td> BDiX </td>
                            <td> 5GB </td>
                            <td> 05/06/2024 </td>

                            <td>


                                <div class="border-bottom border-grey">
                                    <div class="dropdown">
                                        <button class="btn" type="button" id="dropdownMenuButton3"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">

                                            <li><a class="dropdown-item" href="#">Edit</a>
                                            </li>
                                            <li><a onclick="return confirm('Are you sure you want to delete this item?')"
                                                    class="dropdown-item" href="#">Delete</a></li>

                                        </ul>
                                    </div>
                                </div>

                            </td>

                        </tr>
                        <!-- client item start -->

                        <!-- client item start -->
                        <tr>
                            <td> 03 </td>
                            <td> daynightbd.com </td>
                            <td> Linkon </td>
                            <td> Linkon </td>
                            <td> Adil </td>
                            <td> 7GB </td>
                            <td> 02/01/2024 </td>
                            <td>
                                <div class="border-bottom border-grey">
                                    <div class="dropdown">
                                        <button class="btn" type="button" id="dropdownMenuButton3"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">

                                            <li><a class="dropdown-item" href="#">Edit</a>
                                            </li>
                                            <li><a onclick="return confirm('Are you sure you want to delete this item?')"
                                                    class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- client item start -->

                        <!-- client item start -->
                        <tr>
                            <td> 04 </td>
                            <td> English Student </td>
                            <td> 0 </td>
                            <td> 0 </td>
                            <td> 0 </td>
                            <td> 0 </td>
                            <td> 01/05/2024 </td>
                            <td>
                                <div class="border-bottom border-grey">
                                    <div class="dropdown">
                                        <button class="btn" type="button" id="dropdownMenuButton3"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">

                                            <li><a class="dropdown-item" href="#">Edit</a>
                                            </li>
                                            <li><a onclick="return confirm('Are you sure you want to delete this item?')"
                                                    class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- client item start -->

                        <!-- client item start -->
                        <tr>
                            <td> 05 </td>
                            <td> English and Web Development Student </td>
                            <td> 0 </td>
                            <td> 0 </td>
                            <td> 0 </td>
                            <td> 0 </td>
                            <td> 05/08/2024 </td>
                            <td>
                                <div class="border-bottom border-grey">
                                    <div class="dropdown">
                                        <button class="btn" type="button" id="dropdownMenuButton3"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">

                                            <li><a class="dropdown-item" href="#">Edit</a>
                                            </li>
                                            <li><a onclick="return confirm('Are you sure you want to delete this item?')"
                                                    class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- client item start -->

                    </tbody>

                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Service Name</th>
                            <th>Domain Provider</th>
                            <th>Hosting Provider</th>
                            <th>Hosting Name</th>
                            <th>Hosting Size</th>
                            <th>Registration Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <!-- right arrow start -->
            <div class="col-md-1 d-flex align-items-center justify-content-end">
                <h1> <a href="{{ URL::to('single-client-info/' . $nextClientInfo) }}"> <i
                            class="bi bi-chevron-compact-right"></i> </a> </h1>
            </div>
            <!-- right arrow end -->

        </div>
    </div>
@endsection
