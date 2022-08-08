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

/* @gfksx_thanksforposts/event/navbar_header_quick_links_after.html */
class __TwigTemplate_036e85bc48077822295d839e8c61fe9ecf8f262dab3a9368f701cb2221f4f3c0 extends \Twig\Template
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
        if (($context["S_DISPLAY_TOPLIST"] ?? null)) {
            // line 2
            echo "\t<li>
\t\t<a href=\"";
            // line 3
            echo ($context["U_REPUT_TOPLIST"] ?? null);
            echo "\"  role=\"menuitem\">
\t\t\t<i class=\"icon fa-star-o fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 4
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPLIST");
            echo "</span>
\t\t</a>
\t</li>
";
        }
        // line 8
        if (($context["S_DISPLAY_THANKSLIST"] ?? null)) {
            // line 9
            echo "\t<li>
\t\t<a href=\"";
            // line 10
            echo ($context["U_THANKS_LIST"] ?? null);
            echo "\"  role=\"menuitem\">
\t\t\t<i class=\"icon fa-thumbs-o-up fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 11
            echo $this->extensions['phpbb\template\twig\extension']->lang("GRATITUDES");
            echo "</span>
\t\t</a>
\t</li>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_thanksforposts/event/navbar_header_quick_links_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  58 => 10,  55 => 9,  53 => 8,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gfksx_thanksforposts/event/navbar_header_quick_links_after.html", "");
    }
}
