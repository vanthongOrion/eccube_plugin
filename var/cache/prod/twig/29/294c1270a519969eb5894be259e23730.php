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

/* @admin/Store/plugin_handler.twig */
class __TwigTemplate_72b75ef62f48ac5f8624fb14f8b8b415 extends \Eccube\Twig\Template
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
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["menus"] = [0 => "store", 1 => "plugin", 2 => "plugin_handler"];
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store/plugin_handler.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.828"), "html", null, true);
    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.829"), "html", null, true);
    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "

    ";
        // line 22
        if ((twig_length_filter($this->env, ($context["handlersPerEvent"] ?? null)) > 0)) {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["handlersPerEvent"] ?? null));
            foreach ($context['_seq'] as $context["event"] => $context["handlersPerType"]) {
                // line 24
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["handlersPerType"]);
                foreach ($context['_seq'] as $context["type"] => $context["handlers"]) {
                    // line 25
                    echo "                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"box\">
                            <div class=\"box-header with-arrow\">
                                ";
                    // line 29
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["event"], 29, $this->source), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["type"], 29, $this->source), "html", null, true);
                    echo "
                            </div><!-- /.box-header -->
                            <div class=\"box-body\">
                                <div class=\"table_list\">
                                    <div class=\"table-responsive with-border\">
                                        <table class=\"table table-striped\">
                                            <thead>
                                            <tr>
                                                <th>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.830"), "html", null, true);
                    echo "</th>
                                                <th>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.831"), "html", null, true);
                    echo "</th>
                                                <th>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.832"), "html", null, true);
                    echo "</th>
                                                <th>";
                    // line 40
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.833"), "html", null, true);
                    echo "</th>
                                            </tr>
                                            </thead>
                                            ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["handlers"]);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["handler"]) {
                        // line 44
                        echo "                                                <tbody>
                                                    <tr>
                                                        <td class=\"member_id\">
                                                            ";
                        // line 47
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["handler"], "plugin", [], "any", false, false, true, 47), "name", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                        echo "
                                                        </td>
                                                        <td class=\"member_name\">
                                                            ";
                        // line 50
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["handler"], "handler", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                        echo "
                                                        </td>
                                                        <td class=\"member_name\">
                                                            ";
                        // line 53
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["handler"], "priority", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        echo "
                                                        </td>
                                                        <td class=\"icon_edit\">
                                                            <div class=\"dropdown\">
                                                                <a class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                                    ";
                        // line 59
                        if ((true != twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 59))) {
                            // line 60
                            echo "                                                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_handler_up", ["id" => twig_get_attribute($this->env, $this->source, $context["handler"], "id", [], "any", false, false, true, 60)]), "html", null, true);
                            echo "\">上へ</a>
                                                                    ";
                        }
                        // line 62
                        echo "                                                                    ";
                        if ((true != twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 62))) {
                            // line 63
                            echo "                                                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_handler_down", ["id" => twig_get_attribute($this->env, $this->source, $context["handler"], "id", [], "any", false, false, true, 63)]), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.835"), "html", null, true);
                            echo "</a>
                                                                    ";
                        }
                        // line 65
                        echo "                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handler'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['handlers'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['event'], $context['handlersPerType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "    ";
        } else {
            // line 83
            echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box\">
                    <div class=\"box-header with-arrow\">
                        ";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.836"), "html", null, true);
            echo "
                    </div><!-- /.box-header -->
                    <div class=\"box-header with-arrow\">
                        <h3 class=\"box-title\">";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.837"), "html", null, true);
            echo "</h3>
                    </div><!-- /.box-header -->
                </div>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_handler.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 90,  235 => 87,  229 => 83,  226 => 82,  220 => 81,  205 => 71,  186 => 65,  178 => 63,  175 => 62,  169 => 60,  167 => 59,  158 => 53,  152 => 50,  146 => 47,  141 => 44,  124 => 43,  118 => 40,  114 => 39,  110 => 38,  106 => 37,  93 => 29,  87 => 25,  82 => 24,  77 => 23,  75 => 22,  71 => 20,  67 => 19,  60 => 17,  53 => 16,  48 => 12,  46 => 14,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store/plugin_handler.twig", "/var/www/html/src/Eccube/Resource/template/admin/Store/plugin_handler.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "if" => 22, "for" => 23);
        static $filters = array("escape" => 16, "trans" => 16, "length" => 22);
        static $functions = array("url" => 60);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'length'],
                ['url']
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
