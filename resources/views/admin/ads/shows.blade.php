<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title</title>
    <!-- Include your CSS files -->
    <!-- Include other meta tags, stylesheets, or scripts -->
</head>
<body>
    @extends('admin.admin_layout')
    @section('content')

    <section class="section profile">

        @if(Session::has('message'))
                <div class="row mb-2">
                    <span class="alert alert-info">
                        {{ Session::get('message') }}
                    </span>
                </div>
            @endif
        <div class="row">
         <div class="col-xl-12">
            <div class="card">
            <div class="card-body ">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#project-overview">Overview</button>
                </li>
                </ul>
                <div class="tab-content ">

                <div class="tab-pane fade show active profile-overview" id="project-overview">

                    <h5 class="card-title">Ads Detail</h5>

                  <div class="row">
                     <div class="col-lg-3 col-md-4 label "><th>Ad Title</th></div>                </div>
                     <div class="col-lg-9 col-md-8">{{ $ad->ad_title }}</div>
                  </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Type of Property</th></div>
                        <div class="col-lg-9 col-md-8 text-uppercase">{{$ad->type_of_property }}</div>
                    </div>

                    <div class="row">
                     <div class="col-lg-3 col-md-4 label"><th>Room Type</th></div>
                     <div class="col-lg-9 col-md-8 text-uppercase">{{$ad->room_type }}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label"><th>For Rent Rooms</th></div>
                      <div class="col-lg-9 col-md-8 text-uppercase">{{$ad->for_rent_rooms }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Size of Rooms</th></div>
                        <div class="col-lg-9 col-md-8 text-uppercase">{{$ad->size_of_rooms }}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label"><th>Flat Size</th></div>
                      <div class="col-lg-9 col-md-8">{{$ad->flat_size }}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>House Size</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->house_size }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>House Rooms</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->house_rooms }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Country</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->country }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>City Name</th></div>
                        <div class="col-lg-9 col-md-8">{{ $ad->city_name }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Address of Property</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->address_of_property }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Occupation</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->occupation }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Gender</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->gender }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Cost Room Type</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->cost_room_type }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Rent</th></div>
                        <div class="col-lg-9 col-md-8">{{ $ad->cost }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Security Deposit Advance</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->security_deposit_advance }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Security Cost</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->security_cost }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Kitchen</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->kitchen }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Parking</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->parking }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Gas</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->gas }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Water</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->water}}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Electricity</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->electricity }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Ups</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->ups }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Garage</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->garage }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Electricity Bill Include</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->electricity_bill_include }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Gas Bill Include</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->gas_bill_include }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Internet Includes</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->internet_includes }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Smoking Allow</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->smoking_allow }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Pets</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->pets }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Number Display</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->number_display }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Refrence Require</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->refrence_require }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Description</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->description }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Ads Listing Type</th></div>
                        <div class="col-lg-9 col-md-8">{{ $ad->ads_listing_type }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Ads Listing Cost</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->ads_listing_cost }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Ads Listing Payment Through</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->ads_listing_payment_through }}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Payment Transaction Id</th></div>
                        <div class="col-lg-9 col-md-8">{{$ad->payment_transaction_id }}</div>
                    </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Payment Status</th></div>
                        <div class="col-lg-9 col-md-8">
                            <select class="form-select payment-status" name="payment_status">
                                <option value="pending" {{ $ad->ads_listing_payment_status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="waiting_for_approvel" {{ $ad->ads_listing_payment_status == 'waiting_for_approvel' ? 'selected' : '' }}>Waiting For Approvel</option>
                                <option value="approved_done" {{ $ad->ads_listing_payment_status == 'approved_done' ? 'selected' : '' }}>Approved Done</option>
                                <option value="done" {{ $ad->ads_listing_payment_status == 'done' ? 'selected' : '' }}>Done</option>

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label"><th>Publication Status</th></div>
                        <div class="col-lg-9 col-md-8">
                            <select class="form-select publication-status" name="publication_status">
                                <option value="pending" {{ $ad->publication_status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="active" {{ $ad->publication_status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="done" {{ $ad->publication_status == 'done' ? 'selected' : '' }}>Done</option>
                                <option value="blocked" {{ $ad->publication_status == 'blocked' ? 'selected' : '' }}>Blocked</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
            </div>

        </div>
        </div>

    </section>

    @endsection

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {

            $('.payment-status').on('change', function() {
                var status = $(this).val();
                var adId = "{{ $ad->id }}";
                var token = "{{ csrf_token() }}";

                $.ajax({
                    type: 'POST',
                    url: '/update-payment-status',
                    data: {
                        _token: token,
                        status: status,
                        ad_id: adId
                    },
                    success: function(response) {
                        console.log(response);
                        alert('Payment status updated successfully!');
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        alert('Error updating payment status. Please try again later.');
                    }
                });
            });

            $('.publication-status').on('change', function() {
                var status = $(this).val();
                var adId = "{{ $ad->id }}";
                var token = "{{ csrf_token() }}";

                $.ajax({
                    type: 'POST',
                    url: '/update-publication-status',
                    data: {
                        _token: token,
                        status: status,
                        ad_id: adId
                    },
                    success: function(response) {
                        console.log(response);
                        alert('Publication status updated successfully!');
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        alert('Error updating publication status. Please try again later.');
                    }
                });
            });
        });
    </script>



</body>
</html>
