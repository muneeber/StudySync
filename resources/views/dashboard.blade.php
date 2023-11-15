<x-app-layout>

    <div class="grid grid-cols-4 grid-rows-1 gap-2 sm:p-3 p-2">
        {{-- height/width --}}
        <div class="card aspect-[4/5] bg-base-100 text-center shadow-xl">
            <div class="flex flex-col pt-3  text-center justify-center items-center">
    
                <i class="fas fa-book sm:text-4xl text-2xl  mb-2"></i>
                <h2 class="card-title text-base block text-center">Topics</h2>
            </div>
        </div>
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
    
                <h2 class="card-title leading-4 text-base  sm:text-[] block text-center">Review Session</h2>
            </div>
        </div>
    
    
    </div>
    
    

</x-app-layout>
