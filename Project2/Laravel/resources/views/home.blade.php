@extends('layouts.admin')

@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Manage your products</span>
            <h3 class="page-title">Product Manager</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="row">
        <div class="col-lg-5 col-md-12">
            <!-- Add New Post Form -->
            <div class="card card-small mb-3">
                <div class="card-body">
                    <form class="add-new-post" method="post">
                        <div id="editor-container" class="add-new-post__editor mb-1">
                            <div class="card-header border-bottom"><h6 class="m-0">Categories</h6></div>
                            <div class="container">
                                <div class="container-fluid">
                                    <p style="margin-top: 10px; margin-bottom: 12px;">
                                        <a href="{{route('admincategories.create')}}" class="btn btn-primary">Add New Category</a>
                                    </p>
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach($categories as $c)
                                            <tr>
                                                <th>{{ $c->id }}</th>
                                                <th>{{ $c->title }}</th>
                                                <th><a href="{{route('admincategories.edit', $c->id)}}" class="btn btn-info">Edit</a>
                                                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btw-danger">Delete</a>
                                                    <form action="{{route('admincategories.destroy', ['admincategory' => $c->id])}}" method="post">
                                                        @method('DELETE')
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    </form>
                                                </th>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <!-- / Add New Post Form -->
        </div>
        <div class="col-lg-7 col-md-12">
            <!-- Add New Post Form -->
            <div class="card card-small mb-3">
                <div class="card-body">
                    <form class="add-new-post">
                        <div id="editor-container" class="add-new-post__editor mb-1">
                            <div class="card-header border-bottom"><h6 class="m-0">New Products</h6class></div>
                            <div class="container">
                                <div class="container-fluid">
                                    <p style="margin-top: 10px; margin-bottom: 12px;">
                                        <a href="{{route('adminproducts.create')}}" class="btn btn-primary">Add New Product</a>
                                    </p>
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach($products as $c)
                                            <tr>
                                                <th>{{ $c->id }}</th>
                                                <th>{{ $c->title }}</th>
                                                <th>{{ $c->description }}</th>
                                                <th>{{ $c->amount }}</th>
                                                <th>{{ $c->price }}</th>
                                                <th><a href="{{route('adminproducts.edit', $c->id)}}" class="btn btn-info">Edit</a>
                                                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btw-danger">Delete</a>
                                                    <form action="{{route('adminproducts.destroy', ['adminproduct' => $c->id])}}" method="post">
                                                        @method('DELETE')
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    </form>
                                            </tr>
                                        @endforeach
                                    </table>
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
