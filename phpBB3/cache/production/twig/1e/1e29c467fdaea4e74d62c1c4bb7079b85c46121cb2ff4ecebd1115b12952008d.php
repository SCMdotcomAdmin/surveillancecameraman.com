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

/* acp_avatar_options_gravatar.html */
class __TwigTemplate_1fe998a176367c895c38332e052a958cb16e6b6ba6ffa3bfc24e95b5b6c1d4d0 extends \Twig\Template
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
        echo "<dl>
\t<dt><label for=\"avatar_gravatar_email\">";
        // line 2
        echo $this->extensions['phpbb\template\twig\extension']->lang("GRAVATAR_AVATAR_EMAIL");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("GRAVATAR_AVATAR_EMAIL_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"email\" name=\"avatar_gravatar_email\" id=\"avatar_gravatar_email\" value=\"";
        // line 3
        echo ($context["AVATAR_GRAVATAR_EMAIL"] ?? null);
        echo "\" class=\"inputbox\" /></dd>
</dl>
<dl>
\t<dt><label for=\"avatar_gravatar_width\">";
        // line 6
        echo $this->extensions['phpbb\template\twig\extension']->lang("GRAVATAR_AVATAR_SIZE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("GRAVATAR_AVATAR_SIZE_EXPLAIN");
        echo "</span></dt>
\t<dd>
\t\t<input type=\"number\" name=\"avatar_gravatar_width\" id=\"avatar_gravatar_width\" min=\"";
        // line 8
        echo ($context["AVATAR_MIN_WIDTH"] ?? null);
        echo "\" max=\"";
        echo ($context["AVATAR_MAX_WIDTH"] ?? null);
        echo "\" value=\"";
        echo ($context["AVATAR_GRAVATAR_WIDTH"] ?? null);
        echo "\" class=\"inputbox autowidth\" /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PIXEL");
        echo " &times;&nbsp;
\t\t<input type=\"number\" name=\"avatar_gravatar_height\" id=\"avatar_gravatar_height\" min=\"";
        // line 9
        echo ($context["AVATAR_MIN_HEIGHT"] ?? null);
        echo "\" max=\"";
        echo ($context["AVATAR_MAX_HEIGHT"] ?? null);
        echo "\" value=\"";
        echo ($context["AVATAR_GRAVATAR_HEIGHT"] ?? null);
        echo "\" class=\"inputbox autowidth\" /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PIXEL");
        echo "
\t</dd>
</dl>
";
    }

    public function getTemplateName()
    {
        return "acp_avatar_options_gravatar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 9,  61 => 8,  53 => 6,  47 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_avatar_options_gravatar.html", "");
    }
}
