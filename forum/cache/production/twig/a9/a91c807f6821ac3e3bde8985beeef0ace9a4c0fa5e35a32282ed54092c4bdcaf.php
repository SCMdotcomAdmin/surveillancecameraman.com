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

/* @gfksx_thanksforposts/event/topiclist_row_append.html */
class __TwigTemplate_1a4c1f23d718a89862005f9b2e8f4483a8383365adda84c9b058da2d8739acd3 extends \Twig\Template
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
        if (($context["topicrow"] ?? null)) {
            // line 2
            echo "    ";
            $context["rating"] = ($context["topicrow"] ?? null);
        } elseif (        // line 3
($context["recent_topics"] ?? null)) {
            // line 4
            echo "    ";
            $context["rating"] = ($context["recent_topics"] ?? null);
        }
        // line 6
        $this->loadTemplate("topicrow_rating_body.html", "@gfksx_thanksforposts/event/topiclist_row_append.html", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "@gfksx_thanksforposts/event/topiclist_row_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gfksx_thanksforposts/event/topiclist_row_append.html", "");
    }
}
