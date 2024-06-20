@livewireStyles
<link href="{{ asset('css/blog.css') }}" rel="stylesheet">
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
                            <source src="{{ asset('videos/glaseado.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div><br><br>
                <p style="text-align: justify;" class="card-text">
                    {{ trans('menu.description_frozen_tilapia') }} </p>
            </div>
        </div>
        <div style="background-color: #f0f8ff; padding: 20px; margin-top: 0;">
            <h1 id="tletra" style="text-align: center; margin-top: 10px;">{{ trans('menu.Process') }}</h1>
        </div>
        <div class="row justify-content-md-center">
            <div class="process-map">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="step">
                        <div class="step-number">{{ $i }}</div>
                        <img src="../images/glaseado/{{ $i }}.jpg" alt="Paso {{ $i }}"
                            style="height: 250px; width: 250px;">
                    </div>
                @endfor
            </div>
        </div><br>
        <div class="row justify-content-md-center">
            <div class="process-map">
                @for ($i = 6; $i <= 10; $i++)
                    <div class="step">
                        <div class="step-number">{{ $i }}</div>
                        <img src="../images/glaseado/{{ $i }}.jpg" alt="Paso {{ $i }}"
                            style="height: 250px; width: 250px;">
                    </div>
                @endfor
            </div>
        </div><br>
    </div>
</div>
