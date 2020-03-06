@extends('layouts.admin')

@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-5 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Manage your categories</span>
            <h3 class="page-title">Categories Manager</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <!-- Add New Post Form -->
            <div class="card card-small mb-3">
                <div class="card-body">
                    <form class="add-new-post" action="{{route('admincategories.store')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div id="editor-container" class="add-new-post__editor mb-1">
                            <div class="card-header border-bottom"><h6 class="m-0">Add Categories</h6></div>
                            <div class="container">
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <div class="row" style="margin-top: 10px">
                                            <label class="col-md-3">Title</label>
                                            <div class="col-md-6"><input type="text" name="title" class="form-control"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn bnt-info" value="Save">
                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <!-- / Add New Post Form -->
        </div>

    </div>
@endsection
