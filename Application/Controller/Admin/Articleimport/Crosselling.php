<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.0 SourceGuardian (25.01.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');