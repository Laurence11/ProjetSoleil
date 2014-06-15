<?php

/* SoleilSiteEftBundle:Categories:menu.html.twig */
class __TwigTemplate_bc549edc91923e4ec8511351d9dd444956a5a1eca9452bbc51f484158a2ab9cf extends Twig_Template
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
        // line 8
        echo "<ul>
";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 10
            echo "
    <li><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_site_eft_pages", array("slug" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "nom"), "html", null, true);
            echo "</a></li>
         
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo " </ul>
";
    }

    public function getTemplateName()
    {
        return "SoleilSiteEftBundle:Categories:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 10,  22 => 9,  19 => 8,  61 => 15,  58 => 14,  52 => 5,  42 => 14,  35 => 10,  27 => 5,  21 => 1,  74 => 26,  72 => 25,  67 => 23,  62 => 22,  60 => 21,  57 => 20,  51 => 19,  49 => 18,  44 => 17,  40 => 14,  37 => 13,  29 => 11,);
    }
}
