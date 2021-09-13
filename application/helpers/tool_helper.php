<?php

/**
 * @param $str
 * @param array $options
 * @return string
 */
function seflink($str, $options = array())
{
	$str = mb_convert_encoding((string) $str, 'UTF-8', mb_list_encodings());
	$defaults = array(
		'delimiter' => '-',
		'limit' => null,
		'lowercase' => true,
		'replacements' => array(),
		'transliterate' => true
	);
	$options = array_merge($defaults, $options);
	$char_map = array(
		// Latin
		'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C',
		'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
		'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő' => 'O',
		'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ý' => 'Y', 'Þ' => 'TH',
		'ß' => 'ss',
		'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c',
		'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
		'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő' => 'o',
		'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ' => 'th',
		'ÿ' => 'y',
		// Latin symbols
		'©' => '(c)',
		// Greek
		'Α' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ' => '8',
		'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π' => 'P',
		'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
		'Ά' => 'A', 'Έ' => 'E', 'Ί' => 'I', 'Ό' => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ' => 'I',
		'Ϋ' => 'Y',
		'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ' => '8',
		'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π' => 'p',
		'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
		'ά' => 'a', 'έ' => 'e', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς' => 's',
		'ϊ' => 'i', 'ΰ' => 'y', 'ϋ' => 'y', 'ΐ' => 'i',
		// Turkish
		'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G',
		'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g',
		// Russian
		'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
		'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
		'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
		'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
		'Я' => 'Ya',
		'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
		'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
		'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
		'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
		'я' => 'ya',
		// Ukrainian
		'Є' => 'Ye', 'І' => 'I', 'Ї' => 'Yi', 'Ґ' => 'G',
		'є' => 'ye', 'і' => 'i', 'ї' => 'yi', 'ґ' => 'g',
		// Czech
		'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U',
		'Ž' => 'Z',
		'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
		'ž' => 'z',
		// Polish
		'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'e', 'Ł' => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź' => 'Z',
		'Ż' => 'Z',
		'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź' => 'z',
		'ż' => 'z',
		// Latvian
		'Ā' => 'A', 'Č' => 'C', 'Ē' => 'E', 'Ģ' => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ' => 'N',
		'Š' => 'S', 'Ū' => 'u', 'Ž' => 'Z',
		'ā' => 'a', 'č' => 'c', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n',
		'š' => 's', 'ū' => 'u', 'ž' => 'z'
	);
	$str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
	if ($options['transliterate']) {
		$str = str_replace(array_keys($char_map), $char_map, $str);
	}
	$str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
	$str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
	$str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
	$str = trim($str, $options['delimiter']);
	return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
}


////////////////////////////////
function GetIP()
{
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

function getAyName($value)
{
	$value = explode('.', $value);
	switch ($value[1]) {
		case '01':
		return $value[0] . ' Ocak ' . $value[2];
		break;
		case '02':
		return $value[0] . ' Şubat ' . $value[2];
		break;
		case '03':
		return $value[0] . ' Mart ' . $value[2];
		break;
		case '04':
		return $value[0] . ' Nisan ' . $value[2];
		break;
		case '05':
		return $value[0] . ' Mayıs ' . $value[2];
		break;
		case '06':
		return $value[0] . ' Haziran ' . $value[2];
		break;
		case '07':
		return $value[0] . ' Temmuz ' . $value[2];
		break;
		case '08':
		return $value[0] . ' Ağustos ' . $value[2];
		break;
		case '09':
		return $value[0] . ' Eylül ' . $value[2];
		break;
		case '10':
		return $value[0] . ' Ekim ' . $value[2];
		break;
		case '11':
		return $value[0] . ' Kasım ' . $value[2];
		break;
		case '12':
		return $value[0] . ' Aralık ' . $value[2];
		break;
		default:
		return '';
		break;
	}
}

function user_name($id)

{
	$ci = &get_instance();
	$sonuc = $ci->db->from('kullanicilar')
	->where('id', $id)->get()->row();
	return $sonuc->adSoyad;

}

function SayiVer($from)
{
	$ci = &get_instance();
	$sonuc = $ci->db->select('*')->from($from)->count_all_results();
	return $sonuc;
}

function raporSil($id)
{
	$ci = &get_instance();
	$sonuc = $ci->db->from('raporlar')
	->where('id', $id)->get()->row();
	return $sonuc->dosya;
}
function dersNotSil($id)
{
	$ci = &get_instance();
	$sonuc = $ci->db->from('dersNot')
	->where('id', $id)->get()->row();
	return $sonuc->dosya;
}
function odevRaporSil($id)
{
	$ci = &get_instance();
	$sonuc = $ci->db->from('odev_rapor')
	->where('id', $id)->get()->row();
	return $sonuc->dosya;
}
function haftaOgrenciDurumTekil($id, $haftaID, $from)
{
	$ci = &get_instance();
	$sonuc = $ci->db->select('*')->from($from)
	->where('oID', $id)->where('durum',1)->where('haftaID', $haftaID)->get()->row();
	return $sonuc;
}

function haftaRapor($id, $haftaID, $from)
{
	$ci = &get_instance();
	$sonuc = $ci->db->select('*')->from($from)
	->where('oID', $id)->where('haftaID', $haftaID)->get()->row();
	return $sonuc;
}

function projeYok($id)
{
	$ci = &get_instance();
	$sonuc = $ci->db->select('*')->from('projeler')
	->where('o_id', $id)->get()->row();
	return $sonuc;
}

function odevYok($ogrenciId,$haftaId)
{
	$ci = &get_instance();
	$sonuc = $ci->db->select('*')->from('odev_rapor')
	->where('ogrenciId', $ogrenciId)->where('haftaId', $haftaId)->get()->row();
	return $sonuc;
}
function resetConfirmation($email, $kod)
{

	$ci = &get_instance();
	$sonuc = $ci->db->from('kullanicilar')
	->where('email', $email)->where('kod', $kod)->get()->row();
	if (isset($sonuc)) {
		return 1;
	} else {
		return 0;
	}
}

function resimSil($id,$from){
	$ci =& get_instance();
	$sonuc = $ci->db->from($from)
	->where('id',$id)->get()->row();
	return $sonuc->resim;
}

function dosyaCvSil($id){
	$ci =& get_instance();
	$sonuc = $ci->db->from('hakkimizda')
	->where('id',$id)->get()->row();
	return $sonuc->dosya;
}

function mailGonder($email, $subject, $message)
{
	$ci = &get_instance();
	$ci->load->library('email');  //email kütüphanesini includ ettik.
	$sonuc = $ci->dtbs->listele('iletisim');
	$data['bilgi'] 	= $sonuc;
	$smtp_pass     	= $data['bilgi']['0']['mailPass'];
	$smtp_host     	= $data['bilgi']['0']['host'];
	$smtp_user     	= $data['bilgi']['0']['smtpUser'];
	$protocol      	= $data['bilgi']['0']['protocol'];
	$port          	= $data['bilgi']['0']['mailPort'];
	$config['protocol']  =   $protocol;     //mail protokolü
	$config['smtp_host'] =   $smtp_host;   //web sunucu bilgileri
	$config['smtp_user'] =   $smtp_user;  //web mail adresi
	$config['smtp_pass'] =   $smtp_pass; //web mail şifresi
	$config['smtp_port'] =   $port;     //web mail smtp portu
	$config['mailtype']  =   'html';
	$config['charset']   =   'utf-8';
	$config['wordwrap'] = true;
	$config['starttls'] = true;
	$config['newline'] = '\r\n';
	$url = base_url();
	$yil = date('Y');
	$content = '
	<!DOCTYPE html>
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<style type="text/css">
	@media screen {
		@font-face {
			font-family: "Lato";
			font-style: normal;
			font-weight: 400;
			src: local("Lato Regular"), local("Lato-Regular"), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format("woff");
		}
		@font-face {
			font-family: "Lato";
			font-style: normal;
			font-weight: 700;
			src: local(Lato Bold), local("Lato-Bold"), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format(woff);
		}
		@font-face {
			font-family: "Lato";
			font-style: italic;
			font-weight: 400;
			src: local("Lato Italic"), local("Lato-Italic"), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format("woff");
		}
		@font-face {
			font-family: "Lato";
			font-style: italic;
			font-weight: 700;
			src: local("Lato Bold Italic"), local("Lato-BoldItalic"), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format("woff");
		}
	}
	/* CLIENT-SPECIFIC STYLES */
	body,
	table,
	td,
	a {
		-webkit-text-size-adjust: 100%;
		-ms-text-size-adjust: 100%;
	}

	table,
	td {
		mso-table-lspace: 0pt;
		mso-table-rspace: 0pt;
	}

	img {
		-ms-interpolation-mode: bicubic;
	}

	/* RESET STYLES */
	img {
		border: 0;
		height: auto;
		line-height: 100%;
		outline: none;
		text-decoration: none;
	}

	table {
		border-collapse: collapse !important;
	}

	body {
		height: 100% !important;
		margin: 0 !important;
		padding: 0 !important;
		width: 100% !important;
	}

	/* iOS BLUE LINKS */
	a[x-apple-data-detectors] {
		color: inherit !important;
		text-decoration: none !important;
		font-size: inherit !important;
		font-family: inherit !important;
		font-weight: inherit !important;
		line-height: inherit !important;
	}

	/* MOBILE STYLES */
	@media screen and (max-width:600px) {
		h1 {
			font-size: 32px !important;
			line-height: 32px !important;
		}
	}
	/* ANDROID CENTER FIX */
	div[style*="margin: 16px 0;"] {
		margin: 0 !important;
	}
	</style>
	</head>
	<body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<!-- LOGO -->
	<tr>
	<td bgcolor="#ff7361" align="center">
	<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
	<tr>
	<td align="center" valign="top" style="padding: 40px 10px 40px 10px;"> 
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td bgcolor="#ff7361" align="center" style="padding: 0px 10px 0px 10px;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
	<tr>
	<td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
	<h1 style="font-size:26px; font-weight: 400; margin: 2;">' . $subject . '</h1>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
	<tr>
	<td bgcolor="#ffffff" align="center" style="padding: 20px 30px 40px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
	<p style="margin: 0;">' . $message . '</p>
	</td>
	</tr>
	<tr>
	<td bgcolor="#ffffff" align="left">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td bgcolor="#f4f4f4" align="center" style="padding: 10px 10px 30px 10px;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
	</table>
	</td>
	</tr>
	</table>
	</body>
	</html>
	</body>
	</html>';
	$ci->email->initialize($config); //sunucu bilgilerini email kütüphanesine gönderdik
	$ci->email->from(($smtp_user), ('DBS')); //mail gönderen bilgileri
	$ci->email->to($email);
	$ci->email->subject($subject); //Formdan gelen mail konusu
	$ci->email->message($content); //Formdan gelen mail içeriği
	$send = $ci->email->send();
	return $send;
}




