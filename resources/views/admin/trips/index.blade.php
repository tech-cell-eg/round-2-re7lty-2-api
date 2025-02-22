@extends('admin.master')

@section('title', 'Manage Trips')

@section('content')
    <!-- Page Content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Manage Trips</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
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
                            <h2>List of Trips</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <a href="{{ route('admin.trips.create') }}" class="btn btn-success mb-3">Add New Trip</a>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Cost</th>
                                            <th>Number of Days</th>
                                            <th>Image</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($trips as $trip)
                                            <tr>
                                                <td>{{ $trip->name }}</td>
                                                <td>${{ number_format($trip->coast, 2) }}</td>
                                                <td>{{ $trip->number_of_days }}</td>
                                                <td>
                                                    @if($trip->image)
                                                        <img src="{{ asset('storage/' . $trip->image) }}" alt="Trip Image" width="50">
                                                    @else
                                                        No Image
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.trips.edit', $trip->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('admin.trips.destroy', $trip->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $trips->links() }} <!-- Pagination -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
