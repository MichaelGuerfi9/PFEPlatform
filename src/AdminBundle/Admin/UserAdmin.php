<?php
namespace AdminBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class UserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('username', 'text');
        $formMapper->add('email', 'text');
        $formMapper->add('roles','choice', array(
            'choices'  => array(
                'Choisissez un rôle' => null,
                'Utilsateur' => 'ROLE_USER',
                'Admin' => 'ROLE_ADMIN',
            ),
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('username');
        $datagridMapper->add('email');
        $datagridMapper->add('roles');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('username');
        $listMapper->addIdentifier('email');
        $listMapper->addIdentifier('roles');
    }
}