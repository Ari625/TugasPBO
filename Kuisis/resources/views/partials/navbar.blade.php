<ul class="nav nav-pills nav-fill bg-primary gap-2 p-1 small shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
   <li class="nav-item">
   <button class="shadow-sm rounded-2 mb-3 mt-2" style="color: #00A3ff; border : white;">
      <font class="font-bold text-uppercase fw-bolder" style="color: #00A3ff;" size="6px">KUISIS</font>
   </button>
   </li>
   @if(auth()->user()->is_admin == 1 || auth()->user()->name == 'admin')
   <li class="nav-item" role="presentation">
      <a href="/dashboard" class="mt-2 mb-3 btn" role="button" style="color: white;">
         <font size="4px" class="text-uppercase">Dashboard</font>
      </a>
   </li>
   @else 
   
   @endif
   <li class="nav-item" role="presentation">
      <a href="/" class="mt-2 mb-3 btn" role="button" style="color: white;">
         <font size="4px" class="text-uppercase">Home</font>
      </a>
   </li>
   <li class="nav-item" role="presentation">
      <a href="/leaderboard" role="button" class="btn mt-2 mb-3" style="color: white;">
         <font size="4px" class="text-uppercase">Leaderboard</font>
      </a>
   </li>
   <li class="nav-item" role="presentation">
      <a href="/profile" class="btn mt-2 mb-3" role="button" style="color: white;">
         <font size="4px" class="text-uppercase">Profile</font>
      </a>
   </li>
   </ul>