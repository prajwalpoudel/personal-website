@extends('front.layouts.app')
@section('content')
    <div>
        <div class="bg-gradient-to-r from-primary to-secondary text-white py-8 w-full md:h-[36rem] md:flex md:justify-around md:items-center md:flex-row-reverse">
            <div class="">
                <img src="{{ asset('img/prajwal-3.png') }}" class="w-full h-[16rem] md:w-[36rem] md:h-[36rem] object-cover" alt="">
            </div>
            <div class="tracking-wide text-center py-4 md:text-left">
                <h6 class="text-2xl md:text-6xl font-bold">Prajwal Poudyal</h6>
                <p class="text-lg md:text-xl md:w-[40rem] font-bold py-2">Freelance Laravel and Vue Js Developer based on Biratnagar, Nepal</p>
                <div class="flex justify-center md:justify-start">
                    <a href="{{ route('front.about') }}" class="bg-secondary rounded h-12 w-[20rem] flex items-center justify-center my-2">
                        More
                        <svg xmlns="http://www.w3.org/2000/svg" class=" h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-8" id="education">
            <p class="text-title">Education</p>
            <div class="grid md:grid-cols-3 text-center">
                <div class="md:col-span-1 px-8 py-2">
                    <h3 class="text-secondary-title">Under Graduate Degree</h3>
                    <ul class="py-2">
                        <li>Purwanchal Campus, TU, Dharan</li>
                        <li>Computer Engineering</li>
                        <li>2014-2018</li>
                    </ul>
                </div>
                <div class="md:col-span-1 px-8 py-2">
                    <h3 class="text-secondary-title">HSEB</h3>
                    <ul class="py-2">
                        <li>Araniko Higher Secondary School, Biratnagar</li>
                        <li>Science</li>
                        <li>2012-2014</li>
                    </ul>
                </div>
                <div class="md:col-span-1 px-8 py-2">
                    <h3 class="text-secondary-title">SLC</h3>
                    <ul class="py-2">
                        <li>Deokota School, Biratnagar</li>
                        <li>Year Completed: 2012</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="py-8" id="experience">
            <p class="text-title">Experience</p>
            <div class="grid md:grid-cols-3 text-center">
                <div class="md:col-span-1 px-8 py-2">
                    <h3 class="text-secondary-title">Eb Pearls Pvt. Ltd.</h3>
                    <ul class="py-2">
                        <li>Web Developer</li>
                        <li>2019 March - 2021 January</li>
                    </ul>
                </div>
                <div class="md:col-span-1 px-8 py-2">
                    <h3 class="text-secondary-title">Midas Technologies Pvt.Ltd.</h3>
                    <ul class="py-2">
                        <li>Web Developer</li>
                        <li>2018 November - 2019 March</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="py-8" id="connect">
            <p class="text-title">Connect with me on</p>
            <div class="flex justify-center">
                <a href="https://www.facebook.com/prajwal.poudel.50/" class="h-12 w-12 px-8" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         width="48" height="48"
                         viewBox="0 0 48 48"
                         style=" fill:#000000;">
                        <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993"
                                        x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#2aa4f4"></stop>
                            <stop offset="1" stop-color="#007ad9"></stop>
                        </linearGradient>
                        <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)"
                              d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z">
                        </path>
                        <path fill="#fff"
                              d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z">
                        </path>
                    </svg>
                </a>
                <a href="" class="h-12 w-12 px-8">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         width="48" height="48"
                         viewBox="0 0 48 48"
                         style=" fill:#000000;">
                        <linearGradient id="MJy9k6AlNL0BTsRkEkukAa_bUGbDbW2XLqs_gr1" x1="8.455" x2="40.88" y1="7.883" y2="41.5" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#2aa4f4"></stop>
                            <stop offset="1" stop-color="#007ad9"></stop>
                        </linearGradient>
                        <path fill="url(#MJy9k6AlNL0BTsRkEkukAa_bUGbDbW2XLqs_gr1)"
                              d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z">

                        </path>
                        <path d="M20,35c-3.24,0-6.351-0.794-8.535-2.178l-0.337-0.213l0.592-1.671l0.396,0.046 c0.149,0.018,0.266,0.021,0.385,0.021L12.995,31c0.997,0,2.452-0.16,3.846-0.577c-1.396-0.476-3.166-1.401-3.72-3.115L12.697,26	h1.027C12.625,24.997,12,23.602,12,22.057v-1.62l0.609,0.281c-0.395-0.765-0.604-1.537-0.604-2.262c0-1.049,0.278-2.075,0.806-2.966	l0.729-1.228l0.906,1.102c1.997,2.431,5.244,5.096,8.554,5.563V20c0-3.364,2.468-6,5.617-6c1.545,0,2.883,0.442,3.888,1.281	c1.039-0.261,2.308-0.743,2.989-1.144l2.264-1.332l-0.807,2.5c-0.038,0.12-0.086,0.24-0.144,0.362l1.939-0.859l-2.158,3.233	c-0.449,0.683-0.875,1.332-1.595,1.939C34.998,20.239,35,20.511,35,20.63C35,27.596,29.743,35,20,35z" opacity=".05"></path><path d="M20,34.5c-3.147,0-6.161-0.766-8.268-2.101l0.325-0.919c0.172,0.02,0.306,0.025,0.442,0.025L13,31.5	c1.613,0,3.799-0.369,5.475-1.163c-2.026-0.377-4.306-1.415-4.878-3.184L13.385,26.5h0.688c0.476,0,0.855-0.025,1.165-0.065	c-1.703-0.855-2.737-2.454-2.737-4.378v-0.838l0.737,0.341c0.215,0.116,0.501,0.249,0.813,0.378c-0.88-1.01-1.545-2.255-1.545-3.481	c0-0.959,0.255-1.897,0.736-2.711l0.364-0.614l0.453,0.551c2.209,2.689,5.804,5.554,9.44,5.8V20c0-3.084,2.248-5.5,5.117-5.5	c1.529,0,2.819,0.458,3.751,1.328c1.124-0.252,2.585-0.792,3.379-1.259l1.132-0.666l-0.403,1.25	c-0.191,0.594-0.654,1.192-1.197,1.726c0.174-0.068,0.348-0.14,0.52-0.216l1.577-0.699l-1.202,1.801	c-0.483,0.736-0.906,1.38-1.683,1.981c0.006,0.303,0.01,0.727,0.01,0.883C34.5,27.354,29.418,34.5,20,34.5z" opacity=".07"></path><path fill="#fff" d="M36,15c-0.951,0.559-2.671,1.156-3.793,1.372C31.311,15.422,30.033,15,28.617,15	C25.897,15,24,17.305,24,20v2c-4,0-7.9-3.047-10.327-6c-0.427,0.721-0.667,1.565-0.667,2.457c0,1.819,1.671,3.665,2.994,4.543	c-0.807-0.025-2.335-0.641-3-1v0.057c0,2.367,1.661,3.974,3.912,4.422C16.501,26.592,16,27,14.072,27	c0.626,1.935,3.773,2.958,5.928,3c-1.686,1.307-4.692,2-7,2c-0.399,0-0.615,0.022-1-0.023C14.178,33.357,17.22,34,20,34	c9.057,0,14-6.918,14-13.37c0-0.212-0.007-0.922-0.018-1.13c0.968-0.682,1.36-1.396,2.018-2.38c-0.882,0.391-1.999,0.758-3,0.88	C34.018,17.396,35.633,16.138,36,15z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>

    </div>
@endsection
