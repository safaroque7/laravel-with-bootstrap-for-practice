@extends('layouts.app')

@section('add-new-client')
    <div class="col-md-10 mt-md-3">

        @if (session('success'))
            <h2 class="text-success"> {{ session('success') }} </h2>
        @endif


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Add New Client
                </li>
            </ol>
        </nav>

        <form action="{{ route('update-client', $editableClientInfo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-md-3 mb-2">
                <div class="col-md-6">
                    <label for="name" class="form-label fw-bold"> Name </label>
                    <input type="text" name="name" value="{{ $editableClientInfo->name }}"
                        class="form-control border-@if ($errors->has('name')) {{ __('danger') }} @endif"
                        autofocus />

                    @if ($errors->has('name'))
                        <span class="text-danger"> {{ $errors->first('name') }} </span>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label fw-bold"> Phone </label>
                    <input type="text" name="phone" value="{{ $editableClientInfo->phone }}"
                        class="form-control border-@if ($errors->has('phone')) {{ __('danger') }} @endif" />
                    @if ($errors->has('phone'))
                        <span class="text-danger"> {{ $errors->first('phone') }} </span>
                    @endif
                </div>
            </div>

            <div class="row mb-md-3 mb-2">
                <div class="col-md-4">
                    <label for="email" class="form-label fw-bold"> Email </label>
                    <input type="email" name="email" value="{{ $editableClientInfo->email }}"
                        class="form-control border-@if ($errors->has('email')) {{ __('danger') }} @endif" />
                    @if ($errors->has('email'))
                        <span class="text-danger"> {{ $errors->first('email') }} </span>
                    @endif
                </div>

                <div class="col-md-2">
                    <label class="form-label border-bottom-custom-color-1 d-block fw-bold">
                        Gender
                    </label>

                    <input class="form-check-input" type="radio" name="gender" value="1" id="male"
                        @if ($editableClientInfo->gender == 1) checked @endif />
                    <label class="form-check-label me-md-2 me-1" for="male">
                        Male
                    </label>

                    <input class="form-check-input" type="radio" name="gender" value="0" id="female"
                        @if ($editableClientInfo->gender == 0) checked @endif />
                    <label class="form-check-label" for="female"> Female </label>
                </div>

                <div class="col-md-6">
                    <label for="address" class="form-label fw-bold"> Address </label>
                    <input type="text" name="address" value="{{ $editableClientInfo->address }}" class="form-control" />
                </div>
            </div>

            <div class="row mb-md-4 mb-3">

                <div class="col-md-2">
                    <label for="facebook-review" class="form-label fw-bold">
                        Facebook Review
                    </label>
                    <select name="facebook_review" class="form-select">
                        <option @if ($editableClientInfo->facebook_review == 1) Selected @endif value="1"> {{ __('Yes') }}
                        </option>
                        <option @if ($editableClientInfo->facebook_review == 0) Selected @endif value="0"> {{ __('No') }}
                        </option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="google-review" class="form-label fw-bold">
                        Gogole Review
                    </label>
                    <select name="google_review" class="form-select">
                        <option @if ($editableClientInfo->google_review == 1) Selected @endif value="1"> {{ __('Yes') }}
                        </option>
                        <option @if ($editableClientInfo->google_review == 0) Selected @endif value="0"> {{ __('No') }}
                        </option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="page-number" class="form-label fw-bold">
                        Page Number
                    </label>
                    <input type="number" name="page_number" value="{{ $editableClientInfo->page_number }}" id=""
                        class="form-control" />
                </div>

                <div class="col-md-6">
                    <label for="select-service" class="form-label border-secondary d-block fw-bold">
                        Upload Photo
                    </label>

                    <input type="file" name="client_photo" id="" class="form-control mb-md-2 mb-1" />

                    <div class="w-70">
                        <img src="/images/{{ $editableClientInfo->client_photo }}" alt="Client-photo"
                            class="me-md-2 me-1 img-fluid"
                            onerror="this.onerror=null;this.src='https://picsum.photos/id/5/40/40';" />
                    </div>
                </div>
            </div>
            <div class="row mb-md-4 mb-3">
                <div class="col-md-4">
                    <label for="select-service"
                        class="form-label border-secondary d-block pb-md-2 pb-1 border-bottom-custom-color-1 fw-bold">
                        Select Services
                    </label>

                    <div class="d-flex flex-wrap">

                        @foreach ($allServicesCollection as $allServicesItem)
                            <!-- checkbox item -->
                            <div class="form-check mb-md-3 mb-2 w-50">
                                <input type="checkbox" class="form-check-input" name=""
                                    id="checkbox{{ __($allServicesItem->id) }}" value="" />
                                <label class="form-check-label" for="checkbox{{ __($allServicesItem->id) }}">
                                    {{ __($allServicesItem->name) }}
                                </label>
                            </div>
                        @endforeach

                    </div>


                </div>

                <div class="col-md-2">
                    <label for="status" class="form-label fw-bold"> Status </label>
                    <select name="status" id="status" class="form-select d-inline" value="#">

                        <option @if ($editableClientInfo->status == 1) Selected @endif value="1"> {{ __('Active') }}
                        </option>
                        <option @if ($editableClientInfo->status == 0) Selected @endif value="0"> {{ __('Inactive') }}
                        </option>

                    </select>
                </div>

                <div class="col-md-6">
                    <!-- Facebook Profile Link Start -->
                    <label for="facebook-profile" class="form-label border-secondary d-block fw-bold"> Facebook Profile
                        Link
                    </label>
                    <input type="url" name="facebook_profile"
                        value="{{ __($editableClientInfo->facebook_profile) }}" id="facebook-profile"
                        class="form-control mb-md-3 mb-2">

                    <!-- Date of Birth start -->
                    <label for="date-of-birth" class="form-label border-secondary d-block fw-bold"> Date of Birth </label>
                    <input type="date" name="date_of_birth" value="{{ __($editableClientInfo->date_of_birth) }}"
                        id="date-of-birth" class="form-control">
                </div>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
@endsection
