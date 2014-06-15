<?php

/* SoleilSiteEftBundle:Categories:detail.html.twig */
class __TwigTemplate_44cca9ee56998c16893ca753ca03810d398eeea10ce4a52d953179dd133bf270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::templateGeneral.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::templateGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "nom"), "html", null, true);
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
<div>
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "texte"), "html", null, true);
        echo "
</div>
";
        // line 18
        if (($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "slug") == "nos_activites")) {
            // line 19
            echo "         ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SoleilSiteEftBundle:Article:listeArticles"));
            echo "
          ";
        }
        // line 20
        echo "  
";
        // line 21
        if (($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "slug") == "acceuil")) {
            // line 22
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SoleilSiteEftBundle:Article:articleAcceuil"));
            echo ",
        ";
            // line 23
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SoleilSiteEftBundle:Video:videoAcceuil"));
            echo ",
        ";
            // line 24
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SoleilSiteEftBundle:Article:articleVedette"));
            echo "
";
        }
        // line 26
        if (($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "slug") == "contact")) {
            // line 27
            echo "        <h2>Nos coordonnées</h2>
        <h3>Avec le Soleil ASBL</h3>
        <p>rue de la Chaudronnerie 15</p>
        <p>4230 Grivegnée</p>
        ";
            // line 31
            $this->env->loadTemplate("SoleilSiteEftBundle:Contacts:contact.html.twig")->display($context);
            // line 32
            echo "        <iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=Rue+de+la+Chaudronnerie+14,+Li%C3%A8ge,+Belgique&amp;aq=0&amp;oq=rue&amp;sll=37.0625,-95.677068&amp;sspn=50.644639,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=Rue+de+la+Chaudronnerie+14,+4030+Li%C3%A8ge,+Belgique&amp;t=m&amp;z=14&amp;ll=50.631895,5.627435&amp;output=embed\"></iframe><br /><small><a href=\"https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=Rue+de+la+Chaudronnerie+14,+Li%C3%A8ge,+Belgique&amp;aq=0&amp;oq=rue&amp;sll=37.0625,-95.677068&amp;sspn=50.644639,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=Rue+de+la+Chaudronnerie+14,+4030+Li%C3%A8ge,+Belgique&amp;t=m&amp;z=14&amp;ll=50.631895,5.627435\" style=\"color:#0000FF;text-align:left\">Agrandir le plan</a></small>
";
        }
        // line 34
        if (($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "slug") == "videos")) {
            // line 35
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SoleilSiteEftBundle:Video:listeVideos"));
            echo "
";
        }
        // line 37
        if (($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "slug") == "agenda")) {
            // line 38
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SoleilSiteEftBundle:Formation:listeFormations"));
            echo ", 
        ";
            // line 39
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SoleilSiteEftBundle:Participant:inscription"));
            echo "
";
        }
        // line 40
        echo "    
";
    }

    public function getTemplateName()
    {
        return "SoleilSiteEftBundle:Categories:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  105 => 39,  100 => 38,  98 => 37,  92 => 35,  90 => 34,  86 => 32,  84 => 31,  78 => 27,  76 => 26,  71 => 24,  67 => 23,  62 => 22,  60 => 21,  57 => 20,  51 => 19,  49 => 18,  44 => 16,  40 => 14,  37 => 13,  29 => 11,);
    }
}
