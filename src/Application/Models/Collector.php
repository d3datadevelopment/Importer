<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.7.0 SourceGuardian (31.08.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
