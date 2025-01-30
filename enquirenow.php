<?php include "header.php" ?>
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="assets\images\About Us.png" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title">Enquire Now</h1>
        <ul>
            <li>
                <a class="active" href="index.php">Home</a>
            </li>
            <li>Enquire Now</li>
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


<!-- Popular Course Section Start -->
<div class="rs-popular-courses style2 white-bg pt-94 pb-100 md-pt-64 md-pb-70">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 mb-30">
                <div class="course-wrap">
                    <div class="front-part">
                        <div class="img-part">
                            <img src="assets/give-wings-to-your-dream.png" alt="">
                        </div>
                        <div class="content-part">
                            <a class="categorie" href="equalmerit.php"> ***HURRY NOW*** </a>
                            <h4 class="title"> Valid for Limited Period Fill your details below to enroll </h4>
                        </div>
                    </div>

                    <div class="inner-part">
                        <div class="content-part">
                            <h2 class="text-center mb-4 text-white"> EqualMerit: Equalsign National Scholarship
                                Examination </h2>
                            <h4 class="title text-white"> ***HURRY NOW*** <br> Valid for Limited Period Fill your
                                details below to enroll </h4>
                        </div>
                    </div>

                    <div class="price-btn">
                        <a href="equalmerit.php"> Know More <i class="flaticon-next"></i></a>
                    </div>

                </div>
            </div>


            <div class="col-lg-8 col-md-8 mb-30">
                <h4 class="text-center mb-4"> Enquire Now
                    <hr>
                </h4>
                <form class="row g-3 needs-validation" novalidate method="post" action="registration-class-submit.php">
                    <!-- Name -->
                    <div class="col-md-6 pt-1">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="Name" name="Name" required>
                        <div class="invalid-feedback">Please provide your name.</div>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6 pt-1">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="Email" name="Email" required>
                        <div class="invalid-feedback">Please provide a valid email address.</div>
                    </div>

                    <!-- WhatsApp Number -->
                    <div class="col-md-6 pt-1">
                        <label for="whatsapp" class="form-label">WhatsApp Number</label>
                        <input type="text" class="form-control" id="Phone" name="Phone" required
                            pattern="[1-9]{1}[0-9]{9}" required>
                        <div class="invalid-feedback">Please provide a valid 10-digit WhatsApp number.</div>
                    </div>

                    <!-- City -->
                    <div class="col-md-6 pt-1">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="Place" name="Place" required>
                        <div class="invalid-feedback">Please provide your city.</div>
                    </div>

                    <!-- Select Course Type -->
                    <div class="col-md-6 pt-1">
                        <label for="course" class="form-label">Select Course Type</label>
                        <select class="form-select" id="Course" name="Course" required>
                            <option selected disabled value="">Choose...</option>
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

                    <div class="col-md-6 pt-1">
                        <label for="center" class="form-label">Select Class </label>
                        <select class="form-select" id="formclass" name="formclass" required>
                            <option selected disabled value="">Choose...</option>
                            <!-- <option value="6"> 6 Class</option>
                            <option value="7"> 7 Class</option> -->
                            <option value="8"> 8 Class</option>
                            <option value="9"> 9 Class</option>
                            <option value="10"> 10 Class</option>
                            <option value="11"> 11 Class</option>
                            <option value="12"> 12 Class</option>
                        </select>
                        <div class="invalid-feedback">Please select a center.</div>
                    </div>



                    <!-- Submit Button -->
                    <div class="col-12 pt-1 pb-2">
                        <input class="btnsubmit" type="submit" value="Submit Now" name="classsubmit">
                    </div>
                </form>


            </div>

        </div>

    </div>
</div>
<!-- Popular Course Section End -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Bootstrap validation
    (function () {
        'use strict';

        var forms = document.querySelectorAll('.needs-validation');

        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
<?php include "footer.php" ?>