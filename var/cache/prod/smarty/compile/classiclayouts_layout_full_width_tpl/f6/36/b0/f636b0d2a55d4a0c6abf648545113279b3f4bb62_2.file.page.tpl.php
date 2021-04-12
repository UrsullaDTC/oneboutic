<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-09 07:56:39
  from '/home/ns568017/public_html/oneboutic/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_606fec972ebbd9_61919617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f636b0d2a55d4a0c6abf648545113279b3f4bb62' => 
    array (
      0 => '/home/ns568017/public_html/oneboutic/themes/classic/templates/page.tpl',
      1 => 1617776726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606fec972ebbd9_61919617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_622241975606fec972e7a13_76120651', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1241596248606fec972e8042_82533601 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1167239060606fec972e7ce1_01609567 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1241596248606fec972e8042_82533601', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_51709643606fec972ea960_46305159 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1563969874606fec972ead38_09342033 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_821154277606fec972ea697_61285844 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51709643606fec972ea960_46305159', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1563969874606fec972ead38_09342033', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1639842777606fec972eb548_41370687 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1031588830606fec972eb2d1_18557864 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1639842777606fec972eb548_41370687', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_622241975606fec972e7a13_76120651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_622241975606fec972e7a13_76120651',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1167239060606fec972e7ce1_01609567',
  ),
  'page_title' => 
  array (
    0 => 'Block_1241596248606fec972e8042_82533601',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_821154277606fec972ea697_61285844',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_51709643606fec972ea960_46305159',
  ),
  'page_content' => 
  array (
    0 => 'Block_1563969874606fec972ead38_09342033',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1031588830606fec972eb2d1_18557864',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1639842777606fec972eb548_41370687',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1167239060606fec972e7ce1_01609567', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_821154277606fec972ea697_61285844', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1031588830606fec972eb2d1_18557864', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
