@props(['loan'])


<x-card>
    <a href="/loans/{{ $loan->id }}" class="m-5 rounded-lg min-w-[75%] snap-start md:min-w-[25%]">
        <div class="overflow-hidden rounded-lg hover:shadow-3xl border border-gray-100 shadow-sm duration-300">
            <img src="{{ $loan->logo ? asset('storage/' . $loan->logo) : asset('/images/no-image.jpg') }}"
                class="rounded-t-lg w-full h-56 object-cover min-w-[75%]" alt="" />
            <div class="p-5">
                <p class="text-xl mb-2 font-bold">{{ Str::limit($loan->name, 20) }} </p>
                <p max="25" class="mb-4 text-gray-700">
                    {{ Str::limit($loan->description, 150) }}
                </p>
                <div class="flex space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-4 h-4 mt-1">
                        <path fill-rule="evenodd"
                            d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                            clip-rule="evenodd" />
                    </svg>
                    <p class="font-semibold">{{ $loan->location }}</p>
                </div>
                <div class="flex justify-around mt-5">
                    <span class="text-sm text-gray-400"><span
                            class="text-lg font-bold text-green-600">${{ $loan->money }} Required</span>
                    </span>
                    <button href="/loans/{{ $loan->id }}"
                        class="btn text-xs flex font-semibold px-3 py-2 text-white bg-green-600 rounded-lg hover:bg-green-700 duration-300">
                        Help This Business
                    </button>
                </div>
                @auth

                    <form method="POST" action="/loans/{{ $loan->id }}">
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
