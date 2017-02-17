<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_438f95d2b8c6ae583edf5be0a0d7ac7aa708a2d782ceefea0f61bfe756daeb06 extends Twig_Template
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
        $__internal_240a24f108a6481361485a40dd58869725295984f0bfd9347230092bc7f4ab1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240a24f108a6481361485a40dd58869725295984f0bfd9347230092bc7f4ab1b->enter($__internal_240a24f108a6481361485a40dd58869725295984f0bfd9347230092bc7f4ab1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_62b09ed6dc40b17e3bf3d905f3a6d192d2eba9a85f476242fef08e71a67cd7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b09ed6dc40b17e3bf3d905f3a6d192d2eba9a85f476242fef08e71a67cd7cd->enter($__internal_62b09ed6dc40b17e3bf3d905f3a6d192d2eba9a85f476242fef08e71a67cd7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_240a24f108a6481361485a40dd58869725295984f0bfd9347230092bc7f4ab1b->leave($__internal_240a24f108a6481361485a40dd58869725295984f0bfd9347230092bc7f4ab1b_prof);

        
        $__internal_62b09ed6dc40b17e3bf3d905f3a6d192d2eba9a85f476242fef08e71a67cd7cd->leave($__internal_62b09ed6dc40b17e3bf3d905f3a6d192d2eba9a85f476242fef08e71a67cd7cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
