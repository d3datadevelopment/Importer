<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.6.6 SourceGuardian (25.05.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
