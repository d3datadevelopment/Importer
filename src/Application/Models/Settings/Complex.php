<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.7.0 SourceGuardian (31.08.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
