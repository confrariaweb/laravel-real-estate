{!! Form::hidden('accounts[]', $account->id?? null) !!}
<div class="row">
    <div class="col-10">
        <div class="row">
            <div class="col-12">
                @include('real-estate::cards.property-data')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('real-estate::cards.localization')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('real-estate::cards.property-amount')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('real-estate::cards.property-data-visibility')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('real-estate::cards.property-data-not-visible')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('real-estate::cards.keys')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('real-estate::cards.documents')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('real-estate::cards.media')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('real-estate::cards.property-infrastructure')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('real-estate::cards.property-characteristics')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('real-estate::cards.property-seo')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('real-estate::cards.websites-and-portals')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('real-estate::cards.status')
            </div>
        </div>
    </div>
    <div class="col-2">
    </div>
</div>