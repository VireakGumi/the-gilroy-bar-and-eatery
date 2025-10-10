<div class="modal fade" id="career-apply-modal" tabindex="-1" aria-labelledby="career-apply-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content career-modal-content">
            <div class="modal-header career-modal-header">
                <h2 class="career-section-title text-center text-uppercase w-100 mb-0">APPLY NOW</h2>
                <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body career-modal-body">
                <div class="career-application-form career-modal-form">
                    <form id="career-form" method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="career-modal-input" placeholder="First Name" name="first_name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="career-modal-input" placeholder="Last Name" name="last_name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="email" class="career-modal-input" placeholder="Email Address" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="career-modal-input" placeholder="Phone Number" name="phone" required>
                            </div>
                        </div>
                        <select class="career-modal-input career-modal-select" name="position" required>
                            <option value="">Select Position</option>
                            @foreach ($allPositions as $position)
                                <option value="{{ $position }}">{{ $position }}</option>
                            @endforeach
                            <option value="other">Other Position</option>
                        </select>
                        <input type="file" class="career-modal-input career-modal-file" name="resume" accept=".pdf,.doc,.docx" required>
                        <textarea class="career-modal-input career-modal-textarea" placeholder="Cover Letter (Optional)" name="cover_letter" rows="4"></textarea>
                        <div class="text-center">
                            <button type="button" class="btn btn-stella career-modal-submit" onclick="careerValidateAndSubmit()">
                                <i class="fas fa-paper-plane me-2"></i>SUBMIT APPLICATION
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div class="modal fade" id="career-success-modal" tabindex="-1" aria-labelledby="career-success-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content career-modal-content">
            <div class="modal-header career-modal-header">
                <h5 class="modal-title w-100 text-center">Application Submitted</h5>
                <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="mb-3">
                    <i class="fas fa-check-circle fa-4x career-success-icon"></i>
                </div>
                <h4 class="career-success-title">Thank You!</h4>
                <p class="career-success-text">Your application has been submitted successfully.</p>
                <p class="career-success-text">We will review your application and contact you soon.</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-stella career-success-close" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>