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

/* pricing.html */
class __TwigTemplate_6c564b109cfb5a87dd2ac932c33a62f5 extends Template
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
    <title>Pricing</title>
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:300,400,600,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
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
</head>

<body>
<header>";
        // line 33
        $this->loadTemplate("header.html", "pricing.html", 33)->display($context);
        echo "</header>
<section class=\"section\">
    <div class=\"container\">
        <h1>Διαβατήριο της Επιτυχίας</h1>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"table-default grad1\">
                    <div class=\"table__header\">
                        <h2 class=\"table__header--title\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["pricing"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[2] ?? null) : null), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "</h2>
                        <p data-price=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["pricing"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[2] ?? null) : null), "price", [], "any", false, false, false, 42), "html", null, true);
        echo "\" class=\"table__header--price\">
                            <span>€</span> ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["pricing"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[2] ?? null) : null), "price", [], "any", false, false, false, 43), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"table__content\">
                        <ul class=\"table__content--list\">
                            <li>Πρόσβαση σε 25+ βίντεο Μαθηματικών</li>
                            <li>Όλο το Κεφάλαιο 3 (Ολοκληρώματα)</li>
                            <li>10+1 Λυμμένα Θέματα (Β' / Γ' / Δ')</li>
                        </ul>
                    </div>
                    <div class=\"table__footer\">
                        <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_checkout", ["plan_id" => twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["pricing"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[2] ?? null) : null), "id", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\" class=\"button\">Επίλεξέ το</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"table-default grad3\">
                    <div class=\"table__header\">
                        <h2 class=\"table__header--title\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["pricing"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[1] ?? null) : null), "name", [], "any", false, false, false, 61), "html", null, true);
        echo "</h2>
                        <p data-price=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["pricing"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[1] ?? null) : null), "price", [], "any", false, false, false, 62), "html", null, true);
        echo "\" class=\"table__header--price\">
                            <span>€</span> ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["pricing"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[1] ?? null) : null), "price", [], "any", false, false, false, 63), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"table__content\">
                        <ul class=\"table__content--list\">
                            <li>Πρόσβαση σε 375+ βίντεο ΑΕΠΠ & ΑΟΘ</li>
                            <li>Ασκήσεις ανά κεφάλαιο ΑΕΠΠ/ΑΟΘ (.pdf)</li>
                            <li>Αναλυτικές Λύσεις όλων των ασκήσεων</li>
                            <li>Σ/Λ & Πολλαπλής κάθε κεφαλαίου (+ Λύσεις)</li>
                            <li>Livestream κάθε εβδομάδα ΑΕΠΠ/ΑΟΘ</li>
                        </ul>
                    </div>
                    <div class=\"table__footer\">
                        <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_checkout", ["plan_id" => twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["pricing"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[1] ?? null) : null), "id", [], "any", false, false, false, 76)]), "html", null, true);
        echo "\" class=\"button\">Eεκλείωσε το Pro</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"table-default grad2\">
                    <div class=\"table__header\">
                        <h2 class=\"table__header--title\">";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["pricing"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[0] ?? null) : null), "name", [], "any", false, false, false, 83), "html", null, true);
        echo "</h2>
                        <p data-price=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["pricing"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null), "price", [], "any", false, false, false, 84), "html", null, true);
        echo "\" class=\"table__header--price\">
                            <span>€</span> ";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["pricing"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[0] ?? null) : null), "price", [], "any", false, false, false, 85), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"table__content\">
                        <ul class=\"table__content--list\">
                            <li>Πρόσβαση σε 195+ βίντεο ΑΟΘ</li>
                            <li>Πρόσβαση σε 180+ βίντεο ΑΕΠΠ</li>
                            <li>Πρόσβαση σε 25+ βίντεο Μαθηματικών</li>
                            <li>100+ βίντεο με Θέματα ΑΕΠΠ/ΑΟΘ</li>
                            <li>Ασκήσεις ανά κεφάλαιο ΑΕΠΠ/ΑΟΘ (.pdf)</li>
                            <li>Αναλυτικές Λύσεις όλων των ασκήσεων ΑΕΠΠ/ΑΟΘ</li>
                            <li>Σ/Λ & Πολλαπλής κάθε κεφαλαίου (+ Λύσεις)</li>
                            <li>Livestream κάθε εβδομάδα ΑΕΠΠ/ΑΟΘ</li>
                        </ul>
                    </div>
                    <div class=\"table__footer\">
                        <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_checkout", ["plan_id" => twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["pricing"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[0] ?? null) : null), "id", [], "any", false, false, false, 101)]), "html", null, true);
        echo "\" class=\"button\">Ενεργοποίησέ το</a>
                    </div>
                </div>
            </div>
</section>
";
        // line 106
        $this->loadTemplate("footer.html", "pricing.html", 106)->display($context);
        // line 107
        echo "</body>

<style>
    body {
        font-family: \"Nunito\", sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
        background-color: #f7f7f7;
    }

    .section {
        padding: 100px 0;
        text-align: center;
    }

    .section h1 {
        font-size: 36px;
        font-weight: 600;
        margin-bottom: 40px;
        color: #333;
    }

    .table-default {
        background-color: #fff;
        text-align: center;
        padding: 30px 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
        transition: transform 0.3s ease-in-out;
    }

    .table-default:hover {
        transform: translateY(-5px);
    }

    .table__header--title {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #333;

    }

    .table__header--price {
        font-size: 36px;
        font-weight: 700;
        color: #f0f0f0;
        margin: 20px 0;
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
    }

    .table__content--list li {
        font-size: 16px;
        font-weight: 600;
        padding: 8px 0;
        color: #555;
        list-style-type: none;
        transition: opacity 0.3s ease-in-out;
    }

    .table__footer {
        margin-top: 20px;
    }

    .button {
        display: inline-block;
        width: 100%;
        font-size: 14px;
        max-width: 180px;
        padding: 10px 20px;
        transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        background-color: #e878d4;
        color: #fff;
        border-radius: 50px;
        text-decoration: none;
    }

    .button:hover {
        background-color: #b3ceeb;
        color: #333;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
    }

    .grad1 {
        background: linear-gradient(220deg, #e878d4, #b3ceeb);
    }

    .grad2 {
        background: linear-gradient(220deg, #ffafbd, #ffc3a0);
    }

    .grad3 {
        background: linear-gradient(220deg, #51a8c2, #a3dac4);
    }

    /* Header Styles */
    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 9999;
        background-color: rgba(255, 255, 255, 0.95);
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
    }

    li {
        text-decoration: none;
        font-size: 16px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .section {
            padding: 70px 0;
        }
    }

</style>
<script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- popper js -->
<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<!-- bootstarp js -->
<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- nice select -->
<script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<!-- owl carousel js -->
<script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!-- magnify popup js -->
<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
<!-- simplyCountdown js -->
<script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/js/simplyCountdown.min.js"), "html", null, true);
        echo "\"></script>
<!-- counter js -->
<script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
<!-- aos js -->
<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.js"), "html", null, true);
        echo "\"></script>
<!-- custom js -->
<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

</html>

";
    }

    public function getTemplateName()
    {
        return "pricing.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 246,  378 => 244,  373 => 242,  368 => 240,  363 => 238,  358 => 236,  353 => 234,  348 => 232,  343 => 230,  338 => 228,  215 => 107,  213 => 106,  205 => 101,  186 => 85,  182 => 84,  178 => 83,  168 => 76,  152 => 63,  148 => 62,  144 => 61,  134 => 54,  120 => 43,  116 => 42,  112 => 41,  101 => 33,  94 => 29,  89 => 27,  84 => 25,  79 => 23,  74 => 21,  69 => 19,  64 => 17,  59 => 15,  54 => 13,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pricing.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/pricing.html");
    }
}
