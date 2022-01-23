@extends('layouts.master')
@section('title', 'Profil')
@section('content')



<section class="">
    <div class="container-fluid mt-5 bg-light">
        <div class="row d-flex ">
            <div class="col-md-4"></div>
           <div class="col-md-8">
           <h1>  {{auth()->user()->name}} s' Profile  </h1>
           </div>
        </div>
    </div>
</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



























@endsection
