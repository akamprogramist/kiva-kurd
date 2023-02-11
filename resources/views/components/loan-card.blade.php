@props(['loan'])


<x-card>
    <a href="/loans/{{ $loan->id }}"
        class="m-5 rounded-lg min-w-[75%] snap-start hover:shadow-3xl duration-300 md:min-w-[25%]">
        <img src="../assets/landing.jpg" class="rounded-t-lg min-w-[75%]" alt="" />
        <div class="p-5">
            <p class="text-xl mb-2 font-bold">{{ Str::limit($loan->title, 20) }} </p>
            <p max="25" class="mb-4 text-gray-700">
                {{ Str::limit($loan->description, 150) }}
            </p>
            <div class="flex space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mt-1">
                    <path fill-rule="evenodd"
                        d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd" />
                </svg>
                <p class="font-semibold">{{ $loan->location }}</p>
            </div>
            <div class="flex justify-between mx-1 mb-1 mt-3">
                <span class="text-sm font-medium text-gray-500">75% FUNDED</span>
                <span class="text-sm font-medium text-gray-500">${{ $loan->money }}</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2 mb-4">
                <div class="bg-green-600 h-2 rounded-full" style="width: 75%"></div>
            </div>
        </div>
    </a>
</x-card>
