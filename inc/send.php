<?php
add_action( 'wp_ajax_applicant', 'applicant');
add_action( 'wp_ajax_nopriv_applicant', 'applicant');

function applicant(){
    

    // Telegram
    $token = "746278511:AAGf5SAqJG7mEGzoDJLXA3Z8ERW_LCttqVY";
    $chat_ids = ["667322034", "567420635", "433808969", "251475683"];

    function bc_clean($data){
        return htmlspecialchars( esc_attr( str_replace( array('<br>', '<span>', '</span>'), ' ', $_POST[$data] ) ) );
    };

    $bc_option_array = [
        bc_clean('option--1'), 
        bc_clean('option--2'), 
        bc_clean('option--3'), 
        bc_clean('option--4'), 
        bc_clean('option--5'), 
        bc_clean('option--6')
    ];

    function bc_option_func($array){
        $a = '';
        foreach ($array as $key => $value) {
            if(!empty($value)){
                $a .= $value.', ';
            }
        }
        return $a;
    };

    $bc_data_form = array(
        "Встановлення системи в " => bc_clean('rooms-one'),
        "Варіант "                => bc_clean('version-two'),
        "Тип системи "            => bc_clean('type-three'),
        "Ім`я "                   => bc_clean('name'),
        "Телефон "                => bc_clean('phone'),
        "E-mail "                 => bc_clean('email'),
        "Тарифний план "          => bc_clean('taryf'),
        "Місто "                  => bc_clean('city-five'),
        "Додаткові опції "        => bc_option_func($bc_option_array),
        "Вибраний подарунок "     => bc_clean('prize-seven')
    );
    
    if( !empty($bc_data_form) ) {
        foreach( $bc_data_form as $key => $value ) {
           if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "action") {
                $txt .= "<b>". $key . "</b> - " . $value ."%0A";
            }
        }
    }
    
    foreach ($chat_ids as $chat_id) {
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
    }

    wp_die();
}