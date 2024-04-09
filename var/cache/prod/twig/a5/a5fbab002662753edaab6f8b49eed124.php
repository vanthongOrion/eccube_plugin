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

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_c87af91fb4ab4d1a90588ff0af4ff966 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_help' => [$this, 'block_form_help'],
            ]
        );
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 61
        echo "
";
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('form_label', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('choice_label', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('radio_label', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 123
        echo "
";
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('form_row', $context, $blocks);
        // line 138
        echo "
";
        // line 139
        $this->displayBlock('button_row', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('choice_row', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('date_row', $context, $blocks);
        // line 154
        echo "
";
        // line 155
        $this->displayBlock('time_row', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('radio_row', $context, $blocks);
        // line 180
        echo "
";
        // line 182
        echo "
";
        // line 183
        $this->displayBlock('form_errors', $context, $blocks);
        // line 194
        echo "
";
        // line 196
        echo "
";
        // line 197
        $this->displayBlock('form_help', $context, $blocks);
    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? null), [0 => "file", 1 => "hidden"]))) {
            // line 7
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 7, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 7)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 7), 7, $this->source), "")) : ("")) . " form-control"))]);
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 12
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 13, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 13)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 13), 13, $this->source), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 17
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        $context["prepend"] =  !(is_string($__internal_compile_0 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_1 = "{{") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)));
        // line 19
        echo "    ";
        $context["append"] =  !(is_string($__internal_compile_2 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_3 = "}}") && ('' === $__internal_compile_3 || $__internal_compile_3 === substr($__internal_compile_2, -strlen($__internal_compile_3))));
        // line 20
        echo "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 21
            echo "        <div class=\"input-group\">
            ";
            // line 22
            if (($context["prepend"] ?? null)) {
                // line 23
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, $this->sandbox->ensureToStringAllowed(($context["money_pattern"] ?? null), 23, $this->source));
                echo "</span>
            ";
            }
            // line 25
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 26
            if (($context["append"] ?? null)) {
                // line 27
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, $this->sandbox->ensureToStringAllowed(($context["money_pattern"] ?? null), 27, $this->source));
                echo "</span>
            ";
            }
            // line 29
            echo "        </div>
    ";
        } else {
            // line 31
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 35
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["parent_label_class"] ?? null), 36, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 36)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 36), 36, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 36)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 36), 36, $this->source), "")) : (""))));
        // line 37
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 38, $this->source), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 40
            echo "<div class=\"checkbox\">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 41, $this->source), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 42
            echo "</div>";
        }
    }

    // line 46
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["parent_label_class"] ?? null), 47, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 47)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 47), 47, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 47)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 47), 47, $this->source), "")) : (""))));
        // line 48
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 49, $this->source), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 51
            echo "<div class=\"radio\">";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 52, $this->source), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 53
            echo "</div>";
        }
    }

    // line 57
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 58, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 58)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 58), 58, $this->source), "")) : ("")) . " form-control"))]);
        // line 59
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 64
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 65, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 65)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 65), 65, $this->source), "")) : ("")) . " control-label"))]);
        // line 66
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 69
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 71, $this->source), ["class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 71)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 71), 71, $this->source), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 72
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 75
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 76, $this->source), ["for" => ($context["id"] ?? null)]);
        // line 78
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 81
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 82, $this->source), ["for" => ($context["id"] ?? null)]);
        // line 84
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 87
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        if (array_key_exists("widget", $context)) {
            // line 90
            if (($context["required"] ?? null)) {
                // line 91
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 91, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 91)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 91), 91, $this->source), "")) : ("")) . " required"))]);
            }
            // line 93
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 94
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 95
                    $context["label"] = twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["label_format"] ?? null), 95, $this->source), ["%name%" =>                     // line 96
($context["name"] ?? null), "%id%" =>                     // line 97
($context["id"] ?? null)]);
                } else {
                    // line 100
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 100, $this->source));
                }
            }
            // line 103
            echo "<label";
            $__internal_compile_4 = ["attr" => ($context["label_attr"] ?? null)];
            if (!twig_test_iterable($__internal_compile_4)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 103, $this->getSourceContext());
            }
            $__internal_compile_4 = twig_to_array($__internal_compile_4);
            $context['_parent'] = $context;
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_4));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $context['_parent'];
            echo ">";
            // line 105
            echo $this->sandbox->ensureToStringAllowed(($context["widget"] ?? null), 105, $this->source);
            echo " ";
            if ( !(($context["label"] ?? null) === false)) {
                // line 106
                if ((($context["translation_domain"] ?? null) === false)) {
                    // line 107
                    if ((($context["label_html"] ?? null) === false)) {
                        // line 108
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 108, $this->source), "html", null, true);
                    } else {
                        // line 110
                        echo $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 110, $this->source);
                    }
                } else {
                    // line 113
                    if ((($context["label_html"] ?? null) === false)) {
                        // line 114
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 114, $this->source), $this->sandbox->ensureToStringAllowed(($context["label_translation_parameters"] ?? null), 114, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 114, $this->source)), "html", null, true);
                    } else {
                        // line 116
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 116, $this->source), $this->sandbox->ensureToStringAllowed(($context["label_translation_parameters"] ?? null), 116, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 116, $this->source));
                    }
                }
            }
            // line 120
            echo "</label>";
        }
    }

    // line 126
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        $context["widget_attr"] = [];
        // line 128
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 129
            $context["widget_attr"] = ["attr" => ["aria-describedby" => ($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 129, $this->source) . "_help")]];
        }
        // line 131
        echo "<div";
        $__internal_compile_5 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 131)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 131), "")) : ("")) . " form-group") . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" has-error") : (""))))])];
        if (!twig_test_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 131, $this->getSourceContext());
        }
        $__internal_compile_5 = twig_to_array($__internal_compile_5);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 132, $this->source), 'label');
        echo " ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 133, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["widget_attr"] ?? null), 133, $this->source));
        echo " ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 134, $this->source), 'help');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 135, $this->source), 'errors');
        echo " ";
        // line 136
        echo "</div> ";
    }

    // line 139
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        echo "<div";
        $__internal_compile_6 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 140)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 140), "")) : ("")) . " form-group"))])];
        if (!twig_test_iterable($__internal_compile_6)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 140, $this->getSourceContext());
        }
        $__internal_compile_6 = twig_to_array($__internal_compile_6);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_6));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 141, $this->source), 'widget');
        // line 142
        echo "</div>";
    }

    // line 145
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        $context["force_error"] = true;
        // line 147
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 150
    public function block_date_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        $context["force_error"] = true;
        // line 152
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 155
    public function block_time_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        $context["force_error"] = true;
        // line 157
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 160
    public function block_datetime_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        $context["force_error"] = true;
        // line 162
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 165
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 166
        echo "<div";
        $__internal_compile_7 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 166)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 166), "")) : ("")) . " form-group") . (( !($context["valid"] ?? null)) ? (" has-error") : (""))))])];
        if (!twig_test_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 166, $this->getSourceContext());
        }
        $__internal_compile_7 = twig_to_array($__internal_compile_7);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 167, $this->source), 'widget');
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 168, $this->source), 'help');
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 169, $this->source), 'errors');
        // line 170
        echo "</div>";
    }

    // line 173
    public function block_radio_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 174
        echo "<div";
        $__internal_compile_8 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 174)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 174), "")) : ("")) . " form-group") . (( !($context["valid"] ?? null)) ? (" has-error") : (""))))])];
        if (!twig_test_iterable($__internal_compile_8)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 174, $this->getSourceContext());
        }
        $__internal_compile_8 = twig_to_array($__internal_compile_8);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_8));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 175, $this->source), 'widget');
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 176, $this->source), 'help');
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 177, $this->source), 'errors');
        // line 178
        echo "</div>";
    }

    // line 183
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 184
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 185
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 186
            echo "    <ul class=\"list-unstyled\">";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 188
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "</ul>
    ";
            // line 191
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
    }

    // line 197
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 199
            $context["help_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["help_attr"] ?? null), 199, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, true, 199)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, true, 199), 199, $this->source), "")) : ("")) . " help-block"))]);
            // line 200
            echo "<span id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 200, $this->source), "html", null, true);
            echo "_help\"";
            $__internal_compile_9 = ["attr" => ($context["help_attr"] ?? null)];
            if (!twig_test_iterable($__internal_compile_9)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 200, $this->getSourceContext());
            }
            $__internal_compile_9 = twig_to_array($__internal_compile_9);
            $context['_parent'] = $context;
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $context['_parent'];
            echo ">";
            // line 201
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 202
                if ((($context["help_html"] ?? null) === false)) {
                    // line 203
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["help"] ?? null), 203, $this->source), "html", null, true);
                } else {
                    // line 205
                    echo $this->sandbox->ensureToStringAllowed(($context["help"] ?? null), 205, $this->source);
                }
            } else {
                // line 208
                if ((($context["help_html"] ?? null) === false)) {
                    // line 209
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["help"] ?? null), 209, $this->source), $this->sandbox->ensureToStringAllowed(($context["help_translation_parameters"] ?? null), 209, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 209, $this->source)), "html", null, true);
                } else {
                    // line 211
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["help"] ?? null), 211, $this->source), $this->sandbox->ensureToStringAllowed(($context["help_translation_parameters"] ?? null), 211, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 211, $this->source));
                }
            }
            // line 214
            echo "</span>";
        }
    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  647 => 214,  643 => 211,  640 => 209,  638 => 208,  634 => 205,  631 => 203,  629 => 202,  627 => 201,  613 => 200,  611 => 199,  609 => 198,  605 => 197,  596 => 191,  593 => 190,  585 => 188,  581 => 187,  579 => 186,  573 => 185,  571 => 184,  567 => 183,  563 => 178,  561 => 177,  559 => 176,  557 => 175,  545 => 174,  541 => 173,  537 => 170,  535 => 169,  533 => 168,  531 => 167,  519 => 166,  515 => 165,  511 => 162,  509 => 161,  505 => 160,  501 => 157,  499 => 156,  495 => 155,  491 => 152,  489 => 151,  485 => 150,  481 => 147,  479 => 146,  475 => 145,  471 => 142,  469 => 141,  457 => 140,  453 => 139,  449 => 136,  446 => 135,  444 => 134,  441 => 133,  438 => 132,  426 => 131,  423 => 129,  421 => 128,  419 => 127,  415 => 126,  410 => 120,  405 => 116,  402 => 114,  400 => 113,  396 => 110,  393 => 108,  391 => 107,  389 => 106,  385 => 105,  373 => 103,  369 => 100,  366 => 97,  365 => 96,  364 => 95,  362 => 94,  360 => 93,  357 => 91,  355 => 90,  353 => 89,  349 => 87,  345 => 84,  343 => 82,  339 => 81,  335 => 78,  333 => 76,  329 => 75,  325 => 72,  323 => 71,  319 => 69,  315 => 66,  313 => 65,  309 => 64,  305 => 59,  303 => 58,  299 => 57,  294 => 53,  292 => 52,  290 => 51,  287 => 49,  285 => 48,  283 => 47,  279 => 46,  274 => 42,  272 => 41,  270 => 40,  267 => 38,  265 => 37,  263 => 36,  259 => 35,  254 => 31,  250 => 29,  244 => 27,  242 => 26,  240 => 25,  234 => 23,  232 => 22,  229 => 21,  226 => 20,  223 => 19,  221 => 18,  217 => 17,  213 => 14,  211 => 13,  207 => 12,  203 => 9,  200 => 7,  198 => 6,  194 => 5,  190 => 197,  187 => 196,  184 => 194,  182 => 183,  179 => 182,  176 => 180,  174 => 173,  171 => 172,  169 => 165,  166 => 164,  164 => 160,  161 => 159,  159 => 155,  156 => 154,  154 => 150,  151 => 149,  149 => 145,  146 => 144,  144 => 139,  141 => 138,  139 => 126,  136 => 125,  133 => 123,  131 => 87,  128 => 86,  126 => 81,  123 => 80,  121 => 75,  118 => 74,  116 => 69,  113 => 68,  111 => 64,  108 => 63,  105 => 61,  103 => 57,  100 => 56,  98 => 46,  95 => 45,  93 => 35,  90 => 34,  88 => 17,  85 => 16,  83 => 12,  80 => 11,  78 => 5,  75 => 4,  72 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_3_layout.html.twig", "/var/www/html/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 5, "if" => 6, "set" => 7, "with" => 103, "for" => 187);
        static $filters = array("merge" => 7, "trim" => 7, "default" => 7, "form_encode_currency" => 23, "replace" => 71, "humanize" => 100, "raw" => 105, "escape" => 108, "trans" => 114, "length" => 184);
        static $functions = array("form_label" => 38, "form_widget" => 133, "form_help" => 134, "form_errors" => 135);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set', 'with', 'for'],
                ['merge', 'trim', 'default', 'form_encode_currency', 'replace', 'humanize', 'raw', 'escape', 'trans', 'length'],
                ['form_label', 'form_widget', 'form_help', 'form_errors']
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
