@extends('layouts.admin')

@section('content')
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Overview</span>
        <h3 class="page-title">Data Tables</h3>
    </div>
</div>
<!-- End Page Header -->
<!-- Default Light Table -->
<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">New Orders</h6>
            </div>
            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                    <thead class="bg-light">
                    <tr>
                        <th scope="col" class="border-0">#</th>
                        <th scope="col" class="border-0">Name</th>
                        <th scope="col" class="border-0">Email</th>
                        <th scope="col" class="border-0">Address</th>
                        <th scope="col" class="border-0">Product</th>
                        <th scope="col" class="border-0">Amount</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Default Light Table -->
<!-- Default Dark Table -->
<div class="row">
    <div class="col">
        <div class="card card-small overflow-hidden mb-4">
            <div class="card-header bg-dark">
                <h6 class="m-0 text-white">Pending Orders</h6>
            </div>
            <div class="card-body p-0 pb-3 bg-dark text-center">
                <table class="table table-dark mb-0">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="border-0">#</th>
                        <th scope="col" class="border-0">Name</th>
                        <th scope="col" class="border-0">Email</th>
                        <th scope="col" class="border-0">Address</th>
                        <th scope="col" class="border-0">Product</th>
                        <th scope="col" class="border-0">Amount</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Default Dark Table -->
<!-- Default Light Table -->
<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Sent Orders</h6>
            </div>
            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                    <thead class="bg-light">
                    <tr>
                        <th scope="col" class="border-0">#</th>
                        <th scope="col" class="border-0">Name</th>
                        <th scope="col" class="border-0">Email</th>
                        <th scope="col" class="border-0">Address</th>
                        <th scope="col" class="border-0">Product</th>
                        <th scope="col" class="border-0">Amount</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Default Light Table -->
@endsection
