<?php

/* modules/contrib/commerce/modules/promotion/templates/commerce-coupon-redemption-form.html.twig */
class __TwigTemplate_9bc34bd7cde808f5afcfe875d9f23f6099fa0557d43aeadc6656960dfea34ac8 extends Twig_Template
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
        $tags = array("if" => 14, "for" => 26);
        $filters = array("length" => 14, "t" => 18, "render" => 18, "first" => 26, "without" => 37);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('length', 't', 'render', 'first', 'without'),
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

        // line 14
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "coupons", array()))) {
            // line 15
            echo "  ";
            if (($this->getAttribute(($context["form"] ?? null), "#cardinality", array(), "array") == 1)) {
                // line 16
                echo "    <div class=\"coupon-redemption-form__coupons coupon-redemption-form__coupons--single\">
      <p>
        <br>";
                // line 18
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("You applied the coupon %code to the order.", array("%code" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "coupons", array()), 0, array()), "code", array()))))));
                echo "
      </p>
      ";
                // line 20
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "coupons", array()), 0, array()), "remove_button", array()), "html", null, true));
                echo "
    </div>
  ";
            } else {
                // line 23
                echo "    <div class=\"coupon-redemption-form__coupons coupon-redemption-form__coupons--multiple\">
      <h3> ";
                // line 24
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Applied coupons")));
                echo " </h3>
      <table>
        ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "coupons", array()));
                foreach ($context['_seq'] as $context["key"] => $context["coupon"]) {
                    if ((twig_first($this->env, $context["key"]) != "#")) {
                        // line 27
                        echo "          <tr>
            <td> ";
                        // line 28
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["coupon"], "code", array()), "html", null, true));
                        echo " </td>
            <td> ";
                        // line 29
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["coupon"], "remove_button", array()), "html", null, true));
                        echo " </td>
          </tr>
        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['coupon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "      </table>
    </div>
  ";
            }
        }
        // line 36
        echo "
";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["form"] ?? null), "coupons"), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/promotion/templates/commerce-coupon-redemption-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  99 => 36,  93 => 32,  83 => 29,  79 => 28,  76 => 27,  71 => 26,  66 => 24,  63 => 23,  57 => 20,  52 => 18,  48 => 16,  45 => 15,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/commerce/modules/promotion/templates/commerce-coupon-redemption-form.html.twig", "/opt/lampp/htdocs/cafe_drupal/modules/contrib/commerce/modules/promotion/templates/commerce-coupon-redemption-form.html.twig");
    }
}
