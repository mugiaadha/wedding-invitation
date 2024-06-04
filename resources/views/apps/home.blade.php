@extends('apps.layout.index')

@section('content')

<div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'invite' }">
    <div class="sticky-top">
        <div class="container-fluid nav-tabs py-3 color-primer">
            <div class="nav-tabs-list d-flex flex-row justify-content-around">
                <a class="d-flex flex-column align-items-center" href="#" @click.prevent="tab = 'invite'; window.location.hash = 'invite'">
                    <p class="color-milo"><i class="fa-solid fa-envelope-open-text pb-1"></i> Invite</p>
                </a>
                <a class="d-flex flex-column align-items-center" href="#" @click.prevent="tab = 'qr-scan'; window.location.hash = 'qr-scan'">
                    <p class="color-milo"><i class="fa-solid fa-qrcode pb-1"></i> QR Scan</p>
                </a>
                <a class="d-flex flex-column align-items-center" href="#" @click.prevent="tab = 'wishes'; window.location.hash = 'wishes'">
                    <p class="color-milo"><i class="fa-brands fa-gratipay pb-1"></i> Wishes</p>
                </a>
            </div>
        </div>
    </div>

    <div x-show="tab === 'invite'">
        <livewire:invite-index></livewire:invite-index>
    </div>
    <div x-show="tab === 'qr-scan'">
        <div class="container qr-code py-4 d-flex flex-column justify-content-center align-items-center">
            <div id="reader"></div>
            <livewire:q-r-code></livewire:q-r-code>
        </div>
    </div>
    <div x-show="tab === 'wishes'">
        <livewire:show-wish></livewire:show-wish>
    </div>
</div>

@endsection