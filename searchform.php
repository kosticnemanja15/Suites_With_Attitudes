<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
    <div><input type="text" size="18" name="s" id="s" value="Pretraži" onfocus="if (this.value === this.defaultValue)
                this.value = '';" onblur="if (this.value == '')
                            this.value = this.defaultValue;"/>
    </div>
</form>