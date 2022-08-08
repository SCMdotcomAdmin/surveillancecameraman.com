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

/* @rmcgirr83_elonw/event/ucp_prefs_personal_append.html */
class __TwigTemplate_64fa0f4b1fa11ac07473427bcaabf7ab067ffd88390cfe1fd75d348cdc01297c extends \Twig\Template
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
        echo "\t<dl>
\t\t<dt><label for=\"elonw1\">";
        // line 2
        echo $this->extensions['phpbb\template\twig\extension']->lang("ELONW_CHOICE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"elonw1\"><input type=\"radio\" name=\"elonw\" id=\"elonw1\" value=\"1\"";
        // line 4
        if (($context["S_UCP_ELONW"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label for=\"elonw0\"><input type=\"radio\" name=\"elonw\" id=\"elonw0\" value=\"0\"";
        // line 5
        if ( !($context["S_UCP_ELONW"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>";
    }

    public function getTemplateName()
    {
        return "@rmcgirr83_elonw/event/ucp_prefs_personal_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  46 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@rmcgirr83_elonw/event/ucp_prefs_personal_append.html", "");
    }
}
