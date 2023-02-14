<x-layout>
    <div class="p-5 md:w-[62%] md:mx-auto">
        <div>
            <div class="flex">
                <img class="rounded-full object-cover w-16 h-16"
                    src="{{ $invest->logo ? asset('storage/' . $invest->logo) : asset('/images/no-image.jpg') }}"
                    alt="" />
                <p class="text-2xl mt-3 mx-5 font-bold">{{ $invest->name }}</p>
                <p class="mt-4 mx-auto font-semibold text-gray-700">
                    {{ $invest->shares }} shares remaining
                </p>
            </div>
            <p class="text-2xl my-5 font-bold">
                {{ $invest->title }}
            </p>
            <div class="flex space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mt-1">
                    <path fill-rule="evenodd"
                        d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd" />
                </svg>
                <p class="font-semibold">{{ $invest->location }}</p>
            </div>
            <div class="flex justify-between mx-1 mb-2 mt-3">
                <span class="text-sm font-medium text-gray-500">75% Of Shares Sold</span>
                <span class="text-sm font-medium text-gray-500">{{ $invest->money }}$/share</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2 mb-4">
                <div class="bg-green-600 h-2 rounded-full" style="width: 75%"></div>
            </div>
            <div class="flex my-5 space-x-5">
                <p class="text-2xl font-semibold border-2 rounded-xl text-gray-600 px-5">
                    {{ $invest->money }}$
                </p>
                <p class="text-2xl font-semibold border-2 rounded-xl text-gray-600 px-5">
                    Per Share
                </p>
                <button
                    class="btn font-semibold flex-1 py-2 text-white bg-green-600 rounded-xl hover:bg-green-700 duration-300">
                    Buy A Share
                </button>
            </div>
            <hr class="my-2 border-gray-300 sm:mx-auto" />
        </div>
    </div>
    <div class="md:w-[62%] md:mx-auto">
        <div class="p-5 space-y-5">
            <img class="rounded-2xl w-full h-96 object-cover"
                src="{{ $invest->logo ? asset('storage/' . $invest->logo) : asset('/images/no-image.jpg') }}"
                alt="" />
            <p class="text-4xl font-bold">{{ $invest->name }}'s Story</p>
            <p>
                {{ $invest->description }}
            </p>
        </div>
    </div>
</x-layout>
