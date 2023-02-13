<x-layout>
    <div class="p-10 max-w-lg mx-auto my-24  bg-gray-50 border border-gray-200 rounded p-6">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Find a Partner
            </h2>
            <p class="mb-4">Post What You Want</p>
        </header>

        <form method="POST" action="/partners" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                    value="{{ old('name') }}" />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="department" class="inline-block text-lg mb-2">Department</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="department"
                    value="{{ old('department') }}" />
                @error('department')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Your Location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                    placeholder="Example: Boston MA" value="{{ old('location') }}" />
                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="products" class="inline-block text-lg mb-2">Amount Of products</label>
                <input type="number" class="border border-gray-200 rounded p-2 w-full" name="products"
                    value="{{ old('products') }}" />
                @error('products')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="employees" class="inline-block text-lg mb-2">Amount Of employees</label>
                <input type="number" class="border border-gray-200 rounded p-2 w-full" name="employees"
                    value="{{ old('employees') }}" />
                @error('employees')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="clients" class="inline-block text-lg mb-2">Amount Of clients</label>
                <input type="number" class="border border-gray-200 rounded p-2 w-full" name="clients"
                    value="{{ old('clients') }}" />
                @error('clients')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Image
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="description">
        {{ old('description') }}
            </textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-green-600 text-white rounded py-2 px-4 hover:bg-green-700">
                    Create A Post
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
</x-layout>
