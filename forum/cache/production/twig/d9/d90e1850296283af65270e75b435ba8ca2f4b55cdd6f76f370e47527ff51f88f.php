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

/* @phpbb_ads/includes/ad_views.html */
class __TwigTemplate_ae706d756bf8dd83d8b519c996ab8c2921d43ae522ad505b9f174ba237032512 extends \Twig\Template
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
        if (($context["S_INCREMENT_VIEWS"] ?? null)) {
            // line 2
            echo "\t<script>
\t\t(function(\$) {
\t\t\t'use strict';

\t\t\t\$(window).on('load', function() {
\t\t\t\t\$.get('";
            // line 7
            echo twig_escape_filter($this->env, ($context["U_PHPBB_ADS_VIEWS"] ?? null), "js");
            echo "');
\t\t\t});
\t\t})(jQuery);
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_ads/includes/ad_views.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_ads/includes/ad_views.html", "");
    }
}
