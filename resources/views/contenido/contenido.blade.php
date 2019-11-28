@extends('principal')


@section('contenido')
<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
                    <template v-if="menu==11">                     
                        <crearusuario :ruta="ruta"></crearusuario>
                    </template>    
                    <template v-if="menu==12">                     
                        <listarusuarios :ruta="ruta"></listarusuarios>
                    </template> 
        </div>
    </div>
</div>
@endsection