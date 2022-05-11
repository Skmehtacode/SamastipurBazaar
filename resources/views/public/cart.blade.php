@extends("public.master")
@section("content")
    <div class="container-fluid bg-dark text-white p-2 sticky-top">
        <div class="container">
            <h3 class="fw-lighter">your Cart</h3>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-3">
                                    <img src="http://via.placeholder.com/500jpg" class="w-100" alt="">
                                </div>
                                <div class="col-9 card-body">
                                    <h5>This is product title</h5>
                                    <p>Mobile</p>
                                    <h6>Rs.1000 <del>Rs.1800</del></h6>
                                    <span class="laed fw-bolder">0</span>
                                    <a href="" class="btn btn-success">+</a>
                                    <a href="" class="btn btn-dark float-end">delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="list-group">
                    <div class="list-group-item list-group-item-action">Amount<span class="float-end">Rs.5000/-</span></div>
                    <div class="list-group-item list-group-item-action bg-success text-white">Total Discount<span class="float-end">Rs.4000/-</span></div>
                    <div class="list-group-item list-group-item-action bg-warning text-white">Tax (18%)<span class="float-end">Rs.100/-</span></div>
                    <div class="list-group-item list-group-item-action ">Payble Amount<span class="float-end">Rs.5100/-</span></div>
                </div>
                <div class="row mt-3 px-2">
                    <a href="" class="btn btn-success col">Continue Shopping</a>
                    <a href="{{route("checkout")}}" class="btn btn-danger col">Check Out</a>
                </div>
            </div>
        </div>
    </div>
@endsection