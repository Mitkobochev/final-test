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

/* live-class.html */
class __TwigTemplate_49f2d9bd1a2f972d5993d91eb949575c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "live-class.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>Streams</title>
    <link rel=\"icon\" href=\"";
        // line 9
        echo "img/header_photo.jpg";
        echo "\" type=\"image/jpg\">
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
    <!-- meeting CSS -->
    <link rel=\"stylesheet\" href=\"css/meeting.css\"/>
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"style.css\"/>
</head>

<body>
    ";
        // line 35
        $this->loadTemplate("header.html", "live-class.html", 35)->display($context);
        // line 36
        echo "    <!-- breadcrumb part -->
    <section class=\"breadcrumb_part blog_grid_bg\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6 \">
                    <div class=\"breadcrumb_iner\">
                        <h2>Live Class</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end -->
    
    <!-- live class part here -->
    <div id=\"content\" class=\"site-content padding_bottom\" bis_skin_checked=\"1\">
        <div class=\"content-area container\" bis_skin_checked=\"1\">
            <main id=\"main\" class=\"site-main\" role=\"main\">
                <div class=\"vczapi-wrap dpn-zvc-single-content-wrapper dpn-zvc-single-content-wrapper-83\" id=\"dpn-zvc-single-content-wrapper-83\" bis_skin_checked=\"1\">
                    <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"vczapi-col-8\" bis_skin_checked=\"1\">
                        <div class=\"deepn-zvc-single-featured-img\" bis_skin_checked=\"1\">
                            <img width=\"1000\" height=\"613\" src=\"img/meeting.jpg\" class=\"attachment-post-thumbnail size-post-thumbnail wp-post-image\" alt=\"\" loading=\"lazy\"></div>
                            <div class=\"deepn-zvc-single-description\" bis_skin_checked=\"1\">
                                <p>
                                   ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["streamData"]) || array_key_exists("streamData", $context) ? $context["streamData"] : (function () { throw new RuntimeError('Variable "streamData" does not exist.', 61, $this->source); })()), "description", [], "any", false, false, false, 61), "html", null, true);
        echo "
                                </p>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1600\" class=\"vczapi-col-4\" bis_skin_checked=\"1\">
                            <div class=\"dpn-zvc-sidebar-wrapper\" bis_skin_checked=\"1\">
                                <div class=\"dpn-zvc-sidebar-box\" bis_skin_checked=\"1\">
                                    <div class=\"dpn-zvc-timer\" bis_skin_checked=\"1\">
                                        <div class=\"countdown\" id=\"timer\">
                                            <div class=\"countdown\">
                                                <div class=\"dpn-zvc-timer-cell\" bis_skin_checked=\"1\">
                                                    <div class=\"time\" id=\"days\" data-aos=\"fade-up\">--</div>
                                                    <div class=\"label\"></div>
                                                </div>
                                                <div class=\"dpn-zvc-timer-cell\" bis_skin_checked=\"1\">
                                                    <div class=\"time\" id=\"hours\" data-aos=\"fade-up\">--</div>
                                                    <div class=\"label\"></div>
                                                </div>
                                                <div class=\"dpn-zvc-timer-cell\" bis_skin_checked=\"1\">
                                                    <div class=\"time\" id=\"minutes\" data-aos=\"fade-up\">--</div>
                                                    <div class=\"label\"></div>
                                                </div>
                                                <div class=\"dpn-zvc-timer-cell\" bis_skin_checked=\"1\">
                                                    <div class=\"time\" id=\"seconds\" data-aos=\"fade-up\">--</div>
                                                    <div class=\"label\"></div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <div class=\"dpn-zvc-sidebar-box\" bis_skin_checked=\"1\">
                                <div class=\"dpn-zvc-sidebar-tile\" bis_skin_checked=\"1\">
                                    <h3>Details</h3>
                                </div>
                                <div class=\"dpn-zvc-sidebar-content\" bis_skin_checked=\"1\">
                                    <div class=\"dpn-zvc-sidebar-content-list vczapi-hosted-by-topic-wrap\" bis_skin_checked=\"1\">
                                        <span><strong>Topic:</strong></span> <span>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["streamData"]) || array_key_exists("streamData", $context) ? $context["streamData"] : (function () { throw new RuntimeError('Variable "streamData" does not exist.', 100, $this->source); })()), "topic", [], "any", false, false, false, 100), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"dpn-zvc-sidebar-content-list vczapi-hosted-by-start-time-wrap\" bis_skin_checked=\"1\">
                                        <span><strong>Start:</strong></span>
                                        <span class=\"sidebar-start-time\">";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["streamData"]) || array_key_exists("streamData", $context) ? $context["streamData"] : (function () { throw new RuntimeError('Variable "streamData" does not exist.', 104, $this->source); })()), "startTime", [], "any", false, false, false, 104), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"dpn-zvc-sidebar-content-list vczapi-duration-wrap\" bis_skin_checked=\"1\">
                                        <span><strong>Duration:</strong></span>
                                        <span>";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["streamData"]) || array_key_exists("streamData", $context) ? $context["streamData"] : (function () { throw new RuntimeError('Variable "streamData" does not exist.', 108, $this->source); })()), "hours", [], "any", false, false, false, 108), "html", null, true);
        echo " hour ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["streamData"]) || array_key_exists("streamData", $context) ? $context["streamData"] : (function () { throw new RuntimeError('Variable "streamData" does not exist.', 108, $this->source); })()), "minutes", [], "any", false, false, false, 108), "html", null, true);
        echo " minutes</span>
                                    </div>
                                </div>
                                <div class=\"dpn-zvc-sidebar-box\" bis_skin_checked=\"1\">
                                    <div class=\"join-links\" bis_skin_checked=\"1\">
                                        <a target=\"_blank\" href=\"";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["streamData"]) || array_key_exists("streamData", $context) ? $context["streamData"] : (function () { throw new RuntimeError('Variable "streamData" does not exist.', 113, $this->source); })()), "streamLink", [], "any", false, false, false, 113), "html", null, true);
        echo "\" class=\"btn btn-join-link btn-join-via-app\" bis_skin_checked=\"1\">Join Meeting</a>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                </div>
            </main>
        </div>
    </div>
    <!-- live class part end -->

\t<!-- End LTR & RTL Button -->
\t";
        // line 127
        $this->loadTemplate("footer.html", "live-class.html", 127)->display($context);
        // line 128
        echo "
    <script>
        // Assuming streamData.startTime is in the format 'YYYY-MM-DD HH:mm:ss'
        var startTime = new Date(\"";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["streamData"]) || array_key_exists("streamData", $context) ? $context["streamData"] : (function () { throw new RuntimeError('Variable "streamData" does not exist.', 131, $this->source); })()), "startTime", [], "any", false, false, false, 131), "html", null, true);
        echo "\");
        var countdownOptions = {
            year: startTime.getFullYear(),
            month: startTime.getMonth(),
            day: startTime.getDate(),
            hours: startTime.getHours(),
            minutes: startTime.getMinutes(),
            seconds: startTime.getSeconds(),
            enableUtc: false  // Change to true if your startTime is in UTC
        };


        function updateCountdown() {
            var now = new Date();
            var timeDifference = startTime - now;

            if (timeDifference > 0) {
                var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                document.getElementById('days').textContent = days;
                document.getElementById('hours').textContent = hours;
                document.getElementById('minutes').textContent = minutes;
                document.getElementById('seconds').textContent = seconds;
            }
        }

    </script>


    <!-- jquery slim -->
    <script src=\"js/jquery-3.4.1.min.js\"></script>
    <!-- popper js -->
    <script src=\"js/popper.min.js\"></script>
    <!-- bootstarp js -->
    <script src=\"js/bootstrap.min.js\"></script>
    <!-- nice select -->
    <script src=\"vendors/niceselect/js/jquery.nice-select.min.js\"></script>
    <!-- owl carousel js -->
    <script src=\"vendors/owl_carousel/js/owl.carousel.min.js\"></script>
    <!-- magnify popup js -->
    <script src=\"vendors/magnify_popup/jquery.magnific-popup.js\"></script>
    <!-- simplyCountdown js -->
    <script src=\"vendors/countdown/js/simplyCountdown.min.js\"></script>
    <!-- counter js -->
    <script src=\"vendors/counter/jquery.countTo.js\"></script> 
    <!-- aos js -->
    <script src=\"vendors/aos/aos.js\"></script>
    <!-- custom js -->
    <script src=\"js/custom.js\"></script>
</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "live-class.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 131,  193 => 128,  191 => 127,  174 => 113,  164 => 108,  157 => 104,  150 => 100,  108 => 61,  81 => 36,  79 => 35,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>Streams</title>
    <link rel=\"icon\" href=\"{{ ('img/header_photo.jpg') }}\" type=\"image/jpg\">
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
    <!-- meeting CSS -->
    <link rel=\"stylesheet\" href=\"css/meeting.css\"/>
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"style.css\"/>
</head>

<body>
    {%include 'header.html'%}
    <!-- breadcrumb part -->
    <section class=\"breadcrumb_part blog_grid_bg\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6 \">
                    <div class=\"breadcrumb_iner\">
                        <h2>Live Class</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end -->
    
    <!-- live class part here -->
    <div id=\"content\" class=\"site-content padding_bottom\" bis_skin_checked=\"1\">
        <div class=\"content-area container\" bis_skin_checked=\"1\">
            <main id=\"main\" class=\"site-main\" role=\"main\">
                <div class=\"vczapi-wrap dpn-zvc-single-content-wrapper dpn-zvc-single-content-wrapper-83\" id=\"dpn-zvc-single-content-wrapper-83\" bis_skin_checked=\"1\">
                    <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"vczapi-col-8\" bis_skin_checked=\"1\">
                        <div class=\"deepn-zvc-single-featured-img\" bis_skin_checked=\"1\">
                            <img width=\"1000\" height=\"613\" src=\"img/meeting.jpg\" class=\"attachment-post-thumbnail size-post-thumbnail wp-post-image\" alt=\"\" loading=\"lazy\"></div>
                            <div class=\"deepn-zvc-single-description\" bis_skin_checked=\"1\">
                                <p>
                                   {{streamData.description}}
                                </p>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1600\" class=\"vczapi-col-4\" bis_skin_checked=\"1\">
                            <div class=\"dpn-zvc-sidebar-wrapper\" bis_skin_checked=\"1\">
                                <div class=\"dpn-zvc-sidebar-box\" bis_skin_checked=\"1\">
                                    <div class=\"dpn-zvc-timer\" bis_skin_checked=\"1\">
                                        <div class=\"countdown\" id=\"timer\">
                                            <div class=\"countdown\">
                                                <div class=\"dpn-zvc-timer-cell\" bis_skin_checked=\"1\">
                                                    <div class=\"time\" id=\"days\" data-aos=\"fade-up\">--</div>
                                                    <div class=\"label\"></div>
                                                </div>
                                                <div class=\"dpn-zvc-timer-cell\" bis_skin_checked=\"1\">
                                                    <div class=\"time\" id=\"hours\" data-aos=\"fade-up\">--</div>
                                                    <div class=\"label\"></div>
                                                </div>
                                                <div class=\"dpn-zvc-timer-cell\" bis_skin_checked=\"1\">
                                                    <div class=\"time\" id=\"minutes\" data-aos=\"fade-up\">--</div>
                                                    <div class=\"label\"></div>
                                                </div>
                                                <div class=\"dpn-zvc-timer-cell\" bis_skin_checked=\"1\">
                                                    <div class=\"time\" id=\"seconds\" data-aos=\"fade-up\">--</div>
                                                    <div class=\"label\"></div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <div class=\"dpn-zvc-sidebar-box\" bis_skin_checked=\"1\">
                                <div class=\"dpn-zvc-sidebar-tile\" bis_skin_checked=\"1\">
                                    <h3>Details</h3>
                                </div>
                                <div class=\"dpn-zvc-sidebar-content\" bis_skin_checked=\"1\">
                                    <div class=\"dpn-zvc-sidebar-content-list vczapi-hosted-by-topic-wrap\" bis_skin_checked=\"1\">
                                        <span><strong>Topic:</strong></span> <span>{{streamData.topic}}</span>
                                    </div>
                                    <div class=\"dpn-zvc-sidebar-content-list vczapi-hosted-by-start-time-wrap\" bis_skin_checked=\"1\">
                                        <span><strong>Start:</strong></span>
                                        <span class=\"sidebar-start-time\">{{streamData.startTime}}</span>
                                    </div>
                                    <div class=\"dpn-zvc-sidebar-content-list vczapi-duration-wrap\" bis_skin_checked=\"1\">
                                        <span><strong>Duration:</strong></span>
                                        <span>{{streamData.hours}} hour {{streamData.minutes}} minutes</span>
                                    </div>
                                </div>
                                <div class=\"dpn-zvc-sidebar-box\" bis_skin_checked=\"1\">
                                    <div class=\"join-links\" bis_skin_checked=\"1\">
                                        <a target=\"_blank\" href=\"{{streamData.streamLink}}\" class=\"btn btn-join-link btn-join-via-app\" bis_skin_checked=\"1\">Join Meeting</a>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                </div>
            </main>
        </div>
    </div>
    <!-- live class part end -->

\t<!-- End LTR & RTL Button -->
\t{% include 'footer.html' %}

    <script>
        // Assuming streamData.startTime is in the format 'YYYY-MM-DD HH:mm:ss'
        var startTime = new Date(\"{{ streamData.startTime }}\");
        var countdownOptions = {
            year: startTime.getFullYear(),
            month: startTime.getMonth(),
            day: startTime.getDate(),
            hours: startTime.getHours(),
            minutes: startTime.getMinutes(),
            seconds: startTime.getSeconds(),
            enableUtc: false  // Change to true if your startTime is in UTC
        };


        function updateCountdown() {
            var now = new Date();
            var timeDifference = startTime - now;

            if (timeDifference > 0) {
                var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                document.getElementById('days').textContent = days;
                document.getElementById('hours').textContent = hours;
                document.getElementById('minutes').textContent = minutes;
                document.getElementById('seconds').textContent = seconds;
            }
        }

    </script>


    <!-- jquery slim -->
    <script src=\"js/jquery-3.4.1.min.js\"></script>
    <!-- popper js -->
    <script src=\"js/popper.min.js\"></script>
    <!-- bootstarp js -->
    <script src=\"js/bootstrap.min.js\"></script>
    <!-- nice select -->
    <script src=\"vendors/niceselect/js/jquery.nice-select.min.js\"></script>
    <!-- owl carousel js -->
    <script src=\"vendors/owl_carousel/js/owl.carousel.min.js\"></script>
    <!-- magnify popup js -->
    <script src=\"vendors/magnify_popup/jquery.magnific-popup.js\"></script>
    <!-- simplyCountdown js -->
    <script src=\"vendors/countdown/js/simplyCountdown.min.js\"></script>
    <!-- counter js -->
    <script src=\"vendors/counter/jquery.countTo.js\"></script> 
    <!-- aos js -->
    <script src=\"vendors/aos/aos.js\"></script>
    <!-- custom js -->
    <script src=\"js/custom.js\"></script>
</body>

</html>
", "live-class.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/live-class.html");
    }
}
