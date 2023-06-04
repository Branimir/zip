@extends('app_base')

@section('content')
    <div class="row">
        @foreach($ads as $ad)
            <div class="col-lg-4 col-md-6 col-12" >
                <a href="{{ route('app.ads.single', ['id' => $ad->id]) }}">
                    <div class="card">
                        <div
                            class="ad-list-image"
                            style="background: url({{ count($ad->media) > 0 ? asset('uploads/' . $ad->media[0]->media_url) : '' }}) center center no-repeat;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $ad->title }}
                            </h5>
                            <p class="card-text" >
                                {{ $ad->short_description }}
                            </p>
                            <div class="d-flex card-footer justify-content-between">
                                <p>{{ ['new' => 'Novo', 'used' => 'Korisceno'][$ad->status] }}</p>
                                <p class="fw-bolder text-danger">
                                    {{ number_format($ad->price, 2) }} KM
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    {{ $ads->withQueryString()->links() }}
@endsection

