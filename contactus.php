<!DOCTYPE html>
<html lang="en">

<head>
<?php include('./partials/header.php'); ?>
</head>

<body>
<?php include('./partials/nav.php'); ?>
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5">
                        <div class="card-body p-sm-5">
                            <h2 class="text-center mb-4">Contact us</h2>
                            <form data-bss-recipient="b7c16c0d64d5db20fa967020664887e1">
                                <div class="mb-3"><input class="form-control" type="text" id="name-2" name="name" placeholder="Name"></div>
                                <div class="mb-3"><input class="form-control" type="email" id="email-2" name="email" placeholder="Email"></div>
                                <div class="mb-3"><textarea class="form-control" id="message-2" name="message" rows="6" placeholder="Message"></textarea></div>
                                <div><button class="btn btn-dark d-block w-100" type="submit">Send </button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('./partials/footer.php'); ?>)
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>