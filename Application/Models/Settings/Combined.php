<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.0 SourceGuardian (25.01.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
