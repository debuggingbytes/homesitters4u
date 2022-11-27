<div class="testimonial {{$class}} md:py-10">
  <div class="grid-rows-2 bg-neutral-50 shadow rounded-xl p-5 gap-3 relative ">                                   
    <img src="{{ asset('img/'. $testimonialImg ) }}" class='rounded-full mr-4 block md:float-left'>
    <div>
      <h4 class="font-semibold text-lg text-slate-600 uppercase pr-4 mb-3 block">{{ $testimonialTitle }}</h4>
      <p class="block">{{ $testimonialText }}</p>
    </div>
    <div class="flex justify-between lg:justify-center lg:gap-x-5 pt-5 clear-both">
      <div class="flex w-3/4 justify-start align-center lg:w-auto">
        <strong class="text-sm text-gray-600">{{ $testimonialName }}</strong>
      </div>
      <div class="flex w-1/4 justify-evenly align-center lg:w-auto">                      
        <i class="fa-solid fa-star text-yellow-300"></i>
        <i class="fa-solid fa-star text-yellow-300"></i>
        <i class="fa-solid fa-star text-yellow-300"></i>
        <i class="fa-solid fa-star text-yellow-300"></i>
        <i class="fa-solid fa-star text-yellow-300"></i>
      </div>
    </div>
  </div>
</div>