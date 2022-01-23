@extends('yonetim.layouts.master')
@section('title', 'AdministrationComments')
@section('content')
<div class="container-fluid bg-light">
            <div class="row d-flex justify-content-start " >
               <div class="col-auto mt-2    ">  <a href="" class="logo"> Logo  </a>    </div>
               <div class="col-auto mt-2    ">  <a  href="{{route('yonetimanasayfa')}}"  class="list-text active" >   Home </a>   </div>
               <div class="col-auto   mt-2">   <a href="" class=" list-text  ">  Settings     </a>   </div>
               <div class="col-auto   "> 
                 <div class="dropdown col-auto ">
                    <button class="btn  text-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <span class="list-text">  {{auth()->guard('yonetim')->user()->name}} </span>
</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href=""> Profile </a>
                  <a class="dropdown-item" href="{{route('kapat')}}"> Sign Out </a>
                </div>
              </div> 
             </div>
              </div>
        </div>
    </nav>
<section>
    <div class="container-fluid mt-5">
        <div class="row">
        <h1 class="sub-header">
        Incoming Message:{{count($top)}}
                </h1>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Subject </th>
                                <th> My Incoming Time </th>
                                <th> Process</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($mesaj as $a)
                            <tr>
                                <td>  {{$a->name}} </td>
                                <td> {{$a->subject}} </td>
                        
                                <td> {{$a->created_at}} </td>
                                <td style="width: 100px">
                                <form action="{{route('delete')}}" method="post"> 
                                    <input type="hidden" name="id" value="{{$a->id}}">
                                    {{@csrf_field()}}
                                    <button class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?')">
                                        <span class="fa fa-trash"></span>
                                 
                                </button>  
                             </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                  
                    </table>     
                           <div class="mt-2">
                   {{$mesaj->links()}}
                        </div>
                </div>
        </div>
    </div>
</section>

































@endsection