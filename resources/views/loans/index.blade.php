<x-layout>
    @include('partials._hero')
    <div class="p-5 mb-5 py-10">
        <p class="text-3xl text-center mb-5 font-bold">Loan a Business</p>
        <div class="flex overflow-auto snap-x">
            @unless(count($loans) == 0)
                @foreach ($loans as $loan)
                    <x-loan-card :loan="$loan" />
                @endforeach
            @else
                <p>No Loans Found</p>
            @endunless
        </div>
    </div>
    {{-- <div class="mt-6 p-4">
        {{ $loans->links() }}
    </div> --}}
</x-layout>
