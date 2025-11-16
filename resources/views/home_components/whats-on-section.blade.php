<div class="bg-warm">
    <section class="whats-on m-mb20">
        <div class="p40 m-p20 d-flex justify-content-start container">
            <p class="max-1700 ma m-mb0 h1">What's On</p>
        </div>
        <div class="bb1 pl40 pr40 m-pl20 m-pr20">
            <div class="whatson-grid max-1700 ma">
                <div class="filter-btn flex align-center gap-5 h6 small py10 pl-lg-1930"><span>Event</span></div>
                <div class="filter-btn flex align-center gap-5 h6 small py10 m-hide"><span>Date</span></div>
                <div class="filter-btn flex align-center gap-5 h6 small py10 m-hide"><span></span></div>
                <div class="filter-btn flex align-center gap-5 h6 small py10 m-hide"><span></span></div>
            </div>
        </div>

        {{-- Accordion Container --}}
        <div class="accordion" id="whatsOnAccordion">

            @foreach ($events as $event)
                @php
                    $collapseId = 'collapse-event-' . $loop->iteration;
                    $parentId = '#whatsOnAccordion';
                    $eventName = $event['name'] ?? 'Event Name';
                    $eventDate = $event['date'] ?? '-';
                    $eventLocation = $event['location'] ?? 'Venue';
                    $eventLocationSlug = $event['locationSlug'] ?? '#';
                    $eventTicketsUrl = $event['ticketsUrl'] ?? '';
                    $eventDescription = $event['description'] ?? 'Event description...';
                    $eventImageUrl = $event['imageUrl'] ?? '-';
                @endphp

                {{-- Accordion Header Item --}}
                <div class="event-list-item-wrapper">
                    <div class="bb1 event-list-item pl40 pr40 m-pl20 m-pr20 " id="heading-{{ $loop->iteration }}">
                        <div class="max-1700 ma whatson-grid sm-copy h6 sm pl-lg-1930">
                            <button class="btn p-0 text-start text-inherit collapsed event-title"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#{{ $collapseId }}"
                                    aria-expanded="false"
                                    aria-controls="{{ $collapseId }}">
                                <p class="h6 sm">{{ $eventName }}</p>
                            </button>

                            <p class="m-hide event-date">{{ $eventDate }}</p>
                            <div class="m-hide"><a class="location-link" href="/venue/{{ $eventLocationSlug }}">{{ $eventLocation }}</a></div>

                            <button class="flex align-center justify-center m-justify-end toggle-icon-wrapper p-0 border-0 bg-transparent"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#{{ $collapseId }}"
                                    aria-expanded="false"
                                    aria-controls="{{ $collapseId }}">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="plus--icon" >
                                    <path d="M7 1V15M1 7H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div id="{{ $collapseId }}" class="accordion-collapse collapse" data-bs-parent="{{ $parentId }}">
                    <div class="inner overflow">
                        <div class="max-1700 ma">
                            <div class="mobile-info m-show m-p20">
                                <div class="flex gap-30">
                                    <div class="flex flex-col gap-5">
                                        <p class="small bold text-muted">DATE</p>
                                        <p class="small">{{ $eventDate }}</p>
                                    </div>
                                    {{-- <div class="flex flex-col gap-5">
                                        <p class="small bold text-muted">LOCATION</p>
                                        <a href="/venue/{{ $eventLocationSlug }}" class="small location-link">{{ $eventLocation }}</a>
                                    </div> --}}
                                </div>
                            </div>

                            <div class="event-content pt30 pb40 pl40 pr40 m-pt20 m-pb20 m-pl20 m-pr20">
                                <div class="flex gap-40 m-flex-col m-gap-20">
                                    {{-- <div class="event-image w-40 m-w-100">
                                        <div class="image-container ratio-4-3 overflow-hidden">
                                            <img src="{{ $eventImageUrl }}" alt="{{ $eventName }}" class="w-100 h-100 object-fit-cover">
                                        </div>
                                    </div> --}}
                                    <div class="event-details w-60 m-w-100 flex flex-col">
                                        <div class="description small text-dark mb20 small">
                                            {!! nl2br(e($eventDescription)) !!}
                                        </div>
                                        {{-- <div class="mt-auto">
                                            @if($eventTicketsUrl)
                                                <a href="{{ $eventTicketsUrl }}" target="_blank" rel="noopener noreferrer" class="btn-book-now">
                                                    Book Now
                                                </a>
                                            @endif
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>

<style>


.text-inherit { color: inherit !important; }
.p-0 { padding: 0 !important; }
.border-0 { border: none !important; }
.bg-transparent { background: transparent !important; }
.ma { margin: 0 auto; }
.bg-warm {
    background-color: var(--bg-warm);
}

.whats-on {
    overflow: hidden;
}

.h1 {
    font-size: 2.5rem;
    font-weight: 400;
    color: var(--text-color);
    letter-spacing: -0.02em;
    margin: 0;
}

/* =========================================================
   GRID HEADER + EVENT LIST
========================================================= */
.whatson-grid {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 60px;
    align-items: center;
    text-align: left;
    gap: 20px;
}


.bb1 {
    border-bottom: 1px solid var(--border-color);
}

.event-list-item {
    transition: var(--transition);
    cursor: pointer;
    background: transparent;

}

.event-list-item:hover {
    background-color: rgba(0,0,0,0.02);
}

.event-title {
    font-weight: 400;
    font-size: 1.125rem;
    letter-spacing: -0.01em;
}
.h6 {
    font-size: 0.7rem
}

.event-date {
    color: var(--muted-text);
    font-weight: 400;
    display: flex;
    align-items: center;
    margin: 0;
    line-height: 1;
}

.location-link {
    color: var(--text-color);
    text-decoration: none;
    font-weight: 400;
    transition: var(--transition);
}

.location-link:hover {
    color: var(--muted-text);
}

/* =========================================================
   ACCORDION CONTENT
========================================================= */
.accordion-collapse .inner {
    background-color: var(--bg-light);
    border-bottom: 1px solid var(--border-color);
}

.mobile-info {
    border-bottom: 1px solid var(--border-color);
    background: var(--bg-warm);
}

.event-content {
    background: var(--bg-light);
}

.image-container {
    border-radius: 4px;
    overflow: hidden;
}

.image-container img {
    transition: transform 0.3s ease;
}

.image-container:hover img {
    transform: scale(1.03);
}

.description {
    font-size: 0.95rem;
    line-height: 1.7;
    color: var(--text-color);
}

/* =========================================================
   BUTTONS
========================================================= */
.btn-book-now {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--primary-color);
    color: white;
    padding: 12px 24px;
    text-decoration: none;
    font-weight: 500;
    font-size: 0.9rem;
    border: 1px solid var(--primary-color);
    transition: var(--transition);
}

.btn-book-now:hover {
    background: transparent;
    color: var(--primary-color);
}

.btn-view-all {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    color: var(--text-color);
    text-decoration: none;
    font-weight: 500;
    font-size: 1rem;
    padding: 12px 0;
    border-bottom: 1px solid transparent;
    transition: var(--transition);
}

.btn-view-all:hover {
    border-bottom-color: var(--text-color);
    gap: 16px;
}

/* =========================================================
   TOGGLE ICON
========================================================= */
.toggle-icon-wrapper {
    cursor: pointer;
    transition: var(--transition);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    justify-content: center;
    align-items: center;
    display: flex;
    color: var(--text-color);
}

.toggle-icon-wrapper:hover {
    background: rgba(0,0,0,0.05);
}

.plus--icon {
    width: 12px;
    height: 12px;
    stroke-width: 1.2;
    transition: transform 0.3s ease;
}

.accordion-collapse.show + .event-list-item-wrapper .plus--icon,
[aria-expanded="true"] .plus--icon {
    transform: rotate(45deg);
}

/* =========================================================
   RESPONSIVE DESIGN
========================================================= */
@media(min-width: 1930px) {
    .pl-lg-1930{
        padding-left: 25px;
    }
}
@media (max-width: 768px) {
    .h1 {
        font-size: 2rem;
    }

    .whatson-grid {
        grid-template-columns: 1fr 40px;
        gap: 15px;
    }

    .m-hide { display: none !important; }
    .m-show { display: block !important; }

    .event-content {
        padding: 20px !important;
    }

    .w-40.m-w-100,
    .w-60.m-w-100 {
        width: 100% !important;
    }

    .m-flex-col {
        flex-direction: column !important;
    }

    .m-gap-20 {
        gap: 20px !important;
    }

    .mobile-info {
        padding: 20px !important;
    }
        .m-show {
        display: block !important;
    }

    .flex.gap-30 {
        gap: 20px !important;
        flex-direction: column;
    }
}
@media (max-width: 1024px) {
    .h1 {
        font-size: 2rem;
    }

    .whatson-grid {
        grid-template-columns: 1fr 40px;
        gap: 15px;
    }

    /* Hide desktop-specific content */
    .m-hide {
        display: none !important;
    }

    /* Show mobile/tablet content */
    .m-show {
        display: block !important;
    }

    /* Layout adjustments */
    .event-content {
        padding: 20px !important;
    }

    .w-40, .w-60 {
        width: 100% !important;
    }

    .flex.m-flex-col {
        flex-direction: column !important;
    }

    .m-gap-20 {
        gap: 20px !important;
    }

    .mobile-info {
        padding: 20px !important;
        border-bottom: 1px solid var(--border-color);
        background: var(--bg-warm);
    }

    .flex.gap-30 {
        gap: 20px !important;
        flex-direction: column;
    }

    /* Make plus button stay aligned to right */
    .toggle-icon-wrapper {
        justify-content: flex-end;
    }
}
.m-show {
    display: none !important;
}
/* =========================================================
   SPACING UTILITIES
========================================================= */
.p40 { padding: 40px; }
.m-p20 { padding: 20px; }
.pl40 { padding-left: 40px; }
.pr40 { padding-right: 40px; }
.m-pl20 { padding-left: 20px; }
.m-pr20 { padding-right: 20px; }
.py15 { padding-top: 10px; padding-bottom: 10px; }
.pt30 { padding-top: 30px; }
.pb40 { padding-bottom: 40px; }
.m-pt20 { padding-top: 20px; }
.m-pb20 { padding-bottom: 20px; }
.mt20 { margin-top: 20px; }
.mb20 { margin-bottom: 20px; }
.m-mb20 { margin-bottom: 20px; }
.max-1700 { max-width: 1700px; }
.block { display: block; }
.flex { display: flex; }
.gap-5 { gap: 5px; }
.gap-20 { gap: 20px; }
.gap-30 { gap: 30px; }
.gap-40 { gap: 40px; }
.align-center { align-items: center; }
.justify-center { justify-content: center; }
.m-justify-end { justify-content: flex-end; }
.flex-col { flex-direction: column; }
.w-40 { width: 40%; }
.w-60 { width: 60%; }
.w-100 { width: 100%; }
.h-100 { height: 100%; }
.overflow-hidden { overflow: hidden; }
.object-fit-cover { object-fit: cover; }
.text-center { text-align: center; }
.text-muted { color: var(--muted-text); }
.text-dark { color: var(--text-color); }
.small { font-size: 0.875rem; }
.bold { font-weight: 600; }
.mt-auto { margin-top: auto; }
.ratio-4-3 {
    position: relative;
    padding-top: 75%; /* 4:3 Aspect Ratio */
}

.ratio-4-3 img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.no-focus {
    outline: none !important;
    box-shadow: none !important;
    border: none !important;
}

.no-focus:focus,
.no-focus:focus-visible,
.no-focus:active {
    outline: none !important;
    box-shadow: none !important;
    border: none !important;
}

.btn:focus,
.btn:active {
    outline: none !important;
    box-shadow: none !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const accordion = document.getElementById('whatsOnAccordion');

    if (accordion) {
        // Add smooth transition for accordion
        accordion.addEventListener('show.bs.collapse', function(e) {
            const target = e.target;
            target.style.transition = 'all 0.3s ease';
        });

        accordion.addEventListener('hide.bs.collapse', function(e) {
            const target = e.target;
            target.style.transition = 'all 0.3s ease';
        });
    }
});
</script>
