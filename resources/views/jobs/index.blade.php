<x-layout>
<x-slot:heading>
  Jobs Page
     <a href="/jobs/create" class ="text-blue-300 bg-white w-[100px] font-medium text-[17px] rounded-3xl mb-3 "> CREATE </a>
</x-slot:heading>
<div class="space-y-6 w-5/6 ">
<ul>
@foreach ($jobs as $job)
    <a href="/jobs/{{ $job['id'] }}">
      <div class="bg-white/10 backdrop-blur-md my-4 h-24 w-full grid grid-cols-[23rem_auto_10rem] justify-stretch rounded-xl p-6 shadow-lg hover:scale-105  transition">
        <div class="px-1 py-1 ">
          <p class="text-laracasts font-semibold text-blue-300 ">{{ $job->employer->name }}:</p>
          @foreach($job->tags as $tag)
          <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5
          rounded-full">{{ $tag->name }}</span>
          @endforeach
        </div>  
        
        <h2 class="text-2xl">{{ $job['title'] }}</h2>
        <p class="text-blue-300 mt-2 text-lg">{{ $job['salary'] }} / Year</p>
      </div>
      
    </a>
    
@endforeach
</ul>
<div class="mt-6">
{{ $jobs->links() }}
</div>
</div>

</x-layout>
