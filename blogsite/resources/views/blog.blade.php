@extends('layouts.master')
@section('title', 'Blog')
@section('content')

<article>
        <div class="container-fluid mt-5">
          <h1> Blogs  </h1>
            <div class="row ">
                <div class="col-md-12">
                  <div class="row d-flex justify-content-start"> 
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
           <div class="mt-2">
             {{$blog->links()}}
           </div>
              
                  </div>
                </div>
            </div>
        </div>
    </article>
    <article>
      

    <br><br><br><br><br>

























@endsection