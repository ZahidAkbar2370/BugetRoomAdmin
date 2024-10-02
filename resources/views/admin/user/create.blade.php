@extends('admin.admin_layout')
@section('content')

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-header card_header p-0">
                <h5 class="card-title" style="margin-left:10px; margin-right:10px; padding: 15px 0px 15px 0px;">Create User
                </h5>
            </div>
          <div class="card-body mt-3">

            <form class="row g-3" action="{{url('store-user') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="col-md-6">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" placeholder="First Name" class="form-control" name="first_name" id="first_name" required>
              </div>
              <div class="col-md-6">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" placeholder="Last Name" class="form-control" name="last_name" id="last_name" required>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="text" placeholder="Email" class="form-control" name="email" id="email" required>
              </div>
              <div class="col-md-6">
                <label for="mobile_no" class="form-label">Mobile No</label>
                <input type="text" placeholder="Mobile No" class="form-control" name="mobile_no" id="mobile_no" required>
              </div>
              <div class="col-md-6">
                <label for="mobile_no" class="form-label">Password</label>
                <input type="text" placeholder="password" class="form-control" name="password" id="password" required>
              </div>
              <div class="col-md-6">
                <label for="mobile_no" class="form-label">Facebook</label>
                <input type="text" placeholder="facebook" class="form-control" name="facebook" id="facebook" required>
              </div>
              <div class="col-md-6">
                <label for="mobile_no" class="form-label">Tiktok</label>
                <input type="text" placeholder="tiktok" class="form-control" name="tiktok" id="tiktok" required>
              </div>
              <div class="col-md-6">
                <label for="profile_image" class="form-label">Profile Image</label>
                <input type="file" class="form-control" name="profile_image" id="profile_image" required>
              </div>
              <div class="col-md-6">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" name="role" id="role" required>
                    <option value="">Select Role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
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
