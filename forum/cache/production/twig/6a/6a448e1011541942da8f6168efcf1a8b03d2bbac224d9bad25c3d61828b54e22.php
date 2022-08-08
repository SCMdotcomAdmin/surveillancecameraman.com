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

/* acp_users_avatar.html */
class __TwigTemplate_8ee15f955d72ba2cffeb2dd1358d50887c4e4d54815f4e49e3cf0565fb5ee2be extends \Twig\Template
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
        echo "\t<form id=\"avatar_settings\" method=\"post\" action=\"";
        echo ($context["U_ACTION"] ?? null);
        echo "\" enctype=\"multipart/form-data\">

\t<fieldset>
\t\t<legend>";
        // line 4
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_USER_AVATAR");
        echo "</legend>
\t";
        // line 5
        if (($context["ERROR"] ?? null)) {
            echo "<p class=\"error\">";
            echo ($context["ERROR"] ?? null);
            echo "</p>";
        }
        // line 6
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("CURRENT_IMAGE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AVATAR_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>";
        // line 8
        echo ($context["AVATAR"] ?? null);
        echo "</dd>
\t\t\t<dd><label for=\"avatar_delete\"><input type=\"checkbox\" name=\"avatar_delete\" id=\"avatar_delete\" /> ";
        // line 9
        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_AVATAR");
        echo "</label></dd>
\t\t</dl>
\t</fieldset>
\t<fieldset>
\t\t<legend>";
        // line 13
        echo $this->extensions['phpbb\template\twig\extension']->lang("AVATAR_SELECT");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label>";
        // line 15
        echo $this->extensions['phpbb\template\twig\extension']->lang("AVATAR_TYPE");
        echo "</label></dt>
\t\t\t<dd><select name=\"avatar_driver\" id=\"avatar_driver\" data-togglable-settings=\"true\">
\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "avatar_drivers", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
            // line 18
            echo "\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["avatar_drivers"], "DRIVER", [], "any", false, false, false, 18);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, $context["avatar_drivers"], "SELECTED", [], "any", false, false, false, 18)) {
                echo " selected=\"selected\"";
            }
            echo " data-toggle-setting=\"#avatar_option_";
            echo twig_get_attribute($this->env, $this->source, $context["avatar_drivers"], "DRIVER", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["avatar_drivers"], "L_TITLE", [], "any", false, false, false, 18);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t</select></dd>
\t\t</dl>
\t\t<div id=\"avatar_options\">
\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "avatar_drivers", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
            // line 24
            echo "\t\t\t<div id=\"avatar_option_";
            echo twig_get_attribute($this->env, $this->source, $context["avatar_drivers"], "DRIVER", [], "any", false, false, false, 24);
            echo "\">
\t\t\t\t<p>";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["avatar_drivers"], "L_EXPLAIN", [], "any", false, false, false, 25);
            echo "</p>
\t\t\t\t";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["avatar_drivers"], "OUTPUT", [], "any", false, false, false, 26);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t</div>
\t</fieldset>

\t<fieldset class=\"quick\">
\t\t<input type=\"submit\" name=\"update\" value=\"";
        // line 33
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 34
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "acp_users_avatar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 34,  139 => 33,  133 => 29,  124 => 26,  120 => 25,  115 => 24,  111 => 23,  106 => 20,  89 => 18,  85 => 17,  80 => 15,  75 => 13,  68 => 9,  64 => 8,  57 => 7,  54 => 6,  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_users_avatar.html", "");
    }
}
