@extends('layouts.sign')
@section('container')
<div class="container-fluid">
   <div class="row">
     <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse rounded-2 shadow-sm" style="height: 40rem">
       <div class="position-sticky pt-3 sidebar-sticky">
         <ul class="nav flex-column">
           <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="#">
               <span data-feather="home" class="align-text-bottom"></span>
               
             </a>
           </li>
           <li class="nav-item" role="presentation">
              <span data-feather="users" class="align-text-bottom"></span>
              
            </a>
          </li>
           <li class="nav-item">
             <a class="nav-link" href="/">
               <span data-feather="file" class="align-text-bottom"></span>
               Home
             </a>
           </li>
           <li class="nav-item" role="presentation">
            <a class="nav-link" href="/dashboard">
               <span  class="align-text-bottom"></span>
               Dashboard
             </a>
          </li><li class="nav-item">
            <a class="nav-link" href="/add-quiz">
               <span class="align-text-bottom"></span>
               Add Quizs
            </a>
         </li>
           <li class="nav-item">
             <a class="nav-link" href="/add-question">
               <span data-feather="shopping-cart" class="align-text-bottom"></span>
               Add Questions
             </a>
           </li>
           <li class="nav-item mb-5">
             <a class="nav-link" href="/list-users">
               <span data-feather="users" class="align-text-bottom"></span>
               List Users
             </a>
           </li>
           <li class="nav-item" role="presentation">
               <span data-feather="users" class="align-text-bottom"></span>
               
             </a>
           <li class="nav-item" role="presentation">
               <span data-feather="users" class="align-text-bottom"></span>
               
             </a>
           <li class="nav-item mb-4" role="presentation">
               <span data-feather="users" class="align-text-bottom"></span>
               
             </a>
           </li>
         </ul>
 
       </div>
     </nav>
 
     <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     @if(session()->has('succses'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('succses') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
      </div>
      @endif
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2 fw-uppercase">Add Questions</h1>
       </div>
       
         <form action="/add-questions" method="post">
            @csrf
         
            <div class="row justify-content-center">
            <div class="col-md-4">
               
            <div class="mt-3 mb-3">
               <label for="quiz_id">No Kategori Quiz</label>
               <input type="text" name="quiz_id" id="quiz_id" required>
            </div>

            <div class="mt-3 mb-3">
            <label for="question">Question</label>
            <input type="text" name="question" id="question" required>
         </div>

            <div class="mt-3 mb-3">
            <label for="option_a">Option A</label>
            <input type="text" name="option_a" id="option_a" required>
         </div>

            <div class="mt-3 mb-3">
            <label for="option_b">Option B</label>
            <input type="text" name="option_b" id="option_b" required>
         </div>

            <div class="mt-3 mb-3">
            <label for="option_c">Option C</label>
            <input type="text" name="option_c" id="option_c" required>
         </div>

            <div class="mt-3 mb-3">
            <label for="option_d">Option D</label>
            <input type="text" name="option_d" id="option_d" required>
         </div>

            <div class="mt-3 mb-3">
            <label for="answer">Answer</label>
            <input type="text" name="answer" id="answer" required>
         </div>

            <button type="submit" class="btn btn-primary mb-3 mt-3" style="width: 16rem">Next</button>

            </div>
            </div>
         </form>

     </main>
   </div>
 </div>
@endsection