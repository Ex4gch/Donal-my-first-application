<x-layout>
<x-slot:heading>
  Jobs Page
</x-slot:heading>
<div class="space-y-6 w-5/6 ">
<ul>
@foreach ($jobs as $job)
<li>
</li>
    <a href="/jobs/{{ $job['id'] }}">
      <div class="bg-white/10 backdrop-blur-md my-5 h-24 w-full rounded-xl p-6 shadow-lg hover:scale-105 transition">
        <h2 class="text-2xl">{{ $job['title'] }}</h2>
        <p class="text-blue-300 mt-2 text-lg">{{ $job['salary'] }} / Year</p>
      </div>
    </a>
@endforeach
</ul>
</div>

</x-layout>
