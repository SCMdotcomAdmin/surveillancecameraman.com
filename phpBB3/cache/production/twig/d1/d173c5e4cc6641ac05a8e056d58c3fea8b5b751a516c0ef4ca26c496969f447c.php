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

/* @senky_avatarsonmemberlist/event/memberlist_body_username_prepend.html */
class __TwigTemplate_a8b0bd655b5d29cecfdf7f972b72dc22dc748094640e6d92a6597af3100ab607 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["memberrow"] ?? null), "AVATAR_IMG", [], "any", false, false, false, 1)) {
            // line 2
            echo "\t";
            echo twig_get_attribute($this->env, $this->source, ($context["memberrow"] ?? null), "AVATAR_IMG", [], "any", false, false, false, 2);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@senky_avatarsonmemberlist/event/memberlist_body_username_prepend.html";
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
        return new Source("", "@senky_avatarsonmemberlist/event/memberlist_body_username_prepend.html", "");
    }
}
