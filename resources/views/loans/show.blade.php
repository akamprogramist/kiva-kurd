<x-layout>
    <div class="p-5 md:w-[62%] md:mx-auto">
        <div>
            <div class="flex">
                <img class="rounded-full object-cover w-16 h-16"
                    src="https://images.unsplash.com/photo-1566753323558-f4e0952af115?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHBvdHJhaXR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                    alt="" />
                <p class="text-2xl mt-3 mx-5 font-bold">{{ $loan->name }}</p>
                <p class="mt-4 mx-auto font-semibold text-gray-700">
                    35 days remaining
                </p>
            </div>
            <p class="text-2xl my-5 font-bold">
                {{ $loan->title }}
            </p>
            <div class="flex space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mt-1">
                    <path fill-rule="evenodd"
                        d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd" />
                </svg>
                <p class="font-semibold">{{ $loan->location }}</p>
            </div>
            <div class="flex justify-between mx-1 mb-2 mt-3">
                <span class="text-sm font-medium text-gray-500">75% FUNDED</span>
                <span class="text-sm font-medium text-gray-500">${{ $loan->money }}</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2 mb-4">
                <div class="bg-green-600 h-2 rounded-full" style="width: 75%"></div>
            </div>
            <div class="flex my-5 space-x-5">
                <select class="text-2xl font-semibold border-2 text-gray-600 rounded-xl px-5" name=""
                    id="">
                    <option value="">25$</option>
                    <option value="">50$</option>
                    <option value="">75$</option>
                    <option value="">100$</option>
                </select>
                <button
                    class="btn font-semibold flex-1 py-2 text-white bg-green-600 rounded-xl hover:bg-green-700 duration-300">
                    Lend
                </button>
            </div>
            <hr class="my-2 border-gray-300 sm:mx-auto" />
            <a href="#loan"
                class="flex text-gray-700 space-x-1 justify-end hover:text-green-800 hover:underline cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mt-0.5">
                    <path fill-rule="evenodd"
                        d="M2.625 6.75a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875 0A.75.75 0 018.25 6h12a.75.75 0 010 1.5h-12a.75.75 0 01-.75-.75zM2.625 12a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zM7.5 12a.75.75 0 01.75-.75h12a.75.75 0 010 1.5h-12A.75.75 0 017.5 12zm-4.875 5.25a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875 0a.75.75 0 01.75-.75h12a.75.75 0 010 1.5h-12a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                </svg>
                <p class="font-semibold">Loan details</p>
            </a>
        </div>
    </div>
    <div class="md:w-[62%] md:mx-auto">
        <div class="p-5 space-y-5">
            <img class="rounded-2xl w-full h-96 object-cover"
                src="{{ $loan->logo ? asset('storage/' . $loan->logo) : asset('/images/no-image.jpg') }}"
                alt="" />
            <p class="text-4xl font-bold">{{ $loan->name }}'s Story</p>
            <p>
                {{ $loan->description }}
            </p>
        </div>
    </div>
    <div id="loan" class="py-5 px-5 md:px-[21%] bg-gray-100">
        <p class="text-xl font-bold pb-2 w-fit border-b-4 rounded border-black">
            Loan details
        </p>
        <div class="my-5 space-y-5">
            <div class="flex justify-between">
                <p class="underline">loan length</p>
                <p>13 months</p>
            </div>
            <div class="flex justify-between">
                <p class="underline">Repayment schedule</p>
                <p>Monthly</p>
            </div>
            <div class="flex justify-between">
                <p class="underline">Disbursed date</p>
                <p>January 19, 2023</p>
            </div>
            <div class="flex justify-between">
                <p class="underline">Partner covers currency loss?</p>
                <p>No</p>
            </div>
            <div class="flex justify-between">
                <p class="underline">Is borrower paying interest?</p>
                <p>Yes</p>
            </div>
        </div>
    </div>
    <div class="flex space-x-3 p-2 justify-center text-white bg-green-600 text-lg font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5">
            <path fill-rule="evenodd"
                d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                clip-rule="evenodd" />
        </svg>

        <p class="capitalize">Make a loan, change a life.</p>
    </div>

</x-layout>
