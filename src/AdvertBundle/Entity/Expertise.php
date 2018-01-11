<?php

namespace AdvertBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Expertise
 *
 * @ORM\Table(name="expertise")
 * @ORM\Entity(repositoryClass="AdvertBundle\Repository\ExpertiseRepository")
 */
class Expertise
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * One Cart has One Customer.
     * @OneToOne(targetEntity="AdvertBundle\Entity\Advert", inversedBy="expertise")
     * @JoinColumn(name="advertId", referencedColumnName="id")
     */
    private $advert;


    /**
     * @var string
     *
     * @ORM\Column(name="status", type="text", length=255, nullable=true)
     */

    private $status;

    /**
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="expertises")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $expertisedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="text", length=255, nullable=true)
     * nu
     */

    private $marque ;


    /**
     * @var string
     *
     * @ORM\Column(name="motorisation", type="text", length=255, nullable=true)
     */

    private $motorisation;


    /**
     * @var string
     *
     * @ORM\Column(name="dateCirculation", type="text", length=255, nullable=true)
     */

    private $dateCirculation;


    /**
     * @var string
     *
     * @ORM\Column(name="carburant", type="text", length=255, nullable=true)
     */

    private $carburant;


    /**
     * @var string
     *
     * @ORM\Column(name="puissance", type="text", length=255, nullable=true)
     */

    private $puissance;


    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="text", length=255, nullable=true)
     */

    private $couleur;


    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="text", length=255, nullable=true)
     */

    private $modele;


    /**
     * @var string
     *
     * @ORM\Column(name="finition", type="text", length=255, nullable=true)
     */

    private $finition;


    /**
     * @var string
     *
     * @ORM\Column(name="numeroChassis", type="text", length=255, nullable=true)
     */

    private $numeroChassis;


    /**
     * @var string
     *
     * @ORM\Column(name="boiteVitesse", type="text", length=255, nullable=true)
     */

    private $boiteVitesse;


    /**
     * @var string
     *
     * @ORM\Column(name="kilometrage", type="text", length=255, nullable=true)
     */

    private $kilometrage;


    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="text", length=255, nullable=true)
     */

    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="controleTechnique", type="text", length=255, nullable=true)
     */

    private $controleTechnique;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreCle", type="text", length=255, nullable=true)
     */

    private $nombreCle;

    /**
     * @var string
     *
     * @ORM\Column(name="notice", type="text", length=255, nullable=true)
     */

    private $notice;

    /**
     * @var string
     *
     * @ORM\Column(name="factureEntretien", type="text", length=255, nullable=true)
     */

    private $factureEntretien;

    /**
     * @var string
     *
     * @ORM\Column(name="carnetEntretien", type="text", length=255, nullable=true)
     */

    private $carnetEntretien;

    /**
     * @var string
     *
     * @ORM\Column(name="certificatConformiteEuropeen", type="text", length=255, nullable=true)
     */

    private $certificatConformiteEuropeen;

    /**
     * @var string
     *
     * @ORM\Column(name="dateControleTechnique", type="text", length=255, nullable=true)
     */

    private $dateControleTechnique;

    /**
     * @var string
     *
     * @ORM\Column(name="importation", type="text", length=255, nullable=true)
     */

    private $importation;

    /**
     * @var string
     *
     * @ORM\Column(name="factureAchat", type="text", length=255, nullable=true)
     */

    private $factureAchat;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="text", length=255, nullable=true)
     */

    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaireAdministratif", type="text", length=255, nullable=true)
     */

    private $commentaireAdministratif;

    /**
     * @var string
     *
     * @ORM\Column(name="siegeAvant", type="text", length=255, nullable=true)
     */

    private $siegeAvant;

    /**
     * @var string
     *
     * @ORM\Column(name="plancheBord", type="text", length=255, nullable=true)
     */

    private $plancheBord;

    /**
     * @var string
     *
     * @ORM\Column(name="etatRetroviseurInterieur", type="text", length=255, nullable=true)
     */

    private $etatRetroviseurInterieur;

    /**
     * @var string
     *
     * @ORM\Column(name="panneauxPortes", type="text", length=255, nullable=true)
     */

    private $panneauxPortes;

    /**
     * @var string
     *
     * @ORM\Column(name="siegeArriere", type="text", length=255, nullable=true)
     */

    private $siegeArriere;

    /**
     * @var string
     *
     * @ORM\Column(name="plageArriere", type="text", length=255, nullable=true)
     */

    private $plageArriere;

    /**
     * @var string
     *
     * @ORM\Column(name="cric", type="text", length=255, nullable=true)
     */

    private $cric;

    /**
     * @var string
     *
     * @ORM\Column(name="garnitureCiel", type="text", length=255, nullable=true)
     */

    private $garnitureCiel;

    /**
     * @var string
     *
     * @ORM\Column(name="levesVitres", type="text", length=255, nullable=true)
     */

    private $levesVitres;

    /**
     * @var string
     *
     * @ORM\Column(name="ceintures", type="text", length=255, nullable=true)
     */

    private $ceintures;

    /**
     * @var string
     *
     * @ORM\Column(name="moquettesAvants", type="text", length=255, nullable=true)
     */

    private $moquettesAvants;

    /**
     * @var string
     *
     * @ORM\Column(name="usureCommande", type="text", length=255, nullable=true)
     */

    private $usureCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="modeNuitRetroviseurInterieur", type="text", length=255, nullable=true)
     */

    private $modeNuitRetroviseurInterieur;

    /**
     * @var string
     *
     * @ORM\Column(name="tapisSols", type="text", length=255, nullable=true)
     */

    private $tapisSols;

    /**
     * @var string
     *
     * @ORM\Column(name="moquettesArriere", type="text", length=255, nullable=true)
     */

    private $moquettesArriere;

    /**
     * @var string
     *
     * @ORM\Column(name="coffre", type="text", length=255, nullable=true)
     */

    private $coffre;

    /**
     * @var string
     *
     * @ORM\Column(name="roueSecours", type="text", length=255, nullable=true)
     */

    private $roueSecours;

    /**
     * @var string
     *
     * @ORM\Column(name="ecrouAntivol", type="text", length=255, nullable=true)
     */

    private $ecrouAntivol;

    /**
     * @var string
     *
     * @ORM\Column(name="freinMain", type="text", length=255, nullable=true)
     */

    private $freinMain;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaireInterieure", type="text", length=255, nullable=true)
     */

    private $commentaireInterieure;

    /**
     * @var string
     *
     * @ORM\Column(name="gps", type="text", length=255, nullable=true)
     */

    private $gps;

    /**
     * @var string
     *
     * @ORM\Column(name="commandeVolant", type="text", length=255, nullable=true)
     */

    private $commandeVolant;

    /**
     * @var string
     *
     * @ORM\Column(name="toitOuvrant", type="text", length=255, nullable=true)
     */

    private $toitOuvrant;

    /**
     * @var string
     *
     * @ORM\Column(name="fermetureCentralisee", type="text", length=255, nullable=true)
     */

    private $fermetureCentralisee;

    /**
     * @var string
     *
     * @ORM\Column(name="autoradio", type="text", length=255, nullable=true)
     */

    private $autoradio;

    /**
     * @var string
     *
     * @ORM\Column(name="radarsRecul", type="text", length=255, nullable=true)
     */

    private $radarsRecul;

    /**
     * @var string
     *
     * @ORM\Column(name="ouvertureSansCle", type="text", length=255, nullable=true)
     */

    private $ouvertureSansCle;

    /**
     * @var string
     *
     * @ORM\Column(name="presenceMarqueReparation", type="text", length=255, nullable=true)
     */

    private $presenceMarqueReparation;

    /**
     * @var string
     *
     * @ORM\Column(name="etatPareBriseAvant", type="text", length=255, nullable=true)
     */

    private $etatPareBriseAvant;

    /**
     * @var string
     *
     * @ORM\Column(name="etatEssuieGlaces", type="text", length=255, nullable=true)
     */

    private $etatEssuieGlaces;

    /**
     * @var string
     *
     * @ORM\Column(name="etatRetroviseurGauche", type="text", length=255, nullable=true)
     */

    private $etatRetroviseurGauche;

    /**
     * @var string
     *
     * @ORM\Column(name="etatVitresLaterales", type="text", length=255, nullable=true)
     */

    private $etatVitresLaterales;

    /**
     * @var string
     *
     * @ORM\Column(name="etatPareBriseArriere", type="text", length=255, nullable=true)
     */

    private $etatPareBriseArriere;


    /**
     * @var string
     *
     * @ORM\Column(name="feuxStop", type="text", length=255, nullable=true)
     */

    private $feuxStop;

    /**
     * @var string
     *
     * @ORM\Column(name="feuRecul", type="text", length=255, nullable=true)
     */

    private $feuRecul;


    /**
     * @var string
     *
     * @ORM\Column(name="repetiteurs", type="text", length=255, nullable=true)
     */

    private $repetiteurs;

    /**
     * @var string
     *
     * @ORM\Column(name="alignementElements", type="text", length=255, nullable=true)
     */

    private $alignementElements;


    /**
     * @var string
     *
     * @ORM\Column(name="presenceRouille", type="text", length=255, nullable=true)
     */

    private $presenceRouille;

    /**
     * @var string
     *
     * @ORM\Column(name="differencesTeintesCarrosserie", type="text", length=255, nullable=true)
     */

    private $differencesTeintesCarrosserie;


    /**
     * @var string
     *
     * @ORM\Column(name="impactsChampVision", type="text", length=255, nullable=true)
     */

    private $impactsChampVision;

    /**
     * @var string
     *
     * @ORM\Column(name="feuxAvants", type="text", length=255, nullable=true)
     */

    private $feuxAvants;


    /**
     * @var string
     *
     * @ORM\Column(name="etatRetroviseurDroite", type="text", length=255, nullable=true)
     */

    private $etatRetroviseurDroite;

    /**
     * @var string
     *
     * @ORM\Column(name="vitresSurteintees", type="text", length=255, nullable=true)
     */

    private $vitresSurteintees;


    /**
     * @var string
     *
     * @ORM\Column(name="feuxArrieres", type="text", length=255, nullable=true)
     */

    private $feuxArrieres;

    /**
     * @var string
     *
     * @ORM\Column(name="feuxAntibrouillards", type="text", length=255, nullable=true)
     */

    private $feuxAntibrouillards;


    /**
     * @var string
     *
     * @ORM\Column(name="feuxDetresse", type="text", length=255, nullable=true)
     */

    private $feuxDetresse;

    /**
     * @var string
     *
     * @ORM\Column(name="etatJoints", type="text", length=255, nullable=true)
     */

    private $etatJoints;


    /**
     * @var string
     *
     * @ORM\Column(name="etatJantes", type="text", length=255, nullable=true)
     */

    private $etatJantes;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaireExterieur", type="text", length=255, nullable=true)
     */

    private $commentaireExterieur;

    /**
     * @var string
     *
     * @ORM\Column(name="vehiculeVu", type="text", length=255, nullable=true)
     */

    private $vehiculeVu;

    /**
     * @var string
     *
     * @ORM\Column(name="corrosionPerforante", type="text", length=255, nullable=true)
     */

    private $corrosionPerforante;


    /**
     * @var string
     *
     * @ORM\Column(name="presenceFuiteHuile", type="text", length=255, nullable=true)
     */

    private $presenceFuiteHuile;

    /**
     * @var string
     *
     * @ORM\Column(name="echappement", type="text", length=255, nullable=true)
     */

    private $echappement;


    /**
     * @var string
     *
     * @ORM\Column(name="presenceCorrosion", type="text", length=255, nullable=true)
     */

    private $presenceCorrosion;

    /**
     * @var string
     *
     * @ORM\Column(name="corrosionLongerons", type="text", length=255, nullable=true)
     */

    private $corrosionLongerons;


    /**
     * @var string
     *
     * @ORM\Column(name="origineFuite", type="text", length=255, nullable=true)
     */

    private $origineFuite;

    /**
     * @var string
     *
     * @ORM\Column(name="plaquettesAvantsUsage", type="text", length=255, nullable=true)
     */
    //en %

    private $plaquettesAvantsUsage;


    /**
     * @var string
     *
     * @ORM\Column(name="marquePneuAvant", type="text", length=255, nullable=true)
     */

    private $marquePneuAvant;

    /**
     * @var string
     *
     * @ORM\Column(name="codeDOTPneuAvantGauche", type="text", length=255, nullable=true)
     */

    private $codeDOTPneuAvantGauche;


    /**
     * @var string
     *
     * @ORM\Column(name="codeDOTPneuAvantDroite", type="text", length=255, nullable=true)
     */

    private $codeDOTPneuAvantDroite;

    /**
     * @var string
     *
     * @ORM\Column(name="usagePneumatiquesAvants", type="text", length=255, nullable=true)
     */

    private $usagePneumatiquesAvants;


    /**
     * @var string
     *
     * @ORM\Column(name="usageDisquesAvants", type="text", length=255, nullable=true)
     */

    private $usageDisquesAvants;

    /**
     * @var string
     *
     * @ORM\Column(name="dimensionsPneumatiqueAvant", type="text", length=255, nullable=true)
     */

    private $dimensionsPneumatiqueAvant;


    /**
     * @var string
     *
     * @ORM\Column(name="pneumatiqueConformeMonteOrigine", type="text", length=255, nullable=true)
     */

    private $pneumatiqueConformeMonteOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="plaquettesArriereUsage", type="text", length=255, nullable=true)
     */

    private $plaquettesArriereUsage;


    /**
     * @var string
     *
     * @ORM\Column(name="marquePneuArriere", type="text", length=255, nullable=true)
     */

    private $marquePneuArriere;

    /**
     * @var string
     *
     * @ORM\Column(name="codeDOTPneuArriereGauche", type="text", length=255, nullable=true)
     */

    private $codeDOTPneuArriereGauche;

    /**
     * @var string
     *
     * @ORM\Column(name="codeDOTPneuArriereDroite", type="text", length=255, nullable=true)
     */

    private $codeDOTPneuArriereDroite;

    /**
     * @var string
     *
     * @ORM\Column(name="usagePneumatiquesArrieres", type="text", length=255, nullable=true)
     */

    private $usagePneumatiquesArrieres;


    /**
     * @var string
     *
     * @ORM\Column(name="usageDisquesArriere", type="text", length=255, nullable=true)
     */

    private $usageDisquesArriere;

    /**
     * @var string
     *
     * @ORM\Column(name="dimensionsPneumatiqueArriere", type="text", length=255, nullable=true)
     */

    private $dimensionsPneumatiqueArriere;


    /**
     * @var string
     *
     * @ORM\Column(name="pneumatiqueConformeMonteOrigineArriere", type="text", length=255, nullable=true)
     */

    private $pneumatiqueConformeMonteOrigineArriere;

    /**
     * @var string
     *
     * @ORM\Column(name="niveauHuile", type="text", length=255, nullable=true)
     */

    private $niveauHuile;


    /**
     * @var string
     *
     * @ORM\Column(name="qualiteHuile", type="text", length=255, nullable=true)
     */

    private $qualiteHuile;

    /**
     * @var string
     *
     * @ORM\Column(name="souffleBouchonHuile", type="text", length=255, nullable=true)
     */

    private $souffleBouchonHuile;


    /**
     * @var string
     *
     * @ORM\Column(name="niveauLiquideRefroidissement", type="text", length=255, nullable=true)
     */

    private $niveauLiquideRefroidissement;

    /**
     * @var string
     *
     * @ORM\Column(name="qualiteLiquideRefroidissement", type="text", length=255, nullable=true)
     */

    private $qualiteLiquideRefroidissement;


    /**
     * @var string
     *
     * @ORM\Column(name="typeDistribution", type="text", length=255, nullable=true)
     */

    private $typeDistribution;

    /**
     * @var string
     *
     * @ORM\Column(name="Distribution", type="text", length=255, nullable=true)
     */
//Distribution à jour(si facture, nullable=true)
    private $Distribution;


    /**
     * @var string
     *
     * @ORM\Column(name="courroie", type="text", length=255, nullable=true)
     */

    private $courroie;
//Courroie accessoire

    /**
     * @var string
     *
     * @ORM\Column(name="commentaireConsommablesMoteur", type="text", length=255, nullable=true)
     */

    private $commentaireConsommablesMoteur;


    /**
     * @var string
     *
     * @ORM\Column(name="demarrageVehiculeFroid", type="text", length=255, nullable=true)
     */

    private $demarrageVehiculeFroid;

    /**
     * @var string
     *
     * @ORM\Column(name="blocCompteur", type="text", length=255, nullable=true)
     */

    private $blocCompteur;
//Bloc compteur (jauges, cadrans..., nullable=true)

    /**
     * @var string
     *
     * @ORM\Column(name="presenceFumeeEchappement", type="text", length=255, nullable=true)
     */

    private $presenceFumeeEchappement;

    /**
     * @var string
     *
     * @ORM\Column(name="amortisseurs", type="text", length=255, nullable=true)
     */

    private $amortisseurs;

    /**
     * @var string
     *
     * @ORM\Column(name="sonoriteMoteur", type="text", length=255, nullable=true)
     */

    private $sonoriteMoteur;

    /**
     * @var string
     *
     * @ORM\Column(name="voyantPrechauffage", type="text", length=255, nullable=true)
     */

    private $voyantPrechauffage;
//Voyant prechauffage (Diesel, nullable=true)

    /**
     * @var string
     *
     * @ORM\Column(name="commentaireTestStatic", type="text", length=255, nullable=true)
     */

    private $commentaireTestStatic;

    /**
     * @var string
     *
     * @ORM\Column(name="testRoutierEffectue", type="text", length=255, nullable=true)
     */

    private $testRoutierEffectue;


    /**
     * @var string
     *
     * @ORM\Column(name="aucunTestExplication", type="text", length=255, nullable=true)
     */

    private $aucunTestExplication;

    /**
     * @var string
     *
     * @ORM\Column(name="conditionMeteo", type="text", length=255, nullable=true)
     */

    private $conditionMeteo;


    /**
     * @var string
     *
     * @ORM\Column(name="conditionEssaie", type="text", length=255, nullable=true)
     */

    private $conditionEssaie;

    /**
     * @var string
     *
     * @ORM\Column(name="coursePedaleEmbrayage", type="text", length=255, nullable=true)
     */

    private $coursePedaleEmbrayage;


    /**
     * @var string
     *
     * @ORM\Column(name="embrayagePatine", type="text", length=255, nullable=true)
     */

    private $embrayagePatine;

    /**
     * @var string
     *
     * @ORM\Column(name="buteeEmbrayageBruyante", type="text", length=255, nullable=true)
     */

    private $buteeEmbrayageBruyante;


    /**
     * @var string
     *
     * @ORM\Column(name="jeuLevierVitesse", type="text", length=255, nullable=true)
     */

    private $jeuLevierVitesse;

    /**
     * @var string
     *
     * @ORM\Column(name="passageFacileVitesses", type="text", length=255, nullable=true)
     */

    private $passageFacileVitesses;


    /**
     * @var string
     *
     * @ORM\Column(name="accoupsBVA ", type="text", length=255, nullable=true)
     */

    private $accoupsBVA ;

    /**
     * @var string
     *
     * @ORM\Column(name="accelerationFranche", type="text", length=255, nullable=true)
     */

    private $accelerationFranche;


    /**
     * @var string
     *
     * @ORM\Column(name="vitesseAtteinte", type="text", length=255, nullable=true)
     */

    private $vitesseAtteinte;
    //Vitesse atteinte (km/h, nullable=true)

    /**
     * @var string
     *
     * @ORM\Column(name="vibrationsMecaniques", type="text", length=255, nullable=true)
     */

    private $vibrationsMecaniques;
    //Vibrations mecaniques (moteur, transmi., echap., tringleries..., nullable=true)

    /**
     * @var string
     *
     * @ORM\Column(name="vitesseVibration", type="text", length=255, nullable=true)
     */

    private $vitesseVibration;
    //Si vibrations, à quelle vitesse? (km/h, nullable=true)


    /**
     * @var string
     *
     * @ORM\Column(name="tenueCap", type="text", length=255, nullable=true)
     */

    private $tenueCap;

    /**
     * @var string
     *
     * @ORM\Column(name="freinageLigneDroite", type="text", length=255, nullable=true)
     */

    private $freinageLigneDroite;


    /**
     * @var string
     *
     * @ORM\Column(name="presenceBruitsEtrangers", type="text", length=255, nullable=true)
     */

    private $presenceBruitsEtrangers;

    /**
     * @var string
     *
     * @ORM\Column(name="regulateurLimiteurVitesse", type="text", length=255, nullable=true)
     */

    private $regulateurLimiteurVitesse;


    /**
     * @var string
     *
     * @ORM\Column(name="odeursExterieur", type="text", length=255, nullable=true)
     */

    private $odeursExterieur;
    //Odeurs à l'exterieur (freins, huile, echap., nullable=true)


    /**
     * @var string
     *
     * @ORM\Column(name="demarrageVehiculeChaud", type="text", length=255, nullable=true)
     */

    private $demarrageVehiculeChaud;


    /**
     * @var string
     *
     * @ORM\Column(name="ralenti", type="text", length=255, nullable=true)
     */

    private $ralenti;

    /**
     * @var string
     *
     * @ORM\Column(name="voyantsAllumes", type="text", length=255, nullable=true)
     */

    private $voyantsAllumes;


    /**
     * @var string
     *
     * @ORM\Column(name="nomVoyantsAllumes", type="text", length=255, nullable=true)
     */

    private $nomVoyantsAllumes;
    //Si oui, lesquels ?


    /**
     * @var string
     *
     * @ORM\Column(name="commentaireTestRoutier", type="text", length=255, nullable=true)
     */

    private $commentaireTestRoutier;


    /**
     * @var string
     *
     * @ORM\Column(name="notationVendeur", type="text", length=255, nullable=true)
     */

    private $notationVendeur;

    /**
     * @var string
     *
     * @ORM\Column(name="achatSecurise", type="text", length=255, nullable=true)
     */

    private $achatSecurise;
    //L'achat semble securise, je le recommande


    /**
     * @var string
     *
     * @ORM\Column(name="kilometrageCoherent", type="text", length=255, nullable=true)
     */

    private $kilometrageCoherent;
    //Kilometrage coherent (entretien, usure..., nullable=true)



    /**
     * @var string
     *
     * @ORM\Column(name="commentaireConclusion", type="text", length=255, nullable=true)
     */

    private $commentaireConclusion;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set advert
     *
     * @param \AdvertBundle\Entity\Advert $advert
     *
     * @return Expertise
     */
    public function setAdvert(\AdvertBundle\Entity\Advert $advert = null)
    {
        $this->advert = $advert;

        return $this;
    }

    /**
     * Get advert
     *
     * @return \AdvertBundle\Entity\Advert
     */
    public function getAdvert()
    {
        return $this->advert;
    }

    /**
     * Set status
     *
     * @param text $status
     *
     * @return Expertise
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return text
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set marque
     *
     * @param text $marque
     *
     * @return Expertise
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return text
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set motorisation
     *
     * @param text $motorisation
     *
     * @return Expertise
     */
    public function setMotorisation($motorisation)
    {
        $this->motorisation = $motorisation;

        return $this;
    }

    /**
     * Get motorisation
     *
     * @return text
     */
    public function getMotorisation()
    {
        return $this->motorisation;
    }

    /**
     * Set dateCirculation
     *
     * @param text $dateCirculation
     *
     * @return Expertise
     */
    public function setDateCirculation($dateCirculation)
    {
        $this->dateCirculation = $dateCirculation;

        return $this;
    }

    /**
     * Get dateCirculation
     *
     * @return text
     */
    public function getDateCirculation()
    {
        return $this->dateCirculation;
    }

    /**
     * Set carburant
     *
     * @param text $carburant
     *
     * @return Expertise
     */
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;

        return $this;
    }

    /**
     * Get carburant
     *
     * @return text
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * Set puissance
     *
     * @param text $puissance
     *
     * @return Expertise
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance
     *
     * @return text
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set couleur
     *
     * @param text $couleur
     *
     * @return Expertise
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return text
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set modele
     *
     * @param text $modele
     *
     * @return Expertise
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return text
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set finition
     *
     * @param text $finition
     *
     * @return Expertise
     */
    public function setFinition($finition)
    {
        $this->finition = $finition;

        return $this;
    }

    /**
     * Get finition
     *
     * @return text
     */
    public function getFinition()
    {
        return $this->finition;
    }

    /**
     * Set numeroChassis
     *
     * @param text $numeroChassis
     *
     * @return Expertise
     */
    public function setNumeroChassis($numeroChassis)
    {
        $this->numeroChassis = $numeroChassis;

        return $this;
    }

    /**
     * Get numeroChassis
     *
     * @return text
     */
    public function getNumeroChassis()
    {
        return $this->numeroChassis;
    }

    /**
     * Set boiteVitesse
     *
     * @param text $boiteVitesse
     *
     * @return Expertise
     */
    public function setBoiteVitesse($boiteVitesse)
    {
        $this->boiteVitesse = $boiteVitesse;

        return $this;
    }

    /**
     * Get boiteVitesse
     *
     * @return text
     */
    public function getBoiteVitesse()
    {
        return $this->boiteVitesse;
    }

    /**
     * Set kilometrage
     *
     * @param text $kilometrage
     *
     * @return Expertise
     */
    public function setKilometrage($kilometrage)
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    /**
     * Get kilometrage
     *
     * @return text
     */
    public function getKilometrage()
    {
        return $this->kilometrage;
    }

    /**
     * Set pays
     *
     * @param text $pays
     *
     * @return Expertise
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return text
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set controleTechnique
     *
     * @param text $controleTechnique
     *
     * @return Expertise
     */
    public function setControleTechnique($controleTechnique)
    {
        $this->controleTechnique = $controleTechnique;

        return $this;
    }

    /**
     * Get controleTechnique
     *
     * @return text
     */
    public function getControleTechnique()
    {
        return $this->controleTechnique;
    }

    /**
     * Set nombreCle
     *
     * @param text $nombreCle
     *
     * @return Expertise
     */
    public function setNombreCle($nombreCle)
    {
        $this->nombreCle = $nombreCle;

        return $this;
    }

    /**
     * Get nombreCle
     *
     * @return text
     */
    public function getNombreCle()
    {
        return $this->nombreCle;
    }

    /**
     * Set notice
     *
     * @param text $notice
     *
     * @return Expertise
     */
    public function setNotice($notice)
    {
        $this->notice = $notice;

        return $this;
    }

    /**
     * Get notice
     *
     * @return text
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * Set factureEntretien
     *
     * @param text $factureEntretien
     *
     * @return Expertise
     */
    public function setFactureEntretien($factureEntretien)
    {
        $this->factureEntretien = $factureEntretien;

        return $this;
    }

    /**
     * Get factureEntretien
     *
     * @return text
     */
    public function getFactureEntretien()
    {
        return $this->factureEntretien;
    }

    /**
     * Set carnetEntretien
     *
     * @param text $carnetEntretien
     *
     * @return Expertise
     */
    public function setCarnetEntretien($carnetEntretien)
    {
        $this->carnetEntretien = $carnetEntretien;

        return $this;
    }

    /**
     * Get carnetEntretien
     *
     * @return text
     */
    public function getCarnetEntretien()
    {
        return $this->carnetEntretien;
    }

    /**
     * Set certificatConformiteEuropeen
     *
     * @param text $certificatConformiteEuropeen
     *
     * @return Expertise
     */
    public function setCertificatConformiteEuropeen($certificatConformiteEuropeen)
    {
        $this->certificatConformiteEuropeen = $certificatConformiteEuropeen;

        return $this;
    }

    /**
     * Get certificatConformiteEuropeen
     *
     * @return text
     */
    public function getCertificatConformiteEuropeen()
    {
        return $this->certificatConformiteEuropeen;
    }

    /**
     * Set dateControleTechnique
     *
     * @param text $dateControleTechnique
     *
     * @return Expertise
     */
    public function setDateControleTechnique($dateControleTechnique)
    {
        $this->dateControleTechnique = $dateControleTechnique;

        return $this;
    }

    /**
     * Get dateControleTechnique
     *
     * @return text
     */
    public function getDateControleTechnique()
    {
        return $this->dateControleTechnique;
    }

    /**
     * Set importation
     *
     * @param text $importation
     *
     * @return Expertise
     */
    public function setImportation($importation)
    {
        $this->importation = $importation;

        return $this;
    }

    /**
     * Get importation
     *
     * @return text
     */
    public function getImportation()
    {
        return $this->importation;
    }

    /**
     * Set factureAchat
     *
     * @param text $factureAchat
     *
     * @return Expertise
     */
    public function setFactureAchat($factureAchat)
    {
        $this->factureAchat = $factureAchat;

        return $this;
    }

    /**
     * Get factureAchat
     *
     * @return text
     */
    public function getFactureAchat()
    {
        return $this->factureAchat;
    }

    /**
     * Set location
     *
     * @param text $location
     *
     * @return Expertise
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return text
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set commentaireAdministratif
     *
     * @param text $commentaireAdministratif
     *
     * @return Expertise
     */
    public function setCommentaireAdministratif($commentaireAdministratif)
    {
        $this->commentaireAdministratif = $commentaireAdministratif;

        return $this;
    }

    /**
     * Get commentaireAdministratif
     *
     * @return text
     */
    public function getCommentaireAdministratif()
    {
        return $this->commentaireAdministratif;
    }

    /**
     * Set siegeAvant
     *
     * @param text $siegeAvant
     *
     * @return Expertise
     */
    public function setSiegeAvant($siegeAvant)
    {
        $this->siegeAvant = $siegeAvant;

        return $this;
    }

    /**
     * Get siegeAvant
     *
     * @return text
     */
    public function getSiegeAvant()
    {
        return $this->siegeAvant;
    }

    /**
     * Set plancheBord
     *
     * @param text $plancheBord
     *
     * @return Expertise
     */
    public function setPlancheBord($plancheBord)
    {
        $this->plancheBord = $plancheBord;

        return $this;
    }

    /**
     * Get plancheBord
     *
     * @return text
     */
    public function getPlancheBord()
    {
        return $this->plancheBord;
    }

    /**
     * Set etatRetroviseurInterieur
     *
     * @param text $etatRetroviseurInterieur
     *
     * @return Expertise
     */
    public function setEtatRetroviseurInterieur($etatRetroviseurInterieur)
    {
        $this->etatRetroviseurInterieur = $etatRetroviseurInterieur;

        return $this;
    }

    /**
     * Get etatRetroviseurInterieur
     *
     * @return text
     */
    public function getEtatRetroviseurInterieur()
    {
        return $this->etatRetroviseurInterieur;
    }

    /**
     * Set panneauxPortes
     *
     * @param text $panneauxPortes
     *
     * @return Expertise
     */
    public function setPanneauxPortes($panneauxPortes)
    {
        $this->panneauxPortes = $panneauxPortes;

        return $this;
    }

    /**
     * Get panneauxPortes
     *
     * @return text
     */
    public function getPanneauxPortes()
    {
        return $this->panneauxPortes;
    }

    /**
     * Set siegeArriere
     *
     * @param text $siegeArriere
     *
     * @return Expertise
     */
    public function setSiegeArriere($siegeArriere)
    {
        $this->siegeArriere = $siegeArriere;

        return $this;
    }

    /**
     * Get siegeArriere
     *
     * @return text
     */
    public function getSiegeArriere()
    {
        return $this->siegeArriere;
    }

    /**
     * Set plageArriere
     *
     * @param text $plageArriere
     *
     * @return Expertise
     */
    public function setPlageArriere($plageArriere)
    {
        $this->plageArriere = $plageArriere;

        return $this;
    }

    /**
     * Get plageArriere
     *
     * @return text
     */
    public function getPlageArriere()
    {
        return $this->plageArriere;
    }

    /**
     * Set cric
     *
     * @param text $cric
     *
     * @return Expertise
     */
    public function setCric($cric)
    {
        $this->cric = $cric;

        return $this;
    }

    /**
     * Get cric
     *
     * @return text
     */
    public function getCric()
    {
        return $this->cric;
    }

    /**
     * Set garnitureCiel
     *
     * @param text $garnitureCiel
     *
     * @return Expertise
     */
    public function setGarnitureCiel($garnitureCiel)
    {
        $this->garnitureCiel = $garnitureCiel;

        return $this;
    }

    /**
     * Get garnitureCiel
     *
     * @return text
     */
    public function getGarnitureCiel()
    {
        return $this->garnitureCiel;
    }

    /**
     * Set levesVitres
     *
     * @param text $levesVitres
     *
     * @return Expertise
     */
    public function setLevesVitres($levesVitres)
    {
        $this->levesVitres = $levesVitres;

        return $this;
    }

    /**
     * Get levesVitres
     *
     * @return text
     */
    public function getLevesVitres()
    {
        return $this->levesVitres;
    }

    /**
     * Set ceintures
     *
     * @param text $ceintures
     *
     * @return Expertise
     */
    public function setCeintures($ceintures)
    {
        $this->ceintures = $ceintures;

        return $this;
    }

    /**
     * Get ceintures
     *
     * @return text
     */
    public function getCeintures()
    {
        return $this->ceintures;
    }

    /**
     * Set moquettesAvants
     *
     * @param text $moquettesAvants
     *
     * @return Expertise
     */
    public function setMoquettesAvants($moquettesAvants)
    {
        $this->moquettesAvants = $moquettesAvants;

        return $this;
    }

    /**
     * Get moquettesAvants
     *
     * @return text
     */
    public function getMoquettesAvants()
    {
        return $this->moquettesAvants;
    }

    /**
     * Set usureCommande
     *
     * @param text $usureCommande
     *
     * @return Expertise
     */
    public function setUsureCommande($usureCommande)
    {
        $this->usureCommande = $usureCommande;

        return $this;
    }

    /**
     * Get usureCommande
     *
     * @return text
     */
    public function getUsureCommande()
    {
        return $this->usureCommande;
    }

    /**
     * Set modeNuitRetroviseurInterieur
     *
     * @param text $modeNuitRetroviseurInterieur
     *
     * @return Expertise
     */
    public function setModeNuitRetroviseurInterieur($modeNuitRetroviseurInterieur)
    {
        $this->modeNuitRetroviseurInterieur = $modeNuitRetroviseurInterieur;

        return $this;
    }

    /**
     * Get modeNuitRetroviseurInterieur
     *
     * @return text
     */
    public function getModeNuitRetroviseurInterieur()
    {
        return $this->modeNuitRetroviseurInterieur;
    }

    /**
     * Set tapisSols
     *
     * @param text $tapisSols
     *
     * @return Expertise
     */
    public function setTapisSols($tapisSols)
    {
        $this->tapisSols = $tapisSols;

        return $this;
    }

    /**
     * Get tapisSols
     *
     * @return text
     */
    public function getTapisSols()
    {
        return $this->tapisSols;
    }

    /**
     * Set moquettesArriere
     *
     * @param text $moquettesArriere
     *
     * @return Expertise
     */
    public function setMoquettesArriere($moquettesArriere)
    {
        $this->moquettesArriere = $moquettesArriere;

        return $this;
    }

    /**
     * Get moquettesArriere
     *
     * @return text
     */
    public function getMoquettesArriere()
    {
        return $this->moquettesArriere;
    }

    /**
     * Set coffre
     *
     * @param text $coffre
     *
     * @return Expertise
     */
    public function setCoffre($coffre)
    {
        $this->coffre = $coffre;

        return $this;
    }

    /**
     * Get coffre
     *
     * @return text
     */
    public function getCoffre()
    {
        return $this->coffre;
    }

    /**
     * Set roueSecours
     *
     * @param text $roueSecours
     *
     * @return Expertise
     */
    public function setRoueSecours($roueSecours)
    {
        $this->roueSecours = $roueSecours;

        return $this;
    }

    /**
     * Get roueSecours
     *
     * @return text
     */
    public function getRoueSecours()
    {
        return $this->roueSecours;
    }

    /**
     * Set ecrouAntivol
     *
     * @param text $ecrouAntivol
     *
     * @return Expertise
     */
    public function setEcrouAntivol($ecrouAntivol)
    {
        $this->ecrouAntivol = $ecrouAntivol;

        return $this;
    }

    /**
     * Get ecrouAntivol
     *
     * @return text
     */
    public function getEcrouAntivol()
    {
        return $this->ecrouAntivol;
    }

    /**
     * Set freinMain
     *
     * @param text $freinMain
     *
     * @return Expertise
     */
    public function setFreinMain($freinMain)
    {
        $this->freinMain = $freinMain;

        return $this;
    }

    /**
     * Get freinMain
     *
     * @return text
     */
    public function getFreinMain()
    {
        return $this->freinMain;
    }

    /**
     * Set commentaireInterieure
     *
     * @param text $commentaireInterieure
     *
     * @return Expertise
     */
    public function setCommentaireInterieure($commentaireInterieure)
    {
        $this->commentaireInterieure = $commentaireInterieure;

        return $this;
    }

    /**
     * Get commentaireInterieure
     *
     * @return text
     */
    public function getCommentaireInterieure()
    {
        return $this->commentaireInterieure;
    }

    /**
     * Set gps
     *
     * @param text $gps
     *
     * @return Expertise
     */
    public function setGps($gps)
    {
        $this->gps = $gps;

        return $this;
    }

    /**
     * Get gps
     *
     * @return text
     */
    public function getGps()
    {
        return $this->gps;
    }

    /**
     * Set commandeVolant
     *
     * @param text $commandeVolant
     *
     * @return Expertise
     */
    public function setCommandeVolant($commandeVolant)
    {
        $this->commandeVolant = $commandeVolant;

        return $this;
    }

    /**
     * Get commandeVolant
     *
     * @return text
     */
    public function getCommandeVolant()
    {
        return $this->commandeVolant;
    }

    /**
     * Set toitOuvrant
     *
     * @param text $toitOuvrant
     *
     * @return Expertise
     */
    public function setToitOuvrant($toitOuvrant)
    {
        $this->toitOuvrant = $toitOuvrant;

        return $this;
    }

    /**
     * Get toitOuvrant
     *
     * @return text
     */
    public function getToitOuvrant()
    {
        return $this->toitOuvrant;
    }

    /**
     * Set fermetureCentralisee
     *
     * @param text $fermetureCentralisee
     *
     * @return Expertise
     */
    public function setFermetureCentralisee($fermetureCentralisee)
    {
        $this->fermetureCentralisee = $fermetureCentralisee;

        return $this;
    }

    /**
     * Get fermetureCentralisee
     *
     * @return text
     */
    public function getFermetureCentralisee()
    {
        return $this->fermetureCentralisee;
    }

    /**
     * Set autoradio
     *
     * @param text $autoradio
     *
     * @return Expertise
     */
    public function setAutoradio($autoradio)
    {
        $this->autoradio = $autoradio;

        return $this;
    }

    /**
     * Get autoradio
     *
     * @return text
     */
    public function getAutoradio()
    {
        return $this->autoradio;
    }

    /**
     * Set radarsRecul
     *
     * @param text $radarsRecul
     *
     * @return Expertise
     */
    public function setRadarsRecul($radarsRecul)
    {
        $this->radarsRecul = $radarsRecul;

        return $this;
    }

    /**
     * Get radarsRecul
     *
     * @return text
     */
    public function getRadarsRecul()
    {
        return $this->radarsRecul;
    }

    /**
     * Set ouvertureSansCle
     *
     * @param text $ouvertureSansCle
     *
     * @return Expertise
     */
    public function setOuvertureSansCle($ouvertureSansCle)
    {
        $this->ouvertureSansCle = $ouvertureSansCle;

        return $this;
    }

    /**
     * Get ouvertureSansCle
     *
     * @return text
     */
    public function getOuvertureSansCle()
    {
        return $this->ouvertureSansCle;
    }

    /**
     * Set presenceMarqueReparation
     *
     * @param text $presenceMarqueReparation
     *
     * @return Expertise
     */
    public function setPresenceMarqueReparation($presenceMarqueReparation)
    {
        $this->presenceMarqueReparation = $presenceMarqueReparation;

        return $this;
    }

    /**
     * Get presenceMarqueReparation
     *
     * @return text
     */
    public function getPresenceMarqueReparation()
    {
        return $this->presenceMarqueReparation;
    }

    /**
     * Set etatPareBriseAvant
     *
     * @param text $etatPareBriseAvant
     *
     * @return Expertise
     */
    public function setEtatPareBriseAvant($etatPareBriseAvant)
    {
        $this->etatPareBriseAvant = $etatPareBriseAvant;

        return $this;
    }

    /**
     * Get etatPareBriseAvant
     *
     * @return text
     */
    public function getEtatPareBriseAvant()
    {
        return $this->etatPareBriseAvant;
    }

    /**
     * Set etatEssuieGlaces
     *
     * @param text $etatEssuieGlaces
     *
     * @return Expertise
     */
    public function setEtatEssuieGlaces($etatEssuieGlaces)
    {
        $this->etatEssuieGlaces = $etatEssuieGlaces;

        return $this;
    }

    /**
     * Get etatEssuieGlaces
     *
     * @return text
     */
    public function getEtatEssuieGlaces()
    {
        return $this->etatEssuieGlaces;
    }

    /**
     * Set etatRetroviseurGauche
     *
     * @param text $etatRetroviseurGauche
     *
     * @return Expertise
     */
    public function setEtatRetroviseurGauche($etatRetroviseurGauche)
    {
        $this->etatRetroviseurGauche = $etatRetroviseurGauche;

        return $this;
    }

    /**
     * Get etatRetroviseurGauche
     *
     * @return text
     */
    public function getEtatRetroviseurGauche()
    {
        return $this->etatRetroviseurGauche;
    }

    /**
     * Set etatVitresLaterales
     *
     * @param text $etatVitresLaterales
     *
     * @return Expertise
     */
    public function setEtatVitresLaterales($etatVitresLaterales)
    {
        $this->etatVitresLaterales = $etatVitresLaterales;

        return $this;
    }

    /**
     * Get etatVitresLaterales
     *
     * @return text
     */
    public function getEtatVitresLaterales()
    {
        return $this->etatVitresLaterales;
    }

    /**
     * Set etatPareBriseArriere
     *
     * @param text $etatPareBriseArriere
     *
     * @return Expertise
     */
    public function setEtatPareBriseArriere($etatPareBriseArriere)
    {
        $this->etatPareBriseArriere = $etatPareBriseArriere;

        return $this;
    }

    /**
     * Get etatPareBriseArriere
     *
     * @return text
     */
    public function getEtatPareBriseArriere()
    {
        return $this->etatPareBriseArriere;
    }

    /**
     * Set feuxStop
     *
     * @param text $feuxStop
     *
     * @return Expertise
     */
    public function setFeuxStop($feuxStop)
    {
        $this->feuxStop = $feuxStop;

        return $this;
    }

    /**
     * Get feuxStop
     *
     * @return text
     */
    public function getFeuxStop()
    {
        return $this->feuxStop;
    }

    /**
     * Set feuRecul
     *
     * @param text $feuRecul
     *
     * @return Expertise
     */
    public function setFeuRecul($feuRecul)
    {
        $this->feuRecul = $feuRecul;

        return $this;
    }

    /**
     * Get feuRecul
     *
     * @return text
     */
    public function getFeuRecul()
    {
        return $this->feuRecul;
    }

    /**
     * Set repetiteurs
     *
     * @param text $repetiteurs
     *
     * @return Expertise
     */
    public function setRepetiteurs($repetiteurs)
    {
        $this->repetiteurs = $repetiteurs;

        return $this;
    }

    /**
     * Get repetiteurs
     *
     * @return text
     */
    public function getRepetiteurs()
    {
        return $this->repetiteurs;
    }

    /**
     * Set alignementElements
     *
     * @param text $alignementElements
     *
     * @return Expertise
     */
    public function setAlignementElements($alignementElements)
    {
        $this->alignementElements = $alignementElements;

        return $this;
    }

    /**
     * Get alignementElements
     *
     * @return text
     */
    public function getAlignementElements()
    {
        return $this->alignementElements;
    }

    /**
     * Set presenceRouille
     *
     * @param text $presenceRouille
     *
     * @return Expertise
     */
    public function setPresenceRouille($presenceRouille)
    {
        $this->presenceRouille = $presenceRouille;

        return $this;
    }

    /**
     * Get presenceRouille
     *
     * @return text
     */
    public function getPresenceRouille()
    {
        return $this->presenceRouille;
    }

    /**
     * Set differencesTeintesCarrosserie
     *
     * @param text $differencesTeintesCarrosserie
     *
     * @return Expertise
     */
    public function setDifferencesTeintesCarrosserie($differencesTeintesCarrosserie)
    {
        $this->differencesTeintesCarrosserie = $differencesTeintesCarrosserie;

        return $this;
    }

    /**
     * Get differencesTeintesCarrosserie
     *
     * @return text
     */
    public function getDifferencesTeintesCarrosserie()
    {
        return $this->differencesTeintesCarrosserie;
    }

    /**
     * Set impactsChampVision
     *
     * @param text $impactsChampVision
     *
     * @return Expertise
     */
    public function setImpactsChampVision($impactsChampVision)
    {
        $this->impactsChampVision = $impactsChampVision;

        return $this;
    }

    /**
     * Get impactsChampVision
     *
     * @return text
     */
    public function getImpactsChampVision()
    {
        return $this->impactsChampVision;
    }

    /**
     * Set feuxAvants
     *
     * @param text $feuxAvants
     *
     * @return Expertise
     */
    public function setFeuxAvants($feuxAvants)
    {
        $this->feuxAvants = $feuxAvants;

        return $this;
    }

    /**
     * Get feuxAvants
     *
     * @return text
     */
    public function getFeuxAvants()
    {
        return $this->feuxAvants;
    }

    /**
     * Set etatRetroviseurDroite
     *
     * @param text $etatRetroviseurDroite
     *
     * @return Expertise
     */
    public function setEtatRetroviseurDroite($etatRetroviseurDroite)
    {
        $this->etatRetroviseurDroite = $etatRetroviseurDroite;

        return $this;
    }

    /**
     * Get etatRetroviseurDroite
     *
     * @return text
     */
    public function getEtatRetroviseurDroite()
    {
        return $this->etatRetroviseurDroite;
    }

    /**
     * Set vitresSurteintees
     *
     * @param text $vitresSurteintees
     *
     * @return Expertise
     */
    public function setVitresSurteintees($vitresSurteintees)
    {
        $this->vitresSurteintees = $vitresSurteintees;

        return $this;
    }

    /**
     * Get vitresSurteintees
     *
     * @return text
     */
    public function getVitresSurteintees()
    {
        return $this->vitresSurteintees;
    }

    /**
     * Set feuxArrieres
     *
     * @param text $feuxArrieres
     *
     * @return Expertise
     */
    public function setFeuxArrieres($feuxArrieres)
    {
        $this->feuxArrieres = $feuxArrieres;

        return $this;
    }

    /**
     * Get feuxArrieres
     *
     * @return text
     */
    public function getFeuxArrieres()
    {
        return $this->feuxArrieres;
    }

    /**
     * Set feuxAntibrouillards
     *
     * @param text $feuxAntibrouillards
     *
     * @return Expertise
     */
    public function setFeuxAntibrouillards($feuxAntibrouillards)
    {
        $this->feuxAntibrouillards = $feuxAntibrouillards;

        return $this;
    }

    /**
     * Get feuxAntibrouillards
     *
     * @return text
     */
    public function getFeuxAntibrouillards()
    {
        return $this->feuxAntibrouillards;
    }

    /**
     * Set feuxDetresse
     *
     * @param text $feuxDetresse
     *
     * @return Expertise
     */
    public function setFeuxDetresse($feuxDetresse)
    {
        $this->feuxDetresse = $feuxDetresse;

        return $this;
    }

    /**
     * Get feuxDetresse
     *
     * @return text
     */
    public function getFeuxDetresse()
    {
        return $this->feuxDetresse;
    }

    /**
     * Set etatJoints
     *
     * @param text $etatJoints
     *
     * @return Expertise
     */
    public function setEtatJoints($etatJoints)
    {
        $this->etatJoints = $etatJoints;

        return $this;
    }

    /**
     * Get etatJoints
     *
     * @return text
     */
    public function getEtatJoints()
    {
        return $this->etatJoints;
    }

    /**
     * Set etatJantes
     *
     * @param text $etatJantes
     *
     * @return Expertise
     */
    public function setEtatJantes($etatJantes)
    {
        $this->etatJantes = $etatJantes;

        return $this;
    }

    /**
     * Get etatJantes
     *
     * @return text
     */
    public function getEtatJantes()
    {
        return $this->etatJantes;
    }

    /**
     * Set commentaireExterieur
     *
     * @param text $commentaireExterieur
     *
     * @return Expertise
     */
    public function setCommentaireExterieur($commentaireExterieur)
    {
        $this->commentaireExterieur = $commentaireExterieur;

        return $this;
    }

    /**
     * Get commentaireExterieur
     *
     * @return text
     */
    public function getCommentaireExterieur()
    {
        return $this->commentaireExterieur;
    }

    /**
     * Set vehiculeVu
     *
     * @param text $vehiculeVu
     *
     * @return Expertise
     */
    public function setVehiculeVu($vehiculeVu)
    {
        $this->vehiculeVu = $vehiculeVu;

        return $this;
    }

    /**
     * Get vehiculeVu
     *
     * @return text
     */
    public function getVehiculeVu()
    {
        return $this->vehiculeVu;
    }

    /**
     * Set corrosionPerforante
     *
     * @param text $corrosionPerforante
     *
     * @return Expertise
     */
    public function setCorrosionPerforante($corrosionPerforante)
    {
        $this->corrosionPerforante = $corrosionPerforante;

        return $this;
    }

    /**
     * Get corrosionPerforante
     *
     * @return text
     */
    public function getCorrosionPerforante()
    {
        return $this->corrosionPerforante;
    }

    /**
     * Set presenceFuiteHuile
     *
     * @param text $presenceFuiteHuile
     *
     * @return Expertise
     */
    public function setPresenceFuiteHuile($presenceFuiteHuile)
    {
        $this->presenceFuiteHuile = $presenceFuiteHuile;

        return $this;
    }

    /**
     * Get presenceFuiteHuile
     *
     * @return text
     */
    public function getPresenceFuiteHuile()
    {
        return $this->presenceFuiteHuile;
    }

    /**
     * Set echappement
     *
     * @param text $echappement
     *
     * @return Expertise
     */
    public function setEchappement($echappement)
    {
        $this->echappement = $echappement;

        return $this;
    }

    /**
     * Get echappement
     *
     * @return text
     */
    public function getEchappement()
    {
        return $this->echappement;
    }

    /**
     * Set presenceCorrosion
     *
     * @param text $presenceCorrosion
     *
     * @return Expertise
     */
    public function setPresenceCorrosion($presenceCorrosion)
    {
        $this->presenceCorrosion = $presenceCorrosion;

        return $this;
    }

    /**
     * Get presenceCorrosion
     *
     * @return text
     */
    public function getPresenceCorrosion()
    {
        return $this->presenceCorrosion;
    }

    /**
     * Set corrosionLongerons
     *
     * @param text $corrosionLongerons
     *
     * @return Expertise
     */
    public function setCorrosionLongerons($corrosionLongerons)
    {
        $this->corrosionLongerons = $corrosionLongerons;

        return $this;
    }

    /**
     * Get corrosionLongerons
     *
     * @return text
     */
    public function getCorrosionLongerons()
    {
        return $this->corrosionLongerons;
    }

    /**
     * Set origineFuite
     *
     * @param text $origineFuite
     *
     * @return Expertise
     */
    public function setOrigineFuite($origineFuite)
    {
        $this->origineFuite = $origineFuite;

        return $this;
    }

    /**
     * Get origineFuite
     *
     * @return text
     */
    public function getOrigineFuite()
    {
        return $this->origineFuite;
    }

    /**
     * Set plaquettesAvantsUsage
     *
     * @param text $plaquettesAvantsUsage
     *
     * @return Expertise
     */
    public function setPlaquettesAvantsUsage($plaquettesAvantsUsage)
    {
        $this->plaquettesAvantsUsage = $plaquettesAvantsUsage;

        return $this;
    }

    /**
     * Get plaquettesAvantsUsage
     *
     * @return text
     */
    public function getPlaquettesAvantsUsage()
    {
        return $this->plaquettesAvantsUsage;
    }

    /**
     * Set marquePneuAvant
     *
     * @param text $marquePneuAvant
     *
     * @return Expertise
     */
    public function setMarquePneuAvant($marquePneuAvant)
    {
        $this->marquePneuAvant = $marquePneuAvant;

        return $this;
    }

    /**
     * Get marquePneuAvant
     *
     * @return text
     */
    public function getMarquePneuAvant()
    {
        return $this->marquePneuAvant;
    }

    /**
     * Set codeDOTPneuAvantGauche
     *
     * @param text $codeDOTPneuAvantGauche
     *
     * @return Expertise
     */
    public function setCodeDOTPneuAvantGauche($codeDOTPneuAvantGauche)
    {
        $this->codeDOTPneuAvantGauche = $codeDOTPneuAvantGauche;

        return $this;
    }

    /**
     * Get codeDOTPneuAvantGauche
     *
     * @return text
     */
    public function getCodeDOTPneuAvantGauche()
    {
        return $this->codeDOTPneuAvantGauche;
    }

    /**
     * Set codeDOTPneuAvantDroite
     *
     * @param text $codeDOTPneuAvantDroite
     *
     * @return Expertise
     */
    public function setCodeDOTPneuAvantDroite($codeDOTPneuAvantDroite)
    {
        $this->codeDOTPneuAvantDroite = $codeDOTPneuAvantDroite;

        return $this;
    }

    /**
     * Get codeDOTPneuAvantDroite
     *
     * @return text
     */
    public function getCodeDOTPneuAvantDroite()
    {
        return $this->codeDOTPneuAvantDroite;
    }

    /**
     * Set usagePneumatiquesAvants
     *
     * @param text $usagePneumatiquesAvants
     *
     * @return Expertise
     */
    public function setUsagePneumatiquesAvants($usagePneumatiquesAvants)
    {
        $this->usagePneumatiquesAvants = $usagePneumatiquesAvants;

        return $this;
    }

    /**
     * Get usagePneumatiquesAvants
     *
     * @return text
     */
    public function getUsagePneumatiquesAvants()
    {
        return $this->usagePneumatiquesAvants;
    }

    /**
     * Set usageDisquesAvants
     *
     * @param text $usageDisquesAvants
     *
     * @return Expertise
     */
    public function setUsageDisquesAvants($usageDisquesAvants)
    {
        $this->usageDisquesAvants = $usageDisquesAvants;

        return $this;
    }

    /**
     * Get usageDisquesAvants
     *
     * @return text
     */
    public function getUsageDisquesAvants()
    {
        return $this->usageDisquesAvants;
    }

    /**
     * Set dimensionsPneumatiqueAvant
     *
     * @param text $dimensionsPneumatiqueAvant
     *
     * @return Expertise
     */
    public function setDimensionsPneumatiqueAvant($dimensionsPneumatiqueAvant)
    {
        $this->dimensionsPneumatiqueAvant = $dimensionsPneumatiqueAvant;

        return $this;
    }

    /**
     * Get dimensionsPneumatiqueAvant
     *
     * @return text
     */
    public function getDimensionsPneumatiqueAvant()
    {
        return $this->dimensionsPneumatiqueAvant;
    }

    /**
     * Set pneumatiqueConformeMonteOrigine
     *
     * @param text $pneumatiqueConformeMonteOrigine
     *
     * @return Expertise
     */
    public function setPneumatiqueConformeMonteOrigine($pneumatiqueConformeMonteOrigine)
    {
        $this->pneumatiqueConformeMonteOrigine = $pneumatiqueConformeMonteOrigine;

        return $this;
    }

    /**
     * Get pneumatiqueConformeMonteOrigine
     *
     * @return text
     */
    public function getPneumatiqueConformeMonteOrigine()
    {
        return $this->pneumatiqueConformeMonteOrigine;
    }

    /**
     * Set plaquettesArriereUsage
     *
     * @param text $plaquettesArriereUsage
     *
     * @return Expertise
     */
    public function setPlaquettesArriereUsage($plaquettesArriereUsage)
    {
        $this->plaquettesArriereUsage = $plaquettesArriereUsage;

        return $this;
    }

    /**
     * Get plaquettesArriereUsage
     *
     * @return text
     */
    public function getPlaquettesArriereUsage()
    {
        return $this->plaquettesArriereUsage;
    }

    /**
     * Set marquePneuArriere
     *
     * @param text $marquePneuArriere
     *
     * @return Expertise
     */
    public function setMarquePneuArriere($marquePneuArriere)
    {
        $this->marquePneuArriere = $marquePneuArriere;

        return $this;
    }

    /**
     * Get marquePneuArriere
     *
     * @return text
     */
    public function getMarquePneuArriere()
    {
        return $this->marquePneuArriere;
    }

    /**
     * Set codeDOTPneuArriereGauche
     *
     * @param text $codeDOTPneuArriereGauche
     *
     * @return Expertise
     */
    public function setCodeDOTPneuArriereGauche($codeDOTPneuArriereGauche)
    {
        $this->codeDOTPneuArriereGauche = $codeDOTPneuArriereGauche;

        return $this;
    }

    /**
     * Get codeDOTPneuArriereGauche
     *
     * @return text
     */
    public function getCodeDOTPneuArriereGauche()
    {
        return $this->codeDOTPneuArriereGauche;
    }

    /**
     * Set codeDOTPneuArriereDroite
     *
     * @param text $codeDOTPneuArriereDroite
     *
     * @return Expertise
     */
    public function setCodeDOTPneuArriereDroite($codeDOTPneuArriereDroite)
    {
        $this->codeDOTPneuArriereDroite = $codeDOTPneuArriereDroite;

        return $this;
    }

    /**
     * Get codeDOTPneuArriereDroite
     *
     * @return text
     */
    public function getCodeDOTPneuArriereDroite()
    {
        return $this->codeDOTPneuArriereDroite;
    }

    /**
     * Set usagePneumatiquesArrieres
     *
     * @param text $usagePneumatiquesArrieres
     *
     * @return Expertise
     */
    public function setUsagePneumatiquesArrieres($usagePneumatiquesArrieres)
    {
        $this->usagePneumatiquesArrieres = $usagePneumatiquesArrieres;

        return $this;
    }

    /**
     * Get usagePneumatiquesArrieres
     *
     * @return text
     */
    public function getUsagePneumatiquesArrieres()
    {
        return $this->usagePneumatiquesArrieres;
    }

    /**
     * Set usageDisquesArriere
     *
     * @param text $usageDisquesArriere
     *
     * @return Expertise
     */
    public function setUsageDisquesArriere($usageDisquesArriere)
    {
        $this->usageDisquesArriere = $usageDisquesArriere;

        return $this;
    }

    /**
     * Get usageDisquesArriere
     *
     * @return text
     */
    public function getUsageDisquesArriere()
    {
        return $this->usageDisquesArriere;
    }

    /**
     * Set dimensionsPneumatiqueArriere
     *
     * @param text $dimensionsPneumatiqueArriere
     *
     * @return Expertise
     */
    public function setDimensionsPneumatiqueArriere($dimensionsPneumatiqueArriere)
    {
        $this->dimensionsPneumatiqueArriere = $dimensionsPneumatiqueArriere;

        return $this;
    }

    /**
     * Get dimensionsPneumatiqueArriere
     *
     * @return text
     */
    public function getDimensionsPneumatiqueArriere()
    {
        return $this->dimensionsPneumatiqueArriere;
    }

    /**
     * Set pneumatiqueConformeMonteOrigineArriere
     *
     * @param text $pneumatiqueConformeMonteOrigineArriere
     *
     * @return Expertise
     */
    public function setPneumatiqueConformeMonteOrigineArriere($pneumatiqueConformeMonteOrigineArriere)
    {
        $this->pneumatiqueConformeMonteOrigineArriere = $pneumatiqueConformeMonteOrigineArriere;

        return $this;
    }

    /**
     * Get pneumatiqueConformeMonteOrigineArriere
     *
     * @return text
     */
    public function getPneumatiqueConformeMonteOrigineArriere()
    {
        return $this->pneumatiqueConformeMonteOrigineArriere;
    }

    /**
     * Set niveauHuile
     *
     * @param text $niveauHuile
     *
     * @return Expertise
     */
    public function setNiveauHuile($niveauHuile)
    {
        $this->niveauHuile = $niveauHuile;

        return $this;
    }

    /**
     * Get niveauHuile
     *
     * @return text
     */
    public function getNiveauHuile()
    {
        return $this->niveauHuile;
    }

    /**
     * Set qualiteHuile
     *
     * @param text $qualiteHuile
     *
     * @return Expertise
     */
    public function setQualiteHuile($qualiteHuile)
    {
        $this->qualiteHuile = $qualiteHuile;

        return $this;
    }

    /**
     * Get qualiteHuile
     *
     * @return text
     */
    public function getQualiteHuile()
    {
        return $this->qualiteHuile;
    }

    /**
     * Set souffleBouchonHuile
     *
     * @param text $souffleBouchonHuile
     *
     * @return Expertise
     */
    public function setSouffleBouchonHuile($souffleBouchonHuile)
    {
        $this->souffleBouchonHuile = $souffleBouchonHuile;

        return $this;
    }

    /**
     * Get souffleBouchonHuile
     *
     * @return text
     */
    public function getSouffleBouchonHuile()
    {
        return $this->souffleBouchonHuile;
    }

    /**
     * Set niveauLiquideRefroidissement
     *
     * @param text $niveauLiquideRefroidissement
     *
     * @return Expertise
     */
    public function setNiveauLiquideRefroidissement($niveauLiquideRefroidissement)
    {
        $this->niveauLiquideRefroidissement = $niveauLiquideRefroidissement;

        return $this;
    }

    /**
     * Get niveauLiquideRefroidissement
     *
     * @return text
     */
    public function getNiveauLiquideRefroidissement()
    {
        return $this->niveauLiquideRefroidissement;
    }

    /**
     * Set qualiteLiquideRefroidissement
     *
     * @param text $qualiteLiquideRefroidissement
     *
     * @return Expertise
     */
    public function setQualiteLiquideRefroidissement($qualiteLiquideRefroidissement)
    {
        $this->qualiteLiquideRefroidissement = $qualiteLiquideRefroidissement;

        return $this;
    }

    /**
     * Get qualiteLiquideRefroidissement
     *
     * @return text
     */
    public function getQualiteLiquideRefroidissement()
    {
        return $this->qualiteLiquideRefroidissement;
    }

    /**
     * Set typeDistribution
     *
     * @param text $typeDistribution
     *
     * @return Expertise
     */
    public function setTypeDistribution($typeDistribution)
    {
        $this->typeDistribution = $typeDistribution;

        return $this;
    }

    /**
     * Get typeDistribution
     *
     * @return text
     */
    public function getTypeDistribution()
    {
        return $this->typeDistribution;
    }

    /**
     * Set distribution
     *
     * @param text $distribution
     *
     * @return Expertise
     */
    public function setDistribution($distribution)
    {
        $this->Distribution = $distribution;

        return $this;
    }

    /**
     * Get distribution
     *
     * @return text
     */
    public function getDistribution()
    {
        return $this->Distribution;
    }

    /**
     * Set courroie
     *
     * @param text $courroie
     *
     * @return Expertise
     */
    public function setCourroie($courroie)
    {
        $this->courroie = $courroie;

        return $this;
    }

    /**
     * Get courroie
     *
     * @return text
     */
    public function getCourroie()
    {
        return $this->courroie;
    }

    /**
     * Set commentaireConsommablesMoteur
     *
     * @param text $commentaireConsommablesMoteur
     *
     * @return Expertise
     */
    public function setCommentaireConsommablesMoteur($commentaireConsommablesMoteur)
    {
        $this->commentaireConsommablesMoteur = $commentaireConsommablesMoteur;

        return $this;
    }

    /**
     * Get commentaireConsommablesMoteur
     *
     * @return text
     */
    public function getCommentaireConsommablesMoteur()
    {
        return $this->commentaireConsommablesMoteur;
    }

    /**
     * Set demarrageVehiculeFroid
     *
     * @param text $demarrageVehiculeFroid
     *
     * @return Expertise
     */
    public function setDemarrageVehiculeFroid($demarrageVehiculeFroid)
    {
        $this->demarrageVehiculeFroid = $demarrageVehiculeFroid;

        return $this;
    }

    /**
     * Get demarrageVehiculeFroid
     *
     * @return text
     */
    public function getDemarrageVehiculeFroid()
    {
        return $this->demarrageVehiculeFroid;
    }

    /**
     * Set blocCompteur
     *
     * @param text $blocCompteur
     *
     * @return Expertise
     */
    public function setBlocCompteur($blocCompteur)
    {
        $this->blocCompteur = $blocCompteur;

        return $this;
    }

    /**
     * Get blocCompteur
     *
     * @return text
     */
    public function getBlocCompteur()
    {
        return $this->blocCompteur;
    }

    /**
     * Set presenceFumeeEchappement
     *
     * @param text $presenceFumeeEchappement
     *
     * @return Expertise
     */
    public function setPresenceFumeeEchappement($presenceFumeeEchappement)
    {
        $this->presenceFumeeEchappement = $presenceFumeeEchappement;

        return $this;
    }

    /**
     * Get presenceFumeeEchappement
     *
     * @return text
     */
    public function getPresenceFumeeEchappement()
    {
        return $this->presenceFumeeEchappement;
    }

    /**
     * Set amortisseurs
     *
     * @param text $amortisseurs
     *
     * @return Expertise
     */
    public function setAmortisseurs($amortisseurs)
    {
        $this->amortisseurs = $amortisseurs;

        return $this;
    }

    /**
     * Get amortisseurs
     *
     * @return text
     */
    public function getAmortisseurs()
    {
        return $this->amortisseurs;
    }

    /**
     * Set sonoriteMoteur
     *
     * @param text $sonoriteMoteur
     *
     * @return Expertise
     */
    public function setSonoriteMoteur($sonoriteMoteur)
    {
        $this->sonoriteMoteur = $sonoriteMoteur;

        return $this;
    }

    /**
     * Get sonoriteMoteur
     *
     * @return text
     */
    public function getSonoriteMoteur()
    {
        return $this->sonoriteMoteur;
    }

    /**
     * Set voyantPrechauffage
     *
     * @param text $voyantPrechauffage
     *
     * @return Expertise
     */
    public function setVoyantPrechauffage($voyantPrechauffage)
    {
        $this->voyantPrechauffage = $voyantPrechauffage;

        return $this;
    }

    /**
     * Get voyantPrechauffage
     *
     * @return text
     */
    public function getVoyantPrechauffage()
    {
        return $this->voyantPrechauffage;
    }

    /**
     * Set commentaireTestStatic
     *
     * @param text $commentaireTestStatic
     *
     * @return Expertise
     */
    public function setCommentaireTestStatic($commentaireTestStatic)
    {
        $this->commentaireTestStatic = $commentaireTestStatic;

        return $this;
    }

    /**
     * Get commentaireTestStatic
     *
     * @return text
     */
    public function getCommentaireTestStatic()
    {
        return $this->commentaireTestStatic;
    }

    /**
     * Set testRoutierEffectue
     *
     * @param text $testRoutierEffectue
     *
     * @return Expertise
     */
    public function setTestRoutierEffectue($testRoutierEffectue)
    {
        $this->testRoutierEffectue = $testRoutierEffectue;

        return $this;
    }

    /**
     * Get testRoutierEffectue
     *
     * @return text
     */
    public function getTestRoutierEffectue()
    {
        return $this->testRoutierEffectue;
    }

    /**
     * Set aucunTestExplication
     *
     * @param text $aucunTestExplication
     *
     * @return Expertise
     */
    public function setAucunTestExplication($aucunTestExplication)
    {
        $this->aucunTestExplication = $aucunTestExplication;

        return $this;
    }

    /**
     * Get aucunTestExplication
     *
     * @return text
     */
    public function getAucunTestExplication()
    {
        return $this->aucunTestExplication;
    }

    /**
     * Set conditionMeteo
     *
     * @param text $conditionMeteo
     *
     * @return Expertise
     */
    public function setConditionMeteo($conditionMeteo)
    {
        $this->conditionMeteo = $conditionMeteo;

        return $this;
    }

    /**
     * Get conditionMeteo
     *
     * @return text
     */
    public function getConditionMeteo()
    {
        return $this->conditionMeteo;
    }

    /**
     * Set conditionEssaie
     *
     * @param text $conditionEssaie
     *
     * @return Expertise
     */
    public function setConditionEssaie($conditionEssaie)
    {
        $this->conditionEssaie = $conditionEssaie;

        return $this;
    }

    /**
     * Get conditionEssaie
     *
     * @return text
     */
    public function getConditionEssaie()
    {
        return $this->conditionEssaie;
    }

    /**
     * Set coursePedaleEmbrayage
     *
     * @param text $coursePedaleEmbrayage
     *
     * @return Expertise
     */
    public function setCoursePedaleEmbrayage($coursePedaleEmbrayage)
    {
        $this->coursePedaleEmbrayage = $coursePedaleEmbrayage;

        return $this;
    }

    /**
     * Get coursePedaleEmbrayage
     *
     * @return text
     */
    public function getCoursePedaleEmbrayage()
    {
        return $this->coursePedaleEmbrayage;
    }

    /**
     * Set embrayagePatine
     *
     * @param text $embrayagePatine
     *
     * @return Expertise
     */
    public function setEmbrayagePatine($embrayagePatine)
    {
        $this->embrayagePatine = $embrayagePatine;

        return $this;
    }

    /**
     * Get embrayagePatine
     *
     * @return text
     */
    public function getEmbrayagePatine()
    {
        return $this->embrayagePatine;
    }

    /**
     * Set buteeEmbrayageBruyante
     *
     * @param text $buteeEmbrayageBruyante
     *
     * @return Expertise
     */
    public function setButeeEmbrayageBruyante($buteeEmbrayageBruyante)
    {
        $this->buteeEmbrayageBruyante = $buteeEmbrayageBruyante;

        return $this;
    }

    /**
     * Get buteeEmbrayageBruyante
     *
     * @return text
     */
    public function getButeeEmbrayageBruyante()
    {
        return $this->buteeEmbrayageBruyante;
    }

    /**
     * Set jeuLevierVitesse
     *
     * @param text $jeuLevierVitesse
     *
     * @return Expertise
     */
    public function setJeuLevierVitesse($jeuLevierVitesse)
    {
        $this->jeuLevierVitesse = $jeuLevierVitesse;

        return $this;
    }

    /**
     * Get jeuLevierVitesse
     *
     * @return text
     */
    public function getJeuLevierVitesse()
    {
        return $this->jeuLevierVitesse;
    }

    /**
     * Set passageFacileVitesses
     *
     * @param text $passageFacileVitesses
     *
     * @return Expertise
     */
    public function setPassageFacileVitesses($passageFacileVitesses)
    {
        $this->passageFacileVitesses = $passageFacileVitesses;

        return $this;
    }

    /**
     * Get passageFacileVitesses
     *
     * @return text
     */
    public function getPassageFacileVitesses()
    {
        return $this->passageFacileVitesses;
    }

    /**
     * Set accoupsBVA
     *
     * @param text $accoupsBVA
     *
     * @return Expertise
     */
    public function setAccoupsBVA($accoupsBVA)
    {
        $this->accoupsBVA = $accoupsBVA;

        return $this;
    }

    /**
     * Get accoupsBVA
     *
     * @return text
     */
    public function getAccoupsBVA()
    {
        return $this->accoupsBVA;
    }

    /**
     * Set accelerationFranche
     *
     * @param text $accelerationFranche
     *
     * @return Expertise
     */
    public function setAccelerationFranche($accelerationFranche)
    {
        $this->accelerationFranche = $accelerationFranche;

        return $this;
    }

    /**
     * Get accelerationFranche
     *
     * @return text
     */
    public function getAccelerationFranche()
    {
        return $this->accelerationFranche;
    }

    /**
     * Set vitesseAtteinte
     *
     * @param text $vitesseAtteinte
     *
     * @return Expertise
     */
    public function setVitesseAtteinte($vitesseAtteinte)
    {
        $this->vitesseAtteinte = $vitesseAtteinte;

        return $this;
    }

    /**
     * Get vitesseAtteinte
     *
     * @return text
     */
    public function getVitesseAtteinte()
    {
        return $this->vitesseAtteinte;
    }

    /**
     * Set vibrationsMecaniques
     *
     * @param text $vibrationsMecaniques
     *
     * @return Expertise
     */
    public function setVibrationsMecaniques($vibrationsMecaniques)
    {
        $this->vibrationsMecaniques = $vibrationsMecaniques;

        return $this;
    }

    /**
     * Get vibrationsMecaniques
     *
     * @return text
     */
    public function getVibrationsMecaniques()
    {
        return $this->vibrationsMecaniques;
    }

    /**
     * Set vitesseVibration
     *
     * @param text $vitesseVibration
     *
     * @return Expertise
     */
    public function setVitesseVibration($vitesseVibration)
    {
        $this->vitesseVibration = $vitesseVibration;

        return $this;
    }

    /**
     * Get vitesseVibration
     *
     * @return text
     */
    public function getVitesseVibration()
    {
        return $this->vitesseVibration;
    }

    /**
     * Set tenueCap
     *
     * @param text $tenueCap
     *
     * @return Expertise
     */
    public function setTenueCap($tenueCap)
    {
        $this->tenueCap = $tenueCap;

        return $this;
    }

    /**
     * Get tenueCap
     *
     * @return text
     */
    public function getTenueCap()
    {
        return $this->tenueCap;
    }

    /**
     * Set freinageLigneDroite
     *
     * @param text $freinageLigneDroite
     *
     * @return Expertise
     */
    public function setFreinageLigneDroite($freinageLigneDroite)
    {
        $this->freinageLigneDroite = $freinageLigneDroite;

        return $this;
    }

    /**
     * Get freinageLigneDroite
     *
     * @return text
     */
    public function getFreinageLigneDroite()
    {
        return $this->freinageLigneDroite;
    }

    /**
     * Set presenceBruitsEtrangers
     *
     * @param text $presenceBruitsEtrangers
     *
     * @return Expertise
     */
    public function setPresenceBruitsEtrangers($presenceBruitsEtrangers)
    {
        $this->presenceBruitsEtrangers = $presenceBruitsEtrangers;

        return $this;
    }

    /**
     * Get presenceBruitsEtrangers
     *
     * @return text
     */
    public function getPresenceBruitsEtrangers()
    {
        return $this->presenceBruitsEtrangers;
    }

    /**
     * Set regulateurLimiteurVitesse
     *
     * @param text $regulateurLimiteurVitesse
     *
     * @return Expertise
     */
    public function setRegulateurLimiteurVitesse($regulateurLimiteurVitesse)
    {
        $this->regulateurLimiteurVitesse = $regulateurLimiteurVitesse;

        return $this;
    }

    /**
     * Get regulateurLimiteurVitesse
     *
     * @return text
     */
    public function getRegulateurLimiteurVitesse()
    {
        return $this->regulateurLimiteurVitesse;
    }

    /**
     * Set odeursExterieur
     *
     * @param text $odeursExterieur
     *
     * @return Expertise
     */
    public function setOdeursExterieur($odeursExterieur)
    {
        $this->odeursExterieur = $odeursExterieur;

        return $this;
    }

    /**
     * Get odeursExterieur
     *
     * @return text
     */
    public function getOdeursExterieur()
    {
        return $this->odeursExterieur;
    }

    /**
     * Set demarrageVehiculeChaud
     *
     * @param text $demarrageVehiculeChaud
     *
     * @return Expertise
     */
    public function setDemarrageVehiculeChaud($demarrageVehiculeChaud)
    {
        $this->demarrageVehiculeChaud = $demarrageVehiculeChaud;

        return $this;
    }

    /**
     * Get demarrageVehiculeChaud
     *
     * @return text
     */
    public function getDemarrageVehiculeChaud()
    {
        return $this->demarrageVehiculeChaud;
    }

    /**
     * Set ralenti
     *
     * @param text $ralenti
     *
     * @return Expertise
     */
    public function setRalenti($ralenti)
    {
        $this->ralenti = $ralenti;

        return $this;
    }

    /**
     * Get ralenti
     *
     * @return text
     */
    public function getRalenti()
    {
        return $this->ralenti;
    }

    /**
     * Set voyantsAllumes
     *
     * @param text $voyantsAllumes
     *
     * @return Expertise
     */
    public function setVoyantsAllumes($voyantsAllumes)
    {
        $this->voyantsAllumes = $voyantsAllumes;

        return $this;
    }

    /**
     * Get voyantsAllumes
     *
     * @return text
     */
    public function getVoyantsAllumes()
    {
        return $this->voyantsAllumes;
    }

    /**
     * Set nomVoyantsAllumes
     *
     * @param text $nomVoyantsAllumes
     *
     * @return Expertise
     */
    public function setNomVoyantsAllumes($nomVoyantsAllumes)
    {
        $this->nomVoyantsAllumes = $nomVoyantsAllumes;

        return $this;
    }

    /**
     * Get nomVoyantsAllumes
     *
     * @return text
     */
    public function getNomVoyantsAllumes()
    {
        return $this->nomVoyantsAllumes;
    }

    /**
     * Set commentaireTestRoutier
     *
     * @param text $commentaireTestRoutier
     *
     * @return Expertise
     */
    public function setCommentaireTestRoutier($commentaireTestRoutier)
    {
        $this->commentaireTestRoutier = $commentaireTestRoutier;

        return $this;
    }

    /**
     * Get commentaireTestRoutier
     *
     * @return text
     */
    public function getCommentaireTestRoutier()
    {
        return $this->commentaireTestRoutier;
    }

    /**
     * Set notationVendeur
     *
     * @param text $notationVendeur
     *
     * @return Expertise
     */
    public function setNotationVendeur($notationVendeur)
    {
        $this->notationVendeur = $notationVendeur;

        return $this;
    }

    /**
     * Get notationVendeur
     *
     * @return text
     */
    public function getNotationVendeur()
    {
        return $this->notationVendeur;
    }

    /**
     * Set achatSecurise
     *
     * @param text $achatSecurise
     *
     * @return Expertise
     */
    public function setAchatSecurise($achatSecurise)
    {
        $this->achatSecurise = $achatSecurise;

        return $this;
    }

    /**
     * Get achatSecurise
     *
     * @return text
     */
    public function getAchatSecurise()
    {
        return $this->achatSecurise;
    }

    /**
     * Set kilometrageCoherent
     *
     * @param text $kilometrageCoherent
     *
     * @return Expertise
     */
    public function setKilometrageCoherent($kilometrageCoherent)
    {
        $this->kilometrageCoherent = $kilometrageCoherent;

        return $this;
    }

    /**
     * Get kilometrageCoherent
     *
     * @return text
     */
    public function getKilometrageCoherent()
    {
        return $this->kilometrageCoherent;
    }

    /**
     * Set commentaireConclusion
     *
     * @param text $commentaireConclusion
     *
     * @return Expertise
     */
    public function setCommentaireConclusion($commentaireConclusion)
    {
        $this->commentaireConclusion = $commentaireConclusion;

        return $this;
    }

    /**
     * Get commentaireConclusion
     *
     * @return text
     */
    public function getCommentaireConclusion()
    {
        return $this->commentaireConclusion;
    }

    public function  __toString(){
        return $this->getAdvert()->getId();
    }


    /**
     * Set expertisedBy
     *
     * @param \UserBundle\Entity\User $expertisedBy
     *
     * @return Expertise
     */
    public function setExpertisedBy(\UserBundle\Entity\User $expertisedBy = null)
    {
        $this->expertisedBy = $expertisedBy;

        return $this;
    }

    /**
     * Get expertisedBy
     *
     * @return \UserBundle\Entity\User
     */
    public function getExpertisedBy()
    {
        return $this->expertisedBy;
    }
}
