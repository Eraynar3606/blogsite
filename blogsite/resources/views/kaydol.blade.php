@extends('layouts.master')
@section('title', 'Kaydol')
@section('content')


<section>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h4>  Sign up </h4>
                    <hr>
                 <form action="{{route('kayıtyap')}}" method="post">
                     {{@csrf_field()}}
                     <label for="" class="form-label"> Name and Surname </label>
                     <br>
                     <input type="text" name="name"  class="form-control" id="">
                     <br>
                     <label for="" class="form-label"> Email Adresss </label>
                     <br>
                     <input type="email" name="email"  class="form-control" id="">
                     <br>
                     <label for="" class="form-label"> Password </label>
                     <br>
                     <input type="password" name="password"  class="form-control" id="">
                     <br>
                     <label for="" class="form-label" > Password Repeat         </label>

                     <br>
                     <input type="password" name="password_confirmation"  class="form-control" id="">
                     <br>
                     <button class=" btn btn-success"> <i class="fa fa-sign-in"></i>  Sign up  </button>
                 </form>
                </div>
            </div>
        </div>

    </section>
<br><br><br><br><br>



























@endsection