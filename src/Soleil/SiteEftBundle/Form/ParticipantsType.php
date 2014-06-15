<?php

namespace Soleil\SiteEftBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParticipantsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('mail')
            ->add('formations', 'entity', array(
                'class' => 'SoleilSiteEftBundle:Formations',
                'property' => 'nom',
                'multiple' => false));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Soleil\SiteEftBundle\Entity\Participants'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'soleil_siteeftbundle_participants';
    }
}
