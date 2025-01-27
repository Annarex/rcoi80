<h2 id="accordion-collapse-heading-{{$num}}" class="text-left">
  <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200   hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
      data-accordion-target="#accordion-collapse-body-{{$num}}" aria-expanded="false"
      aria-controls="accordion-collapse-body-{{$num}}">
      <span>{{$title}}</span>
      <x-svg_arrow_accordion/>
  </button>
</h2>
<div id="accordion-collapse-body-{{$num}}" class="hidden" aria-labelledby="accordion-collapse-heading-{{$num}}">
  <div class="p-5 border border-b-0 border-gray-200 ">
      {!!$content!!}
  </div>
</div>