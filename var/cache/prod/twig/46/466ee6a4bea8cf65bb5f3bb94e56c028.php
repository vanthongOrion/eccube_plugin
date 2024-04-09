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

/* MailMagazine42/Form/Type/MailMagazineType.php */
class __TwigTemplate_620d5e89a74ecaf712394fec8ac4e4b5 extends \Eccube\Twig\Template
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

/*
 * [メルマガ配信]-[配信内容設定]用Form
 */

namespace Plugin\\MailMagazine42\\Form\\Type;

use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Eccube\\Form\\Type\\Admin\\SearchCustomerType;
use Symfony\\Component\\Validator\\Constraints as Assert;

class MailMagazineType extends SearchCustomerType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        parent::buildForm(\$builder, \$options);

        \$constraints = isset(\$options['eccube_form_options']['constraints'])
            ? \$options['eccube_form_options']['constraints']
            : true;

        // 以降テンプレート選択で使用する項目
        \$builder->add('id', HiddenType::class)
            ->add('template', MailMagazineTemplateType::class, [
                'label' => 'mailmagazine.select.label_template',
                'required' => false,
                'mapped' => false,
            ])
            ->add('subject', TextType::class, [
                'label' => 'mailmagazine.select.label_subject',
                'required' => true,
                'constraints' => \$constraints ? [new Assert\\NotBlank()] : [],
            ])
            ->add('body', TextareaType::class, [
                'label' => 'mailmagazine.select.label_body',
                'required' => true,
                'constraints' => \$constraints ? [new Assert\\NotBlank()] : [],
            ])
            ->add('htmlBody', TextareaType::class, [
                'label' => 'mailmagazine.select.label_body_html',
                'required' => false,
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'mail_magazine';
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'mail_magazine';
    }
}
";
    }

    public function getTemplateName()
    {
        return "MailMagazine42/Form/Type/MailMagazineType.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Form/Type/MailMagazineType.php", "/var/www/html/app/Plugin/MailMagazine42/Form/Type/MailMagazineType.php");
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
