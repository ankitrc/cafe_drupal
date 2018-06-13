<?php

/* modules/contrib/commerce/modules/order/templates/commerce-order-receipt.html.twig */
class __TwigTemplate_51803dc465b9921a6684baf29df6d01596f87c8c9055e15e482e753e1a3d1d72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'order_items' => array($this, 'block_order_items'),
            'shipping_information' => array($this, 'block_shipping_information'),
            'billing_information' => array($this, 'block_billing_information'),
            'payment_method' => array($this, 'block_payment_method'),
            'additional_information' => array($this, 'block_additional_information'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 48, "if" => 69, "for" => 120);
        $filters = array("t" => 39, "commerce_price_format" => 116, "number_format" => 54);
        $functions = array("url" => 31);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if', 'for'),
                array('t', 'commerce_price_format', 'number_format'),
                array('url')
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

        // line 23
        echo "<table style=\"margin: 15px auto 0 auto; max-width: 768px; font-family: arial,sans-serif\">
  <tbody>
  <tr>
    <td>
      <table style=\"margin-left: auto; margin-right: auto; max-width: 768px; text-align: center;\">
        <tbody>
        <tr>
          <td>
            <a href=\"";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "\" style=\"color: #0e69be; text-decoration: none; font-weight: bold; margin-top: 15px;\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["order_entity"] ?? null), "getStore", array()), "label", array()), "html", null, true));
        echo "</a>
          </td>
        </tr>
        </tbody>
      </table>
      <table style=\"text-align: center; min-width: 450px; margin: 5px auto 0 auto; border: 1px solid #cccccc; border-radius: 5px; padding: 40px 30px 30px 30px;\">
        <tbody>
        <tr>
          <td style=\"font-size: 30px; padding-bottom: 30px\">";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Order Confirmation")));
        echo "</td>
        </tr>
        <tr>
          <td style=\"font-weight: bold; padding-top:15px; padding-bottom: 15px; text-align: left; border-top: 1px solid #cccccc; border-bottom: 1px solid #cccccc\">
            ";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Order #@number details:", array("@number" => $this->getAttribute(($context["order_entity"] ?? null), "getOrderNumber", array())))));
        echo "
          </td>
        </tr>
        <tr>
          <td>
            ";
        // line 48
        $this->displayBlock('order_items', $context, $blocks);
        // line 65
        echo "          </td>
        </tr>
        <tr>
          <td>
            ";
        // line 69
        if ((($context["billing_information"] ?? null) || ($context["shipping_information"] ?? null))) {
            // line 70
            echo "            <table style=\"width: 100%; padding-top:15px; padding-bottom: 15px; text-align: left; border-top: 1px solid #cccccc; border-bottom: 1px solid #cccccc\">
              <tbody>
              <tr>
                ";
            // line 73
            if (($context["shipping_information"] ?? null)) {
                // line 74
                echo "                  <td style=\"padding-top: 5px; font-weight: bold;\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Shipping Information")));
                echo "</td>
                ";
            }
            // line 76
            echo "                ";
            if (($context["billing_information"] ?? null)) {
                // line 77
                echo "                  <td style=\"padding-top: 5px; font-weight: bold;\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Billing Information")));
                echo "</td>
                ";
            }
            // line 79
            echo "              </tr>
              <tr>
                ";
            // line 81
            if (($context["shipping_information"] ?? null)) {
                // line 82
                echo "                  <td>
                    ";
                // line 83
                $this->displayBlock('shipping_information', $context, $blocks);
                // line 86
                echo "                  </td>
                ";
            }
            // line 88
            echo "                ";
            if (($context["billing_information"] ?? null)) {
                // line 89
                echo "                  <td>
                    ";
                // line 90
                $this->displayBlock('billing_information', $context, $blocks);
                // line 93
                echo "                  </td>
                ";
            }
            // line 95
            echo "              </tr>
              ";
            // line 96
            if (($context["payment_method"] ?? null)) {
                // line 97
                echo "                <tr>
                  <td style=\"font-weight: bold; margin-top: 10px;\">";
                // line 98
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Payment Method")));
                echo "</td>
                </tr>
                <tr>
                  <td>
                    ";
                // line 102
                $this->displayBlock('payment_method', $context, $blocks);
                // line 105
                echo "                  </td>
                </tr>
              ";
            }
            // line 108
            echo "              </tbody>
            </table>
            ";
        }
        // line 111
        echo "          </td>
        </tr>
        <tr>
          <td>
            <p style=\"margin-bottom: 0;\">
              ";
        // line 116
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Subtotal: @subtotal", array("@subtotal" => $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->getAttribute(($context["totals"] ?? null), "subtotal", array()))))));
        echo "
            </p>
          </td>
        </tr>
        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["totals"] ?? null), "adjustments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
            // line 121
            echo "        <tr>
          <td>
            <p style=\"margin-bottom: 0;\">
              ";
            // line 124
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["adjustment"], "label", array()), "html", null, true));
            echo ": ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->getAttribute($context["adjustment"], "total", array())), "html", null, true));
            echo "
            </p>
          </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adjustment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "        <tr>
          <td>
            <p style=\"font-size: 24px; padding-top: 15px; padding-bottom: 5px;\">
              ";
        // line 132
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Order Total: @total", array("@total" => $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->getAttribute(($context["order_entity"] ?? null), "getTotalPrice", array()))))));
        echo "
            </p>
          </td>
        </tr>
        <tr>
          <td>
            ";
        // line 138
        $this->displayBlock('additional_information', $context, $blocks);
        // line 141
        echo "          </td>
        </tr>
        </tbody>
      </table>
    </td>
  </tr>
  </tbody>
</table>
";
    }

    // line 48
    public function block_order_items($context, array $blocks = array())
    {
        // line 49
        echo "            <table style=\"padding-top: 15px; padding-bottom:15px; width: 100%\">
              <tbody style=\"text-align: left;\">
              ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order_entity"] ?? null), "getItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["order_item"]) {
            // line 52
            echo "              <tr>
                <td>
                  ";
            // line 54
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["order_item"], "getQuantity", array())), "html", null, true));
            echo " x
                </td>
                <td>
                  <span>";
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["order_item"], "label", array()), "html", null, true));
            echo "</span>
                  <span style=\"float: right;\">";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->getAttribute($context["order_item"], "getTotalPrice", array())), "html", null, true));
            echo "</span>
                </td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "              </tbody>
            </table>
            ";
    }

    // line 83
    public function block_shipping_information($context, array $blocks = array())
    {
        // line 84
        echo "                      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["shipping_information"] ?? null), "html", null, true));
        echo "
                    ";
    }

    // line 90
    public function block_billing_information($context, array $blocks = array())
    {
        // line 91
        echo "                      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["billing_information"] ?? null), "html", null, true));
        echo "
                    ";
    }

    // line 102
    public function block_payment_method($context, array $blocks = array())
    {
        // line 103
        echo "                      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["payment_method"] ?? null), "html", null, true));
        echo "
                    ";
    }

    // line 138
    public function block_additional_information($context, array $blocks = array())
    {
        // line 139
        echo "              ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Thank you for your order!")));
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/order/templates/commerce-order-receipt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 139,  307 => 138,  300 => 103,  297 => 102,  290 => 91,  287 => 90,  280 => 84,  277 => 83,  271 => 62,  261 => 58,  257 => 57,  251 => 54,  247 => 52,  243 => 51,  239 => 49,  236 => 48,  224 => 141,  222 => 138,  213 => 132,  208 => 129,  195 => 124,  190 => 121,  186 => 120,  179 => 116,  172 => 111,  167 => 108,  162 => 105,  160 => 102,  153 => 98,  150 => 97,  148 => 96,  145 => 95,  141 => 93,  139 => 90,  136 => 89,  133 => 88,  129 => 86,  127 => 83,  124 => 82,  122 => 81,  118 => 79,  112 => 77,  109 => 76,  103 => 74,  101 => 73,  96 => 70,  94 => 69,  88 => 65,  86 => 48,  78 => 43,  71 => 39,  58 => 31,  48 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/commerce/modules/order/templates/commerce-order-receipt.html.twig", "/opt/lampp/htdocs/drupal/modules/contrib/commerce/modules/order/templates/commerce-order-receipt.html.twig");
    }
}
