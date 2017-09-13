<?php
namespace AdminBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class AdvertAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('carModel');
        $formMapper->add('price');
        $formMapper->add('power');
        $formMapper->add('mileage');
        $formMapper->add('yearOfProduction');
        $formMapper->add('gearbox');
        $formMapper->add('energy');
        $formMapper->add('colorIndoor');
        $formMapper->add('colorOutdoor');
        $formMapper->add('nbrOfDoors');
        $formMapper->add('immatriculation');
        $formMapper->add('greyCard');
        $formMapper->add('firstHand');

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('carModel');
        $datagridMapper->add('price');
        $datagridMapper->add('power');
        $datagridMapper->add('mileage');
        $datagridMapper->add('yearOfProduction');
        $datagridMapper->add('gearbox');
        $datagridMapper->add('energy');
        $datagridMapper->add('colorIndoor');
        $datagridMapper->add('colorOutdoor');
        $datagridMapper->add('nbrOfDoors');
        $datagridMapper->add('immatriculation');
        $datagridMapper->add('greyCard');
        $datagridMapper->add('firstHand');

    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('carModel');
        $listMapper->add('price');
        $listMapper->add('power');
        $listMapper->add('mileage');
        $listMapper->add('yearOfProduction');
        $listMapper->add('gearbox');
        $listMapper->add('energy');
        $listMapper->add('colorIndoor');
        $listMapper->add('colorOutdoor');
        $listMapper->add('nbrOfDoors');
        $listMapper->add('immatriculation');
        $listMapper->add('greyCard');
        $listMapper->add('firstHand');
    }
}