@extends('app_base')

@section('content')
    <div class="row">
        @foreach($ads as $ad)
            <div class="col-lg-4 col-4 w-25" >
                <a href="{{ route('app.ads.single', ['id' => 1]) }}">
                    <div class="card">
                        <div
                            class="ad-list-image"
                            style="background: url({{ count($ad->media) > 0 ? asset('uploads/' . $ad->media[0]->media_url) : "" }}) center center no-repeat;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $ad->title }}
                            </h5>
                            <p class="card-text" >
                                {{ $ad->short_description }}
                            </p>
                            <div class="d-flex card-footer justify-content-between">
                                <p>{{ $ad->status }}</p>
                                <p class="fw-bolder text-danger">
                                    {{ number_format($ad->price, 2) }} KM
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
{{--        @for($i = 0; $i < 68; $i++)--}}
{{--            <div class="col-lg-3">--}}
{{--                <a href="{{ route('app.ads.single', ['id' => 1]) }}">--}}
{{--                    <div class="card">--}}
{{--                        <img src="assets/img/product-{{ random_int(1, 5) }}.jpg" class="card-img-top" alt="...">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">--}}
{{--                                Card with an image on top--}}
{{--                            </h5>--}}
{{--                            <p class="card-text">--}}
{{--                                Some quick example text to build on the card title and make up the bulk of--}}
{{--                                the card's content.--}}
{{--                            </p>--}}
{{--                            <div class="d-flex card-footer justify-content-between">--}}
{{--                                <p>Novo</p>--}}
{{--                                <p class="fw-bolder text-danger">--}}
{{--                                    {{ random_int(100, 10000) }}.00 KM--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        @endfor--}}
    </div>
@endsection

@section('sidebar')
    <div class="row">
{{--        @for($i = 0; $i < 12; $i++)--}}
{{--            <div class="col-lg-12">--}}
{{--                <a href="#">--}}
{{--                    <div class="card">--}}
{{--                        <img src="assets/img/product-{{ random_int(1, 5) }}.jpg" class="card-img-top" alt="...">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">--}}
{{--                                Card with an image on top--}}
{{--                            </h5>--}}
{{--                            <p class="card-text">--}}
{{--                                Some quick example text to build on the card title and make up the bulk of--}}
{{--                                the card's content.--}}
{{--                            </p>--}}
{{--                            <div class="d-flex card-footer justify-content-between">--}}
{{--                                <p>Novo</p>--}}
{{--                                <p class="fw-bolder text-danger">--}}
{{--                                    {{ random_int(100, 100000) }}.00 KM--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        @endfor--}}
    </div>
@endsection
