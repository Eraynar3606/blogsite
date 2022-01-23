@if(session()->has('mesaj'))
<div class="container-fluid">
<div class="alert alert-{{session('mesaj_tur')}}">   {{session('mesaj')}}  </div>
</div>
@endif