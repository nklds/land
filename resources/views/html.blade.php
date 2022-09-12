@extends('layouts/site')

@section('content')
<div class="wrapper text-center">
    <div class="wrapper-hero">


        <header class="main-header">
            <h1 class="h1 main-header__heading ">
                Elektriker in Stuttgart
            </h1>
            <p class="h main-header__text">Notdienst Elektriker</p>
        </header>
        <main class="callus ">
            <a class="btn btn-primary btn-lg shaked phone-icon " href="tel:08004009400"> 0800 400 94 00 </a>
            <p class="free__text text-center ">Der Anruf ist kostenlos</p>
        </main>

        <footer class="main text-main">
            <h2 class="text-main__heading ">Leistungen:</h2>
            <p class="text-main__text ">
                <span class="popupped popupped-1">Beleuchtungsanlagen</span>,
                <span class="popupped popupped-2">Stromausfall und Elektrostörungen</span>,
                <span class="popupped popupped-3">Elektroinstallationen</span>,
                <span class="popupped popupped-4">Montage von SAT-Anlagen</span>,
                <span class="popupped popupped-5">Reparaturen</span>
            </p>
        </footer>


    </div>






    <div class="wrapper-comments">
        <div class="comments-section">
            <div class="comment">
                <h2 class="comment__heading"></h2>
                <div class="comment__image">
                    <svg preserveAspectRatio="xMidYMid meet" data-bbox="48.8 51 102.4 98.1" xmlns="http://www.w3.org/2000/svg" viewBox="48.8 51 102.4 98.1" aria-hidden="true">
                        <g>
                            <path fill="#337ab7" d="M89.9 51H51.6c-1.5 0-2.8 1.2-2.8 2.8v38.3c0 1.5 1.2 2.8 2.8 2.8h18.1c-.2 4.3-.9 9.1-3.2 15.2-2.3 5.9-11.1 13.1-16.3 16.2-.9.5-1.4 1.4-1.4 2.4v17.6c0 .9.5 1.8 1.3 2.3.5.3 1 .5 1.5.5.4 0 .8-.1 1.1-.2 9.1-4 16.7-9.4 22.6-15.9 5.8-6.5 10.2-13.8 13.1-21.6 2.9-7.8 4.3-19.1 4.3-33.7V53.8c0-1.5-1.2-2.8-2.8-2.8zm-2.8 26.6c0 13.9-1.3 24.6-4 31.8-2.6 7.1-6.7 13.8-12 19.8-4.5 5-10.1 9.3-16.7 12.7v-11.6c4.7-3 14.3-10.5 17.3-18.1 3.2-8.3 3.6-14.7 3.6-20 0-1.5-1.2-2.8-2.8-2.8H54.4V56.6h32.7v21z"></path>
                            <path fill="#337ab7" d="M148.4 51h-38.3c-1.5 0-2.8 1.2-2.8 2.8v38.3c0 1.5 1.2 2.8 2.8 2.8h18.1c-.2 4.3-.9 9.1-3.2 15.2-2.3 5.9-11.1 13.1-16.3 16.2-.9.5-1.4 1.4-1.4 2.4v17.6c0 .9.5 1.8 1.3 2.3.5.3 1 .5 1.5.5.4 0 .8-.1 1.1-.2 9.1-4 16.7-9.4 22.6-15.9 5.8-6.5 10.2-13.8 13.1-21.6 2.9-7.8 4.3-19.1 4.3-33.7V53.8c0-1.5-1.3-2.8-2.8-2.8zm-2.8 26.6c0 13.9-1.3 24.6-4 31.8-2.6 7.1-6.7 13.8-12 19.8-4.5 5-10.1 9.3-16.7 12.7v-11.6c4.7-3 14.3-10.5 17.3-18.1 3.2-8.3 3.6-14.7 3.6-20 0-1.5-1.2-2.8-2.8-2.8h-18.1V56.6h32.7v21z"></path>
                        </g>
                    </svg>
                </div>
                <div class="comment__text">
                    Die Arbeiten wurden wie vereinbart durchgeführt. Schnell, professionell, effizient und freundlich, was will man mehr? Sehr empfehlenswert.
                </div>
                <div class="comment__author">
                    Irene Schneider
                </div>
            </div>

            <div class="comment">
                <h2 class="comment__heading"></h2>
                <div class="comment__image">
                    <svg preserveAspectRatio="xMidYMid meet" data-bbox="48.8 51 102.4 98.1" xmlns="http://www.w3.org/2000/svg" viewBox="48.8 51 102.4 98.1" aria-hidden="true">
                        <g>
                            <path fill="#337ab7" d="M89.9 51H51.6c-1.5 0-2.8 1.2-2.8 2.8v38.3c0 1.5 1.2 2.8 2.8 2.8h18.1c-.2 4.3-.9 9.1-3.2 15.2-2.3 5.9-11.1 13.1-16.3 16.2-.9.5-1.4 1.4-1.4 2.4v17.6c0 .9.5 1.8 1.3 2.3.5.3 1 .5 1.5.5.4 0 .8-.1 1.1-.2 9.1-4 16.7-9.4 22.6-15.9 5.8-6.5 10.2-13.8 13.1-21.6 2.9-7.8 4.3-19.1 4.3-33.7V53.8c0-1.5-1.2-2.8-2.8-2.8zm-2.8 26.6c0 13.9-1.3 24.6-4 31.8-2.6 7.1-6.7 13.8-12 19.8-4.5 5-10.1 9.3-16.7 12.7v-11.6c4.7-3 14.3-10.5 17.3-18.1 3.2-8.3 3.6-14.7 3.6-20 0-1.5-1.2-2.8-2.8-2.8H54.4V56.6h32.7v21z"></path>
                            <path fill="#337ab7" d="M148.4 51h-38.3c-1.5 0-2.8 1.2-2.8 2.8v38.3c0 1.5 1.2 2.8 2.8 2.8h18.1c-.2 4.3-.9 9.1-3.2 15.2-2.3 5.9-11.1 13.1-16.3 16.2-.9.5-1.4 1.4-1.4 2.4v17.6c0 .9.5 1.8 1.3 2.3.5.3 1 .5 1.5.5.4 0 .8-.1 1.1-.2 9.1-4 16.7-9.4 22.6-15.9 5.8-6.5 10.2-13.8 13.1-21.6 2.9-7.8 4.3-19.1 4.3-33.7V53.8c0-1.5-1.3-2.8-2.8-2.8zm-2.8 26.6c0 13.9-1.3 24.6-4 31.8-2.6 7.1-6.7 13.8-12 19.8-4.5 5-10.1 9.3-16.7 12.7v-11.6c4.7-3 14.3-10.5 17.3-18.1 3.2-8.3 3.6-14.7 3.6-20 0-1.5-1.2-2.8-2.8-2.8h-18.1V56.6h32.7v21z"></path>
                        </g>
                    </svg>
                </div>
                <div class="comment__text">
                    Durch Reparaturen in unserer Wohnung brauchten wir neuen Steckdosen. Von der Planung bis zur Ausführung lief alles problemlos. Ich war zufrieden mit der Leistung.
                </div>
                <div class="comment__author">
                    Thomas Decker
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper-cta callus">
        <div class="cta">
            <h2 class="cta__heading">Rufen sie jetzt an</h2>
            <p class="cta__text">
                Für Fragen oder Anregungen stehe ich gerne zur Verfügung.
                Stuttgart und Umgebung
            </p>
            <a class="btn btn-primary btn-lg shaked phone-icon" href="tel:08004009400"> 0800 400 94 00 </a>
            <p class="free__text text-center">Der Anruf ist kostenlos</p>
        </div>
    </div>
</div>

@endsection
