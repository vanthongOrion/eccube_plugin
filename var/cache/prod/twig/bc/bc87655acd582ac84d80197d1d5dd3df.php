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

/* ProductReview42/Form/Type/Admin/ProductReviewSearchType.php */
class __TwigTemplate_f8c7ceb1048d3ae339806111f3e65c97 extends \Eccube\Twig\Template
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

namespace Plugin\\ProductReview42\\Form\\Type\\Admin;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Form\\Type\\Master\\SexType;
use Plugin\\ProductReview42\\Entity\\ProductReviewStatus;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints as Assert;

/**
 * Class ProductReviewSearchType.
 * [商品レビュー]-[レビュー検索]用Form.
 */
class ProductReviewSearchType extends AbstractType
{
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    /**
     * ProductReviewSearchType constructor.
     *
     * @param EccubeConfig \$eccubeConfig
     */
    public function __construct(EccubeConfig \$eccubeConfig)
    {
        \$this->eccubeConfig = \$eccubeConfig;
    }

    /**
     * {@inheritdoc}
     * build form method.
     *
     * @param FormBuilderInterface \$builder
     * @param array                \$options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$config = \$this->eccubeConfig;
        \$builder
            ->add('multi', TextType::class, [
                'label' => 'product_review.admin.product_review.search_multi',
                'required' => false,
                'constraints' => [
                    new Assert\\Length(['max' => \$config['eccube_stext_len']]),
                ],
            ])
            ->add('product_name', TextType::class, [
                'label' => 'product_review.admin.product_review.search_product_name',
                'required' => false,
                'constraints' => [
                    new Assert\\Length(['max' => \$config['eccube_stext_len']]),
                ],
            ])
            ->add('product_code', TextType::class, [
                'label' => 'product_review.admin.product_review.search_product_code',
                'required' => false,
                'constraints' => [
                    new Assert\\Length(['max' => \$config['eccube_stext_len']]),
                ],
            ])
            ->add('sex', SexType::class, [
                'label' => 'product_review.admin.product_review.search_sex',
                'required' => false,
                'expanded' => true,
                'multiple' => true,
            ])
            ->add('recommend_level', ChoiceType::class, [
                'label' => 'product_review.admin.product_review.search_recommend_level',
                'choices' => array_flip([
                    '5' => '★★★★★',
                    '4' => '★★★★',
                    '3' => '★★★',
                    '2' => '★★',
                    '1' => '★',
                ]),
                'placeholder' => 'product_review.admin.product_review.search_recommend_level',
                'expanded' => false,
                'multiple' => false,
                'required' => false,
            ])
            ->add('review_start', DateType::class, [
                'label' => 'product_review.admin.product_review.search_posted_date_start',
                'required' => false,
                'input' => 'datetime',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'datetimepicker-input',
                    'data-bs-target' => '#'.\$this->getBlockPrefix().'_review_start',
                    'data-bs-toggle' => 'datetimepicker',
                ],
            ])
            ->add('review_end', DateType::class, [
                'label' => 'product_review.admin.product_review.search_posted_date_end',
                'required' => false,
                'input' => 'datetime',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'datetimepicker-input',
                    'data-bs-target' => '#'.\$this->getBlockPrefix().'_review_end',
                    'data-bs-toggle' => 'datetimepicker',
                ],
            ])
            ->add('status', EntityType::class, [
                'class' => ProductReviewStatus::class,
                'label' => 'product_review.admin.product_review.search_review_status',
                'required' => false,
                'expanded' => true,
                'multiple' => true,
            ]);
    }
}
";
    }

    public function getTemplateName()
    {
        return "ProductReview42/Form/Type/Admin/ProductReviewSearchType.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ProductReview42/Form/Type/Admin/ProductReviewSearchType.php", "/var/www/html/app/Plugin/ProductReview42/Form/Type/Admin/ProductReviewSearchType.php");
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
