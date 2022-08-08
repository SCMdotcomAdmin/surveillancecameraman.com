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

/* @vse_abbc3/abbc3_google_fonts.html */
class __TwigTemplate_8299bc3ec5da34e76b0a22365201c8588029fedced9b0075c1e5080db7fd10f0 extends \Twig\Template
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
        if (twig_test_iterable(($context["abbc3_google_fonts"] ?? null))) {
            // line 2
            echo "\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t<link href=\"https://fonts.googleapis.com/css2?family=";
            // line 4
            echo twig_replace_filter(twig_join_filter(($context["abbc3_google_fonts"] ?? null), "&family="), [" " => "+"]);
            echo "&display=swap\" rel=\"stylesheet\">
";
        }
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/abbc3_google_fonts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vse_abbc3/abbc3_google_fonts.html", "");
    }
}
