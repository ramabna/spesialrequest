<?php
date_default_timezone_set('Asia/Jakarta');
include_once "funct1.php";
ulang:
// function change(){
os.system('clear');
echo "\e[96m            (SELAMAT DATANG BOSKUHH $input)               \n";
echo "\e[89m\n";
echo color("green","# # # # # # # # # # # # # # # # # # # # # # # \n");
echo color("yellow","[] Time : ".date('[d-m-Y] [H:i:s]')." \n");
echo color("purple","[] SCRIPT VOC 20+15+10+5 + 60% \n");
echo color("green","[] CARA MENULIS NOMOR PAKAI 62/08\n");
echo color("red","[] Created By Ramz Tutorial  \n");
echo color("nevy","[] Wa saya 081228333004 \n");
echo color("blue","[] SEMOGA CUAN 😎 \n");
echo color("green","[] JANGAN LUPA BERDOA SEBELUM CLAIM \n");
echo color("blue","[] SCRIPT PREMIUM RAMZ \n");
echo color("red","# # # # # # # # # # # # # # # # # # # # # # # \n");
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        echo color("green","Masukkan Nomor : ");
        // $no = trim(fgets(STDIN));
        $nohp = trim(fgets(STDIN));
        $nohp = str_replace("62","62",$nohp);
        $nohp = str_replace("(","",$nohp);
        $nohp = str_replace(")","",$nohp);
        $nohp = str_replace("-","",$nohp);
        $nohp = str_replace(" ","",$nohp);

        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            if (substr(trim($nohp),0,3)=='62') {
                $hp = trim($nohp);
            }
            else if (substr(trim($nohp),0,1)=='0') {
                $hp = '62'.substr(trim($nohp),1);
        }
         elseif(substr(trim($nohp), 0, 2)=='62'){
            $hp = '6'.substr(trim($nohp), 1);
        }
        else{
            $hp = '1'.substr(trim($nohp),0,13);
        }
    }
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$hp.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("purple"," Masukkan OTP..")."\n";
        otp:
        echo color("white"," Otp : ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("yellow","BERHASIL REGIST\n");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo color("green","+] Token : ".$token."\n\n");
        save("token.txt",$token); 
}
}

include "funct.php";
// function change()
{
echo ("        Proses menuju Token                  \n");

$frdy = new frdy();
/** 
@ step 1
return @type json contain <otpToken> 
*/
echo "NOMOR INPUT: ";
$phoneNumber = trim(fgets(STDIN));
echo $frdy->loginRequest($phoneNumber); 
/** 
@ step 2
return @type json contain <access_token> 
*/
echo "OTP: ";
$otpCode = trim(fgets(STDIN));
echo "OTP TOKEN: ";
$otpToken = trim(fgets(STDIN));
echo $frdy->getAuthToken($otpToken, $otpCode);


}
echo color("yellow","=====!=======!!========!!!=====!!!======\n");
         
         echo "\n".color("nevy"," Sedang Proses  ");
        for($a=1;$a<=3;$a++)
{
        echo color("red","💞💞  \n");
        sleep(1);
        }
date_default_timezone_set('Asia/Jakarta');
include_once ('funct2.php');
echo color("purple","                 CLAIM VOUCHER GOJEK                      \n");
echo color("blue","Copy Paste Token Yang Didapat Sebelumnya Di Atas   \n");
echo color("yellow","Masukkan Token: ");
$token = trim(fgets(STDIN));
        echo "\n".color("green","👌🍱 Ambil Voucer Go-Food 60% ");
        echo "\n".color("nevy","Intip Dulu ");
        for($a=1;$a<=3;$a++){
        echo color("blue","👀 ");
        sleep(20);
        }
        $code1 = requested('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"MAUGOFOOD1908"}');
        $message = fetch_value1($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","👍🙏 Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("red","☠️☠️  Message: ".$message);
	    gocar:
		echo "\n".color("green","👌🍱 Ambil Voucer Lagi");
        echo "\n".color("nevy","Intip Dulu  ");
        for($a=1;$a<=3;$a++){
        echo color("red","👀 ");
        sleep(1);
        }
        $code1 = requested('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"ALFAMERDEKA17"}');
        $message = fetch_value1($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","👍🙏 Message: ".$message);
        }else{
        echo "\n".color("red","-] Message: ".$message);
        sleep(3);
        $cekvoucher = requested('/gopoints/v3/wallet/vouchers?limit=13&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        echo "\n".color("yellow","💌Semoga Dapat🤝 ".$total." : ");
        echo "\n".color("red","                     1. ".$voucher1);
        echo "\n".color("nevy","                     2. ".$voucher2);
        echo "\n".color("green","                     3. ".$voucher3);
        echo "\n".color("blue","                     4. ".$voucher4);
        echo "\n".color("purple","                     5. ".$voucher5);
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
           
}

echo color("yellow","=====!=======!!========!!!=====!!!======\n");
         
         echo "\n".color("nevy"," Sedang claim 15k     ");
        for($a=1;$a<=3;$a++)
{
        echo color("red","💞💞  ");
        sleep(5);
        }

date_default_timezone_set('Asia/Jakarta');
include "funct3.php";
echo colorss("yellow","Masukkan Token: ");
$token = trim(fgets(STDIN));
        echo colorss("yellow","\n¤▬▬▬▬▬ππ▬▬▬▬▬▬ GAS BOSS ▬▬▬▬▬ππ▬▬▬▬▬▬¤");
        echo "\n".colorss("green","👌🍱 Ambil Voucer");
        echo "\n".colorss("nevy","Intip Dulu  ");
        for($a=1;$a<=3;$a++)
{
        echo colorss("red","👀 ");
        sleep(20);
        }
        $code1 = requestedd('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD1908"}');
        $message = fetch_value12($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".colorss("green","👍🙏 Message: ".$message);
        goto gofood;
        }else{
        echo "\n".colorss("red","☠️☠️ Message: ".$message);
	    gofood:
        echo "\n".colorss("green","👌🍱 Ambil Voucer Lagi");
        echo "\n".colorss("nevy","Intip Dulu  ");
        for($a=1;$a<=3;$a++){
        echo colorss("red","👀 ");
        sleep(1);
        }
        $code1 = requestedd('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"AXEHARUMKANINDONESIA"}');
        $message = fetch_value12($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".colorss("green","👍🙏 Message: ".$message);
        }else{
        echo "\n".colorss("red","-] Message: ".$message);
        sleep(3);
}
        $cekvoucher = requestedd('/gopoints/v3/wallet/vouchers?limit=13&page=1', $token);
        $total = fetch_value12($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr23('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr23('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr23('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr23('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr23('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr23('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr23('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr23('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr23('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr23('"title":"','",',$cekvoucher,"10");
        $voucher11 = getStr23('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr23('"title":"','",',$cekvoucher,"12");
        $voucher13 = getStr23('"title":"','",',$cekvoucher,"13");
        echo "\n".colorss("green"," Total voucher ".$total." : ");
        echo "\n".colorss("yellow","                     1. ".$voucher1);
        echo "\n".colorss("purple","                     2. ".$voucher2);
        echo "\n".colorss("white","                     3. ".$voucher3);
        echo "\n".colorss("green","                     4. ".$voucher4);
        echo "\n".colorss("red","                     5. ".$voucher5);
        echo "\n".colorss("blue","                     6. ".$voucher6);
        echo "\n".colorss("yellow","                     7. ".$voucher7);
        echo "\n".colorss("nevy","                     8. ".$voucher8);
        echo "\n".colorss("green","                     9. ".$voucher9);
        echo "\n".colorss("purple","                     10. ".$voucher10);
		echo "\n".colorss("red","                     11. ".$voucher11);
        echo "\n".colorss("blue","                     12. ".$voucher12);
        echo "\n".colorss("white","                     13. ".$voucher13);
        echo"\n";
        $expired1 = getStr23('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr23('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr23('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr23('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr23('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr23('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr23('"expiry_date":"','"',$cekvoucher,'7');
        $expired8 = getStr23('"expiry_date":"','"',$cekvoucher,'8');
        $expired9 = getStr23('"expiry_date":"','"',$cekvoucher,'9');
        $expired10 = getStr23('"expiry_date":"','"',$cekvoucher,'10');
        $expired11 = getStr23('"expiry_date":"','"',$cekvoucher,'11');
        $expired12 = getStr23('"expiry_date":"','"',$cekvoucher,'12');
        $expired13 = getStr23('"expiry_date":"','"',$cekvoucher,'13');
       
       }
}

         echo "\n".color("white","SETPIN..!!!: y/n ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("white","▬▬▬▬▬▬▬▬▬▬▬▬▬▬ PIN MU = 147258 ▬▬▬▬▬▬▬▬▬▬▬▬")."\n";
         $data2 = '{"pin":"147258"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "Otp pin: ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("white","-] GAGAL!!!\n");
         }
