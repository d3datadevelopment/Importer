<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.7.0 SourceGuardian (31.08.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3ABEF272EAAQAAAAXAAAABHAAAACABAAAAAAAAAD/NOIj8oUTVJ1JuyxhnnZlz2CspSeOVO4CJJJXCq6b+sTPKz4DW1pcNY+NNEXM3jX+bdamOBwtD80+zrdUzbUyOBSv1eeXrOZiCg0GfcV1RE5RrHW87s7hj5ym2ky1vDweWrYQEPIznAMR7aDL2+kA1ggAAAB4AgAAE+rUm7cFQCG24PbShQDkFRmQNr7z8aDOno33hLzhC5xheFr0vfHVNBBWFsBXpCZE88eKddSgfeSxY1usL86mixBM/KKPpNHUi9x7F0irEYd/VpF2jeGIgnuOwi/6dw4HGe2XDFLBksEoZF1ODV8TL4/eCHKPRoyamKnltWNvZNKrIvRvjY8CCnmltGsO6wpUnf8+twrS7t29InYmpW+8WMh6WJIHpPDWjXfqNLwdtF88C/JT996u41clRqpsjG/fw0imkeDbIEbu3Jdco5dmgg8WjKQdy2hVOGRs/dtcSbeJxtJOZ23of5mF0cNk0bjqjvOoydPl62fUKomPyMEWf+Y6a2yRleHnftlfjpk2XFbzORk+AR3i/NfPK0LX/1zJ6JgfUFl4xN0jnRcnZ2GYpwhDVbJ1NaQPtQqrxnVjGfE0m6IGrsDH8zHEWFGmtZhUZ553pbyBYc5/TxBJPAS+URTx/PWb68E8SnERgHJerrTLiZ3Kih31CCJGPpSnvwuzXcv00gWNvqHAPNM5UYDNbjyiDLBArIPmAooIaarqLjSpYWt1uZTrd7sg5qCyL4xrJcT4QehJHx125Lz+CuPyor4RZTapi7XSjZAULWVLBUp/3xymkQn4wlmyzm1hQqUw1PrqRTfOG1KEoxfgFht7JVQRO6vCtyTKsVefvOX0JKkOw/guegUl9/gNlku6Z2tHpsPSAfS4vWdVKHp0vyQQ3YJVNFR0L/bdErUo5J68DsqhAF2FToqCNwI9+krrnFJqrGN7WaIKYGslY23+w3JPP6pGy8jZSx779wg8l85yKskaSR8L1oosnGCT4O3UoxuPhoy4rJrB6CxRAAAAcAIAAAWj5AKTN78SV1QvcatvWsQ0PuQLjLZbFK5IQVrStSJK9Du4tyQ1aAX762UBw1mnuwDuL6IypIkMxrzJOxMcAk3SVkxgvH0LE/91el0aXb0vvq/t4DA+ncsEfVRZ9yxRp3DqwURDwsriZwwrBOzYy/sj8V0CDHSIf+FxVGpJ5kJ1++zYNm6OzIo6vPUesz/Io1SM05tcikrLrC8abxzj25UzLkrihj1hc258uAhVDRpY1lQUHk7OXsMnbfDvIK6xOpWyXuC0S7BRIpwkaUuQkUyse2EEsDTHdfODbIA22RFpzVBR97p1CdPHKwtWc7acjjsr7vv9Pg8GfHNH6bcoKYXomOqKs08D7DHWy5q+dMRS4h2FxGPdeDCGUZhudVCdhXNMLFyYdj3rYKOhSNimx/g8YeP8EDZwDlcMxIcuL6l75Uwa9WMeESexBWZ5F4Fd6hjLG9qK03y5hcA1qA/rAGNBivvv07KHd2AdXAXeWwnHIj3oq8SAs04BqrlT1gOCrmwnkyVfJvH4G/bIz/YqE6QbPmoANyYzjVDuvXdZkpeAHayY8lkFmGCMd6k8h0wP6BTgeBweDNbOBXfcbGKJuelJruo81r3lgr40LNyCQLtsh9ffyVLZp9XFQlhUcthTC7LkAS8zKKFb4aCsn9l022hvAqWlwpuWmeM4AJ1e5cKkUwh0JQS4U2iXMQm0lWv4So1/+uOM6YFZNDsKziLkxpkvrfBO5lB2aX9qObdEpV+7Byl+a4trEURDG5SUW2oFqtOtSmKyPIbA0Ky/2+7Kf40aPUpkaQubTsnxY5RvhYt/gbl7d9Ma1Tf7/7mYvvoDQgAAAAA=');
