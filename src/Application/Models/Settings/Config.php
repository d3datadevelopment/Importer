<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.6.3 SourceGuardian (05.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
