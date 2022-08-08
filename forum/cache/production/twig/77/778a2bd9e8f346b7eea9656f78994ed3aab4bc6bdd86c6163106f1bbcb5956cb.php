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

/* @vse_abbc3/event/posting_editor_buttons_after.html */
class __TwigTemplate_c322ec2f0c0669d09bbd9c0532b692b5d0a33eaf8e18f5eb1004cf0103e697ef extends \Twig\Template
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
        if (($context["S_ABBC3_BBCODES_BAR"] ?? null)) {
            // line 2
            echo "\t";
            $asset_file = "@vse_abbc3/abbc3_posting.min.css";
            $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->env->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
            }
            $this->env->get_assets_bag()->add_stylesheet($asset);            // line 3
            echo "\t";
            $this->loadTemplate("@vse_abbc3/abbc3_posting_buttons.html", "@vse_abbc3/event/posting_editor_buttons_after.html", 3)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/event/posting_editor_buttons_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vse_abbc3/event/posting_editor_buttons_after.html", "");
    }
}
