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

/* @phpbb_ads/event/viewtopic_body_postrow_post_after.html */
class __TwigTemplate_bb98f2db35f35a31f20ef9ef96569c061411e070c0b2b615c83ec2249c373053 extends \Twig\Template
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
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "postrow", [], "any", false, false, false, 2)) > 1) && twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_FIRST_ROW", [], "any", false, false, false, 2))) {
            // line 3
            echo "\t";
            $context["PHPBB_ADS_STYLE"] = "margin: 10px 0;";
            // line 4
            echo "\t";
            list($context["PHPBB_ADS_CODE"], $context["PHPBB_ADS_ID"], $context["S_PHPBB_ADS_CENTER"]) =             [($context["AD_AFTER_FIRST_POST"] ?? null), ($context["AD_AFTER_FIRST_POST_ID"] ?? null), ($context["AD_AFTER_FIRST_POST_CENTER"] ?? null)];
            // line 5
            echo "\t";
            $this->loadTemplate("@phpbb_ads/phpbb_ads_default.html", "@phpbb_ads/event/viewtopic_body_postrow_post_after.html", 5)->display($context);
        }
        // line 7
        echo "
";
        // line 8
        if ( !twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_FIRST_ROW", [], "any", false, false, false, 8)) {
            // line 9
            echo "\t";
            $context["PHPBB_ADS_STYLE"] = "margin: 10px 0;";
            // line 10
            echo "\t";
            list($context["PHPBB_ADS_CODE"], $context["PHPBB_ADS_ID"], $context["S_PHPBB_ADS_CENTER"]) =             [($context["AD_AFTER_NOT_FIRST_POST"] ?? null), ($context["AD_AFTER_NOT_FIRST_POST_ID"] ?? null), ($context["AD_AFTER_NOT_FIRST_POST_CENTER"] ?? null)];
            // line 11
            echo "\t";
            $this->loadTemplate("@phpbb_ads/phpbb_ads_default.html", "@phpbb_ads/event/viewtopic_body_postrow_post_after.html", 11)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_ads/event/viewtopic_body_postrow_post_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  57 => 10,  54 => 9,  52 => 8,  49 => 7,  45 => 5,  42 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_ads/event/viewtopic_body_postrow_post_after.html", "");
    }
}
