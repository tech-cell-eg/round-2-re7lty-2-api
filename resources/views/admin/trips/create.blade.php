@extends('admin.master')
@section('title', 'Testimonials')
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
                        <h2>Add Trip</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="{{ route('admin.trips.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                            @csrf

                            <!-- Trip Name Field -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Trip Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-control">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Cost Field -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="coast">Cost (USD) <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="number" id="coast" name="coast" step="0.01" value="{{ old('coast') }}" required class="form-control">
                                    @error('coast')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Number of Days Field -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="number_of_days">Number of Days <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="number" id="number_of_days" name="number_of_days" value="{{ old('number_of_days') }}" required class="form-control">
                                    @error('number_of_days')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Image Upload Field -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Trip Image</label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="file" id="image" name="image" class="form-control">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="reset">Cancel</button>
                                    <button type="submit" class="btn btn-success">Add Trip</button>
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
















@section('content')
