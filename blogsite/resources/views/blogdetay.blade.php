@extends('layouts.master')
@section('title', $blog->name)
@section('content')

<section class="mt-5 ms-1">
    <div class="container-fluid">
        <div class="row">
           <div class="col-12">
               <img src="/640x360.png" class="imgfluid  detail-img " width="" alt="">
                <span><i class="fa fa-calendar"></i>
                {{$blog->created_at}}
        </span>
        <span class="float-end">
          <i class="fa fa-users">    {{$blog->hit}} </i>
        </span>
        <h1> {{$blog->name}} </h1>
        <p>
            {{$blog->subject}}
</p>
        <h1 class="card-title">
            Yorum Yazınız

            @include('layouts.particals.alert')
        </h1>
        <hr>
          


        <form action="{{route('blogmesage')}}" method="post">
            {{@csrf_field()}}
            <input type="hidden" name="blogid" value="{{$blog->id}}">
            <textarea name="subject" id=""  class="form-control" cols="10" rows="10"></textarea>
            <p>    Yorum Yazabilmek İçin Giriş Yapın Veya Kayıt Olun    </p>
            <button class="btn btn-primary"> <i class="fa fa-send"></i> Gönder </button>
        </form> 



        <br>
        <h1 class="fs-2">   Gelen Yorumlar <i class="fa fa-comments"></i> {{count($yorum)}}  </h1>
                            <div>
                            @foreach($yorum as $y)
                            <h3> <i class="fa fa-user"></i> {{$y->user_name}}   </h3>
                <p> <span> <i class="fa fa-calendar"></i>  {{$y->created_at}} </span>  <i class="fa fa-comment"></i> {{$y->yorum}} </p>
                      @endforeach  
            </div>
        </div>        
</div>
           </div>
</section>

























@endsection