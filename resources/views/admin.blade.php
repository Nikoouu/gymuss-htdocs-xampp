extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Hola</div>

                    <div class="panel-body">
                        ¿Que desea hacer?
                    </div>
                    <a href="{{ url('/register') }}">Registrar Alumno</a>
                    <div class="panel-body">
                        Aca contenido
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Otra columna
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection