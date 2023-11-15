<div class="w-full">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="flex justify-around">
        <div class="">
            <input type="date" value="{{ $today }}" wire:model='today' wire:change="loadResults"
                class="input input-bordered input-sm">
        </div>
        <div class="">
            <select wire:model="selectedSubject" wire:change="loadResults"
                class="select select-primary select-sm w-full max-w-xs">
                <option value="" disabled selected>Subject</option>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="m-2">
        <table class="table">
            <!-- head -->
            <thead>
                <tr class="bg-base-300">
                    <th>Topics</th>
                    <th>Subject</th>
                    <th>Action</th>
                    {{-- <th>Favorite Color</th> --}}
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                @foreach ($results as $topic)
                    <tr class="bg-base-200" wire:key="{{ $topic->id }}">
                        <td>{{ $topic->title }}</td>
                        <td>{{ $topic->subject->name }}</td>
                        <td>
                            <button wire:confirm wire:loading.attr="disabled"
                                wire:click="deleteTopic({{ $topic->id }})"
                                class="btn btn-error btn-sm">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
