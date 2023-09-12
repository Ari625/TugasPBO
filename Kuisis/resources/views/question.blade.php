@extends('layouts.main-kuis')
@section('container')
<div class="position-relative">
   <div class="card position-absolute top-50 start-50 translate-middle-x border border-0" style="width: 60rem;">

      {{-- Progress --}}
   <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60rem; height:5px;">
      <div class="progress-bar w-20" style="width: 10%"></div>
   </div>

   <main>
   <div class="position-relative">
      <div class="card mt-5 position-absolute top-50 start-50 translate-middle-x border border-0" style="width: 60rem;">

         
      <form action="/quiz" method="POST">

@foreach ($data_questions as $questions)
      
            @csrf
            <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
            <input type="hidden" value="{{ $no_kuis }}" name="no_kuis">
            <input type="hidden" value="1" name="quiz_id">
            <input type="hidden" value="{{ $data_questions[$no_kuis]['answer'] }}" name="answer_{{ $no_kuis }}">

            <div class="card-header mb-3 rounded-2 border border-light-subtle text-left" style="height: 100px">
               <font class="mt-3 mb-2 fw-bolder text-uppercase">
                  {{ $data_questions[$no_kuis]['question'] }}
               </font>
            </div>

            <div class="card-header mb-3 rounded-2 border border-light-subtle text-left">
            <input type="radio" value="{{ $data_questions[$no_kuis]['option_a'] }}" name="answer_user_{{ $no_kuis }}" id="a" class="btn" required>
            <label for="a" class="mt-2 mb-2 text-capitalize">{{ $data_questions[$no_kuis]['option_a'] }}</label>
            </div>

            <div class="card-header mb-3 rounded-2 border border-light-subtle text-left">
            <input type="radio" value="{{ $data_questions[$no_kuis]['option_b'] }}" name="answer_user_{{ $no_kuis }}" id="b" class="btn" required>
            <label for="b" class="mt-2 mb-2 text-capitalize">{{ $data_questions[$no_kuis]['option_b'] }}</label>
            </div>
            
            <div class="card-header mb-3 rounded-2 border border-light-subtle text-left">
            <input type="radio" value="{{ $data_questions[$no_kuis]['option_c'] }}" name="answer_user_{{ $no_kuis }}" id="c" class="btn" required>
            <label for="c" class="mt-2 mb-2 text-capitalize">{{ $data_questions[$no_kuis]['option_c'] }}</label>
            </div>

            <div class="card-header mb-3 rounded-2 border border-light-subtle text-left">
            <input type="radio" value="{{ $data_questions[$no_kuis]['option_d'] }}" name="answer_user_{{ $no_kuis }}" id="d" class="btn" required>
            <label for="d" class="mt-2 mb-2 text-capitalize" >{{ $data_questions[$no_kuis]['option_d'] }}</label>
            </div>
   <?php $no_kuis++; ?>
   @endforeach
         
            <input type="submit" value="answer" class="btn btn-primary text-uppercase fs-4 mb-3 mt-2" style="width: 60rem">

         </form>

         @if(session('correct'))
         
         <div class="card text-center alert alert-success alert-dismissible fade show text-success" role="alert" style = "width: 60rem; height: 6rem;">
            <h3>
               <font class="mb-3 mt-2 text-green">
                  {{ session('correct') }}
               </font>
            </h3>
         </div>
         <div class="btn card btn-white mb-2 mt-3">
            <a href="/kuis/@if($no_kuis >= 9)finish @else{{ $no_kuis += 1 }} @endif" 
            class="btn text-black">
            @if($no_kuis > 9)FINISH @else NEXT @endif
            </a>
      </div>
         @endif
   
         @if(session('wrong'))
         
         <div class="text-center alert alert-danger alert-dismissible fade show" role="alert" style = "width: 60rem; height: 6rem;">
            <h3>
               <font class="mb-3 mt-2">
                  {{ session('wrong') }}
               </font>
            </h3>
         </div>
         <div class="btn card btn-white mb-2 mt-3">
            <a href="/kuis/@if($no_kuis >= 9)finish @else{{ $no_kuis += 1 }} @endif" 
            class="btn text-black">
            @if($no_kuis >= 9)FINISH @else NEXT @endif
            </a>
      </div>
         @endif

      </div>
   </div>
</main>

   </div>
</div>

@endsection