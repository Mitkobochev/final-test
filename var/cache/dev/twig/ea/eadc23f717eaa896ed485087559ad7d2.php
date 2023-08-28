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

/* change_subscription.html */
class __TwigTemplate_df7840bb32ede15091556abf073de186 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "change_subscription.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title></title>
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pane_logo.png"), "html", null, true);
        echo "\" type=\"image/png\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/elegant_Icon/elegent_icon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/css/nice-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/css/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/css/Countdown.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">

    <style>
        .button-like-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            transition: background-color 0.3s ease-in-out;
        }

        .button-like-link:hover {
            background-color: #ffe0e0;
        }
    </style>
</head>

<body>
";
        // line 40
        $this->loadTemplate("header.html", "change_subscription.html", 40)->display($context);
        // line 41
        echo "
<!-- 404 page content here -->
<section data-aos=\"fade-up\"
         data-aos-duration=\"1200\" class=\"error_page section_padding\" id=\"scene\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7\">
                <div class=\"error_page_iner\">
                    <h3>Ooops...</h3>
                    <h3>Αποκλειστικό Περιεχόμενο! 🌟</h3>
                    <h3>Αναβαθμίστε σήμερα για να ξεκλειδώσετε αυτά και πολλά άλλα premium βίντεο. Το εκπαιδευτικό σας ταξίδι ξεκινάει!</h3>
                    <p><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pricing");
        echo "\" class=\"button-like-link\">Ελέγξτε την τιμολόγηση</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"icon_animation\">
        <div class=\"error_icon_1 scene\">
            <div class=\" layer\" data-depth=\"0.2\">
                <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_1.png"), "html", null, true);
        echo "\" alt=\"#\">
            </div>
        </div>
        <div class=\"error_icon_2 scene\">
            <div class=\" layer\" data-depth=\"0.1\">
                <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_2.png"), "html", null, true);
        echo "\" alt=\"#\">
            </div>
        </div>
        <div class=\"error_icon_3 scene\">
            <div class=\" layer\" data-depth=\"0.1\">
                <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_3.png"), "html", null, true);
        echo "\" alt=\"#\">
            </div>
        </div>
        <div class=\"error_icon_4 scene\">
            <div class=\" layer\" data-depth=\"0.1\">
                <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_4.png"), "html", null, true);
        echo "\" alt=\"#\">
            </div>
        </div>
        <div class=\"error_icon_5 scene\">
            <div class=\" layer\" data-depth=\"0.1\">
                <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_5.png"), "html", null, true);
        echo "\" alt=\"#\">
            </div>
        </div>
        <div class=\"error_icon_6 scene\">
            <div class=\" layer\" data-depth=\"0.1\">
                <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_6.png"), "html", null, true);
        echo "\" alt=\"#\">
            </div>
        </div>
        <div class=\"error_icon_7 scene\">
            <div class=\" layer\" data-depth=\"0.1\">
                <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_7.png"), "html", null, true);
        echo "\" alt=\"#\">
            </div>
        </div>
        <div class=\"error_icon_8 scene\">
            <div class=\" layer\" data-depth=\"0.1\">
            </div>
        </div>
        <div class=\"error_icon_9 scene\">
            <div class=\" layer\" data-depth=\"0.1\">
                <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_9.png"), "html", null, true);
        echo "\" alt=\"#\">
            </div>
        </div>
    </div>

</section>
<!-- 404 page content end -->

<!-- End LTR & RTL Button -->

";
        // line 109
        $this->loadTemplate("footer.html", "change_subscription.html", 109)->display($context);
        // line 110
        echo "
<!-- jquery slim -->
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/js/simplyCountdown.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "change_subscription.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 121,  251 => 120,  247 => 119,  243 => 118,  239 => 117,  235 => 116,  231 => 115,  227 => 114,  223 => 113,  219 => 112,  215 => 110,  213 => 109,  200 => 99,  188 => 90,  180 => 85,  172 => 80,  164 => 75,  156 => 70,  148 => 65,  140 => 60,  129 => 52,  116 => 41,  114 => 40,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title></title>
    <link rel=\"icon\" href=\"{{ asset('img/pane_logo.png') }}\" type=\"image/png\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/elegant_Icon/elegent_icon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/niceselect/css/nice-select.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/magnify_popup/magnific-popup.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/countdown/css/Countdown.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/flaticon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/aos/aos.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">

    <style>
        .button-like-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            transition: background-color 0.3s ease-in-out;
        }

        .button-like-link:hover {
            background-color: #ffe0e0;
        }
    </style>
</head>

<body>
{% include 'header.html'%}

<!-- 404 page content here -->
<section data-aos=\"fade-up\"
         data-aos-duration=\"1200\" class=\"error_page section_padding\" id=\"scene\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7\">
                <div class=\"error_page_iner\">
                    <h3>Ooops...</h3>
                    <h3>Αποκλειστικό Περιεχόμενο! 🌟</h3>
                    <h3>Αναβαθμίστε σήμερα για να ξεκλειδώσετε αυτά και πολλά άλλα premium βίντεο. Το εκπαιδευτικό σας ταξίδι ξεκινάει!</h3>
                    <p><a href=\"{{path('app_pricing')}}\" class=\"button-like-link\">Ελέγξτε την τιμολόγηση</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"icon_animation\">
        <div class=\"error_icon_1 scene\">
            <div class=\" layer\" data-depth=\"0.2\">
                <img src=\"{{ asset('img/error/icon_1.png') }}\" alt=\"#\">
            </div>
        </div>
        <div class=\"error_icon_2 scene\">
            <div class=\" layer\" data-depth=\"0.1\">
                <img src=\"{{ asset('img/error/icon_2.png') }}\" alt=\"#\">
            </div>
        </div>
        <div class=\"error_icon_3 scene\">
            <div class=\" layer\" data-depth=\"0.1\">
                <img src=\"{{ asset('img/error/icon_3.png') }}\" alt=\"#\">
            </div>
        </div>
        <div class=\"error_icon_4 scene\">
            <div class=\" layer\" data-depth=\"0.1\">
                <img src=\"{{ asset('img/error/icon_4.png') }}\" alt=\"#\">
            </div>
        </div>
        <div class=\"error_icon_5 scene\">
            <div class=\" layer\" data-depth=\"0.1\">
                <img src=\"{{ asset('img/error/icon_5.png') }}\" alt=\"#\">
            </div>
        </div>
        <div class=\"error_icon_6 scene\">
            <div class=\" layer\" data-depth=\"0.1\">
                <img src=\"{{ asset('img/error/icon_6.png') }}\" alt=\"#\">
            </div>
        </div>
        <div class=\"error_icon_7 scene\">
            <div class=\" layer\" data-depth=\"0.1\">
                <img src=\"{{ asset('img/error/icon_7.png') }}\" alt=\"#\">
            </div>
        </div>
        <div class=\"error_icon_8 scene\">
            <div class=\" layer\" data-depth=\"0.1\">
            </div>
        </div>
        <div class=\"error_icon_9 scene\">
            <div class=\" layer\" data-depth=\"0.1\">
                <img src=\"{{ asset('img/error/icon_9.png') }}\" alt=\"#\">
            </div>
        </div>
    </div>

</section>
<!-- 404 page content end -->

<!-- End LTR & RTL Button -->

{% include 'footer.html' %}

<!-- jquery slim -->
<script src=\"{{ asset('js/jquery-3.4.1.min.js') }}\"></script>
<script src=\"{{ asset('js/popper.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('vendors/niceselect/js/jquery.nice-select.min.js') }}\"></script>
<script src=\"{{ asset('vendors/owl_carousel/js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('vendors/magnify_popup/jquery.magnific-popup.js') }}\"></script>
<script src=\"{{ asset('vendors/countdown/js/simplyCountdown.min.js') }}\"></script>
<script src=\"{{ asset('vendors/counter/jquery.countTo.js') }}\"></script>
<script src=\"{{ asset('vendors/aos/aos.js') }}\"></script>
<script src=\"{{ asset('js/custom.js') }}\"></script>

</body>

</html>
", "change_subscription.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/change_subscription.html");
    }
}
