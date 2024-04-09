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

/* Shopping/shipping.twig */
class __TwigTemplate_f8df361e2fbd401ae948e3b36e138666 extends \Eccube\Twig\Template
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
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/shipping.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先の指定"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"ec-registerRole\">
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-addressRole\">
                    ";
        // line 24
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "CustomerAddresses", [], "any", false, false, true, 24)) < twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_deliv_addr_max", [], "any", false, false, true, 24))) {
            // line 25
            echo "                        <div class=\"ec-addressRole__actions\"><a class=\"ec-inlineBtn\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_shipping_edit", ["id" => ($context["shippingId"] ?? null)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規お届け先を追加する"), "html", null, true);
            echo "</a></div>
                    ";
        } else {
            // line 27
            echo "                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__text\">
                                <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"/></div>
                                ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先登録の上限の%count%件に達しています。お届け先を入力したい場合は、削除か変更を行ってください。", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_deliv_addr_max", [], "any", false, false, true, 30)]), "html", null, true);
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 34
        echo "                    ";
        if ($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "addresses", [], "any", false, false, true, 34))) {
            // line 35
            echo "                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__text\">
                                <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"/></div>
                                ";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先を指定してください"), "html", null, true);
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 42
        echo "                </div>

                <form method=\"post\" action=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_shipping", ["id" => ($context["shippingId"] ?? null)]), "html", null, true);
        echo "\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 45), 45, $this->source), 'widget');
        echo "
                    <div class=\"ec-addressList\">
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "addresses", [], "any", false, false, true, 47), "vars", [], "any", false, false, true, 47), "choices", [], "any", false, false, true, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 48
            echo "                            ";
            $context["Address"] = twig_get_attribute($this->env, $this->source, $context["choice"], "data", [], "any", false, false, true, 48);
            // line 49
            echo "                        <div class=\"ec-addressList__item\">
                            <div class=\"ec-addressList__remove\">
                                ";
            // line 51
            $context["checked"] = ((Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "addresses", [], "any", false, false, true, 51), "vars", [], "any", false, false, true, 51), "value", [], "any", false, false, true, 51))) ? ("checked=\"checked\"") : (""));
            // line 52
            echo "                                <input type=\"radio\" id=\"address";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "addresses", [], "any", false, false, true, 52), "vars", [], "any", false, false, true, 52), "full_name", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["checked"] ?? null), 52, $this->source), "html", null, true);
            echo " />
                            </div>
                            <div class=\"ec-addressList__address\">
                                <div>";
            // line 55
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Address"] ?? null), "name01", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Address"] ?? null), "name02", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</div>
                                <div>〒";
            // line 56
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Address"] ?? null), "postal_code", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Address"] ?? null), "Pref", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Address"] ?? null), "addr01", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Address"] ?? null), "addr02", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "</div>
                                <div>";
            // line 57
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Address"] ?? null), "phone_number", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    </div>

                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("選択したお届け先に送る"), "html", null, true);
        echo "</button>
                                <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 67
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
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
        return "Shopping/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 67,  180 => 66,  173 => 61,  163 => 57,  155 => 56,  149 => 55,  136 => 52,  134 => 51,  130 => 49,  127 => 48,  123 => 47,  118 => 45,  114 => 44,  110 => 42,  103 => 38,  99 => 37,  95 => 35,  92 => 34,  85 => 30,  81 => 29,  77 => 27,  69 => 25,  67 => 24,  56 => 16,  52 => 14,  48 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping/shipping.twig", "/var/www/html/src/Eccube/Resource/template/default/Shopping/shipping.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24, "for" => 47, "set" => 48);
        static $filters = array("escape" => 16, "trans" => 16, "length" => 24);
        static $functions = array("url" => 25, "asset" => 29, "has_errors" => 34, "form_widget" => 45);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'trans', 'length'],
                ['url', 'asset', 'has_errors', 'form_widget']
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
