<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_e46e21a147cd740c07f897ada1075f4d8f5a491b801c938eecbc77137f6c4edb extends Twig_Template
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
        echo "<div class=\"panel panel-success\">
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_registration", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"panel-body\">
        <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register form-horizontal\">

            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            <div class=\"form-actions\">
                <input type=\"submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success pull-right\" />
            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  36 => 8,  19 => 1,  31 => 4,  28 => 3,  29 => 6,  25 => 4,  23 => 3,  20 => 1,  182 => 87,  179 => 86,  176 => 85,  167 => 75,  155 => 68,  144 => 60,  130 => 49,  120 => 42,  114 => 39,  107 => 35,  101 => 33,  98 => 32,  94 => 30,  88 => 28,  85 => 27,  82 => 26,  76 => 80,  74 => 32,  71 => 31,  69 => 26,  61 => 21,  56 => 18,  53 => 17,  47 => 88,  45 => 85,  41 => 83,  39 => 17,  35 => 15,  32 => 3,);
    }
}
