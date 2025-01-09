@extends("templates.main")
@section("head")
    <link rel="stylesheet" href="{{ asset('css/partners.css') }}">
@endsection
@section("page_content")
    <div class="celina">
        <div class="uvod">
            <h1 class="title2" id="margin3">Partners</h1>
            <hr class="crta">
            <p class="caption2" id="margin3">
                Argo is extremely appreciative of all of our financial partners, suppliers, and contributors.
                Without this support, it would be impossible to do the work we do, achieve the results we have, and provide
                the educational platform for giving our members the best possible university experience. For more information
                on how you can get involved, please see our Partnership Pack below.
            </p>
            <p class="caption2" id="margin3">Thank you to everyone who supports our team!</p>
            <button class="dugme caption2" id="margin4">Partnership Pack</button>
        </div>

        @php
            $partners = [
                'Partner Institutions' => [
                    ['id' => 'etf', 'image' => 'Primarni ZZ ETF Engleski.svg', 'name' => 'School of Electrical Engineering'],
                    ['id' => 'raf', 'image' => 'Računarski fakultet.svg', 'name' => 'Faculty of Computing']
                ],
                'Bronze Sponsors' => [
                    ['id' => 'backpack', 'image' => 'backpackflags_flag_225x150_25mm.jpg', 'name' => 'BackPackFlags.com']
                ],
                'Friends of the Project' => [
                    ['id' => 'oewf', 'image' => 'OeWF_Logo_(2017).png', 'name' => 'Austrian Space Forum'],
                    ['id' => 'fondacija', 'image' => 'Evropska svemirska fondacija.svg', 'name' => 'European Space Foundation'],
                    ['id' => 'osra', 'image' => 'OSRA_logo.svg', 'name' => 'Open Source Robotics Alliance'],
                    ['id' => 'digital', 'image' => 'digital-serbia-initiative-logo.svg', 'name' => 'Digital Serbia Initiative'],
                    ['id' => 'roboto', 'image' => 'ETF Robotics.svg', 'name' => 'ETF Robotics'],
                    ['id' => 'suma', 'image' => 'SUMA_CRNA.svg', 'name' => 'Student Union of Mathematicians']
                ],
                'Honorary Patrons' => [
                    ['id' => 'ubg', 'image' => 'UBG.svg', 'name' => 'University of Belgrade']
                ]
            ];
        @endphp

        @foreach ($partners as $category => $group)
            <div class="partneri">
                <h1 class="title3" style="text-align: center; margin: 0.5% 0;">{{ $category }}</h1>
            </div>
            <div class="partneri">
                <div class="partner">
                    @foreach ($group as $partner)
                        <figure class="part" id="{{ $partner['id'] }}">
                            <div class="slika1" id="margin3">
                                <img id="{{ $partner['id'] }}-slika" src="{{ asset('slike/' . $partner['image']) }}" alt="{{ $partner['name'] }}">
                            </div>
                            <figcaption>{{ $partner['name'] }}</figcaption>
                        </figure>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@endsection
