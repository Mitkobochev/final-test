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

/* session_expire.html */
class __TwigTemplate_844616c5fbf5162952c49be58e186b55 extends Template
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
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Session Error</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .error-container {
            margin-top: 100px;
            margin-left: 450px;
            padding: 30px;
            margin-bottom: 50px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            text-align: center; /* Center align the container */
        }

        .error-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .error-message {
            font-size: 18px;
            margin-bottom: 10px; /* Decreased margin-bottom */
        }

        .button-container {
            margin-top: 20px;
            text-align: center; /* Center align the button container */
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
            margin-right: 10px; /* Added margin-right for button spacing */
        }

        .button:last-child {
            margin-right: 0; /* Remove margin-right from last button */
        }

        .button:hover {
            background-color: #021691;
            color: #f0f0f0;
        }

        footer {
            margin-top: 20px; /* Added margin-top to separate footer from container */
        }
    </style>
</head>
<body>
<div class=\"error-container\">
    <h1 class=\"error-title\">Ooops...</h1>
    <p class=\"error-message\">Για να συνεχίσετε, πρέπει να κάνετε Εγγραφή ή Σύνδεση.</p>
    <div class=\"button-container\">
        <a class=\"button\" href=";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_login");
        echo ">Login</a>
        <a class=\"button\" href=";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_register");
        echo ">Register</a>
    </div>
</div>

<footer>
    ";
        // line 78
        $this->loadTemplate("footer.html", "session_expire.html", 78)->display($context);
        // line 79
        echo "</footer>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "session_expire.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 79,  122 => 78,  114 => 73,  110 => 72,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "session_expire.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/session_expire.html");
    }
}
