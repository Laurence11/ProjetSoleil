<?php

/* ::templateGeneral.html.twig */
class __TwigTemplate_0015359498fc9388b2394aed86ef72578d6eeee2d94a484664681118238710d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
    </head>
    <body>
        <header>
<!-- Affichege menu dynamique -->
    ";
        // line 10
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SoleilSiteEftBundle:Categorie:menu"));
        echo "
<!-- Fin affichage menu dynamique -->
        </header>
<!--affichage bouton don paypal -->
<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
<input type=\"hidden\" name=\"cmd\" value=\"_donations\">
<input type=\"hidden\" name=\"business\" value=\"niennatelrunia@hotmail.com\">
<input type=\"hidden\" name=\"lc\" value=\"FR\">
<input type=\"hidden\" name=\"item_name\" value=\"Avec le Soleil ASBL\">
<input type=\"hidden\" name=\"no_note\" value=\"0\">
<input type=\"hidden\" name=\"currency_code\" value=\"EUR\">
<input type=\"hidden\" name=\"bn\" value=\"PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest\">
<input type=\"image\" src=\"https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donate_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !\">
<img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif\" width=\"1\" height=\"1\">
</form>

<!-- Fin affichage bouton don paypal-->
      <!-- Affichage contenu central des pages-->
     ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "<!-- Fin affichage contenu central -->  

    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "EFT ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "            
          ";
    }

    public function getTemplateName()
    {
        return "::templateGeneral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  72 => 28,  66 => 5,  58 => 31,  56 => 28,  35 => 10,  27 => 5,  21 => 1,);
    }
}
