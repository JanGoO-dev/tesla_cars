<?php include("./static/header.html"); ?>

<!-- map -->
<iframe style="-webkit-filter: grayscale(100%); filter: grayscale(100%);" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.2531389455903!2d-89.23024619999998!3d48.4516724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d5923dbfe697737%3A0xc9d925c9bc9573fa!2s116+Bruce+St%2C+Thunder+Bay%2C+ON+P7A+5W6!5e0!3m2!1sen!2sca!4v1424272264157" width="100%" height="450" frameborder="0" style="border:0"></iframe>

<!-- contact information -->
<div class="container mx-auto my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h3 class="mb-4 mt-5">Contact Details</h3>
            <ul type="square" class="ml-4">
                <li>
                    <span>North America</span>
                    <br>
                    <a href="#">Press@tesla.com</a>
                </li>
                <li>
                    <span>Europe & Middle East</span>
                    <br>
                    <a href="#">EUPress@tesla.com</a>
                </li>
                <li>
                    <span>Australia and Asia</span>
                    <br>
                    <a href="#">APACPress@tesla.com</a>
                </li>
                <li>
                    <span>China</span>
                    <br>
                    <a href="#">China-Press@tesla.com</a>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow p-5">
                <form>
                    <h3 class="pb-4">Contact Form</h3>
                    <div class="row">
                        <div class="col">
                            <label for="firstName">First Name</label>
                            <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First name" required>
                        </div>
                        <div class="col">
                            <label for="lastName">Last Name</label>
                            <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last name" required>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email Here ..." required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Message Here ..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<?php include("./static/footer.html"); ?>