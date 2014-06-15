<?php

/* SoleilSiteEftBundle:Videos:listeVideos.html.twig */
class __TwigTemplate_d44b1a4fd61c0c6866f50fd10077202a63987aeb9cf641e5aa34455e00c146d2 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 3
            echo "    <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "nom"), "html", null, true);
            echo "</h3>
    <p>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "texte"), "html", null, true);
            echo "</p>
    <p>
        ";
            // line 6
            echo $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "url");
            echo "
    </p>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "SoleilSiteEftBundle:Videos:listeVideos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  33 => 6,  28 => 4,  23 => 3,  19 => 2,);
    }
}
