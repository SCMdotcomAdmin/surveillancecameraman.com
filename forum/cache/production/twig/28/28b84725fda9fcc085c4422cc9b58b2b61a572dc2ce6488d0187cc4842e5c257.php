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

/* settings_ads.html */
class __TwigTemplate_666fb1effe336673d0d64f9e4b34790cf24156639c5a923196acced700858ccf extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "settings_ads.html", 1)->display($context);
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("SETTINGS");
        echo "</h1>

";
        // line 7
        if (($context["S_ERROR"] ?? null)) {
            // line 8
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 10
            echo ($context["ERROR_MSG"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 13
        echo "
<form id=\"acp_addmanagement_settings\" method=\"post\" action=\"";
        // line 14
        echo ($context["U_ACTION"] ?? null);
        echo "\">
\t<fieldset>
\t\t<legend>";
        // line 16
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADBLOCKER_LEGEND");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"adblocker_message\">";
        // line 18
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ADBLOCKER_MESSAGE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADBLOCKER_MESSAGE_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<select name=\"adblocker_message\" id=\"adblocker_message\">
\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["AD_BLOCK_MODES"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ad_block_mode"]) {
            // line 22
            echo "\t\t\t\t\t\t<option value=\"";
            echo $context["ad_block_mode"];
            echo "\"";
            if (($context["ad_block_mode"] == ($context["AD_BLOCK_CONFIG"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ADBLOCKER_MODES", $context["ad_block_mode"]);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad_block_mode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t</select>
\t\t\t</dd>
\t\t</dl>
\t</fieldset>
\t<fieldset>
\t\t<legend>";
        // line 29
        echo $this->extensions['phpbb\template\twig\extension']->lang("CLICKS_VIEWS_LEGEND");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"enable_views\">";
        // line 31
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ENABLE_VIEWS") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ENABLE_VIEWS_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"enable_views\" name=\"enable_views\" value=\"1\"";
        // line 32
        if (($context["ENABLE_VIEWS"] ?? null)) {
            echo " checked";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_views\" value=\"0\"";
        // line 33
        if ( !($context["ENABLE_VIEWS"] ?? null)) {
            echo " checked";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_clicks\">";
        // line 36
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ENABLE_CLICKS") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ENABLE_CLICKS_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"enable_clicks\" name=\"enable_clicks\" value=\"1\"";
        // line 37
        if (($context["ENABLE_CLICKS"] ?? null)) {
            echo " checked";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_clicks\" value=\"0\"";
        // line 38
        if ( !($context["ENABLE_CLICKS"] ?? null)) {
            echo " checked";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t</fieldset>
\t<fieldset class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 42
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 43
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" />
\t\t";
        // line 44
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>
</form>

";
        // line 48
        $this->loadTemplate("overall_footer.html", "settings_ads.html", 48)->display($context);
    }

    public function getTemplateName()
    {
        return "settings_ads.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 48,  173 => 44,  169 => 43,  165 => 42,  154 => 38,  146 => 37,  140 => 36,  130 => 33,  122 => 32,  116 => 31,  111 => 29,  104 => 24,  89 => 22,  85 => 21,  77 => 18,  72 => 16,  67 => 14,  64 => 13,  58 => 10,  54 => 9,  51 => 8,  49 => 7,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "settings_ads.html", "");
    }
}
