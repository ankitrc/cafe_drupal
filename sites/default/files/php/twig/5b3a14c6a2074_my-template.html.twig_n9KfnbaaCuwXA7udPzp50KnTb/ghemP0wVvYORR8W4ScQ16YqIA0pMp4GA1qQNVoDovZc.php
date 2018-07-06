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
        $tags = array("for" => 7, "if" => 10);
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
<div>
\t<div>
\t\t";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["htmls"] ?? null), "html", null, true));
        echo "
\t</div>
\t<div> 
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["a"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 8
            echo "\t\t\t<div class = \"col-sm-4\">
\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 10
                echo "\t\t\t\t";
                if (($context["k"] == 0)) {
                    // line 11
                    echo "\t\t\t\t\t<div> <b> ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["v"], "html", null, true));
                    echo " </b> </div>
\t\t\t\t";
                    // line 13
                    echo "\t\t\t\t";
                } elseif (($context["k"] == 1)) {
                    // line 14
                    echo "\t\t\t\t\t<div> <img src=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["v"], "html", null, true));
                    echo " alt=\"NA\" height=\"100\" width =\"100\"> </div>
\t\t\t\t";
                    // line 16
                    echo "\t\t\t\t";
                } elseif (($context["k"] == 2)) {
                    // line 17
                    echo "\t\t\t\t\t<div> price : ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["v"], "html", null, true));
                    echo " </div>
\t\t\t\t";
                    // line 19
                    echo "\t\t\t\t";
                } elseif (($context["k"] == 3)) {
                    // line 20
                    echo "\t\t\t\t\t<div> category : ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["v"], "html", null, true));
                    echo " </div>
\t\t\t\t";
                } elseif ((                // line 21
$context["k"] == 4)) {
                    // line 22
                    echo "\t\t\t\t";
                    // line 23
                    echo "\t\t\t\t\t<div> <button name = \"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["v"], "html", null, true));
                    echo "\" value = \"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["v"], "html", null, true));
                    echo "\" onclick = \"sendData(this.value)\" >add to cart</button> </div>
\t\t\t\t";
                    // line 25
                    echo "\t\t\t\t";
                }
                // line 26
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
\t</div>
    <div id=\"ak\"></div>
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
        return array (  126 => 30,  119 => 28,  112 => 26,  109 => 25,  102 => 23,  100 => 22,  98 => 21,  93 => 20,  90 => 19,  85 => 17,  82 => 16,  77 => 14,  74 => 13,  69 => 11,  66 => 10,  62 => 9,  59 => 8,  55 => 7,  49 => 4,  43 => 1,);
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
