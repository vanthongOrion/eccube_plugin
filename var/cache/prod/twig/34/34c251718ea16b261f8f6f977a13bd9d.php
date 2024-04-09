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

/* @admin/Content/layout_list.twig */
class __TwigTemplate_70cd86db5e0e70b110a6c951f35f16af extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "content", 1 => "layout"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/layout_list.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_management"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
    }

    // line 18
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <script>
        \$(function() {
            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>
";
    }

    // line 34
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"d-block mb-3\">
                    <a class=\"btn btn-ec-regular\" href=\"";
        // line 39
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_layout_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                </div>
                ";
        // line 42
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Layout"]) {
            // line 43
            echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Layout"], "DeviceType", [], "any", false, false, true, 47), "id", [], "any", false, false, true, 47) == twig_constant("Eccube\\Entity\\Master\\DeviceType::DEVICE_TYPE_PC"))) {
                // line 48
                echo "                                        ";
                $context["icon"] = "fa-desktop";
                // line 49
                echo "                                    ";
            } else {
                // line 50
                echo "                                        ";
                $context["icon"] = "fa-mobile";
                // line 51
                echo "                                    ";
            }
            // line 52
            echo "                                    <i class=\"fa fa-fw ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 52, $this->source), "html", null, true);
            echo " fa-lg me-2\"></i>
                                    <a class=\"card-title align-middle\"
                                       href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_layout_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Layout"], "id", [], "any", false, false, true, 54)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Layout"], "name", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "</a>
                                </div>
                                <div class=\"col-4 text-end\">
                                    ";
            // line 57
            if ((twig_get_attribute($this->env, $this->source, $context["Layout"], "isDefault", [], "method", false, false, true, 57) == false)) {
                // line 58
                echo "                                        <button class=\"btn btn-ec-sub me-3\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal\"
                                                data-url=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_layout_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Layout"], "id", [], "any", false, false, true, 59)]), "html", null, true);
                echo "\"
                                                data-message=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Layout"], "name", [], "any", false, false, true, 60)]), "html", null, true);
                echo "\">
                                            <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                            ";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_delete"), "html", null, true);
                echo "
                                        </button>
                                    ";
            }
            // line 65
            echo "                                    <a href=\"#layout-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Layout"], "id", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"layout-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Layout"], "id", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "\">
                                        <i class=\"fa fa-angle-down fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        ";
            // line 73
            echo "                        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Layout"], "pages", [], "any", false, false, true, 73)) > 0)) {
                // line 74
                echo "                            <div class=\"collapse ec-cardCollapse\" id=\"layout-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Layout"], "id", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "\">
                                ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Layout"], "pages", [], "any", false, false, true, 75));
                foreach ($context['_seq'] as $context["_key"] => $context["Page"]) {
                    // line 76
                    echo "                                    <div class=\"card-body p-0\">
                                        <div class=\"row justify-content-between p-3\">
                                            <div class=\"col-auto\">
                                                <a href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_page_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, true, 79)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Page"], "name", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                    echo "</a>
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "                            </div>
                        ";
            } else {
                // line 86
                echo "                            <div class=\"collapse ec-cardCollapse\" id=\"layout-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Layout"], "id", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                echo "\">
                                <div class=\"p-0 empty-item\">
                                    <div class=\"d-block p-3\">
                                        <span class=\"text-muted\">";
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_no_page"), "html", null, true);
                echo "</span>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 94
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
                <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
        echo "</h5>
                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <p class=\"modal-message\"><!-- jsでメッセージを挿入 --></p>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub w-25\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <a href=\"#\" class=\"btn btn-ec-delete\" ";
        // line 109
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo " data-method=\"delete\" data-confirm=\"false\">
                                    ";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Content/layout_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 110,  255 => 109,  251 => 108,  241 => 101,  234 => 96,  227 => 94,  219 => 89,  212 => 86,  208 => 84,  195 => 79,  190 => 76,  186 => 75,  181 => 74,  178 => 73,  165 => 65,  159 => 62,  154 => 60,  150 => 59,  147 => 58,  145 => 57,  137 => 54,  131 => 52,  128 => 51,  125 => 50,  122 => 49,  119 => 48,  117 => 47,  111 => 43,  106 => 42,  99 => 39,  93 => 35,  89 => 34,  72 => 19,  68 => 18,  61 => 16,  54 => 15,  49 => 11,  47 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Content/layout_list.twig", "/var/www/html/src/Eccube/Resource/template/admin/Content/layout_list.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "for" => 42, "if" => 47);
        static $filters = array("escape" => 15, "trans" => 15, "length" => 73);
        static $functions = array("url" => 39, "constant" => 47, "csrf_token_for_anchor" => 109);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'trans', 'length'],
                ['url', 'constant', 'csrf_token_for_anchor']
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
