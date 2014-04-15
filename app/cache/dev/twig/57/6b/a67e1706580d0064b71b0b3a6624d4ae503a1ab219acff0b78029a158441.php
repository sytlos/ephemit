<?php

/* EphemitSiteBundle:Site:search.html.twig */
class __TwigTemplate_576ba67e1706580d0064b71b0b3a6624d4ae503a1ab219acff0b78029a158441 extends Twig_Template
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
        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("ephemit_site_search");
        echo "\" method=\"post\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSearch"]) ? $context["formSearch"] : $this->getContext($context, "formSearch")), "search"), 'widget');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSearch"]) ? $context["formSearch"] : $this->getContext($context, "formSearch")), 'rest');
        echo "
</form> ";
    }

    public function getTemplateName()
    {
        return "EphemitSiteBundle:Site:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  24 => 2,  19 => 1,);
    }
}
