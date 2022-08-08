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

/* @phpbb_ads/phpbb_ads_default.html */
class __TwigTemplate_9a5b8429532c7862c1a78265dddc2c3b2ef117a09e5d0d1381e9bffbf5bf71f9 extends \Twig\Template
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
        if (($context["PHPBB_ADS_CODE"] ?? null)) {
            // line 2
            echo "\t<div";
            if (($context["S_PHPBB_ADS_CENTER"] ?? null)) {
                echo " class=\"phpbb-ads-center\"";
            }
            echo " style=\"";
            echo ($context["PHPBB_ADS_STYLE"] ?? null);
            echo "\" data-phpbb-ads-id=\"";
            echo twig_escape_filter($this->env, ($context["PHPBB_ADS_ID"] ?? null), "html_attr");
            echo "\">
\t\t";
            // line 3
            echo ($context["PHPBB_ADS_CODE"] ?? null);
            echo "
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_ads/phpbb_ads_default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_ads/phpbb_ads_default.html", "");
    }
}
