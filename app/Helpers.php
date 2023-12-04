<?php

class helper{
    public $number_key = '9qrE9KWANsXXHCA9';
	public $wa_api = "X2Y7UZOZT0WVQVTG";

    public static function send_wa($data){

        $number_key = '9qrE9KWANsXXHCA9';
        $wa_api = "X2Y7UZOZT0WVQVTG";

        $curl = curl_init();

		$dataSending = array();
		$dataSending["api_key"] = $wa_api;
		$dataSending["number_key"] = $number_key;
		$dataSending["phone_no"] = $data['no_wa'];
		$dataSending["message"] = $data['pesan'];

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://api.watzap.id/v1/send_message',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => json_encode($dataSending),
			CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json'
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		return $response;
    }
    public static function get_photo($location,$file){
        $var['santri_photo'] = 'https://manajemen.ppatq-rf.id/assets/img/avatars/1.png';
        if (!empty($file) && $location == 2) {
            $var['santri_photo'] = 'https://manajemen.ppatq-rf.id/assets/img/upload/photo/' . $file;
        } elseif (!empty($file) && $location== 1) {
            $var['santri_photo'] = 'https://payment.ppatq-rf.id/assets/upload/user/' . $file;
        }
        return $var['santri_photo'];
    }
}
