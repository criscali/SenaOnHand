@extends('admin.template.main')
@section('title','Editar Sede' . $sede->descripcion)
@section('nombre','Editar Sede' . $sede->descripcion)
 

@section('content')
@if (count($errors) > 0)
<div class="alert alert-info" role="alert">
<ul>
	@foreach($errors->all() as $error)
	
		<li> {{$error}}</li>
	
	@endforeach
	
	</ul>
	</div>
@endif

{!!Form::open(['route'=>['sedes.update', $sede],'method'=>'PUT'])!!}
<div class="form-group">
	{!!form::label('Centro')!!}
	{!!form::select('centro_id', $centros, $sede->centro->id,['class' => 'form-control selector', 'required'])!!}
</div>
<div class="">
	{!!Form::label('acronimo','Acrónimo')!!}
	{!! Form::text('acronimo',$sede->acronimo,['placeholder'=>'acronimo','required'])!!}
</div>
<div class="">
	{!!Form::label('descripcion','Centro')!!}
	{!! Form::text('descripcion',$sede->descripcion,['placeholder'=>'centro','required'])!!}
</div>
<div class="">
{!! Form::submit('Editar',['class'=>''])!!}
</div>
{!!Form::close() !!}

@endsection
@section('js')
<script>
    $(".selector").chosen({
      // disable_search_threshold: 10,
      search_contains: true,
      no_results_text: 'No hay resultados',
      placeholder_text_single: 'Seleccion una opcion'
    });
  </script>
@endsection
