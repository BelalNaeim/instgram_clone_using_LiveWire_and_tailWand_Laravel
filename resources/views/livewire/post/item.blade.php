<div class="max-w-lg mx-auto">
    {{-- In work, do what you enjoy. --}}


    {{-- header --}}

    <header class="flex items-center gap-3">


        <x-avatar src="https://source.unsplash.com/500x500?face" class="h-9 w-9" />

        <div class="grid w-full grid-cols-7 gap-2">

            <div class="col-span-5">
                <h5 class="text-sm font-semibold truncate"> {{fake()->name}} </h5>
            </div>

            <div class="flex justify-end col-span-2 text-right">

                <button class="ml-auto text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                    </svg>
                </button>
            </div>


        </div>


    </header>


    {{--Main------}}
    {{------------}}


    <main>
        <div class="my-2 ">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <x-video />
                    </div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </main>

    {{------------}}




    {{-- footer --}}
    <footer>

        {{-- actions --}}
        <div class="flex items-center gap-4 my-2">

            {{-- heart --}}
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.9" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>

            </span>
            {{-- message --}}
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                </svg>

            </span>
            {{-- forward --}}
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5 bi bi-send" viewBox="0 0 16 16">
                    <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                </svg>
            </span>

            {{-- Bookmark --}}
            <span class="ml-auto">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                </svg>

            </span>

        </div>

        {{-- likes and views --}}
        <p class="text-sm font-bold">104,474 likes</p>

        {{-- name and comment --}}
        <div class="flex gap-2 text-sm font-medium">
            <p> <strong class="font-bold">{{fake()->name}} </strong>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus facilis cumque aperiam officia
                commodi explicabo voluptatibus aliquid omnis culpa magnam enim ullam praesentium, ab maiores expedita,
                architecto consectetur placeat. Magnam?
            </p>
        </div>

        {{-- view post modal --}}
        <button class="text-sm font-medium text-slate-500/90"> View all 456 comments </button>

        {{-- leave comment --}}
        <form x-data="{inputText:''}" class="grid items-center w-full grid-cols-12">
            @csrf

            <input x-model="inputText" type="text" placeholder=" Leave a comment " class="col-span-10 px-0 border-0 rounded-lg outline-none placeholder:text-sm focus:outline-none hover:ring-0 focus:ring-0">
            <div class="flex justify-end col-span-1 ml-auto text-right">
                <button x-cloak x-show="inputText.length >0" class="flex justify-end text-sm font-semibold text-blue-500">
                    Post
                </button>
            </div>

            <span class="col-span-1 ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                </svg>
            </span>

        </form>

    </footer>
</div>
