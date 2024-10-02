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
                <h5 class="card-title" style="margin-left:10px; margin-right:10px; padding: 15px 0px 15px 0px;">All Settings
                    <a href="{{ url('add-setting') }}" class="btn btn-primary" style="float: right">Create Setting</a>
                  </h5>
            </div>
          <div class="card-body">

            <table class="table datatable">
              <thead>
                <tr>
                  <th>
                    SR #
                  </th>
                  <th>Title</th>
                  <th>Value</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if(!empty($allSettings))
                    @foreach ($allSettings as $key => $setting)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $setting->title }}</td>
                            <td>{{ $setting->value }}</td>
                            <td>
                                <a href="{{url('setting-edit',['id' => $setting->id])}}" class="btn btn-info btn-sm" title="Edit"><i class="bi bi-pencil-square"></i></a>

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
