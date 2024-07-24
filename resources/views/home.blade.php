<x-app-layout>
    @section('hero')
    <div class="w-full text-center py-32,background-color: lightblue;"
    >
        <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
            مرحبا  <span class="text-yellow-500">FIN</span>
        </h1>
        <p class="text-gray-500 text-lg mt-1">المدونة الأفضل بالعالم</p>
        <a wire:navigate class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block"
            href="{{ route('posts.index') }}">ابدأ القراءة</a>
    </div>
    @endsection

    <div class="mb-10 w-full">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">المشاركات مميزة</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($featuredPosts as $post)
                    <div class="md:col-span-1 col-span-3">
                        <x-posts.post-card :post="$post" />
                    </div>
                    @endforeach
                </div>
            </div>
            <a wire:navigate class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
                href="{{ route('posts.index') }}">More
                Posts</a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Latest Posts</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($latestPosts as $post)
                <div class="md:col-span-1 col-span-3">
                    <x-posts.post-card :post="$post" />
                </div>
                @endforeach
            </div>
        </div>
        <a wire:navigate class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
            href="{{ route('posts.index') }}">More
            Posts</a>
    </div>
    </body>
</x-app-layout>