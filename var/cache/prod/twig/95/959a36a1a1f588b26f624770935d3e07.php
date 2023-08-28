<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* teacher_cv.html */
class __TwigTemplate_af24973d9b45a59dc7d6fabad1a69821 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>Πανελλήνιες - Μήνυμα</title>
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/header_photo.jpg"), "html", null, true);
        echo "\" type=\"image/png\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <!-- animate CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\"/>
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/elegant_Icon/elegent_icon.css"), "html", null, true);
        echo "\"/>
    <!-- nice select CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/css/nice-select.css"), "html", null, true);
        echo "\"/>
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/css/owl.carousel.css"), "html", null, true);
        echo "\"/>
    <!-- magnific popup CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/magnific-popup.css"), "html", null, true);
        echo "\"/>
    <!-- Countdown CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/css/Countdown.css"), "html", null, true);
        echo "\"/>
    <!-- flaticon CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\"/>
    <!-- aos CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.css"), "html", null, true);
        echo "\"/>
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\"/>

</head>

<body>
";
        // line 34
        $this->loadTemplate("header.html", "teacher_cv.html", 34)->display($context);
        // line 35
        echo "
<!-- breadcrumb part -->
<section class=\"breadcrumb_part blog_grid_bg\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6 \">
                <div class=\"breadcrumb_iner\">
                    <h2>Επικοινωνία</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end -->

<!-- Start contact us -->
<div class=\"review_form contact_form section_padding\">
    <div class=\"container\">
        <h3 data-aos=\"fade-up\"
            data-aos-duration=\"1200\">Βιογραφικά / Συνεργασίες</h3>
        <form id=\"contactForm\" data-aos=\"fade-up\" data-aos-duration=\"1600\" method=\"post\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form_single_item\">
                        <input type=\"text\" name=\"name\" placeholder=\"Όνομα\" required>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"form_single_item\">
                        <input type=\"email\" name=\"email\" placeholder=\"Email\" required style=\"text-transform: lowercase\">
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"form_single_item\">
                        <input type=\"phone\" name=\"phone\" placeholder=\"Κινητό Τηλέφωνο\" required pattern=\"[0-9]{10}\">
                    </div>
                </div>

                <div class=\"col-lg-6\">
                    <div class=\"form_single_item\">
                        <input type=\"text\" name=\"working_experience\" placeholder=\"Εργασική Εμπειρία\" required>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"form_single_item\">
                        <input type=\"text\" name=\"referral_source\" placeholder=\"Πώς μάθατε για εμάς ?\" required>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"form_single_item\">
                        <input type=\"file\" name=\"cv\" accept=\".pdf,.doc,.docx\">
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"form_single_item\">
                        <textarea name=\"message\" placeholder=\"Μήνυμα\" required></textarea>
                    </div>
                </div>
            </div>
            <input type=\"submit\" class=\"btn_3\" value=\"Submit\">
            <div class=\"modal\" id=\"modernAlert\">
                <h2>Thank you for your message!</h2>
                <p>We will contact you shortly.</p>
                <button class=\"close-button\" onclick=\"hideModernAlert()\">Close</button>
            </div>
        </form>


        <script>
            function validateForm() {
                var name = document.querySelector('input[name=\"name\"]').value;
                var email = document.querySelector('input[name=\"email\"]').value;
                var phone = document.querySelector('input[name=\"phone\"]').value;
                var workingExperience = document.querySelector('input[name=\"working_experience\"]').value;
                var referralSource = document.querySelector('input[name=\"referral_source\"]').value;
                var cvFile = document.querySelector('input[name=\"cv\"]').files[0];
                var message = document.querySelector('textarea[name=\"message\"]').value;

                if (name.trim() === '') {
                    alert('Please enter your name.');
                    return false;
                }

                if (!isValidEmail(email)) {
                    alert('Please enter a valid email address.');
                    return false;
                }

                if (!isValidPhone(phone)) {
                    alert('Please enter a valid phone number.');
                    return false;
                }

                if (workingExperience.trim() === '') {
                    alert('Please enter your working experience.');
                    return false;
                }

                if (referralSource.trim() === '') {
                    alert('Please enter how you learned about us.');
                    return false;
                }

                if (!isValidFile(cvFile)) {
                    alert('Please upload a valid CV file (PDF or DOC/DOCX).');
                    return false;
                }

                if (message.trim() === '') {
                    alert('Please enter a message.');
                    return false;
                }

                return true;
            }

            function isValidFile(file) {
                // Check if the file is not empty and has a valid extension
                if (!file) {
                    return false;
                }

                var allowedExtensions = ['.pdf', '.doc', '.docx'];
                var fileName = file.name.toLowerCase();
                var isValidExtension = allowedExtensions.some(ext => fileName.endsWith(ext));

                return isValidExtension;
            }

            document.addEventListener('DOMContentLoaded', function () {
                // Attach an event listener to the form submission
                document.querySelector('#contactForm').addEventListener('submit', function (event) {
                    event.preventDefault(); // Prevent the default form submission

                    // Retrieve the form data
                    var formData = new FormData(document.getElementById('contactForm'));

                    // Create an AJAX request
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', '";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_teacher");
        echo "', true); // Replace with the correct path for the teacher action

                    // Handle the AJAX response
                    xhr.onload = function () {
                        if (xhr.status === 200) {
                            // Request successful, show the success message
                            showModernAlert();
                        } else {
                            // Request failed, handle the error
                            alert('Oops! Something went wrong. Please try again.');
                        }
                    };

                    // Send the AJAX request with the form data
                    xhr.send(formData);
                });
            });

            function showModernAlert() {
                var modernAlert = document.getElementById('modernAlert');
                modernAlert.style.display = 'block';

                setTimeout(function () {
                    hideModernAlert();
                }, 4000);
            }

            function hideModernAlert() {
                var modernAlert = document.getElementById('modernAlert');
                modernAlert.style.display = 'none';
            }

        </script>

        <style>
            /* Modal container style */
            .modal {
                margin-left: 20px;
                max-height: 200px;
                background-color: beige;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
                text-align: center;
                font-family: Arial, sans-serif;
                overflow: auto;
            }

            /* Modal title style */
            .modal h2 {
                font-size: 24px;
                margin-bottom: 10px;
                color: #333;
            }

            /* Modal close button style */
            .modal .close-button {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
            }
            /* Alert title style */
            .alert h2 {
                font-size: 24px;
                margin-bottom: 10px;
                color: #333;
            }

            /* Alert message style */
            .alert p {
                font-size: 18px;
                margin-bottom: 20px;
                color: #666;
            }

            /* Close button style */
            .alert button {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
            }
            /* Checkbox container */
            .form_single_item {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }

            /* Hide the default checkbox */
            .form_single_item input[type=\"checkbox\"] {
                position: absolute;
                opacity: 0;
                pointer-events: none;
            }

            /* Custom checkbox */
            .form_single_item label {
                position: relative;
                padding-left: 30px;
                cursor: pointer;
            }

            /* Checkbox style */
            .form_single_item label:before {
                content: \"\";
                position: absolute;
                left: 0;
                top: 0;
                width: 18px;
                height: 18px;
                border: 2px solid #aaa;
                border-radius: 3px;
            }

            /* Checkbox checked style */
            .form_single_item input[type=\"checkbox\"]:checked + label:before {
                background-color: #2196F3;
                border-color: #2196F3;
            }

            /* Checkmark icon */
            .form_single_item label:after {
                content: \"\";
                position: absolute;
                top: 5px;
                left: 5px;
                width: 8px;
                height: 8px;
                background-color: white;
                border-radius: 1px;
                opacity: 0;
                transition: opacity 0.2s;
            }

            /* Checkmark icon display when checkbox is checked */
            .form_single_item input[type=\"checkbox\"]:checked + label:after {
                opacity: 1;
            }
        </style>


    </div>
</div>
<!-- footer part here -->
<footer class=\"footer_section\">
    ";
        // line 327
        $this->loadTemplate("footer.html", "teacher_cv.html", 327)->display($context);
        // line 328
        echo "
</footer>
<!-- footer part end -->
<!-- jquery slim -->
<script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- popper js -->
<script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<!-- bootstarp js -->
<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- nice select -->
<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<!-- owl carousel js -->
<script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!-- magnify popup js -->
<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
<!-- simplyCountdown js -->
<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/js/simplyCountdown.min.js"), "html", null, true);
        echo "\"></script>
<!-- counter js -->
<script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
<!-- aos js -->
<script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.js"), "html", null, true);
        echo "\"></script>
<!-- custom js -->
<script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "teacher_cv.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 350,  452 => 348,  447 => 346,  442 => 344,  437 => 342,  432 => 340,  427 => 338,  422 => 336,  417 => 334,  412 => 332,  406 => 328,  404 => 327,  248 => 174,  107 => 35,  105 => 34,  97 => 29,  92 => 27,  87 => 25,  82 => 23,  77 => 21,  72 => 19,  67 => 17,  62 => 15,  57 => 13,  52 => 11,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "teacher_cv.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/teacher_cv.html");
    }
}
