<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace MikeRow\NanoPHP\NanoApi;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class AccountWeight extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return AccountWeight
     */
    public static function getRootAsAccountWeight(ByteBuffer $bb)
    {
        $obj = new AccountWeight();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return AccountWeight
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    public function getAccount()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startAccountWeight(FlatBufferBuilder $builder)
    {
        $builder->StartObject(1);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return AccountWeight
     */
    public static function createAccountWeight(FlatBufferBuilder $builder, $account)
    {
        $builder->startObject(1);
        self::addAccount($builder, $account);
        $o = $builder->endObject();
        $builder->required($o, 4);  // account
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addAccount(FlatBufferBuilder $builder, $account)
    {
        $builder->addOffsetX(0, $account, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endAccountWeight(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        $builder->required($o, 4);  // account
        return $o;
    }
}