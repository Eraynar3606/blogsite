@extends('layouts.master')
@section('title', 'Arama')
@section('content')




<section>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-12">
                  <h4>    {{$ara}} belonging Results found on the page:  {{count($blog)}} </h4>  
                   <hr>
                </div>
               @if(count($blog)> 0)   
                @foreach($blog as $b)
                <div class="col-md-4">
                
                    <div class="card">
                    
                        <div class="card-body">
                      <img src="/640x360.png" class="img-fluid" alt="">
                           <h4>  {{$b->name}} </h4>
                         <p>
                            
                            {{$b->subject}}
                          
                        </p> 
                         <a href="{{route('blogdetay', $b->slug)}}" class="text-decoration-none "> Read More..  </a>
                    </div>
                       
                 </div>
                  
                  </div>      
           @endforeach 
           <div class=" mt-2">
                  {{$blog->appends(['ara'=>old('ara')])->links()}}
           </div>
      
                  @else
                  <h3 class="alert alert-danger">  
<p>Searched Content Not Found   Check The Content You Are Looking For...      </p>
                  
                  </h3>
                 
                  @endif
            </div>
        </div>
    </section>

<br><br><br><br><br><br><br>





















@endsection