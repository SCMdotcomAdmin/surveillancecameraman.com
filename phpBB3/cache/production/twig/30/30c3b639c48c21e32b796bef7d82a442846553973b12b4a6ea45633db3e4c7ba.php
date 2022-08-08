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

/* @gfksx_thanksforposts/event/viewtopic_body_postrow_post_notices_after.html */
class __TwigTemplate_76608ab2506bc7a61f756d99aacb02ff4e20af25d0e8c7aaf0db75cd719b7912 extends \Twig\Template
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
        echo "<div id='list_thanks";
        echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POST_ID", [], "any", false, false, false, 1);
        echo "'>
";
        // line 2
        if ((((twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANKS", [], "any", false, false, false, 2) && twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANKS_POSTLIST_VIEW", [], "any", false, false, false, 2)) &&  !twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_POST_ANONYMOUS", [], "any", false, false, false, 2)) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 3
            echo "\t<div class=\"notice\">
\t\t<dl>
\t\t\t";
            // line 5
            if (twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_MOD_THANKS", [], "any", false, false, false, 5)) {
                // line 6
                echo "\t\t\t<ul class=\"post-buttons\" style=\"float: left; position: static;\">
\t\t\t\t<li>
\t\t\t\t\t<a id='clear_list_thanks";
                // line 8
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POST_ID", [], "any", false, false, false, 8);
                echo "' href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "U_CLEAR_LIST_THANKS_POST", [], "any", false, false, false, 8);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("CLEAR_LIST_THANKS");
                echo "\"  class=\"button button-icon-only\" style=\"float:left\">
\t\t\t\t\t\t<i class=\"icon fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 9
                echo $this->extensions['phpbb\template\twig\extension']->lang("CLEAR_LIST_THANKS");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
            }
            // line 14
            echo "
\t\t\t<dt>";
            // line 15
            echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANK_TEXT", [], "any", false, false, false, 15);
            echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POST_AUTHOR_FULL", [], "any", false, false, false, 15);
            echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANK_TEXT_2", [], "any", false, false, false, 15);
            echo "</dt>
\t\t\t<dd>";
            // line 16
            echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANKS", [], "any", false, false, false, 16);
            echo "</dd>
\t\t</dl>
\t</div>
";
        }
        // line 20
        echo "</div>
<div id='div_post_reput";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POST_ID", [], "any", false, false, false, 21);
        echo "'>
";
        // line 22
        if ((((twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_THANKS_POST_REPUT_VIEW", [], "any", false, false, false, 22) && twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POST_REPUT", [], "any", false, false, false, 22)) &&  !twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_POST_ANONYMOUS", [], "any", false, false, false, 22)) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 23
            echo "\t<div class=\"notice\">
\t\t<dl>
\t\t\t<dt class=\"small\"><strong>";
            // line 25
            echo $this->extensions['phpbb\template\twig\extension']->lang("REPUT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong>&nbsp;";
            echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POST_REPUT", [], "any", false, false, false, 25);
            echo "</dt>
\t\t\t<dd>
\t\t\t";
            // line 27
            if (twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_THANKS_REPUT_GRAPHIC", [], "any", false, false, false, 27)) {
                // line 28
                echo "\t\t\t<span style=\"display: block; float: left; width: ";
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANKS_REPUT_GRAPHIC_WIDTH", [], "any", false, false, false, 28);
                echo "px; height: ";
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANKS_REPUT_HEIGHT", [], "any", false, false, false, 28);
                echo "px; background: url(";
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANKS_REPUT_IMAGE_BACK", [], "any", false, false, false, 28);
                echo "); background-repeat: repeat-x;\">
\t\t\t\t<span style=\"display: block; height: ";
                // line 29
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANKS_REPUT_HEIGHT", [], "any", false, false, false, 29);
                echo "px; width: ";
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POST_REPUT", [], "any", false, false, false, 29);
                echo "; background: url(";
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANKS_REPUT_IMAGE", [], "any", false, false, false, 29);
                echo "); background-repeat: repeat-x;\"></span>
\t\t\t</span>&nbsp;
\t\t\t";
            }
            // line 32
            echo "\t\t\t</dd>
\t\t</dl>
\t</div>
";
        }
        // line 36
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@gfksx_thanksforposts/event/viewtopic_body_postrow_post_notices_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 36,  128 => 32,  118 => 29,  109 => 28,  107 => 27,  99 => 25,  95 => 23,  93 => 22,  89 => 21,  86 => 20,  79 => 16,  73 => 15,  70 => 14,  62 => 9,  54 => 8,  50 => 6,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gfksx_thanksforposts/event/viewtopic_body_postrow_post_notices_after.html", "");
    }
}
