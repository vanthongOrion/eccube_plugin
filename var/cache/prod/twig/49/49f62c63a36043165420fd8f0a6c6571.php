<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @admin/search_items.twig */
class __TwigTemplate_a8b305520c346db8438cdbec86cf3dc6 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<ul class=\"list-inline\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, true, 12), function ($__child__) use ($context, $macros) { $context["child"] = $__child__; return ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 12), "name", [], "any", false, false, true, 12) != "_token") &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 12), "data", [], "any", false, false, true, 12))); }));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 13
            echo "        ";
            if ((false == ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 13), "label", [], "any", false, false, true, 13) == "admin.list.sort.key") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 13), "label", [], "any", false, false, true, 13) == "admin.list.sort.type")))) {
                // line 14
                echo "        <li class=\"list-inline-item\"><span class=\"fw-bold\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 14), "label", [], "any", false, false, true, 14), 14, $this->source)), "html", null, true);
                echo ":&nbsp;</span>";
                // line 15
                if (twig_test_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 15), "data", [], "any", false, false, true, 15))) {
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 18
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 18), "choices", [], "any", false, false, true, 18));
                        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                            // line 19
                            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], $context["value"])) {
                                // line 20
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, true, 20), 20, $this->source)), "html", null, true);
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 23
                        echo (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 23)) ? (",&nbsp;") : (""));
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 25
$context["child"], "vars", [], "any", false, true, true, 25), "data", [], "any", false, true, true, 25), "timestamp", [], "any", true, true, true, 25)) {
                    // line 27
                    echo "                ";
                    if (twig_in_filter("datetime", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 27), "id", [], "any", false, false, true, 27))) {
                        // line 28
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 28), "data", [], "any", false, false, true, 28), 28, $this->source)), "html", null, true);
                        echo "
                ";
                    } else {
                        // line 30
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 30), "data", [], "any", false, false, true, 30), 30, $this->source)), "html", null, true);
                        echo "
                ";
                    }
                } else {
                    // line 34
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, true, 34), "choices", [], "any", true, true, true, 34) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 34), "choices", [], "any", false, false, true, 34)))) {
                        // line 35
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 35), "choices", [], "any", false, false, true, 35));
                        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                            // line 36
                            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 36), "value", [], "any", false, false, true, 36))) {
                                // line 37
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, true, 37), 37, $this->source)), "html", null, true);
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    } else {
                        // line 41
                        if ($this->env->getTest('integer')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 41), "data", [], "any", false, false, true, 41))) {
                            // line 42
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 42), "data", [], "any", false, false, true, 42), 42, $this->source)), "html", null, true);
                        } else {
                            // line 44
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 44), "data", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                        }
                    }
                }
                // line 48
                echo "</li>
        ";
            }
            // line 50
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "@admin/search_items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 51,  147 => 50,  143 => 48,  138 => 44,  135 => 42,  133 => 41,  125 => 37,  123 => 36,  119 => 35,  117 => 34,  110 => 30,  104 => 28,  101 => 27,  99 => 25,  85 => 23,  78 => 20,  76 => 19,  72 => 18,  55 => 16,  53 => 15,  49 => 14,  46 => 13,  42 => 12,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/search_items.twig", "/var/www/html/src/Eccube/Resource/template/admin/search_items.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 12, "if" => 13);
        static $filters = array("filter" => 12, "escape" => 14, "trans" => 14, "date_sec" => 28, "date_day" => 30, "number_format" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['filter', 'escape', 'trans', 'date_sec', 'date_day', 'number_format'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
