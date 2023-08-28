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
class __TwigTemplate_134d9822fc0e7104a9bdccba4569a5cf extends Template
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
    <title>Home</title>
    <link rel=\"icon\" href=\"public/img/pane_logo.png\" type=\"image/png\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\"/>
    <!-- animate CSS -->
    <link rel=\"stylesheet\" href=\"css/animate.css\"/>
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"vendors/elegant_Icon/elegent_icon.css\"/>
    <!-- nice select CSS -->
    <link rel=\"stylesheet\" href=\"vendors/niceselect/css/nice-select.css\"/>
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"vendors/owl_carousel/css/owl.carousel.css\"/>
    <!-- magnific popup CSS -->
    <link rel=\"stylesheet\" href=\"vendors/magnify_popup/magnific-popup.css\"/>
    <!-- Countdown CSS -->
    <link rel=\"stylesheet\" href=\"vendors/countdown/css/Countdown.css\"/>
    <!-- flaticon CSS -->
    <link rel=\"stylesheet\" href=\"css/flaticon.css\"/>
    <!-- aos CSS -->
    <link rel=\"stylesheet\" href=\"vendors/aos/aos.css\"/>
    <!-- course CSS -->
    <link rel=\"stylesheet\" href=\"css/courses.css\"/>
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"css/style.css\"/>


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
        // line 63
        $this->loadTemplate("header.html", "index.html", 63)->display($context);
        // line 64
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
        // line 77
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 77), "get", ["user_id"], "method", false, false, false, 77)) {
            // line 78
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_profile");
            echo "\" class=\"btn_2\">Προβολή προφίλ</a>
                        ";
        } else {
            // line 80
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_register");
            echo "\" class=\"btn_2\">Εγγραφείτε σήμερα</a>
                        ";
        }
        // line 82
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
        // line 95
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
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_live_stream");
        echo "\" class=\"btn_3\">Livestreams</a>
              </div>
          </div>
        <div class=\"row align-items-center mb-5\">
          <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"col-lg-6 order-2 order-lg-1\"><i class=\"fa fa-bar-chart fa-2x mb-3 text-primary\"></i>
            <h2 class=\"font-weight-light\">Παλιά Θέματα & Ασκήσεις</h2>
            <p class=\"font-italic text-muted mb-4\">Διαθέτουμε μοναδικό υλικό, δημιουργία της εξειδικευμένης ομάδας μας, συνδυάζοντας τις δικές μας άσκησεις με δύσκολα θέματα. Η πηγή σας για ασυναγώνιστη προετοιμασία στις εξετάσεις !</p><a href=\"";
        // line 138
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
        // line 148
        $this->loadTemplate("footer.html", "index.html", 148)->display($context);
        // line 149
        echo "
    </footer>

<!-- jquery slim -->
<script src=\"js/jquery-3.4.1.min.js\"></script>
<!-- popper js -->
<script src=\"js/popper.min.js\"></script>
<!-- bootstrap js -->
<script src=\"js/bootstrap.min.js\"></script>
<!-- nice select -->
<script src=\"vendors/niceselect/js/jquery.nice-select.min.js\"></script>
<!-- owl carousel js -->
<script src=\"vendors/owl_carousel/js/owl.carousel.min.js\"></script>
<!-- simplyCountdown js -->
<script src=\"vendors/countdown/js/simplyCountdown.min.js\"></script>
<!-- counter js -->
<script src=\"vendors/counter/jquery.countTo.js\"></script>
<!-- aos js -->
<script src=\"vendors/aos/aos.js\"></script>
<!-- font awesome js -->
<script src=\"https://kit.fontawesome.com/6ee3230338.js\"></script>
<!-- custom js -->
<script src=\"js/custom.js\"></script>

</body>

</html>
";
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
        return array (  211 => 149,  209 => 148,  196 => 138,  186 => 131,  147 => 95,  132 => 82,  126 => 80,  120 => 78,  118 => 77,  103 => 64,  101 => 63,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/index.html");
    }
}
