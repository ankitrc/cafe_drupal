<?php

/* modules/custom/customContent (copy)/templates/cart.html.twig */
class __TwigTemplate_83dbb7b0ba499cee009fc4c113934434bb0054946b7550c696a087d4ab426b7e extends Twig_Template
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
        $tags = array("for" => 7, "if" => 11);
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
<div id=\"rm\">  </div>
<div>

    <table width=\"100%\">
    <tr><th> name </th> <th>image</th> <th>price</th> <th>category</th> <th>quantity</th> <th>remove</th> </tr>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["ct"]) {
            // line 8
            echo "        ";
            // line 9
            echo "        <tr>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["ct"]);
            foreach ($context['_seq'] as $context["d"] => $context["c"]) {
                // line 11
                echo "          ";
                if (($context["d"] == 1)) {
                    // line 12
                    echo "            <td><img src=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["c"], "html", null, true));
                    echo " height=\"30\" width=\"30\"> </td>
\t\t\t\t\t\t";
                } elseif ((                // line 13
$context["d"] == 5)) {
                    // line 14
                    echo "\t\t\t\t\t\t<td> <button name = \"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["c"], "html", null, true));
                    echo "\" value = \"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["c"], "html", null, true));
                    echo "\" onclick = \"removeData(this.value)\"> remove </button> </td>
            ";
                } else {
                    // line 16
                    echo "                    <td>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["c"], "html", null, true));
                    echo "</td>
            ";
                }
                // line 18
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['d'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['ct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </table>

</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/customContent (copy)/templates/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  95 => 19,  89 => 18,  83 => 16,  75 => 14,  73 => 13,  68 => 12,  65 => 11,  61 => 10,  58 => 9,  56 => 8,  52 => 7,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/custom/customContent (copy)/templates/cart.html.twig", "/opt/lampp/htdocs/cafe_drupal/modules/custom/customContent (copy)/templates/cart.html.twig");
    }
}
