<x-app-layout>
    <div class="grid grid-cols-4 grid-rows-1 gap-2 sm:p-3 p-2">
        {{-- height/width --}}
        <a href="{{ route('topics.index') }}">
            <div class="card aspect-[4/5] bg-base-100 text-center shadow-xl">
                <div class="flex flex-col pt-3  text-center justify-center items-center">
                    <i class="fas fa-book sm:text-4xl text-2xl  mb-2"></i>
                    <h2 class="card-title text-base block text-center">Topics</h2>
                </div>
            </div>
        </a>
        <div class="card   aspect-[4/5]   p-0  bg-base-100 text-center shadow-xl">
            <div class="flex flex-col pt-3  text-center justify-center items-center">
                <i class="fas fa-calendar-alt sm:text-4xl text-2xl mb-2"></i>
                <h2 class="card-title text-base block text-center">Tests</h2>
            </div>
        </div>
        <div class="card   aspect-[4/5]   p-0  bg-base-100 text-center shadow-xl">
            <div class="flex flex-col pt-3  text-center justify-center items-center">
                <i class="fas fa-tasks sm:text-4xl text-2xl mb-2"></i>
                <h2 class="card-title text-base block text-center">Tasks</h2>
            </div>
        </div>
        <div class="card   aspect-[4/5]   pb-1  bg-base-100 text-center shadow-xl">
            <div class="flex flex-col pt-3  text-center justify-center items-center">
                <i class="fas fa-clock sm:text-4xl text-2xl mb-2"></i>
                <h2 class="card-title leading-4 text-base block text-center">Review Session</h2>
            </div>
        </div>
    </div>
    <div class="card max-w-sm m-2 card-side bg-base-100 shadow-xl pl-1">
        <figure class=" w-1/3"><img
                src="https://ouch-cdn2.icons8.com/CO34_X739bydi9TcI3O4-57UaHPXWi2D_nEvxMvG3sA/rs:fit:368:255/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNTk4/LzFjMTQzYjJjLTFl/MzEtNDFhZS1hNzU4/LTA5MmEzOTdhYmNj/Mi5wbmc.png"
                alt="Movie" style="
            width: 136px;
        " /></figure>
        <div class="card-body">
            <h2 class="card-title w-full">Next Test on <br>Tommorow </h2>
            <p class="flex items-center justify-around"><span class="badge badge-primary font-bold">Islamiat</span><i
                    class="fas fa-arrow-right text-2xl"></i></p>
        </div>
    </div>
 
</x-app-layout>
