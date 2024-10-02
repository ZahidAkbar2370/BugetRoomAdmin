@extends('admin.admin_layout')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card_header p-0">
                    <h5 class="card-title" style="margin-left:10px; margin-right:10px; padding: 15px 0px 15px 0px;">Edit Setting</h5>
                </div>
                <div class="card-body mt-3">
                    <form id="editForm" method="POST" action="{{ url('update-setting',['id' => $allSettings->id]) }}" >

                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <label for="first_name" class="form-label">Title</label>
                                <input type="text" placeholder="Title" class="form-control" name="title" id="title" value="{{ $allSettings->title }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label">Value</label>
                                <input type="text" placeholder="Value" class="form-control" name="value" id="value" value="{{$allSettings->value }}" required>
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
