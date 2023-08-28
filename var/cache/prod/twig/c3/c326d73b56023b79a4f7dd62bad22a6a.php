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

/* reigstrations.html */
class __TwigTemplate_713011b028f591fb79bbc8f9b8e87313 extends Template
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
    <title>Registration - Panellhnies</title>
    <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/header_photo.jpg"), "html", null, true);
        echo "\" type=\"image/png\" />
    <!-- Link to your CSS file -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/reigstration.css"), "html", null, true);
        echo "\" />
</head>
<body>
<!-- Header part here -->
<!-- (Header code from original template) -->

<!-- Course details part here -->
<section class=\"course_details padding_bottom registration_background\">
    <div class=\"container\">
        <div class=\"row justify-content-between align-items-center\">
            <div class=\"col-xl-7 col-md-7\">
                <div class=\"course_details_iner\">
                </div>
            </div>
            <div class=\"col-xl-4 col-md-5\">
                <div class=\"course_registration\">
                    <div class=\"course_registration_form\">
                        <div class=\"registration_logo\">
                            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pane_logo.png"), "html", null, true);
        echo "\" alt=\"Logo\">
                        </div>
                        <form method=\"post\" action=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_register");
        echo "\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"Username\" required>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\" required>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"Password\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\" required>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"password\" class=\"form-control\" name=\"confirm_password\" id=\"confirm_password\" placeholder=\"Confirm Password\" required>
                            </div>
                            <div class=\"form-group form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"termsCheck\" required>
                                <label class=\"form-check-label\" for=\"termsCheck\">I accept the terms and services</label>
                            </div>
                            <div id=\"alertContainer\">
                                ";
        // line 50
        if (($context["error"] ?? null)) {
            // line 51
            echo "                                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>
                                ";
        }
        // line 53
        echo "                            </div>
                            <form id=\"registrationForm\" method=\"post\" action=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_register");
        echo "\">
                                <!-- ... form elements ... -->
                                <button type=\"submit\" class=\"btn btn-primary btn-block\">Register</button>
                            </form>
                    </div>

                    <!-- Images for animation -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Course details part end -->

<!-- About us part here -->
<!-- (About us code from original template) -->

<!-- Popular course part here -->
<!-- (Popular course code from original template) -->
<style>
    .alertContainer {
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 9999;
        pointer-events: none;
    }

    .alert-shake {
        animation: shake 0.5s infinite;
    }

    @keyframes shake {
        0%, 100% {
            transform: translateX(0);
        }
        10%, 30%, 50%, 70%, 90% {
            transform: translateX(-5px);
        }
        20%, 40%, 60%, 80% {
            transform: translateX(5px);
        }
    }
</style>
<!-- Link to your JavaScript files (optional) -->
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

<!-- Custom JavaScript to validate password and confirm password -->
<script>
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm_password');

    function validatePassword() {
        if (passwordInput.value !== confirmPasswordInput.value) {
            confirmPasswordInput.setCustomValidity(\"Passwords do not match\");
        } else {
            confirmPasswordInput.setCustomValidity('');
        }
    }

    passwordInput.addEventListener('input', validatePassword);
    confirmPasswordInput.addEventListener('input', validatePassword);
    function displayAlert(message) {
        const alertContainer = document.getElementById('alertContainer');
        const alert = document.createElement('div');
        alert.className = 'alert alert-danger';
        alert.textContent = message;
        alertContainer.appendChild(alert);
    }

    // Handle JSON response from the registration endpoint
    const registrationForm = document.getElementById('registrationForm');
    registrationForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(registrationForm);

        fetch(\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_register");
        echo "\", {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    displayAlert(data.error);
                } else if (data.success) {
                    // Handle successful registration (optional)
                    // For example, you can display a success message
                    const alertContainer = document.getElementById('alertContainer');
                    const alert = document.createElement('div');
                    alert.className = 'alert alert-success';
                    alert.textContent = 'Registration successful';
                    alertContainer.appendChild(alert);
                    // Clear form fields if needed
                    registrationForm.reset();
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
</script>
<style></style>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "reigstrations.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 134,  174 => 102,  170 => 101,  166 => 100,  117 => 54,  114 => 53,  108 => 51,  106 => 50,  85 => 32,  80 => 30,  59 => 12,  55 => 11,  51 => 10,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reigstrations.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/reigstrations.html");
    }
}
