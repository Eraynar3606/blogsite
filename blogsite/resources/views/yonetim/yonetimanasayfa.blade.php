@extends('yonetim.layouts.master')
@section('title', 'AdministrationHome')
@section('content')
        <div class="container-fluid bg-light">
            <div class="row d-flex justify-content-start " >
               <div class="col-auto mt-2    ">  <a href="" class="logo"> Logo  </a>    </div>
               <div class="col-auto mt-2    ">  <a  href=""  class="list-text active" >   Home   </a>   </div>
               <div class="col-auto   mt-2">   <a href="" class=" list-text  ">  Settings      </a>   </div>
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
          <h3 class="text-center">  <i class="fa fa-arrow-right"></i>  Dashbord </h3>
        </div>
      </div>
    </section>


<section>
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-md-1"></div>
    <div class="col-sm-8 col-sm-offset-3 col-md-9 col-md-offset-3 col-lg-10 col-lg-offset-2 main">
                <section class="row text-center placeholders">
                    <div class="col-6 col-sm-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">  Total Site Users     </div>
                            <div class="panel-body">
                                <h4> <i class="fa fa-user"></i>  {{count($totaluser)}} </h4>
                        
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Total Message  </div>
                            <div class="panel-body">
                                <h4><i class="fa fa-comments"></i>{{count($totalmesage)}}</h4>
                       
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">  Total Blog  </div>
                            <div class="panel-body">
                                <h4><i class="fa fa-arrow-right"></i> {{count($totalblog)}} </h4>
                             
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-comments"> Incoming message {{count($totalmesage)}}</i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <h5> 
Recent Posts  </h5>
   @foreach($mesaj as $a)
   <p>
   {{$a->name}}:
    {{$a->subject}}
    {{$a->created_at}}
   </p>
   @endforeach
 <a href="{{route('mesajlar')}}" class="btn btn-danger">  Total Message  </a>
  </div>
</div>  </div>
                </section>
                @include('layouts.particals.alert')
                <h1 class="sub-header mt-5">
                     Blogs-{{count($totalblog)}}  
                     <div class="float-end">
                    <a href="{{route('create')}}" class="btn btn-dark"> <i class="fa fa-plus"></i> Create</a>
                </div>   
                </h1>
               
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Title</th>
                                <th>Subject </th>
                                <th>İmage</th>
                                <th>Registration Time  </th> 
                                <th> Process   </th>


                            </tr>
                        </thead>
                        <tbody>
                          @foreach($al as $a)
                            <tr>
                                <td>  {{$a->name}} </td>
                                <td> {{$a->subject}} </td>
                                <td> <img src="" alt="ss"> {{$a->image}}    </td>
                                <td> {{$a->created_at}} </td>
                                <td style="width: 100px">

                                <a href="{{route('duzenle',$a->slug)}}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <span class="fa fa-pencil"></span>
                                    </a>
                                    <a href="{{route('sil', $a->slug)}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?')">
                                        <span class="fa fa-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <div class="mt-2">
                  
                        </div>
                    </table>     
                       {{$al->links()}}
                </div>
            </div>
    </div>
  </div>
</section>
@endsection