@extends('layouts.app')

@section('content')
<!-- Page Hero Start -->
    <div class="container-fluid mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center responsive-img shop-hero" style="min-height: 300px; background-image: url({{ url('assets/img/shop.jpg') }});">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
        </div>
    </div>
<!-- Page Hero End -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <!-- Shop Sidebar Start -->
        <div class="col-lg-3 col-md-12">
            <!-- Category Start -->
            <div class="border-bottom mb-4 pb-4">
                <h5 class="font-weight-semi-bold mb-4">Filter by category</h5>
                <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                    <a href="{{ $order[$orderby .'/'. $ordertype .'/'. $pricerange .'/'. 'man' .'/'. $size] }}">Man</a>
                </div>
                <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                    <a href="{{ $order[$orderby .'/'. $ordertype .'/'. $pricerange .'/'. 'woman' .'/'. $size] }}">Woman</a>
                </div>
            </div>
            <!-- Category End -->
            
            <!-- Price Start -->
            <div class="border-bottom mb-4 pb-4">
                <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>
                <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                    <a class="pricefilter" href="{{ $order[$orderby .'/'. $ordertype .'/'. 'all' .'/'. $category .'/'. $size] }}">All prices</a>
                </div>
                <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                    <a class="pricefilter" href="{{ $order[$orderby .'/'. $ordertype .'/'. '0/49' .'/'. $category .'/'. $size] }}">0 - $49</a>
                </div>
                <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                    <a class="pricefilter" href="{{ $order[$orderby .'/'. $ordertype .'/'. '50/99' .'/'. $category .'/'. $size] }}">$50 - $99</a>
                </div>
                <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                    <a class="pricefilter" href="{{ $order[$orderby .'/'. $ordertype .'/'. '100/149' .'/'. $category .'/'. $size] }}">$100 - $149</a>
                </div>
                <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                    <a class="pricefilter" href="{{ $order[$orderby .'/'. $ordertype .'/'. '150/199' .'/'. $category .'/'. $size] }}">$150 - $199</a>
                </div>
                <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                    <a class="pricefilter" href="{{ $order[$orderby .'/'. $ordertype .'/'. '200/249' .'/'. $category .'/'. $size] }}">$200 - $249</a>
                </div>
            </div>
            <!-- Price End -->

            <!-- Size Start -->
            <div class="mb-5">
                <h5 class="font-weight-semi-bold mb-4">Filter by size</h5>
                <form>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <a href="{{ $order[$orderby .'/'. $ordertype .'/'. $pricerange .'/'. $category .'/'. 'any'] }}">Any</a>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <a href="{{ $order[$orderby .'/'. $ordertype .'/'. $pricerange .'/'. $category .'/'. 'xs'] }}">XS</a>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <a href="{{ $order[$orderby .'/'. $ordertype .'/'. $pricerange .'/'. $category .'/'. 's'] }}">S</a>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <a href="{{ $order[$orderby .'/'. $ordertype .'/'. $pricerange .'/'. $category .'/'. 'm'] }}">M</a>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <a href="{{ $order[$orderby .'/'. $ordertype .'/'. $pricerange .'/'. $category .'/'. 'l'] }}">L</a>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <a href="{{ $order[$orderby .'/'. $ordertype .'/'. $pricerange .'/'. $category .'/'. 'xl'] }}">XL</a>
                    </div>
                </form>
            </div>
            <!-- Size End -->
        </div>
        <!-- Shop Sidebar End -->


        <!-- Shop Product Start -->
        <div class="col-lg-9 col-md-12">
            <div class="row pb-3">
                <div class="col-12 pb-1">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <form action="{{ $url ?? url('clothes') }}">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search" name="q" value="{{ $q ?? '' }}">
                                <input type="hidden" name="orderby" value="{{ $byvalue ?? '' }}"/>
                                <input type="hidden" name="ordertype" value="{{ $typevalue ?? '' }}"/>
                                <input type="hidden" name="pricerange" value="{{ $pricevalue ?? '' }}"/>
                                <input type="hidden" name="category" value="{{ $categvalue ?? '' }}"/>
                                <input type="hidden" name="size" value="{{ $sizevalue ?? '' }}"/>
                                <div class="input-group-append">
                                    <button type="submit" class="input-group-text bg-transparent text-primary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="d-flex">
                            <a class="btn border" href="{{ $url }}">Clear filters</a>
                            <div class="dropdown ml-4">
                                <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                            Sort by
                                        </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="{{ $order['updated_at' .'/'. 'desc' .'/'. $pricerange .'/'. $category .'/'. $size] }}">Latest</a>
                                    <a class="dropdown-item" href="{{ $order['price' .'/'. 'desc' .'/'. $pricerange .'/'. $category .'/'. $size] }}">Price high to low</a>
                                    <a class="dropdown-item" href="{{ $order['price' .'/'. 'asc' .'/'. $pricerange .'/'. $category .'/'. $size] }}">Price low to high</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                @foreach($clothesmodel as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="data:image/jpeg;base64,{{ $item->thumbnail }}" alt="Clothes">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">{{ $item->name }}</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>{{ $item->price }}&nbsp;€</h6>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <h6>Sizes:&nbsp;&nbsp;</h6>
                                    @foreach($item->sizes as $size)
                                    <h6 style="text-transform: uppercase; color: gray;">{{ $size->name }}&nbsp;&nbsp;</h6>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="{{ url('clothes/' . $item->id) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="#" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 pb-1 pt-5">
                    <ul class="pagination justify-content-center mb-3">
                        {{ $clothes->onEachSide(2)->links() }}
                    </ul>
                </div>
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
@endsection