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

/* course-exercise.html */
class __TwigTemplate_c8d8021cf1d43da5603cb4ac51a9ebdb extends Template
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
<html lang=\"zxx\" xmlns=\"http://www.w3.org/1999/html\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>Panellhnies - Βίντεο</title>
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pane_logo.jpg"), "html", null, true);
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
    <!-- course CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/courses.css"), "html", null, true);
        echo "\" />
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />

    <style>
        .hidden {
            display: none;
        }
        .page-numbers {
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .page-numbers li {
            margin: 0 5px;
        }

        .page-numbers a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: #f2f2f2;
            color: #333;
            font-size: 18px;
            text-decoration: none;
            border-radius: 50%;
            transition: background-color 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .page-numbers a[style=\"background-color: transparent;\"] {
            background-color: transparent;
        }

        .page-numbers a:hover {
            background-color: #66c0f4;
        }

        .page-numbers .active a {
            background-color: #ff7f50;
        }
    </style>
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

";
        // line 88
        $this->loadTemplate("header.html", "course-exercise.html", 88)->display($context);
        // line 89
        echo "
<!-- courses part here -->
<div id=\"content\" class=\"site-content\" bis_skin_checked=\"1\">
    <div class=\"lp-archive-courses\" bis_skin_checked=\"1\">
        <ul class=\"learn-press-breadcrumb\">
            <li><a href=\"index.html\" bis_skin_checked=\"1\"><span>Home</span></a></li>
            <li class=\"breadcrumb-delimiter\"><i class=\"fas fa-chevron-right\"></i></li>
            <li>
                    <span>
                        ";
        // line 98
        if (($context["endpoint"] ?? null)) {
            // line 99
            echo "                            ";
            echo twig_escape_filter($this->env, ($context["endpoint"] ?? null), "html", null, true);
            echo "
                        ";
        } else {
            // line 101
            echo "                            All Videos
                        ";
        }
        // line 103
        echo "                    </span>
            </li>
        </ul>
        <div class=\"lp-content-area\" bis_skin_checked=\"1\">
            <header class=\"learn-press-courses-header\">
                <h1>
                    ";
        // line 109
        if (($context["endpoint"] ?? null)) {
            // line 110
            echo "                    ";
            echo twig_escape_filter($this->env, ($context["endpoint"] ?? null), "html", null, true);
            echo "
                    ";
        } else {
            // line 112
            echo "                    All Videos
                    ";
        }
        // line 114
        echo "                </h1>
            </header>

            <div class=\"lp-courses-bar list\" bis_skin_checked=\"1\">
                <form class=\"search-courses\">
                    <input type=\"hidden\" name=\"post_type\" value=\"lp_course\">
                    <input type=\"hidden\" name=\"taxonomy\" value=\"\">
                    <input type=\"hidden\" name=\"term_id\" value=\"\">
                    <input type=\"hidden\" name=\"term\" value=\"\">
                    <input type=\"text\" placeholder=\"Search courses...\" name=\"s\" value=\"\" id=\"search-input\">
                </form>
                <div class=\"switch-layout\" bis_skin_checked=\"1\">
                    <input type=\"radio\" name=\"lp-switch-layout-btn\" value=\"grid\" id=\"lp-switch-layout-btn-grid\" checked=\"checked\">
                    <label class=\"switch-btn grid\" title=\"Switch to grid\" for=\"lp-switch-layout-btn-grid\"></label>
                    <input type=\"radio\" name=\"lp-switch-layout-btn\" value=\"list\" id=\"lp-switch-layout-btn-list\">
                    <label class=\"switch-btn list\" title=\"Switch to list\" for=\"lp-switch-layout-btn-list\"></label>
                </div>
            </div>
            <ul class=\"learn-press-courses\" data-layout=\"grid\">
                ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_cat"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 134
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "getType", [], "method", false, false, false, 134) == "old_exercises")) {
                // line 135
                echo "                <li id=\"post-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getId", [], "method", false, false, false, 135), "html", null, true);
                echo "\"
                    class=\"post-";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getId", [], "method", false, false, false, 136), "html", null, true);
                echo " lp_course type-lp_course status-publish has-post-thumbnail hentry course ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 136) > 12)) {
                    echo "hidden";
                }
                echo "\">
                    <div class=\"course-item\" bis_skin_checked=\"1\">
                        <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                            <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                <a href=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_page", ["category" => twig_get_attribute($this->env, $this->source, $context["c"], "getCategory", [], "method", false, false, false, 140), "subcategory" => twig_get_attribute($this->env, $this->source, $context["c"], "getSubCategory", [], "method", false, false, false, 140)]), "html", null, true);
                echo "\" bis_skin_checked=\"1\">
                                    <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                            <div class=\"centered\" bis_skin_checked=\"1\">
                                                <img width=\"370\" height=\"280\"
                                                     id=\"imageElement-";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getId", [], "method", false, false, false, 145), "html", null, true);
                echo "\"
                                                     src=\"fixGoogleDriveUrl(";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getImageUrl", [], "method", false, false, false, 146), "html", null, true);
                echo ")\"
                                                     class=\"attachment-500x300 size-500x300 wp-post-image\"
                                                     alt=\"Software Development\" loading=\"lazy\">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- START .course-content -->
                        <div class=\"course-content\" bis_skin_checked=\"1\">
                            <div class=\"course-categories\" bis_skin_checked=\"1\">
                                <a href=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_page", ["subcategory" => twig_get_attribute($this->env, $this->source, $context["c"], "getSubCategory", [], "method", false, false, false, 158), "category" => twig_get_attribute($this->env, $this->source, $context["c"], "getCategory", [], "method", false, false, false, 158)]), "html", null, true);
                echo "\" rel=\"tag\"
                                   bis_skin_checked=\"1\">";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getCategory", [], "method", false, false, false, 159), "html", null, true);
                echo "</a>
                            </div>
                            <a href=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_page", ["subcategory" => twig_get_attribute($this->env, $this->source, $context["c"], "getSubCategory", [], "method", false, false, false, 161), "category" => twig_get_attribute($this->env, $this->source, $context["c"], "getCategory", [], "method", false, false, false, 161)]), "html", null, true);
                echo "\" class=\"course-permalink\" bis_skin_checked=\"1\">
                                <h3 class=\"course-title\">";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getSubcategory", [], "method", false, false, false, 162), "html", null, true);
                echo "</h3>
                            </a>
                        </div>
                        <!-- END .course-content -->
                    </div>
                    ";
            }
            // line 168
            echo "
                </li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "            </ul>

            <nav class=\"learn-press-pagination navigation pagination\">
                <ul class=\"page-numbers\">
                    <li class=\"prev\" id=\"prev-page\"><a href=\"#\" onclick=\"previousPage()\">&laquo; Previous</a></li>
                    <li class=\"next\" id=\"next-page\"><a href=\"#\" onclick=\"nextPage()\">Next &raquo;</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- courses part end -->

    ";
        // line 183
        $this->loadTemplate("footer.html", "course-exercise.html", 183)->display($context);
        // line 184
        echo "    <!-- jquery slim -->
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- popper js -->
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <!-- boots  tarp js -->
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- nice select -->
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <!-- owl carousel js -->
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <!-- magnify popup js -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
    <!-- simplyCountdown js -->
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/js/simplyCountdown.min.js"), "html", null, true);
        echo "\"></script>
    <!-- counter js -->
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
    <!-- aos js -->
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.js"), "html", null, true);
        echo "\"></script>
    <!-- courses js -->
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/courses.js"), "html", null, true);
        echo "\"></script>
    <!-- font awesome js -->
    <script src=\"https://kit.fontawesome.com/6ee3230338.js\"></script>
    <!-- custom js -->
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

    <script>
        function fixGoogleDriveUrl(url) {
            const fileId = url.match(/\\/d\\/(.+?)\\//)[1];
            const fixedUrl = `https://drive.google.com/uc?id=\${fileId}`;
            return fixedUrl;
        }
        var imageElements = document.querySelectorAll(\"[id^='imageElement-']\");
        imageElements.forEach(function(imageElement) {
            var imageUrl = imageElement.getAttribute('src');
            var fixedImageUrl = fixGoogleDriveUrl(imageUrl);
            imageElement.setAttribute('src', fixedImageUrl);
        });
        // JavaScript for pagination
        var currentPage = 1;
        var itemsPerPage = 12;
        var items = document.querySelectorAll('.learn-press-courses > li');
        var totalPages = Math.ceil(items.length / itemsPerPage);
        var paginationList = document.querySelector('.page-numbers');
        var currentLayout = 'grid';

        function showPage(page) {
            var startIndex = (page - 1) * itemsPerPage;
            var endIndex = startIndex + itemsPerPage;

            for (var i = 0; i < items.length; i++) {
                if (i >= startIndex && i < endIndex) {
                    items[i].classList.remove('hidden');
                } else {
                    items[i].classList.add('hidden');
                }
            }
        }

        function goToPage(page) {
            if (page >= 1 && page <= totalPages && page !== currentPage) {
                currentPage = page;
                showPage(currentPage);
                updatePagination();
            }
        }

        function updatePagination() {
            // Clear existing page links
            paginationList.innerHTML = '';

            // Add numbered page links
            for (var i = 1; i <= totalPages; i++) {
                var pageItem = document.createElement('li');
                if (i === currentPage) {
                    pageItem.setAttribute('class', 'active');
                }
                var pageLink = document.createElement('a');
                pageLink.setAttribute('href', '#    ');
                pageLink.innerHTML = i;
                pageLink.addEventListener('click', function(page) {
                    return function() {
                        goToPage(page);
                    };
                }(i));
                pageItem.appendChild(pageLink);
                paginationList.appendChild(pageItem);
            }
        }

        // Show the first page initially
        showPage(currentPage);
        updatePagination();

        var searchInput = document.getElementById('search-input');
        var items = document.querySelectorAll('.learn-press-courses > li');

        searchInput.addEventListener('keydown', function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                return false;
            }
        });

        searchInput.addEventListener('input', function() {
            var query = searchInput.value.toLowerCase();

            for (var i = 0; i < items.length; i++) {
                var title = items[i].querySelector('.course-title').textContent.toLowerCase();
                if (title.includes(query)) {
                    items[i].classList.remove('hidden');
                } else {
                    items[i].classList.add('hidden');
                }
            }
        });
    </script>

</body>

</html>

";
    }

    public function getTemplateName()
    {
        return "course-exercise.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 207,  393 => 203,  388 => 201,  383 => 199,  378 => 197,  373 => 195,  368 => 193,  363 => 191,  358 => 189,  353 => 187,  348 => 185,  345 => 184,  343 => 183,  329 => 171,  313 => 168,  304 => 162,  300 => 161,  295 => 159,  291 => 158,  276 => 146,  272 => 145,  264 => 140,  253 => 136,  248 => 135,  245 => 134,  228 => 133,  207 => 114,  203 => 112,  197 => 110,  195 => 109,  187 => 103,  183 => 101,  177 => 99,  175 => 98,  164 => 89,  162 => 88,  102 => 31,  97 => 29,  92 => 27,  87 => 25,  82 => 23,  77 => 21,  72 => 19,  67 => 17,  62 => 15,  57 => 13,  52 => 11,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "course-exercise.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/course-exercise.html");
    }
}
