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

/* ProductReview42/Resource/template/default/index.twig */
class __TwigTemplate_dadf41d3cfb9a8f407d8a6450de3bcbc extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $context["body_class"] = "product_review";
        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "ProductReview42/Resource/template/default/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <style>
        #product_review_recommend_level {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }
        #product_review_recommend_level label {
            position: relative;
            bottom: 18px;
            left: 20px;
            line-height: 0;
        }
    </style>
";
    }

    // line 33
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "    <div class=\"ec-registerRole\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.review.title"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\" action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_review_index", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 40)]), "html", null, true);
        echo "\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 41), 41, $this->source), 'widget');
        echo "
                    <p class=\"ec-para-nomal\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.review.description"), "html", null, true);
        echo "</p>
                    <div class=\"ec-borderedDefs\">
                        ";
        // line 45
        echo "                        <dl>
                            <dt>
                                <label class=\"ec-label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.review.product_name"), "html", null, true);
        echo "</label>
                            </dt>
                            <dd>
                                <div class=\"ec-input\">
                                    ";
        // line 51
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "
                                </div>
                            </dd>
                        </dl>
                        ";
        // line 56
        echo "                        <dl>
                            <dt>
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reviewer_name", [], "any", false, false, true, 58), 58, $this->source), 'label', ["label_attr" => ["class" => "ec-label"]]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-input";
        // line 61
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reviewer_name", [], "any", false, false, true, 61), 61, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reviewer_name", [], "any", false, false, true, 62), 62, $this->source), 'widget');
        echo "
                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reviewer_name", [], "any", false, false, true, 63), 63, $this->source), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        ";
        // line 68
        echo "                        <dl>
                            <dt>
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reviewer_url", [], "any", false, false, true, 70), 70, $this->source), 'label', ["label_attr" => ["class" => "ec-label"]]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-input";
        // line 73
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reviewer_url", [], "any", false, false, true, 73), 73, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reviewer_url", [], "any", false, false, true, 74), 74, $this->source), 'widget');
        echo "
                                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reviewer_url", [], "any", false, false, true, 75), 75, $this->source), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        ";
        // line 80
        echo "                        <dl>
                            <dt>
                                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sex", [], "any", false, false, true, 82), 82, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "common.gender"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-radio";
        // line 85
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sex", [], "any", false, false, true, 85), 85, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sex", [], "any", false, false, true, 86), 86, $this->source), 'widget');
        echo "
                                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sex", [], "any", false, false, true, 87), 87, $this->source), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        ";
        // line 92
        echo "                        <dl>
                            <dt>
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "recommend_level", [], "any", false, false, true, 94), 94, $this->source), 'label', ["label_attr" => ["class" => "ec-label"]]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-radio";
        // line 97
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "recommend_level", [], "any", false, false, true, 97), 97, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "recommend_level", [], "any", false, false, true, 98), 98, $this->source), 'widget');
        echo "
                                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "recommend_level", [], "any", false, false, true, 99), 99, $this->source), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        ";
        // line 104
        echo "                        <dl>
                            <dt>
                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, true, 106), 106, $this->source), 'label', ["label_attr" => ["class" => "ec-label"]]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-input";
        // line 109
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, true, 109), 109, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, true, 110), 110, $this->source), 'widget');
        echo "
                                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, true, 111), 111, $this->source), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        ";
        // line 116
        echo "                        <dl>
                            <dt>
                                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comment", [], "any", false, false, true, 118), 118, $this->source), 'label', ["label_attr" => ["class" => "ec-label"]]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-input";
        // line 121
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comment", [], "any", false, false, true, 121), 121, $this->source))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comment", [], "any", false, false, true, 122), 122, $this->source), 'widget');
        echo "
                                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comment", [], "any", false, false, true, 123), 123, $this->source), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button class=\"ec-blockBtn--action\" type=\"submit\" name=\"mode\"
                                        value=\"confirm\">";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.review.confirm"), "html", null, true);
        echo "</button>
                                <a class=\"ec-blockBtn--cancel\"
                                   href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 134)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.review.back"), "html", null, true);
        echo "</a>
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
        return "ProductReview42/Resource/template/default/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 134,  276 => 132,  264 => 123,  260 => 122,  256 => 121,  250 => 118,  246 => 116,  239 => 111,  235 => 110,  231 => 109,  225 => 106,  221 => 104,  214 => 99,  210 => 98,  206 => 97,  200 => 94,  196 => 92,  189 => 87,  185 => 86,  181 => 85,  175 => 82,  171 => 80,  164 => 75,  160 => 74,  156 => 73,  150 => 70,  146 => 68,  139 => 63,  135 => 62,  131 => 61,  125 => 58,  121 => 56,  114 => 51,  107 => 47,  103 => 45,  98 => 42,  94 => 41,  90 => 40,  83 => 36,  79 => 34,  75 => 33,  58 => 18,  54 => 17,  49 => 11,  47 => 15,  45 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "ProductReview42/Resource/template/default/index.twig", "/var/www/html/app/Plugin/ProductReview42/Resource/template/default/index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 15);
        static $filters = array("escape" => 36, "trans" => 36);
        static $functions = array("url" => 40, "form_widget" => 41, "form_label" => 58, "has_errors" => 61, "form_errors" => 63);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme'],
                ['escape', 'trans'],
                ['url', 'form_widget', 'form_label', 'has_errors', 'form_errors']
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
