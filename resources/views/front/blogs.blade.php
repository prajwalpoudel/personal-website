@extends('front.layouts.app')
@section('content')
    <div>
        <div class="bg-gradient-to-r from-primary to-secondary text-white py-8 w-full md:h-[12rem] md:flex md:justify-around md:items-center md:flex-row-reverse">
            <div class="tracking-wide text-center py-4 md:text-left">
                <h6 class="text-2xl md:text-6xl font-bold">Blogs</h6>
            </div>
        </div>

        <div class="grid md:grid-cols-4">
            <div class="md:col-span-1 shadow-lg ml-8">
                <h3 class="text-title">Categories</h3>
                <div class="flex justify-center flex-col">
                    <ul class="">
                        <li class="py-4 text-center shadow-sm shadow-secondary cursor-pointer text-secondary">
                            Poem
                        </li>
                        <li class="py-4 text-center shadow-sm shadow-secondary cursor-pointer">
                            Story
                        </li>
                        <li class="py-4 text-center shadow-sm shadow-secondary cursor-pointer">
                            Poem
                        </li>
                        <li class="py-4 text-center shadow-sm shadow-secondary cursor-pointer">
                            Poem
                        </li>
                    </ul>
                </div>
            </div>
            <div class="md:col-span-3">

            </div>
        </div>
    </div>
@endsection
