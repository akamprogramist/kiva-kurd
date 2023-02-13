@props(['buysell'])
<x-card>
    <a href="/buysells/{{ $buysell->id }}" class="m-5 rounded-lg min-w-[75%] snap-start md:min-w-[25%]">
        <div
            class="bg-white relative transition hover:shadow-3xl border border-gray-100 shadow-sm duration-300 rounded-lg">
            <img src="{{ $buysell->logo ? asset('storage/' . $buysell->logo) : asset('/images/no-image.jpg') }}"
                class="rounded-t-lg w-full h-56 object-cover min-w-[75%]" alt="" />
            <div class="py-6 px-8 rounded-lg bg-white">
                <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">
                    {{ Str::limit($buysell->name, 20) }}
                </h1>
                <p class="text-gray-700 tracking-wide">
                    {{ Str::limit($buysell->description, 150) }}
                </p>
                <button
                    class="mt-6 py-2 px-4 bg-green-600 text-white font-bold rounded-lg shadow-md hover:shadow-lg hover:bg-green-700 transition duration-300">
                    Buy Now
                </button>
                <form method="POST" action="/buysells/{{ $buysell->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500"><i class="fa-solid fa-trash"></i>
                        Delete</button>
                </form>
            </div>
            <div class="absolute top-2 right-2 py-2 px-4 bg-white rounded-lg">
                <span class="text-md font-semibold">$ {{ $buysell->money }}</span>
            </div>
        </div>
    </a>
</x-card>
