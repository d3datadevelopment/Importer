<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 6.0.0.1 SourceGuardian (20.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
