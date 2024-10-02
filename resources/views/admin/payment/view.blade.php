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
                  <h5 class="card-title" style="margin-left:10px; margin-right:10px; padding: 15px 0px 15px 0px;">All Payments
                  </h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>SR #</th>
                                <th>Account Title</th>
                                <th>Account No</th>
                                <th>Account Iban</th>
                                <th>Service Provider</th>
                                <th>Payment Method</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($allPayments))
                                @foreach ($allPayments as $key => $payment)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $payment->acount_title }}</td>
                                        <td>{{ $payment->acount_no }}</td>
                                        <td>{{ $payment->acount_iban }}</td>
                                        <td>{{ $payment->service_provider }}</td>
                                        <td>{{ $payment->payment_method }}</td>
                                        <td>
                                            <a href="{{ url('payment-edit', ['id' => $payment->id]) }}" class="btn btn-info btn-sm" title="Edit"><i class="bi bi-pencil-square"></i></a>
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
