@extends('admin.master')
@section('title', 'Settings')

@section('content')
    <!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Website Settings</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search settings...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>General Settings</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <form action="{{ route('settings.update') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>Website Name:</label>
                                <input type="text" class="form-control" name="site_name"
                                       value="{{ \App\Models\Setting::get('site_name') }}"
                                       placeholder="Enter website name">
                            </div>

                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="site_email"
                                       value="{{ \App\Models\Setting::get('site_email') }}"
                                       placeholder="Enter website email">
                            </div>

                            <div class="form-group">
                                <label>Facebook:</label>
                                <input type="text" class="form-control" name="facebook"
                                       value="{{ \App\Models\Setting::get('facebook') }}"
                                       placeholder="Enter Facebook page link">
                            </div>

                            <div class="form-group">
                                <label>Twitter:</label>
                                <input type="text" class="form-control" name="twitter"
                                       value="{{ \App\Models\Setting::get('twitter') }}"
                                       placeholder="Enter Twitter profile link">
                            </div>

                            <div class="form-group">
                                <label>Instagram:</label>
                                <input type="text" class="form-control" name="instagram"
                                       value="{{ \App\Models\Setting::get('instagram') }}"
                                       placeholder="Enter Instagram profile link">
                            </div>

                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

@endsection
