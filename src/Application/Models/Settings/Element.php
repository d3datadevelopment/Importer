<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.7.1 SourceGuardian (20.10.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
