<?php
require '../Model/Offer.php';
require '../Model/OfferAd.php';
require '../Model/Company.php';
require '../Model/OfferClass.php';

class ManagerOffer
{
    private Offer $off;
    private OfferAd $off_ad;
    private Company $cmp;
    private OfferClass $off_class;

    public function addOffer($post, $skill, $duration, $remu, $nb_place, $company, $tb_ad, $tb_class)
    {
        // TB Offer
        $off = new Offer();
        $off->setPost($post);
        $off->setSkill($skill);
        $off->setDuration($duration);
        $off->setDate('NOW()');
        $off->setRemu($remu);
        $off->setNb_place($nb_place);

        // TB Company
        $cmp = new Company();
        $id_cmp = $cmp->selectIdCmp($company);
        $off->setId_cmp($id_cmp);

        $id_offer = $off->createOffer();

        // TB Offer_Ad
        $off_ad = new OfferAd();
        $off_ad->setId_offer($id_offer);
        foreach ($tb_ad as $city)
        {
            $off_ad->setCity($city);
            $id_ad = $off_ad->selectIdAdd();
            $off_ad->setId_ad($id_ad);
            $off_ad->createOfferAd();
        }

        // TB Offer_Class
        $off_class = new OfferClass();
        $off_class->setId_offer($id_offer);
        foreach ($tb_class as $class)
        {
            $off_class->setClass($class);
            $off_class->createOfferClass();
        }
    }

    public function suppOffer($id_offer)
    {
        // TB Offer
        $off = new Offer();
        $off->setId_offer($id_offer);
        $off->deleteOffer();

        // TB Offer_Class
        $off_class = new OfferClass();
        $off_class->setId_offer($id_offer);
        $off_class->deleteOfferClass();

        // TB Offer_Ad
        $off_ad = new OfferAd();
        $off_ad->setId_offer($id_offer);
        $off_ad->deleteOfferAd();
    }
}

?>