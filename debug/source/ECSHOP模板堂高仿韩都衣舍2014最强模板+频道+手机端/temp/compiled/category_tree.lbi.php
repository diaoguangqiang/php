<div id="category_tree">
<div><img src="themes/hd/images/left_korea_top.gif"></div>
<div class="clearfix">
    <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
     <dl>
     <dt><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></dt>
     <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_50005000_1442210344');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_50005000_1442210344']):
?>
     <dd><a href="<?php echo $this->_var['child_0_50005000_1442210344']['url']; ?>"><?php echo htmlspecialchars($this->_var['child_0_50005000_1442210344']['name']); ?></a></dd>
       <?php $_from = $this->_var['child_0_50005000_1442210344']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer_0_50014600_1442210344');if (count($_from)):
    foreach ($_from AS $this->_var['childer_0_50014600_1442210344']):
?>
       <dd>&nbsp;&nbsp;<a href="<?php echo $this->_var['childer_0_50014600_1442210344']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer_0_50014600_1442210344']['name']); ?></a></dd>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       
       </dl>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      </div>
  </div>
  <div class="blank"></div>
  

