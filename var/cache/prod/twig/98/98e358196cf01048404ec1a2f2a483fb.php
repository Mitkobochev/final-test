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

/* footer.html */
class __TwigTemplate_3de3fe52fe2b77ec00c78b6267a24bd2 extends Template
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
    <title>Varsity - Educational and Online Course HTML Website Template</title>
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\" type=\"image/png\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <!-- animate CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" />
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/elegant_Icon/elegent_icon.css"), "html", null, true);
        echo "\" />
    <!-- nice select CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/css/nice-select.css"), "html", null, true);
        echo "\" />
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/css/owl.carousel.css"), "html", null, true);
        echo "\" />
    <!-- magnific popup CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/magnific-popup.css"), "html", null, true);
        echo "\" />
    <!-- Countdown CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/css/Countdown.css"), "html", null, true);
        echo "\" />
    <!-- flaticon CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\" />
    <!-- aos CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.css"), "html", null, true);
        echo "\" />
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />

</head>

<body>

<!-- End LTR & RTL Button -->

<!-- footer part here -->
<footer class=\"footer_section\">
    <div class=\"container\">
        <div class=\"row justify-content-between\">
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"single_feature_footer footer_nav\">
                    <span style=\"margin-top: 20px;\">
                    <h4>ΠΑΝΕΛΛΗΝΙΕΣ</h4>
                    </span>
                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pane_logo2.png"), "html", null, true);
        echo "\" alt=\"#\" style=\"height: 40px; width: 40px; margin-left: 20px\">
                    <p>Με την καλύτερη ομάδα καθηγητών.
                        Φροντίζουμε για κάθε μαθητή.</p>
                    <div class=\"footer_contact_info\">
                        <a href=\"tel:+464145684325\" style=\"color: black; text-decoration: none;\">694 909 9872</a>
                        <a href=\"mailto:education@example.com\" style=\"color: black; text-decoration: none;\">support@panellhnies.com</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"single_feature_footer footer_nav\">
                    <h4>ΒΙΝΤΕΟΜΑΘΗΜΑΤΑ</h4>
                    <ul>
                        <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_category", ["category" => "Οικονομικά (ΑΟΘ)"]);
        echo "\">Οικονομικά</a></li>
                        <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_category", ["category" => "Οικονομικά (ΑΟΘ)"]);
        echo "\">Πληροφορική</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-2 col-sm-6\">
                <div class=\"single_feature_footer footer_nav\">
                    <h4>ΠΛΗΡΟΦΟΡΙΕΣ</h4>
                    <ul>
                        <li><a href=\"#\">Όροι Χρήσης</a></li>
                        <li><a href=\"#\">Προσωπικά Δεδομένα</a></li>
                        <li><a href=";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_us");
        echo ">Στείλτε μήνυμα</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"copyright_part\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-6 col-md-8\">
                            <p>Copyright © 2023 | Powered by Μαθήματα Πανελληνίων
                            </p>
                        </div>
                        <div class=\"col-lg-6 col-md-4\">
                            <div>
                                <a href=\"https://www.facebook.com/panellhniescom\">
                                    <img src=";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fb.jpg"), "html", null, true);
        echo " alt=\"Facebook\" style=\"width:34px; height: 34px;\">

                                </a>
                                <a href=\"https://www.youtube.com/@panellhnies\">
                                    <img src=";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/youtube_small.jpg"), "html", null, true);
        echo " alt=\"Youtube\" style=\"width:200px; height: 200px;\">
                                </a>
                                <a href=\"https://www.instagram.com/panellhnies_com/\">
                                    <img src=";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/insta.png"), "html", null, true);
        echo " alt=\"Instagram\" style=\"width:29px; height: 29px;\">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/shape_01.png"), "html", null, true);
        echo "\" alt=\"#\" class=\"footer_sharp_1\">
    <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/about_shape_02.png"), "html", null, true);
        echo "\" alt=\"#\" class=\"footer_sharp_2 custom-animation2\">
    <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/about_shape_03.png"), "html", null, true);
        echo "\" alt=\"#\" class=\"footer_sharp_3 custom-animation3\">
</footer>
<!-- footer part end -->

<!-- jquery slim -->
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- popper js -->
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<!-- bootstarp js -->
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- nice select -->
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<!-- owl carousel js -->
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!-- magnify popup js -->
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
<!-- simplyCountdown js -->
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/js/simplyCountdown.min.js"), "html", null, true);
        echo "\"></script>
<!-- counter js -->
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
<!-- aos js -->
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.js"), "html", null, true);
        echo "\"></script>
<!-- custom js -->
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 125,  248 => 123,  243 => 121,  238 => 119,  233 => 117,  228 => 115,  223 => 113,  218 => 111,  213 => 109,  208 => 107,  200 => 102,  196 => 101,  192 => 100,  180 => 91,  174 => 88,  167 => 84,  150 => 70,  137 => 60,  133 => 59,  117 => 46,  97 => 29,  92 => 27,  87 => 25,  82 => 23,  77 => 21,  72 => 19,  67 => 17,  62 => 15,  57 => 13,  52 => 11,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/footer.html");
    }
}
