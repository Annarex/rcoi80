<div id="accordion-collapse" data-accordion="collapse" class="bg-white">
  
  @foreach($items as $item) 
    @include('layouts.accordion-element',['num'=>$loop->iteration,'title'=> $item["title"] ,'content'=>$item["content"] ])
  @endforeach                          
</div>