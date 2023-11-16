<div>
    {{-- <h1 class="bg-base-100"> From {{   $startOfWeek->format('d-m-Y') }} To {{ $endOfWeek->format('d-m-Y') }}</h1> --}}
    <div class="flex justify-around bg-gray-100">
        <div class="form-control w-1/2">
            <label class="label">
                <p class=" text-center text-sm font-bold ">From</p>
            </label>
            <input type="date" placeholder="Type here" value="{{ $startOfWeek->format('Y-m-d') }}"
                class="input input-bordered input-sm w-full max-w-xs" />
        </div>
        <div class="form-control w-1/2">
            <label class="label">
                <p class=" text-center text-sm font-bold ">To</p>
            </label>
            <input type="date" placeholder="Type here" value="{{ $endOfWeek->format('Y-m-d') }}"
                class="input input-bordered input-sm w-full max-w-xs" />
        </div>
    </div>

    <div class="card bg-base-100 shadow-x">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Subject</th>
                    <th>Unit</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($tests as $test)
                    @if ($test->test_date == now()->format('Y-m-d'))
                    <tr class=" text-center py-2 bg-red-600 text-white">
                        <td class=" text-center py-2">{{ \Carbon\Carbon::parse($test->test_date)->format('l') }}</td>
                        <td class=" text-center py-2">{{ $test->subject->name }}</td>
                        <td class=" text-center py-2">{{ $test->unit }}</td>
                        <td class=" text-center py-2">
                            <a href="{{ route('tests.show', $test->id) }}">
                                <button class="btn btn-sm btn-primary text-white">more</button>
                            </a>
                        </td>
                    </tr>
                    @elseif ($test->test_date == now()->addDay()->format('Y-m-d'))
                    <tr class=" text-center py-2 bg-red-400 text-white">
                        <td class=" text-center py-2">{{ \Carbon\Carbon::parse($test->test_date)->format('l') }}</td>
                        <td class=" text-center py-2">{{ $test->subject->name }}</td>
                        <td class=" text-center py-2">{{ $test->unit }}</td>
                        <td class=" text-center py-2">
                            <a href="{{ route('tests.show', $test->id) }}">
                                <button class="btn btn-sm btn-primary text-white">more</button>
                            </a>
                        </td>
                    </tr>
                    @else 

                        <tr class=" text-center py-2 bg-base-200">
                            <td class=" text-center py-2">{{ \Carbon\Carbon::parse($test->test_date)->format('d-m') }}</td>
                            <td class=" text-center py-2">{{ $test->subject->name }}</td>
                            <td class=" text-center py-2">{{ $test->unit }}</td>
                            <td class=" text-center py-2">
                                <a href="{{ route('tests.show', $test->id) }}">
                                    <button class="btn btn-sm btn-primary text-white">more</button>
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach

            </tbody>
        </table>
    </div>

    {{-- <button wire:click="nextWeek">Next Week</button> --}}
</div>
