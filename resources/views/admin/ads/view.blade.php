@extends('admin.admin_layout')
@section('content')

<section class="section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">

          @if(Session::has('message'))
              <div class="row mb-3">
                  <span class="alert alert-{{ Session::get('messageType', 'info') }}">
                      {{ Session::get('message') }}
                  </span>
              </div>
          @endif

          <div class="card">
              <div class="card-header card_header p-0">
                  <h5 class="card-title" style="margin-left:10px; margin-right:10px; padding: 15px 0px 15px 0px;">All Ads
                  </h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>SR #</th>
                                <th>Ad Title</th>
                                <th>Type</th>
                                <th>City</th>
                                <th>Rent</th>
                                <th>Listing Type</th>
                                <th>Payment</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($allAds))
                                @foreach ($allAds as $key => $ad)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $ad->ad_title }}</td>
                                        <td>{{$ad->type_of_property }}</td>
                                        <td>{{ $ad->city_name }}</td>
                                        <td>{{ $ad->cost }}</td>
                                        <td>{{ $ad->ads_listing_type }}</td>
                                        <td>{{ $ad->ads_listing_payment_status }}</td>
                                        <td>{{ $ad->publication_status }}</td>
                                        <td>
                                            <a href="{{ url('ads-view', ['id' => $ad->id]) }}" class="btn btn-info btn-sm" title="View"><i class="bi bi-eye"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>

@endsection
