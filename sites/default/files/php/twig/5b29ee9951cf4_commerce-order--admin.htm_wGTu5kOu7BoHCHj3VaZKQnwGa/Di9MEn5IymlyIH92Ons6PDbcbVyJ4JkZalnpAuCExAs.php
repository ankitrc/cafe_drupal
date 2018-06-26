<?php

/* modules/contrib/commerce/modules/order/templates/commerce-order--admin.html.twig */
class __TwigTemplate_69ccb0c04c89ad8aa164b6320ecd4dd43afdf3ebdf43897d8580ce8a180e934d extends Twig_Template
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
        $tags = array("set" => 22, "if" => 29, "trans" => 30, "for" => 40);
        $filters = array("t" => 50);
        $functions = array("attach_library" => 21);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans', 'for'),
                array('t'),
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

        // line 20
        echo "
";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("commerce_order/form"), "html", null, true));
        echo "
";
        // line 22
        $context["order_state"] = $this->getAttribute($this->getAttribute(($context["order_entity"] ?? null), "getState", array()), "getLabel", array());
        // line 23
        echo "
<div class=\"layout-order-form clearfix\">
  <div class=\"layout-region layout-region-order-main\">
    ";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["order"] ?? null), "order_items", array()), "html", null, true));
        echo "
    ";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["order"] ?? null), "total_price", array()), "html", null, true));
        echo "

    ";
        // line 29
        if ($this->getAttribute(($context["order"] ?? null), "activity", array())) {
            // line 30
            echo "      <h2>";
            echo t("Order activity", array());
            echo "</h2>
      ";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["order"] ?? null), "activity", array()), "html", null, true));
            echo "
    ";
        }
        // line 33
        echo "  </div>
  <div class=\"layout-region layout-region-order-secondary\">
    <div class=\"entity-meta\">
      <div class=\"entity-meta__header\">
        <h3 class=\"entity-meta__title\">
          ";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["order_state"] ?? null), "html", null, true));
        echo "
        </h3>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "completed", 1 => "placed", 2 => "changed"));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 41
            echo "          ";
            if ($this->getAttribute(($context["order"] ?? null), $context["key"], array(), "array")) {
                // line 42
                echo "            <div class=\"form-item\">
              ";
                // line 43
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["order"] ?? null), $context["key"], array(), "array"), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 46
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "      </div>
      <details open>
        <summary role=\"button\">
          ";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Customer Information")));
        echo "
        </summary>
        <div class=\"details-wrapper\">
          ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "uid", 1 => "mail", 2 => "ip_address"));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 54
            echo "            ";
            if ($this->getAttribute(($context["order"] ?? null), $context["key"], array(), "array")) {
                // line 55
                echo "              <div class=\"form-item\">
                ";
                // line 56
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["order"] ?? null), $context["key"], array(), "array"), "html", null, true));
                echo "
              </div>
            ";
            }
            // line 59
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </div>
      </details>
      ";
        // line 62
        if ($this->getAttribute(($context["order"] ?? null), "billing_information", array())) {
            // line 63
            echo "        <details open>
          <summary role=\"button\">
            ";
            // line 65
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Billing information")));
            echo "
          </summary>
          <div class=\"details-wrapper\">
            ";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["order"] ?? null), "billing_information", array()), "html", null, true));
            echo "
          </div>
        </details>
      ";
        }
        // line 72
        echo "      ";
        if ($this->getAttribute(($context["order"] ?? null), "shipping_information", array())) {
            // line 73
            echo "        <details open>
          <summary role=\"button\">
            ";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Shipping information")));
            echo "
          </summary>
          <div class=\"details-wrapper\">
            ";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["order"] ?? null), "shipping_information", array()), "html", null, true));
            echo "
          </div>
        </details>
      ";
        }
        // line 82
        echo "      ";
        // line 83
        echo "      ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["order_entity"] ?? null), "getState", array()), "getTransitions", array()))) {
            // line 84
            echo "        <div class=\"entity-meta__header\">
          ";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["order"] ?? null), "state", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 88
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/order/templates/commerce-order--admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 88,  196 => 85,  193 => 84,  190 => 83,  188 => 82,  181 => 78,  175 => 75,  171 => 73,  168 => 72,  161 => 68,  155 => 65,  151 => 63,  149 => 62,  145 => 60,  139 => 59,  133 => 56,  130 => 55,  127 => 54,  123 => 53,  117 => 50,  112 => 47,  106 => 46,  100 => 43,  97 => 42,  94 => 41,  90 => 40,  85 => 38,  78 => 33,  73 => 31,  68 => 30,  66 => 29,  61 => 27,  57 => 26,  52 => 23,  50 => 22,  46 => 21,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/commerce/modules/order/templates/commerce-order--admin.html.twig", "/opt/lampp/htdocs/cafe_drupal/modules/contrib/commerce/modules/order/templates/commerce-order--admin.html.twig");
    }
}
