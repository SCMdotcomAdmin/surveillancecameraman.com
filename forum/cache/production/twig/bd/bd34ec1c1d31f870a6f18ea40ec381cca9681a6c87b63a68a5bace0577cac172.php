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

/* @phpbb_ads/includes/ad_visual_demo_notice.html */
class __TwigTemplate_b65b899220ce8d2b712cfba8d12df32fe9926a3b9ecf9dead2ea36d28233be3b extends \Twig\Template
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
        if (($context["S_PHPBB_ADS_VISUAL_DEMO"] ?? null)) {
            // line 2
            echo "\t<div class=\"rules phpbb-ads-visual-demo-btn\">
\t\t<div class=\"inner\">
\t\t\t<strong>";
            // line 4
            echo ($this->extensions['phpbb\template\twig\extension']->lang("VISUAL_DEMO") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo " <a href=\"";
            echo ($context["U_DISABLE_VISUAL_DEMO"] ?? null);
            echo "\" data-ajax=\"phpbb_ads_close_visual_demo_window\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_VISUAL_DEMO");
            echo "</a></strong>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_ads/includes/ad_visual_demo_notice.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_ads/includes/ad_visual_demo_notice.html", "");
    }
}
