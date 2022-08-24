<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/jquery.nice-select.js"></script>
<script src="js/odometer.min.js"></script>
<script src="js/viewport.jquery.js"></script>
<script src="js/slick.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script>


<script src="angular/tinymce.min.js"></script>
<script src="angular/angular.min.js"></script>
<script src="angular/dirPagination.js"></script>
<script src="angular/angucomplete-alt.js"></script>
<script src="angular/app.js"></script>
<script src="angular/controller/admin.js"></script>
<script src="angular/controller/slider.js"></script>
<script src="angular/controller/markets.js"></script>
<script src="angular/controller/add-products.js"></script>
<script src="angular/controller/banner-image.js"></script>
<script src="angular/controller/category.js"></script>
<script src="angular/controller/course-category.js"></script>
<script src="angular/controller/add-courses.js"></script>
<script src="angular/controller/course-menu.js"></script>
<script src="angular/controller/gallery-category.js"></script>
<script src="angular/controller/gallery.js"></script>
<script src="angular/controller/blog.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
    function submitForm(formId) {
        
        try {
            if (!$("#" + formId).valid()) {
                return false
            }
            $("button").attr('disabled', true)
            var postData = $('#' + formId).serialize()

            $.ajax({
                type: 'POST',
                url: "contact-database.php",
                data: postData,
                success: function (data) {
                    $("button").attr('disabled', false)
                    if (data == 1) {
                    
                        $("#" + formId)[0].reset();

                        $('#welcome_modal').modal('show');
                        setTimeout(() => {

                            $("#welcome_modal").modal("hide");
                            location.reload();
                        }, 2000);



                    } else {
                        alert(data)
                    }
                },
                error: function (error) {
                    $("button").attr('disabled', false)
                    alert("Something went wrong, please try again later")
                }
            });
        } catch (error) {
            console.log(error.message);

            $("button").attr('disabled', false)
            alert("Something went wrong, please try again later")
        }
    }
</script>