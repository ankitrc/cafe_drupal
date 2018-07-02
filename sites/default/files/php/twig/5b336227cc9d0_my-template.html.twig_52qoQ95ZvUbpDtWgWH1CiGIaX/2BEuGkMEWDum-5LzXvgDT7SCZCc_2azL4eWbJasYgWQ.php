<?php

/* modules/custom/content/templates/my-template.html.twig */
class __TwigTemplate_51ceafd22664923fff5c0ffbfa0d64c03c4bed320ed3d0788479a7893f83a64b extends Twig_Template
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
        $tags = array("for" => 6, "if" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div>
\t<div>
\t\t";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["htmls"] ?? null), "html", null, true));
        echo "
\t</div>
\t<div> 
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["a"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 7
            echo "\t\t\t<div class = \"col-sm-4\">
\t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 9
                echo "\t\t\t\t";
                if (($context["k"] == 0)) {
                    // line 10
                    echo "\t\t\t\t\t<div> <b> ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["v"], "html", null, true));
                    echo " </b> </div>
\t\t\t\t";
                    // line 12
                    echo "\t\t\t\t";
                } elseif (($context["k"] == 1)) {
                    // line 13
                    echo "\t\t\t\t\t<div> <img src=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["v"], "html", null, true));
                    echo " alt=\"NA\" height=\"100\" width =\"100\"> </div>
\t\t\t\t";
                    // line 15
                    echo "\t\t\t\t";
                } elseif (($context["k"] == 2)) {
                    // line 16
                    echo "\t\t\t\t\t<div> price : ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["v"], "html", null, true));
                    echo " </div>
\t\t\t\t";
                    // line 18
                    echo "\t\t\t\t";
                } elseif (($context["k"] == 3)) {
                    // line 19
                    echo "\t\t\t\t\t<div> category : ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["v"], "html", null, true));
                    echo " </div>
\t\t\t\t";
                }
                // line 21
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
\t</div>
    
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/content/templates/my-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 25,  104 => 23,  97 => 21,  91 => 19,  88 => 18,  83 => 16,  80 => 15,  75 => 13,  72 => 12,  67 => 10,  64 => 9,  60 => 8,  57 => 7,  53 => 6,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/custom/content/templates/my-template.html.twig", "/opt/lampp/htdocs/cafe_drupal/modules/custom/content/templates/my-template.html.twig");
    }
}
