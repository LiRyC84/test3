<?php

namespace Test\Bundle\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use \DateTime;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('prenom', 'text')
            ->add('email', 'text')
            ->add('password', 'text', array( 'label' => 'Mot de passe'))
            ->add('birth', 'birthday', array( 'label' => 'Date de naissance', 'data' => new DateTime("1990-01-01")))
            ->add('sexe', 'choice', array("choices" => array("M" => "Homme", "F" => "Femme"),
					  "required" => True, "expanded" => True, "multiple" => False,)
		)
            ->add('ville', 'text', array( 'label' => 'Ville de naissance', ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Test\Bundle\TestBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'test_bundle_testbundle_user';
    }
}
