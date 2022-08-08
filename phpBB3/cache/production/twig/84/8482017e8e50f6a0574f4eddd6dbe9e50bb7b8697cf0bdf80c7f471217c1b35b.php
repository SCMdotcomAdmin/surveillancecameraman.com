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

/* @pcgf_ajaxregistrationcheck/event/ucp_register_credentials_after.html */
class __TwigTemplate_3e25ea66e8776ab82110dcc70d618e009751c094a863cac0f118c8b3823f0a7a extends \Twig\Template
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
        echo "<div id=\"pcgf-ajaxregistrationcheck-username\" class=\"inline\"></div>
<div id=\"pcgf-ajaxregistrationcheck-email\" class=\"inline\"></div>
<div id=\"pcgf-ajaxregistrationcheck-password\" class=\"inline\"></div>
<div id=\"pcgf-ajaxregistrationcheck-confirm-password\" class=\"inline\"></div>
<script type=\"text/javascript\">
    var pcgfAJAXRegistrationCheckLoading = '";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("LOADING"), "js");
        echo "...';
    var pcgfAJAXRegistrationCheckUsernameMin = '";
        // line 7
        echo ($context["PCGF_AJAXREGISTRATIONCHECK_USERNAME_MIN"] ?? null);
        echo "';
    var pcgfAJAXRegistrationCheckUsernameMax = '";
        // line 8
        echo ($context["PCGF_AJAXREGISTRATIONCHECK_USERNAME_MAX"] ?? null);
        echo "';
    var pcgfAJAXRegistrationCheckUsernameRule = \"";
        // line 9
        echo ($context["PCGF_AJAXREGISTRATIONCHECK_USERNAME_RULE"] ?? null);
        echo "\";
    var pcgfAJAXRegistrationCheckUsernameInvalidBoundaries = '";
        // line 10
        echo ($context["PCGF_AJAXREGISTRATIONCHECK_USERNAME_INVALID_BOUNDARIES"] ?? null);
        echo "';
    var pcgfAJAXRegistrationCheckUsernameCheckLink = '";
        // line 11
        echo ($context["PCGF_AJAXREGISTRATIONCHECK_CHECK_USERNAME_LINK"] ?? null);
        echo "';
    var pcgfAJAXRegistrationCheckEMailRule = \"";
        // line 12
        echo ($context["PCGF_AJAXREGISTRATIONCHECK_EMAIL_RULE"] ?? null);
        echo "\";
    var pcgfAJAXRegistrationCheckEMailInvalid = '";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PCGF_AJAXREGISTRATIONCHECK_EMAIL_INVALID"), "js");
        echo "';
    var pcgfAJAXRegistrationCheckEMailCheckLink = '";
        // line 14
        echo ($context["PCGF_AJAXREGISTRATIONCHECK_CHECK_EMAIL_LINK"] ?? null);
        echo "';
    var pcgfAJAXRegistrationCheckPasswordMin = '";
        // line 15
        echo ($context["PCGF_AJAXREGISTRATIONCHECK_PASSWORD_MIN"] ?? null);
        echo "';
    var pcgfAJAXRegistrationCheckPasswordMax = '";
        // line 16
        echo ($context["PCGF_AJAXREGISTRATIONCHECK_PASSWORD_MAX"] ?? null);
        echo "';
    var pcgfAJAXRegistrationCheckPasswordRule = \"";
        // line 17
        echo ($context["PCGF_AJAXREGISTRATIONCHECK_PASSWORD_RULE"] ?? null);
        echo "\";
    var pcgfAJAXRegistrationCheckPasswordInvalid = '";
        // line 18
        echo ($context["PCGF_AJAXREGISTRATIONCHECK_PASSWORD_INVALID_BOUNDARIES"] ?? null);
        echo "';
    var pcgfAJAXRegistrationCheckConfirmPasswordValid = '";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PCGF_AJAXREGISTRATIONCHECK_CONFIRM_PASSWORD_OK"), "js");
        echo "';
    var pcgfAJAXRegistrationCheckConfirmPasswordInvalid = '";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("NEW_PASSWORD_ERROR"), "js");
        echo "';
    var pcgfAJAXRegistrationCheckPasswordStrength = '";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PCGF_AJAXREGISTRATIONCHECK_PASSWORD_STRENGTH"), "js");
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COLON"), "js");
        echo "';
    var pcgfAJAXRegistrationCheckPasswordVeryWeak = '";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PCGF_AJAXREGISTRATIONCHECK_PASSWORD_VERY_WEAK"), "js");
        echo "';
    var pcgfAJAXRegistrationCheckPasswordWeak = '";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PCGF_AJAXREGISTRATIONCHECK_PASSWORD_WEAK"), "js");
        echo "';
    var pcgfAJAXRegistrationCheckPasswordNormal = '";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PCGF_AJAXREGISTRATIONCHECK_PASSWORD_NORMAL"), "js");
        echo "';
    var pcgfAJAXRegistrationCheckPasswordStrong = '";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PCGF_AJAXREGISTRATIONCHECK_PASSWORD_STRONG"), "js");
        echo "';
    var pcgfAJAXRegistrationCheckPasswordVeryStrong = '";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PCGF_AJAXREGISTRATIONCHECK_PASSWORD_VERY_STRONG"), "js");
        echo "';
</script>
";
        // line 28
        $asset_file = "@pcgf_ajaxregistrationcheck/javascript/ajaxregistrationcheck.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);    }

    public function getTemplateName()
    {
        return "@pcgf_ajaxregistrationcheck/event/ucp_register_credentials_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 28,  125 => 26,  121 => 25,  117 => 24,  113 => 23,  109 => 22,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@pcgf_ajaxregistrationcheck/event/ucp_register_credentials_after.html", "");
    }
}
