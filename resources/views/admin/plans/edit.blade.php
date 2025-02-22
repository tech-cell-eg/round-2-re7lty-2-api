@extends('admin.master')
@section('title', 'Edit Plan')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit Plan</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Plan</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <br />
                        <form action="{{ route('plans.update', $plan->id) }}" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                            @csrf
                            @method('PUT')

                            <!-- Plan Type -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="type">Plan Type <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" id="type" name="type" required="required" class="form-control" value="{{ old('type', $plan->type) }}">
                                </div>
                            </div>

                            <!-- Price -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="price">Price <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="number" step="0.01" id="price" name="price" required="required" class="form-control" value="{{ old('price', $plan->price) }}">
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <textarea id="description" name="description" required="required" class="form-control">{{ old('description', $plan->description) }}</textarea>
                                </div>
                            </div>

                            <!-- Features -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="features">Features <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <textarea id="features" name="features" required="required" class="form-control">{{ old('features', is_array($plan->features) ? implode(', ', $plan->features) : $plan->features) }}</textarea>
                                </div>
                            </div>

                            <div class="ln_solid"></div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="{{ route('plans.index') }}" class="btn btn-primary">Cancel</a>
                                    <button type="submit" class="btn btn-success">Update Plan</button>
                                </div>
                            </div>

                        </form>
                    </div> <!-- End x_content -->
                </div> <!-- End x_panel -->
            </div> <!-- End col -->
        </div> <!-- End row -->
    </div> <!-- End container -->
</div>
<!-- /page content -->

@endsection
