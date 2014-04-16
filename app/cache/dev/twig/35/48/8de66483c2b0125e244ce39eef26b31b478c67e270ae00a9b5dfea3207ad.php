<?php

/* EphemitEvenementBundle:Evenement:creer.html.twig */
class __TwigTemplate_35488de66483c2b0125e244ce39eef26b31b478c67e270ae00a9b5dfea3207ad extends Twig_Template
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
        echo "    <h1>Creer une page</h1>
    <div id=\"resultat\"></div>
    <form action=\"\" method=\"post\" id=\"formEvent\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "nom"), 'label');
        echo "<br>
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "nom"), 'widget');
        echo "<br>
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "date"), 'label');
        echo "<br>
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "date"), 'widget');
        echo "<br>
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "description"), 'label');
        echo "<br>
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "description"), 'widget');
        echo "<br>
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "lieu"), 'label');
        echo "<br>
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "lieu"), 'widget');
        echo "<br>
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "public"), 'label');
        echo "<br>
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "public"), 'widget');
        echo "<br>
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "publicpass"), 'label');
        echo "<br>
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "publicpass"), 'widget');
        echo "<br>
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "adminpass1"), 'label');
        echo "<br>
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "adminpass1"), 'widget');
        echo "<br>
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "adminpass2"), 'label');
        echo "<br>
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "adminpass2"), 'widget');
        echo "<br>
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "facebook"), 'label');
        echo "<br>
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "facebook"), 'widget');
        echo "<br>
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "twitter"), 'label');
        echo "<br>
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "twitter"), 'widget');
        echo "<br>
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "documents"), 'label');
        echo "<br>
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), "documents"), 'widget');
        echo "<br>
        
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEvent"]) ? $context["formEvent"] : $this->getContext($context, "formEvent")), 'rest');
        echo "
        <input type=\"submit\" value=\"Envoyer\">
    </form>
    
<script>
    
    
    
    \$('#formEvent').submit(function()
    {
        \$.ajax({
                type: \"POST\",
                dataType: \"json\",
                url: Routing.generate(\"ephemit_evenement_creer\"),
                data:\$('#formEvent').serialize(),
                success: function(data)
                {
                    \$('#formEvent').slideUp();
                    \$('#resultat').html('Votre evenement a bien ete depose! Vous allez etre redirige');
                    \$('#resultat').slideDown();
                    setTimeout(function(){ window.location = Routing.generate(\"ephemit_site_homepage\"); }, 3000);
                }
        });
        return false;
    });
    
\$(document).ready(function() {
  // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
  var \$container = \$('#ephemit_evenement_creer_documents');

  // On ajoute un lien pour ajouter une nouvelle catégorie
  var \$lienAjout = \$('<a href=\"#\" id=\"ajout_categorie\" class=\"btn\">Ajouter un document</a>');
  \$container.append(\$lienAjout);
  
  // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
  var index = \$container.find(':input').length;

  // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
  \$lienAjout.click(function(e) {
    ajouterCategorie(\$container);
    \$('.fileupload').uploadify(
    {
        swf: \"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ephemitsite/js/uploadify.swf"), "html", null, true);
        echo "\",
        uploader: \"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('oneup_uploader')->endpoint("gallery"), "html", null, true);
        echo "\",
        buttonText: 'Choisir',
        cancelImg : '";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ephemitsite/images/uploadify-cancel.png"), "html", null, true);
        echo "',
        multi : false,
        onUploadComplete : function(file,data){
            var count = index - 1;
            \$('#ephemit_evenement_creer_documents_'+count+'_nom').val(file.size+file.type);
            \$('#ephemit_evenement_creer_documents_'+count+'_nomOriginal').val(file.name);
        }
    });
    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
    return false;
  });

  // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
  if (index == 0) {
    ajouterCategorie(\$container);
  } else {
    // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
    \$container.children('div').each(function() {
      ajouterLienSuppression(\$(this));
    });
  }

  // La fonction qui ajoute un formulaire Categorie
  function ajouterCategorie(\$container) {
    // Dans le contenu de l'attribut « data-prototype », on remplace :
    // - le texte \"__name__label__\" qu'il contient par le label du champ
    // - le texte \"__name__\" qu'il contient par le numéro du champ
    var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Document n°' + (index+1))
                                                        .replace(/__name__/g, index));

    // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
    ajouterLienSuppression(\$prototype);

    // On ajoute le prototype modifié à la fin de la balise <div>
    \$container.append(\$prototype);

    // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
    index++;
  }

  // La fonction qui ajoute un lien de suppression d'une catégorie
  function ajouterLienSuppression(\$prototype) {
    // Création du lien
    \$lienSuppression = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

    // Ajout du lien
    \$prototype.append(\$lienSuppression);

    // Ajout du listener sur le clic du lien
    \$lienSuppression.click(function(e) {
      \$prototype.remove();
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });
  }
  
   \$('.fileupload').uploadify(
    {
        swf: \"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ephemitsite/js/uploadify.swf"), "html", null, true);
        echo "\",
        uploader: \"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('oneup_uploader')->endpoint("gallery"), "html", null, true);
        echo "\",
        buttonText: 'CHOISIR',
        cancelImg : '";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ephemitsite/images/uploadify-cancel.png"), "html", null, true);
        echo "',
        multi : false,
        onUploadSuccess : function(file, data, response){
            var count = index - 1;
            \$('#ephemit_evenement_creer_documents_'+count+'_nom').val(file.size+file.type);
            \$('#ephemit_evenement_creer_documents_'+count+'_nomOriginal').val(file.name);
        }
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "EphemitEvenementBundle:Evenement:creer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 135,  244 => 133,  240 => 132,  179 => 74,  174 => 72,  170 => 71,  125 => 29,  120 => 27,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  31 => 3,  28 => 2,);
    }
}
