@extends('layouts.master')
@section('title', 'MyComments')
@section('content')


<section>
    <div class="container-fluid">
        <div class="row">
            <h1> {{auth()->user()->name}} 's Yorumlar </h1>
            <div class="col-md-2"></div>
        <div class="col-md-7">          
  
      <table class="table">
                <thead>
                    <tr>
                        <th> Blog </th>
                        <th>  Comments   </th>
                        <th> Post Time</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($comments as $c)
                    <tr>
                        <td> <i class="fa fa-arrow-right"></i> {{$c->blog_slug}} </td>
                        <td><i class="fa fa-comments"></i>   {{$c->yorum}} </td>
                        <td> <i class="fa fa-calendar"></i>  {{$c->created_at}}     </td>
                    </tr>
                    @endforeach
                </tbody>
              

            </table>
        </div>
        </div>
    </div>
</section>

<br><br><br><br><br><br><br><br><br><br>

























@endsection