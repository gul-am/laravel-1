@extends('layouts.main')

@section('title', 'produtos')
    
@section('content')

@if($id != null)
<p>Exibindo produto id: {{ $id }}</p>
@endif

@endsection