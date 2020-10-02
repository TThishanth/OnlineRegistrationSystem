@if ( Session::has('flash_message') )
 
  <div class="alert {{ Session::get('flash_type') }} ">
      <h3 class="text-center">{{ Session::get('flash_message') }}</h3>
  </div>
  
@endif