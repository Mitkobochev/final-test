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

/* payment_success.html */
class __TwigTemplate_5b8d753a6334130af0bb5a7bc867eb6b extends Template
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
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        h1 {
            color: #32CD32;
        }

        p {
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
<h1>Payment Successful!</h1>
<p>Thank you for your payment. Your transaction has been completed successfully.</p>
<p>If you have any questions or require further assistance, please contact our support team.</p>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "payment_success.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "payment_success.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/payment_success.html");
    }
}
