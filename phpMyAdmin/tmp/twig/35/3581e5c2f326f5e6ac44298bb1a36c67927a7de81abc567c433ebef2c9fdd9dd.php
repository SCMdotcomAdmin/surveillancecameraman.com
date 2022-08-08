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

/* display/results/row_data.twig */
class __TwigTemplate_812062e4904c599f89ccafb58b09f974e45d1fad4e717702d3cdb45324128eec extends Template
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
        echo "<td data-decimals=\"";
        echo twig_escape_filter($this->env, ($context["decimals"] ?? null), "html", null, true);
        echo "\" data-type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\"";
        if ( !twig_test_empty(($context["original_length"] ?? null))) {
            echo " data-originallength=\"";
            echo twig_escape_filter($this->env, ($context["original_length"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " class=\"";
        echo twig_escape_filter($this->env, ($context["td_class"] ?? null), "html", null, true);
        echo "\">";
        // line 2
        echo ($context["value"] ?? null);
        // line 3
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "display/results/row_data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 3,  51 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "display/results/row_data.twig", "C:\\Users\\Master\\Desktop\\1uploadway\\phpMyAdmin\\templates\\display\\results\\row_data.twig");
    }
}
