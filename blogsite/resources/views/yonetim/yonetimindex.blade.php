@extends('yonetim.layouts.master')
@section('title', 'AdministrationIndex')
@section('content')


<section>
    <div class="container-fluid bg-dark">
        <div class="row">
            <h3 class="text-center text-white"> 
Administration Login     </h3>
        </div>
    </div>
</section>

<p>
                        @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                        {{$error}}
                        @endforeach
                        @endif
</p>
        

<section>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
            <form action="{{route('index')}}"  method="post">
                     {{@csrf_field()}}
                     <label for="" class="form-label"> Email Adress</label>
                     <br>
                     <input type="email" name="email"  class="form-control" id="">
                     <br>
                     <label for="" class="form-label"> Passsword </label>
                     <br>
                     <input type="password" name="password"  class="form-control" id="">
                     <br>
                     <br>
                     <input type="checkbox" name="benihatirla" id="">
                     <label for="" class="form-label"> Remmeber Me</label>
                     <br>
                     <button class=" btn btn-success"> <i class="fa fa-sign-in"></i> Login  </button>
                 </form>
                </div>
            </div>
        </div>
    </div>
</section>

         <section>
             <div class="container-fluid mt-2">
                 <div class="row">
                     <div class="col-md-2"></div>
                     <div class="col-md-6">
                           <a href="{{route('anasayfa')}}">   Back To WebSite </a>
                     </div>
                 </div>
               
             </div>
         </section>

<br><br><br><br><br><br><br><br><br><br>

<footer>







</footer>






















@endsection