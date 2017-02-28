<?php

/* themes/shila-drupal-theme/templates/form/form--search-block-form.html.twig */
class __TwigTemplate_054359633888d968a1f389dc36bca038e857c547128dab4dfa8c500ebad9385c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 13, "include" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'include'),
                array(),
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

        // line 13
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "search-block-form"), "method");
        // line 14
        $this->loadTemplate("@molecules/forms/shila-search-block-form/shila-search-block-form.html.twig", "themes/shila-drupal-theme/templates/form/form--search-block-form.html.twig", 14)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/shila-drupal-theme/templates/form/form--search-block-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  43 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/shila-drupal-theme/templates/form/form--search-block-form.html.twig", "/Users/bach/Sites/Projects/Sandbox/unh/drupalpatternlab/web/themes/shila-drupal-theme/templates/form/form--search-block-form.html.twig");
    }
}
