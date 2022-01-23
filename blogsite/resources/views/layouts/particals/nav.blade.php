<nav class="nav-container">
        <div class="container-fluid ">
            <div class="row d-flex justify-content-start " >
    
               <div class="col-auto mt-2  d-none d-md-block  ">  <a href="" class="logo"> Logo  </a>    </div>
                
               <div class="col-auto mt-2  d-none d-md-block  ">  <a  href="{{route('anasayfa')}}"  class="list-text " >   Home    </a>   </div>
               <div class="col-auto   mt-2 d-none d-md-block ">   <a href="{{route('blog')}}" class=" list-text  ">  Blog       </a>   </div>
               @guest
               <div class="col-auto   mt-2 d-none d-md-block "> <a href="{{route('giris')}}" class=" list-text  "> Log in </a>    </div>
               <div class="col-4  mt-2 col-sm-7 col-md-auto col-lg-6 d-none d-md-block   ">  <a href="{{route('kaydol')}}" class=" list-text  ">  Sign in  </a>
                @endguest
            @auth

               <div class="col-auto    d-none d-md-block "> 
                 
                 <div class="dropdown col-1 ">
                
                    <button class="btn  text-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <span class="list-text">   {{auth()->user()->name}} </span>
                         </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{route('profil', auth()->user()->name)}}"> Profile </a>
                
                  <a class="dropdown-item" href="{{route('cıkıs')}}">Sign Out</a>
           
                </div>

              </div> 
             </div>
@endauth
             
              </div>
               <div class=" col-1      d-none d-md-block "> <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fa fa-search text-primary"></i>
              </button>    </div>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Search </h5>
                  <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <p>
                        @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                        {{$error}}
                        @endforeach
                        @endif
</p>
        
                     <form action="{{route('ara')}}" method="post">

                       {{@csrf_field()}}
                         <div class="input-group">
                             <input type="search" name="ara" value="{{old('ara')}}" class="form-control" id="">
                             <button class=" btn btn-primary"> <i class="fa fa-search text-white"></i> Search </button>
                         </div>
                     </form>
                    </div>
                
                  </div>
                </div>
              </div>
               <div class="col-9 col-sm-5  mt-2 d-block d-md-none ">  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
               <i class="fa fa-bars"></i>
              </button>   </div>
               <div class="offcanvas offcanvas-start body" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasExampleLabel"><a href="">  Logo  </a></h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div>
                    <ul class="navbar-nav fs-1">
                        <li class="nav-item">
                            <a href="" class="nav-link" > <i class="fa fa-home"></i>  Home </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"> <i class="fa fa-pencil"></i> Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"> <i class="fa fa-arrow-right"></i>  Log in </a>
                       
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="fa fa-sign-in"></i>  Sign in </a>
                        </li>
                   
                        
                    </ul>
                  </div>
                </div>
                <div class="offcanvas-footer">
                    <hr>
                    <div>
                        <i class="fa fa-map      text-primary  "> Lorem ipsum dolor sit amet.</i> 
                        <i class="fa fa-phone    text-primary  "> Lorem ipsum dolor sit amet.</i> 
                        <i class="fa fa-inbox    text-primary  "> Lorem ipsum dolor sit amet.</i> 
                        <i class="fa fa-linkedin text-primary  "> Lorem ipsum dolor sit amet.</i> 
                    </div>
                   
                </div>
              </div>
            
    
               <div class="col-auto mt-2 d-block d-md-none">
                <a href="" class="logo"> Logo </a>
            </div>
            </div>
           
        </div>
    </nav>