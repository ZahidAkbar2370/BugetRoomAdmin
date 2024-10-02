@extends('admin.admin_layout')
@section('content')

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-header card_header p-0">
                <h5 class="card-title" style="margin-left:10px; margin-right:10px; padding: 15px 0px 15px 0px;">Compose
                </h5>
            </div>
          <div class="card-body mt-3">

            <form class="row g-3" action="{{url('store-mail') }}" method="POST" >
                @csrf
              <div class="col-md-6">
                <label for="to" class="form-label">To</label>
                <input type="text" placeholder="Enter Recevier Email" class="form-control" name="to" id="to" required>
              </div>
              <div class="col-md-6">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject" required>
              </div>

              <div class="col-md-12">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" id="message" class="form-control" cols="30" rows="10" required></textarea>
              </div>

              <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to Save & Send Mail?')">Submit</button>
              </div>
            </form>

          </div>
        </div>

      </div>

    </div>
  </section>

@endsection
