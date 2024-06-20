@livewireStyles
<link href="{{ asset('css/Fish_Bones_&_Fish_Heads.css') }}" rel="stylesheet">
@show
<div>
    <div id="js" class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white">
                        <h2 id="dosis-letra" class="text-center">{{ $pageTitle }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-3"> <!-- Imagen 49 -->
                                <img src="../images/49.jpg" alt="Tilapia fresca" class="img-fluid mb-3">
                                <img src="../images/47.jpg" alt="Tilapia fresca" class="img-fluid mb-3">
                                <img src="../images/14.jpg" alt="Tilapia fresca" class="img-fluid mb-3">
                            </div>
                            <div class="col-md-6 text-center mb-3"> <!-- Imagen 16 -->
                                <img src="../images/16.jpg" alt="Tilapia fresca" class="img-fluid">
                            </div>
                            <div class="col-md-3"> <!-- Imagen 46 -->
                                <img src="../images/46.jpg" alt="Tilapia fresca" class="img-fluid mb-3">
                                <img src="../images/42.jpg" alt="Tilapia fresca" class="img-fluid mb-3">
                                <img src="../images/15.jpg" alt="Tilapia fresca" class="img-fluid mb-3">
                            </div>
                        </div><br>
                        <p class="text-center">{{ trans('menu.description_T') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-4">
                <div class="card rounded">
                    <div class="card-body">
                        <i class="fas fa-fish fa-5x mb-3"></i>
                        <h3 id="dosis-letra" class="text-center mb-3">{{ trans('menu.Authentic flavor') }}</h3>
                        <p id="dosis-letra" class="text-center">{{ trans('menu.description_authentic') }}.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card rounded">
                    <div class="card-body">
                        <i class="fa-solid fa-kitchen-set fa-5x mb-3"></i>
                        <h3 id="dosis-letra" class="text-center mb-3">{{ trans('menu.Unsurpassed quality') }}</h3>
                        <p id="dosis-letra" class="text-center">{{ trans('menu.quiality') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card rounded">
                    <div class="card-body">
                        <i class="fas fa-utensils fa-5x mb-3"></i>
                        <h3 id="dosis-letra" class="text-center mb-3">{{ trans('menu.Versatility in the kitchen') }}</h3>
                        <p id="dosis-letra" class="text-center">{{ trans('menu.description_versatility') }}.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
