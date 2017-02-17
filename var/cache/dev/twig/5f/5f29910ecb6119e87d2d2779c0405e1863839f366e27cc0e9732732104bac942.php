<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2fbcc80903a889934e317688aaa3542d6cbe402c5fabaef50deacacf2f79db7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1aacef1ce1cbec5dd24a523689fbc177fbe454f1fa0f3de2fbe227a5e6a40c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1aacef1ce1cbec5dd24a523689fbc177fbe454f1fa0f3de2fbe227a5e6a40c2->enter($__internal_d1aacef1ce1cbec5dd24a523689fbc177fbe454f1fa0f3de2fbe227a5e6a40c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_60d6b657ea0f27a7a51c345a776fad0d99890fc7dc50dcc8b4b44fbc3ffb2b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d6b657ea0f27a7a51c345a776fad0d99890fc7dc50dcc8b4b44fbc3ffb2b03->enter($__internal_60d6b657ea0f27a7a51c345a776fad0d99890fc7dc50dcc8b4b44fbc3ffb2b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d1aacef1ce1cbec5dd24a523689fbc177fbe454f1fa0f3de2fbe227a5e6a40c2->leave($__internal_d1aacef1ce1cbec5dd24a523689fbc177fbe454f1fa0f3de2fbe227a5e6a40c2_prof);

        
        $__internal_60d6b657ea0f27a7a51c345a776fad0d99890fc7dc50dcc8b4b44fbc3ffb2b03->leave($__internal_60d6b657ea0f27a7a51c345a776fad0d99890fc7dc50dcc8b4b44fbc3ffb2b03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
