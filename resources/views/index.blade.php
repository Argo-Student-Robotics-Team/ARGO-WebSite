@extends("templates.main")
@section("head")
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section("page_content")
    <div class="banner">
        <img src="{{ asset('slike/Logo.svg') }}" alt="Argo Logo">
        <p class="application-dates">
            1st October - 21st October <br>
        </p>
        <p class="application-information">
            Membership Applications Open
        </p>
        <a href="https://forms.gle/JU4MhyhYA4cqPps27">
            <button class="join-us caption2Bold">
                APPLY NOW
            </button>
        </a>
    </div>
    <div class="content">
        <div class="who">
            <div class="prva">
                <p class="subheadlineBold">
                    [01] WHO WE ARE
                </p>
                <div class="div-naslov">
                    <p class="subheadline">
                        We're a diverse team of thinkers and doers, united by a steadfast commitment to improve our experience
                        in the forefront fields of technology.
                    </p>
                </div>
                <a href="{{ url('about') }}">
                    <button class="learn-more">
                        LEARN MORE
                    </button>
                </a>
            </div>
            <div class="druga">
                <img src="{{ asset('slike/homepage.webp') }}" alt="Team Working Image">
            </div>
        </div>
        <div class="news">
            <p class="subheadlineBold">
                [02] NEWS
            </p>
            <div class="vesti-container">
                <div class="vest" id="vest1">
                    <img src="{{ asset('slike/Seminar_ObjavaLN.webp') }}" alt="Seminar Event">
                    <p class="caption2">
                        Sept 25, 2024
                    </p>
                    <p class="caption1" id="kategorija">
                        EVENT
                    </p>
                    <p class="footnote">
                        Exploration of the Red Planet: Human-robot analogue missions in preparations for Mars
                        exploring. Is Mars the next stop for humanity?
                    </p>
                    <a href="https://www.linkedin.com/posts/argo-srt_istra%C5%BEivanje-crvene-planete-ljudsko-robotske-activity-7244749477511630848-MN_Z?utm_source=share&utm_medium=member_desktop">
                        <p class="caption2" id="link">Read more</p>
                    </a>
                </div>
                <div class="vest" id="vest2">
                    <img src="{{ asset('slike/ERC_24_Results_IG (1).webp') }}" alt="ERC Results">
                    <p class="caption2">
                        Sept 21, 2024
                    </p>
                    <p class="caption1" id="kategorija">
                        STORY
                    </p>
                    <p class="footnote">
                        European Rover Challenge competition: The updated competition result moves IPRLxArgo to the 17th place!
                    </p>
                    <a href="https://www.linkedin.com/posts/argo-srt_the-updated-competition-result-moves-iprlxargo-activity-7240405881132068864-oyPh?utm_source=share&utm_medium=member_desktop">
                        <p class="caption2" id="link">Read more</p>
                    </a>
                </div>
                <div class="vest" id="vest3">
                    <img src="{{ asset('slike/ERC_24_Results_IG.webp') }}" alt="ERC Competition">
                    <p class="caption2">
                        Sept 15, 2024
                    </p>
                    <p class="caption1" id="kategorija">
                        STORY
                    </p>
                    <p class="footnote">
                        Argo x Imperial Planetary Robotics Lab, finished in 18th place at the European Rover Challenge!
                    </p>
                    <a href="https://www.linkedin.com/posts/argo-srt_europe-rover-erc2025-activity-7239599629669945345-CUqC?utm_source=share&utm_medium=member_desktop">
                        <p class="caption2" id="link">Read more</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="join">
            <div class="flex">
                <div class="jedan">
                    <p class="subheadlineBold">
                        [03] PARTNERS
                    </p>
                </div>
            </div>
            <div class="partner">
                <div class="part" id="etf">
                    <img src="{{ asset('slike/Primarni ZZ ETF Engleski.svg') }}" alt="ETF Partner">
                </div>
            </div>
            <div class="partner" id="partneri1">
                @php
                    $partners = [
                        'openproject' => 'openproject-logo.svg',
                        'backpack' => 'backpackflags_flag_225x150_25mm.jpg',
                        'affinity' => 'affinity-logo.svg',
                        'owf' => 'OeWF_Logo_(2017).png',
                        'digital' => 'digital-serbia-initiative-logo.svg',
                        'easyaerial' => 'easy-aerial-logo-black.svg',
                        'robotics' => 'ETF Robotics.svg',
                        'informatika' => 'informatika-logo-full.svg',
                        'petnica' => 'petnica-logo.svg',
                        'ntp' => 'ntp-logo.svg'
                    ];
                @endphp

                @foreach($partners as $id => $image)
                    <div class="part" id="{{ $id }}">
                        <img src="{{ asset('slike/' . $image) }}" alt="{{ ucfirst(str_replace('-', ' ', $id)) }} logo">
                    </div>
                @endforeach
            </div>

        </div>
        <div class="forma">
            <p class="subheadlineBold">
                [04] JOIN US
            </p>
            <div class="cont">
                <div class="i">
                    <p class="caption1" id="skill">
                        Your unique skillset can help redefine what students can do.
                    </p>
                    <a href="https://forms.gle/JU4MhyhYA4cqPps27">
                        <button class="join-us caption2Bold">
                            JOIN US
                        </button>
                    </a>
                </div>
                <div class="ii">
                    <div class="badabim">
                        <p class="caption1">
                            <span class="bold">Argo</span> is a place for:
                        </p>
                    </div>
                    <div class="titule">
                        @foreach(['Roboticists', 'Engineers', 'Makers', 'Innovators', 'Problem Solvers', 'Artists', 'Designers'] as $role)
                            <p class="caption1">{{ $role }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
