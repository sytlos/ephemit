<?php

/* EphemitEvenementBundle:Evenement:page.html.twig */
class __TwigTemplate_18dd9d53e66a5d5c20eaa484cf0ab1f6bf7e37a4674deee9fc71c3b00d13341b extends Twig_Template
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
        echo "    ";
        if ((isset($context["protect"]) ? $context["protect"] : $this->getContext($context, "protect"))) {
            // line 4
            echo "        <h1>cette page est protegee</h1>
    ";
        } else {
            // line 6
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "nom"), "html", null, true);
            echo "</h1>

        <div>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description"), "html", null, true);
            echo "</div>
        <div>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "lieu"), "html", null, true);
            echo "</div>
        <div>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "date"), "d/m/Y"), "html", null, true);
            echo "</div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "EphemitEvenementBundle:Evenement:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  48 => 9,  44 => 8,  38 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
