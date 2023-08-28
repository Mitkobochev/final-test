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

/* index.html */
class __TwigTemplate_7684d86050b5a0250dee3d238f05c56e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>Home</title>
    <link rel=\"icon\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/img/pane_logo.png"), "html", null, true);
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
    <!-- course CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/courses.css"), "html", null, true);
        echo "\"/>
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>

    <style>
        .owl-next,
        .owl-prev {
            font-size: 0px !important;
            position: relative;
            cursor: pointer;
        }

        .owl-next::before,
        .owl-prev::before {
            content: '\\2192'; /* Unicode arrow right symbol */
            /* Replace this with the actual code for your arrow icon */
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 16px; /* Adjust the size as needed */
        }

        .owl-prev::before {
            content: '\\2190'; /* Unicode arrow left symbol */
            /* Replace this with the actual code for your left arrow icon */
            left: 0px; /* Adjust the position as needed */
        }
    </style>



</head>

";
        // line 62
        $this->loadTemplate("header.html", "index.html", 62)->display($context);
        // line 63
        echo "
<body class=\"one-page-home\">


<!-- Slider Part -->
<section class=\"banner_part owl-carousel\">
    <!-- Banner 1 -->
    <div class=\"single_banner_part bg_3\">
        <div class=\"container\">
            <div class=\"row justify-content-center align-items-center\">
                <div class=\"col-lg-8\">
                    <div class=\"banner_iner\">
                        <h2>Η περιπέτεια του Πανεπιστημίου, ξεκινάει εδώ</h2>
                        ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "session", [], "any", false, false, false, 76), "get", [0 => "user_id"], "method", false, false, false, 76)) {
            // line 77
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_profile");
            echo "\" class=\"btn_2\">Προβολή προφίλ</a>
                        ";
        } else {
            // line 79
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_register");
            echo "\" class=\"btn_2\">Εγγραφείτε σήμερα</a>
                        ";
        }
        // line 81
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner 2 -->
    <div class=\"single_banner_part bg_1\">
        <div class=\"container\">
            <div class=\"row justify-content-center align-items-center\">
                <div class=\"col-lg-8\">
                    <div class=\"banner_iner\">
                        <h2>Η ακαδημαϊκή σας επιτυχία !</h2>
                        <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_category", ["category" => "Οικονομικά (ΑΟΘ)"]);
        echo "\" class=\"btn_2\" style=\"text-transform: uppercase;\">ΔΕΙΤΕ ΤΑ ΒΙΝΤΕΟ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- slider part end -->

    <!-- Start about us -->
    <div id=\"about\" class=\"bg-white section_padding\">
      <div class=\"container\">
        <div class=\"row h-100 align-items-center\">
          <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"col-lg-6\">
            <h4 class=\"display-4\">Ταξίδι γνώσης</h4>
              <h4 class=\"display-4\">300 + βίντεο</h4>
              <h4 class=\"display-4\">Πλούσιο Περιεχόμενο</h4>
              <p class=\"lead text-muted mb-0\">Καλώς ήρθατε στην ηλεκτρονική μας γωνιά ! Εδώ ξεκινά το δικό σας ταξίδι γνώσης. Ελάτε να μάθουμε και να δώσουμε εξετάσεις μαζί. Μην χάσετε την ευκαιρία - αγοράστε σήμερα και αξιοποιήστε το υλικό σας !</p>

          </div>
          <div data-aos=\"fade-up\"
            data-aos-duration=\"1600\" class=\"col-lg-6 d-none d-lg-block\"><img src=\"img/about/about-1.png\" alt=\"\" class=\"img-fluid\"></div>
        </div>
      </div>
    </div>

    <div class=\"bg-light section_padding\">
      <div class=\"container\">
          <div class=\"row align-items-center\">
              <div data-aos=\"fade-up\"
                   data-aos-duration=\"1200\" class=\"col-lg-5 px-5 mx-auto\"><img src=\"img/about/about-3.png\" alt=\"\" class=\"img-fluid mb-4 mb-lg-0\"></div>
              <div data-aos=\"fade-up\"
                   data-aos-duration=\"1600\" class=\"col-lg-6\"><i class=\"fa fa-leaf fa-2x mb-3 text-primary\"></i>
                  <h2 class=\"font-weight-light\">Αποκλειστικά Ζωντανά Μαθήματα</h2>
                  <p class=\"font-italic text-muted mb-4\">Είμαστε οι μόνοι στην Ελλάδα που προσφέρουμε αυτή την μοναδική εμπειρία ζωντανών μαθημάτων. Γίνετε μέλος τώρα για να απολαύσετε το προνόμιο και να βρεθείτε σε ΟΛΑ τα μαθήματα!</p><a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_live_stream");
        echo "\" class=\"btn_3\">Livestreams</a>
              </div>
          </div>
        <div class=\"row align-items-center mb-5\">
          <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"col-lg-6 order-2 order-lg-1\"><i class=\"fa fa-bar-chart fa-2x mb-3 text-primary\"></i>
            <h2 class=\"font-weight-light\">Παλιά Θέματα & Ασκήσεις</h2>
            <p class=\"font-italic text-muted mb-4\">Διαθέτουμε μοναδικό υλικό, δημιουργία της εξειδικευμένης ομάδας μας, συνδυάζοντας τις δικές μας άσκησεις με δύσκολα θέματα. Η πηγή σας για ασυναγώνιστη προετοιμασία στις εξετάσεις !</p><a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_category");
        echo "\" class=\"btn_3\">Παλιά Θέματα</a>
          </div>
          <div data-aos=\"fade-up\"
            data-aos-duration=\"1600\" class=\"col-lg-5 px-5 mx-auto order-1 order-lg-2\"><img src=\"img/about/about-2.png\" alt=\"\" class=\"img-fluid mb-4 mb-lg-0\"></div>
        </div>
      </div>
    </div>
    <!-- End about us -->

    <footer>
        ";
        // line 147
        $this->loadTemplate("footer.html", "index.html", 147)->display($context);
        // line 148
        echo "
    </footer>


    <!-- jquery slim -->
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- popper js -->
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap js -->
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- nice select -->
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <!-- owl carousel js -->
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <!-- magnify popup js -->
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
    <!-- simplyCountdown js -->
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/js/simplyCountdown.min.js"), "html", null, true);
        echo "\"></script>
    <!-- counter js -->
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
    <!-- aos js -->
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.js"), "html", null, true);
        echo "\"></script>
    <!-- font awesome js -->
    <script src=\"https://kit.fontawesome.com/6ee3230338.js\"></script>
    <!-- custom js -->
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 173,  296 => 169,  291 => 167,  286 => 165,  281 => 163,  276 => 161,  271 => 159,  266 => 157,  261 => 155,  256 => 153,  249 => 148,  247 => 147,  234 => 137,  224 => 130,  185 => 94,  170 => 81,  164 => 79,  158 => 77,  156 => 76,  141 => 63,  139 => 62,  105 => 31,  100 => 29,  95 => 27,  90 => 25,  85 => 23,  80 => 21,  75 => 19,  70 => 17,  65 => 15,  60 => 13,  55 => 11,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>Home</title>
    <link rel=\"icon\" src=\"{{ asset('public/img/pane_logo.png') }}\" type=\"image/png\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\"/>
    <!-- animate CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\"/>
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/elegant_Icon/elegent_icon.css') }}\"/>
    <!-- nice select CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/niceselect/css/nice-select.css') }}\"/>
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}\"/>
    <!-- magnific popup CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/magnify_popup/magnific-popup.css') }}\"/>
    <!-- Countdown CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/countdown/css/Countdown.css') }}\"/>
    <!-- flaticon CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/flaticon.css') }}\"/>
    <!-- aos CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/aos/aos.css') }}\"/>
    <!-- course CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/courses.css') }}\"/>
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\"/>

    <style>
        .owl-next,
        .owl-prev {
            font-size: 0px !important;
            position: relative;
            cursor: pointer;
        }

        .owl-next::before,
        .owl-prev::before {
            content: '\\2192'; /* Unicode arrow right symbol */
            /* Replace this with the actual code for your arrow icon */
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 16px; /* Adjust the size as needed */
        }

        .owl-prev::before {
            content: '\\2190'; /* Unicode arrow left symbol */
            /* Replace this with the actual code for your left arrow icon */
            left: 0px; /* Adjust the position as needed */
        }
    </style>



</head>

{% include 'header.html' %}

<body class=\"one-page-home\">


<!-- Slider Part -->
<section class=\"banner_part owl-carousel\">
    <!-- Banner 1 -->
    <div class=\"single_banner_part bg_3\">
        <div class=\"container\">
            <div class=\"row justify-content-center align-items-center\">
                <div class=\"col-lg-8\">
                    <div class=\"banner_iner\">
                        <h2>Η περιπέτεια του Πανεπιστημίου, ξεκινάει εδώ</h2>
                        {% if app.session.get('user_id') %}
                        <a href=\"{{ path('app_my_profile') }}\" class=\"btn_2\">Προβολή προφίλ</a>
                        {% else %}
                        <a href=\"{{ path('app_user_register') }}\" class=\"btn_2\">Εγγραφείτε σήμερα</a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner 2 -->
    <div class=\"single_banner_part bg_1\">
        <div class=\"container\">
            <div class=\"row justify-content-center align-items-center\">
                <div class=\"col-lg-8\">
                    <div class=\"banner_iner\">
                        <h2>Η ακαδημαϊκή σας επιτυχία !</h2>
                        <a href=\"{{ path('app_video_category', {'category': 'Οικονομικά (ΑΟΘ)'}) }}\" class=\"btn_2\" style=\"text-transform: uppercase;\">ΔΕΙΤΕ ΤΑ ΒΙΝΤΕΟ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- slider part end -->

    <!-- Start about us -->
    <div id=\"about\" class=\"bg-white section_padding\">
      <div class=\"container\">
        <div class=\"row h-100 align-items-center\">
          <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"col-lg-6\">
            <h4 class=\"display-4\">Ταξίδι γνώσης</h4>
              <h4 class=\"display-4\">300 + βίντεο</h4>
              <h4 class=\"display-4\">Πλούσιο Περιεχόμενο</h4>
              <p class=\"lead text-muted mb-0\">Καλώς ήρθατε στην ηλεκτρονική μας γωνιά ! Εδώ ξεκινά το δικό σας ταξίδι γνώσης. Ελάτε να μάθουμε και να δώσουμε εξετάσεις μαζί. Μην χάσετε την ευκαιρία - αγοράστε σήμερα και αξιοποιήστε το υλικό σας !</p>

          </div>
          <div data-aos=\"fade-up\"
            data-aos-duration=\"1600\" class=\"col-lg-6 d-none d-lg-block\"><img src=\"img/about/about-1.png\" alt=\"\" class=\"img-fluid\"></div>
        </div>
      </div>
    </div>

    <div class=\"bg-light section_padding\">
      <div class=\"container\">
          <div class=\"row align-items-center\">
              <div data-aos=\"fade-up\"
                   data-aos-duration=\"1200\" class=\"col-lg-5 px-5 mx-auto\"><img src=\"img/about/about-3.png\" alt=\"\" class=\"img-fluid mb-4 mb-lg-0\"></div>
              <div data-aos=\"fade-up\"
                   data-aos-duration=\"1600\" class=\"col-lg-6\"><i class=\"fa fa-leaf fa-2x mb-3 text-primary\"></i>
                  <h2 class=\"font-weight-light\">Αποκλειστικά Ζωντανά Μαθήματα</h2>
                  <p class=\"font-italic text-muted mb-4\">Είμαστε οι μόνοι στην Ελλάδα που προσφέρουμε αυτή την μοναδική εμπειρία ζωντανών μαθημάτων. Γίνετε μέλος τώρα για να απολαύσετε το προνόμιο και να βρεθείτε σε ΟΛΑ τα μαθήματα!</p><a href=\"{{ path('app_live_stream') }}\" class=\"btn_3\">Livestreams</a>
              </div>
          </div>
        <div class=\"row align-items-center mb-5\">
          <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"col-lg-6 order-2 order-lg-1\"><i class=\"fa fa-bar-chart fa-2x mb-3 text-primary\"></i>
            <h2 class=\"font-weight-light\">Παλιά Θέματα & Ασκήσεις</h2>
            <p class=\"font-italic text-muted mb-4\">Διαθέτουμε μοναδικό υλικό, δημιουργία της εξειδικευμένης ομάδας μας, συνδυάζοντας τις δικές μας άσκησεις με δύσκολα θέματα. Η πηγή σας για ασυναγώνιστη προετοιμασία στις εξετάσεις !</p><a href=\"{{ path('app_exercise_category') }}\" class=\"btn_3\">Παλιά Θέματα</a>
          </div>
          <div data-aos=\"fade-up\"
            data-aos-duration=\"1600\" class=\"col-lg-5 px-5 mx-auto order-1 order-lg-2\"><img src=\"img/about/about-2.png\" alt=\"\" class=\"img-fluid mb-4 mb-lg-0\"></div>
        </div>
      </div>
    </div>
    <!-- End about us -->

    <footer>
        {% include 'footer.html' %}

    </footer>


    <!-- jquery slim -->
    <script src=\"{{ asset('js/jquery-3.4.1.min.js') }}\"></script>
    <!-- popper js -->
    <script src=\"{{ asset('js/popper.min.js') }}\"></script>
    <!-- bootstrap js -->
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <!-- nice select -->
    <script src=\"{{ asset('vendors/niceselect/js/jquery.nice-select.min.js') }}\"></script>
    <!-- owl carousel js -->
    <script src=\"{{ asset('vendors/owl_carousel/js/owl.carousel.min.js') }}\"></script>
    <!-- magnify popup js -->
    <script src=\"{{ asset('vendors/magnify_popup/jquery.magnific-popup.js') }}\"></script>
    <!-- simplyCountdown js -->
    <script src=\"{{ asset('vendors/countdown/js/simplyCountdown.min.js') }}\"></script>
    <!-- counter js -->
    <script src=\"{{ asset('vendors/counter/jquery.countTo.js') }}\"></script>
    <!-- aos js -->
    <script src=\"{{ asset('vendors/aos/aos.js') }}\"></script>
    <!-- font awesome js -->
    <script src=\"https://kit.fontawesome.com/6ee3230338.js\"></script>
    <!-- custom js -->
    <script src=\"{{ asset('js/custom.js') }}\"></script>

</body>

</html>
", "index.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/index.html");
    }
}
