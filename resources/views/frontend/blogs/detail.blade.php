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

    <header class="max-w-[800px] flex flex-col gap-4 p-6 relative z-10 mt-16">
        <h1 class="font-extrabold text-4xl text-center pally-medium" style="text-wrap: balance;">{{ $article->title }}</h1>
        <h4 class=" flex flex-col sm:flex-row items-center text-center gap-3 sm:gap-1 w-full justify-center ">
            <div class="border-white rounded-full border-3 hidden text-[20px] leading-9 text-center w-11 h-11 left-11 -top-6 roundedShadow sm:block border-1.5 ">
                        <img src="{{ Avatar::create($article->user->name)->toBase64() }}" alt="{{ $article->user->name }}" aria-hidden="true" class="rounded-full w-full border-2 border-white" />
                    </div>
            <span class="flex sm:flex-row flex-col items-center sm:gap-1">Published on 1 Jul 2023&nbsp;by <span class="font-bold">
                <p><a href="https://levi.smmall.cloud">{{ $article->user->name }}</a></p>
                </span>
            </span>
        </h4>
        <div class="flex justify-center items-center">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.00001 0.583374C3.9039 0.583374 0.583344 3.90393 0.583344 8.00004C0.583344 12.0962 3.9039 15.4167 8.00001 15.4167C12.0961 15.4167 15.4167 12.0962 15.4167 8.00004C15.4167 3.90393 12.0961 0.583374 8.00001 0.583374ZM2.08334 8.00004C2.08334 4.73236 4.73233 2.08337 8.00001 2.08337C11.2677 2.08337 13.9167 4.73236 13.9167 8.00004C13.9167 11.2677 11.2677 13.9167 8.00001 13.9167C4.73233 13.9167 2.08334 11.2677 2.08334 8.00004ZM8.75001 5.33337C8.75001 4.91916 8.41422 4.58337 8.00001 4.58337C7.5858 4.58337 7.25001 4.91916 7.25001 5.33337V8.00004C7.25001 8.2508 7.37533 8.48498 7.58398 8.62408L9.58398 9.95741C9.92863 10.1872 10.3943 10.094 10.624 9.7494C10.8538 9.40475 10.7607 8.9391 10.416 8.70934L8.75001 7.59865V5.33337Z" fill="#404040"></path>
                </svg>
                <p class="text-xs text-[#404040] leading-5 pl-2">{{ $article->readTime() }} min read</p>
            </div>
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
                    <span class="text-sm font-semibold text-gray-700">Tags</span>
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
                    <span class="text-sm font-semibold text-gray-700">Share this article</span>
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