<?php

/* SoleilSiteEftBundle:Contacts:contact.html.twig */
class __TwigTemplate_1c1ba7acc6167915db0764a40fab39750e3c7fe1844a5c6ff0c27bff4f340864 extends Twig_Template
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
        echo "<h2>Nous contacter</h2>
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("soleil_site_eft_contact_send");
        echo "\" method=\"post\">
                                                            
            <p><input type=\"text\" name=\"prenom\" placeholder=\"Votre prénom\" /></p>
            <p><input type=\"text\" name=\"nom\"  placeholder=\"Votre nom\" /></p>
            <p><input type=\"email\" name=\"mail\"  placeholder=\"Votre mail\" /></p>
            <p><input type=\"text\" name=\"sujet\" placeholder=\"Sujet de votre courrier\" /></p>
            <p><textarea name=\"message\" placeholder=\"Votre message\"></textarea></p>
            <p><input type=\"submit\" /></p>
                                                            
</form>
";
    }

    public function getTemplateName()
    {
        return "SoleilSiteEftBundle:Contacts:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  19 => 2,);
    }
}
