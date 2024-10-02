@extends('admin.admin_layout')
@section('content')

<section class="section">
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
                <h5 class="card-title" style="margin-left:10px; margin-right:10px; padding: 15px 0px 15px 0px;">All Users
                    <a href="{{ url('add-user') }}" class="btn btn-primary" style="float: right">Create User</a>
                  </h5>
            </div>
          <div class="card-body">

            <table class="table datatable">
              <thead>
                <tr>
                  <th>
                    SR #
                  </th>
                  <th>Profile Image</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile No</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if(!empty($allUsers))
                    @foreach ($allUsers as $key => $user)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>
                                @if(!empty($user->profile_image))
                                    <img src="{{ env('mediaUrl').'/'.$user->profile_image }}" alt="Profile Image" style="max-width: 100px; max-height: 100px;">
                                @else
                                    <img src="{{ env('mediaUrl').'/'.$user->profile_image }}" alt="Default Profile Image" style="max-width: 100px; max-height: 100px;">
                                @endif
                            </td>
                            <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->mobile_no }}</td>
                            <td>
                                <a href="{{url('user-delete',['id' => $user->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete This Item?')" title="Delete"><i class="bi bi-trash"></i></a>
                                <a href="{{url('user-edit',['id' => $user->id])}}" class="btn btn-info btn-sm" title="Edit"><i class="bi bi-pencil-square"></i></a>
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
  </section>

@endsection
