<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
