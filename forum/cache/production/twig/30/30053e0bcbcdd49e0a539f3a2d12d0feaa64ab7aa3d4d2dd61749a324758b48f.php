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

/* @phpbb_ads/event/overall_header_page_body_before.html */
class __TwigTemplate_5ed9162a7111b67ad92822790dc43bb3de5f073e2d26bdd4ab8acdbb84a59958 extends \Twig\Template
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
        $context["PHPBB_ADS_STYLE"] = "margin: 10px 0;";
        // line 2
        list($context["PHPBB_ADS_CODE"], $context["PHPBB_ADS_ID"], $context["S_PHPBB_ADS_CENTER"]) =         [($context["AD_AFTER_HEADER_NAVBAR"] ?? null), ($context["AD_AFTER_HEADER_NAVBAR_ID"] ?? null), ($context["AD_AFTER_HEADER_NAVBAR_CENTER"] ?? null)];
        // line 3
        $this->loadTemplate("@phpbb_ads/phpbb_ads_default.html", "@phpbb_ads/event/overall_header_page_body_before.html", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "@phpbb_ads/event/overall_header_page_body_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_ads/event/overall_header_page_body_before.html", "");
    }
}
