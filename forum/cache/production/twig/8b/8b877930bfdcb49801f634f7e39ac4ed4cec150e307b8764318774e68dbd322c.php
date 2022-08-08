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

/* @forumflair_discencql/discencql.html */
class __TwigTemplate_2ef24a031582b7afda89b69b88a5afab34fc24e7f09c22cc79a4b20afcc1d4bd extends \Twig\Template
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
        echo "<div class=\"discencql panel\">
\t<div class=\"inner\">
\t\t";
        // line 3
        if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
            // line 4
            echo "\t\t<h2>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISC_ENC_QL_TTL");
            echo "</h2>
\t\t";
        } else {
            // line 6
            echo "\t\t<h2>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISC_ENC_QL_NO_SGNUP_TTL");
            echo "</h2>
\t\t";
        }
        // line 8
        echo "\t\t<p>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("DISC_ENC_QL_INF");
        echo "</p>
\t\t<div class=\"discencql-grid\">
\t\t\t";
        // line 10
        if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
            // line 11
            echo "\t\t\t<div class=\"discencql-column\">
\t\t\t\t<h2>";
            // line 12
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISC_ENC_QL_SGN_UP_TTL");
            echo "</h2>
\t\t\t\t<p>
\t\t\t\t";
            // line 14
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISC_ENC_QL_SGN_UP_INF");
            echo "<br />
\t\t\t\t";
            // line 15
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISC_ENC_QL_SGN_UP_TPCS_INF");
            echo "<br />
\t\t\t\t";
            // line 16
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISC_ENC_QL_SGN_UP_FREE_INF");
            echo "
\t\t\t\t</p>
\t\t\t\t<a href=\"";
            // line 18
            echo ($context["U_REGISTER"] ?? null);
            echo "\" class=\"discencql-button discencql-register-button button\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-pencil-square-o fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 19
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
            echo "</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t";
        }
        // line 23
        echo "\t\t\t<div class=\"discencql-column\">
\t\t\t\t";
        // line 24
        if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
            // line 25
            echo "\t\t\t\t<h2>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISC_ENC_QL_SGN_IN_TTL");
            echo "</h2>
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t<form method=\"post\" action=\"";
        echo ($context["S_LOGIN_ACTION"] ?? null);
        echo "\">
\t\t\t\t\t<fieldset class=\"discencql-fieldset\">
\t\t\t\t\t\t<label for=\"username-ql\"><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username-ql\" placeholder=\"";
        // line 29
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo "\" size=\"10\" class=\"inputbox\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo "\" /></label>
\t\t\t\t\t\t<label for=\"password-ql\"><input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password-ql\" placeholder=\"";
        // line 30
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
        echo "\" size=\"10\" class=\"inputbox\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
        echo "\" autocomplete=\"off\" /></label>
\t\t\t\t\t\t";
        // line 31
        if (($context["U_SEND_PASSWORD"] ?? null)) {
            // line 32
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo ($context["U_SEND_PASSWORD"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t\t";
        if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
            // line 35
            echo "\t\t\t\t\t\t\t<label for=\"autologin-ql\" class=\"discencql-autologin\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
            echo "<input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin-ql\" /></label>
\t\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t\t<button class=\"discencql-button discencql-login-button button\" type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
        echo "\">
\t\t\t\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 38
        echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
        echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t";
        // line 40
        echo ($context["S_LOGIN_REDIRECT"] ?? null);
        echo "
\t\t\t\t\t\t";
        // line 41
        echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
        echo "
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@forumflair_discencql/discencql.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 41,  157 => 40,  152 => 38,  145 => 37,  139 => 35,  136 => 34,  128 => 32,  126 => 31,  120 => 30,  114 => 29,  108 => 27,  102 => 25,  100 => 24,  97 => 23,  90 => 19,  84 => 18,  79 => 16,  75 => 15,  71 => 14,  66 => 12,  63 => 11,  61 => 10,  55 => 8,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@forumflair_discencql/discencql.html", "");
    }
}
