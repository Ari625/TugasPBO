@extends('layouts.sign')
@section('container')
<div class="container-fluid">
   <div class="row">
     <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse rounded-2 shadow-sm" style="height: 40rem">
       <div class="position-sticky pt-3 sidebar-sticky">
         <ul class="nav flex-column">
           
           <li class="nav-item">
             <a class="nav-link" href="/">
               <span  class="align-text-bottom"></span>
               Home
             </a>
           </li>
           <li class="nav-item" role="presentation">
            <a class="nav-link" href="/dashboard">
               <span  class="align-text-bottom"></span>
               Dashboard
             </a>
          </li>
            <li class="nav-item">
               <a class="nav-link" href="/add-quiz">
                  <span class="align-text-bottom"></span>
                  Add Quizs
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/add-questions">
                  <span class="align-text-bottom"></span>
                  Add Questions
               </a>
            </li>
           <li class="nav-item mb-5">
             <a class="nav-link" href="/list-users">
               <span class="align-text-bottom"></span>
               List Users
             </a>
           <li class="nav-item" role="presentation">
               <span class="align-text-bottom"></span>
               
             </a>
           <li class="nav-item" role="presentation">
               <span class="align-text-bottom"></span>
               
             </a>
           <li class="nav-item mb-4" role="presentation">
               <span class="align-text-bottom"></span>
               
             </a>
           </li>
         </ul>
 
       </div>
     </nav>
 
     <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap  pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2">List Users</h1>
       </div>
       
       <div class="card-header mb-3 mt-3 bg-primary-subtle rounded-2 align-items-left">
         <ul class="nav nav-pills gap-2 p-1 nav-fill small " role="tablist" id="pillnav2">
            <li class="nav-item" role="presentation">
               <font style="font-size : 18px ;" class="fw-bolder text-body-secondary text-shadow text-center">
                 No
               </font>
            </li>
            <li class="nav-item" role="presentation">
               <font style="font-size : 18px ;" class="fw-bolder text-body-secondary text-shadow text-center">
                  Name
               </font>
            </li>
            <li class="nav-item" role="presentation">
               <font style="font-size : 18px ;" class="fw-bolder text-body-secondary text-shadow text-center">
                  Email
               </font>
            </li>
            <li class="nav-item" role="presentation">
                 
               </li>
         </h4>
      </div>
      
      @foreach ($data_user as $user)
         <div class="card-header mb-2 mt-2 rounded-2 align-items-right" >
            <ul class="nav nav-pills gap-2 p-1 nav-fill small " role="tablist" id="pillnav2">
               <li class="nav-item" role="presentation">
                  <font style="font-size : 14px ;" class="text-start">
                     {{ $no }}
                  </font>
               </li>
               <li class="nav-item" role="presentation">
                  <font style="font-size : 14px ;" class="text-start p-3">
                     {{ $user['name'] }}
                  </font>
               </li>
               <li class="nav-item" role="presentation">
                  <font style="font-size : 14px ;" class="text-start">
                     {{ $user['email'] }}
                  </font>
               </li>
               <li class="nav-item" role="presentation">
                 
               </li>
            </ul>
         </div>
         <?php $no++ ?>
      @endforeach

     </main>
   </div>
 </div>
@endsection