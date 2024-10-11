@extends('frontend.layout')

@push('meta')
<meta name="title" content="{{ $title }}">
<meta name="description" content="{{ $article->meta_description }}">
<meta name="keywords" content="{{ $article->keyword }}">
@endpush

@section('content')

<div x-data="scrollProgress()" x-init="init()" x-cloak class="fixed inset-x-0 top-0 z-50">
    <div class="h-1 bg-blue-500" :style="`width: ${percent}%`"></div>
</div>

<div class="flex flex-col justify-center w-full items-center gap-82 bg-white min-h-screen pt-14 md:pt-[60px]">

    <div class="hidden bg-purple-100 py-10 mb-4">
        <div class="flex flex-1 px-4 max-w-3xl m-auto items-center justify-between pt-0 mb-2">
            <a href="{{ url('/articles') }}" class="items-center text-base text-gray-900 hover:underline underline-offset-2 flex">
                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
                </svg> <span class="text-gray-900 ml-1 hover:text-gray-900">Back to articles</span>
            </a>
        </div>
        <h1 class="relative mx-3 md:mx-auto text-2xl md:text-5xl md:leading-[60px] max-w-3xl m-auto text-black font-semibold text-center mt-4 sm:mt-6 mb-5 sm:mb-0">
            {{ $article->title }}
        </h1>
        <a href="" class="flex items-center justify-center sm:hidden">
            <div>
                <div class="border-white rounded-full border-3 w-10 h-10 roundedShadow">
                    <img src="{{ Avatar::create($article->user->name)->toBase64() }}" alt="{{ $article->user->name }}" aria-hidden="true" class="rounded-full w-full border-2 border-white" />
                </div>
            </div>
            <p class="text-sm font-semibold text-[#404040] ml-2">
                {{ $article->user->name }}
            </p>
        </a>
        <div class="mt-4 sm:mt-6 text-center text-[#565656] flex justify-center items-center sm:divide-x relative sm:space-x-3 divide-[#CACACA]">
            <a href="https://nowandme.com/blog/author/annanyachaturvedi" class="items-center justify-center hidden font-medium sm:flex">
                <div>
                    <div class="border-white rounded-full border-3 hidden text-[20px] leading-9 text-center w-11 h-11 left-11 -top-6 roundedShadow sm:block border-1.5 ">
                        <img src="{{ Avatar::create($article->user->name)->toBase64() }}" alt="{{ $article->user->name }}" aria-hidden="true" class="rounded-full w-full border-2 border-white" />
                    </div>
                </div>
                <p class="text-sm font-semibold text-[#404040] sm:ml-5 hidden sm:block">
                    {{ $article->user->name }}
                </p>
            </a>
            <div class="flex items-center pl-0 sm:pl-3 border-r pr-3 sm:pr-0 border-[#CACACA]">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_238_253)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.08333 0.666626C6.08333 0.252412 5.74754 -0.083374 5.33333 -0.083374C4.91912 -0.083374 4.58333 0.252412 4.58333 0.666626V1.1679C2.39564 2.1441 0.827616 4.24638 0.609016 6.74499C0.5833 7.03892 0.583311 7.37848 0.583329 7.95321L0.58333 7.99996L0.583329 8.04671C0.583311 8.62144 0.5833 8.961 0.609016 9.25493C0.894515 12.5182 3.48176 15.1054 6.74503 15.3909C7.03896 15.4167 7.37853 15.4166 7.95327 15.4166L8 15.4166L8.04673 15.4166C8.62147 15.4166 8.96103 15.4167 9.25497 15.3909C12.5182 15.1054 15.1055 12.5182 15.391 9.25493C15.4167 8.96099 15.4167 8.62143 15.4167 8.04669V7.99996V7.95323C15.4167 7.37849 15.4167 7.03892 15.391 6.74499C15.1724 4.24638 13.6043 2.1441 11.4167 1.1679V0.666626C11.4167 0.252412 11.0809 -0.083374 10.6667 -0.083374C10.2524 -0.083374 9.91666 0.252412 9.91666 0.666626V0.69974C9.69963 0.658998 9.47889 0.628569 9.25497 0.608979C8.96104 0.583263 8.62148 0.583274 8.04675 0.583292L8 0.583293L7.95325 0.583292C7.37852 0.583274 7.03896 0.583263 6.74503 0.608979C6.5211 0.628569 6.30036 0.658998 6.08333 0.69974V0.666626ZM9.91666 2.66663V2.23383C9.65952 2.17098 9.39487 2.12695 9.12423 2.10327C8.90411 2.08401 8.63494 2.08329 8 2.08329C7.36505 2.08329 7.09589 2.08401 6.87576 2.10327C6.60513 2.12695 6.34047 2.17098 6.08333 2.23383V2.66663C6.08333 3.08084 5.74754 3.41663 5.33333 3.41663C4.98139 3.41663 4.68606 3.17421 4.60522 2.84725C3.21603 3.69303 2.25298 5.16494 2.10331 6.87572C2.08405 7.09585 2.08333 7.36502 2.08333 7.99996C2.08333 8.6349 2.08405 8.90407 2.10331 9.12419C2.32536 11.6623 4.33767 13.6746 6.87576 13.8966C7.09589 13.9159 7.36505 13.9166 8 13.9166C8.63494 13.9166 8.90411 13.9159 9.12423 13.8966C11.6623 13.6746 13.6746 11.6623 13.8967 9.12419C13.9159 8.90407 13.9167 8.6349 13.9167 7.99996C13.9167 7.36502 13.9159 7.09585 13.8967 6.87572C13.747 5.16493 12.784 3.69303 11.3948 2.84724C11.3139 3.17421 11.0186 3.41663 10.6667 3.41663C10.2524 3.41663 9.91666 3.08084 9.91666 2.66663ZM4.66666 4.58329C4.25245 4.58329 3.91666 4.91908 3.91666 5.33329C3.91666 5.74751 4.25245 6.08329 4.66666 6.08329H11.3333C11.7475 6.08329 12.0833 5.74751 12.0833 5.33329C12.0833 4.91908 11.7475 4.58329 11.3333 4.58329H4.66666ZM6 8.66663C6 9.03481 5.70152 9.33329 5.33333 9.33329C4.96514 9.33329 4.66666 9.03481 4.66666 8.66663C4.66666 8.29844 4.96514 7.99996 5.33333 7.99996C5.70152 7.99996 6 8.29844 6 8.66663ZM5.33333 12C5.70152 12 6 11.7015 6 11.3333C6 10.9651 5.70152 10.6666 5.33333 10.6666C4.96514 10.6666 4.66666 10.9651 4.66666 11.3333C4.66666 11.7015 4.96514 12 5.33333 12ZM8.66666 11.3333C8.66666 11.7015 8.36819 12 8 12C7.63181 12 7.33333 11.7015 7.33333 11.3333C7.33333 10.9651 7.63181 10.6666 8 10.6666C8.36819 10.6666 8.66666 10.9651 8.66666 11.3333ZM10.6667 12C11.0349 12 11.3333 11.7015 11.3333 11.3333C11.3333 10.9651 11.0349 10.6666 10.6667 10.6666C10.2985 10.6666 10 10.9651 10 11.3333C10 11.7015 10.2985 12 10.6667 12ZM8.66666 8.66663C8.66666 9.03481 8.36819 9.33329 8 9.33329C7.63181 9.33329 7.33333 9.03481 7.33333 8.66663C7.33333 8.29844 7.63181 7.99996 8 7.99996C8.36819 7.99996 8.66666 8.29844 8.66666 8.66663ZM10.6667 9.33329C11.0349 9.33329 11.3333 9.03481 11.3333 8.66663C11.3333 8.29844 11.0349 7.99996 10.6667 7.99996C10.2985 7.99996 10 8.29844 10 8.66663C10 9.03481 10.2985 9.33329 10.6667 9.33329Z" fill="#22272F"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_238_253">
                            <rect width="16" height="16" fill="white"></rect>
                        </clipPath>
                    </defs>
                </svg>
                <p class="text-xs text-[#404040] leading-5 pl-2">
                    {{ $article->created_at->diffForHumans() }}
                </p>
            </div>
            <div class="flex items-center pl-3">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.00001 0.583374C3.9039 0.583374 0.583344 3.90393 0.583344 8.00004C0.583344 12.0962 3.9039 15.4167 8.00001 15.4167C12.0961 15.4167 15.4167 12.0962 15.4167 8.00004C15.4167 3.90393 12.0961 0.583374 8.00001 0.583374ZM2.08334 8.00004C2.08334 4.73236 4.73233 2.08337 8.00001 2.08337C11.2677 2.08337 13.9167 4.73236 13.9167 8.00004C13.9167 11.2677 11.2677 13.9167 8.00001 13.9167C4.73233 13.9167 2.08334 11.2677 2.08334 8.00004ZM8.75001 5.33337C8.75001 4.91916 8.41422 4.58337 8.00001 4.58337C7.5858 4.58337 7.25001 4.91916 7.25001 5.33337V8.00004C7.25001 8.2508 7.37533 8.48498 7.58398 8.62408L9.58398 9.95741C9.92863 10.1872 10.3943 10.094 10.624 9.7494C10.8538 9.40475 10.7607 8.9391 10.416 8.70934L8.75001 7.59865V5.33337Z" fill="#404040"></path>
                </svg>
                <p class="text-xs text-[#404040] leading-5 pl-2">{{ $article->readTime() }} min read</p>
            </div>
        </div>
    </div>

    <div class="hidden flex2 flex-row w-full">
        <div class="flex flex-1 flex-col items-center justify-center relative">
            <div class="flex flex-1 flex-col pb-18 max-w-md md:max-w-2xl ">
                <section class="w-full mx-auto  mt-2 md:mt-4 px-5 markdown-blog">
                    <article>
                        {!! $article->body !!}

                    </article>

                </section>

            </div>



        </div>
    </div>

    <header class="max-w-[800px] flex flex-col gap-6 p-6 relative z-10 mt-16">
        <h1 class="__className_d306d5 font-extrabold text-4xl text-center " style="text-wrap: balance;">Top Tricks for Google Sheets You Might Not Know About</h1>
        <h4 class=" flex flex-col sm:flex-row items-center text-center gap-3 sm:gap-1 w-full justify-center ">
            <img src="https://smmall-cdn.online/levi/avatar/b87526c6fd6e4db3d80eff954facce1a.png" alt="Author image" class="rounded-full border mr-3" width="40" height="40">
            <span class="flex sm:flex-row flex-col items-center sm:gap-1">Published on 1 Jul 2023&nbsp;by <span class="font-bold">
                <p><a href="https://levi.smmall.cloud">Levi</a></p>
                </span>
            </span>
        </h4>
    </header>

    <article class="prose max-w-full sm:max-w-[740px] px-6">
        <p>So, you've been diving into Google Sheets, trying to wrangle data and make it work for you. Well, guess what? There are some pretty nifty tricks hiding under the hood that can seriously level up your Sheets game. Check these out:</p>
        <h3>1. Insert Images in Cells</h3>
        <p>Ever wanted to pop an image right into a cell? It's totally doable! Just use the IMAGE function with the image URL, like =IMAGE("URL"), and voilà! Your image is snug inside that cell. <a href="https://support.google.com/docs/answer/3093333">Learn more about IMAGE function</a></p>
        <h3>2. Sparklines</h3>
        <p>These tiny, mini-charts can give you a quick visual of data trends within a cell. Use the SPARKLINE function, and boom! You've got a chart that fits right in one cell. <a href="https://support.google.com/docs/answer/3093289">Learn more about SPARKLINE function</a></p>
        <h3>3. Pivot Tables</h3>
        <p>Okay, if you're not using Pivot Tables, you're missing out! They're like magic for summarizing and analyzing data. Select your data, go to Data &gt; Pivot table, and let the magic happen. <a href="https://support.google.com/docs/answer/1272900">Learn more about Pivot Tables</a></p>
        <h3>4. Data Validation</h3>
        <p>Tired of wonky data entries messing up your sheet? Set some ground rules! Go to Data &gt; Data validation to limit entries to a specific range, list, or even custom formulas. <a href="https://support.google.com/docs/answer/139705">Learn more about Data Validation</a></p>
        <h3>5. Filter Views</h3>
        <p>Collaborating on a sheet? Forget basic filters! Use Filter Views (Data &gt; Filter views) so everyone can apply their own filters without messing with others' views. <a href="https://support.google.com/docs/answer/3540681">Learn more about Filter Views</a></p>
        <h3>6. Conditional Formatting Custom Formulas</h3>
        <p>Get fancy with your formatting! Create cool rules using custom formulas to highlight cells with specific text or that meet certain conditions. <a href="https://support.google.com/docs/answer/78413">Learn more about Conditional Formatting</a></p>
        <h3>7. Keyboard Shortcuts</h3>
        <p>Who doesn't love shortcuts? Speed up your work by using combos like Ctrl + ; (semicolon) to slap the current date into a cell. Easy peasy! <a href="https://support.google.com/docs/answer/181110">Learn more about Keyboard Shortcuts</a></p>
        <h3>8. Transpose Function</h3>
        <p>Feeling all upside-down with your rows and columns? No worries! Use TRANSPOSE to switch them around. For instance, =TRANSPOSE(range) will flip your data from vertical to horizontal. <a href="https://support.google.com/docs/answer/3093378">Learn more about TRANSPOSE function</a></p>
        <h3>9. Google Sheets Add-ons</h3>
        <p>Wanna beef up your Sheets? Explore add-ons from the Add-ons menu. They're like mini power-ups, giving you extra features and options. <a href="https://support.google.com/docs/answer/3649185">Learn more about Google Sheets Add-ons</a></p>
        <h3>10. Importing Data</h3>
        <p>Pulling in data from other sources? Functions like IMPORTXML, IMPORTHTML, and IMPORTFEED are your pals. They can grab data from the web and plug it straight into your sheet. <a href="https://support.google.com/docs/answer/3093339">Learn more about Import Functions</a></p>
        <h3>11. Protecting Sheets and Ranges</h3>
        <p>Want to keep certain cells or ranges safe from accidental edits? Go to Data &gt; Protected sheets and ranges to lock things down. <a href="https://support.google.com/docs/answer/9146805">Learn more about Protecting Sheets and Ranges</a></p>
        <h3>12. Named Ranges</h3>
        <p>Give your ranges nicknames for easier referencing in formulas. Head to Data &gt; Named ranges to create and manage these handy shortcuts. <a href="https://support.google.com/docs/answer/63175">Learn more about Named Ranges</a></p>
        <p>And there you have it! These sneaky Google Sheets tricks will seriously up your spreadsheet game. Go ahead, give them a spin! 🚀✨</p>
    </article>
    <!--  -->

    <div class="flex flex-row w-full mx-auto mt-6 px-6 py-6 md:py-8 mb-102 bg-[#fefbec] border-b-4 border-[#fed24b]">
        <div class="flex flex-col space-y-3 md:space-y-0 md:flex-row mx-auto w-10/12 md:w-8/12 ">
            <div class="flex flex-col w-full md:w-1/2 ">
                <div>
                    <span class="text-sm font-semibold text-gray-400">Tags</span>
                </div>
                @if(!empty($tags))
                <div>
                    <div class="flex flex-wrap ">
                        @foreach($tags as $t)
                        <a href="{{ url('articles/tag/' . $t) }}" class="flex mr-2 mt-2 rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
                            <span class=" font-semibold text-[#002f6c] text-sm">{{ $t }}</span>
                        </a>
                        @endforeach

                    </div>
                </div>
                @else
                <div></div>
                @endif
            </div>
            <div class="flex flex-col w-1/2 space-y-3">
                <div>
                    <span class="text-sm font-semibold text-gray-400">Share this article</span>
                </div>


            </div>
        </div>

        <!--  -->

    </div>



    <x-article-list :articles="$articles" />


    @endsection

    @push('js')
    <script type="text/javascript">
        const scrollProgress = () => {
            return {
                init() {
                    window.addEventListener('scroll', () => {
                        let winScroll = document.body.scrollTop || document.documentElement.scrollTop
                        let height = document.documentElement.scrollHeight - document.documentElement.clientHeight
                        this.percent = Math.round((winScroll / height) * 100)
                    })
                },
                circumference: 30 * 2 * Math.PI,
                percent: 0,
            }
        }
    </script>
    @endpush

    @push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        div#social-links {
            /* background-color: #ccc; */
            display: flex;
            /* margin: 0 auto; */
            min-width: 280px;
        }

        div#social-links ul li {
            display: inline-block;
            margin: 2px;
        }

        div#social-links ul li a {
            border-radius: 100%;
            padding: 7px 10px;
            /* border: 1px solid #ccc; */
            margin: 1px;
            font-size: 20px;
            color: #fff;
            background-color: #dbeafe;
        }

        /* facebook */
        div#social-links ul li:nth-child(1) a {
            background-color: #2d65b0;
        }

        /* twitter */
        div#social-links ul li:nth-child(2) a {
            background-color: #35bced;
        }

        /* linkedin */
        div#social-links ul li:nth-child(3) a {
            background-color: #0675a5;
        }

        /* telegram */
        div#social-links ul li:nth-child(4) a {
            background-color: #3dba92;
        }

        /* whatsapp */
        div#social-links ul li:nth-child(5) a {
            background-color: #128c7d;
        }

        /* reddit */
        div#social-links ul li:nth-child(6) a {
            background-color: #ff4a0d;
        }
    </style>
    @endpush