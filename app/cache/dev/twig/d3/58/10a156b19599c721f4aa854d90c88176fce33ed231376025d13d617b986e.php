<?php

/* EphemitSiteBundle:Site:index.html.twig */
class __TwigTemplate_d35810a156b19599c721f4aa854d90c88176fce33ed231376025d13d617b986e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("ephemit_evenement_creer");
        echo "\">Cr&eacute;er une page</a><br>
";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 6
            echo "    <p>Bienvenue, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</p>
    <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("ephemit_evenement_list");
            echo "\">Mes &eacute;v&egrave;nements</a><br>
    <a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Disconnect</a>
    
";
        } else {
            // line 11
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Register</a><br>
    <a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connect</a><br>
";
        }
        // line 14
        echo "    
";
        // line 15
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EphemitSiteBundle:Site:searchPage"), array());
        // line 16
        echo "
    

";
    }

    public function getTemplateName()
    {
        return "EphemitSiteBundle:Site:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  68 => 15,  65 => 14,  60 => 12,  55 => 11,  49 => 8,  45 => 7,  40 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
