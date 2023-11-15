<?php  include('header.php');

?>


   <!-- Contact Info Start -->
   <div class="container-fluid py-5 contact-info">
    <div class="row">
        <div class="col-lg-4 p-0">
            <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                <i class="fa fa-3x fa-map-marker-alt text-secondary mr-4"></i>
                <div class="">
                    <h5 class="mb-2">Our Office</h5>
                    <p class="m-0">Hanuman T, Gate No 1 hanif chs Santacruz east Mumbai 400055</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-0">
            <div class="contact-info-item d-flex align-items-center justify-content-center bg-secondary text-white py-4 py-lg-0">
                <i class="fa fa-3x fa-envelope-open text-primary mr-4"></i>
                <div class="">
                    <h5 class="mb-2">Email Us</h5>
                    <p class="m-0">rahul@workforceenterprises.in</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-0">
            <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                <i class="fa fa-3x fa-phone-alt text-secondary mr-4"></i>
                <div class="">
                    <h5 class="mb-2">Call Us</h5>
                    <p class="m-0">+91 8169930944</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Info End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <h1 class="text-secondary">Contact Us</h1>
              </div>
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form  novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="submitbtncon" onclick="gotowhatsapp()" >Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <iframe style="width: 100%; height: 100%; object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.7420274835868!2d72.84392317350385!3d19.075076652004938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c903e56d3e8f%3A0xe8aba662c6f5f86e!2s1%2C%20Hanuman%20Tekdi%20Rd%2C%20Hanuman%20Tekdi%2C%20Santacruz%20East%2C%20Mumbai%2C%20Maharashtra%20400055!5e0!3m2!1sen!2sin!4v1700063382711!5m2!1sen!2sin"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <script>
function gotowhatsapp() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var service = document.getElementById("subject").value;
  var subject = document.getElementById("message").value;

  // Check if any field is empty
  if (name === "" || email === "" || service === "" || subject === "") {
    // Show an error message
    alert("Please fill in all fields before continuing.");
  } else {
    var url =
      "https://wa.me/+918169930944?text=" +
      "Name: " + name + "%0a" +
      "Email: " + email + "%0a" +
      "Subject: " + service + "%0a" +
      "Message: " + subject;

    // Open WhatsApp with the composed message
    window.open(url, '_blank').focus();
  }
}



</script>

    <?php  include('footer.php');

    ?>
    