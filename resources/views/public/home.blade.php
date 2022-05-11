@extends('public.master')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <div class="list-group-item list-group-item-action">Item 1</div>
                    <div class="list-group-item list-group-item-action">Item 1</div>
                    <div class="list-group-item list-group-item-action">Item 1</div>
                    <div class="list-group-item list-group-item-action">Item 1</div>
                    <div class="list-group-item list-group-item-action">Item 1</div>
                    <div class="list-group-item list-group-item-action">Item 1</div>
                    <div class="list-group-item list-group-item-action">Item 1</div>
                    <div class="list-group-item list-group-item-action">Item 1</div>
                </div>
            </div>
            <div class="col-9">
               <div class="row">
                   <div class="col-3">
                    <div class="card">
                        <img src="http://via.placeholder.com/300x400.png" class="w-100" alt="">
                    </div>
                    <div class="card-body">
                        <strong>Product Title</strong>
                        <p class="m-0 p-0">Mobile</p>
                        <p class="m-0 p-0">Rs 400/- <del>Rs 600/-</del></p>
                        <a href="{{route("viewProduct",['p_id'=>1])}}" class="stretched-link"></a>
                    </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
@endsection