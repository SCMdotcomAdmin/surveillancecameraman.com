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

/* @gfksx_thanksforposts/topicrow_rating_body.html */
class __TwigTemplate_21f07eb9b71615faba945e87cbe19d2ba9d8273fabf2e13cef1369185265af17 extends \Twig\Template
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
        if (((twig_get_attribute($this->env, $this->source, ($context["rating"] ?? null), "S_THANKS_TOPIC_REPUT_VIEW", [], "any", false, false, false, 1) && twig_get_attribute($this->env, $this->source, ($context["rating"] ?? null), "TOPIC_REPUT", [], "any", false, false, false, 1)) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 2
            echo "\t<br><span style=\"display: block; clear: left;\">
\t";
            // line 3
            if (twig_get_attribute($this->env, $this->source, ($context["rating"] ?? null), "S_THANKS_REPUT_GRAPHIC", [], "any", false, false, false, 3)) {
                // line 4
                echo "\t<span style=\"display: block; float: left; width: ";
                echo twig_get_attribute($this->env, $this->source, ($context["rating"] ?? null), "THANKS_REPUT_GRAPHIC_WIDTH", [], "any", false, false, false, 4);
                echo "px; height: ";
                echo twig_get_attribute($this->env, $this->source, ($context["rating"] ?? null), "THANKS_REPUT_HEIGHT", [], "any", false, false, false, 4);
                echo "px; background: url(";
                echo twig_get_attribute($this->env, $this->source, ($context["rating"] ?? null), "THANKS_REPUT_IMAGE_BACK", [], "any", false, false, false, 4);
                echo "); background-repeat: repeat-x;\"><span style=\"display: block; height: ";
                echo twig_get_attribute($this->env, $this->source, ($context["rating"] ?? null), "THANKS_REPUT_HEIGHT", [], "any", false, false, false, 4);
                echo "px; width: ";
                echo twig_get_attribute($this->env, $this->source, ($context["rating"] ?? null), "TOPIC_REPUT", [], "any", false, false, false, 4);
                echo "; background: url(";
                echo twig_get_attribute($this->env, $this->source, ($context["rating"] ?? null), "THANKS_REPUT_IMAGE", [], "any", false, false, false, 4);
                echo "); background-repeat: repeat-x;\"></span></span>&nbsp;
\t";
            }
            // line 6
            echo "\t";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REPUT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "&nbsp;";
            echo twig_get_attribute($this->env, $this->source, ($context["rating"] ?? null), "TOPIC_REPUT", [], "any", false, false, false, 6);
            echo "
\t</span>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_thanksforposts/topicrow_rating_body.html";
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
        return new Source("", "@gfksx_thanksforposts/topicrow_rating_body.html", "");
    }
}
