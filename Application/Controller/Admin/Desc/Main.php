<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
