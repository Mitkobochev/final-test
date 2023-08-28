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

/* 404.html */
class __TwigTemplate_88c1ccc2a7e9f763b442df32756a340d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "404.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>404</title>
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


</head>

<body>
    ";
        // line 25
        $this->loadTemplate("header.html", "404.html", 25)->display($context);
        // line 26
        echo "    
    <!-- 404 page content here -->
    <section data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"error_page section_padding\" id=\"scene\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-7\">
                    <div class=\"error_page_iner\">
                        <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error.png"), "html", null, true);
        echo "\" alt=\"#\" class=\"img-fluid\">
                        <h3>Συγγνώμη, η σελίδα δεν βρέθηκε</h3>
                        <p><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\" class=\"go_back\">Επιστροφή στην αρχική σελίδα</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"icon_animation\">
            <div class=\"error_icon_1 scene\">
                <div class=\" layer\" data-depth=\"0.2\">
                    <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_1.png"), "html", null, true);
        echo "\" alt=\"#\">
                </div>
            </div>
            <div class=\"error_icon_2 scene\">
                <div class=\" layer\" data-depth=\"0.1\">
                    <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_2.png"), "html", null, true);
        echo "\" alt=\"#\">
                </div>
            </div>
            <div class=\"error_icon_3 scene\">
                <div class=\" layer\" data-depth=\"0.1\">
                    <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_3.png"), "html", null, true);
        echo "\" alt=\"#\">
                </div>
            </div>
            <div class=\"error_icon_4 scene\">
                <div class=\" layer\" data-depth=\"0.1\">
                    <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_4.png"), "html", null, true);
        echo "\" alt=\"#\">
                </div>
            </div>
            <div class=\"error_icon_5 scene\">
                <div class=\" layer\" data-depth=\"0.1\">
                    <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_5.png"), "html", null, true);
        echo "\" alt=\"#\">
                </div>
            </div>
            <div class=\"error_icon_6 scene\">
                <div class=\" layer\" data-depth=\"0.1\">
                    <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_6.png"), "html", null, true);
        echo "\" alt=\"#\">
                </div>
            </div>
            <div class=\"error_icon_7 scene\">
                <div class=\" layer\" data-depth=\"0.1\">
                    <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_7.png"), "html", null, true);
        echo "\" alt=\"#\">
                </div>
            </div>
            <div class=\"error_icon_8 scene\">
                <div class=\" layer\" data-depth=\"0.1\">
                    <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_8.png"), "html", null, true);
        echo "\" alt=\"#\">
                </div>
            </div>
            <div class=\"error_icon_9 scene\">
                <div class=\" layer\" data-depth=\"0.1\">
                    <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/error/icon_9.png"), "html", null, true);
        echo "\" alt=\"#\">
                </div>
            </div>
        </div>

    </section>
    <!-- 404 page content end -->

\t<!-- End LTR & RTL Button -->

    ";
        // line 94
        $this->loadTemplate("footer.html", "404.html", 94)->display($context);
        // line 95
        echo "
    <!-- jquery slim -->
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/js/simplyCountdown.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "404.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 106,  242 => 105,  238 => 104,  234 => 103,  230 => 102,  226 => 101,  222 => 100,  218 => 99,  214 => 98,  210 => 97,  206 => 95,  204 => 94,  191 => 84,  183 => 79,  175 => 74,  167 => 69,  159 => 64,  151 => 59,  143 => 54,  135 => 49,  127 => 44,  116 => 36,  111 => 34,  101 => 26,  99 => 25,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>404</title>
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
                        <img src=\"{{ asset('img/error.png') }}\" alt=\"#\" class=\"img-fluid\">
                        <h3>Συγγνώμη, η σελίδα δεν βρέθηκε</h3>
                        <p><a href=\"{{path('app_home_page')}}\" class=\"go_back\">Επιστροφή στην αρχική σελίδα</a></p>
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
                    <img src=\"{{ asset('img/error/icon_8.png') }}\" alt=\"#\">
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

\t<!-- End LTR & RTL Button -->

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
", "404.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/404.html");
    }
}
