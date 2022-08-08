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

/* @forumflair_discencql/event/viewtopic_body_footer_before.html */
class __TwigTemplate_945ba76c978f436153d6a4676bdaa4c76f73fa080b3204dbdb155335505ccd94 extends \Twig\Template
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
        if (((( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null)) && (($context["SCRIPT_NAME"] ?? null) == "viewtopic")) &&  !($context["S_IS_LOCKED"] ?? null))) {
            // line 2
            echo "\t";
            $this->loadTemplate("@forumflair_discencql/discencql.html", "@forumflair_discencql/event/viewtopic_body_footer_before.html", 2)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@forumflair_discencql/event/viewtopic_body_footer_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@forumflair_discencql/event/viewtopic_body_footer_before.html", "");
    }
}
