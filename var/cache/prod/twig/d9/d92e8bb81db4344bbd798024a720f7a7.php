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

/* Entry/confirm.twig */
class __TwigTemplate_1ec5ffa38260086b37de88793310f069 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["body_class"] = "registration_page";
        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Entry/confirm.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <div class=\"ec-registerRole\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録(確認)"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\" action=\"";
        // line 24
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("entry");
        echo "\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 25), 25, $this->source), 'widget');
        echo "
                    <p>";
        // line 26
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("下記の内容で登録してもよろしいでしょうか？
よろしければ、一番下の「会員登録をする」ボタンをクリックしてください。
"), "html", null, true));
        // line 28
        echo "</p>
                    <div class=\"ec-borderedDefs\">
                        <dl>
                            <dt>
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 32), 32, $this->source), 'label', ["label_attr" => ["class" => "ec-label "], "label" => "お名前"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 35), "name01", [], "any", false, false, true, 35), "vars", [], "any", false, false, true, 35), "data", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo " ";
        // line 36
        echo "                                ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 36), "name02", [], "any", false, false, true, 36), "vars", [], "any", false, false, true, 36), "data", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 37), "name01", [], "any", false, false, true, 37), 37, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 38), "name02", [], "any", false, false, true, 38), 38, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 43), 43, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 46), "kana01", [], "any", false, false, true, 46), "vars", [], "any", false, false, true, 46), "data", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "
                                ";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 47), "kana02", [], "any", false, false, true, 47), "vars", [], "any", false, false, true, 47), "data", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 48), "kana01", [], "any", false, false, true, 48), 48, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 49), "kana02", [], "any", false, false, true, 49), 49, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 54), 54, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "会社名"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 57
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 57), "vars", [], "any", false, false, true, 57), "data", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 58), 58, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 63), 63, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "住所"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 67
        echo "                                <span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, true, 67), "vars", [], "any", false, false, true, 67), "data", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, true, 68), 68, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 70
        echo "                                ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 70), "pref", [], "any", false, false, true, 70), "vars", [], "any", false, false, true, 70), "data", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 70), "addr01", [], "any", false, false, true, 70), "vars", [], "any", false, false, true, 70), "data", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 70), "addr02", [], "any", false, false, true, 70), "vars", [], "any", false, false, true, 70), "data", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "
                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 71), "pref", [], "any", false, false, true, 71), 71, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 72), "addr01", [], "any", false, false, true, 72), 72, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 73), "addr02", [], "any", false, false, true, 73), 73, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 78), 78, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                            </dt>
                            <dd>";
        // line 80
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 80), "vars", [], "any", false, false, true, 80), "data", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 81), 81, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 86), 86, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "メールアドレス"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 89
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 89), "vars", [], "any", false, false, true, 89), "data", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
        echo "
                                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 90), "first", [], "any", false, false, true, 90), 90, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 91), "second", [], "any", false, false, true, 91), 91, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plain_password", [], "any", false, false, true, 96), 96, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "パスワード"]);
        echo "
                            </dt>
                            <dd>
                                ********
                                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plain_password", [], "any", false, false, true, 100), "first", [], "any", false, false, true, 100), 100, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plain_password", [], "any", false, false, true, 101), "second", [], "any", false, false, true, 101), 101, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth", [], "any", false, false, true, 106), 106, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "生年月日"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 109
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth", [], "any", false, false, true, 109), "vars", [], "any", false, false, true, 109), "data", [], "any", false, false, true, 109)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth", [], "any", false, false, true, 109), "vars", [], "any", false, false, true, 109), "data", [], "any", false, false, true, 109)), "html", null, true))) : (print ("")));
        echo "
                                ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth", [], "any", false, false, true, 110), "year", [], "any", false, false, true, 110), 110, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth", [], "any", false, false, true, 111), "month", [], "any", false, false, true, 111), 111, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth", [], "any", false, false, true, 112), "day", [], "any", false, false, true, 112), 112, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sex", [], "any", false, false, true, 117), 117, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "性別"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 120
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sex", [], "any", false, false, true, 120), "vars", [], "any", false, false, true, 120), "data", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
        echo "
                                ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sex", [], "any", false, false, true, 121), 121, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "job", [], "any", false, false, true, 126), 126, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "職業"]);
        echo "
                            </dt>
                            <dd>";
        // line 128
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "job", [], "any", false, false, true, 128), "vars", [], "any", false, false, true, 128), "data", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
        echo "
                                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "job", [], "any", false, false, true, 129), 129, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>

                        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "user_policy_check", [], "any", false, false, true, 133), 133, $this->source), 'widget', ["type" => "hidden"]);
        echo "

                        ";
        // line 136
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 136), "eccube_form_options", [], "any", false, false, true, 136), "auto_render", [], "any", false, false, true, 136); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 137
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 137), "eccube_form_options", [], "any", false, false, true, 137), "form_theme", [], "any", false, false, true, 137)) {
                // line 138
                echo "                                ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 138), "eccube_form_options", [], "any", false, false, true, 138), "form_theme", [], "any", false, false, true, 138)], true);
                // line 139
                echo "                                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 139, $this->source), 'row');
                echo "
                            ";
            } else {
                // line 141
                echo "                                <dl>
                                    <dt>
                                        ";
                // line 143
                $context["label_class"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, true, true, 143), "label_attr", [], "any", false, true, true, 143), "class", [], "any", true, true, true, 143)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 143), "label_attr", [], "any", false, false, true, 143), "class", [], "any", false, false, true, 143)) : (""));
                // line 144
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 144, $this->source), 'label', ["label_attr" => ["class" => ($this->sandbox->ensureToStringAllowed(($context["label_class"] ?? null), 144, $this->source) . " ec-label")]] + (twig_test_empty($_label_ = $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 144), "label", [], "any", false, false, true, 144), 144, $this->source)) ? [] : ["label" => $_label_]));
                echo "
                                    </dt>
                                    <dd>
                                        <div class=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 147), "eccube_form_options", [], "any", false, false, true, 147), "style_class", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed($context["f"], 147, $this->source))) ? (" error") : (""));
                echo "\">
                                            ";
                // line 148
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 148), "data", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
                echo "
                                            ";
                // line 149
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 149, $this->source), 'widget', ["type" => "hidden"]);
                echo "
                                        </div>
                                    </dd>
                                </dl>
                            ";
            }
            // line 154
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                    </div>
                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button class=\"ec-blockBtn--action\" type=\"submit\" name=\"mode\" value=\"complete\">";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員登録をする"), "html", null, true);
        echo "</button>
                                <button class=\"ec-blockBtn--cancel\" type=\"submit\" name=\"mode\" value=\"back\">";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Entry/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 160,  380 => 159,  374 => 155,  368 => 154,  360 => 149,  356 => 148,  351 => 147,  344 => 144,  342 => 143,  338 => 141,  332 => 139,  329 => 138,  326 => 137,  321 => 136,  316 => 133,  309 => 129,  305 => 128,  300 => 126,  292 => 121,  288 => 120,  282 => 117,  274 => 112,  270 => 111,  266 => 110,  262 => 109,  256 => 106,  248 => 101,  244 => 100,  237 => 96,  229 => 91,  225 => 90,  221 => 89,  215 => 86,  207 => 81,  203 => 80,  198 => 78,  190 => 73,  186 => 72,  182 => 71,  173 => 70,  169 => 68,  162 => 67,  156 => 63,  148 => 58,  144 => 57,  138 => 54,  130 => 49,  126 => 48,  122 => 47,  118 => 46,  112 => 43,  104 => 38,  100 => 37,  95 => 36,  92 => 35,  86 => 32,  80 => 28,  76 => 26,  72 => 25,  68 => 24,  61 => 20,  57 => 18,  53 => 17,  48 => 11,  46 => 15,  44 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Entry/confirm.twig", "/var/www/html/src/Eccube/Resource/template/default/Entry/confirm.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 15, "for" => 136, "if" => 137);
        static $filters = array("escape" => 20, "trans" => 20, "nl2br" => 28, "date_day" => 109, "filter" => 136);
        static $functions = array("url" => 24, "form_widget" => 25, "form_label" => 32, "form_row" => 139, "has_errors" => 147);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if'],
                ['escape', 'trans', 'nl2br', 'date_day', 'filter'],
                ['url', 'form_widget', 'form_label', 'form_row', 'has_errors']
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
