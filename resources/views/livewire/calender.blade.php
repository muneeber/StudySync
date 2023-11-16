<!-- resources/views/livewire/calendar.blade.php -->

<div>
    <div class="flex justify-between mb-4">
        <button wire:click="previousMonth">&lt; Previous Month</button>
        <h2>{{ $currentDate->format('F Y') }}</h2>
        <button wire:click="nextMonth">Next Month &gt;</button>
    </div>

    <div class="grid grid-cols-7 gap-4">
        @for ($i = 0; $i < $firstDay->dayOfWeek; $i++)
            <div></div>
        @endfor

        @for ($day = 1; $day <= $daysInMonth; $day++)
            <div class="p-2 border">
                {{ $day }}
            </div>
        @endfor
    </div>
</div>
