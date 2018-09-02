@extends('layouts.app')

@section('content')
<h2>Ver {{ title_case(str_singular($crud['name'])) }}</h2>

  @foreach ($crud['fields']['fillable'] as $field)
    <p>
      <b>{{ $field->Field }} </b>
      @if (isset($crud['data']->{$field->Field}))
        {{ $crud['data']->{$field->Field} }}
      @endif
    </p>
  @endforeach
<a href="{{ url($crud['name']) }}" class="btn btn-info">volver</a>
@endsection
