<?php

/* EphemitCalendrierBundle:Calendrier:calendrier.html.twig */
class __TwigTemplate_31ea9cfe3c903344e1d320a69b9ff8156375ae8b64f7bbf34a0ac491440ff9af extends Twig_Template
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
        echo "<div class=\"calendar\" data-showdays=\"true\">
   <div data-role=\"day\" data-day=\"20141104\"></div>
</div>
<script type=\"text/javascript\">
    \$(\".calendar\").calendar();
    
    \$(document).ready(function(){
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 9
            echo "            var date = ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date"), "Y"), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date"), "m"), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date"), "d"), "html", null, true);
            echo ";

            \$('.c-day').each(function(){
                if(\$(this).attr('strtime') == date){
                    \$(this).css('background', 'green');
                    \$(this).css('cursor', 'pointer');
                    \$(this).addClass('favori-";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date"), "Y"), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date"), "m"), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date"), "d"), "html", null, true);
            echo "');
                }
            });
            
            
            \$('.favori-";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date"), "Y"), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date"), "m"), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date"), "d"), "html", null, true);
            echo "').click(function(){
                window.location = Routing.generate(\"ephemit_site_homepage\");
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            
    });
    
</script>";
    }

    public function getTemplateName()
    {
        return "EphemitCalendrierBundle:Calendrier:calendrier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  54 => 20,  44 => 15,  32 => 9,  28 => 8,  19 => 1,);
    }
}
