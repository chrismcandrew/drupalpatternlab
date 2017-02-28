<?php

/* block--system-menu-block.html.twig */
class __TwigTemplate_b909ec4287c46fcca4f269a7bdfed96a7622cbca307b8beb14761d5ecb453ab6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'template' => array($this, 'block_template'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 34, "block" => 37, "include" => 38);
        $filters = array("clean_id" => 34, "without" => 35);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'include'),
                array('clean_id', 'without'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 34
        $context["heading_id"] = ($this->getAttribute(($context["attributes"] ?? null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 35
        $context["attributes"] = twig_without(($context["attributes"] ?? null), "role", "aria-labelledby");
        // line 36
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "nav"), "method");
        // line 37
        $this->displayBlock('template', $context, $blocks);
    }

    public function block_template($context, array $blocks = array())
    {
        // line 38
        echo "  ";
        $this->loadTemplate("@molecules/navigation/shila-navigation/shila-navigation.html.twig", "block--system-menu-block.html.twig", 38)->display($context);
    }

    public function getTemplateName()
    {
        return "block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 38,  50 => 37,  48 => 36,  46 => 35,  44 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "block--system-menu-block.html.twig", "themes/shila-drupal-theme/templates/block/block--system-menu-block.html.twig");
    }
}
