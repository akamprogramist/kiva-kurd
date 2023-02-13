    @include('partials._change')
    <div class="p-5 my-10">
        <p class="text-3xl text-center text-slate-700 mb-5 font-bold">
            Invest in a Business
        </p>
        <div class="flex overflow-auto snap-x">
            @unless(count($invests) == 0)
                @foreach ($invests as $invest)
                    <x-invest-card :invest="$invest" />
                @endforeach
            @else
                <p>No invests Found</p>
            @endunless
        </div>
    </div>
