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

/* RelatedProduct42/Form/Type/Admin/RelatedProductType.php */
class __TwigTemplate_2bfa4e3ac5a90735ec64b9df089433a8 extends \Eccube\Twig\Template
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

namespace Plugin\\RelatedProduct42\\Form\\Type\\Admin;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Product;
use Eccube\\Form\\DataTransformer\\EntityToIdTransformer;
use Plugin\\RelatedProduct42\\Entity\\RelatedProduct;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints as Assert;

/**
 * Class RelatedProductType.
 */
class RelatedProductType extends AbstractType
{
    /**
     * @var EntityManagerInterface
     */
    protected \$entityManager;

    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    /**
     * RelatedProductType constructor.
     *
     * @param EntityManagerInterface \$entityManager
     * @param EccubeConfig \$eccubeConfig
     */
    public function __construct(
        EntityManagerInterface \$entityManager,
        EccubeConfig \$eccubeConfig
    ) {
        \$this->entityManager = \$entityManager;
        \$this->eccubeConfig = \$eccubeConfig;
    }

    /**
     * RelatedProduct form builder.
     *
     * @param FormBuilderInterface \$builder
     * @param array \$options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add(
                \$builder->create('ChildProduct', HiddenType::class, [
                    'label' => '関連商品',
                    'required' => false,
                ])->addModelTransformer(new EntityToIdTransformer(\$this->entityManager, Product::class))
            )->add('content', TextareaType::class, [
                'label' => '説明文',
                'required' => false,
                'constraints' => [
                    new Assert\\Length([
                        'max' => \$this->eccubeConfig['related_product.text_area_len'],
                    ]),
                ],
                'attr' => [
                    'maxlength' => \$this->eccubeConfig['related_product.text_area_len'],
                    'placeholder' => trans('related_product.type.comment.placeholder'),
                ],
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => RelatedProduct::class,
        ]);
    }
}
";
    }

    public function getTemplateName()
    {
        return "RelatedProduct42/Form/Type/Admin/RelatedProductType.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "RelatedProduct42/Form/Type/Admin/RelatedProductType.php", "/var/www/html/app/Plugin/RelatedProduct42/Form/Type/Admin/RelatedProductType.php");
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
