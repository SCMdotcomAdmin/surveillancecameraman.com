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

/* @vse_abbc3/abbc3_posting_buttons.html */
class __TwigTemplate_bc5bb05b094eaed8bb934161a771a3426267bd8b59bb7235f7357e839ecc1e4b extends \Twig\Template
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
        echo "<script>

/*global theSelection, form_name */

var copyPaste = '';

/**
* Strip all BBCodes from the selected text
*/
function bbcodeToPlain(data) {
\tif (data.indexOf('[') < 0) {
\t\treturn data;
\t}

\tfunction bbcodeToPlainSimpleReplace(str) {
\t\treturn str.replace(basicBBcodeMatch, bbcodeToPlainPattern);
\t}

\tfunction bbcodeToPlainPattern(match_0, match_1, match_2, match_3) {
\t\tif (match_3 && match_3.indexOf('[') > -1) {
\t\t\tmatch_3 = bbcodeToPlainSimpleReplace(match_3);
\t\t}
\t\treturn match_3;
\t}

\tvar basicBBcodeMatch = new RegExp('\\\\[([a-z][a-z0-9]*)(?:=([^\\\\]]+))?]((?:.|[\\r\\n])*?)\\\\[/\\\\1]', 'gim');

\treturn bbcodeToPlainSimpleReplace(data);
}

/**
* Apply special BBCodes
*/
function bbspecial(bbcode, bbcodeId) {
\ttheSelection = false;

\tvar textarea = document.forms[form_name].elements[text_name];

\ttextarea.focus();

\tvar selLength, selStart, selEnd, s1, s2, s3;

\tif ((clientVer >= 4) && is_ie && is_win) {
\t\t// Get text selection
\t\ttheSelection = document.selection.createRange().text;
\t} else if (document.forms[form_name].elements[text_name].selectionEnd
\t\t\t&& (document.forms[form_name].elements[text_name].selectionEnd - document.forms[form_name].elements[text_name].selectionStart > 0)) {
\t\tselLength = textarea.textLength;
\t\tselLength = (typeof(selLength) === 'undefined' || selLength === '' || selLength === null) ? textarea.value.length : selLength;
\t\tselStart = textarea.selectionStart;
\t\tselEnd = textarea.selectionEnd;

\t\tif (selEnd === 1 || selEnd === 2) {
\t\t\tselEnd = selLength;
\t\t}

\t\ts1 = (textarea.value).substring(0, selStart);
\t\ts2 = (textarea.value).substring(selStart, selEnd);
\t\ts3 = (textarea.value).substring(selEnd, selLength);
\t\ttheSelection = s2;
\t}

\tswitch (bbcode) {
\t\tcase 'abbc3_plain':
\t\t\tif (theSelection) {
\t\t\t\ttry {
\t\t\t\t\tvar tempSelection = bbcodeToPlain(theSelection);

\t\t\t\t\tif ((clientVer >= 4) && is_ie && is_win) {
\t\t\t\t\t\tdocument.selection.createRange().text = tempSelection;
\t\t\t\t\t}
\t\t\t\t\telse if (textarea.selectionEnd && (textarea.selectionEnd - textarea.selectionStart > 0)) {
\t\t\t\t\t\ttextarea.value = s1 + tempSelection + s3;
\t\t\t\t\t\tselEnd = textarea.selectionEnd = (textarea.value).substring(0, selStart).length + tempSelection.length;
\t\t\t\t\t}
\t\t\t\t} catch (e) {}
\t\t\t} else {
\t\t\t\talert('";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_NOSELECT_ERROR"), "js");
        echo "');
\t\t\t\treturn;
\t\t\t}
\t\t\tbreak;

\t\tcase 'abbc3_copy':
\t\t\tif (theSelection) {
\t\t\t\tcopyPaste = theSelection;
\t\t\t} else {
\t\t\t\talert('";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_NOSELECT_ERROR"), "js");
        echo "');
\t\t\t\treturn;
\t\t\t}
\t\t\tbreak;

\t\tcase 'abbc3_paste':
\t\t\tif (copyPaste) {
\t\t\t\tbbfontstyle(copyPaste, '');
\t\t\t} else {
\t\t\t\talert('";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_PASTE_ERROR"), "js");
        echo "');
\t\t\t}
\t\t\tbreak;

\t\tcase 'align':
\t\tcase 'align=':
\t\t\tbbfontstyle('[align=center]', '[/align]');
\t\t\tbreak;

\t\tcase 'float':
\t\tcase 'float=':
\t\t\tbbfontstyle('[float=left]', '[/float]');
\t\t\tbreak;

\t\tcase 'dir':
\t\tcase 'dir=':
\t\t\tbbfontstyle('[dir=rtl]', '[/dir]');
\t\t\tbreak;

\t\tcase 'marq':
\t\tcase 'marq=':
\t\t\tbbfontstyle('[marq=left]', '[/marq]');
\t\t\tbreak;

\t\tcase 'mod':
\t\tcase 'mod=':
\t\t\tbbfontstyle('[mod=";
        // line 122
        echo twig_escape_filter($this->env, ($context["ABBC3_USERNAME"] ?? null), "js");
        echo "]', '[/mod]');
\t\t\tbreak;

\t\tcase 'highlight':
\t\tcase 'highlight=':
\t\t\tbbfontstyle('[highlight=yellow]', '[/highlight]');
\t\t\tbreak;

\t\tcase 'glow':
\t\tcase 'glow=':
\t\t\tbbfontstyle('[glow=red]', '[/glow]');
\t\t\tbreak;

\t\tcase 'shadow':
\t\tcase 'shadow=':
\t\t\tbbfontstyle('[shadow=blue]', '[/shadow]');
\t\t\tbreak;

\t\tcase 'dropshadow':
\t\tcase 'dropshadow=':
\t\t\tbbfontstyle('[dropshadow=blue]', '[/dropshadow]');
\t\t\tbreak;

\t\tcase 'blur':
\t\tcase 'blur=':
\t\t\tbbfontstyle('[blur=blue]', '[/blur]');
\t\t\tbreak;

\t\tcase 'bbvideo':
\t\tcase 'BBvideo':
\t\tcase 'BBvideo=':
\t\tcase 'media':
\t\t\tvar tag = bbcode.replace('=', '').toLowerCase();
\t\t\tif (theSelection || phpbb.isTouch) {
\t\t\t\tbbfontstyle('[' + tag + ']', '[/' + tag + ']');
\t\t\t} else {
\t\t\t\tbbwizard('";
        // line 158
        echo ($context["UA_ABBC3_BBVIDEO_WIZARD"] ?? null);
        echo "', tag);
\t\t\t}
\t\t\tbreak;

\t\tcase 'url':
\t\t\tif (theSelection || phpbb.isTouch) {
\t\t\t\tbbstyle(16);
\t\t\t} else {
\t\t\t\tbbwizard('";
        // line 166
        echo ($context["UA_ABBC3_URL_WIZARD"] ?? null);
        echo "', bbcode);
\t\t\t}
\t\t\tbreak;

\t\tcase 'pipes':
\t\t\tbbwizard('";
        // line 171
        echo ($context["UA_ABBC3_PIPES_WIZARD"] ?? null);
        echo "', bbcode);
\t\t\tbreak;

\t\tdefault:
\t\t\tbbstyle(bbcodeId);
\t\t\tbreak;
\t}

\ttheSelection = '';
}

</script>

<div id=\"abbc3_buttons\">
\t<div class=\"abbc3_buttons_row\">
\t\t<button type=\"button\" class=\"";
        // line 186
        echo ((twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "bold", [], "any", false, false, false, 186)) ? ("abbc3_button") : ("button button-icon-only bbcode-b"));
        echo "\" accesskey=\"b\" name=\"addbbcode0\" value=\" B \" style=\"background-image:url('";
        echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "bold", [], "any", false, false, false, 186));
        echo "');\" onclick=\"bbstyle(0)\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_B_HELP");
        echo "\">
\t\t\t";
        // line 187
        if ( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "bold", [], "any", false, false, false, 187)) {
            echo "<i class=\"icon fa-bold fa-fw\" aria-hidden=\"true\"></i>";
        }
        // line 188
        echo "\t\t</button>
\t\t<button type=\"button\" class=\"";
        // line 189
        echo ((twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "italic", [], "any", false, false, false, 189)) ? ("abbc3_button") : ("button button-icon-only bbcode-i"));
        echo "\" accesskey=\"i\" name=\"addbbcode2\" value=\" i \" style=\"background-image:url('";
        echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "italic", [], "any", false, false, false, 189));
        echo "');\" onclick=\"bbstyle(2)\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_I_HELP");
        echo "\">
\t\t\t";
        // line 190
        if ( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "italic", [], "any", false, false, false, 190)) {
            echo "<i class=\"icon fa-underline fa-fw\" aria-hidden=\"true\"></i>";
        }
        // line 191
        echo "\t\t</button>
\t\t<button type=\"button\" class=\"";
        // line 192
        echo ((twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "underline", [], "any", false, false, false, 192)) ? ("abbc3_button") : ("button button-icon-only bbcode-u"));
        echo "\" accesskey=\"u\" name=\"addbbcode4\" value=\" u \" style=\"background-image:url('";
        echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "underline", [], "any", false, false, false, 192));
        echo "');\" onclick=\"bbstyle(4)\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_U_HELP");
        echo "\">
\t\t\t";
        // line 193
        if ( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "underline", [], "any", false, false, false, 193)) {
            echo "<i class=\"icon fa-italic fa-fw\" aria-hidden=\"true\"></i>";
        }
        // line 194
        echo "\t\t</button>
\t\t";
        // line 195
        if (($context["S_BBCODE_QUOTE"] ?? null)) {
            // line 196
            echo "\t\t\t<button type=\"button\" class=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "quote", [], "any", false, false, false, 196)) ? ("abbc3_button") : ("button button-icon-only bbcode-quote"));
            echo "\" accesskey=\"q\" name=\"addbbcode6\" value=\"Quote\" style=\"background-image:url('";
            echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "quote", [], "any", false, false, false, 196));
            echo "');\" onclick=\"bbstyle(6)\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_Q_HELP");
            echo "\">
\t\t\t\t";
            // line 197
            if ( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "quote", [], "any", false, false, false, 197)) {
                echo "<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 198
            echo "\t\t\t</button>
\t\t";
        }
        // line 200
        echo "\t\t<button type=\"button\" class=\"";
        echo ((twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "code", [], "any", false, false, false, 200)) ? ("abbc3_button") : ("button button-icon-only bbcode-code"));
        echo "\" accesskey=\"c\" name=\"addbbcode8\" value=\"Code\" style=\"background-image:url('";
        echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "code", [], "any", false, false, false, 200));
        echo "');\" onclick=\"bbstyle(8)\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_C_HELP");
        echo "\">
\t\t\t";
        // line 201
        if ( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "code", [], "any", false, false, false, 201)) {
            echo "<i class=\"icon fa-code fa-fw\" aria-hidden=\"true\"></i>";
        }
        // line 202
        echo "\t\t</button>
\t\t<button type=\"button\" class=\"";
        // line 203
        echo ((twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "listb", [], "any", false, false, false, 203)) ? ("abbc3_button") : ("button button-icon-only bbcode-list"));
        echo "\" accesskey=\"l\" name=\"addbbcode10\" value=\"List\" style=\"background-image:url('";
        echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "listb", [], "any", false, false, false, 203));
        echo "');\" onclick=\"bbstyle(10)\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_L_HELP");
        echo "\">
\t\t\t";
        // line 204
        if ( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "listb", [], "any", false, false, false, 204)) {
            echo "<i class=\"icon fa-list fa-fw\" aria-hidden=\"true\"></i>";
        }
        // line 205
        echo "\t\t</button>
\t\t<button type=\"button\" class=\"";
        // line 206
        echo ((twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "listo", [], "any", false, false, false, 206)) ? ("abbc3_button") : ("button button-icon-only bbcode-list-"));
        echo "\" accesskey=\"o\" name=\"addbbcode12\" value=\"List=\" style=\"background-image:url('";
        echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "listo", [], "any", false, false, false, 206));
        echo "');\" onclick=\"bbstyle(12)\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_O_HELP");
        echo "\">
\t\t\t";
        // line 207
        if ( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "bold", [], "any", false, false, false, 207)) {
            echo "<i class=\"icon fa-list-ol fa-fw\" aria-hidden=\"true\"></i>";
        }
        // line 208
        echo "\t\t</button>
\t\t<button type=\"button\" class=\"";
        // line 209
        echo ((twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "listitem", [], "any", false, false, false, 209)) ? ("abbc3_button") : ("button button-icon-only bbcode-asterisk"));
        echo "\" accesskey=\"y\" name=\"addlistitem\" value=\"[*]\" style=\"background-image:url('";
        echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "listitem", [], "any", false, false, false, 209));
        echo "');\" onclick=\"bbstyle(-1)\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_LISTITEM_HELP");
        echo "\">
\t\t\t";
        // line 210
        if ( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "listitem", [], "any", false, false, false, 210)) {
            echo "<i class=\"icon fa-asterisk fa-fw\" aria-hidden=\"true\"></i>";
        }
        // line 211
        echo "\t\t</button>
\t\t";
        // line 212
        if (($context["S_BBCODE_IMG"] ?? null)) {
            // line 213
            echo "\t\t\t<button type=\"button\" class=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "img", [], "any", false, false, false, 213)) ? ("abbc3_button") : ("button button-icon-only bbcode-img"));
            echo "\" accesskey=\"p\" name=\"addbbcode14\" value=\"Img\" style=\"background-image:url('";
            echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "img", [], "any", false, false, false, 213));
            echo "');\" onclick=\"bbstyle(14)\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_P_HELP");
            echo "\">
\t\t\t\t";
            // line 214
            if ( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "img", [], "any", false, false, false, 214)) {
                echo "<i class=\"icon fa-image fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 215
            echo "\t\t\t</button>
\t\t";
        }
        // line 217
        echo "\t\t";
        if (($context["S_LINKS_ALLOWED"] ?? null)) {
            // line 218
            echo "\t\t\t<button type=\"button\" class=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "url", [], "any", false, false, false, 218)) ? ("abbc3_button") : ("button button-icon-only bbcode-url"));
            echo "\" accesskey=\"w\" name=\"addbbcode16\" value=\"URL\" style=\"background-image:url('";
            echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "url", [], "any", false, false, false, 218));
            echo "');\" onclick=\"bbspecial('url')\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_W_HELP");
            echo "\">
\t\t\t\t";
            // line 219
            if ( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "url", [], "any", false, false, false, 219)) {
                echo "<i class=\"icon fa-link fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 220
            echo "\t\t\t</button>
\t\t";
        }
        // line 222
        echo "\t\t";
        if (($context["S_BBCODE_FLASH"] ?? null)) {
            // line 223
            echo "\t\t\t<button type=\"button\" class=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "flash", [], "any", false, false, false, 223)) ? ("abbc3_button") : ("button button-icon-only bbcode-flash"));
            echo "\" accesskey=\"d\" name=\"addbbcode18\" value=\"Flash\" style=\"background-image:url('";
            echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "flash", [], "any", false, false, false, 223));
            echo "');\" onclick=\"bbstyle(18)\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_D_HELP");
            echo "\">
\t\t\t\t";
            // line 224
            if ( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "flash", [], "any", false, false, false, 224)) {
                echo "<i class=\"icon fa-flash fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 225
            echo "\t\t\t</button>
\t\t";
        }
        // line 227
        echo "\t\t";
        if (($context["S_BBCODE_MEDIA"] ?? null)) {
            // line 228
            echo "\t\t\t<button type=\"button\" class=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "media", [], "any", false, false, false, 228)) ? ("abbc3_button") : ("button button-icon-only bbcode-media"));
            echo "\" accesskey=\"m\" name=\"addmedia\" value=\"Media\" style=\"background-image:url('";
            echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "media", [], "any", false, false, false, 228));
            echo "');\" onclick=\"bbspecial('media');\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_MEDIA_HELP");
            echo "\">
\t\t\t\t";
            // line 229
            if ( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "media", [], "any", false, false, false, 229)) {
                echo "<i class=\"icon fa-television fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 230
            echo "\t\t\t</button>
\t\t";
        }
        // line 232
        echo "\t\t<button type=\"button\" class=\"";
        echo ((twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "fontcolor", [], "any", false, false, false, 232)) ? ("abbc3_button") : ("button button-icon-only bbcode-color"));
        echo "\" name=\"abbc3_bbpalette\" id=\"abbc3_bbpalette\" value=\"";
        echo (( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "fontcolor", [], "any", false, false, false, 232)) ? ($this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR")) : (""));
        echo "\" style=\"background-image:url('";
        echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "fontcolor", [], "any", false, false, false, 232));
        echo "');\" onclick=\"change_palette();\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_S_HELP");
        echo "\">
\t\t\t";
        // line 233
        if ( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "fontcolor", [], "any", false, false, false, 233)) {
            echo "<i class=\"icon fa-tint fa-fw\" aria-hidden=\"true\"></i>";
        }
        // line 234
        echo "\t\t</button>
\t\t<select class=\"abbc3_select\" name=\"abbc3_addbbcode20\" onchange=\"bbfontstyle('[size=' + this.form.abbc3_addbbcode20.options[this.form.abbc3_addbbcode20.selectedIndex].value + ']', '[/size]');this.form.abbc3_addbbcode20.selectedIndex = 2;\" title=\"";
        // line 235
        echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_F_HELP");
        echo "\">
\t\t\t<option value=\"50\">";
        // line 236
        echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_TINY");
        echo "</option>
\t\t\t<option value=\"85\">";
        // line 237
        echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_SMALL");
        echo "</option>
\t\t\t<option value=\"100\" selected=\"selected\">";
        // line 238
        echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_NORMAL");
        echo "</option>
\t\t\t";
        // line 239
        if (( !($context["MAX_FONT_SIZE"] ?? null) || (($context["MAX_FONT_SIZE"] ?? null) >= 150))) {
            // line 240
            echo "\t\t\t\t<option value=\"150\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_LARGE");
            echo "</option>
\t\t\t\t";
            // line 241
            if (( !($context["MAX_FONT_SIZE"] ?? null) || (($context["MAX_FONT_SIZE"] ?? null) >= 200))) {
                // line 242
                echo "\t\t\t\t\t<option value=\"200\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_HUGE");
                echo "</option>
\t\t\t\t";
            }
            // line 244
            echo "\t\t\t";
        }
        // line 245
        echo "\t\t</select>
\t\t<button type=\"button\" class=\"";
        // line 246
        echo ((twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "copy", [], "any", false, false, false, 246)) ? ("abbc3_button") : ("button button-icon-only bbcode-copy"));
        echo "\" name=\"copybbcode\" value=\"copy\" style=\"background-image:url('";
        echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "copy", [], "any", false, false, false, 246));
        echo "');\" onclick=\"bbspecial('abbc3_copy')\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_COPY_BBCODE");
        echo "\">
\t\t\t";
        // line 247
        if ( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "copy", [], "any", false, false, false, 247)) {
            echo "<i class=\"icon fa-copy fa-fw\" aria-hidden=\"true\"></i>";
        }
        // line 248
        echo "\t\t</button>
\t\t<button type=\"button\" class=\"";
        // line 249
        echo ((twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "paste", [], "any", false, false, false, 249)) ? ("abbc3_button") : ("button button-icon-only bbcode-paste"));
        echo "\" name=\"pastebbcode\" value=\"paste\" style=\"background-image:url('";
        echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "paste", [], "any", false, false, false, 249));
        echo "');\" onclick=\"bbspecial('abbc3_paste')\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_PASTE_BBCODE");
        echo "\">
\t\t\t";
        // line 250
        if ( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "paste", [], "any", false, false, false, 250)) {
            echo "<i class=\"icon fa-paste fa-fw\" aria-hidden=\"true\"></i>";
        }
        // line 251
        echo "\t\t</button>
\t\t<button type=\"button\" class=\"";
        // line 252
        echo ((twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "plain", [], "any", false, false, false, 252)) ? ("abbc3_button") : ("button button-icon-only bbcode-plain"));
        echo "\" name=\"plainbbcode\" value=\"clear\" style=\"background-image:url('";
        echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "plain", [], "any", false, false, false, 252));
        echo "');\" onclick=\"bbspecial('abbc3_plain')\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_PLAIN_BBCODE");
        echo "\">
\t\t\t";
        // line 253
        if ( !twig_get_attribute($this->env, $this->source, ($context["ABBC3_BBCODE_ICONS"] ?? null), "plain", [], "any", false, false, false, 253)) {
            echo "<i class=\"icon fa-trash fa-fw\" aria-hidden=\"true\"></i>";
        }
        // line 254
        echo "\t\t</button>
\t\t";
        // line 255
        // line 256
        echo "\t</div>
\t";
        // line 257
        if (($context["custom_tags"] ?? null)) {
            // line 258
            echo "\t\t<div class=\"abbc3_buttons_row\" style=\"border-top:0;\">
\t\t\t";
            // line 259
            // line 260
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_tag"]) {
                // line 261
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["custom_tag"], "S_CUSTOM_BBCODE_ALLOWED", [], "any", false, false, false, 261)) {
                    // line 262
                    echo "\t\t\t\t\t";
                    if (((twig_get_attribute($this->env, $this->source, $context["custom_tag"], "BBCODE_TAG", [], "any", false, false, false, 262) == "font=") || (twig_get_attribute($this->env, $this->source, $context["custom_tag"], "BBCODE_TAG", [], "any", false, false, false, 262) == "font"))) {
                        // line 263
                        echo "\t\t\t\t\t\t<select class=\"abbc3_select\" name=\"abbc3_font\" onchange=\"bbfontstyle('[font=' + this.form.abbc3_font.options[this.form.abbc3_font.selectedIndex].value + ']', '[/font]'); this.form.abbc3_font.selectedIndex = 0\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_tag"], "BBCODE_HELPLINE", [], "any", false, false, false, 263);
                        echo "\">
\t\t\t\t\t\t\t<option selected=\"selected\" >";
                        // line 264
                        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_FONT_BBCODE");
                        echo "</option>
\t\t\t\t\t\t\t";
                        // line 265
                        if (($context["S_ALLOW_CDN"] ?? null)) {
                            // line 266
                            echo "\t\t\t\t\t\t\t\t";
                            if ( !twig_test_iterable(($context["abbc3_google_fonts"] ?? null))) {
                                $context["abbc3_google_fonts"] = [];
                            }
                            // line 267
                            echo "\t\t\t\t\t\t\t\t";
                            $context["abbc3_google_fonts"] = twig_array_merge(($context["abbc3_google_fonts"] ?? null), [0 => "Open Sans"]);
                            // line 268
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 269
                        echo "\t\t\t\t\t\t\t";
                        if (twig_test_iterable(($context["abbc3_google_fonts"] ?? null))) {
                            $context["ABBC3_BBCODE_FONTS"] = twig_array_merge(["ABBC3_GOOGLE_FONTS" => twig_sort_filter($this->env, ($context["abbc3_google_fonts"] ?? null))], ($context["ABBC3_BBCODE_FONTS"] ?? null));
                        }
                        // line 270
                        echo "\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["ABBC3_BBCODE_FONTS"] ?? null));
                        foreach ($context['_seq'] as $context["group"] => $context["fonts"]) {
                            // line 271
                            echo "\t\t\t\t\t\t\t\t<optgroup label=\"";
                            echo $this->extensions['phpbb\template\twig\extension']->lang($context["group"]);
                            echo "\">
\t\t\t\t\t\t\t\t\t";
                            // line 272
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["fonts"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
                                // line 273
                                echo "\t\t\t\t\t\t\t\t\t\t<option style=\"font-family:'";
                                echo $context["font"];
                                echo "',sans-serif;\" value=\"";
                                echo $context["font"];
                                echo "\">";
                                echo $context["font"];
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 275
                            echo "\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['group'], $context['fonts'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 277
                        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t";
                    } else {
                        // line 279
                        echo "\t\t\t\t\t\t<button type=\"button\" class=\"";
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_tag"], "BBCODE_IMG", [], "any", false, false, false, 279)) ? ("abbc3_button") : (("button button-secondary bbcode-" . twig_get_attribute($this->env, $this->source, $context["custom_tag"], "BBCODE_TAG_CLEAN", [], "any", false, false, false, 279))));
                        echo "\" name=\"addbbcode";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_tag"], "BBCODE_ID", [], "any", false, false, false, 279);
                        echo "\" value=\"";
                        echo (( !twig_get_attribute($this->env, $this->source, $context["custom_tag"], "BBCODE_IMG", [], "any", false, false, false, 279)) ? (twig_get_attribute($this->env, $this->source, $context["custom_tag"], "BBCODE_TAG", [], "any", false, false, false, 279)) : (""));
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_tag"], "BBCODE_IMG", [], "any", false, false, false, 279)) {
                            echo " style=\"background-image:url('";
                            echo (($context["ROOT_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, $context["custom_tag"], "BBCODE_IMG", [], "any", false, false, false, 279));
                            echo "');\"";
                        }
                        echo " onclick=\"bbspecial('";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_tag"], "BBCODE_TAG", [], "any", false, false, false, 279);
                        echo "', ";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_tag"], "BBCODE_ID", [], "any", false, false, false, 279);
                        echo ")\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_tag"], "BBCODE_HELPLINE", [], "any", false, false, false, 279);
                        echo "\">";
                        echo (( !twig_get_attribute($this->env, $this->source, $context["custom_tag"], "BBCODE_IMG", [], "any", false, false, false, 279)) ? (twig_get_attribute($this->env, $this->source, $context["custom_tag"], "BBCODE_TAG", [], "any", false, false, false, 279)) : (""));
                        echo "</button>
\t\t\t\t\t";
                    }
                    // line 281
                    echo "\t\t\t\t";
                }
                // line 282
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo "\t\t\t";
            // line 284
            echo "\t\t</div>
\t";
        }
        // line 286
        echo "</div>
<div id=\"bbcode_wizard\"></div>
";
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/abbc3_posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  674 => 286,  670 => 284,  668 => 283,  662 => 282,  659 => 281,  635 => 279,  631 => 277,  624 => 275,  611 => 273,  607 => 272,  602 => 271,  597 => 270,  592 => 269,  589 => 268,  586 => 267,  581 => 266,  579 => 265,  575 => 264,  570 => 263,  567 => 262,  564 => 261,  559 => 260,  558 => 259,  555 => 258,  553 => 257,  550 => 256,  549 => 255,  546 => 254,  542 => 253,  534 => 252,  531 => 251,  527 => 250,  519 => 249,  516 => 248,  512 => 247,  504 => 246,  501 => 245,  498 => 244,  492 => 242,  490 => 241,  485 => 240,  483 => 239,  479 => 238,  475 => 237,  471 => 236,  467 => 235,  464 => 234,  460 => 233,  449 => 232,  445 => 230,  441 => 229,  432 => 228,  429 => 227,  425 => 225,  421 => 224,  412 => 223,  409 => 222,  405 => 220,  401 => 219,  392 => 218,  389 => 217,  385 => 215,  381 => 214,  372 => 213,  370 => 212,  367 => 211,  363 => 210,  355 => 209,  352 => 208,  348 => 207,  340 => 206,  337 => 205,  333 => 204,  325 => 203,  322 => 202,  318 => 201,  309 => 200,  305 => 198,  301 => 197,  292 => 196,  290 => 195,  287 => 194,  283 => 193,  275 => 192,  272 => 191,  268 => 190,  260 => 189,  257 => 188,  253 => 187,  245 => 186,  227 => 171,  219 => 166,  208 => 158,  169 => 122,  140 => 96,  128 => 87,  116 => 78,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vse_abbc3/abbc3_posting_buttons.html", "");
    }
}
