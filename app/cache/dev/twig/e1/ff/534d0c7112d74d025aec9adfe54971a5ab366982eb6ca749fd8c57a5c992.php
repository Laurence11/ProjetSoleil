<?php

/* SoleilSiteEftBundle:Articles:listeArticles.html.twig */
class __TwigTemplate_e1ff534d0c7112d74d025aec9adfe54971a5ab366982eb6ca749fd8c57a5c992 extends Twig_Template
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
        // line 13
        echo "
";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "
<h2>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
            echo "</h2>
<p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "texte"), "html", null, true);
            echo "</p>
";
            // line 19
            echo "<a href=\"https://twitter.com/share\" class=\"twitter-share-button\">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!--BOUTON J'AIME DE FACEBOOK-->          
<iframe src=\"http://www.facebook.com/plugins/like.php?href=http://ocalhost:8888/ProjetSoleil/web/app_dev.php/acceuil&amp;layout=standard&amp;show_faces=false&amp;width=400&amp;action=like&amp;colorscheme=light&amp;height=24\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:400px; height:24px;\" allowTransparency=\"true\"></iframe> 
<!--FIN DU BOUTON J'AIME-->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SoleilSiteEftBundle:Articles:listeArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 19,  33 => 17,  29 => 16,  26 => 15,  22 => 14,  19 => 13,);
    }
}
