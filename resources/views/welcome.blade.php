
@extends('layouts.app')  
@section('content')
<div class='container'>
   <div class='row'>
    <div class='col-12 text-center'>
        <h1>Benvinguts al portal de compra/venta.</h1>
       
    </div>
    </div>

    @foreach($announcements as $announcement)
    @include('announcement._announcements')
    @endforeach

 
</div>


@endsection