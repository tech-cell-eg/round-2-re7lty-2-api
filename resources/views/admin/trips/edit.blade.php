@extends('admin.master')
@section('title', 'Edit Trip')
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Manage Trips</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Trip</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="{{ route('admin.trips.update', $trip->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                            @csrf
                            @method('PUT')

                            <!-- Trip Name Field -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Trip Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" id="name" name="name" value="{{ $trip->name }}" required class="form-control">
                                </div>
                            </div>

                            <!-- Cost Field -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="coast">Cost (USD) <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="number" id="coast" name="coast" step="0.01" value="{{ $trip->coast }}" required class="form-control">
                                </div>
                            </div>

                            <!-- Number of Days Field -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="number_of_days">Number of Days <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="number" id="number_of_days" name="number_of_days" value="{{ $trip->number_of_days }}" required class="form-control">
                                </div>
                            </div>

                            <!-- Image Upload Field -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Trip Image</label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="file" id="image" name="image" class="form-control">
                                    @if($trip->image)
                                        <img src="{{ asset('storage/trips/' . $trip->image) }}" width="100" class="mt-2">
                                    @endif
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="{{ route('admin.trips.index') }}" class="btn btn-primary">Cancel</a>
                                    <button type="submit" class="btn btn-success">Update Trip</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
