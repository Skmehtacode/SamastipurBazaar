@extends('admin.base')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                    <div class="row">
                        <div class="col-4 my-3">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <h2 class="display-5">1000+</h2>
                                    <h5>Total Products</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="card bg-warning text-white">
                                <div class="card-body">
                                    <h2 class="display-5">1000+</h2>
                                    <h5>Total Order</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <h2 class="display-5">1000+</h2>
                                    <h5>Total User</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h2 class="display-5">1000+</h2>
                                    <h5>Total Brand</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="card bg-danger text-white">
                                <div class="card-body">
                                    <h2 class="display-5">1000+</h2>
                                    <h5>Total Payment</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <h2 class="display-5">1000+</h2>
                                    <h5>Total Category</h5>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection