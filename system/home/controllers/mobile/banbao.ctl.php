<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */
class Ctl_Mobile_Banbao extends Ctl_Mobile {
    
    public function index($page=1) {
    	K::M('helper/seo')->init('mlight',array());
        $this->tmpl = 'mobile/banbao.html';
    }
    
}