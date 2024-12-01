<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Resume') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Display validation errors -->
                    @if ($errors->any())
                        <div class="bg-red-100 text-red-800 p-4 mb-4 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('resumes.store') }}" method="POST">
                        @csrf

                        <!-- Name -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="mt-1 block w-full p-2 border border-gray-300 rounded" required>
                        </div>

                        <!-- Title -->
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}" class="mt-1 block w-full p-2 border border-gray-300 rounded" required>
                        </div>

                        <!-- Status -->
                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select id="status" name="status" class="mt-1 block w-full p-2 border border-gray-300 rounded" required>
                                <option value="Active" {{ old('status') == 'Pending' ? 'selected' : '' }}>PENDING</option>
                            </select>
                        </div>

                        <!-- Role -->
                        <div class="mb-4">
                            <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                            <input type="text" id="role" name="role" value="{{ old('role') }}" class="mt-1 block w-full p-2 border border-gray-300 rounded" required>
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="mt-1 block w-full p-2 border border-gray-300 rounded" required>
                        </div>

                        <!-- Experience -->
                        <div class="mb-4">
                            <label for="experience" class="block text-sm font-medium text-gray-700">Experience</label>
                            <textarea id="experience" name="experience" rows="4" class="mt-1 block w-full p-2 border border-gray-300 rounded">{{ old('experience') }}</textarea>
                        </div>

                        <!-- Skills -->
                        <div class="mb-4">
                            <label for="skills" class="block text-sm font-medium text-gray-700">Skills</label>
                            <textarea id="skills" name="skills" rows="4" class="mt-1 block w-full p-2 border border-gray-300 rounded">{{ old('skills') }}</textarea>
                        </div>

                        <!-- Education -->
                        <div class="mb-4">
                            <label for="education" class="block text-sm font-medium text-gray-700">Education</label>
                            <textarea id="education" name="education" rows="4" class="mt-1 block w-full p-2 border border-gray-300 rounded">{{ old('education') }}</textarea>
                        </div>

                        <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-blue-600 font-semibold rounded-lg hover:bg-blue-700 focus:outline-none">
                        ADD RESUME
                    </button>

                    </form>

                    <!-- Back Button -->
                    <a href="{{ route('resumes.index') }}" class="inline-block text-indigo-600 hover:text-indigo-900">Back to Resumes List</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
