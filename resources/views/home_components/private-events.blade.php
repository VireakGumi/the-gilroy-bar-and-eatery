<section class="private-events">
    <div class="container text-center">
        <h2 class="serif-font">The Gilroy Events</h2>
        <!-- Button trigger modal -->
        <button
                type="button"
                class="btn btn-outline-light"
                data-bs-toggle="modal"
                {{-- data-bs-target="#enquiryModal" --}}
                >
            ENQUIRE
        </button>
    </div>
    <!-- Enquiry Modal -->
    <div class="modal fade bg-warm" style="font-family: sans-serif;" id="enquiryModal" tabindex="-1"
        aria-labelledby="enquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style=" background-color:#f1ede5;">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="enquiryModalLabel">Event Enquiry</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/send-enquiry" class="pb-3">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="first_name" placeholder="First Name *" required
                                    class="form-control px-3 py-3 bg-transparent">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="last_name" placeholder="Last Name *" required
                                    class="form-control px-3 py-3 bg-transparent">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="mobile" placeholder="Phone Number" required
                                    class="form-control px-3 py-3 bg-transparent">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="Email Address *" required
                                    class="form-control px-3 py-3 bg-transparent">
                            </div>
                            <div class="col-12">
                                <select name="enquiry_type" class="form-select px-3 py-3 bg-transparent" required>
                                    <option value="" disabled selected>Select Enquiry Type</option>
                                    <option value="Private Event">Private Event</option>
                                    <option value="Corporate Event">Corporate Event</option>
                                    <option value="Wedding">Wedding</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea name="description" rows="7" placeholder="How Can We Help You?" required
                                    class="form-control bg-transparent"></textarea>
                            </div>
                        </div>

                        <div class="mt-4 w-100 d-flex">
                            <button type="submit"
                                class="btn bg-transparent custom-book-btn w-100 px-5 py-2 tex-center">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<style>
</style>
