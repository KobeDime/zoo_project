<section style="background: url(../img/zoobg.jpg)" class="py-5 bg-cover bg-center">
    <div class="hero-overlay"></div>
    <div class="container py-5 px-0 text-white text-center">
        <h1 class="text-shadow hero-heading font-weight-normal">Kobe Safari</h1>
        <p class="text-shadow font-weight-light mt-3 mb-4 mx-auto" style="width: 60%;">
            Transform zoo management with Kobe Safari’s intuitive platform. Streamline 
            operations, enhance animal care, and improve visitor experiences effortlessly.
        </p>
    </div>
</section>

<!-- welcome to Zoo Management System -->
<section class="pb-2 pt-5">
    <div class="container-fluid p-5 pb-2">
        <div class="row px-2">
            <div class="col-lg-6 col-sm-12">
                <h2>Welcome to <span class="font-weight-bold text-light-green">Kobe Safari</span></h2>
                <div style="width: 8%">

                    <hr style="border-top: 10px solid #489A33;">
                </div>
                <p class="lead text-secondary">Embark on an exciting journey with Kobe Safari, where managing your zoo becomes as thrilling and seamless as a real safari adventure. Our innovative platform is designed to streamline every aspect of zoo management, from animal care and staff coordination to enhancing visitor experiences.</p>
                <p class="text-small text-secondary">Experience the future of zoo management with our user-friendly system that combines advanced technology with the wonders of wildlife. Dive into a world where efficiency meets excitement, and let Kobe Safari transform your zoo into a vibrant and thriving environment.</p>
                <a href="gallery" class="btn btn-primary btn-sm" style="border-radius: 50px;">View Gallery</a>
            </div>
            <div class="col-lg-6 col-sm-12 mt-sm-4">
                <div class="row">
                    <div class="col">
                        <img src="../img/ausgeck.jpg" alt="" class="img-fluid mb-4" width="200px">
                        <h4 class="h5 mb-2">Australian Gecko</h4>
                        <p class="text-small text-muted">Australian geckos don’t have eyelids. Their eyes are protected by a transparent membrane, and they take care of them by licking them clean.</p>
                    </div>
                    <div class="col">
                        <img src="../img/grizzlybear.jpg" alt="" class="img-fluid mb-4" width="200px">
                        <h4 class="h5 mb-2">Grizzly Bear</h4>
                        <p class="text-small text-muted">The grizzly-polar bear hybrid is a cross between a Polar bear and a grizzly bear and named the ‘pizzly bear.’</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- our sponsors -->
<section class="p-3" style="background-color: #b6cdbd">
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col">
                <h3 class="text-center font-weight-bold text-black" style="font-size: 35px;">Our Sponsors</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($testimonials as $testimonial) { ?>
                <div class="col-lg-4 col-sm-10 text-center mb-sm-4">
                    <div class="">
                        <img src="../img/gr7.png" alt="" width="195px" style="border-radius: 50%; border: 10px solid #3baea0">
                    </div>
                    <h5 class="text-black mt-2"><?= $getSponsorName($testimonial['sponsor_id']) ?></h5>
                    <p class="" style="color: #118a7e"><?= $testimonial['test_message'] ?></p>
                </div>
            <?php  } ?> 
        </div>
    </div>
</section>

<!-- animal of the week -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>
                    Discover This Week's Star <span class="font-weight-bold" style="color: #BE9D0D">Animal</span>
                    <img src="../img/number_1_hand.png" alt="" width="40px">
                </h2>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div>
                    <img src="../img/animals/<?= $getImageName($currAnimal['animal_id']) ?>" alt="" style="border-radius: 20px">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 pt-sm-4 pt-lg-2">
                <div class="row">
                    <div class="col">
                        <h3> <span class="text-dark"><?= $currAnimal['an_given_name'] ?></h3>
                        <h6> <span class="text-muted">Species name:</span>&ensp;<?= $currAnimal['an_species_name'] ?></h6>
                        <h6> <span class="text-muted">Date of birth:</span>&ensp;<?= $currAnimal['an_dob'] ?></h6>
                        <h6> <span class="text-muted">Gender:</span>&ensp;<?= $currAnimal['an_gender'] == "m" ? "Male" : "Female" ?></h6>
                        <h6> <span class="text-muted">Zoo join date:</span>&ensp;<?= $currAnimal['an_joindate'] ?></h6>
                        <?php if ($currAnimal['an_description'] != "") { ?>
                            <h6> <span class="text-muted">Description</span>&ensp;<?= $currAnimal['an_description'] ?></h6>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-white py-5">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col">
                <h2 class="mb-5 lined ml-5">Map of Zoo</h2>
                <div class="row">
                <div class="d-flex justify-content-center">
                    <img src="../img/zooMap.jpeg" alt="" class="img-fluid" style="max-width: 65%;">
                </div>   
                </div>
            </div>
        </div>
    </div>
</section>