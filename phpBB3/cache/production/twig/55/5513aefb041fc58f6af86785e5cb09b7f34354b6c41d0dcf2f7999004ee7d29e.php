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

/* ucp_avatar_options_local.html */
class __TwigTemplate_7f7306089e44a525e19704a7389ce948c55787311f7f3039dd1e35c10f7f2c22 extends \Twig\Template
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
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "avatar_local_cats", [], "any", false, false, false, 1))) {
            // line 2
            echo "<label for=\"category\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AVATAR_CATEGORY");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <select name=\"avatar_local_cat\" id=\"category\">
";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "avatar_local_cats", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_cats"]) {
                // line 4
                echo "<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["avatar_local_cats"], "NAME", [], "any", false, false, false, 4);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["avatar_local_cats"], "SELECTED", [], "any", false, false, false, 4)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["avatar_local_cats"], "NAME", [], "any", false, false, false, 4);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_cats'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "</select></label>
<input type=\"submit\" value=\"";
            // line 7
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
            echo "\" name=\"avatar_local_go\" class=\"button2\" />

<div id=\"gallery\" class=\"gallery\">
";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "avatar_local_row", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_row"]) {
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["avatar_local_row"], "avatar_local_col", [], "any", false, false, false, 11));
                foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_col"]) {
                    // line 12
                    echo "\t<label for=\"av-";
                    echo twig_get_attribute($this->env, $this->source, $context["avatar_local_row"], "S_ROW_COUNT", [], "any", false, false, false, 12);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["avatar_local_col"], "S_ROW_COUNT", [], "any", false, false, false, 12);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["avatar_local_col"], "AVATAR_IMAGE", [], "any", false, false, false, 12);
                    echo "\" alt=\"\" /><br />
\t<input type=\"radio\" name=\"avatar_local_file\" id=\"av-";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["avatar_local_row"], "S_ROW_COUNT", [], "any", false, false, false, 13);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["avatar_local_col"], "S_ROW_COUNT", [], "any", false, false, false, 13);
                    echo "\"
\t\t   value=\"";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["avatar_local_col"], "AVATAR_FILE", [], "any", false, false, false, 14);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["avatar_local_col"], "CHECKED", [], "any", false, false, false, 14)) {
                        echo " checked=\"checked\"";
                    }
                    echo " /></label>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "</div>
";
        } else {
            // line 19
            echo "<p><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_AVATARS");
            echo "</strong></p>
";
        }
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options_local.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 19,  112 => 17,  96 => 14,  90 => 13,  81 => 12,  77 => 11,  73 => 10,  67 => 7,  64 => 6,  49 => 4,  45 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_avatar_options_local.html", "");
    }
}
