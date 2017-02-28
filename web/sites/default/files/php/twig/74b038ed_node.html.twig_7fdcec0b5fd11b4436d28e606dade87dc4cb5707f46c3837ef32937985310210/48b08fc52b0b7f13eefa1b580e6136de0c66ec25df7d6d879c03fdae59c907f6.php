<?php

/* node.html.twig */
class __TwigTemplate_1ffc9d74cbc4824603d8b26361387cfb37ca766bf5d2c9c548b19e8a590c1e01 extends Twig_Template
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
        $tags = array("set" => 74, "if" => 81, "trans" => 85, "include" => 87);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans', 'include'),
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

        // line 74
        $context["classes"] = array(0 => "node", 1 => ("node--" . $this->getAttribute(        // line 76
($context["node"] ?? null), "bundle", array())), 2 =>         // line 77
($context["view_mode"] ?? null));
        // line 80
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method");
        // line 81
        if ((($context["view_mode"] ?? null) != "page")) {
            // line 82
            echo "  ";
            $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title"), "method");
        }
        // line 84
        ob_start();
        // line 85
        echo "  ";
        echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
        $context["author"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 87
        $this->loadTemplate("@organisms/content/shila-content/shila-content.html.twig", "node.html.twig", 87)->display($context);
    }

    public function getTemplateName()
    {
        return "node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 87,  57 => 85,  55 => 84,  51 => 82,  49 => 81,  47 => 80,  45 => 77,  44 => 76,  43 => 74,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node.html.twig", "themes/shila-drupal-theme/templates/content/node.html.twig");
    }
}
