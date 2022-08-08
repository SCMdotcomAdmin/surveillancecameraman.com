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

/* @vinny_shareon/event/viewtopic_body_postrow_post_notices_after.html */
class __TwigTemplate_ecd7c82a81e6de486d3a0d0c7050bbe4d0bbe26226272f9824845824ced4ca5d extends \Twig\Template
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
        if (($context["S_SO_STATUS"] ?? null)) {
            // line 2
            echo "\t";
            if (((($context["S_SO_TYPE"] ?? null) == "0") || twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_FIRST_ROW", [], "any", false, false, false, 2))) {
                // line 3
                echo "\t\t<br />
\t\t<ul class=\"share-buttons\">
\t\t\t";
                // line 5
                if (($context["S_SO_FACEBOOK"] ?? null)) {
                    // line 6
                    echo "\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "U_FACEBOOK", [], "any", false, false, false, 6);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SHARE_ON_FACEBOOK");
                    echo "\" class=\"share-button share-icon-button facebook-icon js-newWindow\" data-popup=\"width=580,height=325\"></a></li>
\t\t\t";
                }
                // line 8
                echo "
\t\t\t";
                // line 9
                if (($context["S_SO_TWITTER"] ?? null)) {
                    // line 10
                    echo "\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "U_TWITTER", [], "any", false, false, false, 10);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SHARE_ON_TWITTER");
                    echo "\" class=\"share-button share-icon-button twitter-icon js-newWindow\" data-popup=\"width=550,height=300\"></a></li>
\t\t\t";
                }
                // line 12
                echo "
\t\t\t";
                // line 13
                if (($context["S_SO_TUENTI"] ?? null)) {
                    // line 14
                    echo "\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "U_TUENTI", [], "any", false, false, false, 14);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SHARE_ON_TUENTI");
                    echo "\" class=\"share-button share-icon-button tuenti-icon js-newWindow\" data-popup=\"width=741,height=551\"></a></li>
\t\t\t";
                }
                // line 16
                echo "
\t\t\t";
                // line 17
                if (($context["S_SO_DIGG"] ?? null)) {
                    // line 18
                    echo "\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "U_DIGG", [], "any", false, false, false, 18);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SHARE_ON_DIGG");
                    echo "\" class=\"share-button share-icon-button digg-icon\" onclick=\"target='_blank';\"></a></li>
\t\t\t";
                }
                // line 20
                echo "
\t\t\t";
                // line 21
                if (($context["S_SO_REDDIT"] ?? null)) {
                    // line 22
                    echo "\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "U_REDDIT", [], "any", false, false, false, 22);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SHARE_ON_REDDIT");
                    echo "\" class=\"share-button share-icon-button reddit-icon\" onclick=\"target='_blank';\"></a></li>
\t\t\t";
                }
                // line 24
                echo "
\t\t\t";
                // line 25
                if (($context["S_SO_DELICIOUS"] ?? null)) {
                    // line 26
                    echo "\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "U_DELICIOUS", [], "any", false, false, false, 26);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SHARE_ON_DELICIOUS");
                    echo "\" class=\"share-button share-icon-button delicious-icon js-newWindow\" data-popup=\"width=540,height=500\"></a></li>
\t\t\t";
                }
                // line 28
                echo "
\t\t\t";
                // line 29
                if (($context["S_SO_VK"] ?? null)) {
                    // line 30
                    echo "\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "U_VK", [], "any", false, false, false, 30);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SHARE_ON_VK");
                    echo "\" class=\"share-button share-icon-button vk-icon js-newWindow\" data-popup=\"width=607,height=510\"></a></li>
\t\t\t";
                }
                // line 32
                echo "
\t\t\t";
                // line 33
                if (($context["S_SO_TUMBLR"] ?? null)) {
                    // line 34
                    echo "\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "U_TUMBLR", [], "any", false, false, false, 34);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SHARE_ON_TUMBLR");
                    echo "\" class=\"share-button share-icon-button tumblr-icon js-newWindow\" data-popup=\"width=542,height=460\"></a></li>
\t\t\t";
                }
                // line 36
                echo "
\t\t\t";
                // line 37
                if (($context["S_SO_GOOGLE"] ?? null)) {
                    // line 38
                    echo "\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "U_GOOGLE", [], "any", false, false, false, 38);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SHARE_ON_GOOGLE");
                    echo "\" class=\"share-button share-icon-button google-icon\" onclick=\"target='_blank';\"></a></li>
\t\t\t";
                }
                // line 40
                echo "
\t\t\t";
                // line 41
                if (($context["S_SO_WHATSAPP"] ?? null)) {
                    // line 42
                    echo "\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "U_WHATSAPP", [], "any", false, false, false, 42);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SHARE_ON_WHATSAPP");
                    echo "\" class=\"share-button share-icon-button whatsapp-icon\" onclick=\"target='_blank';\"></a></li>
\t\t\t";
                }
                // line 44
                echo "
\t\t\t";
                // line 45
                if (($context["S_SO_POCKET"] ?? null)) {
                    // line 46
                    echo "\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "U_POCKET", [], "any", false, false, false, 46);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SHARE_ON_POCKET");
                    echo "\" class=\"share-button share-icon-button pocket-icon\" onclick=\"target='_blank';\"></a></li>
\t\t\t";
                }
                // line 48
                echo "\t\t</ul>
\t\t<br />
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@vinny_shareon/event/viewtopic_body_postrow_post_notices_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 48,  178 => 46,  176 => 45,  173 => 44,  165 => 42,  163 => 41,  160 => 40,  152 => 38,  150 => 37,  147 => 36,  139 => 34,  137 => 33,  134 => 32,  126 => 30,  124 => 29,  121 => 28,  113 => 26,  111 => 25,  108 => 24,  100 => 22,  98 => 21,  95 => 20,  87 => 18,  85 => 17,  82 => 16,  74 => 14,  72 => 13,  69 => 12,  61 => 10,  59 => 9,  56 => 8,  48 => 6,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vinny_shareon/event/viewtopic_body_postrow_post_notices_after.html", "");
    }
}
