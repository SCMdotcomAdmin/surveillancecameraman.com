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

/* acp_avatar_options_local.html */
class __TwigTemplate_8666a4246254c8c743ef7b1e2b3e9ef1b0607b0cf923ccc9b4ccd88c912c3f31 extends \Twig\Template
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
        echo "<dl>
\t<dt><label for=\"category\">";
        // line 2
        echo $this->extensions['phpbb\template\twig\extension']->lang("AVATAR_CATEGORY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd><select name=\"avatar_local_cat\" id=\"category\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "avatar_local_cats", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_cats"]) {
            // line 5
            echo "\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["avatar_local_cats"], "NAME", [], "any", false, false, false, 5);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, $context["avatar_local_cats"], "SELECTED", [], "any", false, false, false, 5)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["avatar_local_cats"], "NAME", [], "any", false, false, false, 5);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_cats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t</select>&nbsp;<input type=\"submit\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
        echo "\" name=\"avatar_local_go\" class=\"button2\" /></dd>
</dl>
\t";
        // line 9
        if (($context["AVATAR_LOCAL_SHOW"] ?? null)) {
            // line 10
            echo "\t<ul id=\"gallery\">
\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "avatar_local_row", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_row"]) {
                // line 12
                echo "\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["avatar_local_row"], "avatar_local_col", [], "any", false, false, false, 12));
                foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_col"]) {
                    // line 13
                    echo "\t\t<li>
\t\t\t<label for=\"av-";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["avatar_local_row"], "S_ROW_COUNT", [], "any", false, false, false, 14);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["avatar_local_col"], "S_ROW_COUNT", [], "any", false, false, false, 14);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["avatar_local_col"], "AVATAR_IMAGE", [], "any", false, false, false, 14);
                    echo "\" alt=\"\" /><br />
\t\t\t<input type=\"radio\" name=\"avatar_local_file\" id=\"av-";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["avatar_local_row"], "S_ROW_COUNT", [], "any", false, false, false, 15);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["avatar_local_col"], "S_ROW_COUNT", [], "any", false, false, false, 15);
                    echo "\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["avatar_local_col"], "AVATAR_FILE", [], "any", false, false, false, 15);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["avatar_local_col"], "CHECKED", [], "any", false, false, false, 15)) {
                        echo "checked=\"checked\"";
                    }
                    echo " /></label>
\t\t</li>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t</ul>
\t";
        }
    }

    public function getTemplateName()
    {
        return "acp_avatar_options_local.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 19,  113 => 18,  96 => 15,  88 => 14,  85 => 13,  80 => 12,  76 => 11,  73 => 10,  71 => 9,  65 => 7,  50 => 5,  46 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_avatar_options_local.html", "");
    }
}
