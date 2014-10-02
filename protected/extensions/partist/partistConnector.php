<?php
class PartistConnector
{
    public static function getGroups()
    {
        $cacheKey = 'partist_komimport_getgroupequipment';
        $cached = \Yii::app()->getCache()->get($cacheKey);
        if (false === $cached) {
            $data = PartistConnector::file_contents('http://partist.ru/connector.php?type=komimport&request=getgroupequipment');
            $cached = $data;
            Yii::app()->getCache()->set($cacheKey, $cached, 60 * 60 * 4); // 4 Hours
        }
        return $cached;
    }

    public static function getOffers()
    {
        $cacheKey = 'partist_komimport_getoffersequipment';
        $cached = \Yii::app()->getCache()->get($cacheKey);
        if (false === $cached) {
            $data = \PartistConnector::file_contents('http://partist.ru/connector.php?type=komimport&request=getoffersequipment');

            foreach ($data['CONTENT'] as &$row) {
                /*$image = array();

                if (count($row['OE_IMAGES']['IMAGES'])) {
                    $image = $row['OE_IMAGES']['IMAGES'][key($row['OE_IMAGES']['IMAGES'])];
                } else if (count($row['M_IMAGES']['IMAGES'])) {
                    $image = $row['M_IMAGES']['IMAGES'][key($row['M_IMAGES']['IMAGES'])];
                };*/

                /* $webRoot = Yii::getPathOfAlias('webroot');

                 $uploadDir = $webRoot . '/uploads/';
                 if (is_array($row['OE_IMAGES']['IMAGES'])) {
                     foreach ($row['OE_IMAGES']['IMAGES'] as $image) {
                         if (!file_exists($uploadDir . $image['F_directory'] . '/' . $image['F_name'])) {
                             @mkdir($uploadDir . $image['F_directory'], 0777, true);
                             $file = file_get_contents('http://partist.ru/' . $image['F_directory'] . '/' . $image['F_name']);
                             file_put_contents($uploadDir . $image['F_directory'] . '/' . $image['F_name'], $file);
                         }
                     }
                 }
                 if (is_array($row['M_IMAGES']['IMAGES'])) {
                     foreach ($row['M_IMAGES']['IMAGES'] as $image) {

                         if (!file_exists($uploadDir . $image['F_directory'] . '/' . $image['F_name'])) {
                             @mkdir($uploadDir . $image['F_directory'], 0777, true);
                             $file = file_get_contents('http://partist.ru/' . $image['F_directory'] . '/' . $image['F_name']);
                             file_put_contents($uploadDir . $image['F_directory'] . '/' . $image['F_name'], $file);
                         }
                     }
                 }
                 if (is_array($row['M_IMAGES']['OTHERS'])) {
                     foreach ($row['M_IMAGES']['OTHERS'] as $image) {

                         if (!file_exists($uploadDir . $image['F_directory'] . '/' . $image['F_name'])) {
                             @mkdir($uploadDir . $image['F_directory'], 0777, true);
                             $file = file_get_contents('http://partist.ru/' . $image['F_directory'] . '/' . $image['F_name']);
                             file_put_contents($uploadDir . $image['F_directory'] . '/' . $image['F_name'], $file);
                         }
                     }
                 }*/

                //$row['_image'] = $image;

                //$row['_TE_name'] = \PartistConnector::makeSingle($row['TE_name']);
            }
            $cached = $data['CONTENT'];

            Yii::app()->getCache()->set($cacheKey, $cached, 60 * 60 * 4); // 4 Hours
        }

        foreach ($cached as &$row) {
            //$row['OE_caption'] = substr($row['OE_caption'], 0, 230) . '<span class="rmore">' . substr($row['OE_caption'], 230) . '</span>';
        }
        return $cached;
    }

    public static function getOffersSpecial()
    {
        $cacheKey = 'partist_komimport_getoffersequipment_special';
        $cached = \Yii::app()->getCache()->get($cacheKey);
        if (false === $cached) {
            $data = \PartistConnector::file_contents('http://partist.ru/connector.php?type=komimport&request=getoffersequipment&special_offer=1');

            foreach ($data['CONTENT'] as &$row) {
                $row['_TE_name'] = \PartistConnector::makeSingle($row['TE_name']);
            }
            $cached = $data['CONTENT'];
            Yii::app()->getCache()->set($cacheKey, $cached, 60 * 60 * 4); // 4 Hours
        }
        return $cached;
    }


    public static function findParts($term)
    {
        $country = 'RU';
        $parts = array();

        $data = \PartistConnector::file_contents("http://partist.ru/connector.php?type=client_offers&catalogue_nums[]=$term&country=$country");
        //$data = \PartistConnector::file_contents("http://partist.ru/connector.php?type=find_parts&catalogue_nums[]=$term&country=$country");

        if ($data != false) {
            foreach ($data['data'] as $part) {
                $parts[] = $part;
            }
        }
        //print_r($parts);
        return $parts;
    }


    public static function file_contents($path)
    {
        $str = @file_get_contents($path);
        if ($str === FALSE) {
            return false;
        } else {
            $JSON = @json_decode($str, true);
            if ($JSON == null) return false;
            return $JSON;
        }
    }

    public static function makeSingle($word)
    {
        /*try {
            Yii::import('ext.phpmorphy.common', true);

            $morphy = new phpMorphy(
                Yii::app()->basePath . '/extensions/phpmorphy/dicts',
                'ru_RU', array(
                    'storage' => PHPMORPHY_STORAGE_FILE,
                )
            );

            $data = $morphy->castFormByGramInfo(mb_strtoupper($word), 'С', array('ИМ', 'ЕД'), true);
            if (count($data) > 0 && count($data[0]) > 0) return $data[0]; else return $word;

        } catch (Exception $e) {
            return $word;
        } */
    }
}