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

/* @phpbb_mediaembed/event/posting_editor_buttons_custom_tags_before.html */
class __TwigTemplate_11eb50b7a11101afc6e99a76e8e68a9114fc2fde0c6f143e5115c578971e09c1 extends \Twig\Template
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
        if (($context["S_BBCODE_MEDIA"] ?? null)) {
            // line 2
            echo "<button type=\"button\" class=\"button button-icon-only bbcode-media\" accesskey=\"m\" name=\"addmedia\" value=\"Media\" onclick=\"bbfontstyle('[media]', '[/media]');\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_MEDIA_HELP");
            echo "\">
\t<i class=\"icon fa-television fa-fw\" aria-hidden=\"true\"></i>
</button>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_mediaembed/event/posting_editor_buttons_custom_tags_before.html";
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
        return new Source("", "@phpbb_mediaembed/event/posting_editor_buttons_custom_tags_before.html", "");
    }
}
