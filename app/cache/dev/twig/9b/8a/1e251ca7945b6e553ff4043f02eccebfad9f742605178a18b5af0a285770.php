<?php

/* SoleilSiteEftBundle:Articles:articleVedette.html.twig */
class __TwigTemplate_9b8a1e251ca7945b6e553ff4043f02eccebfad9f742605178a18b5af0a285770 extends Twig_Template
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
        // line 2
        echo "
<h2>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
        echo "</h2>
<p>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "texte"), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "SoleilSiteEftBundle:Articles:articleVedette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 3,  19 => 2,  61 => 15,  58 => 14,  52 => 5,  42 => 14,  35 => 10,  27 => 5,  21 => 1,  74 => 26,  72 => 25,  67 => 23,  62 => 22,  60 => 21,  57 => 20,  51 => 19,  49 => 18,  44 => 17,  40 => 14,  37 => 13,  29 => 11,);
    }
}
