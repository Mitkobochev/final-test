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

/* header.html */
class __TwigTemplate_f6d739d492af12fcd525b987a011ab65 extends Template
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
    <title>Welcome</title>
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/header_photo.jpg"), "html", null, true);
        echo "\" type=\"image/jpg\">
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
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9\" crossorigin=\"anonymous\">


</head>


<body>
<!-- start Preloader  -->
<div class=\"preloder_part\">
    <div class=\"spinner\">
        <div class=\"dot1\"></div>
        <div class=\"dot2\"></div>
    </div>
</div>
<!-- End Preloader  -->

<!-- header part here -->
<header class=\"header_part\">
    <div class=\"sub_header section_bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-6 col-lg-7 col-md-7\">
                    <div class=\"header_contact_info\">
                        <a href=\"tel:+6949099872\"><i class=\"icon_phone\"></i>694 909 9872</a>
                        <a href=\"mailto:admin@example.com\"><i class=\"icon_mail_alt\"></i>support@panellhnies.com</a>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-5 col-md-5\">
                    <div class=\"header_login_info\">
                        ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 59), "get", ["user_id"], "method", false, false, false, 59)) {
            // line 60
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_profile");
            echo "\">Προφίλ</a>
                        <a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Αποσύνδεση</a>
                        ";
        } else {
            // line 63
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_login");
            echo "\">Σύνδεση</a>
                        <a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_register");
            echo "\">Εγγραφή</a>
                        ";
        }
        // line 66
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"main_nav\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"header_iner d-flex justify-content-between align-items-center\">
                        <div class=\"sidebar_icon troggle_icon d-lg-none\">
                            <i class=\"icon_menu\"></i>
                        </div>
                        <div class=\"logo\">
                            <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\" style=\"padding-right: 10px;\">
                                <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pane_logo.png"), "html", null, true);
        echo "\" alt=\"#\" width=\"275\" height=\"20\">
                            </a>
                        </div>
                        <nav class=\"navbar_bar\">
                            <ul style=\"display: flex;\">
                                <li class=\"mega_menu_dropdown\">
                                    <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\" style=\"text-decoration: none; color: inherit;\">Αρχική</a>
                                </li>
                                <li class=\"mega_menu_dropdown\">
                                    <a href=\"#\" style=\"text-decoration: none; color: inherit; pointer-events: none;\">Μαθήματα βίντεο</a>
                                    <ul>
                                        <li>
                                            <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_category", ["category" => "Οικονομικά (ΑΟΘ)"]);
        echo "\" style=\"text-decoration: none; color: inherit;\">Οικονομικά (ΑΟΘ)</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_category", ["category" => "Πληροφορική (ΑΕΠΠ)"]);
        echo "\" style=\"text-decoration: none; color: inherit;\">Πληροφορική (ΑΕΠΠ)</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_category", ["category" => "Μαθηματικά"]);
        echo "\" style=\"text-decoration: none; color: inherit;\">Μαθηματικά</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class=\"mega_menu_dropdown\">
                                    <a href=\"#\"  style=\"text-decoration: none; color: inherit; pointer-events: none;\">Παλιά Θέματα</a>
                                    <ul>
                                        <li><a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_category", ["category" => "Οικονομικά (ΑΟΘ)"]);
        echo "\"  style=\"text-decoration: none; color: inherit;\">Οικονομικά (ΑΟΘ)</a></li>
                                        <li><a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_category", ["category" => "Πληροφορική (ΑΕΠΠ)"]);
        echo "\"  style=\"text-decoration: none; color: inherit;\">Πληροφορική (ΑΕΠΠ)</a></li>
                                        <li>
                                            <a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_category", ["category" => "Μαθηματικά"]);
        echo "\"  style=\"text-decoration: none; color: inherit;\">Μαθηματικά</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_category", ["category" => "Νεοελληνική Γλώσσα (+Λογοτεχνία) "]);
        echo "\"  style=\"text-decoration: none; color: inherit;\">Νεοελληνική Γλώσσα</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"mega_menu_dropdown\">
                                    <a href=";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pricing");
        echo "  style=\"text-decoration: none; color: inherit;\">Συνδρομές</a>
                                </li>
                                <li class=\"mega_menu_dropdown\">
                                    <a href=\"#\"  style=\"text-decoration: none; color: inherit; pointer-events: none;\">Επικοινωνία</a>
                                    <ul>
                                        <li><a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_us");
        echo "\"  style=\"text-decoration: none; color: inherit;\">Επικοινωνηστε μαζι μας</a></li>
                                        <li><a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_teacher");
        echo "\"  style=\"text-decoration: none; color: inherit;\">Βιογραφικά & Συνεργασίες</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class=\"navbar_btn\">
                            <a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_live_stream");
        echo "\" class=\"btn_1\">Join Livestream</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header part end -->

<!-- jquery slim -->
<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- popper js -->
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<!-- bootstarp js -->
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- nice select -->
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<!-- owl carousel js -->
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!-- magnify popup js -->
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
<!-- simplyCountdown js -->
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/js/simplyCountdown.min.js"), "html", null, true);
        echo "\"></script>
<!-- counter js -->
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
<!-- aos js -->
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.js"), "html", null, true);
        echo "\"></script>
<!-- custom js -->
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm\" crossorigin=\"anonymous\"></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 161,  313 => 159,  308 => 157,  303 => 155,  298 => 153,  293 => 151,  288 => 149,  283 => 147,  278 => 145,  273 => 143,  258 => 131,  249 => 125,  245 => 124,  237 => 119,  229 => 114,  223 => 111,  218 => 109,  214 => 108,  202 => 99,  196 => 96,  190 => 93,  181 => 87,  172 => 81,  168 => 80,  152 => 66,  147 => 64,  142 => 63,  137 => 61,  132 => 60,  130 => 59,  97 => 29,  92 => 27,  87 => 25,  82 => 23,  77 => 21,  72 => 19,  67 => 17,  62 => 15,  57 => 13,  52 => 11,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/header.html");
    }
}
