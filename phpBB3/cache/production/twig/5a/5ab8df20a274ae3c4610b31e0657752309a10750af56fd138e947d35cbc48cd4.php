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

/* acp_abbc3_settings.html */
class __TwigTemplate_c81e2c96e707ab0cb5c9896c02a25dba79ad7e15918e5a6921b913cc3ee39a3f extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_abbc3_settings.html", 1)->display($context);
        // line 2
        $asset_file = "@vse_abbc3/acp_abbc3.css";
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
        $this->env->get_assets_bag()->add_stylesheet($asset);        // line 3
        echo "
<img src=\"";
        // line 4
        echo ($context["ROOT_PATH"] ?? null);
        echo "ext/vse/abbc3/adm/images/abbc3logo.png\" alt=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_ABBC3_MODULE");
        echo "\">

<p>";
        // line 6
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_SETTINGS_EXPLAIN");
        echo "</p>

<form id=\"abbc3_settings\" method=\"post\" action=\"";
        // line 8
        echo ($context["U_ACTION"] ?? null);
        echo "\" data-ajax=\"true\">
\t<fieldset>
\t\t<legend>";
        // line 10
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_LEGEND_ICON_BAR");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"abbc3_bbcode_bar\">";
        // line 12
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ABBC3_BBCODE_BAR") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label><br><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_BBCODE_BAR_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"abbc3_bbcode_bar\" id=\"abbc3_bbcode_bar\" value=\"1\"";
        // line 13
        if (($context["S_ABBC3_BBCODE_BAR"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo "> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"abbc3_bbcode_bar\" value=\"0\"";
        // line 14
        if ( !($context["S_ABBC3_BBCODE_BAR"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo "> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"abbc3_icons_type\">";
        // line 17
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ABBC3_ICONS_TYPE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label><br><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_ICONS_TYPE_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<select name=\"abbc3_icons_type\" id=\"abbc3_icons_type\">";
        // line 19
        echo ($context["S_ABBC3_ICONS_TYPE"] ?? null);
        echo "</select>
\t\t\t\t";
        // line 20
        $context["ABBC3_ICON_PATH"] = (($context["ROOT_PATH"] ?? null) . "ext/vse/abbc3/images/icons/");
        // line 21
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "png", 1 => "svg"]);
        foreach ($context['_seq'] as $context["_key"] => $context["ext"]) {
            // line 22
            echo "\t\t\t\t\t<div class=\"abbc3-bar abbc3-icons-";
            echo $context["ext"];
            echo " hidden\">
\t\t\t\t\t\t<span style=\"background-image:url('";
            // line 23
            echo ($context["ABBC3_ICON_PATH"] ?? null);
            echo "bold.";
            echo $context["ext"];
            echo "')\"></span>
\t\t\t\t\t\t<span style=\"background-image:url('";
            // line 24
            echo ($context["ABBC3_ICON_PATH"] ?? null);
            echo "italic.";
            echo $context["ext"];
            echo "')\"></span>
\t\t\t\t\t\t<span style=\"background-image:url('";
            // line 25
            echo ($context["ABBC3_ICON_PATH"] ?? null);
            echo "underline.";
            echo $context["ext"];
            echo "')\"></span>
\t\t\t\t\t\t<span style=\"background-image:url('";
            // line 26
            echo ($context["ABBC3_ICON_PATH"] ?? null);
            echo "quote.";
            echo $context["ext"];
            echo "')\"></span>
\t\t\t\t\t\t<span style=\"background-image:url('";
            // line 27
            echo ($context["ABBC3_ICON_PATH"] ?? null);
            echo "code.";
            echo $context["ext"];
            echo "')\"></span>
\t\t\t\t\t\t<span style=\"background-image:url('";
            // line 28
            echo ($context["ABBC3_ICON_PATH"] ?? null);
            echo "listb.";
            echo $context["ext"];
            echo "')\"></span>
\t\t\t\t\t\t<span style=\"background-image:url('";
            // line 29
            echo ($context["ABBC3_ICON_PATH"] ?? null);
            echo "listo.";
            echo $context["ext"];
            echo "')\"></span>
\t\t\t\t\t\t<span style=\"background-image:url('";
            // line 30
            echo ($context["ABBC3_ICON_PATH"] ?? null);
            echo "listitem.";
            echo $context["ext"];
            echo "')\"></span>
\t\t\t\t\t\t<span style=\"background-image:url('";
            // line 31
            echo ($context["ABBC3_ICON_PATH"] ?? null);
            echo "img.";
            echo $context["ext"];
            echo "')\"></span>
\t\t\t\t\t\t<span style=\"background-image:url('";
            // line 32
            echo ($context["ABBC3_ICON_PATH"] ?? null);
            echo "url.";
            echo $context["ext"];
            echo "')\"></span>
\t\t\t\t\t\t<span style=\"background-image:url('";
            // line 33
            echo ($context["ABBC3_ICON_PATH"] ?? null);
            echo "fontcolor.";
            echo $context["ext"];
            echo "')\"></span>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ext'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t</dd>
\t\t</dl>
\t</fieldset>
\t<fieldset>
\t\t<legend>";
        // line 40
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_LEGEND_ADD_ONS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"abbc3_qr_bbcodes\">";
        // line 42
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ABBC3_QR_BBCODES") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label><br><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_QR_BBCODES_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"abbc3_qr_bbcodes\" id=\"abbc3_qr_bbcodes\" value=\"1\"";
        // line 43
        if (($context["S_ABBC3_QR_BBCODES"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo "> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"abbc3_qr_bbcodes\" value=\"0\"";
        // line 44
        if ( !($context["S_ABBC3_QR_BBCODES"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo "> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"abbc3_pipes\">";
        // line 47
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ABBC3_PIPES") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label><br><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_PIPES_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"abbc3_pipes\" id=\"abbc3_pipes\" value=\"1\"";
        // line 48
        if (($context["S_ABBC3_PIPES"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo "> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"abbc3_pipes\" value=\"0\"";
        // line 49
        if ( !($context["S_ABBC3_PIPES"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo "> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"abbc3_google_fonts\">";
        // line 52
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_GOOGLE_FONTS");
        echo "</label><br><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_GOOGLE_FONTS_INFO");
        echo "</span></dt>
\t\t\t<dd><textarea id=\"abbc3_google_fonts\" cols=\"40\" rows=\"8\" name=\"abbc3_google_fonts\">";
        // line 53
        echo ($context["S_ABBC3_GOOGLE_FONTS"] ?? null);
        echo "</textarea></dd>
\t\t</dl>
\t</fieldset>
\t<fieldset class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 57
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\">&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 58
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\">
\t\t";
        // line 59
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>
</form>

<script>
\tconst select = document.querySelector(\"select[name='abbc3_icons_type']\");
\tdocument.querySelector(\".abbc3-icons-\" + select.value).classList.toggle(\"hidden\");
\tselect.addEventListener(\"change\", () => {
\t\tfor (const bar of document.querySelectorAll(\".abbc3-bar\")) {
\t\t\tbar.classList.toggle(\"hidden\");
\t\t}
\t});
</script>

";
        // line 73
        $this->loadTemplate("overall_footer.html", "acp_abbc3_settings.html", 73)->display($context);
    }

    public function getTemplateName()
    {
        return "acp_abbc3_settings.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 73,  276 => 59,  272 => 58,  268 => 57,  261 => 53,  255 => 52,  245 => 49,  237 => 48,  231 => 47,  221 => 44,  213 => 43,  207 => 42,  202 => 40,  196 => 36,  185 => 33,  179 => 32,  173 => 31,  167 => 30,  161 => 29,  155 => 28,  149 => 27,  143 => 26,  137 => 25,  131 => 24,  125 => 23,  120 => 22,  115 => 21,  113 => 20,  109 => 19,  102 => 17,  92 => 14,  84 => 13,  78 => 12,  73 => 10,  68 => 8,  63 => 6,  56 => 4,  53 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_abbc3_settings.html", "");
    }
}
