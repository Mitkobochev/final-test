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

/* login.html */
class __TwigTemplate_e387db171dc1170ebb904f4638b3c0d9 extends Template
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
  <title>Login - Panellhnies</title>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />

</head>
<body>
<!-- Header part here -->
<!-- (Header code from original template) -->

<!-- Login section -->
<section class=\"login_section padding_bottom registration_background\">
  <div class=\"container\">
    <div class=\"row justify-content-center align-items-center\">
      <div class=\"col-lg-6\">
        <div class=\"login_form_container\">
          <!-- Add the following code to display the flash message -->
          ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 26), "flashbag", [], "any", false, false, false, 26), "has", ["error"], "method", false, false, false, 26)) {
            // line 27
            echo "          <div class=\"alert alert-danger\" role=\"alert\">
            ";
            // line 28
            echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 28), "flashbag", [], "any", false, false, false, 28), "get", ["error"], "method", false, false, false, 28)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
            echo "
          </div>
          ";
        }
        // line 31
        echo "          <div class=\"registration_logo\">
            <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pane_logo.png"), "html", null, true);
        echo "\" alt=\"Logo\">
          </div>
          <form method=\"post\" action=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_login");
        echo "\">
            <div class=\"form-group\">
              <input type=\"text\" class=\"form-control\" name=\"username_email\" placeholder=\"Username or Email\" required>
            </div>
            <div class=\"form-group\">
              <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\" required>
            </div>
            <div class=\"form-group form-check\">
              <input type=\"checkbox\" class=\"form-check-input\" id=\"rememberCheck\">
              <label class=\"form-check-label\" for=\"rememberCheck\">Remember me</label>
            </div>
            <style>

              .error-message {
                background-color: #f8d7da;
                border-color: #f5c6cb;
                color: #721c24;
                padding: 10px;
                margin-top: 10px;
                border-radius: 5px;
                animation: shake 0.4s ease-in-out;
              }

              @keyframes shake {
                0% {
                  transform: translateX(-5px);
                }
                50% {
                  transform: translateX(5px);
                }
                100% {
                  transform: translateX(-5px);
                }
              }
              body {
                background-image: url(\"../img/register_background_logo.jpg\");
                background-size: cover;
                background-position: center;
                margin: 0;
                height: 100vh;
                background-right: 300px;
              }

              .login_section {
                margin-top: 20px; /* Add some top margin to the login section */
                margin-left: 660px; /* Add some right margin to the login section */
              }
            </style>
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Sign In</button>
            ";
        // line 83
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 83), "method", [], "any", false, false, false, 83) == "POST") && ($context["error"] ?? null))) {
            // line 84
            echo "            <div class=\"error-message\" role=\"alert\">
              ";
            // line 85
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
            </div>
            ";
        }
        // line 88
        echo "            <div class=\"forgot_password\">
              <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_forgot_password");
        echo "\">Forgot Password?</a>
            </div>
          </form>
          <div class=\"register_link\">
            Don't have an account? <a href=";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_register");
        echo ">Register</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Login section end -->


<!-- Add the following JavaScript code -->

<script>
  // Hide the error message after 3 seconds
  setTimeout(function() {
    var errorMessage = document.querySelector('.error-message');
    if (errorMessage) {
      errorMessage.style.display = 'none';
    }
  }, 3000);
</script>
<!-- Link to your JavaScript files (optional) -->
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 117,  197 => 116,  193 => 115,  168 => 93,  161 => 89,  158 => 88,  152 => 85,  149 => 84,  147 => 83,  95 => 34,  90 => 32,  87 => 31,  81 => 28,  78 => 27,  76 => 26,  59 => 12,  55 => 11,  51 => 10,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/login.html");
    }
}
