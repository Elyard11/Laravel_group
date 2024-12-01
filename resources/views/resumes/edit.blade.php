<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Resume') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Form to update the resume -->
                    <form method="POST" action="{{ route('resumes.update', $resume->id) }}">
                        @csrf
                        @method('PUT')  <!-- This ensures the request is treated as an update -->

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $resume->name) }}" class="mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" value="{{ old('title', $resume->title) }}" class="mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select name="status" id="status" class="mt-1 block w-full" required>
                                <option value="HIRED" {{ old('status', $resume->status) == 'HIRED' ? 'selected' : '' }}>HIRED</option>
                                <option value="REJECTED" {{ old('status', $resume->status) == 'REJECTED' ? 'selected' : '' }}>REJECTED</option>
                                <option value="SCHEDULED FOR INTERVIEW" {{ old('status', $resume->status) == 'SCHEDULED FOR INTERVIEW' ? 'selected' : '' }}>SCHEDULE FOR INTERVIEW</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                            <input type="text" name="role" id="role" value="{{ old('role', $resume->role) }}" class="mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $resume->email) }}" class="mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Save
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
