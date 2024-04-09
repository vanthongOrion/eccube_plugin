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

/* Coupon42/Form/Type/CouponUseType.php */
class __TwigTemplate_527a288e08ca2b5b37e1a924ecf3f37d extends \Eccube\Twig\Template
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
        // line 1
        echo "<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\\Coupon42\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

/**
 * Class CouponUseType.
 */
class CouponUseType extends AbstractType
{
    /**
     * buildForm.
     *
     * @param FormBuilderInterface \$builder
     * @param array                \$options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('coupon_cd', TextType::class, [
                'label' => 'plugin_coupon.front.code',
                'required' => false,
                'trim' => true,
                'mapped' => false,
            ])
            ->add('coupon_use', ChoiceType::class, [
                'choices' => array_flip([0 => 'plugin_coupon.front.shopping_coupon.remove', 1 => 'plugin_coupon.front.shopping_coupon.use']),
                'required' => true,
                'expanded' => true,
                'multiple' => false,
                'data' => 1, // default choice
            ])
            ->addEventListener(FormEvents::POST_SUBMIT, function(FormEvent \$event) {
                \$form = \$event->getForm();
                \$data = \$form->getData();
                if (\$data['coupon_use'] == 1 && empty(\$form['coupon_cd']->getData())) {
                    \$form['coupon_cd']->addError(new FormError(trans('plugin_coupon.front.shopping_coupon.body')));
                }
            });
    }

    /**
     * getName.
     *
     * @return string
     */
    public function getName()
    {
        return 'front_plugin_coupon_shopping';
    }
}
";
    }

    public function getTemplateName()
    {
        return "Coupon42/Form/Type/CouponUseType.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/Form/Type/CouponUseType.php", "/var/www/html/app/Plugin/Coupon42/Form/Type/CouponUseType.php");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
