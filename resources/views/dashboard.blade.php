@extends ('layout') @section ('content')
<div class="container">
    <div class="row">
        <div class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title"> Registro </div>
                </div>
                <div class="panel-body">
                    <a href="{{ url('/registro_proyecto') }}">Proyecto</a>
                </div>
            </div>
        </div>
    </div>
</div> @endsection