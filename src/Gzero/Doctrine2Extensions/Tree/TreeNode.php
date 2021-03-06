<?php namespace Gzero\Doctrine2Extensions\Tree;

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Class TreeNode
 *
 * @package    Gzero\Doctrine2Extensions\Tree
 * @author     Adrian Skierniewski <adrian.skierniewski@gmail.com>
 * @copyright  Copyright (c) 2014, Adrian Skierniewski
 */
interface TreeNode {

    public function getId();

    public function setPath($path);

    public function getPath();

    public function getAncestorsIds();

    public function getChildrenPath();

    public function getLevel();

    public function getParent();

    public function getChildren();

    public function setAsRoot();

    public function setChildOf(TreeNode $node);

    public function setSiblingOf(TreeNode $node);

    public function calculatePath();

} 
