@props(['invest'])
<x-card>
    <a href="/invests/{{ $invest->id }}" class="m-5 rounded-lg min-w-[75%] snap-start md:min-w-[25%]">
        <div class="hover:shadow-3xl border border-gray-100 shadow-sm duration-300">
            <img src="{{ $invest->logo ? asset('storage/' . $invest->logo) : asset('/images/no-image.jpg') }}"
                class="rounded-t-lg w-full h-56 object-cover min-w-[75%]" />
            <div class="p-5">
                <p class="text-xl mb-2 font-bold">{{ Str::limit($invest->name, 20) }}</p>
                <p class="mb-4 text-gray-700">
                    {{ Str::limit($invest->description, 150) }}
                </p>

                <div class="flex justify-around mt-8">
                    <span class="text-sm text-gray-400"><span
                            class="text-lg font-bold text-green-600">${{ $invest->money }}</span>
                        /Share</span>
                    <button
                        class="btn text-xs flex gap-2 font-semibold px-3 py-2 text-white bg-green-600 rounded-lg hover:bg-green-700 duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>

                        Buy a Share
                    </button>
                </div>
                @auth

                    <form method="POST" action="/invests/{{ $invest->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500"><i class="fa-solid fa-trash"></i>
                            Delete</button>
                    </form>
                @endauth
            </div>
        </div>
    </a>
</x-card>
