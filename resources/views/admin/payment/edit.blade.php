@extends('admin.admin_layout')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card_header p-0">
                    <h5 class="card-title" style="margin-left:10px; margin-right:10px; padding: 15px 0px 15px 0px;">Edit Payment</h5>
                </div>
                <div class="card-body mt-3">
                    <form id="editForm" method="POST" action="{{ url('update-payment',['id' => $allPayments->id]) }}" >

                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <label for="acount_title" class="form-label">Acount Title</label>
                                <input type="text" placeholder="Acount Title" class="form-control" name="acount_title" id="acount_title" value="{{  $allPayments->acount_title }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="acount_no" class="form-label">Acount No</label>
                                <input type="text" placeholder="Acount No" class="form-control" name="acount_no" id="acount_no" value="{{$allPayments->acount_no }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="acount_iban" class="form-label">Acount Iban</label>
                                <input type="text" placeholder="Acount Iban" class="form-control" name="acount_iban" id="acount_iban" value="{{$allPayments->acount_iban }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="service_provider" class="form-label">Service Provider</label>
                                <input type="text" placeholder="Service Provider" class="form-control" name="service_provider" id="service_provider" value="{{$allPayments->service_provider }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="payment_method" class="form-label">Payment Method</label>
                                <input type="text" placeholder="Payment Method" readonly class="form-control" name="payment_method" id="payment_method" value="{{$allPayments->payment_method }}" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3" onclick="return confirm('Are you sure to Save Change?')">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
