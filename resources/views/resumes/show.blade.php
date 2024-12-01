<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Resume Details') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Resume Details -->
                    <div class="mb-6">
                        <h3 class="text-2xl font-semibold text-gray-900">{{ $resume->name }}  </h3>
                        <p class="text-lg text-gray-600">{{ $resume->title }}</p>
                        <p class="text-sm text-gray-500">Status: {{ $resume->status }}</p>
                        <p class="text-sm text-gray-500">Role: {{ $resume->role }}</p>
                        <p class="text-sm text-gray-500">Email: {{ $resume->email }}</p>
                    </div>
            
                    <!-- Red Line Divider -->
                    <div class="mt-4 mb-6" style="border-top: 4px solid red !important;"></div>

                    <h4 class="text-xl font-semibold text-gray-800 mb-4">Additional Details</h4>
                    <!-- You can display more details about the resume here -->
                    <div class="bg-gray-100 p-4 rounded">
                        <p><strong>Experience:</strong> {{ $resume->experience }}</p>
                        <p><strong>Skills:</strong> {{ $resume->skills }}</p>
                        <p><strong>Education:</strong> {{ $resume->education }}</p>
                    </div>

                    <!-- Back Button -->
                    <a href="{{ route('resumes.index') }}" class="mt-4 inline-block text-indigo-600 hover:text-indigo-900">Back to Resumes List</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
