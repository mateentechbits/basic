<?php
     $name="maten";



?>


@if($name=="mateen")
   
   <h1>You are admin</h1>
    
    
@else
<h1>You are Normal user</h1>

@endif()

@switch()
    @case()
        
        @break

    @default
        
@endswitch

