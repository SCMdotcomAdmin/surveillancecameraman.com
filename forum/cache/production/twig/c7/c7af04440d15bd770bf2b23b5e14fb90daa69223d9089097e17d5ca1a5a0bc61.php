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

/* @phpbb_mediaembed/event/acp_overall_footer_after.html */
class __TwigTemplate_b2fd2592c39490e676c795fb9888d0436419eeee4cf79174edc86daa9baf03a6 extends \Twig\Template
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
        if (($context["MEDIA_SITES"] ?? null)) {
            // line 2
            echo "<script>
\t(function(\$) {
\t\t'use strict';
\t\t\$(function() {
\t\t\t\$('#mediaembed_manage').on('click', 'label', function() {
\t\t\t\tif (\$(this).children('input').prop('disabled')) {
\t\t\t\t\t// Create a phantom <div> element and set the HTML content for it, then return it as text
\t\t\t\t\tvar title = \$('<div>').html(\$(this).attr('title')).text();
\t\t\t\t\tphpbb.alert('";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("GENERAL_ERROR"), "js");
            echo "', title);
\t\t\t\t}
\t\t\t});
\t\t});
\t})(jQuery);
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_mediaembed/event/acp_overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_mediaembed/event/acp_overall_footer_after.html", "");
    }
}
