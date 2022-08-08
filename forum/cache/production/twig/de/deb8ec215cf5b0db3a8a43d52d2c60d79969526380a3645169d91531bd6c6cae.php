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

/* @phpbb_ads/event/overall_footer_copyright_prepend.html */
class __TwigTemplate_709ca244e2eca40c0a7c48a013025db5cec3b7fb5824384d4add22b6d8560a93 extends \Twig\Template
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
        list($context["PHPBB_ADS_CODE"], $context["PHPBB_ADS_ID"], $context["S_PHPBB_ADS_CENTER"]) =         [($context["AD_AFTER_FOOTER_NAVBAR"] ?? null), ($context["AD_AFTER_FOOTER_NAVBAR_ID"] ?? null), ($context["AD_AFTER_FOOTER_NAVBAR_CENTER"] ?? null)];
        // line 3
        $this->loadTemplate("@phpbb_ads/phpbb_ads_default.html", "@phpbb_ads/event/overall_footer_copyright_prepend.html", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "@phpbb_ads/event/overall_footer_copyright_prepend.html";
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
        return new Source("", "@phpbb_ads/event/overall_footer_copyright_prepend.html", "");
    }
}
