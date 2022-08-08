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

/* @gfksx_thanksforposts/event/viewtopic_body_postrow_custom_fields_after.html */
class __TwigTemplate_b399dbd39c4cab329d79cdff192001f2e53ffda20a7428cfdf72deec7cac96f8 extends \Twig\Template
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
        if (( !twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_POST_ANONYMOUS", [], "any", false, false, false, 1) && twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANKS_COUNTERS_VIEW", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <dd class=\"profile-posts\" data-user-give-id=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POSTER_ID", [], "any", false, false, false, 2);
            echo "\">";
            if (twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POSTER_GIVE_COUNT", [], "any", false, false, false, 2)) {
                echo "<strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GIVEN");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POSTER_GIVE_COUNT_LINK", [], "any", false, false, false, 2);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POSTER_GIVE_COUNT", [], "any", false, false, false, 2);
                echo "</a>";
            }
            echo "</dd>
    <dd class=\"profile-posts\" data-user-receive-id=\"";
            // line 3
            echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POSTER_ID", [], "any", false, false, false, 3);
            echo "\">";
            if (twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POSTER_RECEIVE_COUNT", [], "any", false, false, false, 3)) {
                echo "<strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RECEIVED");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POSTER_RECEIVE_COUNT_LINK", [], "any", false, false, false, 3);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POSTER_RECEIVE_COUNT", [], "any", false, false, false, 3);
                echo "</a>";
            }
            echo "</dd>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_thanksforposts/event/viewtopic_body_postrow_custom_fields_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gfksx_thanksforposts/event/viewtopic_body_postrow_custom_fields_after.html", "");
    }
}
