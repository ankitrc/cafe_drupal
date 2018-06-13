<?php

/* modules/views_aggregator-8.x-1.x-dev/views_aggregator/templates/views-aggregator-results-table.html.twig */
class __TwigTemplate_e17bc45371ef5b7ad62762da1ef404e6ff3dce736cc768d8230ba7c6bb754962 extends Twig_Template
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
        $tags = array("set" => 42, "if" => 54, "for" => 76);
        $filters = array("length" => 44, "merge" => 128);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('length', 'merge'),
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

        // line 42
        $context["classes"] = array(0 => "table", 1 => ("cols-" . twig_length_filter($this->env,         // line 44
($context["header"] ?? null))), 2 => ((        // line 45
($context["bordered"] ?? null)) ? ("table-bordered") : ("")), 3 => ((        // line 46
($context["condensed"] ?? null)) ? ("table-condensed") : ("")), 4 => ((        // line 47
($context["hover"] ?? null)) ? ("table-hover") : ("")), 5 => ((        // line 48
($context["striped"] ?? null)) ? ("table-striped") : ("")), 6 => ((        // line 49
($context["responsive"] ?? null)) ? ("responsive-enabled") : ("")), 7 => ((        // line 50
($context["sticky"] ?? null)) ? ("sticky-enabled") : ("")));
        // line 53
        echo "<table";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 54
        if (($context["caption_needed"] ?? null)) {
            // line 55
            echo "    <caption>
    ";
            // line 56
            if (($context["caption"] ?? null)) {
                // line 57
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["caption"] ?? null), "html", null, true));
                echo "
    ";
            } else {
                // line 59
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
    ";
            }
            // line 61
            echo "    ";
            if (( !twig_test_empty(($context["summary"] ?? null)) ||  !twig_test_empty(($context["description"] ?? null)))) {
                // line 62
                echo "      <details>
        ";
                // line 63
                if ( !twig_test_empty(($context["summary"] ?? null))) {
                    // line 64
                    echo "          <summary>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["summary"] ?? null), "html", null, true));
                    echo "</summary>
        ";
                }
                // line 66
                echo "        ";
                if ( !twig_test_empty(($context["description"] ?? null))) {
                    // line 67
                    echo "          ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true));
                    echo "
        ";
                }
                // line 69
                echo "      </details>
    ";
            }
            // line 71
            echo "    </caption>
  ";
        }
        // line 73
        echo "  ";
        if (($context["header"] ?? null)) {
            // line 74
            echo "    <thead>
      <tr>
        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 77
                echo "          ";
                if ($this->getAttribute($context["column"], "default_classes", array())) {
                    // line 78
                    echo "            ";
                    // line 79
                    $context["column_classes"] = array(0 => "views-field", 1 => ("views-field-" . $this->getAttribute(                    // line 81
($context["fields"] ?? null), $context["key"], array(), "array")));
                    // line 84
                    echo "          ";
                }
                // line 85
                echo "          <th";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => ($context["column_classes"] ?? null)), "method"), "setAttribute", array(0 => "scope", 1 => "col"), "method"), "html", null, true));
                echo ">";
                // line 86
                if ($this->getAttribute($context["column"], "wrapper_element", array())) {
                    // line 87
                    echo "<";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                    // line 88
                    if ($this->getAttribute($context["column"], "url", array())) {
                        // line 89
                        echo "<a href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "url", array()), "html", null, true));
                        echo "\" title=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "title", array()), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                        echo "</a>";
                    } else {
                        // line 91
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                    }
                    // line 93
                    echo "</";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 95
                    if ($this->getAttribute($context["column"], "url", array())) {
                        // line 96
                        echo "<a href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "url", array()), "html", null, true));
                        echo "\" title=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "title", array()), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                        echo "</a>";
                    } else {
                        // line 98
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                    }
                }
                // line 101
                echo "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "      </tr>
      ";
            // line 104
            if ((($context["totals"] ?? null) && twig_in_filter(($context["totals_row_position"] ?? null), array(0 => 1, 1 => 3)))) {
                // line 105
                echo "        <tr";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["row"] ?? null), "attributes", array()), "html", null, true));
                echo ">
          ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                    // line 107
                    echo "            ";
                    if ($this->getAttribute(($context["totals"] ?? null), $context["key"])) {
                        // line 108
                        echo "              <td";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => ($context["column_classes"] ?? null)), "method"), "html", null, true));
                        echo ">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["totals"] ?? null), $context["key"]), "html", null, true));
                        echo "</td>
            ";
                    } else {
                        // line 110
                        echo "              <td";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => ($context["column_classes"] ?? null)), "method"), "html", null, true));
                        echo "></td>
            ";
                    }
                    // line 112
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "        </tr>
      ";
            }
            // line 115
            echo "    </thead>
  ";
        }
        // line 117
        echo "  <tbody>
    ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 119
            echo "      <tr";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
            echo ">
        ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "columns", array()));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 121
                echo "          ";
                if ($this->getAttribute($context["column"], "default_classes", array())) {
                    // line 122
                    echo "            ";
                    // line 123
                    $context["column_classes"] = array(0 => "views-field");
                    // line 127
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "fields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 128
                        echo "              ";
                        $context["column_classes"] = twig_array_merge(($context["column_classes"] ?? null), array(0 => ("views-field-" . $context["field"])));
                        // line 129
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    echo "          ";
                }
                // line 131
                echo "          <td";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => ($context["column_classes"] ?? null)), "method"), "html", null, true));
                echo ">";
                // line 132
                if ($this->getAttribute($context["column"], "wrapper_element", array())) {
                    // line 133
                    echo "<";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">
              ";
                    // line 134
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 135
                        echo "                ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["content"], "separator", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["content"], "field_output", array()), "html", null, true));
                        echo "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo "              </";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 139
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 140
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["content"], "separator", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["content"], "field_output", array()), "html", null, true));
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 143
                echo "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "  </tbody>
";
        // line 148
        if ((($context["totals"] ?? null) && twig_in_filter(($context["totals_row_position"] ?? null), array(0 => 2, 1 => 3)))) {
            // line 149
            echo "  <tfoot>
    <tr";
            // line 150
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["row"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 152
                echo "        ";
                if ($this->getAttribute(($context["totals"] ?? null), $context["key"])) {
                    // line 153
                    echo "          <td";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => ($context["column_classes"] ?? null)), "method"), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["totals"] ?? null), $context["key"]), "html", null, true));
                    echo "</td>
        ";
                } else {
                    // line 155
                    echo "          <td";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => ($context["column_classes"] ?? null)), "method"), "html", null, true));
                    echo "></td>
        ";
                }
                // line 157
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "    </tr>
  </tfoot>
";
        }
        // line 161
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "modules/views_aggregator-8.x-1.x-dev/views_aggregator/templates/views-aggregator-results-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 161,  364 => 158,  358 => 157,  352 => 155,  344 => 153,  341 => 152,  337 => 151,  333 => 150,  330 => 149,  328 => 148,  325 => 147,  318 => 145,  311 => 143,  303 => 140,  299 => 139,  294 => 137,  284 => 135,  280 => 134,  275 => 133,  273 => 132,  269 => 131,  266 => 130,  260 => 129,  257 => 128,  252 => 127,  250 => 123,  248 => 122,  245 => 121,  241 => 120,  236 => 119,  232 => 118,  229 => 117,  225 => 115,  221 => 113,  215 => 112,  209 => 110,  201 => 108,  198 => 107,  194 => 106,  189 => 105,  187 => 104,  184 => 103,  177 => 101,  172 => 98,  162 => 96,  160 => 95,  155 => 93,  151 => 91,  141 => 89,  139 => 88,  135 => 87,  133 => 86,  129 => 85,  126 => 84,  124 => 81,  123 => 79,  121 => 78,  118 => 77,  114 => 76,  110 => 74,  107 => 73,  103 => 71,  99 => 69,  93 => 67,  90 => 66,  84 => 64,  82 => 63,  79 => 62,  76 => 61,  70 => 59,  64 => 57,  62 => 56,  59 => 55,  57 => 54,  52 => 53,  50 => 50,  49 => 49,  48 => 48,  47 => 47,  46 => 46,  45 => 45,  44 => 44,  43 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/views_aggregator-8.x-1.x-dev/views_aggregator/templates/views-aggregator-results-table.html.twig", "/opt/lampp/htdocs/drupal/modules/views_aggregator-8.x-1.x-dev/views_aggregator/templates/views-aggregator-results-table.html.twig");
    }
}
