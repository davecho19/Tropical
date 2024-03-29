<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tropical Maki</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
 
            <div >
             <div align="center">
                                <img width="300" weight="300" src="https://scontent.fuio1-1.fna.fbcdn.net/v/t1.0-9/101017320_102294388180616_5698168304565223424_o.jpg?_nc_cat=109&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeHOxj653VGHJJl1cul4m768xzEMzg8fIyrHMQzODx8jKkT3IJbsVMpp2OyaNsruEXFpIUV6GRoK_xsmhAk_NGjf&_nc_ohc=unAOHXF_MOUAX_LiFjU&_nc_ht=scontent.fuio1-1.fna&oh=d22dec54cfb95f41be750f494e81eadb&oe=6084B689"/>
                                    </div>
                <div class="title m-b-md">
                     <h3>Tropical Maki</h3>
                </div>

                <div class="col-md-3 offset-md-1">
                        <div class="row mb-4">
                           
                                <div align="center">
                                <h3 class="card-title" href="tropical">Quienes somos</h3>
                                <p class="card-text" >
                                    Somos una empresa familiar que se dedica a la venta comida artesanal.
                                </p>
                                <a href="login" class="btn btn-primary">Has tu pedido</a>
                                </div>
                            </div>
                        </div>
                
            </div>
        </div>
    </body>
</html>
