@livewireStyles
<link href="{{ asset('css/card_cachama.css') }}" rel="stylesheet">
@show
<div>
    <div id="js" class="container">
        <div style="background-color: #f0f8ff; padding: 10px;">
            <h1 id="tletra" style="text-align: center;">{{ $pageTitle }}</h1>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div id="videwe" class="container" style="margin-bottom: -380px;">
                    <div class="row justify-content-center mt-5">
                        <video controls autoplay muted loop>
                            <source src="{{ asset('videos/eviscerado.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div><br><br>
                <p style="text-align: justify;" class="card-text">{{ trans('menu.description_eviscerated') }}</p>
            </div>
        </div><br>
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <div class="card custom-card" style="height: 18rem; width: 18rem;">
                    <img src="{{ asset('images/31.jpg') }}" class="card-img-top" alt="..." height="250px" width="100px">
                    <div class="card-body">
                        <p class="card-text">{{ trans('menu.description_eviscerated2') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="card custom-card" style="height: 18rem; width: 18rem;">
                    <img src="{{ asset('images/43.jpg') }}" class="card-img-top" alt="..." height="250px" width="100px">
                    <div class="card-body">
                        <p class="card-text">{{ trans('menu.description_eviscerated3') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="card custom-card" style="height: 18rem; width: 18rem;">
                    <img src="{{ asset('images/48.jpg') }}" class="card-img-top" alt="..." height="250px" width="100px">
                    <div class="card-body">
                        <p class="card-text">{{ trans('menu.description_eviscerated4') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
