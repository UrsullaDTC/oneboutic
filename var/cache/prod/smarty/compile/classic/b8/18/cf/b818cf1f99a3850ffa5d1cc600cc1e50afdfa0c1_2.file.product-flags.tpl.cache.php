<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-09 07:56:39
  from '/home/ns568017/public_html/oneboutic/themes/classic/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_606fec972a91c3_21059519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b818cf1f99a3850ffa5d1cc600cc1e50afdfa0c1' => 
    array (
      0 => '/home/ns568017/public_html/oneboutic/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1617776726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606fec972a91c3_21059519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '222198096606fec972a71a4_89497453';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1861253925606fec972a7d52_19678678', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_1861253925606fec972a7d52_19678678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_1861253925606fec972a7d52_19678678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
