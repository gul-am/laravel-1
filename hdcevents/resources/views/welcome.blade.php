@extends('layouts.main')

@section('title', 'HDC Events')
    
@section('content')

<h1>Algumm titulo</h1>
<img src="/img/banner.jpg" alt="Banner">
@if(10 > 5)
    <p>A condicao e verdadeira</p>
@endif

<p>{{ $nome }}</p>

@if($nome == "Amade")
<p>O nome e Amade</p>            
@else
<p>O nome nao e Amade</p>
@endif

@endsection