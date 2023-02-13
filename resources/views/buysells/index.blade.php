    @include('partials._data')
    <div class="p-5 my-10">
        <p class="text-3xl text-center text-slate-700 mb-5 font-bold">
            Buy or Sell a Business
        </p>
        <div class="flex overflow-auto snap-x">
            @unless(count($buysells) == 0)
                @foreach ($buysells as $buysell)
                    <x-buysell-card :buysell="$buysell" />
                @endforeach
            @else
                <p>No buysells Found</p>
            @endunless
        </div>
    </div>
