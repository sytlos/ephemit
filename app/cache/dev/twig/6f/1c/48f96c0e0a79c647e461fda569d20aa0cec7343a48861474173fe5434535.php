<?php

/* EphemitEvenementBundle:Evenement:gerer.html.twig */
class __TwigTemplate_6f1c48f96c0e0a79c647e461fda569d20aa0cec7343a48861474173fe5434535 extends Twig_Template
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
        if ((isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            // line 4
            echo "        Identification...
        <script>
            setTimeout(function(){ window.location = Routing.generate(\"ephemit_page_admin\", {\"cle\":\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "cle"), "html", null, true);
            echo "\"}); }, 3000);
        </script>
    ";
        } else {
            // line 9
            echo "        <h1>cette page est protegee</h1>
        <form method=\"post\" action=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ephemit_gerer_evenement", array("cle" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "cle"))), "html", null, true);
            echo "\">
            <div>";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPassAdmin"]) ? $context["formPassAdmin"] : $this->getContext($context, "formPassAdmin")), "adminpass1"), 'widget');
            echo "</div>
            <div>";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPassAdmin"]) ? $context["formPassAdmin"] : $this->getContext($context, "formPassAdmin")), "adminpass2"), 'widget');
            echo "</div>
            ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formPassAdmin"]) ? $context["formPassAdmin"] : $this->getContext($context, "formPassAdmin")), 'rest');
            echo "
            <input type=\"submit\" value=\"Valider\">
        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "EphemitEvenementBundle:Evenement:gerer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  55 => 12,  51 => 11,  47 => 10,  44 => 9,  38 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
