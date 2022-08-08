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

/* @phpbb_ads/includes/ad_blocker.html */
class __TwigTemplate_dd598c29e1e17ca22329cdf349c247541d04e236b85079e8ce21f517a0b3720f extends \Twig\Template
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
        if (($context["S_DISPLAY_ADBLOCKER"] ?? null)) {
            // line 2
            echo "\t<div id=\"phpbb-aJHwDeoSqLhW\" class=\"rules\" style=\"display: none; position: relative; z-index: 45;\">
\t\t<div class=\"inner\">
\t\t\t<strong>";
            // line 4
            echo ($this->extensions['phpbb\template\twig\extension']->lang("ADBLOCKER_TITLE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</strong> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ADBLOCKER_MESSAGE", (($context["S_DISPLAY_ADBLOCKER"] ?? null) * 1));
            echo "
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_ads/includes/ad_blocker.html";
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
        return new Source("", "@phpbb_ads/includes/ad_blocker.html", "");
    }
}
