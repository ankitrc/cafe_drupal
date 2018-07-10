<?php

/* modules/custom/customContent (copy)/templates/my-template.html.twig */
class __TwigTemplate_83d6c5c9d4b41aa3e7924a822218481cf305ef0a1d5df8e1461f12524c4ba846 extends Twig_Template
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
        $tags = array("for" => 8, "if" => 11);
        $filters = array();
        $functions = array("attach_library" => 1);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
                array(),
                array('attach_library')
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("customContent/basics"), "html", null, true));
        echo "
<div id=\"ak\"></div>
<div>
\t<div>
\t\t";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["htmls"] ?? null), "html", null, true));
        echo "
\t</div>
\t<div> 
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["a"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 9
            echo "\t\t\t<div class = \"col-sm-4\">
\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 11
                echo "\t\t\t\t";
                if (($context["k"] == 0)) {
                    // line 12
                    echo "\t\t\t\t\t<div> <b> ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["v"], "html", null, true));
                    echo " </b> </div>
\t\t\t\t";
                    // line 14
                    echo "\t\t\t\t";
                } elseif (($context["k"] == 1)) {
                    // line 15
                    echo "\t\t\t\t\t<div> <img src=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["v"], "html", null, true));
                    echo " alt=\"NA\" height=\"100\" width =\"100\"> </div>
\t\t\t\t";
                    // line 17
                    echo "\t\t\t\t";
                } elseif (($context["k"] == 2)) {
                    // line 18
                    echo "\t\t\t\t\t<div> price : ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["v"], "html", null, true));
                    echo " </div>
\t\t\t\t";
                    // line 20
                    echo "\t\t\t\t";
                } elseif (($context["k"] == 3)) {
                    // line 21
                    echo "\t\t\t\t\t<div> category : ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["v"], "html", null, true));
                    echo " </div>
\t\t\t\t";
                } elseif ((                // line 22
$context["k"] == 4)) {
                    // line 23
                    echo "\t\t\t\t";
                    // line 24
                    echo "\t\t\t\t\t<div> <button name = \"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["v"], "html", null, true));
                    echo "\" value = \"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["v"], "html", null, true));
                    echo "\" onclick = \"sendData(this.value)\" >add to cart</button> </div>
\t\t\t\t";
                    // line 26
                    echo "\t\t\t\t";
                }
                // line 27
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
\t</div>

</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/customContent (copy)/templates/my-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 31,  120 => 29,  113 => 27,  110 => 26,  103 => 24,  101 => 23,  99 => 22,  94 => 21,  91 => 20,  86 => 18,  83 => 17,  78 => 15,  75 => 14,  70 => 12,  67 => 11,  63 => 10,  60 => 9,  56 => 8,  50 => 5,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/custom/customContent (copy)/templates/my-template.html.twig", "/opt/lampp/htdocs/cafe_drupal/modules/custom/customContent (copy)/templates/my-template.html.twig");
    }
}
