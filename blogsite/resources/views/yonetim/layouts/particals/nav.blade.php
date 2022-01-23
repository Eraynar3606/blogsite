<nav class="nav-container">
        <div class="container-fluid ">
            <div class="row d-flex justify-content-start " >
    
               <div class="col-auto mt-2  d-none d-md-block  ">  <a href="" class="logo"> Logo  </a>    </div>
                
               <div class="col-auto mt-2  d-none d-md-block  ">  <a  href="{{route('anasayfa')}}"  class="list-text active" >   Anasayfa    </a>   </div>
               <div class="col-auto   mt-2 d-none d-md-block ">   <a href="{{route('blog')}}" class=" list-text  ">  Ayarlar      </a>   </div>
          
            @auth
               <div class="col-auto    d-none d-md-block "> 
                 
                 <div class="dropdown col-auto ">
                
                    <button class="btn  text-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <span class="list-text">   My Profile </span>
                         </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{route('profil', auth()->user()->name)}}"> Profile Git </a>
                
                  <a class="dropdown-item" href="{{route('cıkıs')}}">Çıkış Yap </a>
           
                </div>

              </div> 
             </div>
@endauth
              </div>
        </div>
    </nav>