<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace MikeRow\Bandano\NanoAPI;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class EventAck extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return EventAck
     */
    public static function getRootAsEventAck(ByteBuffer $bb)
    {
        $obj = new EventAck();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return EventAck
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startEventAck(FlatBufferBuilder $builder)
    {
        $builder->StartObject(0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return EventAck
     */
    public static function createEventAck(FlatBufferBuilder $builder)
    {
        $builder->startObject(0);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endEventAck(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}