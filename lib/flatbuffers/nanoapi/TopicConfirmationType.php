<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace nanoapi;

class TopicConfirmationType
{
    const active_quorum = 0;
    const active_confirmation_height = 1;
    const inactive = 2;

    private static $names = array(
        TopicConfirmationType::active_quorum=>"active_quorum",
        TopicConfirmationType::active_confirmation_height=>"active_confirmation_height",
        TopicConfirmationType::inactive=>"inactive",
    );

    public static function Name($e)
    {
        if (!isset(self::$names[$e])) {
            throw new \Exception();
        }
        return self::$names[$e];
    }
}
