<?php

/* SoleilSiteEftBundle:Articles:articleAcceuil.html.twig */
class __TwigTemplate_22acaf728edf0e4e8cbd93addf4fef5aa72ef5da310019ad207c429b25bb4e1a extends Twig_Template
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
        // line 1
        echo "
<h2>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
        echo "</h2>
<p>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "texte"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "SoleilSiteEftBundle:Articles:articleAcceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,  61 => 15,  58 => 14,  52 => 5,  42 => 14,  35 => 10,  27 => 5,  21 => 1,  74 => 26,  72 => 25,  67 => 23,  62 => 22,  60 => 21,  57 => 20,  51 => 19,  49 => 18,  44 => 17,  40 => 14,  37 => 13,  29 => 11,);
    }
}
