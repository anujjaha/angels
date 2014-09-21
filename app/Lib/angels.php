<?php
class angels {

const APP_USER_ROLE_ADMIN = 1;
const APP_USER_ROLE_SITEUSER = 0;

const APP_USER_STATUS_ACTIVE = 1;
const APP_USER_STATUS_INACTIVE = 0;

const APP_MEMORIAL_STATUS_ACTIVE = 1;
const APP_MEMORIAL_STATUS_INACTIVE = 0;

const APP_TRIBUTE_STATUS_ACTIVE = 1;
const APP_TRIBUTE_STATUS_INACTIVE = 0;

const APP_GIFT_STATUS_ACTIVE = 1;
const APP_GIFT_STATUS_INACTIVE = 0;

const APP_GENDER_HIDE = 0;
const APP_GENDER_MALE = 1;
const APP_GENDER_FEMALE = 2;

    static function angels_title() {
        $title = array(""=>'Select Title',
                       'Mr' => 'Mr.',
                       'Mrs' => 'Mrs.',
                       'Ms' => 'Ms.',
                       'Dr' => 'Dr.',
                       'Baby' => 'Baby',
                       'Angel' => 'Angel',
                       'My Angel' => 'My Angel',
                       'Little Miss' => 'Little Miss.',
                    );
        return $title;
    }
    
    static function date_days() {
        $days = array( '1' => '1',
                        '2' => '2','3' => '3','4' => '4','5' => '5',
                        '6' => '6','7' => '7','8' => '8','9' => '9',
                        '10' => '10','11' => '11','12' => '12','13' => '13',
                        '14' => '14','15' => '15','16' => '16','17' => '17',
                        '18' => '18','19' => '19','20' => '20','21' => '21',
                        '22' => '22','23' => '23','24' => '24','25' => '25',
                        '26' => '26','27' => '27','28' => '28','29' => '29',
                        '30' => '30','31' => '31'
                    );
        return $days;
    }
    
    static function date_months() {
        $months = array( 1 => 'January' ,
                         2 => 'February' ,
                         3 => 'March' ,
                         4 => 'April' ,
                         5 => 'May' ,
                         6 => 'June' ,
                         7 => 'July' ,
                         8 => 'August' ,
                         9 => 'September' ,
                         10 => 'Octomber' ,
                         11 => 'November' ,
                         12 => 'December' ,
                        );
        return $months;
    }
    
    static function date_year() {
        $year = array( '1998' => '1998' , '1999' => '1999','2000' => '2000');
        return $year;
    }
  
    static function random_string($strlen=6,$type='mix') {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        if($type == 'numeric') {
            $characters = '0123456789';
        }
        $randomString = '';
        for ($i = 0; $i < $strlen; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
        }

}
?>