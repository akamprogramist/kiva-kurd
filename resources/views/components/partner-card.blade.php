@props(['partner'])


<x-card>
    <a href="/partners/{{ $partner->id }}">
        <div class="m-5 rounded-lg min-w-[75%] snap-start md:min-w-[25%]">
            <article class="overflow-hidden rounded-lg hover:shadow-3xl border border-gray-100 shadow-sm duration-300">
                <img alt="Office"
                    src="{{ $partner->logo ? asset('storage/' . $partner->logo) : asset('/images/no-image.jpg') }}"
                    class="rounded-t-lg w-full h-56 object-cover min-w-[75%]" />

                <div class="p-4 sm:p-6">
                    <h3 class="text-xl font-bold text-gray-900">{{ Str::limit($partner->name, 20) }}</h3>

                    <p class="mt-2 text-sm leading-relaxed text-gray-500 line-clamp-3">
                        {{ Str::limit($partner->description, 150) }}
                    </p>

                    <a href="/partners/{{ $partner->id }}"
                        class="group mt-4 inline-flex gap-1 text-sm font-medium text-green-600">
                        Find out more

                        <span aria-hidden="true" class="block transition group-hover:translate-x-1">
                            &rarr;
                        </span>
                    </a>
                    <form method="POST" action="/partners/{{ $partner->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500"><i class="fa-solid fa-trash"></i>
                            Delete</button>
                    </form>
                </div>
            </article>
        </div>
    </a>

</x-card>
