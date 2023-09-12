@extends('layouts.main')
@section('container')

<div class="position-relative">
   <div class="card mt-5 position-absolute top-50 start-50 translate-middle-x border border-0" style="width: 60rem;"> 
    <h3>
      <div align="center">
         <h2>
            <font class="--bg-primary fw-bolder text-center fs-2">LEADERBOARD</font>
         </h2>
      </div>
   </h3>
   <div class="card-header mb-3 mt-3 bg-primary-subtle rounded-2">
      <ul class="nav nav-pills gap-2 p-1 nav-fill small " role="tablist" id="pillnav2">
         <li class="nav-item" role="presentation">
            <font style="font-size : 18px ;" class="fw-bolder text-body-secondary text-shadow">
              No
            </font>
         </li>
         <li class="nav-item" role="presentation">
            <font style="font-size : 18px ;" class="fw-bolder text-body-secondary text-shadow">
               Username
            </font>
         </li>
         <li class="nav-item" role="presentation">

         </li>
         <li class="nav-item" role="presentation">

         </li>
         <li class="nav-item" role="presentation">

         </li>
         <li class="nav-item" role="presentation">

         </li>
         <li class="nav-item" role="presentation">

         </li>
         <li class="nav-item" role="presentation">

         </li>
         <li class="nav-item" role="presentation">
            <font style="font-size : 18px ;" class="fw-bolder text-body-secondary text-shadow">
               Poin
            </font>
         </li>
      </h4>
   </div>

   @foreach ($data_point as $point)
      <div class="card-header mb-2 mt-2 rounded-2" >
         <ul class="nav nav-pills gap-2 p-1 nav-fill small " role="tablist" id="pillnav2">
            <li class="nav-item" role="presentation">
               <font style="font-size : 15px ;">
                  {{ $no }}
               </font>
            </li>
            <li class="nav-item" role="presentation">
              
            </li>
            <li class="nav-item" role="presentation">
               <font style="font-size : 15px ;">
                  {{ $data_users[$point['user_id']]['name'] }}
               </font>
            </li>
            {{-- $point[$no]['user_id'] --}}
            <li class="nav-item" role="presentation">

            </li>
            <li class="nav-item" role="presentation">

            </li>
            <li class="nav-item" role="presentation">

            </li>
            <li class="nav-item" role="presentation">

            </li>
            <li class="nav-item" role="presentation">

            </li>
            <li class="nav-item" role="presentation">

            </li>
            <li class="nav-item" role="presentation">

            </li>
            <li class="nav-item" role="presentation">

            </li>
            <li class="nav-item" role="presentation">
               <font style="font-size : 15px ;">
                  {{ $point['point'] }}
               </font>
            </li>
         </ul>
      </div>
      <?php $no++ ?>
   @endforeach
   </div>
</div>
@endsection