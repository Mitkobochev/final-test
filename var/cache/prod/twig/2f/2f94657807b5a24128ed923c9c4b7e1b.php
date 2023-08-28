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

/* main.css */
class __TwigTemplate_ed3fb9058be711dc98a79368ecd4ee3b extends Template
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
        echo "/* Reset some default browser styles */
body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

/* Style the header and navigation */
header {
    background-color: #333;
    color: #fff;
    padding: 10px;
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 24px;
}

.menu ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.menu li {
    margin-right: 20px;
}

.menu li:last-child {
    margin-right: 0;
}

.menu a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.menu a:hover {
    color: #ffcc00;
}

.dropdown {
    position: relative;
}

.dropdown-content {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown-content a {
    color: #333;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    transition: background-color 0.3s ease;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.user-actions a {
    color: #fff;
    text-decoration: none;
    margin-left: 10px;
}

/* Add your custom CSS styles here to make it look fancy and awesome */
/* For example, you can use background images, gradients, box shadows, etc. */

";
    }

    public function getTemplateName()
    {
        return "main.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main.css", "/Users/admin/Desktop/panellhnies/panellhnies/templates/main.css");
    }
}
