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
     * @JoinColumn(name="advert_id", referencedColumnName="id")
     */
    private $advert;


    /**
     * @var string
     *
     * @ORM\Column(name="status", type="text", length=255)
     */

    private $status;


    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="text", length=255)
     */

    private $marque;


    /**
     * @var string
     *
     * @ORM\Column(name="motorisation", type="text", length=255)
     */

    private $motorisation;


    /**
     * @var string
     *
     * @ORM\Column(name="date_circulation", type="text", length=255)
     */

    private $date_circulation;


    /**
     * @var string
     *
     * @ORM\Column(name="carburant", type="text", length=255)
     */

    private $carburant;


    /**
     * @var string
     *
     * @ORM\Column(name="puissance", type="text", length=255)
     */

    private $puissance;


    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="text", length=255)
     */

    private $couleur;


    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="text", length=255)
     */

    private $modele;


    /**
     * @var string
     *
     * @ORM\Column(name="finition", type="text", length=255)
     */

    private $finition;


    /**
     * @var string
     *
     * @ORM\Column(name="numero_chassis", type="text", length=255)
     */

    private $numero_chassis;


    /**
     * @var string
     *
     * @ORM\Column(name="boite_vitesse", type="text", length=255)
     */

    private $boite_vitesse;


    /**
     * @var string
     *
     * @ORM\Column(name="kilometrage", type="text", length=255)
     */

    private $kilometrage;


    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="text", length=255)
     */

    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="controle_technique", type="text", length=255)
     */

    private $controle_technique;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_cle", type="text", length=255)
     */

    private $nombre_cle;

    /**
     * @var string
     *
     * @ORM\Column(name="notice", type="text", length=255)
     */

    private $notice;

    /**
     * @var string
     *
     * @ORM\Column(name="facture_entretien", type="text", length=255)
     */

    private $facture_entretien;

    /**
     * @var string
     *
     * @ORM\Column(name="carnet_entretien", type="text", length=255)
     */

    private $carnet_entretien;

    /**
     * @var string
     *
     * @ORM\Column(name="certificat_conformite_europeen", type="text", length=255)
     */

    private $certificat_conformite_europeen;

    /**
     * @var string
     *
     * @ORM\Column(name="date_controle_technique", type="text", length=255)
     */

    private $date_controle_technique;

    /**
     * @var string
     *
     * @ORM\Column(name="importation", type="text", length=255)
     */

    private $importation;

    /**
     * @var string
     *
     * @ORM\Column(name="facture_achat", type="text", length=255)
     */

    private $facture_achat;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="text", length=255)
     */

    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_administratif", type="text", length=255)
     */

    private $commentaire_administratif;

    /**
     * @var string
     *
     * @ORM\Column(name="siege_avant", type="text", length=255)
     */

    private $siege_avant;

    /**
     * @var string
     *
     * @ORM\Column(name="planche_bord", type="text", length=255)
     */

    private $planche_bord;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_retroviseur_interieur", type="text", length=255)
     */

    private $etat_retroviseur_interieur;

    /**
     * @var string
     *
     * @ORM\Column(name="panneaux_portes", type="text", length=255)
     */

    private $panneaux_portes;

    /**
     * @var string
     *
     * @ORM\Column(name="siege_arriere", type="text", length=255)
     */

    private $siege_arriere;

    /**
     * @var string
     *
     * @ORM\Column(name="plage_arriere", type="text", length=255)
     */

    private $plage_arriere;

    /**
     * @var string
     *
     * @ORM\Column(name="cric", type="text", length=255)
     */

    private $cric;

    /**
     * @var string
     *
     * @ORM\Column(name="garniture_ciel", type="text", length=255)
     */

    private $garniture_ciel;

    /**
     * @var string
     *
     * @ORM\Column(name="leves_vitres", type="text", length=255)
     */

    private $leves_vitres;

    /**
     * @var string
     *
     * @ORM\Column(name="ceintures", type="text", length=255)
     */

    private $ceintures;

    /**
     * @var string
     *
     * @ORM\Column(name="moquettes_avants", type="text", length=255)
     */

    private $moquettes_avants;

    /**
     * @var string
     *
     * @ORM\Column(name="usure_commande", type="text", length=255)
     */

    private $usure_commande;

    /**
     * @var string
     *
     * @ORM\Column(name="mode_nuit_retroviseur_interieur", type="text", length=255)
     */

    private $mode_nuit_retroviseur_interieur;

    /**
     * @var string
     *
     * @ORM\Column(name="tapis_sols", type="text", length=255)
     */

    private $tapis_sols;

    /**
     * @var string
     *
     * @ORM\Column(name="moquettes_arriere", type="text", length=255)
     */

    private $moquettes_arriere;

    /**
     * @var string
     *
     * @ORM\Column(name="coffre", type="text", length=255)
     */

    private $coffre;

    /**
     * @var string
     *
     * @ORM\Column(name="roue__secours", type="text", length=255)
     */

    private $roue__secours;

    /**
     * @var string
     *
     * @ORM\Column(name="ecrou_antivol", type="text", length=255)
     */

    private $ecrou_antivol;

    /**
     * @var string
     *
     * @ORM\Column(name="frein_main", type="text", length=255)
     */

    private $frein_main;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_interieure", type="text", length=255)
     */

    private $commentaire_interieure;

    /**
     * @var string
     *
     * @ORM\Column(name="gps", type="text", length=255)
     */

    private $gps;

    /**
     * @var string
     *
     * @ORM\Column(name="commande_volant", type="text", length=255)
     */

    private $commande_volant;

    /**
     * @var string
     *
     * @ORM\Column(name="toit_ouvrant", type="text", length=255)
     */

    private $toit_ouvrant;

    /**
     * @var string
     *
     * @ORM\Column(name="fermeture_centralisee", type="text", length=255)
     */

    private $fermeture_centralisee;

    /**
     * @var string
     *
     * @ORM\Column(name="autoradio", type="text", length=255)
     */

    private $autoradio;

    /**
     * @var string
     *
     * @ORM\Column(name="radars_recul", type="text", length=255)
     */

    private $radars_recul;

    /**
     * @var string
     *
     * @ORM\Column(name="ouverture_sans_cle", type="text", length=255)
     */

    private $ouverture_sans_cle;

    /**
     * @var string
     *
     * @ORM\Column(name="presence_marque_reparation", type="text", length=255)
     */

    private $presence_marque_reparation;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_pare_brise_avant", type="text", length=255)
     */

    private $etat_pare_brise_avant;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_essuie_glaces", type="text", length=255)
     */

    private $etat_essuie_glaces;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_retroviseur_gauche", type="text", length=255)
     */

    private $etat_retroviseur_gauche;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_vitres_laterales", type="text", length=255)
     */

    private $etat_vitres_laterales;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_pare_brise_arrière", type="text", length=255)
     */

    private $etat_pare_brise_arrière;


    /**
     * @var string
     *
     * @ORM\Column(name="feux_stop", type="text", length=255)
     */

    private $feux_stop;

    /**
     * @var string
     *
     * @ORM\Column(name="feu_recul", type="text", length=255)
     */

    private $feu_recul;


    /**
     * @var string
     *
     * @ORM\Column(name="repetiteurs", type="text", length=255)
     */

    private $repetiteurs;

    /**
     * @var string
     *
     * @ORM\Column(name="alignement_elements", type="text", length=255)
     */

    private $alignement_elements;


    /**
     * @var string
     *
     * @ORM\Column(name="presence_rouille", type="text", length=255)
     */

    private $presence_rouille;

    /**
     * @var string
     *
     * @ORM\Column(name="differences_teintes_carrosserie", type="text", length=255)
     */

    private $differences_teintes_carrosserie;


    /**
     * @var string
     *
     * @ORM\Column(name="impacts_champ_vision", type="text", length=255)
     */

    private $impacts_champ_vision;

    /**
     * @var string
     *
     * @ORM\Column(name="feux_avants", type="text", length=255)
     */

    private $feux_avants;


    /**
     * @var string
     *
     * @ORM\Column(name="etat_retroviseur_droite", type="text", length=255)
     */

    private $etat_retroviseur_droite;

    /**
     * @var string
     *
     * @ORM\Column(name="vitres_surteintees", type="text", length=255)
     */

    private $vitres_surteintees;


    /**
     * @var string
     *
     * @ORM\Column(name="feux_arrieres", type="text", length=255)
     */

    private $feux_arrieres;

    /**
     * @var string
     *
     * @ORM\Column(name="feux_antibrouillards", type="text", length=255)
     */

    private $feux_antibrouillards;


    /**
     * @var string
     *
     * @ORM\Column(name="feux_detresse", type="text", length=255)
     */

    private $feux_detresse;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_joints", type="text", length=255)
     */

    private $etat_joints;


    /**
     * @var string
     *
     * @ORM\Column(name="etat_jantes", type="text", length=255)
     */

    private $etat_jantes;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_exterieur", type="text", length=255)
     */

    private $commentaire_exterieur;

    /**
     * @var string
     *
     * @ORM\Column(name="vehicule_vu", type="text", length=255)
     */

    private $vehicule_vu;

    /**
     * @var string
     *
     * @ORM\Column(name="corrosion_perforante", type="text", length=255)
     */

    private $corrosion_perforante;


    /**
     * @var string
     *
     * @ORM\Column(name="presence_fuite_huile", type="text", length=255)
     */

    private $presence_fuite_huile;

    /**
     * @var string
     *
     * @ORM\Column(name="echappement", type="text", length=255)
     */

    private $echappement;


    /**
     * @var string
     *
     * @ORM\Column(name="presence_corrosion", type="text", length=255)
     */

    private $presence_corrosion;

    /**
     * @var string
     *
     * @ORM\Column(name="corrosion_longerons", type="text", length=255)
     */

    private $corrosion_longerons;


    /**
     * @var string
     *
     * @ORM\Column(name="origine_fuite", type="text", length=255)
     */

    private $origine_fuite;

    /**
     * @var string
     *
     * @ORM\Column(name="plaquettes_avants_usage", type="text", length=255)
     */
    //en %

    private $plaquettes_avants_usage;


    /**
     * @var string
     *
     * @ORM\Column(name="marque_pneu_avant", type="text", length=255)
     */

    private $marque_pneu_avant;

    /**
     * @var string
     *
     * @ORM\Column(name="code_DOT_pneu_avant_gauche", type="text", length=255)
     */

    private $code_DOT_pneu_avant_gauche;


    /**
     * @var string
     *
     * @ORM\Column(name="code_DOT_pneu_avant_droite", type="text", length=255)
     */

    private $code_DOT_pneu_avant_droite;

    /**
     * @var string
     *
     * @ORM\Column(name="usage_pneumatiques_avants", type="text", length=255)
     */

    private $usage_pneumatiques_avants;


    /**
     * @var string
     *
     * @ORM\Column(name="usage_disques_avants", type="text", length=255)
     */

    private $usage_disques_avants;

    /**
     * @var string
     *
     * @ORM\Column(name="dimensions_pneumatique_avant", type="text", length=255)
     */

    private $dimensions_pneumatique_avant;


    /**
     * @var string
     *
     * @ORM\Column(name="pneumatique_conforme_monte_origine", type="text", length=255)
     */

    private $pneumatique_conforme_monte_origine;

    /**
     * @var string
     *
     * @ORM\Column(name="plaquettes_arriere_usage", type="text", length=255)
     */

    private $plaquettes_arriere_usage;


    /**
     * @var string
     *
     * @ORM\Column(name="marque_pneu_arriere", type="text", length=255)
     */

    private $marque_pneu_arriere;

    /**
     * @var string
     *
     * @ORM\Column(name="code_DOT_pneu_arriere_gauche", type="text", length=255)
     */

    private $code_DOT_pneu_arriere_gauche;

    /**
     * @var string
     *
     * @ORM\Column(name="code_DOT_pneu_arriere_droite", type="text", length=255)
     */

    private $code_DOT_pneu_arriere_droite;

    /**
     * @var string
     *
     * @ORM\Column(name="usage_pneumatiques_arrieres", type="text", length=255)
     */

    private $usage_pneumatiques_arrieres;


    /**
     * @var string
     *
     * @ORM\Column(name="usage_disques_arriere", type="text", length=255)
     */

    private $usage_disques_arriere;

    /**
     * @var string
     *
     * @ORM\Column(name="dimensions_pneumatique_arriere", type="text", length=255)
     */

    private $dimensions_pneumatique_arriere;


    /**
     * @var string
     *
     * @ORM\Column(name="pneumatique_conforme_monte_origine_arriere", type="text", length=255)
     */

    private $pneumatique_conforme_monte_origine_arriere;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_huile", type="text", length=255)
     */

    private $niveau_huile;


    /**
     * @var string
     *
     * @ORM\Column(name="qualite_huile", type="text", length=255)
     */

    private $qualite_huile;

    /**
     * @var string
     *
     * @ORM\Column(name="souffle_bouchon_huile", type="text", length=255)
     */

    private $souffle_bouchon_huile;


    /**
     * @var string
     *
     * @ORM\Column(name="niveau_liquide_refroidissement", type="text", length=255)
     */

    private $niveau_liquide_refroidissement;

    /**
     * @var string
     *
     * @ORM\Column(name="qualite_liquide_refroidissement", type="text", length=255)
     */

    private $qualite_liquide_refroidissement;


    /**
     * @var string
     *
     * @ORM\Column(name="type_distribution", type="text", length=255)
     */

    private $type_distribution;

    /**
     * @var string
     *
     * @ORM\Column(name="Distribution", type="text", length=255)
     */
//Distribution à jour(si facture)
    private $Distribution;


    /**
     * @var string
     *
     * @ORM\Column(name="courroie", type="text", length=255)
     */

    private $courroie;
//Courroie accessoire

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_consommables_moteur", type="text", length=255)
     */

    private $commentaire_consommables_moteur;


    /**
     * @var string
     *
     * @ORM\Column(name="demarrage_vehicule_froid", type="text", length=255)
     */

    private $demarrage_vehicule_froid;

    /**
     * @var string
     *
     * @ORM\Column(name="bloc_compteur", type="text", length=255)
     */

    private $bloc_compteur;
//Bloc compteur (jauges, cadrans...)

    /**
     * @var string
     *
     * @ORM\Column(name="presence_fumee_echappement", type="text", length=255)
     */

    private $presence_fumee_echappement;

    /**
     * @var string
     *
     * @ORM\Column(name="amortisseurs", type="text", length=255)
     */

    private $amortisseurs;

    /**
     * @var string
     *
     * @ORM\Column(name="sonorite_moteur", type="text", length=255)
     */

    private $sonorite_moteur;

    /**
     * @var string
     *
     * @ORM\Column(name="voyant_prechauffage", type="text", length=255)
     */

    private $voyant_prechauffage;
//Voyant préchauffage (Diesel)

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_test_static", type="text", length=255)
     */

    private $commentaire_test_static;

    /**
     * @var string
     *
     * @ORM\Column(name="test_routier_effectue", type="text", length=255)
     */

    private $test_routier_effectue;


    /**
     * @var string
     *
     * @ORM\Column(name="aucun_test_explication", type="text", length=255)
     */

    private $aucun_test_explication;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_meteo", type="text", length=255)
     */

    private $condition_meteo;


    /**
     * @var string
     *
     * @ORM\Column(name="condition_essaie", type="text", length=255)
     */

    private $condition_essaie;

    /**
     * @var string
     *
     * @ORM\Column(name="course_pedale_embrayage", type="text", length=255)
     */

    private $course_pedale_embrayage;


    /**
     * @var string
     *
     * @ORM\Column(name="embrayage_patine", type="text", length=255)
     */

    private $embrayage_patine;

    /**
     * @var string
     *
     * @ORM\Column(name="butee_embrayage_bruyante", type="text", length=255)
     */

    private $butee_embrayage_bruyante;


    /**
     * @var string
     *
     * @ORM\Column(name="jeu_levier_vitesse", type="text", length=255)
     */

    private $jeu_levier_vitesse;

    /**
     * @var string
     *
     * @ORM\Column(name="passage_facile_vitesses", type="text", length=255)
     */

    private $passage_facile_vitesses;


    /**
     * @var string
     *
     * @ORM\Column(name="accoups_BVA ", type="text", length=255)
     */

    private $accoups_BVA ;

    /**
     * @var string
     *
     * @ORM\Column(name="acceleration_franche", type="text", length=255)
     */

    private $acceleration_franche;


    /**
     * @var string
     *
     * @ORM\Column(name="vitesse_atteinte", type="text", length=255)
     */

    private $vitesse_atteinte;
    //Vitesse atteinte (km/h)

    /**
     * @var string
     *
     * @ORM\Column(name="vibrations_mecaniques", type="text", length=255)
     */

    private $vibrations_mecaniques;
    //Vibrations mécaniques (moteur, transmi., échap., tringleries...)

    /**
     * @var string
     *
     * @ORM\Column(name="vitesse_vibration", type="text", length=255)
     */

    private $vitesse_vibration;
    //Si vibrations, à quelle vitesse? (km/h)


    /**
     * @var string
     *
     * @ORM\Column(name="tenue_cap", type="text", length=255)
     */

    private $tenue_cap;

    /**
     * @var string
     *
     * @ORM\Column(name="freinage_ligne_droite", type="text", length=255)
     */

    private $freinage_ligne_droite;


    /**
     * @var string
     *
     * @ORM\Column(name="presence_bruits_etrangers", type="text", length=255)
     */

    private $presence_bruits_etrangers;

    /**
     * @var string
     *
     * @ORM\Column(name="regulateur_limiteur_vitesse", type="text", length=255)
     */

    private $regulateur_limiteur_vitesse;


    /**
     * @var string
     *
     * @ORM\Column(name="odeurs_exterieur", type="text", length=255)
     */

    private $odeurs_exterieur;
    //Odeurs à l'extérieur (freins, huile, échap.)


    /**
     * @var string
     *
     * @ORM\Column(name="demarrage_vehicule_chaud", type="text", length=255)
     */

    private $demarrage_vehicule_chaud;


    /**
     * @var string
     *
     * @ORM\Column(name="ralenti", type="text", length=255)
     */

    private $ralenti;

    /**
     * @var string
     *
     * @ORM\Column(name="voyants_allumes", type="text", length=255)
     */

    private $voyants_allumes;


    /**
     * @var string
     *
     * @ORM\Column(name="nom_voyants_allumes", type="text", length=255)
     */

    private $nom_voyants_allumes;
    //Si oui, lesquels ?


    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_test_routier", type="text", length=255)
     */

    private $commentaire_test_routier;


    /**
     * @var string
     *
     * @ORM\Column(name="notation_vendeur", type="text", length=255)
     */

    private $notation_vendeur;

    /**
     * @var string
     *
     * @ORM\Column(name="achat_securise", type="text", length=255)
     */

    private $achat_securise;
    //L'achat semble sécurisé, je le recommande


    /**
     * @var string
     *
     * @ORM\Column(name="kilometrage_coherent", type="text", length=255)
     */

    private $kilometrage_coherent;
    //Kilométrage cohérent (entretien, usure...)



    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_conclusion", type="text", length=255)
     */

    private $commentaire_conclusion;

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
        $this->date_circulation = $dateCirculation;

        return $this;
    }

    /**
     * Get dateCirculation
     *
     * @return text
     */
    public function getDateCirculation()
    {
        return $this->date_circulation;
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
        $this->numero_chassis = $numeroChassis;

        return $this;
    }

    /**
     * Get numeroChassis
     *
     * @return text
     */
    public function getNumeroChassis()
    {
        return $this->numero_chassis;
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
        $this->boite_vitesse = $boiteVitesse;

        return $this;
    }

    /**
     * Get boiteVitesse
     *
     * @return text
     */
    public function getBoiteVitesse()
    {
        return $this->boite_vitesse;
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
        $this->controle_technique = $controleTechnique;

        return $this;
    }

    /**
     * Get controleTechnique
     *
     * @return text
     */
    public function getControleTechnique()
    {
        return $this->controle_technique;
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
        $this->nombre_cle = $nombreCle;

        return $this;
    }

    /**
     * Get nombreCle
     *
     * @return text
     */
    public function getNombreCle()
    {
        return $this->nombre_cle;
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
        $this->facture_entretien = $factureEntretien;

        return $this;
    }

    /**
     * Get factureEntretien
     *
     * @return text
     */
    public function getFactureEntretien()
    {
        return $this->facture_entretien;
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
        $this->carnet_entretien = $carnetEntretien;

        return $this;
    }

    /**
     * Get carnetEntretien
     *
     * @return text
     */
    public function getCarnetEntretien()
    {
        return $this->carnet_entretien;
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
        $this->certificat_conformite_europeen = $certificatConformiteEuropeen;

        return $this;
    }

    /**
     * Get certificatConformiteEuropeen
     *
     * @return text
     */
    public function getCertificatConformiteEuropeen()
    {
        return $this->certificat_conformite_europeen;
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
        $this->date_controle_technique = $dateControleTechnique;

        return $this;
    }

    /**
     * Get dateControleTechnique
     *
     * @return text
     */
    public function getDateControleTechnique()
    {
        return $this->date_controle_technique;
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
        $this->facture_achat = $factureAchat;

        return $this;
    }

    /**
     * Get factureAchat
     *
     * @return text
     */
    public function getFactureAchat()
    {
        return $this->facture_achat;
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
        $this->commentaire_administratif = $commentaireAdministratif;

        return $this;
    }

    /**
     * Get commentaireAdministratif
     *
     * @return text
     */
    public function getCommentaireAdministratif()
    {
        return $this->commentaire_administratif;
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
        $this->siege_avant = $siegeAvant;

        return $this;
    }

    /**
     * Get siegeAvant
     *
     * @return text
     */
    public function getSiegeAvant()
    {
        return $this->siege_avant;
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
        $this->planche_bord = $plancheBord;

        return $this;
    }

    /**
     * Get plancheBord
     *
     * @return text
     */
    public function getPlancheBord()
    {
        return $this->planche_bord;
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
        $this->etat_retroviseur_interieur = $etatRetroviseurInterieur;

        return $this;
    }

    /**
     * Get etatRetroviseurInterieur
     *
     * @return text
     */
    public function getEtatRetroviseurInterieur()
    {
        return $this->etat_retroviseur_interieur;
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
        $this->panneaux_portes = $panneauxPortes;

        return $this;
    }

    /**
     * Get panneauxPortes
     *
     * @return text
     */
    public function getPanneauxPortes()
    {
        return $this->panneaux_portes;
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
        $this->siege_arriere = $siegeArriere;

        return $this;
    }

    /**
     * Get siegeArriere
     *
     * @return text
     */
    public function getSiegeArriere()
    {
        return $this->siege_arriere;
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
        $this->plage_arriere = $plageArriere;

        return $this;
    }

    /**
     * Get plageArriere
     *
     * @return text
     */
    public function getPlageArriere()
    {
        return $this->plage_arriere;
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
        $this->garniture_ciel = $garnitureCiel;

        return $this;
    }

    /**
     * Get garnitureCiel
     *
     * @return text
     */
    public function getGarnitureCiel()
    {
        return $this->garniture_ciel;
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
        $this->leves_vitres = $levesVitres;

        return $this;
    }

    /**
     * Get levesVitres
     *
     * @return text
     */
    public function getLevesVitres()
    {
        return $this->leves_vitres;
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
        $this->moquettes_avants = $moquettesAvants;

        return $this;
    }

    /**
     * Get moquettesAvants
     *
     * @return text
     */
    public function getMoquettesAvants()
    {
        return $this->moquettes_avants;
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
        $this->usure_commande = $usureCommande;

        return $this;
    }

    /**
     * Get usureCommande
     *
     * @return text
     */
    public function getUsureCommande()
    {
        return $this->usure_commande;
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
        $this->mode_nuit_retroviseur_interieur = $modeNuitRetroviseurInterieur;

        return $this;
    }

    /**
     * Get modeNuitRetroviseurInterieur
     *
     * @return text
     */
    public function getModeNuitRetroviseurInterieur()
    {
        return $this->mode_nuit_retroviseur_interieur;
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
        $this->tapis_sols = $tapisSols;

        return $this;
    }

    /**
     * Get tapisSols
     *
     * @return text
     */
    public function getTapisSols()
    {
        return $this->tapis_sols;
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
        $this->moquettes_arriere = $moquettesArriere;

        return $this;
    }

    /**
     * Get moquettesArriere
     *
     * @return text
     */
    public function getMoquettesArriere()
    {
        return $this->moquettes_arriere;
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
        $this->roue__secours = $roueSecours;

        return $this;
    }

    /**
     * Get roueSecours
     *
     * @return text
     */
    public function getRoueSecours()
    {
        return $this->roue__secours;
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
        $this->ecrou_antivol = $ecrouAntivol;

        return $this;
    }

    /**
     * Get ecrouAntivol
     *
     * @return text
     */
    public function getEcrouAntivol()
    {
        return $this->ecrou_antivol;
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
        $this->frein_main = $freinMain;

        return $this;
    }

    /**
     * Get freinMain
     *
     * @return text
     */
    public function getFreinMain()
    {
        return $this->frein_main;
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
        $this->commentaire_interieure = $commentaireInterieure;

        return $this;
    }

    /**
     * Get commentaireInterieure
     *
     * @return text
     */
    public function getCommentaireInterieure()
    {
        return $this->commentaire_interieure;
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
        $this->commande_volant = $commandeVolant;

        return $this;
    }

    /**
     * Get commandeVolant
     *
     * @return text
     */
    public function getCommandeVolant()
    {
        return $this->commande_volant;
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
        $this->toit_ouvrant = $toitOuvrant;

        return $this;
    }

    /**
     * Get toitOuvrant
     *
     * @return text
     */
    public function getToitOuvrant()
    {
        return $this->toit_ouvrant;
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
        $this->fermeture_centralisee = $fermetureCentralisee;

        return $this;
    }

    /**
     * Get fermetureCentralisee
     *
     * @return text
     */
    public function getFermetureCentralisee()
    {
        return $this->fermeture_centralisee;
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
        $this->radars_recul = $radarsRecul;

        return $this;
    }

    /**
     * Get radarsRecul
     *
     * @return text
     */
    public function getRadarsRecul()
    {
        return $this->radars_recul;
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
        $this->ouverture_sans_cle = $ouvertureSansCle;

        return $this;
    }

    /**
     * Get ouvertureSansCle
     *
     * @return text
     */
    public function getOuvertureSansCle()
    {
        return $this->ouverture_sans_cle;
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
        $this->presence_marque_reparation = $presenceMarqueReparation;

        return $this;
    }

    /**
     * Get presenceMarqueReparation
     *
     * @return text
     */
    public function getPresenceMarqueReparation()
    {
        return $this->presence_marque_reparation;
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
        $this->etat_pare_brise_avant = $etatPareBriseAvant;

        return $this;
    }

    /**
     * Get etatPareBriseAvant
     *
     * @return text
     */
    public function getEtatPareBriseAvant()
    {
        return $this->etat_pare_brise_avant;
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
        $this->etat_essuie_glaces = $etatEssuieGlaces;

        return $this;
    }

    /**
     * Get etatEssuieGlaces
     *
     * @return text
     */
    public function getEtatEssuieGlaces()
    {
        return $this->etat_essuie_glaces;
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
        $this->etat_retroviseur_gauche = $etatRetroviseurGauche;

        return $this;
    }

    /**
     * Get etatRetroviseurGauche
     *
     * @return text
     */
    public function getEtatRetroviseurGauche()
    {
        return $this->etat_retroviseur_gauche;
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
        $this->etat_vitres_laterales = $etatVitresLaterales;

        return $this;
    }

    /**
     * Get etatVitresLaterales
     *
     * @return text
     */
    public function getEtatVitresLaterales()
    {
        return $this->etat_vitres_laterales;
    }

    /**
     * Set etatPareBriseArrière
     *
     * @param text $etatPareBriseArrière
     *
     * @return Expertise
     */
    public function setEtatPareBriseArrière($etatPareBriseArrière)
    {
        $this->etat_pare_brise_arrière = $etatPareBriseArrière;

        return $this;
    }

    /**
     * Get etatPareBriseArrière
     *
     * @return text
     */
    public function getEtatPareBriseArrière()
    {
        return $this->etat_pare_brise_arrière;
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
        $this->feux_stop = $feuxStop;

        return $this;
    }

    /**
     * Get feuxStop
     *
     * @return text
     */
    public function getFeuxStop()
    {
        return $this->feux_stop;
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
        $this->feu_recul = $feuRecul;

        return $this;
    }

    /**
     * Get feuRecul
     *
     * @return text
     */
    public function getFeuRecul()
    {
        return $this->feu_recul;
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
        $this->alignement_elements = $alignementElements;

        return $this;
    }

    /**
     * Get alignementElements
     *
     * @return text
     */
    public function getAlignementElements()
    {
        return $this->alignement_elements;
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
        $this->presence_rouille = $presenceRouille;

        return $this;
    }

    /**
     * Get presenceRouille
     *
     * @return text
     */
    public function getPresenceRouille()
    {
        return $this->presence_rouille;
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
        $this->differences_teintes_carrosserie = $differencesTeintesCarrosserie;

        return $this;
    }

    /**
     * Get differencesTeintesCarrosserie
     *
     * @return text
     */
    public function getDifferencesTeintesCarrosserie()
    {
        return $this->differences_teintes_carrosserie;
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
        $this->impacts_champ_vision = $impactsChampVision;

        return $this;
    }

    /**
     * Get impactsChampVision
     *
     * @return text
     */
    public function getImpactsChampVision()
    {
        return $this->impacts_champ_vision;
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
        $this->feux_avants = $feuxAvants;

        return $this;
    }

    /**
     * Get feuxAvants
     *
     * @return text
     */
    public function getFeuxAvants()
    {
        return $this->feux_avants;
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
        $this->etat_retroviseur_droite = $etatRetroviseurDroite;

        return $this;
    }

    /**
     * Get etatRetroviseurDroite
     *
     * @return text
     */
    public function getEtatRetroviseurDroite()
    {
        return $this->etat_retroviseur_droite;
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
        $this->vitres_surteintees = $vitresSurteintees;

        return $this;
    }

    /**
     * Get vitresSurteintees
     *
     * @return text
     */
    public function getVitresSurteintees()
    {
        return $this->vitres_surteintees;
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
        $this->feux_arrieres = $feuxArrieres;

        return $this;
    }

    /**
     * Get feuxArrieres
     *
     * @return text
     */
    public function getFeuxArrieres()
    {
        return $this->feux_arrieres;
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
        $this->feux_antibrouillards = $feuxAntibrouillards;

        return $this;
    }

    /**
     * Get feuxAntibrouillards
     *
     * @return text
     */
    public function getFeuxAntibrouillards()
    {
        return $this->feux_antibrouillards;
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
        $this->feux_detresse = $feuxDetresse;

        return $this;
    }

    /**
     * Get feuxDetresse
     *
     * @return text
     */
    public function getFeuxDetresse()
    {
        return $this->feux_detresse;
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
        $this->etat_joints = $etatJoints;

        return $this;
    }

    /**
     * Get etatJoints
     *
     * @return text
     */
    public function getEtatJoints()
    {
        return $this->etat_joints;
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
        $this->etat_jantes = $etatJantes;

        return $this;
    }

    /**
     * Get etatJantes
     *
     * @return text
     */
    public function getEtatJantes()
    {
        return $this->etat_jantes;
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
        $this->commentaire_exterieur = $commentaireExterieur;

        return $this;
    }

    /**
     * Get commentaireExterieur
     *
     * @return text
     */
    public function getCommentaireExterieur()
    {
        return $this->commentaire_exterieur;
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
        $this->vehicule_vu = $vehiculeVu;

        return $this;
    }

    /**
     * Get vehiculeVu
     *
     * @return text
     */
    public function getVehiculeVu()
    {
        return $this->vehicule_vu;
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
        $this->corrosion_perforante = $corrosionPerforante;

        return $this;
    }

    /**
     * Get corrosionPerforante
     *
     * @return text
     */
    public function getCorrosionPerforante()
    {
        return $this->corrosion_perforante;
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
        $this->presence_fuite_huile = $presenceFuiteHuile;

        return $this;
    }

    /**
     * Get presenceFuiteHuile
     *
     * @return text
     */
    public function getPresenceFuiteHuile()
    {
        return $this->presence_fuite_huile;
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
        $this->presence_corrosion = $presenceCorrosion;

        return $this;
    }

    /**
     * Get presenceCorrosion
     *
     * @return text
     */
    public function getPresenceCorrosion()
    {
        return $this->presence_corrosion;
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
        $this->corrosion_longerons = $corrosionLongerons;

        return $this;
    }

    /**
     * Get corrosionLongerons
     *
     * @return text
     */
    public function getCorrosionLongerons()
    {
        return $this->corrosion_longerons;
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
        $this->origine_fuite = $origineFuite;

        return $this;
    }

    /**
     * Get origineFuite
     *
     * @return text
     */
    public function getOrigineFuite()
    {
        return $this->origine_fuite;
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
        $this->plaquettes_avants_usage = $plaquettesAvantsUsage;

        return $this;
    }

    /**
     * Get plaquettesAvantsUsage
     *
     * @return text
     */
    public function getPlaquettesAvantsUsage()
    {
        return $this->plaquettes_avants_usage;
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
        $this->marque_pneu_avant = $marquePneuAvant;

        return $this;
    }

    /**
     * Get marquePneuAvant
     *
     * @return text
     */
    public function getMarquePneuAvant()
    {
        return $this->marque_pneu_avant;
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
        $this->code_DOT_pneu_avant_gauche = $codeDOTPneuAvantGauche;

        return $this;
    }

    /**
     * Get codeDOTPneuAvantGauche
     *
     * @return text
     */
    public function getCodeDOTPneuAvantGauche()
    {
        return $this->code_DOT_pneu_avant_gauche;
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
        $this->code_DOT_pneu_avant_droite = $codeDOTPneuAvantDroite;

        return $this;
    }

    /**
     * Get codeDOTPneuAvantDroite
     *
     * @return text
     */
    public function getCodeDOTPneuAvantDroite()
    {
        return $this->code_DOT_pneu_avant_droite;
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
        $this->usage_pneumatiques_avants = $usagePneumatiquesAvants;

        return $this;
    }

    /**
     * Get usagePneumatiquesAvants
     *
     * @return text
     */
    public function getUsagePneumatiquesAvants()
    {
        return $this->usage_pneumatiques_avants;
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
        $this->usage_disques_avants = $usageDisquesAvants;

        return $this;
    }

    /**
     * Get usageDisquesAvants
     *
     * @return text
     */
    public function getUsageDisquesAvants()
    {
        return $this->usage_disques_avants;
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
        $this->dimensions_pneumatique_avant = $dimensionsPneumatiqueAvant;

        return $this;
    }

    /**
     * Get dimensionsPneumatiqueAvant
     *
     * @return text
     */
    public function getDimensionsPneumatiqueAvant()
    {
        return $this->dimensions_pneumatique_avant;
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
        $this->pneumatique_conforme_monte_origine = $pneumatiqueConformeMonteOrigine;

        return $this;
    }

    /**
     * Get pneumatiqueConformeMonteOrigine
     *
     * @return text
     */
    public function getPneumatiqueConformeMonteOrigine()
    {
        return $this->pneumatique_conforme_monte_origine;
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
        $this->plaquettes_arriere_usage = $plaquettesArriereUsage;

        return $this;
    }

    /**
     * Get plaquettesArriereUsage
     *
     * @return text
     */
    public function getPlaquettesArriereUsage()
    {
        return $this->plaquettes_arriere_usage;
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
        $this->marque_pneu_arriere = $marquePneuArriere;

        return $this;
    }

    /**
     * Get marquePneuArriere
     *
     * @return text
     */
    public function getMarquePneuArriere()
    {
        return $this->marque_pneu_arriere;
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
        $this->code_DOT_pneu_arriere_gauche = $codeDOTPneuArriereGauche;

        return $this;
    }

    /**
     * Get codeDOTPneuArriereGauche
     *
     * @return text
     */
    public function getCodeDOTPneuArriereGauche()
    {
        return $this->code_DOT_pneu_arriere_gauche;
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
        $this->code_DOT_pneu_arriere_droite = $codeDOTPneuArriereDroite;

        return $this;
    }

    /**
     * Get codeDOTPneuArriereDroite
     *
     * @return text
     */
    public function getCodeDOTPneuArriereDroite()
    {
        return $this->code_DOT_pneu_arriere_droite;
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
        $this->usage_pneumatiques_arrieres = $usagePneumatiquesArrieres;

        return $this;
    }

    /**
     * Get usagePneumatiquesArrieres
     *
     * @return text
     */
    public function getUsagePneumatiquesArrieres()
    {
        return $this->usage_pneumatiques_arrieres;
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
        $this->usage_disques_arriere = $usageDisquesArriere;

        return $this;
    }

    /**
     * Get usageDisquesArriere
     *
     * @return text
     */
    public function getUsageDisquesArriere()
    {
        return $this->usage_disques_arriere;
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
        $this->dimensions_pneumatique_arriere = $dimensionsPneumatiqueArriere;

        return $this;
    }

    /**
     * Get dimensionsPneumatiqueArriere
     *
     * @return text
     */
    public function getDimensionsPneumatiqueArriere()
    {
        return $this->dimensions_pneumatique_arriere;
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
        $this->pneumatique_conforme_monte_origine_arriere = $pneumatiqueConformeMonteOrigineArriere;

        return $this;
    }

    /**
     * Get pneumatiqueConformeMonteOrigineArriere
     *
     * @return text
     */
    public function getPneumatiqueConformeMonteOrigineArriere()
    {
        return $this->pneumatique_conforme_monte_origine_arriere;
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
        $this->niveau_huile = $niveauHuile;

        return $this;
    }

    /**
     * Get niveauHuile
     *
     * @return text
     */
    public function getNiveauHuile()
    {
        return $this->niveau_huile;
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
        $this->qualite_huile = $qualiteHuile;

        return $this;
    }

    /**
     * Get qualiteHuile
     *
     * @return text
     */
    public function getQualiteHuile()
    {
        return $this->qualite_huile;
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
        $this->souffle_bouchon_huile = $souffleBouchonHuile;

        return $this;
    }

    /**
     * Get souffleBouchonHuile
     *
     * @return text
     */
    public function getSouffleBouchonHuile()
    {
        return $this->souffle_bouchon_huile;
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
        $this->niveau_liquide_refroidissement = $niveauLiquideRefroidissement;

        return $this;
    }

    /**
     * Get niveauLiquideRefroidissement
     *
     * @return text
     */
    public function getNiveauLiquideRefroidissement()
    {
        return $this->niveau_liquide_refroidissement;
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
        $this->qualite_liquide_refroidissement = $qualiteLiquideRefroidissement;

        return $this;
    }

    /**
     * Get qualiteLiquideRefroidissement
     *
     * @return text
     */
    public function getQualiteLiquideRefroidissement()
    {
        return $this->qualite_liquide_refroidissement;
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
        $this->type_distribution = $typeDistribution;

        return $this;
    }

    /**
     * Get typeDistribution
     *
     * @return text
     */
    public function getTypeDistribution()
    {
        return $this->type_distribution;
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
        $this->commentaire_consommables_moteur = $commentaireConsommablesMoteur;

        return $this;
    }

    /**
     * Get commentaireConsommablesMoteur
     *
     * @return text
     */
    public function getCommentaireConsommablesMoteur()
    {
        return $this->commentaire_consommables_moteur;
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
        $this->demarrage_vehicule_froid = $demarrageVehiculeFroid;

        return $this;
    }

    /**
     * Get demarrageVehiculeFroid
     *
     * @return text
     */
    public function getDemarrageVehiculeFroid()
    {
        return $this->demarrage_vehicule_froid;
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
        $this->bloc_compteur = $blocCompteur;

        return $this;
    }

    /**
     * Get blocCompteur
     *
     * @return text
     */
    public function getBlocCompteur()
    {
        return $this->bloc_compteur;
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
        $this->presence_fumee_echappement = $presenceFumeeEchappement;

        return $this;
    }

    /**
     * Get presenceFumeeEchappement
     *
     * @return text
     */
    public function getPresenceFumeeEchappement()
    {
        return $this->presence_fumee_echappement;
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
        $this->sonorite_moteur = $sonoriteMoteur;

        return $this;
    }

    /**
     * Get sonoriteMoteur
     *
     * @return text
     */
    public function getSonoriteMoteur()
    {
        return $this->sonorite_moteur;
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
        $this->voyant_prechauffage = $voyantPrechauffage;

        return $this;
    }

    /**
     * Get voyantPrechauffage
     *
     * @return text
     */
    public function getVoyantPrechauffage()
    {
        return $this->voyant_prechauffage;
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
        $this->commentaire_test_static = $commentaireTestStatic;

        return $this;
    }

    /**
     * Get commentaireTestStatic
     *
     * @return text
     */
    public function getCommentaireTestStatic()
    {
        return $this->commentaire_test_static;
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
        $this->test_routier_effectue = $testRoutierEffectue;

        return $this;
    }

    /**
     * Get testRoutierEffectue
     *
     * @return text
     */
    public function getTestRoutierEffectue()
    {
        return $this->test_routier_effectue;
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
        $this->aucun_test_explication = $aucunTestExplication;

        return $this;
    }

    /**
     * Get aucunTestExplication
     *
     * @return text
     */
    public function getAucunTestExplication()
    {
        return $this->aucun_test_explication;
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
        $this->condition_meteo = $conditionMeteo;

        return $this;
    }

    /**
     * Get conditionMeteo
     *
     * @return text
     */
    public function getConditionMeteo()
    {
        return $this->condition_meteo;
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
        $this->condition_essaie = $conditionEssaie;

        return $this;
    }

    /**
     * Get conditionEssaie
     *
     * @return text
     */
    public function getConditionEssaie()
    {
        return $this->condition_essaie;
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
        $this->course_pedale_embrayage = $coursePedaleEmbrayage;

        return $this;
    }

    /**
     * Get coursePedaleEmbrayage
     *
     * @return text
     */
    public function getCoursePedaleEmbrayage()
    {
        return $this->course_pedale_embrayage;
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
        $this->embrayage_patine = $embrayagePatine;

        return $this;
    }

    /**
     * Get embrayagePatine
     *
     * @return text
     */
    public function getEmbrayagePatine()
    {
        return $this->embrayage_patine;
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
        $this->butee_embrayage_bruyante = $buteeEmbrayageBruyante;

        return $this;
    }

    /**
     * Get buteeEmbrayageBruyante
     *
     * @return text
     */
    public function getButeeEmbrayageBruyante()
    {
        return $this->butee_embrayage_bruyante;
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
        $this->jeu_levier_vitesse = $jeuLevierVitesse;

        return $this;
    }

    /**
     * Get jeuLevierVitesse
     *
     * @return text
     */
    public function getJeuLevierVitesse()
    {
        return $this->jeu_levier_vitesse;
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
        $this->passage_facile_vitesses = $passageFacileVitesses;

        return $this;
    }

    /**
     * Get passageFacileVitesses
     *
     * @return text
     */
    public function getPassageFacileVitesses()
    {
        return $this->passage_facile_vitesses;
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
        $this->accoups_BVA = $accoupsBVA;

        return $this;
    }

    /**
     * Get accoupsBVA
     *
     * @return text
     */
    public function getAccoupsBVA()
    {
        return $this->accoups_BVA;
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
        $this->acceleration_franche = $accelerationFranche;

        return $this;
    }

    /**
     * Get accelerationFranche
     *
     * @return text
     */
    public function getAccelerationFranche()
    {
        return $this->acceleration_franche;
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
        $this->vitesse_atteinte = $vitesseAtteinte;

        return $this;
    }

    /**
     * Get vitesseAtteinte
     *
     * @return text
     */
    public function getVitesseAtteinte()
    {
        return $this->vitesse_atteinte;
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
        $this->vibrations_mecaniques = $vibrationsMecaniques;

        return $this;
    }

    /**
     * Get vibrationsMecaniques
     *
     * @return text
     */
    public function getVibrationsMecaniques()
    {
        return $this->vibrations_mecaniques;
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
        $this->vitesse_vibration = $vitesseVibration;

        return $this;
    }

    /**
     * Get vitesseVibration
     *
     * @return text
     */
    public function getVitesseVibration()
    {
        return $this->vitesse_vibration;
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
        $this->tenue_cap = $tenueCap;

        return $this;
    }

    /**
     * Get tenueCap
     *
     * @return text
     */
    public function getTenueCap()
    {
        return $this->tenue_cap;
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
        $this->freinage_ligne_droite = $freinageLigneDroite;

        return $this;
    }

    /**
     * Get freinageLigneDroite
     *
     * @return text
     */
    public function getFreinageLigneDroite()
    {
        return $this->freinage_ligne_droite;
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
        $this->presence_bruits_etrangers = $presenceBruitsEtrangers;

        return $this;
    }

    /**
     * Get presenceBruitsEtrangers
     *
     * @return text
     */
    public function getPresenceBruitsEtrangers()
    {
        return $this->presence_bruits_etrangers;
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
        $this->regulateur_limiteur_vitesse = $regulateurLimiteurVitesse;

        return $this;
    }

    /**
     * Get regulateurLimiteurVitesse
     *
     * @return text
     */
    public function getRegulateurLimiteurVitesse()
    {
        return $this->regulateur_limiteur_vitesse;
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
        $this->odeurs_exterieur = $odeursExterieur;

        return $this;
    }

    /**
     * Get odeursExterieur
     *
     * @return text
     */
    public function getOdeursExterieur()
    {
        return $this->odeurs_exterieur;
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
        $this->demarrage_vehicule_chaud = $demarrageVehiculeChaud;

        return $this;
    }

    /**
     * Get demarrageVehiculeChaud
     *
     * @return text
     */
    public function getDemarrageVehiculeChaud()
    {
        return $this->demarrage_vehicule_chaud;
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
        $this->voyants_allumes = $voyantsAllumes;

        return $this;
    }

    /**
     * Get voyantsAllumes
     *
     * @return text
     */
    public function getVoyantsAllumes()
    {
        return $this->voyants_allumes;
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
        $this->nom_voyants_allumes = $nomVoyantsAllumes;

        return $this;
    }

    /**
     * Get nomVoyantsAllumes
     *
     * @return text
     */
    public function getNomVoyantsAllumes()
    {
        return $this->nom_voyants_allumes;
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
        $this->commentaire_test_routier = $commentaireTestRoutier;

        return $this;
    }

    /**
     * Get commentaireTestRoutier
     *
     * @return text
     */
    public function getCommentaireTestRoutier()
    {
        return $this->commentaire_test_routier;
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
        $this->notation_vendeur = $notationVendeur;

        return $this;
    }

    /**
     * Get notationVendeur
     *
     * @return text
     */
    public function getNotationVendeur()
    {
        return $this->notation_vendeur;
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
        $this->achat_securise = $achatSecurise;

        return $this;
    }

    /**
     * Get achatSecurise
     *
     * @return text
     */
    public function getAchatSecurise()
    {
        return $this->achat_securise;
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
        $this->kilometrage_coherent = $kilometrageCoherent;

        return $this;
    }

    /**
     * Get kilometrageCoherent
     *
     * @return text
     */
    public function getKilometrageCoherent()
    {
        return $this->kilometrage_coherent;
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
        $this->commentaire_conclusion = $commentaireConclusion;

        return $this;
    }

    /**
     * Get commentaireConclusion
     *
     * @return text
     */
    public function getCommentaireConclusion()
    {
        return $this->commentaire_conclusion;
    }
}
