<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.0 SourceGuardian (25.01.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');