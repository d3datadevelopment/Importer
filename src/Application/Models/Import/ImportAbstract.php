<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.7.1 SourceGuardian (20.10.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3ADEF263EAAQAAAAXAAAABHAAAACABAAAAAAAAAD/wrLY9u+ycMdfj7qTBMC0GK50dB2ol5S++feNZYN144qSSRA/phMhVpjhti31Xc4MsTYUGZFDByb5yh4wG4AhlZhIKGul0kfHBgvVarspbFdamQBEVE8XfPlpXt1joKakIEgXyK1PKdl0XussuVAoQggAAAB4AgAAGtOkLvQEjMGhzwgnC7agynR1GfJCrTwMt1tB+1rYI4ql2Q/lqfHn0MxS9omp7FPy7h731u3HiwH7v4GRlywFUfdMxfRlPM2onGzwaFX58YsktRNw2HET0x37bMCbXCNBwsx/g1+Opk17p85K0xwHgEWXhIwE501+tEq2qh/xeNWpOWjYByoyV3JI2RutS6eUoF7bHEo6mKRFRwlEuP2gmRc7yEUYOlv8QvbPlpGWyyKLeL1p6qNdvBYiUm1ySjdj82k8qfQWylYWKRPJjuG1P12089fngREayV9z1RB49wsLW/Xw4EeDrzLbypa7aAKvxZ2Tbb80+LWwZGf1aqPG+P0pM/RkOz+fKQaTSIBeaTNWp+Mc6T8Z1CPNiOehOkqXTHF90VhxmsVh6VD4tUfwjiStu4Qcp3v5MqbNzkL8v6Np7L06x7zyREPw6QdyPbLpWqkc54mQIUvFxWToGmJftLQ0szJqBo0AEbw333L3lrbUCNQTeMjwXDaDRvOIKml7rwtDjlRD1SA6vy0kF4rvaEo3KmW3gNLWG6dmFlGsSAsI5AEnJWfTysYXcLsbFdmlmy+6fV36fOX8wy42jCVV5AKDqv/oldvhtF3iyBI/0oRlDB+/ADQqTQyS8oTjbENXY1ALuC33JgrtiO2zpaCKK2B7IbIqM0QGsK/RKgIeBFImwEV4bZbbgKT6ccJ28xCP7rkND0/KkqXoCzB5buw5rfb0yCEXvuCG0HhOZqzyZ4bF7ywMhDJ2/kRm6c9Gm3HWy1dhITFO+L5lTMYfa2STS+K0vXYurygEyZeia+261uQEK2Z1N58107PkT8E67ADl+2cJhkrImxJRAAAAaAIAACYuo9OObKlIl5ExLiyYjro1kgAYGCYvqlocBXhJmggYyeH0COOu5GUEgy8B7TOA9tMh6F1CPvlnNmA8lRGnm+QTy2l4Zfltac9I8tPpflatBZok26Z3eRgS1TJCZwWBlR3dgOMRCJMcKZA67ezHUApnslLfDyrXXVt991OLBh9YgYY7lhALBl7Qh47xetM+FygFA4/9drfHSZWNMwYNCtplUKaO+20Xv5LMhMXiQ5ODCOpX9mfcd+y8fbXKqVcWnBM2QVrlJ6fPos9Mk0z0B6Qp8VSblza8pSQn2bVvevI2EwAKtUrQNxyNaIuAhjNyAjRIsfurcVN055R01hSx/BRcwsLSq9TQ8HS/Rbh75avsQm5X6j1ENy7r52CmVYjCblGhm7/G/YUau+UvkV59do5wfzKFeRJsru1VuQjGuIIIMjzRsyF7B6Eaah9fVwgt699Y1sBu7LqH7w16DVjjJL/qXkb9n9CClpPo54aEsIxzHQnlxCP7g6CR3EZhy3TObY92Ff66ZKGOBoN+xOOy4cKjJ1xxJi5Z9QGXUs/Dno1EEnAVP5KaWa+PlOjyvB8XX7m49mbAng42laS5QIs2I3Mf/6aSyWdw4pwbjaBprprQBwTCNYbs/VQzOKyyDWeDDiHRvJRgVY1Vwlo5O6NjKTceiLFXbIRR/jxe08Q3UE6jdxWPT1RvZizb7UTRGDluzUKad9MPha92wGaxPEHayxeor8IELoAi4kdMVg8Rg4pijtbznzLH3J3FKA7xWRNXjgcqNNEngN5lOmgX+jlAKptjOISgnbIoJaFFxf1mLBtgXfGk1OX7HOQAAAAA');
