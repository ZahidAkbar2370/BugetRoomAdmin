@extends('admin.admin_layout')
@section('content')

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-header card_header p-0">
                <h5 class="card-title" style="margin-left:10px; margin-right:10px; padding: 15px 0px 15px 0px;">Create Setting
                </h5>
            </div>
          <div class="card-body mt-3">

            <form class="row g-3" action="{{url('store-setting') }}" method="POST" >
                @csrf
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" placeholder="Title" class="form-control" name="title" id="title" required>
              </div>
              <div class="col-md-6">
                <label for="value" class="form-label">Value</label>
                <input type="text" placeholder="Value" class="form-control" name="value" id="value" required>
              </div>
              <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to Save Change?')">Submit</button>
              </div>
            </form>

          </div>
        </div>

      </div>

    </div>
  </section>

@endsection
