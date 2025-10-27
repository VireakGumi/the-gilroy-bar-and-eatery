@extends('layouts.app')
@section('title', 'Venue Group Homepage')

@section('content')
    <section class="venue-grid-section bg-light px-5">
        @include('home_components.venue-grid')
        @include('home_components.mobile-slider')
    </section>

    @include('home_components.about-banner')
    @include('home_components.about-content')
    @include('home_components.chef-banner')
    @include('home_components.whats-on-section')
    @include('home_components.private-events')
@endsection

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const expandableRows = document.querySelectorAll('.event-row-expandable');
    expandableRows.forEach(row => {
        row.addEventListener('click', function() {
            const eventIndex = this.dataset.eventIndex;
            const detailsRow = document.getElementById('event-details-' + eventIndex);
            if(!detailsRow) return;

            const isActive = this.classList.contains('active');
            expandableRows.forEach(other => {
                const idx = other.dataset.eventIndex;
                const otherDetails = document.getElementById('event-details-' + idx);
                if(other !== this) other.classList.remove('active');
                if(otherDetails && otherDetails !== detailsRow) otherDetails.classList.remove('active');
            });

            if(!isActive){
                this.classList.add('active');
                detailsRow.classList.add('active');
            } else {
                this.classList.remove('active');
                detailsRow.classList.remove('active');
            }
        });
    });
});
</script>
@endsection
