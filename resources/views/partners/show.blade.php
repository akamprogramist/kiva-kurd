 <x-layout>
     <div class="p-5 m-5 md:w-[62%] md:mx-auto">
         <div class="flex justify-center">
             <img class="rounded-full object-cover w-16 h-16"
                 src="https://images.unsplash.com/photo-1566753323558-f4e0952af115?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHBvdHJhaXR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                 alt="" />
         </div>
         <p class="text-2xl my-5 text-center font-bold">{{ $partner->name }}</p>
         <div class="flex my-5 text-center justify-around">
             <div>
                 <p class="text-2xl font-bold text-slate-700">{{ $partner->employees }}</p>
                 <p class="text-gray-500">Employees</p>
             </div>
             <div>
                 <p class="text-2xl font-bold text-slate-700">{{ $partner->products }}</p>
                 <p class="text-gray-500">Products</p>
             </div>
             <div>
                 <p class="text-2xl font-bold text-slate-700">{{ $partner->clients }}</p>
                 <p class="text-gray-500">Clients</p>
             </div>
         </div>
         <div class="flex justify-center text-gray-500 space-x-2 mt-8 mb-3">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-7">
                 <path fill-rule="evenodd"
                     d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                     clip-rule="evenodd" />
             </svg>
             <p class="text-xl font-semibold">{{ $partner->location }}</p>
         </div>
         <div class="flex justify-center text-gray-500 space-x-2">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-7">
                 <path fill-rule="evenodd"
                     d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                     clip-rule="evenodd" />
                 <path
                     d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z" />
             </svg>

             <p class="text-xl font-semibold capitalize">{{ $partner->department }}</p>
         </div>
         <div class="flex justify-center">
             <button
                 class="mt-10 py-2 px-4 bg-green-600 text-white font-bold rounded-lg shadow-md hover:shadow-lg hover:bg-green-700 transition duration-300">
                 Be a Partner
             </button>
         </div>
         <div class="flex my-10 space-x-6 justify-center">
             <a href="#" class="text-gray-500 hover:text-gray-700 duration-150">
                 <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                     <path fill-rule="evenodd"
                         d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                         clip-rule="evenodd" />
                 </svg>
                 <span class="sr-only">Facebook page</span>
             </a>
             <a href="#" class="text-gray-500 hover:text-gray-700 duration-150">
                 <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                     <path fill-rule="evenodd"
                         d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                         clip-rule="evenodd" />
                 </svg>
                 <span class="sr-only">Instagram page</span>
             </a>
             <a href="#" class="text-gray-500 hover:text-gray-700 duration-150">
                 <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                     <path
                         d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                 </svg>
                 <span class="sr-only">Twitter page</span>
             </a>
         </div>
         <hr class="my-10 border-gray-300 sm:mx-auto" />
         <div class="space-y-5">
             <img class="rounded-2xl w-full h-96 object-cover"
                 src="{{ $partner->logo ? asset('storage/' . $partner->logo) : asset('/images/no-image.jpg') }}"
                 alt="" />
             <p class="text-xl font-bold">About {{ $partner->name }}</p>
             <p>
                 {{ $partner->description }}
             </p>
         </div>
     </div>
 </x-layout>
