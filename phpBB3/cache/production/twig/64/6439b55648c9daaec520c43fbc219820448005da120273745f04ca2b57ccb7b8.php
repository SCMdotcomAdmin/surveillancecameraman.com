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

/* @phpbb_ads/event/memberlist_view_content_append.html */
class __TwigTemplate_abd24a8621f6595e06f6ed398d4878f2714ac830375a5fe269ecd42bf96de90b extends \Twig\Template
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
        // line 2
        $context["PHPBB_ADS_STYLE"] = "margin: 10px 0;";
        // line 3
        list($context["PHPBB_ADS_CODE"], $context["PHPBB_ADS_ID"], $context["S_PHPBB_ADS_CENTER"]) =         [($context["AD_AFTER_PROFILE"] ?? null), ($context["AD_AFTER_PROFILE_ID"] ?? null), ($context["AD_AFTER_PROFILE_CENTER"] ?? null)];
        // line 4
        $this->loadTemplate("@phpbb_ads/phpbb_ads_default.html", "@phpbb_ads/event/memberlist_view_content_append.html", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "@phpbb_ads/event/memberlist_view_content_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_ads/event/memberlist_view_content_append.html", "");
    }
}
