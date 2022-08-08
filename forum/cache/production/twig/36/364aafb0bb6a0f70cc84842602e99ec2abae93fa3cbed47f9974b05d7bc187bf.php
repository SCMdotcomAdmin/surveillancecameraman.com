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

/* @phpbb_ads/event/overall_footer_body_after.html */
class __TwigTemplate_4f6fcd92592582c6ac120c3550d38928eec8076da19d7d30b5e7d3d6233b47e4 extends \Twig\Template
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
        if ((($context["AD_POP_UP"] ?? null) && ($context["AD_POP_UP_ID"] ?? null))) {
            // line 2
            echo "\t";
            $context["PHPBB_ADS_STYLE"] = "";
            // line 3
            echo "\t";
            list($context["PHPBB_ADS_CODE"], $context["PHPBB_ADS_ID"], $context["S_PHPBB_ADS_CENTER"]) =             [($context["AD_POP_UP"] ?? null), ($context["AD_POP_UP_ID"] ?? null), ($context["AD_POP_UP_CENTER"] ?? null)];
            // line 4
            echo "\t";
            $this->loadTemplate("@phpbb_ads/includes/phpbb_ads_pop_up.html", "@phpbb_ads/event/overall_footer_body_after.html", 4)->display($context);
        }
        // line 6
        echo "
";
        // line 7
        if ((($context["AD_SLIDE_UP"] ?? null) && ($context["AD_SLIDE_UP_ID"] ?? null))) {
            // line 8
            echo "\t";
            $context["PHPBB_ADS_STYLE"] = "";
            // line 9
            echo "\t";
            list($context["PHPBB_ADS_CODE"], $context["PHPBB_ADS_ID"], $context["S_PHPBB_ADS_CENTER"]) =             [($context["AD_SLIDE_UP"] ?? null), ($context["AD_SLIDE_UP_ID"] ?? null), ($context["AD_SLIDE_UP_CENTER"] ?? null)];
            // line 10
            echo "\t";
            $this->loadTemplate("@phpbb_ads/includes/phpbb_ads_slide_up.html", "@phpbb_ads/event/overall_footer_body_after.html", 10)->display($context);
        }
        // line 12
        echo "
";
        // line 13
        if (($context["S_PHPBB_ADS_VISUAL_DEMO"] ?? null)) {
            // line 14
            echo "<script>
\tphpbb.addAjaxCallback('phpbb_ads_close_visual_demo_window', function(res) {
\t\tif (res.success) {
\t\t\twindow.close();
\t\t} else {
\t\t\tphpbb.alert('";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("GENERAL_ERROR"), "js");
            echo "', '";
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_VISUAL_DEMO_ERROR"), "js");
            echo "')
\t\t}
\t});
</script>
";
        }
        // line 24
        echo "
";
        // line 25
        if (($context["S_DISPLAY_ADBLOCKER"] ?? null)) {
            // line 26
            echo "<script>
\tjustDetectAdblock.detectAnyAdblocker().then(function(detected) {
\t\tif (detected) {
\t\t\tdocument.getElementById('phpbb-aJHwDeoSqLhW').style.display='block';
\t\t\t";
            // line 30
            if ((($context["S_DISPLAY_ADBLOCKER"] ?? null) == "2")) {
                echo "document.getElementById('darkenwrapper').style.display='block';";
            }
            // line 31
            echo "\t\t}
\t});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_ads/event/overall_footer_body_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  97 => 30,  91 => 26,  89 => 25,  86 => 24,  76 => 19,  69 => 14,  67 => 13,  64 => 12,  60 => 10,  57 => 9,  54 => 8,  52 => 7,  49 => 6,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_ads/event/overall_footer_body_after.html", "");
    }
}
