<?php include "header.php" ?>
<!-- Main content Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="assets/images/EqualMerit-01.jpg" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title">EqualMerit</h1>
        <ul>
            <li>
                <a class="active" href="index.php">Home</a>
            </li>
            <li>EqualMerit</li>
        </ul>
    </div>
</div>

<style>
    .btnsubmit {
        padding: 16px 0px 16px 0px;
        box-shadow: 0px 28px 50px 0px rgba(0, 0, 0, 0.05);
        outline: none;
        border: none;
        padding: 12px 40px;
        border-radius: 3px;
        display: inline-block;
        text-transform: capitalize;
        font-size: 16px;
        font-weight: 500;
        color: #ffffff;
        background: #ff5421;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        width: 100%;
        text-transform: uppercase;
    }
</style>

<div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-last padding-0 md-pl-15 md-pr-15 md-mb-30">
                <div class="img-part">
                    <img class="wow fadeInUp" src="assets/images/Celebrating1M.jpg" alt="About Image">
                </div>
            </div>
            <div class="col-lg-6 pr-70 md-pr-15">
                <div class="sec-title">
                    <div class="sub-title orange">EqualMerit</div>
                    <h2 class="title mb-17">Equalsign National Scholarship Examination</h2>
                    <!-- <div class="bold-text mb-22">Recogizing the need is the primary than we expected Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus,</div> -->
                    <div class="desc">
                        <p>Equalsign Coaching Institute proudly introduces EqualMerit, a transformative national
                            scholarship examination designed to unlock the potential of young learners across India.
                            This free aptitude and scholarship test represents our commitment to identifying, nurturing,
                            and supporting academic excellence.<br>
                            At the heart of EqualMerit lies a profound mission: to provide students with a comprehensive
                            assessment of
                            their current academic preparedness while offering a pathway to enhanced performance and
                            future success. By
                            conducting this strategic examination, we aim to:<br>
                            <b> • Evaluate students' existing academic capabilities</b> <br>
                            <b> • Identify individual learning potential</b><br>
                            <b>• Provide targeted guidance for academic improvement</b> <br>
                            <b>• Offer substantial financial support through scholarships</b> <br>

                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Popular Course Section Start -->
<div class="rs-popular-courses style2 white-bg pt-10 pb-100 md-pt-64 md-pb-70">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 mb-30">
                <div class="course-wrap">
                    <div class="front-part">
                        <div class="img-part">
                            <img src="assets/images/give-wings-to-your-dream.png" alt="">
                        </div>
                        <!-- - -->
                    </div>

                    <div class="inner-part">
                        <div class="content-part">
                            <h2 class="text-center mb-4 text-white"> EqualMerit: Equalsign National Scholarship
                                Examination </h2>
                            <h4 class="title text-white"> ***HURRY NOW*** <br> Valid for Limited Period Fill your
                                details below to enroll </h4>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-lg-8 col-md-8 pt-5 d-flex align-items-center flex-column">
                <h4 class="text-center mb-4"> EqualMerit: Equalsign National Scholarship Examination
                    <hr>
                </h4>


                <form class="row g-3 needs-validation  " novalidate method="post" action="registration-form-submit.php">
                    <!-- Name -->
                    <div class="col-md-6 pt-1">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="rname" name="rname" required>
                        <div class="invalid-feedback">Please provide your name.</div>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6 pt-1">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="remail" name="remail" required>
                        <div class="invalid-feedback">Please provide a valid email address.</div>
                    </div>

                    <!-- WhatsApp Number -->
                    <div class="col-md-6 pt-1">
                        <label for="whatsapp" class="form-label">WhatsApp Number</label>
                        <input type="text" class="form-control" id="mobile" name="rphone" required
                            pattern="[1-9]{1}[0-9]{9}" required>
                        <div class="invalid-feedback">Please provide a valid 10-digit WhatsApp number.</div>
                    </div>

                    <!-- City -->
                    <div class="col-md-6 pt-1">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="rcity" name="rcity" required>
                        <div class="invalid-feedback">Please provide your city.</div>
                    </div>

                    <!-- Select Our Center -->
                    <div class="col-md-6 pt-1">
                        <label for="center" class="form-label">Select Our Center</label>
                        <select class="form-select" id="enquiry_institute" name="enquiry_institute" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="1">Sector 14, Gurugram </option>
                            <option value="2">Sri Vijaya Puram </option>
                            <option value="3">Bambooflat, Andaman </option>
                            <option value="4">Jamia Nagar, Okhla </option>
                            <option value="5">Bathubasti, Andaman</option>
                            <option value="6">Rohini, Delhi</option>
                        </select>
                        <div class="invalid-feedback">Please select a center.</div>
                    </div>

                    <!-- Select Course Type -->
                    <div class="col-md-6 pt-1">
                        <label for="course" class="form-label">Select Course Type</label>
                        <select class="form-select" id="rcourses" name="rcourses" required>
                            <option selected disabled value=""> Choose...</option>
                            <option value="board exams">Board Exams</option>
                            <option value="jee main">JEE Main</option>
                            <option value="jee advanced">JEE Advanced</option>
                            <option value="neet">NEET</option>
                            <option value="nda">NDA</option>
                            <option value="cuet">CUET</option>
                            <option value="others">Others</option>
                        </select>
                        <div class="invalid-feedback">Please select a course type.</div>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-12 pt-1 pb-2">
                        <input class="btnsubmit" type="submit" value="Submit Now" name="btnRSubmit">
                    </div>
                </form>


            </div>

        </div>

    </div>
</div>
<!-- Popular Course Section End -->

<div class="container my-5" style="  box-shadow:0 6px 25px rgba(0, 0, 0, 0.07);">
    <header class="text-center mb-5">
        <h3>EqualMerit Exam Details</h3>
        <!-- <p class="lead">Complete Information About The Exam</p> -->
    </header>

    <!-- First Row: 2 Columns -->
    <div class="row">
        <!-- Exam Fee Section -->
        <div class="col-12 col-md-6 text-center mb-4">
            <div class="icon-style">
                <i class="fas fa-money-bill-wave"></i>
            </div>
            <h3 class="section-titles text-center">Exam Fee</h3>
            <p class="section-contents text-center">Completely Free! There is no registration or exam fee.</p>
        </div>

        <!-- Exam Time Section -->
        <div class="col-12 col-md-6 text-center mb-4">
            <div class="icon-style">
                <i class="fas fa-clock"></i>
            </div>
            <h3 class="section-titles text-center">Exam Time</h3>
            <ul class="section-contents text-center">
                The exam duration is 60 minutes.
                The time slot will be shared by our team based on availability.
            </ul>
        </div>
    </div>

    <!-- Second Row: 2 Columns -->
    <div class="row">
        <!-- Exam Mode Section -->
        <div class="col-12 col-md-6 text-center mb-4">
            <div class="icon-style">
                <i class="fas fa-laptop-house"></i>
            </div>
            <h3 class="section-titles text-center">Exam Mode (Offline only)</h3>
            <p class="section-contents text-center">Conducted in schools and Equalsign learning centers.</p>
        </div>

        <!-- Eligibility Section -->
        <div class="col-12 col-md-6 text-center mb-4">
            <div class="icon-style">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <h3 class="section-titles text-center">Eligibility</h3>
            <ul class="section-contents text-center">
                <p>Students studying in Class 7 to Class 11 can apply.
                    Students from any school can register for the test.
                    No minimum marks required – every student gets an opportunity to qualify for a scholarship.</p>
            </ul>
        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Bootstrap validation
    (function() {
        'use strict';

        var forms = document.querySelectorAll('.needs-validation');

        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
<div class="content-containers pl-40 pr-40">
    <div class="hidden-content container" id="extraContent">
        <p>The EqualMerit examination is meticulously crafted to challenge and inspire students from various educational
            backgrounds. Our comprehensive assessment covers multiple domains, ensuring a holistic evaluation of
            students' intellectual capabilities. Through carefully designed multiple-choice questions, we assess
            critical thinking, problem-solving skills, and subject-specific knowledge across science, mathematics, and
            mental ability segments.
            Scholarships and fee waivers constitute a cornerstone of our EqualMerit program. Recognizing the financial
            challenges many talented students face, we are committed to providing substantial monetary support. Our
            scholarships are designed to remove economic barriers, enabling meritorious students to pursue their
            academic dreams without financial constraints.
            Key benefits of the EqualMerit examination include:<br>
            <b> • Free examination across multiple student categories</b> <br>
            <b> • Comprehensive performance analysis</b> <br>
            <b> • Personalized feedback mechanism</b> <br>
            <b>• Substantial scholarship opportunities</b> <br>
            The examination spans multiple class levels, ensuring inclusivity and comprehensive coverage. From Class VII
            to XII, students can participate and benchmark their academic potential. Our unique approach goes beyond
            traditional testing, focusing on understanding each student's individual learning trajectory and providing
            actionable insights.
            Equalsign's EqualMerit is more than just a scholarship test; it's a transformative platform that empowers
            students to recognize their strengths, address their learning gaps, and chart a definitive path towards
            academic excellence. By combining rigorous assessment with meaningful financial support, we are committed to
            democratizing quality education and creating opportunities for deserving students nationwide.
            <br> Join us in this educational revolution. Participate in EqualMerit and take the first step towards
            realizing your academic potential.

        </p>
    </div>
    <!-- <button class="read-more-btn" onclick="toggleContent()">Read More</button> -->
    <section class="eligibility-section container">

        <h2 style="color:white">How to Register</h2>
        <div class="eligibility-container">
            <div class="eligibility-column">
                <!-- <img src="assets\images\duration.png" class="dr"> -->


                <h3 class="tion">Click on the</h3>
                <p class="enter"><b>Register </b>button</p>
                <img src="assets/images/reg.svg" class="merit-icon">
            </div>
            <div class="eligibility-column">
                <!-- <img src="assets\images\book-svgrepo-com.svg" class="dr"> -->


                <h3 class="tion">Fill in your basic details</h3>
                <p class="enter">Including name, class, school, and contact details</p>
                <img src="assets/images/dtls.svg" class="merit-icon">
            </div>
            <div class="eligibility-column">

                <!-- 
                <img src="assets/images/one.svg" class="dr"> -->
                <h3 class="tion">Submit the form </h3>
                <p class="enter">Wait for a call from our team</p>
                <img src="assets/images/sbmit.svg" class="merit-icon">
            </div>
            <div class="eligibility-column">
                <!-- <img src="assets\images\book-svgrepo-com.svg" class="dr"> -->


                <h3 class="tion">Our team will contact you </h3>
                <p class="enter">to confirm the date and time of your test</p>
                <img src="assets/images/tm.svg" class="merit-icon">
            </div>
        </div>
    </section>


</div>


<?php include "footer.php" ?>