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
        <form method=\"post\" action=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ephemit_fiche_evenement", array("cle" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "cle"))), "html", null, true);
            echo "\">
            <div>";
            // line 6
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPass"]) ? $context["formPass"] : $this->getContext($context, "formPass")), "publicpass"), 'widget');
            echo "</div>
            ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formPass"]) ? $context["formPass"] : $this->getContext($context, "formPass")), 'rest');
            echo "
        </form>
    ";
        } else {
            // line 10
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ephemit_gerer_evenement", array("cle" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "cle"))), "html", null, true);
            echo "\">Gerer la page</a>
        <h1>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "nom"), "html", null, true);
            echo "</h1>

        <div>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description"), "html", null, true);
            echo "</div>
        <div>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "lieu"), "html", null, true);
            echo "</div>
        <div>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "date"), "html", null, true);
            echo "</div>
        
        <div class=\"gridimg\">
            ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arrayImg"]) ? $context["arrayImg"] : $this->getContext($context, "arrayImg")));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 19
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/gallery/" . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "nom"))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "nom"), "html", null, true);
                echo "\" width=150 height=150>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </div>
        
        <div class=\"pj\">
            ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arrayPJ"]) ? $context["arrayPJ"] : $this->getContext($context, "arrayPJ")));
            foreach ($context['_seq'] as $context["_key"] => $context["pj"]) {
                // line 25
                echo "                <a href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pj"]) ? $context["pj"] : $this->getContext($context, "pj")), "nomOriginal"), "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </div>
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
        return array (  108 => 27,  99 => 25,  95 => 24,  90 => 21,  79 => 19,  75 => 18,  69 => 15,  65 => 14,  61 => 13,  56 => 11,  51 => 10,  45 => 7,  41 => 6,  37 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
