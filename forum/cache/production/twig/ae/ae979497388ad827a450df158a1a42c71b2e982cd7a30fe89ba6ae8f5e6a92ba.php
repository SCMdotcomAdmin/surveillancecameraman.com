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

/* @phpbb_ads/event/overall_footer_page_body_after.html */
class __TwigTemplate_f29797c854c1d3a67af54a4c1a8db11ce260dee20819f89b97b168a9d0e3a45b extends \Twig\Template
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
        // line 3
        $context["PHPBB_ADS_STYLE"] = "margin: 10px 0; clear: both;";
        // line 4
        list($context["PHPBB_ADS_CODE"], $context["PHPBB_ADS_ID"], $context["S_PHPBB_ADS_CENTER"]) =         [($context["AD_ABOVE_FOOTER"] ?? null), ($context["AD_ABOVE_FOOTER_ID"] ?? null), ($context["AD_ABOVE_FOOTER_CENTER"] ?? null)];
        // line 5
        $this->loadTemplate("@phpbb_ads/phpbb_ads_default.html", "@phpbb_ads/event/overall_footer_page_body_after.html", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "@phpbb_ads/event/overall_footer_page_body_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_ads/event/overall_footer_page_body_after.html", "");
    }
}
