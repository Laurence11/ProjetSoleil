<?php

/* SoleilSiteEftBundle:Videos:videoAcceuil.html.twig */
class __TwigTemplate_bb9c8fe315ce43c267fd21d57a55e6f1dafa90a8a6b886cb9d6d3773eb80c445 extends Twig_Template
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
        echo "   <h3>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "nom"), "html", null, true);
        echo "</h3>
   <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "texte"), "html", null, true);
        echo "</p>
    <p>
        ";
        // line 5
        echo $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "url");
        echo "
    </p>";
    }

    public function getTemplateName()
    {
        return "SoleilSiteEftBundle:Videos:videoAcceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  24 => 3,  19 => 2,);
    }
}
