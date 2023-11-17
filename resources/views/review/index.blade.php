<x-app-layout>
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <a class="btn btn-ghost text-xl">Review Sessions</a>
        </div>
        <div class="navbar-end">
            <a href="{{ route('review-sessions.create') }}" class="btn btn-sm">Add</a>
        </div>
    </div>
    <livewire:ReviewSession>
</x-app-layout>