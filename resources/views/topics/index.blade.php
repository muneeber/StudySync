<x-app-layout>
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <a class="btn btn-ghost text-xl">Topics</a>
        </div>

        <div class="navbar-end">
            <a href="{{ route('topics.create') }}" class="btn btn-sm">Add</a>
        </div>
    </div>
   <livewire:Topics>
</x-app-layout>
