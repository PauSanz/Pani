<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_80d6a99a23793ca81696969ea4f35323e35ed20ee3e4b7d0d0c3359762f4ed7d extends Twig_Template
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
        $__internal_2d36c44e3d9c7a21f147440f2b255dbad9725e41da271cae4f3eb7183174777e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d36c44e3d9c7a21f147440f2b255dbad9725e41da271cae4f3eb7183174777e->enter($__internal_2d36c44e3d9c7a21f147440f2b255dbad9725e41da271cae4f3eb7183174777e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_27eb5fe5f830cd0c62a0033ecd26e74d0aad31e92117837482c813e5fdfed683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27eb5fe5f830cd0c62a0033ecd26e74d0aad31e92117837482c813e5fdfed683->enter($__internal_27eb5fe5f830cd0c62a0033ecd26e74d0aad31e92117837482c813e5fdfed683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_2d36c44e3d9c7a21f147440f2b255dbad9725e41da271cae4f3eb7183174777e->leave($__internal_2d36c44e3d9c7a21f147440f2b255dbad9725e41da271cae4f3eb7183174777e_prof);

        
        $__internal_27eb5fe5f830cd0c62a0033ecd26e74d0aad31e92117837482c813e5fdfed683->leave($__internal_27eb5fe5f830cd0c62a0033ecd26e74d0aad31e92117837482c813e5fdfed683_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
