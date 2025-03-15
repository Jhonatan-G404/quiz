<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(auth()->user()->role === 'admin')
                        <h3 class="text-lg font-bold">Welcome, Admin!</h3>
                        <p>You can manage users, view reports, and perform administrative tasks here.</p>
                        <a href="/admin/dashboard" class="text-blue-500 underline">Go to Admin Dashboard</a>
                    @elseif(auth()->user()->role === 'user')
                        <h3 class="text-lg font-bold">Welcome, User!</h3>
                        <p>Explore your personal dashboard and check out available features.</p>
                        <a href="/user/dashboard" class="text-blue-500 underline">Go to User Dashboard</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
