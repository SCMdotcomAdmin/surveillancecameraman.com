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

/* @gfksx_thanksforposts/memberlist_view_thanks.html */
class __TwigTemplate_9ada3faf7de79000318f2a7b6cc50c02dbd4df73aa8f447b286e93129851b8d9 extends \Twig\Template
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
        if ((($context["THANKS_PROFILELIST_VIEW"] ?? null) && (($context["POSTER_GIVE_COUNT"] ?? null) || ($context["POSTER_RECEIVE_COUNT"] ?? null)))) {
            // line 2
            echo "<div class=\"panel bg1\">
\t<div class=\"inner\">
\t<h3>";
            // line 4
            echo $this->extensions['phpbb\template\twig\extension']->lang("GRATITUDES");
            echo "</h3>
\t\t";
            // line 5
            if (($context["POSTER_GIVE_COUNT"] ?? null)) {
                // line 6
                echo "\t\t<div class=\"column1\">
\t\t\t";
                // line 7
                if (($context["S_MOD_THANKS"] ?? null)) {
                    // line 8
                    echo "\t\t\t<ul class=\"post-buttons\" style=\"float:left\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                    // line 10
                    echo ($context["U_CLEAR_LIST_THANKS_GIVE"] ?? null);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CLEAR_LIST_THANKS");
                    echo "\" class=\"button button-icon-only\" style=\"float:left\">
\t\t\t\t\t\t<i class=\"icon fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 11
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CLEAR_LIST_THANKS");
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
                }
                // line 16
                echo "\t\t\t<dl>
\t\t\t\t<dt>";
                // line 17
                echo $this->extensions['phpbb\template\twig\extension']->lang("GIVEN");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["POSTER_GIVE_COUNT"] ?? null);
                echo "</dt>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"#\" onclick=\"phpbb.toggleDisplay('show_thanks'); return false;\">";
                // line 19
                echo $this->extensions['phpbb\template\twig\extension']->lang("THANKS_LIST");
                echo "</a>
\t\t\t\t\t<div id=\"show_thanks\" style=\"display: none;\">
\t\t\t\t\t\t<span style=\"float: left;\">
\t\t\t\t\t\t\t";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "thanks_row", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["_key"] => $context["thanks_row"]) {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t&nbsp;&nbsp;&bull;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["thanks_row"], "USERNAME_FULL", [], "any", false, false, false, 23);
                    echo " &#8594; <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["thanks_row"], "U_POST_LINK", [], "any", false, false, false, 23);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FOR_MESSAGE");
                    echo "</a><br />";
                    if ((twig_get_attribute($this->env, $this->source, $context["thanks_row"], "S_SWITCH_COLUMN", [], "any", false, false, false, 23) &&  !twig_get_attribute($this->env, $this->source, $context["thanks_row"], "S_LAST_ROW", [], "any", false, false, false, 23))) {
                        echo "&nbsp;</span><span style=\"float: left;\">";
                    }
                    // line 24
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thanks_row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                // line 26
                if (($context["FURTHER_THANKS_TEXT_GIVEN"] ?? null)) {
                    echo "<span style=\"float: left;\">&nbsp;";
                    echo ($context["FURTHER_THANKS_TEXT_GIVEN"] ?? null);
                    echo "</span>";
                }
                // line 27
                echo "\t\t\t\t\t</div>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</div>
\t\t";
            }
            // line 32
            echo "\t\t";
            if (($context["POSTER_RECEIVE_COUNT"] ?? null)) {
                // line 33
                echo "\t\t<div class=\"";
                if ( !($context["POSTER_GIVE_COUNT"] ?? null)) {
                    echo "column1";
                } else {
                    echo "column2";
                }
                echo "\">
\t\t\t";
                // line 34
                if (($context["S_MOD_THANKS"] ?? null)) {
                    // line 35
                    echo "\t\t\t<ul class=\"post-buttons\" style=\"float:left\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                    // line 37
                    echo ($context["U_CLEAR_LIST_THANKS_RECEIVE"] ?? null);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CLEAR_LIST_THANKS");
                    echo "\" class=\"button button-icon-only\" style=\"float:left\">
\t\t\t\t\t\t<i class=\"icon fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 38
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CLEAR_LIST_THANKS");
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
                }
                // line 43
                echo "\t\t\t<dl>
\t\t\t\t<dt>";
                // line 44
                echo $this->extensions['phpbb\template\twig\extension']->lang("RECEIVED");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["POSTER_RECEIVE_COUNT"] ?? null);
                echo "</dt>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"#\" onclick=\"phpbb.toggleDisplay('show_thanked'); return false;\">";
                // line 46
                echo $this->extensions['phpbb\template\twig\extension']->lang("THANKS_LIST");
                echo "</a>
\t\t\t\t\t<div id=\"show_thanked\" style=\"display: none;\">
\t\t\t\t\t\t<span style=\"float: left;\">
\t\t\t\t\t\t\t";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "thanked_row", [], "any", false, false, false, 49));
                foreach ($context['_seq'] as $context["_key"] => $context["thanked_row"]) {
                    // line 50
                    echo "\t\t\t\t\t\t\t\t&nbsp;&nbsp;&bull;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["thanked_row"], "USERNAME_FULL", [], "any", false, false, false, 50);
                    echo " &#8594; <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["thanked_row"], "U_POST_LINK", [], "any", false, false, false, 50);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FOR_MESSAGE");
                    echo "</a><br />";
                    if ((twig_get_attribute($this->env, $this->source, $context["thanked_row"], "S_SWITCH_COLUMN", [], "any", false, false, false, 50) &&  !twig_get_attribute($this->env, $this->source, $context["thanked_row"], "S_LAST_ROW", [], "any", false, false, false, 50))) {
                        echo "&nbsp;</span><span style=\"float: left;\">";
                    }
                    // line 51
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thanked_row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                // line 53
                if (($context["FURTHER_THANKS_TEXT_RECEIVED"] ?? null)) {
                    echo "<span style=\"float: left;\">&nbsp;";
                    echo ($context["FURTHER_THANKS_TEXT_RECEIVED"] ?? null);
                    echo "</span>";
                }
                // line 54
                echo "\t\t\t\t\t</div>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</div>
\t\t";
            }
            // line 59
            echo "\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_thanksforposts/memberlist_view_thanks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 59,  205 => 54,  199 => 53,  196 => 52,  190 => 51,  179 => 50,  175 => 49,  169 => 46,  161 => 44,  158 => 43,  150 => 38,  144 => 37,  140 => 35,  138 => 34,  129 => 33,  126 => 32,  119 => 27,  113 => 26,  110 => 25,  104 => 24,  93 => 23,  89 => 22,  83 => 19,  75 => 17,  72 => 16,  64 => 11,  58 => 10,  54 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gfksx_thanksforposts/memberlist_view_thanks.html", "");
    }
}
