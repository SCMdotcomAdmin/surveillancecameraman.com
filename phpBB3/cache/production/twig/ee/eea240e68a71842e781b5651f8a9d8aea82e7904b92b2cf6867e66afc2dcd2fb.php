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

/* @gfksx_thanksforposts/event/viewtopic_body_post_buttons_after.html */
class __TwigTemplate_edbac246bee8dc39dc0798273ee0ab697770e2dda1399cb3c84a4d592994e28d extends \Twig\Template
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
        if (( !twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_FIRST_POST_ONLY", [], "any", false, false, false, 1) || twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_ONLY_TOPICSTART", [], "any", false, false, false, 1))) {
            // line 2
            echo "\t";
            if (((((( !twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_GLOBAL_POST_THANKS", [], "any", false, false, false, 2) &&  !twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_POST_ANONYMOUS", [], "any", false, false, false, 2)) && ($context["S_FORUM_THANKS"] ?? null)) && ($context["S_USER_LOGGED_IN"] ?? null)) &&  !twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_IS_OWN_POST", [], "any", false, false, false, 2)) && ( !twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_ALREADY_THANKED", [], "any", false, false, false, 2) || twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_REMOVE_THANKS", [], "any", false, false, false, 2)))) {
                // line 3
                echo "\t\t<li>
\t\t\t<a id='lnk_thanks_post";
                // line 4
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POST_ID", [], "any", false, false, false, 4);
                echo "' href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANKS_LINK", [], "any", false, false, false, 4);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANK_ALT", [], "any", false, false, false, 4);
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POST_AUTHOR", [], "any", false, false, false, 4);
                echo "\"  class=\"button button-icon-only\">
\t\t\t\t<i class=\"icon ";
                // line 5
                if (twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANKED", [], "any", false, false, false, 5)) {
                    echo "fa-thumbs-o-down";
                } else {
                    echo "fa-thumbs-o-up";
                }
                echo " fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANK_ALT_SHORT", [], "any", false, false, false, 5);
                echo "</span>
\t\t\t</a>
\t\t</li>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_thanksforposts/event/viewtopic_body_post_buttons_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gfksx_thanksforposts/event/viewtopic_body_post_buttons_after.html", "");
    }
}
