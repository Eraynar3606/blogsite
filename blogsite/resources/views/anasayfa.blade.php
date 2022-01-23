@extends('layouts.master')
@section('title', 'Anasayfa')
@section('content')


<article class="mt-5">
<h1 class="text-center">  This Week's Uploads  </h1>
    <div class="container-fluid ">
           <div class="row">
         <div class="col-md-8">
            <div class="carousel slide carousel-dark   carousel-fade" data-bs-ride="carousel" id="slider1">
                <ol class="carousel-indicators">
                  @for($i=0; $i < count($slider); $i++)
                  <li data-bs-target="#slider1" data-bs-slide-to="{{ $i }}" class="{{$i == 0 ? 'active' : '' }}"></li>
                 
                  @endfor
                </ol> 
              
                <div class="carousel-inner" role="listbox">
                   @foreach($slider as $index => $a)
                  <div class="carousel-item {{ $index == 0 ? 'active': '' }}" data-bs-interval="1000">
                    <img class="d-block w-100" src="640x360.png" alt="">
                    <div class="carousel-caption">
                      <h4> <a class="text-decoration-none" href="{{route('blogdetay', $a->blog->slug)}}"> {{$a->blog->name}}</a> </h4>
                      <p> {{$a->blog->subject}}</p>
                    </div>
                   
                  </div>
                  
                  @endforeach
                </div>
               
                <a href="#slider1" class="carousel-control-prev" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a href="#slider1" class="carousel-control-next" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
        </div>
       
      
        <div class="col-md-4 card-text ">
                  @foreach($yan as $index=> $y)
                         <div class="card">
                             <div class="card-body">
                           <img src="640x360.png"  class="img-fluid" alt="">
                           <h5>  <a href="{{route('blogdetay',$y->blog->slug)}}"> {{$y->blog->name}}   <br> </a>   <i class="fa fa-calendar"></i> {{$y->blog->created_at}} </h5>
                              <p>
                              {{$y->blog->subject}}
                             </p>
                        </div>
                      </div>   
                   
                       @endforeach
                    
                   </div>
                </div>
            </div>
        
        </div>
        
    </div>
    </div>
 
</article>
<hr>
<article>
    <div class="container-fluid">
        <div class="row ">
          <h4>   Latest Blogs </h4>
            <div class="col-md-12">
              <div class="row d-flex justify-content-start">
                    @foreach($yeni as $index=> $b) 
                    <div class="col-md-4">  
                  
                    <div class="card">
                    
                        <div class="card-body">
                         
                      <img src="640x360.png" class="img-fluid" alt="">
                           <h4> {{$b->blog->name}} <br> <i class="fa fa-calendar"></i> {{$b->blog->created_at}} </h4>
                         <p>
                            
                      {{$b->blog->subject}}
                          
                        </p> 
                         <a href="{{route('blogdetay', $b->blog->slug)}}"  class="text-decoration-none "> Read More..  </a>
                        
                   </div> 
                  
                 </div>
               
                  </div>  
                   @endforeach
                  </div>
                  </div>
              </div>
          
            
            
            </div>
        </div>
    </div>
</article>
<hr>
<section >
    <div class="container-fluid">
       <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
     
                        @include('layouts.particals.alert')
   
                    <h1 class="card-title">
                     Contact Us

                    </h1>
                    <hr>
                    <form   action="{{route('ajax_post')}}" method="post"  >
                      {{@csrf_field()}}
                       <input type="hidden" name="" id="bilgi">
                        <label for="" class="form-label">   Name and Surname </label>
                        <br>
                        <input type="text" class="form-control" name="name" placeholder="Name and Surname" >
                        <br>
                        <label for="" class="form-label"> Email Adress </label>
                        <br>
                        <input type="text" class="form-control" name="email" placeholder="Email Adress" >
                        <br>
                        <label for="" class="form-label"> Message </label>
                        <br>
                        <textarea name="subject" id=""  class="form-control" placeholder="Message" cols="30" rows="10"></textarea>
                        <br>
                        <button   class="btn btn-primary"> <i class="fa fa-send"></i> Submit </button>
                    </form> 
               
        </div>
       </div>
    </div>

</section>
<br>



</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>

  
 
   
 




</script>














































@endsection