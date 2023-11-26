@extends('app_base')

@section('content')
    <div class="row">
        @foreach($ads as $ad)
            <div class="col-lg-2 col-md-4 col-12" >
                <a href="{{ route('app.ads.single', ['id' => $ad->id]) }}">
                    <div class="card">
                        <div
                            class="ad-list-image"
                            style="background: url({{ count($ad->media) > 0 ? asset('uploads/' . $ad->media[0]->media_url) : '' }}) center center no-repeat;">
                            <small class="status-badge @if($ad->status == 'new') status-badge-bg-success @endif">
                                {{ ['new' => 'Novo', 'used' => 'Korisceno'][$ad->status] }}
                            </small>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">
                                {{ $ad->title }}
                            </h6>
                            <p class="card-text">
                                {{ $ad->short_description }}
                            </p>
                            <div class="">

                                <span class="fw-bolder text-secondary">
                                    {{ number_format($ad->price, 2) }} KM
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    {{ $ads->withQueryString()->links() }}
@endsection

