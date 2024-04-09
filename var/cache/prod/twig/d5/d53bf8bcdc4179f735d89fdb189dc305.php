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

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_998c46898e1bbed2a4c08d446b5252e4 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'money_widget' => [$this, 'block_money_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'widget_attributes' => [$this, 'block_widget_attributes'],
                'button_widget' => [$this, 'block_button_widget'],
                'submit_widget' => [$this, 'block_submit_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_errors' => [$this, 'block_form_label_errors'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
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
        $this->displayBlock('money_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('date_widget', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('time_widget', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('file_widget', $context, $blocks);
        // line 136
        echo "
";
        // line 137
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('button_widget', $context, $blocks);
        // line 165
        echo "
";
        // line 166
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 205
        echo "
";
        // line 206
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 210
        echo "
";
        // line 211
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 222
        echo "
";
        // line 224
        echo "
";
        // line 225
        $this->displayBlock('form_label', $context, $blocks);
        // line 269
        echo "
";
        // line 270
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 318
        echo "
";
        // line 320
        echo "
";
        // line 321
        $this->displayBlock('form_row', $context, $blocks);
        // line 335
        echo "
";
        // line 337
        echo "
";
        // line 338
        $this->displayBlock('form_errors', $context, $blocks);
        // line 349
        echo "
";
        // line 351
        echo "
";
        // line 352
        $this->displayBlock('form_help', $context, $blocks);
    }

    // line 5
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["prepend"] =  !(is_string($__internal_compile_0 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_1 = "{{") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)));
        // line 7
        $context["append"] =  !(is_string($__internal_compile_2 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_3 = "}}") && ('' === $__internal_compile_3 || $__internal_compile_3 === substr($__internal_compile_2, -strlen($__internal_compile_3))));
        // line 8
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 9
            echo "<div class=\"input-group ";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["group_class"] ?? null), 9, $this->source), "")) : ("")), "html", null, true);
            echo "\">";
            // line 10
            if (($context["prepend"] ?? null)) {
                // line 11
                echo "<div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">";
                // line 12
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, $this->sandbox->ensureToStringAllowed(($context["money_pattern"] ?? null), 12, $this->source));
                echo "</span>
                </div>";
            }
            // line 15
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 16
            if (($context["append"] ?? null)) {
                // line 17
                echo "<div class=\"input-group-append\">
                    <span class=\"input-group-text\">";
                // line 18
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, $this->sandbox->ensureToStringAllowed(($context["money_pattern"] ?? null), 18, $this->source));
                echo "</span>
                </div>";
            }
            // line 21
            echo "</div>";
        } else {
            // line 23
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 27
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 29
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 29, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 29)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 29), 29, $this->source), "")) : ("")) . " form-control is-invalid"))]);
            // line 30
            $context["valid"] = true;
        }
        // line 32
        $this->displayParentBlock("datetime_widget", $context, $blocks);
    }

    // line 35
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 37
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 37, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 37)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 37), 37, $this->source), "")) : ("")) . " form-control is-invalid"))]);
            // line 38
            $context["valid"] = true;
        }
        // line 40
        $this->displayParentBlock("date_widget", $context, $blocks);
    }

    // line 43
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 45
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 45, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 45)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 45), 45, $this->source), "")) : ("")) . " form-control is-invalid"))]);
            // line 46
            $context["valid"] = true;
        }
        // line 48
        $this->displayParentBlock("time_widget", $context, $blocks);
    }

    // line 51
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 53
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 53, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 53)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 53), 53, $this->source), "")) : ("")) . " form-control is-invalid"))]);
            // line 54
            $context["valid"] = true;
        }
        // line 56
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 59, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 59)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 59), 59, $this->source), "")) : ("")) . " form-inline"))]);
            // line 60
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 61
            if (($context["with_years"] ?? null)) {
                // line 62
                echo "<div class=\"col-auto\">
                ";
                // line 63
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, true, 63), 63, $this->source), 'label');
                echo "
                ";
                // line 64
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, true, 64), 64, $this->source), 'widget');
                echo "
            </div>";
            }
            // line 67
            if (($context["with_months"] ?? null)) {
                // line 68
                echo "<div class=\"col-auto\">
                ";
                // line 69
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, true, 69), 69, $this->source), 'label');
                echo "
                ";
                // line 70
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, true, 70), 70, $this->source), 'widget');
                echo "
            </div>";
            }
            // line 73
            if (($context["with_weeks"] ?? null)) {
                // line 74
                echo "<div class=\"col-auto\">
                ";
                // line 75
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, true, 75), 75, $this->source), 'label');
                echo "
                ";
                // line 76
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, true, 76), 76, $this->source), 'widget');
                echo "
            </div>";
            }
            // line 79
            if (($context["with_days"] ?? null)) {
                // line 80
                echo "<div class=\"col-auto\">
                ";
                // line 81
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, true, 81), 81, $this->source), 'label');
                echo "
                ";
                // line 82
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, true, 82), 82, $this->source), 'widget');
                echo "
            </div>";
            }
            // line 85
            if (($context["with_hours"] ?? null)) {
                // line 86
                echo "<div class=\"col-auto\">
                ";
                // line 87
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, true, 87), 87, $this->source), 'label');
                echo "
                ";
                // line 88
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, true, 88), 88, $this->source), 'widget');
                echo "
            </div>";
            }
            // line 91
            if (($context["with_minutes"] ?? null)) {
                // line 92
                echo "<div class=\"col-auto\">
                ";
                // line 93
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, true, 93), 93, $this->source), 'label');
                echo "
                ";
                // line 94
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, true, 94), 94, $this->source), 'widget');
                echo "
            </div>";
            }
            // line 97
            if (($context["with_seconds"] ?? null)) {
                // line 98
                echo "<div class=\"col-auto\">
                ";
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, true, 99), 99, $this->source), 'label');
                echo "
                ";
                // line 100
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, true, 100), 100, $this->source), 'widget');
                echo "
            </div>";
            }
            // line 103
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, true, 103), 103, $this->source), 'widget');
            }
            // line 104
            echo "</div>";
        }
    }

    // line 108
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        if (($context["symbol"] ?? null)) {
            // line 110
            echo "<div class=\"input-group\">";
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 112
            echo "<div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 113
            echo twig_escape_filter($this->env, ((array_key_exists("symbol", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["symbol"] ?? null), 113, $this->source), "%")) : ("%")), "html", null, true);
            echo "</span>
            </div>
        </div>";
        } else {
            // line 117
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 121
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 122, $this->source), "div")) : ("div")), "html", null, true);
        echo " class=\"custom-file\">";
        // line 123
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 123, $this->source), "file")) : ("file"));
        // line 124
        $context["input_lang"] = "en";
        // line 125
        if ((array_key_exists("app", $context) && twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", true, true, true, 125))) {
            $context["input_lang"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 125), "locale", [], "any", false, false, true, 125);
        }
        // line 126
        $context["attr"] = twig_array_merge(["lang" => ($context["input_lang"] ?? null)], $this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 126, $this->source));
        // line 127
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 128
        $context["label_attr"] = twig_array_filter($this->env, twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 128, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 128)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 128), 128, $this->source), "")) : ("")) . " custom-file-label"))]), function ($__value__, $__key__) use ($context, $macros) { $context["value"] = $__value__; $context["key"] = $__key__; return (($context["key"] ?? null) != "id"); });
        // line 129
        echo "<label for=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, true, 129), "id", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "\" ";
        $__internal_compile_4 = ["attr" => ($context["label_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_4)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 129, $this->getSourceContext());
        }
        $__internal_compile_4 = twig_to_array($__internal_compile_4);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_4));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">";
        // line 130
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", true, true, true, 130) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, true, 130)))) {
            // line 131
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, true, 131)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, true, 131), 131, $this->source), [], $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 131, $this->source)))), "html", null, true);
        }
        // line 133
        echo "</label>
    </";
        // line 134
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 134, $this->source), "div")) : ("div")), "html", null, true);
        echo ">
";
    }

    // line 137
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        if (( !array_key_exists("type", $context) || (($context["type"] ?? null) != "hidden"))) {
            // line 139
            $context["className"] = " form-control";
            // line 140
            if ((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "")) : ("")) == "file")) {
                // line 141
                $context["className"] = " custom-file-input";
            } elseif ((((            // line 142
array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "")) : ("")) == "range")) {
                // line 143
                $context["className"] = " form-control-range";
            }
            // line 145
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 145, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 145)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 145), 145, $this->source), "")) : ("")) . $this->sandbox->ensureToStringAllowed(($context["className"] ?? null), 145, $this->source)))]);
        }
        // line 147
        if ((array_key_exists("type", $context) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 148
            echo "        ";
            // line 149
            $context["required"] = false;
        }
        // line 151
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 154
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        if ( !($context["valid"] ?? null)) {
            // line 156
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 156, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 156)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 156), 156, $this->source), "")) : ("")) . " is-invalid"))]);
        }
        // line 158
        $this->displayParentBlock("widget_attributes", $context, $blocks);
    }

    // line 161
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 162, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 162)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 162), 162, $this->source), "btn-secondary")) : ("btn-secondary")) . " btn"))]);
        // line 163
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 166
    public function block_submit_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 167
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 167, $this->source), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 167)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 167), 167, $this->source), "btn-primary")) : ("btn-primary")))]);
        // line 168
        $this->displayParentBlock("submit_widget", $context, $blocks);
    }

    // line 171
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 172
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["parent_label_class"] ?? null), 172, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 172)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 172), 172, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 172)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 172), 172, $this->source), "")) : (""))));
        // line 173
        if (twig_in_filter("checkbox-custom", ($context["parent_label_class"] ?? null))) {
            // line 174
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 174, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 174)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 174), 174, $this->source), "")) : ("")) . " custom-control-input"))]);
            // line 175
            echo "<div class=\"custom-control custom-checkbox";
            echo ((twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 176
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 176, $this->source), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 177
            echo "</div>";
        } elseif (twig_in_filter("switch-custom",         // line 178
($context["parent_label_class"] ?? null))) {
            // line 179
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 179, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 179)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 179), 179, $this->source), "")) : ("")) . " custom-control-input"))]);
            // line 180
            echo "<div class=\"custom-control custom-switch";
            echo ((twig_in_filter("switch-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 181
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 181, $this->source), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 182
            echo "</div>";
        } else {
            // line 184
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 184, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 184)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 184), 184, $this->source), "")) : ("")) . " form-check-input"))]);
            // line 185
            echo "<div class=\"form-check";
            echo ((twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 186
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 186, $this->source), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 187
            echo "</div>";
        }
    }

    // line 191
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["parent_label_class"] ?? null), 192, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 192)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 192), 192, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 192)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 192), 192, $this->source), "")) : (""))));
        // line 193
        if (twig_in_filter("radio-custom", ($context["parent_label_class"] ?? null))) {
            // line 194
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 194, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 194)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 194), 194, $this->source), "")) : ("")) . " custom-control-input"))]);
            // line 195
            echo "<div class=\"custom-control custom-radio";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 196, $this->source), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 197
            echo "</div>";
        } else {
            // line 199
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 199, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 199)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 199), 199, $this->source), "")) : ("")) . " form-check-input"))]);
            // line 200
            echo "<div class=\"form-check";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 201
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 201, $this->source), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 202
            echo "</div>";
        }
    }

    // line 206
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 207
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 207, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 207)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 207), 207, $this->source), "")) : ("")) . " form-control"))]);
        // line 208
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 211
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 212
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 214
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["child"], 214, $this->source), 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,             // line 215
($context["label_attr"] ?? null), "class", [], "any", true, true, true, 215)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 215), 215, $this->source), "")) : ("")), "translation_domain" =>             // line 216
($context["choice_translation_domain"] ?? null), "valid" =>             // line 217
($context["valid"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "</div>";
    }

    // line 225
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 226
        if ( !(($context["label"] ?? null) === false)) {
            // line 227
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 228
                $context["element"] = "legend";
                // line 229
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 229, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 229)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 229), 229, $this->source), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 231
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 231, $this->source), ["for" => ($context["id"] ?? null)]);
            }
            // line 233
            if (($context["required"] ?? null)) {
                // line 234
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 234, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 234)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 234), 234, $this->source), "")) : ("")) . " required"))]);
            }
            // line 236
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 237
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 238
                    $context["label"] = twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["label_format"] ?? null), 238, $this->source), ["%name%" =>                     // line 239
($context["name"] ?? null), "%id%" =>                     // line 240
($context["id"] ?? null)]);
                } else {
                    // line 243
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 243, $this->source));
                }
            }
            // line 246
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 246, $this->source), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_compile_5 = ["attr" => ($context["label_attr"] ?? null)];
                if (!twig_test_iterable($__internal_compile_5)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 246, $this->getSourceContext());
                }
                $__internal_compile_5 = twig_to_array($__internal_compile_5);
                $context['_parent'] = $context;
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            // line 247
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 248
                if ((($context["label_html"] ?? null) === false)) {
                    // line 249
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 249, $this->source), "html", null, true);
                } else {
                    // line 251
                    echo $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 251, $this->source);
                }
            } else {
                // line 254
                if ((($context["label_html"] ?? null) === false)) {
                    // line 255
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 255, $this->source), $this->sandbox->ensureToStringAllowed(($context["label_translation_parameters"] ?? null), 255, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 255, $this->source)), "html", null, true);
                } else {
                    // line 257
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 257, $this->source), $this->sandbox->ensureToStringAllowed(($context["label_translation_parameters"] ?? null), 257, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 257, $this->source));
                }
            }
            // line 260
            $this->displayBlock('form_label_errors', $context, $blocks);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 260, $this->source), "label")) : ("label")), "html", null, true);
            echo ">";
        } else {
            // line 262
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 263
                echo "<div id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 263, $this->source), "html", null, true);
                echo "_errors\" class=\"mb-2\">";
                // line 264
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 264, $this->source), 'errors');
                // line 265
                echo "</div>";
            }
        }
    }

    // line 260
    public function block_form_label_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 260, $this->source), 'errors');
    }

    // line 270
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 272
        if (array_key_exists("widget", $context)) {
            // line 273
            $context["is_parent_custom"] = (array_key_exists("parent_label_class", $context) && ((twig_in_filter("checkbox-custom", ($context["parent_label_class"] ?? null)) || twig_in_filter("radio-custom", ($context["parent_label_class"] ?? null))) || twig_in_filter("switch-custom", ($context["parent_label_class"] ?? null))));
            // line 274
            echo "        ";
            $context["is_custom"] = (twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 274) && ((twig_in_filter("checkbox-custom", twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 274)) || twig_in_filter("radio-custom", twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 274))) || twig_in_filter("switch-custom", twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 274))));
            // line 275
            if ((($context["is_parent_custom"] ?? null) || ($context["is_custom"] ?? null))) {
                // line 276
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 276, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 276)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 276), 276, $this->source), "")) : ("")) . " custom-control-label"))]);
            } else {
                // line 278
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 278, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 278)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 278), 278, $this->source), "")) : ("")) . " form-check-label"))]);
            }
            // line 280
            if ( !($context["compound"] ?? null)) {
                // line 281
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 281, $this->source), ["for" => ($context["id"] ?? null)]);
            }
            // line 283
            if (($context["required"] ?? null)) {
                // line 284
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 284, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 284)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 284), 284, $this->source), "")) : ("")) . " required"))]);
            }
            // line 286
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 287
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 288
                    $context["label"] = twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["label_format"] ?? null), 288, $this->source), ["%name%" =>                     // line 289
($context["name"] ?? null), "%id%" =>                     // line 290
($context["id"] ?? null)]);
                } else {
                    // line 293
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 293, $this->source));
                }
            }
            // line 297
            echo $this->sandbox->ensureToStringAllowed(($context["widget"] ?? null), 297, $this->source);
            echo "
        <label";
            // line 298
            $__internal_compile_6 = ["attr" => ($context["label_attr"] ?? null)];
            if (!twig_test_iterable($__internal_compile_6)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 298, $this->getSourceContext());
            }
            $__internal_compile_6 = twig_to_array($__internal_compile_6);
            $context['_parent'] = $context;
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_6));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $context['_parent'];
            echo ">";
            // line 299
            if ( !(($context["label"] ?? null) === false)) {
                // line 300
                if ((($context["translation_domain"] ?? null) === false)) {
                    // line 301
                    if ((($context["label_html"] ?? null) === false)) {
                        // line 302
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 302, $this->source), "html", null, true);
                    } else {
                        // line 304
                        echo $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 304, $this->source);
                    }
                } else {
                    // line 307
                    if ((($context["label_html"] ?? null) === false)) {
                        // line 308
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 308, $this->source), $this->sandbox->ensureToStringAllowed(($context["label_translation_parameters"] ?? null), 308, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 308, $this->source)), "html", null, true);
                    } else {
                        // line 310
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 310, $this->source), $this->sandbox->ensureToStringAllowed(($context["label_translation_parameters"] ?? null), 310, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 310, $this->source));
                    }
                }
            }
            // line 314
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 314, $this->source), 'errors');
            // line 315
            echo "</label>";
        }
    }

    // line 321
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 322
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
            // line 323
            $context["element"] = "fieldset";
        }
        // line 325
        $context["widget_attr"] = [];
        // line 326
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 327
            $context["widget_attr"] = ["attr" => ["aria-describedby" => ($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 327, $this->source) . "_help")]];
        }
        // line 329
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 329, $this->source), "div")) : ("div")), "html", null, true);
        $__internal_compile_7 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 329)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 329), "")) : ("")) . " form-group"))])];
        if (!twig_test_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 329, $this->getSourceContext());
        }
        $__internal_compile_7 = twig_to_array($__internal_compile_7);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">";
        // line 330
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 330, $this->source), 'label');
        // line 331
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 331, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["widget_attr"] ?? null), 331, $this->source));
        // line 332
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 332, $this->source), 'help');
        // line 333
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 333, $this->source), "div")) : ("div")), "html", null, true);
        echo ">";
    }

    // line 338
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 339
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 340
            echo "<span class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo " d-block\">";
            // line 341
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 342
                echo "<span class=\"d-block\">
                    <span class=\"form-error-icon badge badge-danger text-uppercase\">";
                // line 343
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error", [], "validators"), "html", null, true);
                echo "</span> <span class=\"form-error-message\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, true, 343), 343, $this->source), "html", null, true);
                echo "</span>
                </span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 346
            echo "</span>";
        }
    }

    // line 352
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 353
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 354
            $context["help_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["help_attr"] ?? null), 354, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, true, 354)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, true, 354), 354, $this->source), "")) : ("")) . " form-text text-muted"))]);
            // line 355
            echo "<small id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 355, $this->source), "html", null, true);
            echo "_help\"";
            $__internal_compile_8 = ["attr" => ($context["help_attr"] ?? null)];
            if (!twig_test_iterable($__internal_compile_8)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 355, $this->getSourceContext());
            }
            $__internal_compile_8 = twig_to_array($__internal_compile_8);
            $context['_parent'] = $context;
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_8));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $context['_parent'];
            echo ">";
            // line 356
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 357
                if ((($context["help_html"] ?? null) === false)) {
                    // line 358
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["help"] ?? null), 358, $this->source), "html", null, true);
                } else {
                    // line 360
                    echo $this->sandbox->ensureToStringAllowed(($context["help"] ?? null), 360, $this->source);
                }
            } else {
                // line 363
                if ((($context["help_html"] ?? null) === false)) {
                    // line 364
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["help"] ?? null), 364, $this->source), $this->sandbox->ensureToStringAllowed(($context["help_translation_parameters"] ?? null), 364, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 364, $this->source)), "html", null, true);
                } else {
                    // line 366
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["help"] ?? null), 366, $this->source), $this->sandbox->ensureToStringAllowed(($context["help_translation_parameters"] ?? null), 366, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 366, $this->source));
                }
            }
            // line 369
            echo "</small>";
        }
    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  958 => 369,  954 => 366,  951 => 364,  949 => 363,  945 => 360,  942 => 358,  940 => 357,  938 => 356,  924 => 355,  922 => 354,  920 => 353,  916 => 352,  911 => 346,  901 => 343,  898 => 342,  894 => 341,  886 => 340,  884 => 339,  880 => 338,  874 => 333,  872 => 332,  870 => 331,  868 => 330,  855 => 329,  852 => 327,  850 => 326,  848 => 325,  845 => 323,  843 => 322,  839 => 321,  834 => 315,  832 => 314,  827 => 310,  824 => 308,  822 => 307,  818 => 304,  815 => 302,  813 => 301,  811 => 300,  809 => 299,  798 => 298,  794 => 297,  790 => 293,  787 => 290,  786 => 289,  785 => 288,  783 => 287,  781 => 286,  778 => 284,  776 => 283,  773 => 281,  771 => 280,  768 => 278,  765 => 276,  763 => 275,  760 => 274,  758 => 273,  756 => 272,  752 => 270,  745 => 260,  739 => 265,  737 => 264,  733 => 263,  731 => 262,  725 => 260,  721 => 257,  718 => 255,  716 => 254,  712 => 251,  709 => 249,  707 => 248,  705 => 247,  690 => 246,  686 => 243,  683 => 240,  682 => 239,  681 => 238,  679 => 237,  677 => 236,  674 => 234,  672 => 233,  669 => 231,  666 => 229,  664 => 228,  662 => 227,  660 => 226,  656 => 225,  652 => 220,  646 => 217,  645 => 216,  644 => 215,  643 => 214,  639 => 213,  635 => 212,  631 => 211,  627 => 208,  625 => 207,  621 => 206,  616 => 202,  614 => 201,  610 => 200,  608 => 199,  605 => 197,  603 => 196,  599 => 195,  597 => 194,  595 => 193,  593 => 192,  589 => 191,  584 => 187,  582 => 186,  578 => 185,  576 => 184,  573 => 182,  571 => 181,  567 => 180,  565 => 179,  563 => 178,  561 => 177,  559 => 176,  555 => 175,  553 => 174,  551 => 173,  549 => 172,  545 => 171,  541 => 168,  539 => 167,  535 => 166,  531 => 163,  529 => 162,  525 => 161,  521 => 158,  518 => 156,  516 => 155,  512 => 154,  508 => 151,  505 => 149,  503 => 148,  501 => 147,  498 => 145,  495 => 143,  493 => 142,  491 => 141,  489 => 140,  487 => 139,  485 => 138,  481 => 137,  475 => 134,  472 => 133,  469 => 131,  467 => 130,  453 => 129,  451 => 128,  449 => 127,  447 => 126,  443 => 125,  441 => 124,  439 => 123,  435 => 122,  431 => 121,  426 => 117,  420 => 113,  417 => 112,  415 => 111,  413 => 110,  411 => 109,  407 => 108,  402 => 104,  398 => 103,  393 => 100,  389 => 99,  386 => 98,  384 => 97,  379 => 94,  375 => 93,  372 => 92,  370 => 91,  365 => 88,  361 => 87,  358 => 86,  356 => 85,  351 => 82,  347 => 81,  344 => 80,  342 => 79,  337 => 76,  333 => 75,  330 => 74,  328 => 73,  323 => 70,  319 => 69,  316 => 68,  314 => 67,  309 => 64,  305 => 63,  302 => 62,  300 => 61,  296 => 60,  294 => 59,  291 => 57,  289 => 56,  286 => 54,  284 => 53,  282 => 52,  278 => 51,  274 => 48,  271 => 46,  269 => 45,  267 => 44,  263 => 43,  259 => 40,  256 => 38,  254 => 37,  252 => 36,  248 => 35,  244 => 32,  241 => 30,  239 => 29,  237 => 28,  233 => 27,  228 => 23,  225 => 21,  220 => 18,  217 => 17,  215 => 16,  213 => 15,  208 => 12,  205 => 11,  203 => 10,  199 => 9,  197 => 8,  195 => 7,  193 => 6,  189 => 5,  185 => 352,  182 => 351,  179 => 349,  177 => 338,  174 => 337,  171 => 335,  169 => 321,  166 => 320,  163 => 318,  161 => 270,  158 => 269,  156 => 225,  153 => 224,  150 => 222,  148 => 211,  145 => 210,  143 => 206,  140 => 205,  138 => 191,  135 => 190,  133 => 171,  130 => 170,  128 => 166,  125 => 165,  123 => 161,  120 => 160,  118 => 154,  115 => 153,  113 => 137,  110 => 136,  108 => 121,  105 => 120,  103 => 108,  100 => 107,  98 => 51,  95 => 50,  93 => 43,  90 => 42,  88 => 35,  85 => 34,  83 => 27,  80 => 26,  78 => 5,  75 => 4,  72 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_4_layout.html.twig", "/var/www/html/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 5, "set" => 6, "if" => 8, "with" => 129, "for" => 213);
        static $filters = array("escape" => 9, "default" => 9, "form_encode_currency" => 12, "merge" => 29, "trim" => 29, "filter" => 128, "trans" => 131, "replace" => 238, "humanize" => 243, "raw" => 251, "length" => 262);
        static $functions = array("form_label" => 63, "form_widget" => 64, "form_errors" => 264, "form_help" => 332);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if', 'with', 'for'],
                ['escape', 'default', 'form_encode_currency', 'merge', 'trim', 'filter', 'trans', 'replace', 'humanize', 'raw', 'length'],
                ['form_label', 'form_widget', 'form_errors', 'form_help']
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
