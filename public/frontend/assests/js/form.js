// Form validation
$("form").each(function () {
    $(this).validate({
        rules: {
            numerology_type: {
                required: true,
                number: true,
            },
            first_name: {
                required: true,
                minlength: 2,
            },
            last_name: {
                required: true,
                minlength: 2,
            },
            dob: {
                required: true,
                date: true,
            },
            phone_number: {
                required: true,
                digits: true,
                minlength: 10,
            },
            area_of_concern: {
                required: true,
                minlength: 5,
            },
            business_name: {
                required: true,
                minlength: 3,
            },
            type_of_business: {
                required: true,
                minlength: 3,
            },
            have_partner: {
                required: true,
            },
        },
        messages: {
            numerology_type: {
                required: "Please enter numerology type.",
                number: "Please enter a valid number.",
            },
            first_name: {
                required: "Please enter your first name.",
                minlength:
                    "Your first name must be at least 2 characters long.",
            },
            last_name: {
                required: "Please enter your last name.",
                minlength: "Your last name must be at least 2 characters long.",
            },
            dob: {
                required: "Please select your date of birth.",
                date: "Please enter a valid date.",
            },
            phone_number: {
                required: "Please enter your phone number.",
                digits: "Please enter only digits.",
                minlength: "Your phone number must be at least 10 digits long.",
            },
            area_of_concern: {
                required: "Please specify your area of concern.",
                minlength:
                    "Your area of concern must be at least 5 characters long.",
            },
            business_name: {
                required: "Please enter your business name.",
                minlength:
                    "Your business name must be at least 3 characters long.",
            },
            type_of_business: {
                required: "Please enter the type of business.",
                minlength:
                    "The type of business must be at least 3 characters long.",
            },
            have_partner: {
                required: "Please select if you have a partner.",
            },
        },

        errorElement: "div",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element) {
            $(element).removeClass("is-invalid");
        },

        // Custom function to handle success message hiding
        submitHandler: function (form) {
            setTimeout(function () {
                $("#successMessage").fadeOut("slow");
                $("#errorMessage").fadeOut("slow");
            }, 5000);

            form.submit();
        },
    });
});
