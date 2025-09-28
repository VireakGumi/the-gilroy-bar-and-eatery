<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/private_events_modal.css') }}">
</head>

<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="enquiryModalLabel">ENQUIRE NOW</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="modal-intro">If you are looking for a truly memorable affair, Stella can be booked from our cellar to our rooftop for a fully exclusive event. To start the arrangements for your event, or for more information about what Stella can provide, please call us directly or contact us below using the form.</p>
                <div class="modal-divider"></div>
                <form id="enquiryForm">
                    <div class="form-row-group">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="firstName" required placeholder="Enter first name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-divider"></div>
                    <div class="form-row-group">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="email" required placeholder="Enter email address">
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" id="phone" required placeholder="Enter mobile number">
                            </div>
                        </div>
                    </div>
                    <div class="modal-divider"></div>
                    <div class="form-row-group">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="date" class="form-control" id="date" required placeholder="Select date">
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="guests" min="1" required placeholder="Enter number of people">
                            </div>
                        </div>
                    </div>
                    <div class="modal-divider"></div>
                    <div class="form-row-group">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="eventType" placeholder="Enter occasion">
                            </div>
                            <div class="col-md-6">
                                <select class="form-select" id="space">
                                    <option value="" selected disabled>Select space</option>
                                    <option value="rooftop">Rooftop Terrace</option>
                                    <option value="cocktail">Cocktail Lounge</option>
                                    <option value="ground">Ground Floor Area</option>
                                    <option value="private">Private Dining Room</option>
                                    <option value="full-venue">Full Venue</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-divider"></div>
                    <div class="form-row-group">
                        <div class=">
                            <textarea class="form-control" id="message" rows="4" placeholder="Tell us more about your event..."></textarea>
                        </div>
                    </div>

                    <div class="modal-divider"></div>
                </form>
                <button type="button" class="btn submit-btn" id="submitEnquiry">SEND</button>
            </div>
        </div>
    </div>
</div>