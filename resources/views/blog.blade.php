<x-layout meta-title="Blog title" meta-description="Blog description">
   <h1>Blog</h1>

   {{-- @dump($posts) --}}
   @foreach ($posts as $post)
   <h2>
      {{ $post->title }}
   </h2>   
   @endforeach
</x-layout>