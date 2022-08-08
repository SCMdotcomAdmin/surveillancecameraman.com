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

/* @gfksx_thanksforposts/event/index_body_stat_blocks_after.html */
class __TwigTemplate_7e0bdcdca33503d74cfbfdbd609e15115a435f7fb92dec1651dd070c32890e7b extends \Twig\Template
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
        if (($context["S_THANKS_LIST"] ?? null)) {
            // line 2
            echo "<div class=\"stat-block thanks-list\">
\t<h3><a href=\"";
            // line 3
            echo ($context["U_THANKS_LIST"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOP_THANKS_LIST");
            echo "</a></h3>
\t<p>";
            // line 4
            echo ($context["THANKS_LIST"] ?? null);
            echo "</p>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_thanksforposts/event/index_body_stat_blocks_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gfksx_thanksforposts/event/index_body_stat_blocks_after.html", "");
    }
}
