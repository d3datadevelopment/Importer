<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.6.4 SourceGuardian (02.01.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
