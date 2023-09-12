@extends('layouts.sign')
@section('container')

<div class="mt-2 mb-3">
   <a href="/" role="text" class="btn">
   <h4 class="fw-bolder">
      <i class="bi bi-arrow-left">
         <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
         </svg>
      </i>
      BACK
   </h4>
   </a>
</div>
   @foreach ($data_quizs as $quizs)
   <div class="row gx-5">
      <div class="col">
         <div class="card rounded-3 shadow-sm p-3 mb-3 bg-body-tertiary rounded border border-2" style="width: 26rem;">
            <div class="card-body">
               <h5 class="card-title text-uppercase">
                  {{ $quizs['title'] }}
               </h5>
               <h6 class="card-subtitle text-white text-muted mt-2 nav-item" style="color:white;">
                  {{ $quizs['thumbnail'] }}
               </h6>
               <h6 class="card-subtitle text-white text-muted nav-item mb-2 mt-2" style="color:white;">

               </h6>
               <a href="/quiz" class="card-link btn btn-primary mt-4 fw-bolder" role="button" align="right">Answer Quiz</a>
            </div>
         </div>
      </div>
   </div>
   @endforeach
   
@endsection