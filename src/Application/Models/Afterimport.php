<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.6.4 SourceGuardian (02.01.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
