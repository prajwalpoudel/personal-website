<nav class="w-full h-12 py-8 px-12 flex justify-between items-center tracking-wide shadow-lg">
    <div class="flex items-center">
        <img class="h-24" src="./img/signature.png" alt="">
    </div>
    <div>
        <ul class="flex">
            <li class="px-2 py-2 border-b-4 {{  getActiveFrontMenuClass('front.index') }} cursor-pointer hover:border-primary">
                <a href="{{ route('front.index') }}">Home</a>
            </li>
            <li class="px-2 py-2 border-b-4 {{  getActiveFrontMenuClass('front.about') }} cursor-pointer hover:border-primary">
                <a href="{{ route('front.about') }}">About</a>
            </li>
            <li class="px-2 py-2 border-b-4 {{ getActiveFrontMenuClass('front.portfolio') }} cursor-pointer hover:border-primary">
                <a href="{{ route('front.portfolio') }}">Portfolio</a>
            </li>
            <li class="px-2 py-2 border-b-4 {{  getActiveFrontMenuClass('front.blogs') }} cursor-pointer hover:border-primary">
                <a href="{{ route('front.blogs') }}">Blogs</a></li>
            <li class="px-2 py-2 border-b-4 {{  getActiveFrontMenuClass('front.contact') }} cursor-pointer hover:border-primary">
                <a href="{{ route('front.contact') }}">Contact</a>
            </li>
        </ul>
    </div>
</nav>
