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

/* @vse_abbc3/event/acp_overall_header_head_append.html */
class __TwigTemplate_abc242d527c30c17dfe5a5afe5df89137f9741d37ae65d78a1e74026090dd8c0 extends \Twig\Template
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
        $this->loadTemplate("@vse_abbc3/abbc3_google_fonts.html", "@vse_abbc3/event/acp_overall_header_head_append.html", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/event/acp_overall_header_head_append.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vse_abbc3/event/acp_overall_header_head_append.html", "");
    }
}
