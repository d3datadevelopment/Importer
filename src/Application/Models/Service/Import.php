<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Importer @version 5.0.6.4 SourceGuardian (02.01.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3ABEF25B6AAQAAAAXAAAABHAAAACABAAAAAAAAAD/uA6KiJw6nHZPQvL9/Gm2LIxYYbCZc+QY66U/iN61JpfJXB3dcQxzuMExH2b7oF+R82ejKcH7cqyDqhk0ObraGO8kakGrX+hQX45xzgdu041WkaGZzTHBCH+hIgFD76OTTRUD7uSw1Xdk6oC4YsVQQQgAAAAQCgAAoFyCZbq1hIYYHCRYeyPLCluzAvNVYACtnHE+n9Gk+dhFFzTI9KtXV83EzWLVwDF+Yjiuf8sV1QzTSINba/SL3a2zJTPYA6DVEqkvg41RlcQyZH1rrQ1Cc5g2Q+B1f5euVA3mS+6vD4HM4wYF0Yrvfhi5CVsrPM5mM5QXbXPSnaaTphULtPnDLCJzm+hpkKlW8CgggvViq266aNhWFZQBhnsyFbxQhi80sTonBFTglvbaT5i9RqaBPcGJ5bujECinesPO9sd5q0zwTrW/eVM7a7eTxZsL1it2IGi0hmPJdvGOXsjmzY7/TK74jzdeWtOU9T0os3hxDXuBzqc4nyTQdyo+fVq6dydTMhtWW3UszY1Mg7jblsJeuZV/XXH7zSjuHqyzl/hN3AhtjdKtMoaBLrkh1IDz6zZyBQf8ZHBcwfKT+8pMHniA+mEhuzrtZeMzOYbhUU/pvozunaCGtJLv89XcZkVL2XcBbec94iLB1RXHmTzZjVp4KpohBfYoVnV90iTeRk+EoUh9rpGHV13gEh1kFFhMVRSW9Vr5PXfHic7oQUYUVrzuRaguyGnfIIxL1HCIvhYbM7P0HXGCL6jGs/rQuyUF/mPWRRRbqGiIR+If2c2V2KdLgG+gWmX9pPyakbZRnWcnyUXcSH+GvClIpB8zwMj7rUwzuxEe6qsl/lyXxJ4EOpftIuTkBR2l5AfV0SqIyP2jLDK4v8Gxc12ev/7UEt7h6Mrc2ul0KfWjQdGfaJJl1DTjF7FL3RujDcRfN+563xkBvMUmjr9R1H8P4/uRJr6vfCKLeOfRpCTimRkawFYXC34ucx+nT/Mbe3sAEWNCQ+/TgtIkykiSDYpafQp4We2lezcx3m7jiHQuvFfu5hXENoQPzDBVj8IUn8WvvL/NInR6nYQLu+XCmmeViOuyIjXskOzAUmjFX9pj427ieGKzydhoXbeu4KqUgJkX+vvdDKb/MpiLs4EsUNsgBLzT4YRZucrjKJZrepKAUgs6d1D08SBJT23ATDCJ55gw4FnaiB4OqNXNYnFJ3jjutvazxvsweh9zQkGYJdxphHJSbI/97pPfpo+wyFO5vvqXR3uexNTacf9OOGzXNV/lHq/giQLtuEshDDIapq0GDrH5IhcxK+M4cozfnNRX5AlP7RaGiqSpvcsNCl64HxyaTVbLKYDU8YbZ+7nnRa0h7myPO3HcltACrFZrK34ESjxvDCqeu/H2v9oVVm7oJoVizOfqz7M7Y9vOWoliZ4X5UIKLA8DBs1rJt5fpxfWlFyAAVClGH3dZ1+jQg4BWpnCiBK1UiotArO2zerogsy0fIp4zTpKULWBoUe1uHUljjxDfbiMq8LCeRw+oCzdUPn88G222rhPaCDlCYuyrLWp5bNHC5m8U+XJzCuEZt8KpM2BKJTm+I4KcJv/oza2WcIwvLoGk/+MIgrVaUtpAW9y1zTNrSyHduDUDpc0t5xj5XE4ACB9jhj2Mh4wjFAO8HRlsNcgrR6nAMz7qbEfXMLx5hcr5F31+vIdjTxDNccGjVt0IlHBzgxg3zm13fO+iN8HfM8XA9OHSWDeMHhmMNExbEmzzTYFHM57SAlCjNYppYs0kBBTAlq/9cWlikBw5Sj+iF5B+xzOU9Zby5mUHzsmT3ft4FsFWeiwy8OV49QGeSaPKOghcY51bMgDGivA/RcgOgCe4kl0jOL+RcicKzb394fNCSzLiFKJXZqaTsrvSq12F2DGPE1pl7/A+QNkjVJA/xlQhsFXGcuJg4x5GenAcoyA5p07jP4NFEfjp5TAxy5TtQ+mWCzszrcMkw27Dw88ZjS5citUvlZIoLulvabqrUfj3inJIn+qx0vaUiO7/j4JCvMw+jBE5tDZ1mTm6vg7iyml4n6qfqSY2dDsutIZVBOXBJS5t9MP7DwwW+suNRPobB4k9VPnIHeact0pbCS0ndeulhfss6Po7kTD9zIH9ONlqjnCb4yLSqAy6Sj1oDjGDjVLun5MyqivoYGF28dZpQ9T1PD3QG0JOWSYgq8CAJu1m7rbYlq/+z+AXAS3d+ZaIn7E34Y20nE5fvRTQ+ZPcCZazagoE3t4sZWSMFKHoadT7eVTGKLIZNlqoCTurRMedjHzArB33jm3T0YrkMtilkcmIqvnk4IUt/QGXtoMACqrAQ5AqbzPb5lpzqXTyv9BrI4kZINSSRPaTe4uDbLbO0wqILxyYmfvZU7q7ag66R2+g/6hdu0WS/7/8e7mH8Xah1S4QmoO5FRvbILHrhybCAuzeRbeADgSwEFWa6NDO6WRKP4rQ22Vy4dFYyRX1WtVoHg2gRNN/I/7xzouUW4ihEpksv+oqyYRYZffa6hYU6T9iHtL4Y4RgAvliHTCjsIPvQrZD+whCKUXVwbN5LtNS99fY9DwuSBS75rcxru2sOOEJXkppJc3qrTRQtxx7mD0AJJtqSCFEGTzTnVbqnfUwO4YCWDpDGonPtQKd5RIpq677aWKwTuKkKvubyMjh/xfhYmqx2JxtrnR76BzvBUs0t6hVV/miWIGlNhtRvMszdc3hZlAMySJ5IkOehbm+aKmemBWkzpI7ujPxJvoTaiA4NlIiG5PEHuh3sTPVyLrzU3nhX+n7HqZAFhZSlDfAFJAxY8G2nRG5JjjOKgHdwB2nJOksUmn1U0IH+llhteY19fSsegl0vbgdS+Ulfa7R7H7acEyoxDmCr1YmkS22pLP0NiTPIpmeHJQ3jiJ4nzIyOoUC2WikMBfPz25c+IqFnSYHtiTpp3Pb8T5D/9Xwoz36Ca1LCnVQBO4P60QaxFuT9rgR4Jh6ifry/3zYppud8jXDj6ZxYORFHNeQCGGWuu4i8u5wIVRItY7c454GGWIWkM3QrZXXXda4uSUrNzF+3kDvJcoQsct74ldFu2IbQYKJH5d8icgllSvNFp9s7gd0qmd+52Tke0JJ8pFHVKe5DRbdxxqbNQsaHBRQQ5fdpZA7jlAiGcNGdlKTguz9Gk2KvGlQST4VWmf96UVPZ9WhJNJEllLLf9fCeSkTVRL4BglsuuiuoksI501Ji8BkXz8yCIO4am1FmyJ7+q+HD69fNvK8ftNTX7oUncAtL1/yk1DBBnz7hXJaH5ODoJU9drOVfy9KPawm37HMrcnaEYpWs9B6A3wmITsaKwAhdHTNsjYdKw6Ua++sKqwLOJEKHRzJu3SBxUMpOkzmcJRKWtzSaVBdmNTwTjvGa/msFttydXajnre4yUXAST2jNRQuQed7LE3E+lTz1mnw/yVPAnCgeDwlx5j/xojrfGZu/EHXKyOufU2u1cwWaVVw1km0D0t/KJM85UKN+07D3GTYGojlmXEJ1yAVoeRB9jcyeWt17twXHkZGb0tBbpShggiW8k+mcLvQifsKlkLKvoJfEzEhellXkrQqXYXFNmzLvWFRKsu6jkl9xfm/sGgBDLCnsWAYpyBRAAAAAAoAAJoK3T6PYBKDLfa9ITbFbST6k3KG/xHo/0y8YM2cTVhPtcRA/HEqLkUR+7i4670tLa4JZ9UFHIFRi3WpN4eppAKzTg5VNhp7djfgfvDzsKRjIiFWqZuL0dENyMS4A/PI/Y36JpdGr9Xf4BXhJ2Yq6AR5NhkMMcLOA8YM6QDF3+ouDgZS8kR5YasLMI9GpYw4rA7B6xus8nzu0BwBYV18JJJYCJQHRj2D7qlNSNdP6S1SoAaUZ2zF/mqMnGDQjBnI3UtB23N5RNbPIKlRZ4gINlnCWHuCXI+xkysb3INQDc6p1VnQQipcQsZqTAnt76/IE7Qe4Xs6csHhSQ4x5PHSafbu9GL/ffMqkLy0ZIW49l907QUIQWluFGPI3Qb8LFQ8ZCsQNE06vaS03dEDYgviD7bWAn6Mrq2VfStlnIDGqhoSST0tGAbwaVZMS8E5hRUV4pxdOEfSMNzhKzSTENZ6OmSJe0RyR6JQ+ZZ2/mw4Y3mObRzJX5pya1O66kSXkCcN8iLmCEzeLOT6Qi/8ptXmoueqIiIJ/ig2vvWKoPoFk6UDEu2cF+pvq44EnboNp7hdvil2YIidDtY17su0gui7zOPmdi7nl8gYdDNR889qMl0t4OeqaHaqwjZw24neurF2+I62m1+p/XrbyNh4TLLpXYWacDw6z5xbukz4h/fhtuUDUg6OcOSY5MS0YWTHLAveu15PWvayhcJ937si8xC9eNmsSpxklsoMOCYrBqDaDu5PAsX0AeqTSNnAhYb1Mq65t2fkR6pxu2+kb3DoaKBG6fnsooWoBaoIe/7YLtrHAWzbKMCOWVMVIGVby8gTlVhL22XJ3Gs2A2sSW8XqOm0crN99MYl93EVjESNaS/QEjqE7/8aydCRpBUnChdCT2kbfVBrBsentA5zGyVpucoDXoEy53kktu4wG4rggIdF4gbR/hD90ee731+/dR+huPT/blmtKOnCPr2B5xucYxjZRM3MqDD7RR1b4A7694nNYj8xbsHywJUnj6I9zLC20FKJsKukId3r+m176TpXNtGcTZBgR98AqiUid4bADoU1l7IRJynxrz7vHZRGp5yafdFOt2y4ecUmxLZ98RMffCYMddUX+Mg4gXOCx5nFzbf7V5OnLOtO7x7+7t9wrKllEpKGIpsj8FMnsQl1bGHh3eFrs5ukqLxpVi09zRGg/K6WONWEjoIf4WFI/9iqjzkOdWBiNTr+gW/ua/sjEkYXQ5YzPFwC7XBz9Nt4Xz3u1+YG1/zqG4jG1Atb1rFhF7z4Qec1pVixxalpC6BYJ9X6aSa+faM46pCq4Zo6P79NM+Ck0zeesZK3ac+3gzvx2+kVGC5dV106qBXtZJsi5QR5868Dg9w3I3T62sD+we/xvNJnGliSfb+iGIaF09FnskKaQH/gypEV+Gfjcp9caQDPDS/+v1d2N3sLAXRTq9jyH9yjJIzPjZUi/3KudyDsQLepZpFmixUGpdfu7mI7GKRNLlHl+8G0c5KFN1uUb/AYRCx877IdL1rLZchGe+qwJbHpYKhfIh1FrLnlghxkhvPLTR63LXmxtocLdgGoCaX30Qlij66jtSVz73Bh2cojxp1AoaUNqhH+NAE4F/evk7QnXrQJQc4IA3AY2JSfrHVoYaijhcR3kBp4eLpGxLVWZJduEYIyFzAq32D/37E0ZXmulh6uVPDcu3Fw/dlwK5KVwCz1sab6i6REa6zgw70XWrnvl4Kfa4MizuCP7mxoP67y64qp9C3iGVTI0VYFx3WKArwPJaFw8/fvv6e0y0ChGvVVJWP/zv9SqgcogQVrXL+Abbm2CPd2AcfycSq5dU5M7MdBfSK/TshdK8jvobyEcOFqA0W/qxxAnTg4boBuCdJUO/AQ+9nlP0gIOGeFKdyUNJqHYHpHA6SZc8Ja8YiDt3pMPripofplKVYZjXBseI2KvTFsXQ+RGysecJdQa0FIcXfL47dCPeVloB2ShEe/q1pOAMkpX27Mnh/6a4vq1Y5HVP2lCQbJENLc0UIBDbbf62hPSa3TI0ZoupuuqIIwgynhxl8HDDoa3haPdZsNyTb9IbIieceqKS8GXQ0VMwL9MirTXmF9YrwnqdtAGIHcv+GJjKxJyZVHHrwD5YlZVlKGg0RmctpHNjVAOO4KCT13/A5aT8qXTeRyPkMedd4Pp0LCRvswwzdYopTJU6OD+yUZ8EctQxIUsD/CU5rZCO3WmaM8IGV55xj+TUtMYGbbpcWclt67LNHDa7VVvFmqX4MCDKz9zg+VV7XUkEjo/R1ifrCaNrk+b86atzR6o1ilG5hf43DkSFKtb3k6l1zTKJzlVjVfoLWaL3Pg6jbpvXKk9t3x1Fn8mWuKpKqAFsAxfBnnt3mWLqtSgxrUoPx+WNKjC4SCf0TeMqdRyTUKCTaTijWslalg/nt5A07S0To0niA0tjd2oCixfAewais5eI6oIBnhC13TG9F8M4Bm1KB7oV/354towdcT/hXdpDyFBCh2Qx+wk4VUGxjwRGFLIwQCV5gSy2NaLTuAt40caKJCeVN7bbnG4R/kS1b26GybkKQx9WyXJ5KAtUQGxu4A78kKOL7HZS44RMj9C2jLoRL73sMkRZxStKc5ZdxTObMk7kCnact9K6R4usMZmYUwnK8/xYZuMGGMQnj6TtdAf+zrRWhTr5GydmlUGa6C/dxpDm2yDprlC5NymRY+MWUElASFlt2+cjwRUREu9Nw00E5JKxdsx+0FmA4yIvl2rVZ9/oBOZYFAVyf9vjfl9xYSjpA+PuDIODqN1UKcjDGRBRyeBhp9VBYdqQkDcvUsMIH9fYwVPW1kgZSTVrVXTeuH5UcxClwosdF7fXYgYFhWAWqcmFDcrKfVBEsnm3ecN+L4EmFnzzuAznneyrLUFZ7w7wVvlVV9yxoq5bTGh8CewpFxHHO9FZFl3oIDtcBHsPL6y3AipIUbCJd5JTUvpJqZKljGLCjwk3AL+hf4vgeBj69WiNufjGmLii+I+PDqqdJwpr/T66Vs+dxIzzdEuwzdq1DM55tI4iOAaBXioA4Yw8QoTi45NmR3zHg4CQ8WPwPg2S0LCVfNgClHn40lL6RbtR6quwrsOVfSWg3cR0ZS9eSwDT77ixDpIXKrbSKTq801YyuEhSBvMdspzQvWFpGGEXXL7L4sFY4LciuXiZuDfzg1rVkclA1M/7yUYPCkXWcLcnvQf81ikUraScVj+WTdg91pshqXqA90GrRXAZKihRZmF+9MD+rOvSSmG/AjEyRpU0+m13RmGBQyXSR/quDsddXZyvyA2gQu6RqIR9zsGLt1vyZAYtJw1jqzAKoC6IDq0ddCCtyW1dQ+P+3iLZ3X+7fnQpLAXn2OaeDriejy08O3ZbLKXRFQ0HBYUFyT9H0ao+2MUp83JFrktNRmWTSsGliBFEiwrdfAAAAAA');
