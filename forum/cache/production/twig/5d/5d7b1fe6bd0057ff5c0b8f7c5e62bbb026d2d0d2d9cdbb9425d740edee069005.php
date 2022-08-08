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

/* @gfksx_thanksforposts/event/forumlist_body_forum_row_append.html */
class __TwigTemplate_75da0c0a9a4ddc30dd596f3e1c922ae4a3374965949ed130d48cd610e3b8efc6 extends \Twig\Template
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
        if (((twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "S_THANKS_FORUM_REPUT_VIEW", [], "any", false, false, false, 1) && twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "FORUM_REPUT", [], "any", false, false, false, 1)) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 2
            echo "<div style=\"display: block; margin-left: 45px; padding-bottom: 5px;\">
\t";
            // line 3
            if (twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "S_THANKS_REPUT_GRAPHIC", [], "any", false, false, false, 3)) {
                // line 4
                echo "\t\t<span style=\"display: block; float: left; width: ";
                echo twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "THANKS_REPUT_GRAPHIC_WIDTH", [], "any", false, false, false, 4);
                echo "px; height: ";
                echo twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "THANKS_REPUT_HEIGHT", [], "any", false, false, false, 4);
                echo "px; background: url(";
                echo twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "THANKS_REPUT_IMAGE_BACK", [], "any", false, false, false, 4);
                echo "); background-repeat: repeat-x;\"><span style=\"display: block; height: ";
                echo twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "THANKS_REPUT_HEIGHT", [], "any", false, false, false, 4);
                echo "px; width: ";
                echo twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "FORUM_REPUT", [], "any", false, false, false, 4);
                echo "; background: url(";
                echo twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "THANKS_REPUT_IMAGE", [], "any", false, false, false, 4);
                echo "); background-repeat: repeat-x;\"></span></span>&nbsp;
\t";
            }
            // line 6
            echo "\t";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REPUT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "&nbsp;";
            echo twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "FORUM_REPUT", [], "any", false, false, false, 6);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_thanksforposts/event/forumlist_body_forum_row_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gfksx_thanksforposts/event/forumlist_body_forum_row_append.html", "");
    }
}
