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

/* @phpbb_mediaembed/event/overall_header_stylesheets_after.html */
class __TwigTemplate_3d934b9b0b6d7473102d3b8ad1bfc319a36e1bb51e89974540df7c7a22970323 extends \Twig\Template
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
        if ((($context["S_MEDIA_EMBED_FULL_WIDTH"] ?? null) || ($context["S_MEDIA_EMBED_MAX_WIDTHS"] ?? null))) {
            // line 2
            echo "<style>
";
            // line 3
            if (($context["S_MEDIA_EMBED_FULL_WIDTH"] ?? null)) {
                // line 4
                echo "\t[data-s9e-mediaembed] { max-width: 100% !important; }
";
            }
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["S_MEDIA_EMBED_MAX_WIDTHS"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "\t[data-s9e-mediaembed=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "site", [], "any", false, false, false, 7);
                echo "\"] { max-width: ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "width", [], "any", false, false, false, 7);
                echo " !important; }
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "</style>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_mediaembed/event/overall_header_stylesheets_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  52 => 7,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_mediaembed/event/overall_header_stylesheets_after.html", "");
    }
}
