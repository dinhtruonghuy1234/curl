<?php
set_time_limit(0);
error_reporting(0);

        class freedom
{
        public $token;
        public $id;
        private function Submit($url,$fields){
$random_IP = "".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255);
$userAgents=array( 
"Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; chromeframe/11.0.696.57)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.1.76908; WOW64; en-US)",
            "Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))",
            "Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7",
"Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/20130326 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130401 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130331 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130330 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130401 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130328 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Opera/9.80 (X11; Linux i686; U; en-GB) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; en) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; Debian; pl) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; de) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; fi) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.2.15 Version/10.00",
"Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ru-ru) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ko-kr) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; it-it) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; HTC-P715a; en-ca) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us) AppleWebKit/534.1+ (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-au) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.9 Safari/536.5",
            "Mozilla/5.0 (Windows NT 6.0) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.36 Safari/536.5",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_0) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1062.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1062.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3"
);
$random = rand(0,count($userAgents)-1);
                $field_string = http_build_query($fields);
                $ch = curl_init();
                curl_setopt($ch,CURLOPT_URL,$url);
                curl_setopt($ch,CURLOPT_FOLLOWLOCATION,false);
curl_setopt($ch,CURLOPT_FRESH_CONNECT,true); 
curl_setopt($ch,CURLOPT_HTTPHEADER,array("REMOTE_ADDR: $random_IP", "HTTP_X_FORWARDED_FOR: $random_IP"));
curl_setopt($ch,CURLOPT_TCP_NODELAY,true);
curl_setopt($ch,CURLOPT_REFERER,$url);               
                curl_setopt($ch,CURLOPT_TIMEOUT,5);            
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_USERAGENT, $userAgents[$random]);
                curl_setopt($ch,CURLOPT_COOKIEFILE,'cook.txt');
                curl_setopt($ch,CURLOPT_COOKIEJAR,'cook.txt');
                curl_setopt($ch, CURLOPT_POST, count($field_string));
                curl_setopt($ch,CURLOPT_POSTFIELDS,$field_string);  
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                $body = curl_exec($ch);
                if(!curl_errno($ch)){
                $info = curl_getinfo($ch);
                $redir = $info['redirect_url'];
                $code = $info['http_code'];
                curl_close($ch);
                return $body." <br>Mã Phản Hồi = ".$code."";
                }
                unlink("cook.txt");
                curl_close($ch);
                }
private function show($site){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_USERAGENT, 'freedom');
    curl_setopt($ch, CURLOPT_TIMEOUT, 40);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cook.txt");
    curl_setopt($ch, CURLOPT_URL, $site);
    ob_start();
    return curl_exec ($ch);
    ob_end_clean();
    curl_close ($ch);
}

private function freedom1()
{
$login = "http://viplikepro.top/index.php";
$data =  array('token'=>$this->token,);
$this->Submit($login,$data);
$post = 'http://viplikepro.top/hethong_auto/';
$data = array("id_like" => $this->id,"sl_like"=>49,"submit_like"=>'Auto',);
echo $this->Submit($post,$data);     
}

private function freedom2()
				{
				$login = "https://vipfb.net/login.php?user=".$this->token;
				$this->Submit($login,null);
				$post = 'https://vipfb.net/fucklike.php';
				$data = array("fb_id" => $this->id,);
				echo $this->Submit($post,$data);    
				}

private function freedom3()
				{
				$login = "https://autolikepro.net/login.php?user=".$this->token;
				$this->Submit($login,null);
				$post = 'https://autolikepro.net/fucklike.php';
				$data = array("fb_id" => $this->id,);
				echo $this->Submit($post,$data);   
				}

private function freedom4()
{
$login = "http://vnlike.me/login.php";
$data =  array('submit'=>"", 'access_token'=>$this->token,);
$this->Submit($login,$data);
$log = 'http://vnlike.me/index.php?act=like';
$cap  = $this->Submit($log,null);
$post = 'http://vnlike.me/lenlike.php';
$data = array("access_token" => $this-token,"postid" => $this->id,"limit"=>100,"submit"=>"",);
echo $this->Submit($post,$data);     
}

private function freedom5()
{
$login = "https://auto.chuyhiep.net/login.php";
$data =  array('submit'=>"", 'access_token'=>$this->token, 'captcha'=>"",);
$this->Submit($login,$data);
$log = 'https://auto.chuyhiep.net/like/index.php';
$cap  = $this->Submit($log,null);
$post = 'https://auto.chuyhiep.net/like/index.php?autolike=thuchien';
$data = array("id" => $this->id,"sl"=>500,"like"=>"Auto Like",);
echo $this->Submit($post,$data);     
}

private function freedom7()
{
$login = "http://haylike.net/login.php?users=".$this->token;
$this->Submit($login,null);
$log = 'http://haylike.net/index.php';
$cap  = $this->Submit($log,null);
$log1 = 'http://haylike.net/rkzganteng.php?type=status';
$cap1  = $this->Submit($log1,null);
$post = 'http://haylike.net/rkzganteng.php?type=status';
$data = array("chiase" => "ok","lv"=>8,"id" => $this->id,"submit"=>"Submit",);
echo $this->Submit($post,$data);     
}

private function freedom12()
{
$login = "http://hacksub.com/dangnhap.php";
$data =  array('token'=>$this->token,);
$this->Submit($login,$data);
$log = 'http://hacksub.com/hack-like.php?type=custom';
$cap  = $this->Submit($log,null);
$post = 'http://hacksub.com/hack-like.php?type=custom';
$data = array("id" => $this->id,"submit"=>'Auto Like',);
echo $this->Submit($post,$data);
}

private function freedom13()
				{
				$login = "https://auto-bot.me/login.php";
				$data =  array('access_token'=>$this->token,'ref'=>'',);
				$this->Submit($login,$data);
				$lcap = 'https://auto-bot.me/index.php?act=Auto&id=like';
				$cap  = $this->Submit($lcap,null);			
				$post = 'https://auto-bot.me/modun/post_auto.php';
				$data = array("id" => $this->id,"limit"=>700,'auto'=>'like','rio'=>'rio',);
				echo $this->Submit($post,$data); 
				}
public function run()
        {
                ignore_user_abort(true);
                while (@ob_end_flush());      
                ob_implicit_flush(true);
$this->freedom2();
$this->freedom3();

        }
}
$limit = '100000';
$token = file_get_contents('http://botcamxuc.ga/gettoken3/iphone.php?u=EMAIL&p=PASS');
$uid = ''; //id url facebook
$feed=json_decode(file_get_contents('https://graph.fb.me/'.$uid.'/feed?access_token='.$token.'&limit=1'),true);
$idstt = $feed['data'][0]['id'];
$stt = explode("_", $idstt);
$idstt= $stt[1];
$sllike = $feed['data'][0]['likes']['count'];
echo $idstt;
if($sllike < $limit)
{
$try = new freedom;
$try->token = $token;
$try->id    = $idstt;
$try->run();
}
?>