<div class="modal fade private-events-page" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="enquiryModalLabel">ENQUIRE NOW</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p class="modal-intro">
                    If you are looking for a truly memorable affair, Stella can be booked from our cellar to our rooftop
                    for a fully exclusive event. To start the arrangements for your event, or for more information about
                    what Stella can provide, please call us directly or contact us below using the form.
                </p>
                <div class="modal-divider"></div>

                <form id="enquiryForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control" placeholder="Phone" required>
                        </div>
                        <div class="col-md-6">
                            <input type="date" class="form-control date-picker" required placeholder="Select date">
                        </div>

                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="Guests" min="1" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Occasion">
                        </div>
                        <div class="col-md-6">
                            <select class="form-select custom-select" required>
                                <option value="" selected disabled>Select Space</option>
                                <option value="rooftop">Rooftop Terrace</option>
                                <option value="cocktail">Cocktail Lounge</option>
                                <option value="ground">Ground Floor Area</option>
                                <option value="private">Private Dining Room</option>
                                <option value="full-venue">Full Venue</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <textarea class="form-control" rows="4" placeholder="Tell us more about your event..."></textarea>
                        </div>
                    </div>
                </form>
                <button type="button" class="btn submit-btn">Send</button>
            </div>

        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll(".date-picker").forEach(el => {
            el.addEventListener("click", function() {
                this.showPicker && this.showPicker(); 
            });
        });
    });
</script>
