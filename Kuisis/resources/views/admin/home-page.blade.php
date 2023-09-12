@extends('layouts.main')
@section('container')
    
<div class="mt-2 mb-3">
   
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
               <form action="/question" method="post">
                @csrf
                <input type="hidden" value="{{ $no }}" name="questions_id" required>
                <button type="submit" class="btn btn-primary mt-4 fw-bolder">
                Answer Quiz
                </button>
                </form>
            </div>
         </div>
      </div>
   </div>
   <?php $no++ ?>
   @endforeach

@endsection