<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.0 SourceGuardian (25.01.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');