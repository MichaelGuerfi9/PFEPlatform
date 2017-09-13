<?php

namespace AdvertBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdvertType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('carModel')->add('price')->add('power')->add('mileage')->add('yearOfProduction')->add('gearbox')->add('energy')->add('colorIndoor')->add('colorOutdoor')->add('nbrOfDoors')->add('immatriculation')->add('greyCard')->add('firstHand');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdvertBundle\Entity\Advert'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'advertbundle_advert';
    }


}
