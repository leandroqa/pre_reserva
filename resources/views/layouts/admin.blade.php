<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pré-reserva salas de Videoconferência - EAD/FE UNICAMP</title>
        {{Html::style('css/bootstrap.min.css')}}
        {{Html::style('css/bootstrap-theme.min.css')}}
    </head>
<body>
    <div class="container">
    <nav class="navbar navbar-default navbar-static-top">

                    <div class="navbar-header">
                        <h2><a href="{{env('APP_URL')}}/admin">Admin - Gerenciar pré-reservas</a></h2>
                    </div>
                    <div class="navbar-left">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="{{env('APP_URL')}}/admin/pendentes">Pendentes</a>
                            </li>
                            <li>
                                <a href="{{env('APP_URL')}}/admin/aguardando-formulario">Aguardando formulário</a>
                            </li> 
                            <li>
                                <a href="{{env('APP_URL')}}/admin/aprovadas">Aprovadas</a>
                            </li>  
                                                         
                            <li>
                                <a href="{{env('APP_URL')}}/admin/negadas">Não confirmadas</a>
                            </li>
                            <li>
                                <a href="{{env('APP_URL')}}/admin/reserva-tecnica">Reserva técnica</a>
                            </li> 
                            <li>
                                <a href="{{env('APP_URL')}}/admin/canceladas">Canceladas</a>
                            </li> 
                            <li class="">
                                {{ Form::open(['action'=>'Auth\LoginController@logout']) }}
                                {{ Form::submit('Logout',['class'=>'btn btn-default']) }}
                                {{ Form::close()}}
                            </li>
                        </ul>
                    </div>   
    </nav>  
        @yield('admin')
    </div>
        
        {{ Html::script('js/jquery-3.2.1.min.js')}}
        {{ Html::script('js/bootstrap.min.js')}}
</body>
</html>