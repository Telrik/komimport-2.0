<?php
class PartistConnector
{
    //$rez = custom_get_reguest('type=komimport&request=getgroupequipment');
    //custom_get_groups($rez);
    //$rez = custom_get_reguest('type=komimport&request=getbrands');
    //custom_get_brands($rez);
    //$rez = custom_get_reguest('type=komimport&request=gettypeequipment');
    //custom_get_subgroups($rez);
    //$rez = custom_get_reguest('type=komimport&request=getoffersequipment'); //&mark[]=38 &mark[]=1
    //$data = \PartistConnector::file_contents("http://partist.ru/connector.php?type=find_parts&catalogue_nums[]=$term&country=$country");

    public static function fullLogin($form)
    {
        $login = $form['email'];
        $password = $form['password'];

        $auth = \PartistConnector::authorization($login, $password);

        if ($auth['status'] == 'ok') {
            $email = $auth['data']['email'];

            $puser = User::model()->active()->find(
                array(
                    'condition' => 'email = :username OR nick_name = :username',
                    'params' => array(
                        ':username' => $email
                    )
                )
            );

            if (null === $puser) {
                // Создаём нового пользователя
                $reg_form = new RegistrationForm();
                $reg_form->disableCaptcha = true;
                $reg_form->nick_name = $login;
                $reg_form->email = $email;
                $reg_form->password = $password;

                if ($puser = Yii::app()->userManager->createUser($reg_form)) {
                    $puser->first_name = $auth['data']['name'];
                    $puser->middle_name = $auth['data']['fname'];
                    $puser->last_name = $auth['data']['family'];
                    $puser->status = User::STATUS_ACTIVE;
                    $puser->email_confirm = User::EMAIL_CONFIRM_YES;
                    $puser->save();
                } else {
                    $form->addError('email', Yii::t('main', 'Partist auth go wrong!'));
                }

            } else {
                //Одностороняя синхронизация
                $puser->first_name = $auth['data']['name'];
                $puser->middle_name = $auth['data']['fname'];
                $puser->last_name = $auth['data']['family'];
                $puser->hash = Yii::app()->userManager->hasher->hashPassword($password);

                $puser->save();
            }

            // Обновляем все данные
            $puser->partist = json_encode($auth['data']);
            $puser->save();
        }

        // Array ( [status] => ok [message] => [data] => Array ( [id] => 1660 [id_author] => 109833 [family] => [name] => Федр [fname] => [email] => fs@m7.ru [SID] => 45e150ddd60dc6565f6686a970a24b6c
        // [FIRMS_DATA] => Array ( [1688] => Array ( [id] => 1688 [name] => telrik ) ) ) )
    }


    public static function myoffers($sid, $type = 'myoffers', $action = 'showmyoffers')
    {
        //echo "http://partist.ru/connector.php?type=$type&action=$action&SID=$sid";
        $data = PartistConnector::file_contents("http://partist.ru/connector.php?type=$type&action=$action&SID=$sid");
        return $data;
    }

    public static function authorization($email, $password, $type = 'user', $action = 'authorization')
    {
        //echo "http://partist.ru/connector.php?type=$type&action=$action&email=$email&password=$password";
        $data = PartistConnector::file_contents("http://partist.ru/connector.php?type=$type&action=$action&email=$email&password=$password");
        return $data;
    }

    public static function getTypesEquipment1()
    {
        $cacheKey = 'partist_komimport_gettypes_equipment';
        $cached = \Yii::app()->getCache()->get($cacheKey);
        if (false === $cached) {
            $data = PartistConnector::file_contents('http://partist.ru/connector.php?type=komimport&request=gettypeequipment&sql_order_pole=TE_name&&sql_order_direction=ASC');
            $cached = $data;
            Yii::app()->getCache()->set($cacheKey, $cached, 60 * 60 * 4); // 4 Hours
        }
        $cached = $cached['CONTENT'];
        return $cached;
    }


    public static function getTypesEquipment()
    {
        $cacheKey = 'partist_komimport_gettypes_equipment';
        $cached = \Yii::app()->getCache()->get($cacheKey);
        if (false === $cached) {
            $data = PartistConnector::file_contents('http://partist.ru/connector.php?type=komimport&request=gettypeequipment&sql_order_pole=TE_name&&sql_order_direction=ASC');
            $cached = $data;
            Yii::app()->getCache()->set($cacheKey, $cached, 60 * 60 * 4); // 4 Hours
        }
        $cached = $cached['CONTENT'];
        return $cached;
    }

    public static function getBrands()
    {
        $cacheKey = 'partist_komimport_getbrands';
        $cached = \Yii::app()->getCache()->get($cacheKey);
        if (false === $cached) {
            $data = PartistConnector::file_contents('http://partist.ru/connector.php?type=komimport&request=getbrands&sql_order_pole=B_id&sql_order_direction=ASC');
            $cached = $data;
            Yii::app()->getCache()->set($cacheKey, $cached, 60 * 60 * 4); // 4 Hours
        }
        $cached = $cached['CONTENT'];
        return $cached;
    }

    public static function getGroups()
    {
        $cacheKey = 'partist_komimport_getgroups';
        $cached = \Yii::app()->getCache()->get($cacheKey);
        if (false === $cached) {
            $data = PartistConnector::file_contents('http://partist.ru/connector.php?type=komimport&request=getgroupequipment');
            $cached = $data;
            Yii::app()->getCache()->set($cacheKey, $cached, 60 * 60 * 4); // 4 Hours
        }
        $cached = $cached['CONTENT'];
        return $cached;
    }

    public static function getOfferEquipmentByParams($mark, $type, $num_on_page = 50, $page = 1)
    {
        $params = '&num_on_page=' . $num_on_page . '&page=' . $page . '&sql_order_direction=DESC'; //&sql_order_pole=OE_id
        if ($mark != null) $params .= '&mark[]=' . $mark;
        if ($type != null) $params .= '&type_e[]=' . $type;

        $cacheKey = 'partist_komimport_getoffersequipment_' . $params;
        $cached = \Yii::app()->getCache()->get($cacheKey);

        if (false === $cached) {
            $data = \PartistConnector::file_contents('http://partist.ru/connector.php?type=komimport&request=getoffersequipment' . $params);
            $cached = $data;
            Yii::app()->getCache()->set($cacheKey, $cached, 60 * 60 * 4); // 4 Hours
        }

        //print_r($cached);

        if (count($cached['CONTENT']) > 1)
            foreach ($cached['CONTENT'] as &$row) {
                $row['OE_caption_CUT'] = \PartistConnector::cutDescription($row['OE_caption'], $row['M_name']);
            }
        return $cached;
    }

    public static function getOfferEquipmentByID($id)
    {
        $cacheKey = 'partist_komimport_getoffersequipment_id_' . $id;
        $cached = \Yii::app()->getCache()->get($cacheKey);
        if (false === $cached) {
            $data = \PartistConnector::file_contents('http://partist.ru/connector.php?type=komimport&request=getoffersequipment&id[]=' . $id);
            $cached = $data;
            Yii::app()->getCache()->set($cacheKey, $cached, 60 * 60 * 4); // 4 Hours
        }

        $cached = $cached['CONTENT'];

        foreach ($cached as &$row) {
            $row['OE_caption_CUT'] = \PartistConnector::cutDescription($row['OE_caption'], $row['M_name']);
        }
        return $cached;
    }


    public static function getOffersEquipmentSpecial($num_on_page = 40)
    {
        $params = '&num_on_page=' . $num_on_page . '&special_offer=1&sql_order_direction=DESC';

        $cacheKey = 'partist_komimport_getoffersequipment_special_' . $params;
        $cached = \Yii::app()->getCache()->get($cacheKey);

        if (false === $cached) {
            $data = \PartistConnector::file_contents('http://partist.ru/connector.php?type=komimport&request=getoffersequipment' . $params);
            $cached = $data;
            Yii::app()->getCache()->set($cacheKey, $cached, 60 * 60 * 4); // 4 Hours
        }

        $cached = $cached['CONTENT'];

        foreach ($cached as &$row) {
            $row['OE_caption_CUT'] = \PartistConnector::cutDescription($row['OE_caption'], $row['M_name']);
        }
        return $cached;
    }

    public static function getOffersEquipmentByPage($page = 1)
    {
        $cacheKey = 'partist_komimport_getoffersequipment_page_' . $page;
        $cached = \Yii::app()->getCache()->get($cacheKey);
        if (false === $cached) {
            $data = \PartistConnector::file_contents('http://partist.ru/connector.php?type=komimport&request=getoffersequipment&page=' . $page);
            $cached = $data['CONTENT'];
            Yii::app()->getCache()->set($cacheKey, $cached, 60 * 60 * 4); // 4 Hours
        }

        foreach ($cached as &$row) {
            $row['OE_caption_CUT'] = \PartistConnector::cutDescription($row['OE_caption'], $row['M_name']);
        }
        return $cached;
    }

    public static function findParts($term)
    {
        $country = 'RU';
        $parts = array();

        $data = \PartistConnector::file_contents("http://partist.ru/connector.php?type=client_offers&catalogue_nums[]=$term&country=$country");

        if ($data != false) {
            foreach ($data['data'] as $part) {
                $parts[] = $part;
            }
        }
        return $parts;
    }

    /* utils */

    public static function cutDescription($text, $title, $len = 100)
    {
        $text = strip_tags($text);
        $text = htmlspecialchars($text);

        $title = strip_tags($title);
        $title = htmlspecialchars($title);

        $promo = \PartistConnector::truncate($text, 100, '...', false);

        if (strlen($promo) < strlen($text)) {
            return '<a tabindex="0" class="readmore" data-toggle="popover" data-container="body" data-placement="auto top" data-trigger="hover focus" title="' . $title . '" data-content="' . $text . '">' . $promo . '</a>';
        }
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

    public static function truncate($text, $length = 100, $ending = '...', $exact = true, $considerHtml = false)
    {
        if (is_array($ending)) {
            extract($ending);
        }
        if ($considerHtml) {
            if (mb_strlen(preg_replace('/<.*?>/', '', $text)) <= $length) {
                return $text;
            }
            $totalLength = mb_strlen($ending);
            $openTags = array();
            $truncate = '';
            preg_match_all('/(<\/?([\w+]+)[^>]*>)?([^<>]*)/', $text, $tags, PREG_SET_ORDER);
            foreach ($tags as $tag) {
                if (!preg_match('/img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param/s', $tag[2])) {
                    if (preg_match('/<[\w]+[^>]*>/s', $tag[0])) {
                        array_unshift($openTags, $tag[2]);
                    } else if (preg_match('/<\/([\w]+)[^>]*>/s', $tag[0], $closeTag)) {
                        $pos = array_search($closeTag[1], $openTags);
                        if ($pos !== false) {
                            array_splice($openTags, $pos, 1);
                        }
                    }
                }
                $truncate .= $tag[1];

                $contentLength = mb_strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|&#x[0-9a-f]{1,6};/i', ' ', $tag[3]));
                if ($contentLength + $totalLength > $length) {
                    $left = $length - $totalLength;
                    $entitiesLength = 0;
                    if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|&#x[0-9a-f]{1,6};/i', $tag[3], $entities, PREG_OFFSET_CAPTURE)) {
                        foreach ($entities[0] as $entity) {
                            if ($entity[1] + 1 - $entitiesLength <= $left) {
                                $left--;
                                $entitiesLength += mb_strlen($entity[0]);
                            } else {
                                break;
                            }
                        }
                    }

                    $truncate .= mb_substr($tag[3], 0, $left + $entitiesLength);
                    break;
                } else {
                    $truncate .= $tag[3];
                    $totalLength += $contentLength;
                }
                if ($totalLength >= $length) {
                    break;
                }
            }

        } else {
            if (mb_strlen($text) <= $length) {
                return $text;
            } else {
                $truncate = mb_substr($text, 0, $length - strlen($ending));
            }
        }
        if (!$exact) {
            $spacepos = mb_strrpos($truncate, ' ');
            if (isset($spacepos)) {
                if ($considerHtml) {
                    $bits = mb_substr($truncate, $spacepos);
                    preg_match_all('/<\/([a-z]+)>/', $bits, $droppedTags, PREG_SET_ORDER);
                    if (!empty($droppedTags)) {
                        foreach ($droppedTags as $closingTag) {
                            if (!in_array($closingTag[1], $openTags)) {
                                array_unshift($openTags, $closingTag[1]);
                            }
                        }
                    }
                }
                $truncate = mb_substr($truncate, 0, $spacepos);
            }
        }

        $truncate .= $ending;

        if ($considerHtml) {
            foreach ($openTags as $tag) {
                $truncate .= '</' . $tag . '>';
            }
        }

        return $truncate;
    }

    /*
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
     }

    //$row['_image'] = $image;

    //$row['_TE_name'] = \PartistConnector::makeSingle($row['TE_name']);
    }*/
}