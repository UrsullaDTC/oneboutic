<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-09 07:56:39
  from '/home/ns568017/public_html/oneboutic/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_606fec972e5a39_48550902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52fe4f6dba9e911f4fc0656b50e2c550fb06e4bb' => 
    array (
      0 => '/home/ns568017/public_html/oneboutic/themes/classic/templates/index.tpl',
      1 => 1617776726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606fec972e5a39_48550902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1953752501606fec972e46c3_57046946', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_2102212975606fec972e49b7_99243628 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1999572302606fec972e5053_15102784 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_744955330606fec972e4de8_71624675 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1999572302606fec972e5053_15102784', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1953752501606fec972e46c3_57046946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1953752501606fec972e46c3_57046946',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2102212975606fec972e49b7_99243628',
  ),
  'page_content' => 
  array (
    0 => 'Block_744955330606fec972e4de8_71624675',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1999572302606fec972e5053_15102784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2102212975606fec972e49b7_99243628', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_744955330606fec972e4de8_71624675', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
