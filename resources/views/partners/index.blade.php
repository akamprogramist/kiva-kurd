@include('partials._about')
<div class="p-5 mb-5 py-10">
    <p class="text-3xl text-center mb-5 font-bold">Be a Partner to a Business</p>
    <div class="flex overflow-auto snap-x">
        @unless(count($partners) == 0)
            @foreach ($partners as $partner)
                <x-partner-card :partner="$partner" />
            @endforeach
        @else
            <p>No Partners Found</p>
        @endunless
    </div>
</div>
