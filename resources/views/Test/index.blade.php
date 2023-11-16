<x-app-layout>
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <a class="btn btn-ghost text-xl">Upcoming Tests</a>
        </div>

        <div class="navbar-end">
            <a href="{{ route('tests.create') }}" class="btn btn-sm">Add</a>
        </div>
    </div>
    <livewire:UpcomingTests>
</x-app-layout>