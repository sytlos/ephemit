<?php

/* EphemitEvenementBundle:Evenement:liste.html.twig */
class __TwigTemplate_83dd2de7f4ccde10c1dc0f3d861c1aa9cc202e68afc4ab368c2b6ce7659bb6be extends Twig_Template
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
        echo "<h1>Mes pages</h1>

<table>
    <th>Nom</th>
    <th>Date</th>
    <th>Lieu</th>
    <th>Description</th>
    <th>Modifier</th>
    <th>Supprimer</th>
    <th>Favoris</th>
";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEvent"]) ? $context["listEvent"] : $this->getContext($context, "listEvent")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 14
            echo "    <tr id=\"ligne_fav_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "id"), "html", null, true);
            echo "\">
        <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "nom"), "html", null, true);
            echo "</td>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "date"), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "lieu"), "html", null, true);
            echo "</td>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "description"), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ephemit_evenement_modifier", array("id" => $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "id"))), "html", null, true);
            echo "\" class=\"colorbox\">Modifier</a></td>
        <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ephemit_evenement_supprimer", array("id" => $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "id"))), "html", null, true);
            echo "\" class=\"colorbox\">supprimer</a></td>
        <td id=\"cellule_fav_";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "id"), "html", null, true);
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ephemit_favoris_ajouter", array("id" => $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "id"))), "html", null, true);
            echo "\" id=\"ajouter_fav_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "id"), "html", null, true);
            echo "\">Ajouter</a></td>
    </tr>
    
    <script>
        \$('#ajouter_fav_";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "id"), "html", null, true);
            echo "').click(function()
        {
            \$.ajax({
                    type: \"POST\",
                    dataType: \"json\",
                    url: Routing.generate(\"ephemit_favoris_ajouter\", {\"id\":";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "id"), "html", null, true);
            echo " }),
                    success: function(data)
                    {
                        \$('#ligne_fav_";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "id"), "html", null, true);
            echo "').fadeOut();
                    }
            });
            return false;
        });
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</table>

<a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("ephemit_site_homepage");
        echo "\">Retour</a>

<div>
    ";
        // line 45
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EphemitCalendrierBundle:Calendrier:index", array("favoris" => (isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")))), array());
        // line 46
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "EphemitEvenementBundle:Evenement:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 46,  124 => 45,  118 => 42,  114 => 40,  101 => 33,  95 => 30,  87 => 25,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  52 => 15,  47 => 14,  43 => 13,  31 => 3,  28 => 2,);
    }
}
