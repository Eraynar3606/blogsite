@extends('layouts.master')
@section('title', 'Giriş Yap')
@section('content')


<section>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h4>  Log in </h4>
                    <hr>
                 <form action="{{route('girisyap')}}"  method="post">
                     {{@csrf_field()}}
                     <label for="" class="form-label"> Email Adress</label>
                     <br>
                     <input type="email" name="email"  class="form-control" id="">
                     <br>
                     <label for="" class="form-label"> Password </label>
                     <br>
                     <input type="password" name="password"  class="form-control" id="">
                     <br>
                     <br>
                     <input type="checkbox" name="benihatirla" id="">
                    <label for="" class="form-label"> Remmember Me </label>
                     <br>
                     <button class=" btn btn-success"> <i class="fa fa-sign-in"></i> Log in  </button>
                 </form>
                </div>
            </div>
        </div>

    </section>

<br><br><br><br><br><br><br><br> <br><br>

























@endsection
