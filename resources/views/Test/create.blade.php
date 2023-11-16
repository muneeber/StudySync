<x-app-layout>
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <a class="btn btn-ghost text-xl">Topics</a>
        </div>

        <div class="navbar-end">
            <a href="{{ route('tests.index') }}" class="btn btn-sm">Back</a>
        </div>
    </div>
    @if (Session::has('success'))
        <div class="flex    justify-center bg-green-500 py-2 rounded-lg items-center alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ Session::get('success') }}</span>
        </div>
    @endif
    <div class="card m-2 bg-base-100 shadow-xl p-5">

        <form action="{{ route('tests.store') }}" method="post">
            @csrf
            <h2 class=" text-center text-lg  font-bold">Add an Upcoming Test</h2>
            <div class=" form-control my-2">
                <label for="" class="label">Date:</label>
                <input type="date" value="" name="date" id=""
                    class="input input-sm input-bordered">
            </div>
            <div class=" form-control my-2">
                <label for="" class="label">Subject:</label>
                <select class="input input-sm input-bordered" name="subject" id="">
                    <option disabled selected>Select Subject</option>
                    @foreach ($subjects as $subject)
                        <option class="bg-white" value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class=" form-control my-2">
                <label for="" class="label">Unit:</label>
                <input type="number" name="unit" id="" placeholder="Enter Unit Number"
                    class="input input-sm input-bordered">
            </div>
            <div class=" form-control my-2">
                <label for="" class="label">Syllabus:</label>
                <textarea class="textarea textarea-bordered" name="syllabus" placeholder="Bio"></textarea>
            </div>

            <div class=" my-2 flex justify-end p-2">
                <button class="btn btn-sm  btn-primary border">Submit</button>
            </div>

        </form>
    </div>
</x-app-layout>
