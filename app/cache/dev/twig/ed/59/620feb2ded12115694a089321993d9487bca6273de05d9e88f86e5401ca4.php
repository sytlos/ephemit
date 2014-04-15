<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_ed59620feb2ded12115694a089321993d9487bca6273de05d9e88f86e5401ca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"editable\">
        <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 5
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices"))) > 0)) {
            // line 8
            echo "    <div class=\"readonly\">
        <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 12
                echo "            <li>";
                echo twig_escape_filter($this->env, (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  54 => 12,  50 => 11,  45 => 9,  26 => 2,  20 => 1,  145 => 33,  139 => 29,  135 => 28,  131 => 27,  127 => 26,  123 => 25,  118 => 23,  114 => 22,  110 => 21,  106 => 20,  102 => 19,  98 => 18,  93 => 16,  89 => 15,  81 => 13,  75 => 10,  71 => 9,  67 => 8,  61 => 6,  55 => 5,  46 => 33,  42 => 8,  35 => 5,  33 => 6,  29 => 5,  23 => 1,  256 => 136,  251 => 134,  247 => 133,  243 => 132,  183 => 75,  178 => 73,  174 => 72,  170 => 71,  125 => 29,  120 => 27,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  84 => 14,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 7,  60 => 12,  56 => 11,  52 => 10,  48 => 34,  44 => 8,  40 => 7,  36 => 6,  31 => 4,  28 => 3,);
    }
}
