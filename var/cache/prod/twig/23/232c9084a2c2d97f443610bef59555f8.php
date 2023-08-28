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

/* course-video.html */
class __TwigTemplate_ca326556608362145d9b73da5fec178e extends Template
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Πανελλήνιες - Μήνυμα</title>
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\" type=\"image/png\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <!-- animate CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\"/>
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/elegant_Icon/elegent_icon.css"), "html", null, true);
        echo "\"/>
    <!-- nice select CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/css/nice-select.css"), "html", null, true);
        echo "\"/>
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/css/owl.carousel.css"), "html", null, true);
        echo "\"/>
    <!-- magnific popup CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/magnific-popup.css"), "html", null, true);
        echo "\"/>
    <!-- Countdown CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/css/Countdown.css"), "html", null, true);
        echo "\"/>
    <!-- flaticon CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\"/>
    <!-- aos CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.css"), "html", null, true);
        echo "\"/>
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\"/>
    <style>
        <style>
        .video {
            flex-basis: 70%;
            display: flex;
            flex-direction: column;
            align-items: left;
        }

        .video-title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 60px;
        }

        .video-player {
            width: 100%;
            max-width: 700px;
        }

        .related-videos {
            position: relative;
            left: 850px;
            bottom: 510px;
            width: 400px;
            white-space: nowrap;
        }

        .related-video {
            display: flex;
            align-items: flex-start;
            background-color: #f9f9f9;
            border-radius: 4px;
            padding: 10px;
            transition: background-color 0.3s;
            height: 40px;
            color: #000000;
        }

        .related-video:hover {
            background-color: #f0f0f0;
        }

        .related-video a {
            display: flex;
            align-items: flex-start;
            text-decoration: none;
            color: #333;
        }

        .related-video-title {
            font-size: 16px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 394px;
        }

        .related-video.current {
            background-color: beige;
        }

    </style>


</head>
<body>
<header>
    ";
        // line 97
        $this->loadTemplate("header.html", "course-video.html", 97)->display($context);
        // line 98
        echo "</header>

<div class=\"container\">
    <div class=\"video\">
        <h1 class=\"video-title\" id=\"videoTitle\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "getTitle", [], "method", false, false, false, 102), "html", null, true);
        echo "</h1>
        <div class=\"video-player\">
            <iframe id=\"videoPlayer\" width=\"800\" height=\"450\" src=";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "getVideoUrl", [], "method", false, false, false, 104), "html", null, true);
        echo " frameborder=\"0\" allowfullscreen></iframe>
            <div class=\"video-description\" id=\"videoDescription\">
                <!-- Replace with your video description -->
                <p>";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "getDescription", [], "method", false, false, false, 107), "html", null, true);
        echo "</p>
            </div>
        </div>

    </div>
    <div class=\"related-videos\">
        <h2 class=\"related-videos-title\">Related Videos</h2>
        ";
        // line 114
        $context["currentIndex"] = 0;
        // line 115
        echo "        ";
        $context["currentVideoIndex"] = 0;
        // line 116
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["relatedVideos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["relatedVideo"]) {
            // line 117
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["relatedVideo"], "getId", [], "method", false, false, false, 117) == twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "getId", [], "method", false, false, false, 117))) {
                // line 118
                echo "        ";
                $context["currentVideoIndex"] = ($context["currentIndex"] ?? null);
                // line 119
                echo "        ";
            }
            // line 120
            echo "        ";
            $context["currentIndex"] = (($context["currentIndex"] ?? null) + 1);
            // line 121
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relatedVideo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "        ";
        $context["start"] = (($context["currentVideoIndex"] ?? null) - 4);
        // line 123
        echo "        ";
        $context["end"] = (($context["currentVideoIndex"] ?? null) + 5);
        // line 124
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["start"] ?? null), ($context["end"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 125
            echo "        ";
            if ((($context["i"] >= 0) && ($context["i"] < twig_length_filter($this->env, ($context["relatedVideos"] ?? null))))) {
                // line 126
                echo "        ";
                $context["relatedVideo"] = (($__internal_compile_0 = ($context["relatedVideos"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null);
                // line 127
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_lessons", ["id" => twig_get_attribute($this->env, $this->source, ($context["relatedVideo"] ?? null), "getId", [], "method", false, false, false, 127), "category" => twig_get_attribute($this->env, $this->source, ($context["relatedVideo"] ?? null), "getText", [], "method", false, false, false, 127)]), "html", null, true);
                echo "\" onclick=\"highlightVideo(event, this, '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["relatedVideo"] ?? null), "getTitle", [], "method", false, false, false, 127), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["relatedVideo"] ?? null), "getDescription", [], "method", false, false, false, 127), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["relatedVideo"] ?? null), "getVideoUrl", [], "method", false, false, false, 127), "html", null, true);
                echo "')\" class=\"related-video";
                if (($context["i"] == ($context["currentVideoIndex"] ?? null))) {
                    echo " current";
                }
                echo "\">
            <div>
                <h3 class=\"related-video-title\">
                    ";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["relatedVideo"] ?? null), "title", [], "any", false, false, false, 130), "html", null, true);
                echo "
                </h3>
            </div>
        </a>
        ";
            }
            // line 135
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "    </div>
</div>
</div>

";
        // line 140
        $this->loadTemplate("footer.html", "course-video.html", 140)->display($context);
        // line 141
        echo "
<script>

    function highlightVideo(event, element, title, description, video) {
        event.preventDefault();
        const currentVideo = document.querySelector('.related-video.current');
        if (currentVideo) {
            currentVideo.classList.remove('current');
        }
        element.classList.add('current');
        changeVideo(element.getAttribute('href'), title, description, video);
    }

    function changeVideo(videoUrl, title, description, video) {
        document.getElementById(\"videoPlayer\").src = video;
        document.getElementById(\"videoTitle\").innerText = title;
        document.getElementById(\"videoDescription\").innerHTML = `<p>\${description}</p>`;

        // Get the clicked video ID
        const clickedVideoId = videoUrl.split('=').pop();
        const relatedVideos = document.querySelectorAll('.related-video');

        // Highlight the clicked video and show related videos based on the ID
        relatedVideos.forEach((relatedVideo) => {
            relatedVideo.classList.remove('current');
            const relatedVideoId = relatedVideo.getAttribute('href').split('=').pop();
            if (relatedVideoId === clickedVideoId) {
                relatedVideo.classList.add('current');
            }
        });
    }
</script>
<!-- jquery slim -->
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- popper js -->
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<!-- bootstarp js -->
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- nice select -->
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<!-- owl carousel js -->
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!-- magnify popup js -->
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
<!-- simplyCountdown js -->
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/js/simplyCountdown.min.js"), "html", null, true);
        echo "\"></script>
<!-- counter js -->
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
<!-- aos js -->
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.js"), "html", null, true);
        echo "\"></script>
<!-- custom js -->
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "course-video.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 192,  356 => 190,  351 => 188,  346 => 186,  341 => 184,  336 => 182,  331 => 180,  326 => 178,  321 => 176,  316 => 174,  281 => 141,  279 => 140,  273 => 136,  267 => 135,  259 => 130,  242 => 127,  239 => 126,  236 => 125,  231 => 124,  228 => 123,  225 => 122,  219 => 121,  216 => 120,  213 => 119,  210 => 118,  207 => 117,  202 => 116,  199 => 115,  197 => 114,  187 => 107,  181 => 104,  176 => 102,  170 => 98,  168 => 97,  95 => 27,  90 => 25,  85 => 23,  80 => 21,  75 => 19,  70 => 17,  65 => 15,  60 => 13,  55 => 11,  50 => 9,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "course-video.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/course-video.html");
    }
}
