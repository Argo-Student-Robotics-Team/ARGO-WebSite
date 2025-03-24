@extends("templates.main")
@section("head")
        <link rel="stylesheet" href="{{asset('css/contact.css')}}">
        <script src="{{asset('js/contact.js')}}"></script>
@endsection
@section("page_content")
        <div class="heading">
            <h1 class="title3" id="margin">
                Argo Inquires
            </h1>
            <p class="caption1" id="margin">
                Send general inquires, concerns, requests for information, and questions to <span class="ispod">generalinquires@argorobotics.rs</span> or
                the address below.
            </p>
            <div class="blok">
                <p class="caption1">
                    Argo Student Robotics Team
                </p>
                <p class="caption1">
                    Bulevar kralja Aleksandra 73, Belgrade, Serbia
                </p>
                <p class="caption1" id="margin">
                    11120, Room 105
                </p>
            </div>
            <p class="caption1" id="poslednji">
                For specific inquires, please select the appropriate are below for additional information.
            </p>
        </div>
        <div class="framework">
            <div class="crta-div">
                <hr class="crta">
            </div>
            <div class="prikazi">
                <div class="min-naslov">
                    <h2 class="subheadline" id="margin1">
                        Open positions
                    </h2>
                </div>
                <div class="link">
                    <a href="#" class="plus" onclick="popup(event)">+</a>
                </div>
            </div>
            <div class="pop-up" style="display: none;">
                <p class="caption1" id="margin2">
                    To search open positions, click here.
                </p>
                <p class="caption1">
                    For special assistance or questions regarding recruitment, please email
                    <span class="caption1" style="text-decoration: underline">recruting@argorobotics.rs.</p>
                </p>
            </div>
            <div class="crta-div">
                <hr class="crta">
            </div>
            <div class="prikazi">
                <div class="min-naslov">
                    <h2 class="subheadline" id="margin1">
                        Sponsors
                    </h2>
                </div>
                <div class="link">
                    <a href="#" class="plus" onclick="popup(event)">+</a>
                </div>
            </div>
            <div class="pop-up" style="display: none;">
                <p class="caption1" id="margin2">
                    Questions and communications regarding partnerships with Argo should be addressed to Partner Relations.
                </p>
                <p class="caption1" id="margin2">
                    Partner Relations phone: +381 63 7077 330
                </p>
                <p class="caption1" id="margin2">
                    E-mail: <span class="ispod">partnerships@argorobotics.rs</span>
                </p>
                <p class="caption1" id="manji">
                    Partner information is also available at <span class="ispod">partners.argorobotics.rs.</span>
                </p>
            </div>
            <div class="crta-div">
                <hr class="crta">
            </div>
            <div class="prikazi">
                <div class="min-naslov">
                    <h2 class="subheadline" id="margin1">
                        Licencing
                    </h2>
                </div>
                <div class="link">
                    <a href="#" class="plus" onclick="popup(event)">+</a>
                </div>
            </div>
            <div class="pop-up" style="display: none;">
                <p class="caption1" id="margin2">
                    Our software in the scope of artificial intelligence and machine learning is available for licencing.
                </p>
                <p class="caption1">
                    For questions regarding licencing, please email <span class="ispod">licencing@argorobotics.rs.</span>
                </p>
            </div>
            <div class="crta-div">
                <hr class="crta">
            </div>
            <div class="prikazi">
                <div class="min-naslov">
                    <h2 class="subheadline" id="margin1">
                        Logo and Photo Usage
                    </h2>
                </div>
                <div class="link">
                    <a href="#" class="plus" onclick="popup(event)">+</a>
                </div>
            </div>
            <div class="pop-up" style="display: none;">
                <p class="caption1" id="manji">
                    Requests to use the Argo name and logo must be approved in advance by corporate communications.
                    Use of Argo-owned photos posted to this website or our social media is licenced for private,
                    non-commercial use only. If you have any additional questions, please visit our
                    <span class="ispod">Media Resources</span> page, or
                    send an email to <span class="ispod">corporatepr@argorobotics.rs.</span>
                </p>
            </div>
            <div class="crta-div">
                <hr class="crta">
            </div>
            <div class="prikazi">
                <div class="min-naslov">
                    <h2 class="subheadline" id="margin1">
                        Media Relations
                    </h2>
                </div>
                <div class="link">
                    <a href="#" class="plus" onclick="popup(event)">+</a>
                </div>
            </div>
            <div class="pop-up" style="display: none;">
                <p class="caption1" id="manji">
                    If you have any questions regarding press kits or communications, please visit our
                    <span class="ispod">Media Resources</span> page, or
                    send an email to <span class="ispod">corporatepr@argorobotics.rs.</span>
                </p>
            </div>
            <div class="crta-div">
                <hr class="crta">
            </div>
        </div>
@endsection
