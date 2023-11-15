<x-app-layout>
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <a class="btn btn-ghost text-xl">Topics</a>
        </div>

        <div class="navbar-end">
            <a href="{{ route('topics.index') }}" class="btn btn-sm">Back</a>
        </div>
    </div>
    @if (Session::has('Success'))
            
        <div class="flex    justify-center bg-green-500 py-2 rounded-lg items-center alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>{{ Session::get('Success') }}</span>
          </div>
          @endif
    <div class="card m-2 bg-base-100 shadow-xl p-5">
        
        <form action="{{ route('topics.store') }}" method="post">
            @csrf
            <h2 class=" text-center text-lg  font-bold">Add New Topic</h2>
            <div class=" form-control my-2">
                <label for="" class="label">Topic:</label>
                <input type="text" name="topic" id="" placeholder="Enter Today's Topic "
                    class="input input-sm input-bordered">
            </div>
            <div class=" form-control my-2">
                <label for="" class="label">Subject:</label>
                <select class="input input-sm input-bordered" name="subject" id="">
                    @foreach ($subjects as $subject)
                    <option class="bg-white" value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class=" my-2 flex justify-end p-2">
                <button class="btn btn-sm  btn-primary border">Submit</button>
            </div>
            <div class=" form-control ">
                <label for="" class="label">Date:</label>
                <input type="date" value="{{ now()->format('Y-m-d') }}" name="date" id=""
                    class="input input-sm input-bordered">
            </div>
        </form>
    </div>
</x-app-layout>
