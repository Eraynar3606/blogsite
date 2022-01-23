@extends('yonetim.layouts.master')
@section('title', 'AdministrationEdit')
@section('content')
 <div class="container-fluid bg-light">
            <div class="row d-flex justify-content-start " >
               <div class="col-auto mt-2    ">   Logo      </div>
               <div class="col-auto mt-2    ">  <a  href="{{route('yonetimanasayfa')}}"  class="list-text active" >   Home   </a>   </div>
               <div class="col-auto mt-2    ">  <a  href=""  class="list-text " >   Settings  </a>   </div>
               <div class="col-auto   "> 
                 <div class="dropdown col-auto ">
                    <button class="btn  text-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <span class="list-text">  {{auth()->guard('yonetim')->user()->name}} </span>
</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href=""> Profile </a>
                  <a class="dropdown-item" href="{{route('kapat')}}">Sign Out </a>
</div>
              </div> 
             </div>
              </div>
        </div>
    </nav>
    <section>
      <div class="container-fluid bg-muted">
        <div class="row">
          <h3 class="text-center">  <i class="fa fa-arrow-right"></i> {{$al->name}} - Edit </h3>
        </div>
      </div>
    </section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            @include('layouts.particals.alert')
            </div>
            <div class="col-md-8">
                    <form action="{{route('duzenle' , $al->slug)}}" method="post">
                     {{@csrf_field()}}
                     <input type="hidden" name="id" value="{{$al->id}}">
                     <label for="" class="form-label"> Blog Name </label>
                     <br>
                     <input type="text" name="name"  placeholder="Blog Name" class="form-control" id="">
                     <br>
                     <label for="" class="form-label"> Blog Subject </label>
                     <br>
                  <textarea name="subject" id="" placeholder="Blog Subject" class="form-control" cols="30" rows="10"></textarea>
                     <br>
                     <button class=" btn btn-success"> <i class="fa fa-save"></i> Save </button>
                 </form>
    </div>
            </div>
        </div>
</section>


<section>
  <div class="container-fluid">
    <div class="row">
          @include('layouts.particals.alert')
      <h3 class="text-center">    Show ; Slider, Right , New </h3>
     <div class="col-md-2">

     </div>
     <div class="col-md-8">
       <form action="{{route('show')}}" method="post">
         {{@csrf_field()}}
         <input type="hidden" name="id" value="{{$al->id}}">
         <br>
         <label for="" class="form-label">  Show Slider     </label>
         
         <input type="checkbox" name="showslider" value="1">
         <br>
         <label for="" class="form-label">  Show  Right    </label>
       
         <input type="checkbox" name="showright" value="1">
         <br>
         <label for="" class="form-label">  Show  New   </label>
       
         <input type="checkbox" name="shownew" value="1">
         <br> 
         <button class=" btn btn-danger"> <i class="fa fa-save"></i> Save</button>
       </form>
     </div>
    </div>
  </div>
</section>


















 @endsection