<ul class="nav nav-pills nav-fill bg-primary gap-2 p-1 small  shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(bs-primary); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
<li class="nav-item">
   <a href="@if(auth()->user()->name == 'admin') / @else /list-quiz @endif" class="btn text-white" role="button">
      <i class="bi bi-x bs-white mt-2 mb-3">
         <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x bs-white" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
         </svg>
      </i>
   </a>
</li>
<li class="nav-item"></li>
<li class="nav-item"></li>
<li class="nav-item"></li>
<li class="nav-item"></li>
</ul>