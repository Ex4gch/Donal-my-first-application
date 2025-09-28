<x-layout>
  <x-slot:heading>
  Job
   <a href= "/jobs/{{ $job['id'] }}/edit" class ="p-1 text-blue-300 bg-white w-[100px] font-medium text-[17px] rounded-3xl mb-3 "> EDIT JOB </a>
  </x-slot:heading>
  <main class="flex-grow flex items-center justify-center px-4 mt-10 ">
 
  <div class="bg-white/10 backdrop-blur-md rounded-2xl p-10 shadow-lg w-100 text-white">
      <p class="text-sm text-gray-300">{{ $job->employer->name }}</p>
      <h2 class="text-3xl font-bold mb-2">{{ $job['title'] }}</h2>
      <p class="text-blue-300 text-lg mb-4">This job pays {{ $job['salary'] }} per year.</p>
      <p class="text-gray-300 mb-6">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam imperdiet quam fringilla libero rutrum lobortis. Nam id vulputate odio. Cras molestie quis ante et vestibulum. Nullam viverra leo quis libero vulputate ultricies sit amet et lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
      </p>
      <button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-xl font-semibold transition">
        Apply Now
      </button>
    </div>
  </main>
</x-layout>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam imperdiet quam fringilla libero rutrum lobortis. Nam id vulputate odio. Cras molestie quis ante et vestibulum. Nullam viverra leo quis libero vulputate ultricies sit amet et lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 