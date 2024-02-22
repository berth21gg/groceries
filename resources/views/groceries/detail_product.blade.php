@extends('layout.groceries')

@section('main_content')

    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0"
            style="background-image: url({{ asset('assets/img/bg-header.jpg') }});">
            <div class="container">
                <h1 class="pt-5">
                    {{ $product->name }}
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>
            </div>
        </div>
    </div>

    <div class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="slider-zoom">
                        <a href="{{ asset('assets/img') }}/{{ $product->image }}" class="cloud-zoom"
                            rel="transparentImage: 'data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==', useWrapper: false, showTitle: false, zoomWidth:'500', zoomHeight:'500', adjustY:0, adjustX:10"
                            id="cloudZoom">
                            <img alt="Detail Zoom thumbs image" src="{{ asset('assets/img') }}/{{ $product->image }}"
                                style="width: 100%;">
                        </a>
                    </div>

                    <div class="slider-thumbnail">
                        <ul class="d-flex flex-wrap p-0 list-unstyled">
                            <li>
                                <a href="{{ asset('assets/img/meats.jpg') }}"
                                    rel="gallerySwitchOnMouseOver: true, popupWin:{{ asset('assets/img/meats.jpg') }}, useZoom: 'cloudZoom', smallImage: {{ asset('assets/img/meats.jpg') }}"
                                    class="cloud-zoom-gallery">
                                    <img itemprop="image" src="{{ asset('assets/img/meats.jpg') }}" style="width:135px;">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('assets/img/fish.jpg') }}"
                                    rel="gallerySwitchOnMouseOver: true, popupWin:'{{ asset('assets/img/fish.jpg') }}', useZoom: 'cloudZoom', smallImage: '{{ asset('assets/img/fish.jpg') }}'"
                                    class="cloud-zoom-gallery">
                                    <img itemprop="image" src="{{ asset('assets/img/fish.jpg') }}" style="width:135px;">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('assets/img/vegetables.jpg') }}"
                                    rel="gallerySwitchOnMouseOver: true, popupWin:'{{ asset('assets/img/vegetables.jpg') }}', useZoom: 'cloudZoom', smallImage: '{{ asset('assets/img/vegetables.jpg') }}'"
                                    class="cloud-zoom-gallery">
                                    <img itemprop="image" src="{{ asset('assets/img/vegetables.jpg') }}"
                                        style="width:135px;">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('assets/img/frozen.jpg') }}"
                                    rel="gallerySwitchOnMouseOver: true, popupWin:'{{ asset('assets/img/frozen.jpg') }}', useZoom: 'cloudZoom', smallImage: '{{ asset('assets/img/frozen.jpg') }}'"
                                    class="cloud-zoom-gallery">
                                    <img itemprop="image" src="{{ asset('assets/img/frozen.jpg') }}" style="width:135px;">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-sm-6">
                    <p>
                        <strong>Overview</strong><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>
                                <strong>Price</strong> (/Pack)<br>
                                <span class="price">{{ $product->purchase_price }}</span>
                                <span class="old-price">{{ $product->sale_price }}</span>
                            </p>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p>
                                <span class="stock available">In Stock: {{ $product->quantity }}</span>
                            </p>
                        </div>
                    </div>
                    <p class="mb-1">
                        <strong>Quantity</strong>
                    </p>
                    <div class="row">
                        <div class="col-sm-5">
                            <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-primary"
                                data-bts-button-up-class="btn btn-primary" value="" name="vertical-spin">
                        </div>
                        <div class="col-sm-6"><span class="pt-1 d-inline-block">Pack (250 gram)</span></div>
                    </div>

                    <button class="mt-3 btn btn-primary btn-lg">
                        <i class="fa fa-shopping-basket"></i> Add to Cart
                    </button>

                    <section>
                        <div>
                            <h3 class="title font-weight-normal mt-0 text-left">COMMENTS SECTION</h3>
                            <form data-aos="fade-left" data-aos-duration="1200" action="{{ route('comment.store') }}"
                                method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="fullname"
                                                value="{{ old('fullname') }}" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" type="email" name="email"
                                                value="{{ old('email') }}" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" name="comment" placeholder="Comment">{{ old('comment') }}</textarea>
                                        </div>
                                    </div>
                                    <!-- mandar id del producto -->
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <div class="col-lg-12 text-right">
                                        <button type="submit" class="btn btn-lg btn-primary mb-5">Leave a comment</button>
                                    </div>
                                </div>
                                @if (session()->get('success'))
                                    <div class="alert alert-success text-center">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </form>
                            <div style="height: 200px; overflow: auto; border: 1px solid #ccc; padding: 10px">
                                <h4 class="title font-weight-normal mt-0 text-left" style="margin-bottom: 1rem">COMMENTS</h4>
                                <dl>
                                    @foreach ($comments as $c)
                                        <dt>{{ $c->fullname }} - {{ $c->updated_at->format('d/m/Y') }}</dt>
                                        <dd style="margin-left: 2rem"> {{ $c->comment }}</dd>
                                    @endforeach
                                </dl>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>

    <section id="related-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Related Products</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach ($products as $p)
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until 2018
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="{{ asset('assets/img') }}/{{ $p->image }}" alt="Card image 2"
                                            class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="/detail_product/{{ $p->id }}">{{ $p->name }}</a>
                                        </h4>
                                        <div class="card-price">
                                            <span class="discount">{{ $p->sale_price }}</span>
                                            <span class="reguler">{{ $p->purchase_price }}</span>
                                        </div>
                                        <a href="/detail_product/{{ $p->id }}" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
