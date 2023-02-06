<?php

namespace App\Controller\Admin;

use App\Entity\Brand;
use App\Entity\Sneakers;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;

class SneakersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Sneakers::class;
    }

    public function configureCrud(Crud $crud): crud
    {
        return $crud
            ->setPageTitle("index", "Sneakers administration")
            ->setPaginatorPageSize(15);
    }

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('name'),
            AssociationField::new('brand')->setCrudController(BrandCrudController::class),
            TextField::new('style'),
            ImageField::new('images')->setUploadDir('assets/images/'),
            DateField::new('realesedDate')
                ->setFormat('long'),
            ChoiceField::new('gender')
                ->setChoices([
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ]),
        ];
    }
}
