<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
