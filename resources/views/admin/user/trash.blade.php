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
                    <h5 class="card-title" style="margin-left:10px; margin-right:10px; padding: 15px 0px 15px 0px;">Trashed Users</h5>
                </div>
                <div class="card-body">

                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>SR #</th>
                                <th>Profile Image</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($trashedUsers))
                            @foreach ($trashedUsers as $key => $user)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>
                                    @if(!empty($user->profile_image))
                                    <img src="{{ asset('uploads/user/'.$user->profile_image) }}" alt="Profile Image" style="max-width: 100px; max-height: 100px;">
                                    @else
                                        No cover image available
                                    @endif
                                </td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->mobile_no }}</td>
                                <td>

                                        <a href="{{url('restore-user',['id' => $user->id])}}" type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Are You Sure To Restore This Item?')" title="Restore"><i class="bi bi-arrow-clockwise"></i></a>

                                        <a href="{{url('delete-user',['id' => $user->id])}}" type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Permanently Delete This Item?')" title="Permanently Delete"><i class="bi bi-trash"></i></a>

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
