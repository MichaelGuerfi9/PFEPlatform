<?php

namespace AdvertBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExpertiseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('status')->add('marque')->add('motorisation')->add('dateCirculation')->add('carburant')->add('puissance')->add('couleur')->add('modele')->add('finition')->add('numeroChassis')->add('boiteVitesse')->add('kilometrage')->add('pays')->add('controleTechnique')->add('nombreCle')->add('notice')->add('factureEntretien')->add('carnetEntretien')->add('certificatConformiteEuropeen')->add('dateControleTechnique')->add('importation')->add('factureAchat')->add('location')->add('commentaireAdministratif')->add('siegeAvant')->add('plancheBord')->add('etatRetroviseurInterieur')->add('panneauxPortes')->add('siegeArriere')->add('plageArriere')->add('cric')->add('garnitureCiel')->add('levesVitres')->add('ceintures')->add('moquettesAvants')->add('usureCommande')->add('modeNuitRetroviseurInterieur')->add('tapisSols')->add('moquettesArriere')->add('coffre')->add('roueSecours')->add('ecrouAntivol')->add('freinMain')->add('commentaireInterieure')->add('gps')->add('commandeVolant')->add('toitOuvrant')->add('fermetureCentralisee')->add('autoradio')->add('radarsRecul')->add('ouvertureSansCle')->add('presenceMarqueReparation')->add('etatPareBriseAvant')->add('etatEssuieGlaces')->add('etatRetroviseurGauche')->add('etatVitresLaterales')->add('etatPareBriseArriere')->add('feuxStop')->add('feuRecul')->add('repetiteurs')->add('alignementElements')->add('presenceRouille')->add('differencesTeintesCarrosserie')->add('impactsChampVision')->add('feuxAvants')->add('etatRetroviseurDroite')->add('vitresSurteintees')->add('feuxArrieres')->add('feuxAntibrouillards')->add('feuxDetresse')->add('etatJoints')->add('etatJantes')->add('commentaireExterieur')->add('vehiculeVu')->add('corrosionPerforante')->add('presenceFuiteHuile')->add('echappement')->add('presenceCorrosion')->add('corrosionLongerons')->add('origineFuite')->add('plaquettesAvantsUsage')->add('marquePneuAvant')->add('codeDOTPneuAvantGauche')->add('codeDOTPneuAvantDroite')->add('usagePneumatiquesAvants')->add('usageDisquesAvants')->add('dimensionsPneumatiqueAvant')->add('pneumatiqueConformeMonteOrigine')->add('plaquettesArriereUsage')->add('marquePneuArriere')->add('codeDOTPneuArriereGauche')->add('codeDOTPneuArriereDroite')->add('usagePneumatiquesArrieres')->add('usageDisquesArriere')->add('dimensionsPneumatiqueArriere')->add('pneumatiqueConformeMonteOrigineArriere')->add('niveauHuile')->add('qualiteHuile')->add('souffleBouchonHuile')->add('niveauLiquideRefroidissement')->add('qualiteLiquideRefroidissement')->add('typeDistribution')->add('Distribution')->add('courroie')->add('commentaireConsommablesMoteur')->add('demarrageVehiculeFroid')->add('blocCompteur')->add('presenceFumeeEchappement')->add('amortisseurs')->add('sonoriteMoteur')->add('voyantPrechauffage')->add('commentaireTestStatic')->add('testRoutierEffectue')->add('aucunTestExplication')->add('conditionMeteo')->add('conditionEssaie')->add('coursePedaleEmbrayage')->add('embrayagePatine')->add('buteeEmbrayageBruyante')->add('jeuLevierVitesse')->add('passageFacileVitesses')->add('accoupsBVA')->add('accelerationFranche')->add('vitesseAtteinte')->add('vibrationsMecaniques')->add('vitesseVibration')->add('tenueCap')->add('freinageLigneDroite')->add('presenceBruitsEtrangers')->add('regulateurLimiteurVitesse')->add('odeursExterieur')->add('demarrageVehiculeChaud')->add('ralenti')->add('voyantsAllumes')->add('nomVoyantsAllumes')->add('commentaireTestRoutier')->add('notationVendeur')->add('achatSecurise')->add('kilometrageCoherent')->add('commentaireConclusion')->add('advert');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdvertBundle\Entity\Expertise'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'advertbundle_expertise';
    }


}
