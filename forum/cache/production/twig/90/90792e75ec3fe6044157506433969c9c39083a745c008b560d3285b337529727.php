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
class __TwigTemplate_dedf0fdc84f93a9f776528928b1ae02faf40bd563a8b038d1455ce669e7c55ff extends \Twig\Template
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
