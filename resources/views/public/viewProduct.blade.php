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
                    <div class="list-group-item list-group-item-action">Item 1</div>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-4">
                        <img src="http://via.placeholder.com/300x400.png" class="w-100" alt="">
                    </div>
                    <div class="col-8">
                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <td>This is product title</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>This is product title</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>Mobile</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>This is product title</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>
                                    <h5><del>Rs 1000/-</del></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Offer price</th>
                                <td>
                                    <h5>Rs 800</h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>This is product title</td>
                            </tr>
                            <tr>
                                <th>Brand</th>
                                <td>Puma</td>
                            </tr>
                            <tr>
                                <th>Qty</th>
                                <td>10</td>
                            </tr>
                        </table>
                        <div class="row">
                            <div class="col">
                                <a href="" class="btn btn-success">Buy Now</a>
                                <a href="{{route("cart")}}" class="btn btn-warning">Add To Cart </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row mt-3">
                        <div class="card">
                            <div class="card-header">Description</div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima optio eaque veritatis
                                    ut est ullam, laudantium impedit iure tenetur illum veniam minus sequi ipsam quod!
                                    Voluptate mollitia harum expedita omnis ea, placeat sint exercitationem ut
                                    similique, aliquid aut sit nobis enim repellat cumque culpa ullam nesciunt nisi
                                    aliquam, cum animi maxime repellendus quae officiis. Voluptas, architecto cumque?
                                    Adipisci necessitatibus veritatis, quisquam, possimus esse omnis quia maiores vitae
                                    nihil qui repellendus rerum fugiat ex, cumque debitis consequuntur! Atque aliquam
                                    esse non maiores dicta facere. Vero corporis tempore eligendi assumenda modi a sint
                                    ad, commodi neque fugit nesciunt, ab ex, atque omnis?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
